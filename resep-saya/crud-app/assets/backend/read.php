<?php
include 'db.php';

$sql = "SELECT * FROM kuliner";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $row['gambar'] = $row['gambar'] ? "uploads/" . $row['gambar'] : 'default.png'; // URL gambar
    $data[] = $row;
}

echo json_encode($data);
?>
