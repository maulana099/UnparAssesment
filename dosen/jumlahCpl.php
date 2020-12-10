<?php  

include '../koneksi.php';

$nokta = $_GET['id'];

//ORGANISASI 1
$query = mysqli_query($connect, "SELECT * FROM hasil_organisasi INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_organisasi.nokta");
foreach ($query as $value) {
	$SK01 = $value['SK01'];
	$SK02 = $value['SK02'];
	$SK03 = $value['SK03'];
	$SK04 = $value['SK04'];
	$SK05 = $value['SK05'];
	$SK06 = $value['SK06'];
	$SK07 = $value['SK07'];
	$SK08 = $value['SK08'];
	$SK09 = $value['SK09'];
	$SK10 = $value['SK10'];
	$jumlah_sk01 = $SK01+$value['jml_SK01'];
	$jumlah_sk02 = $SK02+$value['jml_SK02'];
	$jumlah_sk03 = $SK03+$value['jml_SK03'];
	$jumlah_sk04 = $SK04+$value['jml_SK04'];
	$jumlah_sk05 = $SK05+$value['jml_SK05'];
	$jumlah_sk06 = $SK06+$value['jml_SK06'];
	$jumlah_sk07 = $SK07+$value['jml_SK07'];
	$jumlah_sk08 = $SK08+$value['jml_SK08'];
	$jumlah_sk09 = $SK09+$value['jml_SK09'];
	$jumlah_sk10 = $SK10+$value['jml_SK10'];

	$query = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk07', jml_SK08='$jumlah_sk08', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10' WHERE nokta='$nokta'";
	$sql = mysqli_query($connect, $query);
}

//PENGHARGAAN 2
$query2 = mysqli_query($connect, "SELECT * FROM hasil_penghargaan INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_penghargaan.nokta");
foreach ($query2 as $value2) {
	$SK01 = $value2['SK01'];
	$SK02 = $value2['SK02'];
	$SK03 = $value2['SK03'];
	$SK04 = $value2['SK04'];
	$SK05 = $value2['SK05'];
	$SK06 = $value2['SK06'];
	$SK07 = $value2['SK07'];
	$SK08 = $value2['SK08'];
	$SK09 = $value2['SK09'];
	$SK10 = $value2['SK10'];
	$jumlah_sk01 = $SK01+$value2['jml_SK01'];
	$jumlah_sk02 = $SK02+$value2['jml_SK02'];
	$jumlah_sk03 = $SK03+$value2['jml_SK03'];
	$jumlah_sk04 = $SK04+$value2['jml_SK04'];
	$jumlah_sk05 = $SK05+$value2['jml_SK05'];
	$jumlah_sk06 = $SK06+$value2['jml_SK06'];
	$jumlah_sk07 = $SK07+$value2['jml_SK07'];
	$jumlah_sk08 = $SK08+$value2['jml_SK08'];
	$jumlah_sk09 = $SK09+$value2['jml_SK09'];
	$jumlah_sk10 = $SK10+$value2['jml_SK10'];

	$query2 = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk07', jml_SK08='$jumlah_sk08', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10' WHERE nokta='$nokta'";
	$sql = mysqli_query($connect, $query2);
}

//PELATIHAN 3
$query3 = mysqli_query($connect, "SELECT * FROM hasil_pelatihan INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_pelatihan.nokta");
foreach ($query3 as $value3) {
	$SK01 = $value3['SK01'];
	$SK02 = $value3['SK02'];
	$SK03 = $value3['SK03'];
	$SK04 = $value3['SK04'];
	$SK05 = $value3['SK05'];
	$SK06 = $value3['SK06'];
	$SK07 = $value3['SK07'];
	$SK08 = $value3['SK08'];
	$SK09 = $value3['SK09'];
	$SK10 = $value3['SK10'];
	$jumlah_sk01 = $SK01+$value3['jml_SK01'];
	$jumlah_sk02 = $SK02+$value3['jml_SK02'];
	$jumlah_sk03 = $SK03+$value3['jml_SK03'];
	$jumlah_sk04 = $SK04+$value3['jml_SK04'];
	$jumlah_sk05 = $SK05+$value3['jml_SK05'];
	$jumlah_sk06 = $SK06+$value3['jml_SK06'];
	$jumlah_sk07 = $SK07+$value3['jml_SK07'];
	$jumlah_sk08 = $SK08+$value3['jml_SK08'];
	$jumlah_sk09 = $SK09+$value3['jml_SK09'];
	$jumlah_sk10 = $SK10+$value3['jml_SK10'];
	//KU
	$ku01 = $value3['KU01'];
	$ku02 = $value3['KU02'];
	$ku03 = $value3['KU03'];
	$ku04 = $value3['KU04'];
	$ku05 = $value3['KU05'];
	$ku06 = $value3['KU06'];
	$ku07 = $value3['KU07'];
	$ku08 = $value3['KU08'];
	$ku09 = $value3['KU09'];
	$ku10 = $value3['KU10'];
	$ku11 = $value3['KU11'];
	$ku12 = $value3['KU12'];
	$ku13 = $value3['KU13'];
	$jumlah_ku01 = $ku01+$value3['jml_KU01'];
	$jumlah_ku02 = $ku02+$value3['jml_KU02'];
	$jumlah_ku03 = $ku03+$value3['jml_KU03'];
	$jumlah_ku04 = $ku04+$value3['jml_KU04'];
	$jumlah_ku05 = $ku05+$value3['jml_KU05'];
	$jumlah_ku06 = $ku06+$value3['jml_KU06'];
	$jumlah_ku07 = $ku07+$value3['jml_KU07'];
	$jumlah_ku08 = $ku08+$value3['jml_KU08'];
	$jumlah_ku09 = $ku09+$value3['jml_KU09'];
	$jumlah_ku10 = $ku10+$value3['jml_KU10'];
	$jumlah_ku11 = $ku11+$value3['jml_KU11'];
	$jumlah_ku12 = $ku12+$value3['jml_KU12'];
	$jumlah_ku13 = $ku13+$value3['jml_KU13'];


	$query3 = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk07', jml_SK08='$jumlah_sk08', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10', jml_KU01='$jumlah_ku01', jml_KU02='$jumlah_ku02', jml_KU03='$jumlah_ku03', jml_KU04='$jumlah_ku04', jml_KU05='$jumlah_ku05', jml_KU06='$jumlah_ku06', jml_KU07='$jumlah_ku07', jml_KU08='$jumlah_ku08', jml_KU09='$jumlah_ku09', jml_KU10='$jumlah_ku10', jml_KU11='$jumlah_ku11', jml_KU12='$jumlah_ku12', jml_KU13='$jumlah_ku13'  WHERE nokta='$nokta'";
	$sql = mysqli_query($connect, $query3);
}

