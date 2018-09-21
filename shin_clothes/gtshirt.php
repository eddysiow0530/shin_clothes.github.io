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
										<li><a href="product.php">T-shirt</a></li>
										<li><a href="product.php">Dress</a></li>
										<li><a href="product.php">Jeans</a></li>
										<li><a href="product.php">Boots</a></li>
										<li><a href="product.php">Sport Shoes</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Kid</h4>
									<ul>
										<li><a href="product.php">T-shirt</a></li>
										<li><a href="product.php">Dress</a></li>
										<li><a href="product.php">Jeans</a></li>
										<li><a href="product.php">Boots</a></li>
										<li><a href="product.php">Sport Shoes</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="#">Promotions</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Shop</h4>
									<ul>
										<li><a href="product.php">New Arrivals</a></li>
										<li><a href="product.php">Promotions 11.11</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li class="grid"><a href="contact.php">Contact Us</a></li>							
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
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div>
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
			 	<div class="clearfix"> </div>
			 		<div id="menu12">
						<a href="logout.php" ><img src="images/logout.jpg" alt="log out" width="40" height="40"/>Logout</a>
					</div>
			 </div>
			 <div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
<!--header//-->
<div class="product-model">	 
			<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Products</li>
		 </ol>
			<h2>A suitable Shirt for MEN</h2>	


<?php
	$sql ="SELECT * FROM ftshirt ORDER BY tshirt_id ASC";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
	{
?>			
				<div class="col-md-3 feature-grid">
					<form method="post" action="pro_table.php?action=add&id=<?php echo $row["tshirt_id"];?>">
					<img src="<?php echo $row["photo"]; ?>" class="image-responsive" width="400px" height="350"/><br/>
					<center>
					<h4 class="arrival-info"><?php echo $row["tshirt_name"]; ?></h4><h4 class="arrival-info"> RM <?php echo $row["tshirt_price"]; ?>
					</h4>
					<center>	
					 <input type="text" name="quantity" class="form-control" value="1" />  
					  <div class="viw">
						<a href="product.php"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>View</a>
					</div>
                     <input type="hidden" name="hidden_name" value="<?php echo $row["tshirt_name"]; ?>" />  
                     <input type="hidden" name="hidden_price" value="<?php echo $row["tshirt_price"]; ?>" />  
                     <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
            </div>
            <?php
        }
       }
       ?>

			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="offers">
	 <div class="container">
	 <h3>End of Season Sale</h3>
	 <div class="offer-grids">
		 <div class="col-md-6 grid-left">
			 <a href="#"><div class="offer-grid1">
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
			 <a href="#"><div class="offer-grid2">				 
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
			 <p>© 2017 Lighting. All Rights Reserved | Design by  Shin_Clothes<p>
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