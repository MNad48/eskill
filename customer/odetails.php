 <h1 style="text-align:center; background:white; color:black;"> FOOD CIRCLES </h1>
 <h4 style="text-align:center; background:white; color:black;"> Everything You Eat Here is Yummy , Tasty and Healthful. </h4> 
<table align="center" border="2" width="795px" bgcolor="white" border="6">
	<tr  align="center"> <td colspan="6"> <h2> Bill Details </h2> </td> </tr>
	<tr bgcolor="#187eae">
	<th> Sr# </th>
	<th> Items </th>
	<th> Rate </th>
	<th> Quantity </th>
	<th> Total </th>
	</tr>
<?php
	include("includes/connect.php");
	$id = $_GET['odetails'];
	$get_orders = "select * from order_details where o_id='$id'";
	$run_orders = mysqli_query ($con, $get_orders);
	$i=0;
	while ($row=mysqli_fetch_array($run_orders)){
		$fid = $row['f_id'];
		$rate = $row['price'];
		$qty = $row['qty_order']; 
		$total = $row['total']; 
		$i++;
		
		$fname= "select * from foods where FId='$fid'";
		$runf = mysqli_query($con, $fname);
		$rowf = mysqli_fetch_array($runf);
		$foodn = $rowf['FTitle'];
?>		
	<tr align="center">
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $foodn; ?> </td>
	<td> <?php echo $rate; ?> </td>
	<td> <?php echo $qty; ?> </td>
	<td> <?php echo $total; ?> </td>
 <?php } ?>
 
 <?php
	include("includes/connect.php");
	$id1 = $_GET['odetails'];
	$order = "select * from orders where o_id='$id1'";
	$run_order = mysqli_query ($con, $order);
	$row1 = mysqli_fetch_array ($run_order);
		$payable1 = $row1['t_price'];
 ?>

	<tr align="right"> <th colspan="5"> PAYABLE:<?php echo $payable1; ?>  </th> </tr>
	</table>
	<h5 style="text-align:center; background:white; color:black;"> Thank you. Visit Again!! </h5>
	<h5 style="text-align:center; background:white; color:black;"> Address: Bosan Road Multan &nbsp &nbsp Phone:061-000000 </h5>	