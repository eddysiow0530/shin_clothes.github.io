<?php 
session_start();
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
				<ul class="memenu skyblue"><li class="active"><a href="mainpage.php">Home</a></li>
					<li class="grid"><a href="#">Products</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Male</h4>
									<ul>
										<li><a href="product.php">T-shirt</a></li>
										<li><a href="product.php">Jacket</a></li>
										<li><a href="product.php">Jeans</a></li>
										<li><a href="product.php">Boots</a></li>
										<li><a href="product.php">Sport Shoes</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Female</h4>
									<ul>
										<li><a href="gt-product.php">T-shirt</a></li>
										<li><a href="gt-product.php">Dress</a></li>
										<li><a href="gt-product.php">Jeans</a></li>
										<li><a href="gt-product.php">Boots</a></li>
										<li><a href="gt-product.php">Sport Shoes</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Kid</h4>
									<ul>
										<li><a href="kd-product.php">T-shirt</a></li>
										<li><a href="kd-product.php">Dress</a></li>
										<li><a href="kd-product.php">Jeans</a></li>
										<li><a href="kd-product.php">Boots</a></li>
										<li><a href="kd-product.php">Sport Shoes</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="contact.php">Contact Us</a></li>	
					<li class="grid"><a href="profile.php">Profile</a></li>						
				</ul>				
			 </div>

			 <!---->
			 <li class="logid">Welcome,
						<?php
			 	print $_SESSION["user"];
			?>			
			 <div class="cart box_1">		
				 <a href="checkout.php">
					<div class="total">
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				</a>
				<p><a href="checkout.php" class="simpleCart_empty">View Cart</a></p>
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
<div class="contact">
	  <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="main.php">Home</a></li>
		  <li class="active">Contact</li>
		 </ol>
			<!--start contact-->
			<h3>Contact Us</h3>
		  <div class="section group">				
				<div class="col-md-6 span_1_of_3">
					<div class="contact_info">
			    	 	<h4>Find Us Here</h4>
			    	 		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.151079916069!2d101.69932911811976!3d3.0556934576255665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4abb795025d9%3A0x1c37182a714ba968!2sAsia+Pacific+University+of+Technology+%26+Innovation!5e0!3m2!1sen!2smy!4v1510450825036" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
      				</div>
      			<div class="company_address">
				     	<h4>Company Information :</h4>
						    	<p>Asia Pacific University</p>
						   		<p>Jalan Teknologi 5</p>
						   		<p>Malaysia</p>
				   		<p>Phone:(00) 222 666 444</p>
				   		<p>Fax: (000) 856 555 2222</p>
				 	 	<p>Email: <a href="mailto:info@example.com">apu@mycompany.com</a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
				   </div>
				</div>				
				<div class="col-md-6 span_2_of_3">
				  <div class="contact-form">
					    <form action="insert.php" method="post">
					    	<div>
						    	<span><label for:"name">NAME</label></span>
						    	<span><input name="name" id="name" type="text" class="textbox" required="required"></span>
						    </div>
						    <div>
						    	<span><label for:"email">E-MAIL</label></span>
						    	<span><input name="email" id="email" type="email" class="textbox" required="required"></span>
						    </div>
						    <div>
						     	<span><label for:"Title">Title</label></span>
						    	<span><input name="title" id="title"  type="text" class="textbox" required="required"></span>
						    </div>
						    <div>
						    	<span><label for:"Description">Description</label></span>
						    	<span><textarea name="description" id="description" type="text" required="required"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" class="mybutton" value="Submit"></span>
						  </div>
					    </form>

				    </div>
  				</div>				
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
						<li><a href="login.html">Login</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.html">Contact</a></li>
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
			 <p>© 2017 Shin_Clothes. All Rights Reserved | Design by Shin_Clothes </p>
		 </div>
		 <div class="social">							
				<a href="#"><i class="facebook"></i></a>
				<a href="#"><i class="twitter"></i></a>
				<a href="#"><i class="dribble"></i></a>	
				<a href="#"><i class="google"></i></a>	
				<a href="#"><i class="youtube"></i></a>	
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
</body>
</html>