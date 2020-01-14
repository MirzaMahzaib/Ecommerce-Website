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
				<i class="fa fa-dashboard"></i> Dashboard / View Boxes
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
					
					<i class="fa fa-tags"></i> View Boxes

				</h3>
				<!-- panel-title finish -->
			</div>
			<!-- panel-heading finish -->
			
			<!-- panel-body begin -->
			<div class="panel-body">
				
				<?php

					$get_boxes = "SELECT * FROM boxes_section";

					$run_boxes = mysqli_query($con,$get_boxes);

					while ($row_boxes=mysqli_fetch_array($run_boxes)) {
						
						$box_id = $row_boxes['box_id'];

						$box_title = $row_boxes['box_title'];

						$box_desc = $row_boxes['box_desc'];

				?>
					
				<!-- col-lg-3 col-md-3 begin -->
				<div class="col-lg-4 col-md-4">
					
					<!-- panel panel_primary begin -->
					<div class="panel panel-primary">
						<!-- panel-heading begin -->
						<div class="panel-heading">
							<!-- panel-title begin -->
							<h3 class="panel-title">
								
								<?php echo $box_title; ?>

							</h3>
							<!-- panel-title finish -->
						</div>
						<!-- panel-heading finish -->

						<!-- panel-body begin -->
						<div class="panel-body">
							
							<?php echo $box_desc; ?>

						</div>
						<!-- panel-body finish -->

						<!-- panel-footer begin -->
						<div class="panel-footer">
							<center>
								
								<a href="index.php?edit_box=<?php echo $box_id; ?>"
								class="pull-left btn btn-success">
									<i class="fa fa-pencil"></i> Edit
								</a>

								<a href="index.php?delete_box=<?php echo $box_id; ?>"
								class="pull-right btn btn-danger">
									<i class="fa fa-trash-o"></i> Delete
								</a>

								<div class="clearfix"></div>

							</center>
						</div>
						<!-- panel-footer finish -->

					</div>
					<!-- panel panel_primary finish -->
				
				</div>
				<!-- col-lg-3 col-md-3 finish -->

			<?php } ?>

			</div>
			<!-- panel-body finish -->
		</div>
		<!-- panel panel-default finish -->
	
	</div>
	<!-- col-lg-12 finish -->
</div>
<!-- panel row finish -->




<?php } ?>