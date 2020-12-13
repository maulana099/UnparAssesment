<?php 
include "../koneksi.php";
if (isset($_GET['id'])) {
	$nokta=$_GET['id'];
	$sql = "SELECT * FROM datapribadi WHERE nokta ='$nokta'";
	$query=mysqli_query($connect, $sql);
	$data=mysqli_fetch_array($query);
	$id = $data['id'];
	$nokta = $data['nokta'];
	$nama_lengkap = $data['nama_lengkap'];
	$tanggal = $data['tanggal_lahir'];
	$lahir = $data['tempat_lahir'];
	$email = $data['email'];
	$no_hp = $data['nohp'];
}
?>


<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Poin Kompetensi <?php echo $nama_lengkap; ?></title>
</head>

<style type="text/css">

@media print {
	html, body {
		size: auto;
		width: 297mm;
		height: 210mm;
	}
}

/*p{
	color: black; 
	font-size: 36;
	font-family: Arial, Helvetica, sans-serif; 
	}*/

	body{
		background-size:   cover;                      /* <------ */
		background-repeat: no-repeat;
		background-position: center center;            /* optionally, center the image */
	}


	/*css tabel*/
	#customers {
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 90%;
		font-size: 12px;
		padding-top: 5px;
		float: left;
	}

	#customers td, #customers th {
		/*border-bottom:  1px solid #ddd;*/
		padding: 4px;
	}

	/*#customers tr:nth-child(even){background-color: #f2f2f2;}*/
	#customers tr:nth-child(even){background-color: #fdb827;}

	#customers tr:hover {background-color: #ddd;}
	

	#customers th {
		padding-top: 10px;
		padding-bottom: 10px;
		/*text-align: left;*/
		background-color: #d1c000;
		color: black;
	}

	/*tabel 2*/
	#customers22{
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width:10%;
		font-size: 12px;
		padding-top: 5px;
		float: right;
	}

	#customers22 td, #customers22 th {
		/*border-bottom: 1px solid #ddd;*/
		/*border-collapse: collapse;*/
		padding: 4px;
		/*width: 100%;*/
	}

	#customers22 tr:nth-child(even){background-color: #fdb827;}

	#customers22 tr:hover {background-color: #ddd;}

	#customers22 th {
		padding-top: 10px;
		padding-bottom: 10px;
		text-align: left;
		background-color: #d1c000;
		color: black;
	}
	div.a {
		position: relative;
		width: 400px;
		height: 200px;
		/*border: 3px solid red;*/
	}

	div.b {
		position: absolute;
		left: 400px;  
		width: 300px;
		height: 120px;
		/*border: 3px solid green;*/
	} 

	div.c {
		position: absolute;
		right: 250px;  
		width: 300px;
		height: 120px;
		/*border: 3px solid green;*/
	} 

</style>

