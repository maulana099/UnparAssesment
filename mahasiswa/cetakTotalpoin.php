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
		width: 80%;
		font-size: 12px;
		padding-top: 5px;
		float: left;
	}

	#customers td, #customers th {
		/*border-bottom:  1px solid #ddd;*/
		padding: 4px;
	}

	#customers tr:nth-child(even){background-color: #dddddd;}
	/*#customers tr:nth-child(even){background-color: #fdb827;}*/

	#customers tr:hover {background-color: #ddd;}
	

	#customers th {
		padding-top: 10px;
		padding-bottom: 10px;
		/*text-align: left;*/
		background-color: #ffc93c;
		color: black;
	}

	/*tabel 2*/
	#customers22{
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width:20%;
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

	#customers22 tr:nth-child(even){background-color: #dddddd;}

	#customers22 tr:hover {background-color: #ddd;}

	#customers22 th {
		padding-top: 10px;
		padding-bottom: 10px;
		text-align: left;
		background-color: #ffc93c;
		color: black;
	}

</style>

<body>
	<h3 style="font-family: Arial, Helvetica, sans-serif; text-align: center;">Total Kompetensi Formulir Assesment Mahasiswa *</h3>
	<hr/>
	<div class="">
		<div class="">
			<p class="" style="font-size: 12px; font-family: Arial, Helvetica, sans-serif;">Nama Lengkap : <?php echo $nama_lengkap ?> <br/> NIM &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $nokta; ?></p>
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px; padding-top: 5px;"><b>KODE : SK ( SIKAP )</b></p>
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
					<th style="text-align: center;">Jumlah</th>
					<th style="text-align: center;">Total</th>
				</tr>
				<?php
				$nokta=$_GET['id']; 
				$data = mysqli_query($connect, "SELECT * FROM hasil_cpl inner join total_cpl on total_cpl.nokta = hasil_cpl.nokta where hasil_cpl.nokta = $nokta");
				while($hasil = mysqli_fetch_array($data)){
					?>
					<tr align="center">
						<td><?php echo $hasil['jml_SK01']; ?></td>
						<td><?php echo $hasil['tot_SK01']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_SK02']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_SK02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_SK03']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_SK03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 11px; padding-bottom: 10px;"><?php echo $hasil['jml_SK04']; ?></td>
						<td style="padding-top: 11px; padding-bottom: 10px;"><?php echo $hasil['tot_SK04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_SK05']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_SK05']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_SK06']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_SK06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_SK07']; ?></td>
						<td><?php echo $hasil['jml_SK07']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_SK08']; ?></td>
						<td><?php echo $hasil['jml_SK08']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_SK09']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_SK09']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_SK10']; ?></td>
						<td><?php echo $hasil['jml_SK10']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<span><p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px;"><b>KODE : PP ( PENGETAHUAN )</b></p></span>
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
				$data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='PP'");
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
					<th style="text-align: center;">Jumlah</th>
					<th style="text-align: center;">Total</th>
				</tr>
				<?php
				$nokta=$_GET['id']; 
				$data = mysqli_query($connect, "SELECT * FROM hasil_cpl inner join total_cpl on total_cpl.nokta = hasil_cpl.nokta where hasil_cpl.nokta = $nokta");
				while($hasil = mysqli_fetch_array($data)){
					?>
					<tr align="center">
						<td><?php echo $hasil['jml_PP01']; ?></td>
						<td><?php echo $hasil['tot_PP01']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_PP02']; ?></td>
						<td><?php echo $hasil['tot_PP02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_PP03']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_PP03']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_PP04']; ?></td>
						<td><?php echo $hasil['tot_PP04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-bottom: 3px;"><?php echo $hasil['jml_PP05']; ?></td>
						<td style="padding-bottom: 3px;"><?php echo $hasil['tot_PP05']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_PP06']; ?></td>
						<td><?php echo $hasil['tot_PP06']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_PP07']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_PP07']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_PP08']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_PP08']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_PP09']; ?></td>
						<td><?php echo $hasil['tot_PP09']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['jml_PP10']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['tot_PP10']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_PP11']; ?></td>
						<td><?php echo $hasil['tot_PP11']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_PP12']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_PP12']; ?></td>
					</tr>
					<tr align="center">
						<td ><?php echo $hasil['jml_PP13']; ?></td>
						<td ><?php echo $hasil['tot_PP13']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_PP14']; ?></td>
						<td><?php echo $hasil['tot_PP14']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_PP15']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_PP15']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_PP16']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_PP16']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_PP17']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_PP17']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['jml_PP18']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['tot_PP18']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['jml_PP19']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['tot_PP19']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_PP20']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_PP20']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<span style="color: white;">-</span>
	<div class="">
		<div class="">
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px;"><b>KODE : KU ( KETERAMPILAN UMUM )</b></p>
			<table id="customers">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th style="text-align: left;">Keterangan</th>
				</tr>
				<?php 
				$no = 1;
				$data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='KU'");
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
					<th style="text-align: center;">Jumlah</th>
					<th style="text-align: center;">Total</th>
				</tr>
				<?php
				$nokta=$_GET['id']; 
				$data = mysqli_query($connect, "SELECT * FROM hasil_cpl inner join total_cpl on total_cpl.nokta = hasil_cpl.nokta where hasil_cpl.nokta = $nokta");
				while($hasil = mysqli_fetch_array($data)){
					?>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KU01']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KU01']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['jml_KU02']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['tot_KU02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 20px; padding-bottom: 17px;"><?php echo $hasil['jml_KU03']; ?></td>
						<td style="padding-top: 20px; padding-bottom: 17px;"><?php echo $hasil['tot_KU03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KU04']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KU04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KU05']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KU05']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KU06']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KU06']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_KU07']; ?></td>
						<td><?php echo $hasil['tot_KU07']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['jml_KU08']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['tot_KU08']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KU09']; ?></td> 
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KU09']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KU10']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KU10']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_KU11']; ?></td>
						<td><?php echo $hasil['tot_KU11']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 20px; padding-bottom: 17px;"><?php echo $hasil['jml_KU12']; ?></td>
						<td style="padding-top: 20px; padding-bottom: 17px;"><?php echo $hasil['tot_KU12']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KU13']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KU13']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>

	<div class="">
		<div class="">
			<br/>
			<p style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 12px;"><b>KODE : KK ( KETERAMPILAN KHUSUS )</b></p>
			<table id="customers">
				<tr>
					<th>No</th>
					<th>Kode</th>
					<th style="text-align: left;">Keterangan</th>
				</tr>
				<?php 
				$no = 1;
				$data = mysqli_query($connect, "SELECT * FROM konversi_cpl where kodeKompetensi='KK'");
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
					<th style="text-align: center;">Jumlah</th>
					<th style="text-align: center;">Total</th>
				</tr>
				<?php
				$nokta=$_GET['id']; 
				$data = mysqli_query($connect, "SELECT * FROM hasil_cpl inner join total_cpl on total_cpl.nokta = hasil_cpl.nokta where hasil_cpl.nokta = $nokta");
				while($hasil = mysqli_fetch_array($data)){
					?>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KK01']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KK01']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['jml_KK02']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['tot_KK02']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 20px; padding-bottom: 17px;"><?php echo $hasil['jml_KK03']; ?></td>
						<td style="padding-top: 20px; padding-bottom: 17px;"><?php echo $hasil['tot_KK03']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KK04']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KK04']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KK05']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KK05']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['jml_KK06']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['tot_KK06']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KK07']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KK07']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KK08']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KK08']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['jml_KK09']; ?></td> 
						<td style="padding-top: 12px; padding-bottom: 11px;"><?php echo $hasil['tot_KK09']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_KK10']; ?></td>
						<td><?php echo $hasil['tot_KK10']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_KK11']; ?></td>
						<td><?php echo $hasil['tot_KK11']; ?></td>
					</tr>
					<tr align="center">
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['jml_KK12']; ?></td>
						<td style="padding-top: 12px; padding-bottom: 10px;"><?php echo $hasil['tot_KK12']; ?></td>
					</tr>
					<tr align="center">
						<td ><?php echo $hasil['jml_KK13']; ?></td>
						<td ><?php echo $hasil['tot_KK13']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_KK14']; ?></td>
						<td><?php echo $hasil['tot_KK14']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_KK15']; ?></td>
						<td><?php echo $hasil['tot_KK15']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_KK16']; ?></td>
						<td><?php echo $hasil['tot_KK16']; ?></td>
					</tr>
					<tr align="center">
						<td><?php echo $hasil['jml_KK17']; ?></td>
						<td><?php echo $hasil['tot_KK17']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>

	<span style="color: white;">-</span>
	<br/>
	<br/>
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
	<?php  
	$sql = "SELECT * FROM asesor";
	$queryA=mysqli_query($connect, $sql);
	$asesor=mysqli_fetch_array($queryA);
	$asesor1 = $asesor['asesor_satu'];
	$asesor2 = $asesor['asesor_dua'];
	?>
	<div style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
		<table style="width: 50%; float: left; text-align: center;">
			<tr style="text-align: center;">
				<td>Asesor I</td>
			</tr>
			<tr style="text-align: center;">
				<td style="padding-top: 90px;">( <?php echo $asesor1;  ?> )</td>
			</tr>
		</table>

		<table style="width: 50%; float: right; text-align: center;">
			<tr style="text-align: center;">
				<td>Asesor II</td>
			</tr>

			<tr style="text-align: center;">
				<td style="padding-top: 90px;">( <?php echo $asesor2;  ?> )</td>
			</tr>
		</table>
	</div>

</body>
</html>

<?php

$html = ob_get_clean(); 
use Dompdf\Dompdf;
require_once ("../vendorPDF/autoload.php"); 
define("DOMPDF_UNICODE_ENABLED", true);
$dompdf = new Dompdf();
$dompdf->loadHtml($html); 
$dompdf->set_option('isRemoteEnabled', TRUE);
$dompdf->setPaper('legal', 'portrait'); 
$dompdf->render(); 
$dompdf->stream("Poin Kompetensi $nokta .pdf", array("Attachment" => false));

exit(0);

?>