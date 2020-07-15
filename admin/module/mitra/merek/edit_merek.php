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
	
	$idmerek = $_GET['id_merek'];
	$queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_merek WHERE id_merek='$idmerek'");

	$hasilQuery = mysqli_fetch_array($queryEdit);
	$idmerek = $hasilQuery['id_merek'];
	$namamerek = $hasilQuery['nama_merek'];
?>
<form class="form-horizontal" action="../admin/module/merek/aksi_edit.php" method="post">
<input type="hidden" name="id_merek" value="<?php echo $idmerek; ?>">
<div class="box-body">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nama merek</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="namamerek" name="nama_merek" placeholder="Nama merek" 
			value="<?php echo $namamerek; ?>">
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