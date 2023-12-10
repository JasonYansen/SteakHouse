<?php 
session_start();
if (empty($_SESSION['username'])) {
  header("Location:login.php?message=belum_login");
}
?>

<!-- Menghapus pesanan berdasarkan id_order yang diberikan -->
<?php
session_start();
if (empty($_SESSION['username'])) {
    header("Location:login.php?message=belum_login");
}

include 'koneksi.php';

if (isset($_GET['id_order'])) {
    $id_order = $_GET['id_order'];

    $query = mysqli_query($connect, "DELETE FROM `order` WHERE id_order=$id_order");

    if ($query) {
        header("location:order.php");
        exit();
    } else {
        echo "Error proses delete: " . mysqli_error($connect);
    }
} else {
    echo "No id_order parameter found in the URL";
}
?>


