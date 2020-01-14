<?php

$db = mysqli_connect("localhost","root","","ecom_project");
 
// Begin getRealIpUser function //

function getRealIpUser(){

	switch(true){

		case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
		case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
		case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];

		default : return $_SERVER['REMOTE_ADDR'];

	}

}

// Finish getRealIpUser function //

// Begin add_cart function //

function add_cart(){

	global $db;

	if (isset($_GET['add_cart'])) {
		
		$ip_add = getRealIpUser();

		$p_id = $_GET['add_cart'];

		$product_qty = $_POST['product_qty'];

		$product_size = $_POST['product_size'];

		$check_product = "SELECT * FROM cart WHERE ip_add='$ip_add' AND p_id='$p_id'";

		$run_check = mysqli_query($db,$check_product);

		if (mysqli_num_rows($run_check)>0) {
			
			echo "<script>alert('Product Has Already Added In Your Cart');</script>";
			echo "<script>window.open('details.php?pro_id=$p_id','_self');</script>";

		}else{

			$get_price = "SELECT * FROM products WHERE product_id='$p_id'";

			$run_price = mysqli_query($db,$get_price);

			$row_price = mysqli_fetch_array($run_price);

			$pro_price = $row_price['product_price'];

			$pro_sale = $row_price['product_sale'];

			$pro_label = $row_price['product_label'];

			if ($pro_label == "sale") {
				
				$product_price = $pro_sale;

			}else{

				$product_price = $pro_price;

			}

			$query = "INSERT INTO cart (p_id,ip_add,qty,p_price,size) 
			VALUES ('$p_id','$ip_add','$product_qty','$product_price','$product_size')";

			$run_query = mysqli_query($db,$query);
			
			echo "<script>window.open('details.php?pro_id=$p_id','_self');</script>";

		}

	}

}

// Finish add_cart function //


// Begin getPro function //

function getPro(){
	
	global $db;

	$get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT 0,8";

	$run_products = mysqli_query($db,$get_products);

	while ($row_products=mysqli_fetch_array($run_products)) {

		$pro_id = $row_products['product_id'];

		$pro_title = $row_products['product_title'];

		$pro_price = $row_products['product_price'];

		$pro_sale_price = $row_products['product_sale'];

		$pro_img1 = $row_products['product_img1'];

		$pro_label = $row_products['product_label'];

		$manufacturer_id = $row_products['manufacturer_id'];

		$get_manufacturer = "SELECT * FROM manufacturers WHERE manufacturer_id='$manufacturer_id'";

		$run_manufacturer = mysqli_query($db,$get_manufacturer);

		$row_manufacturer = mysqli_fetch_array($run_manufacturer);

		$manufacturer_title = $row_manufacturer['manufacturer_title'];

		if ($pro_label == "sale") {
			
			$product_price = "<del> PKR $pro_price </del>";

			$product_sale_price = "| PKR $pro_sale_price";

		}else{

			$product_price = " $pro_price";

			$product_sale_price = "";

		}

		if ($pro_label == "") {
			
		}else{

			$product_label = "
				
				<a href='#' class='label $pro_label'>
	
					<div class='theLabel'> $pro_label </div>
					<div class='labelBackground'> </div>

				</a>

			";

		}

		echo "
		
			<div class='col-md-4 col-sm-6 single'>

				<div class='product'>

					<a href='details.php?pro_id=$pro_id'>

						<img class='img-responsive' src='admin_area/product_images/$pro_img1'>
					</a>

					<div class='text'>

					<center>

						<p class='btn btn-primary'> $manufacturer_title </p>
	
					</center>

						<h3>

							<a href='details.php?pro_id=$pro_id'>

								$pro_title

							</a>

						</h3>

						<p class='price'>

							PKR $product_price &nbsp;$product_sale_price

						</p>

						<p class='button'>

							<a href='details.php?pro_id=$pro_id' class='btn btn-default'>

								View Details

							</a>

							<a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

								<i class='fa fa-shopping-cart'></i> Add to Cart

							</a>

						</p>

					</div>

					$product_label

				</div>

			</div>

		";
		
	}

}

