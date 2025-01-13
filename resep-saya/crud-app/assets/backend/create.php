<?php
include 'db.php';

$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$rating = $_POST['rating'];
$gambar = '';

if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $filename = uniqid() . '-' . $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../uploads/" . $filename);
    $gambar = $filename;
}

$sql = "INSERT INTO kuliner (nama, lokasi, rating, gambar) VALUES ('$nama', '$lokasi', '$rating', '$gambar')";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan!";
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}
?>
