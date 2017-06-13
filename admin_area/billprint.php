<script language="javascript">
	window.print();
</script> 
 
 <h1 style="text-align:center; background:white;"> FOOD CIRCLES </h1>
 <h4 style="text-align:center; background:white;"> Everything You Eat Here is Yummy , Tasty and Healthful. </h4> 
<table align="center" style="border:2px solid black;" width="996px" bgcolor="white  height="200px">
	<tr  align="center"> <td colspan="6"> <h2> Bill Details </h2> </td> </tr>
	<tr bgcolor="#187eae">
	<th> Sr# </th>
	<th> Items </th>
	<th> Rate </th>
	<th> Quantity </th>
	<th> Total </th>
	</tr>
<?php
	include("includes/db.php");
	$id = $_GET['bill'];
	$get_orders = "select * from orders_details where o_id='$id'";
	$run_orders = mysqli_query ($con, $get_orders);
	$i=0;
	while ($row=mysqli_fetch_array($run_orders)){
		$fid = $row['p_id'];
		$rate = $row['price'];
		$qty = $row['quantity']; 
		$total = $row['total_price']; 
		$i++;
		
		$fname= "select * from products where p_id='$fid'";
		$runf = mysqli_query($con, $fname);
		$rowf = mysqli_fetch_array($runf);
		$foodn = $rowf['p_name'];
		
?>		
	<tr align="center">
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $foodn; ?> </td>
	<td> <?php echo $rate; ?> </td>
	<td> <?php echo $qty; ?> </td>
	<td> <?php echo $total; ?> </td>
 <?php } ?>
 
 <?php
	include("includes/db.php");
	$id1 = $_GET['bill'];
	$order = "select * from orders where o_id='$id1'";
	$run_order = mysqli_query ($con, $order);
	$row1 = mysqli_fetch_array ($run_order);
		$cus1 = $row1['c_id'];
		$dt1 = $row1['datetime'];
		$payable1 = $row1['total'];
		
		$get_cust = "select * from customer where c_id='$cus1'";
		$run_cust = mysqli_query ($con, $get_cust);
		$row1 = mysqli_fetch_array ($run_cust);
		$name = $row1['c_name'];
 ?>

	<tr> <th> CUSTOMER: <?php echo $name; ?> </th>  
		<th> BILL No: <?php echo $id1; ?> </th> 
		<th> DATE/TIME: <?php echo $dt1; ?>  </th> 
		<th> PAYABLE: <?php echo $payable1; ?>  </th> </tr>
	</table>
	<h5 style="text-align:center; background:white;"> Thank you. Visit Again!! </h5>
	<h5 style="text-align:center; background:white;"> Address: Bosan Road Multan &nbsp &nbsp Phone:061-000000 </h5>	