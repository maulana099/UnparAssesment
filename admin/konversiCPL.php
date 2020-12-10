<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php'</script>";
}

$sql = "SELECT * from konversi_cpl where id=1";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$konversi = $data ['konversi_cpl'];
?>

<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">EDIT KONVERSI CPL</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active" aria-current="page">Form Edit CPL</li>
    </ol>
  </div>
  <div class="row">
    <div class="col-lg-8">
     <!-- Form Basic -->
     <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Konversi CPL dikali</h6>
      </div>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Konversi Sebelumnya</label>
            <input type="text" name="konversi_cpl" class="form-control" value="<?php echo $konversi; ?>" disabled="">
          </div>
          <br/>
          <h1>Edit Koversi CPL yang akan dikali</h1>
          <div class="form-group">
            <label for="exampleInputEmail1">Konversi CPL</label>
            <input type="text" name="konversi_cpl" class="form-control" id="exampleInputEmail1" aria-describedby="MataKuliah"
            value="<?php echo $konversi; ?>" >
          </div>
          <input type="submit" class="btn btn-primary" name="CPL" id="CPL" value="Update CPL">
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
if (isset($_POST['CPL'])) {
  $id = $data['id'];
  $konversi_cpl = $_POST ['konversi_cpl'];

  $query = "UPDATE konversi_cpl SET konversi_cpl='$konversi_cpl' where id=1";
  $sql = mysqli_query($connect, $query); 

  if($sql){ 
  echo "<script>alert('Data Berhasil Diedit');document.location='index.php'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='index.php'>Kembali Ke Form</a>";
}
}