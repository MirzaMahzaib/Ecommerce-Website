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
					<i class="fa fa-dashboard"></i> Dashboard / Insert Products
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
						<i class="fa fa-money fa-fw"></i> Insert Product
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
							
							<label for="" class="col-md-3 control-label">Product Title</label>
							
							<div class="col-md-6">
								<input type="text" name="product_title" maxlength="18" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Manufacturer</label>
							
							<div class="col-md-6">
								
								<select name="manufacturer" class="form-control">
									
									<option disabled selected>Select a Manufacturer</option>

									<?php

										$get_manufacturer = "select * from manufacturers";
										$run_manufacturer = mysqli_query($con,$get_manufacturer);

										while ($row_manufacturer=mysqli_fetch_array($run_manufacturer)) {
											
											$manufacturer_id = $row_manufacturer['manufacturer_id'];
											$manufacturer_title = $row_manufacturer['manufacturer_title'];

											echo "
												
												<option value='$manufacturer_id'> $manufacturer_title </option>

											";

										}

									?>

								</select>

							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Category</label>
							
							<div class="col-md-6">
								
								<select name="product_cat" class="form-control">
									
									<option disabled selected>Select a Category Product</option>

									<?php

										$get_p_cats = "select * from product_categories";
										$run_p_cats = mysqli_query($con,$get_p_cats);

										while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
											
											$p_cat_id = $row_p_cats['p_cat_id'];
											$p_cat_title = $row_p_cats['p_cat_title'];

											echo "
												
												<option value='$p_cat_id'> $p_cat_title </option>

											";

										}

									?>

								</select>

							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Category</label>
							
							<div class="col-md-6">
								
								<select name="cat" class="form-control">
									
									<option disabled selected>Select a Category</option>

									<?php

										$get_cats = "select * from categories";
										$run_cats = mysqli_query($con,$get_cats);

										while ($row_cats=mysqli_fetch_array($run_cats)) {
											
											$cat_id = $row_cats['cat_id'];
											$cat_title = $row_cats['cat_title'];

											echo "
												
												<option value='$cat_id'> $cat_title </option>

											";

										}

									?>

								</select>

							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Image 1</label>
							
							<div class="col-md-6">
								<input type="file" name="product_img1" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Image 2</label>
							
							<div class="col-md-6">
								<input type="file" name="product_img2" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Image 3</label>
							
							<div class="col-md-6">
								<input type="file" name="product_img3" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Price</label>
							
							<div class="col-md-6">
								<input type="text" name="product_price" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Sale Price</label>
							
							<div class="col-md-6">
								<input type="text" name="product_sale" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Keywords</label>
							
							<div class="col-md-6">
								<input type="text" name="product_keywords" required="required" 
								class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Description</label>
							
							<div class="col-md-6">
								<textarea name="product_desc" cols="19" rows="6" class="form-control">
								</textarea>	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Label</label>
							
							<div class="col-md-6">
								<input type="text" name="product_label"	class="form-control">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label"></label>
							
							<div class="col-md-6">
								<input type="submit" value="Insert Product" name="submit" 
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

		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$cat = $_POST['cat'];
		$manufacturer_id = $_POST['manufacturer'];
		$product_price = $_POST['product_price'];
		$product_keywords = $_POST['product_keywords'];
		$product_desc = $_POST['product_desc'];
		$product_label = $_POST['product_label'];
		$product_sale = $_POST['product_sale'];

		$product_img1 = $_FILES['product_img1']['name'];
		$product_img2 = $_FILES['product_img2']['name'];
		$product_img3 = $_FILES['product_img3']['name'];

		$temp_name1 = $_FILES['product_img1']['tmp_name'];
		$temp_name2 = $_FILES['product_img2']['tmp_name'];
		$temp_name3 = $_FILES['product_img3']['tmp_name'];

		move_uploaded_file($temp_name1,"product_images/$product_img1");
		move_uploaded_file($temp_name2,"product_images/$product_img2");
		move_uploaded_file($temp_name3,"product_images/$product_img3");

		$insert_product = "insert into products(p_cat_id,cat_id,manufacturer_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_keywords,product_desc,product_label,product_sale) values('$product_cat','$cat','$manufacturer_id',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc','$product_label','$product_sale')";

		$run_product = mysqli_query($con,$insert_product);

		if ($run_product) {
			
			echo "<script>alert('Product has been inserted successfully')</script>";
			echo "<script>window.open('index.php?view_products','_self')</script>";

		}


	}

?>


<?php } ?>