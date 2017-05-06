<?php
include('config.php');
						date_default_timezone_set('Etc/UTC');
						require 'PHPMailerAutoload.php';
						$mail = new PHPMailer;
						$mail->isSMTP();		
						$mail->SMTPDebug = 2;
						$mail->Debugoutput = 'html';
						$mail->Host ='smtp.gmail.com';
						$mail->Port = 465;
						$mail->SMTPSecure = 'ssl';
						$mail->SMTPAuth = true ;
						$mail->Username = 'onewaytaxidrop@gmail.com';
						$mail->Password = 'siteurl123';
						$mail->setFrom('testing@oneway.com', 'onewaytaxi');
						$mail->addAddress($email, 'Anand');
						$mail->Subject = 'Email Verification';
						$mail->msgHTML("     'Hi,
												<br />
												counter has been sent. Wait for acceptance. In the meanwhile you can look at other offers, Your counter is binding on you for next 24 hours.
												<br />
												 '");
						
						if (!$mail->send()) {
							echo "Mailer Error: " . $mail->ErrorInfo;
						} else {
							echo "Message sent!";
						}					
?>