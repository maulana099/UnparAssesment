<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=profil'</script>";
}

$sql = "SELECT * from seminar_keinsinyuran where id='$id'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nokta = $data['nokta'];
$nama_lengkap = $data['nama_lengkap'];
$bulan = $data['bulan'];
$nama_seminar = $data['nama_seminar'];
$penyelenggara = $data['penyelenggara'];
$lokasi = $data['lokasi'];
$uraian = $data['uraian'];
$kompetensi = $data['kompetensi'];
?>

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">SEMINAR KEINSINYURAN</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Formulir Asesment Mandiri</li>
      <li class="breadcrumb-item active" aria-current="page">SEMINAR KEINSINYURAN</li>
    </ol>
  </div>
  <p><b><span style="color: red;">Notes</span></b> :Seminar/Lokakarya Keinsinyuran Yang Diikuti.</p>

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
                <span class="">Bulan - Tahun</span>
              </div>
              <input type="text" name="bulan" class="form-control" value="<?php echo $bulan; ?>">
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Nama Seminar</span>
              </div>
              <input type="text" class="form-control" name="nama_seminar" value="<?php echo $nama_seminar; ?>">
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Nama Penyelenggara</span>
              </div>
              <input type="text" class="form-control" name="penyelenggara" value="<?php echo $penyelenggara; ?>">
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
              <textarea type="text" class="form-control" name="lokasi"><?php echo $lokasi; ?></textarea> 
            </div>
            <div class="form-group">
              <div class="">
                <span class="">Uraian Materi Seminar</span>
              </div>
              <textarea type="text" name="uraian" class="form-control" id="exampleInputEmail1"><?php echo $uraian; ?></textarea> 
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
              <div class="form-group"> 
            <input type="submit" class="btn btn-primary" name="updateSeminar" value="UPDATE DATA">
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
if (isset($_POST['updateSeminar'])) {
  $id = $data['id'];
  $nokta = $_POST['nokta'];
  $nama_lengkap = $_POST['nama_lengkap'];
  $bulan = $_POST['bulan'];
  $nama_seminar = $_POST['nama_seminar'];
  $penyelenggara = $_POST['penyelenggara'];
  $lokasi = $_POST['lokasi'];
  $uraian = $_POST['uraian'];
  $kompetensi = $_POST['kompetensi'];

  if(isset($_POST['ubah_foto'])){
      $bukti_berkas = $_FILES['bukti_berkas']['name'];
      $tmp = $_FILES['bukti_berkas']['tmp_name'];
      
      $path = "bukti_berkas/".$bukti_berkas;

      if(move_uploaded_file($tmp, $path)){ 
          $query = "SELECT * FROM seminar_keinsinyuran WHERE id='".$id."'";
          $sql = mysqli_query($connect, $query);
          $data = mysqli_fetch_array($sql); 

          unlink("bukti_berkas/".$data['bukti_berkas']);
        
          $query = "UPDATE seminar_keinsinyuran SET nokta='$nokta', nama_lengkap='$nama_lengkap', bulan='$bulan', nama_seminar='$nama_seminar', penyelenggara='$penyelenggara', lokasi='$lokasi', uraian='$uraian', kompetensi='$kompetensi', bukti_berkas='$bukti_berkas' where id='$id'";
          $sql = mysqli_query($connect, $query); 

           if($sql){
              echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataseminarkeinsinyuran'</script>"; // Redirect ke halaman index.php // Redirect ke halaman index.php
            }else{
              echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
              echo "<br><a href='index.php'>Kembali Ke Form</a>";
            }
          }else{
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='index.php'>Kembali Ke Form</a>";
          }
        }else{
          $query = "UPDATE seminar_keinsinyuran SET nokta='$nokta', nama_lengkap='$nama_lengkap', bulan='$bulan', nama_seminar='$nama_seminar', penyelenggara='$penyelenggara', lokasi='$lokasi', uraian='$uraian', kompetensi='$kompetensi' where id='$id'";
          $sql = mysqli_query($connect, $query); 

          if($sql){ 
            echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataseminarkeinsinyuran'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
          }else{
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='index.php'>Kembali Ke Form</a>";
          }
        }
}
?>
