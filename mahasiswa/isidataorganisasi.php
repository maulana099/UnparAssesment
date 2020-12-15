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
    <h1 class="h3 mb-0 text-gray-800">Isi Data Organisasi</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Formulir Asesment Mandiri</li>
      <li class="breadcrumb-item active" aria-current="page">Isi Data Organisasi</li>
    </ol>
  </div>
  <p><b>Organisasi Profesi & Organisasi Lainnya Yang Dimasuki</b> </p>
  <p><b><span style="color: red;">Notes</span></b> : jika salah satu Form tidak akan di isi, input dengan text<span style="color: red;"> * tidak ada</span>.</p>

  <form action="tambahdataorganisasi.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-6">
        <!-- Form Basic -->
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Isi Data Organisasi</h6>
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
                <span class="input-group-text">Nama Organisasi</span>
              </div>
              <input type="text" name="nama_organisasi" class="form-control" required="" placeholder="tidak ada">
              <br>
              <div class="input-group-prepend">
                <span class="input-group-text">periode</span>
              </div>
              <input type="text" class="form-control" name="periode" required="">
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
                <span class="input-group-text">Aktifitas Jabatan</span>
              </div>
              <textarea class="form-control" name="aktifitas_jabatan" required=""></textarea>
            </div>
            <div class="form-group">
              <div class="input-group-prepend">
                <span class="input-group-text">Kompetensi - <b> *SK</b></span>
              </div>
              <input type="text" name="kompetensi" class="form-control" id="exampleInputEmail1" required="">
            </div>   
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