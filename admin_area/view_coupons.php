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
				<i class="fa fa-dashboard"></i> Dashboard / View Coupons
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
					
					<i class="fa fa-tags"></i> View Coupons

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
								<th>Coupon ID</th>
								<th>Coupon Title</th>
								<th>Coupon Price</th>
								<th>Coupon Code</th>
								<th>Coupon Limit</th>
								<th>Coupon Used</th>
								<th>Coupon Edit</th>
								<th>Coupon Delete</th>
							</tr>
						</thead>
						<!-- thead finish -->

						<!-- tbody begin -->
						<tbody>
							
							<?php 

								$i=0;

								$get_coupons = "SELECT * FROM coupons";

								$run_coupons = mysqli_query($con,$get_coupons);

								while ($row_coupons=mysqli_fetch_array($run_coupons)) {
									
									$coupon_id = $row_coupons['coupon_id'];

									$coupon_title = $row_coupons['coupon_title'];

									$coupon_price = $row_coupons['coupon_price'];

									$coupon_code = $row_coupons['coupon_code'];

									$coupon_limit = $row_coupons['coupon_limit'];

									$coupon_used = $row_coupons['coupon_used'];

									$i++;

								

							?>

							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $coupon_title; ?></td>
								<td>$<?php echo $coupon_price; ?></td>
								<td><?php echo $coupon_code; ?></td>
								<td><?php echo $coupon_limit; ?></td>
								<td><?php echo $coupon_used; ?></td>
								<td class="text-center">
									<a href="index.php?edit_coupon=<?php echo $coupon_id; ?>" 
									class="btn btn-success btn-sm">
										<i class="fa fa-pencil"></i> Edit
									</a>
								</td>
								<td class="text-center">
									<a href="index.php?delete_coupon=<?php echo $coupon_id; ?>"
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