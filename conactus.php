<?php
include('config.php');
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])){	
	$name =  mysqli_real_escape_string($conn, $_POST['name']);
	$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
	$email =  mysqli_real_escape_string($conn, $_POST['email']);
	$email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
	$phone =  mysqli_real_escape_string($conn, $_POST['phone']);
	$phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
	$message =  mysqli_real_escape_string($conn, $_POST['message']);
	$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
	
	
	$query ="INSERT INTO `enquiry`(`id`, `name`, `email`, `phone`, `message`) VALUES
	
		(NULL, '".$name."', '".$email."', '".$phone."', '".$message."')";
	$result = mysqli_query($conn, $query);	
	if($result){
		include('enquirymail.php');
		$message = "Dear $name,
				<p>Thank you for contacting OneWay Taxi. Our customer service executive will get in touch with you soon.</p>		
						<br><br><br>
						
						Cab Oneway <br/>
						<p>Address : Fox Travels, No.324, D Subbaiah Road, Chamaraja Mohalla Mysore, Karnataka 570024 India</p>
						<p>Phone : 0821-6999-444</p>";
	}else{
		//header("Location: thankyou.php?message=3");
		$message = "Something went wrong. Please try again.";
	}
	
}else{
//header("Location: index.php?message=2");
}
?>
<!DOCTYPE html>
<html>
<title>Cab Oneway</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!--<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">-->
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-vivid.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
 <script src="myScript.js"></script>
<body class="w3-theme">



<!-- Header -->
<header class="w3-container w3-bar w3-dark-grey  w3-padding " id="myHeader">
<a href="#" class="w3-bar-item w3-top w3-left w3-button "><img src="images/logo.png"  width="160px"></a>
<div class="w3-right">
<a href="#" class="w3-button w3-bar-item w3-border w3-text-yellow w3-border-yellow w3-round"> <i class="fa fa-phone"></i> </a> &nbsp;
  </div>
 
</header>


<div class="w3-container  w3-padding">
<br><br>
<div class="w3-col l8 s12 w3-padding">
<?php if(isset($message)){
echo $message;
}?>
<div>
<?php

?>

</div>

	
</div>



<div class="w3-col l4 s12 w3-padding">
<div class="w3-container ">

<?php include 'sidebar.php' ?>
</div>

</div>

</div>


<footer class="w3-container w3-padding-64 w3-grey w3-center w3-opacity w3-xxlarge" > 
  <i class="fa fa-facebook-official w3-blue w3-hover-opacity"></i>
  
  <p class="w3-medium">Powered by <a href="https://www.siteurl.in" target="_blank" class="w3-hover-text-green">SiteURL</a></p>
</footer>


</body>
</html>
