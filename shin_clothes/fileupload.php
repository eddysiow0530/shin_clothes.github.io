<?php
	//step 1:read the file name from html(optional)
	$filename= basename($_FILES["photo"]["name"]); //file upload based on the name in html, name is constraints by the system so cannot chg.
	
	//step 2:get file infor
	//new file name in server e.g.profile/abc.gif
	$getFileType = pathinfo($filename,PATHINFO_EXTENSION);//gif//jpg/png/mp3
	$checkfilesize= $_FILES["photo"]["size"];
	$newfilename = "profile/".$_POST['user'].".".$getFileType;//need to create a file in the file(Shin_Clothes) , 'profile' is the new file name
	
	//step 3:check for file size not so too big
	if($checkfilesize >1000000)//1MB
	{
	echo"<script>alert('Picture too big');";
	die("window.history.go(-1);<script>");
	}
	//step 4: check for the picture type correct or not
	if($getFileType != "jpg" && $getFileType != "png" && $getFileType != "gif")
	{
	echo"<script>alert('Picture not recognize! Please try again');";
	die("window.history.go(-1);</script>");
	}
	//step 5: everything ok..then upload the profile picture to the server
	if (move_uploaded_file($_FILES["photo"]["tmp_name"],$newfilename))
	{
	echo"<script>alert('Picture uploaded to the server!');</script>";
	}
	else {
		echo "<script>alert('can't upload the photos.Please try again!');";
		die("window.history.go(-1);</script>");
		}
?>