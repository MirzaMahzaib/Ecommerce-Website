<?php

	if (!isset($_SESSION['admin_email'])) {
		
		echo "<script>window.open('login.php','_self')</script>";

	}else{

?>

<?php

if (isset($_GET['delete_manufacturer'])) {
	
	$delete_manufacturer_id = $_GET['delete_manufacturer'];

	$delete_manufacturer = "DELETE FROM manufacturers WHERE manufacturer_id='$delete_manufacturer_id'";

	$run_delete_manufacturer = mysqli_query($con,$delete_manufacturer);

	if ($run_delete_manufacturer) {
		
		echo "<script>alert('One Of Your Manufacturer Has Been Deleted Successfully')</script>";

		echo "<script>window.open('index.php?view_manufacturers','_self')</script>";

	}

}

?>

<?php } ?>