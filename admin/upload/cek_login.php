<?php 

//mengaktifkan session
	session_start();

//menghubungkan ke database
	include "../lib/koneksi.php";

	$username = $_POST['username'];
	$password = $_POST['password'];

//menyeleksi data user sesuai dengan username dan password yang sesuai
	$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");		

	$cek = mysqli_num_rows($login);

//cek apakah username dan password ditemukan
	if($cek >0){

		$data = mysqli_fetch_assoc($login);

		//user admin
		if($data['level']=='admin'){

			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";

			header("location:adminweb.php?module.home")

		//user petshop/mitra
		} else if($data['level']=="mitra"){

			$_SESSION['username'] = $username;
			$_SESSION['level'] = "mitra";

			header("location:adminweb.php?module.petshop")
		}
	}
 ?>