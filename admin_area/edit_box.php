<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

		if (isset($_GET['edit_box'])) {
			
			$edit_box_id = $_GET['edit_box'];

			$get_boxes = "SELECT * FROM boxes_section WHERE box_id='$edit_box_id'";

			$run_boxes = mysqli_query($con,$get_boxes);

			$row_boxes = mysqli_fetch_array($run_boxes);

			$box_id = $row_boxes['box_id'];

			$box_title = $row_boxes['box_title'];

			$box_desc = $row_boxes['box_desc'];

		}

?>

<!-- breadcrumb row begin -->
<div class="row insert_product_category_mt">
	<!-- col-lg-12 begin -->
	<div class="col-lg-12">
		<!-- breadcrumb begin -->
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / Edit Box
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
					<i class="fa fa-money fa-fw"></i> Edit Box
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
							
							Box Title

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<input class="form-control" name="box_title" type="text" value="<?php echo $box_title; ?>"></input>

						</div>
						<!-- col-mg-6 finish -->

					</div>
					<!-- form-group finish -->
					<!-- form-group begin -->
					<div class="form-group">
						
						<!-- control-label begin -->
						<label class="control-label col-md-3">
							
							Box Description

						</label>
						<!-- control-label finish -->

						<!-- col-mg-6 begin -->
						<div class="col-md-6">
							
							<textarea class="form-control" name="box_desc" type="text" rows="6"><?php echo $box_desc; ?>
							</textarea>

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
							
							<input class="form-control btn btn-primary" value="Add Box" name="update" 
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
	
	$box_title = $_POST['box_title'];
	
	$box_desc = $_POST['box_desc'];

	$update_box = "UPDATE boxes_section SET box_title='$box_title',box_desc='$box_desc' WHERE box_id='$box_id'";

	$run_update_box = mysqli_query($con,$update_box);

	echo "<script>alert('Box Has Been Updated Successfully')</script>";

	echo "<script>window.open('index.php?view_boxes','_self')</script>";

}

?>

<?php } ?>