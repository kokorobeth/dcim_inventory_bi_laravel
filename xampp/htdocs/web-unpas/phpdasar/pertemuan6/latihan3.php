<?php

//pengelolaan perangkat dcim bank Indonesia
$datas = [
    [
        "id" => "01",
        "name" => "master system aci",
        "serial_number" => "a3z01",
        "status" => "new",
        "picture" => "data1.jpg"
    ],
    [
        "id" => "02",
        "name" => "ace itoc07",
        "serial_number" => "23u77",
        "status" => "used",
        "picture" => "data2.jpg"
    ],
    [
        "id" => "03",
        "name" => "soc master aci",
        "serial_number" => "9iuty",
        "status" => "new",
        "picture" => "data3.jpg"
    ],
    [
        "id" => "04",
        "name" => "master core",
        "serial_number" => "98ubvd",
        "status" => "used",
        "picture" => "data4.jpg"
    ],
    [
        "id" => "05",
        "name" => "hardcore itoc4",
        "serial_number" => "976t54",
        "status" => "new",
        "picture" => "data5.jpg"
    ],
    [
        "id" => "06",
        "name" => "master ip aci",
        "serial_number" => "a2gyua",
        "status" => "used",
        "picture" => "data6.jpg"
    ],
    [
        "id" => "07",
        "name" => "it configuro",
        "serial_number" => "h5jut2",
        "status" => "new",
        "picture" => "data7.jpg"
    ],
    [
        "id" => "08",
        "name" => "intel aci master",
        "serial_number" => "t54cvn",
        "status" => "new",
        "picture" => "data8.jpg"
    ],
    [
        "id" => "09",
        "name" => "intel o2 aci",
        "serial_number" => "u76gb9",
        "status" => "used",
        "picture" => "data9.jpg"
    ],
    [
        "id" => "10",
        "name" => "master gordon top",
        "serial_number" => "ucih4a",
        "status" => "new",
        "picture" => "data10.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data perangkat dcim</title>
</head>

<body>
    <h1>Data Perangkat DCIM</h1>
    <?php foreach ($datas as $data) : ?>
        <ul>
            <li>ID : <?= $data["id"]; ?></li>
            <li>Nama Barang : <?= $data["name"]; ?></li>
            <li>Serial Number : <?= $data["serial_number"]; ?></li>
            <li>Status : <?= $data["status"]; ?></li>
            <img src="img/<?= $data["picture"] ?>" alt="" width="100px">
        </ul>
    <?php endforeach; ?>
</body>

</html>