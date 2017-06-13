<?php
include("includes/db.php");
				$did=$_GET['deliver'];
				$queryd = "update orders set status='Delivered' where o_id='$did'";
				$rund = mysqli_query($con, $queryd);
				if ($rund){
					echo "<script> alert('Order successfully Delivered!') </script>";
					echo "<script>window.open('index.php?view_orders', '_self') </script>"; 
				}

?>