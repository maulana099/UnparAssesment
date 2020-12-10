<?php  

include '../koneksi.php';

// organisasi
if (isset($_POST['EDITNILAI'])) {
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $SK01 = $_POST['SK01'];
  $SK02 = $_POST['SK02'];
  $SK03 = $_POST['SK03'];
  $SK04 = $_POST['SK04'];
  $SK05 = $_POST['SK05'];
  $SK06 = $_POST['SK06'];
  $SK07 = $_POST['SK07'];
  $SK08 = $_POST['SK08'];
  $SK09 = $_POST['SK09'];
  $SK10 = $_POST['SK10'];
  $status = 1;

  $query = "UPDATE hasil_organisasi SET nokta='$nokta', nama_lengkap='$nama_lengkap', SK01='$SK01', SK02='$SK02', SK03='$SK03', SK04='$SK04', SK05='$SK05', SK06='$SK06', SK07='$SK07', SK08='$SK08', SK09='$SK09', SK10='$SK10', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query); 
}

//penghargaan
if (isset($_POST['EDITNILAIP'])) {
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $SK01 = $_POST['SK01'];
  $SK02 = $_POST['SK02'];
  $SK03 = $_POST['SK03'];
  $SK04 = $_POST['SK04'];
  $SK05 = $_POST['SK05'];
  $SK06 = $_POST['SK06'];
  $SK07 = $_POST['SK07'];
  $SK08 = $_POST['SK08'];
  $SK09 = $_POST['SK09'];
  $SK10 = $_POST['SK10'];
  $status = 1;

  $query = "UPDATE hasil_penghargaan SET nokta='$nokta', nama_lengkap='$nama_lengkap', SK01='$SK01', SK02='$SK02', SK03='$SK03', SK04='$SK04', SK05='$SK05', SK06='$SK06', SK07='$SK07', SK08='$SK08', SK09='$SK09', SK10='$SK10', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query);
}

//PELATIHAN
if (isset($_POST['EDITNILAIPELATIHAN'])) {
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $SK01 = $_POST['SK01'];
  $SK02 = $_POST['SK02'];
  $SK03 = $_POST['SK03'];
  $SK04 = $_POST['SK04'];
  $SK05 = $_POST['SK05'];
  $SK06 = $_POST['SK06'];
  $SK07 = $_POST['SK07'];
  $SK08 = $_POST['SK08'];
  $SK09 = $_POST['SK09'];
  $SK10 = $_POST['SK10'];
    //KU
  $KU01 = $_POST['KU01'];
  $KU02 = $_POST['KU02'];
  $KU03 = $_POST['KU03'];
  $KU04 = $_POST['KU04'];
  $KU05 = $_POST['KU05'];
  $KU06 = $_POST['KU06'];
  $KU07 = $_POST['KU07'];
  $KU08 = $_POST['KU08'];
  $KU09 = $_POST['KU09'];
  $KU10 = $_POST['KU10'];
  $KU11 = $_POST['KU11'];
  $KU12 = $_POST['KU12'];
  $KU13 = $_POST['KU13'];
  $status = 1;

  $query3 = "UPDATE hasil_pelatihan SET nokta='$nokta', nama_lengkap='$nama_lengkap', SK01='$SK01', SK02='$SK02', SK03='$SK03', SK04='$SK04', SK05='$SK05', SK06='$SK06', SK07='$SK07', SK08='$SK08', SK09='$SK09', SK10='$SK10',KU01='$KU01',KU02='$KU02',KU03='$KU03',KU04='$KU04',KU05='$KU05',KU06='$KU06',KU07='$KU07',KU08='$KU08',KU09='$KU09',KU10='$KU10',KU11='$KU11', KU12='$KU12',KU13='$KU13', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query3);

}

