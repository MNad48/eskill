<?php
	$con = mysqli_connect ("localhost","root","","pgd");
	if (mysqli_connect_errno()){
		echo "The Connection was not established : " . mysqli_connect_error();
	}
	
	//getting the all Pizza products
	function getFoods(){
	global $con;
	$getPiz = " select * from foods where FCat='1'";
	$runPiz = mysqli_query ($con, $getPiz);
	while ($rowPiz=mysqli_fetch_array($runPiz)){
			$FId=$rowPiz['FId'];
			$FCat=$rowPiz['FCat'];
			$FTitle=$rowPiz['FTitle'];
			$FPrice=$rowPiz['FPrice'];
			$FDesc=$rowPiz['FDesc'];
			$FKeywords=$rowPiz['FKeywords'];
			$FImage=$rowPiz['FImage'];
			echo "
			<div id=fcontainer>
			<h2 style='color:#cc6600;'> $FTitle </h2> 
			<img src='admin_area/FImages/$FImage'/>
			<p> $FDesc </p>
			<p style='float:left; margin-top:5px; font-size:28px; '> <b> $FPrice PKR </b> </p>
			<a href='pizza.php?add_cart=$FId'><button class='Obutton'> Add to Topping </button> </a>
			</div>
			";
		}
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
				$FId=$_GET['add_cart'];
				$Check_Food = "select * from cart where IP='$ip' AND Fid='$FId' ";
				$run = mysqli_query ($con, $Check_Food);
				if (mysqli_num_rows($run) >0){
					echo "<script> alert('Food already added to database! If you want to change quantity, Go to cart...') </script>";
				} 
				else{
					$Insert_Food = "insert into cart (Fid,IP) values ('$FId','$ip')";
					$Run_Insert = mysqli_query ($con, $Insert_Food);
					echo "<script> alert('Food has beed added to Cart!') </script>";
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
			$f_id = $row_ip['Fid'];
			$f_id_match = "select * from foods where FId='$f_id'";
			$run_f_id_match = mysqli_query ($con, $f_id_match);
			while ($row_f_match=mysqli_fetch_array($run_f_id_match)){
				$f_match_price = array($row_f_match['FPrice']);
				$tprice = array_sum($f_match_price);
				$total +=$tprice;
			}
		}
		echo $total;
	}
	
	//getting the Burger products
	function getBurgers(){
	global $con;
	$getBug = " select * from foods where FCat='2'";
	$runBug = mysqli_query ($con, $getBug);
	while ($rowBug=mysqli_fetch_array($runBug)){
			$FId=$rowBug['FId'];
			$FCat=$rowBug['FCat'];
			$FTitle=$rowBug['FTitle'];
			$FPrice=$rowBug['FPrice'];
			$FDesc=$rowBug['FDesc'];
			$FKeywords=$rowBug['FKeywords'];
			$FImage=$rowBug['FImage'];
			echo "
			<div id=fcontainer>
			<h2 style='color:#cc6600;'> $FTitle </h2> 
			<img src='admin_area/FImages/$FImage' width='250px' height='150px' style='border:3px solid #cc6600;'> </img>
			<p> $FDesc </p> 
			<p style='float:left; margin-top:5px; font-size:28px; '> <b> $FPrice PKR </b> </p>
			<a href='burgers.php?add_cart=$FId'><button class='Obutton'> Add to Topping </button> </a>
			</div>
			";
		}
	}
	
	function getStarters(){
	global $con;
	$getBug = " select * from foods where FCat='4'";
	$runBug = mysqli_query ($con, $getBug);
	while ($rowBug=mysqli_fetch_array($runBug)){
			$FId=$rowBug['FId'];
			$FCat=$rowBug['FCat'];
			$FTitle=$rowBug['FTitle'];
			$FPrice=$rowBug['FPrice'];
			$FDesc=$rowBug['FDesc'];
			$FKeywords=$rowBug['FKeywords'];
			$FImage=$rowBug['FImage'];
			echo "
			<div id=fcontainer>
			<h2 style='color:#cc6600;'> $FTitle </h2> 
			<img src='admin_area/FImages/$FImage'> </img>
			<p> $FDesc </p> 
			<p style='float:left; margin-top:5px; font-size:28px; '> <b> $FPrice PKR </b> </p>
			<a href='starters.php?add_cart=$FId'><button class='Obutton'> Add to Topping </button> </a>
			</div>
			";
		}
	}
	
	function getDesserts(){
	global $con;
	$getBug = " select * from foods where FCat='5'";
	$runBug = mysqli_query ($con, $getBug);
	while ($rowBug=mysqli_fetch_array($runBug)){
			$FId=$rowBug['FId'];
			$FCat=$rowBug['FCat'];
			$FTitle=$rowBug['FTitle'];
			$FPrice=$rowBug['FPrice'];
			$FDesc=$rowBug['FDesc'];
			$FKeywords=$rowBug['FKeywords'];
			$FImage=$rowBug['FImage'];
			echo "
			<div id=fcontainer>
			<h2 style='color:#cc6600;'> $FTitle </h2> 
			<img src='admin_area/FImages/$FImage'> </img>
			<p> $FDesc </p> 
			<p style='float:left; margin-top:5px; font-size:28px; '> <b> $FPrice PKR </b> </p>
			<a href='desserts.php?add_cart=$FId'><button class='Obutton'> Add to Topping </button> </a>
			</div>
			";
		}
	}
	
	function getDeals(){
	global $con;
	$getBug = " select * from foods where FCat='3'";
	$runBug = mysqli_query ($con, $getBug);
	while ($rowBug=mysqli_fetch_array($runBug)){
			$FId=$rowBug['FId'];
			$FCat=$rowBug['FCat'];
			$FTitle=$rowBug['FTitle'];
			$FPrice=$rowBug['FPrice'];
			$FDesc=$rowBug['FDesc'];
			$FKeywords=$rowBug['FKeywords'];
			$FImage=$rowBug['FImage'];
			echo "
			<div id=fcontainer>
			<h2 style='color:#cc6600;'> $FTitle </h2> 
			<img src='admin_area/FImages/$FImage'> </img>
			<p> $FDesc </p> 
			<p style='float:left; margin-top:5px; font-size:28px; '> <b> $FPrice PKR </b> </p>
			<a href='deals.php?add_cart=$FId'><button class='Obutton'> Add to Topping </button> </a>
			</div>
			";
		}
	}
?>