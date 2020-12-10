<?php 
include "../koneksi.php";
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

$foto = getImages ('img_dsn/rocket.png');
$cover = getImages('img_dsn/coverKU.jpg');
?>

<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>IPK Mahasiswa <?php echo $nama_lengkap; ?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<style type="text/css">

@media print {
	html, body {
		size: auto;
		width: 297mm;
		height: 210mm;
	}
}

p{
	color: black; 
	font-size: 36;
	font-family: Arial, Helvetica, sans-serif; 
}

.contens p{
	color: black; 
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}

.contens h4{
	color: #93abd3;
	font-size: 18px;
	font-family: Arial, Helvetica, sans-serif;
}

body{
	background-image: url('<?php echo $cover?>');
	background-size:   cover;                      /* <------ */
	background-repeat: no-repeat;
	background-position: center center;            /* optionally, center the image */
}

hr {
	/*margin-top: 1rem;*/
	/*margin-bottom: 1rem;*/
	border: 0;
	border-top: 1px solid #93abd3;
}

</style>

<body>
	<div class="container-fluid">
		<div class="">
			<div class="col-md-4">
				<img class="rounded float-left" style="padding-top: 20px; border-radius: 100%;" src="<?php echo $foto ?>" width="130">
			</div>
			<div class="col-md-8" style="padding-top: 30px; padding-left: 60px;">
				<p class=""><?php echo $nama_lengkap ?> <br/><span style="font-size: 28px;"><?php echo $nokta; ?></span></p>
			</div>
			<br/>
			<div class="col-sm-3" style="float: left;">
				<div class="contens">
					<p>Tempat Lahir : <br/><?php echo $lahir; ?>, <?php echo date('d-m-Y', strtotime($tanggal)); ?></p>
					<p>Lembaga : <br/>Universitas Katolik Parahyangan</p>
					<p>Jabatan : <br/>Kepala Program Studi PPI</p>
					<h4>CONTACT</h4>
					<p>Telepon : <br/><?php echo $no_hp; ?></p>
					<p>Email : <br/><?php echo $email;  ?></p>
					<h4>PENDIDIKAN</h4>
					<?php 
					$data = mysqli_query($connect, "SELECT * FROM datapendidikan1 WHERE nokta ='$nokta'");
					while($d = mysqli_fetch_array($data)){
						?>
						<p><?php echo $d['gelar'];  ?>, <?php echo $d['jurusan']; ?><br/><?php echo $d['perguruantinggi']; ?></p>
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-8" style="float: left; margin-left: 30px;">
				<div class="contens">
					<p style="font-size: 16px;"><b>HASIL PENILAIAN AKADEMIK</b></p>
					<hr/>
					<p>Berdasarkan assesmen capaian pembelajaran yang dilakukan pada :<br/>Hari &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; Kamis <br/>Tanggal &nbsp;: &nbsp; </p>
					<p>Dihasilkan Nilai Berikut :</p>
					<div class="table-responsive">
						<table class="table-sm" style="font-size: 11px;">
							<thead style="background-color: #fecd1a;">
								<tr>
									<th>Kode</th>
									<th>Mata Kuliah</th>
									<th class="text-center">Sks</th>
									<th class="text-center">Nilai</th>
									<th class="text-center">Indeks</th>
									<th class="text-center">AA</th>
								</tr>
							</thead>
							<tbody style="background-color: #eeeeee;">
								<?php
								$data = mysqli_query($connect,"SELECT * FROM matakuliah INNER JOIN hasil_konversi ON hasil_konversi.mk = matakuliah.id WHERE hasil_konversi.nokta = $nokta");
								while($d = mysqli_fetch_array($data)){
									?>
									<tr>
										<td><?php echo $d['kodeMK']; ?></td>
										<td><?php echo $d['mata_kuliah']; ?></td>
										<td class="text-center"><?php echo $d['sks']; ?></td>
										<td class="text-center"><?php echo $d['nilai']; ?></td>
										<td class="text-center"><?php echo $d['indeks']; ?></td>
										<td class="text-center"><?php echo $d['nilai_mutu']; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
					<br/>
					<p>Oleh karena itu, mahasiswa yang tertera namanya dalam surat hasil assesmen ini memiliki : </p>
					<?php  
					$sql = "SELECT * FROM hasil_nilai WHERE nokta ='$nokta'";
					$query=mysqli_query($connect, $sql);
					$nilai=mysqli_fetch_array($query);
					$ipk = $nilai['ipk'];
					?>
					<p class="col-sm-5" style="font-size: 16px; background-color: #fecd1a; padding: 5px;"><b> IPK &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $ipk; ?></b></p>
					<p>Berkas hasil assesmen capaian pembelajaran disertakan sebagai lampiran yang menjadi salah satu kesatuan nilai akademik berikut.</p>
					<?php
					setlocale(LC_ALL, 'id_ID');
					$hariIni = new DateTime();
					?>
					<p style="float: right;">Karawang, <?php echo strftime('%d %B %Y', $hariIni->getTimestamp()); ?></p>
					<br/>
					<br/>
					<p class="col-sm-5" style="text-align: center; float: left;">Asesor I</p>
					<p class="col-sm-5" style="text-align: center; float: right;">Asesor II</p>
					<br/>
					<br/>
					<br/>
					<p class="col-sm-5" style="text-align: center; float: right;">Nama Dosen</p>
					<p class="col-sm-5" style="text-align: center; float: left;">Nama Dosen</p>
				</div>
			</div>
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