// Finish getPro function //

// Begin getPCats function //

// function getPCats(){

// 	global $db;

// 	$get_p_cats = "SELECT * FROM product_categories";

// 	$run_p_cats = mysqli_query($db,$get_p_cats);

// 	while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
		
// 		$p_cat_id = $row_p_cats['p_cat_id'];

// 		$p_cat_title = $row_p_cats['p_cat_title'];

// 		echo "
		
// 			<li>

// 				<a href='shop.php?p_cat=$p_cat_id'> $p_cat_title </a>

// 			</li>

// 		";

// 	}

// }


// Finish getPCats function //


// Begin getCat function //

// function getCat(){

// 	global $db;

// 	$get_cats = "SELECT * FROM categories";

// 	$run_cats = mysqli_query($db,$get_cats);

// 	while ($row_cat=mysqli_fetch_array($run_cats)) {

// 		$cat_id = $row_cat['cat_id'];

// 		$cat_title = $row_cat['cat_title'];

// 		echo "
		
// 			<li>

// 				<a href='shop.php?cat=$cat_id'> $cat_title </a>

// 			</li>

// 		";

// 	}

// }

// Finish getCat function //

// Begin items function //

function items(){

	global $db;

	$ip_add = getRealIpUser();

	$get_items = "SELECT * FROM cart WHERE ip_add='$ip_add'";

	$run_items = mysqli_query($db,$get_items);

	$count_items = mysqli_num_rows($run_items);

	echo $count_items;	

}

// Finish items function //

// Finish total_price function //

function total_price(){

	global $db;

	$ip_add = getRealIpUser();

	$total = 0;

	$select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";

	$run_cart = mysqli_query($db,$select_cart);

	while ($record=mysqli_fetch_array($run_cart)) {
		
		$pro_id = $record['p_id'];

		$pro_qty = $record['qty'];
			
		$sub_total = $record['p_price']*$pro_qty;

		$total += $sub_total;

	}

	echo "$" . $total;

}

// Finish total_price function //

// Begin getProducts function //

