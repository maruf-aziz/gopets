<?php 
if (empty($_SESSION['namauser']
      ) AND empty($_SESSION['passuser'])) {
		echo "<center> untuk access module, anda harus login <br>";
		echo "<a href=index.php><b>LOGIN</b></a></center>";
	} else{
		# code...
	
	include "../../../Lib/config.php";
	include "../../../Lib/koneksi.php";

	$namamerek = $_POST['namamerek'];

	if ($namamerek=="") {
		# code...
		echo "<script>alert('Nama Harus teriisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_merek';</script>";
	} else {
		# code...
	$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_merek (nama_merek) VALUES ('$namamerek')");

	if ($querySimpan) {
		echo "<script>alert('Data merek Has Been Added'); window.location = '$admin_url'+'adminweb.php?module=merek';</script>";
	}else{
		echo "<script>alert(Fail Adding Data'); window.location = '$admin_url'+'adminweb.php?module=tambah_merek';</script>";
	}}
	}
 ?>
