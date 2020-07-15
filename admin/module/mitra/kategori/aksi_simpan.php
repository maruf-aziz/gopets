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

	$namaKategori = $_POST['namaKategori'];
	
	if ($namaKategori=="") {
		# code...
		echo "<script>alert('Nama Harus teriisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_kategori';</script>";
	}
	else{
		# code...
		$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_kategori (nama_kategori) VALUES ('$namaKategori')");
		if ($querySimpan) {
		echo "<script>alert('Data Kategori Has Been Added'); window.location = '$admin_url'+'adminweb.php?module=kategori';</script>";
	}else{
		echo "<script>alert('Fail Adding Data'); window.location = '$admin_url'+'adminweb.php?module=tambah_kategori';</script>";
	}}
}
 ?>
