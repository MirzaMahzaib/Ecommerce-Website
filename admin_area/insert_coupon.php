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
    <title>Insert Coupon</title>
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
					<i class="fa fa-dashboard"></i> Dashboard / Insert Coupon
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
						<i class="fa fa-money fa-fw"></i> Insert Coupon
					</h3>
					<!--panel-title finish-->

				</div>
				<!--panel-heading finish-->

				<!--panel-body begin-->
				<div class="panel-body">
					<!--form-horizontal begin-->
					<form method="post" class="form-horizontal">
						
						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Coupon Title</label>
							
							<div class="col-md-6">
								<input type="text" name="coupon_title" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Coupon Price</label>
							
							<div class="col-md-6">
								<input type="text" name="coupon_price" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label class="col-md-3 control-label">Coupon Limit</label>
							
							<div class="col-md-6">
								<input type="number" name="coupon_limit" required="required" 
								class="form-control" value="1">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Select Product</label>
							
							<div class="col-md-6">
								<select name="product_id" class="form-control">
									
									<option selected disabled>Select Product For Coupon</option>

									<?php

										$get_p = "SELECT * FROM products";
										$run_p = mysqli_query($con,$get_p);

										while ($row_p = mysqli_fetch_array($run_p)) {
											
											$p_id = $row_p['product_id'];
											$p_title = $row_p['product_title'];

											echo "<option value='$p_id'>$p_title</option>";

										}

									?>

								</select>	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Coupon Code</label>
							
							<div class="col-md-6">
								<input type="text" name="coupon_code" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label"></label>
							
							<div class="col-md-6">
								<input type="submit" value="Create Coupon" name="submit" 
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

		$coupon_title = $_POST['coupon_title'];
		$coupon_price = $_POST['coupon_price'];
		$coupon_limit = $_POST['coupon_limit'];
		$coupon_pro_id = $_POST['product_id'];
		$coupon_code = $_POST['coupon_code'];

		$coupon_used = 0;

		$get_coupons = "SELECT * FROM coupons WHERE product_id='$coupon_pro_id' OR coupon_code='$coupon_code'";
		$run_coupons = mysqli_query($con,$get_coupons);
		$check_coupons = mysqli_num_rows($run_coupons);

		if ($check_coupons == 1) {
			
			echo "<script>alert('Coupon Code / Product Already Added. Choose Another Coupon Code / Product')</script>";

		}else{

			$insert_coupon = "INSERT INTO 
			coupons (product_id,coupon_title,coupon_price,coupon_code,coupon_limit,coupon_used)
			VALUES ('$coupon_pro_id','$coupon_title','$coupon_price','$coupon_code','$coupon_limit','$coupon_used')";

			$run_insert_coupons = mysqli_query($con,$insert_coupon);

			if ($run_insert_coupons) {
				
				echo "<script>alert('Your Coupon Has Been Created')</script>";
				echo "<script>window.open('index.php?view_coupons','_self')</script>";

			}

		}


	}

?>


<?php } ?>