//PELATIHAN LAIN 4
$query4 = mysqli_query($connect, "SELECT * FROM hasil_pelatihanlain INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_pelatihanlain.nokta");
foreach ($query4 as $value4) {
	$SK01 = $value4['SK01'];
	$SK02 = $value4['SK02'];
	$SK03 = $value4['SK03'];
	$SK04 = $value4['SK04'];
	$SK05 = $value4['SK05'];
	$SK06 = $value4['SK06'];
	$SK07 = $value4['SK07'];
	$SK08 = $value4['SK08'];
	$SK09 = $value4['SK09'];
	$SK10 = $value4['SK10'];
    //KU
	$KU01 = $value4['KU01'];
	$KU02 = $value4['KU02'];
	$KU03 = $value4['KU03'];
	$KU04 = $value4['KU04'];
	$KU05 = $value4['KU05'];
	$KU06 = $value4['KU06'];
	$KU07 = $value4['KU07'];
	$KU08 = $value4['KU08'];
	$KU09 = $value4['KU09'];
	$KU10 = $value4['KU10'];
	$KU11 = $value4['KU11'];
	$KU12 = $value4['KU12'];
	$KU13 = $value4['KU13'];

	$jumlah_sk01 = $SK01+$value4['jml_SK01'];
	$jumlah_sk02 = $SK02+$value4['jml_SK02'];
	$jumlah_sk03 = $SK03+$value4['jml_SK03'];
	$jumlah_sk04 = $SK04+$value4['jml_SK04'];
	$jumlah_sk05 = $SK05+$value4['jml_SK05'];
	$jumlah_sk06 = $SK06+$value4['jml_SK06'];
	$jumlah_sk07 = $SK07+$value4['jml_SK07'];
	$jumlah_sk08 = $SK08+$value4['jml_SK08'];
	$jumlah_sk09 = $SK09+$value4['jml_SK09'];
	$jumlah_sk10 = $SK10+$value4['jml_SK10'];
      //KU
	$jumlah_ku01 = $KU01+$value4['jml_KU01'];
	$jumlah_ku02 = $KU02+$value4['jml_KU02'];
	$jumlah_ku03 = $KU03+$value4['jml_KU03'];
	$jumlah_ku04 = $KU04+$value4['jml_KU04'];
	$jumlah_ku05 = $KU05+$value4['jml_KU05'];
	$jumlah_ku06 = $KU06+$value4['jml_KU06'];
	$jumlah_ku07 = $KU07+$value4['jml_KU07'];
	$jumlah_ku08 = $KU08+$value4['jml_KU08'];
	$jumlah_ku09 = $KU09+$value4['jml_KU09'];
	$jumlah_ku10 = $KU10+$value4['jml_KU10'];
	$jumlah_ku11 = $KU11+$value4['jml_KU11'];
	$jumlah_ku12 = $KU12+$value4['jml_KU12'];
	$jumlah_ku13 = $KU13+$value4['jml_KU13'];

	$query4 = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk07', jml_SK08='$jumlah_sk08', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10', jml_ku01='$jumlah_ku01',jml_ku02='$jumlah_ku02',jml_ku03='$jumlah_ku03',jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13'  WHERE nokta='$nokta'";
	$sql = mysqli_query($connect, $query4);
}

//PENGERTIAN 5
$query5 = mysqli_query($connect, "SELECT * FROM hasil_pengertian INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_pengertian.nokta");
foreach ($query5 as $value5) {
	$SK01 = $value5['SK01'];
	$SK02 = $value5['SK02'];
	$SK03 = $value5['SK03'];
	$SK04 = $value5['SK04'];
	$SK05 = $value5['SK05'];
	$SK06 = $value5['SK06'];
	$SK07 = $value5['SK07'];
	$SK08 = $value5['SK08'];
	$SK09 = $value5['SK09'];
	$SK10 = $value5['SK10'];
    //PP
	$PP01 = $value5['PP01'];
	$PP02 = $value5['PP02'];
	$PP03 = $value5['PP03'];
	$PP04 = $value5['PP04'];
	$PP05 = $value5['PP05'];
	$PP06 = $value5['PP06'];
	$PP07 = $value5['PP07'];
	$PP08 = $value5['PP08'];
	$PP09 = $value5['PP09'];
	$PP10 = $value5['PP10'];
	$PP11 = $value5['PP11'];
	$PP12 = $value5['PP12'];
	$PP13 = $value5['PP13'];
	$PP14 = $value5['PP14'];
	$PP15 = $value5['PP15'];
	$PP16 = $value5['PP16'];
	$PP17 = $value5['PP17'];
	$PP18 = $value5['PP18'];
	$PP19 = $value5['PP19'];
	$PP20 = $value5['PP20'];

	$jumlah_sk01 = $SK01+$value5['jml_SK01'];
	$jumlah_sk02 = $SK02+$value5['jml_SK02'];
	$jumlah_sk03 = $SK03+$value5['jml_SK03'];
	$jumlah_sk04 = $SK04+$value5['jml_SK04'];
	$jumlah_sk05 = $SK05+$value5['jml_SK05'];
	$jumlah_sk06 = $SK06+$value5['jml_SK06'];
	$jumlah_sk07 = $SK07+$value5['jml_SK07'];
	$jumlah_sk08 = $SK08+$value5['jml_SK08'];
	$jumlah_sk09 = $SK09+$value5['jml_SK09'];
	$jumlah_sk10 = $SK10+$value5['jml_SK10'];
      //PP
	$jumlah_pp01 = $PP01+$value5['jml_PP01'];
	$jumlah_pp02 = $PP02+$value5['jml_PP02'];
	$jumlah_pp03 = $PP03+$value5['jml_PP03'];
	$jumlah_pp04 = $PP04+$value5['jml_PP04'];
	$jumlah_pp05 = $PP05+$value5['jml_PP05'];
	$jumlah_pp06 = $PP06+$value5['jml_PP06'];
	$jumlah_pp07 = $PP07+$value5['jml_PP07'];
	$jumlah_pp08 = $PP08+$value5['jml_PP08'];
	$jumlah_pp09 = $PP09+$value5['jml_PP09'];
	$jumlah_pp10 = $PP10+$value5['jml_PP10'];
	$jumlah_pp11 = $PP11+$value5['jml_PP11'];
	$jumlah_pp12 = $PP12+$value5['jml_PP12'];
	$jumlah_pp13 = $PP13+$value5['jml_PP13'];
	$jumlah_pp14 = $PP14+$value5['jml_PP14'];
	$jumlah_pp15 = $PP15+$value5['jml_PP15'];
	$jumlah_pp16 = $PP16+$value5['jml_PP16'];
	$jumlah_pp17 = $PP17+$value5['jml_PP17'];
	$jumlah_pp18 = $PP18+$value5['jml_PP18'];
	$jumlah_pp19 = $PP19+$value5['jml_PP19'];
	$jumlah_pp20 = $PP20+$value5['jml_PP20'];

	$query5 = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk07', jml_SK08='$jumlah_sk08', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10', jml_PP01='$jumlah_pp01',jml_PP02='$jumlah_pp02', jml_PP03='$jumlah_pp03', jml_PP04='$jumlah_pp04', jml_PP05='$jumlah_pp05', jml_PP06='$jumlah_pp06', jml_PP07='$jumlah_pp07', jml_PP08='$jumlah_pp08', jml_PP09='$jumlah_pp09',jml_PP10='$jumlah_pp10', jml_PP11='$jumlah_pp11', jml_PP12='$jumlah_pp12',jml_PP13='$jumlah_pp13', jml_PP14='$jumlah_pp14', jml_PP15='$jumlah_pp15', jml_PP16='$jumlah_pp16', jml_PP17='$jumlah_pp17', jml_PP18='$jumlah_pp18', jml_PP19='$jumlah_pp19', jml_PP20='$jumlah_pp20'  where nokta='$nokta'";
	$sql = mysqli_query($connect, $query5);
}

