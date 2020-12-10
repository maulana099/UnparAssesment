<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $nokta=$_GET['id'];
}

$sql = "SELECT * from profil where nokta='$nokta'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nokta = $data['nokta'];
$nama_lengkap = $data['nama_lengkap'];

?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between">
    <h1 class="h3 mb-0 text-gray-800">DAFTAR HASIL TEST MAHASISWA</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-danger btn-sm" href="index.php?page=resetCpl&amp;&amp;id=<?php echo $nokta; ?>">Reset Jumlah Kompetensi</a></li>
      <!-- <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success btn-sm" href="index.php?page=jumlahCpl&amp;&amp;id=<?php echo $nokta; ?>">Jumlahkan Kompetensi</a></li> -->
      <?php
      $sql = "SELECT * from hasil_cpl where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $statusCpl = $row['status'];
      if ($statusCpl == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a class='btn btn-success btn-sm' href='index.php?page=jumlahCpl&amp;&amp;id=$nokta'>Jumlahkan Kompetensi</a></li>";
      }
      ?>
    </ol>
  </div>

  <div class="d-sm-flex align-items-center justify-content-between">
    <ol class="breadcrumb" style="font-size: 14px;">
      <?php
      $sql = "SELECT * from hasil_organisasi where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status1 = $row['status'];
      if ($status1 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#organisasi'>Organisasi Profesi</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_penghargaan where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status2 = $row['status'];
      if ($status2 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#penghargaan'>Penghargaan Profesi</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_pelatihan where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status3 = $row['status'];
      if ($status3 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#pendidikan'>Pendidikam Keinsinyuran Profesi</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_pelatihanlain where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status4 = $row['status'];
      if ($status4 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#pelatihan'>Pelatihan Manajemen</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_pengertian where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status5 = $row['status'];
      if ($status5 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#pengertian'>Kualifikasi Pengertian</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_kualifikasi where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status6 = $row['status'];
      if ($status6 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#kualifikasi'>Kualifikasi Insiyur</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_mengajar where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status7 = $row['status'];
      if ($status7 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#mengajar'>Pengalaman Mengajar</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_penelitian where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status8 = $row['status'];
      if ($status8 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#penelitian'>Pengalaman Penelitian</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_manufaktur where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status9 = $row['status'];
      if ($status9 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#manufaktur'>Pengalaman Manufaktur</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_usaha where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status10 = $row['status'];
      if ($status10 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#manajemen'>Manajemen Usaha</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_karya where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status11 = $row['status'];
      if ($status11 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#karyaTulis'>Karya Tulis</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_makalah where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status12 = $row['status'];
      if ($status12 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#makalah'>Makalah Lokakarya</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_seminar where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status13 = $row['status'];
      if ($status13 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#seminar'>Seminar Keinsiyuran</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_teknologi where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status14 = $row['status'];
      if ($status14 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#teknologi'>Karya Temuan</a></li>";
      }
      ?>
      <?php
      $sql = "SELECT * from hasil_bahasa where nokta='$nokta'";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $status15 = $row['status'];
      if ($status15 == 0) {
        echo "<li class='breadcrumb-item active' aria-current='page'><a href='#bahasa'>Penguasaan Bahasa</a></li>";
      }
      ?>
    </ol>
  </div>


  <!-- Data Diri -->
  <div class="row">
    <div class="col-lg-12">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Data Diri Mahasiswa</h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM datapribadi WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Nomor Nokta</label>
                  </div>
                  <div class="col-12 col-md-2">
                   <p class=""><b><?php echo $row['nokta'];?></b></p>
                 </div>
                 <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">Nama Lengkap</label>
                </div>
                <div class="col-12 col-md-2">
                  <p class=""><b><?php echo $row['nama_lengkap'];?></b></p>
                </div>
                <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">Kejuaruan</label>
                </div>
                <div class="col-12 col-md-2">
                 <p class=""><b><?php echo $row['kejuruan'];?></b></p>
               </div>
             </div>
             <hr/> <!-- batas 2 colom-->
             <div class="row form-group">
              <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Tempat Lahir</label>
              </div>
              <div class="col-12 col-md-4">
               <p class=""><b><?php echo $row['tempat_lahir'];?></b></p>
             </div>
             <!-- batas 2 colom-->
             <div class="col-12 col-md-2">
              <label for="password-input" class=" form-control-label">Tanggal Lahir</label>
            </div>
            <div class="col-12 col-md-4">
             <p class=""><b><?php echo $row['tanggal_lahir'];?></b></p>
           </div>
         </div>
         <hr/> <!-- batas 2 colom-->
         <div class="row form-group">
          <div class="col-12 col-md-2">
            <label for="password-input" class=" form-control-label">Alamat Rumah</label>
          </div>
          <div class="col-12 col-md-4">
           <p class=""><b><?php echo $row['alamat_rumah'];?></b></p>
         </div>
         <!-- batas 2 colom-->
         <div class="col-12 col-md-2">
          <label for="password-input" class=" form-control-label">Alamat Lembaga</label>
        </div>
        <div class="col-12 col-md-4">
         <p class=""><b><?php echo $row['alamat_lembaga'];?></b></p>
       </div>
     </div>
     <hr/> <!-- batas 2 colom-->
     <div class="row form-group">
      <div class="col-12 col-md-2">
        <label for="password-input" class=" form-control-label">E-Mail</label>
      </div>
      <div class="col-12 col-md-4">
       <p class=""><b><?php echo $row['email'];?></b></p>
     </div>
     <!-- batas 2 colom-->
     <div class="col-12 col-md-2">
      <label for="password-input" class=" form-control-label">No HandPhone</label>
    </div>
    <div class="col-12 col-md-4">
     <p class=""><b><?php echo $row['nohp'];?></b></p>
   </div>
 </div>
 <hr/> <!-- batas 2 colom-->
<?php } ?>
<!-- </table> -->
</div>
</div>
</div>
</div>
</div>
<!-- end data diri -->

<!-- pendidikan formal -->
<div class="row">
  <div class="col-lg-12">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <h3 style="color: #16697a;">Pendidikan Formal</h3>
          <hr/>
          <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
            <?php 
            $nokta = $_GET['id'];
            $query = mysqli_query($connect, "SELECT * FROM datapendidikan1 WHERE nokta='$nokta'");
            while($row = mysqli_fetch_assoc($query)){
              ?>
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Nama Perguruan Tinggi</label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['perguruantinggi'];?></b></p>
               </div>
               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Fakultas</label>
              </div>
              <div class="col-12 col-md-4">
                <p class=""><b><?php echo $row['fakultas'];?></b></p>
              </div>
            </div>
            <hr/> <!-- batas 2 colom-->
            <div class="row form-group">
              <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Program Studi</label>
              </div>
              <div class="col-12 col-md-4">
               <p class=""><b><?php echo $row['jurusan'];?></b></p>
             </div>
             <!-- batas 2 colom-->
             <div class="col-12 col-md-2">
              <label for="password-input" class=" form-control-label">Kota / Kabupaten</label>
            </div>
            <div class="col-12 col-md-4">
             <p class=""><b><?php echo $row['kota'];?></b></p>
           </div>
         </div>
         <hr/> <!-- batas 2 colom-->
         <div class="row form-group">
          <div class="col-12 col-md-2">
            <label for="password-input" class=" form-control-label">Negara</label>
          </div>
          <div class="col-12 col-md-4">
           <p class=""><b><?php echo $row['negara'];?></b></p>
         </div>
         <!-- batas 2 colom-->
         <div class="col-12 col-md-2">
          <label for="password-input" class=" form-control-label">Tahun Lulus</label>
        </div>
        <div class="col-12 col-md-4">
         <p class=""><b><?php echo $row['tahunlulus'];?></b></p>
       </div>
     </div>
     <hr/> <!-- batas 2 colom-->
     <div class="row form-group">
      <div class="col-12 col-md-2">
        <label for="password-input" class=" form-control-label">Gelar</label>
      </div>
      <div class="col-12 col-md-4">
       <p class=""><b><?php echo $row['gelar'];?></b></p>
     </div>
     <!-- batas 2 colom-->
     <div class="col-12 col-md-2">
      <label for="password-input" class=" form-control-label">Judul TA</label>
    </div>
    <div class="col-12 col-md-4">
     <p class=""><b><?php echo $row['judulta'];?></b></p>
   </div>
 </div>
 <hr/> <!-- batas 2 colom-->
 <div class="row form-group">
   <div class="col-12 col-md-2">
    <label for="password-input" class=" form-control-label">Keterangan</label>
  </div>
  <div class="col-12 col-md-10">
   <p class=""><b><?php echo $row['deskripsita'];?></b></p>
 </div>
</div>
<hr/> <!-- batas 2 colom-->
<?php } ?>
<!-- </table> -->
</div>
</div>
</div>
</div>
</div>
<!-- end pendidikan -->

<!-- Organisasi Profesi & Organisasi Lainnya Yang Dimasuki    -->
<div class="row" id="organisasi">
  <div class="col-lg-9">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <h3 style="color: #16697a;">Organisasi Profesi & Organisasi Lainnya Yang Dimasuki,
            <?php if ($status1 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
          </h3>
          <hr/>
          <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
            <?php 
            $nokta = $_GET['id'];
            $query = mysqli_query($connect, "SELECT * FROM dataorganisasi WHERE nokta='$nokta'");
            while($row = mysqli_fetch_assoc($query)){
              ?>
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Nama Organisasi</label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['nama_organisasi'];?></b></p>
               </div>
               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Periode</label>
              </div>
              <div class="col-12 col-md-4">
                <p class=""><b><?php echo $row['periode'];?></b></p>
              </div>
            </div>
            
            <hr/> <!-- batas 2 colom-->
            <div class="row form-group">
              <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Aktivitas Jabatan</label>
              </div>
              <div class="col-12 col-md-4">
               <p class=""><b><?php echo $row['aktifitas_jabatan'];?></b></p>
             </div>
             <div class="col col-md-2">
              <label for="password-input" class=" form-control-label">Bukti Berkas</label>
            </div>
            <div class="col-12 col-md-2">
              <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
            </div>
          </div>
          <hr/>

          <form action="" method="POST">
           <div class="row form-group">
             <!-- batas 2 colom-->
             <div class="col-12 col-md-2">
              <label for="password-input" class=" form-control-label">Kompetensi</label>
            </div>
            <div class="col-12 col-md-8">
             <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
             <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
           </div>
           <div class="col-12 col-md-2">
            <!-- <button class="btn-sm btn-primary btn" type="submit" name="ORGANISASI">EDIT KOMPETENSI</button> -->
            <button class="btn-sm btn-primary btn" type="submit" name="ORGANISASI">EDIT KOMPETENSI</button>
          </div>
        </div>
      </form>
      <hr/> <!-- batas 2 colom-->
    <?php } ?>
    <!-- </table> -->
  </div>
</div>
</div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_organisasi WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK01" value="<?php echo $row['SK01'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK02" value="<?php echo $row['SK02'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK03" value="<?php echo $row['SK03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK04" value="<?php echo $row['SK04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK05" value="<?php echo $row['SK05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK06" value="<?php echo $row['SK06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK07" value="<?php echo $row['SK07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK08" value="<?php echo $row['SK08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK09" value="<?php echo $row['SK09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK10" value="<?php echo $row['SK10'];?>">
            </div> 
          </div>  
          <input type="submit" name="EDITNILAI" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- end organissi -->
<!-- EDIT ORGANISASI -->
<?php  

if (isset($_POST['ORGANISASI'])) {
  $id = $_POST['id'];
  $kompetensi = $_POST['kompetensi'];

  $query = "UPDATE dataorganisasi SET kompetensi='$kompetensi' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>


  <!-- Tanda Penghargaan yang Diterima -->
  <div class="row" id="penghargaan">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Tanda Penghargaan yang Diterima
              <?php if ($status2 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM datapenghargaan WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Nama Penghargaan</label>
                  </div>
                  <div class="col-12 col-md-4">
                   <p class=""><b><?php echo $row['nama_penghargaan'];?></b></p>
                 </div>
                 <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">Keterangan</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['uraian'];?></b></p>
                </div>
                <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">Bukti Berkas</label>
                </div>
                <div class="col-12 col-md-2">
                  <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
                </div>
              </div>
              <hr/> <!-- batas 2 colom-->
              <form action="">
               <div class="row form-group">
                 <!-- batas 2 colom-->
                 <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Kompetensi</label>
                </div>
                <div class="col-12 col-md-8">
                  <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                  <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
                </div>

                <div class="col-12 col-md-2">
                  <button class="btn-sm btn-primary btn" type="submit" name="PENGHARGAAN">EDIT KOMPETENSI</button>
                </div>
              </div>
            </form>
            <hr/> <!-- batas 2 colom-->
          <?php } ?>
          <!-- </table> -->
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <?php 
    $nokta = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM hasil_penghargaan WHERE nokta='$nokta'");
    while($row = mysqli_fetch_assoc($query)){
      ?>
      <form action="jmlCPL.php" method="POST">

        <!-- General Element -->
        <div class="card mb-4">
          <div class="card-body">
            <div class="input-group-prepend">
              <span class="input-group-text">Data Nilai CPL</span>
            </div>
            <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
            <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
            <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
            <div class="row form-group">
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK01</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK01" value="<?php echo $row['SK01'];?>">
              </div>
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK02</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK02" value="<?php echo $row['SK02'];?>">
              </div>
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK03</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK03" value="<?php echo $row['SK03'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK04</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK04" value="<?php echo $row['SK04'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK05</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK05" value="<?php echo $row['SK05'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK06</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK06" value="<?php echo $row['SK06'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK07</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK07" value="<?php echo $row['SK07'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK08</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK08" value="<?php echo $row['SK08'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK09</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK09" value="<?php echo $row['SK09'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK10</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK10" value="<?php echo $row['SK10'];?>">
              </div> 
            </div>  
            <input type="submit" name="EDITNILAIP" class="btn btn-primary" value="Simpan Nilai">
          </div>
        </div>
      </form>
    </div>
  <?php } ?>
</div>
<!-- end penghargaan -->
<?php  

if (isset($_POST['PENGHARGAAN'])) {
  $id = $_POST['id'];
  $kompetensi = $_POST['kompetensi'];

  $query = "UPDATE datapenghargaan SET kompetensi='$kompetensi' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>
  

  <!-- Pendidikan/Pelatihan Teknik/Pertanian  dan Profesi Keinsinyuran Yang Diikuti -->
  <div class="row" id="pendidikan">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Pendidikan/Pelatihan Teknik/Management  dan Profesi Keinsinyuran Yang Diikuti 
              <?php if ($status3 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM datapelatihan WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <hr/> <!-- batas 2 colom-->
                <div class="row form-group">
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Nama Pelatihan</label>
                  </div>
                  <div class="col-12 col-md-4">
                   <p class=""><b><?php echo $row['nama_pelatihan'];?></b></p>
                 </div>
                 <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">Tahun</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['tahun'];?></b></p>
                </div>
              </div>
              <hr/> <!-- batas 2 colom-->
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Jumlah</label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['jumlah'];?></b></p>
               </div>
               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Keterangan</label>
              </div>
              <div class="col-12 col-md-4">
                <p class=""><b><?php echo $row['uraian'];?></b></p>
              </div>
              <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Bukti Berkas</label>
              </div>
              <div class="col-12 col-md-2">
                <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
              </div>
            </div>
            <hr/> <!-- batas 2 colom-->
            <form action="">
             <div class="row form-group">
               <!-- batas 2 colom-->
               <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Kompetensi</label>
              </div>
              <div class="col-12 col-md-8">
                <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
              </div>

              <div class="col-12 col-md-2">
                <button class="btn-sm btn-primary btn" type="submit" name="PELATIHAN">EDIT KOMPETENSI</button>
              </div>
            </div>
          </form>
          <hr/> <!-- batas 2 colom-->
        <?php } ?>
        <!-- </table> -->
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_pelatihan WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body" >
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK01" value="<?php echo $row['SK01'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK02" value="<?php echo $row['SK02'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK03" value="<?php echo $row['SK03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK04" value="<?php echo $row['SK04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK05" value="<?php echo $row['SK05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK06" value="<?php echo $row['SK06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK07" value="<?php echo $row['SK07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK08" value="<?php echo $row['SK08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK09" value="<?php echo $row['SK09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK10" value="<?php echo $row['SK10'];?>">
            </div>
            <!-- KU -->
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU01" value="<?php echo $row['KU01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU02" value="<?php echo $row['KU02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU03" value="<?php echo $row['KU03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU04" value="<?php echo $row['KU04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU05" value="<?php echo $row['KU05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU06" value="<?php echo $row['KU06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU07" value="<?php echo $row['KU07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU08" value="<?php echo $row['KU08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU09" value="<?php echo $row['KU09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU10" value="<?php echo $row['KU10'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU11" value="<?php echo $row['KU11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU12" value="<?php echo $row['KU12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU13" value="<?php echo $row['KU13'];?>">
            </div>                   
          </div>  
          <input type="submit" name="EDITNILAIPELATIHAN" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- end Pendidikan/Pelatihan Teknik/Pertanian  dan Profesi Keinsinyuran Yang Diikuti -->
<?php  

if (isset($_POST['PELATIHAN'])) {
  $id = $_POST['id'];
  $kompetensi = $_POST['kompetensi'];

  $query = "UPDATE datapelatihan SET kompetensi='$kompetensi' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>


  <!-- I.6 PendidIkan/Pelatihan Manajemen dan BIdang Lainnya (yang Relevan)  -->
  <div class="row" id="pelatihan">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Pendidikan/Pelatihan Manajemen dan BIdang Lainnya (yang Relevan), 
            <?php if ($status4 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
              
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM datapelatihanlain WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <hr/> <!-- batas 2 colom-->
                <div class="row form-group">
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Nama Pelatihan</label>
                  </div>
                  <div class="col-12 col-md-4">
                   <p class=""><b><?php echo $row['nama_pelatihan'];?></b></p>
                 </div>
                 <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">Tahun</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['tahun'];?></b></p>
                </div>
              </div>
              <hr/> <!-- batas 2 colom-->
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Jumlah</label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['jumlah'];?></b></p>
               </div>
               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Keterangan</label>
              </div>
              <div class="col-12 col-md-4">
                <p class=""><b><?php echo $row['uraian'];?></b></p>
              </div>
              <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Bukti Berkas</label>
              </div>
              <div class="col-12 col-md-2">
                <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
              </div>
            </div>
            <hr/> <!-- batas 2 colom-->
            <form action="">
             <div class="row form-group">
               <!-- batas 2 colom-->
               <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Kompetensi</label>
              </div>
              <div class="col-12 col-md-8">
                <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
              </div>

              <div class="col-12 col-md-2">
                <button class="btn-sm btn-primary btn" type="submit" name="PELATIHAN">EDIT KOMPETENSI</button>
              </div>
            </div>
          </form>
          <hr/> <!-- batas 2 colom-->
        <?php } ?>
        <!-- </table> -->
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_pelatihanlain WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body" >
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK01" value="<?php echo $row['SK01'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK02" value="<?php echo $row['SK02'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK03" value="<?php echo $row['SK03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK04" value="<?php echo $row['SK04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK05" value="<?php echo $row['SK05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK06" value="<?php echo $row['SK06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK07" value="<?php echo $row['SK07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK08" value="<?php echo $row['SK08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK09" value="<?php echo $row['SK09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK10" value="<?php echo $row['SK10'];?>">
            </div>
            <!-- KU -->
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU01" value="<?php echo $row['KU01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU02" value="<?php echo $row['KU02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU03" value="<?php echo $row['KU03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU04" value="<?php echo $row['KU04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU05" value="<?php echo $row['KU05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU06" value="<?php echo $row['KU06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU07" value="<?php echo $row['KU07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU08" value="<?php echo $row['KU08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU09" value="<?php echo $row['KU09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU10" value="<?php echo $row['KU10'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU11" value="<?php echo $row['KU11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU12" value="<?php echo $row['KU12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU13" value="<?php echo $row['KU13'];?>">
            </div>                   
          </div> 
          <input type="submit" name="EDITNILAIPELATIHANLAIN" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- end Pendidikan/Pelatihan Teknik/Pertanian  dan Profesi Keinsinyuran Yang Diikuti -->
<?php  

if (isset($_POST['PELATIHAN'])) {
  $id = $_POST['id'];
  $kompetensi = $_POST['kompetensi'];

  $query = "UPDATE datapelatihan SET kompetensi='$kompetensi' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>

  <!-- Data Kualifikasi Pengertian Insinyur -->
  <div class="row" id="pengertian">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Pengertian, Pendapat dan Pengalaman Sendiri. 
            <?php if ($status5 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
              
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM datakualifikasipengertian WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                  <div class="col-12 col-md-4">
                    <label for="password-input" class=" form-control-label">Pengertian, Pendapat dan Pengalaman Sendiri. </label>
                  </div>
                  <div class="col-12 col-md-8">
                   <p class=""><b><?php echo $row['pengertian_keinsinyuran'];?></b></p>
                 </div>
                 <br>
                 <!-- batas 2 colom-->
                 <div class="col-12 col-md-4">
                  <label for="password-input" class=" form-control-label">Kompetensi</label>
                </div>
                <div class="col-12 col-md-">
                  <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                  <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
                </div>

                <div class="col-12 col-md-2">
                  <button class="btn-sm btn-primary btn" type="submit" name="KUALIFIKASI">EDIT KOMPETENSI</button>
                </div>
              </div>
            </form>
            <hr/> <!-- batas 2 colom-->
          <?php } ?>
          <!-- </table> -->
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <?php 
    $nokta = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM hasil_pengertian WHERE nokta='$nokta'");
    while($row = mysqli_fetch_assoc($query)){
      ?>
      <form action="jmlCPL.php" method="POST">

        <!-- General Element -->
        <div class="card mb-4">
          <div class="card-body">
            <div class="input-group-prepend">
              <span class="input-group-text">Data Nilai CPL</span>
            </div>
            <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
            <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
            <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
            <div class="row form-group">
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK01</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK01" value="<?php echo $row['SK01'];?>">
              </div>
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK02</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK02" value="<?php echo $row['SK02'];?>">
              </div>
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK03</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK03" value="<?php echo $row['SK03'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK04</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK04" value="<?php echo $row['SK04'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK05</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK05" value="<?php echo $row['SK05'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK06</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK06" value="<?php echo $row['SK06'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK07</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK07" value="<?php echo $row['SK07'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK08</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK08" value="<?php echo $row['SK08'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK09</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK09" value="<?php echo $row['SK09'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">SK10</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="SK10" value="<?php echo $row['SK10'];?>">
              </div> <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP01</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP01" value="<?php echo $row['PP01'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP02</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP02" value="<?php echo $row['PP02'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP03</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP03" value="<?php echo $row['PP03'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP04</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP04" value="<?php echo $row['PP04'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP05</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP05" value="<?php echo $row['PP05'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP06</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP06" value="<?php echo $row['PP06'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP07</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP07" value="<?php echo $row['PP07'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP08</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP08" value="<?php echo $row['PP08'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP09</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP09" value="<?php echo $row['PP09'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP10</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP10" value="<?php echo $row['PP10'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP11</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP11" value="<?php echo $row['PP11'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP12</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP12" value="<?php echo $row['PP12'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP13</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP13" value="<?php echo $row['PP13'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP14</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP14" value="<?php echo $row['PP14'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP15</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP15" value="<?php echo $row['PP15'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP16</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP16" value="<?php echo $row['PP16'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP17</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP17" value="<?php echo $row['PP17'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP18</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP18" value="<?php echo $row['PP18'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP19</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP19" value="<?php echo $row['PP19'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">PP20</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="PP20" value="<?php echo $row['PP20'];?>">
              </div> 
            </div>  
            <input type="submit" name="EDITNILAIPE" class="btn btn-primary" value="Simpan Nilai">
          </div>
        </div>
      </form>
    </div>
  <?php } ?>
</div>
<!-- <End Data Kualifikasi Pengertian Insinyur> -->
  <?php  

  if (isset($_POST['KUALIFIKASI'])) {
    $id = $_POST['id'];
    $kompetensi = $_POST['kompetensi'];

    $query = "UPDATE datakualifikasipengertian SET kompetensi='$kompetensi' where id='$id'";
    $sql = mysqli_query($connect, $query); 

    if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>
  

  <!-- Data kualifikasi insinyur Pengalaman Dalam  Perencanaan & Perancangan-->
  <div class="row" id="kualifikasi">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Pengalaman Dalam  Perencanaan & Perancangan dan/atau Pengalaman Dalam Pengelolaan Tugas-Tugas Keinsinyuran,
            <?php if ($status6 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
              
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM datakualifikasi WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Tahun</label>
                  </div>
                  <div class="col-12 col-md-4">
                   <p class=""><b><?php echo $row['tahun'];?></b></p>
                 </div>
                 <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">INSTANSI / PERUSAHAAN, LOKASI
                  TEMPAT TUGAS, NAMA PROYEK</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['nama_tempat'];?></b></p>
                </div>
              </div>
              <hr/> <!-- batas 2 colom-->
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Jabatan</label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['jabatan'];?></b></p>
               </div>

               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Uraian Singkat</label>
              </div> 
              <div class="col-12 col-md-4">
                <p class=""><b><?php echo $row['uraian'];?></b></p>
              </div><div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Bukti Berkas</label>
              </div>
              <div class="col-12 col-md-2">
                <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
              </div></div>
              <hr/>
              <form action="">
               <div class="row form-group">
                 <!-- batas 2 colom-->
                 <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Kompetensi</label>
                </div>
                <div class="col-12 col-md-8">
                  <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                  <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
                </div>

                <div class="col-12 col-md-2">
                  <button class="btn-sm btn-primary btn" type="submit" name="DATAKUALIFIKASI">EDIT KOMPETENSI</button>
                </div>
              </div>
            </form>
            <hr/> <!-- batas 2 colom-->
          <?php } ?>
          <!-- </table> -->
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <?php 
    $nokta = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM hasil_kualifikasi WHERE nokta='$nokta'");
    while($row = mysqli_fetch_assoc($query)){
      ?>
      <form action="jmlCPL.php" method="POST">

        <!-- General Element -->
        <div class="card mb-4">
          <div class="card-body">
            <div class="input-group-prepend">
              <span class="input-group-text">Data Nilai CPL</span>
            </div>
            <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
            <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
            <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
            <div class="row form-group">
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU01</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU01" value="<?php echo $row['KU01'];?>">
              </div>
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU02</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU02" value="<?php echo $row['KU02'];?>">
              </div>
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU03</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU03" value="<?php echo $row['KU03'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU04</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU04" value="<?php echo $row['KU04'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU05</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU05" value="<?php echo $row['KU05'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU06</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU06" value="<?php echo $row['KU06'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU07</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU07" value="<?php echo $row['KU07'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU08</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU08" value="<?php echo $row['KU08'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU09</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU09" value="<?php echo $row['KU09'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU10</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU10" value="<?php echo $row['KU10'];?>">
              </div>
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU11</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU11" value="<?php echo $row['KU11'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU12</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU12" value="<?php echo $row['KU12'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KU13</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KU13" value="<?php echo $row['KU13'];?>">
              </div>
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK01</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK01" value="<?php echo $row['KK01'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK02</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK02" value="<?php echo $row['KK02'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK03</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK03" value="<?php echo $row['KK03'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK04</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK04" value="<?php echo $row['KK04'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK05</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK05" value="<?php echo $row['KK05'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK06</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK06" value="<?php echo $row['KK06'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK07</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK07" value="<?php echo $row['KK07'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK08</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK08" value="<?php echo $row['KK08'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK09</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK09" value="<?php echo $row['KK09'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK10</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK10" value="<?php echo $row['KK10'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK11</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK11" value="<?php echo $row['KK11'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK12</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK12" value="<?php echo $row['KK12'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK13</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK13" value="<?php echo $row['KK13'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK14</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK14" value="<?php echo $row['KK14'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK15</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK15" value="<?php echo $row['KK15'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK16</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK16" value="<?php echo $row['KK16'];?>">
              </div> 
              <div class="col-12 col-md-3">
                <label for="password-input" class=" form-control-label">KK17</label>
              </div>
              <div class="col-12 col-md-9">
                <input class="form-control" type="text" name="KK17" value="<?php echo $row['KK17'];?>">
              </div>                      
            </div>  
            <input type="submit" name="EDITNILAIKUA" class="btn btn-primary" value="Simpan Nilai">
          </div>
        </div>
      </form>
    </div>
  <?php } ?>
</div>
<!-- <End Data kualifikasi insinyur Pengalaman Dalam  Perencanaan & Perancangan> -->
  <?php  

  if (isset($_POST['DATAKUALIFIKASI'])) {
    $id = $_POST['id'];
    $kompetensi = $_POST['kompetensi'];

    $query = "UPDATE datakualifikasi SET kompetensi='$kompetensi' where id='$id'";
    $sql = mysqli_query($connect, $query); 

    if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>


  <!-- Data Pengalaman Mengajar-->
  <div class="row" id="mengajar">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Pengalaman Mengajar  Pelajaran Keinsinyuran dan/atau  Manajemen, 
              <?php if ($status7 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM datapengalamanmengajar WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Periode</label>
                  </div>
                  <div class="col-12 col-md-4">
                   <p class=""><b><?php echo $row['periode'];?></b></p>
                 </div>
                 <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">NAMA PERGURUAN TINGGI, LEMBAGA atau LOKASI</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['nama_tempat'];?></b></p>
                </div>
              </div>
              <hr/> <!-- batas 2 colom-->
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Jumlah Jam / SKS</label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['jumlah_jam'];?></b></p>
               </div>
               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Bukti Berkas</label>
              </div>
              <div class="col-12 col-md-4">
                <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
              </div>
            </div>
            <div class="col col-md-2">
              <label for="password-input" class=" form-control-label">NAMA MATA AJARAN atau URAIAN SINGKAT</label>
            </div>
            <div class="col-12 col-md-4">
              <p class=""><b><?php echo $row['mk_uraian'];?></b></p>
            </div>
            <hr/>
            <form action="">
             <div class="row form-group">
               <!-- batas 2 colom-->
               <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Kompetensi</label>
              </div>
              <div class="col-12 col-md-8">
                <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
              </div>
              
              <div class="col-12 col-md-2">
                <button class="btn-sm btn-primary btn" type="submit" name="PENGALAMAN">EDIT KOMPETENSI</button>
              </div>
            </div>
          </form>
          <hr/> <!-- batas 2 colom-->
        <?php } ?>
        <!-- </table> -->
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_mengajar WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP01" value="<?php echo $row['PP01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP02" value="<?php echo $row['PP02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP03" value="<?php echo $row['PP03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP04" value="<?php echo $row['PP04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP05" value="<?php echo $row['PP05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP06" value="<?php echo $row['PP06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP07" value="<?php echo $row['PP07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP08" value="<?php echo $row['PP08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP09" value="<?php echo $row['PP09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP10" value="<?php echo $row['PP10'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP11" value="<?php echo $row['PP11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP12" value="<?php echo $row['PP12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP13" value="<?php echo $row['PP13'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP14</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP14" value="<?php echo $row['PP14'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP15</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP15" value="<?php echo $row['PP15'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP16</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP16" value="<?php echo $row['PP16'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP17</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP17" value="<?php echo $row['PP17'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP18</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP18" value="<?php echo $row['PP18'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP19</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP19" value="<?php echo $row['PP19'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP20</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP20" value="<?php echo $row['PP20'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK01" value="<?php echo $row['KK01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK02" value="<?php echo $row['KK02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK03" value="<?php echo $row['KK03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK04" value="<?php echo $row['KK04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK05" value="<?php echo $row['KK05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK06" value="<?php echo $row['KK06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK07" value="<?php echo $row['KK07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK08" value="<?php echo $row['KK08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK09" value="<?php echo $row['KK09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK10" value="<?php echo $row['KK10'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK11" value="<?php echo $row['KK11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK12" value="<?php echo $row['KK12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK13" value="<?php echo $row['KK13'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK14</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK14" value="<?php echo $row['KK14'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK15</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK15" value="<?php echo $row['KK15'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK16</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK16" value="<?php echo $row['KK16'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK17</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK17" value="<?php echo $row['KK17'];?>">
            </div>                      
          </div>  
          <input type="submit" name="EDITNILAIME" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- <End Data Data Pengalaman Mengajar> -->
  <?php  

  if (isset($_POST['PENGALAMAN'])) {
    $id = $_POST['id'];
    $kompetensi = $_POST['kompetensi'];

    $query = "UPDATE datapengalamanmengajar SET kompetensi='$kompetensi' where id='$id'";
    $sql = mysqli_query($connect, $query); 

    if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>

  <!-- Data Pengalaman Penelitian-->
  <div class="row" id="penelitian">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Pengalaman  Dalam Penelitian, Pengembangan dan Komersialisasi, 
            <?php if ($status8 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM datapengalamanpenelitian WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Periode</label>
                  </div>
                  <div class="col-12 col-md-4">
                   <p class=""><b><?php echo $row['periode'];?></b></p>
                 </div>
                 <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">INSTANSI</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['nama_tempat'];?></b></p>
                </div>
              </div>
              <hr/> <!-- batas 2 colom-->
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Jabatan</label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['jabatan'];?></b></p>
               </div>
               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Bukti Berkas</label>
              </div>
              <div class="col-12 col-md-4">
                <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
              </div>
            </div>
            <div class="col col-md-2">
              <label for="password-input" class=" form-control-label">Uraian Singkat</label>
            </div>
            <div class="col-12 col-md-4">
              <p class=""><b><?php echo $row['uraian'];?></b></p>
            </div>
            <hr/>
            <form action="">
             <div class="row form-group">
               <!-- batas 2 colom-->
               <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Kompetensi</label>
              </div>
              <div class="col-12 col-md-8">
                <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
              </div>
              
              <div class="col-12 col-md-2">
                <button class="btn-sm btn-primary btn" type="submit" name="PENELITIAN">EDIT KOMPETENSI</button>
              </div>
            </div>
          </form>
          <hr/> <!-- batas 2 colom-->
        <?php } ?>
        <!-- </table> -->
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_penelitian WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP01" value="<?php echo $row['PP01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP02" value="<?php echo $row['PP02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP03" value="<?php echo $row['PP03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP04" value="<?php echo $row['PP04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP05" value="<?php echo $row['PP05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP06" value="<?php echo $row['PP06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP07" value="<?php echo $row['PP07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP08" value="<?php echo $row['PP08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP09" value="<?php echo $row['PP09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP10" value="<?php echo $row['PP10'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP11" value="<?php echo $row['PP11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP12" value="<?php echo $row['PP12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP13" value="<?php echo $row['PP13'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP14</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP14" value="<?php echo $row['PP14'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP15</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP15" value="<?php echo $row['PP15'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP16</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP16" value="<?php echo $row['PP16'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP17</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP17" value="<?php echo $row['PP17'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP18</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP18" value="<?php echo $row['PP18'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP19</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP19" value="<?php echo $row['PP19'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">PP20</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="PP20" value="<?php echo $row['PP20'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU01" value="<?php echo $row['KU01'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU02" value="<?php echo $row['KU02'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU03" value="<?php echo $row['KU03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU04" value="<?php echo $row['KU04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU05" value="<?php echo $row['KU05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU06" value="<?php echo $row['KU06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU07" value="<?php echo $row['KU07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU08" value="<?php echo $row['KU08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU09" value="<?php echo $row['KU09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU10" value="<?php echo $row['KU10'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU11" value="<?php echo $row['KU11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU12" value="<?php echo $row['KU12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU13" value="<?php echo $row['KU13'];?>">
            </div>                      
          </div>  
          <input type="submit" name="EDITNILAIPEN" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- <End Data Data Pengalaman Penelitian> -->
  <?php  

  if (isset($_POST['PENELITIAN'])) {
    $id = $_POST['id'];
    $kompetensi = $_POST['kompetensi'];

    $query = "UPDATE datapengalamanpenelitian SET kompetensi='$kompetensi' where id='$id'";
    $sql = mysqli_query($connect, $query); 

    if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>


  <!-- Pengalaman  Dalam Pekerjaan Manufaktur atau Produksi dan atau kontruksi/intalasi  -->
  <div class="row" id="manufaktur">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Pengalaman  Dalam Pekerjaan Manufaktur atau Produksi dan atau kontruksi/intalasi, 
            <?php if ($status9 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM manufaktur WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                 <!-- batas 2 colom-->
                 <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Periode</label>
                </div>
                <div class="col-12 col-md-8">
                  <p class=""><b><?php echo $row['perioda'];?></b></p>
                </div>
              </div>
              <hr/>
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Nama Perusahaan</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['intansi'];?></b></p>
                </div>
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Nama Proyek</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['nama_proyek'];?></b></p>
                </div>
              </div>
              <hr/> <!-- batas 2 colom-->
              <div class="row form-group">
                <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">Lokasi</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['lokasi'];?></b></p>
                </div>
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Posisi Tugas / Jabatan </label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['jabatan'];?></b></p>
               </div>
             </div>
             <hr/> <!-- batas 2 colom-->
             <div class="row form-group">
              <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Kegiatan Yang Dilakukan</label>
              </div>
              <div class="col-12 col-md-4">
                <p class=""><b><?php echo $row['kegiatan'];?></b></p>
              </div>
              <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Bukti Berkas</label>
              </div>
              <div class="col-12 col-md-4">
                <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
              </div>
            </div>
            <hr/> <!-- batas 2 colom-->
            <form action="">
             <div class="row form-group">
               <!-- batas 2 colom-->
               <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Kompetensi</label>
              </div>
              <div class="col-12 col-md-8">
                <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
              </div>

              <div class="col-12 col-md-2">
                <button class="btn-sm btn-primary btn" type="submit" name="MANUFAKTUR">EDIT KOMPETENSI</button>
              </div>
            </div>
          </form>
          <hr/> <!-- batas 2 colom-->
        <?php } ?>
        <!-- </table> -->
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_manufaktur WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU01" value="<?php echo $row['KU01'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU02" value="<?php echo $row['KU02'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU03" value="<?php echo $row['KU03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU04" value="<?php echo $row['KU04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU05" value="<?php echo $row['KU05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU06" value="<?php echo $row['KU06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU07" value="<?php echo $row['KU07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU08" value="<?php echo $row['KU08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU09" value="<?php echo $row['KU09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU10" value="<?php echo $row['KU10'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU11" value="<?php echo $row['KU11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU12" value="<?php echo $row['KU12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU13" value="<?php echo $row['KU13'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK01" value="<?php echo $row['KK01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK02" value="<?php echo $row['KK02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK03" value="<?php echo $row['KK03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK04" value="<?php echo $row['KK04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK05" value="<?php echo $row['KK05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK06" value="<?php echo $row['KK06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK07" value="<?php echo $row['KK07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK08" value="<?php echo $row['KK08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK09" value="<?php echo $row['KK09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK10" value="<?php echo $row['KK10'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK11" value="<?php echo $row['KK11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK12" value="<?php echo $row['KK12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK13" value="<?php echo $row['KK13'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK14</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK14" value="<?php echo $row['KK14'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK15</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK15" value="<?php echo $row['KK15'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK16</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK16" value="<?php echo $row['KK16'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK17</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK17" value="<?php echo $row['KK17'];?>">
            </div>                      
          </div>  
          <input type="submit" name="EDITNILAIMANU" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- end Pengalaman  Dalam Pekerjaan Manufaktur atau Produksi dan atau kontruksi/intalasi  -->
<?php  

if (isset($_POST['MANUFAKTUR'])) {
  $id = $_POST['id'];
  $kompetensi = $_POST['kompetensi'];

  $query = "UPDATE manufaktur SET kompetensi='$kompetensi' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>

  <!-- Pengalaman Dalam Manajemen Usaha dan Pemasaran Teknik dan pemeliharaan Asset  -->
  <div class="row" id="manajemen">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Pengalaman Dalam Manajemen Usaha dan Pemasaran Teknik dan pemeliharaan Asset, 
            <?php if ($status10 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM usaha_asset WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                 <!-- batas 2 colom-->
                 <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Periode</label>
                </div>
                <div class="col-12 col-md-8">
                  <p class=""><b><?php echo $row['perioda'];?></b></p>
                </div>
              </div>
              <hr/>
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Nama Perusahaan</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['perusahaan'];?></b></p>
                </div>
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Nama Proyek</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['nama_proyek'];?></b></p>
                </div>
              </div>
              <hr/> <!-- batas 2 colom-->
              <div class="row form-group">
                <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">Lokasi</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['lokasi'];?></b></p>
                </div>
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Posisi Tugas / Jabatan </label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['posisi'];?></b></p>
               </div>
             </div>
             <hr/> <!-- batas 2 colom-->
             <div class="row form-group">
              <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Kegiatan Yang Dilakukan</label>
              </div>
              <div class="col-12 col-md-4">
                <p class=""><b><?php echo $row['kegiatan'];?></b></p>
              </div>
              <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Bukti Berkas</label>
              </div>
              <div class="col-12 col-md-4">
                <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
              </div>
            </div>
            <hr/> <!-- batas 2 colom-->
            <form action="">
             <div class="row form-group">
               <!-- batas 2 colom-->
               <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Kompetensi</label>
              </div>
              <div class="col-12 col-md-8">
                <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
              </div>

              <div class="col-12 col-md-2">
                <button class="btn-sm btn-primary btn" type="submit" name="ASSET">EDIT KOMPETENSI</button>
              </div>
            </div>
          </form>
          <hr/> <!-- batas 2 colom-->
        <?php } ?>
        <!-- </table> -->
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_usaha WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU01" value="<?php echo $row['KU01'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU02" value="<?php echo $row['KU02'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU03" value="<?php echo $row['KU03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU04" value="<?php echo $row['KU04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU05" value="<?php echo $row['KU05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU06" value="<?php echo $row['KU06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU07" value="<?php echo $row['KU07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU08" value="<?php echo $row['KU08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU09" value="<?php echo $row['KU09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU10" value="<?php echo $row['KU10'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU11" value="<?php echo $row['KU11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU12" value="<?php echo $row['KU12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU13" value="<?php echo $row['KU13'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK01" value="<?php echo $row['KK01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK02" value="<?php echo $row['KK02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK03" value="<?php echo $row['KK03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK04" value="<?php echo $row['KK04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK05" value="<?php echo $row['KK05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK06" value="<?php echo $row['KK06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK07" value="<?php echo $row['KK07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK08" value="<?php echo $row['KK08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK09" value="<?php echo $row['KK09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK10" value="<?php echo $row['KK10'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK11" value="<?php echo $row['KK11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK12" value="<?php echo $row['KK12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK13" value="<?php echo $row['KK13'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK14</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK14" value="<?php echo $row['KK14'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK15</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK15" value="<?php echo $row['KK15'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK16</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK16" value="<?php echo $row['KK16'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK17</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK17" value="<?php echo $row['KK17'];?>">
            </div>                      
          </div>  
          <input type="submit" name="EDITNILAIUSA" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- end Pengalaman Dalam Manajemen Usaha dan Pemasaran Teknik dan pemeliharaan Asset  -->
<?php  

if (isset($_POST['ASSET'])) {
  $id = $_POST['id'];
  $kompetensi = $_POST['kompetensi'];

  $query = "UPDATE usaha_asset SET kompetensi='$kompetensi' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>

  <!-- Karya Tulis di Bidang  Keinsinyuran yang Dipublikasikan  -->
  <div class="row" id="karyaTulis">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Karya Tulis di Bidang  Keinsinyuran yang Dipublikasikan, 
            <?php if ($status11 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM inovasi_karya WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                 <!-- batas 2 colom-->
                 <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Judul Karya</label>
                </div>
                <div class="col-12 col-md-8">
                  <p class=""><b><?php echo $row['judul'];?></b></p>
                </div>
              </div>
              <hr/>
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Bulan - Tahun</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['bulan'];?></b></p>
                </div>
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Media Publikasi</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['media'];?></b></p>
                </div>
              </div>
              <hr/> <!-- batas 2 colom-->
              <div class="row form-group">
                <div class="col col-md-2">
                  <label for="password-input" class=" form-control-label">Lokasi</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['lokasi'];?></b></p>
                </div>
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Uraian Karya </label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['materi'];?></b></p>
               </div>
               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Bukti Berkas</label>
              </div>
              <div class="col-12 col-md-4">
                <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
              </div>
            </div>
            <hr/> <!-- batas 2 colom-->
            <form action="">
             <div class="row form-group">
               <!-- batas 2 colom-->
               <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Kompetensi</label>
              </div>
              <div class="col-12 col-md-8">
                <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
              </div>

              <div class="col-12 col-md-2">
                <button class="btn-sm btn-primary btn" type="submit" name="KARYA">EDIT KOMPETENSI</button>
              </div>
            </div>
          </form>
          <hr/> <!-- batas 2 colom-->
        <?php } ?>
        <!-- </table> -->
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_karya WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK01" value="<?php echo $row['KK01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK02" value="<?php echo $row['KK02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK03" value="<?php echo $row['KK03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK04" value="<?php echo $row['KK04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK05" value="<?php echo $row['KK05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK06" value="<?php echo $row['KK06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK07" value="<?php echo $row['KK07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK08" value="<?php echo $row['KK08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK09" value="<?php echo $row['KK09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK10" value="<?php echo $row['KK10'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK11" value="<?php echo $row['KK11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK12" value="<?php echo $row['KK12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK13" value="<?php echo $row['KK13'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK14</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK14" value="<?php echo $row['KK14'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK15</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK15" value="<?php echo $row['KK15'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK16</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK16" value="<?php echo $row['KK16'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK17</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK17" value="<?php echo $row['KK17'];?>">
            </div>                      
          </div>  
          <input type="submit" name="EDITNILAIKAR" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- end Karya Tulis di Bidang  Keinsinyuran yang Dipublikasikan  -->
<?php  

if (isset($_POST['KARYA'])) {
  $id = $_POST['id'];
  $kompetensi = $_POST['kompetensi'];

  $query = "UPDATE inovasi_karya SET kompetensi='$kompetensi' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>

  <!-- Makalah/Tulisan Yang Disajikan Dalam Seminar/Lokakarya Keinsinyuran  -->
  <div class="row" id="makalah">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Makalah/Tulisan Yang Disajikan Dalam Seminar/Lokakarya Keinsinyuran,
            <?php if ($status12 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM inovasi_makalah WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                 <!-- batas 2 colom-->
                 <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Judul Makalah</label>
                </div>
                <div class="col-12 col-md-8">
                  <p class=""><b><?php echo $row['judul'];?></b></p>
                </div>
              </div>
              <hr/>
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Bulan - Tahun</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['bulan'];?></b></p>
                </div>
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Nama Lokakarya</label>
                </div>
                <div class="col-12 col-md-4">
                  <p class=""><b><?php echo $row['nama_lokakarya'];?></b></p>
                </div>
              </div>
              <hr/> <!-- batas 2 colom-->
              <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Nama Penyelengara </label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['penyelenggara'];?></b></p>
               </div>
               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Lokasi</label>
              </div>
              <div class="col-12 col-md-4">
                <p class=""><b><?php echo $row['lokasi'];?></b></p>
              </div>
            </div>
            <hr/> <!-- batas 2 colom-->
            <div class="row form-group">
             <!-- batas 2 colom-->
             <div class="col-12 col-md-2">
              <label for="password-input" class=" form-control-label">Uraian</label>
            </div>
            <div class="col-12 col-md-4">
              <p class=""><b><?php echo $row['uraian'];?></b></p>
            </div>
            <div class="col col-md-2">
              <label for="password-input" class=" form-control-label">Bukti Berkas</label>
            </div>
            <div class="col-12 col-md-4">
              <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
            </div>
          </div>
          <hr/> 
          <form action="">
           <div class="row form-group">
             <!-- batas 2 colom-->
             <div class="col-12 col-md-2">
              <label for="password-input" class=" form-control-label">Kompetensi</label>
            </div>
            <div class="col-12 col-md-8">
              <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
              <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
            </div>

            <div class="col-12 col-md-2">
              <button class="btn-sm btn-primary btn" type="submit" name="MAKALAH">EDIT KOMPETENSI</button>
            </div>
          </div>
        </form>
        <hr/> <!-- batas 2 colom-->
      <?php } ?>
      <!-- </table> -->
    </div>
  </div>
</div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_makalah WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK01" value="<?php echo $row['KK01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK02" value="<?php echo $row['KK02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK03" value="<?php echo $row['KK03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK04" value="<?php echo $row['KK04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK05" value="<?php echo $row['KK05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK06" value="<?php echo $row['KK06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK07" value="<?php echo $row['KK07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK08" value="<?php echo $row['KK08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK09" value="<?php echo $row['KK09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK10" value="<?php echo $row['KK10'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK11" value="<?php echo $row['KK11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK12" value="<?php echo $row['KK12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK13" value="<?php echo $row['KK13'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK14</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK14" value="<?php echo $row['KK14'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK15</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK15" value="<?php echo $row['KK15'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK16</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK16" value="<?php echo $row['KK16'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK17</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK17" value="<?php echo $row['KK17'];?>">
            </div>                      
          </div>  
          <input type="submit" name="EDITNILAIMAK" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- end Makalah/Tulisan Yang Disajikan Dalam Seminar/Lokakarya Keinsinyuran  -->
<?php  

if (isset($_POST['MAKALAH'])) {
  $id = $_POST['id'];
  $kompetensi = $_POST['kompetensi'];

  $query = "UPDATE inovasi_makalah SET kompetensi='$kompetensi' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>


  <!-- Seminar/Lokakarya Keinsinyuran Yang Diikuti-->
  <div class="row" id="seminar">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Seminar/Lokakarya Keinsinyuran Yang Diikuti, 
            <?php if ($status13 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM seminar_keinsinyuran WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Bulan - Tahun</label>
                  </div>
                  <div class="col-12 col-md-4">
                    <p class=""><b><?php echo $row['bulan'];?></b></p>
                  </div>
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Nama Seminar</label>
                  </div>
                  <div class="col-12 col-md-4">
                   <p class=""><b><?php echo $row['nama_seminar'];?></b></p>
                 </div>
               </div>
               <hr/> <!-- batas 2 colom-->
               <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Nama Penyelengara </label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['penyelenggara'];?></b></p>
               </div>
               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Lokasi</label>
              </div>
              <div class="col-12 col-md-4">
                <p class=""><b><?php echo $row['lokasi'];?></b></p>
              </div>
            </div>
            <hr/> <!-- batas 2 colom-->
            <div class="row form-group">
             <!-- batas 2 colom-->
             <div class="col-12 col-md-2">
              <label for="password-input" class=" form-control-label">Uraian Seminar</label>
            </div>
            <div class="col-12 col-md-4">
              <p class=""><b><?php echo $row['uraian'];?></b></p>
            </div>
            <div class="col col-md-2">
              <label for="password-input" class=" form-control-label">Bukti Berkas</label>
            </div>
            <div class="col-12 col-md-4">
              <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
            </div>
          </div>
          <form action="">
           <div class="row form-group">
             <!-- batas 2 colom-->
             <div class="col-12 col-md-2">
              <label for="password-input" class=" form-control-label">Kompetensi</label>
            </div>
            <div class="col-12 col-md-8">
              <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
              <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
            </div>

            <div class="col-12 col-md-2">
              <button class="btn-sm btn-primary btn" type="submit" name="SEMINAR">EDIT KOMPETENSI</button>
            </div>
          </div>
        </form>
        <hr/> <!-- batas 2 colom-->
      <?php } ?>
      <!-- </table> -->
    </div>
  </div>
</div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_seminar WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU01" value="<?php echo $row['KU01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU02" value="<?php echo $row['KU02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU03" value="<?php echo $row['KU03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU04" value="<?php echo $row['KU04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU05" value="<?php echo $row['KU05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU06" value="<?php echo $row['KU06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU07" value="<?php echo $row['KU07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU08" value="<?php echo $row['KU08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU09" value="<?php echo $row['KU09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU10" value="<?php echo $row['KU10'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU11" value="<?php echo $row['KU11'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU12" value="<?php echo $row['KU12'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU13" value="<?php echo $row['KU13'];?>">
            </div>                       
          </div>  
          <input type="submit" name="EDITNILAISEM" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- end Seminar/Lokakarya Keinsinyuran Yang Diikuti -->
<?php  

if (isset($_POST['SEMINAR'])) {
  $id = $_POST['id'];
  $kompetensi = $_POST['kompetensi'];

  $query = "UPDATE seminar_keinsinyuran SET kompetensi='$kompetensi' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>

  <!-- Karya Temuan/Inovasi/Paten dan Implementasi Teknologi  Baru -->
  <div class="row" id="teknologi">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Karya Temuan/Inovasi/Paten dan Implementasi Teknologi Baru,
            <?php if ($status14 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
            </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM inovasi_teknologi WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Bulan-Tahun</label>
                  </div>
                  <div class="col-12 col-md-4">
                    <p class=""><b><?php echo $row['bulan'];?></b></p>
                  </div>
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Judul / Nama Karya</label>
                  </div>
                  <div class="col-12 col-md-4">
                   <p class=""><b><?php echo $row['judul'];?></b></p>
                 </div>
               </div>
               <hr/> <!-- batas 2 colom-->
               <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Uraian </label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['uraian'];?></b></p>
               </div>
               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Media Publikasi</label>
              </div>
              <div class="col-12 col-md-4">
                <p class=""><b><?php echo $row['media'];?></b></p>
              </div>
              <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Bukti Berkas</label>
              </div>
              <div class="col-12 col-md-4">
                <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
              </div>
            </div>
            <hr/> <!-- batas 2 colom-->
            <form action="">
             <div class="row form-group">
               <!-- batas 2 colom-->
               <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Kompetensi</label>
              </div>
              <div class="col-12 col-md-8">
                <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
              </div>

              <div class="col-12 col-md-2">
                <button class="btn-sm btn-primary btn" type="submit" name="TEKNOLOGI">EDIT KOMPETENSI</button>
              </div>
            </div>
          </form>
          <hr/> <!-- batas 2 colom-->
        <?php } ?>
        <!-- </table> -->
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_teknologi WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK01" value="<?php echo $row['KK01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK02" value="<?php echo $row['KK02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK03" value="<?php echo $row['KK03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK04" value="<?php echo $row['KK04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK05" value="<?php echo $row['KK05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK06" value="<?php echo $row['KK06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK07" value="<?php echo $row['KK07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK08" value="<?php echo $row['KK08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK09" value="<?php echo $row['KK09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK10" value="<?php echo $row['KK10'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK11" value="<?php echo $row['KK11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK12" value="<?php echo $row['KK12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK13" value="<?php echo $row['KK13'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK14</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK14" value="<?php echo $row['KK14'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK15</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK15" value="<?php echo $row['KK15'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK16</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK16" value="<?php echo $row['KK16'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KK17</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KK17" value="<?php echo $row['KK17'];?>">
            </div>
            <!-- kU -->
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU01" value="<?php echo $row['KU01'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU02" value="<?php echo $row['KU02'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU03" value="<?php echo $row['KU03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU04" value="<?php echo $row['KU04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU05" value="<?php echo $row['KU05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU06" value="<?php echo $row['KU06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU07" value="<?php echo $row['KU07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU08" value="<?php echo $row['KU08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU09" value="<?php echo $row['KU09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU10" value="<?php echo $row['KU10'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU11</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU11" value="<?php echo $row['KU11'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU12</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU12" value="<?php echo $row['KU12'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">KU13</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="KU13" value="<?php echo $row['KU13'];?>">
            </div> 
          </div>  
          <input type="submit" name="EDITNILAITEK" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- end Karya Temuan/Inovasi/Paten dan Implementasi Teknologi  Baru -->
<?php  

if (isset($_POST['TEKNOLOGI'])) {
  $id = $_POST['id'];
  $kompetensi = $_POST['kompetensi'];

  $query = "UPDATE inovasi_teknologi SET kompetensi='$kompetensi' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>

  <!-- BAHASA YANG DIKUASAI -->
  <div class="row" id="bahasa">
    <div class="col-lg-9">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <h3 style="color: #16697a;">Bahasa Yang Dikuasai, 
              <?php if ($status15 == 1) { echo "<p style='color:#61b15a;'><i class='fa fa-check-circle'></i></p>"; } ?>
              </h3>
            <hr/>
            <!-- <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center"> -->
              <?php 
              $nokta = $_GET['id'];
              $query = mysqli_query($connect, "SELECT * FROM bahasa WHERE nokta='$nokta'");
              while($row = mysqli_fetch_assoc($query)){
                ?>
                <div class="row form-group">
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Nama  Bahasa</label>
                  </div>
                  <div class="col-12 col-md-4">
                    <p class=""><b><?php echo $row['nama_bahasa'];?></b></p>
                  </div>
                  <div class="col-12 col-md-2">
                    <label for="password-input" class=" form-control-label">Kemampuan Aktif / Pasif</label>
                  </div>
                  <div class="col-12 col-md-4">
                   <p class=""><b><?php echo $row['kemampuan'];?></b></p>
                 </div>
               </div>
               <hr/> <!-- batas 2 colom-->
               <div class="row form-group">
                <div class="col-12 col-md-2">
                  <label for="password-input" class=" form-control-label">Jenis Tulisan yg Disusun </label>
                </div>
                <div class="col-12 col-md-4">
                 <p class=""><b><?php echo $row['tulisan'];?></b></p>
               </div>
               <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Nilai Tofle / Sejenisnya</label>
              </div>
              <div class="col-12 col-md-4">
                <p class=""><b><?php echo $row['toefl'];?></b></p>
              </div>
              <div class="col col-md-2">
                <label for="password-input" class=" form-control-label">Bukti Berkas</label>
              </div>
              <div class="col-12 col-md-4">
                <img src="../mahasiswa/bukti_berkas/<?php echo $row['bukti_berkas'] ?>" width="100" height="100">
              </div>
            </div>
            <hr/> <!-- batas 2 colom-->
            <form action="">
             <div class="row form-group">
               <!-- batas 2 colom-->
               <div class="col-12 col-md-2">
                <label for="password-input" class=" form-control-label">Kompetensi</label>
              </div>
              <div class="col-12 col-md-8">
                <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
                <input class="form-control" type="text" name="kompetensi" value="<?php echo $row['kompetensi'];?>">
              </div>

              <div class="col-12 col-md-2">
                <button class="btn-sm btn-primary btn" type="submit" name="BAHASA">EDIT KOMPETENSI</button>
              </div>
            </div>
          </form>
          <hr/> <!-- batas 2 colom-->
        <?php } ?>
        <!-- </table> -->
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3">
  <?php 
  $nokta = $_GET['id'];
  $query = mysqli_query($connect, "SELECT * FROM hasil_bahasa WHERE nokta='$nokta'");
  while($row = mysqli_fetch_assoc($query)){
    ?>
    <form action="jmlCPL.php" method="POST">

      <!-- General Element -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="input-group-prepend">
            <span class="input-group-text">Data Nilai CPL</span>
          </div>
          <input class="form-control" type="hidden" name="id" value="<?php echo $row['id'];?>">
          <input type="hidden" name="nokta" class="form-control" value="<?php echo $row['nokta'];?>">
          <input type="hidden" name="nama_lengkap" class="form-control" value="<?php echo $row['nama_lengkap'];?>"><hr>
          <div class="row form-group">
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK01</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK01" value="<?php echo $row['SK01'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK02</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK02" value="<?php echo $row['SK02'];?>">
            </div>
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK03</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK03" value="<?php echo $row['SK03'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK04</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK04" value="<?php echo $row['SK04'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK05</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK05" value="<?php echo $row['SK05'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK06</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK06" value="<?php echo $row['SK06'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK07</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK07" value="<?php echo $row['SK07'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK08</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK08" value="<?php echo $row['SK08'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK09</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK09" value="<?php echo $row['SK09'];?>">
            </div> 
            <div class="col-12 col-md-3">
              <label for="password-input" class=" form-control-label">SK10</label>
            </div>
            <div class="col-12 col-md-9">
              <input class="form-control" type="text" name="SK10" value="<?php echo $row['SK10'];?>">
            </div> 
          </div>  
          <input type="submit" name="EDITNILAIBAH" class="btn btn-primary" value="Simpan Nilai">
        </div>
      </div>
    </form>
  </div>
<?php } ?>
</div>
<!-- end BAHASA YANG DIKUASAI -->
<?php  

if (isset($_POST['BAHASA'])) {
  $id = $_POST['id'];
  $kompetensi = $_POST['kompetensi'];

  $query = "UPDATE bahasa SET kompetensi='$kompetensi' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
      echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
    }else{
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
  ?>



  <!-- Modal Logout -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to logout?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
        <a href="../logout.php" class="btn btn-primary">Logout</a>
      </div>
    </div>
  </div>
</div>
</div>

