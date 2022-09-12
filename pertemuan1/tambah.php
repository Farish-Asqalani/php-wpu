<?php  
require "functions.php";

if(isset($_POST["submit"])) {
    if(tambah($_POST) > 0) {
        echo "<script>alert('data berhasil ditambahkan')</script>";
    } else {
        echo "<script>alert('data gagal ditambahkan')</script>";
    }
}


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
    <form action="" method="POST">
        <ul>
            <li><input type="text" name="nama" id="nama"></li>
            <li><input type="text" name="kelas" id="kelas"></li>
            <li><input type="text" name="jurusan" id="jurusan"></li>
        </ul>
        <button type="submit" name="submit" id="submit">Tambah</button>
    </form>
</body>
</html>