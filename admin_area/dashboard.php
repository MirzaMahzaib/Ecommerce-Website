<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>
<!-- top-header and breadcrumb row begin -->
<div class="row">		
	<!-- col-lg-12 begin -->
	<div class="col-lg-12 pt-5">
		
		<h1 class="page-header">Dashboard</h1>

		<!-- breadcrumb begin -->
		<ol class="breadcrumb">			
			<!-- active begin -->
			<li class="active">				
				<i class="fa fa-dashboard"></i> Dashboard
			</li>
			<!-- active finish -->		
		</ol>
		<!-- breadcrumb finish -->

	</div>
	<!-- col-lg-12 finish -->
</div>
<!-- top-header and breadcrumb row finish -->

<!-- main-content row begin -->
<div class="row">	
	<!-- col-lg-3 col-md-6 begin -->
	<div class="col-lg-3 col-md-6">		
		<!-- panel panel-primary begin -->
		<div class="panel panel-primary">			
			<!-- panel-heading begin -->
			<div class="panel-heading">				
				<!-- panel-heading row begin -->
				<div class="row">	

					<!-- col-xs-3 begin -->
					<div class="col-xs-3">						
						<i class="fa fa-tasks fa-5x"></i>
					</div>
					<!-- col-xs-3 finish -->

					<!-- col-xs-9 text-right begin -->
					<div class="col-xs-9 text-right">						
						<div class="huge"> <?php echo $count_products; ?> </div>
						
						<div>Products</div>
						
					</div>
					<!-- col-xs-9 text-right finish -->

				</div>
				<!-- panel-heading row finish -->
			</div>
			<!-- panel-heading finish -->

			<!-- a href begin -->
			<a href="index.php?view_products">
				<!-- panel-footer begin -->
				<div class="panel-footer">
					
					<!-- pull-left begin -->
					<span class="pull-left"> View Details </span>
					<!-- pull-left finish -->

					<!-- pull-right begin -->
					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
					<!-- pull-right finish -->

					<div class="clearfix"></div>

				</div>
				<!-- panel-footer finish -->
			</a>
			<!-- a href finish -->

		</div>
		<!-- panel panel-primary finish -->
	</div>
	<!-- col-lg-3 col-md-6 finish -->

	<!-- col-lg-3 col-md-6 begin -->
	<div class="col-lg-3 col-md-6">		
		<!-- panel panel-green begin -->
		<div class="panel panel-green">			
			<!-- panel-heading begin -->
			<div class="panel-heading">				
				<!-- panel-heading row begin -->
				<div class="row">	

					<!-- col-xs-3 begin -->
					<div class="col-xs-3">						
						<i class="fa fa-users fa-5x"></i>
					</div>
					<!-- col-xs-3 finish -->

					<!-- col-xs-9 text-right begin -->
					<div class="col-xs-9 text-right">
						<div class="huge"> <?php echo $count_customers; ?> </div>
						
						<div>Custoemrs</div>
						
					</div>
					<!-- col-xs-9 text-right finish -->

				</div>
				<!-- panel-heading row finish -->
			</div>
			<!-- panel-heading finish -->

			<!-- a href begin -->
			<a href="index.php?view_customers">
				<!-- panel-footer begin -->
				<div class="panel-footer">
					
					<!-- pull-left begin -->
					<span class="pull-left"> View Details </span>
					<!-- pull-left finish -->

					<!-- pull-right begin -->
					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
					<!-- pull-right finish -->

					<div class="clearfix"></div>

				</div>
				<!-- panel-footer finish -->
			</a>
			<!-- a href finish -->

		</div>
		<!-- panel panel-green finish -->
	</div>
	<!-- col-lg-3 col-md-6 finish -->

	<!-- col-lg-3 col-md-6 begin -->
	<div class="col-lg-3 col-md-6">		
		<!-- panel panel-orange begin -->
		<div class="panel panel-orange">			
			<!-- panel-heading begin -->
			<div class="panel-heading">				
				<!-- panel-heading row begin -->
				<div class="row">	

					<!-- col-xs-3 begin -->
					<div class="col-xs-3">						
						<i class="fa fa-tags fa-5x"></i>
					</div>
					<!-- col-xs-3 finish -->

					<!-- col-xs-9 text-right begin -->
					<div class="col-xs-9 text-right">
						<div class="huge"> <?php echo $count_p_categories; ?> </div>
						
						<div>Product Categories</div>
						
					</div>
					<!-- col-xs-9 text-right finish -->

				</div>
				<!-- panel-heading row finish -->
			</div>
			<!-- panel-heading finish -->

			<!-- a href begin -->
			<a href="index.php?view_p_cats">
				<!-- panel-footer begin -->
				<div class="panel-footer">
					
					<!-- pull-left begin -->
					<span class="pull-left"> View Details </span>
					<!-- pull-left finish -->

					<!-- pull-right begin -->
					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
					<!-- pull-right finish -->

					<div class="clearfix"></div>

				</div>
				<!-- panel-footer finish -->
			</a>
			<!-- a href finish -->

		</div>
		<!-- panel panel-orange finish -->
	</div>
	<!-- col-lg-3 col-md-6 finish -->

	<!-- col-lg-3 col-md-6 begin -->
	<div class="col-lg-3 col-md-6">		
		<!-- panel panel-red begin -->
		<div class="panel panel-red">			
			<!-- panel-heading begin -->
			<div class="panel-heading">				
				<!-- panel-heading row begin -->
				<div class="row">	

					<!-- col-xs-3 begin -->
					<div class="col-xs-3">						
						<i class="fa fa-shopping-cart fa-5x"></i>
					</div>
					<!-- col-xs-3 finish -->

					<!-- col-xs-9 text-right begin -->
					<div class="col-xs-9 text-right">
						<div class="huge"> <?php echo $count_pending_orders; ?> </div>
						
						<div>Orders</div>
						
					</div>
					<!-- col-xs-9 text-right finish -->

				</div>
				<!-- panel-heading row finish -->
			</div>
			<!-- panel-heading finish -->

			<!-- a href begin -->
			<a href="index.php?view_orders">
				<!-- panel-footer begin -->
				<div class="panel-footer">
					
					<!-- pull-left begin -->
					<span class="pull-left"> View Details </span>
					<!-- pull-left finish -->

					<!-- pull-right begin -->
					<span class="pull-right"> <i class="fa fa-arrow-circle-right"></i> </span>
					<!-- pull-right finish -->

					<div class="clearfix"></div>

				</div>
				<!-- panel-footer finish -->
			</a>
			<!-- a href finish -->

		</div>
		<!-- panel panel-red finish -->
	</div>
	<!-- col-lg-3 col-md-6 finish -->
