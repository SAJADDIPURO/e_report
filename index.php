<?php

session_start();
if (isset($_SESSION['user_id'])) {
  
    header('Location: pages/complaints.php');
    exit();
} else {

    header('Location: pages/register.php');
    exit();
}
?>
