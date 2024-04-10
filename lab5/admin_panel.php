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
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .log-container {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .log-container pre {
            white-space: pre-wrap;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Welcome, Admin!</h2>
    <!-- Кнопка для просмотра логов -->
    <button onclick="showLogs()">Show Logs</button>
    <div class="log-container" id="logContainer" style="display: none;">
        <h3>Log Content:</h3>
        <pre><?php echo file_get_contents('logs.txt'); ?></pre>
    </div>
    <a href="logout.php">Logout</a>

    <script>
        function showLogs() {
            document.getElementById("logContainer").style.display = "block";
        }
    </script>
</body>
</html>
