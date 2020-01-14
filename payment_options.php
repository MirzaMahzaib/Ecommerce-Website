 <!--box begin-->
<div class="box">

	<?php

		$session_email = $_SESSION['customer_email'];

		$select_customer = "SELECT * FROM customers WHERE customer_email='$session_email'";

		$run_customer = mysqli_query($con,$select_customer);

		$row_customer = mysqli_fetch_array($run_customer);

		$customer_id = $row_customer['customer_id'];

	?>
	
	<h1 class="text-center"> Payment Options For You </h1>

	<!--lead text-center begin-->
	<p class="lead text-center">
		
		<a href="order.php?c_id=<?php echo $customer_id; ?>"> Offline Payment </a>

	</p>
	<!--lead text-center finish-->

	<!--center begin-->
	<center>
		
		<!--lead begin-->
		<p class="lead">
			
			<a href="#">
				
				Paypall Payment

				<img src="images/paypall.jpg" class="img-responsive" alt="paypall_img">

			</a>

		</p>
		<!--lead finish-->

	</center>
	<!--center finish-->

</div>
<!--box finish-->