<?php
        $severname = "localhost";
        $username = "root";
        $password = "";
        $db = "myself";
        
        $conn = mysqli_connect($severname, $username ,$password, $db);

?>
<html>
    <head>
        <title>Myself</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </head>
    <body>
  <!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon"
               for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp">
        </div>
      </div>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Myself</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="../myself/home.php">HOME</a>
      <a class="mdl-navigation__link" href="#">POSTS<span>
        <?php
        foreach($conn->query('SELECT COUNT(*) FROM posts') as $row){
          echo "<span class='mdl-button--accent'>". $row['COUNT(*)']. "</span>";
       }
        ?>
        </span>
        </a>
        <a class="mdl-navigation__link" href="#">USERS<span>
        <?php
        $severname = "localhost";
        $username = "root";
        $password = "";
        $db = "myself";
        
        $conn = mysqli_connect($severname, $username ,$password, $db);
        foreach($conn->query('SELECT COUNT(*) FROM users') as $row){
          echo "<span class='mdl-button--accent'>". $row['COUNT(*)']. "</span>";
       }
        ?>
        </span>
        </a>

      <a class="mdl-navigation__link" href="../myself/processors/signOut.php">LOGOUT</a>
      
    </nav>
  </div>

</div>
<br>

    </body>
</html>