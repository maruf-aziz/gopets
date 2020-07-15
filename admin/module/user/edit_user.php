<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php 
  include "../Lib/config.php";
  include "../Lib/koneksi.php";
  
  $iduser = $_GET['id_user'];
  $queryEdit = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$iduser'");

  $hasilQuery = mysqli_fetch_array($queryEdit);
  $iduser = $hasilQuery['id_user'];
  $namauser = $hasilQuery['nama_user'];
  $emailuser = $hasilQuery['email_user'];
  $alamatuser=$hasilQuery['alamat_user'];
  $notlpuser=$hasilQuery['no_tlp_user'];
?>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form class="form-horizontal" action="../Admin/module/user/aksi_edit.php" method="post">
            <input type="hidden" name="id_user" value="<?php echo $iduser; ?>">  
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Nama User</label>
                <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Enter username" value="<?php echo $namauser;?>">
              </div>
              <div class="form-group">
                    <label for="InputEmail">Alamat Email</label>
                    <input type="email" class="form-control" id="email_user" name="email_user"  placeholder="Enter email" value="<?php echo $emailuser;?>">
                  </div>
              <div class="form-group">
                <label for="inputDescription">Alamat Lengkap</label>
                <textarea id="alamat_user" name="alamat_user"  class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Nomor Tellphone</label>
                <input type="text"class="form-control"
                id="no_tlp_user" name="no_tlp_user"  placeholder="Enter Phone Number"value="<?php echo $notlpuser;?>">
              </div>
              <div class="form-group">
      
    </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
         <div class="row">
        <div class="col-12">
          <input type="submit" value="Edit User" class="btn btn-success float-right">
        </div>
      </div>
        </div>
      </div>
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
