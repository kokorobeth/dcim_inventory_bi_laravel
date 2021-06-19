<?php 
include('person.php');

$aziz = new Person('Aziz', 31, 'Jl Komplek Polri No.24 - Jakarta Timur');
$anggie = new Person('Anggie', 30, 'Jl Sumbawa 3 No.56 - NTB');
$budi = new Person('Budi', 34, 'Jl Mangunggal Raya - Yogyakarta');
$rita = new Person('Rita', 25, 'Komplek Bahagia 78 - Buah Batu Bandung');

$persons = array($aziz, $anggie, $budi, $rita);

?>