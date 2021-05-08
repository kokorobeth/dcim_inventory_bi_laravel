<?php
//array assosiative
//definisinya sama seperti array numerik kecuali
//key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Aziz Kurniawan",
        "nim" => "130390",
        "email" => "azizrobert@yahoo.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "aziz.jpg"
    ],
    [
        "nama" => "Anggie Febiana",
        "nim" => "180114",
        "email" => "anggiefebiana13h@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "anggie.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array assosiatif</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <div>Nama : <?= $mhs['nama']; ?></div>
        <div>NIM : <?= $mhs['nim']; ?></div>
        <div>Email : <?= $mhs['email']; ?></div>
        <div>Jurusan : <?= $mhs['jurusan']; ?></div>
        <div><img src="img/<?= $mhs['gambar']; ?>" alt=""></div>
        <br>
    <?php endforeach; ?>
</body>

</html>