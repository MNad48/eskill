<table align="center" border="2px" width="996px" bgcolor="pink" height="" >
<tr align="center" border="2px" > <td colspan="6"> <h1> All Products  Are Here </h1> </td> </tr>
	
	<tr bgcolor="purple">
	<th> S.N </th>
	<th> Name </th>
	<th> Image </th>
	<th> Price </th>
	<th> Edit </th>
	<th> Delete </th>
	</tr>
<?php
	include("includes/db.php");
	$get_pro = "select * from products";
	$run_pro = mysqli_query ($con, $get_pro);
	$i=0;
	while ($row=mysqli_fetch_array($run_pro)){
		$id= $row['p_id'];
		$title= $row['p_name'];
		$image= $row['p_image'];
		$price= $row['p_price'];
		$i++;
?>		
	<tr align="center">
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $title; ?> </td>
	<td><img src="simage/<?php echo $image;?>" width="50px" height="40px" /> </td>
	<td> <?php echo $price; ?> </td>
	<td> <a href="index.php?edit=<?php echo $id;?>"> Edit </a> </td>
	<td> <a href="index.php?pdelete=<?php echo $id;?>"> Delete </a> </td>
	</tr> 
	<?php } ?>
		
</table>