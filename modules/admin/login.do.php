<?php
include_once '../../includes/app.php';

$error = 0;

if (isset($_POST['email'], $_POST['password'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['p']; // The hashed password.

    if (login($email, $password, $mysqli, 1) == true) {

        //echo "login";
        // Login success
        header("Location: panel");
        exit();
    } else {
        // Login failed
       $error = 2;
    }
} else {
    // The correct POST variables were not sent to this page.
    $error = 1;

}

header('Location: login?err='.$error);

exit();