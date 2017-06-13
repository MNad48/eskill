<?php 	
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
	include('db.php');
?>
	
<html>
<head>
<title>Stylo online ordering & sale management system</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>	
	
<!--header-->

	
	<hr>
<div>
	<form method="post" action="">
	<table width="1200px" bgcolor="#cc6600" align="center"> 
	
	<tr align="center"> 
	<td colspan="4"> <h1> Login or Register to Checkout!!! </h1></td>
	</tr>
	
	<tr>
	<td align="right"> <h3> Email &nbsp </h3> </td>
	<td> <input class="boxreg" type="email" name="email" placeholder="Enter Email" required /></td>
	</tr>
	
	<tr>
	<td align="right"> <h3> Password &nbsp </h3> </td>
	<td> <input class="boxreg" type="password" name="pass" placeholder="Enter Password" required /></td>
	</tr>
	<tr>
	<td> </td>
	<td> <input class="boxreg" type="submit" name="login" value="Login"/></td>
	</tr>  
	<tr>
	<td colspan="2"> <h2 style="text-align:center; padding:5px;"> <a href="register.php"> New? Register Here! </a> </h2>
	</tr>
	</table>
	</form>
	
	<?php
	if (isset($_POST['login'])){
		$email=$_POST['email'];
		$c_password=$_POST['pass'];
		$sel_cust="select * from customer where c_pass='$c_password' AND c_email='$email'";
		$run_cust=mysqli_query($con, $sel_cust);
		$check_cust=mysqli_num_rows ($run_cust);
		if($check_cust==0){
		echo "<script> alert('Email or Password is incorrect. Try Again!!') </script>";
		//break;
	}else{
		$_SESSION['c_email']=$email;
		echo "<script> alert('You logged in successfully. Thanks!!') </script>";
		echo "<script>window.open('payment.php', '_self') </script>"; 
	}
}
?>
</div>
</body>
</html>