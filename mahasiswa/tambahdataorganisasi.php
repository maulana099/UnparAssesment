<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $data['id'];
$nokta = $_POST['nokta'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_organisasi = $_POST['nama_organisasi'];
$periode = $_POST['periode'];
$aktifitas_jabatan = $_POST['aktifitas_jabatan'];
$kompetensi = $_POST['kompetensi'];
$bukti_berkas = $_POST['bukti_berkas'];

mysqli_query($connect, "INSERT INTO dataorganisasi VALUES ('','$nokta','$nama_lengkap','$nama_organisasi','$periode','$aktifitas_jabatan','$kompetensi','')");

// // mengalihkan halaman kembali ke index.php
header("location:index.php?page=dataorganisasi");

?>