<table align="center" border="2px" width="795px" bgcolor="white" height="" >
	<tr align="center" border="2px" > <td colspan="6"> <h1> All Orders Are Here </h1> </td> </tr>
	
	<tr bgcolor="#187eae">
	<th> Sr# </th>
	<th> Order No </th>
	<th> DATE/TIME </th>
	<th> STATUS </th>
	<th> Total Price </th>
	<th> Order Details </th> 
	</tr>
<?php
	include("includes/connect.php");
	global $con;
		$user=$_SESSION['customer_email'];
		$get_customer= "select * from customers where customer_email='$user' ";
		$run_customer= mysqli_query ($con, $get_customer);
		$row_customer= mysqli_fetch_array ($run_customer);
		$id= $row_customer['customer_id'];
	$get_orders = "select * from orders where cust_id='$id'";
	$run_orders = mysqli_query ($con, $get_orders);
	$i=0;
	while ($row=mysqli_fetch_array($run_orders)){
		$oid= $row['o_id'];
		$cust_id= $row['cust_id'];
		$dt= $row['dt'];
		$price= $row['t_price'];
		$status= $row['o_status'];
		$i++;
		//$get_cust = "select * from customers where customer_id='$cust_id'";
		//$run_cust = mysqli_query ($con, $get_cust);
		//$row1 = mysqli_fetch_array ($run_cust);
		//$name = $row1['customer_name'];
		//echo $name;
?>		
	<tr align="center">
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $oid; ?> </td>
	<td> <?php echo $dt; ?> </td>
	<td> <?php echo $status; ?> </td>
	<td> <?php echo $price; ?> </td>
	<td> <a href="my_account.php?odetails=<?php echo $oid;?>"> View Details </a> </tr> 
	<?php } ?>
		
</table>	