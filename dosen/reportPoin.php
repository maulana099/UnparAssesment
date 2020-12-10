<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Report Data Jumlah CPL</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
	<style>
	@page { size: A4.landscape }

	h1 {
		font-weight: bold;
		font-size: 20pt;
		text-align: center;
	}

	table {
		border-collapse: collapse;
		width: 100%;
	}

	.table th {
		padding: 8px 8px;
		border:1px solid #000000;
		text-align: center;
	}

	.table td {
		padding: 3px 3px;
		border:1px solid #000000;
	}

	.text-center {
		text-align: center;
	}
</style>

</head>

<?php
setlocale(LC_ALL, 'id_ID');
// $hariIni = new DateTime();
?>

<body class="A4 landscape">
	
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Mahasiswa Unpar.xls");
	?>
	
	<section class="sheet padding-10mm">
		<table class="table">
			<h1 style="text-align: center; padding: 10px;">LAPORAN JUMLAH KOMPETENSI CPL MAHASISWA </h1>
			<thead class="thead-light">
				<tr class="text-center" style="background-color: #fecd1a;">
					<th>No</th>
					<th>No KTA</th>
					<th>Nama Lengkap</th>
					<!-- <th>Jenis Kelamin</th> -->
					<th>Tempat, Tgl Lahir</th>
					<th>ALamat</th>
					<th>Lembaga</th>
					<th>Kejuruan</th>
					<th>Email</th>
					<th>No Handphone</th>
				</tr>

				<?php 
				$no = 1;
				$data = mysqli_query($connect,"SELECT * FROM hasil_nilai");
				while($d = mysqli_fetch_array($data)){
					$tanggal = $d['tanggal_lahir'];
					?>
					<tr class="text-center">
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['nokta']; ?></td>
						<td><?php echo $d['nama_lengkap']; ?></td>
						<!-- <td><?php echo $d['jenis_kelamin']; ?></td> -->
						<td><?php echo $d['tempat_lahir']; ?>, <?php echo strftime('%d %B %Y', strtotime($tanggal)); ?></td>
						<td><?php echo $d['alamat_rumah']; ?></td>
						<td><?php echo $d['alamat_lembaga']; ?></td>
						<td><?php echo $d['kejuruan']; ?></td>
						<td><?php echo $d['email']; ?></td>
						<td><?php echo $d['nohp']; ?></td>
					</tr>
					<?php 
				}
				?>
			</table>
		</body>
		</html>