//kualifikasi 6
$query6 = mysqli_query($connect, "SELECT * FROM hasil_kualifikasi INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_kualifikasi.nokta");
foreach ($query6 as $value6) {
	$KU01 = $value6['KU01'];
	$KU02 = $value6['KU02'];
	$KU03 = $value6['KU03'];
	$KU04 = $value6['KU04'];
	$KU05 = $value6['KU05'];
	$KU06 = $value6['KU06'];
	$KU07 = $value6['KU07'];
	$KU08 = $value6['KU08'];
	$KU09 = $value6['KU09'];
	$KU10 = $value6['KU10'];
	$KU11 = $value6['KU11'];
	$KU12 = $value6['KU12'];
	$KU13 = $value6['KU13'];
    //KK
	$KK01 = $value6['KK01'];
	$KK02 = $value6['KK02'];
	$KK03 = $value6['KK03'];
	$KK04 = $value6['KK04'];
	$KK05 = $value6['KK05'];
	$KK06 = $value6['KK06'];
	$KK07 = $value6['KK07'];
	$KK08 = $value6['KK08'];
	$KK09 = $value6['KK09'];
	$KK10 = $value6['KK10'];
	$KK11 = $value6['KK11'];
	$KK12 = $value6['KK12'];
	$KK13 = $value6['KK13'];
	$KK14 = $value6['KK14'];
	$KK15 = $value6['KK15'];
	$KK16 = $value6['KK16'];
	$KK17 = $value6['KK17'];

	$jumlah_ku01 = $KU01+$value6['jml_KU01'];
	$jumlah_ku02 = $KU02+$value6['jml_KU02'];
	$jumlah_ku03 = $KU03+$value6['jml_KU03'];
	$jumlah_ku04 = $KU04+$value6['jml_KU04'];
	$jumlah_ku05 = $KU05+$value6['jml_KU05'];
	$jumlah_ku06 = $KU06+$value6['jml_KU06'];
	$jumlah_ku07 = $KU07+$value6['jml_KU07'];
	$jumlah_ku08 = $KU08+$value6['jml_KU08'];
	$jumlah_ku09 = $KU09+$value6['jml_KU09'];
	$jumlah_ku10 = $KU10+$value6['jml_KU10'];
	$jumlah_ku11 = $KU11+$value6['jml_KU11'];
	$jumlah_ku12 = $KU12+$value6['jml_KU12'];
	$jumlah_ku13 = $KU13+$value6['jml_KU13'];
      //KK
	$jumlah_kk01 = $KK01+$value6['jml_KK01'];
	$jumlah_kk02 = $KK02+$value6['jml_KK02'];
	$jumlah_kk03 = $KK03+$value6['jml_KK03'];
	$jumlah_kk04 = $KK04+$value6['jml_KK04'];
	$jumlah_kk05 = $KK05+$value6['jml_KK05'];
	$jumlah_kk06 = $KK06+$value6['jml_KK06'];
	$jumlah_kk07 = $KK07+$value6['jml_KK07'];
	$jumlah_kk08 = $KK08+$value6['jml_KK08'];
	$jumlah_kk09 = $KK09+$value6['jml_KK09'];
	$jumlah_kk10 = $KK10+$value6['jml_KK10'];
	$jumlah_kk11 = $KK11+$value6['jml_KK11'];
	$jumlah_kk12 = $KK12+$value6['jml_KK12'];
	$jumlah_kk13 = $KK13+$value6['jml_KK13'];
	$jumlah_kk14 = $KK14+$value6['jml_KK14'];
	$jumlah_kk15 = $KK15+$value6['jml_KK15'];
	$jumlah_kk16 = $KK16+$value6['jml_KK16'];
	$jumlah_kk17 = $KK17+$value6['jml_KK17'];

	$query6 = "UPDATE hasil_cpl SET jml_ku01='$jumlah_ku01', jml_ku02='$jumlah_ku02', jml_ku03='$jumlah_ku03', jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13', jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17'  where nokta='$nokta'";
	$sql = mysqli_query($connect, $query6);
}

