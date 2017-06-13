<br>
<h2 style="text-align:center;"> Do You Really Want To DELLETE Your Account ?? <h2>
<br>
<br>
<form action="" method="post">
	<input class="boxsub" type="submit" name="yes" value="YES"/>
	<input class="boxsub" type="submit" name="no" value="NO I Was Joking.."/>
</form>

<?php
	include("includes/connect.php");
	$user = $_SESSION['customer_email'];
	if(isset($_POST['yes'])){
		$del= "delete from customers where customer_email='$user'";
		$run_del= mysqli_query ($con, $del);
		if($run_del){
			echo "<script> alert ('We are really sorry, Your account has beed deleted!!') </script>";
			session_destroy();
			echo "<script> window.open('../index.php','_self')</script>";
		}
		
	}
	if(isset($_POST['no'])){
			echo "<script> alert ('oh! do not joke again!') </script>";
			echo "<script> window.open('my_account.php','_self')</script>";
	}
?>
