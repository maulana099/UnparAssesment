<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=profil'</script>";
}

$sql = "select * from datapendidikan1 where id='$id'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nama = $data ['nama_lengkap'];
$nokta = $data ['nokta'];
$tingkatpendidikan = $data['tingkatpendidikan'];
$perguruantinggi = $data ['perguruantinggi'];
$fakultas = $data ['fakultas'];
$jurusan = $data['jurusan'];
$kota = $data ['kota'];
$negara = $data ['negara'];
$tahunlulus = $data ['tahunlulus'];
$gelar = $data['gelar'];
$judulta = $data ['judulta'];
$deskripsita = $data ['deskripsita'];
?>

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Pendidikan</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Formulir Asesment Mandiri</li>
      <li class="breadcrumb-item active" aria-current="page">Edit Data Pendidikan</li>
    </ol>
  </div>

  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Isi Data Pendidikan</h6>
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
                      <span class="input-group-text">Tingkat Pendidikan</span>
                    </div>
              <input type="text" name="tingkatpendidikan" value="<?php echo $tingkatpendidikan; ?>" class="form-control">
            <br>
              <div class="input-group-prepend">
                      <span class="input-group-text">Perguruan Tinggi</span>
                    </div>
                        <input type="text" class="form-control" value="<?php echo $perguruantinggi; ?>" name="perguruantinggi">
                    <br>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Fakultas</span>
                    </div>
              <input type="text" name="fakultas" class="form-control"  value="<?php echo $fakultas; ?>" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Jurusan</span>
                    </div>
                    <input class="form-control" aria-label="With textarea"  value="<?php echo $jurusan; ?>" name="jurusan"> 
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
                      <span class="input-group-text">Kota</span>
                    </div>
                    <input class="form-control" aria-label="With textarea"  value="<?php echo $kota; ?>" name="kota">
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Negara</span>
                    </div>
                      <input type="text" name="negara" class="form-control"  value="<?php echo $negara; ?>" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Tahun Lulus</span>
                    </div>
                      <input type="text" name="tahunlulus" class="form-control"  value="<?php echo $tahunlulus; ?>" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Gelar</span>
                    </div>
                      <input type="text" name="gelar" class="form-control"  value="<?php echo $gelar; ?>" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Judul Tugas Akhir</span>
                    </div>
                      <input type="text" name="judulta" class="form-control"  value="<?php echo $judulta; ?>" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Deskripsi Tugas Akhir</span></span>
                    </div>
                      <input type="text" name="deskripsita" class="form-control"  value="<?php echo $deskripsita; ?>" id="exampleInputEmail1">
                    </div>
                                
                    <input type="submit" class="btn btn-primary" name="EDIT" id="EDIT" value="Update Data">
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
    $nama = $_POST ['nama_lengkap'];
    $nokta = $_POST ['nokta'];
    $tingkatpendidikan = $_POST['tingkatpendidikan'];
    $perguruantinggi = $_POST ['perguruantinggi'];
    $fakultas = $_POST ['fakultas'];
    $jurusan = $_POST['jurusan'];
    $kota = $_POST ['kota'];
    $negara = $_POST ['negara'];
    $tahunlulus = $_POST ['tahunlulus'];
    $gelar = $_POST['gelar'];
    $judulta = $_POST ['judulta'];
    $deskripsita = $_POST ['deskripsita'];

    

          $query = "UPDATE datapendidikan1 SET nokta='$nokta', nama_lengkap='$nama', tingkatpendidikan='$tingkatpendidikan', perguruantinggi='$perguruantinggi', fakultas='$fakultas', jurusan='$jurusan', kota='$kota', negara='$negara', tahunlulus='$tahunlulus', gelar='$gelar', judulta='$judulta', deskripsita='$deskripsita' where id='$id'";
          $sql = mysqli_query($connect, $query); 

          if($sql){ 
            echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=datapendidikan'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
          }else{
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='index.php'>Kembali Ke Form</a>";
          }
        }
