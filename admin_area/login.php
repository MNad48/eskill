<!DOCTYPE>
<html>
	<head>
		<title> Login Form </title>
		<link rel="stylesheet" href="styles/login.css" media="all" />
	</head>
 
 <body>
 <div class="login">
	<h2 style="color:white; text-align:center;"> <?php  echo @$_GET['not_admin']; ?> </h2>
	<h1>Login</h1>
    <form method="post">
    	<input type="email" name="email" placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Let me in.</button>
    </form>
</div>
</body>

<?php
	session_start();	
	include("includes/db.php");
		if(isset($_POST['login'])){
			$email=mysql_real_escape_string($_POST['email']);
			$pass=mysql_real_escape_string($_POST['password']);
			
			$admin = "select * from admin where admin_email='$email' AND admin_password='$pass' ";
			$run = mysqli_query ($con, $admin);
			$check=mysqli_num_rows ($run);
			if($check==0){
				echo "<script> alert('Password or Email is Wrong') </script> ";
			}else{
				$_SESSION['admin_email'] = $email;
				echo "<script> window.open('index.php?logged_in=You have successfully Loged in.','_self') </script>";
			}
		}
?>