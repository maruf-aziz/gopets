<?php 
// mengaktifkan session pada php

 
// menghubungkan php dengan koneksi database
// include '../lib/config.php';
include '../lib/koneksi.php';
 
// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$pass = md5($_POST['password']);


$login = mysqli_query($koneksi, "select * from user where username='$email' and password = '$pass' ");

$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);

if ($ketemu > 0) {
	session_start();
	$_SESSION['namauser'] = $r['username'];
	$_SESSION['name'] = $r['nama_user'];
	$_SESSION['user'] = $r['id_user'];
	$_SESSION['passuser'] = $r['password'];
	$_SESSION['level'] = $r['level_user'];

	$level = $r['level_user'];

	if($level == 'admin'){
		// echo "admin";

		header('location:adminweb.php?module=home');
	}

	else if($level == 'mitra'){
		echo "mitra";
	}

	else if($level == 'klinik'){
		echo "klinik";
	}

	else if($level == 'dokter'){
		echo "dokter";
	}

	else if($level == 'user'){
		echo "user";
	}	
}
else{
	echo "<center>LOGIN GAGAL! <br>
	Username atau Password Salah. <br>
	Atau account anda sedang di blokir.<br>";

	echo "<a href=index.php><b>ULANGI LAGI !</b></a></center>";
}

?>