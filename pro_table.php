<?php
	session_start();
	include"connection.php"
?>
<!DOCTYPE html>
<html>
<head>
<title>Shin Clothes :)</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<!--theme style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
</head>
<body> 
<!--header-->	
<script src="js/responsiveslides.min.js"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: false,
      });
    });
  </script>
  
<div class="header-top">
	 <div class="header-bottom">			
				<div class="logo">
					<h1><a href="mainpage.php">Shin_Clothes</a></h1>					
				</div>
			 <!---->		 
		<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="ad-mainpage.php">Home</a></li>
					<li class="grid"><a href="#">Products</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Male</h4>
									<ul>
										<li><a href="ad-product.php">T-shirt</a></li>
										<li><a href="ad-product.php">Jacket</a></li>
										<li><a href="ad-product.php">Jeans</a></li>
										<li><a href="ad-product.php">Boots</a></li>
										<li><a href="ad-product.php">Sport Shoes</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Female</h4>
									<ul>
										<li><a href="ad-gtproduct.php">T-shirt</a></li>
										<li><a href="ad-gtproduct.php">Dress</a></li>
										<li><a href="ad-gtproduct.php">Jeans</a></li>
										<li><a href="ad-gtproduct.php">Boots</a></li>
										<li><a href="ad-gtproduct.php">Sport Shoes</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Kid</h4>
									<ul>
										<li><a href="ad-kdproduct.php">T-shirt</a></li>
										<li><a href="ad-kdproduct.php">Dress</a></li>
										<li><a href="ad-kdproduct.php">Jeans</a></li>
										<li><a href="ad-kdproduct.php">Boots</a></li>
										<li><a href="ad-kdproduct.php">Sport Shoes</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="#">Report</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Report type</h4>
									<ul>
										<li><a href="view.php">Contact Report</a></li>
										<li><a href="pro_table.php">Product Report</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>	
				<li class="grid"><a href="pro-insert.html">Update Product</a>
					<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Data Insert</h4>
									<ul>
										<li><a href="pro-insert.html">Male T-shirt</a></li>
										<li><a href="gt-insert.html">Female T-shirt</a></li>
										<li><a href="kd-insert.html">Kid T-shirt</a>
									</ul>
								</div>
							</div>
						</div>						
				</li>			
			 </div>
			 <!---->
			
			 <div class="cart box_1">		
					<div class="total">
					<li class="logid">Welcome,
						<?php
			 	print $_SESSION["user"];
			?>			
			 	<div class="clearfix"> </div>
			 		<div id="menu12">
						<a href="logout.php" ><img src="images/logout.jpg" alt="log out" width="40" height="40"/>Logout</a>
					</div>
			 </div>
			 <div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="product-model">	 
			<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Products</li>
		 </ol>
		
<center>
	<h1>Product Table Information</h1>
	<table border="1" style="text-align:center" class="table table-striped"><!--table structure-->
		<tr bgcolor="color =#CC99FF"><!--for table header-->
			<th style="width: 194px">Product ID</th>
			<th style="width: 130px">Product Name</th>
			<th style="width: 139px">Price</th>
			<th style="width: 168px">Description</th>
			</tr>
<?php
	$sql = "Select * from tshirt";
	$result = mysqli_query($conn, $sql); //run the sql
	//all the result store in variable result
	if(mysqli_num_rows($result) <=0) //if no result there,
	{
		die("<script>alert('No data from the database !');</script>");
	}
	//if got result, execute one by one column
	while($rows = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$rows['tshirt_id']."</td>";
		echo "<td>".$rows['tshirt_name']."</td>";
		echo "<td>".$rows['tshirt_price']."</td>";
		echo "<td>".$rows['tshirt_description']."</td>";

		//to build a edit and delte button
			}
?>

	</table>
</center>

<!---->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-3 about-us">
				 <h3>About Us</h3>
				 <p>Shin Clothes is a company that selling differnt type of shirt and dress in Asia Pacific University, Come to visit US</p>
			 </div>
			 <div class="col-md-3 ftr-grid">
					<h3>Information</h3>
					<ul class="nav-bottom">
						<li><a href="#">Track Order</a></li>
						<li><a href="#">New Products</a></li>
						<li><a href="#">Location</a></li>
						<li><a href="#">Our Stores</a></li>
						<li><a href="#">Best Sellers</a></li>	
					</ul>					
			 </div>
			 <div class="col-md-3 ftr-grid">
					<h3>More Info</h3>
					<ul class="nav-bottom">
						<li><a href="login.php">Login</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Membership</a></li>	
					</ul>					
			 </div>
			 <div class="col-md-3 ftr-grid">
					<h3>Categories</h3>
					<ul class="nav-bottom">
						<li><a href="#">Car Lights</a></li>
						<li><a href="#">LED Lights</a></li>
						<li><a href="#">Decorates</a></li>
						<li><a href="#">Wall Lights</a></li>
						<li><a href="#">Protectors</a></li>	
					</ul>					
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<div class="copywrite">
	 <div class="container">
		 <div class="copy">
			 <p>© 2017 Lighting. All Rights Reserved | Design by  Shin_Clothes</a> </p>
		 </div>
		 <div class="social">							
				<a href="#"><i class="facebook"></i></a>
				<a href="#"><i class="twitter"></i></a>
				<a href="#"><i class="dribble"></i></a>	
				<a href="#"><i class="google"></i></a>	
				<a href="#"><i class="youtube"></i></a>	
		 </div>
		 <div class="clearfix">
		 </div>
	 </div>
</div>
<!---->
</li>
</body>
</html>
