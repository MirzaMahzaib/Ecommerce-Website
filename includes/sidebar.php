<?php

$aMan = array();
$aCat = array();
$aPcat = array();

// This is  for manufacturers begin //

if (isset($_REQUEST['manufacturer'])&&is_array($_REQUEST['manufacturer'])) {
	
	foreach($_REQUEST['manufacturer'] as $sKey=>$sVal){

		if ((int)$sVal!=0) {
			
			$aMan[(int)$sVal] = (int)$sVal;

		}

	}

}

// This is  for manufacturers finish //

// This is  for categories begin //

if (isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])) {
	
	foreach($_REQUEST['cat'] as $sKey=>$sVal){

		if ((int)$sVal!=0) {
			
			$aCat[(int)$sVal] = (int)$sVal;

		}

	}

}

// This is  for categories finish //

// This is  for product categories begin //

if (isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])) {
	
	foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

		if ((int)$sVal!=0) {
			
			$aPcat[(int)$sVal] = (int)$sVal;

		}

	}

}

// This is  for product categories finish //

?>

<!--panel panel-default sidebar-menu begin-->
<div class="panel panel-default sidebar-menu">

	<!--panel-heading begin-->
	<div class="panel-heading">

		<h3>
			Manufacturers
		
			<!-- pull-right begin -->
			<div class="pull-right">
				<a href="#" class="text-dark">
					<span class="nav-toggle hide-show">
						Hide
					</span>
				</a>
			</div>
			<!-- pull-right finish -->

		</h3>

	</div>
	<!--panel-heading finish-->

	<!-- panel-collapse collpase-data begin -->
	<div class="panel-collpase collapse-data">

		<!--panel-body begin-->
		<div class="panel-body">

			<!-- input-group begin -->
			<div class="input-group">
				<input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-manufacturer" 
				data-action="filter" placeholder="Filter Manufacturer">

				<!-- input-group-addon begin -->
				<a href="#" class="input-group-addon">
					<i class="fa fa-search"></i>
				</a>
				<!-- input-group-addon finish -->
			</div>
			<!-- input-group finish -->
		</div>
		<!--panel-body finish -->

		<!-- panel-body begin -->
		<div class="panel-body scroll-menu">	
			<!--nav nav-pills nav-stacked category-menu begin-->
			<ul class="nav nav-pills nav-stacked category-menu" id="dev-manufacturer">

				<?php

					$get_manufacturer = "SELECT * FROM manufacturers WHERE manufacturer_top='yes'";
					$run_manufacturer = mysqli_query($con,$get_manufacturer);

					while ($row_manufacturer=mysqli_fetch_array($run_manufacturer)) {
						
						$manufacturer_id = $row_manufacturer['manufacturer_id'];

						$manufacturer_title = $row_manufacturer['manufacturer_title'];

						$manufacturer_image = $row_manufacturer['manufacturer_image'];

						if ($manufacturer_image == "") {

						}else{

							$manufacturer_image = "<img src='admin_area/others_images/$manufacturer_image' width='20px'>&nbsp;";

						}

						echo "

							<li class='checkbox checkbox-primary' style='background:#dddddd;'>
								
								<a>

									<label>
										<input ";

										if (isset($aMan[$manufacturer_id])) {
											
											echo "checked='checked'";

										}

										echo "type='checkbox' class='get_manufacturer' value='$manufacturer_id'
										name='manufacturer'>

									<span>
										$manufacturer_image
										$manufacturer_title
									</span>

									</label>

								</a>

							</li>
	
						";

					}

					$get_manufacturer = "SELECT * FROM manufacturers WHERE manufacturer_top='no'";
					$run_manufacturer = mysqli_query($con,$get_manufacturer);

					while ($row_manufacturer=mysqli_fetch_array($run_manufacturer)) {
						
						$manufacturer_id = $row_manufacturer['manufacturer_id'];

						$manufacturer_title = $row_manufacturer['manufacturer_title'];

						$manufacturer_image = $row_manufacturer['manufacturer_image'];

						if ($manufacturer_image == "") {
							
						}else{

							$manufacturer_image = "<img src='admin_area/others_images/$manufacturer_image' width='20px'>&nbsp;";

						}

						echo "

							<li class='checkbox checkbox-primary'>
								
								<a>

									<label>
										<input ";

										if (isset($aMan[$manufacturer_id])) {
											
											echo "checked='checked'";

										}

										echo "type='checkbox' class='get_manufacturer' value='$manufacturer_id'
										name='manufacturer'>

									<span>
										$manufacturer_image
										$manufacturer_title
									</span>

									</label>

								</a>

							</li>
	
						";

					}

				?>

			</ul>
			<!--nav nav-pills nav-stacked categroy-menu finish-->

		</div>
		<!--panel-body finish-->

	</div>
	<!-- panel-collpase collpase-data finish -->

