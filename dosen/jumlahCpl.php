<?php  

include '../koneksi.php';

$nokta = $_GET['id'];

//ORGANISASI 1
$query1 = mysqli_query($connect, "SELECT * FROM hasil_organisasi INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_organisasi.nokta");
$d = mysqli_fetch_array($query1);
$SK01 = $d['SK01'];
$SK02 = $d['SK02'];
$SK03 = $d['SK03'];
$SK04 = $d['SK04'];
$SK05 = $d['SK05'];
$SK06 = $d['SK06'];
$SK07 = $d['SK07'];
$SK08 = $d['SK08'];
$SK09 = $d['SK09'];
$SK10 = $d['SK10'];	
$jumlah_sk01 = $SK01+$d['jml_SK01'];
$jumlah_sk02 = $SK02+$d['jml_SK02'];
$jumlah_sk03 = $SK03+$d['jml_SK03'];
$jumlah_sk04 = $SK04+$d['jml_SK04'];
$jumlah_sk05 = $SK05+$d['jml_SK05'];
$jumlah_sk06 = $SK06+$d['jml_SK06'];
$jumlah_sk07 = $SK07+$d['jml_SK07'];
$jumlah_sk08 = $SK08+$d['jml_SK08'];
$jumlah_sk09 = $SK09+$d['jml_SK09'];
$jumlah_sk10 = $SK10+$d['jml_SK10'];
$status = 1;

$query1 = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk07', jml_SK08='$jumlah_sk08', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10', status='$status' WHERE nokta='$nokta'";
$sql = mysqli_query($connect, $query1);

	//PENGHARGAAN 2
$query2 = mysqli_query($connect, "SELECT * FROM hasil_penghargaan INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_penghargaan.nokta");
$data2 = mysqli_fetch_array($query2);
$SK01 = $data2['SK01'];
$SK02 = $data2['SK02'];
$SK03 = $data2['SK03'];
$SK04 = $data2['SK04'];
$SK05 = $data2['SK05'];
$SK06 = $data2['SK06'];
$SK07 = $data2['SK07'];
$SK08 = $data2['SK08'];
$SK09 = $data2['SK09'];
$SK10 = $data2['SK10']; 
$jumlah_sk01 = $SK01+$data2['jml_SK01'];
$jumlah_sk02 = $SK02+$data2['jml_SK02'];
$jumlah_sk03 = $SK03+$data2['jml_SK03'];
$jumlah_sk04 = $SK04+$data2['jml_SK04'];
$jumlah_sk05 = $SK05+$data2['jml_SK05'];
$jumlah_sk06 = $SK06+$data2['jml_SK06'];
$jumlah_sk07 = $SK07+$data2['jml_SK07'];
$jumlah_sk08 = $SK08+$data2['jml_SK08'];
$jumlah_sk09 = $SK09+$data2['jml_SK09'];
$jumlah_sk10 = $SK10+$data2['jml_SK10'];
$status = 1;

$query2 = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk07', jml_SK08='$jumlah_sk08', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10', status='$status' WHERE nokta='$nokta'";
$sql = mysqli_query($connect, $query2);


//PELATIHAN 3
$query3 = mysqli_query($connect, "SELECT * FROM hasil_pelatihan INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_pelatihan.nokta");
$data3 = mysqli_fetch_array($query3);
$SK01 = $data3['SK01'];
$SK02 = $data3['SK02'];
$SK03 = $data3['SK03'];
$SK04 = $data3['SK04'];
$SK05 = $data3['SK05'];
$SK06 = $data3['SK06'];
$SK07 = $data3['SK07'];
$SK08 = $data3['SK08'];
$SK09 = $data3['SK09'];
$SK10 = $data3['SK10'];
$jumlah_sk01 = $SK01+$data3['jml_SK01'];
$jumlah_sk02 = $SK02+$data3['jml_SK02'];
$jumlah_sk03 = $SK03+$data3['jml_SK03'];
$jumlah_sk04 = $SK04+$data3['jml_SK04'];
$jumlah_sk05 = $SK05+$data3['jml_SK05'];
$jumlah_sk06 = $SK06+$data3['jml_SK06'];
$jumlah_sk07 = $SK07+$data3['jml_SK07'];
$jumlah_sk08 = $SK08+$data3['jml_SK08'];
$jumlah_sk09 = $SK09+$data3['jml_SK09'];
$jumlah_sk10 = $SK10+$data3['jml_SK10'];
	//KU
$ku01 = $data3['KU01'];
$ku02 = $data3['KU02'];
$ku03 = $data3['KU03'];
$ku04 = $data3['KU04'];
$ku05 = $data3['KU05'];
$ku06 = $data3['KU06'];
$ku07 = $data3['KU07'];
$ku08 = $data3['KU08'];
$ku09 = $data3['KU09'];
$ku10 = $data3['KU10'];
$ku11 = $data3['KU11'];
$ku12 = $data3['KU12'];
$ku13 = $data3['KU13'];
$jumlah_ku01 = $ku01+$data3['jml_KU01'];
$jumlah_ku02 = $ku02+$data3['jml_KU02'];
$jumlah_ku03 = $ku03+$data3['jml_KU03'];
$jumlah_ku04 = $ku04+$data3['jml_KU04'];
$jumlah_ku05 = $ku05+$data3['jml_KU05'];
$jumlah_ku06 = $ku06+$data3['jml_KU06'];
$jumlah_ku07 = $ku07+$data3['jml_KU07'];
$jumlah_ku08 = $ku08+$data3['jml_KU08'];
$jumlah_ku09 = $ku09+$data3['jml_KU09'];
$jumlah_ku10 = $ku10+$data3['jml_KU10'];
$jumlah_ku11 = $ku11+$data3['jml_KU11'];
$jumlah_ku12 = $ku12+$data3['jml_KU12'];
$jumlah_ku13 = $ku13+$data3['jml_KU13'];
$status = 1;

