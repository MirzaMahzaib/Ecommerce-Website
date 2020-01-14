<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>

<?php

	if (isset($_GET['edit_cat'])) {
		
		$edit_cat_id = $_GET['edit_cat'];

		$get_cats = "SELECT * FROM categories WHERE cat_id='$edit_cat_id'";

		$run_get_cats = mysqli_query($con,$get_cats);

		$row_cats = mysqli_fetch_array($run_get_cats);

		$cat_id = $row_cats['cat_id'];

		$cat_title = $row_cats['cat_title'];

		$cat_top = $row_cats['cat_top'];

		$cat_img = $row_cats['cat_image'];

	}

?>

<!-- breadcrumb row begin -->
<div class="row insert_product_category_mt">
	<!-- col-lg-12 begin -->
	<div class="col-lg-12">
		<!-- breadcrumb begin -->
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Category
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
					<i class="fa fa-money fa-fw"></i> Edit Category
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
							
							Category Title

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input class="form-control" name="cat_title" type="text" 
							value="<?php echo $cat_title; ?>">

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
							
							<input name="cat_top" type="radio" value="yes"
							<?php if($cat_top=="yes"){echo "checked";} ?> >
							<label>Yes</label>
							
							<input name="cat_top" type="radio" value="no"
							<?php if($cat_top=="no"){echo "checked";} ?> >
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
							
							<input type="file" name="cat_img" class="form-control">
							<br>
							<img src="others_images/<?php echo $cat_img; ?>" width="100px">

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
	
	$cat_title = $_POST['cat_title'];
	
	$cat_top = $_POST['cat_top'];

	if (is_uploaded_file($_FILES['cat_img']['tmp_name'])) {
		
		$cat_img = $_FILES['cat_img']['name'];

		$cat_img_tmp = $_FILES['cat_img']['tmp_name'];

		move_uploaded_file($cat_img_tmp,"others_images/$cat_img");

		$update_cats = "UPDATE categories SET cat_title='$cat_title',cat_top='$cat_top',cat_img='$cat_img' 
		WHERE cat_id='$cat_id'";

		$run_cat = mysqli_query($con,$update_cats);

		if ($run_cat) {
			
			echo "<script>alert('Your Category Has Been Updated Successfully')</script>";

			echo "<script>window.open('index.php?view_cats','_self')</script>";

		}

	}else{

			$update_cats = "UPDATE categories SET cat_title='$cat_title',cat_top='$cat_top' WHERE cat_id='$cat_id'";

			$run_cat = mysqli_query($con,$update_cats);

			if ($run_cat) {
			
				echo "<script>alert('Your Category Has Been Updated Successfully')</script>";

				echo "<script>window.open('index.php?view_cats','_self')</script>";

		}

	}
	
	

}

?>


<?php } ?>