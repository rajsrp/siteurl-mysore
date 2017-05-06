<?php
include_once('config.php');
error_reporting(E_ALL);

$id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) :  "";

$quote = isset($_GET['amount']) ? mysqli_real_escape_string($conn, $_GET['amount']) :  "";

$offerid = isset($_GET['offerid']) ? mysqli_real_escape_string($conn, $_GET['offerid']) :  "";

$query = "INSERT INTO `counters`(`counterprice`) VALUES ('$quote') WHERE offerid = '$offerid';";

$result = mysqli_query($conn, $query) or die ("something went wrong please try later " .mysqli_error($conn));

header('location :view-offers.php');


?>