<?php
	//Step 1: Read all the information from edit.php using $_POST method
	$uid = $_POST['uid'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	
	//Step 2: Connect to the database
	include "connection.php";
	
	//Step 3: Write the UPDATE SQL Query
	$sql = "UPDATE tshirt SET ".
	"tshirt_name = '$name', ". 
	"tshirt_price = '$price', ". 
	"tshirt_description = '$description' Where tshirt_id = $uid";
	 
	// echo $sql;
	//Step 4: Execute the query
	mysqli_query($conn, $sql);
	
	//Step 5: Check the query successfully or not
	if(mysqli_affected_rows($conn)<=0)
	{
		echo "<script>alert('No data updated!');</script>";
		echo "<script>window.location.href = 'ad-product.php'</script>";
	}
	
	else{
	//Step 6: If success alert the success message and go back to the edit.php page
	echo "<script>alert('Data has been updated successfully!');</script>";
	echo "<script>window.location.href = 'ad-product.php'</script>";
	}
?>