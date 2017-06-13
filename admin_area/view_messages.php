<table align="center" border="2px" width="996px" bgcolor="pink" height="" style="padding:10px;" >
	<tr align="center" border="2px" > <td colspan="6"> <h1>  All Messages  </h1> </td> </tr>
	
	<tr bgcolor="purple">
	<th> SR# </th>
	<th> Customer Name </th>
	<th> Email </th>
	<th> Contact </th>
	<th> Message </th>
	</tr>
<?php
	include("includes/db.php");
	$get_msgs = "select * from contact";
	$run_msgs = mysqli_query ($con, $get_msgs);
	$i=0;
	while ($row=mysqli_fetch_array($run_msgs)){
		$id= $row['customer_id'];
		$message= $row['message'];
		$i++;
		
		$c_details = "select * from customer where c_id='$id'";
		$run_details = mysqli_query ($con, $c_details);
		$row1 = mysqli_fetch_array($run_details);
		$name = $row1['c_name'];
		$email = $row1['c_email'];
		$contact = $row1['c_phone'];
?>		
	<tr align="center">
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $name; ?> </td>
	<td> <?php echo $email; ?> </td>
	<td> <?php echo $contact; ?> </td>
	<td> <?php echo $message; ?> </td>

	</tr> <?php } ?>
	
	
</table>	