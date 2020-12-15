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

<?php
	$nokta=$_GET['id'];
	$sql = "SELECT * FROM profil WHERE nokta ='$nokta'";
	$query=mysqli_query($connect, $sql);
	$profil=mysqli_fetch_array($query);
	$fotoProfil = $profil['photo'];

	if (empty($fotoProfil)) {
		$fotoProfil = "tidak-ada.png";
	}
?>

<?php

function getImages($value)
{
	$path = $value;
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	return $base64;
}

$foto = getImages ('img_mhs/'.$fotoProfil);
$cover = getImages('../dosen/img_dsn/cover.png');
?>

<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>IPK Mahasiswa <?php echo $nama_lengkap; ?></title>
</head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

@media print {
	html, body {
		size: auto;
		width: 297mm;
		height: 210mm;
	}
}

body{
	background-image: url('<?php echo $cover?>');
	background-size:   cover;                      /* <------ */
	background-repeat: no-repeat;
	background-position: center center;            /* optionally, center the image */
}

* {
	box-sizing: border-box;
}

table, th, td {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	text-align: left;
}

#customers {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	/*border: 1px solid #ddd;*/
	border-collapse: collapse;
	width: 100%;
	/*float: right;*/
}

#customers td, #customers th {
	/*border: 1px solid #ddd;*/
	padding: 4px;
	/*text-align: center;*/
}

#customers tr:nth-child(even){background-color: #dddddd;}

#customers tr:hover {background-color: #ddd;}

#customers th {
	padding-top: 6px;
	padding-bottom: 6px;
	/*text-align: c;*/
	background-color: #fecd1a;
	color: black;
}

/* Create two equal columns that floats next to each other */
.column {
	float: left;
	width: 35%;
	padding: 10px;
	height: 300px; /* Should be removed. Only for demonstration */
	font-family: Arial, Helvetica, sans-serif;
}

.column-2 {
	float: left;
	width: 65%;
	height: 300px; /* Should be removed. Only for demonstration */
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}

.header {
	float: left;
	width: 25%;
	padding: 10px;
	font-family: Arial, Helvetica, sans-serif;
}

.header-2 {
	float: left;
	width: 60%;
	padding: 40px;
	font-family: Arial, Helvetica, sans-serif;
	
}

.footer {
	float: left;
	width: 30%;
	padding: 10px;
	font-family: Arial, Helvetica, sans-serif;
}

.footer-2 {
	float: left;
	width: 30%;
	padding: 5px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;	
}

.footer-3 {
	float: left;
	width: 40%;
	padding: 5px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;	
}
/* Clear floats after the columns */
.row:after {
	content: "";
	display: table;
	clear: both;
}
</style>