$query3 = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk07', jml_SK08='$jumlah_sk08', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10', jml_KU01='$jumlah_ku01', jml_KU02='$jumlah_ku02', jml_KU03='$jumlah_ku03', jml_KU04='$jumlah_ku04', jml_KU05='$jumlah_ku05', jml_KU06='$jumlah_ku06', jml_KU07='$jumlah_ku07', jml_KU08='$jumlah_ku08', jml_KU09='$jumlah_ku09', jml_KU10='$jumlah_ku10', jml_KU11='$jumlah_ku11', jml_KU12='$jumlah_ku12', jml_KU13='$jumlah_ku13', status='$status'  WHERE nokta='$nokta'";
$sql = mysqli_query($connect, $query3);

//PELATIHAN LAIN 4
$query4 = mysqli_query($connect, "SELECT * FROM hasil_pelatihanlain INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_pelatihanlain.nokta");
$data4 = mysqli_fetch_array($query4);
$SK01 = $data4['SK01'];
$SK02 = $data4['SK02'];
$SK03 = $data4['SK03'];
$SK04 = $data4['SK04'];
$SK05 = $data4['SK05'];
$SK06 = $data4['SK06'];
$SK07 = $data4['SK07'];
$SK08 = $data4['SK08'];
$SK09 = $data4['SK09'];
$SK10 = $data4['SK10'];
    //KU
$KU01 = $data4['KU01'];
$KU02 = $data4['KU02'];
$KU03 = $data4['KU03'];
$KU04 = $data4['KU04'];
$KU05 = $data4['KU05'];
$KU06 = $data4['KU06'];
$KU07 = $data4['KU07'];
$KU08 = $data4['KU08'];
$KU09 = $data4['KU09'];
$KU10 = $data4['KU10'];
$KU11 = $data4['KU11'];
$KU12 = $data4['KU12'];
$KU13 = $data4['KU13'];

$jumlah_sk01 = $SK01+$data4['jml_SK01'];
$jumlah_sk02 = $SK02+$data4['jml_SK02'];
$jumlah_sk03 = $SK03+$data4['jml_SK03'];
$jumlah_sk04 = $SK04+$data4['jml_SK04'];
$jumlah_sk05 = $SK05+$data4['jml_SK05'];
$jumlah_sk06 = $SK06+$data4['jml_SK06'];
$jumlah_sk07 = $SK07+$data4['jml_SK07'];
$jumlah_sk08 = $SK08+$data4['jml_SK08'];
$jumlah_sk09 = $SK09+$data4['jml_SK09'];
$jumlah_sk10 = $SK10+$data4['jml_SK10'];
      //KU
$jumlah_ku01 = $KU01+$data4['jml_KU01'];
$jumlah_ku02 = $KU02+$data4['jml_KU02'];
$jumlah_ku03 = $KU03+$data4['jml_KU03'];
$jumlah_ku04 = $KU04+$data4['jml_KU04'];
$jumlah_ku05 = $KU05+$data4['jml_KU05'];
$jumlah_ku06 = $KU06+$data4['jml_KU06'];
$jumlah_ku07 = $KU07+$data4['jml_KU07'];
$jumlah_ku08 = $KU08+$data4['jml_KU08'];
$jumlah_ku09 = $KU09+$data4['jml_KU09'];
$jumlah_ku10 = $KU10+$data4['jml_KU10'];
$jumlah_ku11 = $KU11+$data4['jml_KU11'];
$jumlah_ku12 = $KU12+$data4['jml_KU12'];
$jumlah_ku13 = $KU13+$data4['jml_KU13'];
$status = 1;

$query4 = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk07', jml_SK08='$jumlah_sk08', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10', jml_ku01='$jumlah_ku01',jml_ku02='$jumlah_ku02',jml_ku03='$jumlah_ku03',jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13', status='$status'  WHERE nokta='$nokta'";
$sql = mysqli_query($connect, $query4);

//PENGERTIAN 5
$query5 = mysqli_query($connect, "SELECT * FROM hasil_pengertian INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_pengertian.nokta");
$data5 = mysqli_fetch_array($query5);
$SK01 = $data5['SK01'];
$SK02 = $data5['SK02'];
$SK03 = $data5['SK03'];
$SK04 = $data5['SK04'];
$SK05 = $data5['SK05'];
$SK06 = $data5['SK06'];
$SK07 = $data5['SK07'];
$SK08 = $data5['SK08'];
$SK09 = $data5['SK09'];
$SK10 = $data5['SK10'];
    //PP
$PP01 = $data5['PP01'];
$PP02 = $data5['PP02'];
$PP03 = $data5['PP03'];
$PP04 = $data5['PP04'];
$PP05 = $data5['PP05'];
$PP06 = $data5['PP06'];
$PP07 = $data5['PP07'];
$PP08 = $data5['PP08'];
$PP09 = $data5['PP09'];
$PP10 = $data5['PP10'];
$PP11 = $data5['PP11'];
$PP12 = $data5['PP12'];
$PP13 = $data5['PP13'];
$PP14 = $data5['PP14'];
$PP15 = $data5['PP15'];
$PP16 = $data5['PP16'];
$PP17 = $data5['PP17'];
$PP18 = $data5['PP18'];
$PP19 = $data5['PP19'];
$PP20 = $data5['PP20'];

$jumlah_sk01 = $SK01+$data5['jml_SK01'];
$jumlah_sk02 = $SK02+$data5['jml_SK02'];
$jumlah_sk03 = $SK03+$data5['jml_SK03'];
$jumlah_sk04 = $SK04+$data5['jml_SK04'];
$jumlah_sk05 = $SK05+$data5['jml_SK05'];
$jumlah_sk06 = $SK06+$data5['jml_SK06'];
$jumlah_sk07 = $SK07+$data5['jml_SK07'];
$jumlah_sk08 = $SK08+$data5['jml_SK08'];
$jumlah_sk09 = $SK09+$data5['jml_SK09'];
$jumlah_sk10 = $SK10+$data5['jml_SK10'];
      //PP
