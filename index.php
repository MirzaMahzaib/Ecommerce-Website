<?php
$active='Home';
include("includes/header.php");

?>

<!--container Begin-->
<div class="container" id="slider">

	<!--col-md-12 begin-->
	<div class="col-md-12">

		<!--carousel slide begin-->
		<div class="carousel slide" id="myCarousel" data-ride="carousel">

			<!--carousel-indicators begin-->
			<ol class="carousel-indicators">

				<li class="active" data-target="#myCarousel" data-slide-to="0"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>

			</ol>
			<!--carousel-indicators finish-->

			<!--carousel-inner begin-->
			<div class="carousel-inner">

				<?php

						$get_slides = "select * from slider LIMIT 0,1";

						$run_slides = mysqli_query($con,$get_slides);

						while($row_slides=mysqli_fetch_array($run_slides)){

							$slide_name = $row_slides['slide_name'];
							$slide_image = $row_slides['slide_image'];
							$slide_url = $row_slides['slide_url'];

							echo "
								<div class='item active'>

									<a href='$slide_url'>

										<img src='admin_area/slides_images/$slide_image' width='100%'>

									</a>
								
								</div>

							";

						}

						$get_slides = "select * from slider LIMIT 1,3";

						$run_slides = mysqli_query($con,$get_slides);

						while($row_slides=mysqli_fetch_array($run_slides)){

							$slide_name = $row_slides['slide_name'];
							$slide_image = $row_slides['slide_image'];
							$slide_url = $row_slides['slide_url'];

							echo "
								
								<div class='item'>

									<a href='$slide_url'>

										<img src='admin_area/slides_images/$slide_image' width='100%'>

									</a>
								
								</div>

							";

						}

					?>

			</div>
			<!--carousel-inner finish-->

			<!--left carousel-control begin-->
			<a href="#myCarousel" class="left carousel-control" data-slide="prev">

				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>

			</a>
			<!--left carousel-control finish-->

			<!--right carousel-control begin-->
			<a href="#myCarousel" class="right carousel-control" data-slide="next">

				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>

			</a>
			<!--right carousel-control finish-->

		</div>
		<!--carousel slide finish-->

	</div>
	<!--col-md-12 finish-->

</div>
<!--container finish-->

<!--advantages begin-->
<div id="advantages">

	<!--container begin-->
	<div class="container">

		<!--same-height-row begin-->
		<div class="same-height-row">

			<?php

					$get_boxes = "SELECT * FROM boxes_section";

					$run_boxes = mysqli_query($con,$get_boxes);

					while ($row_boxes=mysqli_fetch_array($run_boxes)) {
						
						$box_id = $row_boxes['box_id'];

						$box_title = $row_boxes['box_title'];

						$box_desc = $row_boxes['box_desc'];

					

				?>

			<!--col-sm-4 begin-->
			<div class="col-sm-4">

				<!--box same-height begin-->
				<div class="box same-height">

					<!--icon begin-->
					<div class="icon">

						<i class="fa fa-heart"></i>

					</div>
					<!--icon finish-->

					<h3><a href="#"><?php echo $box_title; ?></a></h3>

					<p><?php echo $box_desc; ?></p>

				</div>
				<!--box same-height finish-->

			</div>
			<!--col-sm-4 finish-->

			<?php } ?>

		</div>
		<!--same-height-row finish-->

	</div>
	<!--container finish-->

</div>
<!--advantages finish-->

<!--hot begin-->
<div id="hot">
	<!--box begin-->
	<div class="box">

		<!--container begin-->
		<div class="container">

			<!--col-md-12 begin-->
			<div class="col-md-12">

				<h2>Our Latest Products</h2>

			</div>
			<!--col-md-12 finish-->

		</div>
		<!--container finish-->

	</div>
	<!--box finish-->
</div>
<!--hot finish-->

<!--container begin-->
<div class="container" id="content">

	<!--row begin-->
	<div class="row">

		<?php getPro(); ?>

	</div>
	<!--row finish-->

</div>
<!--container finish-->
<!--5th Lecture Finish-->

<!--6th Lecture Begin-->
<?php
include("includes/footer.php");
?>
<!--6th Lecture Finish-->







<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>
</body>

</html>