<?php require 'views/navBar.php';
require 'processors/sessionLogger.php';
require 'processors/dbConfig.php';

$postSelect  = mysqli_query($conn, "SELECT * FROM posts ORDER BY post_id DESC");


?>
<html>
    <head>
        <title>Myself</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
    <main class="mdl-layout__content">
        <div class="page-content">
<!-- Button for opening dialong box -->           
<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored show-modal float-Btn">
            <i class="material-icons">add</i>
            </button>
<!-- Dialog box for posting -->
    <dialog class="mdl-dialog">
    <div class="mdl-dialog__content">
    <form action="processors/postProcessor.php" method="post">
    <ul class="demo-list-item mdl-list">
        <li class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
            <div class="mdl-textfield mdl-js-textfield">
            <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name="post_title"></textarea>
            <label class="mdl-textfield__label" for="sample5">Post title...</label>
            </div>
            </span>
        </li>
        <li class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
            <div class="mdl-textfield mdl-js-textfield">
            <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name="post_desc" ></textarea>
            <label class="mdl-textfield__label" for="sample5">Post description...</label>
            </div>
            </span>
        </li>
        <li class="mdl-list__item">
        <input type="submit" value="POST" name="post" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        </li>
        </ul>
    </form>
    
    </div>
    <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
      <button type="button" class="mdl-button close">CANCEL</button>
    </div>
  </dialog>
        </div>

        <div class="post-display">
        <?php
            while ($row = mysqli_fetch_row($postSelect)) {
                echo '
                <ul demo-list-item mdl-list">
                <li class="mdl-list__item">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                <h4>'.$row[1].'</h4>
                <p>'.$row[2].'</p>
                <a class="edit-Link" href="views/editPost.php?edit='.$row[0].' ">Edit</a>
                <a class="delete-Link" href="processors/deletePost.php?delete='.$row[0].' ">Delete</a>
                </div>
                </li>
                </ul>

                ';
            }
        ?>
        <?php 
// <php code for counting items in database>  foreach($conn->query('SELECT COUNT(*) FROM posts') as $row){   echo "<p>". $row['COUNT(*)']."</p>";}
?>
        </div>
 </main>
</div>
<!-- Js for opening a dialong box -->
<script>
    var dialog = document.querySelector('dialog');
    var showModalButton = document.querySelector('.show-modal');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showModalButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
  </script>
    </body>
</html>