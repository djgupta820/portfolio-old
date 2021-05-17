<?php
	$name = $_POST["name"];
	$usermail = $_POST["email"];
	$phone = $_POST["phone"];
	$query = $_POST["query"];
	
	$email_from = "guptadheeraj830@gmail.com";
	
	$email_subject = "New Form Submission";
	
	$email_body = "USer Name : $name.\n".
				  "Phone : $phone\n.".
				  "Email : $usermail.\n".
				  "Query : $query.\n";
	
	$to = "djgupta820@gmail.com"; 
	
	$headers = "From : $email_from \r\n";
	
	$headers .= "Reply-to : $usermail \r\n";
	
	mail($to, $mail_subject, $email_body, $headers);
	
	header("Locatoin : index.html");
?>