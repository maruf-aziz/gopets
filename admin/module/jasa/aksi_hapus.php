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
	
	$idjaskir = $_GET['id_jaskir'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_jaskir WHERE tbl_jaskir.id_jaskir='$idjaskir'");

	if ($queryHapus) {
		echo "<script>alert('Data Jasa Has Been Deleted'); window.location = '$admin_url'+'adminweb.php?module=JasKir';</script>";
	}else{
		echo "<script>alert('Fail Deleting Data'); window.location = '$admin_url'+'adminweb.php?module=$idjaskir';</script>";}
	}
?>