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
  <title>CHEF</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="chef.css"> 
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
  <div class="inputBox">
<div class="container text-center"> 
  <div class="row">  
     <div class="col-12"> 
      <h2>Daftar Chef</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-6">
     
  <img src="assets/josan.png" width="300px" height="300" class="rounded-circle">  
  <h4>Josan Batagor</h4>
</div>  
<div class="col-6">
     
  <img src="assets/fachrul.png" width="300px" height="300" class="rounded-circle">  
  <h4> Fachrul Kebab </h4>
</div> 




    </form>
  </center>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>   </html>