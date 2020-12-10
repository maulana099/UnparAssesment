<?php  

include '../koneksi.php';

$nokta = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM hasil_cpl WHERE nokta='$nokta'");
foreach ($query as $value) {

	$jumlah_sk1 = $value['jml_SK01'];
	$jumlah_sk2 = $value['jml_SK02'];
	$jumlah_sk3 = $value['jml_SK03'];
	$jumlah_sk4 = $value['jml_SK04'];
	$jumlah_sk5 = $value['jml_SK05'];
	$jumlah_sk6 = $value['jml_SK06'];
	$jumlah_sk7 = $value['jml_SK07'];
	$jumlah_sk8 = $value['jml_SK08'];
	$jumlah_sk9 = $value['jml_SK09'];
	$jumlah_sk10 = $value['jml_SK10'];
	//pp
	$jumlah_pp1 = $value['jml_PP01'];
	$jumlah_pp2 = $value['jml_PP02'];
	$jumlah_pp3 = $value['jml_PP03'];
	$jumlah_pp4 = $value['jml_PP04'];
	$jumlah_pp5 = $value['jml_PP05'];
	$jumlah_pp6 = $value['jml_PP06'];
	$jumlah_pp7 = $value['jml_PP07'];
	$jumlah_pp8 = $value['jml_PP08'];
	$jumlah_pp9 = $value['jml_PP09'];
	$jumlah_pp10 = $value['jml_PP10'];
	$jumlah_pp11 = $value['jml_PP11'];
	$jumlah_pp12 = $value['jml_PP12'];
	$jumlah_pp13 = $value['jml_PP13'];
	$jumlah_pp14 = $value['jml_PP14'];
	$jumlah_pp15 = $value['jml_PP15'];
	$jumlah_pp16 = $value['jml_PP16'];
	$jumlah_pp17 = $value['jml_PP17'];
	$jumlah_pp18 = $value['jml_PP18'];
	$jumlah_pp19 = $value['jml_PP19'];
	$jumlah_pp20 = $value['jml_PP20'];
	//KU
	$jumlah_ku1 = $value['jml_KU01'];
	$jumlah_ku2 = $value['jml_KU02'];
	$jumlah_ku3 = $value['jml_KU03'];
	$jumlah_ku4 = $value['jml_KU04'];
	$jumlah_ku5 = $value['jml_KU05'];
	$jumlah_ku6 = $value['jml_KU06'];
	$jumlah_ku7 = $value['jml_KU07'];
	$jumlah_ku8 = $value['jml_KU08'];
	$jumlah_ku9 = $value['jml_KU09'];
	$jumlah_ku10 = $value['jml_KU10'];
	$jumlah_ku11 = $value['jml_KU11'];
	$jumlah_ku12 = $value['jml_KU12'];
	$jumlah_ku13 = $value['jml_KU13'];
	//kk
	$jumlah_kk1 = $value['jml_KK01'];
	$jumlah_kk2 = $value['jml_KK02'];
	$jumlah_kk3 = $value['jml_KK03'];
	$jumlah_kk4 = $value['jml_KK04'];
	$jumlah_kk5 = $value['jml_KK05'];
	$jumlah_kk6 = $value['jml_KK06'];
	$jumlah_kk7 = $value['jml_KK07'];
	$jumlah_kk8 = $value['jml_KK08'];
	$jumlah_kk9 = $value['jml_KK09'];
	$jumlah_kk10 = $value['jml_KK10'];
	$jumlah_kk11 = $value['jml_KK11'];
	$jumlah_kk12 = $value['jml_KK12'];
	$jumlah_kk13 = $value['jml_KK13'];
	$jumlah_kk14 = $value['jml_KK14'];
	$jumlah_kk15 = $value['jml_KK15'];
	$jumlah_kk16 = $value['jml_KK16'];
	$jumlah_kk17 = $value['jml_KK17'];


// di kode = sk01 = $row['']
	$query = mysqli_query($connect, "SELECT kode, konversi_cpl FROM konversi_cpl WHERE kode='SK01'");
	while ($data = mysqli_fetch_array($query))  {
		 	$jml_lama = $data['konversi_cpl'];
		 	// proses penjumlahan
		 	$jmlBaru_sk1 = $jumlah_sk1*$jml_lama;
		 	$jmlBaru_sk2 = $jumlah_sk2*$jml_lama;
		 	$jmlBaru_sk3 = $jumlah_sk3*$jml_lama;
		 	$jmlBaru_sk4 = $jumlah_sk4*$jml_lama;
		 	$jmlBaru_sk5 = $jumlah_sk5*$jml_lama;
		 	$jmlBaru_sk6 = $jumlah_sk6*$jml_lama;
		 	$jmlBaru_sk7 = $jumlah_sk7*$jml_lama;
		 	$jmlBaru_sk8 = $jumlah_sk8*$jml_lama;
		 	$jmlBaru_sk9 = $jumlah_sk9*$jml_lama;
		 	$jmlBaru_sk10 = $jumlah_sk10*$jml_lama;
		 	//pp
		 	$jmlBaru_pp1 = $jumlah_pp1*$jml_lama;
		 	$jmlBaru_pp2 = $jumlah_pp2*$jml_lama;
		 	$jmlBaru_pp3 = $jumlah_pp3*$jml_lama;
		 	$jmlBaru_pp4 = $jumlah_pp4*$jml_lama;
		 	$jmlBaru_pp5 = $jumlah_pp5*$jml_lama;
		 	$jmlBaru_pp6 = $jumlah_pp6*$jml_lama;
		 	$jmlBaru_pp7 = $jumlah_pp7*$jml_lama;
		 	$jmlBaru_pp8 = $jumlah_pp8*$jml_lama;
		 	$jmlBaru_pp9 = $jumlah_pp9*$jml_lama;
		 	$jmlBaru_pp10 = $jumlah_pp10*$jml_lama;
		 	$jmlBaru_pp11 = $jumlah_pp11*$jml_lama;
		 	$jmlBaru_pp12 = $jumlah_pp12*$jml_lama;
		 	$jmlBaru_pp13 = $jumlah_pp13*$jml_lama;
		 	$jmlBaru_pp14 = $jumlah_pp14*$jml_lama;
		 	$jmlBaru_pp15 = $jumlah_pp15*$jml_lama;
		 	$jmlBaru_pp16 = $jumlah_pp16*$jml_lama;
		 	$jmlBaru_pp17 = $jumlah_pp17*$jml_lama;
		 	$jmlBaru_pp18 = $jumlah_pp18*$jml_lama;
		 	$jmlBaru_pp19 = $jumlah_pp19*$jml_lama;
		 	$jmlBaru_pp20 = $jumlah_pp20*$jml_lama;
		 	//ku
		 	$jmlBaru_ku1 = $jumlah_ku1*$jml_lama;
		 	$jmlBaru_ku2 = $jumlah_ku2*$jml_lama;
		 	$jmlBaru_ku3 = $jumlah_ku3*$jml_lama;
		 	$jmlBaru_ku4 = $jumlah_ku4*$jml_lama;
		 	$jmlBaru_ku5 = $jumlah_ku5*$jml_lama;
		 	$jmlBaru_ku6 = $jumlah_ku6*$jml_lama;
		 	$jmlBaru_ku7 = $jumlah_ku7*$jml_lama;
		 	$jmlBaru_ku8 = $jumlah_ku8*$jml_lama;
		 	$jmlBaru_ku9 = $jumlah_ku9*$jml_lama;
		 	$jmlBaru_ku10 = $jumlah_ku10*$jml_lama;
		 	$jmlBaru_ku11 = $jumlah_ku11*$jml_lama;
		 	$jmlBaru_ku12 = $jumlah_ku12*$jml_lama;
		 	$jmlBaru_ku13 = $jumlah_ku13*$jml_lama;
		 	//kk
		 	$jmlBaru_kk1 = $jumlah_kk1*$jml_lama;
		 	$jmlBaru_kk2 = $jumlah_kk2*$jml_lama;
		 	$jmlBaru_kk3 = $jumlah_kk3*$jml_lama;
		 	$jmlBaru_kk4 = $jumlah_kk4*$jml_lama;
		 	$jmlBaru_kk5 = $jumlah_kk5*$jml_lama;
		 	$jmlBaru_kk6 = $jumlah_kk6*$jml_lama;
		 	$jmlBaru_kk7 = $jumlah_kk7*$jml_lama;
		 	$jmlBaru_kk8 = $jumlah_kk8*$jml_lama;
		 	$jmlBaru_kk9 = $jumlah_kk9*$jml_lama;
		 	$jmlBaru_kk10 = $jumlah_kk10*$jml_lama;
		 	$jmlBaru_kk11 = $jumlah_kk11*$jml_lama;
		 	$jmlBaru_kk12 = $jumlah_kk12*$jml_lama;
		 	$jmlBaru_kk13 = $jumlah_kk13*$jml_lama;
		 	$jmlBaru_kk14 = $jumlah_kk14*$jml_lama;
		 	$jmlBaru_kk15 = $jumlah_kk15*$jml_lama;
		 	$jmlBaru_kk16 = $jumlah_kk16*$jml_lama;
		 	$jmlBaru_kk17 = $jumlah_kk17*$jml_lama;
		 	$status = 1;
	}

			$query_update = "UPDATE total_cpl SET tot_SK01='$jmlBaru_sk1', tot_SK02='$jmlBaru_sk2', tot_SK03='$jmlBaru_sk3', tot_SK04='$jmlBaru_sk4', tot_SK05='$jmlBaru_sk5', tot_SK06='$jmlBaru_sk6', tot_SK07='$jmlBaru_sk7', tot_SK08='$jmlBaru_sk8', tot_SK09='$jmlBaru_sk9', tot_SK10='$jmlBaru_sk10', tot_PP01='$jmlBaru_pp1', tot_PP02='$jmlBaru_pp2', tot_pp03='$jmlBaru_pp3', tot_pp04='$jmlBaru_pp4', tot_PP05='$jmlBaru_pp5', tot_PP06='$jmlBaru_pp6', tot_PP07='$jmlBaru_pp7', tot_PP08='$jmlBaru_pp8', tot_PP09='$jmlBaru_pp9', tot_PP10='$jmlBaru_pp10', tot_PP11='$jmlBaru_pp11', tot_PP12='$jmlBaru_pp12', tot_PP13='$jmlBaru_pp13', tot_PP14='$jmlBaru_pp14', tot_PP15='$jmlBaru_pp15', tot_PP16='$jmlBaru_pp16', tot_PP17='$jmlBaru_pp17', tot_PP18='$jmlBaru_pp18', tot_PP19='$jmlBaru_pp19', tot_PP20='$jmlBaru_pp20', tot_KU01='$jmlBaru_ku1', tot_KU02='$jmlBaru_ku2', tot_KU03='$jmlBaru_ku3', tot_KU04='$jmlBaru_ku4', tot_KU05='$jmlBaru_ku5', tot_KU06='$jmlBaru_ku6', tot_KU07='$jmlBaru_ku7', tot_KU08='$jmlBaru_ku8', tot_KU09='$jmlBaru_ku9', tot_KU10='$jmlBaru_ku10', tot_KU11='$jmlBaru_ku11', tot_KU12='$jmlBaru_ku12', tot_KU13='$jmlBaru_ku13', tot_KK01='$jmlBaru_kk1', tot_KK02='$jmlBaru_kk2', tot_KK03='$jmlBaru_kk3', tot_KK04='$jmlBaru_kk4', tot_KK05='$jmlBaru_kk5', tot_KK06='$jmlBaru_kk6', tot_KK07='$jmlBaru_kk7', tot_KK08='$jmlBaru_kk8', tot_KK09='$jmlBaru_kk9', tot_KK10='$jmlBaru_kk10', tot_KK11='$jmlBaru_kk11', tot_KK12='$jmlBaru_kk12', tot_KK13='$jmlBaru_kk13', tot_KK14='$jmlBaru_kk14', tot_KK15='$jmlBaru_kk15', tot_KK16='$jmlBaru_kk16', tot_KK17='$jmlBaru_kk17', status='$status' WHERE nokta='$nokta'";
			$sql = mysqli_query($connect, $query_update);

}

  echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=totalTampil&&id=$nokta'</script>";

?>