$jumlah_pp01 = $PP01+$data5['jml_PP01'];
$jumlah_pp02 = $PP02+$data5['jml_PP02'];
$jumlah_pp03 = $PP03+$data5['jml_PP03'];
$jumlah_pp04 = $PP04+$data5['jml_PP04'];
$jumlah_pp05 = $PP05+$data5['jml_PP05'];
$jumlah_pp06 = $PP06+$data5['jml_PP06'];
$jumlah_pp07 = $PP07+$data5['jml_PP07'];
$jumlah_pp08 = $PP08+$data5['jml_PP08'];
$jumlah_pp09 = $PP09+$data5['jml_PP09'];
$jumlah_pp10 = $PP10+$data5['jml_PP10'];
$jumlah_pp11 = $PP11+$data5['jml_PP11'];
$jumlah_pp12 = $PP12+$data5['jml_PP12'];
$jumlah_pp13 = $PP13+$data5['jml_PP13'];
$jumlah_pp14 = $PP14+$data5['jml_PP14'];
$jumlah_pp15 = $PP15+$data5['jml_PP15'];
$jumlah_pp16 = $PP16+$data5['jml_PP16'];
$jumlah_pp17 = $PP17+$data5['jml_PP17'];
$jumlah_pp18 = $PP18+$data5['jml_PP18'];
$jumlah_pp19 = $PP19+$data5['jml_PP19'];
$jumlah_pp20 = $PP20+$data5['jml_PP20'];
$status = 1;

$query5 = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk07', jml_SK08='$jumlah_sk08', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10', jml_PP01='$jumlah_pp01',jml_PP02='$jumlah_pp02', jml_PP03='$jumlah_pp03', jml_PP04='$jumlah_pp04', jml_PP05='$jumlah_pp05', jml_PP06='$jumlah_pp06', jml_PP07='$jumlah_pp07', jml_PP08='$jumlah_pp08', jml_PP09='$jumlah_pp09',jml_PP10='$jumlah_pp10', jml_PP11='$jumlah_pp11', jml_PP12='$jumlah_pp12',jml_PP13='$jumlah_pp13', jml_PP14='$jumlah_pp14', jml_PP15='$jumlah_pp15', jml_PP16='$jumlah_pp16', jml_PP17='$jumlah_pp17', jml_PP18='$jumlah_pp18', jml_PP19='$jumlah_pp19', jml_PP20='$jumlah_pp20', status='$status'  where nokta='$nokta'";
$sql = mysqli_query($connect, $query5);


	//kualifikasi 6
$query6 = mysqli_query($connect, "SELECT * FROM hasil_kualifikasi INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_kualifikasi.nokta");
$data6 = mysqli_fetch_array($query6);
$KU01 = $data6['KU01'];
$KU02 = $data6['KU02'];
$KU03 = $data6['KU03'];
$KU04 = $data6['KU04'];
$KU05 = $data6['KU05'];
$KU06 = $data6['KU06'];
$KU07 = $data6['KU07'];
$KU08 = $data6['KU08'];
$KU09 = $data6['KU09'];
$KU10 = $data6['KU10'];
$KU11 = $data6['KU11'];
$KU12 = $data6['KU12'];
$KU13 = $data6['KU13'];
    //KK
$KK01 = $data6['KK01'];
$KK02 = $data6['KK02'];
$KK03 = $data6['KK03'];
$KK04 = $data6['KK04'];
$KK05 = $data6['KK05'];
$KK06 = $data6['KK06'];
$KK07 = $data6['KK07'];
$KK08 = $data6['KK08'];
$KK09 = $data6['KK09'];
$KK10 = $data6['KK10'];
$KK11 = $data6['KK11'];
$KK12 = $data6['KK12'];
$KK13 = $data6['KK13'];
$KK14 = $data6['KK14'];
$KK15 = $data6['KK15'];
$KK16 = $data6['KK16'];
$KK17 = $data6['KK17'];

$jumlah_ku01 = $KU01+$data6['jml_KU01'];
$jumlah_ku02 = $KU02+$data6['jml_KU02'];
$jumlah_ku03 = $KU03+$data6['jml_KU03'];
$jumlah_ku04 = $KU04+$data6['jml_KU04'];
$jumlah_ku05 = $KU05+$data6['jml_KU05'];
$jumlah_ku06 = $KU06+$data6['jml_KU06'];
$jumlah_ku07 = $KU07+$data6['jml_KU07'];
$jumlah_ku08 = $KU08+$data6['jml_KU08'];
$jumlah_ku09 = $KU09+$data6['jml_KU09'];
$jumlah_ku10 = $KU10+$data6['jml_KU10'];
$jumlah_ku11 = $KU11+$data6['jml_KU11'];
$jumlah_ku12 = $KU12+$data6['jml_KU12'];
$jumlah_ku13 = $KU13+$data6['jml_KU13'];
      //KK
$jumlah_kk01 = $KK01+$data6['jml_KK01'];
$jumlah_kk02 = $KK02+$data6['jml_KK02'];
$jumlah_kk03 = $KK03+$data6['jml_KK03'];
$jumlah_kk04 = $KK04+$data6['jml_KK04'];
$jumlah_kk05 = $KK05+$data6['jml_KK05'];
$jumlah_kk06 = $KK06+$data6['jml_KK06'];
$jumlah_kk07 = $KK07+$data6['jml_KK07'];
$jumlah_kk08 = $KK08+$data6['jml_KK08'];
$jumlah_kk09 = $KK09+$data6['jml_KK09'];
$jumlah_kk10 = $KK10+$data6['jml_KK10'];
$jumlah_kk11 = $KK11+$data6['jml_KK11'];
$jumlah_kk12 = $KK12+$data6['jml_KK12'];
$jumlah_kk13 = $KK13+$data6['jml_KK13'];
$jumlah_kk14 = $KK14+$data6['jml_KK14'];
$jumlah_kk15 = $KK15+$data6['jml_KK15'];
$jumlah_kk16 = $KK16+$data6['jml_KK16'];
$jumlah_kk17 = $KK17+$data6['jml_KK17'];
$status = 1;

$query6 = "UPDATE hasil_cpl SET jml_ku01='$jumlah_ku01', jml_ku02='$jumlah_ku02', jml_ku03='$jumlah_ku03', jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13', jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17', status='$status'  where nokta='$nokta'";
$sql = mysqli_query($connect, $query6);