//pengelaman mengajar 7
$query7 = mysqli_query($connect, "SELECT * FROM hasil_mengajar INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_mengajar.nokta");
foreach ($query7 as $value7) {
	$PP01 = $value7['PP01'];
	$PP02 = $value7['PP02'];
	$PP03 = $value7['PP03'];
	$PP04 = $value7['PP04'];
	$PP05 = $value7['PP05'];
	$PP06 = $value7['PP06'];
	$PP07 = $value7['PP07'];
	$PP08 = $value7['PP08'];
	$PP09 = $value7['PP09'];
	$PP10 = $value7['PP10'];
	$PP11 = $value7['PP11'];
	$PP12 = $value7['PP12'];
	$PP13 = $value7['PP13'];
	$PP14 = $value7['PP14'];
	$PP15 = $value7['PP15'];
	$PP16 = $value7['PP16'];
	$PP17 = $value7['PP17'];
	$PP18 = $value7['PP18'];
	$PP19 = $value7['PP19'];
	$PP20 = $value7['PP20'];
    //KK
	$KK01 = $value7['KK01'];
	$KK02 = $value7['KK02'];
	$KK03 = $value7['KK03'];
	$KK04 = $value7['KK04'];
	$KK05 = $value7['KK05'];
	$KK06 = $value7['KK06'];
	$KK07 = $value7['KK07'];
	$KK08 = $value7['KK08'];
	$KK09 = $value7['KK09'];
	$KK10 = $value7['KK10'];
	$KK11 = $value7['KK11'];
	$KK12 = $value7['KK12'];
	$KK13 = $value7['KK13'];
	$KK14 = $value7['KK14'];
	$KK15 = $value7['KK15'];
	$KK16 = $value7['KK16'];
	$KK17 = $value7['KK17'];

	$jumlah_pp01 = $PP01+$value7['jml_PP01'];
	$jumlah_pp02 = $PP02+$value7['jml_PP02'];
	$jumlah_pp03 = $PP03+$value7['jml_PP03'];
	$jumlah_pp04 = $PP04+$value7['jml_PP04'];
	$jumlah_pp05 = $PP05+$value7['jml_PP05'];
	$jumlah_pp06 = $PP06+$value7['jml_PP06'];
	$jumlah_pp07 = $PP07+$value7['jml_PP07'];
	$jumlah_pp08 = $PP08+$value7['jml_PP08'];
	$jumlah_pp09 = $PP09+$value7['jml_PP09'];
	$jumlah_pp10 = $PP10+$value7['jml_PP10'];
	$jumlah_pp11 = $PP11+$value7['jml_PP11'];
	$jumlah_pp12 = $PP12+$value7['jml_PP12'];
	$jumlah_pp13 = $PP13+$value7['jml_PP13'];
	$jumlah_pp14 = $PP14+$value7['jml_PP14'];
	$jumlah_pp15 = $PP15+$value7['jml_PP15'];
	$jumlah_pp16 = $PP16+$value7['jml_PP16'];
	$jumlah_pp17 = $PP17+$value7['jml_PP17'];
	$jumlah_pp18 = $PP18+$value7['jml_PP18'];
	$jumlah_pp19 = $PP19+$value7['jml_PP19'];
	$jumlah_pp20 = $PP20+$value7['jml_PP20'];
      //KK
	$jumlah_kk01 = $KK01+$value7['jml_KK01'];
	$jumlah_kk02 = $KK02+$value7['jml_KK02'];
	$jumlah_kk03 = $KK03+$value7['jml_KK03'];
	$jumlah_kk04 = $KK04+$value7['jml_KK04'];
	$jumlah_kk05 = $KK05+$value7['jml_KK05'];
	$jumlah_kk06 = $KK06+$value7['jml_KK06'];
	$jumlah_kk07 = $KK07+$value7['jml_KK07'];
	$jumlah_kk08 = $KK08+$value7['jml_KK08'];
	$jumlah_kk09 = $KK09+$value7['jml_KK09'];
	$jumlah_kk10 = $KK10+$value7['jml_KK10'];
	$jumlah_kk11 = $KK11+$value7['jml_KK11'];
	$jumlah_kk12 = $KK12+$value7['jml_KK12'];
	$jumlah_kk13 = $KK13+$value7['jml_KK13'];
	$jumlah_kk14 = $KK14+$value7['jml_KK14'];
	$jumlah_kk15 = $KK15+$value7['jml_KK15'];
	$jumlah_kk16 = $KK16+$value7['jml_KK16'];
	$jumlah_kk17 = $KK17+$value7['jml_KK17'];

	$query7 = "UPDATE hasil_cpl SET jml_PP01='$jumlah_pp01',jml_PP02='$jumlah_pp02', jml_PP03='$jumlah_pp03', jml_PP04='$jumlah_pp04', jml_PP05='$jumlah_pp05', jml_PP06='$jumlah_pp06', jml_PP07='$jumlah_pp07', jml_PP08='$jumlah_pp08', jml_PP09='$jumlah_pp09',jml_PP10='$jumlah_pp10', jml_PP11='$jumlah_pp11', jml_PP12='$jumlah_pp12',jml_PP13='$jumlah_pp13', jml_PP14='$jumlah_pp14', jml_PP15='$jumlah_pp15', jml_PP16='$jumlah_pp16', jml_PP17='$jumlah_pp17', jml_PP18='$jumlah_pp18', jml_PP19='$jumlah_pp19', jml_PP20='$jumlah_pp20', jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17'  where nokta='$nokta'";
	$sql = mysqli_query($connect, $query7);
}

