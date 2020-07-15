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
            <h1 class="m-0 text-dark">Data Jaskir</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jaskir</li>
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
	
	$idJaskir = $_GET['id_jaskir'];
	$queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_jaskir WHERE id_jaskir='$idJaskir'");

	$hasilQuery = mysqli_fetch_array($queryEdit);
	$idJaskir = $hasilQuery['id_jaskir'];
	$namaJaskir = $hasilQuery['nama_jasa'];
?>
<form class="form-horizontal" action="../admin/module/Jaskir/aksi_edit.php" method="post">
<input type="hidden" name="id_jaskir" value="<?php echo $idJaskir; ?>">
<div class="box-body">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label">Nama Jasa</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="namaJaskir" name="nama_jasa" placeholder="Nama Jasa" 
			value="<?php echo $namaJaskir; ?>">
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