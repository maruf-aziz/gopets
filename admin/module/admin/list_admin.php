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
            <h1>admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">admin</li>
            </ol>
            <a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_user">
              <button class="btn btn-primary pull-left">Tambah admin</button>
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
  <tr><th style="width: 150px">no</th>
    <th>Nama</th>
    <th>Email</th>
    <th style="width: 250px">Aksi</th>
  </tr>
    <?php 
      include "../lib/config.php";
      include "../lib/koneksi.php";

      $no=1;

      $kueriadmin=mysqli_query($koneksi, "SELECT * from user");
      while ($kat=mysqli_fetch_array($kueriadmin)) {

    ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $kat['nama_user']; ?></td>
    <td><?php echo $kat['username']; ?></td>
    <td>
        <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_admin&id_admin=<?php echo $kat['id_user']; ?>"><button  class="btn btn-warning"><i class="fa fa-pencil">Edit</i></button></a>
        <a href="<?php echo $admin_url; ?>module/admin/aksi_hapus.php?id_admin=<?php echo $kat['id_user']; ?>"> <button  onclick="return confirm('You Sure wanna Delete it?')" class="btn btn-danger "><i class='fa fa-poweroff'>Hapus</i></button></a>
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