//pengelaman mengajar 7
$query7 = mysqli_query($connect, "SELECT * FROM hasil_mengajar INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_mengajar.nokta");
$data7 = mysqli_fetch_array($query7);
$PP01 = $data7['PP01'];
$PP02 = $data7['PP02'];
$PP03 = $data7['PP03'];
$PP04 = $data7['PP04'];
$PP05 = $data7['PP05'];
$PP06 = $data7['PP06'];
$PP07 = $data7['PP07'];
$PP08 = $data7['PP08'];
$PP09 = $data7['PP09'];
$PP10 = $data7['PP10'];
$PP11 = $data7['PP11'];
$PP12 = $data7['PP12'];
$PP13 = $data7['PP13'];
$PP14 = $data7['PP14'];
$PP15 = $data7['PP15'];
$PP16 = $data7['PP16'];
$PP17 = $data7['PP17'];
$PP18 = $data7['PP18'];
$PP19 = $data7['PP19'];
$PP20 = $data7['PP20'];
    //KK
$KK01 = $data7['KK01'];
$KK02 = $data7['KK02'];
$KK03 = $data7['KK03'];
$KK04 = $data7['KK04'];
$KK05 = $data7['KK05'];
$KK06 = $data7['KK06'];
$KK07 = $data7['KK07'];
$KK08 = $data7['KK08'];
$KK09 = $data7['KK09'];
$KK10 = $data7['KK10'];
$KK11 = $data7['KK11'];
$KK12 = $data7['KK12'];
$KK13 = $data7['KK13'];
$KK14 = $data7['KK14'];
$KK15 = $data7['KK15'];
$KK16 = $data7['KK16'];
$KK17 = $data7['KK17'];

$jumlah_pp01 = $PP01+$data7['jml_PP01'];
$jumlah_pp02 = $PP02+$data7['jml_PP02'];
$jumlah_pp03 = $PP03+$data7['jml_PP03'];
$jumlah_pp04 = $PP04+$data7['jml_PP04'];
$jumlah_pp05 = $PP05+$data7['jml_PP05'];
$jumlah_pp06 = $PP06+$data7['jml_PP06'];
$jumlah_pp07 = $PP07+$data7['jml_PP07'];
$jumlah_pp08 = $PP08+$data7['jml_PP08'];
$jumlah_pp09 = $PP09+$data7['jml_PP09'];
$jumlah_pp10 = $PP10+$data7['jml_PP10'];
$jumlah_pp11 = $PP11+$data7['jml_PP11'];
$jumlah_pp12 = $PP12+$data7['jml_PP12'];
$jumlah_pp13 = $PP13+$data7['jml_PP13'];
$jumlah_pp14 = $PP14+$data7['jml_PP14'];
$jumlah_pp15 = $PP15+$data7['jml_PP15'];
$jumlah_pp16 = $PP16+$data7['jml_PP16'];
$jumlah_pp17 = $PP17+$data7['jml_PP17'];
$jumlah_pp18 = $PP18+$data7['jml_PP18'];
$jumlah_pp19 = $PP19+$data7['jml_PP19'];
$jumlah_pp20 = $PP20+$data7['jml_PP20'];
      //KK
$jumlah_kk01 = $KK01+$data7['jml_KK01'];
$jumlah_kk02 = $KK02+$data7['jml_KK02'];
$jumlah_kk03 = $KK03+$data7['jml_KK03'];
$jumlah_kk04 = $KK04+$data7['jml_KK04'];
$jumlah_kk05 = $KK05+$data7['jml_KK05'];
$jumlah_kk06 = $KK06+$data7['jml_KK06'];
$jumlah_kk07 = $KK07+$data7['jml_KK07'];
$jumlah_kk08 = $KK08+$data7['jml_KK08'];
$jumlah_kk09 = $KK09+$data7['jml_KK09'];
$jumlah_kk10 = $KK10+$data7['jml_KK10'];
$jumlah_kk11 = $KK11+$data7['jml_KK11'];
$jumlah_kk12 = $KK12+$data7['jml_KK12'];
$jumlah_kk13 = $KK13+$data7['jml_KK13'];
$jumlah_kk14 = $KK14+$data7['jml_KK14'];
$jumlah_kk15 = $KK15+$data7['jml_KK15'];
$jumlah_kk16 = $KK16+$data7['jml_KK16'];
$jumlah_kk17 = $KK17+$data7['jml_KK17'];
$status = 1;

$query7 = "UPDATE hasil_cpl SET jml_PP01='$jumlah_pp01',jml_PP02='$jumlah_pp02', jml_PP03='$jumlah_pp03', jml_PP04='$jumlah_pp04', jml_PP05='$jumlah_pp05', jml_PP06='$jumlah_pp06', jml_PP07='$jumlah_pp07', jml_PP08='$jumlah_pp08', jml_PP09='$jumlah_pp09',jml_PP10='$jumlah_pp10', jml_PP11='$jumlah_pp11', jml_PP12='$jumlah_pp12',jml_PP13='$jumlah_pp13', jml_PP14='$jumlah_pp14', jml_PP15='$jumlah_pp15', jml_PP16='$jumlah_pp16', jml_PP17='$jumlah_pp17', jml_PP18='$jumlah_pp18', jml_PP19='$jumlah_pp19', jml_PP20='$jumlah_pp20', jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17', status='$status'  where nokta='$nokta'";
$sql = mysqli_query($connect, $query7);

// hasil_penelitian 8
$query8 = mysqli_query($connect, "SELECT * FROM hasil_penelitian INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_penelitian.nokta");
$data8 = mysqli_fetch_array($query8);
$PP01 = $data8['PP01'];
$PP02 = $data8['PP02'];
$PP03 = $data8['PP03'];
$PP04 = $data8['PP04'];
$PP05 = $data8['PP05'];
$PP06 = $data8['PP06'];
$PP07 = $data8['PP07'];
$PP08 = $data8['PP08'];
$PP09 = $data8['PP09'];
$PP10 = $data8['PP10'];
$PP11 = $data8['PP11'];
$PP12 = $data8['PP12'];
$PP13 = $data8['PP13'];
$PP14 = $data8['PP14'];
$PP15 = $data8['PP15'];
$PP16 = $data8['PP16'];
$PP17 = $data8['PP17'];
$PP18 = $data8['PP18'];
$PP19 = $data8['PP19'];
$PP20 = $data8['PP20'];
    //PP
