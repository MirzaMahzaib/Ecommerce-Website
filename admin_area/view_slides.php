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
				<i class="fa fa-dashboard"></i> Dashboard / View Slides
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
					
					<i class="fa fa-tags"></i> View Slides

				</h3>
				<!-- panel-title finish -->
			</div>
			<!-- panel-heading finish -->
			
			<!-- panel-body begin -->
			<div class="panel-body">
				
				<?php

					$get_slides = "SELECT * FROM slider";

					$run_slides = mysqli_query($con,$get_slides);

					while ($row_slides=mysqli_fetch_array($run_slides)) {
						
						$slide_id = $row_slides['slide_id'];

						$slide_name = $row_slides['slide_name'];

						$slide_image = $row_slides['slide_image'];

				?>
					
				<!-- col-lg-3 col-md-3 begin -->
				<div class="col-lg-3 col-md-3">
					
					<!-- panel panel_primary begin -->
					<div class="panel panel-primary">
						<!-- panel-heading begin -->
						<div class="panel-heading">
							<!-- panel-title begin -->
							<h3 class="panel-title">
								
								<?php echo $slide_name; ?>

							</h3>
							<!-- panel-title finish -->
						</div>
						<!-- panel-heading finish -->

						<!-- panel-body begin -->
						<div class="panel-body">
							
							<img src="slides_images/<?php echo $slide_image; ?>" alt="<?php echo $slide_image; ?>"
							class="img-responsive">

						</div>
						<!-- panel-body finish -->

						<!-- panel-footer begin -->
						<div class="panel-footer">
							<center>
								
								<a href="index.php?edit_slide=<?php echo $slide_id; ?>"
								class="pull-left btn btn-success">
									<i class="fa fa-pencil"></i> Edit
								</a>

								<a href="index.php?delete_slide=<?php echo $slide_id; ?>"
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