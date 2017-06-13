<?php 
	include("includes/db.php");
?>
<form method="post" action="" enctype="multipart/form-data">
<table align="center" border="2" width="996px" bgcolor="pink">
<tr>
<td align="center" colspan="5"> <h1> Add New category Here </h1> </td>
</tr>

<tr> 
<td align="right"> <b> category name : </b> </td>
<td> <input class="boxreg" type="text" name="cat_name" size="40" required />  </td>
</tr>

<tr>
<td align="center" colspan="5">  <input class="boxsub" type="submit" name="insert_category" value="Add category Now!" > </td>
</tr>
</table></form>
<?php
	global $con;
	if(isset($_POST['insert_category'])){
		$cid = $_POST['cat_id'];
		$cat_name= $_POST['cat_name'];
		
		$Addcategory = "insert into category (cat_id, cat_name) values ('$cid', '$cat_name' ) ";
		$Addcat= mysqli_query ($con, $Addcategory);
		if($Addcat){
		echo "<script> alert('new category has beed added to database!') </script>";
		echo "<script>window.open('index.php?insert_category', '_self') </script>"; 
		}else{
			echo "<script> alert('Error!') </script>";
		}
	}
?>