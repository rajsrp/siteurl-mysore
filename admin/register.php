<?php include 'config.php' ?>

<?php

	$id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) :  "";
	$name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) :  "";
	$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) :  "";
	$password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) :  "";
	$resetpasswordkey = isset($_POST['resetpasswordkey']) ? mysqli_real_escape_string($conn, $_POST['resetpasswordkey']) :  "";
	$phone = isset($_POST['phone']) ? mysqli_real_escape_string($conn, $_POST['phone']) :  "";
	$agency = isset($_POST['agency']) ? mysqli_real_escape_string($conn, $_POST['agency']) :  "";
	$address = isset($_POST['address']) ? mysqli_real_escape_string($conn, $_POST['address']) :  "";
	$city = isset($_POST['city']) ? mysqli_real_escape_string($conn, $_POST['city']) :  "";
	$pin = isset($_POST['pin']) ? mysqli_real_escape_string($conn, $_POST['pin']) :  "";
	$position = isset($_POST['position']) ? mysqli_real_escape_string($conn, $_POST['position']) :  "";
	$noofvehicles = isset($_POST['noofvehicles']) ? mysqli_real_escape_string($conn, $_POST['noofvehicles']) :  "";
	$regdate = isset($_POST['regdate']) ? mysqli_real_escape_string($conn, $_POST['regdate']) :  "";
	$emailverified = isset($_POST['emailverified']) ? mysqli_real_escape_string($conn, $_POST['emailverified']) :  "";
	$mobileverified = isset($_POST['mobileverified']) ? mysqli_real_escape_string($conn, $_POST['mobileverified']) :  "";
	$approval = isset($_POST['approval']) ? mysqli_real_escape_string($conn, $_POST['approval']) :  "";
	$usertype = isset($_POST['usertype']) ? mysqli_real_escape_string($conn, $_POST['usertype']) :  "";

		
$query = "INSERT INTO `users`(`id`, `name`, `email`, `phone`,
		
		`password`, `resetpasswordkey`, `agency`, `address`,

		`city`, `pin`, `position`, `noofvehicles`, `regdate`,

		`emailverified`, `mobileverified`, `usertype`, `approval`)

		VALUES (NULL, '$name', '$email', '$phone', 
				
		'$password', 0, '$agency', '$address',
		
		'$city', '$pin', '$position', '$noofvehicles', 'now()',
		
		'yes', 'yes', 'agent', 0);";
//$result = mysqli_query($conn, $query);
$result = mysqli_query($conn, $query) or die ("could not update " .mysqli_error($conn));



header('Location: login.php');
	


?>