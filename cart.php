<?php 
include('headerall.php');
include('db.php');
include('functions/functions.php');
?>
<?php cart(); ?>
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1> Shopping Cart</h1>
	</div>
	
<div>	
<form action="" method="post" enctype="multipart/form-data">
<table align="center" width="1200px" bgcolor="#cc6600">
<tr align="center">
<td colspan="8"> <h2> Update Your Cart & Checkout </h2></td> 
</tr>
<tr align="center"> 
<td> <h3> Sr# </h3> </td>
<td> <h3> Products's </h3> </td>
<td> <h3> Unit Price </h3> </td>
<td> <h3> Quantity </h3> </td>
<td> <h3> Total Price </h3> </td>
<td> <h3> Remove Product </h3> </td>
<td> <h3> Update Quantity  </h3> </td>
</tr>
<?php
		$total = 0;
		$i=0;
		global $con;
		$ip = getIp();
		$u_ip = "select * from cart where customer_ip='$ip'";
		$ip_details = mysqli_query ($con, $u_ip);
		while ($row_ip=mysqli_fetch_array($ip_details)){
			$pid = $row_ip['product_id'];
			$pq = $row_ip['quantity'];
			$pid_match = "select * from products where p_id='$pid'";
			$run_pid_match = mysqli_query ($con, $pid_match);
				$row_p_match=mysqli_fetch_array($run_pid_match);
				//$f_match_price = array($row_f_match['FPrice']);
				$pname = $row_p_match['p_name'];
				$pimage = $row_p_match['p_image'];
				$single_price = $row_p_match['p_price'];
				$tot = $pq * $single_price;
				//$tprice = array_sum($f_match_price);
				$total +=$tot;
				$i++;
				//echo $total;
?>		
	<tr align="center">
	<td> <?php echo $i; ?> </td>
	<td><?php echo $pname; ?>  <br>
		<img src="admin_area/simage/<?php echo $pimage; ?>" width="100px" height="100px" /> 
	</td>
	<td><?php echo $single_price; ?> Pkr </td>
	<td> <input type="text" class="" name="qty_<?php echo $pid; ?>" value="<?php echo $pq; ?>" /> </td>
	<td> <h3> <?php echo $tot; ?> Pkr </h3> </td>
	<td> <button class="" type="submit" name="remov" value="<?php echo $pid; ?>">Remove Quantity</button> </td>
	<td> <button class="" type="submit" name="change_qty" value="<?php echo $pid; ?>" >Update Quantity</button> </td>
	</tr>
	<?php } ?>
	<tr align="center">
	<td colspan="3px"> <input class="" type="submit" name="continue" value="Continue Shopping "/> </td>
	<td colspan="3px"> <input class="" type="submit" name="checkout" value="Checkout "/> </td>
	<td colspan="2px"> <b> Sub Total: </b> <h3> <?php echo $total; ?> Pkr </h3> </td>
		</tr>
	<tr> </tr>
</table>
</form>
<?php
		global $con;
		$ip=getIp();
		if (isset($_POST['remov'])){
				$id= $_POST['remov'];
				echo $id;
				$delete_item = "delete from cart where product_id='$id' AND customer_ip='$ip'";
				$run_delete = mysqli_query ($con, $delete_item);
				if ($run_delete){
					echo "<script> alert('Selected Food has been removed from your cart!!') </script>";
					echo "<script>window.open('cart.php', '_self') </script>"; 
				}
		}
		if (isset($_POST['continue'])){
			echo "<script>window.open('index.php', '_self') </script>"; 
		}
		if (isset($_POST['checkout'])){
			echo "<script>window.open('checkout.php', '_self') </script>"; 
		}
		if(isset($_POST['change_qty'])){
				$pcid = $_POST['change_qty'];
				$qty = $_POST['qty_'.$pcid];	
				$update_qty = "update cart set quantity='$qty' where product_id='$pcid'";
				$run_update = mysqli_query ($con, $update_qty);
				//$_SESSION['qty'] = $qty;
				//$total = $total * $qty ; 
				if ($run_update){
					echo "<script> alert('Quantity has been Updated!!') </script>";
					echo "<script>window.open('cart.php', '_self') </script>"; 
				}
		}
?>
</div>

	
	
</div>
</div>
<?php
include('footer.php');
?>
