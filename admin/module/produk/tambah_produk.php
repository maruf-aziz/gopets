<?php 

	 if (empty($_SESSION['namauser']
      ) AND empty($_SESSION['passuser'])) {
    echo "<center> untuk access module, anda harus login <br>";
    echo "<a href=index.php><b>LOGIN</b></a></center>";
  }
	else { ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data produk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">produk</li>
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
<form class="form-horizontal" action="../admin/module/produk/aksi_simpan.php"  method="post" enctype="multipart/form-data">
<div class="box-body">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
      <div class="col-sm-10">
        <select class="form-control" name="idKategori">
          <?php
          include "../Lib/koneksi.php";
          $kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
          while ($kat=mysqli_fetch_array($kueriKategori)){  
          ?>
          <option value="<?php echo $kat['id_kategori']; ?>">
            <?php echo $kat['nama_kategori']; ?>
            </option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Merek</label>
      <div class="col-sm-10">
        <select class="form-control" name="idMerek">
          <?php
          include "../Lib/koneksi.php";
          $kueriMerek = mysqli_query($koneksi,"SELECT * FROM tbl_merek");
          while($mer=mysqli_fetch_array($kueriMerek)){?>
          <option value="<?php echo $mer['id_merek']; ?>"><?php echo $mer['nama_merek']; ?></option>
          <?php } ?> 
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="namaProduk" name="namaProduk" placeholder="Nama Produk">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
      <div class="col-sm-10">
        <input type="file" id="gambar" name="gambar">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi Produk</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="deskripsiProduk" name="deskripsiProduk" placeholder="Deskripsi Produk">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control" id="hargaProduk" name="hargaProduk" placeholder="Harga Produk">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Slide</label>
      <div class="col-sm-10">
        <div class="radio">
          <label><input type="radio" name="slide" id="slide" value="Y">
            Ya
          </label>
        </div>
        <div class="radio">
          <label><input type="radio" name="slide" id="slide" value="N">
            Tidak
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Produk Rekomendasi</label>
      <div class="col-sm-10">
        <div class="radio">
          <label><input type="radio" name="rekomendasi" id="rekomendasi" value="Y">Ya</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="rekomendasi" id="rekomendasi" value="N">Tidak</label>
        </div>
      </div>
    </div>     
  <div class="box-footer">
    <button type="submit" class="btn btn-success pull-right">Simpan</button>
  </div>
</form>
</div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php } ?>