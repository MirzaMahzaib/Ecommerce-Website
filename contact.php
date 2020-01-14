<?php
$active='Contact';
include("includes/header.php");

?>

	<!--content begin-->
	<div id="content">
		
		<!--container begin-->
		<div class="container">
			
			<!--col-md-12 begin-->
			<div class="col-md-12">
				
				<ul class="breadcrumb">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						Contact Us
					</li>
				</ul>

			</div>
			<!--col-md-12 finish-->

			<!--col-md-12 begin-->
			<div class="col-md-12">
				<!--box begin-->
				<div class="box">
					
					<!--box-header begin-->
					<div class="box-header">

						<!--center begin-->
						<center>
							<h2>Feel Free To Contact Us</h2>

							<p class="text-muted">
								If You Have Any Question, Feel Free To Contact Us. Our Customer Service Work 
								<b>24/7</b>
							</p>
						</center>
						<!--center finish-->

						<!--form begin-->
						<form action="contact.php" method="post">
							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Name</label>

								<input type="text" name="name" required="required" class="form-control">

							</div>
							<!--form-group finish-->

							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Email</label>

								<input type="email" name="email" required="required" class="form-control">

							</div>
							<!--form-group finish-->

							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Subject</label>

								<input type="text" name="subject" required="required" class="form-control">

							</div>
							<!--form-group finish-->

							<!--form-group begin-->
							<div class="form-group">
								
								<label for="">Message</label>

								<textarea name="message" class="form-control"></textarea>

							</div>
							<!--form-group finish-->

							<!--text-center begin-->
							<div class="text-center">
								
								<button class="btn btn-primary" type="submit" name="submit">
									<i class="fa fa-user-md"></i> Send Message
								</button>

							</div>
							<!--text-center finish-->
						</form>
						<!--form finish-->

						<?php

						if (isset($_POST['submit'])) {

							/// Admin Received Message With This ///
							
							$sender_name = $_POST['name'];

							$sender_email = $_POST['email'];

							$sender_subject = $_POST['subject'];

							$sender_message = $_POST['message'];

							$receiver_email = "mahzaibmirza@gmail.com";

							mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);

							/// Auto Reply To Sender With This ///

							$email = $_POST['email'];

							$subject = "Welcome to my Website";

							$msg = "Thanks For Sending  Us Message. ASAP We Will Reply your Message";

							$from = "mahzaibmirza@gmail.com";

							mail($email,$subject,$msg,$from);

							echo "<script>alert('Your Message Has Sent Successfully')</script>";
						
						}

						?>

					</div>
					<!--box-header finish-->

				</div>
				<!--box finish-->

			</div>
			<!--col-md-9 finish-->

		</div>
		<!--container finish-->

	</div>
	<!--content finish-->







	<!--footer begin-->
	<?php
	include("includes/footer.php");
	?>
	<!--footer finish-->

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>    
</body>
</html>