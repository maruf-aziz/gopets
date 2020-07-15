<?php 

	 //if (empty($_SESSION['namauser']
      //) AND empty($_SESSION['passuser'])) {
    //echo "<center> untuk access module, anda harus login <br>";
    //echo "<a href=index.php><b>LOGIN</b></a></center>";
  //}
	//else //{ ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data mitra</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">mitra</li>
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
<form class="form-horizontal" action="../admin/module/mitra/aksi_simpan.php"  method="post" enctype="multipart/form-data">
<div class="box-body">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
      <div class="col-sm-10">
        <select class="form-control" name="idKategori">
          <?php
          include "../lib/koneksi.php";
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
          include "../lib/koneksi.php";
          $kueriMerek = mysqli_query($koneksi,"SELECT * FROM tbl_merek");
          while($mer=mysqli_fetch_array($kueriMerek)){?>
          <option value="<?php echo $mer['id_merek']; ?>"><?php echo $mer['nama_merek']; ?></option>
          <?php } ?> 
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Nama mitra</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="namamitra" name="namamitra" placeholder="Nama mitra">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Gambar</label>
      <div class="col-sm-10">
        <input type="file" id="gambar" name="gambar">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Deskripsi mitra</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="deskripsimitra" name="deskripsimitra" placeholder="Deskripsi mitra">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
      <div class="col-sm-10">
        <input type="text"  class="form-control" id="hargamitra" name="hargamitra" placeholder="mitra">
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
      <label for="inputEmail3" class="col-sm-2 control-label">mitra Rekomendasi</label>
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
<?php //} ?>