<?php 
require "functions.php";
$id = $_GET["id"];

$murid = mysqli_query($conn, "SELECT * FROM murid WHERE id='$id'");

if(isset($_POST["submit"])) {
    if(ubah($_POST) > 0) {
        echo "<script>alert('data berhasil diubah')</script>";
    } else {
        echo "<script>alert('data gagal diubah')</script>";
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
    <?php while($data = mysqli_fetch_array($murid)) : ?>
    <form action="" method="POST">
        <ul>
            <li><input type="hidden" name="id" id="id" value="<?= $data["id"] ?>"></li>
            <li><input type="text" name="nama" id="nama" value="<?= $data["Nama"] ?>"></li>
            <li><input type="text" name="kelas" id="kelas" value="<?= $data["Kelas"] ?>"></li>
            <li><input type="text" name="jurusan" id="jurusan" value="<?= $data["Jurusan"] ?>"></li>
        </ul>
        <button type="submit" name="submit" id="submit">Ubah</button>
    </form>
    <?php endwhile; ?>
</body>
</html>