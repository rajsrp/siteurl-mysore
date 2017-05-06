<?php session_start();
unset($_SESSION["username"]);  
session_destroy();
header("Location: login.php");?>
<?php include 'header1.php'; ?>

















<?php include 'footer1.php'; ?>

