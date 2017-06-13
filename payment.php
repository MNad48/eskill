<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<div style="color:black;">	
	<h2> Terms of Purchase </h2>
	<p> Read the terms and conditions before ordering through STYLO SHOES.
		The following Terms and Conditions set forth the rules and regulations regarding all services performed by STYLO SHOES Inc. By using the STYLO SHOES you (the ''User'', the customer that uses the website) agree to these terms and conditions.</p>
		<p>1. You agree to pay all fees and charges incurred in connection with your purchases including any applicable taxes. </p>
		<p>2. Minimum time to process delivery order is 40 minutes. </p>
		<p>3. You may cancel any order at any time until the order "In Pending". </p>
	</ol>
</div>

<div>
<form method="post" action="">
<table bgcolor="" width="1200px" height="120px" align="center"> 
<tr align="center">
<td>  <input class="boxreg" type="submit" name="ready" id="ready" value="Ready to confirm your order, Pay on Delivery. Click here!!"/> </td> </tr>
<tr align="center"> <td> <input class="boxreg" type="submit" name="notready" id="notready" value="No, I want to change my cart"/>  </td> </tr>
</table></form>
</div>
<?php
	if(isset($_POST['ready'])){
		echo "<script> window.open('success.php','_self')</script>";
	}
	if(isset($_POST['notready'])){
		echo "<script> window.open('cart.php','_self')</script>";
	}
?>