<?php
$severname = "localhost";
$username = "root";
$password = "";
$db = "myself";

$conn = mysqli_connect($severname, $username ,$password, $db);

if ($conn) {
    echo "<p>Connected to database with database credentials</p>";
}else{
    echo "<p>Connection error : Not connected to the database</p>";
}


?>