</div>
<!-- main-content row finish -->

<!-- panels row begin -->
<div class="row">
	<!-- col-lg-8 begin -->
	<div class="col-lg-8">
		
		<!-- panel panel-primary begin -->
		<div class="panel panel-primary">
			
			<!-- panel-heading begin -->
			<div class="panel-heading">
				<!-- panel-title begin -->
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> New Orders
				</h3>
				<!-- panel-title finish -->
			</div>
			<!-- panel-heading finish -->

			<!-- panel-body begin -->
			<div class="panel-body">				
				<!-- table-responsive begin -->
				<div class="table-responsive">
						
					<!-- table table-hover table-striped table-bordered begin -->
					<table class="table table-hover table-striped table-bordered">						
						<!-- thead begin -->
						<thead>
							<tr>
								<th> Order No: </th>
								<th> Customer Email: </th>
								<th> Invoice No: </th>
								<th> Product ID: </th>
								<th> Product Qty: </th>
								<th> Product Size: </th>
								<th> Status: </th>
							</tr>
						</thead>
						<!-- thead finish -->
						
						<!-- tbody begin -->
						<tbody>

							<?php

								$i=0;

								$get_orders = "SELECT * FROM pending_orders ORDER BY 1 DESC LIMIT 0,5";	

								$run_orders = mysqli_query($con,$get_orders);

								while ($row_orders=mysqli_fetch_array($run_orders)) {
									
									$order_id = $row_orders['order_id'];

									$c_id = $row_orders['customer_id'];

									$invoice_no = $row_orders['invoice_no'];

									$product_id = $row_orders['product_id'];

									$qty = $row_orders['qty'];

									$size = $row_orders['size'];

									$order_status = $row_orders['order_status'];

									$i++;

								

							?>

							<tr>
								
								<td> <?php echo $order_id; ?> </td>
								<td> 
									
									<?php

										$get_customer = "SELECT * FROM customers WHERE customer_id='$c_id'";

										$run_customer = mysqli_query($con,$get_customer);

										$row_customer = mysqli_fetch_array($run_customer);

										$customer_email = $row_customer['customer_email'];

										echo $customer_email;

									?>

								</td>
								<td> <?php echo $invoice_no; ?> </td>
								<td> <?php echo $product_id; ?> </td>
								<td> <?php echo $qty; ?> </td>
								<td> <?php echo $size; ?> </td>
								<td> 

									<?php

										if ($order_status=='Pending') {
											
											echo $order_status='Pending';

										}else{

											echo $order_status='Complete';

										}

									?>

								 </td>

							</tr>
							
							<?php } ?>

						</tbody>
						<!-- tbody finish -->

					</table>
					<!-- table table-hover table-striped table-bordered finish -->

				</div>
				<!-- table-responsive finish -->

				<!-- text-right begin -->
				<div class="text-right">
					<a href="index.php?view_orders">
						
						View All Orders <i class="fa fa-arrow-circle-right"></i>

					</a>
				</div>
				<!-- text-right finish -->

			</div>
			<!-- panel-body finish -->

		</div>
		<!-- panel panel-primary finish -->

	</div>
	<!-- col-lg-8 finish -->

	<!-- col-lg-4 begin -->
	<div class="col-lg-4">
		
		<!-- panel begin -->
		<div class="panel">
			<!-- panel-body begin -->
			<div class="panel-body">
				
				<!-- mb-md thumb-info begin -->
				<div class="mb-md thumb-info">
					
					<img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" 
					class="rounded img-responsive" height="200">

					<!-- thumb-info-title begin -->
					<div class="thumb-info-title">
						
						<span class="thumb-info-inner"><?php echo $admin_name; ?></span>
						<span class="thumb-info-type"><?php echo $admin_job; ?></span>

					</div>
					<!-- thumb-info-title finish -->

				</div>
				<!-- mb-md thumb-info finish -->

				<!-- mb-md begin -->
				<div class="mb-md">
					<!-- widget-content-expanded begin -->
					<div class="widget-content-expanded">
						<i class="fa fa-envelope"></i> <span>Email:</span> <?php echo $admin_email; ?> <br>
						<i class="fa fa-flag"></i>		<span>Country:</span> <?php echo $admin_country; ?> <br>
						<i class="fa fa-phone"></i>	<span>Contact:</span> <?php echo $admin_contact; ?>
					</div>
					<!-- widget-content-expanded finish -->

					<hr class="dotted short">

					<h5 class="text-muted">About Me</h5>

					<p>
						<?php echo $admin_about; ?>
					</p>

				</div>
				<!-- mb-md finish -->

			</div>
			<!-- panel-body finish -->
		</div>
		<!-- panel finish -->

	</div>
	<!-- col-lg-4 finish -->

</div>
<!-- panels row finish -->

<?php } ?>