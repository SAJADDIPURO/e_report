<?php
include '../databases/connection.php';

$query = "SELECT complaints.*, users.username FROM complaints INNER JOIN users ON complaints.user_id = users.id";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengaduan</title>
    <link rel="stylesheet" href="../assets/css/stles.css"> 
</head>
<body>


<table border="1">
    <tr>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Pengguna</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['title'] ?></td>
            <td><?= $row['description'] ?></td>
            <td><?= $row['username'] ?></td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
<a href="create.php" class="back-btn">buat pengaduan</a>
</body>
</html>