//PELATIHAN LAIN
if (isset($_POST['EDITNILAIPELATIHANLAIN'])) {
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $SK01 = $_POST['SK01'];
  $SK02 = $_POST['SK02'];
  $SK03 = $_POST['SK03'];
  $SK04 = $_POST['SK04'];
  $SK05 = $_POST['SK05'];
  $SK06 = $_POST['SK06'];
  $SK07 = $_POST['SK07'];
  $SK08 = $_POST['SK08'];
  $SK09 = $_POST['SK09'];
  $SK10 = $_POST['SK10'];
    //KU
  $KU01 = $_POST['KU01'];
  $KU02 = $_POST['KU02'];
  $KU03 = $_POST['KU03'];
  $KU04 = $_POST['KU04'];
  $KU05 = $_POST['KU05'];
  $KU06 = $_POST['KU06'];
  $KU07 = $_POST['KU07'];
  $KU08 = $_POST['KU08'];
  $KU09 = $_POST['KU09'];
  $KU10 = $_POST['KU10'];
  $KU11 = $_POST['KU11'];
  $KU12 = $_POST['KU12'];
  $KU13 = $_POST['KU13'];
  $status = 1;

  $query4 = "UPDATE hasil_pelatihanlain SET nokta='$nokta', nama_lengkap='$nama_lengkap', SK01='$SK01', SK02='$SK02', SK03='$SK03', SK04='$SK04', SK05='$SK05', SK06='$SK06', SK07='$SK07', SK08='$SK08', SK09='$SK09', SK10='$SK10',KU01='$KU01',KU02='$KU02',KU03='$KU03',KU04='$KU04',KU05='$KU05',KU06='$KU06',KU07='$KU07',KU08='$KU08',KU09='$KU09',KU10='$KU10',KU11='$KU11', KU12='$KU12',KU13='$KU13', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query4); 

}

  //PENGERTIAN PENGALAMAN SENDIRI
if (isset($_POST['EDITNILAIPE'])) { 
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $SK01 = $_POST['SK01'];
  $SK02 = $_POST['SK02'];
  $SK03 = $_POST['SK03'];
  $SK04 = $_POST['SK04'];
  $SK05 = $_POST['SK05'];
  $SK06 = $_POST['SK06'];
  $SK07 = $_POST['SK07'];
  $SK08 = $_POST['SK08'];
  $SK09 = $_POST['SK09'];
  $SK10 = $_POST['SK10'];
    //PP
  $PP01 = $_POST['PP01'];
  $PP02 = $_POST['PP02'];
  $PP03 = $_POST['PP03'];
  $PP04 = $_POST['PP04'];
  $PP05 = $_POST['PP05'];
  $PP06 = $_POST['PP06'];
  $PP07 = $_POST['PP07'];
  $PP08 = $_POST['PP08'];
  $PP09 = $_POST['PP09'];
  $PP10 = $_POST['PP10'];
  $PP11 = $_POST['PP11'];
  $PP12 = $_POST['PP12'];
  $PP13 = $_POST['PP13'];
  $PP14 = $_POST['PP14'];
  $PP15 = $_POST['PP15'];
  $PP16 = $_POST['PP16'];
  $PP17 = $_POST['PP17'];
  $PP18 = $_POST['PP18'];
  $PP19 = $_POST['PP19'];
  $PP20 = $_POST['PP20'];
  $status = 1;

  $query5 = "UPDATE hasil_pengertian SET nokta='$nokta', nama_lengkap='$nama_lengkap', SK01='$SK01', SK02='$SK02', SK03='$SK03', SK04='$SK04', SK05='$SK05', SK06='$SK06', SK07='$SK07', SK08='$SK08', SK09='$SK09', SK10='$SK10', PP01='$PP01', PP02='$PP02', PP03='$PP03', PP04='$PP04', PP05='$PP05', PP06='$PP06', PP07='$PP07', PP08='$PP08', PP09='$PP09', PP10='$PP10', PP11='$PP11', PP12='$PP12', PP13='$PP13', PP14='$PP14', PP15='$PP15', PP16='$PP16', PP17='$PP17', PP18='$PP18', PP19='$PP19', PP20='$PP20', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query5);

}

  //kualifikasi
