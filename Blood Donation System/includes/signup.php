<?php
    include 'dbc.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = md5($_POST['pwd']);
    $cpwd = md5($_POST['cpwd']);
    $age = $_POST['age'];
    $gend = $_POST['gend'];
    $group = $_POST['group'];

        $sql = "INSERT INTO users (user_name, user_email, user_pwd, user_cpwd, user_age, user_gend, user_group)
        VALUES ('$name', '$email', '$pwd', '$cpwd', '$age', '$gend', '$group')";
        $sth = $conn->query($sql);
?>
