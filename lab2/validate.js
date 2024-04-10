function validateForm() {
    var user = document.getElementById("user").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    if (user == "" || email == "" || message == "") {
        alert("All fields must be filled out");
        return false;
    }

    // Проверка наличия тегов и скриптов во введенных данных
    var htmlTags = /<(.|\n)*?>/g;
    if (htmlTags.test(user) || htmlTags.test(email) || htmlTags.test(message)) {
        alert("HTML tags are not allowed");
        return false;
    }

    return true;
}
