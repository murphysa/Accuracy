<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_from = 'sethfilmstudios@gmail.com';
	
	$email_subject = "Accuracy Form Submition";
	
	$email_body = "Username : $name.\n".
					"User Email: $visitor_email.\n".
						"User Message: $message.\n";
	
	$to = "sethfilmstudios@gmail.com";
	
	$headers = "From: $email_from \r\n";
	
	$headers .= "Reply-To: $vistor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: Pages/Contact-Accuracy.html");
	
	
?>