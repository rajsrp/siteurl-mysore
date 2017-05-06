<?php
include ('config.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];	
	$query = "UPDATE offers SET status = 'suspended' WHERE id='$id';";
	$result = mysqli_query($conn, $query) or die ("udpate failed  ".mysqli_error($conn));
}
?>