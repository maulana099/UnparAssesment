<?php
include "koneksi.php";
?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Daftar hasil Soal FAM</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">hasil</li>
      <li class="breadcrumb-item active" aria-current="page">Daftar hasil Soal FAM</li>
    </ol>
  </div>

  <!--<div class="row">-->
  <!--  <div class="col-lg-12">-->

    
    
                <div class="col-lg-12">
              <div class="card mb-4">
                
                
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr align="center">
                        <th>ID</th>
                        <th>NIM</th>
                        <th>NAMA LENGKAP</th>
                        <th>KEJURUAN</th>
                        <th>E-Mail</th>
                        <th>Details</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $query = mysqli_query($connect, "SELECT * FROM profil INNER JOIN datapribadi ON datapribadi.nokta = profil.nokta ORDER BY profil.nama_lengkap ASC");
                      $no=1;
                      while($row = mysqli_fetch_assoc($query)){
                        ?>
                        <tr class="" align="center">
                          <td><?php echo $no++ ?></td>
                          <td align="left"><?php echo $row['nokta'];?></td>
                          <td><?php echo $row['nama_lengkap'];?></td>
                          <td><?php echo $row['kejuruan'];?></td>
                          <td><?php echo $row['email'];?></td>
                          <td>
                            <a href="index.php?page=dataHasil&amp;&amp;id=<?php echo $row['nokta']; ?>" class="btn-primary btn btn-sm">Details</a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
    <!-- DataTales Example -->


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