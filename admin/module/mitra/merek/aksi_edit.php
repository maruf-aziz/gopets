<?php 
	session_start();
	if (empty($_SESSION['namauser']
      ) AND empty($_SESSION['passuser'])) {
		echo "<center> untuk access module, anda harus login <br>";
		echo "<a href=index.php><b>LOGIN</b></a></center>";
	}
	else {
		include "../../../Lib/config.php";
	include "../../../Lib/koneksi.php";
	
	$idmerek = $_POST['id_merek'];
	$namamerek = $_POST['nama_merek'];

	if ($namamerek=="") {
		# code...
		echo "<script>alert('Nama Harus teriisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_merek';</script>";
	} else {
		# code...
	$queryEdit = mysqli_query($koneksi, "UPDATE tbl_merek SET nama_merek='$namamerek' WHERE id_merek='$idmerek'");

	if ($queryEdit) {
		echo "<script>alert('Data merek Has Been Edited'); window.location = '$admin_url'+'adminweb.php?module=merek';</script>";
	}else{
			echo "<script>alert('Fail Editing Data'); window.location = '$admin_url'+'adminweb.php?module=edit_merek&id_merek'+'$idmerek';</script>";}
	}}
	
	
?>