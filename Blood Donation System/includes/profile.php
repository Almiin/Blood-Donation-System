<?php
session_start();

$hostname='localhost';
$username='root';
$password='';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=loginsystem",$username,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line

    $sql = "SELECT * FROM `users` WHERE `user_email` = '$_SESSION[u_email]' ";

    $sth = $conn->query($sql);;

      while($row = $sth->fetch(PDO::FETCH_ASSOC)){

        echo "<br><br> Name: " .$row['user_name'].
             "<br><br> E-mail: " .$row['user_email'].
             "<br><br> Age: " .$row['user_age'].
             "<br><br> Gender: " .$row['user_gend'].
             "<br><br> Blood Group: " .$row['user_group']. "<br>";
      }
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

    try {
          $sql = "SELECT * FROM `appointment` WHERE `user_email` = '$_SESSION[u_email]'";
          $sth = $conn->query($sql);;

          while($row = $sth->fetch(PDO::FETCH_ASSOC)){

            echo "<br> Appointment: " .$row['user_date']. " ".$row['user_time']. "<br>";
          }
        }
    catch(PDOException $e)
        {
        echo $e->getMessage();
        }
?>
