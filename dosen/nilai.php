<?php  

include '../koneksi.php';

//dataorganisasi
if (isset($_POST['organisasi'])) {
	$nokta = $_POST['nokta'];
	$nama = $_POST['nama'];
	$SK01 = $_POST['SK01'];
	$SK02 = $_POST['SK02'];
	$SK03 = $_POST['SK03'];
	$SK04 = $_POST['SK04'];
	$SK05 = $_POST['SK05'];
	$SK06 = $_POST['SK06'];
	$SK07 = $_POST['SK07'];
	$SK08 = $_POST['SK08'];
	$SK09 = $_POST['SK09'];
	$SK10 = $_POST['SK10'];

// menginput data ke database
	mysqli_query($connect, "INSERT INTO hasil_organisasi VALUES ('','$nokta','$nama','$SK01','$SK02','$SK03','$SK04','$SK05','$SK06','$SK07','$SK08','$SK09','$SK10')");

	//update jumlah cpl
		$query = mysqli_query($connect, "SELECT * FROM hasil_organisasi INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_organisasi.nokta");
		while($row = mysqli_fetch_assoc($query)){

			// penjumlahan
			$jumlah1 = $row['SK01'];
			$jumlah_baru_1 = $jumlah1+$row['jml_SK01'];
			$jumlah2 = $row['SK02'];
			$jumlah_baru_2 = $jumlah2+$row['jml_SK02'];
			$jumlah3 = $row['SK03'];
			$jumlah_baru_3 = $jumlah3+$row['jml_SK03'];
			$jumlah4 = $row['SK04'];
			$jumlah_baru_4 = $jumlah4+$row['jml_SK04'];
			$jumlah5 = $row['SK05'];
			$jumlah_baru_5 = $jumlah5+$row['jml_SK05'];
			$jumlah6 = $row['SK06'];
			$jumlah_baru_6 = $jumlah6+$row['jml_SK06'];
			$jumlah7 = $row['SK07'];
			$jumlah_baru_7 = $jumlah7+$row['jml_SK07'];
			$jumlah8 = $row['SK08'];
			$jumlah_baru_8 = $jumlah8+$row['jml_SK08'];
			$jumlah9 = $row['SK09'];
			$jumlah_baru_9 = $jumlah9+$row['jml_SK09'];
			$jumla10 = $row['SK10'];
			$jumlah_baru_10 = $jumla10+$row['jml_SK10'];


		$query_update = "UPDATE hasil_cpl SET jml_SK01='$jumlah_baru_1', jml_SK02='$jumlah_baru_2', jml_SK03='$jumlah_baru_3', jml_SK04='$jumlah_baru_4', jml_SK05='$jumlah_baru_5', jml_SK06='$jumlah_baru_6', jml_SK07='$jumlah_baru_7', jml_SK08='$jumlah_baru_8', jml_SK09='$jumlah_baru_9', jml_SK10='$jumlah_baru_10' WHERE nokta='$nokta'";
		$sql = mysqli_query($connect, $query_update);
	}

}

