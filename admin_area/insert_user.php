<?php

if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert User</title>
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
					<i class="fa fa-dashboard"></i> Dashboard / Insert User
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
						<i class="fa fa-money fa-fw"></i> Insert User
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
							
							<label for="" class="col-md-3 control-label">User Name</label>
							
							<div class="col-md-6">
								<input type="text" name="admin_name" required="required" class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Email</label>
							
							<div class="col-md-6">
								<input type="email" name="admin_email" required="required" class="form-control">
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Password</label>
							
							<div class="col-md-6">
								<input type="password" name="admin_pass" required="required" class="form-control">
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Country</label>
							
							<div class="col-md-6">
								<input type="text" name="admin_country" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Contact</label>
							
							<div class="col-md-6">
								<input type="text" name="admin_contact" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Job</label>
							
							<div class="col-md-6">
								<input type="text" name="admin_job" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Image</label>
							
							<div class="col-md-6">
								<input type="file" name="admin_image" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label class="col-md-3 control-label">About</label>
							
							<div class="col-md-6">
								<textarea name="admin_about" cols="19" rows="6" class="form-control">
								</textarea>	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label"></label>
							
							<div class="col-md-6">
								<input type="submit" value="Insert User" name="submit" 
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

	if(isset($_POST['submit'])){

		$user_name = $_POST['admin_name'];
		$user_email = $_POST['admin_email'];
		$user_pass = $_POST['admin_pass'];
		$user_country = $_POST['admin_country'];
		$user_contact = $_POST['admin_contact'];
		$user_job = $_POST['admin_job'];

		$user_image = $_FILES['admin_image']['name'];
		$tmp_user_img = $_FILES['admin_image']['tmp_name'];

		$user_about = $_POST['admin_about'];

		move_uploaded_file($tmp_user_img,"admin_images/$user_image");

		$insert_user = "INSERT INTO admins(admin_name,admin_email,admin_pass,admin_country,admin_contact,admin_job,admin_image,admin_about) 
			VALUES('$user_name','$user_email','$user_pass','$user_country','$user_contact','$user_job','$user_image','$user_about')";

		$run_user = mysqli_query($con,$insert_user);

		if ($run_user) {
			
			echo "<script>alert('New User has been inserted successfully')</script>";
			echo "<script>window.open('index.php?view_users','_slef')</script>";

		}


	}

?>


<?php } ?>