$KU01 = $data8['KU01'];
$KU02 = $data8['KU02'];
$KU03 = $data8['KU03'];
$KU04 = $data8['KU04'];
$KU05 = $data8['KU05'];
$KU06 = $data8['KU06'];
$KU07 = $data8['KU07'];
$KU08 = $data8['KU08'];
$KU09 = $data8['KU09'];
$KU10 = $data8['KU10'];
$KU11 = $data8['KU11'];
$KU12 = $data8['KU12'];
$KU13 = $data8['KU13'];

$jumlah_pp01 = $PP01+$data8['jml_PP01'];
$jumlah_pp02 = $PP02+$data8['jml_PP02'];
$jumlah_pp03 = $PP03+$data8['jml_PP03'];
$jumlah_pp04 = $PP04+$data8['jml_PP04'];
$jumlah_pp05 = $PP05+$data8['jml_PP05'];
$jumlah_pp06 = $PP06+$data8['jml_PP06'];
$jumlah_pp07 = $PP07+$data8['jml_PP07'];
$jumlah_pp08 = $PP08+$data8['jml_PP08'];
$jumlah_pp09 = $PP09+$data8['jml_PP09'];
$jumlah_pp10 = $PP10+$data8['jml_PP10'];
$jumlah_pp11 = $PP11+$data8['jml_PP11'];
$jumlah_pp12 = $PP12+$data8['jml_PP12'];
$jumlah_pp13 = $PP13+$data8['jml_PP13'];
$jumlah_pp14 = $PP14+$data8['jml_PP14'];
$jumlah_pp15 = $PP15+$data8['jml_PP15'];
$jumlah_pp16 = $PP16+$data8['jml_PP16'];
$jumlah_pp17 = $PP17+$data8['jml_PP17'];
$jumlah_pp18 = $PP18+$data8['jml_PP18'];
$jumlah_pp19 = $PP19+$data8['jml_PP19'];
$jumlah_pp20 = $PP20+$data8['jml_PP20'];
      //ku
$jumlah_ku01 = $KU01+$data8['jml_KU01'];
$jumlah_ku02 = $KU02+$data8['jml_KU02'];
$jumlah_ku03 = $KU03+$data8['jml_KU03'];
$jumlah_ku04 = $KU04+$data8['jml_KU04'];
$jumlah_ku05 = $KU05+$data8['jml_KU05'];
$jumlah_ku06 = $KU06+$data8['jml_KU06'];
$jumlah_ku07 = $KU07+$data8['jml_KU07'];
$jumlah_ku08 = $KU08+$data8['jml_KU08'];
$jumlah_ku09 = $KU09+$data8['jml_KU09'];
$jumlah_ku10 = $KU10+$data8['jml_KU10'];
$jumlah_ku11 = $KU11+$data8['jml_KU11'];
$jumlah_ku12 = $KU12+$data8['jml_KU12'];
$jumlah_ku13 = $KU13+$data8['jml_KU13'];
$status = 1;

$query8 = "UPDATE hasil_cpl SET jml_PP01='$jumlah_pp01',jml_PP02='$jumlah_pp02', jml_PP03='$jumlah_pp03', jml_PP04='$jumlah_pp04', jml_PP05='$jumlah_pp05', jml_PP06='$jumlah_pp06', jml_PP07='$jumlah_pp07', jml_PP08='$jumlah_pp08', jml_PP09='$jumlah_pp09',jml_PP10='$jumlah_pp10', jml_PP11='$jumlah_pp11', jml_PP12='$jumlah_pp12',jml_PP13='$jumlah_pp13', jml_PP14='$jumlah_pp14', jml_PP15='$jumlah_pp15', jml_PP16='$jumlah_pp16', jml_PP17='$jumlah_pp17', jml_PP18='$jumlah_pp18', jml_PP19='$jumlah_pp19', jml_PP20='$jumlah_pp20', jml_KU01='$jumlah_ku01', jml_KU02='$jumlah_ku02', jml_KU03='$jumlah_ku03', jml_KU04='$jumlah_ku04', jml_KU05='$jumlah_ku05', jml_KU06='$jumlah_ku06', jml_KU07='$jumlah_ku07', jml_KU08='$jumlah_ku08', jml_KU09='$jumlah_ku09', jml_KU10='$jumlah_ku10', jml_KU11='$jumlah_ku11', jml_KU12='$jumlah_ku12', jml_KU13='$jumlah_ku13', status='$status'  where nokta='$nokta'";
$sql = mysqli_query($connect, $query8);

	// hasil_manufaktur 9
$query9 = mysqli_query($connect, "SELECT * FROM hasil_manufaktur INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_manufaktur.nokta");
$data9 = mysqli_fetch_array($query9);
$KU01 = $data9['KU01'];
$KU02 = $data9['KU02'];
$KU03 = $data9['KU03'];
$KU04 = $data9['KU04'];
$KU05 = $data9['KU05'];
$KU06 = $data9['KU06'];
$KU07 = $data9['KU07'];
$KU08 = $data9['KU08'];
$KU09 = $data9['KU09'];
$KU10 = $data9['KU10'];
$KU11 = $data9['KU11'];
$KU12 = $data9['KU12'];
$KU13 = $data9['KU13'];
    //KK
$KK01 = $data9['KK01'];
$KK02 = $data9['KK02'];
$KK03 = $data9['KK03'];
$KK04 = $data9['KK04'];
$KK05 = $data9['KK05'];
$KK06 = $data9['KK06'];
$KK07 = $data9['KK07'];
$KK08 = $data9['KK08'];
$KK09 = $data9['KK09'];
$KK10 = $data9['KK10'];
$KK11 = $data9['KK11'];
$KK12 = $data9['KK12'];
$KK13 = $data9['KK13'];
$KK14 = $data9['KK14'];
$KK15 = $data9['KK15'];
$KK16 = $data9['KK16'];
$KK17 = $data9['KK17'];

