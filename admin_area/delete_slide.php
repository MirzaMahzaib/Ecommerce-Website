<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>

<?php

if (isset($_GET['delete_slide'])) {
	
	$delete_slide_id = $_GET['delete_slide'];

	$delete_slide = "DELETE FROM slider WHERE slide_id='$delete_slide_id'";

	$run_delete_slide = mysqli_query($con,$delete_slide);

	if ($run_delete_slide) {
		
		echo "<script>alert('One Of Your Slide Has Been Deleted Successfully')</script>";

		echo "<script>window.open('index.php?view_slides','_self')</script>";

	}

}

?>

<?php } ?>