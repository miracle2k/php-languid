<?php
/******************************************************************************
A statistical language guesser.    
    
Written by Eugen Neagoe via RAC (http://rentacoder.com). 
Based on Perl Language::Guess by Maciej Ceglowski (http://languid.cantbedone.org/)
Copyright (c) 2006-2008 by Michael Elsdoerfer.  

This library is free software; you can redistribute it and/or
modify it under the terms of the GNU Library General Public
License as published by the Free Software Foundation; either
version 2 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
Library General Public License for more details.

You should have received a copy of the GNU Library General Public
License along with this library; if not, write to the Free
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
    
******************************************************************************/

require_once('Unicode.php');

mb_internal_encoding("UTF-8");
mb_regex_encoding('UTF-8');

global $VERSION, $MIN_LENGTH, $MAX, $BASIC_LATIN, $EXOTIC_LATIN, $ACCENTED_LATIN, $ALL_LATIN, $CYRILLIC, $ARABIC, $DEVANAGARI, $SINGLETONS, $cache;

$cache = array();
$VERSION = '0.03';
$MIN_LENGTH = 20;

$MAX = 300;

$BASIC_LATIN = array('English', 'cebuano', 'hausa', 'somali', 'pig_latin', 'klingon', 'indonesian', 'hawaiian', 'welsh', 'latin', 'swahili', 'basque');
$EXOTIC_LATIN = array('Czech', 'Polish', 'Croatian', 'Romanian', 'Slovak', 'Slovene', 'Turkish', 'Hungarian', 'Azeri', 'Lithuanian', 'Estonian', 'Esperanto');
$ACCENTED_LATIN = array_merge(array('Albanian', 'catalan', 'Spanish', 'French', 'German', 'Dutch', 'Italian', 'Danish', 'Icelandic', 'Norwegian', 'Swedish', 'Finnish', 'Latvian', 'Portuguese'), $EXOTIC_LATIN);

$ALL_LATIN = array_merge($BASIC_LATIN, $EXOTIC_LATIN, $ACCENTED_LATIN);

$CYRILLIC   = array('Russian', 'Ukrainian', 'Belarussian', 'Kazakh', 'Uzbek', 'Mongolian', 'Serbian', 'Macedonian', 'Bulgarian', 'Kyrgyz');
$ARABIC     = array('Arabic', 'Farsi', 'Jawi', 'Kurdish', 'Pashto', 'Sindhi', 'Urdu');
$DEVANAGARI = array('Bhojpuri', 'Bihari', 'Hindi', 'Kashmiri', 'Konkani', 'Marathi', 'Nepali','Sanskrit');

$SINGLETONS  = array('Armenian', 'Hebrew', 'Bengali', 'Gurumkhi', 'Greek', 'Gujarati', 'Oriya',	'Tamil', 'Telugu', 'Kannada', 'Malayalam', 'Sinhala', 'Thai', 'Lao', 'Tibetan',	'Burmese', 'Georgian', 'Mongolian');

