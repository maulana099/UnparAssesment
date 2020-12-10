<?php
include "koneksi.php";
?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar Soal</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Soal</li>
      <li class="breadcrumb-item active" aria-current="page">Daftar Soal</li>
    </ol>
  </div>

  <div class="row">
    <div class="col-lg-12">

     <form action="index.php?page=soal" method="post">
      <label>Cari Soal :</label>
      <input type="text" name="cari">
      <input type="submit" value="Cari">
    </form>

    <?php 
    if(isset($_POST['cari'])){
      $cari = $_POST['cari'];


      echo "<b>Hasil pencarian : ".$cari."</b>";


    }
    ?>

    <br><br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1" align="center">
            <thead>
              <tr align="center">
                <th>ID</th>
                <th>TEKS SOAL</th>
                <th>POINT</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              if(isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $result = mysqli_query($connect, "SELECT * from soal WHERE teks_soal like '%".$cari."%'");       
              }else{
                $result = mysqli_query($connect, "SELECT * from soal");   
              }
              $no=1;
              while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr class="" align="center">
                  <td><?php echo $row['id'];?></td>
                  <td><?php echo $row['teks_soal'];?></td>
                  <td><?php echo $row['point'];?></td>
                  <td>
                    <a href="delete_soal.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    <a href="index.php?page=soal_edit&amp;&amp;id=<?php echo $id; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
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