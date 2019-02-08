<?php
include_once '../../includes/app.php';

$error_msg = 0;

if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    // Sanitize and validate the data passed in
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    $coll_id = $_POST["coll_id"];
    $mobile =  $_POST["mobile"];
    $stream =  $_POST["stream"];
    $entry_year =  $_POST["entry_year"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg = 1;
    }

    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
//    if (strlen($password) != 128) {
//        $error_msg = 2;
//    }

    $prep_stmt = "SELECT id FROM students WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);

    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            // A user with this email address already exists
            $error_msg = 3;
        }
    } else {
        $error_msg = 4;
    }

    if (empty($error_msg)) {
        // Create a random salt
        $random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE));

        // Create salted password
        $password = hash('sha512', $password . $random_salt);

        // Insert the new user into the database
        if ($insert_stmt = $mysqli->prepare("INSERT INTO students (coll_id, mobile, stream, entry_year, name, username, email, password, salt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('iiiisssss', $coll_id, $mobile, $stream, $entry_year, $name, $username, $email, $password, $random_salt);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                echo $insert_stmt->error;
                echo "<br />". $random_salt;
              header('Location: register?err=5');
               exit();
            }
        }
        header('Location: panel');
        exit();
    }

   header('location: register?err='.$error_msg);

}
else {
    header("Location register");
}