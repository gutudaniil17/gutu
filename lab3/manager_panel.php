<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] != 'manager' || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manager Panel</title>
</head>
<body>
    <h2>Welcome, Manager!</h2>
    <!-- Ваше содержимое панели менеджера -->
    <a href="logout.php">Logout</a>
</body>
</html>
