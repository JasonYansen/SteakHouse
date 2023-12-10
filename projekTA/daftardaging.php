<?php 
  session_start();
  if (empty($_SESSION['username'])) {
    header("Location:login.php?message=belum_login");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar daging</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"><!--bawaan boostrap--> 
    <link rel="stylesheet" type="text/css" href="daging.css">
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
<br> <br> <br>
<header class="masthead  text-white text-center"> 
            <div class="container ">
              <br>
               <img src="assets/LOGO.png" width="300px" height="300" class="rounded-circle">
                <p></p>
                <br>
                <h1 class="masthead-heading  text-uppercase mb-0" style="font-weight: bold;" >Daftar Daging</h1>
                <br>
            </div> 
            
        </header> 
        <menu>  
        <div class="container"> 
          
          <div class="row">
            <div class="col-md"> 
              <div class="card"  >
  <img src="assets/sirloin.png" class="card-img" style="height: 18.5rem;" alt="...">
  <div class="card-body" >
    <p class="card-text">Sirloin</p>
     <p class="text-danger">Rp500.000</p>
  </div>
</div>
            
          </div>
           <div class="col-md"> 
              <div class="card"   >
  <img src="assets/ribeye.png" class="card-img-top" style="height: 18.5rem;" alt="...">
  <div class="card-body">
    <p class="card-text">Rib eye</p> 
     <p class="text-danger">Rp1.000.000</p>
  </div>
</div>
            
          </div> <div class="col-md"> 
              <div class="card">
  <img src="assets/tenderloin.png" class="card-img" style="height: 18.5rem;" alt="...">
  <div class="card-body">
    <p class="card-text">Tenderloin</p> 
     <p  class="text-danger">Rp750.000</p> 
  </div>
</div>
            
          </div><br>        </div> <br> <br><div class="row">
            <div class="col"> 
              <div class="card"  >
  <img src="assets/saikoro.png" class="card-img-top" style="height: 16.5rem;"alt="...">
  <div class="card-body">
    <p class="card-text">Saikoro</p>
     <p class="text-danger">Rp1.500.000</p>
  </div>
</div>
            
          </div>
           <div class="col-md"> 
              <div class="card" >
  <img src="assets/wagyu.png" class="card-img-top" style="height: 16.5rem;" alt="...">
  <div class="card-body">
    <p class="card-text">Wagyu</p>
     <p class="text-danger">Rp400.000</p>
  </div>
</div>
            
          </div> <div class="col-md"> 
              <div class="card" >
  <img src="assets/striploin.png" class="card-img-top" style="height: 16.5rem;"alt="...">
  <div class="card-body">
    <p class="card-text">Striploin New York</p>
     <p class="text-danger">Rp1.200.000</p>
  </div>
</div>
            
          </div>
        </div></div></menu>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>