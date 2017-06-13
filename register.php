<?php 	
	include('db.php'); ?>
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
<?php 	
	include('headerall.php'); ?>

	
<!--content-->
<div class=" container">
<div class=" register">
	<h1>Register Here</h1>
		  	  <form  method="post" action="" enctype="multipart/form-data" name="frmSignup"> 
				 <div class="col-md-6 register-top-grid">
					<h3>Personal infomation</h3>
		
					 <div>
						<span>NAME</span>
						 <input type="text" name="c_name" id="c_name" placeholder="Mubashir Ali" onBlur="uLetter()" required/> 
						<script language="javascript">
							function uLetter(){ 
								var cname = document.frmSignup.c_name;
								var letters = /^[A-Za-z" "]+$/;
								if(cname.value.match(letters)){
									return true;
								}else{
									alert('Name must have alphabet characters only');
									c_name.focus();
								}
							}
						</script> 	
					 </div>

					 <div>
						<span>EMAIL</span>
						<input type="text" name="c_email" id="c_email" placeholder="xyz@yahoo.com"  onBlur="ValidateEmail()" required/> 
							<script language="javascript">
								function ValidateEmail(){
									var email = document.frmSignup.c_email;
									var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
									if(email.value.match(mailformat)){
											return true;
											}else{
												alert("You have entered an invalid	password!");
												c_email.focus();
												return false;
											}
										} 
								</script>
						</div>
		
					 <div>
						<span>CNIC</span>
						<input type="text" name="c_cnic" id="c_cnic"placeholder="00000-00000000-0"  onBlur="mycnic()" required/> 
							<script language="javascript">
								function mycnic(){ 	
									var mycnic = document.frmSignup.c_cnic;
									var numbers = /^\(?([0-9]{5})\)?[-. ]?([0-9]{7})[-. ]?([0-9]{1})$/;
									if(mycnic.value.match(numbers)){
										return true;
										}else{
											alert('cnic number format is invalid');
											c_cnic.focus();
											return false;
										}
									}
							</script>
						</div>
					 
					 <div>
						<span>CONTACT NUMBER</span>
						<input type="text" name="c_number"	id="number"	placeholder="0300-1111111" type="tel"	onBlur="phone()" required/> 
						<script language="javascript">
							function phone(){ 
								var phone = document.frmSignup.c_contact;
								var numbers = /^\(?([0-9]{4})\)?[-. ]?([0-9]{7})$/;
									if(phone.value.match(numbers)){
										return true;
											}else{
												alert('phone number format is invalid');
												c_contact.focus();
												return false;
											}
										}
								</script> 
						</div>
					 
					 <div>
						<span>Select Gender:</span>
						   <select id="gender" name="gender" class="" width="100%" required>
							<option > Male</option>
							<option > Female</option>
							</select>
					 </div>
					 
					 
				
					
					
					<div>
					<span>ADD</span>
					<input type="text" name="c_add"	id="add"		onBlur="" required/> 
					</div>
					
					<div>
						<span>IMAGE</span>
						<input type="file" name="c_image"	id="image"		onBlur="" required/> 
					</div>
					
					<div>
					<span>PASSWORD</span>
					<input type="text" name="c_pass"	id="c_pass"		onBlur="" required/> 
					</div>
					
					<div>
					<input type="submit" name="c_submit"	id="c_submit" Value="Create Account"/> 
					</div>
					
					 <div class="clearfix"> </div>
				 </div>
			</form>
		</div>
</div>
<?php 	
	include('footer.php'); ?>
		
</body>
</html>
<?php
	$con = mysqli_connect("localhost","root","","stylo");

	function getIp(){
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $ip;
}

	if(isset($_POST['c_submit'])){
		$ip=getIp();
		$c_name=$_POST['c_name'];
		$c_email=$_POST['c_email'];
		$c_gender=$_POST['gender'];
		$c_cnic=$_POST['c_cnic'];
		$c_contact=$_POST['c_number']; 
		$c_image=$_FILES['c_image']['name'];
		$c_image_tmp=$_FILES['c_image']['tmp_name'];
		$c_address=$_POST['c_add'];
		$c_password=$_POST['c_pass'];
		move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
		
		 $insert_c = "insert into customer (c_ip,c_name,c_email,c_gender, c_cnic, c_phone, c_image, c_add,c_pass) values ('$ip','$c_name','$c_email', '$c_gender', '$c_cnic', '$c_contact', '$c_image', '$c_address', '$c_password')";
			$run_c=mysqli_query($con,$insert_c) or die(mysqli_error($con));
		
		if($run_c){
		$_SESSION['c_email']=$c_email;
		echo "<script> alert('Account has been created. Thanks!!') </script>";
		echo "<script>window.open('customer/my_account.php', '_self') </script>"; 
		}else{
		echo "<script> alert('Account not created.') </script>";
	}
	}
?>