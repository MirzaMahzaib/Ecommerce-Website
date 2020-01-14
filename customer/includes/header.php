<?php

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<?php

if (isset($_GET['pro_id'])) {
	
	$product_id = $_GET['pro_id'];

	$get_product = "SELECT * FROM products WHERE product_id='$product_id'";

	$run_product = mysqli_query($con,$get_product);

	$row_product = mysqli_fetch_array($run_product);

	$p_cat_id = $row_product['p_cat_id'];

	$pro_title = $row_product['product_title'];

	$pro_price = $row_product['product_price'];

	$pro_desc = $row_product['product_desc'];

	$pro_img1 = $row_product['product_img1'];

	$pro_img2 = $row_product['product_img2'];

	$pro_img3 = $row_product['product_img3'];

	$get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";

	$run_p_cat = mysqli_query($con,$get_p_cat);

	$row_p_cat = mysqli_fetch_array($run_p_cat);

	$p_cat_title = $row_p_cat['p_cat_title'];

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