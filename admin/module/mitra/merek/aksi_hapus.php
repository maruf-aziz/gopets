<?php 
	session_start();
	if (empty($_SESSION['namauser']
      ) AND empty($_SESSION['passuser'])) {
		echo "<center> untuk access module, anda harus login <br>";
		echo "<a href=index.php><b>LOGIN</b></a></center>";
	}
	else {
		include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$idmerek = $_GET['id_merek'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_merek  WHERE id_merek='$idmerek'");

	if ($queryHapus) {
		echo "<script>alert('Data merek Has Been Deleted'); window.location = '$admin_url'+'adminweb.php?module=merek';</script>";
	}else{
		echo "<script>alert('Fail Deleting Data'); window.location = '$admin_url'+'adminweb.php?module=$idmerek';</script>";}
	}
?>