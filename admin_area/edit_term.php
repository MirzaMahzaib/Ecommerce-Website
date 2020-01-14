<?php

if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

		if (isset($_GET['edit_term'])) {
			
			$edit_term_id = $_GET['edit_term'];

			$get_terms = "SELECT * FROM terms WHERE terms_id='$edit_term_id'";

			$run_terms = mysqli_query($con,$get_terms);

			$row_terms = mysqli_fetch_array($run_terms);

			$term_id = $row_terms['terms_id'];

			$term_title = $row_terms['term_title'];

			$term_link = $row_terms['term_link'];

			$term_desc = $row_terms['term_desc'];

		}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert Product</title>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body class="insert_mt">

	<!--row begin-->
	<div class="row">
		<!--col-md-12 begin-->
		<div class="col-md-12">
			<!--breadcrumb begin-->
			<ol class="breadcrumb">
				<li class="active">
					<i class="fa fa-dashboard"></i> Dashboard / Create Term
				</li>
			</ol>
			<!--breadcrumb finish-->
		</div>
		<!--col-md-12 finish-->
	</div>
	<!--row finish-->

	<!--row begin-->
	<div class="row">
		<!--col-md-12 begin-->
		<div class="col-md-12">

			<!--panel panel-default begin-->
			<div class="panel panel-default">
				<!--panel-heading begin-->
				<div class="panel-heading">

					<!--panel-title begin-->
					<h3 class="panel-title">
						<i class="fa fa-money fa-fw"></i> Create Term
					</h3>
					<!--panel-title finish-->

				</div>
				<!--panel-heading finish-->

				<!--panel-body begin-->
				<div class="panel-body">
					<!--form-horizontal begin-->
					<form method="post" enctype="multipart/form-data" class="form-horizontal">
						
						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Term Title</label>
							
							<div class="col-md-6">
								<input type="text" name="term_title" required="required" 
								class="form-control" value="<?php echo $term_title; ?>">	
							</div>

						</div>
						<!--form-group finish-->
						
						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Term Link</label>
							
							<div class="col-md-6">
								<input type="text" name="term_link" required="required" 
								class="form-control" value="<?php echo $term_link; ?>">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Term Description</label>
							
							<div class="col-md-6">
								<textarea name="term_desc" cols="19" rows="6" class="form-control">
									<?php echo $term_desc; ?>
								</textarea>	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label"></label>
							
							<div class="col-md-6">
								<input type="submit" value="Insert Term" name="update" 
								class="btn btn-primary form-control">
							</div>

						</div>
						<!--form-group finish-->
					
					</form>
					<!--form-horizontal finish-->
				</div>
				<!--panel-body finish-->

			</div>
			<!--panel panel-defautl finish-->
		</div>
		<!--col-md-12 finish-->
	</div>
	<!--row finish-->





    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</body>
</html>

<?php

	if(isset($_POST['update'])){

		$term_title = $_POST['term_title'];
		$term_link = $_POST['term_link'];
		$term_desc = $_POST['term_desc'];

		$update_term = "UPDATE terms SET term_title='$term_title',term_link='$term_link',term_desc='$term_desc'
		WHERE terms_id='$term_id'";

		$run_update_term = mysqli_query($con,$update_term);

		if ($run_update_term) {
			
			echo "<script>alert('Term has been Updated successfully')</script>";
			echo "<script>window.open('index.php?view_terms','_self')</script>";

		}


	}

?>


<?php } ?>