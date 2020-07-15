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
            <h1>produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">produk</li>
            </ol>
            
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
                                    <th>Produk</th>
                                    <th>Merek Produk</th>
                                    <th>Jenis Produk</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th style="width: 110px">Aksi</th>
                                </tr>
    <?php 
      include "../lib/config.php";
      include "../lib/koneksi.php";

      $no=1;

      $kueriproduk=mysqli_query($koneksi, "SELECT * from produk");
      while ($kat=mysqli_fetch_array($kueriproduk)) {

    ?>
 <tr>
    <td><?php echo $pro['nama_produk']; ?></td>
    <td><?php echo $pro['merek_produk']; ?></td>
    <td><?php echo $pro['jenis_produk']; ?></td>
    <td><img width="100px" height="100px" src="upload/<?php echo $pro['gambar'] ?>"></td>
    <td><?php echo $pro['deskripsi']; ?></td>
    <td><?php echo $pro['harga']; ?></td>
    <td>
      <div class="btn-group">
        <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_produk&id_produk=<?php echo $pro['id_produk']; ?>"><button  class="btn btn-warning"><i class="fa fa-pencil">Edit</i></button></a>
        <a href="<?php echo $admin_url; ?>module/produk/aksi_hapus.php?id_produk=<?php echo $pro['id_produk']; ?>"> <button  onclick="return confirm('You Sure wanna Delete it?')" class="btn btn-danger "><i class='fa fa-poweroff'>Hapus</i></button></a>
      </div>
    </td>
  </tr>
<?php } ?>
</table>
<a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_produk">
              <button class="btn btn-primary pull-left">Tambah produk</button>
              </a>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
    </div>
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->