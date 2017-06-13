
<?php
		global $con;
		$user=$_SESSION['customer_email'];
		$get_customer= "select * from customers where customer_email='$user' ";
		$run_customer= mysqli_query ($con, $get_customer);
		$row_customer= mysqli_fetch_array ($run_customer);
		
		$id= $row_customer['customer_id'];
		$name= $row_customer['customer_name'];
		$email= $row_customer['customer_email'];
		$cnic= $row_customer['customer_CNIC'];
		$pass= $row_customer['customer_pass'];
		$image= $row_customer['customer_image'];
		$contact= $row_customer['customer_contact'];
		$add= $row_customer['customer_add'];
?>

<form method="post" action="" enctype="multipart/form-data" name="frmSignup">
	<table bgcolor="#cc6600" width="800px" height="380px" align="center"> 
	<tr align="center"> 
	<td colspan="4"> <h1> Edit Your Account </h1></td>
	</tr>
	
	<tr>
	<td align="right"> Customer Name: </td>
	<td>  <input class="boxreg" type="text" name="c_name" id="c_name" value="<?php echo $name;?>" onBlur="uLetter()" required/>  </td>
	</tr>
	<script language="javascript">
	function uLetter(){ 
		var cname = document.frmSignup.c_name;
		var letters = /^[A-Za-z" "]+$/;
			if(cname.value.match(letters)){
				// Focus goes to next field i.e. Address.
				return true;
				}else{
		alert('Name must have alphabet characters only');
		c_name.focus();
		return false;
		}
	}
 </script> 

	<tr>
	<td align="right"> Customer Email: </td>
	<td>  <input class="boxreg" type="email" name="c_email" id="c_email" value="<?php echo $email;?>" onBlur="ValidateEmail()" required/> </td>
	</tr>
	<script language="javascript">
function ValidateEmail()
{
var email = document.frmSignup.c_email;
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(email.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
c_email.focus();
return false;
}
} 
   </script> 
	
	<tr>
	<td align="right"> Customer CNIC: </td>
	<td>  <input class="boxreg" type="text" name="c_cnic" id="c_cnic" value="<?php echo $cnic;?>" onBlur="mycnic()" required/> </td>
	</tr>
	<script language="javascript">
			function mycnic(){ 	
				var mycnic = document.frmSignup.c_cnic;
				var numbers = /^\(?([0-9]{5})\)?[-. ]?([0-9]{7})[-. ]?([0-9]{1})$/;
					if(mycnic.value.match(numbers)){
							return true;
							}else
								{
									alert('cnic number format is invalid');
									c_cnic.focus();
									return false;
									}
			}
	</script>
	
	<tr>
	<td align="right"> Contact Contact: </td>
	<td> <input class="boxreg" type="text" name="c_contact" id="c_contact" value="<?php echo $contact;?>" onBlur="phone()" required/> </td>
	</tr>
	<script language="javascript">
		function phone(){ 
			var phone = document.frmSignup.c_contact;
			var numbers = /^\(?([0-9]{4})\)?[-. ]?([0-9]{7})$/;
				if(phone.value.match(numbers)){
					return true;
					}else
					{
						alert('phone number format is invalid');
						c_contact.focus();
						return false;
						}
				}
	</script>
	
	<tr>
	<td align="right"> Select Image  </td>
	<td> <input class="boxreg" type="file" name="c_image" /> <img src="customer_images/<?php echo $image;?>" width="70px" height="70px" /> </td>
	</tr>
	
	<tr>
	<td align="right"> Address:  </td>
	<td> <input class="boxreg" type="text" name="c_address" value="<?php echo $add;?>" size="50" required /></td>
	</tr>
	
	<tr>
	<td align="right"> Customer Password:  </td>
	<td> <input class="boxreg" type="password" name="c_password" value="<?php echo $pass;?>" required/>  </td>
	</tr>
	
	<tr align="center">
	<td colspan="2">  <input class="boxsub" type="submit" name="update" value="Update Account"/> </td>
	</tr>
	</table>
	</form>
	
	
	<?php
	global $con;
	if(isset($_POST['update'])){
		$ip=getIp();
		$c_id=$id;
		$c_name=$_POST['c_name'];
		$c_email=$_POST['c_email'];
		$c_cnic=$_POST['c_cnic'];
		$c_contact=$_POST['c_contact'];
		$c_address=$_POST['c_address'];
		$c_image=$_FILES['c_image']['name'];
		$c_image_tmp=$_FILES['c_image']['tmp_name'];
		$c_password=$_POST['c_password'];
		
		move_uploaded_file($c_image_tmp,"customer_images/$c_image");
		
		 $update_c = "update customers set customer_name='$c_name', customer_email='$c_email', customer_CNIC='$c_cnic' , customer_contact='$c_contact' ,  customer_add='$c_address' , customer_image='$c_image', customer_pass='$c_password'  where customer_id='$c_id' ";
		 $run_update =mysqli_query($con,$update_c);
		if($run_update){
			echo "<script> alert('Your account successfully updated') </script>";
			echo "<script> window.open('my_account.php', '_self') </script>";
		}
		
	}
?>