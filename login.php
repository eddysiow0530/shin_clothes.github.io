<?php
	session_start();
	include "connection.php";
	
	$username = mysqli_real_escape_string($conn, $_POST['user']);
	$password = mysqli_real_escape_string($conn, $_POST['pass']);

	$sql = "SELECT * FROM users WHERE username = '$username' AND password = '".md5($password)."'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) <= 0)
	{
		$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '".md5($password)."'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) <= 0)
		{
		echo "<script>alert('Invalid Username or Password! Please try again!');";
		die("window.history.go(-1);</script>");
		}
		
	}
	if($row = mysqli_fetch_array($result))
	{
		$_SESSION['user'] = $row['username']; // Use the session.
		$_SESSION['password'] = $row['password'];
		$_SESSION['role'] = $row['role'];
	}
	echo "<script>alert('Welcome back! ".$_SESSION['user']."');";
	if($_SESSION['role'] === "1")
	{
		echo "window.location.href = 'mainpage.php';</script>";
	}
	if($_SESSION['role'] === "0")
	{
		echo "window.location.href = 'ad-mainpage.php';</script>";
	}

	else
	{
		echo "window.location.href = 'register.html';</script>";
	}

?>