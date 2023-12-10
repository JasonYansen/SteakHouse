<?php 
session_start();
if (empty($_SESSION['username'])) {
  header("Location:login.php?message=belum_login");
}
?>

<!-- Proses Pembaruan Data -->
<?php
include 'koneksi.php';

$id_order	 = $_POST['id_order'];
$namap	     = $_POST['namap'];
$daging = $_POST['daging'];


$sql	= "UPDATE `order` SET `namap`='$namap', `daging`='$daging'  WHERE `id_order`='$id_order'";

$query	= mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
	echo "Input Data Berhasil.";
} else {
	echo "Input Data Gagal.";
}

if ($query) {
	header("location: order.php");
} else {
	echo "Input Data Gagal";
}
