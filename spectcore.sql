-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 19 Mei 2018 pada 03.20
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spectcore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'spectcore', '$2y$10$MrkIiDOdnmBH17KL.Usm.eNhKwKOo1a3iqOGXigbGobof7VFLyXA2', 'Spectcore Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `priv` char(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `email`, `password`, `nama`, `priv`) VALUES
(1, 'me@spectcore.com', '$2y$10$MrkIiDOdnmBH17KL.Usm.eNhKwKOo1a3iqOGXigbGobof7VFLyXA2', 'Spectcore', ''),
(2, 'fnyhsbi@gmail.com', '$2y$10$kKK4uz.tZAdvUST3OJM7nuFLHfGi6VQYxx0y8/WESfHSHzsGX0EXm', 'Fanny Hasbi', ''),
(3, 'me@example.com', '$2y$10$01/XxYFRhRTcXAvNJkjliO39nKRz1SzawjT.OOCvIBctpHNKueBLy', 'Me', 'U'),
(4, 'your@email.com', '$2y$10$946obiFX7CxfXYSdp3W6Xup0RRM3Kf7ml9wdsod2xJLma/9rbqPq.', 'Aufal', 'U');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ambil_proyek`
--

CREATE TABLE `ambil_proyek` (
  `id` int(6) NOT NULL,
  `id_vol` int(4) NOT NULL,
  `id_proyek` int(4) NOT NULL,
  `tgl` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ambil_proyek`
--

