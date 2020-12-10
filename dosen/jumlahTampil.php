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
  <div class="d-sm-flex align-items-center justify-content-between">
    <div class="" style="padding: 10px;">
      <h1 class="h3 mb-0 text-gray-800"><?php echo $nama_lengkap;  ?></h1>
      <p class="h3 mb-0 text-gray-800" style="font-size: 22px;"><?php echo $nokta;  ?></p>
    </div>
    <ol class="breadcrumb">
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
        Export Excell
      </button>
      <!-- <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-sm btn-success" href="">Export Excell </a></li> -->
    </ol>
  </div>
  <!--<div class="row">-->
    <!--  <div class="col-lg-12">-->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Organisasi Profesi & Organisasi Lainnya Yang Dimasuki</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='SK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_organisasi where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK10']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- DataTales organisasasi -->

      <!-- penghargaan -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Tanda Penghargaan yang Diterima</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='SK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_penghargaan where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK10']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- I.5 Pendidikan/Pelatihan Teknik/Pertanian  dan Profesi Keinsinyuran Yang Diikuti -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Pendidikan/Pelatihan Teknik/Pertanian  dan Profesi Keinsinyuran Yang Diikuti</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KU' OR kodeKompetensi='SK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_pelatihan where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK10']; ?></td>
                    </tr>
                    <!-- //KU -->
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- I.6 PendidIkan/Pelatihan Manajemen dan BIdang Lainnya (yang Relevan)  -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">PendidIkan/Pelatihan Manajemen dan BIdang Lainnya (yang Relevan)</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KU' OR kodeKompetensi='SK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_pelatihan where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK10']; ?></td>
                    </tr>
                    <!-- //KU -->
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- II. Kualifikasi kode etik insinyur Indonesia dan Etika Profesional   -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Kualifikasi kode etik insinyur Indonesia dan Etika Profesional </h4>
            <h6 style="text-align: center;">Pengertian, Pendapat dan Pengalaman Sendiri</h6>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='PP' OR kodeKompetensi='SK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_pengertian where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK10']; ?></td>
                    </tr>
                    <!-- //PP -->
                    <tr class="text-center">
                      <td><?php echo $hasil['PP01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP17']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP18']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP19']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP20']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Pengalaman Dalam PErencanaan dan Perencanaan dan Perancangan dan/atau Pengalaman dalam Pengelolaan Tugas-tugas Keinsinyuran -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Pengalaman Dalam Perencanaan dan Perencanaan dan Perancangan dan/atau Pengalaman dalam Pengelolaan Tugas-tugas Keinsinyuran</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KU' OR kodeKompetensi='KK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_kualifikasi where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
                    </tr>
                    <!-- //PP -->
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK17']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Pengalaman Mengajar Pelajaran Keinsinyuran dan/atau Manajemen dan /atau Pengalaman Mengembangkan Pendidikan/Pelatihan Keinsinyuran dan/atau Manajemen  -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Pengalaman Mengajar Pelajaran Keinsinyuran dan/atau Manajemen dan /atau Pengalaman Mengembangkan Pendidikan/Pelatihan Keinsinyuran dan/atau Manajemen</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='PP' OR kodeKompetensi='KK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_mengajar where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP17']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP18']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP19']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP20']; ?></td>
                    </tr>
                    <!-- //PP -->
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK17']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Pengalaman dalam Penelitian, Pengembangan, dan Komersialisasi an/atau Pengalaman Menangani Bahan Material dan Komponen.  -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Pengalaman dalam Penelitian, Pengembangan, dan Komersialisasi an/atau Pengalaman Menangani Bahan Material dan Komponen</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='PP' OR kodeKompetensi='KU'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_penelitian where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['PP13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP17']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP18']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP19']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['PP20']; ?></td>
                    </tr>
                    <!-- //PP -->
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Pengalaman  Dalam Pekerjaan Manufaktur atau Produksi   dan/atau Pengalaman Dalam Konsultansi Perekayasaan dan/atau Konstruksi/Instalasi.  -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Pengalaman  Dalam Pekerjaan Manufaktur atau Produksi dan/atau
            Pengalaman Dalam Konsultansi Perekayasaan dan/atau Konstruksi/Instalasi.</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KU' OR kodeKompetensi='KK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_manufaktur where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
                    </tr>
                    <!-- //PP -->
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK17']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Pengalaman Dalam Manajemen Usaha dan Pemasaran Teknik   dan/atau Pengalaman Dalam Manajemen Pembangunan dan Pemeliharaan Asset.  -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Pengalaman Dalam Manajemen Usaha dan Pemasaran Teknik dan/atau Pengalaman Dalam Manajemen Pembangunan dan Pemeliharaan Asset.</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KU' OR kodeKompetensi='KK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_usaha where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
                    </tr>
                    <!-- //KK -->
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK17']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Karya Tulis di Bidang  Keinsinyuran yang Dipublikasikan -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Karya Tulis di Bidang  Keinsinyuran yang Dipublikasikan</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='KK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_karya where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK17']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Makalah/Tulisan Yang Disajikan Dalam Seminar/Lokakarya Keinsinyuran -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Makalah/Tulisan Yang Disajikan Dalam Seminar/Lokakarya Keinsinyuran</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='KK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_makalah where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK17']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!--Seminar/Lokakarya Keinsinyuran Yang Diikuti -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Seminar/Lokakarya Keinsinyuran Yang Diikuti</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='KU'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_seminar where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!--  Karya Temuan/Inovasi/Paten dan Implementasi Teknologi Baru.  -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;"> Karya Temuan/Inovasi/Paten dan Implementasi Teknologi  Baru</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KU' OR kodeKompetensi='KK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_teknologi where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KU11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KU12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
                    </tr>
                    <!-- //KK -->
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 29px; padding-bottom: 26px;"><?php echo $hasil['KK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['KK15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['KK17']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- BAHASA YANG DIKUASAI -->
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">BAHASA YANG DIKUASAI</h4>
            <div class="col-md-10" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>No</th>
                    <th>Kode</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='SK'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo $d['kode']; ?></td>
                      <td><?php echo $d['keterangan']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <div class="col-md-2" style="float: left;">
              <table class="table table-hover table-sm" id="">
                <thead class="thead-light">
                  <tr class="text-center" style="background-color: #fecd1a;">
                    <th>Poin</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $nokta=$_GET['id'];
                  $data = mysqli_query($connect, "SELECT * FROM hasil_bahasa where nokta='$nokta'");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['SK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['SK10']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
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

    <!-- Modal -->
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

  </div>  