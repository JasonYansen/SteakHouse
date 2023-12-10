<?php 
	session_start();
	if (empty($_SESSION['username'])) {
  		header("Location:login.php?message=belum_login");
	}
?>

<?php
	include 'koneksi.php';

	// Use mysqli_real_escape_string or prepared statements to prevent SQL injection
	$namap = mysqli_real_escape_string($connect, $_POST['namap']); 
	$daging = mysqli_real_escape_string($connect, $_POST['daging']);

	$sql	= "INSERT INTO `order` (`namap`, `daging`) VALUES ('$namap', '$daging')";
	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

	if($query) {
		header("Location: order.php");
		exit();
	} else {
		echo "Input Data Gagal.";
	}
?>
