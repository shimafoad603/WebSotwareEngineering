

<?php

if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy validation (no database)
    if ($username == "admin" && $password == "1234") {
        echo "Login successful";
    } else {
        echo "Invalid username or password";
    }

} else {
    echo "Error: Data not received from login form.";
}

?>