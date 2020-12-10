<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Nilai Indeks Faktor MK</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active" aria-current="page">Indeks MK</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Data Indeks MK</h6>
        </div>
        <div class="table-responsive p-3">
          <table class="table align-items-center table-flush" id="dataTable">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>No NIK</th>
                <th>Nama Lengkap</th>
                <th class="text-center">IPK MHS</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              include '../koneksi.php';
              $no = 1;
              $data = mysqli_query($connect,"SELECT * FROM profil INNER JOIN hasil_nilai ON hasil_nilai.nokta = profil.nokta");
              while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['nokta']; ?></td>
                  <td><?php echo $d['nama_lengkap']; ?></td>
                  <td class="text-center"><?php echo $d['ipk']; ?></td>
                  <td>
                    <a href="index.php?page=nilaiDetails&amp;&amp;id=<?php echo $d['nokta']; ?>" class="btn-primary btn btn-sm">Details</a>
                  </td>
                </tr>
                <?php } ?>
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