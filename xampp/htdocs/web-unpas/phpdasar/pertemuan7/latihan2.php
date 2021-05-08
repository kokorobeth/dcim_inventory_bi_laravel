<?php
//cek apakah tidak ada data di $_GET

if (
    !isset($_GET["name"]) ||
    !isset($_GET["id"]) ||
    !isset($_GET["picture"]) ||
    !isset($_GET["serial_number"]) ||
    !isset($_GET["status"])
) {
    //redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET 2</title>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["picture"]; ?>"></li>
        <li><?= $_GET["id"]; ?></li>
        <li><?= $_GET["name"]; ?></li>
        <li><?= $_GET["serial_number"]; ?> </li>
        <li><?= $_GET["status"]; ?></li>
    </ul>

    <a href="latihan1.php">Kembali ke Daftar Data</a>
</body>

</html>