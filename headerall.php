<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<html>
<head>
<title> stylo online ordering &sale management system</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="search">
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
					</form>
			</div>
			<div class="header-left">		
					<ul>
						<li ><a href="login.php"  >Login</a></li>
						<li><a  href="register.php"  >Register</a></li>

					</ul>
					<div class="cart box_1">
						<a href="cart.php">
						<h3> <div class="total">
							<img src="images/cart.png" alt=""/></h3>
						</a>
					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="index.php">Home</a></li>	
				      <li><a class="color1" >Men</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="Men_sandals.php">sandals</a></li>
										<li><a href="Men_shirts.php">shirts</a></li>
										<li><a href="Men_glasses.php">glasses</a></li>
										<li><a href="Men_shoes.php">shoes</a></li>
										<li><a href="Men_watches.php">watches</a></li>
										<li><a href="Men_slippers.php">slippers</a></li>
									</ul>	
								</div>							
							</div>
							</div>
						</div>
					</li>
				    <li class="grid"><a class="color2" href="#">	Women</a>
					  	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="women_shirts.php">Shirts</a></li>
										<li><a href="women_shoes.php">Shoes</a></li>								
										<li><a href="women_Bangles.php">Bangles</a></li>
										<li><a href="women_Heels.php">Heels</a></li>
										<li><a href="women_bags.php.">Bags</a></li>
										<li><a href="women_scarfs.php">scarfs</a></li>
										<li><a href="women_slippers.php">slippers</a></li>
										
										
									</ul>	
								</div>							
							</div>
						  </div>
						</div>
			    </li>				
				 <li class="grid"><a class="color2" href="#">	Kids</a>
					  	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="kids_shirts.php">Shirts</a></li>
										<li><a href="kids_shoes.php">Shoes</a></li>
										<li><a href="kids_sandals.php">Sandals</a></i>
										<li><a href="kids_Tshirts.php">T-Shirts</a></li>
										<li><a href="kids_socks.php"> Socks</a></li>
										
									</ul>	
								</div>							
							</div>
						  </div>
						</div>
			    </li>				
				<li><a class="color6" href="contact.php">Contact</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	