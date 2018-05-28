<?php
$hostname='localhost';
$username='root';
$password='';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=loginsystem",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line

    $sql = "SELECT * FROM users";
    $sql = "SELECT * FROM contact";
    $sql = "SELECT * FROM appointment";

    $sth = $conn->query($sql);;

    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
