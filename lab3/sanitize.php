<?php
function sanitize($input) {
    // Защита от SQL инъекций и XSS атак
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>
