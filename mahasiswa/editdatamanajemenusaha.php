<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=profil'</script>";
}

$sql = "SELECT * from usaha_asset where id='$id'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nokta = $data['nokta'];
$nama_lengkap = $data['nama_lengkap'];
$perioda = $data['perioda'];
$perusahaan = $data['perusahaan'];
$posisi = $data['posisi'];
$nama_proyek = $data['nama_proyek'];
$lokasi = $data['lokasi'];
$kegiatan = $data['kegiatan'];
$kompetensi = $data['kompetensi'];
?>

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">EDIT Data KUALIFIKASI INSINYUR</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Formulir Asesment Mandiri</li>
      <li class="breadcrumb-item active" aria-current="page">KUALIFIKASI INSIYUR</li>
    </ol>
  </div>
  <p><b><span style="color: red;">Notes</span></b> : Pengalaman Dalam Pekerjaan Manufaktur atau Produksi dan/atau Pengalaman Dalam Konsultansi Perekayasaan dan/atau Konstruksi/Instalasi.</p>

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
              value="<?php echo $nama_lengkap; ?>" readonly>
            </div>
            <div class="form-group" id="simple-date1">
              <div class="">
                <span class="">Periode</span>
              </div>
              <input type="number" name="perioda" class="form-control" value="<?php echo $perioda; ?>">
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Perusahaan / perusahaan</span>
              </div>
              <input type="text" class="form-control" name="perusahaan" value="<?php echo $perusahaan; ?>">
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
                <span class="">Nama Proyek</span>
              </div>
              <input type="text" name="nama_proyek" class="form-control" id="exampleInputEmail1" value="<?php echo $nama_proyek; ?>">
            </div>

            <div class="form-group">
              <div class="">
                <span class="">Lokasi</span>
              </div>
              <input type="text" name="lokasi" class="form-control" id="exampleInputEmail1" value="<?php echo $lokasi; ?>">
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Posisi / posisi</span>
              </div>
              <input type="text" name="posisi" class="form-control" id="exampleInputEmail1" value="<?php echo $posisi; ?>">
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Kegiatan</span>
              </div>
              <input class="form-control" aria-label="With textarea" name="kegiatan" value="<?php echo $kegiatan; ?>"> 
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Kompetensi</span>
              </div>
              <input type="text" name="kompetensi" class="form-control" id="exampleInputEmail1" value="<?php echo $kompetensi; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">
              </label>
                  <b>Bukti berkas  :</b>
                  <input type="file" name="bukti_berkas" accept="image/*"> <br>  
                  <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah bukti berkas<br>
              </div> 
            <input type="submit" class="btn btn-primary" name="updateUsaha" value="UPDATE DATA">
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
if (isset($_POST['updateUsaha'])) {
  $id = $data['id'];
  $nokta = $_POST['nokta'];
  $nama_lengkap = $_POST['nama_lengkap'];
  $perioda = $_POST['perioda'];
  $perusahaan = $_POST['perusahaan'];
  $nama_proyek = $_POST['nama_proyek'];
  $lokasi = $_POST['lokasi'];
  $posisi = $_POST['posisi'];
  $kegiatan = $_POST['kegiatan'];
  $kompetensi = $_POST['kompetensi'];

  if(isset($_POST['ubah_foto'])){
      $bukti_berkas = $_FILES['bukti_berkas']['name'];
      $tmp = $_FILES['bukti_berkas']['tmp_name'];
      
      $path = "bukti_berkas/".$bukti_berkas;

      if(move_uploaded_file($tmp, $path)){ 
          $query = "SELECT * FROM usaha_asset WHERE id='".$id."'";
          $sql = mysqli_query($connect, $query);
          $data = mysqli_fetch_array($sql); 

          unlink("bukti_berkas/".$data['bukti_berkas']);
        
          $query = "UPDATE usaha_asset SET nokta='$nokta', nama_lengkap='$nama_lengkap', perioda='$perioda', perusahaan='$perusahaan', nama_proyek='$nama_proyek', lokasi='$lokasi', posisi='$posisi', kegiatan='$kegiatan', kompetensi='$kompetensi', bukti_berkas='$bukti_berkas' where id='$id'";
          $sql = mysqli_query($connect, $query); 

           if($sql){
              echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=datamanajemenusaha'</script>"; // Redirect ke halaman index.php // Redirect ke halaman index.php
            }else{
              echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
              echo "<br><a href='index.php'>Kembali Ke Form</a>";
            }
          }else{
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='index.php'>Kembali Ke Form</a>";
          }
        }else{
          $query = "UPDATE usaha_asset SET nokta='$nokta', nama_lengkap='$nama_lengkap', perioda='$perioda', perusahaan='$perusahaan', nama_proyek='$nama_proyek', lokasi='$lokasi', posisi='$posisi', kegiatan='$kegiatan', kompetensi='$kompetensi' where id='$id'";
          $sql = mysqli_query($connect, $query); 

          if($sql){ 
            echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=datamanajemenusaha'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
          }else{
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='index.php'>Kembali Ke Form</a>";
          }
        }
}
?>