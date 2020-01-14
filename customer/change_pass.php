<h1 align="center">Change Password</h1>

<!--form begin-->
<form action="" method="post" enctype="multipart/form-data">
	
	<!--form-group begin-->
	<div class="form-group">

		<label for="">Your Old Password:</label>
		<input type="text" name="old_pass" required="required" class="form-control">

	</div>
	<!--form-group finish-->

	<!--form-group begin-->
	<div class="form-group">

		<label for="">Your New Password:</label>
		<input type="text" name="new_pass" required="required" class="form-control">

	</div>
	<!--form-group finish-->

	<!--form-group begin-->
	<div class="form-group">

		<label for="">Confirm Your New Password:</label>
		<input type="text" name="new_pass_again" required="required" class="form-control">

	</div>
	<!--form-group finish-->

	<!--text-center begin-->
	<div class="text-center">
		<button type="submit" class="btn btn-primary" name="update">
			<i class="fa fa-user-md"></i> Update Now
		</button>
	</div>
	<!--text-center finish-->

</form>
<!--form finish-->

<?php

if (isset($_POST['update'])) {
	
	$c_email = $_SESSION['customer_email'];

	$c_old_pass = $_POST['old_pass'];

	$c_new_pass = $_POST['new_pass'];

	$c_new_pass_again = $_POST['new_pass_again'];

	$sel_c_old_pass = "SELECT * FROM customers WHERE customer_pass='$c_old_pass'";

	$run_c_old_pass = mysqli_query($con,$sel_c_old_pass);

	$check_c_old_pass = mysqli_fetch_array($run_c_old_pass);

	if ($check_c_old_pass==0) {
		
		echo "<script>alert('Sorry, Your Current Password Din Not Valid. Please Try Again')</script>";

		exit();

	}

	if ($c_new_pass!=$c_new_pass_again) {
		
		echo "<script>alert('Sorry, Your New Password Din Not Match')</script>";

		exit();

	}

	$update_c_pass = "UPDATE customers SET customer_pass='$c_new_pass' WHERE customer_email='$c_email'";

	$run_update_c_pass = mysqli_query($con,$update_c_pass);

	if ($run_update_c_pass) {
		
		echo "<script>alert('Your Password Has Been Updated')</script>";

		echo "<script>window.open('my_account.php?my_orders','_self')</script>";

	}

}

?>