// hasil_penelitian 8
$query8 = mysqli_query($connect, "SELECT * FROM hasil_penelitian INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_penelitian.nokta");
foreach ($query8 as $row) {
	$PP01 = $row['PP01'];
	$PP02 = $row['PP02'];
	$PP03 = $row['PP03'];
	$PP04 = $row['PP04'];
	$PP05 = $row['PP05'];
	$PP06 = $row['PP06'];
	$PP07 = $row['PP07'];
	$PP08 = $row['PP08'];
	$PP09 = $row['PP09'];
	$PP10 = $row['PP10'];
	$PP11 = $row['PP11'];
	$PP12 = $row['PP12'];
	$PP13 = $row['PP13'];
	$PP14 = $row['PP14'];
	$PP15 = $row['PP15'];
	$PP16 = $row['PP16'];
	$PP17 = $row['PP17'];
	$PP18 = $row['PP18'];
	$PP19 = $row['PP19'];
	$PP20 = $row['PP20'];
    //PP
	$KU01 = $row['KU01'];
	$KU02 = $row['KU02'];
	$KU03 = $row['KU03'];
	$KU04 = $row['KU04'];
	$KU05 = $row['KU05'];
	$KU06 = $row['KU06'];
	$KU07 = $row['KU07'];
	$KU08 = $row['KU08'];
	$KU09 = $row['KU09'];
	$KU10 = $row['KU10'];
	$KU11 = $row['KU11'];
	$KU12 = $row['KU12'];
	$KU13 = $row['KU13'];

	$jumlah_pp01 = $PP01+$row['jml_PP01'];
	$jumlah_pp02 = $PP02+$row['jml_PP02'];
	$jumlah_pp03 = $PP03+$row['jml_PP03'];
	$jumlah_pp04 = $PP04+$row['jml_PP04'];
	$jumlah_pp05 = $PP05+$row['jml_PP05'];
	$jumlah_pp06 = $PP06+$row['jml_PP06'];
	$jumlah_pp07 = $PP07+$row['jml_PP07'];
	$jumlah_pp08 = $PP08+$row['jml_PP08'];
	$jumlah_pp09 = $PP09+$row['jml_PP09'];
	$jumlah_pp10 = $PP10+$row['jml_PP10'];
	$jumlah_pp11 = $PP11+$row['jml_PP11'];
	$jumlah_pp12 = $PP12+$row['jml_PP12'];
	$jumlah_pp13 = $PP13+$row['jml_PP13'];
	$jumlah_pp14 = $PP14+$row['jml_PP14'];
	$jumlah_pp15 = $PP15+$row['jml_PP15'];
	$jumlah_pp16 = $PP16+$row['jml_PP16'];
	$jumlah_pp17 = $PP17+$row['jml_PP17'];
	$jumlah_pp18 = $PP18+$row['jml_PP18'];
	$jumlah_pp19 = $PP19+$row['jml_PP19'];
	$jumlah_pp20 = $PP20+$row['jml_PP20'];
      //ku
	$jumlah_ku01 = $KU01+$row['jml_KU01'];
	$jumlah_ku02 = $KU02+$row['jml_KU02'];
	$jumlah_ku03 = $KU03+$row['jml_KU03'];
	$jumlah_ku04 = $KU04+$row['jml_KU04'];
	$jumlah_ku05 = $KU05+$row['jml_KU05'];
	$jumlah_ku06 = $KU06+$row['jml_KU06'];
	$jumlah_ku07 = $KU07+$row['jml_KU07'];
	$jumlah_ku08 = $KU08+$row['jml_KU08'];
	$jumlah_ku09 = $KU09+$row['jml_KU09'];
	$jumlah_ku10 = $KU10+$row['jml_KU10'];
	$jumlah_ku11 = $KU11+$row['jml_KU11'];
	$jumlah_ku12 = $KU12+$row['jml_KU12'];
	$jumlah_ku13 = $KU13+$row['jml_KU13'];

	$query8 = "UPDATE hasil_cpl SET jml_PP01='$jumlah_pp01',jml_PP02='$jumlah_pp02', jml_PP03='$jumlah_pp03', jml_PP04='$jumlah_pp04', jml_PP05='$jumlah_pp05', jml_PP06='$jumlah_pp06', jml_PP07='$jumlah_pp07', jml_PP08='$jumlah_pp08', jml_PP09='$jumlah_pp09',jml_PP10='$jumlah_pp10', jml_PP11='$jumlah_pp11', jml_PP12='$jumlah_pp12',jml_PP13='$jumlah_pp13', jml_PP14='$jumlah_pp14', jml_PP15='$jumlah_pp15', jml_PP16='$jumlah_pp16', jml_PP17='$jumlah_pp17', jml_PP18='$jumlah_pp18', jml_PP19='$jumlah_pp19', jml_PP20='$jumlah_pp20', jml_KU01='$jumlah_ku01', jml_KU02='$jumlah_ku02', jml_KU03='$jumlah_ku03', jml_KU04='$jumlah_ku04', jml_KU05='$jumlah_ku05', jml_KU06='$jumlah_ku06', jml_KU07='$jumlah_ku07', jml_KU08='$jumlah_ku08', jml_KU09='$jumlah_ku09', jml_KU10='$jumlah_ku10', jml_KU11='$jumlah_ku11', jml_KU12='$jumlah_ku12', jml_KU13='$jumlah_ku13'  where nokta='$nokta'";
	$sql = mysqli_query($connect, $query8);
}

