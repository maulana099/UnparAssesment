<?php
include "koneksi.php";

$sql = "SELECT * from profil where nokta='$nokta'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nokta = $data ['nokta'];
$nama_lengkap = $data['nama_lengkap'];

?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between">
    <div class="" style="padding: 10px;">
      <h1 class="h3 mb-0 text-gray-800"><?php echo $nama_lengkap;  ?></h1>
      <p class="h3 mb-0 text-gray-800" style="font-size: 22px;"><?php echo $nokta;  ?></p>
    </div>
    <ol class="breadcrumb">
       <!-- <li class="breadcrumb-item active" aria-current="page"><a href="cetakIPK.php?&amp;&amp;id=<?php echo $nokta ?>" class="btn btn-primary btn-sm">CETAK IPK</a></li> -->
      <!-- <li class="breadcrumb-item active" aria-current="page"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
        CETAK IPK
      </button></li> -->
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Mata Kuliah</th>
                <th class="text-center">SKS</th>
                <th class="text-center">Nilai Mhs</th>
                <th class="text-center">Nilai AA</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              $data = mysqli_query($connect,"SELECT * FROM matakuliah INNER JOIN hasil_konversi ON hasil_konversi.mk = matakuliah.id WHERE hasil_konversi.nokta = $nokta");
              while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['kodeMK']; ?></td>
                  <td><?php echo $d['mata_kuliah']; ?></td>
                  <td class="text-center"><?php echo $d['sks']; ?></td>
                  <td class="text-center"><?php echo $d['nilai']; ?></td>
                  <td class="text-center"><?php echo $d['nilai_mutu']; ?></td>
                </tr>
              <?php } ?>
               <!--  <tr>
                  <td colspan="4" class="text-center">Larry the Bird</td>
                  <td>@twitter</td>
                </tr> -->
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
    <!--Row-->

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
  
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <h5 class="modal-title" id="exampleModalLongTitle">maintenance</h5> -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img src="../img/not-found.png" width="100%">
           <!--  <h1 style="text-align: center; color: red"><i class="fas fa-exclamation-triangle"></i></h1>
            <p style="text-align: center;">Sedang Dalam Perbaikan</p> -->
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
          </div>
        </div>
      </div>
    </div>
        <!---Container Fluid