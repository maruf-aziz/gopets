<?php 
	session_start();
	 if (empty($_SESSION['namauser']
      ) AND empty($_SESSION['passuser'])) {
    echo "<center> untuk access module, anda harus login <br>";
    echo "<a href=index.php><b>LOGIN</b></a></center>";
  }else{
 	include "../../../Lib/config.php";
	include "../../../Lib/koneksi.php";

	$nama_file = $_FILES['gambar']['name'];
	$ukuran_file = $_FILES['gambar']['size'];
	$tipe_file = $_FILES['gambar']['type'];
	$tmp_file = $_FILES['gambar']['tmp_name'];
	
	$idKategori = $_POST['idKategori'];
	$idMerek = $_POST['idMerek'];
	$namaProduk = $_POST['namaProduk'];
	$deskripsi = $_POST['deskripsiProduk'];
	$hargaProduk = $_POST['hargaProduk'];
	$slide = $_POST['slide'];
	$rekomendasi = $_POST['rekomendasi'];


	if ($namaProduk=="") {
		# code...
		echo "<script>alert('Nama Harus teriisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_produk';</script>";
	}elseif ($deskripsi=="") {
		# code...
		echo "<script>alert('deskripsi Harus teriisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_produk';</script>";
	} 
	elseif ($hargaProduk=="") {
		# code...
		echo "<script>alert('Harga Harus teriisi'); window.location = '$admin_url'+'adminweb.php?module=tambah_produk';</script>";
	}
	elseif (!is_numeric($hargaProduk)) {
		# code...
		echo "<script>alert('Harga harus terisi dengan nomor '); window.location = '$admin_url'+'adminweb.php?module=tambah_produk';</script>";
	}
	else {
		# code...
		$path = "../../upload/".$nama_file;
	if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
		if ($ukuran_file <= 1000000) {
			if (move_uploaded_file($tmp_file, $path)) {
				$querySimpan = mysqli_query($koneksi, 
					"INSERT INTO tbl_produk (id_kategori, id_merek, nama_produk, deskripsi, harga, gambar, slide, rekomendasi) 
					VALUES ('$idKategori','$idMerek','$namaProduk','$deskripsi','$hargaProduk','$nama_file','$slide','$rekomendasi')" );
				echo "<script>alert('Picture for Product Data has been Added'); window.location='$admin_url'+'adminweb.php?module=produk';</script>";
			}else{
				echo "<script>alert('Data Produk Gagal Masuk'); window.location='$admin_url'+'adminweb.php?module=tambah_produk';</script>";
			}
		}else{
			echo "<script>alert('Picture for Product Data Can't be Added, Oversize (Must 1MB)'); window.location='$admin_url'+'adminweb.php?module=tambah_produk';</script>";
		}
	}else{
		echo "<script>alert('Picture for Product Data Can't be Added, the Format not jpeg'); window.location='$admin_url'+'adminweb.php?module=tambah_produk';</script>";
	}
	}
	
	
}
 ?>
