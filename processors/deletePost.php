<?php
require 'dbConfig.php';

if (isset($_GET['delete'])) {
    $post_id = $_GET['delete'];

    $record = mysqli_query($conn, "SELECT * FROM posts WHERE post_id = $post_id");

    $count = mysqli_num_rows($record);

    if ($count == 1) {
        $clean = mysqli_query($conn, "DELETE FROM posts WHERE post_id = '$post_id'");

        if ($clean) {
            header('location: ../home.php');
        }else{
            echo "Deleting post coulnot be done";
        }
    }
}


?>