$jumlah_ku01 = $KU01+$data9['jml_KU01'];
$jumlah_ku02 = $KU02+$data9['jml_KU02'];
$jumlah_ku03 = $KU03+$data9['jml_KU03'];
$jumlah_ku04 = $KU04+$data9['jml_KU04'];
$jumlah_ku05 = $KU05+$data9['jml_KU05'];
$jumlah_ku06 = $KU06+$data9['jml_KU06'];
$jumlah_ku07 = $KU07+$data9['jml_KU07'];
$jumlah_ku08 = $KU08+$data9['jml_KU08'];
$jumlah_ku09 = $KU09+$data9['jml_KU09'];
$jumlah_ku10 = $KU10+$data9['jml_KU10'];
$jumlah_ku11 = $KU11+$data9['jml_KU11'];
$jumlah_ku12 = $KU12+$data9['jml_KU12'];
$jumlah_ku13 = $KU13+$data9['jml_KU13'];
      //KK
$jumlah_kk01 = $KK01+$data9['jml_KK01'];
$jumlah_kk02 = $KK02+$data9['jml_KK02'];
$jumlah_kk03 = $KK03+$data9['jml_KK03'];
$jumlah_kk04 = $KK04+$data9['jml_KK04'];
$jumlah_kk05 = $KK05+$data9['jml_KK05'];
$jumlah_kk06 = $KK06+$data9['jml_KK06'];
$jumlah_kk07 = $KK07+$data9['jml_KK07'];
$jumlah_kk08 = $KK08+$data9['jml_KK08'];
$jumlah_kk09 = $KK09+$data9['jml_KK09'];
$jumlah_kk10 = $KK10+$data9['jml_KK10'];
$jumlah_kk11 = $KK11+$data9['jml_KK11'];
$jumlah_kk12 = $KK12+$data9['jml_KK12'];
$jumlah_kk13 = $KK13+$data9['jml_KK13'];
$jumlah_kk14 = $KK14+$data9['jml_KK14'];
$jumlah_kk15 = $KK15+$data9['jml_KK15'];
$jumlah_kk16 = $KK16+$data9['jml_KK16'];
$jumlah_kk17 = $KK17+$data9['jml_KK17'];
$status = 1;

$query9 = "UPDATE hasil_cpl SET jml_ku01='$jumlah_ku01', jml_ku02='$jumlah_ku02', jml_ku03='$jumlah_ku03', jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13', jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17', status='$status'  where nokta='$nokta'";
$sql = mysqli_query($connect, $query9);

//hasil_usaha 10
$query10 = mysqli_query($connect, "SELECT * FROM hasil_usaha INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_usaha.nokta");
$data10 = mysqli_fetch_array($query10);
$KU01 = $data10['KU01'];
$KU02 = $data10['KU02'];
$KU03 = $data10['KU03'];
$KU04 = $data10['KU04'];
$KU05 = $data10['KU05'];
$KU06 = $data10['KU06'];
$KU07 = $data10['KU07'];
$KU08 = $data10['KU08'];
$KU09 = $data10['KU09'];
$KU10 = $data10['KU10'];
$KU11 = $data10['KU11'];
$KU12 = $data10['KU12'];
$KU13 = $data10['KU13'];
    //KK
$KK01 = $data10['KK01'];
$KK02 = $data10['KK02'];
$KK03 = $data10['KK03'];
$KK04 = $data10['KK04'];
$KK05 = $data10['KK05'];
$KK06 = $data10['KK06'];
$KK07 = $data10['KK07'];
$KK08 = $data10['KK08'];
$KK09 = $data10['KK09'];
$KK10 = $data10['KK10'];
$KK11 = $data10['KK11'];
$KK12 = $data10['KK12'];
$KK13 = $data10['KK13'];
$KK14 = $data10['KK14'];
$KK15 = $data10['KK15'];
$KK16 = $data10['KK16'];
$KK17 = $data10['KK17'];

$jumlah_ku01 = $KU01+$data10['jml_KU01'];
$jumlah_ku02 = $KU02+$data10['jml_KU02'];
$jumlah_ku03 = $KU03+$data10['jml_KU03'];
$jumlah_ku04 = $KU04+$data10['jml_KU04'];
$jumlah_ku05 = $KU05+$data10['jml_KU05'];
$jumlah_ku06 = $KU06+$data10['jml_KU06'];
$jumlah_ku07 = $KU07+$data10['jml_KU07'];
$jumlah_ku08 = $KU08+$data10['jml_KU08'];
$jumlah_ku09 = $KU09+$data10['jml_KU09'];
$jumlah_ku10 = $KU10+$data10['jml_KU10'];
$jumlah_ku11 = $KU11+$data10['jml_KU11'];
$jumlah_ku12 = $KU12+$data10['jml_KU12'];
$jumlah_ku13 = $KU13+$data10['jml_KU13'];
      //KK
$jumlah_kk01 = $KK01+$data10['jml_KK01'];
$jumlah_kk02 = $KK02+$data10['jml_KK02'];
$jumlah_kk03 = $KK03+$data10['jml_KK03'];
$jumlah_kk04 = $KK04+$data10['jml_KK04'];
$jumlah_kk05 = $KK05+$data10['jml_KK05'];
$jumlah_kk06 = $KK06+$data10['jml_KK06'];
$jumlah_kk07 = $KK07+$data10['jml_KK07'];
$jumlah_kk08 = $KK08+$data10['jml_KK08'];
$jumlah_kk09 = $KK09+$data10['jml_KK09'];
$jumlah_kk10 = $KK10+$data10['jml_KK10'];
$jumlah_kk11 = $KK11+$data10['jml_KK11'];
$jumlah_kk12 = $KK12+$data10['jml_KK12'];
$jumlah_kk13 = $KK13+$data10['jml_KK13'];
$jumlah_kk14 = $KK14+$data10['jml_KK14'];
$jumlah_kk15 = $KK15+$data10['jml_KK15'];
$jumlah_kk16 = $KK16+$data10['jml_KK16'];
$jumlah_kk17 = $KK17+$data10['jml_KK17'];
$status = 1;

