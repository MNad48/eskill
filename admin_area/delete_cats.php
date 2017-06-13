

<?php
include("includes/db.php");
	if(isset($_GET['delete_cats'])){
		$Id=$_GET['delete_cats'];
		$del= "delete from category where cat_id='$Id'";
		$run= mysqli_query ($con, $del);
		if($run){
			echo "<script> alert('Category has been Deleted!') </script>";
			echo "<script>window.open('index.php?view_categories', '_self') </script>"; 
	}
	else {
			echo "<script> alert('Not deleted!') </script>";
	}
}
?>
	
	