<?php
require 'dbConfig.php';

if (isset($_POST['register'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if ($first_name == "") {
        echo "err first";
    }elseif($last_name == ""){
        echo "err second";
    }elseif ($email == "") {
        echo "err email";
    }elseif($password == ""){
        echo "err password";
    }elseif ($password < 8) {
        echo "err password is less than 8";
    }else{
        $query = mysqli_query($conn, "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name' , '$email', '$password' )");
    
        if ($query) {
            echo "Inserted successfully";
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email;
            echo "<p>New user created</p>";
            header("location: ../home.php");
        }else{
            echo "<p>Failed to insert user</p>";
        }
    }
    
}


?>