<?php 
require "functions.php";

$murid = query("SELECT * FROM murid");
// var_dump($murid);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <h3><a href="tambah.php">Tambah</a></h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Update</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($murid as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data["Nama"]; ?></td>
                <td><?= $data["Kelas"]; ?></td>
                <td><?= $data["Jurusan"]; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $data["id"] ?>">Ubah</a>
                    <a href="hapus.php?id=<?= $data["id"] ?>">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>