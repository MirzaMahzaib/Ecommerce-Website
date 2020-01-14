<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>

<?php

	$file = "../styles/custom.css";

	if (file_exists($file)) {
		
		$data = file_get_contents($file);

	}

?>

<!-- breadcrumb row begin -->
<div class="row insert_product_category_mt">
	<!-- col-lg-12 begin -->
	<div class="col-lg-12">
		<!-- breadcrumb begin -->
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i> Dashboard / CSS Editor
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
					
					<i class="fa fa-pencil"></i> CSS Editor

				</h3>
				<!-- panel-title finish -->
			</div>
			<!-- panel-heading finish -->
			
			<!-- panel-body begin -->
			<div class="panel-body">

				<!-- form-horizontal begin -->
				<form action="" class="form-horizontal" method="post">
					
					<!-- form-group begin -->
					<div class="form-group">
						<!-- col-lg-12 begin -->
						<div class="col-lg-12">
							<textarea class="form-control" name="newdata" rows="19">
								<?php echo $data; ?>
							</textarea>
						</div>
						<!-- col-lg-12 finish -->
					</div>
					<!-- form-group finish -->

					<!-- form-group begin -->
					<div class="form-group">

						<label class="control-label col-md-3"></label>
						
						<div class="col-md-6">
							<input type="submit" name="update" value="Update Css" 
							class="form-control btn btn-primary">
						</div>

					</div>
					<!-- form-group finish -->

				</form>
				<!-- form-horizontal finish -->

			</div>
			<!-- panel-body finish -->
		</div>
		<!-- panel panel-default finish -->
	
	</div>
	<!-- col-lg-12 finish -->
</div>
<!-- panel row finish -->

<?php } ?>

<?php 

if (isset($_POST['update'])) {
	
	$newdata = $_POST['newdata'];

	$handle = fopen($file, "w");

	fwrite($handle, $newdata);

	fclose($handle);

	echo "<script>alert('Your CSS Has Been Updated')</script>";
	echo "<script>window.open('index.php?edit_css','_self')</script>";

}

?>