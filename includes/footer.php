<!--6th Lecture begin-->
<!--footer begin-->
<div id="footer">

	<!--container begin-->
	<div class="container">

		<!--row begin-->
		<div class="row">

			<!--col-sm-6 col-md-3 begin-->
			<div class="col-sm-6 col-md-3">
				
				<h4>Pages</h4>

				<ul>
					<li>
						<a href="cart.php">Shopping Cart</a>
					</li>
					<li>
						<a href="contact.php">Contact Us</a>
					</li>
					<li>
						<a href="shop.php">Shop</a>
					</li>
					<li>
						<a href="customer/my_account.php">My Account</a>
					</li>
				</ul>

				<hr>

				<h4>User Section</h4>

				<ul>
					<li>
						
						<?php

							if (!isset($_SESSION['customer_email'])) {
								
								echo "<a href='checkout.php'> Login </a>";

							}else{

								echo "<a href='customer/my_account.php?my_orders'> My Account </a>";

							}

						?>

					</li>
					<li>
						<a href="customer_register.php">Register</a>
					</li>
					<li>
						<a href="terms.php">Terms & Conditions</a>
					</li>
				</ul>

				<hr class="hidden-md hidden-lg hidden-sm">

			</div>
			<!--col-sm-6 col-md-3 finish-->

			<!--col-sm-6 col-md-3 begin-->
			<div class="col-sm-6 col-md-3">
				
				<h4>Top Products Categories</h4>

				<ul>
					<li>
						<a href="#">Jackets</a>
					</li>
					<li>
						<a href="#">Accessories</a>
					</li>
					<li>
						<a href="#">Coats</a>
					</li>
					<li>
						<a href="#">Shoes</a>
					</li>
					<li>
						<a href="#">T-Shirts</a>
					</li>
				</ul>

				<hr class="hidden-md hidden-lg">

			</div>
			<!--col-sm-6 col-md-3 finish-->

			<!--col-sm-6 col-md-3 begin-->
			<div class="col-sm-6 col-md-3">
				
				<h4>Find Us:</h4>

				<p>
					
					<strong>M-Dev Media Inc.</strong>
					<br>Cibubur
					<br>Ciracas
					<br>0818-0683-3157
					<br>mugianto4th@gmail.com
					<br><strong>MrGhie</strong>

				</p>

				<a href="contact.php">Check Our Contact Page</a>

			</div>
			<!--col-sm-6 col-md-4 finish-->

			<!--col-sm-6 col-md-4 begin-->
			<div class="col-sm-6 col-md-3">
				
				<h4>Get The News</h4>

				<p class="text-muted">
					Don't Miss Our Latest Updates
				</p>
				
				<!--form begin-->
				<form action="" method="post">

					<!--input-group begin-->
					<div class="input-group">
						
						<input type="text" name="email" class="form-control">

						<span class="input-group-btn">
							
							<input type="submit" value="Subcribe" class="btn btn-default">

						</span>

					</div>
					<!--input-group finish-->
					
				</form>
				<!--form finish-->

				<hr>

				<h4>Keep In Touch</h4>

				<p class="social">
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-instagram"></a>
					<a href="https://wa.me/923096438070?text=Hi, Man How Are You, Where You Work Now Days" class="fa fa-whatsapp"></a>
					<a href="#" class="fa fa-envelope"></a>
				</p>

			</div>
			<!--col-sm-6 col-md-4 finish-->

		</div>
		<!--row finish-->

	</div>
	<!--containe finish-->
</div>
<!--footer finish-->

<!--copyright area begin-->
<div id="copyright">

	<!--container begin-->
	<div class="container">

		<!--col-md-6 begin-->
		<div class="col-md-6">
			
			<p class="pull-left">&copy; 2019 Ecommerce Project All Rights Reserve</p>

		</div>
		<!--col-md-6 finish-->

		<!--col-md-6 begin-->
		<div class="col-md-6">
			
			<p class="pull-right">&copy; Theme by: <a href="#">Mirza Mahzaib</a></p>

		</div>
		<!--col-md-6 finish-->

	</div>
	<!--container finish-->

</div>
<!--copyright finish-->
<!--6th Lecture finish-->