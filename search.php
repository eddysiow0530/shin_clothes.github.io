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
<link href="css/customize.css" rel="stylesheet" type="text/css" media="all" />	
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

		<!--SEARCRH BAR-->
<div class="flexsearch">
<div class="flexsearch--wrapper">
<form action="search.php" method="post" id="flexsearch--form">
	<div class="flexsearch--input-wrapper">
<input class="flexsearch--input" type="search" placeholder="search" type="text" name="search_key"/>
</div>
				<input class="flexsearch--submit" type="submit" value="&#10140;"/>
			</form>
		</div>
	</div>

<script>
// -
function expand() {
  $(".search").toggleClass("close");
  $(".input").toggleClass("square");
  if ($('.search').hasClass('close')) {
    $('input').focus();
  } else {
    $('input').blur();
  }
}
$('button').on('click', expand);

copyright('');
</script>
<body>
<center>

	<?php
	//1.Check whether the form is empty or not
	
		$search_key = isset($_POST['search_key'])?$_POST['search_key']:'';
		
	//2.Once get the key is time to search the database
	
		if(!empty($search_key))
		{
	
	//b.Write the sql query based on the search key
	
		$sql = "SELECT tshirt_id, tshirt_name, tshirt_price, photo FROM tshirt  where tshirt_name LIKE '%".$search_key."%' UNION SELECT tshirt_id, tshirt_name, tshirt_price, photo FROM ftshirt where tshirt_name LIKE '%".$search_key."%' UNION SELECT tshirt_id, tshirt_name, tshirt_price, photo FROM ktshirt where tshirt_name LIKE '%".$search_key."%'";
	//c.Execute the sql query 
	
		$result = mysqli_query ($conn, $sql);
	
	//d.Check if there is the data or not?
	
		if(mysqli_num_rows ($result) == 0)
		{
	
	//e.Error message is no data
		echo "No data Retrived From the Database !";
		}

		else
		{
			while($row= mysqli_fetch_array($result))
			{
		
?>
	<div class="col-md-3 feature-grid">
					<form method="post" action="product.php?action=add&id=<?php echo $row["tshirt_id"];?>">
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
                     <input type="hidden" name="hidden_price" value="<?php echo $row["tshirt_price"]; ?>" />  <!--hidden form will submit when click button-->
                     <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-danger" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
            </div>
<?php
        }
       }
   }
       ?>
          
</center>
</body>

</html>
