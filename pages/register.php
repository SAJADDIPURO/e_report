<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/stles.css">
</head>
<body>
  
    <nav>
        <a href="index.php" class="brand">E-Report</a>
        <div>
            <a href="login.php">Login</a>
        </div>
    </nav>

   
    <div class="register-container">
        <h1>Register</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            include '../databases/connection.php';
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            if ($username && $password) {
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
                $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
                if ($conn->query($sql) === TRUE) {
                    echo "<p class='success-message'>Registration successful! <a href='login.php'>Login here</a></p>";
                } else {
                    echo "<p class='error-message'>Error: " . $conn->error . "</p>";
                }
            } else {
                echo "<p class='error-message'>Please fill out all fields.</p>";
            }
        }
        ?>
        <form method="POST" action="register.php">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <button type="submit" class="register-btn">Register</button>
        </form>
    </div>
</body>
</html>
