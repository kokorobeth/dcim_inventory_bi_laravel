<?php
//cek apakah tombol sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //cek username & password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        //jika benar redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic">Username or Password is wrong!</p>
    <?php endif; ?>
    <form method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" autocomplete="off"><br>
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" autocomplete="off">
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </ul>
    </form>
</body>

</html>