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
<!---->	
<div class="slider">
	  <div class="callbacks_container">
	     <ul class="rslides" id="slider">
	         <li>
				 <div class="banner1">				  
					  <div class="banner-info">
					  
				 </div>
	         </li>
	         <li>
				 <div class="banner2">
				 </div>
			 </li>
	         <li>
	             <div class="banner3">
				 </div>
	         </li>
	      </ul>
	  </div>
  </div>
  <script src="js/bootstrap.js"> </script>
<!---->
<center>
			<div class="col-md-3 feature-grid">
				 <a href="ad-product.php"><img src="images/img1.jpg" alt="kid image" width="400" height="350"/>
					 <div class="arrival-info">
					 	<center>
						 <h4>Man Shirt</h4>
						 <p>Male T-shirt</p>
						</center>
					 </div>
					 <div class="viw">
						<a href="ad-product.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>
			 <div class="col-md-3 feature-grid">
				 <a href="ad-product.php"><img src="images/img2.jpg" alt="kid image" width="400" height="350"/>
					 <div class="arrival-info">
					 	<center>
						 <h4>Man Jeans</h4>
						 <p>Male Long-pants</p>
						</center>
					 </div>
					 <div class="viw">
						<a href="ad-product.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>
			 <div class="col-md-3 feature-grid">
				 <a href="ad-product.php"><img src="images/img3.jpg" alt="Female image" width="400" height="350"/>
					 <div class="arrival-info">
					 	<center>
						 <h4>Girl Shirt</h4>
						 <p>Female T-shirt</p>
						</center>
					 </div>
					 <div class="viw">
						<a href="ad-product.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>
			 <div class="col-md-3 feature-grid">
				 <a href="ad-product.php"><img src="images/img4.jpg" alt="kid image" width="400" height="350"/>
					 <div class="arrival-info">
					 	<center>
						 <h4>Girl Dress</h4>
						 <p>Long Dress</p>
					 </div>
					</center>
					 <div class="viw">
						<a href="ad-product.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		 <div class="items-sec btm-sec">
			 <div class="col-md-3 feature-grid">
				 <a href="ad-product.php"><img src="images/img5.jpg" alt="kid image" width="400" height="350"/>
					 <div class="arrival-info">
					 	<center>
						 <h4>Kid Dress</h4>
						 <p>Kid long Dress</p>
						</center>
					 </div>
					 <div class="viw">
						<a href="ad-product.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>
			<div class="col-md-3 feature-grid">
				 <a href="ad-product.php"><img src="images/img6.jpg" alt="kid image" width="400" height="350"/>
					 <div class="arrival-info">
					 	<center>
						 <h4>Kid Long Dress</h4>
						 <p>Dress</p>
						</center>
					 </div>
					 <div class="viw">
						<a href="ad-product.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>
		<div class="col-md-3 feature-grid">
				 <a href="ad-product.php"><img src="images/img7.jpg" alt="kid image" width="400" height="350"/>
					 <div class="arrival-info">
					 	<center>
						 <h4>Short Dress</h4>
						 <p>Kid Short Dress</p>
					 </div>
					 <div class="viw">
						<a href="ad-product.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>
			<div class="col-md-3 feature-grid">
				 <a href="ad-product.php"><img src="images/img8.jpg" alt="kid image" width="400" height="350"/>
					 <div class="arrival-info">
					 	<center>
						 <h4>Dress</h4>
						 <p>Kid Long Dress</p>
						</center>
					 </div>
					 <div class="viw">
						<a href="ad-product.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					 </div>
				  </a>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
</center>
<!---->
<div class="offers">
	 <div class="container">
	 <h3>End of Season Sale</h3>
	 <div class="offer-grids">
		 <div class="col-md-6 grid-left">
			 <a href="gt-product"><div class="offer-grid1">
				 <div class="ofr-pic">
					 <img src="images/ofr2.jpg" class="img-responsive" width="350" height="400"/>
				 </div>
				 <div class="ofr-pic-info">
					 <h4>DRESS <br>Beatiful Dress</h4>
					 <span>UP TO 60% OFF</span>
					 <p>Shop Now</p>
				 </div>
				 <div class="clearfix"></div>
			 </div></a>
		 </div>
		 <div class="col-md-6 grid-right">
			 <a href="gt-product.php"><div class="offer-grid2">				 
				 <div class="ofr-pic-info2">
					 <h4>Flat Discount</h4>
					 <span>UP TO 30% OFF</span>
					 <h5>Outdoor dress Lights</h5>
					 <p>Shop Now</p>
				 </div>
				 <div class="ofr-pic2">
					 <img src="images/ofr3.jpg" class="img-responsive" width="350" height="400"/>
				 </div>
				 <div class="clearfix"></div>
			 </div></a>
		 </div>
		 <div class="clearfix"></div>
	 </div>
	 </div>
</div>
<!---->
<div class="subscribe">
	 <div class="container">
		 <h3>Newsletter</h3>
		 <form>
			 <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
			 <input type="submit" value="Subscribe">
		 </form>
	 </div>
</div>
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