if (isset($_POST['EDITNILAIKUA'])) { 
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $KU01 = $_POST['KU01'];
  $KU02 = $_POST['KU02'];
  $KU03 = $_POST['KU03'];
  $KU04 = $_POST['KU04'];
  $KU05 = $_POST['KU05'];
  $KU06 = $_POST['KU06'];
  $KU07 = $_POST['KU07'];
  $KU08 = $_POST['KU08'];
  $KU09 = $_POST['KU09'];
  $KU10 = $_POST['KU10'];
  $KU11 = $_POST['KU11'];
  $KU12 = $_POST['KU12'];
  $KU13 = $_POST['KU13'];
    //KK
  $KK01 = $_POST['KK01'];
  $KK02 = $_POST['KK02'];
  $KK03 = $_POST['KK03'];
  $KK04 = $_POST['KK04'];
  $KK05 = $_POST['KK05'];
  $KK06 = $_POST['KK06'];
  $KK07 = $_POST['KK07'];
  $KK08 = $_POST['KK08'];
  $KK09 = $_POST['KK09'];
  $KK10 = $_POST['KK10'];
  $KK11 = $_POST['KK11'];
  $KK12 = $_POST['KK12'];
  $KK13 = $_POST['KK13'];
  $KK14 = $_POST['KK14'];
  $KK15 = $_POST['KK15'];
  $KK16 = $_POST['KK16'];
  $KK17 = $_POST['KK17'];
  $status = 1;

  $query6 = "UPDATE hasil_kualifikasi SET nokta='$nokta', nama_lengkap='$nama_lengkap', KU01='$KU01', KU02='$KU02', KU03='$KU03', KU04='$KU04', KU05='$KU05', KU06='$KU06', KU07='$KU07', KU08='$KU08', KU09='$KU09', KU10='$KU10', KU11='$KU11', KU12='$KU12', KU13='$KU13', KK01='$KK01', KK02='$KK02', KK03='$KK03', KK04='$KK04', KK05='$KK05', KK06='$KK06', KK07='$KK07', KK08='$KK08', KK09='$KK09', KK10='$KK10', KK11='$KK11', KK12='$KK12', KK13='$KK13', KK14='$KK14', KK15='$KK15', KK16='$KK16', KK17='$KK17', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query6); 
}

  //PENGALAMAN MENGAJAR
if (isset($_POST['EDITNILAIME'])) { 
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $PP01 = $_POST['PP01'];
  $PP02 = $_POST['PP02'];
  $PP03 = $_POST['PP03'];
  $PP04 = $_POST['PP04'];
  $PP05 = $_POST['PP05'];
  $PP06 = $_POST['PP06'];
  $PP07 = $_POST['PP07'];
  $PP08 = $_POST['PP08'];
  $PP09 = $_POST['PP09'];
  $PP10 = $_POST['PP10'];
  $PP11 = $_POST['PP11'];
  $PP12 = $_POST['PP12'];
  $PP13 = $_POST['PP13'];
  $PP14 = $_POST['PP14'];
  $PP15 = $_POST['PP15'];
  $PP16 = $_POST['PP16'];
  $PP17 = $_POST['PP17'];
  $PP18 = $_POST['PP18'];
  $PP19 = $_POST['PP19'];
  $PP20 = $_POST['PP20'];
    //KK
  $KK01 = $_POST['KK01'];
  $KK02 = $_POST['KK02'];
  $KK03 = $_POST['KK03'];
  $KK04 = $_POST['KK04'];
  $KK05 = $_POST['KK05'];
  $KK06 = $_POST['KK06'];
  $KK07 = $_POST['KK07'];
  $KK08 = $_POST['KK08'];
  $KK09 = $_POST['KK09'];
  $KK10 = $_POST['KK10'];
  $KK11 = $_POST['KK11'];
  $KK12 = $_POST['KK12'];
  $KK13 = $_POST['KK13'];
  $KK14 = $_POST['KK14'];
  $KK15 = $_POST['KK15'];
  $KK16 = $_POST['KK16'];
  $KK17 = $_POST['KK17'];
  $status = 1;

  $query7 = "UPDATE hasil_mengajar SET nokta='$nokta', nama_lengkap='$nama_lengkap', PP01='$PP01', PP02='$PP02', PP03='$PP03', PP04='$PP04', PP05='$PP05', PP06='$PP06', PP07='$PP07', PP08='$PP08', PP09='$PP09', PP10='$PP10', PP11='$PP11', PP12='$PP12', PP13='$PP13', PP14='$PP14', PP15='$PP15', PP16='$PP16', PP17='$PP17', PP18='$PP18', PP19='$PP19', PP20='$PP20', KK01='$KK01', KK02='$KK02', KK03='$KK03', KK04='$KK04', KK05='$KK05', KK06='$KK06', KK07='$KK07', KK08='$KK08', KK09='$KK09', KK10='$KK10', KK11='$KK11', KK12='$KK12', KK13='$KK13', KK14='$KK14', KK15='$KK15', KK16='$KK16', KK17='$KK17', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query7); 
}

   //hasil penelitian
