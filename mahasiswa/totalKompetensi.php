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
    <!-- <li class="breadcrumb-item active" aria-current="page"><a class="btn btn-sm btn-success" href="">Export Excell </a></li> -->
    <li class="breadcrumb-item active" aria-current="page"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
        Export Excell
      </button></li>
    </ol>
  </div>
  <!--<div class="row">-->
    <!--  <div class="col-lg-12">-->
      <?php 
      $sql = "SELECT * from konversi_cpl where id=1";
      $query=mysqli_query($connect, $sql);
      $row=mysqli_fetch_array($query);
      $konversi = $row['konversi_cpl'];
      ?>
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="">
            <h4 style="text-align: center; padding: 10px;">Jumlah Poin Kompetensi dikali <?php echo $konversi; ?> = <span style="color: red;">Total</span></h4>
            <div class="col-md-9" style="float: left;">
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
                  $data = mysqli_query($connect, "SELECT * FROM konversi_cpl");
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
                    <th>Jumlah</th>
                    <th>Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                   
                  $data = mysqli_query($connect, "SELECT * FROM hasil_cpl inner join total_cpl on total_cpl.nokta = hasil_cpl.nokta where hasil_cpl.nokta = $nokta");
                  while($hasil = mysqli_fetch_array($data)){
                    ?>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_SK01']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_SK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_SK02']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_SK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_SK03']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_SK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_SK04']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_SK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_SK05']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_SK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_SK06']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_SK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_SK07']; ?></td>
                      <td><?php echo $hasil['tot_SK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_SK08']; ?></td>
                      <td><?php echo $hasil['tot_SK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_SK09']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_SK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_SK10']; ?></td>
                      <td><?php echo $hasil['tot_SK10']; ?></td>
                    </tr>
                    <!-- //pp -->
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_PP01']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_PP01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_PP02']; ?></td>
                      <td><?php echo $hasil['tot_PP02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_PP03']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_PP03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_PP04']; ?></td>
                      <td><?php echo $hasil['tot_PP04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_PP05']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_PP05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_PP06']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_PP06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 27px;"><?php echo $hasil['jml_PP07']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 27px;"><?php echo $hasil['tot_PP07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_PP08']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_PP08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_PP09']; ?></td>
                      <td><?php echo $hasil['tot_PP09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_PP10']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_PP10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_PP11']; ?></td>
                      <td><?php echo $hasil['tot_PP11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_PP12']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_PP12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_PP13']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_PP13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_PP14']; ?></td>
                      <td><?php echo $hasil['tot_PP14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['jml_PP15']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['tot_PP15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['jml_PP16']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['tot_PP16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_PP17']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_PP17']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['jml_PP18']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['tot_PP18']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_PP19']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_PP19']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['jml_PP20']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['tot_PP20']; ?></td>
                    </tr>
                    <!-- ku -->
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['jml_KU01']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['tot_KU01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KU02']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KU02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['jml_KU03']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['tot_KU03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['jml_KU04']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['tot_KU04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KU05']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KU05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KU06']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KU06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KU07']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KU07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KU08']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KU08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KU09']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KU09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KU10']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KU10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_KU11']; ?></td>
                      <td><?php echo $hasil['tot_KU11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['jml_KU12']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['tot_KU12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['jml_KU13']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['tot_KU13']; ?></td>
                    </tr>
                    <!-- kk -->
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KK01']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KK01']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KK02']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KK02']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['jml_KK03']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['tot_KK03']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KK04']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KK04']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['jml_KK05']; ?></td>
                      <td style="padding-top: 28px; padding-bottom: 28px;"><?php echo $hasil['tot_KK05']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KK06']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KK06']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KK07']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KK07']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KK08']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KK08']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KK09']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KK09']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KK10']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KK10']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_KK11']; ?></td>
                      <td><?php echo $hasil['tot_KK11']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KK12']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KK12']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_KK13']; ?></td>
                      <td><?php echo $hasil['tot_KK13']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_KK14']; ?></td>
                      <td><?php echo $hasil['tot_KK14']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['jml_KK15']; ?></td>
                      <td style="padding-top: 20px; padding-bottom: 12px;"><?php echo $hasil['tot_KK15']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_KK16']; ?></td>
                      <td><?php echo $hasil['tot_KK16']; ?></td>
                    </tr>
                    <tr class="text-center">
                      <td><?php echo $hasil['jml_KK17']; ?></td>
                      <td><?php echo $hasil['tot_KK17']; ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
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

   