// hasil_manufaktur 9
$query9 = mysqli_query($connect, "SELECT * FROM hasil_manufaktur INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_manufaktur.nokta");
foreach ($query9 as $row) {
	$KU01 = $row['KU01'];
	$KU02 = $row['KU02'];
	$KU03 = $row['KU03'];
	$KU04 = $row['KU04'];
	$KU05 = $row['KU05'];
	$KU06 = $row['KU06'];
	$KU07 = $row['KU07'];
	$KU08 = $row['KU08'];
	$KU09 = $row['KU09'];
	$KU10 = $row['KU10'];
	$KU11 = $row['KU11'];
	$KU12 = $row['KU12'];
	$KU13 = $row['KU13'];
    //KK
	$KK01 = $row['KK01'];
	$KK02 = $row['KK02'];
	$KK03 = $row['KK03'];
	$KK04 = $row['KK04'];
	$KK05 = $row['KK05'];
	$KK06 = $row['KK06'];
	$KK07 = $row['KK07'];
	$KK08 = $row['KK08'];
	$KK09 = $row['KK09'];
	$KK10 = $row['KK10'];
	$KK11 = $row['KK11'];
	$KK12 = $row['KK12'];
	$KK13 = $row['KK13'];
	$KK14 = $row['KK14'];
	$KK15 = $row['KK15'];
	$KK16 = $row['KK16'];
	$KK17 = $row['KK17'];

	$jumlah_ku01 = $KU01+$row['jml_KU01'];
	$jumlah_ku02 = $KU02+$row['jml_KU02'];
	$jumlah_ku03 = $KU03+$row['jml_KU03'];
	$jumlah_ku04 = $KU04+$row['jml_KU04'];
	$jumlah_ku05 = $KU05+$row['jml_KU05'];
	$jumlah_ku06 = $KU06+$row['jml_KU06'];
	$jumlah_ku07 = $KU07+$row['jml_KU07'];
	$jumlah_ku08 = $KU08+$row['jml_KU08'];
	$jumlah_ku09 = $KU09+$row['jml_KU09'];
	$jumlah_ku10 = $KU10+$row['jml_KU10'];
	$jumlah_ku11 = $KU11+$row['jml_KU11'];
	$jumlah_ku12 = $KU12+$row['jml_KU12'];
	$jumlah_ku13 = $KU13+$row['jml_KU13'];
      //KK
	$jumlah_kk01 = $KK01+$row['jml_KK01'];
	$jumlah_kk02 = $KK02+$row['jml_KK02'];
	$jumlah_kk03 = $KK03+$row['jml_KK03'];
	$jumlah_kk04 = $KK04+$row['jml_KK04'];
	$jumlah_kk05 = $KK05+$row['jml_KK05'];
	$jumlah_kk06 = $KK06+$row['jml_KK06'];
	$jumlah_kk07 = $KK07+$row['jml_KK07'];
	$jumlah_kk08 = $KK08+$row['jml_KK08'];
	$jumlah_kk09 = $KK09+$row['jml_KK09'];
	$jumlah_kk10 = $KK10+$row['jml_KK10'];
	$jumlah_kk11 = $KK11+$row['jml_KK11'];
	$jumlah_kk12 = $KK12+$row['jml_KK12'];
	$jumlah_kk13 = $KK13+$row['jml_KK13'];
	$jumlah_kk14 = $KK14+$row['jml_KK14'];
	$jumlah_kk15 = $KK15+$row['jml_KK15'];
	$jumlah_kk16 = $KK16+$row['jml_KK16'];
	$jumlah_kk17 = $KK17+$row['jml_KK17'];

	$query9 = "UPDATE hasil_cpl SET jml_ku01='$jumlah_ku01', jml_ku02='$jumlah_ku02', jml_ku03='$jumlah_ku03', jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13', jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17'  where nokta='$nokta'";
	$sql = mysqli_query($connect, $query9);
}

//hasil_usaha 10
$query10 = mysqli_query($connect, "SELECT * FROM hasil_usaha INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_usaha.nokta");
foreach ($query10 as $row) {
	$KU01 = $row['KU01'];
	$KU02 = $row['KU02'];
	$KU03 = $row['KU03'];
	$KU04 = $row['KU04'];
	$KU05 = $row['KU05'];
	$KU06 = $row['KU06'];
	$KU07 = $row['KU07'];
	$KU08 = $row['KU08'];
	$KU09 = $row['KU09'];
	$KU10 = $row['KU10'];
	$KU11 = $row['KU11'];
	$KU12 = $row['KU12'];
	$KU13 = $row['KU13'];
    //KK
	$KK01 = $row['KK01'];
	$KK02 = $row['KK02'];
	$KK03 = $row['KK03'];
	$KK04 = $row['KK04'];
	$KK05 = $row['KK05'];
	$KK06 = $row['KK06'];
	$KK07 = $row['KK07'];
	$KK08 = $row['KK08'];
	$KK09 = $row['KK09'];
	$KK10 = $row['KK10'];
	$KK11 = $row['KK11'];
	$KK12 = $row['KK12'];
	$KK13 = $row['KK13'];
	$KK14 = $row['KK14'];
	$KK15 = $row['KK15'];
	$KK16 = $row['KK16'];
	$KK17 = $row['KK17'];

	$jumlah_ku01 = $KU01+$row['jml_KU01'];
	$jumlah_ku02 = $KU02+$row['jml_KU02'];
	$jumlah_ku03 = $KU03+$row['jml_KU03'];
	$jumlah_ku04 = $KU04+$row['jml_KU04'];
	$jumlah_ku05 = $KU05+$row['jml_KU05'];
	$jumlah_ku06 = $KU06+$row['jml_KU06'];
	$jumlah_ku07 = $KU07+$row['jml_KU07'];
	$jumlah_ku08 = $KU08+$row['jml_KU08'];
	$jumlah_ku09 = $KU09+$row['jml_KU09'];
	$jumlah_ku10 = $KU10+$row['jml_KU10'];
	$jumlah_ku11 = $KU11+$row['jml_KU11'];
	$jumlah_ku12 = $KU12+$row['jml_KU12'];
	$jumlah_ku13 = $KU13+$row['jml_KU13'];
      //KK
	$jumlah_kk01 = $KK01+$row['jml_KK01'];
	$jumlah_kk02 = $KK02+$row['jml_KK02'];
	$jumlah_kk03 = $KK03+$row['jml_KK03'];
	$jumlah_kk04 = $KK04+$row['jml_KK04'];
	$jumlah_kk05 = $KK05+$row['jml_KK05'];
	$jumlah_kk06 = $KK06+$row['jml_KK06'];
	$jumlah_kk07 = $KK07+$row['jml_KK07'];
	$jumlah_kk08 = $KK08+$row['jml_KK08'];
	$jumlah_kk09 = $KK09+$row['jml_KK09'];
	$jumlah_kk10 = $KK10+$row['jml_KK10'];
	$jumlah_kk11 = $KK11+$row['jml_KK11'];
	$jumlah_kk12 = $KK12+$row['jml_KK12'];
	$jumlah_kk13 = $KK13+$row['jml_KK13'];
	$jumlah_kk14 = $KK14+$row['jml_KK14'];
	$jumlah_kk15 = $KK15+$row['jml_KK15'];
	$jumlah_kk16 = $KK16+$row['jml_KK16'];
	$jumlah_kk17 = $KK17+$row['jml_KK17'];

	$query10 = "UPDATE hasil_cpl SET jml_ku01='$jumlah_ku01', jml_ku02='$jumlah_ku02', jml_ku03='$jumlah_ku03', jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13', jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17'  where nokta='$nokta'";
	$sql = mysqli_query($connect, $query10);
}

