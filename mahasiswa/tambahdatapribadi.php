<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nokta = $_POST['nokta'];
$nama_lengkap = $_POST['nama_lengkap'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tanggal_lahir = date('Y-m-d', strtotime($tanggal_lahir));
$kejuruan = $_POST['kejuruan'];
$alamat_rumah = $_POST['alamat_rumah'];
$alamat_lembaga = $_POST['alamat_lembaga'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];


	
// menginput data ke database
mysqli_query($connect, "INSERT INTO datapribadi VALUES ('$id','$nokta','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$kejuruan','$alamat_rumah','$alamat_lembaga','$email','$nohp')");

// mengalihkan halaman kembali ke index.php
header("location:index.php?page=profil");

?>