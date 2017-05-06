<?php
include ('config.php');
	if(isset($_POST['id'])  && isset($_POST['servicename']) && isset($_POST['serviceaddress']) && isset($_POST['serviceemail']) && isset($_POST['servicephone']) &&	isset($_POST['commission'])&& isset($_POST['payment'])){
		
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$servicename = mysqli_real_escape_string($conn, $_POST['servicename']);
		$serviceaddress = mysqli_real_escape_string($conn,$_POST['serviceaddress']);
		$serviceemail = mysqli_real_escape_string($conn,$_POST['serviceemail']);
		$servicephone = mysqli_real_escape_string($conn,$_POST['servicephone']);
		$commission = mysqli_real_escape_string($conn,$_POST['commission']);
		$commissiontype = mysqli_real_escape_string($conn,$_POST['payment']);
		$termsandcondition = mysqli_real_escape_string($conn,$_POST['termsandcondition']); 
		$phone = mysqli_real_escape_string($conn,$_POST['phone']); 
		
		$query = "UPDATE settings SET servicename = '".$servicename."', serviceaddress = '".$serviceaddress."', serviceemail = '".$serviceemail."',

				servicephone = '".$servicephone."', commission = '".$commission."', commissiontype = '".$commissiontype."', termsandcondition = '".$termsandcondition."',
				
				phone = '".$phone."' WHERE id = '".$id."';";
				
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
		if($result){
			header('Location: settings.php');
		}
	}
?>