<?php

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
				
				<?php

				if (!isset($_SESSION['customer_email'])) {
					
					include("customer/customer_login.php");

				}else{

					$_SESSION['customer_email'];
					include("payment_options.php");

				}

				?>

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