class Guess {

//constructor
function Guess($params) {

        if (!is_array($params))
                echo "PARAMS is not an array\n";
        if (!array_key_exists('modeldir', $params))
                exit("Must provide a model directory\n");
        if (!is_dir($params['modeldir']))
                exit("Model directory " . $params['modeldir'] ." does not exist\n");

        $this->modeldir = $params['modeldir'];

}

function guess_string($string) {

	// assume the $string is already utf8
	if(!isset($this->$models))
		$this->load_models();
	$runs = $this->find_runs($string);

	$langs = array();
	$scripts = array();

        foreach ($runs as $run) {
                $key = array_values($run);
		$scripts[$key[0]]++;
	}

	/* returns array of hashes in the form
	 [ { name => NAME, score => SCORE }]*/

	return $this->identify($string, $scripts);

}

function simple_guess($string) {

	$got = $this->guess_string($string);

	return $got[0]['name'];
}


function load_models() {

	$models = array();
	if(!$dh = opendir ($this->modeldir))
                exit("Unable to open dir\n");

        while (false !== ($f = readdir($dh))) {

                if (!preg_match("/\.train$/", $f))
                        continue;
                preg_match( "/(.*)\./", $f, $name);
		$path = $this->{modeldir} . "/" . $f; // change to to backslash on windows
		$model = array();
		$lines = array();
		if (!($lines = file($path)))
			exit("Failed to open file " . $path . "\n");
		foreach ($lines as $line) {
			$line = rtrim($line, "\r\n");
            		mb_ereg('(.{3})\s+(.*)', $line, $matches);
			if (!isset($matches[1]))
				continue;
			$model[$matches[1]] = $matches[2];
		}
		$models[$name[1]] = $model;

	}

	$this->models = $models;

}

function find_runs($raw) {

        $chars = array();
        for ($i = 0; $i < mb_strlen($raw); $i++) {
                array_push($chars, mb_substr($raw, $i, 1));
        }


	$prev = '';
	$cr = array();
	$runs = array();
	$run_types = array();
	$current_run = -1;

        foreach ($chars as $c)	{

 		$is_alph = mb_ereg_match('\w', $c);
		$inf = $this->get_charinfo($c);
		if ($is_alph and !($inf->block() == $prev)) {
			$prev = $inf->block();
			$cr = array();
			$current_run++;
			$run_types[$current_run] = $prev;
		}
		array_push($cr, $c);
                if ($current_run > -1)
        		$runs[$current_run] = $runs[$current_run] . $c;
	}

	list($newruns, $newtypes) = $this->reconcile_latin($runs, $run_types);

	$counter =0;
	$result = array();
        foreach ($newruns as $r) {
		array_push($result, array($r => $newtypes[$counter]));
		$counter++;
	}

	return $result;

}

function get_charinfo($char) {


	global $cache;
	if (isset($cache[$char]))
		return $cache[$char];
	$inf = new Unicode_Character($this->uniord($char));
	$cache[$char] = $inf;

        return $inf;

}

function uniord($c) {

	$ud = 0;
	if (ord($c{0}) >= 0 && ord($c{0}) <= 127)
		$ud = ord($c{0});
	if (ord($c{0}) >= 192 && ord($c{0}) <= 223)
		$ud = (ord($c{0})-192)*64 + (ord($c{1})-128);
	if (ord($c{0}) >= 224 && ord($c{0}) <= 239)
		$ud = (ord($c{0})-224)*4096 + (ord($c{1})-128)*64 + (ord($c{2})-128);
	if (ord($c{0}) >= 240 && ord($c{0}) <= 247)
		$ud = (ord($c{0})-240)*262144 + (ord($c{1})-128)*4096 + (ord($c{2})-128)*64 + (ord($c{3})-128);
	if (ord($c{0}) >= 248 && ord($c{0}) <= 251)
		$ud = (ord($c{0})-248)*16777216 + (ord($c{1})-128)*262144 + (ord($c{2})-128)*4096 + (ord($c{3})-128)*64 + (ord($c{4})-128);
	if (ord($c{0}) >= 252 && ord($c{0}) <= 253)
		$ud = (ord($c{0})-252)*1073741824 + (ord($c{1})-128)*16777216 + (ord($c{2})-128)*262144 + (ord($c{3})-128)*4096 + (ord($c{4})-128)*64 + (ord($c{5})-128);
	if (ord($c{0}) >= 254 && ord($c{0}) <= 255) //error
		$ud = false;
	return $ud;

}

function reconcile_latin($runs, $types) {

	$new_runs = array();
        $new_types = array();
	$last_type = '';

	$upgrade = '';
        if ($this->has_supplemental_latin($types))
        	$upgrade = 'Accented Latin';
        if ($this->has_extended_latin($types))
        	$upgrade = 'Exotic Latin';
        if ($this->has_latin_extended_additional($types))
        	$upgrade = 'Superfreak Latin';
        if ($upgrade == '')
        	return array($runs, $types);
	$run_count = -1;

	foreach ($runs as $r) {

		$type = array_shift($types);
                if (preg_match('/Latin/', $type))
		        $type = $upgrade;
                if ($type != $last_type) {
        		$run_count++;
		}
		if (!is_array($new_runs[$run_count])) {
			$new_runs[$run_count] = ($r);
		} else {
			array_push ($new_runs[$run_count], $r);
		}
		$new_types[$run_count] = $type;
		$last_type = $type;

	}

	return array($new_runs, $new_types);

}



function has_extended_latin($types) {

        $count = 0;
        foreach ($types as $type) {
                if ($type == 'Latin Extended-A')
                        $count++;
        }
	return $count;
}

function has_supplemental_latin($types) {

        $count = 0;
        foreach ($types as $type) {
                if ($type == 'Latin-1 Supplement')
                        $count++;
        }

}

function has_latin_extended_additional($types) {

        $count = 0;
        foreach ($types as $type) {
                if ($type == 'Latin Extended Additional')
                        $count++;
        }

}


function identify($sample, $scripts) {

        $retarray = array();

	if (mb_strlen($sample) < 3) {
                array_push($retarray, array('name' => 'too short', 'score' => 1));
		return $retarray;
        }
        if (mb_eregi("/bork bork bork/", $sample)) {
		array_push($retarray, array('name' => 'Swedish Chef', 'score' => 1));
                return $retarray;
        }
	if (mb_eregi("/waka waka waka/", $sample)) {
		array_push($retarray, array('name' => 'Pacman', 'score' => 1));
                return $retarray;
        }

	// Check for Korean
	if (array_key_exists ('Hangul Syllables', $scripts) or
		 array_key_exists ('Hangul Jamo', $scripts) or
		 array_key_exists ('Hangul Compatibility Jamo', $scripts) or
		 array_key_exists ('Hangul', $scripts)) {
		array_push($retarray, array('name' =>'korean', 'score' => 1));
                return $retarray;
	}
	if (array_key_exists ('Greek and Coptic', $scripts)) {
		array_push($retarray, array('name' =>'greek','score' => 1));
                return $retarray;
	}

	if (array_key_exists ('Katakana', $scripts) or
		 array_key_exists ('Hiragana', $scripts) or
		 array_key_exists ('Katakana Phonetic Extensions', $scripts)) {
		array_push($retarray, array('name' =>'japanese', 'score' => 1));
                return $retarray;
	}

	if (array_key_exists ('CJK Unified Ideographs', $scripts) or
		 array_key_exists ('Bopomofo', $scripts) or
		 array_key_exists ('Bopomofo Extended', $scripts) or
		 array_key_exists ('KangXi Radicals', $scripts) or
		 array_key_exists ('Arabic Presentation Forms-A', $scripts)) {
		array_push($retarray, array('name' => 'chinese', 'score' => 1));
                return $retarray;
	}

global $CYRILLIC;
	if (array_key_exists ('Cyrillic', $scripts)) {
		return $this->check($sample, $CYRILLIC);
	}

global $ARABIC;
	if (array_key_exists ('Arabic', $scripts) or
		 array_key_exists ('Arabic Presentation Forms-A', $scripts) or
		 array_key_exists ('Arabic Presentation Forms-B', $scripts)) {
		 return $this->check( $sample, $ARABIC );
	}

global $DEVANAGARI;
	if (array_key_exists ('Devanagari', $scripts)) {
		return $this->check( $sample, $DEVANAGARI );
	}

global $SINGLETONS;
	# Try languages with unique scripts
	foreach ($SINGLETONS as $s) {
		if (array_key_exists ($s, $scripts)) {
			array_push($retarray, array( 'name' => strtolower($s), 'score' => 1));
                        return $retarray;
                }
	}

	if (array_key_exists ('Superfreak Latin', $scripts)) {
		array_push($retarray, array('name' => 'vietnamese', 'score' => 1));
                return $retarray;
	}

global $EXOTIC_LATIN;
	if (array_key_exists ('Exotic Latin', $scripts)) {
		return $this->check( $sample, $EXOTIC_LATIN );
	}

global $ACCENTED_LATIN;
	if (array_key_exists ('Accented Latin', $scripts)) {
		return $this->check( $sample, $ACCENTED_LATIN );
	}

global $ALL_LATIN;
	if (array_key_exists ('Basic Latin', $scripts)) {
		return $this->check( $sample, $ALL_LATIN );
	}

	array_push($retarray, array('name' => '\'unknown script:\' '. join(', ', array_keys ($scripts)). '\'', 'score' => 1));
        return $retarray;

}


function check($raw, $langs) {

        global $MIN_LENGTH;

	$sample = $this->__normalize($raw);
        if (mb_strlen($sample) < $MIN_LENGTH) {
                $retarray = array();
                array_push($retarray, array('name' => 'too short', 'score' => 1));
                return $retarray;
        }

	$mod = $this->__make_model($sample);

	$num_tri = count(array_keys($mod));

	$scores = array();

	foreach ($langs as $key) {

		$l = mb_strtolower($key);
		if (!array_key_exists($l, $this->models))
                        continue;
		$score = $this->__distance( $mod, $this->models[$l]);
		$scores[$l] = $score;

	}

	$sorted = $scores;
	asort($sorted);

	$out = array();

	if($num_tri == 0) $num_tri = 1;

	foreach (array_keys($sorted) as $s) {
	        $norm = $scores[$s]/$num_tri;
	        array_push($out, array('name' => $s , 'score' => intval($norm)));
	}


        $checkr = array_splice($out, 0, 4);

	return $checkr;

}


function __distance($m1, $m2) {

        global $MAX;
	$dist = 0;
	foreach (array_keys($m1) as $k) {
		$dist +=
		( isset ($m2[$k]) ?
		  abs( $m2[$k] - $m1[$k] ) :
		  $MAX
		);
	}

	return $dist;
}

function __normalize($string) {

/*      echo ("__normalize called\n");
        echo $string . "\n";

        // transform the string into Unicode
        $string = mb_convert_encoding($string,"UTF-8","auto");
        echo "converted to " . $string . "\n";
*/

	$string = mb_ereg_replace("\W+", " ", $string);
	$string = mb_ereg_replace("\s+", " ", $string);

	return $string;

}

function __make_model($raw) {

	$trigrams = array(); //hash
	$content = $this->__normalize($raw);

	for ( $i = 0; $i < mb_strlen($content) - 2; $i++ ) {
		$tri = mb_strtolower(mb_substr($content, $i, 3));
		$trigrams[$tri]++;
	}

	$sorted = $trigrams;
	array_multisort(array_values($sorted), SORT_NUMERIC, $sorted);
	arsort($sorted);

	$trimmed = array_splice($sorted, 0, 300);

	$counter = 0;
	$res = array();
	foreach (array_keys($trimmed) as $t) {
		$res[$t] = $counter++;
	}

	return $res;

}


function train() {

	$modeldir = $this->modeldir;

	if(!$dh = opendir ($modeldir))
                exit("Failed to open directory\n");

         while (false !== ($file = readdir($dh))) {

		if (preg_match("/^\./", $file))
                         continue;
		if (preg_match("/\.train$/", $file))
                        continue;
		$name = $file;
		$trained_file = $modeldir . "/" . $name .".train"; //  change to backslash for Windows
		if (file_exists($trained_file))
                        continue;
		$path = $modeldir . "/" . $file; // change to backslash for Windows

		if (!($content = file_get_contents($path)))
	                exit("Failed to open $path for reading\n");

		$model = $this->__make_model($content);
		if (!($oh = fopen($trained_file, "w")))
	                exit("Unable to open training file for writing\n");
		foreach (array_keys($model) as $k) {
			fwrite($oh, $k."\t\t\t".$model[$k]."\n");
		}
		if(!fclose($oh)) {
                        exit("Unable to close training file\n");
                }

	}

        closedir($dh);

}

}

?>
