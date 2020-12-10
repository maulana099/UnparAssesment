<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=profil'</script>";
}

$sql = "select * from dataorganisasi where id='$id'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nama = $data ['nama_lengkap'];
$nokta = $data ['nokta'];
$nama_organisasi = $data['nama_organisasi'];
$periode = $data['periode'];
$aktifitas_jabatan = $data['aktifitas_jabatan'];
$kompetensi = $data['kompetensi'];
?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Organisasi</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Formulir Asesment Mandiri</li>
      <li class="breadcrumb-item active" aria-current="page">Edit Data Organisasi</li>
    </ol>
  </div>

  <form action="" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-lg-6">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Edit Data Organisasi</h6>
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
              <input type="text" name="nama_organisasi" value="<?php echo $nama_organisasi; ?>"class="form-control">
            <br>
              <div class="input-group-prepend">
                      <span class="input-group-text">periode</span>
                    </div>
                        <input type="text" class="form-control" name="periode" value="<?php echo $periode; ?>">
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
                    <textarea class="form-control" name="aktifitas_jabatan"> <?php echo $aktifitas_jabatan; ?></textarea>
                    </div>
                    <div class="form-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">kompetensi</span>
                    </div>
                      <input type="text" name="kompetensi" class="form-control" value="<?php echo $kompetensi; ?>">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">
                    </label>
                        <b>Bukti berkas  :</b>
                        <input type="file" name="bukti_berkas" accept="image/*"> <br>  
                        <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah bukti berkas<br>
                    </div>      
                    <input type="submit" class="btn btn-primary" name="EDIT" id="EDIT" value="Edit Data">
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
$nama_organisasi = $_POST['nama_organisasi'];
$periode = $_POST['periode'];
$aktifitas_jabatan = $_POST['aktifitas_jabatan'];
$kompetensi = $_POST['kompetensi'];

if(isset($_POST['ubah_foto'])){
      $bukti_berkas = $_FILES['bukti_berkas']['name'];
      $tmp = $_FILES['bukti_berkas']['tmp_name'];
      
      $path = "bukti_berkas/".$bukti_berkas;

      if(move_uploaded_file($tmp, $path)){ 
          $query = "SELECT * FROM dataorganisasi WHERE id='".$id."'";
          $sql = mysqli_query($connect, $query);
          $data = mysqli_fetch_array($sql); 

          unlink("bukti_berkas/".$data['bukti_berkas']);
        
          $query = "UPDATE dataorganisasi SET nokta='$nokta', nama_lengkap='$nama', nama_organisasi='$nama_organisasi', periode='$periode', aktifitas_jabatan='$aktifitas_jabatan', kompetensi='$kompetensi', bukti_berkas='$bukti_berkas' where id='$id'";
          $sql = mysqli_query($connect, $query); 

           if($sql){
              echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataorganisasi'</script>"; // Redirect ke halaman index.php // Redirect ke halaman index.php
            }else{
              echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
              echo "<br><a href='index.php'>Kembali Ke Form</a>";
            }
          }else{
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='index.php'>Kembali Ke Form</a>";
          }
        }else{
          $query = "UPDATE dataorganisasi SET nokta='$nokta', nama_lengkap='$nama', nama_organisasi='$nama_organisasi', periode='$periode', aktifitas_jabatan='$aktifitas_jabatan', kompetensi='$kompetensi' where id='$id'";
          $sql = mysqli_query($connect, $query); 

          if($sql){ 
            echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataorganisasi'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
          }else{
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='index.php'>Kembali Ke Form</a>";
          }
        }

        }

        //   $query = "UPDATE dataorganisasi SET nokta='$nokta', nama_lengkap='$nama', nama_organisasi='$nama_organisasi', periode='$periode', aktifitas_jabatan='$aktifitas_jabatan', kompetensi='$kompetensi'where id='$id'";
        //   $sql = mysqli_query($connect, $query); 

        //   if($sql){ 
        //     echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataorganisasi'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
        //   }else{
        //     echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        //     echo "<br><a href='index.php'>Kembali Ke Form</a>";
        //   }
        // }
