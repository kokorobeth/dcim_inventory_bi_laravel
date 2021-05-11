<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <form action="" method="POST">
        <a href="tambah.php">Tambah data mahasiswa</a>
        <br><br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Action</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>NRP</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $mhs["id"]; ?>">Edit</a> ||
                        <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="confirm('Area You sure want to delete this data?');">Delete</a>
                    </td>
                    <td><img src="img/<?= $mhs["gambar"]; ?>" width="70" alt=""></td>
                    <td><?= $mhs["nama"]; ?></td>
                    <td><?= $mhs["nrp"]; ?></td>
                    <td><?= $mhs["email"]; ?></td>
                    <td><?= $mhs["jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </form>
</body>

</html>