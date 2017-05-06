<?php
$fromemail="info@caboneway.com";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: OneWay Taxi <'.$fromemail.'>' . "\r\n";
$subject ="Thank you for your enquiry";
$message = "Dear " . $name .",<br><br>";

$message .= "Thank you for contacting OneWay Taxi. Our customer service executive will get in touch with you soon.<br><br>Customer Support<br>Oneway Taxi.<br>email: info@caboneway.com<br>"; 
$to = $email;
mail($to,$subject,$message,$headers);

//email to client service

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: OneWay Taxi <info@caboneway.com>' . "\r\n";
//$headers .= 'Bcc: Anand <anandmys@gmail.com>' . "\r\n";
//$headers .= 'Bcc: Rajesh <rajesh@siteurl.in>' . "\r\n";
$headers .= 'Reply-To: '.$name.'<'.$email.'>' . "\r\n";
$subject ="You have received a new enquiry from " . $name;
$message = "Name: ".$name . "<br>"; 
$message .= "Enquiry Phone:" .$phone . "<br>"; 
$message .= "Customer Email: " .$email . "<br>";
$message .= "Comments:" .$message . "<br>";

$to = $fromemail;
mail($to,$subject,$message,$headers);
 
?>