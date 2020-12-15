<?php 

if (isset($_POST['ASESOR'])) { 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$asesor_satu = $_POST['asesor_satu'];
$asesor_dua = $_POST['asesor_dua'];
 
// menginput data ke database
mysqli_query($connect, "INSERT into asesor values('','$asesor_satu','$asesor_dua')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?page=asesor");
 
}
 ?>