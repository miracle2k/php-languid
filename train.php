<?php
/**
* Example script that shows how to train the guesser based on 
* raw text in a language.
* 
* Analazyes the content of files in ./train/new and creates
* ".train" files usuable by the guesser.
*/

require_once('Guess.php');
$guess = new Guess(array('modeldir' => './train/new'));

$guess->train();

?>
