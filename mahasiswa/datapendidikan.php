<?php
      include "koneksi.php";
      $query="SELECT * FROM profil where id='$id'";
      $sql = mysqli_query ($connect,$query);
      $no = 1;
      while ($hasil = mysqli_fetch_array($sql)) {
      $id = $hasil['id'];
      $nama = $hasil ['nama_lengkap'];
      $nokta = $hasil ['nokta'];
      ?>  
  <?php } ?>
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Pendidikan</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Formulir Asesment Mandiri</li></li>
              <li class="breadcrumb-item active" aria-current="page">Data Pendidikan</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Pendidikan</h6>
                  <a href="index.php?page=isidatapendidikan&amp;&amp;id=<?php echo $id; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menambahkan Data ?')";>
                    <input type="submit" class="btn btn-primary" name="EDIT" id="EDIT" value="ISI DATA PENDIDIKAN">
                    </a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Tingkat Pendidikan</th>
                        <th>Perguruan Tinggi</th>
                        <th>Fakultas</th>
                        <th>Jurusan</th>
                        <th>Kota</th>
                        <th>Negara</th>
                        <th>Tahun Lulus</th>
                        <th>Gelar</th>
                        <th>Judul TA</th>
                        <th>Deskripsi TA</th>
                        <th>Aksi</th>
                      </tr>
                      <?php 
    include '../koneksi.php';
    $no = 1;
    $data = mysqli_query($connect,"select * from datapendidikan1 where nokta='$nokta'");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['tingkatpendidikan']; ?></td>
        <td><?php echo $d['perguruantinggi']; ?></td>
        <td><?php echo $d['fakultas']; ?></td>
        <td><?php echo $d['jurusan']; ?></td>
        <td><?php echo $d['kota']; ?></td>
        <td><?php echo $d['negara']; ?></td>
        <td><?php echo $d['tahunlulus']; ?></td>
        <td><?php echo $d['gelar']; ?></td>
        <td><?php echo $d['judulta']; ?></td>
        <td><?php echo $d['deskripsita']; ?></td>

        <td>
          <a href="index.php?page=pendidikan_edit&amp;&amp;id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin Akan Mengedit Data Ini ?')" class="btn btn-sm btn-primary">Edit</a>
          <a href="index.php?page=pendidikan_delete&amp;&amp;id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin Akan hapus Data Ini ?')" class="btn btn-sm btn-outline-primary">Hapus</a>
        </td>
      </tr>
      <?php 
    }
    ?>
  </table>
                   
                </div>
              </div>
              </div>
            </div>

            <div class="container-fluid" id="container-wrapper">
          

          <!-- Row -->
          
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