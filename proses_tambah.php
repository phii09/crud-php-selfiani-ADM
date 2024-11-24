<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO mahasiswa (nama, nim, email, nomor, jurusan) VALUE ('$nama', '$nim', '$email', '$nomor', '$jurusan')";

if ($conn ->query($sql) === TRUE) {
    header("Location: index.php");
    exit;
} else {
    echo "error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
