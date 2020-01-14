<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

		if (isset($_GET['edit_manufacturer'])) {
			
			$manufacturer_edit_id = $_GET['edit_manufacturer'];

			$get_manufacturer = "SELECT * FROM manufacturers WHERE manufacturer_id='$manufacturer_edit_id'";

			$run_manufacturer = mysqli_query($con,$get_manufacturer);

			$row_manufacturer = mysqli_fetch_array($run_manufacturer);

			$manufacturer_id = $row_manufacturer['manufacturer_id'];

			$manufacturer_title = $row_manufacturer['manufacturer_title'];

			$manufacturer_top = $row_manufacturer['manufacturer_top'];

			$manufacturer_image = $row_manufacturer['manufacturer_image'];

		}

?>

<!-- breadcrumb row begin -->
<div class="row insert_product_category_mt">
	<!-- col-lg-12 begin -->
	<div class="col-lg-12">
		<!-- breadcrumb begin -->
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Manufacturer
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
					<i class="fa fa-money fa-fw"></i> Edit Manufacturer
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
							
							Manufacturer Name

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input class="form-control" name="manufacturer_name" type="text" 
							value="<?php echo $manufacturer_title; ?>">

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
							
							<input name="manufacturer_top" type="radio" value="yes" 
							<?php if($manufacturer_top=="yes"){echo "checked";} ?> >
							<label>Yes</label>
							
							<input name="manufacturer_top" type="radio" value="no"
							<?php if($manufacturer_top=="no"){echo "checked";} ?> >
							<label>No</label>

						</div>
						<!-- col-mg-6 finish -->

					</div>
					<!-- form-group finish -->

					<!-- form-group begin -->
					<div class="form-group">
						
						<!-- control-label begin -->
						<label class="control-label col-md-3">
							
							Manufacturer Image

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input type="file" name="manufacturer_img" class="form-control">
							<br>
							<img src="others_images/<?php echo $manufacturer_image; ?>" width="100px">

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
							
							<input class="form-control btn btn-primary" value="Add Manufacturer" name="update" 
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
	
	$manufacturer_name = $_POST['manufacturer_name'];
	
	$manufacturer_top = $_POST['manufacturer_top'];

	if (is_uploaded_file($_FILES['manufacturer_img']['tmp_name'])) {

	$manufacturer_img = $_FILES['manufacturer_img']['name'];

	$manufacturer_img_tmp = $_FILES['manufacturer_img']['tmp_name'];

	move_uploaded_file($manufacturer_img_tmp,"others_images/$manufacturer_img");

	$update_manufacturer = "UPDATE manufacturers SET manufacturer_title='$manufacturer_name'
	,manufacturer_top='$manufacturer_top',manufacturer_image='$manufacturer_img' 
	WHERE manufacturer_id='$manufacturer_id'";

	$run_manufacturer = mysqli_query($con,$update_manufacturer);

	if ($run_manufacturer) {

		echo "<script>alert('Your Manufacturer Has Been Updated Successfully')</script>";

		echo "<script>window.open('index.php?view_manufacturers','_self')</script>";

	}
		
	}else{

	$update_manufacturer = "UPDATE manufacturers SET manufacturer_title='$manufacturer_name'
	,manufacturer_top='$manufacturer_top' WHERE manufacturer_id='$manufacturer_id'";

	$run_manufacturer = mysqli_query($con,$update_manufacturer);

	if ($run_manufacturer) {

		echo "<script>alert('Your Manufacturer Has Been Updated Successfully')</script>";

		echo "<script>window.open('index.php?view_manufacturers','_self')</script>";

	}

	}

}

?>

<?php } ?>