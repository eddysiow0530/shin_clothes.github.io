<?php
	session_start();//before create session to store data,start the session first
	
	//connect to database
	include "connection.php";
	
	//review data from register.html
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$username = mysqli_real_escape_string($conn,$_POST['user']);
	$password = mysqli_real_escape_string($conn,$_POST['pass']);
	$confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpass']);
	$email= mysqli_real_escape_string($conn,$_POST['email']);
	$phonenumber = mysqli_real_escape_string($conn,$_POST['hp']);
	$gender = mysqli_real_escape_string($conn,$_POST['gender']);
	$dob = mysqli_real_escape_string($conn,$_POST['dob']);

	if($password !== $confirmpassword)
	{
		echo "<script>alert('Password and confirmed password not same!');";
		die("window.history.go(-1);</script>");
	}
	
	include"fileupload.php";//combine the file together

	include "email(eddy).php";
	//n is new line used in C, java, php <br> used in html
	
	$sql = "INSERT INTO users (name, username, password, email, phonenumber, gender, dob, registration_date,photo, code)".
	"VALUES ('$name','$username','".md5($password)."','$email','$phonenumber','$gender','$dob',Now(),'$newfilename', '99');";

	mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)<=0)
	{
	echo "<script>alert('Unable to register ! \\nPlease Try Again!');</script>";
	die ("<script>window.history.go(-1);</script>");
	}

	echo "<script>alert('Register Sucesssfully!Please login now!');</script>"; 
	echo "<script>window.location.href='login.html';</script>";
	
	?>