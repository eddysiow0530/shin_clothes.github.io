<?php
	session_start();
	
	echo"<script>alert('Thank you for using our service.See you!');</script>";
	echo"<script>window.location.href='login.html'</script>";
	
	session_destroy();
?>