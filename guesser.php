<?php
require_once('Guess.php');

$guesser = new Guess(array('modeldir' => './train'));
$input = fopen('php://stdin', "r");
while (!feof($input)) {
        $line = fgets($input);
        if (trim($line) == '')
                exit("Finished\n");
        $lang = $guesser->simple_guess($line);
        echo "Language was $lang\n\n";

}

?>
