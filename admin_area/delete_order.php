<?php
include("includes/db.php");
		$Id=$_GET['del'];
		$del= "delete from orders where o_id='$Id'";
		$run= mysqli_query ($con, $del) or die(mysqli_error($con));
		if($run){
			$deldetail = "delete from orders_details where o_id='$Id'";
			$rundetail = mysqli_query($con, $deldetail);
			if($deldetail){
			echo "<script> alert('Order has been Deleted!') </script>";
			echo "<script>window.open('index.php?view_orders', '_self') </script>"; 
			}
	}
?>