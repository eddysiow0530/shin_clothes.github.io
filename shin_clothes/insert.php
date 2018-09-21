<?php
	include "connection.php"; //add all sentence here
	
		$name = $_POST['name']; //receive the data from html form
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$subject = $_POST['subject'];

		
		$sql="INSERT INTO contact (contact_name, contact_email, phone_number, subject) values ('$name', '$email','$mobile', '$subject');";
		
		mysqli_query($conn, $sql); // to execute the sql query
		
			if(mysqli_affected_rows($conn)<=0)
				{
					die("<script>alert('Something error on Insert to Database');</script>");
					echo ("<script>window.location.href='contact.php'</script>");
					
				}
				
			echo ("<script>alert('Thanks for your contact, we will response to you as soon as possible !');</script>");
			echo ("<script>window.location.href='mainpage.php'</script>");
?>

