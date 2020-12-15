<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=profil'</script>";
}

$sql = "SELECT * from profil where id='$id'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nama = $data ['nama_lengkap'];
$nokta = $data ['nokta'];
?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">PUBLIKASI INOVASI BIDANG KEINSINYURAN</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Formulir Asesment Mandiri</li>
      <li class="breadcrumb-item active" aria-current="page">MAKALAH SEMINAR</li>
    </ol>
  </div>
  <p><b>Makalah/Tulisan Yang Disajikan Dalam Seminar/Lokakarya Keinsinyuran.</b></p>
  <p><b><span style="color: red;">Notes</span></b> : jika salah satu Form tidak akan di isi, input dengan text<span style="color: red;"> * tidak ada</span>.</p>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-6">
        <!-- Form Basic -->
        <div class="card mb-4">
<!--           <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Isi Soal KUALIFIKASI INSIYUR</h6>
          </div> -->
          <div class="card-body">
            <div class="form-group">
              <div class="">
                <span class="">No. KTA</span>
              </div>
              <input type="text" name="nokta" class="form-control" value="<?php echo $nokta; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Nama Lengkap</span>
              </div>
              <input type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="<?php echo $nama; ?>" readonly>
            </div>
            <div class="form-group" id="simple-date1">
              <div class="">
                <span class="">Bulan - Tahun</span>
              </div>
              <input type="text" name="bulan" class="form-control" required="" placeholder="tidak ada">
              </div>
              <div class="form-group">
              <div class="">
                <span class="">Nama Lokakarya</span>
              </div>
              <input type="text" class="form-control" name="nama_lokakarya" required="">
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Penyelenggara</span>
              </div>
              <input type="text" class="form-control" name="penyelenggara" required="">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- General Element -->
        <div class="card mb-4">
          <div class="card-body">

            <div class="form-group">
              <div class="">
                <span class="">Lokasi</span>
              </div>
              <textarea name="lokasi" class="form-control" id="exampleInputEmail1" required=""></textarea> 
            </div>

            <div class="form-group">
              <div class="">
                <span class="">Judul Karya</span>
              </div>
              <input type="text" name="judul" class="form-control" id="exampleInputEmail1" required="">
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Uraian Materi</span>
              </div>
              <textarea type="text" name="uraian" class="form-control" id="exampleInputEmail1" required=""></textarea>
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Kompetensi - <b> * KK</b></span>
              </div>
              <input type="text" name="kompetensi" class="form-control" id="exampleInputEmail1" required="">
            </div>
                    <div class="form-group">  
            <input type="submit" class="btn btn-primary" name="tambahMakalah" value="Simpan Data">
          </div>
        </div>
      </div>
    </form>
      
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
  
<?php
if (isset($_POST['tambahMakalah'])) {
  $id = $data['id'];
  $nokta = $_POST['nokta'];
  $nama_lengkap = $_POST['nama_lengkap'];
  $bulan = $_POST['bulan'];
  $nama_lokakarya = $_POST['nama_lokakarya'];
  $penyelenggara = $_POST['penyelenggara'];
  $lokasi = $_POST['lokasi'];
  $judul = $_POST['judul'];
  $uraian = $_POST['uraian'];
  $kompetensi = $_POST['kompetensi'];
  $bukti_berkas = $_POST['bukti_berkas'];

  $sql = mysqli_query($connect, "INSERT INTO inovasi_makalah VALUES ('','$nokta','$nama_lengkap','$bulan','$nama_lokakarya','$penyelenggara','$lokasi','$judul','$uraian','$kompetensi','')");

  if($sql){
   echo "<script>alert('Data Berhasil Ditambah');document.location='index.php?page=datainovasimakalah'</script>";
  }else{
    echo "Maaf terjadi kesalahan";
    echo "<a href='index.php?page=datainovasimakalah'>Kembali</a>";
  }
}
  
?>