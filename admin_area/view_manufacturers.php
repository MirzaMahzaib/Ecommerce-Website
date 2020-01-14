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
				<i class="fa fa-dashboard"></i> Dashboard / View Manufacturers
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
					
					<i class="fa fa-star"></i> View Manufacturers

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
								<th>Manufacturer Title</th>
								<th>Top Manufacturer</th>
								<th>Manufacturer Image</th>
								<th>Manufacturer Edit</th>
								<th>Manufacturer Delete</th>
							</tr>
						</thead>
						<!-- thead finish -->

						<!-- tbody begin -->
						<tbody>
							
							<?php 

								$i=0;

								$get_manufacturer = "SELECT * FROM manufacturers";

								$run_manufacturer = mysqli_query($con,$get_manufacturer);

								while ($row_manufacturer=mysqli_fetch_array($run_manufacturer)) {
									
									$manufacturer_id = $row_manufacturer['manufacturer_id'];

									$manufacturer_title = $row_manufacturer['manufacturer_title'];

									$manufacturer_top = $row_manufacturer['manufacturer_top'];

									$manufacturer_image = $row_manufacturer['manufacturer_image'];

									$i++;

								

							?>

							<tr>
								<td><?php echo $manufacturer_title; ?></td>
								<td><?php echo $manufacturer_top; ?></td>
								<td>
									<img src="others_images/<?php echo $manufacturer_image; ?>" width="60px">
								</td>
								<td>
									<a href="index.php?edit_manufacturer=<?php echo $manufacturer_id; ?>" 
									class="btn btn-success btn-sm">
										<i class="fa fa-pencil"></i> Edit
									</a>
								</td>
								<td>
									<a href="index.php?delete_manufacturer=<?php echo $manufacturer_id; ?>"
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