<?php
include "koneksi.php";
?>
<div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Total Kompetensi Mahasiswa </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">hasil</li>
      <li class="breadcrumb-item active" aria-current="page">Total Kompetensi Mahasiswa</li>
    </ol>
  </div>

  <!--<div class="row">-->
    <!--  <div class="col-lg-12">-->
      <div class="col-lg-12">
        <div class="card mb-4">

          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
              <thead class="thead-light">
                <tr align="center">
                  <th>ID</th>
                  <th>NIM</th>
                  <th>NAMA LENGKAP</th>
                  <th>Total Kompetensi</th>
                  <!-- <th>E-Mail</th> -->
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                <?php
                // $nokta = $_GET['id']; 
                $query = mysqli_query($connect, "SELECT * from total_cpl");
                $no=1;
                while($row = mysqli_fetch_array($query)){
                  $jumlah_sk01 = $row['tot_SK01'];
                  $jumlah_sk02 = $jumlah_sk01+$row['tot_SK02'];
                  $jumlah_sk03 = $jumlah_sk02+$row['tot_SK03'];
                  $jumlah_sk04 = $jumlah_sk03+$row['tot_SK04'];
                  $jumlah_sk05 = $jumlah_sk04+$row['tot_SK05'];
                  $jumlah_sk06 = $jumlah_sk05+$row['tot_SK06'];
                  $jumlah_sk07 = $jumlah_sk06+$row['tot_SK07'];
                  $jumlah_sk08 = $jumlah_sk07+$row['tot_SK08'];
                  $jumlah_sk09 = $jumlah_sk08+$row['tot_SK09'];
                  $jumlah_sk10 = $jumlah_sk09+$row['tot_SK10'];
                  //pp
                  $jumlah_pp01 = $jumlah_sk10+$row['tot_PP01'];
                  $jumlah_pp02 = $jumlah_pp01+$row['tot_PP02'];
                  $jumlah_pp03 = $jumlah_pp02+$row['tot_PP03'];
                  $jumlah_pp04 = $jumlah_pp03+$row['tot_PP04'];
                  $jumlah_pp05 = $jumlah_pp04+$row['tot_PP05'];
                  $jumlah_pp06 = $jumlah_pp05+$row['tot_PP06'];
                  $jumlah_pp07 = $jumlah_pp06+$row['tot_PP07'];
                  $jumlah_pp08 = $jumlah_pp07+$row['tot_PP08'];
                  $jumlah_pp09 = $jumlah_pp08+$row['tot_PP09'];
                  $jumlah_pp10 = $jumlah_pp09+$row['tot_PP10'];
                  $jumlah_pp11 = $jumlah_pp10+$row['tot_PP11'];
                  $jumlah_pp12 = $jumlah_pp11+$row['tot_PP12'];
                  $jumlah_pp13 = $jumlah_pp12+$row['tot_PP13'];
                  $jumlah_pp14 = $jumlah_pp13+$row['tot_PP14'];
                  $jumlah_pp15 = $jumlah_pp14+$row['tot_PP15'];
                  $jumlah_pp16 = $jumlah_pp15+$row['tot_PP16'];
                  $jumlah_pp17 = $jumlah_pp16+$row['tot_PP17'];
                  $jumlah_pp18 = $jumlah_pp17+$row['tot_PP18'];
                  $jumlah_pp19 = $jumlah_pp18+$row['tot_PP19'];
                  $jumlah_pp20 = $jumlah_pp19+$row['tot_PP20'];
                  //ku
                  $jumlah_ku01 = $jumlah_pp20+$row['tot_KU01'];
                  $jumlah_ku02 = $jumlah_ku01+$row['tot_KU02'];
                  $jumlah_ku03 = $jumlah_ku02+$row['tot_KU03'];
                  $jumlah_ku04 = $jumlah_ku03+$row['tot_KU04'];
                  $jumlah_ku05 = $jumlah_ku04+$row['tot_KU05'];
                  $jumlah_ku06 = $jumlah_ku05+$row['tot_KU06'];
                  $jumlah_ku07 = $jumlah_ku06+$row['tot_KU07'];
                  $jumlah_ku08 = $jumlah_ku07+$row['tot_KU08'];
                  $jumlah_ku09 = $jumlah_ku08+$row['tot_KU09'];
                  $jumlah_ku10 = $jumlah_ku09+$row['tot_KU10'];
                  $jumlah_ku11 = $jumlah_ku10+$row['tot_KU11'];
                  $jumlah_ku12 = $jumlah_ku11+$row['tot_KU12'];
                  $jumlah_ku13 = $jumlah_ku12+$row['tot_KU13'];
                  //kk
                  $jumlah_kk01 = $jumlah_ku13+$row['tot_KK01'];
                  $jumlah_kk02 = $jumlah_kk01+$row['tot_KK02'];
                  $jumlah_kk03 = $jumlah_kk02+$row['tot_KK03'];
                  $jumlah_kk04 = $jumlah_kk03+$row['tot_KK04'];
                  $jumlah_kk05 = $jumlah_kk04+$row['tot_KK05'];
                  $jumlah_kk06 = $jumlah_kk05+$row['tot_KK06'];
                  $jumlah_kk07 = $jumlah_kk06+$row['tot_KK07'];
                  $jumlah_kk08 = $jumlah_kk07+$row['tot_KK08'];
                  $jumlah_kk09 = $jumlah_kk08+$row['tot_KK09'];
                  $jumlah_kk10 = $jumlah_kk09+$row['tot_KK10'];
                  $jumlah_kk11 = $jumlah_kk10+$row['tot_KK11'];
                  $jumlah_kk12 = $jumlah_kk11+$row['tot_KK12'];
                  $jumlah_kk13 = $jumlah_kk12+$row['tot_KK13'];
                  $jumlah_kk14 = $jumlah_kk13+$row['tot_KK14'];
                  $jumlah_kk15 = $jumlah_kk14+$row['tot_KK15'];
                  $jumlah_kk16 = $jumlah_kk15+$row['tot_KK16'];
                  $jumlah_kk17 = $jumlah_kk16+$row['tot_KK17'];
                  ?>
                  <tr class="" align="center">
                    <td><?php echo $no++ ?></td>
                    <td align="left"><?php echo $row['nokta'];?></td>
                    <td><?php echo $row['nama_lengkap'];?></td>
                    <td><?php echo $jumlah_kk17; ?></td>
                    <td>
                      <a href="index.php?page=totalTampil&amp;&amp;id=<?php echo $row['nokta']; ?>" class="btn-primary btn btn-sm">Details</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
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
  </div>