<?php
$mahasiswa = [
    ["Aziz Kurniawan", "098876", "Teknik Informatika", "azizroberth@gmail.com"],
    ["Rafa Al Fatih", "097772", "Teknik Informatika", "rafa@gmail.com"],
    ["Raline Althafunnisa", "098665", "Teknik Industri", "raline@gmail.com"],
    ["Anggie Febiana", "097653", "Pendidikan Agama Islam", "anggiefebiana@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $student) : ?>
        <div>Nama : <?= $student[0]; ?></div>
        <div>NRP : <?= $student[1]; ?></div>
        <div>Jurusan : <?= $student[2]; ?></div>
        <div>Email : <?= $student[3]; ?></div>
        <br>
    <?php endforeach; ?>
</body>

</html>