<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <?php 
     include "../lib/config.php";
    include "../lib/koneksi.php";?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>mitra</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">mitra</li>
            </ol>
            <a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_mitra">
              <button class="btn btn-primary pull-left">Tambah mitra</button>
              </a>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            <table class="table table-hover">
  <tr>
    <th>Nama</th>
    <th>No Telp</th>
    <th>Alamat</th>
    <th>Email</th>
    <th style="width: 250px">Aksi</th>
  </tr>
    <?php 
      include "../lib/config.php";
      include "../lib/koneksi.php";

      $no=1;

      $kueriuser=mysqli_query($koneksi, "SELECT * from mitra");
      while ($kat=mysqli_fetch_array($kueriuser)) {

    ?>
  <tr>
    <td><?php echo $kat['mitra_nama']; ?></td>
    <td><?php echo $kat['mitra_no_telp']; ?></td>
    <td><?php echo $kat['mitra_alamat']; ?></td>
    <td><?php echo $kat['mitra_email']; ?></td>
    <td>
      <div class="btn-group">
        <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_mitra&id_mitra=<?php echo $kat['id_mitra']; ?>"><button  class="btn btn-warning"><i class="fa fa-pencil">Edit</i></button></a>
        <a href="<?php echo $admin_url; ?>module/mitra/aksi_hapus.php?id_jaskir=<?php echo $kat['id_user']; ?>"> <button  onclick="return confirm('You Sure wanna Delete it?')" class="btn btn-danger "><i class='fa fa-poweroff'>Hapus</i></button></a>
      </div>
    </td>
  </tr>
<?php } ?>
</table>
        <!-- /.card-footer -->
      </div>
    </div>
  </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->