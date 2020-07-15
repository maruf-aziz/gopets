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
<form class="form-horizontal" action="../Admin/module/kategori/aksi_simpan.php" method="post">
	<div class="box-body">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label" >Nama Kategori</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="namaKategori" name="namaKategori" placeholder="Nama Kategori">
		</div>
		</div>
			</div>

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