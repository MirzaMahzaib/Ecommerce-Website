<?php

session_start();

$active='cart';	

include("includes/db.php");
include("functions/functions.php");

?>


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
						Shopping Cart
					</li>
				</ul>

			</div>
			<!--col-md-12 finish-->

			<!--col-md-9 begin-->
			<div id="cart" class="col-md-9">
				<!--box begin-->
				<div class="box">
					<!--form begin-->
					<form action="cart.php" method="post" enctype="multipart/form-data">
						
						<h1>Shopping Cart</h1>

						<?php

						$ip_add = getRealIpUser();

						$select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";

						$run_cart = mysqli_query($db,$select_cart);

						$count = mysqli_num_rows($run_cart);

						?>

						<p class="text-muted">You Currently Have <?php echo $count; ?> Item(s) In Your Cart</p>

						<!--table-responsive begin-->
						<div class="table-reponsive">
							<table class="table">
								<!--thead begin-->
								<thead>
									<!--tr begin-->
									<tr>
										
										<th colspan="2">Product</th>
										<th>Quantity</th>
										<th>Unit Price</th>
										<th>Size</th>
										<th colspan="1">Delete</th>
										<th colspan="2">Sub-Total</th>

									</tr>
									<!--tr finish-->
								</thead>
								<!--thead finish-->

								<!--tbody begin-->
								<tbody>
									
									<?php

									$total = 0;

									while ($row_cart=mysqli_fetch_array($run_cart)) {
										
										$pro_id = $row_cart['p_id'];

										$pro_size = $row_cart['size'];

										$pro_qty = $row_cart['qty'];

										$pro_sale = $row_cart['p_price'];

										$get_products = "SELECT * FROM products WHERE product_id='$pro_id'";

										$run_products = mysqli_query($con,$get_products);

										while ($row_products=mysqli_fetch_array($run_products)) {
											
											$product_title = $row_products['product_title'];

											$product_img1 = $row_products['product_img1'];

											$only_price = $row_products['product_price'];

											$sub_total = $pro_sale*$pro_qty;

											$_SESSION['pro_qty'] = $pro_qty;

											$total += $sub_total;
										
									?>

									<!--tr begin-->
									<tr>
										
										<td>
											<img src="admin_area/product_images/<?php echo $product_img1; ?>" 
											class="img-responsive" alt="product 1">
										</td>

										<td>
											<a href="details.php?pro_id=<?php echo $pro_id ?>"><?php echo $product_title; ?></a>
										</td>

										<td>
											<input type="number" name="quantity" 
											data-product_id="<?php echo $pro_id; ?>" 
											value="<?php echo $_SESSION['pro_qty']; ?>" 
											class="quantity form-control">
										</td>

										<td>
											$<?php echo $pro_sale; ?>
										</td>

										<td>
											<?php echo $pro_size; ?>
										</td>

										<td>
											<input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
										</td>

										<td>
											$<?php echo $sub_total; ?>
										</td>

									</tr>
									<!--tr finish-->

									<?php
										}

									}
									?>
								</tbody>
								<!--tbody finish-->

								<!--tfoot begin-->
								<tfoot>
									<!--tr begin-->
									<tr>
										
										<th colspan="5">Total</th>
										<th colspan="2">$<?php echo $total; ?></th>

									</tr>
									<!--tr finish-->

								</tfoot>
								<!--tfoot finish-->

							</table>
						</div>
						<!--table-responsive finish-->

						<!--box-footer begin-->
						<div class="box-footer">
							<!--pull-left begin-->
							<div class="pull-left">
								
								<!--btn btn-default begin-->
								<a href="index.php" class="btn btn-default">

									<i class="fa fa-chevron-left"></i> Continue Shopping
								
								</a>
								<!--btn btn-default finish-->

							</div>
							<!--pull-left finish-->

							<!--pull-right begin-->
							<div class="pull-right">
								
								<!--btn btn-default begin-->
								<button type="submit" name="update" value="Update Cart" 
								class="btn btn-default">

									<i class="fa fa-refresh"></i> Update Cart
								
								</button>
								<!--btn btn-default finish-->

								<a href="checkout.php" class="btn btn-primary">
									
									Proceed Checkout <i class="fa fa-chevron-right"></i>

								</a>

							</div>
							<!--pull-right finish-->
						</div>
						<!--box-footer finish-->

					</form>
					<!--form finish-->
				</div>
				<!--box finish-->

				<?php

				function update_cart(){

					global $con;

					if (isset($_POST['update'])) {
						
						foreach($_POST['remove'] as $remove_id){

							$delete_product = "DELETE FROM cart WHERE p_id='$remove_id'";

							$run_delete = mysqli_query($con,$delete_product);

							if($run_delete){

								echo "<script>window.open('cart.php','_self')</script>";

							}

						}

					}

				}

				echo $up_cart = update_cart();

				?>
				
				<!--same-height-row begin-->
					<div id="row same-height-row">
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
			<!--col-md-9 finish-->

			<!--col-md-3 begin-->
			<div class="col-md-3">
				<div id="order-summary" class="box">
					<!--box-header begin-->
					<div class="box-header">
						<h3>Order Summary</h3>
					</div>
					<!--box-header finish-->

					<!--text-muted begin-->
					<p class="text-muted">
						Shipping and additional costs are calculated based on value you have entered
					</p>
					<!--text-muted finish-->

					<!--table-responsive begin-->
					<div class="table-responsive">
						
						<!--table begin-->
						<table class="table">
							
							<tbody>
								<!--tr begin-->
								<tr>
									
									<td>Order All Sub-Total</td>
									<th>$<?php echo $total; ?></th>

								</tr>
								<!--tr finish-->
								<!--tr begin-->
								<tr>
									
									<td>Shipping and Handling</td>
									<td>$0</td>

								</tr>
								<!--tr finish-->
								<!--tr begin-->
								<tr>
									
									<td>Tax</td>
									<th>$0</th>

								</tr>
								<!--tr finish-->
								<!--tr begin-->
								<tr class="total">
									
									<td>Total</td>
									<th>$<?php echo $total; ?></th>

								</tr>
								<!--tr finish-->
							</tbody>

						</table>
						<!--table finish-->

					</div>
					<!--table-responsive finish-->

				</div>
			</div>
			<!--col-md-3 finish-->

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

	<script>
		
		$(document).ready(function(data){

			$(document).on('keyup','.quantity',function(){

				var id = $(this).data("product_id");
				var quantity = $(this).val();

				if (quantity != '') {

					$.ajax({

						url: "change.php",
						method: "POST",
						data:{id:id, quantity:quantity},

						success:function(){
							$("body").load("cart_body.php");
						}

					});

				}

			});

		});

	</script>

</body>