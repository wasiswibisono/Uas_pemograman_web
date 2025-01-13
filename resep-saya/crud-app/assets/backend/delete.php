<?php
include 'db.php';

$id = $_POST['id'];

$sql = "SELECT gambar FROM kuliner WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($row && $row['gambar']) {
    $filePath = "../uploads/" . $row['gambar'];
    if (file_exists($filePath)) {
        unlink($filePath);
    }
}

$sql = "DELETE FROM kuliner WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus!";
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}
?>
