<?php
    include 'dbc.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

        $sql = "INSERT INTO contact (user_name, user_email, user_subject, user_message)
        VALUES ('$name', '$email', '$subject', '$message')";
        $sth = $conn->query($sql);
?>
