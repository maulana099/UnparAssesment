<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DATA MATAKULIAH</h1>
    <!-- <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-success btn-sm" href="excelMahasiswa.php" target="_blank">Export Excell</a></li>
    </ol> -->
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
                <th>Matakuliah</th>
                <th>SKS</th>
                <th style="width:20%;">Option</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              include '../koneksi.php';
              $no = 1;
              $data = mysqli_query($connect,"SELECT * from matakuliah");
              while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['kodeMK']; ?></td>
                  <td><?php echo $d['mata_kuliah']; ?></td>
                  <td><?php echo $d['sks']; ?></td>
                  <td>
                    <a href="index.php?page=editMK&amp;&amp;id=<?php echo $d['id']; ?>" style="width:60px; margin-bottom:5px;" class="btn btn-sm btn-primary">Edit</a>
                    <a href="hapusMK.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-outline-primary" style="width:6s0px; margin-bottom:5px;">Hapus</a>
                  </td>
                </tr>
                <?php 
              }
              ?>
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

</div>
        <!---Container Fluid-->