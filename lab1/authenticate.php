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
    $_SESSION['loggedin'] = true;
    header("Location: admin_panel.php");
    exit;
} else {
    echo "<script>alert('Invalid login credentials');</script>";
    echo "<script>window.location.href='login.php';</script>";
    exit;
}

?>
