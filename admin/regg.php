<?php 
include_once('config.php');

 $email = isset($_GET['email']) ? mysqli_real_escape_string($conn, $_GET['email']) :  "";

$query = "SELECT * FROM `users` WHERE email= '$email';";

$result = mysqli_query($conn, $query);

/* $res = mysqli_fetch_assoc($result);
$_SESSION['email'] = $res['email'];
echo $_SESSION['email']; */
 	if(mysqli_num_rows($result) > 0){
		$json['success'] = $email. " Email already exists";
		echo json_encode($json);
	} else {  
	
	$id = isset($_GET['id']) ? mysqli_real_escape_string($conn, $_GET['id']) :  "";
	$name = isset($_GET['name']) ? mysqli_real_escape_string($conn, $_GET['name']) :  "";
	$email = isset($_GET['email']) ? mysqli_real_escape_string($conn, $_GET['email']) :  "";
	$password = isset($_GET['password']) ? mysqli_real_escape_string($conn, $_GET['password']) :  "";
	$resetpasswordkey = isset($_GET['resetpasswordkey']) ? mysqli_real_escape_string($conn, $_GET['resetpasswordkey']) :  "";
	$phone = isset($_GET['phone']) ? mysqli_real_escape_string($conn, $_GET['phone']) :  "";
	$agency = isset($_GET['agency']) ? mysqli_real_escape_string($conn, $_GET['agency']) :  "";
	$address = isset($_GET['address']) ? mysqli_real_escape_string($conn, $_GET['address']) :  "";
	$city = isset($_GET['city']) ? mysqli_real_escape_string($conn, $_GET['city']) :  "";
	$pin = isset($_GET['pin']) ? mysqli_real_escape_string($conn, $_GET['pin']) :  "";
	$position = isset($_GET['position']) ? mysqli_real_escape_string($conn, $_GET['position']) :  "";
	$noofvehicles = isset($_GET['noofvehicles']) ? mysqli_real_escape_string($conn, $_GET['noofvehicles']) :  "";
	$regdate = isset($_GET['regdate']) ? mysqli_real_escape_string($conn, $_GET['regdate']) :  "";
	
	$emailverified = isset($_GET['emailverified']) ? mysqli_real_escape_string($conn, $_GET['emailverified']) :  "";
	$mobileverified = isset($_GET['mobileverified']) ? mysqli_real_escape_string($conn, $_GET['mobileverified']) :  "";
	$approval = isset($_GET['approval']) ? mysqli_real_escape_string($conn, $_GET['approval']) :  "";
	$usertype = isset($_GET['usertype']) ? mysqli_real_escape_string($conn, $_GET['usertype']) :  "";
	

		
$query1 = "INSERT INTO `users`(`id`, `name`, `email`, `phone`,
		
		`password`, `resetpasswordkey`, `agency`, `address`,

		`city`, `pin`, `position`, `noofvehicles`, `regdate`,

		`emailverified`, `mobileverified`, `usertype`, `approval`)

		VALUES (NULL, '$name', '$email', '$phone', 
				
		'$password', 0, '$agency', '$address',
		
		'$city', '$pin', '$position', '$noofvehicles', date('Y-m-d H:i:s', strtotime($regdate)),
		
		'yes', 'yes', 'agent', 0);";
		
 

$result1 = mysqli_query($conn, $query1) or die ("could not update " .mysqli_error($conn));	

	 	$json['inserted'] =  " Regestered successfully ";
		echo json_encode($json); 
	
	}
header('Content-Type application/json');
?>