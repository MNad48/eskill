<?php
				include("includes/db.php");
				$orderid=$_GET['prog'];
				$query = "update orders set status='In Progress' where o_id='$orderid'";
				$runq = mysqli_query($con, $query);
				if ($runq){
					echo "<script> alert('Order Updated, Order in Progress!') </script>";
					echo "<script>window.open('index.php?view_orders', '_self') </script>"; 
				}
?>