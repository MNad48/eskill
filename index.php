<?php ?>
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
				      <li><a class="color1" href="#">Men</a>
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
										<li><a href="women_shoes.php">Shoes, Boots </a></li>								
										<li><a href="women_Bangles.php">Bangles</a></li>
										<li><a href="women_Heels.php">Heels</a></li>
										<li><a href="women_bags.php">Bags</a></li>
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
										<li><a href="kids_shoes.php">Shoes, Boots </a></li>
										<li><a href="kids_sandals.php">Sandals</a></li>
										<li><a href="kids_Tshirts.php">T-Shirts</a></li>
										<li><a href="kids_socks.php"> Socks</a></li>
										
									</ul>	
								</div>							
							</div>
						  </div>
						</div>
			    </li>				
				<li><a class="color6" href="contact.php">Conact</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	<div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>SPAKLE UP YOUR LOOK </h3>
						<p>Shop Trendy Accessories And Shine! .</p>
						<a href="single.html">Learn More</a>
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h3>COMPLETE YOUR STYLE!</h3>
						<p>Latest Wedding and Party collection with exciting Prices now in stores .</p>
												<a href="single.html">Learn More</a>

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>Enjoy yours Style With Stylo</h3>
						<p>Contrary to popular belief, stylo is every where</p>
								<a href="single.html">Learn More</a>

						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>
<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>NEW RELEASED</h1>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="Men_shirts.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/pi.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>T-Shirt</span>	
									</h3>
								</div>
				</a>
		

			<p><a href="single.html">Black	</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="kids_shoes.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/pi1.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Shoe</span>	
									</h3>
								</div>
				</a>
			<p><a href="single.html">  Red Pump</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="women_bags.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/qq.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Bag</span>	
									</h3>
								</div>
				</a>
			<p><a href="women_bags.php">Golden Bag</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
		<div class="grid-in">
			<div class="col-md-4 grid-top">
				<a href="women_shoes.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/b.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>sandal</span>	
									</h3>
								</div>
				</a>
			<p><a href="women_shoes.php"> FORMAL SANDAL</a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="women_bags.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/pi4.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>bag</span>	
									</h3>
								</div>
				</a>
			<p><a href="women_bags.php">BRAOWN BAG </a></p>
			</div>
			<div class="col-md-4 grid-top">
				<a href="kids_shoes.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/pi5.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Shoe</span>	
									</h3>
								</div>
				</a>
			<p><a href="kids_shoes.php"> Kids Shoes</a></p>
			</div>
					<div class="clearfix"> </div>
		</div>
	</div>
	<!----->
	
	<div class="content-top-bottom">
		<h2>Featured Collections</h2>
		<div class="col-md-6 men">
			<a href="women_shirts.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/bb.jpg" alt="">
				<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in   b-delay03 ">
										<span>Summer</span>	
									</h3>
								</div>
			</a>
			
			
		</div>
		<div class="col-md-6">
			<div class="col-md1 ">
				<a href="women_shoes.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/hh.jpg" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in1   b-delay03 ">
										<span>EID</span>	
									</h3>
								</div>
				</a>
				
			</div>
			<div class="col-md2">
				<div class="col-md-6 men1">
					<a href="women_bags.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/rr.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>EID</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="col-md-6 men2">
					<a href="Men_shoes.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/t4.jpg" alt="">
							<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in2   b-delay03 ">
										<span>WINTER</span>	
									</h3>
								</div>
					</a>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	</div>
	<!---->
	<div class="content-bottom">
	</div>
</div>
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>EID COLLECTION 2017</h4>
				<ul class="nav-bottom">
						<li><a href="cart.php">How to Order</a></li>
						<li><a href="women_Bangles.php">Bangles</a></li>
						<li><a href="women_Heels.php">Heels</a></li>
						<li><a href="Men_shirts.php">TShirts</a></li>
						<li><a href="kids_shoes.php"> Kids Shoes</a></li>
						<li><a href="contact.html">Location</a></li>
						<li>SALE 20% OFF</a></li>
						
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTACT US</h4>
				
					<p>Contrary to popular belief</p>
					<p>Main branch</p>
					<p>office:  +12 34 995 0792</p>
					<p>GET SOCIAL</p>
					
					<ul class="social">
						<li><a href="www.facebok.com.pk"><i></i></a></li>						
						<li><a href="www.twiter.com.pk"><i class="twitter"> </i></a></li>
						<li><a href="www.rss.com.pk"><i class="rss"> </i></a></li>
						<li><a href="www.gmail.com"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Newsletter</h4>
					<p>Sign Up to get all news update
and promo</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Sign up">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2017 Stylo Online ordering & Sale management System, All Rights Reserved | Design by  Samreeen Bibi</a> </p>
		</div>
		</div>
</body>
</html>
<?php ?>
			