<?php
include "koneksi.php";  

$query2 = mysqli_query($connect, "SELECT SUM(sks) AS jmlSKS FROM matakuliah");
while($data = mysqli_fetch_array($query2)){ 
  $jumlahSKS = $data['jmlSKS']; 
  
}


// hitung nilai MK1
if (isset($_POST['hitungNilai'])) {

  $kode_mk = $_POST['mk'];
  $nokta = $_POST['nokta'];
  $nama_lengkap = $_POST['nama_lengkap']; 
  
  $data = mysqli_query($connect,"SELECT * FROM matakuliah WHERE kodeMK='$kode_mk'");
  while($d = mysqli_fetch_array($data)){
    $kaliSKS = $d['sks'];
    $kode_mk = $d['id'];
    $mk = $kode_mk;

    if ($kode_mk == 1) {
      //menampilkan mk indeks konvwesi
     $data = mysqli_query($connect,"SELECT COUNT('nilai_indeks') AS nilaiBagi FROM mk_indeks WHERE id_mk=1");
     while($ind = mysqli_fetch_array($data)){
      $bagiMK1 = $ind['nilaiBagi'];
      // echo $bagiMK1;
    }

    //menapilkan total konversi
    $data = mysqli_query($connect,"SELECT * FROM total_cpl WHERE nokta='$nokta'");
    while($tot = mysqli_fetch_array($data)){
      $jumlah1 = $tot['tot_SK01'] * 1;
      $jumlah2 = $tot['tot_SK02'] * 1;
      $jumlah3 = $tot['tot_SK07'] * 0.4;
      $jumlah4 = $tot['tot_SK08'] * 1;
      $jumlah5 = $tot['tot_PP01'] * 1;
      $jumlah6 = $tot['tot_PP02'] * 1;
      $jumlah7 = $tot['tot_PP03'] * 1;
      $jumlah8 = $tot['tot_PP04'] * 1;
      $jumlah9 = $tot['tot_PP05'] * 1;
      $jumlah10 = $tot['tot_PP06'] * 1;
      $jumlah11 = $tot['tot_PP07'] * 1;
      $jumlah12 = $tot['tot_KU02'] * 1;
      $jumlah13 = $tot['tot_KU10'] * 0.5;

      //total SK dikali fakor tertentu
      $jumlahFaktorMK1 = $jumlah1+$jumlah2+$jumlah3+$jumlah4+$jumlah5+$jumlah6+$jumlah7+$jumlah8+$jumlah9+$jumlah10+$jumlah11+$jumlah12+$jumlah13;
      //jumlah faktor dibagi jumlah faktor tertentu
      $nilai = $jumlahFaktorMK1/$bagiMK1;
      if (round($nilai) >= 100) {
        $nilai = 100;
      }

      //nilai Mutu dikali sks
    }

  }elseif ($kode_mk == 2) {
    
    $data = mysqli_query($connect,"SELECT COUNT('nilai_indeks') AS nilaiBagi FROM mk_indeks WHERE id_mk=2");
    while($ind = mysqli_fetch_array($data)){
      $bagiMK2 = $ind['nilaiBagi'];
      // echo $bagi13;
    }

    //menapilkan total konversi
    $data = mysqli_query($connect,"SELECT * FROM total_cpl WHERE nokta='$nokta'");
    while($tot = mysqli_fetch_array($data)){
      $jumlah1_MK2 = $tot['tot_SK01'] * 0.3;
      $jumlah2_MK2 = $tot['tot_SK09'] * 0.5;
      $jumlah3_MK2 = $tot['tot_PP08'] * 1;
      $jumlah4_MK2 = $tot['tot_PP09'] * 1;
      $jumlah5_MK2 = $tot['tot_PP10'] * 1;
      $jumlah6_MK2 = $tot['tot_PP11'] * 1;
      $jumlah7_MK2 = $tot['tot_PP12'] * 1;
      $jumlah8_MK2 = $tot['tot_PP13'] * 1;
      $jumlah9_MK2 = $tot['tot_PP14'] * 1;
      $jumlah10_MK2 = $tot['tot_KU01'] * 1;
      $jumlah11_MK2 = $tot['tot_KU04'] * 1;
      $jumlah12_MK2 = $tot['tot_KU06'] * 0.5;
      $jumlah13_MK2 = $tot['tot_KU13'] * 1;

      //total SK dikali fakor tertentu
      $jumlahFaktorMK2 = $jumlah1_MK2+$jumlah2_MK2+$jumlah3_MK2+$jumlah4_MK2+$jumlah5_MK2+$jumlah6_MK2+$jumlah7_MK2+$jumlah8_MK2+$jumlah9_MK2+$jumlah10_MK2+$jumlah11_MK2+$jumlah12_MK2+$jumlah13_MK2;
      //jumlah faktor dibagi jumlah faktor tertentu
      $nilai = $jumlahFaktorMK2/$bagiMK2;
      if (round($nilai) >= 100) {
        $nilai = 100;
      }

      //nilai Mutu dikali sks
    }

  }elseif ($kode_mk == 3) {
    
    $data = mysqli_query($connect,"SELECT COUNT('nilai_indeks') AS nilaiBagi FROM mk_indeks WHERE id_mk=3");
    while($ind = mysqli_fetch_array($data)){
      $bagiMK3 = $ind['nilaiBagi'];
      // echo $bagi13;
    }

    //menapilkan total konversi
    $data = mysqli_query($connect,"SELECT * FROM total_cpl WHERE nokta='$nokta'");
    while($tot = mysqli_fetch_array($data)){
      $jumlah1_MK3 = $tot['tot_SK04'] * 0.5;
      $jumlah2_MK3 = $tot['tot_SK06'] * 0.5;
      $jumlah3_MK3 = $tot['tot_PP07'] * 0.3;
      $jumlah4_MK3 = $tot['tot_PP15'] * 1;
      $jumlah5_MK3 = $tot['tot_PP16'] * 1;
      $jumlah6_MK3 = $tot['tot_PP17'] * 1;
      $jumlah7_MK3 = $tot['tot_PP18'] * 1;
      $jumlah8_MK3 = $tot['tot_PP19'] * 1;
      $jumlah9_MK3 = $tot['tot_PP20'] * 1;
      $jumlah10_MK3 = $tot['tot_KU12'] * 1;

      //total SK dikali fakor tertentu
      $jumlahFaktorMK3 = $jumlah1_MK3+$jumlah2_MK3+$jumlah3_MK3+$jumlah4_MK3+$jumlah5_MK3+$jumlah6_MK3+$jumlah7_MK3+$jumlah8_MK3+$jumlah9_MK3+$jumlah10_MK3;
      //jumlah faktor dibagi jumlah faktor tertentu
      $nilai = $jumlahFaktorMK3/$bagiMK3;
      if (round($nilai) >= 100) {
        $nilai = 100;
      }

      //nilai Mutu dikali sks
    }

  }elseif ($kode_mk == 4) {
    
    $data = mysqli_query($connect,"SELECT COUNT('nilai_indeks') AS nilaiBagi FROM mk_indeks WHERE id_mk=4");
    while($ind = mysqli_fetch_array($data)){
      $bagiMK4 = $ind['nilaiBagi'];
      // echo $bagi13;
    }

    //menapilkan total konversi
    $data = mysqli_query($connect,"SELECT * FROM total_cpl WHERE nokta='$nokta'");
    while($tot = mysqli_fetch_array($data)){
      $jumlah1_MK4 = $tot['tot_SK05'] * 0.3;
      $jumlah2_MK4 = $tot['tot_KU05'] * 1;
      $jumlah3_MK4 = $tot['tot_KU07'] * 0.5;
      $jumlah4_MK4 = $tot['tot_KU08'] * 0.5;
      $jumlah5_MK4 = $tot['tot_KK07'] * 1;
      $jumlah6_MK4 = $tot['tot_KK08'] * 1;
      $jumlah7_MK4 = $tot['tot_KK09'] * 1;
      $jumlah8_MK4 = $tot['tot_KK10'] * 1;
      $jumlah9_MK4 = $tot['tot_KK11'] * 1;

      //total SK dikali fakor tertentu
      $jumlahFaktorMK4 = $jumlah1_MK4+$jumlah2_MK4+$jumlah3_MK4+$jumlah4_MK4+$jumlah5_MK4+$jumlah6_MK4+$jumlah7_MK4+$jumlah8_MK4+$jumlah9_MK4;
      //jumlah faktor dibagi jumlah faktor tertentu
      $nilai = $jumlahFaktorMK4/$bagiMK4;
      //nilai Mutu dikali sks
      if (round($nilai) >= 100) {
        $nilai = 100;
      }
    }
  }elseif ($kode_mk == 5) {
    
    $data = mysqli_query($connect,"SELECT COUNT('nilai_indeks') AS nilaiBagi FROM mk_indeks WHERE id_mk=5");
    while($ind = mysqli_fetch_array($data)){
      $bagiMK5 = $ind['nilaiBagi'];
      // echo $bagi13;
    }

    //menapilkan total konversi
    $data = mysqli_query($connect,"SELECT * FROM total_cpl WHERE nokta='$nokta'");
    while($tot = mysqli_fetch_array($data)){
      $jumlah1_MK5 = $tot['tot_SK05'] * 0.2;
      $jumlah2_MK5 = $tot['tot_KU03'] * 1;
      $jumlah3_MK5 = $tot['tot_KU11'] * 1;

      //total SK dikali fakor tertentu
      $jumlahFaktorMK5 = $jumlah1_MK5+$jumlah2_MK5+$jumlah3_MK5;
      //jumlah faktor dibagi jumlah faktor tertentu
      $nilai = $jumlahFaktorMK5/$bagiMK5;
      if (round($nilai) >= 100) {
        $nilai = 100;
      }
      //nilai Mutu dikali sks
    }

  }elseif ($kode_mk == 6) {
    
    $data = mysqli_query($connect,"SELECT COUNT('nilai_indeks') AS nilaiBagi FROM mk_indeks WHERE id_mk=6");
    while($ind = mysqli_fetch_array($data)){
      $bagiMK6 = $ind['nilaiBagi'];
      // echo $bagi13;
    }

    //menapilkan total konversi
    $data = mysqli_query($connect,"SELECT * FROM total_cpl WHERE nokta='$nokta'");
    while($tot = mysqli_fetch_array($data)){
      $jumlah1_MK6 = $tot['tot_SK03'] * 1;
      $jumlah2_MK6 = $tot['tot_SK04'] * 0.5;
      $jumlah3_MK6 = $tot['tot_SK05'] * 0.5;
      $jumlah4_MK6 = $tot['tot_SK06'] * 0.5;
      $jumlah5_MK6 = $tot['tot_SK09'] * 0.5;
      $jumlah6_MK6 = $tot['tot_SK10'] * 1;
      $jumlah7_MK6 = $tot['tot_KU06'] * 0.5;
      $jumlah8_MK6 = $tot['tot_KU07'] * 0.5;
      $jumlah9_MK6 = $tot['tot_KU08'] * 0.5;
      $jumlah10_MK6 = $tot['tot_KU09'] * 1;
      $jumlah11_MK6 = $tot['tot_KU10'] * 0.5;
      $jumlah12_MK6 = $tot['tot_KK01'] * 1;
      $jumlah13_MK6 = $tot['tot_KK02'] * 1;
      $jumlah14_MK6 = $tot['tot_KK03'] * 1;
      $jumlah15_MK6 = $tot['tot_KK04'] * 1;
      $jumlah16_MK6 = $tot['tot_KK05'] * 1;
      $jumlah17_MK6 = $tot['tot_KK06'] * 1;
      $jumlah18_MK6 = $tot['tot_KK12'] * 1;
      $jumlah19_MK6 = $tot['tot_KK13'] * 1;
      $jumlah20_MK6 = $tot['tot_KK14'] * 1;
      $jumlah21_MK6 = $tot['tot_KK15'] * 1;
      $jumlah22_MK6 = $tot['tot_KK16'] * 1;
      $jumlah23_MK6 = $tot['tot_KK17'] * 1;

      //total SK dikali fakor tertentu
      $jumlahFaktorMK6 = $jumlah1_MK6+$jumlah2_MK6+$jumlah3_MK6+$jumlah4_MK6+$jumlah5_MK6+$jumlah6_MK6+$jumlah7_MK6+$jumlah8_MK6+$jumlah9_MK6+$jumlah10_MK6+$jumlah11_MK6+$jumlah12_MK6+$jumlah13_MK6+$jumlah14_MK6+$jumlah15_MK6+$jumlah16_MK6+$jumlah17_MK6+$jumlah18_MK6+$jumlah19_MK6+$jumlah20_MK6+$jumlah21_MK6+$jumlah22_MK6+$jumlah23_MK6;
      //jumlah faktor dibagi jumlah faktor tertentu
      $nilai = $jumlahFaktorMK6/$bagiMK6;
      if (round($nilai) >= 100) {
        $nilai = 100;
      }
      //nilai Mutu dikali sks
    }

  }else{
    echo "Maaf, Kode Mata Kuliah Tidak Ada.";
    echo "<br><a href='index.php?page=nilaiDetails&&id=$nokta</a>";
  }

  // loop nilai mutu
  if (($nilai >= 80) && ($nilai <= 150)) {
    $nilai_mutu = 4;
    $indeks = "A";
  }elseif (($nilai >= 77) && ($nilai <= 80)) {
    $nilai_mutu = 3.67;
    $indeks = "A-";
  }elseif (($nilai >= 73) && ($nilai <= 77)) {
    $nilai_mutu = 3.33;
    $indeks = "B+";
  }elseif (($nilai >= 70) && ($nilai <= 73)) {
    $nilai_mutu = 3;
    $indeks = "B";
  }elseif (($nilai >= 67) && ($nilai <= 70)) {
    $nilai_mutu = 2.67;
    $indeks = "B-";
  }elseif (($nilai >= 63) && ($nilai <= 67)) {
    $nilai_mutu = 2.33;
    $indeks = "C+";
  }elseif (($nilai >= 60) && ($nilai <= 63)) {
    $nilai_mutu = 2;
    $indeks = "C+";
  }elseif (($nilai >= 49) && ($nilai <= 60)) {
    $nilai_mutu = 1;
    $indeks = "D";
  }elseif (($nilai >= 0)){
    $nilai_mutu = 0;
    $indeks = "E";
  }else{
    $nilai_mutu = 0;
    $indeks = "Indeks Tidak Ada";
  }

  $nilai = round($nilai,4);
  //nilai mutu dikali sks
  $total_mutu = $nilai_mutu * $kaliSKS;


  } //while awal di

  // insert ipk
  mysqli_query($connect, "INSERT INTO hasil_konversi VALUES ('','$nokta','$nama_lengkap','$mk','$nilai','$nilai_mutu','$indeks','$total_mutu')");

  //menampilkan nilai mutu
  $data = mysqli_query($connect,"SELECT SUM(total_mutu) AS totalMutu FROM hasil_konversi WHERE nokta='$nokta'");
  while($mutu = mysqli_fetch_array($data)){
    $mutu = $mutu['totalMutu'];
    // ipk
    $ipkMhs = $mutu / $jumlahSKS;
    $ipk =  round($ipkMhs,4);
  }

  $query_update = "UPDATE hasil_nilai SET ipk='$ipk' WHERE nokta='$nokta'";
  $sql = mysqli_query($connect, $query_update);

} //if

echo "<script>alert('Matakuliah Ditambahkan, IPK Berubah');document.location='index.php?page=nilaiDetails&&id=$nokta'</script>";

?>