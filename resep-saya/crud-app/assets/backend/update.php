<?php
include 'db.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$rating = $_POST['rating'];
$gambar = '';

if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    $filename = uniqid() . '-' . $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../uploads/" . $filename);
    $gambar = $filename;
}

$sql = $gambar
    ? "UPDATE kuliner SET nama='$nama', lokasi='$lokasi', rating='$rating', gambar='$gambar' WHERE id=$id"
    : "UPDATE kuliner SET nama='$nama', lokasi='$lokasi', rating='$rating' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil diperbarui!";
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}
?>
