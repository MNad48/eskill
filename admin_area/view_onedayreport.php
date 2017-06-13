<form method="post" action="" enctype="multipart/form-data" style="margin-top:10px; margin-left:150px;">

<input class="boxreg" type="date" name="oneday" required />
<input class="boxsub" type="submit" name="getreport" value="Generate Report" />
</form>

<?php
	include("includes/db.php");
	if(isset($_POST['getreport'])){
		$dat=$_POST['oneday'];
		$getdata="select * from orders where datetime like '$dat%'";
		$run = mysqli_query ($con, $getdata);
		$i=0;
		$tot=0;
		echo "<table align='center' border='2px' width='996px' bgcolor='white'  >
		<tr align='center' border='2px' > <td colspan='6'> <h1> Sale's Report of $dat </h1> </td> </tr>
	
		<tr bgcolor='#187eae'>
		<th> ORDER# </th>
		<th> CUSTOMER </th>
		<th> DATE/TIME </th>
		<th> STATUS </th>
		<th> Amount </th>
		</tr>";
		while ($row=mysqli_fetch_array($run)){
			$oid= $row['o_id'];
			$cid= $row['c_id'];
			$dt= $row['datetime'];
			$price= $row['total'];
			$status= $row['status'];
			$tot = $tot + $price;
			$i++;
			
			$get_cust = "select * from customer where c_id='$cid'";
			$run_cust = mysqli_query ($con, $get_cust);
			$row1 = mysqli_fetch_array ($run_cust);
			$name = $row1['c_name'];
			
			if($i==0){
				echo "<script> alert('No Order on $dat') </script>"; 
			}else{
				echo"<tr>
				<th> $oid </th>
				<th> $name </th>
				<th> $dt </th>
				<th> $status </th>
				<th> $price </th>
				</tr>";
			}
		}
		echo "</table>";
		echo "<h2 style='color:white; text-align:center;'> Total Order : $i </h2>";
		echo "<h2 style='color:white; text-align:center;'> Total Sale : $tot </h2>";
		echo "<a href='print1dayreport.php?DT=$dat'><h2 style='color:white; text-align:center;'> Print Report </h2> </a>";
	}
?>