INSERT INTO `ambil_proyek` (`id`, `id_vol`, `id_proyek`, `tgl`) VALUES
(1, 3, 1, '2018-05-19 08:00:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesan`
--

CREATE TABLE `detail_pesan` (
  `id` int(6) NOT NULL,
  `kode_pesan` varchar(8) NOT NULL,
  `id_produk` int(6) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_proyek`
--

CREATE TABLE `foto_proyek` (
  `id` int(4) NOT NULL,
  `id_proyek` int(4) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_vol`
--

CREATE TABLE `konfirmasi_vol` (
  `id` int(4) NOT NULL,
  `id_admin` int(3) NOT NULL,
  `id_vol` int(4) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi_vol`
--

INSERT INTO `konfirmasi_vol` (`id`, `id_admin`, `id_vol`, `tgl`) VALUES
(1, 1, 4, '2018-05-18 23:44:27'),
(2, 1, 5, '2018-05-18 23:45:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `kode` varchar(8) NOT NULL,
  `id_pemesan` int(4) NOT NULL,
  `harga` float NOT NULL,
  `waktu` datetime NOT NULL,
  `status` char(1) NOT NULL,
  `tgl_konfirmasi` datetime NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `bukti` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(6) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` float NOT NULL,
  `stok` int(4) NOT NULL,
  `desk` text,
  `tgl_upload` datetime NOT NULL,
  `slug` varchar(50) NOT NULL,
  `foto_utama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `stok`, `desk`, `tgl_upload`, `slug`, `foto_utama`) VALUES
(1, 'Kacang Kulit', 6000, 100, 'Kacang kulit asli Purbalingga', '2018-05-19 06:04:43', 'kacang-kulit', 'pct_rtyt1km2igjz.png'),
(2, 'Kacang Rebus', 15000, 50, 'Kacang asli Semarang', '2018-05-19 06:09:10', 'kacang-rebus', 'pct_h6okh2jygkw5.jpg'),
(3, 'Kacang Isi', 13000, 20, 'Aasa', '2018-05-19 06:10:35', 'kacang-isi', 'pct_c98ipqf0y10g.jpg'),
(4, 'Kacang Goreng', 5000, 12, 'Fasa', '2018-05-19 06:12:16', 'kacang-goreng', 'pct_45en0tdx2bti.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `proyek`
--

CREATE TABLE `proyek` (
  `id` int(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_vol` int(4) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl` datetime DEFAULT CURRENT_TIMESTAMP,
  `desk` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `slug` varchar(50) NOT NULL,
  `foto_utama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `proyek`
--

INSERT INTO `proyek` (`id`, `nama`, `id_vol`, `tempat`, `tgl`, `desk`, `status`, `slug`, `foto_utama`) VALUES
(1, 'Mengenal masyarakat batu', 1, 'Brebes', '2018-05-18 19:43:02', 'asa', 0, 'mengenal-masyarakat-batu', 'awaw.jpg'),
(2, 'Membuat Sepatu Desa Karigiwangan', 3, 'Brebes', '2018-05-18 21:38:20', 'Hehehe cuma contoh', 0, 'membuat-sepatu-desa-karigiwangan', 'awaw.jpg'),
(3, 'Fanny Hasbi', 3, 'Brebes', '2018-05-18 21:41:42', 'Asa', 0, 'fanny-hasbi', 'awaw.jpg'),
(4, 'Fanny Hasbi', 3, 'Brebes', '2018-05-18 21:55:22', 'fasasa', 0, 'fanny-hasbi', 'prj_w7l07nlwmv50.jpg'),
(5, 'Cahyo', 3, 'Semarang', '2018-05-18 21:57:20', 'vasa', 1, 'cahyo', 'prj_j3iervrjslly.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `restok_produk`
--

CREATE TABLE `restok_produk` (
  `id` int(6) NOT NULL,
  `id_admin` int(3) NOT NULL,
  `id_produk` int(6) NOT NULL,
  `tgl` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `id_akun` int(4) NOT NULL,
  `prov` varchar(50) DEFAULT NULL,
  `kab` varchar(50) DEFAULT NULL,
  `kec` varchar(50) DEFAULT NULL,
  `jalan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_akun`, `prov`, `kab`, `kec`, `jalan`) VALUES
(1, 2, 'Jawa Tengah', 'Brebes', 'Brebes', 'Jl. M. Yamin No. 47'),
(2, 3, 'Jawa Tengah', NULL, NULL, NULL),
(3, 1, NULL, NULL, NULL, NULL),
(4, 4, 'Jawa Tengah', 'Brebes', 'Brebes', 'Jl. M. Yamin No. 47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(4) NOT NULL,
  `id_akun` int(4) NOT NULL,
  `status` char(1) NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `prov` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `jalan` varchar(50) DEFAULT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `volunteer`
--

INSERT INTO `volunteer` (`id`, `id_akun`, `status`, `confirmed`, `prov`, `kab`, `kec`, `jalan`, `no_ktp`, `telp`) VALUES
(1, 2, 'P', 1, 'Jawa Tengah', 'Brebes', 'Brebes', 'M. Yamin No. 47', '3329xxxxxxxxxxxx', '085742466050'),
(3, 1, 'T', 1, 'Jawa Tengah', 'Brebes', 'Brebes', 'Jl. M. Yamin No. 47', '332xxxxxxxxxxxxx', NULL),
(4, 3, 'P', 1, '', '', '', NULL, '33xxxxxxxxxxxxxx', '085742466050'),
(5, 4, 'D', 1, '', '', '', NULL, '33290xxxxxxxxxxx', '085742466050');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `ambil_proyek`
--
ALTER TABLE `ambil_proyek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vol` (`id_vol`),
  ADD KEY `id_proyek` (`id_proyek`);

--
-- Indexes for table `detail_pesan`
--
ALTER TABLE `detail_pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_pesan` (`kode_pesan`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `foto_proyek`
--
ALTER TABLE `foto_proyek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_proyek` (`id_proyek`);

--
-- Indexes for table `konfirmasi_vol`
--
ALTER TABLE `konfirmasi_vol`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_vol` (`id_vol`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id_pemesan` (`id_pemesan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_vol` (`id_vol`);

--
-- Indexes for table `restok_produk`
--
ALTER TABLE `restok_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_akun` (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ambil_proyek`
--
ALTER TABLE `ambil_proyek`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detail_pesan`
--
ALTER TABLE `detail_pesan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foto_proyek`
--
ALTER TABLE `foto_proyek`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `konfirmasi_vol`
--
ALTER TABLE `konfirmasi_vol`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `restok_produk`
--
ALTER TABLE `restok_produk`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `ambil_proyek`
--
ALTER TABLE `ambil_proyek`
  ADD CONSTRAINT `ambil_proyek_ibfk_1` FOREIGN KEY (`id_vol`) REFERENCES `volunteer` (`id`),
  ADD CONSTRAINT `ambil_proyek_ibfk_2` FOREIGN KEY (`id_proyek`) REFERENCES `proyek` (`id`);

--
-- Ketidakleluasaan untuk tabel `detail_pesan`
--
ALTER TABLE `detail_pesan`
  ADD CONSTRAINT `detail_pesan_ibfk_1` FOREIGN KEY (`kode_pesan`) REFERENCES `pesan` (`kode`),
  ADD CONSTRAINT `detail_pesan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `foto_proyek`
--
ALTER TABLE `foto_proyek`
  ADD CONSTRAINT `foto_proyek_ibfk_1` FOREIGN KEY (`id_proyek`) REFERENCES `proyek` (`id`);

--
-- Ketidakleluasaan untuk tabel `konfirmasi_vol`
--
ALTER TABLE `konfirmasi_vol`
  ADD CONSTRAINT `konfirmasi_vol_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `konfirmasi_vol_ibfk_2` FOREIGN KEY (`id_vol`) REFERENCES `volunteer` (`id`);

--
-- Ketidakleluasaan untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_pemesan`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `proyek`
--
ALTER TABLE `proyek`
  ADD CONSTRAINT `proyek_ibfk_1` FOREIGN KEY (`id_vol`) REFERENCES `volunteer` (`id`);

--
-- Ketidakleluasaan untuk tabel `restok_produk`
--
ALTER TABLE `restok_produk`
  ADD CONSTRAINT `restok_produk_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `restok_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`);

--
-- Ketidakleluasaan untuk tabel `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `volunteer_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
