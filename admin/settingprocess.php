<?php
include ('config.php');
	 if(isset($_POST['servicename']) && isset($_POST['serviceaddress']) && isset($_POST['serviceemail']) && isset($_POST['servicephone']) &&	isset($_POST['commission'])&& isset($_POST['payment'])){
		
		$servicename = mysqli_real_escape_string($conn, $_POST['servicename']);
		$serviceaddress = mysqli_real_escape_string($conn,$_POST['serviceaddress']);
		$serviceemail = mysqli_real_escape_string($conn,$_POST['serviceemail']);
		$servicephone = mysqli_real_escape_string($conn,$_POST['servicephone']);
		$commission = mysqli_real_escape_string($conn,$_POST['commission']);
		$commissiontype = mysqli_real_escape_string($conn,$_POST['payment']);
		$smtpserver = mysqli_real_escape_string($conn,$_POST['smtpserver']);
		$smtpuser = mysqli_real_escape_string($conn,$_POST['smtpuser']);
		$smtppassword = mysqli_real_escape_string($conn,$_POST['smtppassword']);
		$apikey = mysqli_real_escape_string($conn,$_POST['apikey']);
		$termsandcondition = mysqli_real_escape_string($conn,$_POST['termsandcondition']); 
		$phone = mysqli_real_escape_string($conn,$_POST['phone']); 
		
		if(!empty($servername) && !empty($serveraddress) && !empty($serviceemail) && !empty($servicephone) && !empty($commision) && !empty($commisiontype)){
	 		
			echo $query = "INSERT INTO `settings`(`id`, `servicename`, `serviceaddress`, `serviceemail`, `servicephone`,

											`commission`, `commissiontype`, `smtpserver`, `smtpuser`, `smtppassword`,

											`apikey`, `termsandcondition`, `phone`) VALUES (NULL, '$servicename', '$serviceaddress', '$serviceemail',

											'$servicephone', '$commission', '$commissiontype', '$smtpserver', '$smtpuser',

											'$smtppassword', '$apikey', '$termsandcondition', '$phone')";
											
			$result = mysqli_query($conn, $query) or die (mysqli_error($conn)); 	
			
		  }
			
		} 
		
	/* }else */
?>