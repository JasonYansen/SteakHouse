<?php 
	session_start();
	if (empty($_SESSION['username'])) {
		header("Location:login.php?message=belum_login");
	}
?>

<?php
	include 'koneksi.php';


	$nama = $_POST['nama']; 
	$waktu= $_POST['waktu'];
	
	

	$sql	= "INSERT INTO antrian VALUES( id, '$nama', '$waktu')";
	$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));


	if($query) {
		header("Location:hasil_reservasi.php");
	} else {
		echo "Input Data Gagal.";
	}
	
?>