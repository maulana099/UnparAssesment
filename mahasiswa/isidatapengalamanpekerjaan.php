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
    <h1 class="h3 mb-0 text-gray-800">Isi Data KUALIFIKASI INSINYUR</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Formulir Asesment Mandiri</li>
      <li class="breadcrumb-item active" aria-current="page">KUALIFIKASI INSIYUR</li>
    </ol>
  </div>
  <p><b>Pengalaman Dalam Pekerjaan Manufaktur atau Produksi dan/atau Pengalaman Dalam Konsultansi Perekayasaan dan/atau Konstruksi/Instalasi.</b> </p>
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
                <span class="">Periode</span>
              </div>
              <input type="number" name="perioda" class="form-control" required="" placeholder="tidak ada">
              </div>
              <div class="form-group">
              <div class="">
                <span class="">Perusahaan / Intansi</span>
              </div>
              <input type="text" class="form-control" name="intansi" required="">
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Nama Proyek</span>
              </div>
              <input type="text" class="form-control" name="nama_proyek" required="">
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
                <span class="">Posisi / Jabatan</span>
              </div>
              <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" required="">
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Kegiatan</span>
              </div>
              <textarea class="form-control" aria-label="With textarea" name="kegiatan" required=""></textarea>
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Kompetensi - <b> *KU, KK</b></span>
              </div>
              <input type="text" name="kompetensi" class="form-control" id="exampleInputEmail1" required="">
            </div>

            <input type="submit" class="btn btn-primary" name="tambahManufaktur" value="Simpan Data">
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
if (isset($_POST['tambahManufaktur'])) {
  $id = $data['id'];
    $nokta = $_POST['nokta'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $perioda = $_POST['perioda'];
    $intansi = $_POST['intansi'];
    $nama_proyek = $_POST['nama_proyek'];
    $lokasi = $_POST['lokasi'];
    $jabatan = $_POST['jabatan'];
    $kegiatan = $_POST['kegiatan'];
    $kompetensi = $_POST['kompetensi'];
    $bukti_berkas =$_POST['bukti_berkas'];

// menginput data ke database
    mysqli_query($connect, "INSERT INTO manufaktur VALUES ('', '$nokta', '$nama_lengkap', '$perioda', '$intansi', '$nama_proyek', '$lokasi', '$jabatan', '$kegiatan', '$kompetensi','')");

  if($sql){ 
    echo "<script>alert('Data Berhasil Ditambahkan');document.location='index.php?page=datapengalamanpekerjaan'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='index.php'>Kembali Ke Form</a>";
  }

}

?>
