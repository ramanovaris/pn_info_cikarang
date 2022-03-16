-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2022 pada 17.43
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pn_info_cikarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_berita` int(11) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `nama_berita` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `id_kategori_berita`, `slug_berita`, `nama_berita`, `keterangan`, `jenis_berita`, `status_berita`, `gambar`, `tanggal_post`, `tanggal`) VALUES
(4, 4, 1, 'sejarah-pengadilan', 'Sejarah Pengadilan', '<p>Sebelum Pengadilan Negeri Cikarang berdiri, pelayanan terhadap pencari keadilan dilaksanakan oleh Pengadilan Negeri Bekasi yang wilayah hukumnya meliputi Kabupaten Bekasi dan Kota Bekasi. Terbitnya Keputusan Presiden Nomor 14 Tahun 2016 tanggal 26 April 2016 yang salah satunya mengenai pembentukan Pengadilan Negeri Cikarang. Dengan dibentuknya Pengadilan Negeri Cikarang, maka Kabupaten Bekasi dilepaskan dari wilayah hukum Pengadilan Negeri Bekasi.&nbsp;&nbsp;</p>\r\n<p>Peresmian operasional 85 pengadilan baru, termasuk Pengadilan Negeri Cikarang dilaksanakan pada tanggal 22 Oktober 2018 yang dipusatkan di Kota Melonguane, Kabupaten Kepulauan Talaud. Selanjutnya pada tanggal 26 Oktober 2018, Ketua, Wakil Ketua, Panitera dan Sekretaris serta pejabat fungsional baik kepaniteraan maupun kesekretariatan dilantik oleh Ketua Pengadilan Tinggi Jawa Barat.&nbsp;</p>\r\n<p>Sejak saat itu, maka pelayanan kepada masyarakat pencari keadilan di wilayah Kabupaten Bekasi yang tadinya dilaksanakan oleh Pengadilan Negeri Bekasi menjadi kewenangan Pengadilan Negeri Cikarang. Saat ini Pengadilan Negeri Cikarang menempati salah satu bangunan yang berada di Komplek Perkantoran Pemerintahan Daerah Kabupaten Bekasi.&nbsp;</p>', 'Profil', 'Publish', '', '2016-09-22 04:30:53', '2022-03-08 14:59:55'),
(5, 4, 1, 'visi-misi', 'Visi Misi', '<p><strong>Visi Pengadilan Negeri Cikarang</strong></p>\r\n<p>\"Mewujudkan Pengadilan Negeri Cikarang yang Agung\"</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Misi Pengadilan Negeri Cikarang :</strong></p>\r\n<ol>\r\n<li>Menjaga kemandirian Pengadilan Cikarang.</li>\r\n<li>Memberikan pelayanan Hukum yang berkeadilan kepada Pencari Keadilan.</li>\r\n<li>Meningkatkan kualitas kepemimpinan Pengadilan Negeri Cikarang.</li>\r\n<li>Meningkatkan kredibilitas dan transparansi Pengadilan Negeri Cikarang</li>\r\n</ol>', 'Profil', 'Publish', '', '2016-09-22 04:31:15', '2022-03-08 15:28:05'),
(7, 4, 4, 'rapat-koordinasi-4-pilar-pengadilan-negeri-cikarang', 'Rapat koordinasi 4 Pilar Pengadilan Negeri Cikarang', '<p>Cikarang (02/03/2022) Ketua Pengadilan Negeri Cikarang mengadakan Rapat koordinasi bersama Wakil Ketua Pengadilan Negeri Cikarang, Panitera dan Sekretaris</p>', 'Berita', 'Publish', '6221c84ba713d.png', '2022-03-08 16:37:56', '2022-03-08 15:37:56'),
(8, 4, 1, 'sosialisasi-aplikasi-kepaniteraan-hukum-dan-keuangan-perdata', 'Sosialisasi Aplikasi Kepaniteraan Hukum dan Keuangan Perdata', '<p>Cikarang (04/03/2022) - Pelaksanaan Sosialisasi Aplikasi Kepaniteraan Hukum dan Keuangan Perdata yang dilaksanakan di command center Pengadilan Negeri Cikarang</p>', 'Berita', 'Publish', '6221de6d3dc48.png', '2022-03-08 16:39:34', '2022-03-08 15:39:34'),
(9, 4, 1, 'sfs', 'sfs', '<p>fdf</p>', 'Berita', 'Publish', 'download.png', '2022-03-09 17:47:26', '2022-03-09 16:47:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori_berita` int(11) NOT NULL,
  `slug_kategori_berita` varchar(255) NOT NULL,
  `nama_kategori_berita` varchar(255) NOT NULL,
  `keterangan` text,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori_berita`, `slug_kategori_berita`, `nama_kategori_berita`, `keterangan`, `urutan`) VALUES
(1, 'sosialisasi', 'Sosialisasi', 'Sosialisasi', 1),
(2, 'hukum', 'Hukum', 'Hukum', 2),
(3, 'sidang', 'Sidang', 'Sidang', 3),
(4, 'dokumentasi', 'Dokumentasi', 'Dokumentasi', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_layanan`
--

