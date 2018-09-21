<?php

	include "connection.php";

		$name = mysqli_real_escape_string($conn,$_POST['name']); //receive the data from html form
		$price = mysqli_real_escape_string($conn,$_POST['price']);
		$description = mysqli_real_escape_string($conn,$_POST['description']);
		
		include"product-img.php";//combine the file together

		//$sql="INSERT INTO `t-shirt` (`tshirt_id`, `tshirt_name`, `tshirt_price`, `tshirt_description`, `photo`) VALUES ('', '$name', '$price', '$description', '$newfilename');";
			
		$sql="INSERT INTO ktshirt (tshirt_name, tshirt_price, tshirt_description, photo) values ('$name','$price','$description','$newfilename');";
		
		mysqli_query($conn, $sql); // to execute the sql query
		
			if(mysqli_affected_rows($conn)<=0)
				{
					die("<script>alert('Insert Have Problem');</script>");
				}
				
			echo ("<script>alert('t-shirt data insert Successfully !');</script>");
			echo ("<script>window.location.href='ad-mainpage.php'</script>");
?>

