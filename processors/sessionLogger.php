<?php  
session_start();  
if (!isset($_SESSION["loggedin"]) ||
$_SESSION["loggedin"] !== true) {
  header("location:index.php");
  exit;
}
//This file makes sure people are logged in Before they access the other pages.
?>