if (isset($_POST['EDITNILAIPEN'])) {
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $PP01 = $_POST['PP01'];
  $PP02 = $_POST['PP02'];
  $PP03 = $_POST['PP03'];
  $PP04 = $_POST['PP04'];
  $PP05 = $_POST['PP05'];
  $PP06 = $_POST['PP06'];
  $PP07 = $_POST['PP07'];
  $PP08 = $_POST['PP08'];
  $PP09 = $_POST['PP09'];
  $PP10 = $_POST['PP10'];
  $PP11 = $_POST['PP11'];
  $PP12 = $_POST['PP12'];
  $PP13 = $_POST['PP13'];
  $PP14 = $_POST['PP14'];
  $PP15 = $_POST['PP15'];
  $PP16 = $_POST['PP16'];
  $PP17 = $_POST['PP17'];
  $PP18 = $_POST['PP18'];
  $PP19 = $_POST['PP19'];
  $PP20 = $_POST['PP20'];
    //PP
  $KU01 = $_POST['KU01'];
  $KU02 = $_POST['KU02'];
  $KU03 = $_POST['KU03'];
  $KU04 = $_POST['KU04'];
  $KU05 = $_POST['KU05'];
  $KU06 = $_POST['KU06'];
  $KU07 = $_POST['KU07'];
  $KU08 = $_POST['KU08'];
  $KU09 = $_POST['KU09'];
  $KU10 = $_POST['KU10'];
  $KU11 = $_POST['KU11'];
  $KU12 = $_POST['KU12'];
  $KU13 = $_POST['KU13'];
  $status = 1;

  $query8 = "UPDATE hasil_penelitian SET nokta='$nokta', nama_lengkap='$nama_lengkap', PP01='$PP01', PP02='$PP02', PP03='$PP03', PP04='$PP04', PP05='$PP05', PP06='$PP06', PP07='$PP07', PP08='$PP08', PP09='$PP09', PP10='$PP10', PP11='$PP11', PP12='$PP12', PP13='$PP13', PP14='$PP14', PP15='$PP15', PP16='$PP16', PP17='$PP17', PP18='$PP18', PP19='$PP19', PP20='$PP20', KU01='$KU01', KU02='$KU02', KU03='$KU03', KU04='$KU04', KU05='$KU05', KU06='$KU06', KU07='$KU07', KU08='$KU08', KU09='$KU09', KU10='$KU10', KU11='$KU11', KU12='$KU12', KU13='$KU13', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query8);
}

  //manufaktur
