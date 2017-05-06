<?php
include 'config.php';

/* $usertype = $_SESSION['usertype'];
    if(!isset($_SESSION['username']) && $role!="admin"){
		header('Location: index.php?err=2');
    }else if(isset($_SESSION['username']) && $role = "admin"){ */
 
	$query = "SELECT u.*, t.* FROM users u, transactions t WHERE u.id = t.user_id AND  usertype = 'agent';";

	$result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn)." ".$query);
	
	while($users = mysqli_fetch_assoc($result)){
		$userid = $users['user_id'];
		$name = $users['name'];
		$email = $users['email'];
		$phone = $users['phone'];
		$agency = $users['agency'];
		$address = $users['address'];
		$city = $users['city'];
		$pin = $users['pin'];
		$noofvehicles = $users['noofvehicles'];
		$password = $users['password'];
		$resetpasswordkey = $users['resetpasswordkey'];
		$position = $users['position'];
		$regdate = $users['regdate'];
		$emailverified = $users['emailverified'];
		$mobileverified = $users['mobileverified'];
		$usertype = $users['usertype'];
		$approval = $users['approval'];
		$balance = $users['balance'];
		$json[] = $users;
	}
	//}
//echo json_encode($json);
?>