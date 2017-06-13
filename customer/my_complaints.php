<table align="center" border="10" width="795px" bgcolor="white" height="" >
	<tr align="center" border="2px" > <td colspan="6"> <h1> Complaints Portal!! </h1> </td> </tr>
	
	<tr bgcolor="#187eae">
	<th> Complain NO. </th>
	<th> Subject </th>
	<th> Complaints</th>
	</tr>
<?php
	include("includes/connect.php");
	global $con;
		$user=$_SESSION['customer_email'];
		$get_customer= "select * from customers where customer_email='$user' ";
		$run_customer= mysqli_query ($con, $get_customer);
		$row_customer= mysqli_fetch_array ($run_customer);
		$id= $row_customer['customer_id'];
	$get_com = "select * from complaints where cid='$id'";
	$run_com = mysqli_query ($con, $get_com);
	$i=0;
	while ($row=mysqli_fetch_array($run_com)){
		$cno= $row['CNO'];
		$subject= $row['subject'];
		$complaint= $row['complaint'];
		$i++;
?>		
	<tr align="center">
	<td> <?php echo $cno; ?> </td>
	<td> <?php echo $subject; ?> </td>
	<td> <?php echo $complaint; ?> </td>
	<?php } ?>
		
</table>	