<?php
require_once('Guess.php');

$guess = new Guess(array('modeldir' => './train'));

//$guess->train(); die();

echo $guess->simple_guess("Li naskigis en Cambrai, en domo 19 Allée Saint-Roch, travivis la unuan mondmiliton en Arras, kie lia patrino estis kolegio-estrino. Farigis Ingeniero pri Agroscienco en tiel tiamnomitaj transmaraj landoj, kaj lia unua posteno estis en la tiam nomita Hindi-Cinio, franca kolonio. La sipo per kiu, li veturis tien, faris halton en haveno en Hindio, tie li partoprenis agon de Gandhianoj kusante kun ili trae de la strato kie angla kolonia estrulo estis pasonta. De tie frua epoko li ciam estis ce la flanko de la subpremitoj de la mondo.");

?> 
 
