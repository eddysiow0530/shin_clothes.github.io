<?php
	date_default_timezone_set('Etc/UTC');
	require 'PHPMailer-master/PHPMailerAutoload.php';
	
	$mail = new PHPMailer; //create object of PHPMailer
	//network things
	$mail -> isSMTP ();//email protocol
	$mail -> Host = 'smtp.gmail.com';// hostname gmail :server address
	$mail -> Port =587; //port number
	$mail -> SMTPSecure ='tls';//secure layer
	$mail -> SMTPAuth = true;
	
	$mail -> FromName ="Shin_clothes";// who is sender
	// give your gmail username and password
	$mail -> Username ="shinclothes12@gmail.com";
	
	$file = fopen("email.txt","r"); // read textfile for password.
	$newpass = fgets($file);
	fclose($file);
	
	$mail -> Password = "$newpass";
	
	//email receiver details
	$mail -> addAddress($email, $username); //received person
	
	//email Subject
	$mail -> Subject = 'Thank You!';
	
	//email body
	$mail -> msgHTML("<h1>Registration Success, Welcome to Shin_clothes</h1>");
	
	if (!$mail -> send()){
			echo "<script>alert('Mailer Error: " .$mail ->ErrorInfo."');";
			die ("window.history.go(-1);</script>");
		}else {
			echo "<script>alert ('You can check mail now!');</script>";
			}		
?>