if (isset($_POST['EDITNILAIMANU'])) { 
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $KU01 = $_POST['KU01'];
  $KU02 = $_POST['KU02'];
  $KU03 = $_POST['KU03'];
  $KU04 = $_POST['KU04'];
  $KU05 = $_POST['KU05'];
  $KU06 = $_POST['KU06'];
  $KU07 = $_POST['KU07'];
  $KU08 = $_POST['KU08'];
  $KU09 = $_POST['KU09'];
  $KU10 = $_POST['KU10'];
  $KU11 = $_POST['KU11'];
  $KU12 = $_POST['KU12'];
  $KU13 = $_POST['KU13'];
    //KK
  $KK01 = $_POST['KK01'];
  $KK02 = $_POST['KK02'];
  $KK03 = $_POST['KK03'];
  $KK04 = $_POST['KK04'];
  $KK05 = $_POST['KK05'];
  $KK06 = $_POST['KK06'];
  $KK07 = $_POST['KK07'];
  $KK08 = $_POST['KK08'];
  $KK09 = $_POST['KK09'];
  $KK10 = $_POST['KK10'];
  $KK11 = $_POST['KK11'];
  $KK12 = $_POST['KK12'];
  $KK13 = $_POST['KK13'];
  $KK14 = $_POST['KK14'];
  $KK15 = $_POST['KK15'];
  $KK16 = $_POST['KK16'];
  $KK17 = $_POST['KK17'];
  $status = 1;

  $query9 = "UPDATE hasil_manufaktur SET nokta='$nokta', nama_lengkap='$nama_lengkap', KU01='$KU01', KU02='$KU02', KU03='$KU03', KU04='$KU04', KU05='$KU05', KU06='$KU06', KU07='$KU07', KU08='$KU08', KU09='$KU09', KU10='$KU10', KU11='$KU11', KU12='$KU12', KU13='$KU13', KK01='$KK01', KK02='$KK02', KK03='$KK03', KK04='$KK04', KK05='$KK05', KK06='$KK06', KK07='$KK07', KK08='$KK08', KK09='$KK09', KK10='$KK10', KK11='$KK11', KK12='$KK12', KK13='$KK13', KK14='$KK14', KK15='$KK15', KK16='$KK16', KK17='$KK17', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query9); 
}

if (isset($_POST['EDITNILAIUSA'])) { 
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $KU01 = $_POST['KU01'];
  $KU02 = $_POST['KU02'];
  $KU03 = $_POST['KU03'];
  $KU04 = $_POST['KU04'];
  $KU05 = $_POST['KU05'];
  $KU06 = $_POST['KU06'];
  $KU07 = $_POST['KU07'];
  $KU08 = $_POST['KU08'];
  $KU09 = $_POST['KU09'];
  $KU10 = $_POST['KU10'];
  $KU11 = $_POST['KU11'];
  $KU12 = $_POST['KU12'];
  $KU13 = $_POST['KU13'];
    //KK
  $KK01 = $_POST['KK01'];
  $KK02 = $_POST['KK02'];
  $KK03 = $_POST['KK03'];
  $KK04 = $_POST['KK04'];
  $KK05 = $_POST['KK05'];
  $KK06 = $_POST['KK06'];
  $KK07 = $_POST['KK07'];
  $KK08 = $_POST['KK08'];
  $KK09 = $_POST['KK09'];
  $KK10 = $_POST['KK10'];
  $KK11 = $_POST['KK11'];
  $KK12 = $_POST['KK12'];
  $KK13 = $_POST['KK13'];
  $KK14 = $_POST['KK14'];
  $KK15 = $_POST['KK15'];
  $KK16 = $_POST['KK16'];
  $KK17 = $_POST['KK17'];
  $status = 1;

  $query10 = "UPDATE hasil_usaha SET nokta='$nokta', nama_lengkap='$nama_lengkap', KU01='$KU01', KU02='$KU02', KU03='$KU03', KU04='$KU04', KU05='$KU05', KU06='$KU06', KU07='$KU07', KU08='$KU08', KU09='$KU09', KU10='$KU10', KU11='$KU11', KU12='$KU12', KU13='$KU13', KK01='$KK01', KK02='$KK02', KK03='$KK03', KK04='$KK04', KK05='$KK05', KK06='$KK06', KK07='$KK07', KK08='$KK08', KK09='$KK09', KK10='$KK10', KK11='$KK11', KK12='$KK12', KK13='$KK13', KK14='$KK14', KK15='$KK15', KK16='$KK16', KK17='$KK17', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query10); 
}

    //karya keinsyuran
