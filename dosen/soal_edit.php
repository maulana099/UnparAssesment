<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
} else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=buku'</script>";
}

$sql = "select * from soal where id='$id'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$teks_soal = $data ['teks_soal'];
$point = $data ['point'];
?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Soal</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Soal</li>
      <li class="breadcrumb-item active" aria-current="page">Edit Soal</li>
    </ol>
  </div>
  <div class="row">
    <div class="col-lg-8">
      <!-- Form Basic -->
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Edit Soal</h6>
        </div>
        <div class="card-body">
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Teks Soal</label>
              <input type="text" name="teks_soal" class="form-control" value="<?php echo $teks_soal; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Point</label>
              <input type="text" name="point" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="<?php echo $point; ?>" >
            </div>
            <input type="submit" class="btn btn-primary" name="EDIT" id="EDIT" value="Update Soal">
          </form>
        </div>
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

if(isset($_POST['EDIT']))
{   
  $teks_soal = $_POST['teks_soal'];
  $point = $_POST['point'];

  mysqli_query($connect, "UPDATE soal SET teks_soal='$teks_soal', point='$point' WHERE id=$id");

  ?>
  <script>
    alert('Success to update!');
    window.location.href = 'index.php?page=soal';
  </script>
  <?php
}
?>

