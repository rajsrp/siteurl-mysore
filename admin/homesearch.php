<?php
if(isset($_POST['search']) && !empty($_POST['search'])) {
				
					$searchvalue = $_POST['searchvalue'];
					if(empty($searchvalue)){
						echo 'Please enter name or agency name';
					}else{
					$query1 = "SELECT u.*, t.* FROM users u, transactions t WHERE u.id = t.user_id AND u.name = '".$searchvalue."' or u.agency = '".$searchvalue."';";

					$result = mysqli_query($conn, $query1) or trigger_error(mysqli_error($conn)." ".$query1);
						
					while($users1 = mysqli_fetch_array($result)){
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
						
						$json[]=$users1;
						//echo json_encode($json1);
						
						}	
				
				
					

	
}		}
?>