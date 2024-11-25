<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
include '../databases/connection.php';
$user_id = $_SESSION['user_id'];
$pengaduan = $conn->query("SELECT * FROM complaints WHERE user_id = $user_id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Saya</title>
    <link rel="stylesheet" href="../assets/css/stles.css">
</head>
<body>
    <nav>
        <a href="index.php" class="brand">E-Report</a>
        <div>
            <a href="create.php">Buat Pengaduan</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>
    <ul>
        <?php while ($row = $pengaduan->fetch_assoc()): ?>
            <li>
                <?= $row['title'] ?> - 
                <a href="read.php?id=<?= $row['id'] ?>">Lihat</a> | 
                <a href="update.php?id=<?= $row['id'] ?>">Edit</a> | 
                <a href="delete.php?id=<?= $row['id'] ?>">Hapus</a>
            </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>

