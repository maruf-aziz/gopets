<?php session_start();
	 if (empty($_SESSION['namauser']
      ) AND empty($_SESSION['passuser'])) {
    echo "<center> untuk access module, anda harus login <br>";
    echo "<a href=index.php><b>LOGIN</b></a></center>";
  }
	else {
	include "../../../Lib/config.php";
	include "../../../Lib/koneksi.php";

	$namajasa = $_POST['nama_jasa'];
if ($namajasa=="") {
	# code...
	echo "<script>alert('Nama Harus teriisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_jaskir';</script>";
} else {
	# code...
	$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_jaskir (nama_jasa) VALUES ('$namajasa')");

	if ($querySimpan) {
		echo "<script>alert('Data Kategori Has Been Added'); window.location = '$admin_url'+'adminweb.php?module=JasKir';</script>";
	}else{
		echo "<script>alert(Fail Adding Data'); window.location = '$admin_url'+'adminweb.php?module=tambah_jaskir';</script>";
	}
}
}
	
 ?>
