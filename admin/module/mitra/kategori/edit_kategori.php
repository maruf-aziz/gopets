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
            <h1 class="m-0 text-dark">Data Kategori</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kategori</li>
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
	
	$idKategori = $_GET['id_kategori'];
	$queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori='$idKategori'");

	$hasilQuery = mysqli_fetch_array($queryEdit);
	$idKategori = $hasilQuery['id_kategori'];
	$namaKategori = $hasilQuery['nama_kategori'];
?>
<form class="form-horizontal" action="../admin/module/kategori/aksi_edit.php" method="post">
<input type="hidden" name="id_kategori" value="<?php echo $idKategori; ?>">
<div class="box-body">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nama Kategori</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="namaKategori" name="nama_kategori" placeholder="Nama Kategori" 
			value="<?php echo $namaKategori; ?>">
		</div>
	</div>
</div>	<!-- /.box body-->
	<div class="box-footer">
		<button type="submit" class="btn btn-primary pull-right">SIMPAN</button>
	</div>
</form>
</div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php } ?>