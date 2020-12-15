<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	
	case "dashboard" : include"dashboard.php"; break;
	case "profil" : include "profil.php"; break;
	case "admin" : include "admin.php"; break;
	case "admin_edit" : include "edit_admin.php"; break;

	case "mahasiswa" : include "mahasiswa.php"; break;
	case "mahasiswa_edit" : include "edit_mahasiswa.php"; break;

	case "dosen" : include "dosen.php"; break;
	case "asesor" : include "asesor.php"; break;
	case 'editAsesor': include "editAsesor.php"; break;

	case "mataKuliah":
	include "mataKuliah.php";
	break;

	case "editMK":
	include "editMK.php";
	break;

	case "konversiCPL":
	include "konversiCPL.php";
	break;

	case "tambahakun" : include "tambahakun.php"; break;
	case "profil_edit" : include "profil_edit.php"; break;
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