$query10 = "UPDATE hasil_cpl SET jml_ku01='$jumlah_ku01', jml_ku02='$jumlah_ku02', jml_ku03='$jumlah_ku03', jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13', jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17', status='$status'  where nokta='$nokta'";
$sql = mysqli_query($connect, $query10);

	//hasil_karya 11
$query11 = mysqli_query($connect, "SELECT * FROM hasil_karya INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_karya.nokta");
$data11 = mysqli_fetch_array($query11);
$KK01 = $data11['KK01'];
$KK02 = $data11['KK02'];
$KK03 = $data11['KK03'];
$KK04 = $data11['KK04'];
$KK05 = $data11['KK05'];
$KK06 = $data11['KK06'];
$KK07 = $data11['KK07'];
$KK08 = $data11['KK08'];
$KK09 = $data11['KK09'];
$KK10 = $data11['KK10'];
$KK11 = $data11['KK11'];
$KK12 = $data11['KK12'];
$KK13 = $data11['KK13'];
$KK14 = $data11['KK14'];
$KK15 = $data11['KK15'];
$KK16 = $data11['KK16'];
$KK17 = $data11['KK17'];

$jumlah_kk01 = $KK01+$data11['jml_KK01'];
$jumlah_kk02 = $KK02+$data11['jml_KK02'];
$jumlah_kk03 = $KK03+$data11['jml_KK03'];
$jumlah_kk04 = $KK04+$data11['jml_KK04'];
$jumlah_kk05 = $KK05+$data11['jml_KK05'];
$jumlah_kk06 = $KK06+$data11['jml_KK06'];
$jumlah_kk07 = $KK07+$data11['jml_KK07'];
$jumlah_kk08 = $KK08+$data11['jml_KK08'];
$jumlah_kk09 = $KK09+$data11['jml_KK09'];
$jumlah_kk10 = $KK10+$data11['jml_KK10'];
$jumlah_kk11 = $KK11+$data11['jml_KK11'];
$jumlah_kk12 = $KK12+$data11['jml_KK12'];
$jumlah_kk13 = $KK13+$data11['jml_KK13'];
$jumlah_kk14 = $KK14+$data11['jml_KK14'];
$jumlah_kk15 = $KK15+$data11['jml_KK15'];
$jumlah_kk16 = $KK16+$data11['jml_KK16'];
$jumlah_kk17 = $KK17+$data11['jml_KK17'];
$status = 1;

$query11 = "UPDATE hasil_cpl SET jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17', status='$status' where nokta='$nokta'";
$sql = mysqli_query($connect, $query11);


	//hasil_makalah 12
$query12 = mysqli_query($connect, "SELECT * FROM hasil_makalah INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_makalah.nokta");
$data12 = mysqli_fetch_array($query12);
$KK01 = $data12['KK01'];
$KK02 = $data12['KK02'];
$KK03 = $data12['KK03'];
$KK04 = $data12['KK04'];
$KK05 = $data12['KK05'];
$KK06 = $data12['KK06'];
$KK07 = $data12['KK07'];
$KK08 = $data12['KK08'];
$KK09 = $data12['KK09'];
$KK10 = $data12['KK10'];
$KK11 = $data12['KK11'];
$KK12 = $data12['KK12'];
$KK13 = $data12['KK13'];
$KK14 = $data12['KK14'];
$KK15 = $data12['KK15'];
$KK16 = $data12['KK16'];
$KK17 = $data12['KK17'];

$jumlah_kk01 = $KK01+$data12['jml_KK01'];
$jumlah_kk02 = $KK02+$data12['jml_KK02'];
$jumlah_kk03 = $KK03+$data12['jml_KK03'];
$jumlah_kk04 = $KK04+$data12['jml_KK04'];
$jumlah_kk05 = $KK05+$data12['jml_KK05'];
$jumlah_kk06 = $KK06+$data12['jml_KK06'];
$jumlah_kk07 = $KK07+$data12['jml_KK07'];
$jumlah_kk08 = $KK08+$data12['jml_KK08'];
$jumlah_kk09 = $KK09+$data12['jml_KK09'];
$jumlah_kk10 = $KK10+$data12['jml_KK10'];
$jumlah_kk11 = $KK11+$data12['jml_KK11'];
$jumlah_kk12 = $KK12+$data12['jml_KK12'];
$jumlah_kk13 = $KK13+$data12['jml_KK13'];
$jumlah_kk14 = $KK14+$data12['jml_KK14'];
$jumlah_kk15 = $KK15+$data12['jml_KK15'];
$jumlah_kk16 = $KK16+$data12['jml_KK16'];
$jumlah_kk17 = $KK17+$data12['jml_KK17'];
$status = 1;

$query12 = "UPDATE hasil_cpl SET jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17', status='$status' where nokta='$nokta'";
$sql = mysqli_query($connect, $query12);

	//hasil_seminar 13
$query13 = mysqli_query($connect, "SELECT * FROM hasil_seminar INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_seminar.nokta");
$data13 = mysqli_fetch_array($query13);
$KU01 = $data13['KU01'];
$KU02 = $data13['KU02'];
$KU03 = $data13['KU03'];
$KU04 = $data13['KU04'];
$KU05 = $data13['KU05'];
$KU06 = $data13['KU06'];
$KU07 = $data13['KU07'];
$KU08 = $data13['KU08'];
$KU09 = $data13['KU09'];
$KU10 = $data13['KU10'];
$KU11 = $data13['KU11']; 
$KU12 = $data13['KU12'];
$KU13 = $data13['KU13'];

$jumlah_ku01 = $KU01+$data13['jml_KU01'];
$jumlah_ku02 = $KU02+$data13['jml_KU02'];
$jumlah_ku03 = $KU03+$data13['jml_KU03'];
$jumlah_ku04 = $KU04+$data13['jml_KU04'];
$jumlah_ku05 = $KU05+$data13['jml_KU05'];
$jumlah_ku06 = $KU06+$data13['jml_KU06'];
$jumlah_ku07 = $KU07+$data13['jml_KU07'];
$jumlah_ku08 = $KU08+$data13['jml_KU08'];
$jumlah_ku09 = $KU09+$data13['jml_KU09'];
$jumlah_ku10 = $KU10+$data13['jml_KU10'];
$jumlah_ku11 = $KU11+$data13['jml_KU11'];
$jumlah_ku12 = $KU12+$data13['jml_KU12'];
$jumlah_ku13 = $KU13+$data13['jml_KU13'];
$status = 1;

