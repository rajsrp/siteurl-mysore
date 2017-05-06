<?php 
include 'config.php'; 
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $query = "SELECT * from users where id = '".mysqli_real_escape_string($conn,$id)."';";
 $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  
  $name ="";
  $email ="";
  $phone ="";
  $agency = "";
  $address ="";
  $city = "";
  $pin = "";
  $noofvehicles = ""; 
  
while($users = mysqli_fetch_assoc($result)){
	$id = $users['id'];
	$name = $users['name'];
	$email = $users['email'];
	$phone = $users['phone'];
	$agency = $users['agency'];
	$address =$users['address'];
	$city = $users['city'];
	$json[] = $users;
	}
	
}
?>