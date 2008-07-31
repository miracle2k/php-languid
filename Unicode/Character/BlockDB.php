<?php
	// CentralNic Unicode Library Block Database
	//
	// Uses data munged from
	//
	//    http://www.unicode.org/Public/UNIDATA/Blocks.txt
	//
	// $Id: BlockDB.php,v 1.3 2006/04/26 10:07:47 gavin Exp $

	/**
	* @package php-Unicode
	*/

	$GLOBALS[Unicode_Character_BlockDB] = array(
		array(start => 0, end => 127, name => 'Basic Latin'),
		array(start => 128, end => 255, name => 'Latin-1 Supplement'),
		array(start => 256, end => 383, name => 'Latin Extended-A'),
		array(start => 384, end => 591, name => 'Latin Extended-B'),
		array(start => 592, end => 687, name => 'IPA Extensions'),
		array(start => 688, end => 767, name => 'Spacing Modifier Letters'),
		array(start => 768, end => 879, name => 'Combining Diacritical Marks'),
		array(start => 880, end => 1023, name => 'Greek and Coptic'),
		array(start => 1024, end => 1279, name => 'Cyrillic'),
		array(start => 1280, end => 1327, name => 'Cyrillic Supplement'),
		array(start => 1328, end => 1423, name => 'Armenian'),
		array(start => 1424, end => 1535, name => 'Hebrew'),
		array(start => 1536, end => 1791, name => 'Arabic'),
		array(start => 1792, end => 1871, name => 'Syriac'),
		array(start => 1872, end => 1919, name => 'Arabic Supplement'),
		array(start => 1920, end => 1983, name => 'Thaana'),
		array(start => 2304, end => 2431, name => 'Devanagari'),
		array(start => 2432, end => 2559, name => 'Bengali'),
		array(start => 2560, end => 2687, name => 'Gurmukhi'),
		array(start => 2688, end => 2815, name => 'Gujarati'),
		array(start => 2816, end => 2943, name => 'Oriya'),
		array(start => 2944, end => 3071, name => 'Tamil'),
		array(start => 3072, end => 3199, name => 'Telugu'),
		array(start => 3200, end => 3327, name => 'Kannada'),
		array(start => 3328, end => 3455, name => 'Malayalam'),
		array(start => 3456, end => 3583, name => 'Sinhala'),
		array(start => 3584, end => 3711, name => 'Thai'),
		array(start => 3712, end => 3839, name => 'Lao'),
		array(start => 3840, end => 4095, name => 'Tibetan'),
		array(start => 4096, end => 4255, name => 'Myanmar'),
		array(start => 4256, end => 4351, name => 'Georgian'),
		array(start => 4352, end => 4607, name => 'Hangul Jamo'),
		array(start => 4608, end => 4991, name => 'Ethiopic'),
		array(start => 4992, end => 5023, name => 'Ethiopic Supplement'),
		array(start => 5024, end => 5119, name => 'Cherokee'),
		array(start => 5120, end => 5759, name => 'Unified Canadian Aboriginal Syllabics'),
		array(start => 5760, end => 5791, name => 'Ogham'),
		array(start => 5792, end => 5887, name => 'Runic'),
		array(start => 5888, end => 5919, name => 'Tagalog'),
		array(start => 5920, end => 5951, name => 'Hanunoo'),
		array(start => 5952, end => 5983, name => 'Buhid'),
		array(start => 5984, end => 6015, name => 'Tagbanwa'),
		array(start => 6016, end => 6143, name => 'Khmer'),
		array(start => 6144, end => 6319, name => 'Mongolian'),
		array(start => 6400, end => 6479, name => 'Limbu'),
		array(start => 6480, end => 6527, name => 'Tai Le'),
		array(start => 6528, end => 6623, name => 'New Tai Lue'),
		array(start => 6624, end => 6655, name => 'Khmer Symbols'),
		array(start => 6656, end => 6687, name => 'Buginese'),
		array(start => 7424, end => 7551, name => 'Phonetic Extensions'),
		array(start => 7552, end => 7615, name => 'Phonetic Extensions Supplement'),
		array(start => 7616, end => 7679, name => 'Combining Diacritical Marks Supplement'),
		array(start => 7680, end => 7935, name => 'Latin Extended Additional'),
		array(start => 7936, end => 8191, name => 'Greek Extended'),
		array(start => 8192, end => 8303, name => 'General Punctuation'),
		array(start => 8304, end => 8351, name => 'Superscripts and Subscripts'),
		array(start => 8352, end => 8399, name => 'Currency Symbols'),
		array(start => 8400, end => 8447, name => 'Combining Diacritical Marks for Symbols'),
		array(start => 8448, end => 8527, name => 'Letterlike Symbols'),
		array(start => 8528, end => 8591, name => 'Number Forms'),
		array(start => 8592, end => 8703, name => 'Arrows'),
		array(start => 8704, end => 8959, name => 'Mathematical Operators'),
		array(start => 8960, end => 9215, name => 'Miscellaneous Technical'),
		array(start => 9216, end => 9279, name => 'Control Pictures'),
		array(start => 9280, end => 9311, name => 'Optical Character Recognition'),
		array(start => 9312, end => 9471, name => 'Enclosed Alphanumerics'),
		array(start => 9472, end => 9599, name => 'Box Drawing'),
		array(start => 9600, end => 9631, name => 'Block Elements'),
		array(start => 9632, end => 9727, name => 'Geometric Shapes'),
		array(start => 9728, end => 9983, name => 'Miscellaneous Symbols'),
		array(start => 9984, end => 10175, name => 'Dingbats'),
		array(start => 10176, end => 10223, name => 'Miscellaneous Mathematical Symbols-A'),
		array(start => 10224, end => 10239, name => 'Supplemental Arrows-A'),
		array(start => 10240, end => 10495, name => 'Braille Patterns'),
		array(start => 10496, end => 10623, name => 'Supplemental Arrows-B'),
		array(start => 10624, end => 10751, name => 'Miscellaneous Mathematical Symbols-B'),
		array(start => 10752, end => 11007, name => 'Supplemental Mathematical Operators'),
		array(start => 11008, end => 11263, name => 'Miscellaneous Symbols and Arrows'),
		array(start => 11264, end => 11359, name => 'Glagolitic'),
		array(start => 11392, end => 11519, name => 'Coptic'),
		array(start => 11520, end => 11567, name => 'Georgian Supplement'),
		array(start => 11568, end => 11647, name => 'Tifinagh'),
		array(start => 11648, end => 11743, name => 'Ethiopic Extended'),
		array(start => 11776, end => 11903, name => 'Supplemental Punctuation'),
		array(start => 11904, end => 12031, name => 'CJK Radicals Supplement'),
		array(start => 12032, end => 12255, name => 'Kangxi Radicals'),
		array(start => 12272, end => 12287, name => 'Ideographic Description Characters'),
		array(start => 12288, end => 12351, name => 'CJK Symbols and Punctuation'),
		array(start => 12352, end => 12447, name => 'Hiragana'),
		array(start => 12448, end => 12543, name => 'Katakana'),
		array(start => 12544, end => 12591, name => 'Bopomofo'),
		array(start => 12592, end => 12687, name => 'Hangul Compatibility Jamo'),
		array(start => 12688, end => 12703, name => 'Kanbun'),
		array(start => 12704, end => 12735, name => 'Bopomofo Extended'),
		array(start => 12736, end => 12783, name => 'CJK Strokes'),
		array(start => 12784, end => 12799, name => 'Katakana Phonetic Extensions'),
		array(start => 12800, end => 13055, name => 'Enclosed CJK Letters and Months'),
		array(start => 13056, end => 13311, name => 'CJK Compatibility'),
		array(start => 13312, end => 19903, name => 'CJK Unified Ideographs Extension A'),
		array(start => 19904, end => 19967, name => 'Yijing Hexagram Symbols'),
		array(start => 19968, end => 40959, name => 'CJK Unified Ideographs'),
		array(start => 40960, end => 42127, name => 'Yi Syllables'),
		array(start => 42128, end => 42191, name => 'Yi Radicals'),
		array(start => 42752, end => 42783, name => 'Modifier Tone Letters'),
		array(start => 43008, end => 43055, name => 'Syloti Nagri'),
		array(start => 44032, end => 55215, name => 'Hangul Syllables'),
		array(start => 55296, end => 56191, name => 'High Surrogates'),
		array(start => 56192, end => 56319, name => 'High Private Use Surrogates'),
		array(start => 56320, end => 57343, name => 'Low Surrogates'),
		array(start => 57344, end => 63743, name => 'Private Use Area'),
		array(start => 63744, end => 64255, name => 'CJK Compatibility Ideographs'),
		array(start => 64256, end => 64335, name => 'Alphabetic Presentation Forms'),
		array(start => 64336, end => 65023, name => 'Arabic Presentation Forms-A'),
		array(start => 65024, end => 65039, name => 'Variation Selectors'),
		array(start => 65040, end => 65055, name => 'Vertical Forms'),
		array(start => 65056, end => 65071, name => 'Combining Half Marks'),
		array(start => 65072, end => 65103, name => 'CJK Compatibility Forms'),
		array(start => 65104, end => 65135, name => 'Small Form Variants'),
		array(start => 65136, end => 65279, name => 'Arabic Presentation Forms-B'),
		array(start => 65280, end => 65519, name => 'Halfwidth and Fullwidth Forms'),
		array(start => 65520, end => 65535, name => 'Specials'),
		array(start => 65536, end => 65663, name => 'Linear B Syllabary'),
		array(start => 65664, end => 65791, name => 'Linear B Ideograms'),
		array(start => 65792, end => 65855, name => 'Aegean Numbers'),
		array(start => 65856, end => 65935, name => 'Ancient Greek Numbers'),
		array(start => 66304, end => 66351, name => 'Old Italic'),
		array(start => 66352, end => 66383, name => 'Gothic'),
		array(start => 66432, end => 66463, name => 'Ugaritic'),
		array(start => 66464, end => 66527, name => 'Old Persian'),
		array(start => 66560, end => 66639, name => 'Deseret'),
		array(start => 66640, end => 66687, name => 'Shavian'),
		array(start => 66688, end => 66735, name => 'Osmanya'),
		array(start => 67584, end => 67647, name => 'Cypriot Syllabary'),
		array(start => 68096, end => 68191, name => 'Kharoshthi'),
		array(start => 118784, end => 119039, name => 'Byzantine Musical Symbols'),
		array(start => 119040, end => 119295, name => 'Musical Symbols'),
		array(start => 119296, end => 119375, name => 'Ancient Greek Musical Notation'),
		array(start => 119552, end => 119647, name => 'Tai Xuan Jing Symbols'),
		array(start => 119808, end => 120831, name => 'Mathematical Alphanumeric Symbols'),
		array(start => 131072, end => 173791, name => 'CJK Unified Ideographs Extension B'),
		array(start => 194560, end => 195103, name => 'CJK Compatibility Ideographs Supplement'),
		array(start => 917504, end => 917631, name => 'Tags'),
		array(start => 917760, end => 917999, name => 'Variation Selectors Supplement'),
		array(start => 983040, end => 1048575, name => 'Supplementary Private Use Area-A'),
		array(start => 1048576, end => 1114111, name => 'Supplementary Private Use Area-B'),
	);
?>