<!DOCTYPE html>
<html lang="en">

<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['id'])){
    die("<script>alert('Anda Belum Login');document.location='../index.php'</script>");//
}

if($_SESSION['level']!="mahasiswa")
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
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="../vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap DatePicker -->  
  <link href="../vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >
  <!-- Bootstrap Touchspin -->
  <link href="../vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" >
  <!-- ClockPicker -->
  <link href="../vendor/clock-picker/clockpicker.css" rel="stylesheet">
  <!-- RuangAdmin CSS -->
  <link href="../css/ruang-admin.min.css" rel="stylesheet">
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
          <i class="fas fa-fw fa-table"></i>
          <span>Profil</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fas fa-fw fa-columns"></i>
          <span>FAM Data Umum</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">FAM</h6>
            <!--<a class="collapse-item" href="index.php?page=datapribadi">Data Pribadi</a>-->
            <a class="collapse-item" href="index.php?page=cekdatapribadi">Data Pribadi</a>
            <a class="collapse-item" href="index.php?page=datapendidikan">Data Pendidikan</a>
            <a class="collapse-item" href="index.php?page=dataorganisasi">Data Organisasi</a>
            <a class="collapse-item" href="index.php?page=datapenghargaan">Data Penghargaan</a>
            <a class="collapse-item" href="index.php?page=datapelatihan">Data Pelatihan Teknik</a>
            <a class="collapse-item" href="index.php?page=datapelatihanlain">Data Pelatihan Manajemen</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePendidikan" aria-expanded="true"
          aria-controls="collapsePendidikan">
          <i class="fas fa-fw fa-palette"></i>
          <span>FAM Data Kualifikasi Kode Etik dan Etika Profesi</span>
        </a>
        <div id="collapsePendidikan" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Formulir Asesment Mandiri</h6>
            <a class="collapse-item" href="index.php?page=datakualifikasipengertian">Pengertian Kode Etik dan <br> Etika Profesi</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKualifikasi" aria-expanded="true"
          aria-controls="collapseKualifikasi">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>FAM Data Kualifikasi Insinyur</span>
        </a>
        <div id="collapseKualifikasi" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Formulir Asesment Mandiri</h6>
            <a class="collapse-item" href="index.php?page=datakualifikasi">Pengalaman Tugas <br>Keinsinyuran</a>
            <a class="collapse-item" href="index.php?page=datapengalamanmengajar">Pengalaman Mengajar dan <br>Manajemen</a>
            <a class="collapse-item" href="index.php?page=datapengalamanpenelitian">Pengalaman Penelitian, <br>Komersialisasi <br>Penanganan bahan</a>
            <a class="collapse-item" href="index.php?page=datapengalamanpekerjaan">Pengalaman Manufaktur<br> atau Produksi</a>
            <a class="collapse-item" href="index.php?page=datamanajemenusaha">Pengalaman Manajemen<br> Usaha, Pemasaran dan <br>Pemeliharaan Aset</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInovasi" aria-expanded="true"
          aria-controls="collapseInovasi">
          <i class="fas fa-fw fa-palette"></i>
          <span>FAM Publikasi & Inovasi</span>
        </a>
        <div id="collapseInovasi" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?page=datainovasikarya">Publikasi Karya Tulis</a>
            <a class="collapse-item" href="index.php?page=datainovasimakalah">Makalah dalam Seminar<br> atau Lokakarya </a>
            <a class="collapse-item" href="index.php?page=dataseminarkeinsinyuran">Seminar Keinsinyuran<br> yang diikuti </a>
            <a class="collapse-item" href="index.php?page=datainovasiteknologi">Inovasi Teknologi Baru</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBahasa" aria-expanded="true"
          aria-controls="collapseBahasa">
          <i class="fab fa-fw fa-wpforms"></i>
          <span>FAM Data Penguasaan Bahasa</span>
        </a>
        <div id="collapseBahasa" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?page=databahasa">Data Penguasaan Bahasa</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=poinKompetensi">
          <i class="fas fa-fw fa-table"></i>
          <span>Poin Kompetensi</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=totalKompetensi">
          <i class="fas fa-fw fa-table"></i>
          <span>Total Kompetensi</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=nilaiKompetensi">
          <i class="fas fa-fw fa-table"></i>
          <span>Nilai Kompetensi</span></a>
      </li>
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
      $nokta = $hasil ['nokta'];
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
                <span>&nbsp;&nbsp;<img style="border-radius:50%;" src="img_mhs/<?php echo $photo;?>" width='35' height='35'></span>
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
        </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b>Struggle Team Project</b>
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
  <!-- Select2 -->
  <script src="../vendor/select2/dist/js/select2.min.js"></script>
  <!-- Bootstrap Datepicker -->
  <script src="../vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap Touchspin -->
  <script src="../vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
  <!-- ClockPicker -->
  <script src="../vendor/clock-picker/clockpicker.js"></script>
  <!-- RuangAdmin Javascript -->
  <script src="../js/ruang-admin.min.js"></script>

  <script>
    $(document).ready(function () {


      $('.select2-single').select2();

      // Select2 Single  with Placeholder
      $('.select2-single-placeholder').select2({
        placeholder: "Select a Province",
        allowClear: true
      });      

      // Select2 Multiple
      $('.select2-multiple').select2();

      // Bootstrap Date Picker
      $('#simple-date1 .input-group.date').datepicker({
        format: 'yyyy/mm/dd',
        todayBtn: 'linked',
        todayHighlight: true,
        autoclose: true,        
      });

      $('#simple-date2 .input-group.date').datepicker({
        startView: 1,
        format: 'yyyy/mm/dd',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });

      $('#simple-date3 .input-group.date').datepicker({
        startView: 2,
        format: 'yyyy/mm/dd',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });

      $('#simple-date4 .input-daterange').datepicker({        
        format: 'yyyy/mm/dd',        
        autoclose: true,     
        todayHighlight: true,   
        todayBtn: 'linked',
      });    

      // TouchSpin

      $('#touchSpin1').TouchSpin({
        min: 0,
        max: 100,                
        boostat: 5,
        maxboostedstep: 10,        
        initval: 0
      });

      $('#touchSpin2').TouchSpin({
        min:0,
        max: 100,
        decimals: 2,
        step: 0.1,
        postfix: '%',
        initval: 0,
        boostat: 5,
        maxboostedstep: 10
      });

      $('#touchSpin3').TouchSpin({
        min: 0,
        max: 100,
        initval: 0,
        boostat: 5,
        maxboostedstep: 10,
        verticalbuttons: true,
      });

      $('#clockPicker1').clockpicker({
        donetext: 'Done'
      });

      $('#clockPicker2').clockpicker({
        autoclose: true
      });

      let input = $('#clockPicker3').clockpicker({
        autoclose: true,
        'default': 'now',
        placement: 'top',
        align: 'left',
      });

      $('#check-minutes').click(function(e){        
        e.stopPropagation();
        input.clockpicker('show').clockpicker('toggleView', 'minutes');
      });

    });
  </script>

</body>

</html>