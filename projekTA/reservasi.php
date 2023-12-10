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
  <a><img src="assets/LOGO.png" width="50px"  class="rounded-circle"> DAGINGILA</a>
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
<br> <br> <br>


  <div class="inputBox">
<div class="container text-center">
  <div class="row">
    <div class="col-6">
     
    <br>

<img src="assets/antri1.png" width="500px" height="400px">
    </div>
    <div class="col-6"> 
      <center>
      <!-- Memungkinkan pengguna mengisi formulir reservasi dengan memasukkan nama dan waktu reservasi -->
    <form method="POST" action="proses_reservasi.php"> 
    <h3>Input Reservasi<hr></h3> 
    <a>Masukan Nama Pelanggan</a> 
<br><br>
<form>
    <div class="inputBox">
  <div class="row "> 
  <div class="col-12">
    <input type="text" class="form-control" placeholder="Nama_Pelanggan" name="nama"> 
  </div> 
  
   
    <div class="row g-3 "> 
  <div class="col-12">
    <select name="waktu" class="form-select" class=" navbar   navbar-expand-lg navbar-dark bg-dark" >
 
                          

                                    
                                    <?php
                                        include('koneksi.php');

                                        $sql2 = "SELECT * FROM waktu";
                                        $query  = mysqli_query($connect, $sql2);

                                        while ($data = mysqli_fetch_array($query)) {

                                    ?>

                                    <!-- PHP ACTION -->
                                
                                    <option type="time" value="
                                    <?php 
                                      echo $data['id_waktu'];
                                    ?>"> 
                                    <?= $data['waktu_mulai']; 
                                    ?> - <?= $data['waktu_selesai']; 
                                    ?> 
                                    </option>
                                    <?php } ?>

                                </select>
                            </div></div>
  </div> <br>
  <div class="row "> 
  <div class="col-12"> 
  <!-- Memungkinkan pengguna untuk mengirim formulir dan melihat antrian -->
  <input type="submit" class="form-control" value="submit">
  </div> <br><br>

  
</div>  
 </div>  
 <br>
<div class="row "> 
   
   <a type="submit" href="hasil_reservasi.php" class="btn btn-dark">Lihat Antrian </a> 
  </div> 

    </form>
  </center>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>   </html>