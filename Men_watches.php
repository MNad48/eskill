<?php 
include('headerall.php');
include('db.php');
include('functions/functions.php');
?>
<?php cart(); ?>
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>men watches</h1>
		
		<div class="gclass">
<?php
	$get_watches = "select * from products where cat_id='15'";
	$run_watches = mysqli_query($con,$get_watches) or die(mysqli_error($con));
	while($row=mysqli_fetch_array($run_watches)){
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
				<h3> $pname</h3>
				<p> <h4>$pdesc</h4> </p>
				<input type='number' name='qty' placeholder='Quantity'/><br>
				<input type='text' name='size' placeholder='Size| Small, Medium or Large'/><br>
				<a href='Men_watches.php?add_cart=$pid'><button type='submit' Style='color:white; background-color:red' name='add_cart' value='$pid' >Add to Cart</button></a>
				<p Style='float:right'><b><h4 Style='color:red' >Price: RS $pprice</h4></b></p>
			</div>
	</div>	";		
		} ?>
			</div>	
		
	</div>
</div>
</div>
<?php
include('footer.php');
?>