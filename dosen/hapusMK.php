<?php
include_once("koneksi.php");

$query2 = "SELECT SUM(sks) AS jmlSKS FROM matakuliah";
$query=mysqli_query($connect, $query2);
$sks=mysqli_fetch_array($query);
$jumlahSKS = $sks['jmlSKS']; 

$id = $_GET['id'];

$sql2 = "SELECT * FROM hasil_konversi WHERE id='$id'";
$query=mysqli_query($connect, $sql2);
$nilai=mysqli_fetch_array($query);
$nokta = $nilai['nokta'];

// var_dump($nokta);

$result = mysqli_query($connect, "DELETE FROM hasil_konversi WHERE id='$id'");

$data = "SELECT SUM(total_mutu) AS totalMutu FROM hasil_konversi WHERE nokta='$nokta'";
$query=mysqli_query($connect, $data);
$mutu=mysqli_fetch_array($query);
$mutuMK = $mutu['totalMutu'];
$ipkMhs = $mutuMK / $jumlahSKS;
$ipk =  round($ipkMhs,4);
    // var_dump($mutu);
    // var_dump($ipk);



$query_update = "UPDATE hasil_nilai SET ipk='$ipk' WHERE nokta='$nokta'";
$sql = mysqli_query($connect, $query_update);

echo "<script>alert('Sukses Deleted, Nilai Updated');document.location='index.php?page=nilaiDetails&&id=$nokta'</script>";

?>


