<?php 
  session_start();
  if (empty($_SESSION['username'])) {
    header("Location:login.php?message=belum_login");
  }
?>

<!DOCTYPE html>
<html>
<head> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>CREATE</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="order.css"> 
</head>
<body> 
<nav>
  <a><img src="assets/LOGO.png" width="50px"  class="rounded-circle">
  DAGINGILA</a>
            </a>
            <ul>
                <li><a href="utama.php">Home</a></li>
                <li><a href="reservasi.php">Reservasi</a></li>
                <li><a href="daftardaging.php" >Daging</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="chef.php">Chef</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
</nav>    
<br> <br> <br> <br>



  <div class="inputBox">
<div class="container text-center">
  <div class="row">
    <div class="col-5">
     
    <br>
    <!-- Menampilkan daftar pesanan dalam tabel -->
<table class="table text-white" border="1solid"  bgcolor="#cc8733">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th> 
       <th scope="col">Daging</th>
    <th colspan="2">opsi</th>
    </tr>
  </thead>
  <tbody>
        <?php
      include('koneksi.php');
      $no=1;
      $sql  = "SELECT * FROM `order`";
      $query  = mysqli_query($connect, $sql);
      
      if (!$query) {
        die("Error in SQL query: " . mysqli_error($connect));
    }
    
    while ($data = mysqli_fetch_array($query)) {
      ?>
      <tr>
      <th scope="row"><?= $no ?></th>
        <td><?= $data['namap']; ?></td> 
       <td><?= $data['daging']; ?></td> 
      <td>
            <a type="submit" href="edit.php? id_order=<?= $data['id_order'];?>" class="btn btn-success">Edit</a>
            <a type="submit" href="hapus.php? id_order=<?= $data['id_order'];?>" class="btn btn-danger " >Delete</a> 
       </td>
      
    </tr>

      <?php $no++; } ?>


  




    </tbody>
      </table>
    

      
    </div> <br>
    <div class="col-2"> <br><br>
      
    </div>
    <div class="col-5"> 
      <center>
      <!-- Memungkinkan pengguna untuk menambahkan pesanan baru -->
    <form method="POST" action="proses_order.php" >
    <h3>Input Daging<hr></h3> 
    <a>Masukan Nama dan Daging</a> 
<br><br>
<form>
    <div class="inputBox">
  <div class="row g-3"> 
  <div class="col-12">
    <input type="text" class="form-control" placeholder="Nama Pelanggan" name="namap"> 
  </div> 
  <br><br> 
  <div class="row g-3"> 
  <div class="col-12">
    <input type="text" class="form-control" placeholder="Nama Daging" name="daging"> 
  </div> 
  <div class="row g-3"> 
  <div class="col-12"> 
  <!-- Mengirimkan formulir untuk diproses -->
  <input type="submit" class="form-control" value="submit">
  </div> 

  
</div>  </div>
    </form> 

  </center>  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body> 
</html>