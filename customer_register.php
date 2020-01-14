A<?php

$active='Account';
include("includes/header.php");

?>

	<!--content begin-->
	<div id="content">
		
		<!--container begin-->
		<div class="container">
			
			<!--col-md-12 begin-->
			<div class="col-md-12">
				
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						Register
					</li>
				</ul>

			</div>
			<!--col-md-12 finish-->

			<!--col-md-12 begin-->
			<div class="col-md-12">
				<!--box begin-->
				<div class="box">
					
					<!--box-header begin-->
					<div class="box-header">

						<!--center begin-->
						<center>

							<h2>Register a New Account</h2>
						
						</center>
						<!--center finish-->

						<!--form begin-->
						<form action="customer_register.php" method="post" enctype="multipart/form-data">
							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Your Name</label>

								<input type="text" name="c_name" required="required" class="form-control">

							</div>
							<!--form-group finish-->

							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Your Email</label>

								<input type="email" name="c_email" required="required" class="form-control">

							</div>
							<!--form-group finish-->

							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Your Password</label>

								<input type="password" name="c_pass" required="required" class="form-control">

							</div>
							<!--form-group finish-->

							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Your Country</label>

								<input type="text" name="c_country" required="required" 
								class="form-control">

							</div>
							<!--form-group finish-->

							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Your City</label>

								<input type="text" name="c_city" required="required" class="form-control">

							</div>
							<!--form-group finish-->

							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Your Contact</label>

								<input type="text" name="c_contact" required="required" class="form-control">

							</div>
							<!--form-group finish-->

							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Your Address</label>

								<input type="text" name="c_address" required="required" class="form-control">

							</div>
							<!--form-group finish-->

							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Your Profile Picture</label>

								<input type="file" name="c_image" required="required" class="form-control">

							</div>
							<!--form-group finish-->

							<!--text-center begin-->
							<div class="text-center">
								
								<button class="btn btn-primary" type="submit" name="register">
									<i class="fa fa-user-md"></i> Register
								</button>

							</div>
							<!--text-center finish-->
						</form>
						<!--form finish-->

					</div>
					<!--box-header finish-->

				</div>
				<!--box finish-->

			</div>
			<!--col-md-12 finish-->

		</div>
		<!--container finish-->

	</div>
	<!--content finish-->

	<!--footer begin-->
	<?php
	include("includes/footer.php");
	?>
	<!--footer finish-->

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>    
</body>
</html>

<?php

if (isset($_POST['register'])) {
	
	$c_name = $_POST['c_name'];

	$c_email = $_POST['c_email'];

	$c_pass = $_POST['c_pass'];

	$c_country = $_POST['c_country'];

	$c_city = $_POST['c_city'];

	$c_contact = $_POST['c_contact'];

	$c_address = $_POST['c_address'];

	$c_image = $_FILES['c_image']['name'];

	$c_image_tmp = $_FILES['c_image']['tmp_name'];

	$c_ip = getRealIpUser();

	move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

	$insert_customer = "INSERT INTO customers(customer_name,customer_email,customer_pass,customer_country,customer_city,
	customer_contact,customer_address,customer_image,customer_ip) 
	VALUES('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";

	$run_customer = mysqli_query($con,$insert_customer);

	$sel_cart = "SELECT * FROM cart WHERE ip_add='$c_ip'";

	$run_cart = mysqli_query($con,$sel_cart);

	$check_cart = mysqli_num_rows($run_cart);

	if ($check_cart>0) {
		
		/// If  Register Have  Items In Cart ///

		$_SESSION['customer_email']=$c_email;

		echo "<script>alert('You Have Been Registered Successfully')</script>";

		echo "<script>window.open('checkout.php','_self')</script>";

	}else{

		/// If Register Without Items In Cart ///

		$_SESSION['customer_email']=$c_email;

		echo "<script>alert('You Have Been Registered Successfully')</script>";

		echo "<script>window.open('index.php','_self')</script>";

	}

}

?>