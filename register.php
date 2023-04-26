<?php
require 'koneksi.php';
if(isset($_POST["register"])) {
    if(registrasi($_POST) > 0) {
        echo "<script>
        alert('User Baru Berhasil ditambahkan!')
         </script>";
    } else {
        echo mysqli_error($conn);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
    label {
        display: block;
    }
    </style>
</head>
<body>
    <form action="" method="POST">
    <ul>
        <li><label for="username">Nama</label>
        <input type="text" name="username" id="username"></li>
        <li><label for="level">Level</label>
        <input type="text" name="level" id="level"></li>
        <li><label for="password">Password</label>
        <input type="password" name="password" id="password"></li>
        <li><label for="password2">Komfirmasi Pasword</label>
        <input type="password" name="password2" id="password2"></li>
        <li><button type="submit" name="register">Daftar</button></li>
    </ul>
    </form>
</body>
</html>