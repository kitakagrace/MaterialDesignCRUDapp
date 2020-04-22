<?php
require '../processors/dbConfig.php';


if (isset($_GET['edit'])) {
    $post_id = $_GET['edit'];
    $update = true;

    $record = mysqli_query($conn, "SELECT * FROM posts WHERE post_id = $post_id");

    $count = mysqli_num_rows($record);

    if ($count == 1) {
        $n = mysqli_fetch_array($record);
        $post_title = $n['post_title'];
        $post_desc  = $n['post_desc'];
        //echo "post found";
    }
}

if (isset($_POST['update'])) {
    $post_title = $_POST['post_title'];
    $post_desc = $_POST['post_desc'];

    
    $update = mysqli_query($conn, "UPDATE posts SET post_title ='$post_title', post_desc = '$post_desc' WHERE post_id = '$post_id'");

    if ($update) {
        header('location:../home.php');
    }elseif (!$update) {
        echo "Failed to update";
    }else{
        echo "Unknown error occured";
    }
}


?>
<html>
    <head>
        <title>Myself</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/editPost.css">
    </head>
    <body>
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
<form action="" method="post">
    <ul class="demo-list-item mdl-list">
        <li class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample3" name="post_title" value = "<?php echo $post_title; ?>">
            <label class="mdl-textfield__label" for="sample3">Title...</label>
            </div>
            </span>
        </li>
        <li class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="sample3" name="post_desc" value = "<?php echo $post_desc; ?>">
            <label class="mdl-textfield__label" for="sample3">Description...</label>
            </div>
            </span>
        </li>
        <li class="mdl-list__item">
        <input type="submit" value="UPDATE" name="update" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        </li>
        </ul>
    </form>
</div>
</body>
</html>

