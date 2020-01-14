<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>

<!-- breadcrumb row begin -->
<div class="row insert_product_category_mt">
	<!-- col-lg-12 begin -->
	<div class="col-lg-12">
		<!-- breadcrumb begin -->
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / View Categories
			</li>
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
					
					<i class="fa fa-tags"></i> View Categories

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
								<th>Category ID</th>
								<th>Category Title</th>
								<th>Top Category</th>
								<th>Edit Category</th>
								<th>Delete Category</th>
							</tr>
						</thead>
						<!-- thead finish -->

						<!-- tbody begin -->
						<tbody>
							
							<?php 

								$i=0;

								$get_cats = "SELECT * FROM categories";

								$run_cats = mysqli_query($con,$get_cats);

								while ($row_cats=mysqli_fetch_array($run_cats)) {
									
									$cat_id = $row_cats['cat_id'];

									$cat_title = $row_cats['cat_title'];

									$cat_top = $row_cats['cat_top'];

									$i++;

								

							?>

							<tr>
								<td><?php echo $cat_id; ?></td>
								<td><?php echo $cat_title; ?></td>
								<td><?php echo $cat_top; ?></td>
								<td>
									<a href="index.php?edit_cat=<?php echo $cat_id; ?>"
									class="btn btn-success btn-sm">
										<i class="fa fa-pencil"></i> Edit Product Category
									</a>
								</td>
								<td>
									<a href="index.php?delete_cat=<?php echo $cat_id; ?>"
									class="btn btn-danger btn-sm">
										<i class="fa fa-trash-o"></i> Delete Product Category
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