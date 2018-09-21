<?php 
	session_start();
	include"connection.php";
	if (isset($_POST["pass"])) { 
		/*the code will execute if the button is submitted*/
	
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	$sql = "SELECT userid FROM users WHERE email = '$email'"; /*search id from email*/
//e.get the data from the database into array and dispslay in HTML form
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0)
	 { /* check the email got in database or not*/
		$str = "0123456879qwertlmfkclssl";
		$str = str_shuffle($str);
		$str = substr($str,0,5);/* how many word u want be code" */
		/*str-shuffle() will convert the text to random position...substr will get the first number (hello get h,e,l) */
	
		/*token is the string and email is the user emai;*/

		//$sl = "UPDATE users SET "."code = '$str' WHERE 'email' = '$email'";
		$sl = "UPDATE users SET code='$str' WHERE email = '$email'";
		//echo $sl;
		mysqli_query($conn, $sl);
		/*UPdate the code into database to reset the password*/
		include"femail.php";
		if(mysqli_affected_rows($conn)<=0)
		{
			die("<script>alert('Insert Have Problem');</script>");
				}
				
			echo ("<script>alert('Please check your email. !');</script>");
			echo ("<script>window.location.href='repassword.html'</script>");
			
		//mail($email, "RESET PASSWORD", "To reset your password, please visit this: $url", "From: shinclothes12@gmail.com\r\n");
		}else{
				echo "The email didn't create in Shin_Clothes";

		}
		}

		?>


