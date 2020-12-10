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


	$query_update = "UPDATE hasil_cpl SET jml_SK01='$jumlah_sk1', jml_SK02='$jumlah_sk2', jml_SK03='$jumlah_sk3', jml_SK04='$jumlah_sk4', jml_SK05='$jumlah_sk5', jml_SK06='$jumlah_sk6', jml_SK07='$jumlah_sk7', jml_SK08='$jumlah_sk8', jml_SK09='$jumlah_sk9', jml_SK10='$jumlah_sk10', jml_PP01='$jumlah_pp1', jml_PP02='$jumlah_pp2', jml_pp03='$jumlah_pp3', jml_pp04='$jumlah_pp4', jml_PP05='$jumlah_pp5', jml_PP06='$jumlah_pp6', jml_PP07='$jumlah_pp7', jml_PP08='$jumlah_pp8', jml_PP09='$jumlah_pp9', jml_PP10='$jumlah_pp10', jml_PP11='$jumlah_pp11', jml_PP12='$jumlah_pp12', jml_PP13='$jumlah_pp13', jml_PP14='$jumlah_pp14', jml_PP15='$jumlah_pp15', jml_PP16='$jumlah_pp16', jml_PP17='$jumlah_pp17', jml_PP18='$jumlah_pp18', jml_PP19='$jumlah_pp19', jml_PP20='$jumlah_pp20', jml_KU01='$jumlah_ku1', jml_KU02='$jumlah_ku2', jml_KU03='$jumlah_ku3', jml_KU04='$jumlah_ku4', jml_KU05='$jumlah_ku5', jml_KU06='$jumlah_ku6', jml_KU07='$jumlah_ku7', jml_KU08='$jumlah_ku8', jml_KU09='$jumlah_ku9', jml_KU10='$jumlah_ku10', jml_KU11='$jumlah_ku11', jml_KU12='$jumlah_ku12', jml_KU13='$jumlah_ku13', jml_KK01='$jumlah_kk1', jml_KK02='$jumlah_kk2', jml_KK03='$jumlah_kk3', jml_KK04='$jumlah_kk4', jml_KK05='$jumlah_kk5', jml_KK06='$jumlah_kk6', jml_KK07='$jumlah_kk7', jml_KK08='$jumlah_kk8', jml_KK09='$jumlah_kk9', jml_KK10='$jumlah_kk10', jml_KK11='$jumlah_kk11', jml_KK12='$jumlah_kk12', jml_KK13='$jumlah_kk13', jml_KK14='$jumlah_kk14', jml_KK15='$jumlah_kk15', jml_KK16='$jumlah_kk16', jml_KK17='$jumlah_kk17', status='$status' WHERE nokta='$nokta'";
	$sql = mysqli_query($connect, $query_update);

}

echo "<script>alert('Data Berhasil Di RESET..');document.location='index.php?page=dataHasil&&id=$nokta'</script>";

?>
