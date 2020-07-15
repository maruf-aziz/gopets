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
            <h1 class="m-0 text-dark">Data Merek</h1>
  
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">merek</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="col-lg-3 col-6">
                <div class="input-group" style="width : 250px;">
                  <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
          </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="row">
          
        </div>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<div class="box-body table-responsive no-padding">	
<table class="table table-hover">
    <th>Merek</th>
    <th style="width: 200px">Aksi</th>
  </tr>
    <?php 
      include "../Lib/config.php";
      include "../Lib/koneksi.php";

      $kuerimerek=mysqli_query($koneksi, "SELECT * from tbl_merek");
      while ($kat=mysqli_fetch_array($kuerimerek)) {

    ?>
  <tr>
    <td><?php echo $kat['nama_merek']; ?></td>
    <td>
      <div class="btn-group">
        <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_merek&id_merek=<?php echo $kat['id_merek']; ?>"><button  class="btn btn-warning"><i class="fa fa-pencil">Edit</i></button></a>
        <a href="<?php echo $admin_url; ?>module/merek/aksi_hapus.php?id_merek=<?php echo $kat['id_merek']; ?>"> <button  onclick="return confirm('You Sure wanna Delete it?')" class="btn btn-danger "><i class='fa fa-poweroff'>Hapus</i></button></a>
      </div>
    </td>
  </tr>
<?php } ?>
</table>
<div class="box-footer">
              <a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_merek">
              <button class="btn btn-primary pull-right">Tambah Merek</button>
              </a>
            </div>
</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php } ?>