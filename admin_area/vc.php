



<table align="center" border="2px" width="996px" bgcolor="pink" height="" >
<tr align="center" border="2px" > <td colspan="6"> <h1> All categories  Are Here </h1> </td> </tr>
	
	<tr bgcolor="purple">
	<th> S.N </th>
	<th> category name </th>
	
	<th> Edit </th>
	<th> Delete </th>
	</tr>
<?php
	include("includes/db.php");
	$get_cat = "select * from category";
	$run_cat = mysqli_query ($con, $get_cat);
	$i=0;
	while ($row=mysqli_fetch_array($run_cat)){
		$id= $row['cat_id'];
		$title= $row['cat_name'];
		
		$i++;
?>		
	<tr align="center">
	<td> <?php echo $i; ?> </td>
	<td> <?php echo $title; ?> </td>
	
	<td> <a href="index.php?edit_cats=<?php echo $id;?>"> Edit </a> </td>
	<td> <a href="index.php?delete_cats=<?php echo $id;?>"> Delete </a> </td>
	</tr> 
	<?php } ?>
	
	</table>