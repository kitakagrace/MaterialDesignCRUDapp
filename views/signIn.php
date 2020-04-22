<html>
<head>
<title>Myself</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<link rel="shortcut icon" href="images/fav.png" type="image/x-icon">
<link rel="stylesheet" href="../css/signin.css">
</head>
<body>
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
        <h3 class="register">SIGN IN</h3>
    <form action="../processors/validateuser.php" method="post">
        <ul class="demo-list-item mdl-list">
        <li class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="email" id="sample3" name="email">
            <label class="mdl-textfield__label" for="sample3">Email...</label>
            </div>
            </span>
        </li>
        <li class="mdl-list__item">
            <span class="mdl-list__item-primary-content">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="password" id="sample3" name="password">
            <label class="mdl-textfield__label" for="sample3">Password...</label>
            </div>
            </span>
        </li>
        <li class="mdl-list__item">
        <input type="submit" value="SIGN IN" name="signin" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        </li>
        </ul>
        </form>
        <div class="mdl-card__actions mdl-card--border">
        <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="../index.php">
        not a member? sign up
        </a>
        </div>
    </div>
</body>
</html>
