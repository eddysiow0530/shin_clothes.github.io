<?php
	
	$conn = mysqli_connect('localhost','root','','shin_clothes'); /*the 'localhost' is the url of the server, 
										  we should put the ip address for the server.
										  ip address of local host is 127.0.0.1.
										  
										  second column 'root' is user name and 
										  third column '' is password.
										  fourth column 'myaddressbook' is database name */
										  
										  
	if(mysqli_connect_errno()) //checking the connection connect successfully ornot
	{
		//error message, use die to stop the action
		die("<script>alert('Error in Connection!');</script>");
    }									  
	
	//success message for connection
    echo "<script>alert('Welcome to Shin_Clothes!')</script>"									 
?>