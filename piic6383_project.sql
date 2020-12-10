-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2020 pada 03.20
-- Versi server: 10.1.21-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piic6383_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahasa`
--

CREATE TABLE `bahasa` (
  `id` int(11) NOT NULL,
  `nokta` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nama_bahasa` varchar(150) NOT NULL,
  `kemampuan` varchar(200) NOT NULL,
  `tulisan` varchar(200) NOT NULL,
  `toefl` varchar(200) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahasa`
--

INSERT INTO `bahasa` (`id`, `nokta`, `nama_lengkap`, `nama_bahasa`, `kemampuan`, `tulisan`, `toefl`, `kompetensi`, `bukti_berkas`) VALUES
(3, '147263192', 'Jorke Alkawiyu', '', 'Inggris', 'Inggris', '490', 'SK1, SK2', '0'),
(5, '10101001', 'Ilham Azis Annaba', 'aswfewfwe', 'as', 'as', 'as', 'sa', 'Bengle.jpg'),
(6, '7202007055', 'EDIYANTO ARIEF', 'INDONESIA', 'AKTIF', 'TESIS, JURNAL PUBLIKASI', '', '', ''),
(7, '7202007055', 'EDIYANTO ARIEF', 'INGGRIS', 'AKTIF', 'TESIS, JURNAL PUBLIKASI', '506', '', '7 TOEFL.pdf'),
(8, '7202007024', 'ALIM YUANDIA', 'Indonesia', 'Aktif', 'Jurnal', '-', '', ''),
(9, '7202007049', 'ABDUL HARIS', 'Indonesia ', 'Aktif', 'Korespondesi, Makalah, Laporan ', '', '', ''),
(10, '7202007049', 'ABDUL HARIS', 'Inggris', 'Aktif', 'Korespondesi, Makalah, Laporan ', '', '', ''),
(11, '7202007086', 'ALEXANDER DIAN SUKIRNO', 'English', 'Verbal Aktif', 'Baik dalam penulisan', '82 (Toefl iBT)', 'Intermediate', ''),
(12, '7202007086', 'ALEXANDER DIAN SUKIRNO', 'Dutch', 'Pasif', 'Basic', 'N/A', 'Dasar', ''),
(13, '7202007070', 'EUFRAT AGRIZASYAH', 'Bahasa Inggris', 'Aktif', '', '', '', ''),
(14, '7202007051', 'AKHMAD MUSTAQIM', 'Indonesia', 'Aktif', 'Makalah, Jurnal, Laporan', '', '', ''),
(15, '7202007051', 'AKHMAD MUSTAQIM', 'Inggris', 'Aktif', 'Makalah, Jurnal, Laporan', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakualifikasi`
--

