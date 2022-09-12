<?php 
$conn = mysqli_connect("localhost", "root", "", "tugas");

function query($query) {
    global $conn;
    $hasil = mysqli_query($conn, $query);
    $hasils = [];
    while($hasils = mysqli_fetch_assoc($hasil)) {
        $isi [] = $hasils;
    }
    return $isi;
}

function tambah($data) {
    global $conn;
    if(isset($_POST["submit"])) {
    $nama = $data["nama"];
    $kelas = $data["kelas"];
    $jurusan = $data["jurusan"];
    $query = "INSERT INTO murid VALUES('', '$nama', '$kelas', '$jurusan')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    }
}


function ubah($data) {
    global $conn;
    if(isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];
    $query = "UPDATE murid SET Nama='$nama', Kelas='$kelas', Jurusan='$jurusan' WHERE id='$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
    }
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM murid WHERE id='$id'");
    return mysqli_affected_rows($conn);
}


?>