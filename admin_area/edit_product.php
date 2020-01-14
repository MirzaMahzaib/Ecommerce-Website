<?php

if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>

<?php

	if (isset($_GET['edit_product'])) {
		
		$edit_id = $_GET['edit_product'];

		$get_p = "SELECT * FROM products WHERE product_id='$edit_id'";

		$run_p = mysqli_query($con,$get_p);

		$row_edit = mysqli_fetch_array($run_p);

		$p_id = $row_edit['product_id'];

		$p_title = $row_edit['product_title'];

		$p_cat = $row_edit['p_cat_id'];

		$cat = $row_edit['cat_id'];

		$manufacturer_id = $row_edit['manufacturer_id'];

		$p_image1 = $row_edit['product_img1'];

		$p_image2 = $row_edit['product_img2'];

		$p_image3 = $row_edit['product_img3'];

		$p_price = $row_edit['product_price'];

		$p_keywords = $row_edit['product_keywords'];

		$p_desc = $row_edit['product_desc'];

		$p_label = $row_edit['product_label'];

		$p_sale_price = $row_edit['product_sale']; 

	}

	$get_manufacturer = "SELECT * FROM manufacturers WHERE manufacturer_id='$manufacturer_id'";

	$run_manufacturer = mysqli_query($con,$get_manufacturer);

	$row_manufacturer = mysqli_fetch_array($run_manufacturer);

	$manufacturer_id = $row_manufacturer['manufacturer_id'];

	$manufacturer_title = $row_manufacturer['manufacturer_title'];


	$get_p_cat = "SELECT * FROM product_categories WHERE p_cat_id='$p_cat'";

	$run_p_cat = mysqli_query($con,$get_p_cat);

	$row_p_cat = mysqli_fetch_array($run_p_cat);

	$p_cat_title = $row_p_cat['p_cat_title'];


	$get_cat = "SELECT * FROM categories WHERE cat_id='$cat'";

	$run_cat = mysqli_query($con,$get_cat);

	$row_cat = mysqli_fetch_array($run_cat);

	$cat_title = $row_cat['cat_title'];

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
					<i class="fa fa-dashboard"></i> Dashboard / Edit Products
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
						<i class="fa fa-money fa-fw"></i> Edit Product
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
								class="form-control" value="<?php echo $p_title; ?>">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Manufacturer</label>
							
							<div class="col-md-6">
								
								<select name="manufacturer" class="form-control">

									<option disabled value="Select Manufacturer">Select Manufacturer</option>
									
									<option selected value="<?php echo $manufacturer_id; ?>">
										<?php echo $manufacturer_title; ?>
									</option>

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

									<option disabled value="Select Product Category">Select Product Category</option>
									
									<option selected value="<?php echo $p_cat; ?>" disabled selected>
										<?php echo $p_cat_title; ?>
									</option>

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

									<option disabled value="Select Category">Select Category</option>
									
									<option value="<?php echo $cat; ?>" disabled selected>
										<?php echo $cat_title; ?>
									</option>

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
								<input type="file" name="product_img1" 
								class="form-control">
								<br>
								<img src="product_images/<?php echo $p_image1; ?>" alt="<?php echo $p_image1; ?>"
								width="70px">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Image 2</label>
							
							<div class="col-md-6">
								<input type="file" name="product_img2" 
								class="form-control">
								<br>
								<img src="product_images/<?php echo $p_image2; ?>" alt="<?php echo $p_image2; ?>"
								width="70px">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Image 3</label>
							
							<div class="col-md-6">
								<input type="file" name="product_img3" 
								class="form-control">
								<br>
								<img src="product_images/<?php echo $p_image3; ?>" alt="<?php echo $p_image3; ?>"
								width="70px">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Price</label>
							
							<div class="col-md-6">
								<input type="text" name="product_price" required="required" 
								class="form-control" value="<?php echo $p_price; ?>">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Sale Price</label>
							
							<div class="col-md-6">
								<input type="text" name="product_sale_price" required="required" 
								class="form-control" value="<?php echo $p_price; ?>">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Keywords</label>
							
							<div class="col-md-6">
								<input type="text" name="product_keywords" required="required" 
								class="form-control" value="<?php echo $p_keywords; ?>">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Description</label>
							
							<div class="col-md-6">
								<textarea name="product_desc" cols="19" rows="6" class="form-control">
									<?php echo $p_desc; ?>
								</textarea>	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label">Product Label</label>
							
							<div class="col-md-6">
								<input type="text" name="product_label" required="required" 
								class="form-control" value="<?php echo $p_label; ?>">	
							</div>

						</div>
						<!--form-group finish-->

						<!--form-group begin-->
						<div class="form-group">
							
							<label for="" class="col-md-3 control-label"></label>
							
							<div class="col-md-6">
								<input type="submit" value="update Product" name="update" 
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

		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$cat = $_POST['cat'];
		$manufacturer_id = $_POST['manufacturer'];
		$product_price = $_POST['product_price'];
		$product_keywords = $_POST['product_keywords'];
		$product_desc = $_POST['product_desc'];
		$product_sale_price = $_POST['product_sale_price'];
		$product_label = $_POST['product_label'];

		if (is_uploaded_file($_FILES['file']['tmp_name'])) {
			
			// Work For Upload / Update Image

			$product_img1 = $_FILES['product_img1']['name'];
			$product_img2 = $_FILES['product_img2']['name'];
			$product_img3 = $_FILES['product_img3']['name'];

			$temp_name1 = $_FILES['product_img1']['tmp_name'];
			$temp_name2 = $_FILES['product_img2']['tmp_name'];
			$temp_name3 = $_FILES['product_img3']['tmp_name'];

			move_uploaded_file($temp_name1,"product_images/$product_img1");
			move_uploaded_file($temp_name2,"product_images/$product_img2");
			move_uploaded_file($temp_name3,"product_images/$product_img3");

			$update_product = "update products set 
			p_cat_id='$product_cat',cat_id='$cat',manufacturer_id='$manufacturer_id',date=NOW(),product_title='$product_title'
			,product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3'
			,product_keywords='$product_keywords',product_desc='$product_desc',product_price='$product_price'
			,product_sale='$product_sale_price',product_label='$product_label' where product_id='$p_id'";

			$run_update_product = mysqli_query($con,$update_product);

			if ($run_update_product) {
				
				echo "<script>alert('Your Product Has Been Updated Successfully')</script>";

				echo "<script>window.open('index.php?view_products','_self')</script>";

			}

		}else{

			// Work For When No Update Image

			$update_product = "update products set 
			p_cat_id='$product_cat',cat_id='$cat',manufacturer_id='$manufacturer_id',date=NOW(),product_title='$product_title'
			,product_keywords='$product_keywords',product_desc='$product_desc',product_price='$product_price'
			,product_sale='$product_sale_price',product_label='$product_label' where product_id='$p_id'";

			$run_update_product = mysqli_query($con,$update_product);

			if ($run_update_product) {
				
				echo "<script>alert('Your Product Has Been Updated Successfully')</script>";

				echo "<script>window.open('index.php?view_products','_self')</script>";

			}

		}

	}

?>


<?php } ?>