</div>
<!--panel panel-default sidebar-menu finish-->

<!--panel panel-default sidebar-menu begin-->
<div class="panel panel-default sidebar-menu">

	<!--panel-heading begin-->
	<div class="panel-heading">

		<h3>
			Categories 
		
			<!-- pull-right begin -->
			<div class="pull-right">
				<a href="#" class="text-dark">
					<span class="nav-toggle hide-show">
						Hide
					</span>
				</a>
			</div>
			<!-- pull-right finish -->

		</h3>

	</div>
	<!--panel-heading finish-->

	<!-- panel-collapse collpase-data begin -->
	<div class="panel-collpase collapse-data">

		<!--panel-body begin-->
		<div class="panel-body">

			<!-- input-group begin -->
			<div class="input-group">
				<input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-category" data-action="filter"
				placeholder="Filter Category">

				<!-- input-group-addon begin -->
				<a href="#" class="input-group-addon">
					<i class="fa fa-search"></i>
				</a>
				<!-- input-group-addon finish -->
			</div>
			<!-- input-group finish -->
		</div>
		<!--panel-body finish -->

		<!-- panel-body begin -->
		<div class="panel-body scroll-menu">	
			<!--nav nav-pills nav-stacked category-menu begin-->
			<ul class="nav nav-pills nav-stacked category-menu" id="dev-category">

				<?php

					$get_categories = "SELECT * FROM categories WHERE cat_top='yes'";
					$run_categories = mysqli_query($con,$get_categories);

					while ($row_categories=mysqli_fetch_array($run_categories)) {
						
						$cat_id = $row_categories['cat_id'];

						$cat_title = $row_categories['cat_title'];

						$cat_image = $row_categories['cat_image'];

						if ($cat_image == "") {
							
						}else{

							$cat_image = "<img src='admin_area/others_images/$cat_image' width='20px'>&nbsp;";

						}

						echo "

							<li class='checkbox checkbox-primary' style='background:#dddddd;'>
								
								<a>

									<label>
										<input ";

										if (isset($aCat[$cat_id])) {
											
											echo "checked='checked'";

										}

										echo "type='checkbox' class='get_cat' value='$cat_id'
										name='cat'>

									<span>
										$cat_image
										$cat_title
									</span>

									</label>

								</a>

							</li>
	
						";

					}

					$get_categories = "SELECT * FROM categories WHERE cat_top='no'";
					$run_categories = mysqli_query($con,$get_categories);

					while ($row_categories=mysqli_fetch_array($run_categories)) {
						
						$cat_id = $row_categories['cat_id'];

						$cat_title = $row_categories['cat_title'];

						$cat_image = $row_categories['cat_image'];

						if ($cat_image == "") {
							
						}else{

							$cat_image = "<img src='admin_area/others_images/$cat_image' width='20px'>&nbsp;";

						}

						echo "

							<li class='checkbox checkbox-primary'>
								
								<a>

									<label>
										<input ";

										if (isset($aCat[$cat_id])) {
											
											echo "checked='checked'";

										}

										echo "type='checkbox' class='get_cat' value='$cat_id' name='cat'>

									<span>
										$cat_image
										$cat_title
									</span>

									</label>

								</a>

							</li>
	
						";

					}

				?>

			</ul>
			<!--nav nav-pills nav-stacked categroy-menu finish-->

		</div>
		<!--panel-body finish-->

	</div>
	<!-- panel-collpase collpase-data finish -->