//datapengharagaan
if (isset($_POST['penghargaan'])) {
	$nokta = $_POST['nokta'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$SK01 = $_POST['SK01'];
	$SK02 = $_POST['SK02'];
	$SK03 = $_POST['SK03'];
	$SK04 = $_POST['SK04'];
	$SK05 = $_POST['SK05'];
	$SK06 = $_POST['SK06'];
	$SK07 = $_POST['SK07'];
	$SK08 = $_POST['SK08'];
	$SK09 = $_POST['SK09'];
	$SK10 = $_POST['SK10'];

	// menginput data ke database
	mysqli_query($connect, "INSERT INTO hasil_penghargaan VALUES ('','','$nokta','$nama_lengkap','$SK01','$SK02','$SK03','$SK04','$SK05','$SK06','$SK07','$SK08','$SK09','$SK10')");

	$query = mysqli_query($connect, "SELECT * FROM hasil_penghargaan INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_penghargaan.nokta");
		while($row = mysqli_fetch_assoc($query)){

			// penjumlahan
			$jumlah1 = $row['SK01'];
			$jumlah_baru_1 = $jumlah1+$row['jml_SK01'];
			$jumlah2 = $row['SK02'];
			$jumlah_baru_2 = $jumlah2+$row['jml_SK02'];
			$jumlah3 = $row['SK03'];
			$jumlah_baru_3 = $jumlah3+$row['jml_SK03'];
			$jumlah4 = $row['SK04'];
			$jumlah_baru_4 = $jumlah4+$row['jml_SK04'];
			$jumlah5 = $row['SK05'];
			$jumlah_baru_5 = $jumlah5+$row['jml_SK05'];
			$jumlah6 = $row['SK06'];
			$jumlah_baru_6 = $jumlah6+$row['jml_SK06'];
			$jumlah7 = $row['SK07'];
			$jumlah_baru_7 = $jumlah7+$row['jml_SK07'];
			$jumlah8 = $row['SK08'];
			$jumlah_baru_8 = $jumlah8+$row['jml_SK08'];
			$jumlah9 = $row['SK09'];
			$jumlah_baru_9 = $jumlah9+$row['jml_SK09'];
			$jumla10 = $row['SK10'];
			$jumlah_baru_10 = $jumla10+$row['jml_SK10'];


		$query_update = "UPDATE hasil_cpl SET jml_SK01='$jumlah_baru_1', jml_SK02='$jumlah_baru_2', jml_SK03='$jumlah_baru_3', jml_SK04='$jumlah_baru_4', jml_SK05='$jumlah_baru_5', jml_SK06='$jumlah_baru_6', jml_SK07='$jumlah_baru_7', jml_SK08='$jumlah_baru_8', jml_SK09='$jumlah_baru_9', jml_SK10='$jumlah_baru_10' WHERE nokta='$nokta'";
		$sql = mysqli_query($connect, $query_update);
	}

}
// end

// data pelatihan
if (isset($_POST['pendidikanCPL'])) {
	$nokta = $_POST['nokta'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$SK01 = $_POST['SK01'];
	$SK02 = $_POST['SK02'];
	$SK03 = $_POST['SK03'];
	$SK04 = $_POST['SK04'];
	$SK05 = $_POST['SK05'];
	$SK06 = $_POST['SK06'];
	$SK07 = $_POST['SK07'];
	$SK08 = $_POST['SK08'];
	$SK09 = $_POST['SK09'];
	$SK10 = $_POST['SK10'];
	//ku
	$KU01 = $_POST['KU01'];
	$KU02 = $_POST['KU02'];
	$KU03 = $_POST['KU03'];
	$KU04 = $_POST['KU04'];
	$KU05 = $_POST['KU05'];
	$KU06 = $_POST['KU06'];
	$KU07 = $_POST['KU07'];
	$KU08 = $_POST['KU08'];
	$KU09 = $_POST['KU09'];
	$KU10 = $_POST['KU10'];
	$KU11 = $_POST['KU11'];
	$KU12 = $_POST['KU12'];
	$KU13 = $_POST['KU13'];

	// menginput data ke database
	mysqli_query($connect, "INSERT INTO hasil_pendidikan VALUES ('','$nokta','$nama_lengkap','$SK01','$SK02','$SK03','$SK04','$SK05','$SK06','$SK07','$SK08','$SK09','$SK10', '$KU01','$KU02','$KU03','$KU04','$KU05','$KU06','$KU07','$KU08','$KU09','$KU10','$KU11','$KU12','$KU13')");

	$query = mysqli_query($connect, "SELECT * FROM hasil_pendidikan INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_pendidikan.nokta");
		while($row = mysqli_fetch_assoc($query)){

			// penjumlahan
			$jumlah1 = $row['SK01'];
			$jumlah_baru_1 = $jumlah1+$row['jml_SK01'];
			$jumlah2 = $row['SK02'];
			$jumlah_baru_2 = $jumlah2+$row['jml_SK02'];
			$jumlah3 = $row['SK03'];
			$jumlah_baru_3 = $jumlah3+$row['jml_SK03'];
			$jumlah4 = $row['SK04'];
			$jumlah_baru_4 = $jumlah4+$row['jml_SK04'];
			$jumlah5 = $row['SK05'];
			$jumlah_baru_5 = $jumlah5+$row['jml_SK05'];
			$jumlah6 = $row['SK06'];
			$jumlah_baru_6 = $jumlah6+$row['jml_SK06'];
			$jumlah7 = $row['SK07'];
			$jumlah_baru_7 = $jumlah7+$row['jml_SK07'];
			$jumlah8 = $row['SK08'];
			$jumlah_baru_8 = $jumlah8+$row['jml_SK08'];
			$jumlah9 = $row['SK09'];
			$jumlah_baru_9 = $jumlah9+$row['jml_SK09'];
			$jumla10 = $row['SK10'];
			$jumlah_baru_10 = $jumla10+$row['jml_SK10'];
			//KU
			$jumlah_lama1 = $row['KU01'];
			$jumlah_ku1 = $jumlah_lama1+$row['jml_KU01'];
			$jumlah_lama2 = $row['KU02'];
			$jumlah_ku2 = $jumlah_lama2+$row['jml_KU02'];		
			$jumlah_lama3 = $row['KU03'];
			$jumlah_ku3 = $jumlah_lama3+$row['jml_KU03'];		
			$jumlah_lama4 = $row['KU04'];
			$jumlah_ku4 = $jumlah_lama4+$row['jml_KU04'];		
			$jumlah_lama5 = $row['KU05'];
			$jumlah_ku5 = $jumlah_lama5+$row['jml_KU05'];		
			$jumlah_lama6 = $row['KU06'];
			$jumlah_ku6 = $jumlah_lama6+$row['jml_KU06'];		
			$jumlah_lama7 = $row['KU07'];
			$jumlah_ku7 = $jumlah_lama7+$row['jml_KU07'];		
			$jumlah_lama8 = $row['KU08'];
			$jumlah_ku8 = $jumlah_lama8+$row['jml_KU08'];		
			$jumlah_lama9 = $row['KU09'];
			$jumlah_ku9 = $jumlah_lama9+$row['jml_KU09'];		
			$jumlah_lama10 = $row['KU10'];
			$jumlah_ku10 = $jumlah_lama10+$row['jml_KU10'];		
			$jumlah_lama11 = $row['KU11'];
			$jumlah_ku11 = $jumlah_lama11+$row['jml_KU11'];		
			$jumlah_lama12 = $row['KU12'];
			$jumlah_ku12 = $jumlah_lama12+$row['jml_KU12'];		
			$jumlah_lama13 = $row['KU13'];
			$jumlah_ku13 = $jumlah_lama13+$row['jml_KU13'];


		$query_update = "UPDATE hasil_cpl SET jml_SK01='$jumlah_baru_1', jml_SK02='$jumlah_baru_2', jml_SK03='$jumlah_baru_3', jml_SK04='$jumlah_baru_4', jml_SK05='$jumlah_baru_5', jml_SK06='$jumlah_baru_6', jml_SK07='$jumlah_baru_7', jml_SK08='$jumlah_baru_8', jml_SK09='$jumlah_baru_9', jml_SK10='$jumlah_baru_10', jml_KU01='$jumlah_ku1', jml_KU02='$jumlah_ku2', jml_KU03='$jumlah_ku3', jml_KU04='$jumlah_ku4', jml_KU05='$jumlah_ku5', jml_KU06='$jumlah_ku6', jml_KU07='$jumlah_ku7', jml_KU08='$jumlah_ku8', jml_KU09='$jumlah_ku9', jml_KU10='$jumlah_ku10', jml_KU11='$jumlah_ku11', jml_KU12='$jumlah_ku12', jml_KU13='$jumlah_ku13' WHERE nokta='$nokta'";
		$sql = mysqli_query($connect, $query_update);
	}

}
// end

//kualifikasiPengertian
if (isset($_POST['kualifikasiPengertian'])) {
	$nokta = $_POST['nokta'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$SK01 = $_POST['SK01'];
	$SK02 = $_POST['SK02'];
	$SK03 = $_POST['SK03'];
	$SK04 = $_POST['SK04'];
	$SK05 = $_POST['SK05'];
	$SK06 = $_POST['SK06'];
	$SK07 = $_POST['SK07'];
	$SK08 = $_POST['SK08'];
	$SK09 = $_POST['SK09'];
	$SK10 = $_POST['SK10'];
	//ku
	$PP01 = $_POST['PP01'];
	$PP02 = $_POST['PP02'];
	$PP03 = $_POST['PP03'];
	$PP04 = $_POST['PP04'];
	$PP05 = $_POST['PP05'];
	$PP06 = $_POST['PP06'];
	$PP07 = $_POST['PP07'];
	$PP08 = $_POST['PP08'];
	$PP09 = $_POST['PP09'];
	$PP10 = $_POST['PP10'];
	$PP11 = $_POST['PP11'];
	$PP12 = $_POST['PP12'];
	$PP13 = $_POST['PP13'];
	$PP14 = $_POST['PP14'];
	$PP15 = $_POST['PP15'];
	$PP16 = $_POST['PP16'];
	$PP17 = $_POST['PP17'];
	$PP18 = $_POST['PP18'];
	$PP19 = $_POST['PP19'];
	$PP20 = $_POST['PP20'];

	// menginput data ke database
	mysqli_query($connect, "INSERT INTO hasil_kualifikasipengertian VALUES ('','$nokta','$nama_lengkap','$SK01','$SK02','$SK03','$SK04','$SK05','$SK06','$SK07','$SK08','$SK09','$SK10', '$PP01','$PP02','$PP03','$PP04','$PP05','$PP06','$PP07','$PP08','$PP09','$PP10','$PP11','$PP12','$PP13','$PP14','$PP15','$PP16','$PP17','$PP18','$PP19','$PP20')");

	$query = mysqli_query($connect, "SELECT * FROM hasil_kualifikasipengertian INNER JOIN hasil_cpl ON hasil_cpl.nokta = hasil_kualifikasipengertian.nokta");
		while($row = mysqli_fetch_assoc($query)){

			// penjumlahan
			$jumlah1 = $row['SK01'];
			$jumlah_baru_1 = $jumlah1+$row['jml_SK01'];
			$jumlah2 = $row['SK02'];
			$jumlah_baru_2 = $jumlah2+$row['jml_SK02'];
			$jumlah3 = $row['SK03'];
			$jumlah_baru_3 = $jumlah3+$row['jml_SK03'];
			$jumlah4 = $row['SK04'];
			$jumlah_baru_4 = $jumlah4+$row['jml_SK04'];
			$jumlah5 = $row['SK05'];
			$jumlah_baru_5 = $jumlah5+$row['jml_SK05'];
			$jumlah6 = $row['SK06'];
			$jumlah_baru_6 = $jumlah6+$row['jml_SK06'];
			$jumlah7 = $row['SK07'];
			$jumlah_baru_7 = $jumlah7+$row['jml_SK07'];
			$jumlah8 = $row['SK08'];
			$jumlah_baru_8 = $jumlah8+$row['jml_SK08'];
			$jumlah9 = $row['SK09'];
			$jumlah_baru_9 = $jumlah9+$row['jml_SK09'];
			$jumla10 = $row['SK10'];
			$jumlah_baru_10 = $jumla10+$row['jml_SK10'];
			//PP
			$jumlah_lama1 = $row['PP01'];
			$jumlah_pp1 = $jumlah_lama1+$row['jml_PP01'];
			$jumlah_lama2 = $row['PP02'];
			$jumlah_pp2 = $jumlah_lama2+$row['jml_PP02'];		
			$jumlah_lama3 = $row['PP03'];
			$jumlah_pp3 = $jumlah_lama3+$row['jml_PP03'];		
			$jumlah_lama4 = $row['PP04'];
			$jumlah_pp4 = $jumlah_lama4+$row['jml_PP04'];		
			$jumlah_lama5 = $row['PP05'];
			$jumlah_pp5 = $jumlah_lama5+$row['jml_PP05'];		
			$jumlah_lama6 = $row['PP06'];
			$jumlah_pp6 = $jumlah_lama6+$row['jml_PP06'];		
			$jumlah_lama7 = $row['PP07'];
			$jumlah_pp7 = $jumlah_lama7+$row['jml_PP07'];		
			$jumlah_lama8 = $row['PP08'];
			$jumlah_pp8 = $jumlah_lama8+$row['jml_PP08'];		
			$jumlah_lama9 = $row['PP09'];
			$jumlah_pp9 = $jumlah_lama9+$row['jml_PP09'];		
			$jumlah_lama10 = $row['PP10'];
			$jumlah_pp10 = $jumlah_lama10+$row['jml_PP10'];		
			$jumlah_lama11 = $row['PP11'];
			$jumlah_pp11 = $jumlah_lama11+$row['jml_PP11'];		
			$jumlah_lama12 = $row['PP12'];
			$jumlah_pp12 = $jumlah_lama12+$row['jml_PP12'];		
			$jumlah_lama13 = $row['PP13'];
			$jumlah_pp13 = $jumlah_lama13+$row['jml_PP13'];
			$jumlah_lama14 = $row['PP14'];
			$jumlah_pp14 = $jumlah_lama14+$row['jml_PP14'];		
			$jumlah_lama15 = $row['PP08'];
			$jumlah_pp15 = $jumlah_lama15+$row['jml_PP08'];		
			$jumlah_lama16 = $row['PP16'];
			$jumlah_pp16 = $jumlah_lama16+$row['jml_PP16'];		
			$jumlah_lama17 = $row['PP17'];
			$jumlah_pp17 = $jumlah_lama17+$row['jml_PP17'];		
			$jumlah_lama18 = $row['PP18'];
			$jumlah_pp18 = $jumlah_lama18+$row['jml_PP18'];		
			$jumlah_lama19 = $row['PP19'];
			$jumlah_pp19 = $jumlah_lama19+$row['jml_PP19'];		
			$jumlah_lama20 = $row['PP20'];
			$jumlah_pp20 = $jumlah_lama20+$row['jml_PP20'];


		$query_update = "UPDATE hasil_cpl SET jml_SK01='$jumlah_baru_1', jml_SK02='$jumlah_baru_2', jml_SK03='$jumlah_baru_3', jml_SK04='$jumlah_baru_4', jml_SK05='$jumlah_baru_5', jml_SK06='$jumlah_baru_6', jml_SK07='$jumlah_baru_7', jml_SK08='$jumlah_baru_8', jml_SK09='$jumlah_baru_9', jml_SK10='$jumlah_baru_10', jml_PP01='$jumlah_pp1', jml_PP02='$jumlah_pp2', jml_PP03='$jumlah_pp3', jml_PP04='$jumlah_pp4', jml_PP05='$jumlah_pp5', jml_PP06='$jumlah_pp6', jml_PP07='$jumlah_pp7', jml_PP08='$jumlah_pp8', jml_PP09='$jumlah_pp9', jml_PP10='$jumlah_pp10', jml_PP11='$jumlah_pp11', jml_PP12='$jumlah_pp12', jml_PP13='$jumlah_pp13' , jml_PP14='$jumlah_pp14', jml_PP15='$jumlah_pp15', jml_PP16='$jumlah_pp16' , jml_PP17='$jumlah_pp17' , jml_PP18='$jumlah_pp18' , jml_PP19='$jumlah_pp19' , jml_PP20='$jumlah_pp20' WHERE nokta='$nokta'";
		$sql = mysqli_query($connect, $query_update);
	}

}

  echo "<script>alert('Data Berhasil Diedit');document.location='index.php?page=dataHasil&&id=$nokta'</script>";

?>