<?php
include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "INSERT INTO user (username, password) VALUES('$username','$password')";
if(mysqli_query($connect , $query)){
    header("location:login.php");
}
else{
    echo "ERROR, silahkan coba lagi". mysqli_error($connect);
}

mysqli_close($connect);
?>