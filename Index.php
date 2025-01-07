<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center">
    <h1>Halaman administrator</h1>
    <a href="index.php">Home</a>
    <a href="logout.php">logout</a>
    <hr>
    <h3>selamat datang, nama user</h3>
    Halaman ini akan tampil ketika user login

</body>
</html>