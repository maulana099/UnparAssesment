<?php
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	
	case "dashboard" : include"dashboard.php"; break;
	case "profil" : include "profil.php"; break;
	case "profil_edit" : include "profil_edit.php"; break;
	case "mahasiswa_delete" : include "mahasiswa_delete.php"; break;
	case "mahasiswa_edit" : include "mahasiswa_edit.php"; break;
	case "pendidikan_edit" : include "editpendidikan.php"; break;
	case "pendidikan_delete" : include "hapuspendidikan.php"; break;
	case "organisasi_edit" : include "editorganisasi.php"; break;
	case "organisasi_delete" : include "hapusorganisasi.php"; break;
	case "editpenghargaan" : include "editpenghargaan.php"; break;
	case "deletepenghargaan" : include "hapuspenghargaan.php"; break;
	case "editpelatihan" : include "editpelatihan.php"; break;
	case "deletepelatihan" : include "hapuspelatihan.php"; break;
	case "editdatakualifikasi" : include "editdatakualifikasi.php"; break;
	case "deletedatakualifikasi" : include "hapusdatakualifikasi.php"; break;
	case "editkualifikasipengertian" : include "editkualifikasipengertian.php"; break;
	case "deletekualifikasipengertian" : include "hapuskualifikasipengertian.php"; break;
	case "editpengalamanmengajar" : include "editpengalamanmengajar.php"; break;
	case "deletepengalamanmengajar" : include "hapuspengalamanmengajar.php"; break;
	case "editpengalamanpenelitian" : include "editpengalamanpenelitian.php"; break;
	case "deletepengalamanpenelitian" : include "hapuspengalamanpenelitian.php"; break;
	case "editdatapengalamanpekerjaan" : include "editdatapengalamanpekerjaan.php"; break;
	case "deletedatapengalamanpekerjaan" : include "hapusdatapengalamanpekerjaan.php"; break;
	case "peminjamanmhs" : include "peminjamanmhs.php"; break;
	case "peminjaman_insert" : include "peminjaman_input.php"; break;
	case "peminjaman_delete" : include "peminjaman_delete.php"; break;
	case "peminjaman_edit" : include "peminjaman_edit.php"; break;
	case "datapribadi" : include "datapribadi.php"; break;
	case "isidatapribadi" : include "isidatapribadi.php"; break;
	case "editdatapribadi" : include "edit_datapribadi.php"; break;
	case "cekdatapribadi" : include "cekdatapribadi.php"; break;
	case "viewpinjam" : include "viewpinjam.php"; break;
	case "datapendidikan" : include "datapendidikan.php"; break;
	case "isidatapendidikan" : include "isidatapendidikan.php"; break;
	case "dataorganisasi" : include "dataorganisasi.php"; break;
	case "isidataorganisasi" : include "isidataorganisasi.php"; break;
	case "datapenghargaan" : include "datapenghargaan.php"; break;
	case "isidatapenghargaan" : include "isidatapenghargaan.php"; break;

	case "datapelatihan" : include "datapelatihan.php"; break;
	case "isidatapelatihan" : include "isidatapelatihan.php"; break;

	case "datakualifikasi" : include "datakualifikasi.php"; break;
	case "isidatakualifikasi" : include "isidatakualifikasi.php"; break;

	case "datakualifikasipengertian" : include "datakualifikasipengertian.php"; break;
	case "isidatakualifikasipengertian" : include "isidatakualifikasipengertian.php"; break;

	case "datapengalamanmengajar" : include "datapengalamanmengajar.php"; break;
	case "isidatapengalamanmengajar" : include "isidatapengalamanmengajar.php"; break;

	case "datapengalamanpenelitian" : include "datapengalamanpenelitian.php"; break;
	case "isidatapengalamanpenelitian" : include "isidatapengalamanpenelitian.php"; break;

	case "datapengalamanpekerjaan" : include "datapengalamanpekerjaan.php"; break;
	case "isidatapengalamanpekerjaan" : include "isidatapengalamanpekerjaan.php"; break;

	case "datamanajemenusaha" : include "datamanajemenusaha.php"; break;
	case "isidatamanajemenusaha" : include "isidatamanajemenusaha.php"; break;
	case "editdatamanajemenusaha" : include "editdatamanajemenusaha.php"; break;
	case "deletedatamanajemenusaha" : include "hapusdatamanajemenusaha.php"; break;

	case "datainovasikarya" : include "datainovasikarya.php"; break;
	case "isidatainovasikarya" : include "isidatainovasikarya.php"; break;
	case "editdatainovasikarya" : include "editdatainovasikarya.php"; break;
	case "deletedatainovasikarya" : include "hapusdatainovasikarya.php"; break;

	case "datainovasimakalah" : include "datainovasimakalah.php"; break;
	case "isidatainovasimakalah" : include "isidatainovasimakalah.php"; break;
	case "editdatainovasimakalah" : include "editdatainovasimakalah.php"; break;
	case "deletedatainovasimakalah" : include "hapusdatainovasimakalah.php"; break;

	case "dataseminarkeinsinyuran" : include "dataseminarkeinsinyuran.php"; break;
	case "isidataseminarkeinsinyuran" : include "isidataseminarkeinsinyuran.php"; break;
	case "editdataseminarkeinsinyuran" : include "editdataseminarkeinsinyuran.php"; break;
	case "deletedataseminarkeinsinyuran" : include "hapusdataseminarkeinsinyuran.php"; break;

	case "datainovasiteknologi" : include "datainovasiteknologi.php"; break;
	case "isidatainovasiteknologi" : include "isidatainovasiteknologi.php"; break;
	case "editdatainovasiteknologi" : include "editdatainovasiteknologi.php"; break;
	case "deletedatainovasiteknologi" : include "hapusdatainovasiteknologi.php"; break;

	case "databahasa" : include "databahasa.php"; break;
	case "isidatabahasa" : include "isidatabahasa.php"; break;
	case "editdatabahasa" : include "editdatabahasa.php"; break;
	case "deletedatabahasa" : include "hapusdatabahasa.php"; break;

	case "datapelatihanlain" : include "datapelatihanlain.php"; break;
	case "isidatapelatihanlain" : include "isidatapelatihanlain.php"; break;
	case "editpelatihanlain" : include "editpelatihanlain.php"; break;
	case "deletepelatihanlain" : include "hapuspelatihanlain.php"; break;

	case "mhsbuku" :include "mhsbuku.php"; break;
	case "profil" :include "profil.php"; break;
	case "profil_edit" : include "profil_edit.php"; break;
	
	case "totalKompetensi": include "totalKompetensi.php"; break;
	case "poinKompetensi": include "poinKompetensi.php"; break;
	case "nilaiKompetensi": include "nilaiKompetensi.php"; break;
	
case 'main'	: default : include 'main.php';
}
?>