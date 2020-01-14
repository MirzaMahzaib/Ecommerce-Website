<?php

if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{
	
?>

<?php

	if (isset($_GET['user_edit'])) {
			
			$edit_user = $_GET['user_edit'];

			$get_users = "SELECT * FROM admins WHERE admin_id='$edit_user'";

			$run_user = mysqli_query($con,$get_users);

			$row_users = mysqli_fetch_array($run_user);

			$user_id = $row_users['admin_id'];

			$user_name = $row_users['admin_name'];

			$user_email = $row_users['admin_email'];

			$user_pass = $row_users['admin_pass'];

			$user_image = $row_users['admin_image'];

			$user_country = $row_users['admin_country'];

			$user_job = $row_users['admin_job'];

			$user_contact = $row_users['admin_contact'];

			$user_about = $row_users['admin_about'];

		}


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
					<i class="fa fa-dashboard"></i> Dashboard / Edit User
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
						<i class="fa fa-money fa-fw"></i> Edit User
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
								<input type="text" name="admin_name" required="required" class="form-control"
								value="<?php echo $user_name; ?>">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Email</label>
							
							<div class="col-md-6">
								<input type="email" name="admin_email" required="required" class="form-control"
								value="<?php echo $user_email; ?>">
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Password</label>
							
							<div class="col-md-6">
								<input type="text" name="admin_pass" required="required" class="form-control"
								value="<?php echo $user_pass; ?>">
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Country</label>
							
							<div class="col-md-6">
								<input type="text" name="admin_country" required="required" class="form-control"
								value="<?php echo $user_country; ?>">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Contact</label>
							
							<div class="col-md-6">
								<input type="text" name="admin_contact" required="required" class="form-control"
								value="<?php echo $user_contact ?>">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Job</label>
							
							<div class="col-md-6">
								<input type="text" name="admin_job" required="required" class="form-control"
								value="<?php echo $user_job; ?>">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Image</label>
							
							<div class="col-md-6">
								<input type="file" name="admin_image" required="required" class="form-control">
								<br>
								<img src="admin_images/<?php echo $user_image; ?>" width="100px">
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label class="col-md-3 control-label">About</label>
							
							<div class="col-md-6">
								<textarea name="admin_about" cols="19" rows="6" class="form-control">
									<?php echo $user_about; ?>
								</textarea>	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label"></label>
							
							<div class="col-md-6">
								<input type="submit" value="Updaet User" name="update" 
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

		$update_user = "UPDATE admins SET admin_name='$user_name',admin_email='$user_email',admin_pass='$user_pass',admin_country='$user_country',admin_contact='$user_contact',admin_job='$user_job',admin_image='$user_image',admin_about='$user_about' WHERE admin_id='$edit_user'";

		$run_update_user = mysqli_query($con,$update_user);

		if ($run_update_user) {
			
			echo "<script>alert('User has been Updated successfully, Relogin Required')</script>";
			echo "<script>window.open('login.php','_slef')</script>";

			session_destroy();

		}


	}

?>


<?php } ?>