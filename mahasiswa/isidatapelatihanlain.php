<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=profil'</script>";
}

$sql = "select * from profil where id='$id'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nama = $data ['nama_lengkap'];
$nokta = $data ['nokta'];
?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Isi Data Pelatihan Manajemen dan Bidang Lainnya</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Formulir Asesment Mandiri</li>
      <li class="breadcrumb-item active" aria-current="page">Isi Data Pelatihan Manajemen dan Bidang Lainnya</li>
    </ol>
  </div>

  <form action="" method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Isi Data Pelatihan Manajemen dan Bidang Lainnya</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
            <div class="input-group-prepend">
                      <span class="input-group-text">No. KTA</span>
                    </div>
              <input type="text" name="nokta" class="form-control" value="<?php echo $nokta; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
            <div class="input-group-prepend">
                      <span class="input-group-text">Nama Lengkap</span>
                    </div>
              <input type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="<?php echo $nama; ?>" readonly>
            </div>
                  <div class="form-group" id="simple-date1">
                  <div class="input-group-prepend">
                      <span class="input-group-text">Nama Pelatihan</span>
                    </div>
              <input type="text" name="nama_pelatihan" class="form-control">
            <br>
              <div class="input-group-prepend">
                      <span class="input-group-text">Tahun</span>
                    </div>
                        <input type="text" class="form-control" name="tahun">
                    <br>
                   </div>
                 </div>
               </div>
               </div>
               <div class="col-lg-6">
              <!-- General Element -->
              <div class="card mb-4">
                <div class="card-body">
                   
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Jumlah Jam / Hari</span>
                    </div>
                    <input type="text" class="form-control" name="jumlah">
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Uraian Singkat Pelatihan</span>
                    </div>
                    <textarea class="form-control" name="uraian"></textarea>
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Kompetensi - <b> *KU</b></span>
                    </div>
                      <input type="text" name="kompetensi" class="form-control" id="exampleInputEmail1">
                    </div>  
                    <div class="form-group">       
                    <input type="submit" class="btn btn-primary" name="tambah" value="Simpan Data">
                    </div>
                </div>
              </div>

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
if (isset($_POST['tambah'])) {
    $id = $data['id'];
    $nokta = $_POST['nokta'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $nama_pelatihan = $_POST['nama_pelatihan'];
    $tahun = $_POST['tahun'];
    $jumlah = $_POST['jumlah'];
    $uraian = $_POST['uraian'];
    $kompetensi = $_POST['kompetensi'];
    $bukti_berkas = $_POST['bukti_berkas'];

  $sql = mysqli_query($connect, "INSERT INTO datapelatihanlain VALUES ('','$nokta','$nama_lengkap','$nama_pelatihan','$tahun','$jumlah','$uraian','$kompetensi','')");

  if($sql){
   echo "<script>alert('Data Berhasil Ditambah');document.location='index.php?page=datapelatihanlain'</script>";
  }else{
    echo "Maaf terjadi kesalahan";
    echo "<a href='index.php?page=datapelatihanlain'>Kembali</a>";
  }
}
  
?>