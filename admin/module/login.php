<?php 
// mengaktifkan session pada php

 
// menghubungkan php dengan koneksi database
include '../lib/config.php';
include '../lib/koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['Username'];
$pass = $_POST['Password'];
 
if (!ctype_alnum($username) or !ctype_alnum($pass)) {
		# code...
		echo "<center> Login Gagal!<br>
		username or password false.<br>
		";
		echo "<a href=index.php><b> Try Again</b></a></center>";
	}
	else
	{ 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * from user WHERE id_user='$username' AND password='$pass'");
$login1 =mysqli_query($koneksi, "SELECT * from admin WHERE username_admin='$username' AND password_admin='$pass'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
$ketemu = mysqli_num_rows($login1);
 if ($ketemu > 0) {
			# code...
			session_start();
			$_SESSION['namauser'] = $r['Username'];
			$_SESSION['passuser'] = $r['password'];
			header('location:adminweb.php?module');
		}
// cek apakah username dan password di temukan pada database
elseif($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level_user']=="admin"){
 
		// buat session login dan username
		session_start();
			$_SESSION['namauser'] = $r['Username'];
			$_SESSION['passuser'] = $r['password'];
			$_SESSION['level_user'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:adminweb.php?module");
 
	// cek jika user login sebagai user
	}elseif($data['level_user']=="user"){
		// buat session login dan username
		session_start();
			$_SESSION['namauser'] = $r['Username'];
			$_SESSION['passuser'] = $r['password'];
			$_SESSION['level_user'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:adminweb.php?module=petshop");
 
	// cek jika user login sebagai pengurus
	}else{
			echo "<center> Login Gagal!<br>
		username or password false.<br>
		";
		echo "<a href=index.php><b> Try Again</b></a></center>";
		}
	}	
else{
			echo "<center> Login Gagal!<br>
		username or password false.<br>
		";
		echo "<a href=index.php><b> Try Again</b></a></center>";
		}}
?>