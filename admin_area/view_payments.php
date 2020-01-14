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
				<i class="fa fa-dashboard"></i> Dashboard / View Payments
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
					
					<i class="fa fa-tags"></i> View Payments

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
								<th>Invoice No</th>
								<th>Amount Paid</th>
								<th>Method</th>
								<th>Reference No</th>
								<th>Payment Code</th>
								<th>Payment Date</th>
								<th>Delete Payment</th>
							</tr>
						</thead>
						<!-- thead finish -->

						<!-- tbody begin -->
						<tbody>
							
							<?php 

								$i=0;

								$get_payments = "SELECT * FROM payments";

								$run_payments = mysqli_query($con,$get_payments);

								while ($row_payments=mysqli_fetch_array($run_payments)) {
									
									$payment_id = $row_payments['payment_id'];

									$invoice_no = $row_payments['invoice_no'];

									$amount = $row_payments['amount'];

									$payment_mode = $row_payments['payment_mode'];

									$ref_no = $row_payments['ref_no'];

									$code = $row_payments['code'];

									$payment_date = $row_payments['payment_date'];

									$i++;

								

							?>

							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $invoice_no; ?></td>
								<td><?php echo $amount; ?></td>
								<td>d<?php echo $payment_mode; ?></td>
								<td><?php echo $ref_no; ?></td>
								<td><?php echo $code; ?></td>
								<td><?php echo $payment_date; ?></td>
								<td>
									<a href="index.php?delete_payment=<?php echo $payment_id; ?>"
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