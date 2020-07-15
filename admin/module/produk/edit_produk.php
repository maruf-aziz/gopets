<?php 

	 if (empty($_SESSION['namauser']
      ) AND empty($_SESSION['passuser'])) {
    echo "<center> untuk access module, anda harus login <br>";
    echo "<a href=index.php><b>LOGIN</b></a></center>";
  }
	else { ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data merek</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">merek</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<div class="box-body table-responsive no-padding">	
<?php 
  include "../Lib/config.php";
  include "../Lib/koneksi.php";
  
  $idProduk = $_GET['id_produk'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk='$idProduk'");
  $hasilQuery = mysqli_fetch_array($queryEdit);
  
  $idProduk = $hasilQuery['id_produk'];
  $idKategori = $hasilQuery['id_kategori'];
  $idMerek = $hasilQuery['id_merek'];
  $namaProduk = $hasilQuery['nama_produk'];
  $gambar = $hasilQuery['gambar'];
  $deskripsi = $hasilQuery['deskripsi'];
  $hargaProduk = $hasilQuery['harga'];
  $slide = $hasilQuery['slide'];  
  $rekomendasi = $hasilQuery['Rekomendasi'];
?>
<form class="form-horizontal" action="../admin/module/produk/aksi_edit.php"  method="post" enctype="multipart/form-data">
<input type="hidden" name="id_produk" value="<?php echo $idProduk; ?>">
<div class="box-body">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
      <div class="col-sm-10">
        <select class="form-control" name="idKategori">
            <?php
            $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
            while ($kat=mysqli_fetch_array($kueriKategori)){  
            ?>
          <option 
          value="<?php echo $kat['id_kategori']; ?>"
          <?php 
          if ($idKategori == $kat['id_kategori']) {
            echo 'selected';
          }
           ?>>
            <?php echo $kat['nama_kategori']; ?>
          </option>
            <?php } ?>
        </select>
      </div>
    </div> <!-- /.kategori -->
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Merek</label>
      <div class="col-sm-10">
        <select class="form-control" name="idMerek">
            <?php
            $kueriMerek = mysqli_query($koneksi,"SELECT * FROM tbl_merek");
            while($mer=mysqli_fetch_array($kueriMerek)){
            ?>
          <option value="<?php echo $mer['id_merek']; ?>"
          <?php 
          if ($idMerek == $mer['id_merek']) {
            echo 'selected';
          }
           ?>>
            <?php echo $mer['nama_merek']; ?>
          </option>
            <?php } ?> 
        </select>
      </div>
    </div> <!-- /.Merek -->
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Nama Produk" value="<?php echo $namaProduk; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label" value="<?php echo $gambar; ?>">Gambar</label>
      <div class="col-sm-10">
        <img width="100px" height="100px" src="upload/<?php echo $gambar ?>">
        <input type="file" id="gambar" name="gambar">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi Produk</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="deskripsiProduk" name="deskripsiProduk" placeholder="Deskripsi Produk" value="<?php echo $deskripsi; ?>" >
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control" id="hargaProduk" name="hargaProduk" placeholder="Harga Produk" value="<?php echo $hargaProduk; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Slide</label>
      <div class="col-sm-10">
        <div class="radio">
          <label><input type="radio" name="slide" id="slide" value="Y" <?php echo ($slide == 'Y') ? "checked": ""; ?> >
            Ya
          </label>
        </div>
        <div class="radio">
          <label><input type="radio" name="slide" id="slide" value="N" <?php echo ($slide == 'N') ? "checked": ""; ?> >
            Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Produk Rekomendasi</label>
      <div class="col-sm-10">
        <div class="radio">
          <label><input type="radio" name="rekomendasi" id="rekomendasi" value="Y" <?php echo ($rekomendasi == 'Y') ? "checked": ""; ?>>Ya</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="rekomendasi" id="rekomendasi" value="N" <?php echo ($rekomendasi == 'N') ? "checked": ""; ?>>Tidak</label>
        </div>
      </div>
    </div>     
  <div class="box-footer">
    <button type="submit" class="btn btn-danger pull-right">Simpan</button>
  </div>
</form>
</div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php } ?>