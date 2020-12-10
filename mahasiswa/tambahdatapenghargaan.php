<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $data['id'];
$nokta = $_POST['nokta'];
$nama_lengkap = $_POST['nama_lengkap'];
$tahun = $_POST['tahun'];
$nama_penghargaan = $_POST['nama_penghargaan'];
$uraian = $_POST['uraian'];
$kompetensi = $_POST['kompetensi'];
$bukti_berkas = $_POST ['bukti_berkas'];

mysqli_query($connect, "INSERT INTO datapenghargaan VALUES ('','$nokta','$nama_lengkap','$tahun','$nama_penghargaan','$uraian','$kompetensi','')");

		header('location:index.php?page=datapenghargaan');

?>