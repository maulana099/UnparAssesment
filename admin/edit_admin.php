<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
  } else {
  echo "<script>alert('Data Belum Terdaftar');document.location='index.php?page=buku'</script>";
  }
$sql = "select * from profil where id='$id'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nama = $data ['nama_lengkap'];
$nim = $data ['nokta'];
$jenkel = $data ['jenis_kelamin'];
$username = $data ['username'];
$password = $data ['password'];
$photo = $data['photo'];
?>
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Form Basics</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Form Edit Admin</li>
            </ol>
          </div>
          <div class="row">
            <div class="col-lg-8">
               <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Profil Admin</h6>
                </div>
                <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputEmail1">NIM</label>
                      <input type="text" name="nokta" class="form-control" value="<?php echo $nim; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       value="<?php echo $nama; ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Jenis Kelamin</label>
                      <input type="text" name="jenis_kelamin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      value="<?php echo $jenkel; ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      value="<?php echo $username; ?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="<?php echo $password; ?>" >
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">
                    </label>
                        <input type="file" name="photo" accept="image/*"> 
                        <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
                    </div>  
                    <div class="form-group">
                    </div>
                    <input type="submit" class="btn btn-primary" name="EDIT" id="EDIT" value="Update Profil">
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
    if (isset($_POST['EDIT'])) {
    $id = $data['id'];
    $nama = $_POST ['nama_lengkap'];
    $nim = $_POST ['nokta'];
    $jenkel = $_POST ['jenis_kelamin'];
    $username = $_POST ['username'];
    $password = $_POST ['password'];

    if(isset($_POST['ubah_foto'])){
      $photo = $_FILES['photo']['name'];
      $tmp = $_FILES['photo']['tmp_name'];
      
      $path = "img_adm/".$photo;

      if(move_uploaded_file($tmp, $path)){ 
          $query = "SELECT * FROM profil WHERE id='".$id."'";
          $sql = mysqli_query($connect, $query);
          $data = mysqli_fetch_array($sql); 

          unlink("img_mhs/".$data['photo']);
        
          $query = "UPDATE profil SET nokta='$nim', nama_lengkap='$nama', jenis_kelamin='$jenkel', username='$username', password='$password', photo='$photo' where id='$id'";
          $sql = mysqli_query($connect, $query); 

           if($sql){
              echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=profil'</script>"; // Redirect ke halaman index.php // Redirect ke halaman index.php
            }else{
              echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
              echo "<br><a href='index.php'>Kembali Ke Form</a>";
            }
          }else{
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='index.php'>Kembali Ke Form</a>";
          }
        }else{
          $query = "UPDATE profil SET nokta='$nim', nama_lengkap='$nama', jenis_kelamin='$jenkel', username='$username', password='$password' where id='$id'";
          $sql = mysqli_query($connect, $query); 

          if($sql){ 
            echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=profil'</script>"; // Redirect ke halaman index.php// Redirect ke halaman index.php
          }else{
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='index.php'>Kembali Ke Form</a>";
          }
        }
}