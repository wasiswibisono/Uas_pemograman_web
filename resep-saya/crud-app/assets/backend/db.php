<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "kuliner_app";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
