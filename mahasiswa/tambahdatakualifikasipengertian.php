<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $data['id'];
$nokta = $_POST['nokta'];
$nama_lengkap = $_POST['nama_lengkap'];
$pengertian_keinsinyuran = $_POST['pengertian_keinsinyuran'];
$kompetensi = $_POST['kompetensi'];


	
// menginput data ke database
mysqli_query($connect, "INSERT INTO datakualifikasipengertian VALUES ('','$nokta','$nama_lengkap','$pengertian_keinsinyuran','$kompetensi')");

// mengalihkan halaman kembali ke index.php
header("location:index.php?page=datakualifikasipengertian");

?>


