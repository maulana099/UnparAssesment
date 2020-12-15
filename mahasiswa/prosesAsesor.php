<?php
if (isset($_POST['addAsesor'])) {
	$id = $data['id'];
// menangkap data yang di kirim dari form
	$nokta = $_POST['nokta'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$asesor_satu = $_POST['asesor_satu'];
	$asesor_dua = $_POST['asesor_dua'];
	$status = 1;

	$sql = mysqli_query($connect, "INSERT INTO asesor VALUES ('', '$nokta', '$nama_lengkap', '$asesor_satu', '$asesor_dua', '$status')");

	if($sql){
		echo "<script>alert('Data Berhasil Ditambah');document.location='index.php?page=cetakPoin'</script>";
	}else{
		echo "Maaf terjadi kesalahan";
		echo "<a href='index.php'>Kembali</a>";
	}
}

?>