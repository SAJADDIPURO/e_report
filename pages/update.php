<?php
include '../databases/connection.php';

$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "UPDATE complaints SET title='$title', description='$description' WHERE id=$id";
    if ($conn->query($query) === TRUE) {
        echo "Pengaduan berhasil diupdate!";
        header('Location: read.php');
    } else {
        echo "Error: " . $conn->error;
    }
}

$query = "SELECT * FROM complaints WHERE id=$id";
$result = $conn->query($query);
$data = $result->fetch_assoc();
?>

<form method="POST">
    <input type="text" name="title" value="<?= $data['title'] ?>" required>
    <textarea name="description" required><?= $data['description'] ?></textarea>
    <button type="submit">Update</button>
</form>