CREATE TABLE `kategori_layanan` (
  `id_kategori_layanan` int(11) NOT NULL,
  `slug_kategori_layanan` varchar(255) NOT NULL,
  `nama_kategori_layanan` varchar(255) NOT NULL,
  `keterangan` text,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_layanan`
--

INSERT INTO `kategori_layanan` (`id_kategori_layanan`, `slug_kategori_layanan`, `nama_kategori_layanan`, `keterangan`, `urutan`) VALUES
(1, 'permohonan-info', 'Permohonan Informasi', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori_produk` int(11) NOT NULL,
  `slug_kategori_produk` varchar(255) NOT NULL,
  `nama_kategori_produk` varchar(255) NOT NULL,
  `keterangan` text,
  `urutan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori_produk`, `slug_kategori_produk`, `nama_kategori_produk`, `keterangan`, `urutan`) VALUES
(3, 'cacing', 'Cacing', '', 2),
(4, 'ikan-lele', 'Ikan Lele', '', 1),
(5, 'tes', 'tes', 'rama lg ngetes', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `home_setting` varchar(20) NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tentang` varchar(500) DEFAULT NULL,
  `gambar` text,
  `video` varchar(50) DEFAULT NULL,
  `yacht` text NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(400) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `metatext` text,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_map` text,
  `judul_1` varchar(200) DEFAULT NULL,
  `pesan_1` varchar(200) DEFAULT NULL,
  `judul_2` varchar(200) DEFAULT NULL,
  `pesan_2` varchar(200) DEFAULT NULL,
  `judul_3` varchar(200) DEFAULT NULL,
  `pesan_3` varchar(200) DEFAULT NULL,
  `judul_4` varchar(200) DEFAULT NULL,
  `pesan_4` varchar(200) DEFAULT NULL,
  `judul_5` varchar(200) DEFAULT NULL,
  `pesan_5` varchar(200) NOT NULL,
  `judul_6` varchar(200) DEFAULT NULL,
  `pesan_6` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `home_setting`, `namaweb`, `tagline`, `tentang`, `gambar`, `video`, `yacht`, `website`, `email`, `alamat`, `telepon`, `hp`, `fax`, `logo`, `icon`, `keywords`, `metatext`, `facebook`, `twitter`, `instagram`, `google_map`, `judul_1`, `pesan_1`, `judul_2`, `pesan_2`, `judul_3`, `pesan_3`, `judul_4`, `pesan_4`, `judul_5`, `pesan_5`, `judul_6`, `pesan_6`, `id_user`, `tanggal`) VALUES
