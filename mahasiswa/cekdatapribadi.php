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
            <h1 class="h3 mb-0 text-gray-800">Data Diri</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Formulir Asesment Mandiri</li></li>
              <li class="breadcrumb-item active" aria-current="page">Data Pribadi</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">
                  <img style="border-radius:50%;" src="img_mhs/<?php echo $photo;?>" width='100' height='100'>
                  </h6>
                  <a href="index.php?page=editdatapribadi&amp;&amp;nokta=<?php echo $nokta; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menambahkan Data ?')";>
                    <input type="submit" class="btn btn-primary" name="EDIT" id="EDIT" value="EDIT DATA DIRI">
                    </a>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">NO KTA</label>
                      <input type="text" name="nokta" class="form-control" value="<?php echo $nokta; ?>" disabled id="exampleInputEmail1" aria-describedby="emailHelp">
                      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your
                        text with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       value="<?php echo $nama; ?>" disabled>
                    </div>
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