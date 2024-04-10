<!DOCTYPE html>
<html>
<head>
    <title>Guest Book</title>
    <script src="validate.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Guest Book</h2>
    <form action="submit_message.php" method="post" onsubmit="return validateForm()">
    <div class="form-wrapper">
        <label for="user">Name:</label><br>
        <input type="text" id="user" name="user"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br><br>
        <input type="submit" value="Submit">
    </div>
    </form>

    <h3>Guest Book Entries:</h3>
    <?php
    include 'connect.php';

    $sql = "SELECT * FROM guest";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="guest-entry">';
            echo "<h4><strong>Name:</strong> " . $row["user"]. " - <strong>Email:</strong> " . $row["e_mail"]. "</h4>";
            echo "<p><strong>Message:</strong> " . $row["text_message"]. "</p>";
            echo '</div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>
</html>