(1, 'Image', 'PENGADILAN NEGERI CIKARANG INFO', 'Informasi Terbaru Pengadilan Negeri Cikarang', 'Segala Informasi Pengadilan Negeri Cikarang', 'Seven_Seas_Upper_Deck1.jpg', 'fsH_KhUWfho', '<p>Through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard. In order to build a shared view of what can be improved, to experience a profound paradigm shift, that will indubitably lay the firm foundations for any leading company. Exploitation of core competencies as an essential enabler, exploiting the productive lifecycle by moving executive focus from lag financial indicators to more actionable lead indicators.</p>\r\n<p>An investment program where cash flows exactly match shareholders\' preferred time patterns of consumption defensive reasoning, the doom loop and doom zoom highly motivated participants contributing to a valued-added outcome. In order to build a shared view of what can be improved, in a collaborative, forward-thinking venture brought together through the merging of like minds. Combined with optimal use of human resources, from binary cause and effect to complex patterns, working through a top-down, bottom-up approach. Maximization of shareholder wealth through separation of ownership from management measure the process, not the people. While those at the coal face don\'t have sufficient view of the overall goals.</p>\r\n<p>Whenever single-loop learning strategies go wrong, to focus on improvement, not cost, in order to build a shared view of what can be improved. An important ingredient of business process reengineering that will indubitably lay the firm foundations for any leading company the new golden rule gives enormous power to those individuals and units. Whenever single-loop learning strategies go wrong, building a dynamic relationship between the main players. Organizations capable of double-loop learning, through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard.</p>\r\n<p>To ensure that non-operating cash outflows are assessed. An important ingredient of business process reengineering big is no longer impregnable to experience a profound paradigm shift. The new golden rule gives enormous power to those individuals and units, while those at the coal face don\'t have sufficient view of the overall goals. Taking full cognizance of organizational learning parameters and principles, working through a top-down, bottom-up approach, an investment program where cash flows exactly match shareholders\' preferred time patterns of consumption. Big is no longer impregnable in a collaborative, forward-thinking venture brought together through the merging of like minds.</p>\r\n<p>Through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard. The three cs - customers, competition and change - have created a new world for business motivating participants and capturing their expectations, organizations capable of double-loop learning. To focus on improvement, not cost, exploiting the productive lifecycle taking full cognizance of organizational learning parameters and principles. Presentation of the process flow should culminate in idea generation, the balanced scorecard, like the executive dashboard, is an essential tool quantitative analysis of all the key ratios has a vital role to play in this.</p>\r\n<p> </p>', 'https://pn-cikarang.go.id/', 'info@pn-cikarang.go.id', 'Desa Sukamahi, Cikarang Pusat, Jawa Barat', '021-89977188', '08xxxxxxxxx', '021-89977189', 'logo_cikarang.png', 'logo_cikarang1.png', '', '', '', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.796601287678!2d106.82206981477015!3d-6.420175095354896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebd4856caaa7%3A0x916d6e8dc4e74cd9!2sJl.+Romo%2C+Tirtajaya%2C+Sukmajaya%2C+Kota+Depok%2C+Jawa+Barat+16412!5e0!3m2!1sid!2sid!4v1474512157953\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'MEMBANGUN BUDAYA PERUSAHAAN', 'BUDAYA', 'MEMBANGUN BUDAYA PELAYANAN', 'TEPAT WAKTU', 'MENINGKATKAN PELAYANAN CALL CENTER', 'HEMAT', 'PROGRAM PENDIDIKAN KHUSUS', 'MURAH', 'PROGRAM SEMITAINMENT TRAINING', 'DIJAMIN BISA', 'JUNGGLE SURVIVAL TRAINING', 'YA SUDAHLAH', 4, '2022-03-08 14:51:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_informasi`
--

CREATE TABLE `permohonan_informasi` (
  `id_pemohon` int(11) NOT NULL,
  `kode_pemohon` varchar(100) NOT NULL,
  `nama_pemohon` varchar(255) NOT NULL,
  `alamat` text,
  `pekerjaan` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telpon` varchar(100) NOT NULL,
  `rincian_informasi` text,
  `tujuan` varchar(100) DEFAULT NULL,
  `cara_peroleh_info` varchar(100) DEFAULT NULL,
  `salinan` varchar(50) DEFAULT NULL,
  `via` varchar(50) DEFAULT NULL,
  `tanggal_permohonan` date DEFAULT NULL,
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_pengolah_data` varchar(50) DEFAULT NULL,
  `tanggal_proses` date DEFAULT NULL,
  `status_permohonan` varchar(100) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `tgl_ajukan` date DEFAULT NULL,
  `id_ajukan` varchar(50) DEFAULT NULL,
  `tgl_persetujuan_ppid` date DEFAULT NULL,
  `id_setujui_ppid` varchar(50) DEFAULT NULL,
  `pasal_1_tolak` varchar(200) DEFAULT NULL,
  `pasal_2_tolak` varchar(200) DEFAULT NULL,
  `konsekuensi_tolak` text,
  `atasan_PPID_tolak` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permohonan_informasi`
--

INSERT INTO `permohonan_informasi` (`id_pemohon`, `kode_pemohon`, `nama_pemohon`, `alamat`, `pekerjaan`, `email`, `no_telpon`, `rincian_informasi`, `tujuan`, `cara_peroleh_info`, `salinan`, `via`, `tanggal_permohonan`, `update_time`, `id_pengolah_data`, `tanggal_proses`, `status_permohonan`, `lampiran`, `tgl_ajukan`, `id_ajukan`, `tgl_persetujuan_ppid`, `id_setujui_ppid`, `pasal_1_tolak`, `pasal_2_tolak`, `konsekuensi_tolak`, `atasan_PPID_tolak`) VALUES
(25, '140322-00003', 'jumai', 'catur', 'karyawan', 'jumainah@gmail.com', '082332323', 'Minta Surat Putusan Hakim', 'kredit rumah', 'Melihat', 'Softcopy', 'Langsung', '2022-03-14', '2022-03-14 18:20:22', '4', '2022-03-15', 'SELESAI', '15032022_012022_Trigger_Pembelian_Solar.txt', '2022-03-14', '4', '2022-03-15', '4', NULL, NULL, NULL, NULL),
(26, '150322-00001', 'Faiz', 'Batang', 'Programmer', 'faiz@gmail.com', '082323222', 'Surat Tanah', 'Beli Tanah', 'Melihat', 'Softcopy', 'Langsung', '2022-03-15', '2022-03-14 18:56:12', '4', '2022-03-15', 'SELESAI', '15032022_015611_kop_surat.docx', '2022-03-15', '4', '2022-03-15', '4', NULL, NULL, NULL, NULL),
(27, '150322-00002', 'Nazwa', 'panggung', 'siswa', 'naz@gmail.com', '0822232', 'data hakim', 'pr', 'Melihat', 'Softcopy', 'Email', '2022-03-15', '2022-03-14 18:45:43', '4', '2022-03-15', 'SELESAI', NULL, '2022-03-15', '4', NULL, NULL, NULL, NULL, NULL, NULL),
(28, '150322-00003', 'rio', 'sdfsd', 'sfsd', 'fdf@dgfdgd', '4343', 'dsfs', 'dsf', 'Melihat', 'Softcopy', 'Langsung', '2022-03-15', '2022-03-14 18:55:14', '4', '2022-03-15', 'SELESAI', '15032022_015514_Trigger_Pembelian_Solar.txt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, '150322-00004', 'dicky', 'jktdddddddddddd ggggggggg ddddddddddddd ttttttttt aaaaaa xxxxxxxx', 'podcaster', 'gdic@fmdfs', '23232', 'koooo sdfsd', 'tessss', 'Melihat', 'Softcopy', 'Langsung', '2022-03-15', '2022-03-16 16:42:47', '4', '2022-03-16', 'TOLAK', NULL, '2022-03-15', '4', NULL, NULL, 'df', 'dfd', 'dfd', 'fdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori_produk` int(11) NOT NULL,
  `slug_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `status_produk` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_user`, `id_kategori_produk`, `slug_produk`, `nama_produk`, `keterangan`, `harga`, `stok`, `satuan`, `status_produk`, `gambar`, `tanggal_post`, `tanggal`) VALUES
(1, 2, 3, 'cacing-pita', 'Cacing pita', '<p>adada</p>', 12000, 12000, 'Ekor', 'Publish', 'owl6.jpg', '2016-06-20 04:27:19', '2016-08-04 02:20:44'),
(2, 2, 4, 'kambing-otawa', 'Kambing Otawa', '<p>Kambing Otawa</p>', 12000, 12, 'Kilogram', 'Publish', 'owl3.jpg', '2016-06-20 04:53:40', '2016-08-04 02:20:35'),
(3, 2, 4, 'ikan-lele-dumbo-baru', 'Ikan Lele Dumbo baru', '<p>Ikan Lele Dumbo</p>', 24000, 100, 'Kilogram', 'Publish', 'owl21.jpg', '2016-06-20 04:58:41', '2016-08-04 02:20:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`) VALUES
(4, 'Rama', 'ramaanovariss@gmail.com', 'rama', 'rama', 'Super Admin'),
(5, 'rizal', 'rizal@gmail.com', 'rizal', 'rizal', 'PPID'),
(6, 'Rasid', 'rasid@gmail.com', 'rasid', 'rasid', 'Pengolah Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `keterangan` text,
  `video` varchar(200) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `judul`, `posisi`, `keterangan`, `video`, `urutan`, `id_user`, `tanggal`) VALUES
(1, 'ada', 'Homepage', NULL, 'dTA3-GxQyks', 1, 1, '2016-10-13 02:14:41'),
(2, 'Video tutorial', 'Homepage', NULL, 'uNdvaTZiOHo', 1, 1, '2016-10-13 02:14:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`);

--
-- Indeks untuk tabel `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  ADD PRIMARY KEY (`id_kategori_layanan`);

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `permohonan_informasi`
--
ALTER TABLE `permohonan_informasi`
  ADD PRIMARY KEY (`id_pemohon`),
  ADD UNIQUE KEY `kode_pemohon` (`kode_pemohon`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori_layanan`
--
ALTER TABLE `kategori_layanan`
  MODIFY `id_kategori_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `permohonan_informasi`
--
ALTER TABLE `permohonan_informasi`
  MODIFY `id_pemohon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
