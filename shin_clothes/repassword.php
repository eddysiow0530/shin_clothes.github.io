<?php
	session_start();
	include"connection.php";

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$code = mysqli_real_escape_string($conn, $_POST['code']);
	$sql = "SELECT * FROM users WHERE email = '$email' AND code = '$code'";

	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) <= 0)
	{
		echo "<script>alert('Wrong email & code! Please  confirm with your email!');";
		die("window.history.go(-1);</script>");

	} 
	else
	{
		echo "<script>window.location.href ='chgpassword.html';</script>";
	}

	?>