//hasil_karya 10
$query11 = mysqli_query($connect, "SELECT * FROM hasil_karya INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_karya.nokta");
foreach ($query11 as $value) {
	$KK01 = $row['KK01'];
	$KK02 = $row['KK02'];
	$KK03 = $row['KK03'];
	$KK04 = $row['KK04'];
	$KK05 = $row['KK05'];
	$KK06 = $row['KK06'];
	$KK07 = $row['KK07'];
	$KK08 = $row['KK08'];
	$KK09 = $row['KK09'];
	$KK10 = $row['KK10'];
	$KK11 = $row['KK11'];
	$KK12 = $row['KK12'];
	$KK13 = $row['KK13'];
	$KK14 = $row['KK14'];
	$KK15 = $row['KK15'];
	$KK16 = $row['KK16'];
	$KK17 = $row['KK17'];

	$jumlah_kk01 = $KK01+$row['jml_KK01'];
	$jumlah_kk02 = $KK02+$row['jml_KK02'];
	$jumlah_kk03 = $KK03+$row['jml_KK03'];
	$jumlah_kk04 = $KK04+$row['jml_KK04'];
	$jumlah_kk05 = $KK05+$row['jml_KK05'];
	$jumlah_kk06 = $KK06+$row['jml_KK06'];
	$jumlah_kk07 = $KK07+$row['jml_KK07'];
	$jumlah_kk08 = $KK08+$row['jml_KK08'];
	$jumlah_kk09 = $KK09+$row['jml_KK09'];
	$jumlah_kk10 = $KK10+$row['jml_KK10'];
	$jumlah_kk11 = $KK11+$row['jml_KK11'];
	$jumlah_kk12 = $KK12+$row['jml_KK12'];
	$jumlah_kk13 = $KK13+$row['jml_KK13'];
	$jumlah_kk14 = $KK14+$row['jml_KK14'];
	$jumlah_kk15 = $KK15+$row['jml_KK15'];
	$jumlah_kk16 = $KK16+$row['jml_KK16'];
	$jumlah_kk17 = $KK17+$row['jml_KK17'];

	$query11 = "UPDATE hasil_cpl SET jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17' where nokta='$nokta'";
	$sql = mysqli_query($connect, $query11);
}

//hasil_makalah 12
$query12 = mysqli_query($connect, "SELECT * FROM hasil_makalah INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_makalah.nokta");
foreach ($query12 as $row) {
	$KK01 = $row['KK01'];
	$KK02 = $row['KK02'];
	$KK03 = $row['KK03'];
	$KK04 = $row['KK04'];
	$KK05 = $row['KK05'];
	$KK06 = $row['KK06'];
	$KK07 = $row['KK07'];
	$KK08 = $row['KK08'];
	$KK09 = $row['KK09'];
	$KK10 = $row['KK10'];
	$KK11 = $row['KK11'];
	$KK12 = $row['KK12'];
	$KK13 = $row['KK13'];
	$KK14 = $row['KK14'];
	$KK15 = $row['KK15'];
	$KK16 = $row['KK16'];
	$KK17 = $row['KK17'];

	$jumlah_kk01 = $KK01+$row['jml_KK01'];
	$jumlah_kk02 = $KK02+$row['jml_KK02'];
	$jumlah_kk03 = $KK03+$row['jml_KK03'];
	$jumlah_kk04 = $KK04+$row['jml_KK04'];
	$jumlah_kk05 = $KK05+$row['jml_KK05'];
	$jumlah_kk06 = $KK06+$row['jml_KK06'];
	$jumlah_kk07 = $KK07+$row['jml_KK07'];
	$jumlah_kk08 = $KK08+$row['jml_KK08'];
	$jumlah_kk09 = $KK09+$row['jml_KK09'];
	$jumlah_kk10 = $KK10+$row['jml_KK10'];
	$jumlah_kk11 = $KK11+$row['jml_KK11'];
	$jumlah_kk12 = $KK12+$row['jml_KK12'];
	$jumlah_kk13 = $KK13+$row['jml_KK13'];
	$jumlah_kk14 = $KK14+$row['jml_KK14'];
	$jumlah_kk15 = $KK15+$row['jml_KK15'];
	$jumlah_kk16 = $KK16+$row['jml_KK16'];
	$jumlah_kk17 = $KK17+$row['jml_KK17'];

	$query12 = "UPDATE hasil_cpl SET jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17' where nokta='$nokta'";
	$sql = mysqli_query($connect, $query12);
}

//hasil_seminar 12
$query13 = mysqli_query($connect, "SELECT * FROM hasil_seminar INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_seminar.nokta");
foreach ($query13 as $row) {
	$KU01 = $row['KU01'];
	$KU02 = $row['KU02'];
	$KU03 = $row['KU03'];
	$KU04 = $row['KU04'];
	$KU05 = $row['KU05'];
	$KU06 = $row['KU06'];
	$KU07 = $row['KU07'];
	$KU08 = $row['KU08'];
	$KU09 = $row['KU09'];
	$KU10 = $row['KU10'];
	$KU11 = $row['KU11'];
	$KU12 = $row['KU12'];
	$KU13 = $row['KU13'];

	$jumlah_ku01 = $KU01+$row['jml_KU01'];
	$jumlah_ku02 = $KU02+$row['jml_KU02'];
	$jumlah_ku03 = $KU03+$row['jml_KU03'];
	$jumlah_ku04 = $KU04+$row['jml_KU04'];
	$jumlah_ku05 = $KU05+$row['jml_KU05'];
	$jumlah_ku06 = $KU06+$row['jml_KU06'];
	$jumlah_ku07 = $KU07+$row['jml_KU07'];
	$jumlah_ku08 = $KU08+$row['jml_KU08'];
	$jumlah_ku09 = $KU09+$row['jml_KU09'];
	$jumlah_ku10 = $KU10+$row['jml_KU10'];
	$jumlah_ku11 = $KU11+$row['jml_KU11'];
	$jumlah_ku12 = $KU12+$row['jml_KU12'];
	$jumlah_ku13 = $KU13+$row['jml_KU13'];

	$query13 = "UPDATE hasil_cpl SET jml_ku01='$jumlah_ku01', jml_ku02='$jumlah_ku02', jml_ku03='$jumlah_ku03', jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13' where nokta='$nokta'";
	$sql = mysqli_query($connect, $query13);
}

