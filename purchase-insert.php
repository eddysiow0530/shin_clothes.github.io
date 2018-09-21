<?php
	include "connection.php";

		
		$username = mysqli_real_escape_string($conn,$_SESSION['user']);
		$pname = mysqli_real_escape_string($conn, $_POST["hidden_name"]); //receive the data from html form
		$price = mysqli_real_escape_string($conn,$_POST["hidden_price"]);
		$quantity = mysqli_real_escape_string($conn,$_POST["quantity"]);
		

		$sql="INSERT INTO purchase (product_name, username, price, quantity) values ('$pname','$username','$price','$quantity');";
		
		mysqli_query($conn, $sql); // to execute the sql query
		
			if(mysqli_affected_rows($conn)<=0)
				{
					die("<script>alert('Puchase failed, please redo again');</script>");
				}
				
			echo ("<script>alert('Puchase sucessfully, Thank you very much!');</script>");
			echo ("<script>window.location.href='mainpage.php'</script>");
?>