<body>
	<h3 style="font-family: Arial, Helvetica, sans-serif; text-align: center;">Poin Kompetensi Formulir Assesment Mahasiswa</h3>
	<hr/>
	<div class="">
		<div class="">
			<p class="" style="font-size: 12px; font-family: Arial, Helvetica, sans-serif;">Nama Lengkap : <?php echo $nama_lengkap ?> <br/> NIM &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $nokta; ?></p>
			<br/>
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px; padding-top: 20px;"><b>1. Organisasi Profesi & Organisasi Lainnya Yang Dimasuki</b></p>
			<table id="customers">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th style="text-align: left;">Keterangan</th>
				</tr>
				<?php 
				$no = 1;
				$data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='SK'");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td align="center"><?php echo $no++; ?></td>
						<td align="center"><?php echo $d['kode']; ?></td>
						<td><?php echo $d['keterangan']; ?></td>
					</tr>
				<?php } ?>
			</table>

			<table id="customers22">
				<tr>
					<th style="text-align: center;">Poin</th>
				</tr>
				<?php 
				$data = mysqli_query($connect, "SELECT * FROM hasil_organisasi where nokta='$nokta'");
				while($hasil = mysqli_fetch_array($data)){
					?>
					<tr align="center">
						<td><?php echo $hasil['SK01']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['SK03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['SK04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['SK05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK07']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK08']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 3px;"><?php echo $hasil['SK09']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK10']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	
	<p style="color: white;">-</p>
	<br/>
	<!-- data pengahargaan -->
	<div class="">
		<div class="">
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px;"><b>2. Tanda Penghargaan yang Diterima</b></p>
			<table id="customers">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th style="text-align: left;">Keterangan</th>
				</tr>
				<?php 
				$no = 1;
				$data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='SK'");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td align="center"><?php echo $no++; ?></td>
						<td align="center"><?php echo $d['kode']; ?></td>
						<td><?php echo $d['keterangan']; ?></td>
					</tr>
				<?php } ?>
			</table>

			<table id="customers22">
				<tr>
					<th style="text-align: center;">Poin</th>
				</tr>
				<?php 
				$data = mysqli_query($connect, "SELECT * FROM hasil_penghargaan where nokta='$nokta'");
				while($hasil = mysqli_fetch_array($data)){
					?>
					<tr align="center">
						<td><?php echo $hasil['SK01']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['SK03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['SK04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['SK05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK07']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK08']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK09']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK10']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>

	<p style="color: white;">-</p>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<!-- Pendidikan/Pelatihan Teknik/Pertanian  dan Profesi Keinsinyuran Yang Diikuti -->
	<div class="">
		<div class="">
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px; padding-top: 40px;"><b>3. Pendidikan/Pelatihan Teknik/Pertanian  dan Profesi Keinsinyuran Yang Diikuti</b></p>	
			<table id="customers">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th style="text-align: left;">Keterangan</th>
				</tr>
				<?php 
				$no = 1;
				$data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='SK' OR kodeKompetensi='KU'");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td align="center"><?php echo $no++; ?></td>
						<td align="center"><?php echo $d['kode']; ?></td>
						<td><?php echo $d['keterangan']; ?></td>
					</tr>
				<?php } ?>
			</table>

			<table id="customers22">
				<tr>
					<th>Poin</th>
				</tr>
				<?php
				$nokta=$_GET['id'];
				$data = mysqli_query($connect, "SELECT * FROM hasil_pelatihan where nokta='$nokta'");
				while($hasil = mysqli_fetch_array($data)){
					?>
					<tr align="center">
						<td><?php echo $hasil['SK01']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['SK03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['SK04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['SK05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK07']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK08']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK09']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK10']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KU03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['KU05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU07']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU09']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU10']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU11']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['KU12']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<p style="color: white;">-</p>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<!-- I.6 PendidIkan/Pelatihan Manajemen dan BIdang Lainnya (yang Relevan)  -->
	<div class="">
		<div class="">
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px; padding-top: 50px;"><b>4. PendidIkan/Pelatihan Manajemen dan BIdang Lainnya (yang Relevan)</b></p>	
			<table id="customers">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th style="text-align: left;">Keterangan</th>
				</tr>
				<?php 
				$no = 1;
				$data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='SK' OR kodeKompetensi='KU'");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td align="center"><?php echo $no++; ?></td>
						<td align="center"><?php echo $d['kode']; ?></td>
						<td><?php echo $d['keterangan']; ?></td>
					</tr>
				<?php } ?>
			</table>

			<table id="customers22">
				<tr>
					<th>Poin</th>
				</tr>
				<?php
				$nokta=$_GET['id'];
				$data = mysqli_query($connect, "SELECT * FROM hasil_pelatihanlain where nokta='$nokta'");
				while($hasil = mysqli_fetch_array($data)){
					?>
					<tr align="center">
						<td><?php echo $hasil['SK01']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['SK03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['SK04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['SK05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK07']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK08']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK09']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK10']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KU03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['KU05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU07']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU09']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU10']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU11']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['KU12']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>

	<!-- I.6 PendidIkan/Pelatihan Manajemen dan BIdang Lainnya (yang Relevan)  -->
	<p style="color: white;">-</p>
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<div class="">
		<div class="">
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px; padding-top: 50px;"><b>5. Kualifikasi kode etik insinyur Indonesia dan Etika Profesional</b><span> ( Pengertian, Pendapat dan Pengalaman Sendiri )</span></p>	
			<table id="customers">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th style="text-align: left;">Keterangan</th>
				</tr>
				<?php 
				$no = 1;
				$data = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='SK' OR kodeKompetensi='PP'");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td align="center"><?php echo $no++; ?></td>
						<td align="center"><?php echo $d['kode']; ?></td>
						<td><?php echo $d['keterangan']; ?></td>
					</tr>
				<?php } ?>
			</table>

			<table id="customers22">
				<tr>
					<th>Poin</th>
				</tr>
				<?php
				$nokta=$_GET['id'];
				$data = mysqli_query($connect, "SELECT * FROM hasil_pengertian where nokta='$nokta'");
				while($hasil = mysqli_fetch_array($data)){
					?>
					<tr align="center">
						<td><?php echo $hasil['SK01']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['SK03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['SK04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['SK05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK07']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 5px;"><?php echo $hasil['SK08']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 3px;"><?php echo $hasil['SK09']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['SK10']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 3px;"><?php echo $hasil['PP01']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 5px;"><?php echo $hasil['PP02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP03']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 3px;"><?php echo $hasil['PP05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP06']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP07']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP08']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP09']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['PP10']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP11']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP12']; ?></td>
					</tr>
					<tr align="center">
						<td ><?php echo $hasil['PP13']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 5px;"><?php echo $hasil['PP14']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP15']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['PP16']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP17']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['PP18']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP19']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['PP20']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>

	<p style="color: white;">-</p>
	<br/><br/><br/><br/><br/><br/><br/>
	<!-- I.6 Pengalaman Dalam Perencanaan dan Perencanaan  -->
	<div class="">
		<div class="">
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px; padding-top: 20px;"><b>6. Pengalaman Dalam Perencanaan dan Perancangan atau Pengalaman dalam Pengelolaan Tugas-tugas Keinsinyuran</b></p>	
			<table id="customers">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th style="text-align: left;">Keterangan</th>
				</tr>
				<?php 
				$no = 1;
				$data6 = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KU' OR kodeKompetensi='KK'");
				while($d = mysqli_fetch_array($data6)){
					?>
					<tr>
						<td align="center"><?php echo $no++; ?></td>
						<td align="center"><?php echo $d['kode']; ?></td>
						<td><?php echo $d['keterangan']; ?></td>
					</tr>
				<?php } ?>
			</table>

			<table id="customers22">
				<tr>
					<th>Poin</th>
				</tr>
				<?php
				$nokta=$_GET['id'];
				$data6 = mysqli_query($connect, "SELECT * FROM hasil_kualifikasi where nokta='$nokta'");
				while($hasil = mysqli_fetch_array($data6)){
					?>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['KU02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KU03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KU04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KU05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU07']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['KU08']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU09']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 5px;"><?php echo $hasil['KU10']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU11']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['KU12']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK01']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KK03']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KK04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK05']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KK07']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK08']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK09']; ?></td>
					</tr>
					<tr align="center">
						<td ><?php echo $hasil['KK10']; ?></td>
					</tr>
					<tr align="center">
						<td ><?php echo $hasil['KK11']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KK12']; ?></td>
					</tr>	
					<tr align="center">
						<td style="padding-bottom: 5px;"><?php echo $hasil['KK13']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KK14']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KK15']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 3px;"><?php echo $hasil['KK16']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KK17']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>

	<p style="color: white;">-</p>
	<br/><br/><br/><br/><br/><br/>
	<!-- I.6 Pengalaman Dalam Perencanaan dan Perencanaan  -->
	<div class="">
		<div class="">
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px; padding-top: 5px;"><b>7. Pengalaman Mengajar  Pelajaran Keinsinyuran dan/atau  Manajemen  Pendidikan/Pelatihan  Keinsinyuran Manajemen</b></p>	
			<table id="customers">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th style="text-align: left;">Keterangan</th>
				</tr>
				<?php 
				$no = 1;
				$data6 = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='PP' OR kodeKompetensi='KK'");
				while($d = mysqli_fetch_array($data6)){
					?>
					<tr>
						<td align="center"><?php echo $no++; ?></td>
						<td align="center"><?php echo $d['kode']; ?></td>
						<td><?php echo $d['keterangan']; ?></td>
					</tr>
				<?php } ?>
			</table>

			<table id="customers22">
				<tr>
					<th>Poin</th>
				</tr>
				<?php
				$nokta=$_GET['id'];
				$data6 = mysqli_query($connect, "SELECT * FROM hasil_mengajar where nokta='$nokta'");
				while($hasil = mysqli_fetch_array($data6)){
					?>
					<tr align="center">
						<td><?php echo $hasil['PP01']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP03']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP04']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP06']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP07']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 3px;"><?php echo $hasil['PP08']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP09']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP10']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP11']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP12']; ?></td>
					</tr>
					<tr align="center">
						<td ><?php echo $hasil['PP13']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP14']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['PP15']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['PP16']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP17']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['PP18']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP19']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['PP20']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK01']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 12px;"><?php echo $hasil['KK02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KK03']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KK04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK05']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK06']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK07']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 10px;"><?php echo $hasil['KK08']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK09']; ?></td>
					</tr>
					<tr align="center">
						<td ><?php echo $hasil['KK10']; ?></td>
					</tr>
					<tr align="center">
						<td ><?php echo $hasil['KK11']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 5px;"><?php echo $hasil['KK12']; ?></td>
					</tr>	
					<tr align="center">
						<td><?php echo $hasil['KK13']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KK14']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KK15']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 3px;"><?php echo $hasil['KK16']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KK17']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>

	<p style="color: white;">-</p>
	<!-- I.6 Pengalaman Dalam Perencanaan dan Perencanaan  -->
	<div class="">
		<div class="">
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px;"><b>8. Pengalaman  Dalam Penelitian, Pengembangan dan Komersialisasi dan/atau Pengalaman Menangani  Bahan Material dan Komponen</b></p>	
			<table id="customers">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th style="text-align: left;">Keterangan</th>
				</tr>
				<?php 
				$no = 1;
				$data6 = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='PP' OR kodeKompetensi='KU'");
				while($d = mysqli_fetch_array($data6)){
					?>
					<tr>
						<td align="center"><?php echo $no++; ?></td>
						<td align="center"><?php echo $d['kode']; ?></td>
						<td><?php echo $d['keterangan']; ?></td>
					</tr>
				<?php } ?>
			</table>

			<table id="customers22">
				<tr>
					<th>Poin</th>
				</tr>
				<?php
				$nokta=$_GET['id'];
				$data6 = mysqli_query($connect, "SELECT * FROM hasil_penelitian where nokta='$nokta'");
				while($hasil = mysqli_fetch_array($data6)){
					?>
					<tr align="center">
						<td><?php echo $hasil['PP01']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP03']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP04']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP06']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP07']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP08']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP09']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['PP10']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP11']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP12']; ?></td>
					</tr>
					<tr align="center">
						<td ><?php echo $hasil['PP13']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['PP14']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP15']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 10px;"><?php echo $hasil['PP16']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP17']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP18']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP19']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['PP20']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['KU02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KU03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KU04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 5px;"><?php echo $hasil['KU06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU07']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['KU08']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU09']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU10']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['KU11']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU12']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU13']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>

	<p style="color: white;">-</p>
	<!-- I.6 Pengalaman Dalam Perencanaan dan Perencanaan  -->
	<div class="">
		<div class="">
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px; padding-top: 20px;"><b>9. Pengalaman  Dalam Pekerjaan Manufaktur atau Produksi dan/atau Pengalaman Dalam Konsultansi Perekayasaan dan/atau Konstruksi/Instalasi</p>	
				<table id="customers">
					<tr>
						<th>No</th>
						<th>Kode</th>
						<th style="text-align: left;">Keterangan</th>
					</tr>
					<?php 
					$no = 1;
					$data6 = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KU' OR kodeKompetensi='KK'");
					while($d = mysqli_fetch_array($data6)){
						?>
						<tr>
							<td align="center"><?php echo $no++; ?></td>
							<td align="center"><?php echo $d['kode']; ?></td>
							<td><?php echo $d['keterangan']; ?></td>
						</tr>
					<?php } ?>
				</table>

				<table id="customers22">
					<tr>
						<th>Poin</th>
					</tr>
					<?php
					$nokta=$_GET['id'];
					$data6 = mysqli_query($connect, "SELECT * FROM hasil_manufaktur where nokta='$nokta'");
					while($hasil = mysqli_fetch_array($data6)){
						?>
						<tr align="center">
							<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KU03']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KU04']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
						</tr>
						<tr align="center">
							<td><?php echo $hasil['KU06']; ?></td>
						</tr>
						<tr align="center">
							<td><?php echo $hasil['KU07']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
						</tr>
						<tr align="center">
							<td><?php echo $hasil['KU09']; ?></td>
						</tr>
						<tr align="center">
							<td><?php echo $hasil['KU10']; ?></td>
						</tr>
						<tr align="center">
							<td><?php echo $hasil['KU11']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KU12']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KU13']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK01']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK02']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 21px; padding-bottom: 15px;"><?php echo $hasil['KK03']; ?></td>
						</tr>
						<tr align="center">
							<td><?php echo $hasil['KK04']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK05']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK06']; ?></td>
						</tr>
						<tr align="center">
							<td><?php echo $hasil['KK07']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK08']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK09']; ?></td>
						</tr>
						<tr align="center">
							<td><?php echo $hasil['KK10']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-bottom: 4px;"><?php echo $hasil['KK11']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-bottom: 3px;"><?php echo $hasil['KK12']; ?></td>
						</tr>	
						<tr align="center">
							<td><?php echo $hasil['KK13']; ?></td>
						</tr>
						<tr align="center">
							<td><?php echo $hasil['KK14']; ?></td>
						</tr>
						<tr align="center">
							<td><?php echo $hasil['KK15']; ?></td>
						</tr>
						<tr align="center">
							<td style="padding-bottom: 4px;"><?php echo $hasil['KK16']; ?></td>
						</tr>
						<tr align="center">
							<td><?php echo $hasil['KK17']; ?></td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>

		<p style="color: white;">-</p>
		<br/><br/><br/><br/><br/><br/>
		<!-- I.6 Pengalaman Dalam Perencanaan dan Perencanaan  -->
		<div class="">
			<div class="">
				<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px; padding-top: 30px;"><b>10. Pengalaman Dalam Manajemen Usaha dan Pemasaran Teknik dan/atau Pengalaman Dalam Manajemen Pembangunan dan Pemeliharaan Asset</p>	
					<table id="customers">
						<tr>
							<th>No</th>
							<th>Kode</th>
							<th style="text-align: left;">Keterangan</th>
						</tr>
						<?php 
						$no = 1;
						$data6 = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KU' OR kodeKompetensi='KK'");
						while($d = mysqli_fetch_array($data6)){
							?>
							<tr>
								<td align="center"><?php echo $no++; ?></td>
								<td align="center"><?php echo $d['kode']; ?></td>
								<td><?php echo $d['keterangan']; ?></td>
							</tr>
						<?php } ?>
					</table>

					<table id="customers22">
						<tr>
							<th>Poin</th>
						</tr>
						<?php
						$nokta=$_GET['id'];
						$data6 = mysqli_query($connect, "SELECT * FROM hasil_usaha where nokta='$nokta'");
						while($hasil = mysqli_fetch_array($data6)){
							?>
							<tr align="center">
								<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KU03']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KU04']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
							</tr>
							<tr align="center">
								<td><?php echo $hasil['KU06']; ?></td>
							</tr>
							<tr align="center">
								<td><?php echo $hasil['KU07']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
							</tr>
							<tr align="center">
								<td><?php echo $hasil['KU09']; ?></td>
							</tr>
							<tr align="center">
								<td><?php echo $hasil['KU10']; ?></td>
							</tr>
							<tr align="center">
								<td><?php echo $hasil['KU11']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KU12']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KU13']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK01']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK02']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 21px; padding-bottom: 15px;"><?php echo $hasil['KK03']; ?></td>
							</tr>
							<tr align="center">
								<td><?php echo $hasil['KK04']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK05']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK06']; ?></td>
							</tr>
							<tr align="center">
								<td><?php echo $hasil['KK07']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK08']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK09']; ?></td>
							</tr>
							<tr align="center">
								<td><?php echo $hasil['KK10']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-bottom: 4px;"><?php echo $hasil['KK11']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-bottom: 3px;"><?php echo $hasil['KK12']; ?></td>
							</tr>	
							<tr align="center">
								<td><?php echo $hasil['KK13']; ?></td>
							</tr>
							<tr align="center">
								<td><?php echo $hasil['KK14']; ?></td>
							</tr>
							<tr align="center">
								<td><?php echo $hasil['KK15']; ?></td>
							</tr>
							<tr align="center">
								<td style="padding-bottom: 4px;"><?php echo $hasil['KK16']; ?></td>
							</tr>
							<tr align="center">
								<td><?php echo $hasil['KK17']; ?></td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>

			<p style="color: white;">-</p>
			<br/><br/><br/><br/><br/><br/>
			<!-- Karya Tulis di Bidang  Keinsinyuran yang Dipublikasikan  -->
			<div class="">
				<div class="">
					<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px; padding-top: 30px;"><b>11. Karya Tulis di Bidang  Keinsinyuran yang Dipublikasikan</p>	
						<table id="customers">
							<tr>
								<th>No</th>
								<th>Kode</th>
								<th style="text-align: left;">Keterangan</th>
							</tr>
							<?php 
							$no = 1;
							$data6 = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KK'");
							while($d = mysqli_fetch_array($data6)){
								?>
								<tr>
									<td align="center"><?php echo $no++; ?></td>
									<td align="center"><?php echo $d['kode']; ?></td>
									<td><?php echo $d['keterangan']; ?></td>
								</tr>
							<?php } ?>
						</table>

						<table id="customers22">
							<tr>
								<th>Poin</th>
							</tr>
							<?php
							$nokta=$_GET['id'];
							$data6 = mysqli_query($connect, "SELECT * FROM hasil_karya where nokta='$nokta'");
							while($hasil = mysqli_fetch_array($data6)){
								?>
								<tr align="center">
									<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK01']; ?></td>
								</tr>
								<tr align="center">
									<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK02']; ?></td>
								</tr>
								<tr align="center">
									<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KK03']; ?></td>
								</tr>
								<tr align="center">
									<td style="padding-bottom: 5px;"><?php echo $hasil['KK04']; ?></td>
								</tr>
								<tr align="center">
									<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK05']; ?></td>
								</tr>
								<tr align="center">
									<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK06']; ?></td>
								</tr>
								<tr align="center">
									<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK07']; ?></td>
								</tr>
								<tr align="center">
									<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK08']; ?></td>
								</tr>
								<tr align="center">
									<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK09']; ?></td>
								</tr>
								<tr align="center">
									<td><?php echo $hasil['KK10']; ?></td>
								</tr>
								<tr align="center">
									<td style="padding-bottom: 4px;"><?php echo $hasil['KK11']; ?></td>
								</tr>
								<tr align="center">
									<td><?php echo $hasil['KK12']; ?></td>
								</tr>	
								<tr align="center">
									<td><?php echo $hasil['KK13']; ?></td>
								</tr>
								<tr align="center">
									<td><?php echo $hasil['KK14']; ?></td>
								</tr>
								<tr align="center">
									<td><?php echo $hasil['KK15']; ?></td>
								</tr>
								<tr align="center">
									<td style="padding-bottom: 4px;"><?php echo $hasil['KK16']; ?></td>
								</tr>
								<tr align="center">
									<td><?php echo $hasil['KK17']; ?></td>
								</tr>
							<?php } ?>
						</table>
					</div>
				</div>

				<span style="color: white;">-</span>
				<!-- Karya Tulis di Bidang  Keinsinyuran yang Dipublikasikan  -->
				<div class="">
					<div class="">
						<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px;"><b>12. Makalah/Tulisan Yang Disajikan Dalam Seminar/Lokakarya Keinsinyuran</p>	
							<table id="customers">
								<tr>
									<th>No</th>
									<th>Kode</th>
									<th style="text-align: left;">Keterangan</th>
								</tr>
								<?php 
								$no = 1;
								$data6 = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KK'");
								while($d = mysqli_fetch_array($data6)){
									?>
									<tr>
										<td align="center"><?php echo $no++; ?></td>
										<td align="center"><?php echo $d['kode']; ?></td>
										<td><?php echo $d['keterangan']; ?></td>
									</tr>
								<?php } ?>
							</table>

							<table id="customers22">
								<tr>
									<th>Poin</th>
								</tr>
								<?php
								$nokta=$_GET['id'];
								$data6 = mysqli_query($connect, "SELECT * FROM hasil_makalah where nokta='$nokta'");
								while($hasil = mysqli_fetch_array($data6)){
									?>
									<tr align="center">
										<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK01']; ?></td>
									</tr>
									<tr align="center">
										<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK02']; ?></td>
									</tr>
									<tr align="center">
										<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KK03']; ?></td>
									</tr>
									<tr align="center">
										<td style="padding-bottom: 5px;"><?php echo $hasil['KK04']; ?></td>
									</tr>
									<tr align="center">
										<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK05']; ?></td>
									</tr>
									<tr align="center">
										<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK06']; ?></td>
									</tr>
									<tr align="center">
										<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK07']; ?></td>
									</tr>
									<tr align="center">
										<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK08']; ?></td>
									</tr>
									<tr align="center">
										<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK09']; ?></td>
									</tr>
									<tr align="center">
										<td><?php echo $hasil['KK10']; ?></td>
									</tr>
									<tr align="center">
										<td style="padding-bottom: 4px;"><?php echo $hasil['KK11']; ?></td>
									</tr>
									<tr align="center">
										<td><?php echo $hasil['KK12']; ?></td>
									</tr>	
									<tr align="center">
										<td><?php echo $hasil['KK13']; ?></td>
									</tr>
									<tr align="center">
										<td><?php echo $hasil['KK14']; ?></td>
									</tr>
									<tr align="center">
										<td><?php echo $hasil['KK15']; ?></td>
									</tr>
									<tr align="center">
										<td style="padding-bottom: 4px;"><?php echo $hasil['KK16']; ?></td>
									</tr>
									<tr align="center">
										<td><?php echo $hasil['KK17']; ?></td>
									</tr>
								<?php } ?>
							</table>
						</div>
					</div>

					<span style="color: white;">-</span>
					<!-- Karya Tulis di Bidang  Keinsinyuran yang Dipublikasikan  -->
					<div class="">
						<div class="">
							<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px;"><b>13. Seminar/Lokakarya Keinsinyuran Yang Diikuti</p>	
								<table id="customers">
									<tr>
										<th>No</th>
										<th>Kode</th>
										<th style="text-align: left;">Keterangan</th>
									</tr>
									<?php 
									$no = 1;
									$data6 = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KU'");
									while($d = mysqli_fetch_array($data6)){
										?>
										<tr>
											<td align="center"><?php echo $no++; ?></td>
											<td align="center"><?php echo $d['kode']; ?></td>
											<td><?php echo $d['keterangan']; ?></td>
										</tr>
									<?php } ?>
								</table>

								<table id="customers22">
									<tr>
										<th style="text-align: center;">Poin</th>
									</tr>
									<?php
									$nokta=$_GET['id'];
									$data6 = mysqli_query($connect, "SELECT * FROM hasil_seminar where nokta='$nokta'");
									while($hasil = mysqli_fetch_array($data6)){
										?>
										<tr align="center">
											<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
										</tr>
										<tr align="center">
											<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['KU02']; ?></td>
										</tr>
										<tr align="center">
											<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KU03']; ?></td>
										</tr>
										<tr align="center">
											<td style="padding-top: 12px; padding-bottom: 12px;"><?php echo $hasil['KU04']; ?></td>
										</tr>
										<tr align="center">
											<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
										</tr>
										<tr align="center">
											<td><?php echo $hasil['KU06']; ?></td>
										</tr>
										<tr align="center">
											<td><?php echo $hasil['KU07']; ?></td>
										</tr>
										<tr align="center">
											<td style="padding-top: 11px; padding-bottom: 11px;"><?php echo $hasil['KU08']; ?></td>
										</tr>
										<tr align="center">
											<td><?php echo $hasil['KU09']; ?></td>
										</tr>
										<tr align="center">
											<td style="padding-bottom: 5px;"><?php echo $hasil['KU10']; ?></td>
										</tr>
										<tr align="center">
											<td><?php echo $hasil['KU11']; ?></td>
										</tr>
										<tr align="center">
											<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KU12']; ?></td>
										</tr>
										<tr align="center">
											<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KU13']; ?></td>
										</tr>
									<?php } ?>
								</table>
							</div>
						</div>

						<span style="color: white;">-</span>
						<!-- Karya Temuan/Inovasi/Paten dan Implementasi Teknologi  Baru  -->
						<div class="">
							<div class="">
								<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px;"><b>14. Karya Temuan/Inovasi/Paten dan Implementasi Teknologi Baru</p>	
									<table id="customers">
										<tr>
											<th>No</th>
											<th>Kode</th>
											<th style="text-align: left;">Keterangan</th>
										</tr>
										<?php 
										$no = 1;
										$data14 = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KK'");
										while($d = mysqli_fetch_array($data14)){
											?>
											<tr>
												<td align="center"><?php echo $no++; ?></td>
												<td align="center"><?php echo $d['kode']; ?></td>
												<td><?php echo $d['keterangan']; ?></td>
											</tr>
										<?php } ?>
									</table>

									<table id="customers22">
										<tr>
											<th align="center">Poin</th>
										</tr>
										<?php
										$nokta=$_GET['id'];
										$data14 = mysqli_query($connect, "SELECT * FROM hasil_teknologi where nokta='$nokta'");
										while($hasil = mysqli_fetch_array($data14)){
											?>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK01']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK02']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KK03']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-bottom: 5px;"><?php echo $hasil['KK04']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK05']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK06']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK07']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KK08']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KK09']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['KK10']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-bottom: 4px;"><?php echo $hasil['KK11']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['KK12']; ?></td>
											</tr>	
											<tr align="center">
												<td><?php echo $hasil['KK13']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['KK14']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['KK15']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-bottom: 4px;"><?php echo $hasil['KK16']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['KK17']; ?></td>
											</tr>
										<?php } ?>
									</table>
								</div>
							</div>

							<span style="color: white;">-</span>
							<br/><br/><br/><br/>
							<!-- Karya Temuan/Inovasi/Paten dan Implementasi Teknologi  Baru  -->
							<div class="">
								<div class="">	
									<table id="customers">
										<tr>
											<th>No</th>
											<th>Kode</th>
											<th style="text-align: left;">Keterangan</th>
										</tr>
										<?php 
										$no = 1;
										$data14 = mysqli_query($connect, "SELECT * FROM konversi_cpl WHERE kodeKompetensi='KU'");
										while($d = mysqli_fetch_array($data14)){
											?>
											<tr>
												<td align="center"><?php echo $no++; ?></td>
												<td align="center"><?php echo $d['kode']; ?></td>
												<td><?php echo $d['keterangan']; ?></td>
											</tr>
										<?php } ?>
									</table>

									<table id="customers22">
										<tr>
											<th align="center">Poin</th>
										</tr>
										<?php
										$nokta=$_GET['id'];
										$data14 = mysqli_query($connect, "SELECT * FROM hasil_teknologi where nokta='$nokta'");
										while($hasil = mysqli_fetch_array($data14)){
											?>
											<tr align="center">
												<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU01']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU02']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 21px; padding-bottom: 16px;"><?php echo $hasil['KU03']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KU04']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU05']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['KU06']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['KU07']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 11px; padding-bottom: 12px;"><?php echo $hasil['KU08']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['KU09']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['KU10']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['KU11']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['KU12']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['KU13']; ?></td>
											</tr>
										<?php } ?>
									</table>
								</div>
							</div>

							<p style="color: white;">-</p>
							<!-- bahasa yang dikuasai -->
							<div class="">
								<div class="">
									<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px;"><b>15. Bahasa Yang Dikuasai</b></p>
									<table id="customers">
										<tr>
											<th>No</th>
											<th>Kode</th>
											<th style="text-align: left;">Keterangan</th>
										</tr>
										<?php 
										$no = 1;
										$data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='SK'");
										while($d = mysqli_fetch_array($data)){
											?>
											<tr>
												<td align="center"><?php echo $no++; ?></td>
												<td align="center"><?php echo $d['kode']; ?></td>
												<td><?php echo $d['keterangan']; ?></td>
											</tr>
										<?php } ?>
									</table>

									<table id="customers22">
										<tr>
											<th style="text-align: center;">Poin</th>
										</tr>
										<?php 
										$data = mysqli_query($connect, "SELECT * FROM hasil_bahasa where nokta='$nokta'");
										while($hasil = mysqli_fetch_array($data)){
											?>
											<tr align="center">
												<td><?php echo $hasil['SK01']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['SK02']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['SK03']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['SK04']; ?></td>
											</tr>
											<tr align="center">
												<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['SK05']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['SK06']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['SK07']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['SK08']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['SK09']; ?></td>
											</tr>
											<tr align="center">
												<td><?php echo $hasil['SK10']; ?></td>
											</tr>
										<?php } ?>
									</table>
								</div>
							</div>
							<?php
							setlocale(LC_ALL, 'id_ID');
							$hariIni = new DateTime();
							?>
							<p style="color: white;">-</p>
							<br/>
							<p style="float: right; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Bandung, <?php echo strftime('%d %B %Y', $hariIni->getTimestamp()); ?></p>
							<br/>
							<br/>
							<br/>
							<br/>
							<div class="a" style="padding-top: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
								<div class="c">
									<p style="text-align: center;">Asesor I</p>
									<br/>
									<br/>
									<br/>
									<br/>
									<p style="text-align: center;">Nama Dosen I</p>
								</div>
								<div class="b">
									<p style="text-align: center;">Asesor II</p>
									<br/>
									<br/>
									<br/>
									<br/>
									<p style="text-align: center;">Nama Dosen II </p>
								</div>
							</div>

						</body>
						</html>

						<?php

						$html = ob_get_clean(); 
						use Dompdf\Dompdf;
						require_once '../vendorPDF/autoload.php'; 
						define("DOMPDF_UNICODE_ENABLED", true);
						$dompdf = new Dompdf();
						$dompdf->loadHtml($html); 
						$dompdf->set_option('isRemoteEnabled', TRUE);
						$dompdf->setPaper('legal', 'portrait');
						$dompdf->render(); 
						$dompdf->stream("Poin Kompetensi.pdf", array("Attachment" => false));

						exit(0);

						?>