<body>

	<div class="row">
		<div class="header">
			<!-- <h1><?php echo $foto;?></h1> -->
			<img class="rounded float-left" style="padding-top: 20px; border-radius: 100%; padding-left: 20px;" src="<?php echo $foto;  ?>" width="130" />
		</div>
		<div class="header-2">
			<span style="font-size: 36px;"><?php echo $nama_lengkap ?></span>
			<br/>
			<span style="font-size: 28px;"><?php echo $nokta; ?></span>
		</div>
	</div>
	<div class="row">
		<div class="column">
			<br/>
			<table>
				<tr>
					<th>Tempat Lahir :</th>
				</tr>
				<tr>
					<td><?php echo $lahir; ?>, <?php echo date('d-m-Y', strtotime($tanggal)); ?></td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<th>Lembaga :</th>
				</tr>
				<tr>
					<td>Universitas Katolik Parahyangan</td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<th>Jabatan :</th>
				</tr>
				<tr>
					<td>Kepala Program Studi PPI</td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<th style="color: #93abd3; font-size: 18px;">CONTACT</th>
				</tr>
				<tr>
					<th>Telepon :</th>
				</tr>
				<tr>
					<td><?php echo $no_hp; ?></td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<th>Email :</th>
				</tr>
				<tr>
					<td><?php echo $email; ?></td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<th style="color: #93abd3; font-size: 18px;">PENDIDIKAN</th>
				</tr>
				<?php 
				$data = mysqli_query($connect, "SELECT * FROM datapendidikan1 WHERE nokta ='$nokta'");
				while($d = mysqli_fetch_array($data)){
					?>	
					<tr>
						<td><?php echo $d['gelar'];  ?>, <?php echo $d['jurusan']; ?> <br/><?php echo $d['perguruantinggi']; ?></td>
					</tr>
				<?php } ?>
			</table>
		</div>
		<div class="column-2">
			<p style="font-size: 16px;"><b>HASIL PENILAIAN AKADEMIK</b></p>
			<hr style="color: #93abd3" />
			<p>Berdasarkan assesmen capaian pembelajaran yang dilakukan pada :</p>
			<table>
				<tr>
					<td>Hari</td>
					<td>:</td>
					<td>Kamis</td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td>:</td>
					<td>10</td>
				</tr>
			</table>
			<p>Dihasilkan Nilai Berikut :</p>
			<table id="customers">
				<tr>
					<th>Kode</th>
					<th>Mata Kuliah</th>
					<th style="text-align: center;">Sks</th>
					<th style="text-align: center;">Nilai</th>
					<th style="text-align: center;">Indeks</th>
					<th style="text-align: center;">AA</th>
				</tr>
				<?php
				$data = mysqli_query($connect,"SELECT * FROM matakuliah INNER JOIN hasil_konversi ON hasil_konversi.mk = matakuliah.id WHERE hasil_konversi.nokta = $nokta");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $d['kodeMK']; ?></td>
						<td><?php echo $d['mata_kuliah']; ?></td>
						<td style="text-align: center;"><?php echo $d['sks']; ?></td>
						<td style="text-align: center;"><?php echo $d['nilai']; ?></td>
						<td style="text-align: center;"><?php echo $d['indeks']; ?></td>
						<td style="text-align: center;"><?php echo $d['nilai_mutu']; ?></td>
					</tr>
				<?php } ?>
			</table>

			<p>Oleh karena itu, mahasiswa yang tertera namanya dalam surat hasil assesmen ini memiliki : </p>
			<?php  
			$sql = "SELECT * FROM hasil_nilai WHERE nokta ='$nokta'";
			$query=mysqli_query($connect, $sql);
			$nilai=mysqli_fetch_array($query);
			$ipk = $nilai['ipk'];
			?>
			<p class="" style="font-size: 14px; background-color: #fecd1a; padding: 5px; float: left;"><b> IPK &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $ipk; ?></b></p>
			<br/>
			<br/>
			<p>Berkas hasil assesmen capaian pembelajaran disertakan sebagai lampiran yang menjadi salah satu kesatuan nilai akademik berikut.</p>
			<br/>
			<br/>
			<?php
			setlocale(LC_ALL, 'id_ID');
			$hariIni = new DateTime();
			?>
			<p style="float: right;">Bandung, <?php echo strftime('%d %B %Y', $hariIni->getTimestamp()); ?></p>
			<br/>
			<br/>
			<br/>
			<br/>
		</div>
	</div>
	<?php  
	$sql = "SELECT * FROM asesor";
	$queryA=mysqli_query($connect, $sql);
	$asesor=mysqli_fetch_array($queryA);
	$asesor1 = $asesor['asesor_satu'];
	$asesor2 = $asesor['asesor_dua'];
	?>
	<div class="row">
		<div class="footer">
		</div>
		<div class="footer-2">
			<p style="text-align: center;">Asesor I</p>
			<br/>
			<br/>
			<br/>
			<br/>
			<p style="text-align: center;">( <?php echo $asesor1; ?> )</p>
		</div>
		<div class="footer-3">
			<p style="text-align: center;">Asesor II</p>
			<br/>
			<br/>
			<br/>
			<br/>
			<p style="text-align: center;">( <?php echo $asesor2; ?> )</p>
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
$dompdf->setPaper('A4', 'portrait'); 
$dompdf->render(); 
$dompdf->stream("nilaiIPK.pdf", array("Attachment" => false));

exit(0);

?>