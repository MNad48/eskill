<table align="center" width="996px" bgcolor="orange" height="" >
	<tr align="center" border="2px" > <td colspan="6"> <h1> All Orders Are Here </h1> </td> </tr>
	
	<tr bgcolor="#187eae">
	<th> ORDER# </th>
	<th> CUSTOMER </th>
	<th> DATE/TIME </th>
	<th> STATUS </th>
	<th> CHANGE STATUS </th>
	<th> BILL / DELETE </th> 
	</tr>
<?php
	include("includes/db.php");
	$get_orders = "select * from orders";
	$run_orders = mysqli_query ($con, $get_orders);
	$i=0;
	while ($row=mysqli_fetch_array($run_orders)){
		$oid= $row['o_id'];
		$cust_id= $row['c_id'];
		$dt= $row['datetime'];
		$price= $row['total'];
		$status= $row['status'];
		$i++;
		
		$get_cust = "select * from customer where c_id='$cust_id'";
		$run_cust = mysqli_query ($con, $get_cust);
		$row1 = mysqli_fetch_array ($run_cust);
		$name = $row1['c_name'];
		
?>		
	<tr align="center">
	<td> <?php echo $oid; ?> </td>
	<td> <?php echo $name; ?> </td>
	<td> <?php echo $dt; ?> </td>
	<td> <?php echo $status; ?> </td>
	<td> <a href="index.php?prog=<?php echo $oid;?>"> In Progress </a> &nbsp
		<a href="index.php?deliver=<?php echo $oid;?>"> Delivered </a> </td>
	<td> <a href="billprint.php?bill=<?php echo $oid;?>"> Bill </a> &nbsp
		<a href="index.php?del=<?php echo $oid;?>"> Delete </a> </td>
	</tr> <?php } ?>
		
</table>	