<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $data['id'];
$nokta = $_POST['nokta'];
$nama_lengkap = $_POST['nama_lengkap'];
$tingkatpendidikan = $_POST['tingkatpendidikan'];
$perguruantinggi = $_POST['perguruantinggi'];
$fakultas = $_POST['fakultas'];
$jurusan = $_POST['jurusan'];
$kota = $_POST['kota'];
$negara = $_POST['negara'];
$tahunlulus = $_POST['tahunlulus'];
$gelar = $_POST['gelar'];
$judulta = $_POST['judulta'];
$deskripsita = $_POST['deskripsita'];
	
// menginput data ke database
mysqli_query($connect, "INSERT INTO datapendidikan1 VALUES ('','$nokta','$nama_lengkap','$tingkatpendidikan','$perguruantinggi','$fakultas','$jurusan','$kota','$negara','$tahunlulus','$gelar','$judulta','$deskripsita')");

// mengalihkan halaman kembali ke index.php
header("location:index.php?page=datapendidikan");

?>