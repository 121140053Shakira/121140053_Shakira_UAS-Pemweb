<?php
//Konfigurasi Database
$server = "localhost";
$username = "root";
$password = "";
$database = "universitas";

$conn = new mysqli($server, $username, $password, $database);

if (!$conn) {
    die("Koneksi ke basisdata gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>