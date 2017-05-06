<?php 
include_once('config.php');

if(isset($_POST['email'])){
	
	$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) :  "";

	$query = "SELECT * FROM `users` WHERE email= '".mysqli_real_escape_string($conn, $email)."';";

	$result = mysqli_query($conn, $query);


		if(mysqli_num_rows($result) > 0){
			$json['success'] = $email. " Email already exists";
			echo json_encode($json,JSON_PRETTY_PRINT);
			//header('Location: add-user.php?err=1');
		} else { 
		
		$id = isset($_POST['id']) ? mysqli_real_escape_string($conn, $_POST['id']) :  "";
		$id = sha1($id);
		$name = isset($_POST['name']) ? mysqli_real_escape_string($conn, $_POST['name']) :  "";
		$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) :  "";
		$password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) :  "";
		$encrypted_password = md5($password);
		$encrypted_password = md5($password);
		$resetpasswordkey = isset($_POST['resetpasswordkey']) ? mysqli_real_escape_string($conn, $_POST['resetpasswordkey']) :  "";
		$phone = isset($_POST['phone']) ? mysqli_real_escape_string($conn, $_POST['phone']) :  "";
		$agency = isset($_POST['agency']) ? mysqli_real_escape_string($conn, $_POST['agency']) :  "";
		$address = isset($_POST['address']) ? mysqli_real_escape_string($conn, $_POST['address']) :  "";
		$city = isset($_POST['city']) ? mysqli_real_escape_string($conn, $_POST['city']) :  "";
		$pin = isset($_POST['pin']) ? mysqli_real_escape_string($conn, $_POST['pin']) :  "";
		$position = isset($_POST['position']) ? mysqli_real_escape_string($conn, $_POST['position']) :  "";
		$noofvehicles = isset($_POST['noofvehicles']) ? mysqli_real_escape_string($conn, $_POST['noofvehicles']) :  "";
		$regdate = isset($_POST['regdate']) ? mysqli_real_escape_string($conn, $_POST['regdate']) :  "";
		$regdate = date('Y-m-d H:i:s',strtotime($regdate));
		$emailverified = isset($_POST['emailverified']) ? mysqli_real_escape_string($conn, $_POST['emailverified']) :  "";
		$mobileverified = isset($_POST['mobileverified']) ? mysqli_real_escape_string($conn, $_POST['mobileverified']) :  "";
		$approval = isset($_POST['approval']) ? mysqli_real_escape_string($conn, $_POST['approval']) :  "";
		$usertype = isset($_POST['usertype']) ? mysqli_real_escape_string($conn, $_POST['usertype']) :  "";
		$hash = isset($_POST['hash']) ? mysqli_real_escape_string($conn, $_POST['hash']) :  "";
		$encrypted_hash = md5(rand(0,1000));
		
$query1 = "INSERT INTO `users`(`id`, `name`, `email`, `phone`,
		
		`password`, `resetpasswordkey`, `agency`, `address`,

		`city`, `pin`, `position`, `noofvehicles`, `regdate`,

		`emailverified`, `mobileverified`, `usertype`, `approval`, `hash`)

		VALUES (NULL, '$name', '$email', '$phone', 
				
		'$encrypted_password', 0, '$agency', '$address',
		
		'$city', '$pin', '$position', '$noofvehicles', now(),
		
		'yes', 'yes', 'agent', 0, '$encrypted_hash');"; 

$result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
	if($result1){	
		$query3 = "select id from users where email = '".$email."';";
		$result3 = mysqli_query($conn, $query);
		$res3 =mysqli_fetch_assoc($result3);
		$userid = $res3['id'];
			if(mysqli_num_rows($result3)==1){
				$query4 = "INSERT into transactions (user_id, balance) VALUES ('$userid', 0);";
				$result4 = mysqli_query($conn, $query4);
			}
		$json = array();
		$json[] = array('Success' => 1, 'Message' =>  'Email has been sent to' .$email);
		echo json_encode($json,JSON_PRETTY_PRINT);
		//header('Location: manage-users.php?err=1');
	
	}else{
		$json = array('Error' => 0, 'Message' =>  'Could not complete the process. Please try again');
		echo json_encode($json,JSON_PRETTY_PRINT);
		//header('Location: add-user.php?err=2');
	}	
}
}
?>