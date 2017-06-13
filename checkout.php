<?php 
include('headerall.php');
include('db.php');
include('functions/functions.php');
?>
<?php cart(); ?>
<div class="content">
	<div class="container">
	<div class="content-top">
<?php	if(!isset($_SESSION['c_email'])){
	include('login.php');
}else{
	include('payment.php');
}		
?>		
	</div>
</div>
</div>
<?php
include('footer.php');
?>
