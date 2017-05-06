<?php
include_once('config.php');
if(isset($_GET['offerid'])){
	$offerid = $_GET['offerid'];
	$query = "SELECT * from counters where offerid = '$offerid';";	
	$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result)>=1){		
				while($users = mysqli_fetch_assoc($result)) {
				$query0 = "SELECT status from offers where id = '$offerid';";	
				$result0 = mysqli_query($conn, $query0);
				$result0 = mysqli_fetch_assoc($result0);
				$offerstatus = $result0['status'];
				
				$query1 = "SELECT status from deals where offerid = '$offerid';";	
				$result1 = mysqli_query($conn, $query1);
				$result1 = mysqli_fetch_assoc($result1);
				$dealstatus = $result0['status'];
				
				$offerid = $users['offerid'];
				$id = $users['id'];	
				$name = $users['name'];
				$counterdatetime = $users['counterdatetime'];
				$counterprice = $users['counterprice'];
				$status = $users['status'];
				$users['offerstatus']=$offerstatus;
				$users['dealstatus']=$dealstatus;
				$users['Error'] = 1;
				$json[] = $users;
				json_encode($json);	
				$errorvalue = $json[0]['Error'];	
			}
			//echo $json[0]['Error'];
		}else{	
				
				$json[] = array('Error' => 2, 'Message' => 'Sorry! No counters for this offer.');
				echo $json[0]['Message'];
				//echo json_encode($json[0]['Message']);		
				$errorvalue = $json[0]['Error'];					
					
			}				

	}else{
		$json = array('Error' => 1, 'Message' => 'LOGIN to access');
		echo json_encode($json);	
}

?>