<!DOCTYPE html>
<html lang="en">

<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['id'])){
    die("<script>alert('Anda Belum Login');document.location='../index.php'</script>");//
  }

  if($_SESSION['level']!="admin")
  {
    die("<script>alert('Anda Bukan Admin');document.location='../index.php'</script>");
  }
  ?>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../img/unparlogo.png" rel="icon">
    <title>PPI UNPAR</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/ruang-admin.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="sidebar-brand-icon">
            <img src="../img/unparlogo.png" style="max-height: 60px">
          </div>
          <div class="sidebar-brand-text mx-3">PPI UNPAR</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=profil">
              <i class="fab fa-fw fa-wpforms"></i>
              <span>Profil</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=tambahakun">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Tambah Akun</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                aria-expanded="true" aria-controls="collapseBootstrap">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Data</span>
              </a>
              <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Data</h6>
                  <a class="collapse-item" href="index.php?page=admin">Admin</a>
                  <a class="collapse-item" href="index.php?page=dosen">Dosen</a>
                  <a class="collapse-item" href="index.php?page=mahasiswa">Mahasiswa</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=mataKuliah">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Mata Kuliah</span></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="index.php?page=konversiCPL&amp;&amp;id=1">
                <i class="fab fa-fw fa-wpforms"></i>
                <span>Konversi diKali</span></a>
              </li>
            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
          </ul>
          <!-- Sidebar -->
          <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
              <!-- TopBar -->
              <?php
              include "koneksi.php";
              $id = $_SESSION['id'];
              $query="SELECT * FROM profil where id='$id'";
              $sql = mysqli_query ($connect,$query);
              $no = 1;
              while ($hasil = mysqli_fetch_array($sql)) {
                $nama_lengkap = $hasil ['nama_lengkap'];
                $nim = $hasil ['nokta'];
                $photo = $hasil ['photo'];
                ?>
                
              <?php } ?>
              <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown">
                  <form class="navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
              <div class="topbar-divider d-none d-sm-block"></div>
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="ml-2 d-none d-lg-inline text-white small"><?php echo $nama_lengkap; ?></span>
                  <span>&nbsp;&nbsp;<img style="border-radius:50%;" src="img_adm/<?php echo $photo;?>" width='35' height='35'></span>
                  <!-- <img class="img-profile rounded-circle" src="../img/boy.png" style="max-width: 60px"> -->
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="index.php?page=profil">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- Topbar -->

          <!-- Container Fluid-->
          <?php include "main_switch.php"; ?>
          
          <!---Container Fluid-->
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
                <b>Struggel Team Project</b>
              </span>
            </div>
          </div>
        </footer>
        <!-- Footer -->
      </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/ruang-admin.min.js"></script>

    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
      $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>

</html>