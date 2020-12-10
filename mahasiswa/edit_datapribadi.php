<?php
include "koneksi.php";
if (isset($_GET['nokta'])) {
 $nokta=$_GET['nokta'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=profil'</script>";
}

$sql = "select * from datapribadi where nokta='$nokta'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nokta = $data['nokta'];
$nama_lengkap = $data['nama_lengkap'];
$tempat_lahir = $data['tempat_lahir'];
$tanggal_lahir = $data['tanggal_lahir'];
$tanggal_lahir = date('Y-m-d', strtotime($tanggal_lahir));
$kejuruan = $data['kejuruan'];
$alamat_rumah = $data['alamat_rumah'];
$alamat_lembaga = $data['alamat_lembaga'];
$email = $data['email'];
$nohp = $data['nohp'];

?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Pribadi</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Formulir Asesment Mandiri</li>
      <li class="breadcrumb-item active" aria-current="page">Isi Data Pribadi</li>
    </ol>
  </div>

  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Isi Data Pribadi</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
            <div class="input-group-prepend">
                      <!-- <span class="input-group-text">No. KTA</span> -->
                      <label class="text-primary">No. KTA</label>
                    </div>
              <input type="text" name="nokta" class="form-control" value="<?php echo $nokta; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
            <div class="input-group-prepend">
                      <!-- <span class="input-group-text">Nama Lengkap</span> -->
                      <label class="text-primary">Nama Lengkap</label>
                    </div>
              <input type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="<?php echo $nama_lengkap; ?>" readonly>
            </div>
                  <div class="form-group" id="simple-date1">
                  <div class="input-group-prepend">
                      <!-- <span class="input-group-text">Tempat Lahir</span> -->
                      <label class="text-primary">Tempat Lahir</label>
                    </div>
              <input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" class="form-control">
              <div class="input-group-prepend">
                      <!-- <span class="input-group-text">Tanggal</span> -->
                      <label class="text-primary">Tanggal</label>
                    </div>
                      <div class="input-group date">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" id="simpleDataInput">
                    </div>
                    <br>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <!-- <span class="input-group-text">Badan Kejuruan</span> -->
                      <label class="text-primary">Badan Kejuruan</label>
                    </div>
              <input type="text" name="kejuruan" value="<?php echo $kejuruan; ?>" class="form-control" id="exampleInputEmail1">
            </div>
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
                      <!-- <span class="input-group-text">Alamat Rumah</span> -->
                      <label class="text-primary">Alamat Rumah</label>
                    </div>
                    <textarea class="form-control" aria-label="With textarea" name="alamat_rumah"><?php echo $alamat_rumah; ?></textarea> 
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <!-- <span class="input-group-text">Alamat Lembaga / Instansi</span> -->
                      <label class="text-primary">Alamat Lembaga / Instansi</label>
                    </div>
                    <textarea class="form-control" aria-label="With textarea" name="alamat_lembaga" ><?php echo $alamat_lembaga; ?></textarea>
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <!-- <span class="input-group-text">E-mail</span> -->
                      <label class="text-primary">E-mail</label>
                    </div>
                      <input type="text" name="email" value="<?php echo $email; ?>" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <!-- <span class="input-group-text">No. Hp</span> -->
                      <label class="text-primary">No. Hp</label>
                    </div>
                      <input type="text" name="nohp" value="<?php echo $nohp; ?>" class="form-control" id="exampleInputEmail1">
                    </div>
                                
                    <input type="submit" class="btn btn-primary" name="EDIT" id="EDIT" value="Update Profil">
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
    if (isset($_POST['EDIT'])) {
      $id = $data['id'];
      $nokta = $_POST['nokta'];
      $nama_lengkap = $_POST['nama_lengkap'];
      $tempat_lahir = $_POST['tempat_lahir'];
      $tanggal_lahir = $_POST['tanggal_lahir'];
      $tanggal_lahir = date('Y-m-d', strtotime($tanggal_lahir));
      $kejuruan = $_POST['kejuruan'];
      $alamat_rumah = $_POST['alamat_rumah'];
      $alamat_lembaga = $_POST['alamat_lembaga'];
      $email = $_POST['email'];
      $nohp = $_POST['nohp'];
        
          $query = "UPDATE datapribadi SET nokta='$nokta', nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', kejuruan='$kejuruan', alamat_rumah='$alamat_rumah', alamat_lembaga='$alamat_lembaga', email='$email', nohp='$nohp' where id='$id'";
          $sql = mysqli_query($connect, $query); 

          if($sql){ 
            echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=cekdatapribadi'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
          }else{
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='index.php'>Kembali Ke Form</a>";
          }
        }