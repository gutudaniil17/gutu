<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

// Функция для закрытия сессии
function logout() {
    // Уничтожаем сессию
    session_destroy();
    // Перенаправляем пользователя на страницу входа
    header("Location: login.php");
    exit;
}

// Проверяем, была ли отправлена форма для выхода
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['logout'])) {
    logout();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Hello, Admin!</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="hidden" name="logout" value="true">
        <input type="submit" value="Logout" style="background-color: red">
    </form>
</body>
</html>
