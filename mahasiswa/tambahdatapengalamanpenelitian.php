<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $data['id'];
$nokta = $_POST['nokta'];
$nama_lengkap = $_POST['nama_lengkap'];
$periode = $_POST['periode'];
$nama_tempat = $_POST['nama_tempat'];
$jabatan = $_POST['jabatan'];
$uraian = $_POST['uraian'];
$kompetensi = $_POST['kompetensi'];
$bukti_berkas = $_POST ['bukti_berkas'];


	
// menginput data ke database
mysqli_query($connect, "INSERT INTO datapengalamanpenelitian VALUES ('','$nokta','$nama_lengkap','$periode','$nama_tempat','$jabatan','$uraian','$kompetensi','')");

// mengalihkan halaman kembali ke index.php
header("location:index.php?page=datapengalamanpenelitian");

?>