$query13 = "UPDATE hasil_cpl SET jml_ku01='$jumlah_ku01', jml_ku02='$jumlah_ku02', jml_ku03='$jumlah_ku03', jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13', status='$status' where nokta='$nokta'";
$sql = mysqli_query($connect, $query13);

//hasil_teknologi 12
$query14 = mysqli_query($connect, "SELECT * FROM hasil_teknologi INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_teknologi.nokta");
$data14 = mysqli_fetch_array($query14);
$KU01 = $data14['KU01'];
$KU02 = $data14['KU02'];
$KU03 = $data14['KU03'];
$KU04 = $data14['KU04'];
$KU05 = $data14['KU05'];
$KU06 = $data14['KU06'];
$KU07 = $data14['KU07'];
$KU08 = $data14['KU08'];
$KU09 = $data14['KU09'];
$KU10 = $data14['KU10'];
$KU11 = $data14['KU11'];
$KU12 = $data14['KU12'];
$KU13 = $data14['KU13'];
    //KK
$KK01 = $data14['KK01'];
$KK02 = $data14['KK02'];
$KK03 = $data14['KK03'];
$KK04 = $data14['KK04'];
$KK05 = $data14['KK05'];
$KK06 = $data14['KK06'];
$KK07 = $data14['KK07'];
$KK08 = $data14['KK08'];
$KK09 = $data14['KK09'];
$KK10 = $data14['KK10'];
$KK11 = $data14['KK11'];
$KK12 = $data14['KK12'];
$KK13 = $data14['KK13'];
$KK14 = $data14['KK14'];
$KK15 = $data14['KK15'];
$KK16 = $data14['KK16'];
$KK17 = $data14['KK17'];

$jumlah_ku01 = $KU01+$data14['jml_KU01'];
$jumlah_ku02 = $KU02+$data14['jml_KU02'];
$jumlah_ku03 = $KU03+$data14['jml_KU03'];
$jumlah_ku04 = $KU04+$data14['jml_KU04'];
$jumlah_ku05 = $KU05+$data14['jml_KU05'];
$jumlah_ku06 = $KU06+$data14['jml_KU06'];
$jumlah_ku07 = $KU07+$data14['jml_KU07'];
$jumlah_ku08 = $KU08+$data14['jml_KU08'];
$jumlah_ku09 = $KU09+$data14['jml_KU09'];
$jumlah_ku10 = $KU10+$data14['jml_KU10'];
$jumlah_ku11 = $KU11+$data14['jml_KU11'];
$jumlah_ku12 = $KU12+$data14['jml_KU12'];
$jumlah_ku13 = $KU13+$data14['jml_KU13'];
      //KK
$jumlah_kk01 = $KK01+$data14['jml_KK01'];
$jumlah_kk02 = $KK02+$data14['jml_KK02'];
$jumlah_kk03 = $KK03+$data14['jml_KK03'];
$jumlah_kk04 = $KK04+$data14['jml_KK04'];
$jumlah_kk05 = $KK05+$data14['jml_KK05'];
$jumlah_kk06 = $KK06+$data14['jml_KK06'];
$jumlah_kk07 = $KK07+$data14['jml_KK07'];
$jumlah_kk08 = $KK08+$data14['jml_KK08'];
$jumlah_kk09 = $KK09+$data14['jml_KK09'];
$jumlah_kk10 = $KK10+$data14['jml_KK10'];
$jumlah_kk11 = $KK11+$data14['jml_KK11'];
$jumlah_kk12 = $KK12+$data14['jml_KK12'];
$jumlah_kk13 = $KK13+$data14['jml_KK13'];
$jumlah_kk14 = $KK14+$data14['jml_KK14'];
$jumlah_kk15 = $KK15+$data14['jml_KK15'];
$jumlah_kk16 = $KK16+$data14['jml_KK16'];
$jumlah_kk17 = $KK17+$data14['jml_KK17'];
$status = 1;

$query14 = "UPDATE hasil_cpl SET jml_ku01='$jumlah_ku01', jml_ku02='$jumlah_ku02', jml_ku03='$jumlah_ku03', jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13', jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17', status='$status' where nokta='$nokta'";
$sql = mysqli_query($connect, $query14);

	// hasil_bahasa 15
$query15 = mysqli_query($connect, "SELECT * FROM hasil_bahasa INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_bahasa.nokta");
$data15 = mysqli_fetch_array($query15);
$SK01 = $data15['SK01'];
$SK02 = $data15['SK02'];
$SK03 = $data15['SK03'];
$SK04 = $data15['SK04'];
$SK05 = $data15['SK05'];
$SK06 = $data15['SK06'];
$SK07 = $data15['SK07'];
$SK08 = $data15['SK08'];
$SK09 = $data15['SK09'];
$SK10 = $data15['SK10'];

$jumlah_sk01 = $SK01+$data15['jml_SK01'];
$jumlah_sk02 = $SK02+$data15['jml_SK02'];
$jumlah_sk03 = $SK03+$data15['jml_SK03'];
$jumlah_sk04 = $SK04+$data15['jml_SK04'];
$jumlah_sk05 = $SK05+$data15['jml_SK05'];
$jumlah_sk06 = $SK06+$data15['jml_SK06'];
$jumlah_sk07 = $SK07+$data15['jml_SK07'];
$jumlah_sk08 = $SK08+$data15['jml_SK08'];
$jumlah_sk09 = $SK09+$data15['jml_SK09'];
$jumlah_sk10 = $SK10+$data15['jml_SK10'];
$status = 1;

$query15 = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk06', jml_SK08='$jumlah_sk07', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10', status='$status' WHERE nokta='$nokta'";
$sql = mysqli_query($connect, $query15);

echo "<script>alert('Poin Kompetensi Berhasil di submit untuk di jumlahkan..');document.location='index.php?page=totalTampil&&id=$nokta'</script>";

?>