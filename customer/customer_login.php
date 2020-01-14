<!--box begin-->
<div class="box">
	
	<!--box-header begin-->
	<div class="box-header">
		
		<!--center begin-->
		<center>
			
			<h1>Login</h1>

			<p class="lead"> Already have our Account..? </p>

			<p class="text-muted">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptate necessitatibus tempora placeat vero quidem tenetur accusantium possimus, ipsam debitis accusamus, error vel animi consequatur quos fuga voluptatum, ad! Exercitationem.
			</p>

		</center>
		<!--center finish-->

	</div>
	<!--box-header finish-->

	<!--form begin-->
	<form action="checkout.php" method="post">
		
		<!--form-group begin-->
		<div class="form-group">
			
			<label>Email</label>
			<input type="email" class="form-control" name="c_email" required="required">

		</div>
		<!--form-group finish-->

		<!--form-group begin-->
		<div class="form-group">
			
			<label>Password</label>
			<input type="password" class="form-control" name="c_pass" required="required">

		</div>
		<!--form-group finish-->

		<!--form-group begin-->
		<div class="text-center">
			
			<button name="login" value="Login" class="btn btn-primary">
				
				<i class="fa fa-sign-in"></i> Login

			</button>

		</div>
		<!--form-group finish-->

	</form>
	<!--form finish-->

	<!--center begin-->
	<center>
		
		<a href="customer_register.php">
			
			<h3> Don't have Account..? Register Here </h3>

		</a>

	</center>
	<!--center finish-->

</div>
<!--box finish-->


<?php

if (isset($_POST['login'])) {
	
	$customer_email = $_POST['c_email'];

	$customer_pass = $_POST['c_pass'];

	$select_customer = "SELECT * FROM customers WHERE customer_email='$customer_email' AND customer_pass='$customer_pass'";

	$run_customer = mysqli_query($con,$select_customer);

	$get_ip = getRealIpUser();

	$check_customer = mysqli_num_rows($run_customer);

	$select_cart ="SELECT * FROM cart WHERE ip_add='$get_ip'";

	$run_cart = mysqli_query($con,$select_cart);

	$check_cart = mysqli_num_rows($run_cart);

	if ($check_customer==0) {
		
		echo "<script>alert('Your Email or Password Is Wrong')</script>";

		exit();

	}

	if ($check_customer==1 AND $check_cart==0) {

		$_SESSION['customer_email']=$customer_email;
		
		echo "<script>alert('You Are Logged In')</script>";

		echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";

	}else{

		$_SESSION['customer_email']=$customer_email;
		
		echo "<script>alert('You Are Logged In')</script>";

		echo "<script>window.open('checkout.php','_self')</script>";

	}

}

?>