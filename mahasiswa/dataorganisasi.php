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
            <h1 class="h3 mb-0 text-gray-800">Data Organisasi</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Formulir Asesment Mandiri</li></li>
              <li class="breadcrumb-item active" aria-current="page">Data Organisasi</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data Organisasi</h6>
                  <a href="index.php?page=isidataorganisasi&amp;&amp;id=<?php echo $id; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menambahkan Data ?')";>
                    <input type="submit" class="btn btn-primary" name="EDIT" id="EDIT" value="ISI DATA ORGANISASI">
                    </a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <!--<th>No KTA</th>-->
                        <!--<th>Nama</th>-->
                        <th>Nama Organisasi</th>
                        <th>Periode</th>
                        <th>Aktifitas Jabatan</th>
                        <th>Kompetensi</th>
                        <th>Bukti Berkas</th>
                        <th>Aksi</th>
                      </tr>
                      <?php 
    include '../koneksi.php';
    $no = 1;
    $data = mysqli_query($connect,"select * from dataorganisasi where nokta='$nokta'");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <!--<td><?php echo $d['nokta']; ?></td>-->
        <!--<td><?php echo $d['nama_lengkap']; ?></td>-->
        <td><?php echo $d['nama_organisasi']; ?></td>
        <td><?php echo $d['periode']; ?></td>
        <td><?php echo $d['aktifitas_jabatan']; ?></td>
        <td><?php echo $d['kompetensi']; ?></td>
        <td><img src="bukti_berkas/<?php echo $d['bukti_berkas'] ?>" width="100" height="100"></td>
        <td>
          <a href="index.php?page=organisasi_edit&amp;&amp;id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin Akan Mengedit Data Ini ?')" class="btn btn-sm btn-primary" style="width:60px;">Edit</a>
          <a href="index.php?page=organisasi_delete&amp;&amp;id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin Akan hapus Data Ini ?')" class="btn btn-sm btn-outline-primary" style="width:60px;">Hapus</a>
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