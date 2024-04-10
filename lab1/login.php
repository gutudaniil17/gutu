<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script>
        function validateForm() {
            var login = document.getElementById("login").value;
            var password = document.getElementById("password").value;

            // Проверка на наличие запрещенных символов для SQL-запросов
            var sqlPattern = /[\'\"\\]/g;
            if (sqlPattern.test(login) || sqlPattern.test(password)) {
                alert("Login and password must not contain special characters");
                return false;
            }

            if (login == "" || password == "") {
                alert("Login and password must be filled out");
                return false;
            }
        }
    </script>
</head>

<body>
    <h2>Login</h2>
    <form action="authenticate.php" method="post">
        <label for="login">Login:</label><br>
        <input type="text" id="login" name="login"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>