function getProducts(){

	global $db;
	$aWhere = array();

	// Begin for Manufacturer //

	if (isset($_REQUEST['manufacturer'])&&is_array($_REQUEST['manufacturer'])) {
		
		foreach($_REQUEST['manufacturer'] as $sKey=>$sVal){

			if ((int)$sVal!=0) {
				
				$aWhere[] = 'manufacturer_id='.(int)$sVal;

			}

		}

	}

	// Finish for Manufacturer //

	// Begin for Product Categories //

	if (isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])) {
		
		foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

			if ((int)$sVal!=0) {
				
				$aWhere[] = 'p_cat_id='.(int)$sVal;

			}

		}

	}

	// Finish for Product Categories //

	// Begin for Categories //

	if (isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])) {
		
		foreach($_REQUEST['cat'] as $sKey=>$sVal){

			if ((int)$sVal!=0) {
				
				$aWhere[] = 'cat_id='.(int)$sVal;

			}

		}

	}

	// Finish for Categories //

	$per_page=6;

	if (isset($_GET['page'])) {
		
		$page = $_GET['page'];

	}else{

		$page=1;

	}

	$start_from = ($page-1) * $per_page;
	$sLimit = "ORDER BY 1 DESC LIMIT $start_from,$per_page";
	$sWhere = (count($aWhere)>0) ?' WHERE ' .implode(' or ',$aWhere):''.$sLimit;
	$get_products = "select * from products ".$sWhere;
	// echo $get_products;
	$run_products = mysqli_query($db,$get_products);

	while($row_products=mysqli_fetch_array($run_products)) {

		$pro_id = $row_products['product_id'];

		$pro_title = $row_products['product_title'];

		$pro_price = $row_products['product_price'];

		$pro_sale_price = $row_products['product_sale'];

		$pro_img1 = $row_products['product_img1'];

		$pro_label = $row_products['product_label'];

		$manufacturer_id = $row_products['manufacturer_id'];

		$get_manufacturer = "SELECT * FROM manufacturers WHERE manufacturer_id='$manufacturer_id'";

		$run_manufacturer = mysqli_query($db,$get_manufacturer);

		$row_manufacturer = mysqli_fetch_array($run_manufacturer);

		$manufacturer_title = $row_manufacturer['manufacturer_title'];

		if ($pro_label == "sale") {
			
			$product_price = "<del> $ $pro_price </del>";

			$product_sale_price = "| $ $pro_sale_price";

		}else{

			$product_price = "$ $pro_price";

			$product_sale_price = "";

		}

		if ($pro_label == "") {
			
		}else{

			$product_label = "
				
				<a href='#' class='label $pro_label'>
	
					<div class='theLabel'> $pro_label </div>
					<div class='labelBackground'> </div>

				</a>

			";

		}

		echo "
		
			<div class='col-md-4 col-sm-6 center-responsive'>

				<div class='product'>

					<a href='details.php?pro_id=$pro_id'>

						<img class='img-responsive' src='admin_area/product_images/$pro_img1'>
					</a>

					<div class='text'>

					<center>

						<p class='btn btn-primary'> $manufacturer_title </p>
	
					</center>

						<h3>

							<a href='details.php?pro_id=$pro_id'>

								$pro_title

							</a>

						</h3>

						<p class='price'>

							PKR $product_price &nbsp;$product_sale_price

						</p>

						<p class='button'>

							<a href='details.php?pro_id=$pro_id' class='btn btn-default'>

								View Details

							</a>

							<a class='btn btn-primary' href='details.php?pro_id=$pro_id'>

								<i class='fa fa-shopping-cart'></i> Add to Cart

							</a>

						</p>

					</div>

					$product_label

				</div>

			</div>

		";
		
	}

}

// Finish getProducts function //

// Finish getPaginator function //

function getPaginator(){

	global $db;

	$per_page = 6;
	$aWhere = array();
	$aPath = '';

	// Begin for Manufacturer //

	if (isset($_REQUEST['manufacturer'])&&is_array($_REQUEST['manufacturer'])) {
		
		foreach($_REQUEST['manufacturer'] as $sKey=>$sVal){

			if ((int)$sVal!=0) {
				
				$aWhere[] = 'manufacturer_id='.(int)$sVal;
				$aPath .= 'manufacturer[]='.(int)$sVal.'&';

			}

		}

	}

	// Finish for Manufacturer //

	// Begin for Product Categories //

	if (isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])) {
		
		foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

			if ((int)$sVal!=0) {
				
				$aWhere[] = 'p_cat_id='.(int)$sVal;
				$aPath .= 'p_cat[]='.(int)$sVal.'&';

			}

		}

	}

	// Finish for Product Categories //

	// Begin for Categories //

	if (isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])) {
		
		foreach($_REQUEST['cat'] as $sKey=>$sVal){

			if ((int)$sVal!=0) {
				
				$aWhere[] = 'cat_id='.(int)$sVal;
				$aPath .= 'cat[]='.(int)$sVal.'&';

			}

		}

	}

	// Finish for Categories //

	$sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');
	$query = "SELECT * FROM products".$sWhere;
	$result = mysqli_query($db,$query);
	$total_records = mysqli_num_rows($result);
	$total_pages = ceil($total_records / $per_page);

	echo "<li> <a href='shop.php?page=1";

	if (!empty($aPath)) {
		
		echo "&".$aPath;

	}

	echo "'>".'First Page'."</a></li>";

	for ($i=1; $i<=$total_pages; $i++) { 
		
		echo "<li><a href='shop.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."'>".$i."</a></li>";

	}

	echo "<li> <a href='shop.php?page=$total_pages";

	if (!empty($aPath)) {
		
		echo "&".$aPath;

	}

	echo "'>".'Last Page'."</a></li>";

}

// Finish getPaginator function //




















?>