<?php
		include("includes/connect.php");
		include("functions/functions.php");
session_start();
				global $con;
				$ip = getIp();
				$query = "delete from cart where IP='$ip'";
				$result = mysqli_query($con, $query);
session_destroy();

echo "<script> window.open ('../index.php','_self')</script>";

?>