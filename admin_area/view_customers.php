<table align="center" border="2px" width="996px" bgcolor="pink" height="" >
<tr align="center" border="2px" > <td colspan="6"> <h1> All categories  Are Here </h1> </td> </tr>
	
	<tr bgcolor="purple">
	<th> S.N </th>
	<th> customer name </th>
	<th> customer email </th>
	<th> Edit </th>
	<th> Delete </th>
	</tr>
	<?php
	include("includes/db.php");
	$get_cust = "select * from customer";
	$run_cust = mysqli_query ($con, $get_cust);
	$i=0;
	while ($row=mysqli_fetch_array($run_cust)){
		$id= $row['c_id'];
		$title= $row['c_name'];
		$mail= $row['c_email'];
		
		$i++;
?>		
	<tr align="center">
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $title; ?> </td>
	<td> <?php echo $mail; ?> </td>
	<td> <a href="index.php?editc=<?php echo $id;?>"> Edit </a> </td>
	<td> <a href="index.php?deletec=<?php echo $id;?>"> Delete </a> </td>
	</tr> 
	<?php } ?>
	
	</table>