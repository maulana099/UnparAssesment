<?php  

include '../koneksi.php';

$nokta = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM hasil_cpl WHERE nokta='$nokta'");
foreach ($query as $value) {

	$jumlah_sk1 = 0;
	$jumlah_sk2 = 0;
	$jumlah_sk3 = 0;
	$jumlah_sk4 = 0;
	$jumlah_sk5 = 0;
	$jumlah_sk6 = 0;
	$jumlah_sk7 = 0;
	$jumlah_sk8 = 0;
	$jumlah_sk9 = 0;
	$jumlah_sk10 = 0;
	//pp
	$jumlah_pp1 = 0;
	$jumlah_pp2 = 0;
	$jumlah_pp3 = 0;
	$jumlah_pp4 = 0;
	$jumlah_pp5 = 0;
	$jumlah_pp6 = 0;
	$jumlah_pp7 = 0;
	$jumlah_pp8 = 0;
	$jumlah_pp9 = 0;
	$jumlah_pp10 = 0;
	$jumlah_pp11 = 0;
	$jumlah_pp12 = 0;
	$jumlah_pp13 = 0;
	$jumlah_pp14 = 0;
	$jumlah_pp15 = 0;
	$jumlah_pp16 = 0;
	$jumlah_pp17 = 0;
	$jumlah_pp18 = 0;
	$jumlah_pp19 = 0;
	$jumlah_pp20 = 0;
	//KU
	$jumlah_ku1 = 0;
	$jumlah_ku2 = 0;
	$jumlah_ku3 = 0;
	$jumlah_ku4 = 0;
	$jumlah_ku5 = 0;
	$jumlah_ku6 = 0;
	$jumlah_ku7 = 0;
	$jumlah_ku8 = 0;
	$jumlah_ku9 = 0;
	$jumlah_ku10 = 0;
	$jumlah_ku11 = 0;
	$jumlah_ku12 = 0;
	$jumlah_ku13 = 0;
	//kk
	$jumlah_kk1 = 0;
	$jumlah_kk2 = 0;
	$jumlah_kk3 = 0;
	$jumlah_kk4 = 0;
	$jumlah_kk5 = 0;
	$jumlah_kk6 = 0;
	$jumlah_kk7 = 0;
	$jumlah_kk8 = 0;
	$jumlah_kk9 = 0;
	$jumlah_kk10 = 0;
	$jumlah_kk11 = 0;
	$jumlah_kk12 = 0;
	$jumlah_kk13 = 0;
	$jumlah_kk14 = 0;
	$jumlah_kk15 = 0;
	$jumlah_kk16 = 0;
	$jumlah_kk17 = 0;
	$status = 0;


	$query_update = "UPDATE total_cpl SET tot_SK01='$jumlah_sk1', tot_SK02='$jumlah_sk2', tot_SK03='$jumlah_sk3', tot_SK04='$jumlah_sk4', tot_SK05='$jumlah_sk5', tot_SK06='$jumlah_sk6', tot_SK07='$jumlah_sk7', tot_SK08='$jumlah_sk8', tot_SK09='$jumlah_sk9', tot_SK10='$jumlah_sk10', tot_PP01='$jumlah_pp1', tot_PP02='$jumlah_pp2', tot_pp03='$jumlah_pp3', tot_pp04='$jumlah_pp4', tot_PP05='$jumlah_pp5', tot_PP06='$jumlah_pp6', tot_PP07='$jumlah_pp7', tot_PP08='$jumlah_pp8', tot_PP09='$jumlah_pp9', tot_PP10='$jumlah_pp10', tot_PP11='$jumlah_pp11', tot_PP12='$jumlah_pp12', tot_PP13='$jumlah_pp13', tot_PP14='$jumlah_pp14', tot_PP15='$jumlah_pp15', tot_PP16='$jumlah_pp16', tot_PP17='$jumlah_pp17', tot_PP18='$jumlah_pp18', tot_PP19='$jumlah_pp19', tot_PP20='$jumlah_pp20', tot_KU01='$jumlah_ku1', tot_KU02='$jumlah_ku2', tot_KU03='$jumlah_ku3', tot_KU04='$jumlah_ku4', tot_KU05='$jumlah_ku5', tot_KU06='$jumlah_ku6', tot_KU07='$jumlah_ku7', tot_KU08='$jumlah_ku8', tot_KU09='$jumlah_ku9', tot_KU10='$jumlah_ku10', tot_KU11='$jumlah_ku11', tot_KU12='$jumlah_ku12', tot_KU13='$jumlah_ku13', tot_KK01='$jumlah_kk1', tot_KK02='$jumlah_kk2', tot_KK03='$jumlah_kk3', tot_KK04='$jumlah_kk4', tot_KK05='$jumlah_kk5', tot_KK06='$jumlah_kk6', tot_KK07='$jumlah_kk7', tot_KK08='$jumlah_kk8', tot_KK09='$jumlah_kk9', tot_KK10='$jumlah_kk10', tot_KK11='$jumlah_kk11', tot_KK12='$jumlah_kk12', tot_KK13='$jumlah_kk13', tot_KK14='$jumlah_kk14', tot_KK15='$jumlah_kk15', tot_KK16='$jumlah_kk16', tot_KK17='$jumlah_kk17', status='$status' WHERE nokta='$nokta'";
	$sql = mysqli_query($connect, $query_update);

}

echo "<script>alert('Data Total Poin Berhasil DI RESET..');document.location='index.php?page=totalTampil&&id=$nokta'</script>";

?>
