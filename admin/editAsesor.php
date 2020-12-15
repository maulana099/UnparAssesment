<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=asesor'</script>";
}

$sql = "SELECT * from asesor where id='$id'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$asesor_satu = $data ['asesor_satu'];
$asesor_dua = $data ['asesor_dua'];
?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">UPDATE NAMA ASESOR</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Forms</li>
      <li class="breadcrumb-item active" aria-current="page">update</li>
    </ol>
  </div>
  <div class="row">
    <div class="col-lg-8">
     <!-- Form Basic -->
     <div class="card mb-4">
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputEmail1">Aseor Satu</label>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="text" name="asesor_satu" class="form-control" value="<?php echo $asesor_satu; ?>" id="exampleInputEmail1" aria-describedby="kode MK">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Asesor Dua</label>
            <input type="text" name="asesor_dua" class="form-control" id="exampleInputEmail1" aria-describedby="sks"
            value="<?php echo $asesor_dua; ?>" >
          </div>
          <input type="submit" class="btn btn-primary" name="editAsesor" id="editAsesor" value="Update MK">
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
if (isset($_POST['editAsesor'])) {
  $id = $data['id'];
  $asesor_satu = $_POST ['asesor_satu'];
  $asesor_dua = $_POST ['asesor_dua'];

  $query = "UPDATE asesor SET asesor_satu='$asesor_satu', asesor_dua='$asesor_dua' where id='$id'";
  $sql = mysqli_query($connect, $query); 

  if($sql) { 
  echo "<script>alert('Data Berhasil DiUpdate');document.location='index.php?page=asesor'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='index.php'>Kembali Ke Form</a>";
}
}
