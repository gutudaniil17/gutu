<?php
session_start();
include 'sanitize.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gutu";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$login = sanitize($_POST['login']);
$password = sanitize($_POST['password']);

$sql = "SELECT * FROM user WHERE login='$login' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['loggedin'] = true;
    $_SESSION['role'] = $row['role'];
    $logMessage = "[" . date("Y-m-d H:i:s") . "] User '" . $login . "' with role '" . $row['role'] . "' logged in.\n";
    file_put_contents('logs.txt', $logMessage, FILE_APPEND); // Добавляем роль в сессию
    if ($row['role'] == 'admin') {
        header("Location: admin_panel.php");
    } elseif ($row['role'] == 'manager') {
        header("Location: manager_panel.php");
    } else {
        echo "<script>alert('Unknown user role');</script>";
        echo "<script>window.location.href='login.php';</script>";
        exit;
    }
    exit;
} else {
    echo "<script>alert('Invalid login credentials');</script>";
    echo "<script>window.location.href='login.php';</script>";
    exit;
}
?>
