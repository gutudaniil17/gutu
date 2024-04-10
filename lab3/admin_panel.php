<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>
    <h2>Welcome, Admin!</h2>
    <!-- Ваше содержимое панели администратора -->
    <a href="logout.php">Logout</a>
</body>
</html>
