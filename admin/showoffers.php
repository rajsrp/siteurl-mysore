<?php
include_once('config.php');
		
		$query = "SELECT u.*, o.*  FROM users u, offers o WHERE u.id=o.user_id AND usertype='agent';";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result)>=1){		
			 
				while($users = mysqli_fetch_assoc($result)) {					
					$id = $users['id'];
					$user_id = $users['user_id'];
					$name = $users['name'];
					$offerdate = $users['offerdate'];
					$offertime = $users['offertime'];
					$pickfrom = $users['pickfrom'];
					$dropto = $users['dropto'];
					$deviatefromdistance = $users['deviatefromdistance'];
					$deviatetodistance = $users['deviatetodistance'];
					$offerprice = $users['offerprice'];
					$json[] = $users;						
				} 
			//echo json_encode($json);
			}else{
				$json = array('Error' => 0, 'Message' => 'No rides found');
				echo json_encode($json);
				}		

	
?>