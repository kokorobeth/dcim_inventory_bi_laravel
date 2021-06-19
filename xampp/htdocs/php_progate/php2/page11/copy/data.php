<?php 
require_once('person.php');

$aziz = new Person('Aziz', 30, 'Jakarta');
$budi = new Person('Budi', 29, 'Malang');
$catur = new Person('Catur', 34, 'Gresik');
$asep = new Person('Asep', 27, 'Bandung');

$persons = array($aziz, $budi, $catur, $asep);

?>