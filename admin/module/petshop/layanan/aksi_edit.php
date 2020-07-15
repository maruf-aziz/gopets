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
	
	$idJaskir = $_POST['id_jaskir'];
	$namaJaskir = $_POST['nama_jaskir'];
	$queryEdit = mysqli_query($koneksi, "UPDATE tbl_jaskir SET nama_jasa='$nama_jasa' WHERE id_jaskir='$idJaskir'");

	if ($queryEdit) {
		echo "<script>alert('Data Jaskir Has Been Edited'); window.location = '$admin_url'+'adminweb.php?module=Jaskir';</script>";
	}else{
			echo "<script>alert('Fail Editing Data'); window.location = '$admin_url'+'adminweb.php?module=edit_jaskir&id_jaskir'+'$idJaskir';</script>";}
	}
?>