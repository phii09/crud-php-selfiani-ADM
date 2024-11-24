<?php
$host = "localhost";
$username = "root";
$password = "";
$nbname = "kampus";

$scoon = new mysqli($host, $username, $password, $nbname);

if ($conn->connection_error) {
    die("koneksi gagal: " . $conn->connect_error);
}