//hasil_teknologi 12
$query14 = mysqli_query($connect, "SELECT * FROM hasil_teknologi INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_teknologi.nokta");
foreach ($query14 as $row) {
	$KU01 = $row['KU01'];
	$KU02 = $row['KU02'];
	$KU03 = $row['KU03'];
	$KU04 = $row['KU04'];
	$KU05 = $row['KU05'];
	$KU06 = $row['KU06'];
	$KU07 = $row['KU07'];
	$KU08 = $row['KU08'];
	$KU09 = $row['KU09'];
	$KU10 = $row['KU10'];
	$KU11 = $row['KU11'];
	$KU12 = $row['KU12'];
	$KU13 = $row['KU13'];
    //KK
	$KK01 = $row['KK01'];
	$KK02 = $row['KK02'];
	$KK03 = $row['KK03'];
	$KK04 = $row['KK04'];
	$KK05 = $row['KK05'];
	$KK06 = $row['KK06'];
	$KK07 = $row['KK07'];
	$KK08 = $row['KK08'];
	$KK09 = $row['KK09'];
	$KK10 = $row['KK10'];
	$KK11 = $row['KK11'];
	$KK12 = $row['KK12'];
	$KK13 = $row['KK13'];
	$KK14 = $row['KK14'];
	$KK15 = $row['KK15'];
	$KK16 = $row['KK16'];
	$KK17 = $row['KK17'];

	$jumlah_ku01 = $KU01+$row['jml_KU01'];
	$jumlah_ku02 = $KU02+$row['jml_KU02'];
	$jumlah_ku03 = $KU03+$row['jml_KU03'];
	$jumlah_ku04 = $KU04+$row['jml_KU04'];
	$jumlah_ku05 = $KU05+$row['jml_KU05'];
	$jumlah_ku06 = $KU06+$row['jml_KU06'];
	$jumlah_ku07 = $KU07+$row['jml_KU07'];
	$jumlah_ku08 = $KU08+$row['jml_KU08'];
	$jumlah_ku09 = $KU09+$row['jml_KU09'];
	$jumlah_ku10 = $KU10+$row['jml_KU10'];
	$jumlah_ku11 = $KU11+$row['jml_KU11'];
	$jumlah_ku12 = $KU12+$row['jml_KU12'];
	$jumlah_ku13 = $KU13+$row['jml_KU13'];
      //KK
	$jumlah_kk01 = $KK01+$row['jml_KK01'];
	$jumlah_kk02 = $KK02+$row['jml_KK02'];
	$jumlah_kk03 = $KK03+$row['jml_KK03'];
	$jumlah_kk04 = $KK04+$row['jml_KK04'];
	$jumlah_kk05 = $KK05+$row['jml_KK05'];
	$jumlah_kk06 = $KK06+$row['jml_KK06'];
	$jumlah_kk07 = $KK07+$row['jml_KK07'];
	$jumlah_kk08 = $KK08+$row['jml_KK08'];
	$jumlah_kk09 = $KK09+$row['jml_KK09'];
	$jumlah_kk10 = $KK10+$row['jml_KK10'];
	$jumlah_kk11 = $KK11+$row['jml_KK11'];
	$jumlah_kk12 = $KK12+$row['jml_KK12'];
	$jumlah_kk13 = $KK13+$row['jml_KK13'];
	$jumlah_kk14 = $KK14+$row['jml_KK14'];
	$jumlah_kk15 = $KK15+$row['jml_KK15'];
	$jumlah_kk16 = $KK16+$row['jml_KK16'];
	$jumlah_kk17 = $KK17+$row['jml_KK17'];

	$query14 = "UPDATE hasil_cpl SET jml_ku01='$jumlah_ku01', jml_ku02='$jumlah_ku02', jml_ku03='$jumlah_ku03', jml_ku04='$jumlah_ku04',jml_ku05='$jumlah_ku05',jml_ku06='$jumlah_ku06',jml_ku07='$jumlah_ku07',jml_ku08='$jumlah_ku08',jml_ku09='$jumlah_ku09',jml_ku10='$jumlah_ku10',jml_ku11='$jumlah_ku11', jml_ku12='$jumlah_ku12',jml_ku13='$jumlah_ku13', jml_KK01='$jumlah_kk01', jml_KK02='$jumlah_kk02', jml_KK03='$jumlah_kk03', jml_KK04='$jumlah_kk04', jml_KK05='$jumlah_kk05', jml_KK06='$jumlah_kk06', jml_KK07='$jumlah_kk07', jml_KK08='$jumlah_kk08', jml_KK09='$jumlah_kk09', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17' where nokta='$nokta'";
	$sql = mysqli_query($connect, $query14);
}
// hasil_bahasa 5
$query15 = mysqli_query($connect, "SELECT * FROM hasil_bahasa INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_bahasa.nokta");
foreach ($query15 as $row) {
	$SK01 = $row['SK01'];
	$SK02 = $row['SK02'];
	$SK03 = $row['SK03'];
	$SK04 = $row['SK04'];
	$SK05 = $row['SK05'];
	$SK06 = $row['SK06'];
	$SK07 = $row['SK07'];
	$SK08 = $row['SK08'];
	$SK09 = $row['SK09'];
	$SK10 = $row['SK10'];

	$jumlah_sk01 = $SK01+$row['jml_SK01'];
	$jumlah_sk02 = $SK02+$row['jml_SK02'];
	$jumlah_sk03 = $SK03+$row['jml_SK03'];
	$jumlah_sk04 = $SK04+$row['jml_SK04'];
	$jumlah_sk05 = $SK05+$row['jml_SK05'];
	$jumlah_sk06 = $SK06+$row['jml_SK06'];
	$jumlah_sk07 = $SK07+$row['jml_SK07'];
	$jumlah_sk08 = $SK08+$row['jml_SK08'];
	$jumlah_sk09 = $SK09+$row['jml_SK09'];
	$jumlah_sk10 = $SK10+$row['jml_SK10'];
	$status = 1;

	$query15 = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk01', jml_SK02='$jumlah_sk02', jml_SK03='$jumlah_sk03', jml_SK04='$jumlah_sk04', jml_SK05='$jumlah_sk05', jml_SK06='$jumlah_sk06', jml_SK07='$jumlah_sk06', jml_SK08='$jumlah_sk07', jml_SK09='$jumlah_sk09', jml_SK10='$jumlah_sk10', status='$status' WHERE nokta='$nokta'";
	$sql = mysqli_query($connect, $query15);
}

echo "<script>alert('Data Berhasil di submit untuk di jumlahkan');document.location='index.php?page=totalTampil&&id=$nokta'</script>";

?>