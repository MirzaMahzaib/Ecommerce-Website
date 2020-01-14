<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>
<!-- navbar navbar-inverse navbar-fixed-top begin -->
<div class="navbar navbar-inverse navbar-fixed-top">
	
	<!-- container begin -->
	<div class="container-fluid">

		<!-- navbar-header begin -->
		<div class="navbar-header">
			
			<!-- navbar-toggle begin -->
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-exl-collapse">
				
				<span class="sr-only">Toggle Navigation</span>

				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>

			</button>
			<!-- navbar-toggle finish -->

			<a href="index.php?dashboard" class="navbar-brand">Admin Area</a>

		</div>
		<!-- navbar-header finish -->

		<!-- nav navbar-right top-nav begin -->
		<ul class="nav navbar-right top-nav">
			
			<!-- dropdown begin -->
			<li class="dorpdown">
				
				<!-- dropdown-toggle begin -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					
					<i class="fa fa-user"></i> <?php echo $admin_name; ?> <b class="caret"></b>

				</a>
				<!-- dropdown-toggle finish -->

				<!-- dropdown-menu begin -->
				<ul class="dropdown-menu">
					
					<!-- li begin -->
					<li>
						<!-- a href begin -->
						<a href="index.php?user_profile=<?php echo $admin_id; ?>">	
						
							<i class="fa fa-fw fa-user"></i> Profile
						
						</a>
						<!-- a href finish -->
					</li>
					<!-- li finish -->

					<!-- li begin -->
					<li>
						<!-- a href begin -->
						<a href="index.php?view_products">

							<i class="fa fa-fw fa-envelope"></i> Products
						
							<span class="badge"><?php echo $count_products; ?></span>
						
						</a>
						<!-- a href finish -->
					</li>
					<!-- li finish -->

					<!-- li begin -->
					<li>
						<!-- a href begin -->
						<a href="index.php?view_customers">	

							<i class="fa fa-fw fa-users"></i> Customers

							<span class="badge"><?php echo $count_customers; ?></span>
						
						</a>
						<!-- a href finish -->
					</li>
					<!-- li finish -->

					<!-- li begin -->
					<li>
						<!-- a href begin -->
						<a href="index.php?view_cats">	
						
							<i class="fa fa-fw fa-gear"></i> Categories

							<span class="badge"><?php echo $count_p_categories; ?></span>
						
						</a>
						<!-- a href finish -->
					</li>
					<!-- li finish -->

					<li class="divider"></li>

					<!-- li begin -->
					<li>
						<!-- a href begin -->
						<a href="logout.php">	
						
							<i class="fa fa-fw fa-power-off"></i> Log Out
						
						</a>
						<!-- a href finish -->
					</li>
					<!-- li finish -->

				</ul>
				<!-- dropdown-menu finish -->

			</li>
			<!-- dropdown finish -->

		</ul>
		<!-- nav navbar-right top-nav finish -->

	</div>
	<!-- container finish -->

	<!-- collapse navbar-collapse navbar-exl-collapse begin -->
	<div class="collapse navbar-collapse navbar-exl-collapse">
		
		<!-- nav navbar-nav side-nav begin -->
		<ul class="nav navbar-nav side-nav">
			
			<li>
				
				<!-- a href begin -->
				<a href="index.php?dashboard">	
					
					<i class="fa fa-fw fa-dashboard"></i> Dashboard
					
				</a>
				<!-- a href finish -->

			</li>

			<li>
				
				<!-- a href begin -->
				<a href="#" data-toggle="collapse" data-target="#products">	
					
					<i class="fa fa-fw fa-tag"></i> Products
					<i class="fa fa-fw fa-caret-down"></i> 
					
				</a>
				<!-- a href finish -->

				<!-- collapse begin -->
				<ul class="collapse" id="products">
					
					<!-- li begin -->
					<li>
						
						<a href="index.php?insert_product">Insert Products</a>
					</li>
					<li>
						<a href="index.php?view_products">View Products</a>

					</li>
					<!-- li finish -->

				</ul>
				<!-- collapse finish -->

			</li>

			<li>
				
				<!-- a href begin -->
				<a href="#" data-toggle="collapse" data-target="#manufacturer">	
					
					<i class="fa fa-fw fa-star"></i> Manufacturer
					<i class="fa fa-fw fa-caret-down"></i> 
					
				</a>
				<!-- a href finish -->

				<!-- collapse begin -->
				<ul class="collapse" id="manufacturer">
					
					<!-- li begin -->
					<li>
						
						<a href="index.php?insert_manufacturer">Insert Manufacturer</a>
					</li>
					<li>
						<a href="index.php?view_manufacturers">View Manufacturers</a>

					</li>
					<!-- li finish -->

				</ul>
				<!-- collapse finish -->

			</li>

			<li>
				
				<!-- a href begin -->
				<a href="#" data-toggle="collapse" data-target="#p_cat">	
					
					<i class="fa fa-fw fa-edit"></i> Product Categories
					<i class="fa fa-fw fa-caret-down"></i> 
					
				</a>
				<!-- a href finish -->

				<!-- collapse begin -->
				<ul class="collapse" id="p_cat">
					
					<!-- li begin -->
					<li>
						
						<a href="index.php?insert_p_cat">Insert Product Category</a>
					</li>
					<li>
						<a href="index.php?view_p_cats">View Product Categories</a>

					</li>
					<!-- li finish -->

				</ul>
				<!-- collapse finish -->

			</li>

			<li>
				
				<!-- a href begin -->
				<a href="#" data-toggle="collapse" data-target="#cat">	
					
					<i class="fa fa-fw fa-book"></i> Categories
					<i class="fa fa-fw fa-caret-down"></i> 
					
				</a>
				<!-- a href finish -->

				<!-- collapse begin -->
				<ul class="collapse" id="cat">
					
					<!-- li begin -->
					<li>
						
						<a href="index.php?insert_cat">Insert Category</a>
					</li>
					<li>
						<a href="index.php?view_cats">View Categories</a>

					</li>
					<!-- li finish -->

				</ul>
				<!-- collapse finish -->

			</li>

			<li>
				
				<!-- a href begin -->
				<a href="#" data-toggle="collapse" data-target="#slides">	
					
					<i class="fa fa-fw fa-gear"></i> Slides
					<i class="fa fa-fw fa-caret-down"></i> 
					
				</a>
				<!-- a href finish -->

				<!-- collapse begin -->
				<ul class="collapse" id="slides">
					
					<!-- li begin -->
					<li>
						
						<a href="index.php?insert_slide">Insert Slide</a>
					</li>
					<li>
						<a href="index.php?view_slides">View Slides</a>

					</li>
					<!-- li finish -->

				</ul>
				<!-- collapse finish -->

			</li>

			<li>
				
				<!-- a href begin -->
				<a href="#" data-toggle="collapse" data-target="#boxes">	
					
					<i class="fa fa-fw fa-dropbox"></i> Boxes
					<i class="fa fa-fw fa-caret-down"></i> 
					
				</a>
				<!-- a href finish -->

				<!-- collapse begin -->
				<ul class="collapse" id="boxes">
					
					<!-- li begin -->
					<li>
						
						<a href="index.php?insert_box">Insert Box</a>
					</li>
					<li>
						<a href="index.php?view_boxes">View Boxes</a>

					</li>
					<!-- li finish -->

				</ul>
				<!-- collapse finish -->

			</li>

			<li>
				
				<!-- a href begin -->
				<a href="#" data-toggle="collapse" data-target="#coupon">	
					
					<i class="fa fa-fw fa-book"></i> Coupons
					<i class="fa fa-fw fa-caret-down"></i> 
					
				</a>
				<!-- a href finish -->

				<!-- collapse begin -->
				<ul class="collapse" id="coupon">
					
					<!-- li begin -->
					<li>
						
						<a href="index.php?insert_coupon">Insert Coupon</a>
					</li>
					<li>
						<a href="index.php?view_coupons">View Coupons</a>

					</li>
					<!-- li finish -->

				</ul>
				<!-- collapse finish -->

			</li>

			<li>
				
				<!-- a href begin -->
				<a href="#" data-toggle="collapse" data-target="#terms">	
					
					<i class="fa fa-fw fa-list"></i> Terms & Conditions
					<i class="fa fa-fw fa-caret-down"></i> 
					
				</a>
				<!-- a href finish -->

				<!-- collapse begin -->
				<ul class="collapse" id="terms">
					
					<!-- li begin -->
					<li>
						
						<a href="index.php?insert_term">Insert Term</a>
					</li>
					<li>
						<a href="index.php?view_terms">View Terms</a>

					</li>
					<!-- li finish -->

				</ul>
				<!-- collapse finish -->

			</li>

			<li>
				<a href="index.php?view_customers">
					<i class="fa fa-fw fa-users"></i> View Customers
				</a>
			</li>

			<li>
				<a href="index.php?view_orders">
					<i class="fa fa-fw fa-book"></i> View Orders
				</a>
			</li>

			<li>
				<a href="index.php?view_payments">
					<i class="fa fa-fw fa-money"></i> View Payments
				</a>
			</li>

			<li>
				<a href="index.php?edit_css">
					<i class="fa fa-fw fa-pencil"></i> CSS Editor
				</a>
			</li>

			<li>
				
				<!-- a href begin -->
				<a href="#" data-toggle="collapse" data-target="#users">	
					
					<i class="fa fa-fw fa-gear"></i> Users
					<i class="fa fa-fw fa-caret-down"></i> 
					
				</a>
				<!-- a href finish -->

				<!-- collapse begin -->
				<ul class="collapse" id="users">
					
					<!-- li begin -->
					<li>
						
						<a href="index.php?insert_user">Insert User</a>
					</li>
					<li>
						<a href="index.php?view_users">View Users</a>

					</li>
					<li>
						<a href="index.php?edit_user=<?php echo $admin_id; ?>">Edit User Profile</a>

					</li>
					<!-- li finish -->

				</ul>
				<!-- collapse finish -->

			</li>

			<li>
				<a href="logout.php">
					<i class="fa fa-fw fa-power-off"></i> Log Out
				</a>
			</li>

		</ul>
		<!-- nav navbar-nav side-nav finish -->

	</div>
	<!-- collapse navbar-collapse navbar-exl-collapse finish -->

</div>
<!-- navbar navbar-inverse navbar-fixed-top finish -->

<?php } ?>