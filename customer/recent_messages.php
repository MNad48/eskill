<table align="center" border="10" width="795px" bgcolor="white" height="" >
	<tr align="center" border="2px" > <td colspan="6"> <h1> My Recent Messages!! </h1> </td> </tr>
	
	<tr bgcolor="#187eae">
	<th> SR#. </th>
	<th> Message NO. </th>
	<th> Messages</th>
	</tr>
<?php
	include("includes/connect.php");
	global $con;
		$user=$_SESSION['customer_email'];
		$get_customer= "select * from customers where customer_email='$user' ";
		$run_customer= mysqli_query ($con, $get_customer);
		$row_customer= mysqli_fetch_array ($run_customer);
		$id= $row_customer['customer_id'];
	$get_com = "select * from contact where cus_id='$id'";
	$run_com = mysqli_query ($con, $get_com);
	$i=0;
	while ($row=mysqli_fetch_array($run_com)){
		$cid= $row['contact_id'];
		$msgs= $row['cus_message'];
		$i++;
?>		
	<tr align="center">
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $cid; ?> </td>
	<td> <?php echo $msgs; ?> </td>
	<?php } ?>
		
</table>	