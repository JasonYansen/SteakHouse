<!DOCTYPE html>
<html>
<head> 

		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="loginn.css">
	<title>Login</title>
</head> 
<body>
	<div>
	<center>
				<div class="login" >
		<h2 class="center">Login Page</h2>
		<?php 
			if (isset($_GET['message'])) {
				if ($_GET['message'] == "failed") {
					echo "Login failed! Username atau Password salah.";
				}
				elseif ($_GET['message'] == "logout") {
					echo "Anda telah berhasil logout!";
				}
				elseif ($_GET['message'] == "belum_login") {
					echo "Anda belum login";
				}
			}
		 ?>  <hr>
		<form method="POST" action="login_proses.php">  
		
<div class="input-group">
<input type="text" placeholder="username"  name="username">
</div> 


<div class="input-group">	
<input type="text" placeholder="password"  name="password">
</div>

<div class="input-group">
<input type="submit"    name="submit">  
<br>
<br>
<a >Belum Punya akun?</a> <u> <a href="register.php" class="text-primary"> Daftar di sini</a></u>
</div> </div></form>
			
	</center> 
</div>
</body>
</html>