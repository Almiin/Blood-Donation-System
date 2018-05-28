<?php

  session_start();

    include 'dbc.php';

    $email = $_POST['email'];
    $pwd = md5($_POST['pwd']);

      if($email != "" && $pwd != "") {
        try {
          $sql = "SELECT * FROM `users` WHERE `user_email`=:email and `user_pwd`=:pwd";
          $sth = $conn->prepare($sql);
          $sth->bindParam('email', $email, PDO::PARAM_STR);
          $sth->bindValue('pwd', $pwd, PDO::PARAM_STR);
          $sth->execute();
          $count = $sth->rowCount();
          $row   = $sth->fetch(PDO::FETCH_ASSOC);
          if($count == 1 && !empty($row)) {
            /******************** Your code ***********************/
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_email'] = $row['user_email'];
            $_SESSION['u_pwd'] = $row['user_pwd'];

            header("Location: /Blood Donation System/pages/in.html");
          } else {
            $msg = "Invalid username and password!";
            echo "<script type='text/javascript'>$(#mess).html($msg);</script>";
            echo "<script type='text/javascript'>alert('$msg');</script>";
          }
        } catch (PDOException $e) {
          echo "Error : ".$e->getMessage();
        }
      } else {
        echo  'Your email or password is not correct!';
      }
?>
