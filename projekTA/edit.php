<?php 
session_start();
if (empty($_SESSION['username'])) {
	header("Location:login.php?message=belum_login");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pelanggan</title>
</head>
<body>
	<?php 
	// Query untuk Mengambil Data
		include 'koneksi.php';
		$id_order = $_GET['id_order'];
		$query = mysqli_query($connect,"SELECT * from `order` where id_order=$id_order");
		$data = mysqli_fetch_array($query);

	 ?>
	<!-- Formulir Update -->
	 <form method="POST" action="update.php">
	 	<input type="hidden" name="id_order" value="<?= $data['id_order'];?>"> <br>
	 	Nama		:<br><input type="text" name="namap" value="<?= $data['namap'];?>"><br>
	 	Daging		:<br><input type="text" name="daging" value="<?= $data['daging'];?>"><br>
	 
	 	<input type="submit" name="submit">
	 </form>
</body>
</html>