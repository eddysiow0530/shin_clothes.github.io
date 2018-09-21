<?php
	session_start();
	include"connection.php";

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);
	$confirmpass = mysqli_real_escape_string($conn, $_POST['confirmpass']);

	

	if($pass !== $confirmpass)
	{
		echo "<script>alert('Password and confirmed password not same!');";
		die("window.history.go(-1);</script>");
	}

	$sql = "UPDATE users SET password = '".md5($pass)."' WHERE email = '$email'";
	mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)<=0)
	{
	echo "<script>alert('Unable to reset password ! \\nPlease Try Again!');";
	die ("window.history.go(-1);</script>");
	}
	echo "<script>alert('Reset Password Sucesssfully!Please login now!');"; 
	echo "window.location.href='login.html';</script>";
	?>