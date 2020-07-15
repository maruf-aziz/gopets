<?php 
 if (empty($_SESSION['namauser']
      ) AND empty($_SESSION['passuser'])) {
    echo "<center> untuk access module, anda harus login <br>";
    echo "<a href=index.php><b>LOGIN</b></a></center>";
  } else {
    include "../../../Lib/config.php";
    include "../../../Lib/koneksi.php";
    
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $path = "../../upload/".$nama_file;

    $idProduk = $_POST['id_produk'];
    $idKategori = $_POST['idKategori'];
    $idMerek = $_POST['idMerek'];
    $namaProduk = $_POST['namaProduk'];
    $deskripsi = $_POST['deskripsiProduk'];
    $hargaProduk = $_POST['hargaProduk'];
    $slide = $_POST['slide'];
    $rekomendasi = $_POST['rekomendasi'];
    
    if ($tipe_file == "image/jpeg" || $tipe_file == "image/png") {
        if ($ukuran_file <= 1000000) {
            if (move_uploaded_file($tmp_file, $path)) {
            $queryEdit = mysqli_query($koneksi, 
            "UPDATE tbl_produk SET
             id_kategori = '$idKategori',
             id_merek = '$idMerek',
             nama_produk='$namaProduk', 
             deskripsi = '$deskripsi', 
             harga = '$hargaProduk', 
             gambar = '$nama_file', 
             slide = '$slide', 
             rekomendasi = '$rekomendasi' 
             WHERE id_produk='$idProduk'");

            if ($queryEdit) {
        echo "<script>alert('Data Produk Berhasil Diubah'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
    }else{
echo "<script>alert('Data Produk Gagal Diubah'); window.location = '$admin_url'+'adminweb.php?module=edit_produk&id_produk='+'$idProduk';</script>";
    }

            }else{
                echo "<script>alert('Data Produk Gagal Masuk'); window.location='$admin_url'+'adminweb.php?module=edit_produk';</script>";
            }
        }else{
            echo "<script>alert('Data Gambar Produk Gagal dimasukkan, Ukuran melebihi 1Mb'); window.location='$admin_url'+'adminweb.php?module=edit_produk';</script>";
        }
    }else{
        echo "<script>alert('Data Gambar Produk Gagal dimasukkan, Format tidak didukung'); window.location='$admin_url'+'adminweb.php?module=edit_produk';</script>";
    }
    }
 ?>