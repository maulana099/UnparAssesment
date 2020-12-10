<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Report Data Dosen</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
	<style>
	@page { size: A4 }

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

<body class="A4">
	
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Dosen Unpar.xls");
	?>
	
	<section class="sheet padding-10mm">
	<table class="table">
	<h1 style="text-align: center; padding: 10px;">LAPORAN DATA DOSEN UNIVERSITAS KATOLIK PARAHYANGAN </h1>
		<thead class="thead-light">
			<tr class="text-center" style="background-color: #fecd1a;">
				<th>No</th>
				<th>No KTA</th>
				<th>Nama Lengkap</th>
				<th>Jenis Kelamin</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
			<?php 
			$no = 1;
			$data = mysqli_query($connect,"SELECT * FROM profil where level='dosen'");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr class="text-center">
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nokta']; ?></td>
					<td><?php echo $d['nama_lengkap']; ?></td>
					<td><?php echo $d['jenis_kelamin']; ?></td>
					<td><?php echo $d['username']; ?></td>
					<td><?php echo $d['password']; ?></td>
				</tr>
				<?php 
			}
			?>
		</table>
	</body>
	</html>