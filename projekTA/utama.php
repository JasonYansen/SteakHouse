<!-- Memulai sebuah sesi dan memeriksa apakah pengguna sudah login -->
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
	<title>Halaman Utama</title> 
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"><!--bawaan boostrap--> 
     <link rel="stylesheet" type="text/css" href="utamaa.css"> 
</head> 

<body>
<nav>
  <p class="font-weight-bold"> DAGINGILA</p>
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
<header>
<center> 
     <br>   <br>      
   <img src="assets/LOGO.png" width="250px" height="250" class="rounded-circle">
	<h6></h6> 
  <p></p> 
   <p></p>
   <br>
   <h1 style="text-align:center; color:white; font-weight: bold;">Selamat datang di DAGINGILA!</h1>
 <br>  
   <br><br><br>
</center> 
</header>

<menu>    
<center>
  <h2>Menu</h2>
    <a>Pilih menu yang dibutuhkan</a>
</center> <br>

        <div class="container">  

   <div class="row">
            <div class="col-md"> 
              <div class="card"   >
 <a href="reservasi.php" style="text-decoration: none; color: black;"> 
  <img src="assets/reservation.png" class="card-img" style="height: 18.5rem;" alt="..." >
  <div class="card-body">
    <center><p class="card-text" style="font-weight: bold;">Reservasi</p></center> </a>

  </div>
</div>
            
          </div>
           <div class="col-md"> 
              <div class="card"    >
 <a  href="daftardaging.php" style="text-decoration: none; color: black;"> 
  <img src="assets/daging.png" class="card-img" style="height: 18.5rem;" alt="...">
  <div class="card-body">
    <center><p class="card-text" style="font-weight: bold;">Daftar Daging</p></center> </a>
  </div>
</div>
            
          </div> <div class="col-md"> 
              <div class="card">
 <a href="order.php" style="text-decoration: none; color: black;"> 
  <img src="assets/order.png" class="card-img" style="height: 18.5rem;" alt="..." >
  <div class="card-body">
    <center><p class="card-text" style="font-weight: bold;"> Order </p></center> </a>

  </div>
</div>
          
    <div class="container mt-5">
    	<div class="inputBox">
    	<div class="row align-items-center"> 
 
  <div class="col-6 align-items-center"> 

   </div></div> </div> </menu> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>