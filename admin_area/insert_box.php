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
				<i class="fa fa-dashboard"></i> Dashboard / Insert Box
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
					<i class="fa fa-money fa-fw"></i> Insert Box
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
							
							<input class="form-control" name="box_title" type="text"></input>

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
							
							<textarea class="form-control" name="box_desc" type="text" rows="6"></textarea>

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
							
							<input class="form-control btn btn-primary" value="Add Box" name="add" 
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

if (isset($_POST['add'])) {
	
	$box_title = $_POST['box_title'];
	
	$box_desc = $_POST['box_desc'];

	$insert_box = "INSERT INTO boxes_section (box_title,box_desc) VALUES ('$box_title','$box_desc')";

	$run_box = mysqli_query($con,$insert_box);

	echo "<script>alert('New Box Has Been Added Successfully')</script>";

	echo "<script>window.open('index.php?view_boxes','_self')</script>";

}

?>

<?php } ?>