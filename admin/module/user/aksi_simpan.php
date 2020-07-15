<?php session_start();
	 #if (empty($_SESSION['namauser']
      #) AND empty($_SESSION['passuser'])) {
    #echo "<center> untuk access module, anda harus login <br>";
    #echo "<a href=/index.php><b>LOGIN</b></a></center>";
  #}
	#else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$id_user = $_POST['id_user'];
if ($id_user=="") {
	# code...
	echo "<script>alert('ID Harus teriisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_user';</script>";
} else {
	# code...
	$querySimpan = mysqli_query($koneksi, "INSERT INTO user(id_user) VALUES ('$id_user')");

	if ($querySimpan) {
		echo "<script>alert('Data Kategori Has Been Added'); window.location = '$admin_url'+'adminweb.php?module=user';</script>";
	}else{
		echo "<script>alert(Fail Adding Data'); window.location = '$admin_url'+'adminweb.php?module=tambah_user';</script>";
	}
}
#}
	
 ?>
