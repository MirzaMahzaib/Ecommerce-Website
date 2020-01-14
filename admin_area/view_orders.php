<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>

<!-- breadcrumb row begin -->
<div class="row	view_products_mt">
	<!-- col-lg-12 begin -->
	<div class="col-lg-12">
		<!-- breadcrumb begin -->
		<ol class="breadcrumb">
			<!-- active begin -->
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / View Customers
			</li>
			<!-- active finish -->
		</ol>
		<!-- breadcrumb finish -->
	</div>
	<!-- col-lg-12 finish -->
</div>
<!-- breadcrumb row finish -->

<!-- panel row begin -->
<div class="row">
	<!-- col-lg-12 begin -->
	<div class="col-lg-12">
		
		<!-- panel panel-default begin -->
		<div class="panel panel-default">
			<!-- panel-heading begin -->
			<div class="panel-heading">
				<!-- panel-title begin -->
				<h3 class="panel-title">
					
					<i class="fa fa-tags"></i> View Customers

				</h3>
				<!-- panel-title finish -->
			</div>
			<!-- panel-heading finish -->
			
			<!-- panel-body begin -->
			<div class="panel-body">
				<!-- table-responsive begin -->
				<div class="table-responsive">
					<!-- table table-striped table-bordered table-hover begin -->
					<table class="table table-striped table-bordered table-hover">
						
						<!-- thead begin -->
						<thead>
							<tr>
								<th>Order No</th>
								<th>Customer Email</th>
								<th>Invoice No</th>
								<th>Product Name</th>
								<th>Product Qty</th>
								<th>Product Size</th>
								<th>Order Date</th>
								<th>Total Amount</th>
								<th>Status</th>
								<th>Delete</th>
							</tr>
						</thead>
						<!-- thead finish -->

						<!-- tbody begin -->
						<tbody>
							
							<?php 

								$i=0;

								$get_orders = "SELECT * FROM pending_orders";

								$run_orders = mysqli_query($con,$get_orders);

								while ($row_orders=mysqli_fetch_array($run_orders)) {
									
									$order_id = $row_orders['order_id'];

									$c_id = $row_orders['customer_id'];

									$invoice_no = $row_orders['invoice_no'];

									$product_id = $row_orders['product_id'];

									$qty = $row_orders['qty'];

									$size = $row_orders['size'];

									$order_status = $row_orders['order_status'];

									$get_products = "SELECT * FROM products WHERE product_id='$product_id'";

									$run_products = mysqli_query($con,$get_products);

									$row_products = mysqli_fetch_array($run_products);

									$product_title = $row_products['product_title'];

									$get_customer = "SELECT * FROM customers WHERE customer_id='$c_id'";

									$run_customer = mysqli_query($con,$get_customer);

									$row_customer = mysqli_fetch_array($run_customer);

									$customer_email = $row_customer['customer_email'];

									$get_c_order = "SELECT * FROM customer_orders WHERE order_id='$order_id'";

									$run_c_order = mysqli_query($con,$get_c_order);

									$row_c_order = mysqli_fetch_array($run_c_order);

									$order_date = $row_c_order['order_date'];

									$order_amount = $row_c_order['due_amount'];

									$i++;

								

							?>

							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $customer_email; ?></td>
								<td><?php echo $invoice_no; ?></td>
								<td>d<?php echo $product_title; ?></td>
								<td><?php echo $qty; ?></td>
								<td><?php echo $size; ?></td>
								<td><?php echo $order_date; ?></td>
								<td><?php echo $order_amount; ?></td>
								<td>

									<?php

										if ($order_status=='Pending') {
											
											echo $order_status='Pending';

										}else{

											echo $order_status='Complete';

										}

									?>

								</td>
								<td>
									<a href="index.php?delete_order=<?php echo $order_id; ?>"
									class="btn btn-danger btn-sm">
										<i class="fa fa-trash-o"></i> Delete
									</a>
								</td>
								
							</tr>

							<?php } ?>

						</tbody>
						<!-- tbody finish -->

					</table>
					<!-- table table-striped table-bordered table-hover finish -->
				</div>
				<!-- table-responsive finish -->
			</div>
			<!-- panel-body finish -->
		</div>
		<!-- panel panel-default finish -->
	
	</div>
	<!-- col-lg-12 finish -->
</div>
<!-- panel row finish -->


















<?php } ?>