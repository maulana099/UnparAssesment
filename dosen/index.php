<!DOCTYPE html>
<html lang="en">

<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['id'])){
    die("<script>alert('Anda Belum Login');document.location='../index.php'</script>");//
  }

  if($_SESSION['level']!="dosen")
  {
    die("<script>alert('Anda Bukan Dosen');document.location='../index.php'</script>");
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
              <a class="nav-link" href="index.php?page=hasil">
                <i class="far fa-fw fa-file-alt"></i>
                <span>Daftar FAM Mahasiswa</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?page=nilaiMhs">
                  <i class="far fa-fw fa-file-alt"></i>
                  <span>Daftar Nilai Mahasiswa</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php?page=jumlahKompetensi">
                    <i class="far fa-fw fa-file-alt"></i>
                    <span>Poin Kompetensi FAM</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?page=totalKompetensi">
                      <i class="far fa-fw fa-file-alt"></i>
                      <span>Total Kompetensi</span></a>
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

                          <div class="topbar-divider d-none d-sm-block"></div>
                          <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="ml-2 d-none d-lg-inline text-white small"><?php echo $nama_lengkap; ?></span>
                              <span>&nbsp;&nbsp;<img style="border-radius:50%;" src="img_dsn/<?php echo $photo;?>" width='35' height='35'></span>
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