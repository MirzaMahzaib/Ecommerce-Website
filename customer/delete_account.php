<!--center begin-->
<center>
	
	<h1>Do You Really Want To Delete Your Account ?</h1>

	<form action="" method="post">
		
		<input type="submit" name="yes" value="Yes, I Want To Delete" class="btn btn-danger">

		<input type="submit" name="no" value="No, I Don't Want To Delete" class="btn btn-primary">

	</form>

</center>
<!--center finish-->

<?php

$c_email = $_SESSION['customer_email'];

if (isset($_POST['yes'])) {
	
	$delete_customer = "DELETE FROM customers WHERE customer_email='$c_email'";

	$run_delete_customer = mysqli_query($con,$delete_customer);

	if ($run_delete_customer) {
		
		session_destroy();

		echo "<script>alert('Succefully Deleted Your Account, Feel Sorry About This, Good Bye')</script>";

		echo "<script>window.open('../index.php','_self')</script>";

	}

}

if (isset($_POST['no'])) {
	
	echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}

?>