<?php
ob_start();
$to = $email;
$subject = "Caboneway booking.";


$message = "<br>
				<html>
					<head>
					<style>
						.w3-container{
							width : 800px;
							height : 200px;
							background-color: #FAF9F9;
							font-color : #000000;
							font-size : 14px;
							margin : 2px 1px 1px 2px;
						}
					</style>
					</head>
					<body>
						<div class ='w3-container'>
						Dear $name,
						<p>We have received your request for booking the offer for renting a $cartype - $carmodel taxi from $pickuplocation to $dropto, on $pickupdate at $pickuptime. </p>
						<p>Please, transfer Rs. $offerprice to the following bank address immediately to complete this deal.</p>
						<br><br><br>
						Please read our <a href = 'http://onewaydrop.com/caboneway.com/terms.php'>Terms & Conditions</a>.
						Cab Oneway <br/>
						<p>Address : Fox Travels, No.324, D Subbaiah Road, <br/> Chamaraja Mohalla Mysore, Karnataka 570024 India</p>
						<p>Phone : 0821-6999-444</p>
						</div>
					<body>
				</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Oneway Taxi <info@caboneway.com>' . "\r\n";


if(mail($to,$subject,$message,$headers)){
	//echo 'sent';
//header('Location: index.php?message=1');
}
$fromemail = 'info@caboneway.com';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Caboneway  <info@caboneway.com>' . "\r\n";
//$headers .= 'Bcc: Anand <anandmys@gmail.com>' . "\r\n";
//$headers .= 'Bcc: Rajesh <rajesh@siteurl.in>' . "\r\n";
$headers .= 'Reply-To: '.$name.'<'.$email.'>' . "\r\n";
$subject ="You have received a new booking. " . $name;
$message = "Name: ".$name . "<br>"; 
$message .= "Enquiry Phone:" .$phone . "<br>"; 
$message .= "Customer Email: " .$email . "<br>";
$message .= "Pick From:" .$pickuplocation . "<br>";
$message .= "Drop To:" .$dropto . "<br>";
$message .= "Pick Date:" .$pickupdate . "<br>";
$message .= "Drop Time:" .$pickuptime . "<br>";
$message .= "Total Price:" .$offerprice . "<br>";
$message .= "Car Type:" .$carmodel . "<br>";
$message .= "Car Model:" .$cartype . "<br>";

$to = $fromemail;
mail($to,$subject,$message,$headers);
?>