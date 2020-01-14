<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>

<!-- breadcrumb row begin -->
<div class="row	view_products_mt">
	<!-- col-lg-12 begin -->
	<div class="col-lg-12">
		<!-- breadcrumb begin -->
		<ol class="breadcrumb">
			<!-- active begin -->
			<li class="active">
				<i class="fa fa-dashboard"></i> Dashboard / View Users
			</li>
			<!-- active finish -->
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
					
					<i class="fa fa-tags"></i> View Users

				</h3>
				<!-- panel-title finish -->
			</div>
			<!-- panel-heading finish -->
			
			<!-- panel-body begin -->
			<div class="panel-body">
				<!-- table-responsive begin -->
				<div class="table-responsive">
					<!-- table table-striped table-bordered table-hover begin -->
					<table class="table table-striped table-bordered table-hover">
						
						<!-- thead begin -->
						<thead>
							<tr>
								<th>No</th>
								<th>User Name</th>
								<th>User Image</th>
								<th>User Email</th>
								<th>User Country</th>
								<th>User Job</th>
								<th>User Contact</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
						</thead>
						<!-- thead finish -->

						<!-- tbody begin -->
						<tbody>
							
							<?php 

								$i=0;

								$get_users = "SELECT * FROM admins";

								$run_users = mysqli_query($con,$get_users);

								while ($row_users=mysqli_fetch_array($run_users)) {
									
									$user_id = $row_users['admin_id'];

									$user_name = $row_users['admin_name'];

									$user_img = $row_users['admin_image'];

									$user_email = $row_users['admin_email'];

									$user_country = $row_users['admin_country'];

									$user_job = $row_users['admin_job'];

									$user_contact = $row_users['admin_contact'];

									$i++;

								

							?>

							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $user_name; ?></td>
								<td>
									<img src="../admin_area/admin_images/<?php echo $user_img; ?>" 
									width="50px">
								</td>
								<td>d<?php echo $user_email; ?></td>
								<td><?php echo $user_country; ?></td>
								<td><?php echo $user_job; ?></td>
								<td><?php echo $user_contact; ?></td>
								<td>
									<a href="index.php?user_edit=<?php echo $user_id; ?>"
									class="btn btn-success btn-sm">
										<i class="fa fa-pencil"></i> Edit
									</a>
								</td>
								<td>
									<a href="index.php?delete_user=<?php echo $user_id; ?>"
									class="btn btn-danger btn-sm">
										<i class="fa fa-trash-o"></i> Delete
									</a>
								</td>
								
							</tr>

							<?php } ?>

						</tbody>
						<!-- tbody finish -->

					</table>
					<!-- table table-striped table-bordered table-hover finish -->
				</div>
				<!-- table-responsive finish -->
			</div>
			<!-- panel-body finish -->
		</div>
		<!-- panel panel-default finish -->
	
	</div>
	<!-- col-lg-12 finish -->
</div>
<!-- panel row finish -->


















<?php } ?>