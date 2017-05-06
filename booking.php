<?php
ob_start();
include('config.php');
$s = "SELECT id, phone FROM settings ORDER BY id DESC LIMIT 1";
  $r = mysqli_query($conn, $s);
  $rs = mysqli_fetch_assoc($r);
 $contactno = $rs['phone'];
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) &&	isset($_POST['datepicker']) &&	isset($_POST['timepicker']) &&	isset($_POST['offerprice'])){
		
		$offer_id = mysqli_real_escape_string($conn,$_POST['id']);
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$phone = mysqli_real_escape_string($conn,$_POST['phone']);
		echo $pickupdate = mysqli_real_escape_string($conn,$_POST['datepicker']);		
		$pickupdate = str_replace('/', '-', $pickupdate);
		$pickupdate1 = date('Y-m-d', strtotime($pickupdate));		
		$pickuptime = mysqli_real_escape_string($conn,$_POST['timepicker']);
		$pickuptime1 = date('h:i', strtotime($pickuptime));			
		$pickuplocation = mysqli_real_escape_string($conn,$_POST['pickuplocation']);
		$dropto = mysqli_real_escape_string($conn,$_POST['dropto']);
		$paymenttype = mysqli_real_escape_string($conn,$_POST['paymenttype']);		
		$offerprice = mysqli_real_escape_string($conn,$_POST['offerprice']);
		$pickspecification = mysqli_real_escape_string($conn,$_POST['pickspecification']);
		$dropspecification = mysqli_real_escape_string($conn,$_POST['dropspecification']);
		$cartype = mysqli_real_escape_string($conn,$_POST['cartype']);
		$carmodel = mysqli_real_escape_string($conn,$_POST['carmodel']);
			if(!empty($pickspecification)){
				$pickuplocation .= ' '.$pickspecification;
			}
			if(!empty($dropspecification)){
				$dropto .= ' '.$dropspecification;
			}
			if(!empty($name) && !empty($email) && !empty($phone) &&	!empty($pickupdate) &&	!empty($pickupdate) &&	!empty($pickuplocation) &&
			!empty($dropto)){
				
					$query2 = "SELECT u.name, u.email, o.* FROM offers o INNER JOIN users u ON u.id=o.user_id where o.id = '".$offer_id."';";	
					$result2 = mysqli_query($conn, $query2) or die(mysqli_error);
					$res = mysqli_fetch_assoc($result2);
					$offertime = $res['offertime'];
					$offertime1 = date('h:i', strtotime($offertime));	
					$offerdate = $res['offerdate'];
					$endtime = $res['endtime'];
					$endtime1 = date('h:i', strtotime($endtime));
					$enddate = $res['enddate'];
					$offerername = $res['name'];
					$offereremail = $res['email'];
					
					
			if($pickuptime1 >= $offertime1 && $pickuptime1 <= $endtime1 && $pickupdate1 >= $offerdate && $pickupdate1 <= $enddate){	
				
				$query = "INSERT INTO `booking`(`id`, `user_email`, `user_name`, `user_phone`, `offer_id`, `pickuplocation`,

						`droplocation`, `pickupdate`, `pickuptime`, `paymenttype`, `address`, `offerprice`)

						VALUES (NULL, '$email', '$name', '$phone', '$offer_id', '$pickuplocation', '$dropto',
						
						'$pickupdate1', '$pickuptime', '$paymenttype', '$address', '$offerprice');";
				$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
				if($result){
					if($paymenttype === 'banking'){						
						include('bookingdetailsmail.php');
						$message = "Dear $name,
						<p>We have received your request for booking the offer for renting a $cartype - $carmodel taxi from $pickuplocation to $dropto, on $pickupdate at $pickuptime. </p>
						<p>Please, transfer Rs. $offerprice to the following bank address immediately to complete this deal.</p>
						<br><br><br>
						
						Cab Oneway <br/>
						<p>Address : Fox Travels, No.324, D Subbaiah Road, Chamaraja Mohalla Mysore, Karnataka 570024 India</p>
						<p>Phone : 0821-6999-444</p>
						
						";						
						//header('Location: payment.php?message='.$message);	
						} 
					
				}else{
					$message =  'Somthing went wrong. Please try again';
				}			
				}else if(!empty($name) && !empty($email) && !empty($phone)  &&	!empty($pickuplocation) && !empty($dropto)){
					//header('Location: booknow.php?message=2');
									
						
				$query = "INSERT INTO `fixeddealbooking`(`bookingid`, `fixeddealsid`, `pickfrom`, `dropto`, `pickupdate`,

						`pickuptime`, `name`, `email`, `address`, `phone`, `price`, `paymentmode`, `status`) VALUES 
						
						(NULL, '$fixeddealsid', '$pickuplocation', '$dropto', '$pickupdate1', '$pickuptime', '$name',
						
						'$email', '$pickuplocation', '$phone', '$price', '$paymenttype', 'booked');";
						
				$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
				if($result){
					if($paymenttype === 'banking'){						
						include('bookingdetailsmail.php');
						$message = "Dear $name,
						<p>We have received your request for booking the offer for renting a ($cartype - $carmodel) taxi from $pickuplocation to $dropto, on $pickupdate at $pickuptime. </p>
						<p>Please, transfer Rs. $offerprice to the following bank address immediately to complete this deal.</p>
						<br><br><br>
						Please read our <a href = 'http://onewaydrop.com/caboneway.com/terms.php'>Terms & Conditions</a>.
						Cab Oneway <br/>
						<p>Address : Fox Travels, No.324, D Subbaiah Road, <br/>Chamaraja Mohalla Mysore, Karnataka 570024 India</p>
						<p>Phone : 0821-6999-444</p>";
						$_SESSION['offertime'] = '';
						$_SESSION['endtime'] = '';
						//session_destroy(); 						
						//header('Location: payment.php?message=1');
						
						} 						
				}else{
					$message = 'Somthing went wrong. Please try again';
				}
				
				}else {
					$message = 'Pickup date and time doesnot mathch.';				
								
				}
				
			}else{
				//header('Location: booknow.php?message=1');
			}
	}else{
		//header('Location: booknow.php?message=1');
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
<a href="http://caboneway.com/" class="w3-bar-item w3-top w3-left w3-button "><img src="images/logo.png"  width="160px"></a>
<div class="w3-right">
<a href="tel: +91 821 6999444" class="w3-button w3-bar-item w3-border w3-text-yellow w3-border-yellow w3-round"> <?php if(isset($contactno)){echo $contactno;}?><i class="fa fa-phone"></i> </a> &nbsp;
  </div>
 
</header>


<div class="w3-container  w3-padding">
<br><br>
<div class="w3-col l8 s12 w3-padding">
<div class="w3-section w3-row-padding">
	<p><?php 
	if(isset($message)){		
		echo $message;
	}
	?></p>
	</br>
	
	</div>


	
</div>

</div>

<footer class="w3-container w3-padding-64 w3-grey w3-center w3-opacity w3-xxlarge" > 
  <i class="fa fa-facebook-official w3-blue w3-hover-opacity"></i>
  
  <p class="w3-medium">Powered by <a href="http://www.siteurl.in" target="_blank" class="w3-hover-text-green">SiteURL</a></p>
</footer>


</body>
</html>


