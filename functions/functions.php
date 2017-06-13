<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


	$con = mysqli_connect ("localhost","root","","stylo");
	if (mysqli_connect_errno()){
		echo "The Connection was not established : " . mysqli_connect_error();
	}
	// getting the user IP address
	function getIp(){
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $ip;
}
	// adding products to cart
	function cart(){
			if (isset($_GET['add_cart'])){
				global $con;
				$ip=getIp();
				$PId=$_GET['add_cart'];
				$Check_Product = "select * from cart where customer_ip='$ip' AND product_id='$PId' ";
				$run = mysqli_query ($con, $Check_Product);
				if (mysqli_num_rows($run) >0){
					echo "<script> alert('Product already added to Cart! If you want to change quantity, Go to Cart...') </script>";
				} 
				else{
					$Insert_Product = "insert into cart (product_id,customer_ip) values ('$PId','$ip')";
					$Run_Insert = mysqli_query ($con, $Insert_Product);
					echo "<script> alert('Product has beed added to Cart!') </script>";
					echo "<script>window.open('index.php'.'_self') </script>";
				}
			}			
	}

	// getting the total added cart items
	function total_items(){
		if (isset($_GET['add_cart'])){
			global $con;
			$ip = getIp();
			$get_items = "select * from cart where IP='$ip'";
			$run_items = mysqli_query ($con, $get_items);
			$count_items = mysqli_num_rows ($run_items);
		}	
		else {
				global $con;
			$ip = getIp();
			$get_items = "select * from cart where IP='$ip'";
			$run_items = mysqli_query ($con, $get_items);
			$count_items = mysqli_num_rows ($run_items);	
			}
			echo $count_items;
	}
	
	// getting the total price of the cart items
	function total_price(){
		$total = 0;
		global $con;
		$ip = getIp();
		$u_ip = "select * from cart where IP='$ip'";
		$ip_details = mysqli_query ($con, $u_ip);
		while ($row_ip=mysqli_fetch_array($ip_details)){
			$pp_id = $row_ip['Fid'];
			$p_id_match = "select * from foods where p_id='$pp_id'";
			$run_p_id_match = mysqli_query ($con, $p_id_match);
			while ($row_p_match=mysqli_fetch_array($run_p_id_match)){
				$p_match_price = array($row_p_match['FPrice']);
				$tprice = array_sum($p_match_price);
				$total +=$tprice;
			}
		}
		echo $total;
	}
	function order(){
		//getting all the products
		$total = 0;
		global $con;
		$ip = getIp();
		$u_ip = "select * from cart where customer_ip='$ip'";
		$ip_details = mysqli_query ($con, $u_ip);
		while ($row_ip=mysqli_fetch_array($ip_details)){
			$pp_id = $row_ip['product_id'];
			$pqty = $row_ip['quantity'];
			$pp_id_match = "select * from products where p_id='$pp_id'";
			$run_pp_id_match = mysqli_query ($con, $pp_id_match);
			$row_p_match=mysqli_fetch_array($run_pp_id_match);
			$p_match_price = $row_p_match['p_price'];
			$tprice = $p_match_price*$pqty;
			$total +=$tprice;
		}
		// getting the customer details
		$user= $_SESSION['c_email'];
		$get_c= "select * from customer where c_email='$user' ";
		$run_c= mysqli_query ($con, $get_c);
		$row_c= mysqli_fetch_array ($run_c);
		$c_id = $row_c['c_id'];
		
		//order placement
		$insert_order= "insert into orders (c_id, total, status) values ('$c_id','$total', 'pending')";
		$run = mysqli_query($con, $insert_order);
		if($run){
			$oid = mysqli_insert_id($con);
			orderDetail($oid);
		}
		
	}
	
	function orderDetail($oid){
		echo "order detail";
		global $con;
		if(isset($_SESSION['c_email'])){
			$user=$_SESSION['c_email'];
			$get_c= "select * from customer where c_email='$user' ";
			$run_c= mysqli_query ($con, $get_c);
			$row_c= mysqli_fetch_array ($run_c);
			$c_id = $row_c['c_id'];
	
			$ip = getIp();
			$u_ip = "select * from cart inner join products on cart.product_id = products.p_id where customer_ip='$ip'";
			$ip_details = mysqli_query ($con, $u_ip);
			$success = 1;
			while ($row_ip=mysqli_fetch_array($ip_details)){
				$pp_id = $row_ip['p_id'];
				$p_price = $row_ip['p_price'];
				$qty = $row_ip['quantity'];
				$amount = $p_price * $qty;
				$query = "insert into orders_details (o_id, p_id, price, quantity, total_price) values('$oid', '$pp_id', '$p_price', '$qty', '$amount')";
				$result = mysqli_query($con, $query);
				if(!$result){
					$success = 0;
					echo mysqli_error($con);
					break;
				}
			} 
			if($success == 1)
			{
				$query = "delete from cart where customer_ip='$ip'";
				$result = mysqli_query($con, $query);
				if($result){
					echo "<script> alert('Order successfully Place. Go to Your Account for further order status!!')</script>";
					echo "<script> window.open ('index.php','_self')</script>";
				}
			}
		} else{
			echo "Session is not started, Check Check";
		} 
		
	}
	
	
?>