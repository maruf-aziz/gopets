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
	
	$idproduk = $_GET['id_produk'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_produk  WHERE id_produk='$idproduk'");

	if ($queryHapus) {
		echo "<script>alert('Data produk Has Been Deleted'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
	}else{
		echo "<script>alert('Fail Deleting Data'); window.location = '$admin_url'+'adminweb.php?module=$idproduk';</script>";}
	}
?>