if (isset($_POST['EDITNILAIKAR'])) { 
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $KK01 = $_POST['KK01'];
  $KK02 = $_POST['KK02'];
  $KK03 = $_POST['KK03'];
  $KK04 = $_POST['KK04'];
  $KK05 = $_POST['KK05'];
  $KK06 = $_POST['KK06'];
  $KK07 = $_POST['KK07'];
  $KK08 = $_POST['KK08'];
  $KK09 = $_POST['KK09'];
  $KK10 = $_POST['KK10'];
  $KK11 = $_POST['KK11'];
  $KK12 = $_POST['KK12'];
  $KK13 = $_POST['KK13'];
  $KK14 = $_POST['KK14'];
  $KK15 = $_POST['KK15'];
  $KK16 = $_POST['KK16'];
  $KK17 = $_POST['KK17'];
  $status = 1;

  $query11 = "UPDATE hasil_karya SET nokta='$nokta', nama_lengkap='$nama_lengkap', KK01='$KK01', KK02='$KK02', KK03='$KK03', KK04='$KK04', KK05='$KK05', KK06='$KK06', KK07='$KK07', KK08='$KK08', KK09='$KK09', KK10='$KK10', KK11='$KK11', KK12='$KK12', KK13='$KK13', KK14='$KK14', KK15='$KK15', KK16='$KK16', KK17='$KK17', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query11);
}

  //makalah
if (isset($_POST['EDITNILAIMAK'])) { 
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $KK01 = $_POST['KK01'];
  $KK02 = $_POST['KK02'];
  $KK03 = $_POST['KK03'];
  $KK04 = $_POST['KK04'];
  $KK05 = $_POST['KK05'];
  $KK06 = $_POST['KK06'];
  $KK07 = $_POST['KK07'];
  $KK08 = $_POST['KK08'];
  $KK09 = $_POST['KK09'];
  $KK10 = $_POST['KK10'];
  $KK11 = $_POST['KK11'];
  $KK12 = $_POST['KK12'];
  $KK13 = $_POST['KK13'];
  $KK14 = $_POST['KK14'];
  $KK15 = $_POST['KK15'];
  $KK16 = $_POST['KK16'];
  $KK17 = $_POST['KK17'];
  $status = 1;

  $query12 = "UPDATE hasil_makalah SET nokta='$nokta', nama_lengkap='$nama_lengkap', KK01='$KK01', KK02='$KK02', KK03='$KK03', KK04='$KK04', KK05='$KK05', KK06='$KK06', KK07='$KK07', KK08='$KK08', KK09='$KK09', KK10='$KK10', KK11='$KK11', KK12='$KK12', KK13='$KK13', KK14='$KK14', KK15='$KK15', KK16='$KK16', KK17='$KK17', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query12); 

}

  //SEMINAR
if (isset($_POST['EDITNILAISEM'])) { 
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $KU01 = $_POST['KU01'];
  $KU02 = $_POST['KU02'];
  $KU03 = $_POST['KU03'];
  $KU04 = $_POST['KU04'];
  $KU05 = $_POST['KU05'];
  $KU06 = $_POST['KU06'];
  $KU07 = $_POST['KU07'];
  $KU08 = $_POST['KU08'];
  $KU09 = $_POST['KU09'];
  $KU10 = $_POST['KU10'];
  $KU11 = $_POST['KU11'];
  $KU12 = $_POST['KU12'];
  $KU13 = $_POST['KU13'];
  $status = 1;

  $query13 = "UPDATE hasil_seminar SET nokta='$nokta', nama_lengkap='$nama_lengkap', KU01='$KU01', KU02='$KU02', KU03='$KU03', KU04='$KU04', KU05='$KU05', KU06='$KU06', KU07='$KU07', KU08='$KU08', KU09='$KU09', KU10='$KU10', KU11='$KU11', KU12='$KU12', KU13='$KU13', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query13); 

}

  //TEKNOLOGI BARU
