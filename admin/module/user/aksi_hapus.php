<?php 
	session_start();
	 #if (empty($_SESSION['namauser']
      #) AND empty($_SESSION['passuser'])) {
   # echo "<center> untuk access module, anda harus login <br>";
   # echo "<a href=../../index.php><b>LOGIN</b></a></center>";
  #}
	#else {
		include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	
	$id_user = $_GET['id_user'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM `user` WHERE `user`.`id_user` ='$id_user'");

	if ($queryHapus) {
		echo "<script>alert('Data Jasa Has Been Deleted'); window.location = '$admin_url'+'adminweb.php?module=user';</script>";
	}else{
		echo "<script>alert('Fail Deleting Data'); window.location = '$admin_url'+'adminweb.php?module=$id_user';</script>";}
	
?>