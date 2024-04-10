<?php
include 'connect.php';
include 'sanitize.php';
$user = sanitize($_POST['user']);
$email = sanitize($_POST['email']);
$message = sanitize($_POST['message']);

$sql = "INSERT INTO guest (user, e_mail, text_message) VALUES ('$user', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
