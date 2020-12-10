<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $data['id'];
$nokta = $_POST['nokta'];
$nama_lengkap = $_POST['nama_lengkap'];
$tahun = $_POST['tahun'];
$nama_tempat = $_POST['nama_tempat'];
$jabatan = $_POST['jabatan'];
$uraian = $_POST['uraian'];
$kompetensi = $_POST['kompetensi'];
$bukti_berkas = $_POST['bukti_berkas']; 


	
// menginput data ke database
mysqli_query($connect, "INSERT INTO datakualifikasi VALUES ('','$nokta','$nama_lengkap','$tahun','$nama_tempat','$jabatan','$uraian','$kompetensi','')");

// mengalihkan halaman kembali ke index.php
header("location:index.php?page=datakualifikasi");

?>