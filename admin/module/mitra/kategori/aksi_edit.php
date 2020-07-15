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
	
	$idKategori = $_POST['id_kategori'];
	$namaKategori = $_POST['nama_kategori'];
	if ($namaKategori=="") {
		# code...
		echo "<script>alert('Nama Harus teriisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_kategori';</script>";
	} else {
		# code...
		$queryEdit = mysqli_query($koneksi, "UPDATE tbl_kategori SET nama_kategori='$namaKategori' WHERE id_kategori='$idKategori'");

	if ($queryEdit) {
		echo "<script>alert('Data Kategori Has Been Edited'); window.location = '$admin_url'+'adminweb.php?module=kategori';</script>";
	}else{
			echo "<script>alert('Fail Editing Data'); window.location = '$admin_url'+'adminweb.php?module=edit_kategori&id_kategori'+'$idKategori';</script>";}
	}
	}
	
	
?>