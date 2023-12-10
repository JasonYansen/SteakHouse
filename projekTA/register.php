<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="register.css">
    <title></title>
</head>
<body>
    <?php
    include('koneksi.php');

    $query = "SELECT * FROM user";
    $result = mysqli_query($connect, $query);
    ?>
    <div>
        <center>
        <h3>Form Register</h3><br>
        <form role="form" action="insert_register.php" method="post" class="form-login">
            <div class="login">
            <div class="login-container">
            <div class="input-group">
<input type="text" placeholder="username"  name="username">
</div> 


<div class="input-group">	
<input type="text" placeholder="password"  name="password">
</div>
            <br>
            <div class="input-group">
            <input type="submit"    name="submit"> 
    </div>
            </div>
        </div>
        
        
        </form>
    </div>
    </center>
    <br>
    
</body>
</html> 