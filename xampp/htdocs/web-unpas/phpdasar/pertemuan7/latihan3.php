<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <form method="post">
        <?php if (isset($_POST["submit"])) : ?>
            <h2>hallo, selamat datang <?php echo $_POST["nama"]; ?></h2>
        <?php endif; ?>
        Masukan Nama :
        <input type="text" name="nama" autocomplete="off"><br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>