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
  <link rel="stylesheet" type="text/css" href="reservasi.css"> 
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
    <!-- <diV class="col-2"> 
      <img src=" " height="100px" width="100px"></div> -->
    <div class="col-20"> 
    <h3> Urutan Reservasi</h3> 
   <a type="submit" href="reservasi.php" class="btn btn-dark" >Kembali Ke Input Reservasi</a> <br>
  </div>  
  <!-- <diV class="col-2"> 
      <img src=" " height="100px" width="100px"></div><hr> -->
  
  <div class="row"> 
    <div class="col-6">  

<img src="assets/antri1.jpg" width="500px" height="400px"><br><br>
    </div>
    <div class="col-6">
     
  
<br>
<table class="table text-white" border="1solid"  bgcolor="#cc8733">
  <thead>
    <tr>
      <th scope="col">No_Reservasi</th>
      <th scope="col">Nama_Pelanggan</th> 
      <th scope="col">Waktu</th> 
      
     
    </tr>
  </thead> 
    <?php
                                include('koneksi.php');

                                $id = 0 ;

                                $sql  = "SELECT * FROM `antrian` INNER JOIN waktu ON antrian.id_waktu = waktu.id_waktu ; " ;
                                $query  = mysqli_query($connect, $sql);

                                while ($data = mysqli_fetch_array($query)) {

                                    $id++;
                            ?>
  <tbody>
         <tr>
                                    <td><?= $id ?></td>
                                    <td><?= $data['nama']; ?></td>
                                    <td><?= $data['waktu_mulai']; ?> - <?= $data['waktu_selesai']; ?> </td>
                      <td > 
      

                                </tr>

                            <?php 
                          } 
                          ?> 
                          </tbody>
      </table>     </center> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>   </html>
    