<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=mataKuliah'</script>";
}

$sql = "SELECT * from matakuliah where id='$id'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$kodeMK = $data ['kodeMK'];
$mata_kuliah = $data ['mata_kuliah'];
$sks = $data ['sks'];
?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">EDIT MATAKULIAH</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active" aria-current="page">Form Edit MK</li>
    </ol>
  </div>
  <div class="row">
    <div class="col-lg-8">
     <!-- Form Basic -->
     <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo $mata_kuliah; ?></h6>
      </div>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Kode MataKuliah</label>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="kodeMK" class="form-control" value="<?php echo $kodeMK; ?>" id="exampleInputEmail1" aria-describedby="kode MK">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">MataKuliah</label>
            <input type="text" name="mata_kuliah" class="form-control" id="exampleInputEmail1" aria-describedby="MataKuliah"
            value="<?php echo $mata_kuliah; ?>" >
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">SKS</label>
            <input type="text" name="sks" class="form-control" id="exampleInputEmail1" aria-describedby="sks"
            value="<?php echo $sks; ?>" >
          </div>
          <input type="submit" class="btn btn-primary" name="MATAKULIAH" id="MATAKULIAH" value="Update MK">
        </form>
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
if (isset($_POST['MATAKULIAH'])) {
  $id = $data['id'];
  $kodeMK = $_POST ['kodeMK'];
  $mata_kuliah = $_POST ['mata_kuliah'];
  $sks = $_POST ['sks'];

  $query = "UPDATE matakuliah SET kodeMK='$kodeMK', mata_kuliah='$mata_kuliah', sks='$sks' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql) { 
  echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=mataKuliah'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='index.php'>Kembali Ke Form</a>";
}
}
