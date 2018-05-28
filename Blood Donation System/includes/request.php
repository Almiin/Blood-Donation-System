<?php
    include 'dbc.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $time = $_POST['time'];

        $sql = "INSERT INTO appointment (user_name, user_email, user_phone, user_date, user_time)
        VALUES ('$name', '$email', '$phone', '$date', '$time')";
        $sth = $conn->query($sql);
?>
