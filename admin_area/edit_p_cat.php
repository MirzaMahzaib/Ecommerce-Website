<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>

<?php

	if (isset($_GET['edit_p_cat'])) {
		
		$edit_p_cat_id = $_GET['edit_p_cat'];

		$get_p_cats = "SELECT * FROM product_categories WHERE p_cat_id='$edit_p_cat_id'";

		$run_get_p_cats = mysqli_query($con,$get_p_cats);

		$row_p_cats = mysqli_fetch_array($run_get_p_cats);

		$p_cat_id = $row_p_cats['p_cat_id'];

		$p_cat_title = $row_p_cats['p_cat_title'];

		$p_cat_top = $row_p_cats['p_cat_top'];

		$p_cat_img = $row_p_cats['p_cat_image'];

	}

?>

<!-- breadcrumb row begin -->
<div class="row insert_product_category_mt">
	<!-- col-lg-12 begin -->
	<div class="col-lg-12">
		<!-- breadcrumb begin -->
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Product Category
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
					<i class="fa fa-money fa-fw"></i> Edit Product Category
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
							
							Product Category Title

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input class="form-control" name="p_cat_title" type="text"
							value="<?php echo $p_cat_title; ?>">

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
							
							<input name="p_cat_top" type="radio" value="yes"
							<?php if($p_cat_top=="yes"){echo "checked";} ?> >
							<label>Yes</label>
							
							<input name="p_cat_top" type="radio" value="no"
							<?php if($p_cat_top=="no"){echo "checked";} ?> >
							<label>No</label>

						</div>
						<!-- col-mg-6 finish -->

					</div>
					<!-- form-group finish -->

					<!-- form-group begin -->
					<div class="form-group">
						
						<!-- control-label begin -->
						<label class="control-label col-md-3">
							
							Category Image

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input type="file" name="p_cat_img" class="form-control">
							<br>
							<img src="others_images/<?php echo $p_cat_img; ?>" width="100px">

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
							
							<input class="form-control btn btn-primary" value="Add Product Category" name="update" 
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
	
	$p_cat_title = $_POST['p_cat_title'];
	
	$p_cat_top = $_POST['p_cat_top'];

	if (is_uploaded_file($_FILES['p_cat_img']['tmp_name'])) {
		
		$p_cat_img = $_FILES['p_cat_img']['name'];

		$p_cat_img_tmp = $_FILES['p_cat_img']['tmp_name'];

		move_uploaded_file($p_cat_img_tmp,"others_images/$p_cat_img");

		$update_p_cats = "UPDATE product_categories SET p_cat_title='$p_cat_title',p_cat_top='$p_cat_top'
		,p_cat_image='$p_cat_img' WHERE p_cat_id='$p_cat_id'";

		$run_p_cat = mysqli_query($con,$update_p_cats);

		if ($run_p_cat) {
			
			echo "<script>alert('Your Product Category Has Been Updated Successfully')</script>";

			echo "<script>window.open('index.php?view_p_cats','_self')</script>";

		}

	}else{

		$update_p_cats = "UPDATE product_categories SET p_cat_title='$p_cat_title',p_cat_top='$p_cat_top'
		WHERE p_cat_id='$p_cat_id'";

		$run_p_cat = mysqli_query($con,$update_p_cats);

		if ($run_p_cat) {
			
			echo "<script>alert('Your Product Category Has Been Updated Successfully')</script>";

			echo "<script>window.open('index.php?view_p_cats','_self')</script>";

		}

	}

}

?>


<?php } ?>