</div>
<!--panel panel-default sidebar-menu finish-->

<!--panel panel-default sidebar-menu begin-->
<div class="panel panel-default sidebar-menu">

	<!--panel-heading begin-->
	<div class="panel-heading">

		<h3>
			Product Categories 
		
			<!-- pull-right begin -->
			<div class="pull-right">
				<a href="#" class="text-dark">
					<span class="nav-toggle hide-show">
						Hide
					</span>
				</a>
			</div>
			<!-- pull-right finish -->

		</h3>

	</div>
	<!--panel-heading finish-->

	<!-- panel-collapse collpase-data begin -->
	<div class="panel-collpase collapse-data">

		<!--panel-body begin-->
		<div class="panel-body">

			<!-- input-group begin -->
			<div class="input-group">
				<input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-p-cat" 
				data-action="filter" placeholder="Filter Product Category">

				<!-- input-group-addon begin -->
				<a href="#" class="input-group-addon">
					<i class="fa fa-search"></i>
				</a>
				<!-- input-group-addon finish -->
			</div>
			<!-- input-group finish -->
		</div>
		<!--panel-body finish -->

		<!-- panel-body begin -->
		<div class="panel-body scroll-menu">	
			<!--nav nav-pills nav-stacked category-menu begin-->
			<ul class="nav nav-pills nav-stacked category-menu" id="dev-p-cat">

				<?php

					$get_p_cat = "SELECT * FROM product_categories WHERE p_cat_top='yes'";
					$run_p_cat = mysqli_query($con,$get_p_cat);

					while ($row_p_cat=mysqli_fetch_array($run_p_cat)) {
						
						$p_cat_id = $row_p_cat['p_cat_id'];

						$p_cat_title = $row_p_cat['p_cat_title'];

						$p_cat_image = $row_p_cat['p_cat_image'];

						if ($p_cat_image == "") {
							
						}else{

							$p_cat_image = "<img src='admin_area/others_images/$p_cat_image' width='20px'>&nbsp;";

						}

						echo "

							<li class='checkbox checkbox-primary' style='background:#dddddd;'>
								
								<a>

									<label>
										<input ";

										if (isset($aPcat[$p_cat_id])) {
											
											echo "checked='checked'";

										}

										echo "type='checkbox' class='get_p_cat' value='$p_cat_id' name='p_cat'>

									<span>
										$p_cat_image
										$p_cat_title
									</span>

									</label>

								</a>

							</li>
	
						";

					}

					$get_categories = "SELECT * FROM product_categories WHERE p_cat_top='no'";
					$run_categories = mysqli_query($con,$get_categories);

					while ($row_categories=mysqli_fetch_array($run_categories)) {
						
						$p_cat_id = $row_categories['p_cat_id'];

						$p_cat_title = $row_categories['p_cat_title'];

						$p_cat_image = $row_categories['p_cat_image'];

						if ($p_cat_image == "") {
							
						}else{

							$p_cat_image = "<img src='admin_area/others_images/$p_cat_image' width='20px'>&nbsp;";

						}

						echo "

							<li class='checkbox checkbox-primary'>
								
								<a>

									<label>
										<input ";

										if (isset($aPcat[$p_cat_id])) {
											
											echo "checked='checked'";

										}

										echo "type='checkbox' class='get_p_cat' value='$p_cat_id'
										name='p_cat'>

									<span>
										$p_cat_image
										$p_cat_title
									</span>

									</label>

								</a>

							</li>
	
						";

					}

				?>

			</ul>
			<!--nav nav-pills nav-stacked categroy-menu finish-->

		</div>
		<!--panel-body finish-->

	</div>
	<!-- panel-collpase collpase-data finish -->

</div>
<!--panel panel-default sidebar-menu finish-->