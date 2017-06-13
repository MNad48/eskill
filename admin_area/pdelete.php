<?php
include("includes/db.php");
	if(isset($_GET['pdelete'])){
		$Id=$_GET['pdelete'];
		$del= "delete from products where p_id='$Id'";
		$run= mysqli_query ($con, $del);
		if($run){
			echo "<script> alert('product has been Deleted!') </script>";
			echo "<script>window.open('index.php?view_products', '_self') </script>"; 
	}
}
?>