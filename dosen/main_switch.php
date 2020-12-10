<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	
	case "dashboard" : include"dashboard.php"; break;
	case "profil" : include "profil.php"; break;
	case "profil_edit" : include "profil_edit.php"; break;

	case "soal" : include "soal.php"; break;
	case "soal_edit" : include "soal_edit.php"; break;

	case "hasil" : include "hasil.php"; break;
	case "dataHasil" : include "dataHasil.php"; break;
	case "nilaiMhs" : include "nilaiMhs.php"; break;
	case "hasilPenghargaan" : include "hasilPenghargaan.php"; break;
	case "konversiCpl" : include "konversiCpl.php"; break;
	// case "konversiTampil" : include "konversiTampil.php"; break;
	case "nilaiDetails" : include "nilaiDetails.php"; break;
	case "cetakIPK" : include "cetakIPK.php"; break;

	case "jumlahCpl": include "jumlahCpl.php"; break;
	case "jumlahTampil": include "jumlahTampil.php"; break;
	case "jumlahKompetensi": include "jumlahKompetensi.php"; break;
	case "totalKompetensi": include "totalKompetensi.php"; break;
	case "totalTampil": include "totalTampil.php"; break;
	case "resetCpl": include "resetCpl.php"; break;
	case "resetTotal": include "resetTotal.php"; break;

	case "mahasiswa_delete" : include "mahasiswa_delete.php"; break;
	case "mahasiswa_edit" : include "mahasiswa_edit.php"; break;
	case "buku" : include "mhsbuku.php"; break;
	case "buku_insert" : include "buku_input.php"; break;
	case "buku_delete" : include "buku_delete.php"; break;
	case "buku_edit" : include "buku_edit.php"; break;
	case "peminjamanmhs" : include "peminjamanmhs.php"; break;
	case "peminjaman_insert" : include "peminjaman_input.php"; break;
	case "peminjaman_delete" : include "peminjaman_delete.php"; break;
	case "peminjaman_edit" : include "peminjaman_edit.php"; break;

	case "viewpinjam" : include"viewpinjam.php"; break;

	case "mhsbuku" :include "mhsbuku.php"; break;

	case "profil" :include "profil.php"; break;
	case "profil_edit" : include "profil_edit.php"; break;
	
case 'main'	: default : include 'main.php';
}
?>