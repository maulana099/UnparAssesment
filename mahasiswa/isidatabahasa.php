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
    <h1 class="h3 mb-0 text-gray-800">BAHASA YANG DIKUASAI</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Formulir Asesment Mandiri</li>
      <li class="breadcrumb-item active" aria-current="page">BAHASA</li>
    </ol>
  </div>
  <p><b><span style="color: red;">Notes</span></b> : Kemampuan Bahasa Yang Dikuasai.</p>

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
            <div class="form-group">
              <div class="">
                <span class="">Nama Bahasa</span>
              </div>
              <input type="text" name="nama_bahasa" class="form-control">
            </div>
            <div class="form-group" id="simple-date1">
              <div class="">
                <span class="">Kemampuan Verbal Aktif / Pasif</span>
              </div>
              <input type="text" name="kemampuan" class="form-control">
              </div>
              <div class="form-group">
              <div class="">
                <span class="">tulisan yg mampu di susun</span>
              </div>
              <input type="text" class="form-control" name="tulisan">
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Nilai Toefl / Sejenisnya</span>
              </div>
              <input type="text" class="form-control" name="toefl">
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Kompetensi</span>
              </div>
              <input type="text" class="form-control" name="kompetensi">
            </div>
              <div class="form-group">   

            <input type="submit" class="btn btn-primary" name="tambahBahasa" value="Simpan Data">
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
if (isset($_POST['tambahBahasa'])) {
  $id = $data['id'];
// menangkap data yang di kirim dari form
$nokta = $_POST['nokta'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_bahasa = $_POST['nama_bahasa'];
$kemampuan = $_POST['kemampuan'];
$tulisan = $_POST['tulisan'];
$toefl = $_POST['toefl'];
$kompetensi = $_POST['kompetensi'];
$bukti_berkas =$_POST['bukti_berkas'];

  $sql = mysqli_query($connect, "INSERT INTO bahasa VALUES ('', '$nokta', '$nama_lengkap', '$nama_bahasa', '$kemampuan', '$tulisan', '$toefl', '$kompetensi','')");

  if($sql){
   echo "<script>alert('Data Berhasil Ditambah');document.location='index.php?page=databahasa'</script>";
  }else{
    echo "Maaf terjadi kesalahan";
    echo "<a href='index.php?page=databahasa'>Kembali</a>";
  }
}

?>