if (isset($_POST['EDITNILAITEK'])) { 
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $KU01 = $_POST['KU01'];
  $KU02 = $_POST['KU02'];
  $KU03 = $_POST['KU03'];
  $KU04 = $_POST['KU04'];
  $KU05 = $_POST['KU05'];
  $KU06 = $_POST['KU06'];
  $KU07 = $_POST['KU07'];
  $KU08 = $_POST['KU08'];
  $KU09 = $_POST['KU09'];
  $KU10 = $_POST['KU10'];
  $KU11 = $_POST['KU11'];
  $KU12 = $_POST['KU12'];
  $KU13 = $_POST['KU13'];
    //KK
  $KK01 = $_POST['KK01'];
  $KK02 = $_POST['KK02'];
  $KK03 = $_POST['KK03'];
  $KK04 = $_POST['KK04'];
  $KK05 = $_POST['KK05'];
  $KK06 = $_POST['KK06'];
  $KK07 = $_POST['KK07'];
  $KK08 = $_POST['KK08'];
  $KK09 = $_POST['KK09'];
  $KK10 = $_POST['KK10'];
  $KK11 = $_POST['KK11'];
  $KK12 = $_POST['KK12'];
  $KK13 = $_POST['KK13'];
  $KK14 = $_POST['KK14'];
  $KK15 = $_POST['KK15'];
  $KK16 = $_POST['KK16'];
  $KK17 = $_POST['KK17'];
  $status = 1;

  $query14 = "UPDATE hasil_teknologi SET nokta='$nokta', nama_lengkap='$nama_lengkap', KU01='$KU01', KU02='$KU02', KU03='$KU03', KU04='$KU04', KU05='$KU05', KU06='$KU06', KU07='$KU07', KU08='$KU08', KU09='$KU09', KU10='$KU10', KU11='$KU11', KU12='$KU12', KU13='$KU13', KK01='$KK01', KK02='$KK02', KK03='$KK03', KK04='$KK04', KK05='$KK05', KK06='$KK06', KK07='$KK07', KK08='$KK08', KK09='$KK09', KK10='$KK10', KK11='$KK11', KK12='$KK12', KK13='$KK13', KK14='$KK14', KK15='$KK15', KK16='$KK16', KK17='$KK17', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query14); 
}

if (isset($_POST['EDITNILAIBAH'])) { 
  $id = $_POST['id'];
  $nama_lengkap = $_POST ['nama_lengkap'];
  $nokta = $_POST ['nokta'];
  $SK01 = $_POST['SK01'];
  $SK02 = $_POST['SK02'];
  $SK03 = $_POST['SK03'];
  $SK04 = $_POST['SK04'];
  $SK05 = $_POST['SK05'];
  $SK06 = $_POST['SK06'];
  $SK07 = $_POST['SK07'];
  $SK08 = $_POST['SK08'];
  $SK09 = $_POST['SK09'];
  $SK10 = $_POST['SK10'];
  $status = 1;

  $query15 = "UPDATE hasil_bahasa SET nokta='$nokta', nama_lengkap='$nama_lengkap', SK01='$SK01', SK02='$SK02', SK03='$SK03', SK04='$SK04', SK05='$SK05', SK06='$SK06', SK07='$SK07', SK08='$SK08', SK09='$SK09', SK10='$SK10', status='$status' where id='$id'";
  $sql = mysqli_query($connect, $query15);
}

echo "<script>alert('Data Berhasil di submit untuk di jumlahkan');document.location='index.php?page=dataHasil&&id=$nokta'</script>";

?>