<?php header('Access-Control-Allow-Origin: *'); ?>
<?php header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept'); ?>
<?php header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT'); ?>
<?php

define("DB_HOST", "localhost");
define("DB_USER", "raj");
define("DB_PASSWORD", "siteurl");
define("DB_NAME", "cab");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) or die ("could not connect to mysql");
mysqli_select_db($conn, DB_NAME) or die ("no database");
session_start();

?>
