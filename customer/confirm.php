<?php

session_start();

if (!isset($_SESSION['customer_email'])) {
	
	echo "<script>window.open('../checkout.php','_self')</script>";

}else{

include("includes/db.php");
include("functions/functions.php");

if (isset($_GET['order_id'])) {
	
	$order_id = $_GET['order_id'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Project</title>
    <link rel="stylesheet" href="styles/custom.css">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
</head>
<body>

	<!--Top Begin-->
	<div id="top">

		<!--container Begin-->
		<div class="container">
			
			<!--col-md-6 offer begin-->
			<div class="col-md-6 offer">
				
				<a href="#" class="btn btn-success btn sm">

				<?php

				if (!isset($_SESSION['customer_email'])) {
					
					echo "Welcome: Guest";

				}else{

					echo "Welcome:" . $_SESSION['customer_email'] . "";

				}

				?>

				</a>
				<a href="checkout.php"><?php items(); ?> Items In Your Cart | Total Price: <?php total_price(); ?></a>

			</div>
			<!--col-md-6 offer finish-->

			<!--col-md-6 begin-->
			<div class="col-md-6">
				
				<!--menu begin-->
				<ul class="menu">
					
					<li>
						<a href="../customer_register.php">Register</a>
					</li>
					<li>
						<a href="my_account.php">My Account</a>
					</li>
					<li>
						<a href="../cart.php">Go To Cart</a>
					</li>
					<li>
						<a href="../checkout.php">

						<?php

							if (!isset($_SESSION['customer_email'])) {
					
								echo "<a href='checkout.php'>Log In</a>";

							}else{

								echo "<a href='logout.php'>Log Out</a>";

							}

						?>
						
						</a>
					</li>

				</ul>
				<!--menu finish-->

			</div>
			<!--col-md-6 finish-->

		</div>
		<!--container Finish-->

	</div>
	<!--Top Finish-->

	<!--navbar navbar-default begin-->
	<div id="navbar" class="navbar navbar-default">
		
		<!--container begin-->
		<div class="container">
			
			<!--navbar-header begin-->
			<div class="navbar-header">
				
				<!--navbar-brand home begin-->
				<a href="index.php" class="navbar-brand home">
					
					<img src="images/1ecom-store-logo.png" alt="logo for large screen" class="hidden-xs">
					<img src="images/1ecom-store-logo-mobile.png" alt="logo for mobile" class="visible-xs">

				</a>
				<!--navbar-brand home finish-->

				<button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
					
					<span class="sr-only">Toggle Navigation</span>

					<i class="fa fa-align-justify"></i>

				</button>

				<button class="navbar-toggle" data-toggle="collapse" data-target="#search">
					
					<span class="sr-only">Toggle Search</span>

					<i class="fa fa-search"></i>

				</button>

			</div>
			<!--navbar-header finish-->

			<!--navbar-collapse collapse begin-->
			<div class="navbar-collapse collapse" id="navigation">
				
				<!--padding-nav begin-->
				<div class="padding-nav">
					
					<!--nav navbar-nav left begin-->
					<ul class="nav navbar-nav left">
						
						<li>
							<a href="../index.php">Home</a>
						</li>
						<li>
							<a href="../shop.php">Shop</a>
						</li>
						<li class="active">
							<a href="my_account.php">My Account</a>
						</li>
						<li>
							<a href="../cart.php">Shopping Cart</a>
						</li>
						<li>
							<a href="../contact.php">Contact Us</a>
						</li>

					</ul>
					<!--nav navbar-nav left finish-->

				</div>
				<!--padding-nav finish-->
				
				<!--btn navbar-btn btn-primary begin-->
				<a href="../cart.php" class="btn navbar-btn btn-primary right">

					<i class="fa fa-shopping-cart"></i>

					<span><?php items(); ?> Items In Your Cart</span>
					
				</a>
				<!--btn navbar-btn btn-primary finish-->

				<!--navbar-collapse collapse right begin-->
				<div class="navbar-collapse collapse right">
					
					<!--btn btn-primary navbar-btn begin-->
					<button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
						
						<span class="sr-only">Toggle Search</span>

						<i class="fa fa-search"></i>

					</button>
					<!--btn btn-primary navbar-btn finish-->


				</div>
				<!--navbar navbar-collapse right finish-->

				<!--collapse clearfix begin-->
				<div class="collapse clearfix" id="search">
					
					<!--navbar-form begin-->
					<form action="result.php" method="get" class="navbar-form">
						
						<!--input-group begin-->
						<div class="input-group">
							
							<input type="text" class="form-control" placeholder="Search" name="user_query" required="required">
							
							<!--input-group-btn begin-->
							<span class="input-group-btn">

								<!--btn btn-primary begin-->
								<button class="btn btn-primary" type="button" name="search" value="Search">
									
									<i class="fa fa-search"></i>

								</button>
								<!--btn btn-primary finish-->

							</span>
							<!--input-group-btn finish-->

						</div>
						<!--input-group finish-->

					</form>
					<!--navbar-form finish-->

				</div>
				<!--collapse clearfix finish-->

			</div>
			<!--navbar-collapse collapse finish-->

		</div>
		<!--container finish-->

	</div>
	<!--navbar navbar-default finish-->

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
						My Account
					</li>
				</ul>

			</div>
			<!--col-md-12 finish-->

			<!--col-md-3 begin-->
			<div class="col-md-3">
				
				<?php

					include("includes/sidebar.php");

				?>

			</div>
			<!--col-md-3 finish-->

			<!--col-md-9 begin-->
			<div class="col-md-9">
				
				<!--box begin-->
				<div class="box">
					
					<h1 align="center">Please Confirm Your Payment</h1>

					<form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data">
						
						<!--form-group begin-->
						<div class="form-group">
							
							<label for="">Invoice No:</label>
							<input type="text" name="invoice_no" class="form-control" required="required">

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="">Amount Sent:</label>
							<input type="text" name="amount_sent" class="form-control" required="required">

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="">Select Payment Method:</label>
							<select name="payment_mode" class="form-control">
								<option>Select Payment Mode</option>
								<option>Back Code</option>
								<option>Paypall</option>
								<option>Payoneer</option>
								<option>Western Union</option>
							</select>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
									
							<label for="">Transaction / Reference ID:</label>
							<input type="text" name="ref_no" class="form-control" required="required">

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="">Paypall / Payoneer / Western Union Code:</label>
							<input type="text" name="code" class="form-control" required="required">

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="">Payment Date:</label>
							<input type="text" name="date" class="form-control" required="required">

						</div>
						<!--form-group finish-->

						<!--text-center begin-->
						<div class="text-center">
							
							<button class="btn btn-primary btn-lg" name="confirm_payment">
								<i class="fa fa-user-md"></i> Confirm Payment
							</button>

						</div>
						<!--text-center finish-->

					</form>

					<?php

					if (isset($_POST['confirm_payment'])) {
						
						$update_id = $_GET['update_id'];

						$invoice_no = $_POST['invoice_no'];

						$amount = $_POST['amount_sent'];

						$payment_mode = $_POST['payment_mode'];

						$ref_no = $_POST['ref_no'];

						$code = $_POST['code'];

						$payment_date = $_POST['date'];

						$complete = "Complete";

						$insert_payment = "INSERT INTO payments(invoice_no,amount,payment_mode,ref_no,code,payment_date)
						VALUES('$invoice_no','$amount','$payment_mode','$ref_no','$code','$payment_date')";

						$run_payment = mysqli_query($con,$insert_payment);

						$update_customer_order = "UPDATE customer_orders SET order_status='$complete' 
						WHERE order_id='$update_id'";

						$run_customer_order = mysqli_query($con,$update_customer_order);

						$update_pending_order = "UPDATE pending_orders SET order_status='$complete' 
						WHERE order_id='$update_id'";

						$run_pending_order = mysqli_query($con,$update_pending_order);

						if($run_pending_order){

							echo "<script>
									alert('Thank Your For Purchasing, Your Orders Will Be Completed Within 24 Hours Work')
								</script>";

							echo "<script>window.open('my_account.php?my_orders','_self')</script>";

						}

					}

					?>

				</div>
				<!--box finish-->

			</div>
			<!--col-md-9 finish-->

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
} 
?>