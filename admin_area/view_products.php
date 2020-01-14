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
				<i class="fa fa-dashboard"></i> Dashboard / View Products
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
					
					<i class="fa fa-tags"></i> View Products

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
								<th>Product ID</th>
								<th>Product Title</th>
								<th>Product Image</th>
								<th>Product Price</th>
								<th>Product Sold</th>
								<th>Product keywords</th>
								<th>Product Date</th>
								<th>Product Edit</th>
								<th>Product Delete</th>
							</tr>
						</thead>
						<!-- thead finish -->

						<!-- tbody begin -->
						<tbody>
							
							<?php 

								$i=0;

								$get_pro = "SELECT * FROM products";

								$run_pro = mysqli_query($con,$get_pro);

								while ($row_pro=mysqli_fetch_array($run_pro)) {
									
									$pro_id = $row_pro['product_id'];

									$pro_title = $row_pro['product_title'];

									$pro_img1 = $row_pro['product_img1'];

									$pro_price = $row_pro['product_price'];

									$pro_keywords = $row_pro['product_keywords'];

									$pro_date = $row_pro['date'];

									$i++;

								

							?>

							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $pro_title; ?></td>
								<td>
									<img src="product_images/<?php echo $pro_img1; ?>" width="50px">
								</td>
								<td>$<?php echo $pro_price; ?></td>
								<td>
									<?php

										$get_sold = "SELECT * FROM pending_orders WHERE product_id='$pro_id'";

										$run_sold = mysqli_query($con,$get_sold);

										$count = mysqli_num_rows($run_sold);

										echo $count;

									?>
								</td>
								<td><?php echo $pro_keywords; ?></td>
								<td><?php echo $pro_date; ?></td>
								<td>
									<a href="index.php?edit_product=<?php echo $pro_id; ?>" 
									class="btn btn-success btn-sm">
										<i class="fa fa-pencil"></i> Edit
									</a>
								</td>
								<td>
									<a href="index.php?delete_product=<?php echo $pro_id; ?>"
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