CREATE TABLE `datakualifikasi` (
  `id` int(150) NOT NULL,
  `nokta` int(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `nama_tempat` varchar(200) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `uraian` varchar(220) NOT NULL,
  `kompetensi` varchar(150) NOT NULL,
  `bukti_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datakualifikasi`
--

INSERT INTO `datakualifikasi` (`id`, `nokta`, `nama_lengkap`, `tahun`, `nama_tempat`, `jabatan`, `uraian`, `kompetensi`, `bukti_berkas`) VALUES
(1, 147263192, 'Jorke Alkawiyu', '2020', 'Program Studi Teknik Kimia UNPAR, Studi Pabrik di Jakarta dan Cilegon', 'Ketua Umum', 'Memimpin studi pabrik mahasiswa.\r\nMengawasi jalannya studi pabrik.\r\nMenjalin kerjasama dengan industri.\r\n', 'PP 01 - 20 KU 01, KU 02, KU 03, KU 04, KU 05, KU 0', '0'),
(2, 147263192, 'Jorke Alkawiyu', '2019', 'Universitas Negeri Jakarta', 'Dekan', 'Menjalankan program kerja', 'SK1, SK2, KK1, KK2', '0'),
(3, 10101001, 'Ilham Azis Annaba', 'a', 'a', 'a', 'a', 'aaaa', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakualifikasipengertian`
--

CREATE TABLE `datakualifikasipengertian` (
  `id` int(100) NOT NULL,
  `nokta` varchar(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `pengertian_keinsinyuran` varchar(250) NOT NULL,
  `kompetensi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datakualifikasipengertian`
--

INSERT INTO `datakualifikasipengertian` (`id`, `nokta`, `nama_lengkap`, `pengertian_keinsinyuran`, `kompetensi`) VALUES
(1, '147263192', 'Jorke Alkawiyu', 'Insinyur adalah seseorang yang dalam melaksanakan profesinya menggunakan pengetahuan matematika dan pengetahuan alam, yang diperoleh dari pendidikan, pengalaman dan pelatihan, untuk secara ekonomis mengubah dan mengembangkan suatu bahan', 'SK 01, SK 02, SK 03, SK 04, SK 05, SK 06, SK 07'),
(2, '7202007055', 'EDIYANTO ARIEF', 'Kode etik Insinyur : Adalah menjalankan tugas profesi berdasarkan pengetahuan dan keahlian di bidangnya, dengan menjunjung tinggi norma yang berlaku di masyarakat. Menghargai dan menghormati rekan seprofesi, dan siap bekerja sama dengan tenaga ahli y', ''),
(3, '7202007056', 'RIZAL', 'Kode Etika profesi bertujuan untuk memberikan suatu jaminan pelayanan yang bersifat professional terhadap masyarakat, hal tersebut hanya bisa dilakukan apabila seseorang memiliki keahlian dan keterampilan yang mumpuni dan secara keteknikan bisa diter', ''),
(4, '7202007038', 'ASEP RACHMATULLAH', 'Pengertian Kode Etik Insinyur Indonesia adalah suatu sistem norma, nilai serta aturan keinsinyuran tertulis yang dengan secara tegas menyatakan apa yang benar serta baik, dan juga apa yang tidak benar serta tidak baik bagi semua insinyur Indonesia.', ''),
(6, '7202007038', 'ASEP RACHMATULLAH', 'Kode etik tersebut menyatakan perbuatan apa yang benar atau salah, perbuatan apa yang harus dilakukan serta juga apa yang harus dihindari.', ''),
(7, '7202007038', 'ASEP RACHMATULLAH', 'Pendapat tentang Kode Etik Insinyur adalah pada dasarnya kode etik memiliki fungsi ganda yaitu sebagai perlindungan dan pengembangan bagi profesi insinyur. ', ''),
(8, '7202007038', 'ASEP RACHMATULLAH', 'Fungsi seperti itu yang lebih mementingkan pada kode etik sebagai pedoman pelaksanaan tugas prosefional dan pedoman bagi masyarakat sebagai seorang insinyur.', ''),
(9, '7202007038', 'ASEP RACHMATULLAH', 'Tiga fungsi kode etik yaitu : melindungi suatu profesi insinyur dari campur tangan pemerintah, mencegah terjadinya pertentangan internal dalam suatu profesi insinyur, dan melindungi para praktisi dari kesalahan praktik suatu profesi insinyur.', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataorganisasi`
--

CREATE TABLE `dataorganisasi` (
  `id` int(50) NOT NULL,
  `nokta` varchar(100) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nama_organisasi` varchar(200) NOT NULL,
  `periode` varchar(100) NOT NULL,
  `aktifitas_jabatan` varchar(200) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dataorganisasi`
--

INSERT INTO `dataorganisasi` (`id`, `nokta`, `nama_lengkap`, `nama_organisasi`, `periode`, `aktifitas_jabatan`, `kompetensi`, `bukti_berkas`) VALUES
(2, '1841625510', 'Didin Maulana Aksan', 'Himatif', '2018-2019', 'Wakil Ketua Umum', 'SK 01, SK 02, SK 03, SK 04, SK 06,SK07', '0'),
(6, '10101001', 'Ilham Azis Annaba', 'BEM', '2910', 'Tes', 'SK 1, SK 2', '0'),
(7, '147263192', 'Jorke Alkawiyu', 'aa', 'aa', 'aa', 'aa', '0'),
(9, '10101001', 'Ilham Azis Annaba', 'aaa', 'aa', 'a', 'a', ''),
(10, '7202007038', 'ASEP RACHMATULLAH', 'DPP INKINDO BANTEN', '2012-2016', 'Sekretaris bsan', '', ''),
(11, '7202007056', 'RIZAL', 'INKINDO', '', 'sebagai anggota INKINDO', '', ''),
(12, '7202007042', 'BUDI JUWONO SUWITOATMODJO', 'PERSATUAN INSINYUR INDONESIA', '2016', 'ANGGOTA', '', ''),
(13, '7202007038', 'ASEP RACHMATULLAH', 'DPP INKINDO BANTEN', '2016-2020', '     Bendahara 3', '', 'SK DPN 2016-2020_003.jpg'),
(14, '7202007038', 'ASEP RACHMATULLAH', 'DPD ASPEKNAS BANTEN', '2012-2017', '  Anggota Dewan Ahli', '', 'SK DPP ASPEKNAS TENTANG   PERPANJANGAN SK DPD ASPEKNAS BANTEN_004.jpg'),
(15, '7202007038', 'ASEP RACHMATULLAH', 'DPD ASPEKNAS BANTEN', '2018-2023', '   Anggota Dewan Ahli', '', 'SK_ DPD BANTEN 2018-2023_004.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapelatihan`
--

CREATE TABLE `datapelatihan` (
  `id` int(50) NOT NULL,
  `nokta` varchar(100) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `nama_pelatihan` varchar(200) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `uraian` varchar(220) NOT NULL,
  `jenis_pelatihan` varchar(100) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapelatihan`
--

INSERT INTO `datapelatihan` (`id`, `nokta`, `nama_lengkap`, `nama_pelatihan`, `tahun`, `jumlah`, `uraian`, `jenis_pelatihan`, `kompetensi`, `bukti_berkas`) VALUES
(1, '147263192', 'Jorke Alkawiyu', 'Workshop Ekonomi', '2020', '5 Hari', 'Menghadiri workshop dengan tema ekonomi', 'Manajemen', 'SK1, SK2, SK3', ''),
(2, '147263192', 'Jorke Alkawiyu', 'Pelatihan penanaman padi', '2017', '7 Hari', 'Pelatihan penanaman padi dengan baik dan benar', 'Pertanian', 'KU1, KU2, KU3', ''),
(3, '10101001', 'Ilham Azis Annaba', 'Worksop Android Dev', '2020', '8 Jam', 'Melakukan workshop dengan tatap muka langsung praktik tentang android dev', 'Komputer', 'SK1, SK2. SK3. KK8, KK9, KK10', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapelatihanlain`
--

CREATE TABLE `datapelatihanlain` (
  `id` int(100) NOT NULL,
  `nokta` int(150) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `nama_pelatihan` varchar(200) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `uraian` varchar(250) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapelatihanlain`
--

INSERT INTO `datapelatihanlain` (`id`, `nokta`, `nama_lengkap`, `nama_pelatihan`, `tahun`, `jumlah`, `uraian`, `kompetensi`, `bukti_berkas`) VALUES
(18, 2147483647, 'ASEP RACHMATULLAH', 'Webinar Engineering Institute dan PII Yogyakarta', '2020', '8', 'Keadaan Kahar (Covid-19) dalam Kontrak Konstruksi Berbasis Best Practice FIDIC Condition of Contract dan Peraturan Indonesia Terkait', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapendidikan1`
--

CREATE TABLE `datapendidikan1` (
  `id` int(50) NOT NULL,
  `nokta` varchar(100) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `tingkatpendidikan` varchar(100) NOT NULL,
  `perguruantinggi` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `tahunlulus` varchar(50) NOT NULL,
  `gelar` varchar(50) NOT NULL,
  `judulta` varchar(100) NOT NULL,
  `deskripsita` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapendidikan1`
--

INSERT INTO `datapendidikan1` (`id`, `nokta`, `nama_lengkap`, `tingkatpendidikan`, `perguruantinggi`, `fakultas`, `jurusan`, `kota`, `negara`, `tahunlulus`, `gelar`, `judulta`, `deskripsita`) VALUES
(1, '10101001', 'Ilham Azis', 'S2', 'Universitas Buana Perjuangan Karawang', 'Fakultas Ekonomi', 'Ekonomi Terapan', 'Karawang', 'Indonesia', '2018', 'M.E', 'Peran Ekonomi Terapan ', 'Menjabarkan peran ekonomi terapan di indonesia'),
(3, '10101001', 'Ilham Azis', 'S1', 'Universitas', 'FTIK', 'Teknik Informatika', 'Karawang', 'Indonesia', '2020', 'S.Kom', 'Keamanan Pintu', 'Menjaga pintu buat maling'),
(4, '1841625510', 'Didin Maulana Aksan', 'S1', 'Unsika', 'Fakultas Hukum', 'Hukum', 'Karawang', 'Indonesia', '2019', 'S.H', 'Hukum Omnibuslaw', 'Penerapan Omnibuslaw'),
(5, '10101001111', 'Ilham Azis', 'S2', 'UBP', 'FBIS', 'PGSD', 'Karawang', 'Indonesia', '2020', 'S.Pd', 'Pendidikan Usia Dini', 'Menjelaskan Pendidikan Usia Dini'),
(6, '1841625510', 'Didin Maulana Aksan', 'S2', 'Universitas Budi Luhur', 'Fakultas Hukum', 'Hukum', 'Jakarta', 'Indonesia', '2020', 'M.H', 'Hukum UUD45', 'Penerapan UUD45'),
(7, '147263192', 'Jorke Alkawiyu', 'S1', 'Universitas Purworejo', 'Fakultas Teknik', 'Teknik Industri', 'Purworejo', 'Indonesia', '2015', 'S.T', 'Teknik Perindustrian', 'Mekanisme perindustrian'),
(9, '7202007016', 'ELSA NOVIANTI', 'S1', 'Universitas Katolik Parahyangan', 'Teknologi Industri', 'Teknik Kimia', 'Bandung', 'Indonesia', '2006', 'Sarjana Teknik (S.T.)', 'Produksi Sirup Glukosa Berbahan Baku Dextrin', 'Produksi sirup glukosa berbahan baku dextrin menggunakan enzim glukoamilase. Selain berbahan dasar tuba, pemanis makanan dapat dihasilkan dari dextrin. Dextrin di alam dapat diperoleh dari tumbuhan um'),
(10, '7202007016', 'ELSA NOVIANTI', 'S2', 'University of Sydney', 'Engineering', 'Chemical Engineering', 'Sydney', 'Australia', '2011', 'Master of Professional Engineering (M.P.E.)', 'Techno-economic Feasibility Study of Energy Storage Use to Increase Wind Farm Utilisation', 'Studi kelayakan penggunaan baterai sebagai penyimpan energi yang dihasilkan dari Pembangkit Listrik Tenaga Angin. Di Australia, harga listrik fluktuatif bergantung pada permintaan. Untuk meningkatkan '),
(11, '7202007055', 'EDIYANTO ARIEF', 'S1', 'INSTITUT TEKNOLOGI NASIONAL BANDUNG', 'TEKNIK SIPIL & PERENCANAAN', 'TEKNIK SIPIL', 'BANDUNG', 'INDONESIA', '1997', 'sarjana teknik', 'Aplikasi Model Hidrologi NRECA Dalam Pemanfaatan Sumber Daya Air Di DAS Air Klingi Kabupaten Musi Ra', 'Menghitung ketersediaan air, dengan menggunakan model Hidrologi dikarenakan  data hujan yang terbatas. Peruntukan air untuk industri, rumah tangga, dan irigasi.'),
(13, '7202007055', 'EDIYANTO ARIEF', 'S2', 'UNIVERSITAS GADJAH MADA', 'TEKNOLOGI PERTANIAN', 'MEKANISASI PERTANIAN', 'YOGYAKARTA', 'INDONESIA', '2000', 'MAGISTER PERTANIAN', 'Aplikasi Model ANSWERS dan AGNPS Untuk Memprediksi Aliran Permukaan, Erosi, Dan Sedimentasi di DAS B', 'Membandingkan dan mengaplikasi dua model Hidrologi, untuk menghitung banjir, tingkat erosi dan sedimentasi. Tingkat sedimentasi akan mempengaruhi umur waduk. Selain itu juga menilai kandungan kimia ya'),
(14, '7202007055', 'EDIYANTO ARIEF', 'S1', 'UNIVERSITAS ESA UNGGUL', 'HUKUM', 'HUKUM', 'JAKARTA', 'INDONESIA', '2019', 'SARJANA HUKUM', 'Disparitas Sanksi Pidana terhadap Tindak Pidana Korupsi yang Dilakukan Secara Bersama-sama antara Pe', 'Pada pasal 2 dan 3 UU Tipikor, ada disparitas, padahal unsur-unsur perbuatan melawan hukum pada kedua pasal itu mirip sekali. Pasal 2 minimum hukuman 4 tahun sedangkan pasal 3 minimum hukuman 1 tahun,'),
(15, '7202007055', 'EDIYANTO ARIEF', 'S2', 'UNIVERSITAS MERCU BUANA', 'PROGRAM MAGISTER', 'MAGISTER TEKNIK SIPIL', 'JAKARTA', 'INDONESIA', '2020', 'MAGISTER TEKNIK SIPIL', 'Analisis Perbandingan Model Kontrak APBN dan APBD Terhadap Model Kontrak FIDIC', 'Kontrak konstruksi adalah salah satu jaminan untuk memastikan keberhasilan proyek, oleh karena itu klausula-klausula nya harus efisien, adil dan berimbang. Makalah ini terdiri dari perbandingan Syarat'),
(16, '7202007069', 'ARIANI CHITRA LESTARI', 'S-1', 'Universitas Katolik Parahyangan', 'Teknik', 'Teknik Sipil', 'Bandung', 'Indonesia', '2017', 'ST', '', ''),
(17, '7202007070', 'EUFRAT AGRIZASYAH', 'S1', 'UNPAR', 'TEKNIK', 'TEKNIK SIPIL', 'BANDUNG', 'INDONESIA', '1997', 'ST', 'STUDI PENGARUH TEBAL BANTAL GEOTEKSTIL PADA KAPASITAS DAYA DUKUNG MODEL PONDASI TELAPAK DI ATAS TANA', 'Pengaruh Tebal Bantal Geotekstil tidak menjadi faktor utama peningkatan daya dukung model pondasi telapak'),
(18, '7202007063', 'DWI NANDYA YULINDA', 'SARJANA TEKNIK SIPIL', 'UNIVERSITAS KATOLIK PARAHYANGAN', 'TEKNIK', 'TEKNIK SIPIL', 'BANDUNG', 'INDONESIA', '2004', 'ST', 'ANALISIS TINGKAT KEAMANAN BENDUNGAN BERDASARKAN HASIL PEMANTAUAN INSTRUMENTASI PADA BENDUNGAN SERMO ', 'Menentukan tingkat keamanan bendungan (FK) berdasarkan pemantauan alat-alat instrumentasi geoteknik. Instrumentasi geoteknik ini terdiri dari : piezometer (tekanan air pada tubuh bendungan), inklinome'),
(20, '7202007024', 'ALIM YUANDIA', 'Strata 1', 'Universitas Gadjah Mada', 'Teknik', 'Teknik Mesin', 'Yogyakarta', 'Indonesia', '2016', 'S.T.', 'Studi Eksperimental Pengaruh Split Ratio, Kecepatan Aliran Masuk dan Diameter Vortex Finder terhadap', 'Pemisahan campuran dua liquid dengan fasa yang berbeda dengan menggunakan alat yang dinamakan Liquid - liquid Cylindrical Cyclone. Alat tersebut didesain untuk dapat menciptakan aliran turbulence pada'),
(21, '7202007049', 'ABDUL HARIS', 'S1- Mesin', 'Sekolah Tinggi Teknik - YPLN ', 'Teknik', 'Teknik Mesin', 'Jakarta Selatan', 'Indonesia', '2000', 'Sarjana Teknik', 'Analisa Debit Aliran Pendingin Kondensor Pada Kondisi Beban Penuh (200 MW) PLTU Gresik Unit III ', 'Optimasi Operasi dengan pengaturan aliran Pendingin Kondensor untuk mendapatkan vakum dan performance condensor yang optimal dan efisiensiTurbine uap dan kondensor untuk mendapatkan efisiensi Pembangk'),
(22, '7202007049', 'ABDUL HARIS', 'S1- Mesin', 'Sekolah Tinggi Teknik - YPLN ', 'Teknik', 'Teknik Mesin', 'Jakarta Selatan', 'Indonesia', '2000', 'Sarjana Teknik', 'Analisa Debit Aliran Pendingin Kondensor Pada Kondisi Beban Penuh (200 MW) PLTU Gresik Unit III ', 'Optimasi Operasi dengan pengaturan aliran Pendingin Kondensor untuk mendapatkan vakum dan performance condensor yang optimal dan efisiensiTurbine uap dan kondensor untuk mendapatkan efisiensi Pembangk'),
(23, '7202007038', 'ASEP RACHMATULLAH', 'S1', 'Institut Teknologi Nasional', 'Teknologi Industri', 'Teknik dan Manajemen Industri', 'Bandung', 'Indonesia', '1999', 'Sarjana Teknik (S.T.)', 'Peramalan Jumlah Rangkaian Gerbong KA Parahyangan Bandung Jakarta', 'Menentukan penjadwal jumlah rangkaian gerbong penumpang KA selama satu tahun dengan melihat tingkat okupasinya.'),
(24, '7202007038', 'ASEP RACHMATULLAH', 'S2', 'Universitas Mercu Buana', 'Pasca Sarjana', 'Magister Teknik Sipil', 'Jakarta', 'Indonesia', '2020', 'Magister Teknik Sipil (M.T.)', 'Analisis Diterimanya Klaim Perpanjangan Waktu dan Tambahan Biaya pada Proyek Bangunan Air', 'Menganalisa klaim-klaim apa saja yang diajukan kontraktor pada pemberi pekerjaan sehingga dapat diminimasi atau bahkan dihindari pada proses pelaksanaan pekerjaan selanjutnya.'),
(25, '7202007056', 'RIZAL', 'Magister Teknik', 'Universitas Krisnadwipayana', 'Fakultas Teknik', 'Kajian Pembangunan Perkotaan dan Wilayah', 'Jakarta', 'Indonesia', '2019', 'Magister Teknik', 'Kajian Strategi Pencapaian Ruang Terbuka Hijau di Kota Tangerang', 'Mengkaji permasalahan dan strategi pencapaian ruang terbuka hijau di Kota Tangerang diantara dengan pendekatan perhitungan GIS dan sosial '),
(26, '7202007056', 'RIZAL', 'Sarjana Teknik', 'Institut Teknologi Nasional ', 'Fakultas Teknik', 'Teknik Planologi', 'Bandung', 'Indonesia', '2005', 'Sarjana Teknik', 'Arahan Lokasi Fasilitas Pendidikan Tingkat SLTP Kota Cilegon', 'Menentukan lokasi fasilitas pendidikan tingkat SLTP dengan menggunakan model P-Median'),
(29, '7202007085', 'NORO KARTEDJO', 'Strata 2', 'Universitas Katolik Parahyangan', 'Magister Teknik Sipil', 'Geoteknik', 'Bandung', 'Indonesia', '2011', 'Magister Teknik Sipil', '', ''),
(30, '7202007021', 'FERDYAN HIJRAH KUSUMA', 'SARJANA', 'INSTITUT TEKNOLOGI SEPULUH NOPEMBER (ITS)', 'FAKULTAS TEKNIK SIPIL DAN PERENCANAAN', 'TEKNIK LINGKUNGAN', 'SURABAYA', 'INDONESIA', '2008', 'SARJANA TEKNIK (S.T.)', 'PENELITIAN PENYISIHAN AMMONIA (NH3) PADA LIMBAH CAIR BUATAN DENGAN TEKNOLOGI AIR STRIPPING', 'Melakukan simulasi terhadap penyisihan zat Ammonia (NH3) yang umumnya berada pada limbah cair domestik. Penyisihan Ammonia ini dilakukan dengan teknologi Air Strippng, yaitu dengan mengkontakkan limba'),
(31, '7202007071', 'AGIL DARMAWAN', 'Strata - 1', 'Universitas Gadjah Mada', 'Teknik', 'Teknik Mesin', 'Yogyakarta', 'Indonesia', '2008', 'ST', 'Perancangan pompa untuk penanganan limbah cair dengan head 20 M dan kapasitas 30 m3/jam', 'Design pompa sentrifugal yang digunakan pada instalasi pengolahan limbah cair dengan head 20 M dan kapasitas 30 m3/jam. Pompa ini menggunakan material cast iron untuk rumah pompa nya dan didesign untu'),
(32, '7202007042', 'BUDI JUWONO SUWITOATMODJO', 'S1', 'UNIVERSITAS KATOLIK PARAHYANGAN', 'TEKNIS', 'SIPIL', 'BANDUNG', 'INDONESIA', '1977', 'SARJANA TEKNIK', 'TUBE STRUCTURE', 'Highrise Building memerlukan shearwall. Tube Structure System menempatkan shearwall ditengah bangunan. Selain berfungsi sebagai shearwall juga sebagai core elevator dan tangga darurat sangat efisien'),
(33, '7202007042', 'BUDI JUWONO SUWITOATMODJO', 'S1', 'UNIVERSITAS KATOLIK PARAHYANGAN', 'TEKNIK', 'SIPIL', 'BANDUNG', 'INDONESIA', '1977', 'SARJANA TEKNIK', 'TUBE STRUCTURE', 'Highrise Building memerlukan shearwall. Tube Structure System menempatkan shearwall ditengah bangunan. Selain berfungsi sebagai shearwall juga sebagai core elevator dan tangga darurat sangat efisien'),
(34, '7202007086', 'ALEXANDER DIAN SUKIRNO', '', 'Universitas Katolik Parahyangan', 'Teknik', 'Teknik Sipil', 'Bandung', 'Indonesia', '2002', 'ST', 'Penentuan Nilai Adhesi Antara Permukaan Batuan and RCC pada Insitu Blok Geser Testing, Study Kasus T', 'Pengujian lapangan blok geser di dalam terowongan batuan adit di PLTA Cisokan'),
(35, '7202007009', 'YOHANES KARYADI KUSLIANSJAH', 'Sarjana Teknik Arsitektur/ Ir.', 'Universitas Katolik Parahyangan', 'Fakultas Teknik', 'Sarjana Arsitektur', 'Bandung', 'Indonesia', '1981', 'Sarjana Teknik Arsitektur/ Ir.', 'Gedung Kesenian di Bandung', 'Tujuan  Tugas akhir Arsitektur: Perancangan kompleks fasilitas pagelaran pertunjukan kesenian  dan fasilitas pendukungnya di kota Bandung, berlokasi di tapak Kompleks Kologdam III/Siliwangi (Jaarbeurs'),
(36, '7202007009', 'YOHANES KARYADI KUSLIANSJAH', 'Magister Arsitektur/ M.T.', 'Universitas Katolik Parahyangan', 'Pascasarjana', 'Prodi Magister Arsitektur', 'Bandung', 'Indonesia', '1997', 'Magister Arsitektur/ M.T.', 'Rasionalitas Muatan dan Tatanan Ruang Kota Kawasan Fungsi Komersial Pusat Kota Bandung', 'Penelitian Tesis Magister Arsitektur ini bertujuan menstudi kasus perkembangan tata ruang kawasan pusat kota, pada daerah fungsi komersial  ( GSB=), untuk mengukur perbandingan antara peluang muatan  '),
(37, '7202007009', 'YOHANES KARYADI KUSLIANSJAH', 'Doktor Ilmu Arsitektur / Dr', 'Universitas Katolik Parahyangan', 'Pascasarjana', 'Prodi Doktor Arsitektur', 'Bandung', 'Indonesia', '2015', 'Doktor Ilmu Arsitektur / Dr', 'Konsep Arsitektur Kawasan Sungai Pasang-Surut pada Era Kolonial dan Pasca Kolonial di Kota Lama Banj', 'Penelitian Disertasi Doktor Arsitektur ini bertujuan menstudi  Morfologi dan tipologi Arsitektur kontekstual pada Kota Sungai Pasang-Surut di Banjarmasin. Delinasi dan Obyek penelitian pada kawasan ko'),
(38, '7202007009', 'YOHANES KARYADI KUSLIANSJAH', 'Doktor Ilmu Arsitektur / Dr', 'Universitas Katolik Parahyangan', 'Pascasarjana', 'Prodi Doktor Arsitektur', 'Bandung', 'Indonesia', '2015', 'Doktor Ilmu Arsitektur / Dr', 'Konsep Arsitektur Kawasan Sungai Pasang-Surut pada Era Kolonial dan Pasca Kolonial di Kota Lama Banj', 'Penelitian Disertasi Doktor Arsitektur ini bertujuan menstudi  Morfologi dan tipologi Arsitektur kontekstual pada Kota Sungai Pasang-Surut di Banjarmasin. Delinasi dan Obyek penelitian pada kawasan ko'),
(39, '7202007019', 'ANDRI SASTRAWAN', 'S-1', 'Universitas Katolik Parahyangan', 'Teknik', 'Sipil', 'Bandung', 'Indonesia', '1995', 'ST', 'Pengaruh Temperatur permukaan perkerasaan Terhadap Alat uji Falling Weight Deflectometer (FWD)', 'Merupakan hasil pengukuran temperatur permukaan jalan dibeberapa ruas jalan dan dikorelasi dengan lendutan/deformasi yang diukur dengan alat FWD'),
(40, '7202007051', 'AKHMAD MUSTAQIM', 'Strata-1', 'Institut Sains dan Teknologi â€œAKPRINDâ€', 'Teknologi Industri', 'Teknik Mesin', 'Yogyakarta', 'Indonesia', '2009', 'S.T.', 'The Design of Hydraulic Passenger Lift with Capacity for 12 Persons and For a Four-Stairs Building', 'Perencanaan lift penumpang dengan kapasitas 12 orang penumpang dan untuk dipergunakan dalam gedung dengan tinggi  4 lantai menggunakan system hidrolik dengan 1 silinder  plunyer tunggal.'),
(41, '7202007040', 'ARIE ANDRIANUS CAHYADI THALIB', 'S1', 'UNIVERSITAS KATOLIK PARAHYANGAN ', 'TEKNOLOGI INDUSTRI', 'TEKNIK KIMIA', 'BANDUNG', 'INDONESIA', '2000', 'ST', 'SIMULASI 2D FORMALDEHIDA FIX BED REAKTOR DARI METANOL', 'Simulasi 2D Formaldehida Fix Bed Reaktor dari Metanol dengan proses Oksidasi Katalitik. Penelitian simulasi menggunakan algoritma model matematika dengan menggunakan Bahasa Pemrograman MATLAB untuk me'),
(42, '7202007040', 'ARIE ANDRIANUS CAHYADI THALIB', 'S1', 'UNIVERSITAS KATOLIK PARAHYANGAN ', 'TEKNOLOGI INDUSTRI', 'TEKNIK KIMIA', 'BANDUNG', 'INDONESIA', '2000', 'ST', 'SIMULASI 2D FORMALDEHIDA FIX BED REAKTOR DARI METANOL', 'Simulasi 2D Formaldehida Fix Bed Reaktor dari Metanol dengan proses Oksidasi Katalitik. Penelitian simulasi menggunakan algoritma model matematika dengan menggunakan Bahasa Pemrograman MATLAB untuk me'),
(43, '7202007005', 'HELMY HERMAWAN TJAHJANTO', 'Sarjana', 'Universitas Katolik Parahyangan', 'Teknik', 'Teknik Sipil', 'Bandung', 'Indonesia', '2002', 'S.T.', 'Studi Berat Struktur Rangka Payon Bentang Besar Tipe Balok Tunggal dan Rangka Batang dengan Kolom Ba', 'Dalam skripsi tersebut dilakukan desain komponen struktur rangka payon baja dengan kolom baja tabung persegi. Kedua tipe struktur, yaitu rangka batang dan balok tunggal, didesain dengan variasi panjan'),
(44, '7202007007', 'ALBERT WICAKSONO', 'Sarjana', 'Universitas Katolik Parahyangan', 'Teknik', 'Teknik Sipil', 'Bandung', 'Indonesia', '2009', 'S.T.', 'STUDI ALTERNATIF PENANGGULANGAN BANJIR DI KAWASAN PRIMER GEDEBAGE  KOTA BANDUNG', 'Kawasan Gedebage yang akan dikembangkan menjadi kawasan terpadu (saat ini menjadi Summarecon Bandung) masih sering dilanda banjir walau Saluran Diversi Cinambo telah dibangun untuk mengalirkan debit b'),
(45, '7202007005', 'HELMY HERMAWAN TJAHJANTO', 'Magister', 'Universitas Katolik Parahyangan ', 'Teknik', 'Teknik Sipil', 'Bandung', 'Indonesia', '2009', 'M.T.', 'Kajian Performance Struktur Beton Bertulang dengan Dinding Pengisi', 'Makalah ini menyajikan hasil kajian performance struktur portal beton bertulang dengan dinding pengisi. Dalam analisis struktur yang dilakukan, dinding pengisi dimodelkan sebagai elemen strut diagonal'),
(46, '7202007005', 'HELMY HERMAWAN TJAHJANTO', 'Doktoral', 'University of Canterbury', 'Engineering', 'Civil and Natural Resources Engineering', 'Christchurch', 'New Zealand', '2018', 'Ph.D.', 'Bidirectional Performance of Concrete-Filled Steel Tubular Column Connections', 'The study evaluates bidirectional performance of different CFST column connections'),
(47, '7202007039', 'CHRISTIAN ARIEF', 'SARJANA', 'UNIVERSITAS KATOLIK PARAHYANGAN', 'TEKNIK', 'TEKNIK SIPIL', 'BANDUNG', 'INDONESIA', '2015', 'SARJANA TEKNIK (S.T.)', 'STUDI KEKUATAN LATERAL DAN CABUT PAKU PADA SAMBUNGAN PLYWOOD DAN KAYU MASIF BERBERAT JENIS RENDAH', 'Studi sambungan kayu dengan komponen berberat jenis rendah, apakah sudah dapat merujuk kepada SNI 7973-2013 yang tabelnya tidak mencantumkan komponen berat jenis rendah'),
(48, '7202007046', 'NANDA DANI ANDRIANTO', 'S1', 'Institut Teknologi Sepuluh November', 'Fakultas Teknik Sipil dan Perencanaan', 'Teknik Sipil', 'Surabaya', 'Indonesia', '2008', 'Sarjana Teknik (S.T.)', 'Perencanaan Emplasemen dan Layout Stasiun Porong Baru', 'Kejadian semburan lumpur panas di Sidoarjo atau yang lebih dikenal dengan Lumpur Lapindo pada tahun 2006 telah mengakibatkan kerusakan serius pada pemukiman warga maupun sarana dan prasarana umum di s'),
(49, '7202007091', 'ARIEF LEONANTO', 'Sarjana', 'Universitas Katolik Parahyangan', 'Teknologi Industri', 'Teknik Kimia', 'Bandung', 'Indonesia', '2010', 'S.T.', 'Pengaruh Konsentrasi Inokulum Dan Rasio Protein/Fat (P/F) Terhadap Yield Dan Kualitas Keju Feta', 'Produksi susu segar di Indonesia cenderung meningkat setiap tahun. Akan tetapi hal tersebut tidak disertai dengan pengolahan yang memadai dan baik. Perlu dilakukan pengolahan lebih lanjut karena susu '),
(50, '7202007077', 'ISKANDAR', 'S1', 'Institut Teknologi Bandung', 'Fakultas Teknik Sipil dan Perencanaan', 'Teknik Sipil', 'Bandung', 'Indonesia', '1993', 'Sarjana Teknik', 'Jembatan Cable Stayed satu menara dengan sistem kabel satu bidang sebagai struktur linear.', 'Jembatan cable stayed menggunakan kabel kabel berkekuatan tinggi sebagai penggantung yang menghubungkan gelagar dengan menara secara langsung. Jembatan cable stayed yang dianalisa menggunakan satu men'),
(51, '7202007050', 'I KOMANG PANDE JUNIARTA, ST, IPP', 'S2', 'UNIVERSITAS SUMATERA SUMATERA', 'PASCASARJANA', 'MAGISTER MANAJEMEN', 'MEDAN', 'INDONESIA', '2020', 'M.M', 'MODEL ANALISIS DAN STRATEGI MITIGASI RISIKO KEUANGAN DALAM PENGAMBILAN KEPUTUSAN UNTUK KELAYAKAN INV', 'Proyek pembangunan pembangkit listrik adalah proyek strategis yang dinamis dan memiliki berbagai risiko yang berpotensi menyebabkan realisasi berjalan tidak sesuai dengan rencana. Keberhasilan dari pe'),
(52, '', '', '', '', '', '', '', '', '', '', '', ''),
(53, '7202007057', 'CLINTON GIRSANG', 'S-2', 'Universitas Katolik Parahyangan', 'Teknik', 'Teknik Sipil', 'Bandung', 'Indonesia', '2020', 'Master Teknik', 'ANALISIS PERILAKU TIANG STUDI KASUS ABUTMEN PADA JEMBATAN SUNGAI LEMBAK TERHADAP URUTAN KONSTRUKSI A', 'Makalah ini menyajikan investigasi perilaku tiang terhadap dua skenario konstruksi abutment menggunakan Plaxis 3D, program elemen hingga tiga dimensi. Dua skenario analisis yang digunakan, yaitu Metod'),
(54, '7202007039', 'CHRISTIAN ARIEF', 'MAGISTER', 'UNIVERSITAS KATOLIK PARAHYANGAN', 'TEKNIK', 'TEKNIK SIPIL', 'BANDUNG', 'INDONESIA', '2016', 'MAGISTER TEKNIK (M.T.)', 'STUDI EKSPERIMENTAL PERILAKU HISTERESIS SAMBUNGAN BALOK-KOLOM EKSTERIOR GLULAM KAYU KAPUR DENGAN SIS', 'Studi perilaku histeresis dan mode kegagalan sambungan balok-kolom kayu glulam dengan penyambung batang baja, profil siku, dan pelat baja, memikul beban dinamis (gempa)'),
(55, '7202007064', 'SANDHI KWANI', 'S1', 'Universitas Katolik Parahyangan', 'Teknik', 'Teknik Sipil', 'Bandung', 'Indonesia', '2014', 'ST', 'ANALISIS FREKUENSI ALAMI DAN RAGAM GETAR STRUKTUR JEPIT BEBAS MELALUI RESPONS DINAMIK', 'Inti dari materi skripsi ini adalah melakukan analisis struktur melalui simulasi pengukuran dinamik.'),
(56, '7202007064', 'SANDHI KWANI', 'S2', 'Universitas Katolik Parahyangan', 'Teknik', 'Teknik Struktur', 'Bandung', 'Indonesia', '2016', 'MT', 'STUDI TEKUK TORSI LATERAL BALOK BAJA HONEYCOMB AKIBAT MOMEN UJUNG KURVATUR TUNGGAL DENGAN ANALISIS K', 'Inti dari materi thesis ini adalah mencari besarnya suatu nilai faktor korelasi untuk persamaan AISC yang dapat digunakan untuk menghitung besarnya nilai momen kritis pada balok kastela jenis honeycom'),
(57, '7202007023', 'BAYU WISATRIODA', 'Strata Satu (S1)', 'Universitas Gadjah Mada', 'Teknik', 'Teknik Mesin', 'Yogyakarta', 'Indonesia', '2009', 'Sarjana Teknik (S.T.)', 'Pemrograman Perancangan Sistem Hidrolik Pada Excavator dengan Menggunakan Bahasa C++', 'Pembuatan software program interfacing perancangan sistem hidrolik pada alat berat (excavator) dengan menggunakan bahasa pemrograman C++ guna mempermudah design dalam merancang sistem hidrolik. Sehing'),
(58, '7202007050', 'I KOMANG PANDE JUNIARTA, ST, IPP', 'S1', 'UNIVERSITAS UDAYANA', 'TEKNIK', 'TEKNIK MESIN', 'DENPASAR', 'INDONESIA', '2014', 'S.T', 'Study Eksperimental Performansi Pendingin Evaporative Portable dengan Pad Berbahan Sumbu Kompor deng', 'Pendinginan evaporatif merupakan proses penguapan air pada permukaan bebas dengan bantuan aliran udara dimana terjadi kontak langsung antara udara dengan air. Pendingin evaporatif portabel dalam penel'),
(59, '7202007050', 'I KOMANG PANDE JUNIARTA, ST, IPP', 'S1', 'UNIVERSITAS UDAYANA', 'TEKNIK', 'TEKNIK MESIN', 'DENPASAR', 'INDONESIA', '2014', 'S.T', 'Study Eksperimental Performansi Pendingin Evaporative Portable dengan Pad Berbahan Sumbu Kompor deng', 'Pendinginan evaporatif merupakan proses penguapan air pada permukaan bebas dengan bantuan aliran udara dimana terjadi kontak langsung antara udara dengan air. Pendingin evaporatif portabel dalam penel'),
(60, '7202007050', 'I KOMANG PANDE JUNIARTA, ST, IPP', 'S1', 'UNIVERSITAS UDAYANA', 'TEKNIK', 'TEKNIK MESIN', 'DENPASAR', 'INDONESIA', '2014', 'S.T', 'Study Eksperimental Performansi Pendingin Evaporative Portable dengan Pad Berbahan Sumbu Kompor deng', 'Pendinginan evaporatif merupakan proses penguapan air pada permukaan bebas dengan bantuan aliran udara dimana terjadi kontak langsung antara udara dengan air. Pendingin evaporatif portabel dalam penel'),
(61, '7202007018', 'ROBBY H WINARDI', 'Perguruan Tinggi', 'Universitas Katolik Parahyangan', 'Teknik', 'Teknik Sipil', 'Bandung', 'Indonesia', '1977', 'Ir / Sarjana Teknik', 'Analisa gempa pada struktur 3 dimensi', 'Analisa gempa pada portal struktur kerangka secara 3 Dimensi '),
(62, '7202007018', 'ROBBY H WINARDI', 'Perguruan Tinggi', 'Universitas Katolik Parahyangan', 'Teknik', 'Teknik Sipil', 'Bandung', 'Indonesia', '1977', 'Ir / Sarjana Teknik', 'Analisa gempa pada struktur 3 dimensi', 'Analisa gempa pada portal struktur kerangka secara 3 Dimensi '),
(63, '7202007076', 'STEVANUS HERRY', 'Magister', 'Universitas Katolik Parahyangan', 'Teknik', 'Sipil', 'Bandung', 'Indonesia', '2005', 'Magister Teknik', 'GEOTECHNICAL ASPECT OF IMMERSED TUNNEL FOR MID SPAN OF SURABAYA-MADURA ', 'Studi dan analisa aspek geoteknik pada Selat Surabaya Madura dengan memakai immersed tunnel beton memakai rujukan ke immersed tunnel di Hongkong. Dari data penyelidikan tanah yg diperoleh maka analisa'),
(64, '7202007063', 'DWI NANDYA YULINDA', 'MAGISTER TEKNIK', 'INSTITUT TEKNOLOGI BANDUNG', 'TEKNIK SIPIL', 'REKAYASA GEOTEKNIK', 'BANDUNG', 'INDONESIA', '2012', 'MT', 'PREDIKSI PARAMETER STATE PADA TANAH PASIR KOTA PADANG DIGUNAKAN UNTUK EVALUASI POTENSI LIKUEFAKSI', 'Dalam penelitian ini dilakukan suati tsudi untuk mendapatkan garis steady state yang anantinya dapat digunakan untuk memprediksi nilai parameter stste pada tanah pasir dengan pendekatan kondisi kritis'),
(65, '7202007042', 'BUDI JUWONO SUWITOATMODJO', 'S1', 'UNIVERSITAS KATOLIK PARAHYANGAN', 'TEKNIK', 'SIPIL', 'BANDUNG', 'INDONESIA', '1977', 'SARJANA TEKNIK', 'TUBE STRUCTURE', ' Highrise Building memerlukan Shearwall.  Tube Structure System menempatkan Shearwall ditengah bangunan. Selain berfungsi sebagai shearwall juga sebagai core elevator dan tangga darurat sangat efisien');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapengalamanmengajar`
--

CREATE TABLE `datapengalamanmengajar` (
  `id` int(100) NOT NULL,
  `nokta` varchar(100) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `periode` varchar(100) NOT NULL,
  `nama_tempat` varchar(150) NOT NULL,
  `jumlah_jam` varchar(100) NOT NULL,
  `mk_uraian` varchar(200) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapengalamanmengajar`
--

INSERT INTO `datapengalamanmengajar` (`id`, `nokta`, `nama_lengkap`, `periode`, `nama_tempat`, `jumlah_jam`, `mk_uraian`, `kompetensi`, `bukti_berkas`) VALUES
(1, '147263192', 'Jorke Alkawiyu', 'Genap\r\n2019/2020', 'UNSIKA', '3 Jam', 'Pendidika Ekonomi', 'SK1, SK2. S3, KU2, KK1', 0),
(2, '7202007055', 'EDIYANTO ARIEF', '2009', 'STT BANTEN JAYA SEKARANG UNBAJA (UNIVERSITAS BANTEN JAYA), LOKASI DI KOTA SERANG, PROV. BANTEN', '2', 'ANALISA NUMERIK', '', 0),
(3, '7202007049', 'ABDUL HARIS', '2007', 'PT PLN (Persero) Cabang Kotabaru, Kotabaru  kalimantan Selatan', '2 Jam', 'Manajemen 5S/5R  pada Pembangkit Listrik\r\nMemberikan pemahaman apa itu manajemen 5S/5R, Manfaat dan pengaruhnya terhadap keandalan dan produktifitas, langkah-lanhgkah imoplmentasi, penilaian pelaksana', '', 0),
(4, '7202007049', 'ABDUL HARIS', 'januari 2020', 'Hotel Santika Premier, Medan Sumatera Utara', '1 Jam', 'The New Focus on Dispute Resolution, International One Day Course, PT PLN (Persero) Unit Induk Pembangunan Pembangkit Sumatera, Medan Sumatera Utara Indonesia', '', 0),
(5, '7202007049', 'ABDUL HARIS', 'Desember 2020', 'PT PLN (Persero) UIP Pembangkit Sumatera', '1 Jam', 'Set-Up Implementasi Contractor Safety Management System (CSMS), memberikan pemahaman tentang CSMS, Tahapan dan proses pelaksanaan CSMS setiap tahapan ( Pre Assesment, Praqualifikasi, pemilihan kontrak', '', 0),
(7, '7202007049', 'ABDUL HARIS', '2005', 'PT PLN (Persero) Sektor Barito PLTD Banua Lima', '8 Jam', 'Set Up Implementasi Manajemen 5S/5R ', '', 0),
(8, '7202007049', 'ABDUL HARIS', '2008', 'PT PLN (Persero) Sektor Barito PLTD Banua Lima, Barabai Hulu Sungai Utara Kalimantan Selatan', '8 Jam', 'Set Up Implementasi Manajemen Mutu ISO 9001:2000', '', 0),
(9, '7202007049', 'ABDUL HARIS', '2008', 'PT PLN (Persero) Sektor Barito PLTD Banua Lima, Barabai Hulu Sungai Utara Kalimantan Selatan', '8 Jam', 'Set Up Implementasi Manajemen Lingkungan ISO 14001:2004', '', 0),
(10, '7202007049', 'ABDUL HARIS', '2007', 'PT PLN (Persero) Sektor Barito PLTG Trisakti, Banjarmasin Kalimantan Selatan ', '8 Jam', 'Set Up Implementasi Manajemen 5S/5R ', '', 0),
(11, '7202007049', 'ABDUL HARIS', '2005', 'PT PLN (Persero) Sektor Barito PLTG Trisakti, Banjarmasin Kalimantan Selatan ', '8 Jam', 'Set Up Implementasi Manajemen Mutu ISO 9001:2000, Pemahaman ISO 9001:2000, Penyusunan dokumen ISO 9001:2000', '', 0),
(12, '7202007049', 'ABDUL HARIS', '2005', 'PT PLN (Persero) Sektor Barito PLTG Trisakti, Banjarmasin Kalimantan Selatan ', '8 Jam', 'Set Up Implementasi Manajemen Lingkungan ISO 14001:2004, Pemahaman Sistem Manajemen Lingkungan SML ISO 14001 :2004', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapengalamanpenelitian`
--

CREATE TABLE `datapengalamanpenelitian` (
  `id` int(100) NOT NULL,
  `nokta` varchar(150) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `periode` varchar(100) NOT NULL,
  `nama_tempat` varchar(150) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `uraian` varchar(250) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapengalamanpenelitian`
--

INSERT INTO `datapengalamanpenelitian` (`id`, `nokta`, `nama_lengkap`, `periode`, `nama_tempat`, `jabatan`, `uraian`, `kompetensi`, `bukti_berkas`) VALUES
(2, '147263192', 'Jorke Alkawiyu', '2018', 'PT. Orang Tua Group, Jakarta dan Bandung, Pengolahan limbah menjadi pupuk', 'Ketua Umum', 'Memimpin penelitian pengolahan limbah menjadi pupuk.', 'PP 1-PP 20 KU 01, KU 02, KU 03, KU 04, KU 05, KU 06, KU 07, KU 08, KU 09, KU 10, KU 12, KKU 13', 0),
(3, '7202007055', 'EDIYANTO ARIEF', '2003-2020', 'PT PANCA GUNA DUTA', 'DIREKTUR UTAMA', '1.	Menentukan arah dan kebijakan perusahaan dengan menentukan rencana dan cara kerja sesuai dengan pedoman yang telah dilimpahkan oleh komisaris.\r\n2.	Melakukan kerjasama dengan pihak luar (ekstern) untuk kepentingan perusahaan.\r\n3.	Merencanakan, meny', '', 0),
(4, '7202007049', 'ABDUL HARIS', '1997', 'STT- YPLN, PLN PUSLITBANG jakarta Selatan', 'Mahasiswa / Teknisi Distribusi II', 'Melaksanakan Pengujian Material Destructive Test (DT Test) dan Non Destrctive Test (NDT) : \r\n-	Uji Tarik\r\n-	 Uji Tekan\r\n-	 Uji Impak) \r\n-	Radiography test\r\n-	Dye Penetrant Test\r\n', '', 0),
(5, '7202007049', 'ABDUL HARIS', '2003-2006', 'PT PLN (Persero) Wilayah Kalimantan Selatan, Kalimantan Tengah, Sektor Barito PLTG Trisakti Banjarmasin', 'Kepala PLTG Trisakti', 'Manajemen Handling, storage Material dan spare part Operasi & Pemeliharaan PLTG Trisakti', '', 0),
(6, '7202007049', 'ABDUL HARIS', '2005 - 2006', 'PT PLN (Persero) Wilayah Kalimantan Selatan, Kalimantan Tengah, Sektor Barito PLTG Trisakti (Rehabilitasi Rotor Generator PLTG Trisakti 21 MW )', 'Kepala PLTG Trisakti', 'Rehabilitasi Rotor Generator PLTG Trisakti 21 MW :\r\n-	Touble Shooting dan mencari root Cause Gangguan CB 52G Pumping\r\n-	Pool Out dan Pool In Rotor Generator\r\n-	Treatment Rotor Generator selama Reahabilitasi\r\n-	Melakukan Pengujian Non Destructive Test', '', 0),
(7, '7202007049', 'ABDUL HARIS', '2008', 'PT PLN (Persero) Wilayah Kalimantan Selatan, Kalimantan Tengah, Sektor Barito Banjarmasin PLTG Trisakti (Rehabilitasi Rotor Generator PLTG Trisakti 21', 'Asisten Manajer Operasi', 'â€¢	Pengoperasian 10 Unit PLTD Trisakti Kapasitas 85MW dengan bahan bakar HSD :\r\n-	Handling dan Storage Marine Fuel Oil (MFO)\r\n-	Marine Fuel Oil (MFO) Treatment Plant\r\n-	Additif bahan Bakar MFO dan Turbocharger Engine\r\nâ€¢	Pengoperasian PLTD Banua Li', '', 0),
(8, '7202007049', 'ABDUL HARIS', '2008', 'PT PLN (Persero) Wilayah Kalimantan Selatan, Kalimantan Tengah, Sektor Barito Banjarmasin', 'Asisten Manajer Operasi', 'â€¢	Pengujian, Pemeriksaan kualitas, dan Pengelolaan bahan bakar MFO & Additif untuk Pengoperasian 10 Unit PLTD Trisakti Kapasitas 85MW dengan bahan bakar MFO :\r\n-	Handling dan Storage Marine Fuel Oil (MFO)\r\n-	Marine Fuel Oil (MFO) Treatment Plant\r\n-', '', 0),
(10, '7202007049', 'ABDUL HARIS', '2008', 'PT PLN (Persero) Wilayah Kalimantan Selatan, Kalimantan Tengah, Sektor Barito Banjarmasin', 'Asisten Manajer Operasi', 'â€¢	Pengujian, Pemeriksaan kualitas dan Pengelolaan Minyak Pelumas untuk Pengoperasian 10 Unit PLTD Trisakti Kapasitas 85MW, PLTG Trisakti 21 MW, PLTD Banua Lima 13 MW, PLTD Kuala Kapuas 2x3 MW\r\nâ€¢	Pengelolaan Air pendingin untuk Pengoperasian 10 Un', '', 0),
(12, '7202007049', 'ABDUL HARIS', '2015', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat Unit Pelaksanan Proyek Pembangkit Jawa Bagian Barat 1, Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', '-	Pengujian, Pemeriksaan, Pengelolaan, Pengelolaan dan Penyimpanan Materil-material dan Peralatan Proyek Reinforcement daya dukung tanah jalur pipa pendingin PLTU Lontrar 3 x 315MW', '', 0),
(13, '7202007049', 'ABDUL HARIS', '2016-2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat Unit Pelaksanan Proyek Pembangkit Jawa Bagian Barat 1, Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', '-	Pengujian, Pemeriksaan, Pengelolaan, Pengujian, Pemeriksaan, Pengelolaan  Pengelolaan dan Penyimpanan Materil-material dan Peralatan Pekerjaan Redundant Ship Unloader 2000 Ton per Jam PLTU Lontrar 3x 315 MW', '', 0),
(14, '7202007049', 'ABDUL HARIS', '2016-2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat Unit Pelaksanan Proyek Pembangkit Jawa Bagian Barat 1, Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', '-	Pengujian, Pemeriksaan, Pengelolaan, Pengelolaan dan Penyimpanan Materil-material dan Peralatan Proyek PLTU Lontrar Extension 315MW', '', 0),
(15, '7202007049', 'ABDUL HARIS', '2016-2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat Unit Pelaksanan Proyek Pembangkit Jawa Bagian Barat 1, Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', '-	Pengujian, Pemeriksaan, Pengelolaan, Pengelolaan dan Penyimpanan Materil-material dan Peralatan Pekerjaan Redundant Coal Conveyor 2000 Ton per Jam  PLTU Lontrar 3x 315 MW', '', 0),
(16, '7202007049', 'ABDUL HARIS', '2016-2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat Unit Pelaksanan Proyek Pembangkit Jawa Bagian Barat 1, Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', '-	Pengujian, Pemeriksaan, Pengelolaan dan Penyimpanan Materil-material dan Peralatan Pekerjaan Redundant Stacker Reclaimer 1250 Ton per Jam  PLTU Lontrar 3x 315 MW', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapenghargaan`
--

CREATE TABLE `datapenghargaan` (
  `id` int(100) NOT NULL,
  `nokta` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `nama_penghargaan` varchar(150) NOT NULL,
  `uraian` varchar(220) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapenghargaan`
--

INSERT INTO `datapenghargaan` (`id`, `nokta`, `nama_lengkap`, `tahun`, `nama_penghargaan`, `uraian`, `kompetensi`, `bukti_berkas`) VALUES
(1, '10101001', 'Ilham Azis Annaba', '2020', 'Juara 1 Web Development', 'Memenangan juara 1 web dev dalam acara UBP Tech tingkat Nasional', 'SK1, SK2. SK3. KK8, KK9, KK10', 0),
(3, '7202007016', 'ELSA NOVIANTI', '2010', 'Highly Commended for Research on Wind Energy Utilisation', 'Highly Commended for Research on Wind Energy Utilisation Using Battery from Australian Institute of Energy', '', 0),
(4, '7202007016', 'ELSA NOVIANTI', '2013', 'Best Engineer Award from PT WorleyParsons Indonesia', '', '', 0),
(5, '7202007016', 'ELSA NOVIANTI', '2009', 'AusAID Scholarship Awardee', 'Pemberian beasiswa penuh dari AusAID yang berada di bawah naungan pemerintah Australia untuk melanjutkan studi S2 di perguruan tinggi pilihan sendiri di Australia. Ini adalah sumber pembiayaan studi S2 saya.', '', 0),
(6, '7202007016', 'ELSA NOVIANTI', '2009', 'Erasmus Mundus Scholarship Awardee', 'Terpilih sebagai penerima beasiswa Erasmus Mundus yang berada dibawah naungan Uni Eropa untuk melanjutkan studi S2 di Eropa. Pada akhirnya saya melepaskan beasiswa ini dan memilih untuk melanjutkan studi S2 di Australia.', '', 0),
(7, '7202007024', 'ALIM YUANDIA', '2013', 'Juara Lomba Video Profil Lomba â€œIndonesian Energy Marathon Challenge\"', 'Juara Lomba Video Profil Mobil Hemat Energi Terbaik Tingkat Nasinal, \r\n\r\nInstitute Teknologi Surabaya (ITS)\r\n\r\nSurabaya, Indonesia', '', 2013),
(8, '7202007024', 'ALIM YUANDIA', '2014', 'Juara 3 Kontes Mobil Hemat Energi', 'Juara Kontes Mobil Hemat Energi yang diselenggarakan oleh DIKTI di ITS, Surabaya ', '', 2014),
(9, '7202007049', 'ABDUL HARIS', '2010', 'Kompetensi Ahli Pengadaan Barang/Jasa APLN', 'Kompeten dalam Uji Sertifikasi Pengadaan Barang/Jasa APLN, PT PLN (Persero ), Indonesia', '', 0),
(10, '7202007049', 'ABDUL HARIS', '2010', 'Piagam Penghargaan 2 Windu', 'Tanda Kesetiaan Kerja di PT PLN (Persero ) bekerja dan mengabdi selama 2 Windu, PT PLN (Persero), Indonesia', '', 0),
(12, '7202007049', 'ABDUL HARIS', '2012', 'Kompetensi Analisa dan pemecahan Masalah Operasi Pembangkitan PLTD Besar Level System', 'Sertifikasi Kompetensi Analisa dan pemecahan Masalah Operasi Pembangkitan PLTD Besar Level System, Unit Uji sertifikasi Pusdiklat PT PLN (persero)', '', 0),
(13, '7202007049', 'ABDUL HARIS', '2018', 'Piagam Penghargaan 3 Windu', 'Tanda Kesetiaan Kerja di PT PLN (Persero ) telah bekerja dan mengabdi selama 3 Windu, PT PLN (Persero), Indonesia', '', 0),
(14, '7202007049', 'ABDUL HARIS', '2019', 'Bronze Certificate', 'Certificate for Successfully Leading the team to Achieve the Wildly Important Goal, Global Practice Leader Franklin Covey The Ultimate Competitive Advantage', '', 0),
(15, '7202007049', 'ABDUL HARIS', '2020', 'Pemateri International One Day Course', 'Pemateri The New Focus on Dispute Resolution, International One Day Course, PT PLN (Persero) Unit Induk Pembangunan Pembangkit Sumatera, Medan Sumatera Utara Indonesia', '', 0),
(16, '7202007039', 'CHRISTIAN ARIEF', '2016', 'PIAGAM PENGHARGAAN', 'PERHARGAAN LULUSAN TERBAIK PROGRAM STUDI MAGISTER TEKNIK SIPIL\r\nUNIVERSITAS KATOLIK PARAHYANGAN BANDUNG - JAWA BARAT', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapribadi`
--

CREATE TABLE `datapribadi` (
  `id` int(50) NOT NULL,
  `nokta` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kejuruan` varchar(20) NOT NULL,
  `alamat_rumah` varchar(200) NOT NULL,
  `alamat_lembaga` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapribadi`
--

INSERT INTO `datapribadi` (`id`, `nokta`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `kejuruan`, `alamat_rumah`, `alamat_lembaga`, `email`, `nohp`) VALUES
(3, '10101001', 'Ilham Azis', 'Jakarta', '1998-11-24', 'Teknik Informatika', 'Bengle Majalaya', 'Universitas Buana Perjuangan Karawang', 'ilhamazis82@gmail.com', '089664651139'),
(5, '1841625510', 'Didin Maulana Aksan', 'Karawang', '1990-10-01', 'Sistem Informasi', 'Kedongdong Klari', 'Universitas Buana Perjuangan ', 'didinmaulana@gmail.com', '085121212345'),
(6, '147263192', 'Jorke Alkawiyu', 'Purworejo', '1994-06-29', 'Ekonomi Terapan', 'Kosambi Karawang', 'Jl. Hs Ronggowaluyo', 'jorke@gmail.com', '086572837234'),
(8, '1111', 'Tes', 'jakarta', '1901-11-28', 'Ekonomi Terapan', 'aa', 'aa', 'aa', 'aa'),
(9, '11', 'Tes aja', 'Tangerang', '2020-10-29', 'Rpl', '', '', '', ''),
(10, '7202007001', 'SANI SUSANTO', '', '0000-00-00', '', '', '', '', ''),
(11, '7202007002', 'ANASTASIA CAROLINE SUTANDI', '', '0000-00-00', '', '', '', '', ''),
(12, '7202007003', 'PELE WIDJAJA', '', '0000-00-00', '', '', '', '', ''),
(13, '7202007004', 'WIMPY SANTOSA', '', '0000-00-00', '', '', '', '', ''),
(14, '7202007005', 'HELMY HERMAWAN TJAHJANTO', '', '0000-00-00', '', '', '', '', ''),
(15, '7202007006', 'FELIX HIDAYAT', '', '0000-00-00', '', '', '', '', ''),
(16, '7202007007', 'ALBERT WICAKSONO', '', '0000-00-00', '', '', '', '', ''),
(17, '7202007008', 'ANTON SOEKIMAN', '', '0000-00-00', '', '', '', '', ''),
(18, '7202007009', 'KARYADI KUSLIANSJAH', 'BANJARMASIN', '1954-12-20', '', 'Jl. Venus Barat I No. 7, RT 004 RW 001 Metro Sukarno Hatta, Kel. Manjahlega, Kec.Rancasari Bandung-40295', 'Fakultas Teknik Universitas Katolik Parahyangan\r\nJl.Ciumbuleuit 94 Bandung-40141', 'karyadi@unpar.ac.id', '08122127169'),
(19, '7202007010', 'LIDYA FRANSISCA TJONG', '', '0000-00-00', '', '', '', '', ''),
(20, '7202007011', 'ALTHO SAGARA', '', '0000-00-00', '', '', '', '', ''),
(21, '7202007012', 'DODDI YUDIANTO', '', '0000-00-00', '', '', '', '', ''),
(22, '7202007012', 'DODDI YUDIANTO', '', '0000-00-00', '', '', '', '', ''),
(23, '7202007013', 'DINA RUBIANA WIDARDA', '', '0000-00-00', '', '', '', '', ''),
(24, '7202007014', 'BOBBY MINOLA GINTING', '', '0000-00-00', '', '', '', '', ''),
(25, '7202007015', 'BAMBANG ADIRIJANTO', '', '0000-00-00', '', '', '', '', ''),
(26, '7202007016', 'ELSA NOVIANTI', '', '0000-00-00', '', '', '', '', ''),
(27, '7202007017', 'IWAN SUPRIJANTO', '', '0000-00-00', '', '', '', '', ''),
(28, '7202007018', 'ROBBY H WINARDI', 'Medan', '1952-10-12', '', 'Jln Duta II No B57, RT 002 / RW 007, Kel Duri, \r\nKec Kebun Jeruk, Jakarta 11510 \r\nJakarta 11510 ', 'PT INDO SWISSATAMA, Consulting Engineers\r\nJalan Minangkabau No 20, Manggarai, Jakarta 12970', 'robbywinardi@cbn.net.id', '+62816704379'),
(29, '7202007014', 'BOBBY MINOLA GINTING', '', '0000-00-00', '', '', '', '', ''),
(30, '7202007019', 'ANDRI SASTRAWAN', '', '0000-00-00', '', '', '', '', ''),
(31, '7202007020', 'WEDDY BERNADI SUDIRMAN', '', '0000-00-00', '', '', '', '', ''),
(32, '7202007021', 'FERDYAN HIJRAH KUSUMA', 'SURABAYA', '1985-03-01', 'Teknik Lingkungan', 'JL EKA SAMA KOMPLEK TAMAN PECATU INDAH NO.5B, MEDAN JOHOR ', 'JL. KARTINI NO. 23 ', 'ferdyankusuma@gmail.com', '08126097191'),
(33, '7202007022', 'AGUS KUSWARDOYO', '', '0000-00-00', '', '', '', '', ''),
(34, '7202007023', 'BAYU WISATRIODA', 'Bandar Lampung', '1984-10-04', 'Teknik Mesin', 'Jl. Bajak V Blok K/1 Komp. Kehutanan K/1 Kel. Harjosari II  Kec. Medan Amplas, Sumatera Utara', 'JL. KARTINI NO. 23, Kel. Madras Hulu, Kec. Medan Polonia, Kota Medan, Sumatera Utara', 'bayu.wisatrioda@gmail.com', '081260718494/08116592608'),
(35, '7202007024', 'ALIM YUANDIA', 'Lampung Timur', '1994-04-28', 'Teknik Mesin', 'Jl Tetes 5, Housing I PT GPM Blok F 357, Mataram Udik, Bandar Mataram Lampung Tengah, Lampung', '', 'alimyuandia@gmail.com', '081228386200'),
(36, '7202007025', 'KHARISMAN LAIA', '', '0000-00-00', '', '', '', '', ''),
(37, '7202007026', 'MISDJAN ENDANG SUBRATA', '', '0000-00-00', '', '', '', '', ''),
(38, '7202007027', 'PARLINDUNGAN', '', '0000-00-00', '', '', '', '', ''),
(39, '7202007028', 'ENNI MOELIATI SOETANTO', '', '0000-00-00', '', '', '', '', ''),
(40, '7202007029', 'DEFRY SETYO PRAYOGO', '', '0000-00-00', '', '', '', '', ''),
(41, '7202007030', 'MAWARDI AMIN', '', '0000-00-00', '', '', '', '', ''),
(42, '7202007031', 'RONNY APRISAPUTRA', '', '0000-00-00', '', '', '', '', ''),
(43, '7202007032', 'ANJAR SUCAHYA', '', '0000-00-00', '', '', '', '', ''),
(44, '7202007033', 'VENDIK SUDARIANTO', '', '0000-00-00', '', '', '', '', ''),
(45, '7202007034', 'HENDRI', '', '0000-00-00', '', '', '', '', ''),
(46, '7202007035', 'JIMMY WIRYANTO', '', '0000-00-00', '', '', '', '', ''),
(47, '7202007036', 'EDWIN LAURENCIS HENDRIKUS', '', '0000-00-00', '', '', '', '', ''),
(48, '7202007037', 'SARWONO HARDJOMULJADI', '', '0000-00-00', '', '', '', '', ''),
(49, '7202007038', 'ASEP RACHMATULLAH', 'Bandung', '1971-09-02', 'PT. Eka Dwi Satya', 'Taman Graha Asri J4/7 Kota Serang Banten', 'Taman Graha Asri J4/7 Kota Serang Banten', 'seprach@yahoo.co.id', '08161673093'),
(50, '7202007039', 'CHRISTIAN ARIEF', 'PADANG', '1994-04-26', 'TEKNIK SIPIL', 'Perumahan Greenville Taman Kopo Indah I (Greenville I no 25)\r\nJl. Taman Kopo Indah I Kel. Margahayu Selatan Kec. Margahayu Kota Bandung 40226', 'CV. Benchmark (Paskal Hypersquare B27)\r\nJl. Pasir Kaliki no, 23 Kel. Arjuna Kec. Cicendo Kota Bandung 40172', 'ariefchristianarief@gmail.com', '081918635717'),
(51, '7202007040', 'ARIE ANDRIANUS CAHYADI THALIB', 'JAKARTA', '1977-10-04', 'TEKNIK KIMIA', 'JL. GUDANG PELURU TIMUR III BLOK I NO. 224 KEBON BARU TEBET JAKARTA SELATAN 12830', 'PT. BINA SARANA PUTRA', 'arie.andrianus@gmail.com', '08129962410'),
(52, '7202007041', 'HENDRA', '', '0000-00-00', '', '', '', '', ''),
(53, '7202007042', 'BUDI JUWONO SUWITOATMODJO', 'PURWOKERTO', '1952-08-13', 'PROGRAM PROFESI INSI', 'JL. KEPODANG III K6 NO. 8, KEL. RENGAS, KEC. CIPUTAT TIMUR, TANGERANG SELATAN, BANTEN', 'JL. GRIYA AGUNG NO. 15 - 16, SUNTER, JAKARTA 14350', 'thomas.yuwono@yahoo.com', '62 816 74 1515'),
(54, '', '', '', '0000-00-00', '', '', '', '', ''),
(55, '7202007044', 'I NENGAH SUKERTHA', '', '0000-00-00', '', '', '', '', ''),
(56, '7202007045', 'KHAIRUL SALEH', '', '0000-00-00', '', '', '', '', ''),
(57, '7202007046', 'NANDA DANI ANDRIANTO', '', '0000-00-00', '', '', '', '', ''),
(58, '7202007047', 'NOVI AGUSTIAN TANUSAPUTRA', '', '0000-00-00', '', '', '', '', ''),
(59, '7202007048', 'DEDI KHAIRUNAS', '', '0000-00-00', '', '', '', '', ''),
(60, '7202007049', 'ABDUL HARIS', 'Bojonegoro', '1974-06-11', 'Teknik Mesin', 'Perum Pesona Bougenville Regency A1 RT 07/RW 02, Kelurahan Dinoyo, Kecamatan Lowokwaru', 'PT PLN (Persero) Unit Induk Pembangunan Pembangkit Sumatera\r\nJl Kartini no. 23, Kel. Madras Hulu, Kec. Medan Polonia, Sumatera Utara 20152\r\n', 'a.haris674@gmail.com ', '08163602349'),
(61, '7202007050', 'I KOMANG PANDE JUNIARTA, ST, IPP', 'TAMAN TANDA', '1991-06-21', 'TEKNIK MESIN', 'Jl. Gn. Cemara No. 42, Sapta Bumi Denpasar Barat', 'PT PLN (PERSERO)', 'pande.juniarta@pln.co.id', '081310060805'),
(62, '7202007051', 'AKHMAD MUSTAQIM', '', '0000-00-00', '', '', '', '', ''),
(63, '7202007052', 'KHALAWI', '', '0000-00-00', '', '', '', '', ''),
(64, '7202007053', 'INTAN OCKTAVIANY', '', '0000-00-00', '', '', '', '', ''),
(65, '7202007054', 'FAHMI KUNCORO', '', '0000-00-00', '', '', '', '', ''),
(66, '7202007055', 'EDIYANTO ARIEF', 'Bandung', '1973-06-11', 'Teknik Sipil', 'TAMAN GRAHA ASRI BLOK BB 1 NO 3, KOTA SERANG, BANTEN, 42116', 'RUKO HOYAMA\r\nJL KH. A FATAH HASAN NO 2A, CICERI, KOTA SERANG, BANTEN, 42116', 'ediyanto91@gmail.com', '08121201090'),
(67, '7202007056', 'RIZAL', 'serang', '1980-05-20', 'Teknik Planologi', 'Jalan Raya Serang-Petir Perumahan Gria Madania no.5 ', 'Jalan Kh. Abdul Fatah Hasan No. 2a Ciceri Serang Banten', 'sabans22@gmail.com', '0818619680'),
(68, '7202007057', 'CLINTON GIRSANG', '', '0000-00-00', '', '', '', '', ''),
(69, '7202007058', 'WAHYU KURNIAWAN', '', '0000-00-00', '', '', '', '', ''),
(70, '7202007059', 'YUNAN HALIM', '', '0000-00-00', '', '', '', '', ''),
(71, '7202007060', 'SAMUN HARIS', '', '0000-00-00', '', '', '', '', ''),
(72, '7202007061', 'ADITYA KARYA', '', '0000-00-00', '', '', '', '', ''),
(73, '7202007062', 'ADIAN MUHAMMAD RIDHO', '', '0000-00-00', '', '', '', '', ''),
(74, '7202007063', 'DWI NANDYA YULINDA', '', '0000-00-00', '', '', '', '', ''),
(75, '7202007064', 'SANDHI KWANI', '', '0000-00-00', '', '', '', '', ''),
(76, '7202007065', 'HARYANTO SOFYAN', '', '0000-00-00', '', '', '', '', ''),
(77, '7202007066', 'SYARIF BURHANUDDIN', '', '0000-00-00', '', '', '', '', ''),
(78, '7202007067', 'IVAN ADE SOFIYAN', '', '0000-00-00', '', '', '', '', ''),
(79, '7202007068', 'BONDAN WIDI ANGGORO', '', '0000-00-00', '', '', '', '', ''),
(80, '7202007069', 'ARIANI CHITRA LESTARI', 'Bandung', '1995-01-21', 'Teknik Sipil', 'Jl. Paledang No. 148, Bandung', 'Jl. Setrasari VI No.11, Bandung', 'arianichitra@gmail.com', '0812-2334-4093'),
(81, '7202007070', 'EUFRAT AGRIZASYAH', '', '0000-00-00', '', '', '', '', ''),
(82, '7202007071', 'AGIL DARMAWAN', 'Pati', '1986-03-17', 'Teknik Mesin', 'Perum.Permata SetiaBudi 2, Jl.Tapian Nauli Ps.3 Medan Sunggal. Medan, Sumatera Utara', 'Jalan Kartini 23, Medan', 'darmaagil@gmail.com', '082138366697'),
(83, '7202007072', 'NUNUNG WIDYANINGSIH', '', '0000-00-00', '', '', '', '', ''),
(84, '7202007073', 'THE CIN HOK', '', '0000-00-00', '', '', '', '', ''),
(85, '7202007074', 'ANGGIE PRASETYA DINATA', '', '0000-00-00', '', '', '', '', ''),
(86, '7202007075', 'ARWIN', '', '0000-00-00', '', '', '', '', ''),
(87, '7202007076', 'STEVANUS HERRY', '', '0000-00-00', '', '', '', '', ''),
(88, '7202007077', 'ISKANDAR', '', '0000-00-00', '', '', '', '', ''),
(89, '7202007078', 'LUSSI ERNIAWATI', '', '0000-00-00', '', '', '', '', ''),
(90, '7202007079', 'NICKY STANLEY HALIM', '', '0000-00-00', '', '', '', '', ''),
(91, '7202007080', 'MOHAMMAD ERSHAM ARSYAD', '', '0000-00-00', '', '', '', '', ''),
(92, '7202007081', 'ANOM WIBISONO', '', '0000-00-00', '', '', '', '', ''),
(93, '7202007082', 'LASMAN DONNY', 'BANDUNG', '1978-08-02', '', 'JL. H Zakaria no.9 Bandung 40221', '', 'lasdonte@gmail.com', '081320747838'),
(94, '7202007083', 'ANGELICA TANISIA JOZAR', '', '0000-00-00', '', '', '', '', ''),
(95, '7202007084', 'WIRYANTO DEWOBROTO', 'Yogyakarta', '1964-10-21', '', '', '', 'wiryanto.dewobroto@uph.edu', '085287041001'),
(96, '7202007085', 'NORO KARTEDJO', 'Tegal', '1983-02-08', 'Teknik Sipil', 'Jl. Madrid Timur 1 No. 3 Cluster Madrid Palem Semi, Karawaci, Kota Tangerang', '', 'kartedjo@gmail.com', '082115343004'),
(97, '7202007086', 'ALEXANDER DIAN SUKIRNO', '', '0000-00-00', '', '', '', '', ''),
(98, '7202007014', 'BOBBY MINOLA GINTING', '', '0000-00-00', '', '', '', '', ''),
(99, '7202007043', 'MARYONO', '', '0000-00-00', '', '', '', '', ''),
(100, '7202007087', 'ADEE SUNTOSO', '', '0000-00-00', '', '', '', '', ''),
(101, '7202007091', 'ARIEF LEONANTO', 'Jakarta', '1988-03-30', 'Teknik Kimia', 'Jalan Perniagaan no. 36, Jakarta Barat', 'Jalan Pajajaran no. 10, Jatiuwung, Tangerang', 'arief_leonanto@hotmail.com', '08119459064'),
(102, '7202007088', 'MOHAMAD WIDIARSO', '', '0000-00-00', '', '', '', '', ''),
(103, '7202007089', 'EDIANSJAH ZULKIFLI', '', '0000-00-00', '', '', '', '', ''),
(104, '7202007090', 'METTA SUTRISNO', '', '0000-00-00', '', '', '', '', ''),
(105, '7202007092', 'ERIE HERYADI', '', '0000-00-00', '', '', '', '', ''),
(106, '7202007093', 'JACK JUNAIDY', '', '0000-00-00', '', '', '', '', ''),
(107, '7202007094', 'tarno', '', '0000-00-00', '', '', '', '', ''),
(108, '7202007095', 'tarni', '', '0000-00-00', '', '', '', '', ''),
(112, '12', 'kaka', '', '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_bahasa`
--

CREATE TABLE `hasil_bahasa` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `SK01` int(100) NOT NULL,
  `SK02` int(100) NOT NULL,
  `SK03` int(100) NOT NULL,
  `SK04` int(100) NOT NULL,
  `SK05` int(11) NOT NULL,
  `SK06` int(11) NOT NULL,
  `SK07` int(11) NOT NULL,
  `SK08` int(11) NOT NULL,
  `SK09` int(11) NOT NULL,
  `SK10` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_bahasa`
--

INSERT INTO `hasil_bahasa` (`id`, `nokta`, `nama_lengkap`, `SK01`, `SK02`, `SK03`, `SK04`, `SK05`, `SK06`, `SK07`, `SK08`, `SK09`, `SK10`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_cpl`
--

CREATE TABLE `hasil_cpl` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `id_hasil` int(20) DEFAULT NULL,
  `kode_konversi` int(190) DEFAULT NULL,
  `nokta` bigint(200) DEFAULT NULL,
  `nama_lengkap` varchar(190) DEFAULT NULL,
  `jml_SK01` int(190) DEFAULT NULL,
  `jml_SK02` int(200) DEFAULT NULL,
  `jml_SK03` int(200) DEFAULT NULL,
  `jml_SK04` int(190) DEFAULT NULL,
  `jml_SK05` int(200) DEFAULT NULL,
  `jml_SK06` int(190) DEFAULT NULL,
  `jml_SK07` int(190) DEFAULT NULL,
  `jml_SK08` int(200) DEFAULT NULL,
  `jml_SK09` int(200) DEFAULT NULL,
  `jml_SK10` int(200) DEFAULT NULL,
  `jml_PP01` int(200) DEFAULT NULL,
  `jml_PP02` int(190) DEFAULT NULL,
  `jml_PP03` int(190) DEFAULT NULL,
  `jml_PP04` int(190) DEFAULT NULL,
  `jml_PP05` int(190) DEFAULT NULL,
  `jml_PP06` int(200) DEFAULT NULL,
  `jml_PP07` int(200) DEFAULT NULL,
  `jml_PP08` int(200) DEFAULT NULL,
  `jml_PP09` int(200) DEFAULT NULL,
  `jml_PP10` int(200) DEFAULT NULL,
  `jml_PP11` int(200) DEFAULT NULL,
  `jml_PP12` int(190) DEFAULT NULL,
  `jml_PP13` int(190) DEFAULT NULL,
  `jml_PP14` int(190) DEFAULT NULL,
  `jml_PP15` int(190) DEFAULT NULL,
  `jml_PP16` int(190) DEFAULT NULL,
  `jml_PP17` int(190) DEFAULT NULL,
  `jml_PP18` int(190) DEFAULT NULL,
  `jml_PP19` int(190) DEFAULT NULL,
  `jml_PP20` int(190) DEFAULT NULL,
  `jml_KU01` int(190) DEFAULT NULL,
  `jml_KU02` int(190) DEFAULT NULL,
  `jml_KU03` int(190) DEFAULT NULL,
  `jml_KU04` int(190) DEFAULT NULL,
  `jml_KU05` int(200) DEFAULT NULL,
  `jml_KU06` int(200) DEFAULT NULL,
  `jml_KU07` int(200) DEFAULT NULL,
  `jml_KU08` int(200) DEFAULT NULL,
  `jml_KU09` int(200) DEFAULT NULL,
  `jml_KU10` int(200) DEFAULT NULL,
  `jml_KU11` int(190) DEFAULT NULL,
  `jml_KU12` int(190) DEFAULT NULL,
  `jml_KU13` int(190) DEFAULT NULL,
  `jml_KK01` int(190) DEFAULT NULL,
  `jml_KK02` int(190) DEFAULT NULL,
  `jml_KK03` int(190) DEFAULT NULL,
  `jml_KK04` int(190) DEFAULT NULL,
  `jml_KK05` int(200) DEFAULT NULL,
  `jml_KK06` int(200) DEFAULT NULL,
  `jml_KK07` int(200) DEFAULT NULL,
  `jml_KK08` int(200) DEFAULT NULL,
  `jml_KK09` int(200) DEFAULT NULL,
  `jml_KK10` int(200) DEFAULT NULL,
  `jml_KK11` int(200) DEFAULT NULL,
  `jml_KK12` int(200) DEFAULT NULL,
  `jml_KK13` int(190) DEFAULT NULL,
  `jml_KK14` int(190) DEFAULT NULL,
  `jml_KK15` int(190) DEFAULT NULL,
  `jml_KK16` int(190) DEFAULT NULL,
  `jml_KK17` int(190) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_cpl`
--

INSERT INTO `hasil_cpl` (`id`, `status`, `id_hasil`, `kode_konversi`, `nokta`, `nama_lengkap`, `jml_SK01`, `jml_SK02`, `jml_SK03`, `jml_SK04`, `jml_SK05`, `jml_SK06`, `jml_SK07`, `jml_SK08`, `jml_SK09`, `jml_SK10`, `jml_PP01`, `jml_PP02`, `jml_PP03`, `jml_PP04`, `jml_PP05`, `jml_PP06`, `jml_PP07`, `jml_PP08`, `jml_PP09`, `jml_PP10`, `jml_PP11`, `jml_PP12`, `jml_PP13`, `jml_PP14`, `jml_PP15`, `jml_PP16`, `jml_PP17`, `jml_PP18`, `jml_PP19`, `jml_PP20`, `jml_KU01`, `jml_KU02`, `jml_KU03`, `jml_KU04`, `jml_KU05`, `jml_KU06`, `jml_KU07`, `jml_KU08`, `jml_KU09`, `jml_KU10`, `jml_KU11`, `jml_KU12`, `jml_KU13`, `jml_KK01`, `jml_KK02`, `jml_KK03`, `jml_KK04`, `jml_KK05`, `jml_KK06`, `jml_KK07`, `jml_KK08`, `jml_KK09`, `jml_KK10`, `jml_KK11`, `jml_KK12`, `jml_KK13`, `jml_KK14`, `jml_KK15`, `jml_KK16`, `jml_KK17`) VALUES
(1, 0, 31, 2, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 0, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 0, 0, 0, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 0, 0, 0, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 0, 0, 0, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 0, 0, 0, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 0, 0, 0, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 0, 0, 0, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 0, 0, 0, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 0, 0, 0, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 0, 0, 0, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 0, 0, 0, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 0, 0, 0, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 0, 0, 0, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 0, 0, 0, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 0, 0, 0, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 0, 0, 0, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 0, 0, 0, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 0, 0, 0, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 0, 0, 0, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 0, 0, 0, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 0, 0, 0, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 0, 0, 0, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 0, 0, 0, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 0, 0, 0, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 0, 0, 0, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 0, 0, 0, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 0, 0, 0, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 0, 0, 0, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 0, 0, 0, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 0, 0, 0, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 0, 0, 0, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 0, 0, 0, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 0, 0, 0, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 0, 0, 0, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 0, 0, 0, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 0, 0, 0, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 0, 0, 0, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 0, 0, 0, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 0, 0, 0, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 0, 0, 0, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 0, 0, 0, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 0, 0, 0, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 0, 0, 0, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 0, 0, 0, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 0, 0, 0, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 0, 0, 0, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 0, 0, 0, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 0, 0, 0, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 0, 0, 0, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 0, 0, 0, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 0, 0, 0, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 0, 0, 0, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 0, 0, 0, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 0, 0, 0, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 0, 0, 0, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 0, 0, 0, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 0, 0, 0, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 0, 0, 0, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 0, 0, 0, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 0, 0, 0, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 0, 0, 0, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 0, 0, 0, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 0, 0, 0, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 0, 0, 0, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 0, 0, 0, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 0, 0, 0, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 0, 0, 0, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 0, 0, 0, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 0, 0, 0, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 0, 0, 0, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 0, 0, 0, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 0, 0, 0, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 0, 0, 0, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 0, 0, 0, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 0, 0, 0, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(97, 0, 0, 0, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_karya`
--

CREATE TABLE `hasil_karya` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `KK01` int(100) NOT NULL,
  `KK02` int(100) NOT NULL,
  `KK03` int(100) NOT NULL,
  `KK04` int(100) NOT NULL,
  `KK05` int(100) NOT NULL,
  `KK06` int(100) NOT NULL,
  `KK07` int(100) NOT NULL,
  `KK08` int(100) NOT NULL,
  `KK09` int(100) NOT NULL,
  `KK10` int(100) NOT NULL,
  `KK11` int(100) NOT NULL,
  `KK12` int(100) NOT NULL,
  `KK13` int(100) NOT NULL,
  `KK14` int(100) NOT NULL,
  `KK15` int(100) NOT NULL,
  `KK16` int(100) NOT NULL,
  `KK17` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_karya`
--

INSERT INTO `hasil_karya` (`id`, `nokta`, `nama_lengkap`, `KK01`, `KK02`, `KK03`, `KK04`, `KK05`, `KK06`, `KK07`, `KK08`, `KK09`, `KK10`, `KK11`, `KK12`, `KK13`, `KK14`, `KK15`, `KK16`, `KK17`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_konversi`
--

CREATE TABLE `hasil_konversi` (
  `id` int(11) NOT NULL,
  `nokta` int(190) DEFAULT NULL,
  `nama_lengkap` varchar(190) DEFAULT NULL,
  `mk` int(50) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `nilai_mutu` float DEFAULT NULL,
  `indeks` varchar(50) DEFAULT NULL,
  `total_mutu` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_kualifikasi`
--

CREATE TABLE `hasil_kualifikasi` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `KU01` int(100) NOT NULL,
  `KU02` int(100) NOT NULL,
  `KU03` int(100) NOT NULL,
  `KU04` int(100) NOT NULL,
  `KU05` int(100) NOT NULL,
  `KU06` int(100) NOT NULL,
  `KU07` int(100) NOT NULL,
  `KU08` int(100) NOT NULL,
  `KU09` int(100) NOT NULL,
  `KU10` int(100) NOT NULL,
  `KU11` int(100) NOT NULL,
  `KU12` int(100) NOT NULL,
  `KU13` int(100) NOT NULL,
  `KK01` int(100) NOT NULL,
  `KK02` int(100) NOT NULL,
  `KK03` int(100) NOT NULL,
  `KK04` int(100) NOT NULL,
  `KK05` int(100) NOT NULL,
  `KK06` int(100) NOT NULL,
  `KK07` int(100) NOT NULL,
  `KK08` int(100) NOT NULL,
  `KK09` int(100) NOT NULL,
  `KK10` int(100) NOT NULL,
  `KK11` int(100) NOT NULL,
  `KK12` int(100) NOT NULL,
  `KK13` int(100) NOT NULL,
  `KK14` int(100) NOT NULL,
  `KK15` int(100) NOT NULL,
  `KK16` int(100) NOT NULL,
  `KK17` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_kualifikasi`
--

INSERT INTO `hasil_kualifikasi` (`id`, `nokta`, `nama_lengkap`, `KU01`, `KU02`, `KU03`, `KU04`, `KU05`, `KU06`, `KU07`, `KU08`, `KU09`, `KU10`, `KU11`, `KU12`, `KU13`, `KK01`, `KK02`, `KK03`, `KK04`, `KK05`, `KK06`, `KK07`, `KK08`, `KK09`, `KK10`, `KK11`, `KK12`, `KK13`, `KK14`, `KK15`, `KK16`, `KK17`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_makalah`
--

CREATE TABLE `hasil_makalah` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `KK01` int(100) NOT NULL,
  `KK02` int(100) NOT NULL,
  `KK03` int(100) NOT NULL,
  `KK04` int(100) NOT NULL,
  `KK05` int(100) NOT NULL,
  `KK06` int(100) NOT NULL,
  `KK07` int(100) NOT NULL,
  `KK08` int(100) NOT NULL,
  `KK09` int(100) NOT NULL,
  `KK10` int(100) NOT NULL,
  `KK11` int(100) NOT NULL,
  `KK12` int(100) NOT NULL,
  `KK13` int(100) NOT NULL,
  `KK14` int(100) NOT NULL,
  `KK15` int(100) NOT NULL,
  `KK16` int(100) NOT NULL,
  `KK17` int(100) NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_makalah`
--

INSERT INTO `hasil_makalah` (`id`, `nokta`, `nama_lengkap`, `KK01`, `KK02`, `KK03`, `KK04`, `KK05`, `KK06`, `KK07`, `KK08`, `KK09`, `KK10`, `KK11`, `KK12`, `KK13`, `KK14`, `KK15`, `KK16`, `KK17`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_manufaktur`
--

CREATE TABLE `hasil_manufaktur` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `KU01` int(100) NOT NULL,
  `KU02` int(100) NOT NULL,
  `KU03` int(100) NOT NULL,
  `KU04` int(100) NOT NULL,
  `KU05` int(100) NOT NULL,
  `KU06` int(100) NOT NULL,
  `KU07` int(100) NOT NULL,
  `KU08` int(100) NOT NULL,
  `KU09` int(100) NOT NULL,
  `KU10` int(100) NOT NULL,
  `KU11` int(100) NOT NULL,
  `KU12` int(100) NOT NULL,
  `KU13` int(100) NOT NULL,
  `KK01` int(100) NOT NULL,
  `KK02` int(100) NOT NULL,
  `KK03` int(100) NOT NULL,
  `KK04` int(100) NOT NULL,
  `KK05` int(100) NOT NULL,
  `KK06` int(100) NOT NULL,
  `KK07` int(100) NOT NULL,
  `KK08` int(100) NOT NULL,
  `KK09` int(100) NOT NULL,
  `KK10` int(100) NOT NULL,
  `KK11` int(100) NOT NULL,
  `KK12` int(100) NOT NULL,
  `KK13` int(100) NOT NULL,
  `KK14` int(100) NOT NULL,
  `KK15` int(100) NOT NULL,
  `KK16` int(100) NOT NULL,
  `KK17` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_manufaktur`
--

INSERT INTO `hasil_manufaktur` (`id`, `nokta`, `nama_lengkap`, `KU01`, `KU02`, `KU03`, `KU04`, `KU05`, `KU06`, `KU07`, `KU08`, `KU09`, `KU10`, `KU11`, `KU12`, `KU13`, `KK01`, `KK02`, `KK03`, `KK04`, `KK05`, `KK06`, `KK07`, `KK08`, `KK09`, `KK10`, `KK11`, `KK12`, `KK13`, `KK14`, `KK15`, `KK16`, `KK17`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_mengajar`
--

CREATE TABLE `hasil_mengajar` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `PP01` int(100) NOT NULL,
  `PP02` int(100) NOT NULL,
  `PP03` int(100) NOT NULL,
  `PP04` int(100) NOT NULL,
  `PP05` int(100) NOT NULL,
  `PP06` int(100) NOT NULL,
  `PP07` int(100) NOT NULL,
  `PP08` int(100) NOT NULL,
  `PP09` int(100) NOT NULL,
  `PP10` int(100) NOT NULL,
  `PP11` int(100) NOT NULL,
  `PP12` int(100) NOT NULL,
  `PP13` int(100) NOT NULL,
  `PP14` int(100) NOT NULL,
  `PP15` int(100) NOT NULL,
  `PP16` int(100) NOT NULL,
  `PP17` int(100) NOT NULL,
  `PP18` int(100) NOT NULL,
  `PP19` int(100) NOT NULL,
  `PP20` int(100) NOT NULL,
  `KK01` int(100) NOT NULL,
  `KK02` int(100) NOT NULL,
  `KK03` int(100) NOT NULL,
  `KK04` int(100) NOT NULL,
  `KK05` int(100) NOT NULL,
  `KK06` int(100) NOT NULL,
  `KK07` int(100) NOT NULL,
  `KK08` int(100) NOT NULL,
  `KK09` int(100) NOT NULL,
  `KK10` int(100) NOT NULL,
  `KK11` int(100) NOT NULL,
  `KK12` int(100) NOT NULL,
  `KK13` int(100) NOT NULL,
  `KK14` int(100) NOT NULL,
  `KK15` int(100) NOT NULL,
  `KK16` int(100) NOT NULL,
  `KK17` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_mengajar`
--

INSERT INTO `hasil_mengajar` (`id`, `nokta`, `nama_lengkap`, `PP01`, `PP02`, `PP03`, `PP04`, `PP05`, `PP06`, `PP07`, `PP08`, `PP09`, `PP10`, `PP11`, `PP12`, `PP13`, `PP14`, `PP15`, `PP16`, `PP17`, `PP18`, `PP19`, `PP20`, `KK01`, `KK02`, `KK03`, `KK04`, `KK05`, `KK06`, `KK07`, `KK08`, `KK09`, `KK10`, `KK11`, `KK12`, `KK13`, `KK14`, `KK15`, `KK16`, `KK17`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_nilai`
--

CREATE TABLE `hasil_nilai` (
  `id` int(11) NOT NULL,
  `nokta` bigint(190) DEFAULT NULL,
  `nama_lengkap` varchar(190) NOT NULL,
  `ipk` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_nilai`
--

INSERT INTO `hasil_nilai` (`id`, `nokta`, `nama_lengkap`, `ipk`) VALUES
(1, 10101001, 'Ilham Azis Annaba', 0),
(2, 7202007001, 'SANI SUSANTO', 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0),
(4, 7202007003, 'PELE WIDJAJA', 0),
(5, 7202007004, 'WIMPY SANTOSA', 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0),
(7, 7202007006, 'FELIX HIDAYAT', 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0),
(12, 7202007011, 'ALTHO SAGARA', 0),
(13, 7202007012, 'DODDI YUDIANTO', 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0),
(16, 7202007016, 'ELSA NOVIANTI', 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0),
(18, 7202007018, 'ROBBY H WINARDI', 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0),
(23, 7202007023, 'BAYU WISATRIODA', 0),
(24, 7202007024, 'ALIM YUANDIA', 0),
(25, 7202007025, 'KHARISMAN LAIA', 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0),
(27, 7202007027, 'PARLINDUNGAN', 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0),
(30, 7202007030, 'MAWARDI AMIN', 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0),
(34, 7202007034, 'HENDRI', 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0),
(41, 7202007041, 'HENDRA', 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0),
(44, 7202007045, 'KHAIRUL SALEH', 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0),
(48, 7202007049, 'ABDUL HARIS', 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0),
(51, 7202007052, 'KHALAWI', 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0),
(53, 7202007054, 'FAHMI KUNCORO', 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0),
(55, 7202007056, 'RIZAL', 0),
(56, 7202007057, 'CLINTON GIRSANG', 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0),
(58, 7202007059, 'YUNAN HALIM', 0),
(59, 7202007060, 'SAMUN HARIS', 0),
(60, 7202007061, 'ADITYA KARYA', 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0),
(63, 7202007064, 'SANDHI KWANI', 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0),
(70, 7202007071, 'AGIL DARMAWAN', 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0),
(72, 7202007073, 'THE CIN HOK', 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0),
(74, 7202007075, 'ARWIN', 0),
(75, 7202007076, 'STEVANUS HERRY', 0),
(76, 7202007077, 'ISKANDAR', 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0),
(80, 7202007081, 'ANOM WIBISONO', 0),
(81, 7202007082, 'LASMAN DONNY', 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0),
(84, 7202007085, 'NORO KARTEDJO', 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0),
(87, 7202007043, 'MARYONO', 0),
(88, 7202007087, 'ADEE SUNTOSO', 0),
(89, 7202007091, 'ARIEF LEONANTO', 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0),
(92, 7202007090, 'METTA SUTRISNO', 0),
(93, 7202007092, 'ERIE HERYADI', 0),
(94, 7202007093, 'JACK JUNAIDY', 0),
(95, 7202007094, 'tarno', 0),
(96, 7202007095, 'tarni', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_organisasi`
--

CREATE TABLE `hasil_organisasi` (
  `id` int(100) NOT NULL,
  `nokta` bigint(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `SK01` int(100) NOT NULL,
  `SK02` int(100) NOT NULL,
  `SK03` int(100) NOT NULL,
  `SK04` int(100) NOT NULL,
  `SK05` int(100) NOT NULL,
  `SK06` int(100) NOT NULL,
  `SK07` int(100) NOT NULL,
  `SK08` int(100) NOT NULL,
  `SK09` int(100) NOT NULL,
  `SK10` int(100) NOT NULL,
  `status` int(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_organisasi`
--

INSERT INTO `hasil_organisasi` (`id`, `nokta`, `nama_lengkap`, `SK01`, `SK02`, `SK03`, `SK04`, `SK05`, `SK06`, `SK07`, `SK08`, `SK09`, `SK10`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_pelatihan`
--

CREATE TABLE `hasil_pelatihan` (
  `id` int(200) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `SK01` int(100) NOT NULL,
  `SK02` int(100) NOT NULL,
  `SK03` int(100) NOT NULL,
  `SK04` int(100) NOT NULL,
  `SK05` int(100) NOT NULL,
  `SK06` int(100) NOT NULL,
  `SK07` int(100) NOT NULL,
  `SK08` int(100) NOT NULL,
  `SK09` int(100) NOT NULL,
  `SK10` int(100) NOT NULL,
  `KU01` int(100) NOT NULL,
  `KU02` int(100) NOT NULL,
  `KU03` int(100) NOT NULL,
  `KU04` int(100) NOT NULL,
  `KU05` int(100) NOT NULL,
  `KU06` int(100) NOT NULL,
  `KU07` int(100) NOT NULL,
  `KU08` int(100) NOT NULL,
  `KU09` int(100) NOT NULL,
  `KU10` int(100) NOT NULL,
  `KU11` int(100) NOT NULL,
  `KU12` int(100) NOT NULL,
  `KU13` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_pelatihan`
--

INSERT INTO `hasil_pelatihan` (`id`, `nokta`, `nama_lengkap`, `SK01`, `SK02`, `SK03`, `SK04`, `SK05`, `SK06`, `SK07`, `SK08`, `SK09`, `SK10`, `KU01`, `KU02`, `KU03`, `KU04`, `KU05`, `KU06`, `KU07`, `KU08`, `KU09`, `KU10`, `KU11`, `KU12`, `KU13`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_pelatihanlain`
--

CREATE TABLE `hasil_pelatihanlain` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `SK01` int(11) NOT NULL,
  `SK02` int(11) NOT NULL,
  `SK03` int(11) NOT NULL,
  `SK04` int(11) NOT NULL,
  `SK05` int(11) NOT NULL,
  `SK06` int(11) NOT NULL,
  `SK07` int(11) NOT NULL,
  `SK08` int(11) NOT NULL,
  `SK09` int(11) NOT NULL,
  `SK10` int(11) NOT NULL,
  `KU01` int(100) NOT NULL,
  `KU02` int(100) NOT NULL,
  `KU03` int(100) NOT NULL,
  `KU04` int(100) NOT NULL,
  `KU05` int(100) NOT NULL,
  `KU06` int(100) NOT NULL,
  `KU07` int(100) NOT NULL,
  `KU08` int(100) NOT NULL,
  `KU09` int(100) NOT NULL,
  `KU10` int(100) NOT NULL,
  `KU11` int(100) NOT NULL,
  `KU12` int(100) NOT NULL,
  `KU13` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_pelatihanlain`
--

INSERT INTO `hasil_pelatihanlain` (`id`, `nokta`, `nama_lengkap`, `SK01`, `SK02`, `SK03`, `SK04`, `SK05`, `SK06`, `SK07`, `SK08`, `SK09`, `SK10`, `KU01`, `KU02`, `KU03`, `KU04`, `KU05`, `KU06`, `KU07`, `KU08`, `KU09`, `KU10`, `KU11`, `KU12`, `KU13`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_penelitian`
--

CREATE TABLE `hasil_penelitian` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `PP01` int(100) NOT NULL,
  `PP02` int(100) NOT NULL,
  `PP03` int(100) NOT NULL,
  `PP04` int(100) NOT NULL,
  `PP05` int(100) NOT NULL,
  `PP06` int(100) NOT NULL,
  `PP07` int(100) NOT NULL,
  `PP08` int(100) NOT NULL,
  `PP09` int(100) NOT NULL,
  `PP10` int(100) NOT NULL,
  `PP11` int(100) NOT NULL,
  `PP12` int(100) NOT NULL,
  `PP13` int(100) NOT NULL,
  `PP14` int(100) NOT NULL,
  `PP15` int(100) NOT NULL,
  `PP16` int(100) NOT NULL,
  `PP17` int(100) NOT NULL,
  `PP18` int(100) NOT NULL,
  `PP19` int(100) NOT NULL,
  `PP20` int(100) NOT NULL,
  `KU01` int(100) NOT NULL,
  `KU02` int(100) NOT NULL,
  `KU03` int(100) NOT NULL,
  `KU04` int(100) NOT NULL,
  `KU05` int(100) NOT NULL,
  `KU06` int(100) NOT NULL,
  `KU07` int(100) NOT NULL,
  `KU08` int(100) NOT NULL,
  `KU09` int(100) NOT NULL,
  `KU10` int(100) NOT NULL,
  `KU11` int(100) NOT NULL,
  `KU12` int(100) NOT NULL,
  `KU13` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_penelitian`
--

INSERT INTO `hasil_penelitian` (`id`, `nokta`, `nama_lengkap`, `PP01`, `PP02`, `PP03`, `PP04`, `PP05`, `PP06`, `PP07`, `PP08`, `PP09`, `PP10`, `PP11`, `PP12`, `PP13`, `PP14`, `PP15`, `PP16`, `PP17`, `PP18`, `PP19`, `PP20`, `KU01`, `KU02`, `KU03`, `KU04`, `KU05`, `KU06`, `KU07`, `KU08`, `KU09`, `KU10`, `KU11`, `KU12`, `KU13`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_pengertian`
--

CREATE TABLE `hasil_pengertian` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `SK01` int(100) NOT NULL,
  `SK02` int(100) NOT NULL,
  `SK03` int(100) NOT NULL,
  `SK04` int(100) NOT NULL,
  `SK05` int(100) NOT NULL,
  `SK06` int(100) NOT NULL,
  `SK07` int(100) NOT NULL,
  `SK08` int(100) NOT NULL,
  `SK09` int(100) NOT NULL,
  `SK10` int(100) NOT NULL,
  `PP01` int(100) NOT NULL,
  `PP02` int(100) NOT NULL,
  `PP03` int(100) NOT NULL,
  `PP04` int(100) NOT NULL,
  `PP05` int(100) NOT NULL,
  `PP06` int(100) NOT NULL,
  `PP07` int(100) NOT NULL,
  `PP08` int(100) NOT NULL,
  `PP09` int(100) NOT NULL,
  `PP10` int(100) NOT NULL,
  `PP11` int(100) NOT NULL,
  `PP12` int(100) NOT NULL,
  `PP13` int(100) NOT NULL,
  `PP14` int(100) NOT NULL,
  `PP15` int(100) NOT NULL,
  `PP16` int(100) NOT NULL,
  `PP17` int(100) NOT NULL,
  `PP18` int(100) NOT NULL,
  `PP19` int(100) NOT NULL,
  `PP20` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_pengertian`
--

INSERT INTO `hasil_pengertian` (`id`, `nokta`, `nama_lengkap`, `SK01`, `SK02`, `SK03`, `SK04`, `SK05`, `SK06`, `SK07`, `SK08`, `SK09`, `SK10`, `PP01`, `PP02`, `PP03`, `PP04`, `PP05`, `PP06`, `PP07`, `PP08`, `PP09`, `PP10`, `PP11`, `PP12`, `PP13`, `PP14`, `PP15`, `PP16`, `PP17`, `PP18`, `PP19`, `PP20`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_penghargaan`
--

CREATE TABLE `hasil_penghargaan` (
  `id` int(100) NOT NULL,
  `nokta` bigint(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `SK01` int(11) NOT NULL,
  `SK02` int(100) NOT NULL,
  `SK03` int(100) NOT NULL,
  `SK04` int(100) NOT NULL,
  `SK05` int(100) NOT NULL,
  `SK06` int(100) NOT NULL,
  `SK07` int(100) NOT NULL,
  `SK08` int(100) NOT NULL,
  `SK09` int(100) NOT NULL,
  `SK10` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_penghargaan`
--

INSERT INTO `hasil_penghargaan` (`id`, `nokta`, `nama_lengkap`, `SK01`, `SK02`, `SK03`, `SK04`, `SK05`, `SK06`, `SK07`, `SK08`, `SK09`, `SK10`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_seminar`
--

CREATE TABLE `hasil_seminar` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `KU01` int(100) NOT NULL,
  `KU02` int(100) NOT NULL,
  `KU03` int(100) NOT NULL,
  `KU04` int(100) NOT NULL,
  `KU05` int(100) NOT NULL,
  `KU06` int(100) NOT NULL,
  `KU07` int(100) NOT NULL,
  `KU08` int(100) NOT NULL,
  `KU09` int(100) NOT NULL,
  `KU10` int(100) NOT NULL,
  `KU11` int(100) NOT NULL,
  `KU12` int(100) NOT NULL,
  `KU13` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_seminar`
--

INSERT INTO `hasil_seminar` (`id`, `nokta`, `nama_lengkap`, `KU01`, `KU02`, `KU03`, `KU04`, `KU05`, `KU06`, `KU07`, `KU08`, `KU09`, `KU10`, `KU11`, `KU12`, `KU13`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_teknologi`
--

CREATE TABLE `hasil_teknologi` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `KK01` int(100) NOT NULL,
  `KK02` int(100) NOT NULL,
  `KK03` int(100) NOT NULL,
  `KK04` int(100) NOT NULL,
  `KK05` int(100) NOT NULL,
  `KK06` int(100) NOT NULL,
  `KK07` int(100) NOT NULL,
  `KK08` int(100) NOT NULL,
  `KK09` int(100) NOT NULL,
  `KK10` int(100) NOT NULL,
  `KK11` int(100) NOT NULL,
  `KK12` int(100) NOT NULL,
  `KK13` int(100) NOT NULL,
  `KK14` int(100) NOT NULL,
  `KK15` int(100) NOT NULL,
  `KK16` int(100) NOT NULL,
  `KK17` int(100) NOT NULL,
  `KU01` int(11) NOT NULL,
  `KU02` int(11) NOT NULL,
  `KU03` int(11) NOT NULL,
  `KU04` int(11) NOT NULL,
  `KU05` int(11) NOT NULL,
  `KU06` int(11) NOT NULL,
  `KU07` int(11) NOT NULL,
  `KU08` int(11) NOT NULL,
  `KU09` int(11) NOT NULL,
  `KU10` int(11) NOT NULL,
  `KU11` int(11) NOT NULL,
  `KU12` int(11) NOT NULL,
  `KU13` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_teknologi`
--

INSERT INTO `hasil_teknologi` (`id`, `nokta`, `nama_lengkap`, `KK01`, `KK02`, `KK03`, `KK04`, `KK05`, `KK06`, `KK07`, `KK08`, `KK09`, `KK10`, `KK11`, `KK12`, `KK13`, `KK14`, `KK15`, `KK16`, `KK17`, `KU01`, `KU02`, `KU03`, `KU04`, `KU05`, `KU06`, `KU07`, `KU08`, `KU09`, `KU10`, `KU11`, `KU12`, `KU13`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_usaha`
--

CREATE TABLE `hasil_usaha` (
  `id` int(150) NOT NULL,
  `nokta` bigint(150) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `KU01` int(100) NOT NULL,
  `KU02` int(100) NOT NULL,
  `KU03` int(100) NOT NULL,
  `KU04` int(100) NOT NULL,
  `KU05` int(100) NOT NULL,
  `KU06` int(100) NOT NULL,
  `KU07` int(100) NOT NULL,
  `KU08` int(100) NOT NULL,
  `KU09` int(100) NOT NULL,
  `KU10` int(100) NOT NULL,
  `KU11` int(100) NOT NULL,
  `KU12` int(100) NOT NULL,
  `KU13` int(100) NOT NULL,
  `KK01` int(100) NOT NULL,
  `KK02` int(100) NOT NULL,
  `KK03` int(100) NOT NULL,
  `KK04` int(100) NOT NULL,
  `KK05` int(100) NOT NULL,
  `KK06` int(100) NOT NULL,
  `KK07` int(100) NOT NULL,
  `KK08` int(100) NOT NULL,
  `KK09` int(100) NOT NULL,
  `KK10` int(100) NOT NULL,
  `KK11` int(100) NOT NULL,
  `KK12` int(100) NOT NULL,
  `KK13` int(100) NOT NULL,
  `KK14` int(100) NOT NULL,
  `KK15` int(100) NOT NULL,
  `KK16` int(100) NOT NULL,
  `KK17` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hasil_usaha`
--

INSERT INTO `hasil_usaha` (`id`, `nokta`, `nama_lengkap`, `KU01`, `KU02`, `KU03`, `KU04`, `KU05`, `KU06`, `KU07`, `KU08`, `KU09`, `KU10`, `KU11`, `KU12`, `KU13`, `KK01`, `KK02`, `KK03`, `KK04`, `KK05`, `KK06`, `KK07`, `KK08`, `KK09`, `KK10`, `KK11`, `KK12`, `KK13`, `KK14`, `KK15`, `KK16`, `KK17`, `status`) VALUES
(1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inovasi_karya`
--

CREATE TABLE `inovasi_karya` (
  `id` int(100) NOT NULL,
  `nokta` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `bulan` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `media` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `materi` varchar(200) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inovasi_karya`
--

INSERT INTO `inovasi_karya` (`id`, `nokta`, `nama_lengkap`, `bulan`, `judul`, `media`, `lokasi`, `materi`, `kompetensi`, `bukti_berkas`) VALUES
(2, 'nokta', 'nama_lengkap', 'bulan', 'judul', 'media', 'lokasi', 'materi', 'kompetensi', ''),
(3, '10101001', 'Ilham Azis', 'November 2010', 'penetas itik otomatis', 'instagram', 'ubp karawang', 'iot', 'SKU1, KK1', ''),
(6, '7202007055', 'EDIYANTO ARIEF', 'Maret 2000', 'Aplikasi Model ANSWERS dan AGNPS Untuk Memprediksi Aliran Permukaan, Erosi, Dan Sedimentasi di DAS Bengawan Solo Hulu', 'Jurnal UGM, Indonesia', 'INDONESIA', 'Membandingkan dan mengaplikasi dua model Hidrologi, untuk menghitung banjir, tingkat erosi dan sedimentasi. Tingkat sedimentasi akan mempengaruhi umur waduk. Selain itu juga menilai kandungan kimia ya', '', ''),
(7, '7202007055', 'EDIYANTO ARIEF', 'AGUATUS - 2020', 'Analisis Perbandingan Model Kontrak APBN dan APBD Terhadap Model Kontrak FIDIC', 'Jurnal KONSTRUKSIA, Indonesia', 'INDONESIA', 'Kontrak konstruksi adalah salah satu jaminan untuk memastikan keberhasilan proyek, oleh karena itu klausula-klausula nya harus efisien, adil dan berimbang. Makalah ini terdiri dari perbandingan Syarat', '', '55718110013-Ediyanto Arief-LOA.pdf'),
(8, '7202007049', 'ABDUL HARIS', 'Maret 2013', 'Sistem Pengendalian dan Monitoring Pembayaran Terpadu upaya mencegah â€œ/ menekan klaim interest delay payment', 'Perpustakaan PLN Pusdiklat', 'PLN Pusdiklat', 'â€¢	Membangun Aplikasi/Sistem pengendalian & pembayaran Terpadu ini dapat dikembangkan lingkupnya hingga ke PLN Pusat sehingga lebih optimal manfaatnya.\r\nâ€¢	Early Warning system  status invoice plus ', '', ''),
(9, '7202007049', 'ABDUL HARIS', 'Agustus 2018', 'Strategi Penyelesaian  Proyek Pembangkit MPP PLTMG Nias 25 MW Dalam Upaya Pencapaian Kinerja PT PLN (Persero) Unit Induk Pembangunan Pembangkit Sumatera & Perkuatan  Sistem Kelistrikan Di Pulau Nias', 'Perpustakaan PLN Pusdiklat', 'PLN Pusdiklat', 'â€¢	Membangun strategi untuk mengejar keterlambatan progress proyek dalam upaya untuk penyelesaian target proyek PLTMG Nias 25MW guna memperkuat system kelistrikan di pulau nias yang notabene masuk da', '', ''),
(11, '7202007038', 'ASEP RACHMATULLAH', '06 - 2020', 'Analysis of Accepted Claims for Extension of Time and Additional Cost in Water Building Projects in Banten Province', 'International Journal of Scientific Research and Engineering Development', 'India', 'Menganalisa klaim-klaim apa saja yang diajukan kontraktor pada pemberi pekerjaan sehingga dapat diminimasi atau bahkan dihindari pada proses pekerjaan-pekerjaan selanjutnya.', '', 'sertifikat IJSRED-V3I3P187 asep_001.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inovasi_makalah`
--

CREATE TABLE `inovasi_makalah` (
  `id` int(100) NOT NULL,
  `nokta` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `bulan` varchar(190) NOT NULL,
  `nama_lokakarya` varchar(190) NOT NULL,
  `penyelenggara` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `uraian` varchar(200) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inovasi_makalah`
--

INSERT INTO `inovasi_makalah` (`id`, `nokta`, `nama_lengkap`, `bulan`, `nama_lokakarya`, `penyelenggara`, `lokasi`, `judul`, `uraian`, `kompetensi`, `bukti_berkas`) VALUES
(1, '10101001', 'Ilham Azis', '2018', 'Citarum Harum', 'UNSIKA', 'Ristekdikti', 'Membuat peran penting melaksanakan citarum harum', 'Melaksanakan perna penting dalam penerapan pelaksanaan citarum harum', 'SK1, SK2', ''),
(3, '7202007049', 'ABDUL HARIS', 'Oktober- 2002', 'Loka Karya PLN Wilayah Kalimantan Selatan dan Kalimantan Tengah tahun 2002', 'PLN Wilayah Kalimantan Selatan dan Kalimantan Tengah', 'Banjarbaru Kalimantan Selatan', 'Metode Efektif Penggantian crank shaft Mesin Sulzer 12 ZV 40/46 study kasus pada PLTD Trisakti Unit 1.', 'Berdasarkan record dan data yang ada populasi mesin Desel 12 ZV 40/46 di PLN cukup banyak tersebar di unit unit PLTD dari mulai Sumatera, Kalimantar, Sulawesi, Nusa Tenggara Barat dan daerah lainnya .', '', ''),
(4, '7202007049', 'ABDUL HARIS', 'Januari 2008', 'Forum Efisiensi Drive Program PLN Sektor Barito Wilayah Kalimantan Selatan dan Kalimantan Tengah tahun 2007', 'PT PLN (Persero) Wilayah Kalimantan Selatan & Kalimantan Tengah Sektor Barito', 'Banjarmasin Kalimantan Selatan', 'HFO-NISASI HEAVY DUTY GAS TURBINE  Studi kasus PLTG Trisakti MS5001P  1 x 21 MW Banjarmasin', 'HFO-nisasi pada pusat-pusat Pembangkit Listrik Tenaga Gas (PLTG) yang masih menggunakan bahan bakar solar (HSD) mungkin menjadi salah satu alternatif upaya penekanan komposisi biaya bahan bakar yang n', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inovasi_teknologi`
--

CREATE TABLE `inovasi_teknologi` (
  `id` int(100) NOT NULL,
  `nokta` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `bulan` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `uraian` varchar(200) NOT NULL,
  `media` varchar(200) DEFAULT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inovasi_teknologi`
--

INSERT INTO `inovasi_teknologi` (`id`, `nokta`, `nama_lengkap`, `bulan`, `judul`, `uraian`, `media`, `kompetensi`, `bukti_berkas`) VALUES
(3, '10101001', 'Ilham Azis', '2018', 'Penerapan Ekonomi', 'Koran dan Radio', 'Menerapkan ekonomi dengan baik', 'KK1, KK2, KK3, KK4', ''),
(4, '10101001', 'Ilham Azis', '2020', 'Keamanan digital', 'Koran dan Radio', 'Penerapan keamanan digital dengan baik', 'KU1, KU2, SK1, SK2', ''),
(10, '7202007049', 'ABDUL HARIS', 'Maret 2013', 'Sistem Pengendalian dan Monitoring Pembayaran Terpadu upaya untuk mencegah â€œ menekan klaim interest delay payment', 'Perpustakaan PLN Pusdiklat', 'â€¢	Membangun Aplikasi/Sistem pengendalian & pembayaran Terpadu ini dapat dikembangkan lingkupnya hingga ke PLN Pusat sehingga lebih optimal manfaatnya.\r\nâ€¢	Early Warning system  status invoice plus ', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konversi_cpl`
--

CREATE TABLE `konversi_cpl` (
  `id` int(11) NOT NULL,
  `kodeHasil` int(11) DEFAULT NULL,
  `kodeKompetensi` varchar(20) NOT NULL,
  `kode` varchar(190) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `konversi_cpl` int(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konversi_cpl`
--

INSERT INTO `konversi_cpl` (`id`, `kodeHasil`, `kodeKompetensi`, `kode`, `keterangan`, `konversi_cpl`) VALUES
(1, 2, 'SK', 'SK01', 'bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius', 10),
(2, 2, 'SK', 'SK02', 'menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral, dan etika', 10),
(3, 2, 'SK', 'SK03', 'berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, bernegara, dan kemajuan peradaban berdasarkan Pancasila', 10),
(4, 2, 'SK', 'SK04', 'berperan sebagai warga negara yang bangga dan cinta tanah air, memiliki nasionalisme serta rasa tanggungjawab pada negara dan bangsa', 10),
(5, 2, 'SK', 'SK05', 'menghargai keanekaragaman budaya, pandangan, agama, dan kepercayaan, serta pendapat atau temuan orisinal orang lain', 10),
(6, 2, 'SK', 'SK06', 'bekerja sama dan memiliki kepekaan sosial serta kepedulian terhadap masyarakat dan lingkungan', 10),
(7, 2, 'SK', 'SK07', 'taat hukum dan disiplin dalam kehidupan bermasyarakat dan bernegara', 10),
(8, 2, 'SK', 'SK08', 'menginternalisasi nilai, norma, dan etika akademik', 10),
(9, 2, 'SK', 'SK09', 'menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri', 10),
(10, 2, 'SK', 'SK10', 'menginternalisasi semangat kemandirian, kejuangan, dan kewirausahaan', 10),
(11, 2, 'PP', 'PP01', 'memahami pengertian profesi, keprofesionalan, kode etik dan kode tata laku insinyur', 10),
(12, 2, 'PP', 'PP02', 'memahami kompetensi dan “body of knowledge” keinsinyuran', 10),
(13, 2, 'PP', 'PP03', 'mengenali tanggungjawab etika insinyur, kepekaan dan kepedulian akan tugas, fungsi dan tanggungjawabnya, serta akuntabel', 10),
(14, 2, 'PP', 'PP04', 'memahami Kode Etik insinyur Indonesia', 10),
(15, 2, 'PP', 'PP05', 'mampu mendiskusikan dilema pengambilan keputusan terkait etika keinsinyuran', 10),
(16, 2, 'PP', 'PP06', 'mampu meningkatkan kepekaan nurani dalam mengatasi ethical issues in engineering', 10),
(17, 2, 'PP', 'PP07', 'mampu menyusun rancangan (merumuskan, mempersiapkan data pendukung pilihan solusi dan rekomendasi) pengambilan keputusan masalah kasus etika keinsinyuran', 10),
(18, 2, 'PP', 'PP08', 'memahami cara melaksanakan perencanaan dan perancangan untuk memberi nilai tambah;', 10),
(19, 2, 'PP', 'PP09', 'memahami mengenai kesehatan, keselamatan dan kelestarian lingkungan', 10),
(20, 2, 'PP', 'PP10', 'memahami pengaruh faktor non teknik dan penerapan etika profesi dalam pelaksanaan pekerjaan; memahami Standar Keinsinyuran', 10),
(21, 2, 'PP', 'PP11', 'memahami cara melakukan analisa dan evaluasi data', 10),
(22, 2, 'PP', 'PP12', 'mampu menemu kenali kemampuan, kelemahan dan kekuatan tempat kerja; mampu bekerja sama dalam tim pada perioda waktu yang terbatas', 10),
(23, 2, 'PP', 'PP13', 'mampu melakukan seleksi kelayakan dan kepatutan untuk pengambilan keputusan', 10),
(24, 2, 'PP', 'PP14', 'mampu melakukan komunikasi dan koordinasi', 10),
(25, 2, 'PP', 'PP15', 'mampu mengenali tujuan dikeluarkannya kebijakan, prosedur mengenai keselamatan, kesehatan, keamanan kerja dan lingkungan serta manfaatnya dalam pekerjaan', 10),
(26, 2, 'PP', 'PP16', 'mampu mendemonstrasikan pemahaman mereka tentang latar belakang konsep investigasi dan sistem pelaporan dengan metode ICS (Incident Command System)', 10),
(27, 2, 'PP', 'PP17', 'mampu melakukan evaluasi terhadap behavior industri dalam implementasi prosedur investigasi yang telah ditetapkan', 10),
(28, 2, 'PP', 'PP18', 'mampu memberikan pemahaman tentang “Konsep Emergency Preparedness Process & System, sehingga mampu menyusun Emergency Preparedness System di tempat kerja', 10),
(29, 2, 'PP', 'PP19', 'memahami tahapan yang harus dilalui dalam melaksanakan investigasi K3L dan apa yang harus dilakukan pada masing-masing tahapan', 10),
(30, 2, 'PP', 'PP20', 'memiliki kesadaran yang diwujudkan dalam bentuk perilaku yang bertanggung jawab dalam melaksanakan keselamatan, kesehatan dan lingkungan kerja.', 10),
(31, 2, 'KU', 'KU01', 'mampu bekerja di bidang keahlian pokok untuk jenis pekerjaan yang spesifik dan memiliki kompetensi kerja yang minimal setara dengan standar kompetensi kerja profesinya', 10),
(32, 2, 'KU', 'KU02', 'mampu membuat keputusan yang independen dalam menjalankan pekerjaan profesinya berdasarkan pemikiran logis, kritis, sistematis, dan kreatif', 10),
(33, 2, 'KU', 'KU03', 'mampu mengomunikasikan pemikiran/argumen atau karya inovasi yang bermanfaat bagi pengembangan profesi dan kewirausahaan, yang dapat dipertanggungjawabkan secara ilmiah dan etika profesi, kepada masyar', 10),
(34, 2, 'KU', 'KU04', 'mampu melakukan evaluasi secara kritis terhadap hasil kerja dan keputusan yang dibuat dalam melaksanakan pekerjaannya oleh dirinya sendiri dan oleh sejawat', 10),
(35, 2, 'KU', 'KU05', 'mampu meningkatkan keahlian keprofesiannya pada bidang yang khusus melalui pelatihan dan pengalaman kerja', 10),
(36, 2, 'KU', 'KU06', 'mampu meningkatkan mutu sumber daya untuk pengembangan program strategis organisasi\r\n', 10),
(37, 2, 'KU', 'KU07', 'mampu memimpin suatu tim kerja untuk memecahkan masalah pada bidang profesinya', 10),
(38, 2, 'KU', 'KU08', 'mampu bekerja sama dengan profesi lain yang sebidang dalam menyelesaikan masalah pekerjaan bidang profesinya', 10),
(39, 2, 'KU', 'KU09', 'mampu mengembangkan dan memelihara jaringan kerja dengan masyarakat profesi dan kliennya', 10),
(40, 2, 'KU', 'KU10', 'mampu bertanggungjawab atas pekerjaan di bidang profesinya sesuai dengan kode etik profesinya', 10),
(41, 2, 'KU', 'KU11', 'mampu meningkatkan kapasitas pembelajaran secara mandiri', 10),
(42, 2, 'KU', 'KU12', 'mampu berkontribusi dalam evaluasi atau pengembangan kebijakan nasional dalam rangka peningkatan mutu pendidikan profesi atau pengembangan kebijakan nasional pada bidang profesinya', 10),
(43, 2, 'KU', 'KU13', 'mampu mendokumentasikan, menyimpan, mengaudit, mengamankan, dan menemukan kembali data dan informasi untuk keperluan pengembangan hasil kerja profesinya', 10),
(44, 2, 'KK', 'KK01', 'memahami tentang filosofi keinsinyuran, melalui pengalaman yang dilakukannya pada tempat melakukan kerja praktik', 10),
(45, 2, 'KK', 'KK02', 'memahami tentang arah perkembangan keinsinyuran pada area keinsinyuran dengan pengalamannya yang khusus ditempat kerja praktiknya', 10),
(46, 2, 'KK', 'KK03', 'mampu memahami tentang sistem industri atau sistem keteknikan (“engineering”) melalui sistem industri atau keteknikan yang digunakan di industri atau perusahaan keteknikan tempat yang bersangkutan mel', 10),
(47, 2, 'KK', 'KK04', 'mampu untuk melakukan pemecahan masalah yang ada di tempatnya melakukan kerja praktik', 10),
(48, 2, 'KK', 'KK05', 'mampu melakukan penulisan laporan lengkap sebagaimana laporan keinsinyuran yang sesuai dengan “term of reference” yang dikehendaki oleh pengguna jasa keinsinyuran', 10),
(49, 2, 'KK', 'KK06', 'mampu mempresentasikan dan mengkomunikasikan hasil kerja keinsinyurannya sebagai hasil dari kerja praktik yang dilakukannya', 10),
(50, 2, 'KK', 'KK07', 'didorong untuk menghasilkan kemampuan analisisnya terhadap masalah praktik keinsinyuran yang timbul', 10),
(51, 2, 'KK', 'KK08', 'mampu untuk mengembangkan ide-ide dan solusinya sendiri, dan praktik menerapkan pengetahuan teoritisnya untuk mengatasi masalah', 10),
(52, 2, 'KK', 'KK09', 'mampu mempersiapkan diri menghadapi situasi krisis dengan berbagai lingkungan professional keinsinyuran/industri', 10),
(53, 2, 'KK', 'KK10', 'mampu memahami komunikasi lintas disiplin dan mengapresiasi disiplin lainnya', 10),
(54, 2, 'KK', 'KK11', 'memahami akar dan esensi permasalahan dan penyelesaian keinsinyuran', 10),
(55, 2, 'KK', 'KK12', 'memahami kerangka acuan kerja (TOR) sebagai pembicara pada seminar, workshop atau diskusi ', 10),
(56, 2, 'KK', 'KK13', 'memahami tema umum dan sub tema yang diminta', 10),
(57, 2, 'KK', 'KK14', 'mampu menyusun materi', 10),
(58, 2, 'KK', 'KK15', 'mampu menyampaikan materi secara runtut dan terstruktur sesuai waktu yang dialokasikan', 10),
(59, 2, 'KK', 'KK16', 'mampu memahami dan menjawab pertanyaan', 10),
(60, 2, 'KK', 'KK17', 'mampu melakukan diskusi dan komunikasi', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `manufaktur`
--

CREATE TABLE `manufaktur` (
  `id` int(100) NOT NULL,
  `nokta` varchar(200) DEFAULT NULL,
  `nama_lengkap` varchar(200) DEFAULT NULL,
  `perioda` varchar(200) NOT NULL,
  `intansi` varchar(200) NOT NULL,
  `nama_proyek` varchar(190) DEFAULT NULL,
  `lokasi` varchar(200) DEFAULT NULL,
  `jabatan` varchar(200) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manufaktur`
--

INSERT INTO `manufaktur` (`id`, `nokta`, `nama_lengkap`, `perioda`, `intansi`, `nama_proyek`, `lokasi`, `jabatan`, `kegiatan`, `kompetensi`, `bukti_berkas`) VALUES
(20, '10101001', 'Ilham Azis', '2020', 'UBP', 'APLIKASI IT', 'KARAWANG', 'KEPALA IT', 'RUNNING', 'SK1', ''),
(22, '10101001', 'Ilham Azis', '2020', 'Asia Citra Pratama', 'Membuat aplikasi manufaktur berbasis web', 'Jakarta', 'Ketua Umum', 'Perancangan sistem kerja aplikasi manufaktur', 'KK1, KK2, KK3', ''),
(26, '7202007055', 'EDIYANTO ARIEF', '2019', 'PT PANCA GUNA DUTA', 'Supervisi Pembangunan Relokasi Jembatan Cimake Pada Bendungan Sindang Heula', 'SERANG BANTEN', 'DIREKTUR UTAMA', 'Supervisi Pembangunan Jembatan', '', 'FAM EDIYANTO ARIEF.pdf'),
(29, '7202007049', 'ABDUL HARIS', '2011', 'PT PLN (Persero) Unit Induk Pembangunan Pembangkit Thermal Jawa Bali,  Proyek Rehabilitasi PLTU Suralaya Unit 1-4 (4x400MW), Marubeni Corporation Taksago Jepang', 'Proyek Rehabilitasi PLTU Suralaya Unit 1 -4 (4x400 MW), ', 'suralaya', 'PLT Deputi manajer Administrasi Teknik & pelaporan', 'Desain Review Meeting Proyek Rehabilitasi PLTU Suralaya Unit 1-4 (4x400MW) Pekerjaan Electrical takasago Jepang', '', ''),
(30, '7202007049', 'ABDUL HARIS', '2015', 'PT PLN (Persero) Unit Induk Pembangunan VIII, CNTIC, Surabaya Jawa Timur', ' Proyek PLTU Adipala 600 MW', 'Adipala Jawa Tengah', 'Deputi manajer Administrasi Teknik & pelaporan', 'Desain Review Meeting 5rd Proyek PLTU Adipala 600 MW ', '', ''),
(31, '7202007049', 'ABDUL HARIS', '2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat,', 'Proyek PLTU Lontar Extension 315 MW, Sumitomo Corporation â€“ IHI Tokyo Jepang', 'Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', 'Desain & Approval Metode Soil Implrovement PLTU Lontar Extension 315 MW ', '', ''),
(32, '7202007049', 'ABDUL HARIS', '2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat', 'Proyek PLTU Lontar Extension 315 MW, Sumitomo Corporation â€“ IHI Tokyo Jepang', 'Tokyo Jepang', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', 'Desain Review Meeting Proyek PLTU Lontar Extension 315 MW Pekerjaan Civil, Mekanikal, Elektrkal dan I&C', '', ''),
(33, '7202007049', 'ABDUL HARIS', '2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat', 'Proyek PLTU Lontar Extension 315 MW, Sumitomo Corporation â€“ IHI Tokyo Jepang', 'Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', 'Desain Site Office dan Lay down Area 11 Ha, Jalan akses Proyek, Approval Metode Konstruksi Pilling pondasi Power House, CW Pump House, GIS Extension, Cloriation Plant Building, Jalur CW Pipe, Jetty Ex', '', ''),
(34, '7202007049', 'ABDUL HARIS', '2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat', 'Proyek PLTU Lontar Extension 315 MW, Sumitomo Corporation â€“ IHI Tokyo Jepang', 'Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', 'Desain & Approval Metode konstruksi Chimney PLTU Lontar Extension setinggi 127 Meter ', '', ''),
(35, '7202007049', 'ABDUL HARIS', '2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat', 'Proyek PLTU Lontar Extension 315 MW, Sumitomo Corporation â€“ IHI Tokyo Jepang', 'Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', 'Desain & Approval Metode Konstruksi Boiler Structure PLTU Lontar Extension 4x315 MW ', '', ''),
(36, '7202007049', 'ABDUL HARIS', '2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat', 'Proyek Pembangunan Rudundant Coal Yard PLTU Lontar 3x 315  MW, ', 'Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', 'Desain & Metode Soil Improvement Extension Coal Yard PLTU Lontar Extension 4x315 MW ', '', ''),
(37, '7202007049', 'ABDUL HARIS', '2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat', 'Proyek PLTU Lontar Extension 315 MW, Sumitomo Corporation â€“ IHI Tokyo Jepang', 'Cilegon Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', 'Manufacturing Boiler Steel Structure Proyek PLTU Lontar Extension 1x 315 MW', '', ''),
(38, '7202007049', 'ABDUL HARIS', '2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat', 'Proyek PLTU Lontar Extension 315 MW, Sumitomo Corporation â€“ IHI Tokyo Jepang', 'Cilegon Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', 'Manufacturing Boiler Steel Structure Proyek PLTU Lontar Extension 1x 315 MW', '', ''),
(39, '7202007049', 'ABDUL HARIS', '2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat', 'Proyek PLTU Lontar Extension 315 MW, Sumitomo Corporation â€“ IHI Tokyo Jepang', 'Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', 'Desain dan Approval Metode Konstruksi Jetty Extension  sepanjang 120 Meter, ', '', ''),
(40, '7202007049', 'ABDUL HARIS', '2017', 'PT PLN (Persero) Unit Induk Pembangunan Jawa Bagian Barat', 'Proyek PLTU Lontar Extension 315 MW, Sumitomo Corporation â€“ IHI Tokyo Jepang', 'Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', 'Desain dan Approval Metode Konstruksi Coal Conveyor line BC-0  2x 120 Meter kapasitas 2x 2000 Ton /jam  PLTU Lontar Extension 315 MW ', '', ''),
(41, '7202007049', 'ABDUL HARIS', '2018', 'PT PLN (Persero) Unit Induk Pembangunan Pembangkit Sumatera', 'Proyek PLTMG Nias 25 MW, Nias Sumatera Utara', 'Nias Sumatera Utara --Jakarta', 'Senior manajer Operasi Konstruksi II', 'Desain Review Meeting Proyek PLTMG Nias 25 MW. Pekerjaan Civil, Mekanikal, Elektrkal dan I&C', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id` int(11) NOT NULL,
  `kodeMK` varchar(190) DEFAULT NULL,
  `mata_kuliah` varchar(190) DEFAULT NULL,
  `sks` int(190) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `kodeMK`, `mata_kuliah`, `sks`) VALUES
(1, 'PPI 2018101-02', 'Kode Etik dan Etika Profesi Insiyur', 2),
(2, 'PPI 2018102-02', 'Profesionalisme', 2),
(3, 'PPI 2018103-02', 'Keselamatan, Kesehatan, Keamanan Kerja dan Lingkungan', 2),
(4, 'PPI 2018104-04', 'Studi Kasus', 4),
(5, 'PPI 2018105-05', 'Seminar, Workshop dan Diskusi', 2),
(6, 'PPI 2018201-12', 'Praktek Keinsiyuran', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk_indeks`
--

CREATE TABLE `mk_indeks` (
  `id` int(11) NOT NULL,
  `id_mk` int(11) NOT NULL,
  `kompetensi` varchar(11) NOT NULL,
  `nilai_indeks` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mk_indeks`
--

INSERT INTO `mk_indeks` (`id`, `id_mk`, `kompetensi`, `nilai_indeks`) VALUES
(1, 1, 'SK01', 1),
(2, 1, 'SK02', 1),
(3, 1, 'SK07', 0.4),
(4, 1, 'SK08', 1),
(5, 1, 'PP01', 1),
(6, 1, 'PP02', 1),
(7, 1, 'PP03', 1),
(8, 1, 'PP04', 1),
(9, 1, 'PP05', 1),
(10, 1, 'PP06', 1),
(11, 1, 'PP07', 1),
(12, 1, 'KU02', 1),
(13, 1, 'KU10', 0.5),
(14, 2, 'SK01', 0.3),
(15, 2, 'SK09', 0.5),
(16, 2, 'PP08', 1),
(17, 2, 'PP09', 1),
(18, 2, 'PP10', 1),
(19, 2, 'PP11', 1),
(20, 2, 'PP12', 1),
(21, 2, 'PP13', 1),
(22, 2, 'PP14', 1),
(23, 2, 'KU01', 1),
(24, 2, 'KU04', 1),
(25, 2, 'KU06', 0.5),
(26, 2, 'KU13', 1),
(27, 3, 'SK04', 0.5),
(28, 3, 'SK06', 0.5),
(29, 3, 'SK07', 0.3),
(30, 3, 'PP15', 1),
(31, 3, 'PP16', 1),
(32, 3, 'PP17', 1),
(33, 3, 'PP18', 1),
(34, 3, 'PP19', 1),
(35, 3, 'PP20', 1),
(36, 3, 'KU12', 1),
(37, 4, 'SK05', 0.3),
(38, 4, 'KU05', 1),
(39, 4, 'KU07', 0.5),
(40, 4, 'KU08', 0.5),
(41, 4, 'KK07', 1),
(42, 4, 'KK08', 1),
(43, 4, 'KK09', 1),
(44, 4, 'KK10', 1),
(45, 4, 'KK11', 1),
(46, 5, 'SK05', 0.2),
(47, 5, 'KU03', 1),
(48, 5, 'KU11', 1),
(49, 6, 'SK03', 1),
(50, 6, 'SK04', 0.5),
(51, 6, 'SK05', 0.5),
(52, 6, 'SK06', 0.5),
(53, 6, 'SK09', 0.5),
(55, 6, 'SK10', 1),
(56, 6, 'KU06', 0.5),
(57, 6, 'KU07', 0.5),
(58, 6, 'KU08', 0.5),
(59, 6, 'KU09', 1),
(60, 6, 'KU10', 0.5),
(61, 6, 'KK01', 1),
(62, 6, 'KK02', 1),
(63, 6, 'KK03', 1),
(64, 6, 'KK04', 1),
(65, 6, 'KK05', 1),
(66, 6, 'KK06', 1),
(67, 6, 'KK12', 1),
(68, 6, 'KK13', 1),
(69, 6, 'KK14', 1),
(70, 6, 'KK15', 1),
(71, 6, 'KK16', 1),
(72, 6, 'KK17', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nokta` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `nama_lengkap`, `nokta`, `jenis_kelamin`, `username`, `password`, `photo`, `level`) VALUES
(2, 'Admin Unpar', '1', 'Laki Laki', 'admin', 'admin', 'profile.png', 'admin'),
(4, 'Kiki Ahmad Baihaqi M.Kom', '10340101', 'Laki - Laki', 'dosen', 'dosen', 'rocket.png', 'dosen'),
(13, 'SANI SUSANTO', '7202007001', 'Laki-Laki', '7202007001@student.unpar.ac.id', 'Susanto001', '', 'mahasiswa'),
(14, 'ANASTASIA CAROLINE SUTANDI', '7202007002', 'Perempuan', '7202007002@student.unpar.ac.id', 'Sutandi002', '', 'mahasiswa'),
(15, 'PELE WIDJAJA', '7202007003', 'Laki-Laki', '7202007003@student.unpar.ac.id', 'Widjaja003', '', 'mahasiswa'),
(16, 'WIMPY SANTOSA', '7202007004', 'Perempuan', '7202007004@student.unpar.ac.id', 'Santosa004', '', 'mahasiswa'),
(17, 'HELMY HERMAWAN TJAHJANTO', '7202007005', 'Laki-Laki', '7202007005@student.unpar.ac.id', 'Tjahjanto005', '', 'mahasiswa'),
(18, 'FELIX HIDAYAT', '7202007006', 'Laki-Laki', '7202007006@student.unpar.ac.id', 'Hidayat006', '', 'mahasiswa'),
(19, 'ALBERT WICAKSONO', '7202007007', 'Laki-Laki', '7202007007@student.unpar.ac.id', 'Wicaksono007', '22.jpg', 'mahasiswa'),
(20, 'ANTON SOEKIMAN', '7202007008', 'Laki-Laki', '7202007008@student.unpar.ac.id', 'Soekiman008', '', 'mahasiswa'),
(21, 'YOHANES KARYADI KUSLIANSJAH', '7202007009', 'Laki-Laki', '7202007009@student.unpar.ac.id', 'Kusliansjah009', 'ret 3 YKK red background-min.jpg', 'mahasiswa'),
(22, 'LIDYA FRANSISCA TJONG', '7202007010', 'Perempuan', '7202007010@student.unpar.ac.id', 'Tjong010', '01 250kb asf Merah.jpg', 'mahasiswa'),
(23, 'ALTHO SAGARA', '7202007011', 'Laki-Laki', '7202007011@student.unpar.ac.id', 'Sagara011', '', 'mahasiswa'),
(25, 'DODDI YUDIANTO', '7202007012', 'Laki-Laki', '7202007012@student.unpar.ac.id', 'Yudianto012', '', 'mahasiswa'),
(26, 'DINA RUBIANA WIDARDA', '7202007013', 'Perempuan', '7202007013@student.unpar.ac.id', 'Widarda013', '', 'mahasiswa'),
(28, 'BAMBANG ADIRIJANTO', '7202007015', 'Laki-Laki', '7202007015@student.unpar.ac.id', 'Adirijanto015', '', 'mahasiswa'),
(29, 'ELSA NOVIANTI', '7202007016', 'Perempuan', '7202007016@student.unpar.ac.id', 'Novianti016', '', 'mahasiswa'),
(30, 'IWAN SUPRIJANTO', '7202007017', 'Laki-Laki', '7202007017@student.unpar.ac.id', 'Suprijanto017', '', 'mahasiswa'),
(31, 'ROBBY H WINARDI', '7202007018', 'Laki-Laki', '7202007018@student.unpar.ac.id', 'Winardi018', '', 'mahasiswa'),
(33, 'ANDRI SASTRAWAN', '7202007019', 'Laki-Laki', '7202007019@student.unpar.ac.id', 'Sastrawan019', 'andri_sastrawan_photograph.jpg', 'mahasiswa'),
(34, 'WEDDY BERNADI SUDIRMAN', '7202007020', 'Laki-Laki', '7202007020@student.unpar.ac.id', 'Sudirman020', '', 'mahasiswa'),
(35, 'FERDYAN HIJRAH KUSUMA', '7202007021', 'Laki-Laki', '7202007021@student.unpar.ac.id', 'Kusuma021', '', 'mahasiswa'),
(36, 'AGUS KUSWARDOYO', '7202007022', 'Laki-Laki', '7202007022@student.unpar.ac.id', 'Kuswardoyo022', '', 'mahasiswa'),
(37, 'BAYU WISATRIODA', '7202007023', 'Laki-Laki', '7202007023@student.unpar.ac.id', 'Wisatrioda023', '', 'mahasiswa'),
(38, 'ALIM YUANDIA', '7202007024', 'Laki-Laki', '7202007024@student.unpar.ac.id', 'Yuandia024', 'Alim Yuandia Pass (1).jpg', 'mahasiswa'),
(39, 'KHARISMAN LAIA', '7202007025', 'Pria', '7202007025@student.unpar.ac.id', 'Laia025', '00 Photo.jpg', 'mahasiswa'),
(40, 'MISDJAN ENDANG SUBRATA', '7202007026', 'Laki-Laki', '7202007026@student.unpar.ac.id', 'Subrata026', '', 'mahasiswa'),
(41, 'PARLINDUNGAN', '7202007027', 'Laki-Laki', '7202007027@student.unpar.ac.id', 'Parlindungan027', '', 'mahasiswa'),
(42, 'ENNI MOELIATI SOETANTO', '7202007028', 'Perempuan', '7202007028@student.unpar.ac.id', 'Soetanto028', '', 'mahasiswa'),
(43, 'DEFRY SETYO PRAYOGO', '7202007029', 'Laki-Laki', '7202007029@student.unpar.ac.id', 'Prayogo029', '', 'mahasiswa'),
(44, 'MAWARDI AMIN', '7202007030', 'Laki-Laki', '7202007030@student.unpar.ac.id', 'Amin030', '', 'mahasiswa'),
(45, 'RONNY APRISAPUTRA', '7202007031', 'Laki-Laki', '7202007031@student.unpar.ac.id', 'Aprisaputra031', '', 'mahasiswa'),
(46, 'ANJAR SUCAHYA', '7202007032', 'Laki-Laki', '7202007032@student.unpar.ac.id', 'Sucahya032', '', 'mahasiswa'),
(47, 'VENDIK SUDARIANTO', '7202007033', 'Laki-Laki', '7202007033@student.unpar.ac.id', 'Sudarianto033', '', 'mahasiswa'),
(48, 'HENDRI', '7202007034', 'Laki-Laki', '7202007034@student.unpar.ac.id', 'Hendri034', '', 'mahasiswa'),
(49, 'JIMMY WIRYANTO', '7202007035', 'Laki-Laki', '7202007035@student.unpar.ac.id', 'Wiryanto035', '', 'mahasiswa'),
(50, 'EDWIN LAURENCIS HENDRIKUS', '7202007036', 'Laki-Laki', '7202007036@student.unpar.ac.id', 'Hendrikus036', '', 'mahasiswa'),
(51, 'SARWONO HARDJOMULJADI', '7202007037', 'Laki-Laki', '7202007037@student.unpar.ac.id', 'Hardjomuljadi037', '', 'mahasiswa'),
(52, 'ASEP RACHMATULLAH', '7202007038', 'Laki-Laki', '7202007038@student.unpar.ac.id', 'Rachmatullah038', 'pas photo Asep S2 new.jpeg', 'mahasiswa'),
(53, 'CHRISTIAN ARIEF', '7202007039', 'Laki-Laki', '7202007039@student.unpar.ac.id', 'Arief039', '', 'mahasiswa'),
(54, 'ARIE ANDRIANUS CAHYADI THALIB', '7202007040', 'Laki-Laki', '7202007040@student.unpar.ac.id', 'Thalib040', '', 'mahasiswa'),
(55, 'HENDRA', '7202007041', 'Laki-Laki', '7202007041@student.unpar.ac.id', 'Hendra041', '', 'mahasiswa'),
(56, 'BUDI JUWONO SUWITOATMODJO', '7202007042', 'Laki-Laki', '7202007042@student.unpar.ac.id', 'Suwitoatmodjo042', '', 'mahasiswa'),
(58, 'I NENGAH SUKERTHA', '7202007044', 'Laki-Laki', '7202007044@student.unpar.ac.id', 'Sukertha044', '', 'mahasiswa'),
(59, 'KHAIRUL SALEH', '7202007045', 'Laki-Laki', '7202007045@student.unpar.ac.id', 'Saleh045', '', 'mahasiswa'),
(60, 'NANDA DANI ANDRIANTO', '7202007046', 'Laki-Laki', '7202007046@student.unpar.ac.id', 'Andrianto046', '', 'mahasiswa'),
(61, 'NOVI AGUSTIAN TANUSAPUTRA', '7202007047', 'Perempuan', '7202007047@student.unpar.ac.id', 'Tanusaputra047', '', 'mahasiswa'),
(62, 'DEDI KHAIRUNAS', '7202007048', 'Laki-Laki', '7202007048@student.unpar.ac.id', 'Khairunas048', '', 'mahasiswa'),
(63, 'ABDUL HARIS', '7202007049', 'Laki-Laki', '7202007049@student.unpar.ac.id', 'Haris049', '20181027_165251.png', 'mahasiswa'),
(64, 'I KOMANG PANDE JUNIARTA, ST, IPP', '7202007050', 'Laki-Laki', '7202007050@student.unpar.ac.id', 'Ipp050', '', 'mahasiswa'),
(65, 'AKHMAD MUSTAQIM', '7202007051', 'Laki-Laki', '7202007051@student.unpar.ac.id', 'Mustaqim051', '', 'mahasiswa'),
(66, 'KHALAWI', '7202007052', 'Laki-Laki', '7202007052@student.unpar.ac.id', 'Khalawi052', '', 'mahasiswa'),
(67, 'INTAN OCKTAVIANY', '7202007053', 'Perempuan', '7202007053@student.unpar.ac.id', 'Ocktaviany053', '', 'mahasiswa'),
(68, 'FAHMI KUNCORO', '7202007054', 'Laki-Laki', '7202007054@student.unpar.ac.id', 'Kuncoro054', '', 'mahasiswa'),
(69, 'EDIYANTO ARIEF', '7202007055', 'Laki-Laki', '7202007055@student.unpar.ac.id', 'Arief055', '2.FOTO BIRU.jpg', 'mahasiswa'),
(70, 'RIZAL', '7202007056', 'Laki-Laki', '7202007056@student.unpar.ac.id', 'Rizal056', '', 'mahasiswa'),
(71, 'CLINTON GIRSANG', '7202007057', 'Laki-Laki', '7202007057@student.unpar.ac.id', 'Girsang057', '', 'mahasiswa'),
(72, 'WAHYU KURNIAWAN', '7202007058', 'Laki-Laki', '7202007058@student.unpar.ac.id', 'Kurniawan058', '', 'mahasiswa'),
(73, 'YUNAN HALIM', '7202007059', 'Laki-Laki', '7202007059@student.unpar.ac.id', 'Halim059', '', 'mahasiswa'),
(74, 'SAMUN HARIS', '7202007060', 'Laki-Laki', '7202007060@student.unpar.ac.id', 'Haris060', '', 'mahasiswa'),
(75, 'ADITYA KARYA', '7202007061', 'Laki-Laki', '7202007061@student.unpar.ac.id', 'Karya061', '', 'mahasiswa'),
(76, 'ADIAN MUHAMMAD RIDHO', '7202007062', 'Laki-Laki', '7202007062@student.unpar.ac.id', 'Ridho062', '', 'mahasiswa'),
(77, 'DWI NANDYA YULINDA', '7202007063', 'Perempuan', '7202007063@student.unpar.ac.id', 'Yulinda063', '', 'mahasiswa'),
(78, 'SANDHI KWANI', '7202007064', 'Laki-Laki', '7202007064@student.unpar.ac.id', 'Kwani064', '', 'mahasiswa'),
(79, 'HARYANTO SOFYAN', '7202007065', 'Laki-Laki', '7202007065@student.unpar.ac.id', 'Sofyan065', '', 'mahasiswa'),
(80, 'SYARIF BURHANUDDIN', '7202007066', 'Laki-Laki', '7202007066@student.unpar.ac.id', 'Burhanuddin066', '', 'mahasiswa'),
(81, 'IVAN ADE SOFIYAN', '7202007067', 'Laki-Laki', '7202007067@student.unpar.ac.id', 'Sofiyan067', '', 'mahasiswa'),
(82, 'BONDAN WIDI ANGGORO', '7202007068', 'Laki-Laki', '7202007068@student.unpar.ac.id', 'Anggoro068', '', 'mahasiswa'),
(83, 'ARIANI CHITRA LESTARI', '7202007069', 'Perempuan', '7202007069@student.unpar.ac.id', 'Lestari069', '', 'mahasiswa'),
(84, 'EUFRAT AGRIZASYAH', '7202007070', 'Laki-Laki', '7202007070@student.unpar.ac.id', 'Agrizasyah070', '05 FOTO EUFRAT.jpg', 'mahasiswa'),
(85, 'AGIL DARMAWAN', '7202007071', 'Laki-Laki', '7202007071@student.unpar.ac.id', 'Darmawan071', '', 'mahasiswa'),
(86, 'NUNUNG WIDYANINGSIH', '7202007072', 'Perempuan', '7202007072@student.unpar.ac.id', 'Widyaningsih072', '', 'mahasiswa'),
(87, 'THE CIN HOK', '7202007073', 'Laki-Laki', '7202007073@student.unpar.ac.id', 'Hok073', '', 'mahasiswa'),
(88, 'ANGGIE PRASETYA DINATA', '7202007074', 'Pria', '7202007074@student.unpar.ac.id', 'Dinata074', '', 'mahasiswa'),
(89, 'ARWIN', '7202007075', 'Laki-Laki', '7202007075@student.unpar.ac.id', 'Arwin075', '', 'mahasiswa'),
(90, 'STEVANUS HERRY', '7202007076', 'Laki-Laki', '7202007076@student.unpar.ac.id', 'Herry076', '', 'mahasiswa'),
(91, 'ISKANDAR', '7202007077', 'Laki-Laki', '7202007077@student.unpar.ac.id', 'Iskandar077', '', 'mahasiswa'),
(92, 'LUSSI ERNIAWATI', '7202007078', 'Perempuan', '7202007078@student.unpar.ac.id', 'Erniawati078', '', 'mahasiswa'),
(93, 'NICKY STANLEY HALIM', '7202007079', 'Laki-Laki', '7202007079@student.unpar.ac.id', 'Halim079', '', 'mahasiswa'),
(94, 'MOHAMMAD ERSHAM ARSYAD', '7202007080', 'Laki-Laki', '7202007080@student.unpar.ac.id', 'Arsyad080', '', 'mahasiswa'),
(95, 'ANOM WIBISONO', '7202007081', 'Laki-Laki', '7202007081@student.unpar.ac.id', 'Wibisono081', '', 'mahasiswa'),
(96, 'LASMAN DONNY', '7202007082', 'Laki-Laki', '7202007082@student.unpar.ac.id', 'Donny082', '', 'mahasiswa'),
(97, 'ANGELICA TANISIA JOZAR', '7202007083', 'Perempuan', '7202007083@student.unpar.ac.id', 'Jozar083', '', 'mahasiswa'),
(98, 'WIRYANTO DEWOBROTO', '7202007084', 'Laki-Laki', '7202007084@student.unpar.ac.id', 'Dewobroto084', '', 'mahasiswa'),
(99, 'NORO KARTEDJO', '7202007085', 'Laki-Laki', '7202007085@student.unpar.ac.id', 'Kartedjo085', 'NK_putih 2.jpg', 'mahasiswa'),
(100, 'ALEXANDER DIAN SUKIRNO', '7202007086', 'Laki-Laki', '7202007086@student.unpar.ac.id', 'Sukirno086', '', 'mahasiswa'),
(101, 'BOBBY MINOLA GINTING', '7202007014', 'Laki-Laki', '7202007014@student.unpar.ac.id', 'Ginting014', '', 'mahasiswa'),
(102, 'MARYONO', '7202007043', 'Laki-Laki', '7202007043@student.unpar.ac.id', 'Maryono043', '', 'mahasiswa'),
(103, 'ADEE SUNTOSO', '7202007087', 'Laki-Laki', '7202007087@student.unpar.ac.id', 'Suntoso087', '', 'mahasiswa'),
(104, 'ARIEF LEONANTO', '7202007091', 'Laki-Laki', '7202007091@student.unpar.ac.id', 'Leonanto091', 'AL 2020 2x3 copy.jpg', 'mahasiswa'),
(105, 'MOHAMAD WIDIARSO', '7202007088', 'Laki-Laki', '7202007088@student.unpar.ac.id', 'Widiarso088', '', 'mahasiswa'),
(106, 'EDIANSJAH ZULKIFLI', '7202007089', 'Laki-Laki', '7202007089@student.unpar.ac.id', 'Zulkifli089', '', 'mahasiswa'),
(107, 'METTA SUTRISNO', '7202007090', 'Perempuan', '7202007090@student.unpar.ac.id', 'Sutrisno090', '', 'mahasiswa'),
(108, 'ERIE HERYADI', '7202007092', 'Laki-Laki', '7202007092@student.unpar.ac.id', 'Heryadi092', '', 'mahasiswa'),
(109, 'JACK JUNAIDY', '7202007093', 'Laki-Laki', '7202007093@student.unpar.ac.id', 'Junaidy093', '', 'mahasiswa'),
(110, 'tarno', '7202007094', 'Laki-Laki', 'tarno', 'tarno', '', 'mahasiswa'),
(111, 'tarni', '7202007095', 'Laki-Laki', 'tarni', 'tarni', '', 'dosen'),
(112, 'Ilham Azis Annaba', '10101001', 'Laki-Laki', 'ilham', 'ilham', '010-lightbulb.png', 'mahasiswa'),
(115, 'kaka', '12', 'Laki-Laki', 'kaka', 'kaka', '', 'mahasiswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar_keinsinyuran`
--

CREATE TABLE `seminar_keinsinyuran` (
  `id` int(100) NOT NULL,
  `nokta` varchar(190) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `bulan` varchar(200) NOT NULL,
  `nama_seminar` varchar(200) NOT NULL,
  `penyelenggara` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `uraian` varchar(200) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seminar_keinsinyuran`
--

INSERT INTO `seminar_keinsinyuran` (`id`, `nokta`, `nama_lengkap`, `bulan`, `nama_seminar`, `penyelenggara`, `lokasi`, `uraian`, `kompetensi`, `bukti_berkas`) VALUES
(1, '147263192', 'Jorke Alkawiyu', '2020', 'Citarum Harum', 'UBP Tech', 'Karawang', 'Penerapan citarum harum untuk sungai dikarawang', 'KK1, KK2, KU1, KU2', ''),
(2, '10101001', 'Ilham Azis', '2020', 'Seminar Internet Of Things', 'UBP Tech', 'Resinda Hotel', 'Membahas Tentang Internet Of Things', 'KK1, KK2, KU1, KU2', ''),
(3, '7202007055', 'EDIYANTO ARIEF', '9 - 2019', 'SEMINAR NASIONAL TEKNIK SIPIL', 'UNIVERSITAS MERCU BUANA, JAKARTA', 'JAKARTA', 'MANAJEMEN KAWASAN TRANSIT-ORIENTED DEVELOPMENT MODERN', '', ''),
(4, '7202007055', 'EDIYANTO ARIEF', '10 - 2019', 'SEMINAR NASIONAL', 'UNIVERSITAS MERCU BUANA, JAKARTA', 'JAKARTA', 'PENTINGNYA IMPLEMENTASI DAN PEMAHAMAN SISTEM MANAJEMEN KESELAMATAN DAN KESEHATAN KERJA (SMK3) PADA DUNIA KONSTRUKSI ERA INDUSTRI 4.0 ', '', ''),
(5, '7202007055', 'EDIYANTO ARIEF', '10 - 2019', 'DISKUSI DAN SOSIALISASI', 'ASTEKINDO, JAKARTA', 'JAKARTA', 'IMPLEMENTASI KEWAJIBAN TENAGA KERJA KONSTRUKSI BERSERTIFIKAT', '', ''),
(6, '7202007055', 'EDIYANTO ARIEF', '4 - 2020', 'WEBINAR NASIONAL', 'DPN INKINDO DAN KEMENPUPR', 'JAKARTA', 'PELUANG DAN TANTANGAN USAHA JASA KONSTRUKSI PADA MASA PANDEMI COVID-19', '', ''),
(7, '7202007055', 'EDIYANTO ARIEF', '4 - 2020', 'SEMINAR NASIONAL ONLINE MANAJEMEN PROYEK KONSTRUKSI', 'UNIVERSITAS TARUMANEGARA & UNIVERSITAS ESA UNGGUL', 'JAKARTA', 'MANAJEMEN RESIKO, PROCUREMENT, MANAJEMEN MUTU DALAM INDUSTRI KONSTRUKSI INDONESIA', '', ''),
(9, '7202007049', 'ABDUL HARIS', 'Desember 2020', 'Webinar Studi Potensi Bencana Kebumian (Gempa Bumi, Likuifaksi dan Tsunami) Pada Infrastrukstur Milik PT PLN dengan Lokasi Tersebaran', 'LAPI ITB - PT PLN (Persero)', 'Jakarta - Bandung', 'Dengan mempertimbangkan peta tektonik aktif di wilayah Indonesia, Peta Seismiisitas Indonesia dilakukan Studi Kebumian Fasilitas PLN 32 Pembangkit dan 3 gandu Induk tersebar mulai dari papua sampai de', '', ''),
(10, '7202007049', 'ABDUL HARIS', 'Nopember 2020', 'â€Webinar HIMNI â€Apakah Indonesia Kaya Harta Karun Uranium, Torium dan Logam Tanah Jarang?â€', 'Himpunan Masyarakat Nuklir Indonesia ( HIMNI) Indonesian Nuclear Society, Jakarta', 'Jakarta', 'â€¢	Ekplorasi dan Potensi Mineral Radioaktif (Uranium & Torium) dan Logam Tanah Jarah :\r\n-	Apa itu unsur radioaktif dan Logam Tanah Jarang\r\n-	Mengapa unsur ini menjadi strategis\r\n-	Bagaimana keterdapa', '', ''),
(11, '7202007049', 'ABDUL HARIS', 'Nopember 2020', 'Simulasi Operasi & Antisipasi keGEMPAan PLTN Merah Putih', 'Himpunan Masyarakat Nuklir Indonesia ( HIMNI) Indonesian Nuclear Society, Jakarta', 'Jakarta', 'â€¢	Simulator PLTN Merah Putih over view :\r\n-	Basic Scope Simulator ( Publik memahami system energy nuklir)\r\n-	Classroom Scope simulator ( Akademik memahami pengetahuan lanjut system PLTN)\r\n-	Engineer', '', ''),
(12, '7202007049', 'ABDUL HARIS', 'Oktober 2020', 'Webinar Nasional â€“ HAMAS Tema : desaign & Studi Kasus Pembangunan Infrastruktur Tenaga Listrik Sub Tema : Desain Dan Konstruksi Proyek PLTA Upper Cisokan Pumped Storage', 'Institut Teknologi  PLN, Jakarta', 'Jakarta', 'â€¢	Tahapan Desain & Konstruksi Pembangkit Listrik.\r\nâ€¢	Konsep, keunggulan & Cara Kerja PLTA Upper Cisokan\r\nâ€¢	Desain pekerjaan Sipil PLTA Upper Cisokan\r\n-	Base camp\r\n-	Permanent Acces Road\r\n-	DAM (', '', ''),
(13, '7202007049', 'ABDUL HARIS', 'Oktober 2020', 'Webinar Prospek Pemanfaatan PLTN Berbasis Torium', 'Himpunan Masyarakat Nuklir Indonesia ( HIMNI) Indonesian Nuclear Society, Jakarta', 'Jakarta', 'â€¢	Progress Of TMSR in China ( What Is TMSR, Motivation for TMSR, Progress Of TMSR, Persepectiv on TSMR)\r\nâ€¢	A Practical Solution to Climate Change\r\nâ€¢	ThorCon Design Philosophy\r\nâ€¢	500 MW Demonst', '', ''),
(14, '7202007049', 'ABDUL HARIS', 'Oktober 2020', 'Webinar Penguatan Kandungan Lokal PLTN Indonesia', 'Himpunan Masyarakat Nuklir Indonesia ( HIMNI) Indonesian Nuclear Society, Jakarta', 'Jakarta', 'â€¢	Peningkatan Kandungan Lokal PLTN Indonesia\r\nâ€¢	Kemampuan industry Nasional dalam peningkatan kandungan Lokal PLTN Indonesia ( Reaktor, Kondensor dan peralatan pendukung PLTN lainnya yang sudah bi', '', ''),
(15, '7202007049', 'ABDUL HARIS', 'September 2020', 'Dialog Nasional NawaCita â€“ Energi Nuklir untuk Pembangunan Nasional', 'Lembaga Kajian NawaCita (LKN), Jakarta', 'Jakarta', 'â€¢	Regulasi PLTN diindonesia\r\nâ€¢	Perkembangan Pemanfaatan Energi Nuklir di Indonesia\r\n', '', ''),
(17, '7202007049', 'ABDUL HARIS', 'Agustus 2020', 'Webinar Nasional â€œMekanisme Ganti Rugi  & penghapusan Aset BUMNâ€', 'PT PLN (Persero), Jakarta', 'Jakarta', 'â€¢	Mekanisme Ganti Rugi  & penghapusan Aset BUMN\r\n', '', ''),
(18, '7202007049', 'ABDUL HARIS', 'Januari 2020', 'DRBF DB Administrastion & Practice Conference', 'Dispute Resolution Board Foundation (DRBF), Jakarta', 'Hotel Grandika, Jakarta Selatan', 'â€¢	A Lesson Learned that Leads to Intensive Implementation of DB Scheme in Power Plant Projects within PT PLN (Persero)\r\n', '', ''),
(19, '7202007049', 'ABDUL HARIS', 'Januari 2020', 'DRBF DB Administrastion & Practice Workshop', 'Dispute Resolution Board Foundation (DRBF), Jakarta', 'Hotel Grandika Jakarta Selatan', 'â€¢	Introduction to Dispute Boards (DBs)\r\nâ€¢	Dispute Avoidance\r\nâ€¢	Dispute resolution\r\nâ€¢	Enforcement Of DB Decision\r\n', '', ''),
(20, '7202007049', 'ABDUL HARIS', 'Nopember 2019', 'Lokakarya Kompetensi Insinyur Profesional', 'Persatuan Insinyur Indonesia (PII) Cabang Jakarta Selatan', 'Medan Sumatera Utara', 'â€¢	Undang-undang Keinsinyuran, Pengenalan organisasi PII\r\nâ€¢	Kode etik keinsinyuran\r\nâ€¢	Sertifikasi insinyur profesional, Pengembangan Keprofesian Berkelanjutan (PKB)\r\nâ€¢	Pemahaman kompetensi insi', '', ''),
(21, '7202007049', 'ABDUL HARIS', 'Agustus 2019', '4DX', 'Global Practice Leader Franklin Covey The Ultimate Competitive Advantage, Jakarta', 'Medan Sumatera Utara', '1. Pembahasan bagaimana kesuksesan dalam pencapaian target. Diperlukan analisa dalam penentuan target utama yang akan berpengaruh significant terhadap pencapaian kinerja. Selanjutnya diperlukan kedisi', '', ''),
(22, '7202007049', 'ABDUL HARIS', 'Agustus 2018', 'Dispute Board Conference and Workshop', 'DRBF-Kementrian PUPR-Dewan Sengketa Konstruksi-  Universitas Atmajaya Yogyakarta', 'Yogyakarta, Indonesia', 'â€¢	Dispute Board Administration & Practice\r\nâ€¢	Background Of DB in the West & in east\r\nâ€¢	Dispute Board in Practice Case Study and Example from project Asia and around the world\r\nâ€¢	FIDIC Conditio', '', ''),
(24, '7202007049', 'ABDUL HARIS', 'Mei 2017', 'Workshop Safety For Manager,', 'PLN Udiklat Bogor', 'Bogor Jawa Barat', 'â€¢	Safety Policy PT PLN (Persero)\r\nâ€¢	Safety Culture and Human Factor\r\nâ€¢	Experience Sharing (Safety Implementation)\r\nâ€¢	Role and Responsibility of manager\r\nâ€¢	Safety Performance Of PT PLN (Perse', '', ''),
(25, '7202007049', 'ABDUL HARIS', 'April 2018', 'Workshop Of Dewan Sengketa The Choise Of Alternative Dispute Resolution for Construction based on UU No.2 /2017 ', 'DRBF-BADAPSKI- Dewan Sengketa Konstruksi (DSK)', 'Universitas Mercubuana Jakarta', 'â€¢	Alternative Dispute Resolution for Contraction\r\nâ€¢	UU No.2/2017', '', ''),
(26, '7202007049', 'ABDUL HARIS', 'Oktober 2014', 'Workshop WBS and CBS', 'PLN Udiklat Bogor', 'Cibogo Bogor Jawa Barat', 'â€¢	Pemaparan Konsep Work Breakdown Structure (WBS) dan Cost Breakdown Structure (CBS)\r\nâ€¢	Experience sharing Pelaksanaan pembangunan Pembangkit\r\nâ€¢	Experience sharing pelaksanaan pembangunan transm', '', ''),
(27, '7202007049', 'ABDUL HARIS', 'Nopember 2014', 'Workshop Kepabeanan', 'PLN Pusdiklat', 'Cibogo Bogor Jawa Barat', 'â€¢	Aspek Perpajakan dalam rangka import\r\nâ€¢	Koordinasi SOP Kepabeanan di PT PLN (Persero)\r\n', '', ''),
(28, '7202007024', 'ALIM YUANDIA', 'Desember 2019', 'Lokakarya Kompetensi Insiyur Profesional', 'Persatuan Insinyur Indonesia (PII) Cabang Jakarta Selatan', 'Medan', 'â€¢	Undang-undang Keinsinyuran, Pengenalan organisasi PII\r\nâ€¢	Kode etik keinsinyuran\r\nâ€¢	Sertifikasi insinyur profesional, Pengembangan Keprofesian Berkelanjutan (PKB)\r\nâ€¢	Pemahaman kompetensi insi', 'KK', ''),
(29, '7202007024', 'ALIM YUANDIA', 'Januari 2020', 'International One Day Course Global Contract Solution in Construction', 'PT PLN (Persero) UIP Pembangkit Sumatera', 'Medan', 'â€¢	Penyelesaian Dispute Proyek Konstruksi Berdasarkan FIDIC\r\nâ€¢	Experience penyelesaian dispute melalui mekanisme Dispute Board\r\nâ€¢	Mekanisme aktivasi Dispute Board', 'KK', ''),
(30, '7202007049', 'ABDUL HARIS', 'Desember 2020', 'webinar \"Apa itu Uji Tak Rusak dengan Radiasi?\"', 'Himpunan Masyarakat Nuklir Indonesia ( HIMNI) Indonesian Nuclear Society, Jakarta', 'Jakarta', 'APA ITU UJI TAK RUSAK DENGAN RADIASI\r\nMetode UTR\r\n5 Metode UTR utama (RT, UT, MT, PT dan ET)\r\nKelebihan Metode UTR berbasis Radiasi dibandingkan Metode UTR lainnya\r\nPemanfaatan UTR berbasis radiasi di', '', ''),
(31, '7202007038', 'ASEP RACHMATULLAH', '05 - 2019', 'Kuliah Tamu', 'Fakultas Pascasarjana Universitas Mercu Buana Program Studi Magister Teknik Sipil', 'Jakarta', 'Tantangan Global dan Kompetensi Manajer Konstruksi di Indonesia', '', 'kuliah tamu.jpeg'),
(32, '7202007038', 'ASEP RACHMATULLAH', '09 - 2019', 'Seminar Nasional Teknik Sipil', 'Universitas Mercu Buana Program Studi Teknik Sipil', 'Jakarta', 'Manajemen Kawasan Transit-Oriented Developmen Modern', '', 'semnas sipil.jpeg'),
(33, '7202007038', 'ASEP RACHMATULLAH', '10 - 2019', 'Seminar Nasional', 'Astekindo â€“ Univesitas Mercu Buana', 'Jakarta', 'Pentingnya Implementasi dan Pemahaman Sistem Manajemen Keselamatan dan Kesehatan Kerja (SMK3) pada Dunia Konstruksi Era Industri 4.0', '', 'semnas1.jpg'),
(34, '7202007038', 'ASEP RACHMATULLAH', '11 - 2020', 'Webinar', 'Dinas Pekerjaan Umum dan Perumahan Rakyat Provinsi Banten', 'Banten', 'Seminar Pengembangan Asosiasi HPJI di Provinsi Banten', '', 'E_SuKet_Seminar Nama Lengkap_001.jpg'),
(35, '7202007038', 'ASEP RACHMATULLAH', '10 - 2020', 'Webinar', 'Dinas Pekerjaan Umum dan Perumahan Rakyat Provinsi Banten', 'Banten', 'Evaluasi Monitoring SMK3 Bidang Bina Marga dan Sumber Daya Air', '', 'E_Surat Keterangan_SMK3_Penyedia_001.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `total_cpl`
--

CREATE TABLE `total_cpl` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `hasil_cpl_id` int(190) DEFAULT NULL,
  `nokta` bigint(190) DEFAULT NULL,
  `nama_lengkap` varchar(200) DEFAULT NULL,
  `tot_SK01` int(200) DEFAULT NULL,
  `tot_SK02` int(200) DEFAULT NULL,
  `tot_SK03` int(200) DEFAULT NULL,
  `tot_SK04` int(200) DEFAULT NULL,
  `tot_SK05` int(200) DEFAULT NULL,
  `tot_SK06` int(200) DEFAULT NULL,
  `tot_SK07` int(190) DEFAULT NULL,
  `tot_SK08` int(190) DEFAULT NULL,
  `tot_SK09` int(190) DEFAULT NULL,
  `tot_SK10` int(200) DEFAULT NULL,
  `tot_PP01` int(190) DEFAULT NULL,
  `tot_PP02` int(190) DEFAULT NULL,
  `tot_PP03` int(190) DEFAULT NULL,
  `tot_PP04` int(190) DEFAULT NULL,
  `tot_PP05` int(190) DEFAULT NULL,
  `tot_PP06` int(190) DEFAULT NULL,
  `tot_PP07` int(190) DEFAULT NULL,
  `tot_PP08` int(190) DEFAULT NULL,
  `tot_PP09` int(200) DEFAULT NULL,
  `tot_PP10` int(200) DEFAULT NULL,
  `tot_PP11` int(200) DEFAULT NULL,
  `tot_PP12` int(190) DEFAULT NULL,
  `tot_PP13` int(190) DEFAULT NULL,
  `tot_PP14` int(190) DEFAULT NULL,
  `tot_PP15` int(190) DEFAULT NULL,
  `tot_PP16` int(190) DEFAULT NULL,
  `tot_PP17` int(190) DEFAULT NULL,
  `tot_PP18` int(190) DEFAULT NULL,
  `tot_PP19` int(190) DEFAULT NULL,
  `tot_PP20` int(190) DEFAULT NULL,
  `tot_KU01` int(190) DEFAULT NULL,
  `tot_KU02` int(190) DEFAULT NULL,
  `tot_KU03` int(190) DEFAULT NULL,
  `tot_KU04` int(190) DEFAULT NULL,
  `tot_KU05` int(200) DEFAULT NULL,
  `tot_KU06` int(200) DEFAULT NULL,
  `tot_KU07` int(200) DEFAULT NULL,
  `tot_KU08` int(200) DEFAULT NULL,
  `tot_KU09` int(200) DEFAULT NULL,
  `tot_KU10` int(200) DEFAULT NULL,
  `tot_KU11` int(50) DEFAULT NULL,
  `tot_KU12` int(50) DEFAULT NULL,
  `tot_KU13` int(50) DEFAULT NULL,
  `tot_KK01` int(190) DEFAULT NULL,
  `tot_KK02` int(190) DEFAULT NULL,
  `tot_KK03` int(190) DEFAULT NULL,
  `tot_KK04` int(190) DEFAULT NULL,
  `tot_KK05` int(190) DEFAULT NULL,
  `tot_KK06` int(50) DEFAULT NULL,
  `tot_KK07` int(50) DEFAULT NULL,
  `tot_KK08` int(50) DEFAULT NULL,
  `tot_KK09` int(50) DEFAULT NULL,
  `tot_KK10` int(50) DEFAULT NULL,
  `tot_KK11` int(50) DEFAULT NULL,
  `tot_KK12` int(50) DEFAULT NULL,
  `tot_KK13` int(50) DEFAULT NULL,
  `tot_KK14` int(50) DEFAULT NULL,
  `tot_KK15` int(50) DEFAULT NULL,
  `tot_KK16` int(50) DEFAULT NULL,
  `tot_KK17` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `total_cpl`
--

INSERT INTO `total_cpl` (`id`, `status`, `hasil_cpl_id`, `nokta`, `nama_lengkap`, `tot_SK01`, `tot_SK02`, `tot_SK03`, `tot_SK04`, `tot_SK05`, `tot_SK06`, `tot_SK07`, `tot_SK08`, `tot_SK09`, `tot_SK10`, `tot_PP01`, `tot_PP02`, `tot_PP03`, `tot_PP04`, `tot_PP05`, `tot_PP06`, `tot_PP07`, `tot_PP08`, `tot_PP09`, `tot_PP10`, `tot_PP11`, `tot_PP12`, `tot_PP13`, `tot_PP14`, `tot_PP15`, `tot_PP16`, `tot_PP17`, `tot_PP18`, `tot_PP19`, `tot_PP20`, `tot_KU01`, `tot_KU02`, `tot_KU03`, `tot_KU04`, `tot_KU05`, `tot_KU06`, `tot_KU07`, `tot_KU08`, `tot_KU09`, `tot_KU10`, `tot_KU11`, `tot_KU12`, `tot_KU13`, `tot_KK01`, `tot_KK02`, `tot_KK03`, `tot_KK04`, `tot_KK05`, `tot_KK06`, `tot_KK07`, `tot_KK08`, `tot_KK09`, `tot_KK10`, `tot_KK11`, `tot_KK12`, `tot_KK13`, `tot_KK14`, `tot_KK15`, `tot_KK16`, `tot_KK17`) VALUES
(2, 0, 1, 10101001, 'Ilham Azis', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 7202007001, 'SANI SUSANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 7202007002, 'ANASTASIA CAROLINE SUTANDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 7202007003, 'PELE WIDJAJA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 7202007004, 'WIMPY SANTOSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 7202007005, 'HELMY HERMAWAN TJAHJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 7202007006, 'FELIX HIDAYAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 7202007007, 'ALBERT WICAKSONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 0, 0, 7202007008, 'ANTON SOEKIMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 0, 7202007009, 'KARYADI KUSLIANSJAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 0, 0, 7202007010, 'LIDYA FRANSISCA TJONG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 0, 0, 7202007011, 'ALTHO SAGARA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 7202007012, 'DODDI YUDIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 0, 0, 7202007013, 'DINA RUBIANA WIDARDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 0, 0, 7202007015, 'BAMBANG ADIRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 7202007016, 'ELSA NOVIANTI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, 0, 7202007017, 'IWAN SUPRIJANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 0, 0, 7202007018, 'ROBBY H WINARDI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 7202007019, 'ANDRI SASTRAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 0, 7202007020, 'WEDDY BERNADI SUDIRMAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 0, 0, 7202007021, 'FERDYAN HIJRAH KUSUMA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 0, 0, 7202007022, 'AGUS KUSWARDOYO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 0, 0, 7202007023, 'BAYU WISATRIODA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 0, 0, 7202007024, 'ALIM YUANDIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 0, 0, 7202007025, 'KHARISMAN LAIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 0, 0, 7202007026, 'MISDJAN ENDANG SUBRATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 0, 0, 7202007027, 'PARLINDUNGAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 0, 0, 7202007028, 'ENNI MOELIATI SOETANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 0, 0, 7202007029, 'DEFRY SETYO PRAYOGO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 0, 0, 7202007030, 'MAWARDI AMIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 0, 0, 7202007031, 'RONNY APRISAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 0, 0, 7202007032, 'ANJAR SUCAHYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 0, 0, 7202007033, 'VENDIK SUDARIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 0, 0, 7202007034, 'HENDRI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 0, 0, 7202007035, 'JIMMY WIRYANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 0, 0, 7202007036, 'EDWIN LAURENCIS HENDRIKUS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 0, 0, 7202007037, 'SARWONO HARDJOMULJADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 0, 0, 7202007038, 'ASEP RACHMATULLAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 0, 0, 7202007039, 'CHRISTIAN ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 0, 0, 7202007040, 'ARIE ANDRIANUS CAHYADI THALIB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 0, 0, 7202007041, 'HENDRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 0, 0, 7202007042, 'BUDI JUWONO SUWITOATMODJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 0, 0, 7202007044, 'I NENGAH SUKERTHA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(45, 0, 0, 7202007045, 'KHAIRUL SALEH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 0, 0, 7202007046, 'NANDA DANI ANDRIANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 0, 0, 7202007047, 'NOVI AGUSTIAN TANUSAPUTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 0, 0, 7202007048, 'DEDI KHAIRUNAS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 0, 0, 7202007049, 'ABDUL HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 0, 0, 7202007050, 'I KOMANG PANDE JUNIARTA, ST, IPP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 0, 0, 7202007051, 'AKHMAD MUSTAQIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 0, 0, 7202007052, 'KHALAWI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 0, 0, 7202007053, 'INTAN OCKTAVIANY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 0, 0, 7202007054, 'FAHMI KUNCORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 0, 0, 7202007055, 'EDIYANTO ARIEF', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 0, 0, 7202007056, 'RIZAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 0, 0, 7202007057, 'CLINTON GIRSANG', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 0, 0, 7202007058, 'WAHYU KURNIAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 0, 0, 7202007059, 'YUNAN HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 0, 0, 7202007060, 'SAMUN HARIS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 0, 0, 7202007061, 'ADITYA KARYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 0, 0, 7202007062, 'ADIAN MUHAMMAD RIDHO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 0, 0, 7202007063, 'DWI NANDYA YULINDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 0, 0, 7202007064, 'SANDHI KWANI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 0, 0, 7202007065, 'HARYANTO SOFYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 0, 0, 7202007066, 'SYARIF BURHANUDDIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 0, 0, 7202007067, 'IVAN ADE SOFIYAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 0, 0, 7202007068, 'BONDAN WIDI ANGGORO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 0, 0, 7202007069, 'ARIANI CHITRA LESTARI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 0, 0, 7202007070, 'EUFRAT AGRIZASYAH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 0, 0, 7202007071, 'AGIL DARMAWAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 0, 0, 7202007072, 'NUNUNG WIDYANINGSIH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 0, 0, 7202007073, 'THE CIN HOK', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 0, 0, 7202007074, 'ANGGIE PRASETYA DINATA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 0, 0, 7202007075, 'ARWIN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 0, 0, 7202007076, 'STEVANUS HERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 0, 0, 7202007077, 'ISKANDAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 0, 0, 7202007078, 'LUSSI ERNIAWATI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(79, 0, 0, 7202007079, 'NICKY STANLEY HALIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(80, 0, 0, 7202007080, 'MOHAMMAD ERSHAM ARSYAD', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(81, 0, 0, 7202007081, 'ANOM WIBISONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(82, 0, 0, 7202007082, 'LASMAN DONNY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(83, 0, 0, 7202007083, 'ANGELICA TANISIA JOZAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 0, 0, 7202007084, 'WIRYANTO DEWOBROTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(85, 0, 0, 7202007085, 'NORO KARTEDJO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(86, 0, 0, 7202007086, 'ALEXANDER DIAN SUKIRNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(87, 0, 0, 7202007014, 'BOBBY MINOLA GINTING', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(88, 0, 0, 7202007043, 'MARYONO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(89, 0, 0, 7202007087, 'ADEE SUNTOSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(90, 0, 0, 7202007091, 'ARIEF LEONANTO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(91, 0, 0, 7202007088, 'MOHAMAD WIDIARSO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(92, 0, 0, 7202007089, 'EDIANSJAH ZULKIFLI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(93, 0, 0, 7202007090, 'METTA SUTRISNO', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(94, 0, 0, 7202007092, 'ERIE HERYADI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(95, 0, 0, 7202007093, 'JACK JUNAIDY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(96, 0, 0, 7202007094, 'tarno', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(97, 0, 0, 7202007095, 'tarni', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `usaha_asset`
--

CREATE TABLE `usaha_asset` (
  `id` int(100) NOT NULL,
  `nokta` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `perioda` varchar(200) NOT NULL,
  `perusahaan` varchar(200) NOT NULL,
  `nama_proyek` varchar(200) DEFAULT NULL,
  `lokasi` varchar(200) NOT NULL,
  `posisi` varchar(200) NOT NULL,
  `kegiatan` varchar(200) NOT NULL,
  `kompetensi` varchar(200) NOT NULL,
  `bukti_berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `usaha_asset`
--

INSERT INTO `usaha_asset` (`id`, `nokta`, `nama_lengkap`, `perioda`, `perusahaan`, `nama_proyek`, `lokasi`, `posisi`, `kegiatan`, `kompetensi`, `bukti_berkas`) VALUES
(1, '10101001', 'Ilham Azis', '2020', 'PT Asia Citra', 'Aplikasi Qc', 'Karawang', 'Ketua', 'Membuat aplikasi Qc berbasis website', 'KK1, KK2, KK3, KK4', ''),
(2, '7202007055', 'EDIYANTO ARIEF', '2018', 'PT PANCA GUNA DUTA', 'Manajemen Konstruksi Pembangunan Gedung Rumah Sakit Asshobirin Kota Tangerang Selatan', 'KOTA TANGERANG, BANTEN', 'DIREKTUR UTAMA', 'Memanaje kegiatan perencanaan, pengawasan dan pembangunan rumah sakit', '', 'FAM EDIYANTO ARIEF.pdf'),
(3, '7202007049', 'ABDUL HARIS', '1995', 'PT PLN (persero) Distribusi Jawa Timur Cabang Bojonegoro Ranting Lamongan Jawa Timur', 'Pengawasan Pembangunan, Pengujian, Pengoperasian dan Pemeliharaan Jaringan Tegangan Rendah dan Tegangan Menengah 20 kV ', 'Tersebar di Wilayah Lamongan Jawa Timur', 'Teknisi Distribusi II', '-	Pengawasan Pembangunan, Pengujian, Pengoperasian dan Pemeliharaan Jaringan Tegangan Rendah dan Tegangan Menengah 20 kV  -	Melakukan perbaikan Gangguan Pelanggan, Jaringan Tegangan Rendah 220/380Volt', '', ''),
(5, '7202007049', 'ABDUL HARIS', '2000', 'PT PLN (Persero) Wilayah VI Sektor Barito PLTD Trisakti Banjarmasin', 'Operasi & Pemeliharaan PLTD trisakti 85 MW', 'Banjarmasin kalimantan Selatan', 'Ahli Muda Analisa dan Evaluasi Pembangkit', '-	Mengevaluasi Kinerja operasi dan Pemeliharaan Pembangkit PLTD Trisakti 85 MW : Mesin Sulzer 12zv 2x 6,2 MW Mesin Pilsetick 5.6 MW Mesin Watrsila 16TM 410 2x 8,8 MW Mesin Warsila 9TM 620 4x 12,4 MW -', '', ''),
(6, '7202007049', 'ABDUL HARIS', '20012003', 'PT PLN (Persero) Wilayah Kalimantan Selatan, Kalimantan Tengah dan Kaliman Timur Sektor Barito', 'Pengoperasian Pembangkit tersebar di PLN sektor Barito 165 MW', 'Tersebar di Kalimantan Selatan dan Kuala kapuas', 'Enjinir Perencanaan dan evaluasi Operasi ', '-	Merencanakan kinerja dan Rencana Operasi Pembangkit 165 MW yang terdiri dari Unit PLTD Trisakti (85MW), PLTD Barabai (2x3 MW), PLTD Panagkalaan (8,6MW), PLTD Tanjung (2x200kW), PLTD Maburai (2x 1 MW', '', ''),
(7, '7202007049', 'ABDUL HARIS', '20032006', 'PT PLN (Persero) Wilayah VI Sektor Barito PLTD Trisakti Banjarmasin', 'Pengoperasian dan Pemeliharaan Pembangkit PLTG trisakti di PLN sektor Barito 165 MW', 'Banjarmasin kalimantan Selatan', 'Kepala PLTG Trisakti', 'â€¢	Mengkoordinir pembuatan Rencana Kerja dan Anggaran (OPEX dan CAPEX) Perusahaan  (RKAP) Tahunan PLTG Trisakti. â€¢	Melakukan manajemen Pengelolaan Pengoperasian dan pemeliharaan PLTG Trisakti : -	M', '', ''),
(8, '7202007049', 'ABDUL HARIS', '20062007', 'PT PLN (Persero) Wilayah Kalimantan Selatan dan Kalimantan Tengah Sektor Barito', 'Perencanaan Pengoperasian dan Pemliharaan Pembangkit tersebar di PLN sektor Barito 165 MW', 'Tersebar di Kalimantan Selatan dan Kuala kapuas', 'Enjinir Evaluasi & Perencanaan Pembangkit', '-	Mengkoordinir dan menyusun Rencana Kerja Anggaran Perusahaan ( RKAP ) Tahunan PLN Sektor Barito -	Menyusun Rencana Anggaran dan Biaya (RAB) Program pemeliharaan dan peningkatan keandalan Pembangkit.', '', ''),
(10, '7202007049', 'ABDUL HARIS', '2008', 'PT PLN (Persero) Wilayah Kalimantan Selatan, Kalimantan Tengah dan Kaliman Timur Sektor Barito', 'Pengoperasian Pembangkit tersebar di PLN sektor Barito 165 MW', 'Banjarmasin kalimantan Selatan', 'Asisten Manajer Operasi', '-	Mengkoordinir dan menyusun Rencana Kerja Anggaran Perusahaan ( RKAP ) fungsi Operasi pembangkit ( Rencana Kinerja Pembangkit, bahan bakar, pelumas additive, Safety dan K3 Lingkungan). -	Program Opex', '', ''),
(11, '7202007049', 'ABDUL HARIS', '2007', 'PT PLN (Persero) Wilayah Kalimantan Selatan, Kalimantan Tengah dan Kaliman Timur Sektor Barito', 'Pengadaan Barang Jasa untuk Operasi dan Pemeliharaan Pembangkit dan pendukung di PLN Sektor Barito 2007', 'Banjarmasin kalimantan Selatan', 'Enjinir Evaluasi & Perencanaan Pembangkit / Seketaris Panitia Pangadaan barang Jasa Tahun 2007', '-	Menyusun jadual dan rencana pelelangan -	Menyusun Rencana Kerja dan syarat- syarat Pengandaan barang / jasa -	Menyusun Dokumen Pelelngan -	Menyusun Harga Perkiraan Sendiri -	Merencanakan sumber daya', '', ''),
(12, '7202007049', 'ABDUL HARIS', '20082011', 'PT PLN (Persero) Wilayah Kalimantan Selatan, Kalimantan Tengah dan Kaliman Timur Sektor Barito', 'Pengoperasian Pembangkit tersebar di PLN sektor Barito 165 MW', 'Banjarmasin kalimantan Selatan', 'Asisten Manajer Perencanaan', '-	Mengkoordinir dan menyusun Rencana Kerja Anggaran Perusahaan ( RKAP ), Kinerja PLN Sektor  -	Mengkoordinir monitoring, pengendalian & evaluasi kinerja perusahaan ( PLN Sektor Barito), rencana & real', '', ''),
(13, '7202007049', 'ABDUL HARIS', '20082011', 'PT PLN (Persero) Wilayah Kalimantan Selatan, Kalimantan Tengah dan Kaliman Timur Sektor Barito', 'Pengadaan Barang Jasa utk Pengoperasian Pembangkit tersebar di PLN sektor Barito 165 MW', 'Banjarmasin kalimantan Selatan', 'Asisten manajer Perencanaan/ Ketua Panitia Pengadaan barang/Jasa Tahun 2008-2001', '-	Menyusun jadual dan rencana pelelangan -	Menyusun Rencana Kerja dan syarat- syarat Pengandaan barang / jasa -	Menyusun Dokumen Pelelngan -	Menyusun Harga Perkiraan Sendiri -	Merencanakan sumber daya', '', ''),
(14, '7202007049', 'ABDUL HARIS', '20112015', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Pembangunan Pembangkit Thermal Jawa bali', 'Surabaya jawa Timur', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Melaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit  -	Mengkoordinir Pelaksanaan Verifikasi dan pen', '', ''),
(15, '7202007049', 'ABDUL HARIS', '20112015', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek PLTU Paiton  1x 660 MW, probolinggo Jawa Timur', 'Paiton Probolinggo Jawa Timur', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(18, '7202007049', 'ABDUL HARIS', '20112015', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek Rehabilitasi PLTU Paiton Unit 1 dan Unit 2 2 x 400 MW  ', 'JL. Raya Surabaya-Situbondo km. 141 Kec.Paiton, Probolinggo, Jawa Timur', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(20, '7202007049', 'ABDUL HARIS', '20112012', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek Rehabilitasi Unit 1 & 2 (Lot 1Boiler) 2 x 400 MW  Komplek PLTU Suralaya, ', 'Jl.Dieng No.2, Desa Suralaya Kec.Pulo Merak Cilegon, Banten', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(21, '7202007049', 'ABDUL HARIS', '20112012', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek Rehabilitasi Unit 1 & 2 (Lot 2 Turbine-generator) 2 x 400 MW  Komplek PLTU Suralaya', 'Jl.Dieng No.2, Desa Suralaya Kec.Pulo Merak Cilegon, Banten', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(22, '7202007049', 'ABDUL HARIS', '20112013', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek PLTGU Tanjung Priok Extension Project Blok 3.  Profil PLTGU Tanjung Priok Extension Project 1 x 740 MW', 'Jl. RE Martadinata, Tanjung Priok, Jakarta Utara', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(23, '7202007049', 'ABDUL HARIS', '20112012', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek PLTGU Muara Tawar Extension Project  234 MW', 'Desa Segara Jaya, Kecamatan Taruma Jaya , Bekasi, Jawa Barat', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(24, '7202007049', 'ABDUL HARIS', '20112012', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek PLTGU Muara Tawar Extension Project  234 MW', 'Desa Segara Jaya, Kecamatan Taruma Jaya , Bekasi, Jawa Barat', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(25, '7202007049', 'ABDUL HARIS', '20112012', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek Rehabilitasi PLTU Muara Karang unit 4 & 5  2x 200 MW', 'Jalan Raya Pluit Utara terusan No. 2A Kawasan PLTU & PLTGU Muara Karang, Jakarta Utara.', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(26, '7202007049', 'ABDUL HARIS', '20112012', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek Repowering PLTGU Muara Karang 1 x 720 MW', 'Jalan Raya Pluit Utara terusan No. 2A Kawasan PLTU & PLTGU Muara Karang, Jakarta Utara.', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(27, '7202007049', 'ABDUL HARIS', '20112015', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek PLTU Pelabuhan Ratu 3x 350MW', 'Desa Citarik Kecamatan Pelabuhan Ratu, Sukabumi, Jawa Barat', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(28, '7202007049', 'ABDUL HARIS', '20112015', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek PLTU 2 Jawa Tengah (Adipala) 1x600 MW', 'Desa Buton, Kecamatan Adipala, Cilacap JawaTengah', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(29, '7202007049', 'ABDUL HARIS', '20112015', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Thermal Jawa Bali', 'Proyek PLTU 3 Jawa Timur (Tanjung Awar-Awar)2x350 MW', 'Desa Wadung, Kecamatan Jenu, Kabupaten Tuban, Jawa Timur ', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(30, '7202007049', 'ABDUL HARIS', '20132015', 'PT PLN (Persero) Unit Induk pembangunan VIII', 'CFSPPP 300-400 MW CLASS, PLTU 2 BANTEN-LABUAN (2 X 300-400 MW)', 'LABUAN, INDONESIA', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(31, '7202007049', 'ABDUL HARIS', '20132015', 'PT PLN (Persero) Unit Induk pembangunan VIII', 'CFSPP 300-400 CLASS PLTU 3 BANTEN (3X315MW) ', 'TELUK NAGA-LONTAR Tangerang Banten', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(32, '7202007049', 'ABDUL HARIS', '20132015', 'PT PLN (Persero) Unit Induk pembangunan VIII', 'CFSPPP 600-700 MW CLASS PLTU 1 BANTEN (1X 600-700 MW) ', 'Jl.Dieng No.2, Desa Suralaya Kec.Pulo Merak Cilegon, Banten', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(34, '7202007049', 'ABDUL HARIS', '20132015', 'PT PLN (Persero) Unit Induk pembangunan VIII', 'CFSPP 300-400 MW CLASS PLTU 1 JAWA TENGAH  (2 X 300-400MW) ', 'Rembang Jawa Tengah', 'Deputi Manajer Administrasi Kontrak & pelaporan', 'Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordinir ', '', ''),
(36, '7202007049', 'ABDUL HARIS', '20132015', 'PT PLN (Persero) Unit Induk pembangunan VIII', 'CFSPP 300-400 MW CLASS PLTU 1 JAWA TIMUR (2 X 315MW) ', 'Pacitan Jawa Timur', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(37, '7202007049', 'ABDUL HARIS', '20132015', 'PT PLN (Persero) Unit Induk pembangunan VIII', 'CFSPP 600-700 MW CLASS PLTU 2 JAWA TIMUR (1 X 600-700 MW) ', 'Paiton Probolinggo Jawa Timur', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(38, '7202007049', 'ABDUL HARIS', '20132015', 'PT PLN (Persero) Unit Induk pembangunan VIII', 'CFSPP 600-700 MW CLASS PLTU 2 JAWA TIMUR (1 X 600-700 MW) ', 'Paiton Probolinggo Jawa Timur', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(39, '7202007049', 'ABDUL HARIS', '20132015', 'PT PLN (Persero) Unit Induk pembangunan VIII', 'CFSPP 600-700 MW CLASS PLTU 2 JAWA TIMUR (1 X 600-700 MW) ', 'Paiton Probolinggo Jawa Timur', 'Deputi Manajer Administrasi Kontrak & pelaporan', '-	Mengkoordinir pelaksanakan administrasi dan pengendalian Kontrak dan amandemen Kontrak Internasional (administrasi surat berharga bank garansi, Loan, EPC Pembangkit) dan Kontrak Lokal -	Mengkoordini', '', ''),
(40, '7202007049', 'ABDUL HARIS', '20152017', 'PT PLN (Persero) Unit Induk pembangunan Jawa Bagian Barat', 'Proyek PLTU Lontar Extension 315 MW, Sumitomo Corporation â€“ IHI Tokyo Jepang', 'Desa Lontar Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', '-	Mengkoordir pelaksanaan First Year Inspection PLTU Pelabuhan Ratu 3x350 MW -	Membangun  komunikasi dan koordinasi serta kerjasama dengan Stakeholder -	Mengkoordiri Pelaksanaan pekerjaan Komisisoning', '', ''),
(41, '7202007049', 'ABDUL HARIS', '20152017', 'PT PLN (Persero) Unit Induk pembangunan Jawa Bagian Barat', 'Proyek PLTU Lontar Extension 315 MW, Sumitomo Corporation â€“ IHI Tokyo Jepang', 'lontar Tangerang Banten', 'Manajer Unit Pelaksana Proyek Pembangkit Jawa Bagian Barat 1', '-	Mengkoordinir pelaksanaan Kick Meeting dan rapat rapat ruti non rutin ( weekly Meeting, Monthly Meeting, Special Meeting) Proyek PLTU Lontar Extension 315 MW -	Mengkoordinir Pelaksanaan Ground Break', '', ''),
(42, '7202007049', 'ABDUL HARIS', '20172020', 'PT PLN (Persero) Unit Induk pembangunan Pembangkit Sumatera', 'Proyek Pembangkit di Wilayah Sumatera Bangka Belitu g', 'Tersebar di Sumatera Bangka Belitung', 'Senior Manajer Operasi Konstruksi II', '-	Mengkoordinasikan secara keseluruhan pengendalian pembangunan agar pelaksanaan pembangunan dapat dilaksanakan secara tepat waktu, biaya, dan mutu; -	proyek â€“proyek yang ada di sebagian Sumatera Ut', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datakualifikasi`
--
ALTER TABLE `datakualifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datakualifikasipengertian`
--
ALTER TABLE `datakualifikasipengertian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dataorganisasi`
--
ALTER TABLE `dataorganisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapelatihan`
--
ALTER TABLE `datapelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapelatihanlain`
--
ALTER TABLE `datapelatihanlain`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `datapendidikan1`
--
ALTER TABLE `datapendidikan1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapengalamanmengajar`
--
ALTER TABLE `datapengalamanmengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapengalamanpenelitian`
--
ALTER TABLE `datapengalamanpenelitian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapenghargaan`
--
ALTER TABLE `datapenghargaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapribadi`
--
ALTER TABLE `datapribadi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_bahasa`
--
ALTER TABLE `hasil_bahasa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_cpl`
--
ALTER TABLE `hasil_cpl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_karya`
--
ALTER TABLE `hasil_karya`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_konversi`
--
ALTER TABLE `hasil_konversi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_kualifikasi`
--
ALTER TABLE `hasil_kualifikasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_makalah`
--
ALTER TABLE `hasil_makalah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_manufaktur`
--
ALTER TABLE `hasil_manufaktur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_mengajar`
--
ALTER TABLE `hasil_mengajar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_nilai`
--
ALTER TABLE `hasil_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_organisasi`
--
ALTER TABLE `hasil_organisasi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_pelatihan`
--
ALTER TABLE `hasil_pelatihan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_pelatihanlain`
--
ALTER TABLE `hasil_pelatihanlain`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_penelitian`
--
ALTER TABLE `hasil_penelitian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_pengertian`
--
ALTER TABLE `hasil_pengertian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_penghargaan`
--
ALTER TABLE `hasil_penghargaan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_seminar`
--
ALTER TABLE `hasil_seminar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_teknologi`
--
ALTER TABLE `hasil_teknologi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `hasil_usaha`
--
ALTER TABLE `hasil_usaha`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nokta` (`nokta`);

--
-- Indeks untuk tabel `inovasi_karya`
--
ALTER TABLE `inovasi_karya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inovasi_makalah`
--
ALTER TABLE `inovasi_makalah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inovasi_teknologi`
--
ALTER TABLE `inovasi_teknologi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konversi_cpl`
--
ALTER TABLE `konversi_cpl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `manufaktur`
--
ALTER TABLE `manufaktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mk_indeks`
--
ALTER TABLE `mk_indeks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seminar_keinsinyuran`
--
ALTER TABLE `seminar_keinsinyuran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `total_cpl`
--
ALTER TABLE `total_cpl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `usaha_asset`
--
ALTER TABLE `usaha_asset`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahasa`
--
ALTER TABLE `bahasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `datakualifikasi`
--
ALTER TABLE `datakualifikasi`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `datakualifikasipengertian`
--
ALTER TABLE `datakualifikasipengertian`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `dataorganisasi`
--
ALTER TABLE `dataorganisasi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `datapelatihan`
--
ALTER TABLE `datapelatihan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `datapelatihanlain`
--
ALTER TABLE `datapelatihanlain`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `datapendidikan1`
--
ALTER TABLE `datapendidikan1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `datapengalamanmengajar`
--
ALTER TABLE `datapengalamanmengajar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `datapengalamanpenelitian`
--
ALTER TABLE `datapengalamanpenelitian`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `datapenghargaan`
--
ALTER TABLE `datapenghargaan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `datapribadi`
--
ALTER TABLE `datapribadi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT untuk tabel `hasil_bahasa`
--
ALTER TABLE `hasil_bahasa`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_cpl`
--
ALTER TABLE `hasil_cpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `hasil_karya`
--
ALTER TABLE `hasil_karya`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_konversi`
--
ALTER TABLE `hasil_konversi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `hasil_kualifikasi`
--
ALTER TABLE `hasil_kualifikasi`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_makalah`
--
ALTER TABLE `hasil_makalah`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_manufaktur`
--
ALTER TABLE `hasil_manufaktur`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_mengajar`
--
ALTER TABLE `hasil_mengajar`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_nilai`
--
ALTER TABLE `hasil_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_organisasi`
--
ALTER TABLE `hasil_organisasi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_pelatihan`
--
ALTER TABLE `hasil_pelatihan`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_pelatihanlain`
--
ALTER TABLE `hasil_pelatihanlain`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_penelitian`
--
ALTER TABLE `hasil_penelitian`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_pengertian`
--
ALTER TABLE `hasil_pengertian`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_penghargaan`
--
ALTER TABLE `hasil_penghargaan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_seminar`
--
ALTER TABLE `hasil_seminar`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_teknologi`
--
ALTER TABLE `hasil_teknologi`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `hasil_usaha`
--
ALTER TABLE `hasil_usaha`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `inovasi_karya`
--
ALTER TABLE `inovasi_karya`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `inovasi_makalah`
--
ALTER TABLE `inovasi_makalah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `inovasi_teknologi`
--
ALTER TABLE `inovasi_teknologi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `konversi_cpl`
--
ALTER TABLE `konversi_cpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `manufaktur`
--
ALTER TABLE `manufaktur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mk_indeks`
--
ALTER TABLE `mk_indeks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT untuk tabel `seminar_keinsinyuran`
--
ALTER TABLE `seminar_keinsinyuran`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `total_cpl`
--
ALTER TABLE `total_cpl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `usaha_asset`
--
ALTER TABLE `usaha_asset`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
