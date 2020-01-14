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
				<i class="fa fa-dashboard"></i> Dashboard / Insert Product Category
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
					<i class="fa fa-money fa-fw"></i> Insert Product Category
				</h3>
				<!-- panel-title finish -->
			</div>
			<!-- panel-heading finish -->

			<!-- panel-body begin -->
			<div class="panel-body">
				<!-- form-horizontal begin -->
				<!-- form-horizontal begin -->
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
					<!-- form-group begin -->
					<div class="form-group">
						
						<!-- control-label begin -->
						<label class="control-label col-md-3">
							
							Product Category Title

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input class="form-control" name="p_cat_title" type="text"></input>

						</div>
						<!-- col-mg-6 finish -->

					</div>
					<!-- form-group finish -->
					
					<!-- form-group begin -->
					<div class="form-group">
						
						<!-- control-label begin -->
						<label class="control-label col-md-3">
							
							Choose As Top Manufacturer

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input name="p_cat_top" type="radio" value="yes"></input>
							<label>Yes</label>
							
							<input name="p_cat_top" type="radio" value="no"></input>
							<label>No</label>

						</div>
						<!-- col-mg-6 finish -->

					</div>
					<!-- form-group finish -->

					<!-- form-group begin -->
					<div class="form-group">
						
						<!-- control-label begin -->
						<label class="control-label col-md-3">
							
							Product Category Image

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input type="file" name="p_cat_img" class="form-control">

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
							
							<input class="form-control btn btn-primary" value="Add Product Category" name="submit" 
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

if (isset($_POST['submit'])) {
	
	$p_cat_title = $_POST['p_cat_title'];
	
	$p_cat_top = $_POST['p_cat_top'];
	
	$p_cat_img = $_FILES['p_cat_img']['name'];

	$p_cat_img_tmp = $_FILES['p_cat_img']['name'];

	move_uploaded_file($p_cat_img_tmp, "others_images/$p_cat_img");

	$insert_p_cat = "INSERT INTO product_categories (p_cat_title,p_cat_top,p_cat_image) 
	VALUES ('$p_cat_title','$p_cat_top','$p_cat_img')";

	$run_insert_p_cat = mysqli_query($con,$insert_p_cat);

	if ($run_insert_p_cat) {
		
		echo "<script>alert('Your New Product Category Has Been Added Successfully')</script>";

		echo "<script>window.open('index.php?view_p_cats','_self')</script>";

	}

}

?>


<?php } ?>