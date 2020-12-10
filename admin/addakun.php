<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nokta = $_POST['nokta'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$username = $_POST['username'];
$password = $_POST['password'];
$photo = $_POST['photo'];
$level = $_POST['level'];


// $query = "INSERT INTO profil VALUES ('','$nokta','$nama_lengkap','$jenis_kelamin','$username','$password','$photo','$level')";
// $query .= "INSERT INTO datapribadi('id','nokta','nama_lengkap') VALUES ('','$nokta','$nama_lengkap')";
	
// // menginput data ke database
// $q = mysqli_multi_query($connect, $query);

// 
$query1 = mysqli_query($connect, "INSERT INTO profil VALUES ('','$nama_lengkap','$nokta','$jenis_kelamin','$username','$password','$photo','$level')");

$query2 = mysqli_query($connect, "INSERT INTO datapribadi (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query3 = mysqli_query($connect, "INSERT INTO hasil_bahasa (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query4 = mysqli_query($connect, "INSERT INTO hasil_karya (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query5 = mysqli_query($connect, "INSERT INTO hasil_kualifikasi (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query6 = mysqli_query($connect, "INSERT INTO hasil_makalah (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query7 = mysqli_query($connect, "INSERT INTO hasil_manufaktur (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query8 = mysqli_query($connect, "INSERT INTO hasil_mengajar (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query9 = mysqli_query($connect, "INSERT INTO hasil_organisasi (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query10 = mysqli_query($connect, "INSERT INTO hasil_pelatihan (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query11 = mysqli_query($connect, "INSERT INTO hasil_pelatihanlain (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query12 = mysqli_query($connect, "INSERT INTO hasil_pengertian (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query13  = mysqli_query($connect, "INSERT INTO hasil_penelitian (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query14 = mysqli_query($connect, "INSERT INTO hasil_penghargaan (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query15 = mysqli_query($connect, "INSERT INTO hasil_seminar (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query16 = mysqli_query($connect, "INSERT INTO hasil_teknologi (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");
$query17 = mysqli_query($connect, "INSERT INTO hasil_usaha (id,nokta,nama_lengkap) VALUES ('','$nokta','$nama_lengkap')");

// mengalihkan halaman kembali ke index.php
header("location:index.php?page=tambahakun");

?>