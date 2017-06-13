
<?php 
	include("includes/db.php");
	if(isset($_GET['edit_cats'])){
		$get_id = $_GET['edit_cats'];
		$get_cat = "select * from category where c_id = '$get_id'";
		$run= mysqli_query($con, $get_cat);
		$row = mysqli_fetch_array($run);
		$id = $row['c_id'];
		$c_name = $row['c_name'];
	}
?>


<form method="post" action="" enctype="multipart/form-data" style="margin-top:80px; margin-left:150px;">
<h2 style="margin-bottom:20px;"> Edit & Update Category </h2>
<input type="text" name="cat" size="" value="<?php echo $c_name; ?>" required />
<input type="submit" name="updatecat" value="Update Category" />
</form>

<?php
	include("includes/db.php");
	if(isset($_POST['updatecat'])){
		$cid= $id;
		$cat=$_POST['cat'];
		$update_cat="update category set c_name='$cat' where c_id = '$cid'";
		$run = mysqli_query ($con, $update_cat);
		if($run){
			echo "<script> alert('Category has been updated!') </script>";
			echo "<script>window.open('index.php?view_categories', '_self') </script>"; 
			}
			else {
			echo "<script> alert('Not updated!') </script>";
	}
	}
?>

	