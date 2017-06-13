<?php 
	include("includes/db.php");
?>
<form method="post" action="" enctype="multipart/form-data">
<table align="center" border="2" width="996px" bgcolor="pink">
<tr>
<td align="center" colspan="5"> <h1> Add New Product Here </h1> </td>
</tr>

<tr> 
<td align="right"> <b> Product Name : </b> </td>
<td> <input class="boxreg" type="text" name="ptitle" size="40" required />  </td>
</tr>

<tr>
<td align="right"> <b> Product Category : <b> </td>
<td>
<select class="boxreg" name="pcat" required>
<option > Select A Category </option> 
<?php
$con = mysqli_connect("localhost", "root", "", "stylo");
$getCategories = "select * from category";
$runCategories = mysqli_query ($con, $getCategories);
while ($rowCategories=mysqli_fetch_array($runCategories)){
	$cid = $rowCategories ['cat_id'];
	$ctitle = $rowCategories ['cat_name'];
	
	echo "<option value='$cid'> $ctitle </option>"; 
}
?>
</select>
</td>
</tr>

<tr> 
<td align="right"> <b> Product Size : </b> </td>
<td> <input class="boxreg" type="text" name="psize" size="40" required />  </td>
</tr>

<tr> 
<td align="right"> <b> Product Color : </b> </td>
<td> <input class="boxreg" type="text" name="pcolor" size="40" required />  </td>
</tr>


<tr>
<td align="right"> <b> Product Image : <b> </td>
<td> <input class="boxreg" type="file" name="pimage" required /> </td> 
</tr>

<tr>
<td align="right"> <b> Product Price : <b> </td>
<td> <input class="boxreg" type="text" name="pprice" required /> </td>
</tr>

<tr>
<td align="right" > <b> Product Description : <b> </td>
<td> <textarea class="boxreg" name="pdesc"  cols="80" rows="10" required /> </textarea> </td>
</tr>

<tr>
<td align="right"> <b> Product Keywords : <b> </td>
<td> <input class="boxreg" type="text" name="pkeywords"  size="68" required /> </td>
</tr>

<tr>
<td align="center" colspan="5">  <input class="boxsub" type="submit" name="insert_products" value="Add products Now!" > </td>
</tr>
</table></form>
<?php
	global $con;
	if(isset($_POST['insert_products'])){
		$ptitle = $_POST['ptitle'];
		$pcat = $_POST['pcat'];
		$pprice = $_POST['pprice'];
		$pdesc = $_POST['pdesc'];
		$pkeywords = $_POST['pkeywords'];
		$psize = $_POST['psize'];
		$pcolor = $_POST['pcolor'];

		$pimage = $_FILES['pimage']['name'];
		$pimage_tmp = $_FILES['pimage']['tmp_name'];
		move_uploaded_file($pimage_tmp,"simage/$pimage");
		$Addproducts = "insert into products (cat_id, p_name, p_size, p_color, p_price, p_desc, p_image, p_keywords) values ('$pcat', '$ptitle', '$psize', '$pcolor',  '$pprice', '$pdesc', '$pimage', '$pkeywords') ";
		$Addpro = mysqli_query ($con, $Addproducts);
		if($Addpro){
		echo "<script> alert('products has beed added to database!') </script>";
		echo "<script>window.open('index.php?insert_product', '_self') </script>"; 
		}else{
			echo "<script> alert('Error!') </script>";
		}
	}
?>