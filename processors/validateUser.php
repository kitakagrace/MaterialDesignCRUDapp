<?php
require '../processors/dbConfig.php';

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if ($email == "") {
        echo "email err";
    }elseif ($password == "") {
        echo "password err";
    }else{
        $sql = mysqli_query($conn, "SELECT user_id FROM users WHERE email = '$email' and password = '$password' ");

        $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);

        $count = mysqli_num_rows($sql);

        if ($count == 1) {
            echo "<p>user  found</p>";
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email;
            header('location: ../home.php');
        }else{
            echo "<p>user not found</p>";
        }

    }
    
    
}




?>