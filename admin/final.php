<?php
include('config.php');

if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['password']) && !empty($_GET['password'])){
	
		$email = isset($_GET['email']) ? mysqli_real_escape_string($conn, $_GET['email']) :  "";
		$password = isset($_GET['password']) ? mysqli_real_escape_string($conn, $_GET['password']) :  "";
		$encrypted_password = md5($password);
		$encrypted_password = md5($password);		
		$sid = isset($_GET['sid']) ? mysqli_real_escape_string($conn, $_GET['sid']) :  "";
		
			$query = "Select * from users where email = '".mysqli_real_escape_string($conn, $email)."' and password = '".mysqli_real_escape_string($conn, $encrypted_password)."' and usertype = 'admin';";
			$result = mysqli_query($conn, $query);
			$res = mysqli_fetch_assoc($result);
			
			$user_id = $res['id'];
			$name = $res['name'];
			$approval = $res['approval'];
			$city = $res['city'];
			
			if ($approval == 1){
			
				if(mysqli_num_rows($result) ==1){
					$sid = md5(rand(0,1000));
					$query1 = "UPDATE `users` SET sid = '$sid' WHERE email = '$email'; ";
					$result1 = mysqli_query($conn, $query1);
					
				/* $json = array('data' => $arr = array() ,$arr[]= array( 				
					'Success' => 1, 'Message' => 'Welcome you have successfully logged in', 'sid' => $sid, 'email' => $email, 'name' => $name, 'user_id' => $user_id ));*/
					$json = array('data' => $arr = array(array( 				
					'Success' => 1, 'Message' => 'Welcome you have successfully logged in', 'sid' => $sid, 'email' => $email, 'name' => $name, 'user_id' => $user_id, 'city' => $city ))); 
					echo json_encode($json, JSON_PRETTY_PRINT);
				}else{
				  $json['error'] = ' Wrong email id or  password ';
				  $json = array('Error' => 0, 'Message' => ' Wrong email id or  password.');
				  echo json_encode($json, JSON_PRETTY_PRINT);
				}
			}else{
				$json = array('Error' => 0, 'Message' => ' Complete your registration by clicking the link sent to your email address and the try logging in.');
				 echo json_encode($json);
			}
		}else{
    // Invalid approach
   $json['error'] =  " Please enter both email and password ";
					echo json_encode($json,JSON_PRETTY_PRINT);  
}

?>