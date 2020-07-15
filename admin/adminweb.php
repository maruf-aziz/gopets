<?php session_start()
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Go-Pets| Admin's Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="asset/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="asset/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="asset/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-orange navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="adminweb.php?module=home" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

   <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
       <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    </ul>
  </nav>  <!-- /.navbar -->
<<?php 
include '../lib/koneksi.php'; ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="adminweb.php?module=home" class="brand-link">
      <img src="asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Go-Pets</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['name']; ?> as <?php echo $_SESSION['level']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
         <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
     <nav>
          <li class="nav-item">
            <a href="adminweb.php?module=home" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="adminweb.php?module=admin" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Admin
              </p>
            </a>
          </li>
              <li class="nav-item">
            <a href="adminweb.php?module=user" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Mitra</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                <a href="adminweb.php?module=mitra" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Mitra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adminweb.php?module=kategori" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adminweb.php?module=merek" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>merek</p>
                </a>
              </li>
                  <li class="nav-item">
                <a href="adminweb.php?module=produk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Produk</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="adminweb.php?module=layanan" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Layanan</p>
                </a>
              </li>
            </ul>
          </li>
      
          <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Pet'S Shop</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="adminweb.php?module=petshop" class="nav-link"><i class="far fa-circle nav-icon"></i>
                  <p>List Petshop</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adminweb.php?module=grooming" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Grooming</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="adminweb.php?module=klinik" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Klinik</p>
                </a>
              </li>
             
              
            </ul>
               <li class="nav-item">
                <a href="adminweb.php?module=jasa" class="nav-link">
                  <i class=">nav-icon fas fa-book"></i>
                  <p>Jasa</p>
                </a>
              </li>
            <li class="nav-item">
                <a href="adminweb.php?module=konsultasi" class="nav-link">
                  <i class="nav-icon far fa-envelope"></i>
                  <p>Konsultasi</p>
                </a>
              </li>
            <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
   </nav>
     
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <?php 
  if ($_GET['module']=='home') 
    {include "module/home/home.php";
    }
     elseif ($_GET['module']=='admin') {
	include "module/admin/list_admin.php";}
    elseif ($_GET['module']=='tambah_admin') 
    {include "module/admin/tambah_admin.php";}
  elseif ($_GET['module']=='edit_admin') 
    {include "module/admin/edit_admin.php";
    }##Admin
     elseif ($_GET['module']=='mitra') {
  include "module/mitra/list_mitra.php";}
    elseif ($_GET['module']=='tambah_mitra') 
    {include "module/mitra/tambah_mitra.php";
    }
  elseif ($_GET['module']=='edit_user') 
    {include "module/user/edit_user.php";
    }##mitra
    elseif ($_GET['module']=='kategori') 
    {include "module/mitra/kategori/list_kategori.php";
    }
  elseif ($_GET['module']=='tambah_kategori') 
    {include "module/mitra/kategori/tambah_kategori.php";
    }
  elseif ($_GET['module']=='edit_kategori') 
    {include "module/mitra/kategori/edit_kategori.php";
    }##Kategori

  elseif ($_GET['module']=='merek') 
    {include "module/mitra/merek/list_merek.php";
    }
  elseif ($_GET['module']=='tambah_merek') 
    {include "module/mitra/merek/tambah_merek.php";
    }
  elseif ($_GET['module']=='edit_merek') 
    {include "module/mitra/merek/edit_kategori.php";
    }##Merek
     elseif ($_GET['module']=='produk') 
    {include "module/produk/list_produk.php";
    }
  elseif ($_GET['module']=='tambah_produk') 
    {include "module/produk/tambah_produk.php";
    }
  elseif ($_GET['module']=='edit_produk') 
    {include "module/produk/edit_produk.php";
    }##Produk
    elseif ($_GET['module']=='user') {
	include "module/user/list_user.php";}
    elseif ($_GET['module']=='tambah_user') 
    {include "module/user/tambah_user.php";
    }
  elseif ($_GET['module']=='edit_user') 
    {include "module/user/edit_user.php";
    }##User

  elseif ($_GET['module']=='petshop') 
    {include "module/petshop/list_petshop.php";
    }
  elseif ($_GET['module']=='tambah_petshop') 
    {include "module/petshop/tambah_petshop.php";
    }
  elseif ($_GET['module']=='edit_petshop') 
    {include "module/petshop/edit_petshop.php";
    }##petshop
  elseif ($_GET['module']=='grooming') 
    {include "module/petshop/grooming/list_grooming.php";
    }
  elseif ($_GET['module']=='tambah_grooming') 
    {include "module/petshop/grooming/tambah_grooming.php";
    }
  elseif ($_GET['module']=='edit_grooming') 
    {include "module/petshop/grooming/edit_grooming.php";
    }##grooming
elseif ($_GET['module']=='layanan') 
    {include "module/petshop/layanan/list_layanan.php";
    }
  elseif ($_GET['module']=='tambah_grooming') 
    {include "module/petshop/layanan/tambah_layanan.php";
    }
  elseif ($_GET['module']=='edit_grooming') 
    {include "module/petshop/grooming/edit_layanan.php";
    }##layanan
    elseif ($_GET['module']=='klinik') 
    {include "module/petshop/klinik/list_klinik.php";
    }
  elseif ($_GET['module']=='tambah_klinik') 
    {include "module/petshop/klinik/tambah_klinik.php";
    }
  elseif ($_GET['module']=='edit_klinik') 
    {include "module/petshop/klinik/edit_klinik.php";
    }##klinik
 elseif ($_GET['module']=='jasa') 
    {include "module/jasa/list_jasa.php";
    }
  elseif ($_GET['module']=='tambah_jasa') 
    {include "module/jasa/tambah_jasa.php";
    }
  elseif ($_GET['module']=='edit_jasa') 
    {include "module/jasa/edit_jasa.php";
    }##jasa
    elseif ($_GET['module']=='Konsultasi') 
    {include "module/konsultasi/list_konsultasi.php";
    }
  elseif ($_GET['module']=='tambah_konsultasi') 
    {include "module/konsultasi/tambah_konsultasi.php";
    }
  elseif ($_GET['module']=='edit_konsultasi') 
    {include "module/konsultasi/edit_konsultasi.php";
    }##konsultasi

  else
    {include "module/home/home.php";
      }
  ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="http://adminlte.io">Go-Pets</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="asset/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="asset/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="asset/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="asset/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="asset/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="asset/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="asset/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="asset/plugins/moment/moment.min.js"></script>
<script src="asset/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="asset/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="asset/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/dist/js/demo.js"></script>
</body>
</html>
