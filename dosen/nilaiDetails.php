<?php
include "koneksi.php";
if (isset($_GET['id'])) {
  $nokta=$_GET['id'];
}

$sql = "SELECT * from profil where nokta='$nokta'";
$query=mysqli_query($connect, $sql);
$data=mysqli_fetch_array($query);
$id = $data['id'];
$nokta = $data ['nokta'];
$nama_lengkap = $data['nama_lengkap'];

?>
 <div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Nilai Indeks Faktor MK</h1>
    <a href="cetakIPK.php?&amp;&amp;id=<?php echo $data['nokta']; ?>" class="btn btn-success btn-sm" target="_blank" >Cetak IPK</a>
    <!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
        CETAK IPK
      </button> -->
  </div>

  <!-- Row -->
  <div class="row">
    <!-- Datatables -->
    <div class="col-lg-12">
      <div class="card mb-4">
        <form class="form-inline" style="padding-left: 15px; padding-right: 15px; padding-top: 10px;" action="nilaiOk.php" method="POST">
          <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kode Mata Kuliah</label>
          <input type="hidden" name="nokta" value="<?php echo $data['nokta'];  ?>">
          <input type="hidden" name="nama_lengkap" value="<?php echo $data['nama_lengkap'];  ?>">
          <select class="custom-select my-1 mr-sm-2 col-md-9" id="inlineFormCustomSelectPref" name="mk">
            <option>Kode MK</option>
            <?php  
              $data = mysqli_query($connect,"SELECT * FROM matakuliah");
              while($d = mysqli_fetch_array($data)){
            ?>
            <option value="<?php echo $d['kodeMK'];?>"><?php echo $d['kodeMK'];?></option>
            <?php } ?>
          </select>
          <button type="submit" class="btn btn-primary my-1" name="hitungNilai">Hitung Nilai</button>
        </form>

        <hr/>
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
                <th>Aksi</th>
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
                  <td>
                  <a onclick="return confirm('Yakin Anda Akan Menghapus MK ini')" href="hapusMK.php?id=<?php echo $d['id'];?>" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></a>
                 </td>
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

</div>
        <!---Container Fluid