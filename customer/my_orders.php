

<!--center begin-->
<center>
	
	<h1>My Orders</h1>

	<p class="lead">Your Orders On One Place</p>

	<p class="text-muted">
		If You Have Any Questions, Feel  Free  To  <a href="../contact.php">Contact Us</a>. Our Customer Services Work <b>24/7</b>
	</p>

</center>
<!--center finish-->

<hr>

<!--table-responsive begin-->
<div class="table-responsive">
	
	<!--table table-bordered table-hover-->
	<table class="table table-bordered table-hover">
		
		<!--thead begin-->
		<thead>
			
			<!--tr begin-->
			<tr>
				
				<th>No:</th>
				<th>Due Amount:</th>
				<th>Invoice No:</th>
				<th>Qty:</th>
				<th>Size:</th>
				<th>Order Date:</th>
				<th>Paid / Unpaid:</th>
				<th>Status:</th>

			</tr>
			<!--tr finish-->

		</thead>
		<!--thead finish-->

		<!--tbody begin-->
		<tbody>

			<?php

			$customer_session = $_SESSION['customer_email'];

			$get_customer = "SELECT * FROM customers WHERE  customer_email='$customer_session'";

			$run_customer = mysqli_query($con,$get_customer);

			$row_customer = mysqli_fetch_array($run_customer);

			$customer_id = $row_customer['customer_id'];

			$get_orders = "SELECT * FROM customer_orders WHERE customer_id='$customer_id'";

			$run_orders = mysqli_query($con,$get_orders);

			$i = 0;

			while ($row_orders=mysqli_fetch_array($run_orders)) {
				
				$order_id = $row_orders['order_id'];

				$due_amount = $row_orders['due_amount'];

				$invoice_no = $row_orders['invoice_no'];

				$qty = $row_orders['qty'];

				$size = $row_orders['size'];

				$order_date = substr($row_orders['order_date'],0,11);

				$order_status = $row_orders['order_status'];

				$i++;

				if ($order_status=='Pending') {
					
					$order_status = 'Unpaid';

				}else{

					$order_status = 'Paid';

				}

			?>

			<!--tr begin-->
			<tr>
				
				<th><?php echo $i; ?></th>
				<td>$<?php echo $due_amount; ?></td>
				<td><?php echo $invoice_no; ?></td>
				<td><?php echo $qty; ?></td>
				<td><?php echo $size; ?></td>
				<td><?php echo $order_date; ?></td>
				<td><?php echo $order_status; ?></td>
				<td>
					<a href="confirm.php?order_id=<?php echo $order_id;?>" target="_blank" class="btn btn-primary btn-sm">Confirm Paid</a>
				</td>
								
			</tr>
			<!--tr finish-->

			<?php } ?>

		</tbody>
		<!--tbody finish-->

	</table>
	<!--table table-bordered table-hover-->

</div>
<!--table-responsive-->