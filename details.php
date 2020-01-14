<?php

session_start();

$active='cart';	

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

	$pro_sale_price = $row_product['product_sale'];

	$pro_desc = $row_product['product_desc'];

	$pro_img1 = $row_product['product_img1'];

	$pro_img2 = $row_product['product_img2'];

	$pro_img3 = $row_product['product_img3'];

	$get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id='$p_cat_id'";

	$run_p_cat = mysqli_query($con,$get_p_cat);

	$row_p_cat = mysqli_fetch_array($run_p_cat);

	$p_cat_title = $row_p_cat['p_cat_title'];

	$pro_label = $row_product['product_label'];

		if ($pro_label == "") {
			
		}else{

			$product_label = "
				
				<a href='#' class='label $pro_label'>
	
					<div class='theLabel'> $pro_label </div>
					<div class='labelBackground'> </div>

				</a>

			";

		}

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

					echo "Welcome:" . $_SESSION['customer_email'];

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
						<a href="customer_register.php">Register</a>
					</li>
					<li>
						<a href="checkout.php">My Account</a>
					</li>
					<li>
						<a href="cart.php">Go To Cart</a>
					</li>
					<li>
						<a href="checkout.php">
							
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
						
						<li class="<?php if($active=='Home') echo"active"; ?>">
							<a href="index.php">Home</a>
						</li>
						<li class="<?php if($active=='Shop') echo"active"; ?>">
							<a href="shop.php">Shop</a>
						</li>
						<li class="<?php if($active=='Account') echo"active"; ?>">
							
							<?php

							if (!isset($_SESSION['customer_email'])) {
								
								echo "<a href='checkout.php'> My Account </a>";

							}else{

								echo "<a href='customer/my_account.php?my_orders'> My Account </a>";

							}

							?>

						</li>
						<li class="<?php if($active=='Cart') echo"active"; ?>">
							<a href="cart.php">Shopping Cart</a>
						</li>
						<li class="<?php if($active=='Contact') echo"active"; ?>">
							<a href="contact.php">Contact Us</a>
						</li>

					</ul>
					<!--nav navbar-nav left finish-->

				</div>
				<!--padding-nav finish-->
				
				<!--btn navbar-btn btn-primary begin-->
				<a href="cart.php" class="btn navbar-btn btn-primary right">

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
						Shop
					</li>
					<li>
						<a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
					</li>
					<li><?php echo $pro_title; ?></li>
				</ul>

			</div>
			<!--col-md-12 finish-->

			<!--col-md-12 begin-->
			<div class="col-md-12">
				<!--row begin-->
				<div id="productMain" class="row">
					<!--col-sm-6 begin-->
					<div class="col-sm-6">
						<!--mainImage begin-->
						<div id="mainImage">
							<!--carousel slide begin-->
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
								<!--carousel-indicators begin-->
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
								</ol>
								<!--carousel-indicators finish-->

								<!--carousel-inner begin-->
								<div class="carousel-inner">
									<div class="item active">
										<center><img src="admin_area/product_images/<?php echo $pro_img1;?>" height="460px" width="100%" alt=""></center>
									</div>
									<div class="item">
										<center><img src="admin_area/product_images/<?php echo $pro_img2;?>" height="460px" width="100%" alt=""></center>
									</div>
									<div class="item">
										<center><img src="admin_area/product_images/<?php echo $pro_img3;?>" height="460px" width="100%" alt=""></center>
									</div>
								</div>
								<!--carousel-inner finish-->

								<!--carousel control begin-->
								<div href="#myCarousel" class="left carousel-control" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									<span class="sr-only">Previous</span>
								</div>

								<div href="#myCarousel" class="right carousel-control" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Previous</span>
								</div>
								<!--carousel control finish-->
							</div>
							<!--carousel slide finish-->
						</div>
						<!--mainImage finish-->


						<?php echo $product_label; ?>

					</div>
					<!--col-sm-6 finish-->
					
					<!--col-sm-6 begin-->
					<div class="col-sm-6">
						<!--box begin-->
						<div class="box">
							<h1 class="text-center"><?php echo $pro_title;?></h1>
							
							<?php add_cart(); ?>

							<!--form-horizontal begin-->
							<form action="details.php?add_cart=<?php echo $product_id; ?>" 
							class="form-horizontal" method="post">
								<!--form-group begin-->
								<div class="form-group">
									<label class="col-md-5 control-label">Product Quantity</label>

									<!--col-md-7 begin-->
									<div class="col-md-7">
										
										<select name="product_qty" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>

									</div>
									<!--col-md-7 finish-->

								</div>
								<!--form-group finish-->
								
								<!--form-group begin-->
								<div class="form-group">
									<label class="col-md-5 control-label">Product Size</label>
									
									<div class="col-md-7">
										
										<select name="product_size" class="form-control" 
										 required oninvalid="setCustomValidity('Must pick 1 size for the product')" 
										oninput="setCustomValidity('')">
											
											<option value="" disabled="disabled" selected="selected" >Select a Size</option>
											<option>Small</option>
											<option>Medium</option>
											<option>Large</option>

										</select>

									</div>

								</div>
								<!--form-group finish-->
									
								<?php 

									if ($pro_label == "sale") {
										
										echo "

											<p class='price'>

												PRICE: PKR <del>$pro_price</del><br>

												SALE: PKR $pro_sale_price

											</p>
	
										";	

									}else{
										
										echo "

											<p class='price'>

												PRICE: $pro_price

											</p>
	
										";

									}

								?>

								<p class="text-center buttons">
									<button class="btn btn-primary i fa fa-shopping-cart"> 
										Add To Cart
									</button>
								</p>	

							</form>
							<!--from-horizontal finish-->

						</div>
						<!--box finish-->
						
						<!--row begin-->
						<div class="row" id="thumbs">

							<!--col-xs-4 begin-->
							<div class="col-xs-4">
								<!--thumb begin-->
								<a data-target="#myCarousel" data-slide-to="0" href="" class="thumb">
									
									<img src="admin_area/product_images/<?php echo $pro_img1;?>" alt="prod. 1" class="img-responsive">

								</a>
								<!--thumb finish-->
							</div>
							<!--col-xs-4 finish-->

							<!--col-xs-4 begin-->
							<div class="col-xs-4">
								<!--thumb begin-->
								<a data-target="#myCarousel" data-slide-to="1" href="" class="thumb">
									
									<img src="admin_area/product_images/<?php echo $pro_img2;?>" alt="prod. 1" class="img-responsive">

								</a>
								<!--thumb finish-->
							</div>
							<!--col-xs-4 finish-->

							<!--col-xs-4 begin-->
							<div class="col-xs-4">
								<!--thumb begin-->
								<a data-target="#myCarousel" data-slide-to="2" href="" class="thumb">
									
									<img src="admin_area/product_images/<?php echo $pro_img3;?>" alt="prod. 1" class="img-responsive">

								</a>
								<!--thumb finish-->
							</div>
							<!--col-xs-4 finish-->

						</div>
						<!--row finish-->

					</div>
					<!--col-sm-6 finish-->

				</div>
				<!--row finish-->

					<!--box begin-->
					<div class="box" id="details">
						
						<h4>Product Details</h4>

						<p>
							<?php echo $pro_desc;?>
						</p>

						<h4>Size</h4>

						<ul>
							<li>Small</li>
							<li>Medium</li>
							<li>Large</li>
						</ul>

						<hr>

					</div>
					<!--box finish-->

					<!--same-height-row begin-->
					<div id="same-height-row">
						<!--col-md-3 col-sm-6 begin-->
						<div class="col-md-3 col-sm-6">
							<!--box same-height headline begin-->
							<div class="box same-height headline">
								<h3 class="text-center">Products You Maybe Like</h3>
							</div>
							<!--box same-height headline finish-->
						</div>
						<!--col-md-3 col-sm-6 finish-->
						
						<?php

							$get_products = "SELECT * FROM products ORDER BY rand() LIMIT 0,3";

							$run_products = mysqli_query($con,$get_products);

							while ($row_products=mysqli_fetch_array($run_products)) {
								
								$pro_id = $row_products['product_id'];

								$pro_title = $row_products['product_title'];

								$pro_price = $row_products['product_price'];

								$pro_sale_price = $row_products['product_sale'];

								$pro_img1 = $row_products['product_img1'];

								$pro_label = $row_products['product_label'];

								$manufacturer_id = $row_products['manufacturer_id'];

								$get_manufacturer = "SELECT * FROM manufacturers WHERE manufacturer_id='$manufacturer_id'";

								$run_manufacturer = mysqli_query($db,$get_manufacturer);

								$row_manufacturer = mysqli_fetch_array($run_manufacturer);

								$manufacturer_title = $row_manufacturer['manufacturer_title'];

								if ($pro_label == "sale") {
									
									$product_price = "<del> $ $pro_price </del>";

									$product_sale_price = "| $ $pro_sale_price";

								}else{

									$product_price = "$ $pro_price";

									$product_sale_price = "";

								}

								if ($pro_label == "") {
									
								}else{

									$product_label = "
										
										<a href='#' class='label $pro_label'>
							
											<div class='theLabel'> $pro_label </div>
											<div class='labelBackground'> </div>

										</a>

									";

								}

								echo "
								
									<div class='col-md-3 col-sm-6 center-responsive'>

										<div class='product'>

											<a href='details.php?pro_id=$pro_id'>

												<img class='img-responsive' src='admin_area/product_images/$pro_img1'>
											</a>

											<div class='text'>

											<center>

												<p class='btn btn-primary'> $manufacturer_title </p>
							
											</center>

												<h3>

													<a href='details.php?pro_id=$pro_id'>

														$pro_title

													</a>

												</h3>

												<p class='price'>

													PKR $product_price &nbsp;$product_sale_price

												</p>

												<p class='button'>

													<a href='details.php?pro_id=$pro_id' class='btn btn-default'>

														View Details

													</a>

													<a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

														<i class='fa fa-shopping-cart'></i> Add to Cart

													</a>

												</p>

											</div>

											$product_label

										</div>

									</div>

								";

							}

						?>

					</div>
					<!--same-height-row finish-->
						
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