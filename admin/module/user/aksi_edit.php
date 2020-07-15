<?php 
	session_start();
	
	include "../../../Llb/config.php";
	include "../../../lib/koneksi.php";
	
	$iduser = $_POST['id_user'];
	$namauser = $_POST['nama_user'];
	$queryEdit = mysqli_query($koneksi, "UPDATE user SET nama_user='$nama_jasa' WHERE id_user='$iduser'");

	if ($queryEdit) {
		echo "<script>alert('Data User Has Been Edited'); window.location = '$admin_url'+'adminweb.php?module=user';</script>";
	}else{
			echo "<script>alert('Fail Editing Data'); window.location = '$admin_url'+'adminweb.php?module=edit_user&id_user'+'$iduser';</script>";}
?>