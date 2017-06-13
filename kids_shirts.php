<?php 
include('headerall.php');
include('db.php');
include('functions/functions.php');
?>
<?php cart(); ?>

<div class="content">
	<div class="container">
	<div class="content-top">
		
		<h1>Kids shirts</h1>
		
		<div class="gclass">
<?php
	$get_shirts = "select * from products where cat_id='18'";
	$run_shirts = mysqli_query($con,$get_shirts) or die(mysqli_error($con));
	while($row=mysqli_fetch_array($run_shirts)){
		$pid=$row['p_id'];
		$pcat=$row['cat_id'];
		$pname=$row['p_name'];
		$psize=$row['p_size'];
		$pcolor=$row['p_color'];
		$pprice=$row['p_price'];
		$pdesc=$row['p_desc'];
		$pimage=$row['p_image'];
		$pkeywords=$row['p_keywords'];
		echo "
		
		<div class='igclass'>
		<div class='iigclass'>
			<img src='admin_area/simage/$pimage'/ width='200px' height='195px'/>
				</div>
				<div class='icgclass'>
				<h4> $pname</h4>
				<p> $pdesc </p>
				<input type='number' name='qty' placeholder='Quantity' length='100' /><br>
				<input type='text' name='size' placeholder='Size| Small, Medium or Large'/><br>
				<a href='kids_shirts.php?add_cart=$pid'><button type='submit'  Style='color:orange' name='add_cart' value='$pid' >Add to Cart</button></a>
				<p Style='float:right'><b>Price: RS $pprice</b></p>
			</div>
	</div> 	";		
		} ?>
			</div>	
		
	</div>
	</div>
</div>
<?php
include('footer.php');
?>