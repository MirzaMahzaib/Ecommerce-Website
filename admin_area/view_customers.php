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
								<th>No</th>
								<th>Name</th>
								<th>Image</th>
								<th>Email</th>
								<th>Country</th>
								<th>City</th>
								<th>Address</th>
								<th>Contact</th>
								<th>Delete</th>
							</tr>
						</thead>
						<!-- thead finish -->

						<!-- tbody begin -->
						<tbody>
							
							<?php 

								$i=0;

								$get_customers = "SELECT * FROM customers";

								$run_customers = mysqli_query($con,$get_customers);

								while ($row_customers=mysqli_fetch_array($run_customers)) {
									
									$c_id = $row_customers['customer_id'];

									$c_name = $row_customers['customer_name'];

									$c_img = $row_customers['customer_image'];

									$c_email = $row_customers['customer_email'];

									$c_country = $row_customers['customer_country'];

									$c_city = $row_customers['customer_city'];

									$c_address = $row_customers['customer_address'];

									$c_contact = $row_customers['customer_contact'];

									$i++;

								

							?>

							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $c_name; ?></td>
								<td>
									<img src="../customer/customer_images/<?php echo $c_img; ?>" 
									width="50px">
								</td>
								<td>d<?php echo $c_email; ?></td>
								<td><?php echo $c_country; ?></td>
								<td><?php echo $c_city; ?></td>
								<td><?php echo $c_address; ?></td>
								<td><?php echo $c_contact; ?></td>
								<td>
									<a href="index.php?delete_customer=<?php echo $c_id; ?>"
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