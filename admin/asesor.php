<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">NAMA ASESOR FAM CPL UNPAR</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Tambah Asesor</button>
      </li>
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
                <th>Asesor Satu</th>
                <th>Asesor Dua</th>
                <th style="width:20%;">Option</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              include '../koneksi.php';
              $no = 1;
              $data = mysqli_query($connect,"SELECT * from asesor");
              while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $d['asesor_satu']; ?></td>
                  <td><?php echo $d['asesor_dua']; ?></td>
                  <td>
                    <a href="index.php?page=editAsesor&amp;&amp;id=<?php echo $d['id']; ?>" style="width:60px; margin-bottom:5px;" class="btn btn-sm btn-primary">Edit</a>
                    <a href="hapusAsesor.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-outline-primary" style="width:6s0px; margin-bottom:5px;">Hapus</a>
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

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Added Asesor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="prosesAsesor.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Asesor I</label>
            <input type="text" class="form-control" name="asesor_satu" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Asesor II">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Asesor II</label>
            <input type="text" class="form-control" name="asesor_dua" id="exampleInputPassword1" placeholder="Nama Asesor II">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" name="ASESOR" class="btn btn-primary btn-sm">SIMPAN</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

</div>
        <!---Container Fluid-->