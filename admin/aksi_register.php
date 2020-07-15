<?php 
// mengaktifkan session pada php

 
// menghubungkan php dengan koneksi database
include '../lib/config.php';
include '../lib/koneksi.php';
 
// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$pass = md5($_POST['password']);
$lev = $_POST['level'];

$simpan = mysqli_query($koneksi, "INSERT INTO user (password , level_user, username) VALUES ('$pass','$lev','$email')");

if($simpan){
    echo "<script>alert('Register Sukses'); window.location = 'index.php';</script>";
}

else{
    echo "<script>alert('Register Sukses'); window.location = 'register.php';</script>";
}


?>