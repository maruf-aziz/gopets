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
            <h1>Jasa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">jasa</li>
            </ol>
            <a href="<?php echo $base_url; ?>jasa/jasaweb.php?module=tambah_user">
              <button class="btn btn-primary pull-left">Tambah jasa</button>
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
    <th>Jasa</th>
    <th>Biaya</th>
    <th style="width: 250px">Aksi</th>
  </tr>
    <?php 
      include "../lib/config.php";
      include "../lib/koneksi.php";

      $no=1;

      $kuerijasa=mysqli_query($koneksi, "SELECT * from jasa");
      while ($kat=mysqli_fetch_array($kuerijasa)) {

    ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $kat['jasa_nama']; ?></td>
    <td><?php echo $kat['jasa_biaya']; ?></td>
    <td>
      <div class="btn-group">
        <a href="<?php echo $jasa_url; ?>adminweb.php?module=edit_jasa&id_jasa=<?php echo $kat['id_jasa']; ?>"><button  class="btn btn-warning"><i class="fa fa-pencil">Edit</i></button></a>
        <a href="<?php echo $jasa_url; ?>module/jasa/aksi_hapus.php?id_jasa=<?php echo $kat['id_jasa']; ?>"> <button  onclick="return confirm('You Sure wanna Delete it?')" class="btn btn-danger "><i class='fa fa-poweroff'>Hapus</i></button></a>
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