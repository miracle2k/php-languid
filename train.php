<?php
require_once('Guess.php');
$guess = new Guess(array('modeldir' => './train-test'));

$guess->train();

?>
