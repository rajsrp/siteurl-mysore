<?php
include_once('config.php');
$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) :  "";
$password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) :  "";

$encrypeted_password = md5($password);

$encrypeted_password = md5($encrypeted_password);

$query = "SELECT email, password FROM `admin` WHERE email='$email' AND  password='$encrypeted_password';";
$result = mysqli_query($conn, $query);
$res = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);
if($count == 0){
	
	header('location:index.php?err=2');
	//echo "Enter valid username and password";
	}else{	
			$_SESSION['name'] = 'Admin';
			header('location:manage-users.php');	
	}
header('Content-type: application/json');
echo json_encode($result);
?>