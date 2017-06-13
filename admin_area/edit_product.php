
<?php
include("includes/db.php");
	if(isset($_GET['edit'])){
		$Id=$_GET['edit'];
		$get_pro="select * from products where p_id='$Id'";
		$run_pro = mysqli_query ($con, $get_pro);
		
		$row=mysqli_fetch_array($run_pro);
		$id= $row['p_id'];
		$title= $row['p_name'];
		$image= $row['p_image'];
		$price= $row['p_price'];
		$desc= $row['p_desc'];
		$size= $row['p_size'];
		$color= $row['p_color'];
		$keyword= $row['p_keywords'];
		$cats= $row['cat_id'];
		$get_cat="select * from category where cat_id='$cats'";
		$run_cat = mysqli_query ($con, $get_cat);
		$row_cat = mysqli_fetch_array($run_cat);
		$category = $row_cat['cat_name'];
	}
?>
<html>
	<head>
			<title> Update Products </title>
	</head>
<body bgcolor="pink">
<form method="post" action="" enctype="multipart/form-data">
<table align="center" border="2" width="996px" bgcolor="pink" height="500px" >
<tr>
<td align="center" colspan="5"> <h1> Edit & Update products </h1> </td>
</tr>

<tr> 
<td align="right"> <b> product Name : </b> </td>
<td> <input class="boxreg" type="text" name="ptitle" size="40" value="<?php echo $title; ?>" required />  </td>
</tr>

<tr>
<td align="right"> <b> product Category : <b> </td>
<td>
<select class="boxreg" name="pcat" required>
<option > <?php echo $category; ?> </option> 
<?php
$getCategories = "select * from category";
$runCategories = mysqli_query ($con, $getCategories);
while ($rowCategories=mysqli_fetch_array($runCategories)){
	$CId = $rowCategories ['cat_id'];
	$CTitle = $rowCategories ['cat_name'];
	
	echo "<option value='$CId'> $CTitle </option>"; 
}
?>
</select>
</td>
</tr>

<tr> 
<td align="right"> <b> Product Size : </b> </td>
<td> <input class="boxreg" type="text" name="psize" size="40" value="<?php echo $size; ?>" required />  </td>
</tr>

<tr> 
<td align="right"> <b> Product Color : </b> </td>
<td> <input class="boxreg" type="text" name="pcolor" size="40"  value="<?php echo $color; ?>"  required />  </td>
</tr>


<tr>
<td align="right"> <b> product Image : <b> </td>
<td> <input class="boxreg" type="file" name="pimage" / > <img src="simage/<?php echo $image;?>" width="70px" height="70px" /> </td> 
</tr>

<tr>
<td align="right"> <b> product Price : <b> </td>
<td> <input class="boxreg" type="text" name="pprice" value="<?php echo $price; ?>" required/> </td>
</tr>

<tr>
<td align="right" > <b> product Description : <b> </td>
<td> <textarea class="boxreg" name="pdesc"  cols="50" rows="15" required> <?php echo $desc; ?> </textarea> </td>
</tr>

<tr>
<td align="right"> <b> product Keywords : <b> </td>
<td> <input class="boxreg" type="text" name="pkeywords"  size="68" value="<?php echo $keyword; ?>" required/> </td>
</tr>

<tr>
<td align="center" colspan="5">  <input class="boxsub" type="submit" name="update_product" value="Update product" > </td>
</tr>
</table>
</form>
</body>
</html>
<?php
	global $con;
	if(isset($_POST['update_product'])){
		$uid= $id;
		$ptitle = $_POST['ptitle'];
		$pcat = $_POST['pcat'];
		$pcolor = $_POST['pcolor'];
		$psize = $_POST['psize'];
		$pPrice = $_POST['pprice'];
		$pDesc = $_POST['pdesc'];
		$pKeywords = $_POST['pkeywords'];
		$pImage = $_FILES['pimage']['name'];
		$pImage_tmp = $_FILES['pimage']['tmp_name'];
		move_uploaded_file($pImage_tmp,"simage/$FImage");
		
		 $upd = "update products set cat_id='$pcat', p_name='$ptitle', p_size='$psize', p_color='$pcolor', p_price='$pPrice', p_desc='$pDesc', p_image='$pImage', p_keywords='$pKeywords' where p_id='$uid' ";
		$run=mysqli_query($con,$upd) or die (mysqli_error($con));
		if($run){
		echo "<script> alert('products has been updated!') </script>";
		echo "<script>window.open('index.php?view_products', '_self') </script>"; 
		}
		else {
			echo "<script> alert('Not updated!') </script>";
	}
	}
?>