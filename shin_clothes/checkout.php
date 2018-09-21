<?php 
session_start();
include"connection.php";
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

<!-- check out -->


       <h1>Product Details</h1>
       <div class="table-responsive">
       	<form method="post" enctype="multipart/form-data">
       	<table class="table table-bordered">
       	<tr>
       		<th width="5%">Product Name</th>
       		<th width="5%">Price</th>
       		<th width="5%">Quantity</th>
       		<th width="5%">Total</th>
       		<th width="5%">Action</th>
       	</tr>
       	<?php

      	if(!empty($_SESSION["s_cart"]))// !empty will check the variable got data or not, if is empty then it wont display item on webpage
      	{//if not empty then execute the code below
      		$total=0;// total = 0 is used to store the item price
      		foreach($_SESSION["s_cart"] as $keys => $values)
      		{// use loop to divided into 2 part keys and values, so can access all element of session
      	?>
      	<tr>
      		<td><?php echo $values["item_name"]; ?></td>
      		<td>RM<?php echo $values["item_price"] ?></td>
      			<td><?php echo $values["item_quantity"] ?></td>
      		<td>RM<?php echo number_format($values["item_price"] * $values["item_quantity"]);?></td>
      		<td><a href="checkout.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  <!--number format is used to convert number into decimal point-->
              </tr>  
           <?php  
                      $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">RM <?php echo number_format($total, 2); ?></td>  
                               <td></td>  <!--2 is 2 decimal point-->
                          </tr>  

		</th>
		</tr>
                          <?php  
                          }  
                          ?>  
                     </table>  

	<?php
		if (isset($_GET["action"]))
	{
			if ($_GET["action"] == "delete")//check condition is delete
		{
				foreach($_SESSION["s_cart"] as $keys => $values)
				{
					if($values["item_id"] == $_GET["id"]) // will judge which item u wan to delete from URL
					{
					unset ($_SESSION["s_cart"][$keys]); //remove the item
					echo '<script>window.location="checkout.php"</script>';
					}	
				}
		}
	}

	?>



<!-- //check out -->
<!---->
<div class="subscribe" style="margin-top:800px">
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
<!---->
<div class="copywrite">
	 <div class="container">
		 <div class="copy">
			 <p>© 2017 Lighting. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">Shin_CLOTHES</a> </p>
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