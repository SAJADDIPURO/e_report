<?php
include '../databases/connection.php'; 
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $user_id = $_SESSION['user_id'] ?? 0; 

   
    if (empty($title) || empty($description)){
        echo "Semua data harus diisi!";
    } else {
       
        $query = "INSERT INTO complaints (title, description, user_id) VALUES ('$title', '$description', $user_id)";

       
        if ($conn->query($query)) {
            echo "Pengaduan berhasil ditambahkan!";
            header('Location: index.php'); 
            exit(); 
        } else {
            echo "Error: " . $conn->error; 
        }
    }
}
?>
<?php
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pengaduan</title>
    <link rel="stylesheet" href="../assets/css/stles.css">
</head>
<body>
    <nav>
        <a href="index.php" class="brand">E-Report</a>
        <div>
            <a href="index.php">Home</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>
    <form method="POST" action="create.php">
        <h1>Buat Pengaduan</h1>
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" required>
        <label for="description">Deskripsi</label>
        <textarea name="description" id="description" required></textarea>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>

