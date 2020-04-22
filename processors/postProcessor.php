<?php

require 'dbConfig.php';

if (isset($_POST['post'])) {
    $post_title = $_POST['post_title'];
    $post_desc = $_POST['post_desc'];

    $query = mysqli_query($conn, "INSERT INTO posts (post_title , post_desc) VALUES ('$post_title' , '$post_desc')");

    if ($query) {
        header ('location: ../home.php');
        exit;
    }else{
        echo "failed to post";
    }
}


?>