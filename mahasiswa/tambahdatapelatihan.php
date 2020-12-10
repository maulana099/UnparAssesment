<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $data['id'];
$nokta = $_POST['nokta'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_pelatihan = $_POST['nama_pelatihan'];
$tahun = $_POST['tahun'];
$jumlah = $_POST['jumlah'];
$uraian = $_POST['uraian'];
$kompetensi = $_POST['kompetensi'];
$bukti_berkas = $_POST['bukti_berkas'];

mysqli_query($connect, "INSERT INTO datapelatihan VALUES ('','$nokta','$nama_lengkap','$nama_pelatihan','$tahun','$jumlah','$uraian','$kompetensi','')");

header('location:index.php?page=datapelatihan');

?>