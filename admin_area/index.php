<?php
	session_start();
	if(!isset($_SESSION['admin_email'])){
		echo "<script> window.open('login.php?not_admin=You are not an Admin!','_self') </script>";
	}else {
?>
<html>
	<head>
		<title> Admin Panel </title>
		<link rel="stylesheet" href="styles/style.css" media="all"/>
	</head>
	<body>
	<div class="main_wrapper">
		<div id="header"></div>
		<div>	<div id="left"> 
			<h2 style="text-align:center; margin-top:5px; color:white;"> Dashboard </h2>
			<a href="index.php?insert_product"> Insert New Products </a>
			<a href="index.php?view_products"> View All Products </a>
			<a href="index.php?insert_category"> Insert New Category </a>
			<a href="index.php?view_categories"> View All Categories</a> 
			<a href="index.php?view_customers"> View Customers </a>
			<a href="index.php?view_orders"> View Orders </a>
			<a href="index.php?view_messages"> View Messages </a>
			<a href="index.php?view_complaints"> Complaints Portal </a>
			<a href="index.php?view_onedayreport"> 1 Day Sale's Report </a>
			<a href="index.php?view_customreport"> Custom Sale's Report </a>
			<a href="logout.php"> Logout </a>
		</div>
		<div id="right">
		<?php 
			if(isset($_GET['insert_product'])){
				include("insert_pro.php");
			}
			if(isset($_GET['view_products'])){
				include("view_products.php");
			}
			if(isset($_GET['edit'])){
				include("edit_product.php");
			}
			if(isset($_GET['pdelete'])){
				include("pdelete.php");
			}
			if(isset($_GET['insert_category'])){
				include("insert_category.php");
			}
			if(isset($_GET['view_categories'])){
				include("vc.php");
			}
			if(isset($_GET['edit_cats'])){
				include("edit_cats.php");
			}
			
			if(isset($_GET['delete_cats'])){
				include("delete_cats.php");
			}
			if(isset($_GET['view_orders'])){
				include("vo.php");
			}
			if(isset($_GET['prog'])){
				include("progress.php");
			}
			if(isset($_GET['deliver'])){
				include("deliver.php");
			}
			if(isset($_GET['del'])){
				include("delete_order.php");
			}
			if(isset($_GET['view_messages'])){
				include("view_messages.php");
			}
			if(isset($_GET['view_complaints'])){
				include("view_complaints.php");
			}
			if(isset($_GET['view_onedayreport'])){
				include("view_onedayreport.php");
			}
			if(isset($_GET['view_customers'])){
				include("view_customers.php");
			}
			if(isset($_GET['view_customreport'])){
				include("view_customreport.php");
			}
		?>
		</div>
		</div>
		<div class="fotty">
		<h2 style="text-align:center;"> © Copyright 2016, All Rights Reserved. Developed by 'Samreen' </h2>
		</div>
		
	</div>
	</body>
</html>

<?php } ?>