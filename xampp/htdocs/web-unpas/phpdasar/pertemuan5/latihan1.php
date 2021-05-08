

<?php
$day = ['Monday', 'Tuesday', 'Wednesday'];

//Menampilkan array hanya dengan var_dum() -> u/ mengecek dari sebuah variable atau pake print_r
//kalo mau pake echo, tunjukin index nya. cth : echo $day[1];

// print_r($day);
// echo "<br>";
// var_dump($day);
// echo "<br>";
// echo $day[2];

$day[] = "Thrusday";
var_dump($day);
echo "<br>";
echo $day[0];
?>