<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>

<?php

	if (isset($_GET['edit_slide'])) {
		
		$edit_slide_id = $_GET['edit_slide'];

		$get_slides = "SELECT * FROM slider WHERE slide_id='$edit_slide_id'";

		$run_get_slides = mysqli_query($con,$get_slides);

		$row_slides = mysqli_fetch_array($run_get_slides);

		$slide_id = $row_slides['slide_id'];

		$slide_name = $row_slides['slide_name'];

		$slide_url = $row_slides['slide_url'];

		$slide_image = $row_slides['slide_image'];

	}

?>

<!-- breadcrumb row begin -->
<div class="row insert_product_category_mt">
	<!-- col-lg-12 begin -->
	<div class="col-lg-12">
		<!-- breadcrumb begin -->
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Slide
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
		
		<!-- panel begin -->
		<div class="panel panel-default">
			<!-- panel-heading begin -->
			<div class="panel-heading">
				<!-- panel-title begin -->
				<h3 class="panel-title">
					<i class="fa fa-money fa-fw"></i> Edit Slide
				</h3>
				<!-- panel-title finish -->
			</div>
			<!-- panel-heading finish -->

			<!-- panel-body begin -->
			<div class="panel-body">
				<!-- form-horizontal begin -->
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
					<!-- form-group begin -->
					<div class="form-group">
						
						<!-- control-label begin -->
						<label class="control-label col-md-3">
							
							Slide Name

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input class="form-control" name="slide_name" type="text" 
							value="<?php echo $slide_name; ?>">

						</div>
						<!-- col-mg-6 finish -->

					</div>
					<!-- form-group finish -->
					<!-- form-group begin -->
					<div class="form-group">
						
						<!-- control-label begin -->
						<label class="control-label col-md-3">
							
							Slide url

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input class="form-control" name="slide_url" type="text" 
							value="<?php echo $slide_url; ?>">

						</div>
						<!-- col-mg-6 finish -->

					</div>
					<!-- form-group finish -->

					<!-- form-group begin -->
					<div class="form-group">
						
						<!-- control-label begin -->
						<label class="control-label col-md-3">
							
							Slide Image

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input type="file" name="slide_img" class="form-control">
							<br>
							<img src="slides_images/<?php echo $slide_image; ?>" class="img-responsive">

						</div>
						<!-- col-mg-6 finish -->

					</div>
					<!-- form-group finish -->

					<!-- form-group begin -->
					<div class="form-group">
						
						<!-- control-label begin -->
						<label class="control-label col-md-3"></label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input class="form-control btn btn-primary" value="Update Slide" name="update" 
							type="submit"></input>

						</div>
						<!-- col-mg-6 finish -->

					</div>
					<!-- form-group finish -->
				</form>
				<!-- form-horizontal finish -->
			</div>
			<!-- panel-body finish -->

		</div>
		<!-- panel finish -->
	
	</div>
	<!-- col-lg-12 finish -->
</div>
<!-- panel row finish -->

<?php

if (isset($_POST['update'])) {
	
	$slide_name = $_POST['slide_name'];
	
	$slide_url = $_POST['slide_url'];

	$slide_img = $_FILES['slide_img']['name'];

	$slide_img_tmp = $_FILES['slide_img']['tmp_name'];

	move_uploaded_file($slide_img_tmp,"slides_images/$slide_img");

	$update_slide = "UPDATE slider SET slide_name='$slide_name',slide_image='$slide_img',slide_url='$slide_url' WHERE 
	slide_id='$slide_id'";

	$run_update_slide = mysqli_query($con,$update_slide);

	if ($run_update_slide) {
		
		echo "<script>alert('Your Slide Has Been Updated Successfully')</script>";

		echo "<script>window.open('index.php?view_slides','_self')</script>";

	}

}

?>

<?php } ?>