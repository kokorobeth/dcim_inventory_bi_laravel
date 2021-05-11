<?php
require 'functions.php';

$mahasiswa = query("SELECT *FROM mahasiswa");
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
    <h1>Daftar Mahasiswa UI Rancho</h1>

    <a href="tambah_copy.php">Tambah Data Mahasiswa</a>
    <br><br>
    <form method="POST">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="">Ubah</a> ||
                        <a href="hapus_copy.php?id=<?= $row['id']; ?>" onclick="return confirm('Are You sure want to delete this data?')">Hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" width="70" alt=""></td>
                    <td><?= $row["nrp"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </form>
</body>

</html>