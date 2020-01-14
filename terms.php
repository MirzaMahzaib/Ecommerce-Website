<?php

	$active='Shop';
	include("includes/header.php");

?>

<!-- content begin -->
<div id="content">
	<!-- container begin -->
	<div class="container">
		<!-- col-md-12 begin -->
		<div class="col-md-12">

			<!-- breadcrumb begin -->
			<ul class="breadcrumb">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					Terms & Conditions | Refund
				</li>
			</ul>
			<!-- breadcrumb finish -->
			
		</div>
		<!-- col-md-12 finish -->

		<!-- col-md-3 begin -->
		<div class="col-md-3">
			
			<!-- box begin -->
			<div class="box">
				<!-- nav nav-pills nav-stacked begin -->
				<ul class="nav nav-pills nav-stacked">
					
					<?php

						$get_terms = "SELECT * FROM terms LIMIT 0,1";

						$run_terms = mysqli_query($con,$get_terms);

						while ($row_terms=mysqli_fetch_array($run_terms)) {
							
							$term_title = $row_terms['term_title'];

							$term_link = $row_terms['term_link'];

					?>

					<li class="active">
						
						<a href="#<?php echo $term_link; ?>" data-toggle="pill">
							<?php echo $term_title; ?>
						</a>

					</li>

					<?php } ?>

					<?php 

						$count_terms = "SELECT * FROM terms";

						$run_count_terms = mysqli_query($con,$count_terms);

						$count = mysqli_num_rows($run_count_terms);

						$get_terms = "SELECT * FROM terms LIMIT 1,$count";

						$run_terms = mysqli_query($con,$get_terms);

						while ($row_terms=mysqli_fetch_array($run_terms)) {
							
							$term_title = $row_terms['term_title'];

							$term_link = $row_terms['term_link'];

					?>

					<li>
						
						<a href="#<?php echo $term_link; ?>" data-toggle="pill">
							<?php echo $term_title; ?>
						</a>

					</li>

					<?php } ?>

				</ul>
				<!-- nav nav-pills nav-stacked finish -->
			</div>
			<!-- box finish -->

		</div>
		<!-- col-md-3 finish -->

		<!-- col-md-9 begin -->
		<div class="col-md-9">
			<!-- box begin -->
			<div class="box">
				<!-- tab-content begin -->
				<div class="tab-content">
					
					<?php

						$get_terms = "SELECT * FROM terms LIMIT 0,1";

						$run_get_terms = mysqli_query($con,$get_terms);

						while ($row_terms=mysqli_fetch_array($run_get_terms)) {
							
							$term_title = $row_terms['term_title'];

							$term_desc = $row_terms['term_desc'];

							$term_link = $row_terms['term_link'];

					?>
	
					<!-- tab-pane fade in active begin -->
					<div id="<?php echo $term_link; ?>" class="tab-pane fade in active">

						<h1 class="tabTitle">
							<?php echo $term_title; ?>
						</h1>
						<p class="tabDesc">
							<?php echo $term_desc; ?>
						</p>
						
					</div>
					<!-- tab-pane fade in active begin -->

					<?php } ?>

					<?php 

						$count_terms = "SELECT * FROM terms";

						$run_count_terms = mysqli_query($con,$count_terms);

						$count = mysqli_num_rows($run_count_terms);

						$get_terms = "SELECT * FROM terms LIMIT 1,$count";

						$run_terms = mysqli_query($con,$get_terms);

						while ($row_terms=mysqli_fetch_array($run_terms)) {
							
							$term_title = $row_terms['term_title'];

							$term_desc = $row_terms['term_desc'];

							$term_link = $row_terms['term_link'];

					?>

					<!-- tab-pane fade in active begin -->
					<div id="<?php echo $term_link; ?>" class="tab-pane fade in">

						<h1 class="tabTitle">
							<?php echo $term_title; ?>
						</h1>
						<p class="tabDesc">
							<?php echo $term_desc; ?>
						</p>
						
					</div>
					<!-- tab-pane fade in active begin -->

					<?php } ?>

				</div>
				<!-- tab-content finish -->
			</div>
			<!-- box finish -->
		</div>	
		<!-- col-md-9 finish -->

	</div>
	<!-- container finish -->
</div>
<!-- content finish -->

<?php 

	include("includes/footer.php");

?>

	<script src="js/jquery-331.min.js"></script>
	<script src="js/bootstrap-337.min.js"></script>

</body>
</html>
