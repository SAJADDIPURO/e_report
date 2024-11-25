<?php
include '../databases/connection.php';

$id = $_GET['id'];
$query = "DELETE FROM complaints WHERE id=$id";

if ($conn->query($query) === TRUE) {
    echo "Pengaduan berhasil dihapus!";
    header('Location: read.php');
} else {
    echo "Error: " . $conn->error;
}
?>
