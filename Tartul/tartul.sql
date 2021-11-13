-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Sep 2021 pada 05.20
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tartul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hitung`
--

CREATE TABLE `hitung` (
  `id_hitung` int(10) NOT NULL,
  `id_tartul` int(10) NOT NULL,
  `pemelihara` int(5) NOT NULL,
  `warna` int(5) NOT NULL,
  `panjang` int(5) NOT NULL,
  `umur` int(5) NOT NULL,
  `sifat` int(5) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hitung`
--

INSERT INTO `hitung` (`id_hitung`, `id_tartul`, `pemelihara`, `warna`, `panjang`, `umur`, `sifat`, `hasil`) VALUES
(1, 1, 1, 0, 0, 0, 0, 1),
(2, 4, 1, 0, 0, 0, 0, 1),
(3, 5, 0, 0, 0, 0, 0, 0),
(4, 6, 1, 0, 0, 0, 0, 1),
(5, 7, 1, 0, 0, 0, 0, 1),
(6, 8, 0, 0, 0, 0, 0, 0),
(7, 9, 0, 0, 0, 0, 0, 0),
(8, 10, 0, 0, 0, 0, 0, 0),
(9, 11, 0, 0, 0, 0, 0, 0),
(10, 12, 0, 0, 0, 0, 0, 0),
(12, 14, 0, 0, 0, 0, 0, 0),
(22, 15, 0, 0, 0, 0, 0, 0),
(29, 22, 0, 0, 0, 0, 0, 0),
(30, 23, 0, 0, 0, 0, 0, 0),
(31, 24, 0, 0, 0, 0, 0, 0),
(32, 25, 0, 0, 0, 0, 0, 0),
(33, 26, 1, 0, 0, 0, 0, 1),
(34, 27, 0, 0, 0, 0, 0, 0),
(35, 28, 0, 0, 0, 0, 0, 0),
(36, 29, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komen` int(100) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `id_tartul` int(10) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komen`, `id_user`, `nama`, `komentar`, `id_tartul`, `tanggal`) VALUES
(8, 5, 'andromeda', 'test', 1, '2021-05-07 12:02:37'),
(9, 5, 'andromeda', 'test2', 1, '2021-05-07 00:03:41'),
(12, 1, 'Puri', 'hidden', 1, '2021-05-09 13:00:43'),
(13, 1, 'Puri', 'ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 1, '2021-05-09 13:48:47'),
(14, 1, 'Puri', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, '2021-05-09 14:13:03'),
(18, 1, 'Puri', 'aaaaaaaaaaaaaaaa', 4, '2021-05-09 14:15:44'),
(19, 2, 'edi', 'cek', 4, '2021-06-09 13:38:34'),
(20, 2, 'edi', 'a', 4, '2021-06-09 13:40:39'),
(21, 2, 'edi', 'hidden', 1, '2021-06-09 14:25:23'),
(22, 2, 'edi', 'aaaaaaaaaaaaaaaa', 7, '2021-07-03 04:23:29'),
(23, 2, 'edi', 'salah satu tarantula dengan  warna yang menarik', 15, '2021-07-17 04:03:11'),
(24, 2, 'edi', 'tarantula arboreal', 15, '2021-07-17 04:03:35'),
(25, 1, 'Puri', 'mantab, saya perlihara sudah 18 cm', 12, '2021-08-12 09:34:27'),
(27, 14, 'anda1', 'orange baboon tarantula', 14, '2021-08-12 09:37:16'),
(28, 1, 'Puri', 'cocok untuk pemula', 26, '2021-08-16 07:34:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarantula`
--

CREATE TABLE `tarantula` (
  `id_tartul` int(10) NOT NULL,
  `nama_spesies` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `src_foto` varchar(100) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `generasi` varchar(15) NOT NULL,
  `kecepatan` varchar(10) NOT NULL,
  `racun` varchar(10) NOT NULL,
  `umur` int(5) NOT NULL,
  `panjang` int(5) NOT NULL,
  `pemelihara` varchar(15) NOT NULL,
  `sifat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tarantula`
--

INSERT INTO `tarantula` (`id_tartul`, `nama_spesies`, `foto`, `src_foto`, `warna`, `generasi`, `kecepatan`, `racun`, `umur`, `panjang`, `pemelihara`, `sifat`) VALUES
(1, 'Acanthoscurria geniculata', '369129517_A.geniculata.png', 'buku new world tarantulas oleh Fernando PÃ©rez-Miles', 'hitam-putih', 'new world', 'lambat', 'rendah', 20, 18, 'pemula', 'kalem'),
(4, 'Aphonopelma Seemani', '442008917_A.Seemani.png', 'buku new world tarantulas oleh Fernando PÃ©rez-Miles', 'hitam-putih', 'new world', 'cepat', 'rendah', 15, 14, 'pemula', 'defensif'),
(5, 'Avicularia Avicularia', '1368344645_Avicularia Avicularia.png', 'buku new world tarantulas oleh Fernando PÃ©rez-Miles', 'hitam-cokelat', 'new world', 'lambat', 'rendah', 12, 13, 'ahli', 'defensif'),
(6, 'Brachypelma Auratum', '831456687_B.Auratum.png', 'buku new world tarantulas oleh Fernando PÃ©rez-Miles', 'hitam-orange', 'new world', 'lambat', 'rendah', 25, 16, 'pemula', 'kalem'),
(7, 'Brachypelma Hamorii', '2126618235_B.Hamorii.png', 'buku new world tarantulas oleh Fernando PÃ©rez-Miles', 'hitam-orange', 'new world', 'lambat', 'rendah', 25, 15, 'pemula', 'kalem'),
(8, 'Caribena Versicolor', '480281790_C.versicolor.png', 'buku new world tarantulas oleh Fernando PÃ©rez-Miles', 'hitam-merah', 'new world', 'lambat', 'rendah', 10, 12, 'ahli', 'defensif'),
(9, 'Psalmopoeus irminia Saager', '875065272_Psalmopoeus irminia Saager.png', 'buku new world tarantulas oleh Fernando PÃ©rez-Miles', 'abuabu-orange', 'new world', 'cepat', 'tinggi', 12, 15, 'ahli', 'defensif'),
(10, 'Pseudoclamoris gigas', '259886625_Pseudoclamoris gigas.png', 'buku new world tarantulas oleh Fernando PÃ©rez-Miles', 'orange', 'new world', 'cepat', 'tinggi', 12, 13, 'ahli', 'defensif'),
(11, 'Theraphosa stirmi', '1843106074_Theraphosa stirmi.png', 'buku new world tarantulas oleh Fernando PÃ©rez-Miles', 'coklat', 'new world', 'lambat', 'rendah', 20, 27, 'ahli', 'defensif'),
(12, 'Xenesthis immanis', '1216297656_Xenesthis immanis.png', 'buku new world tarantulas oleh Fernando PÃ©rez-Miles', 'hitam-merah', 'new world', 'cepat', 'rendah', 15, 21, 'ahli', 'defensif'),
(14, 'Pterinochilus murinus', '2082749303_p.murinus.jpg', 'sireta', 'orange', 'old world', 'cepat', 'tinggi', 15, 15, 'ahli', 'defensif'),
(15, 'Poecilotheria metallica', '2117431157_p.metalica.png', 'nwzoo.com', 'biru-putih', 'old world', 'cepat', 'tinggi', 12, 22, 'ahli', 'defensif'),
(22, 'Poecilotheria Formosa', '1871438553_p.formosa.png', 'nwzoo.com', 'hitam-putih', 'old world', 'cepat', 'tinggi', 15, 20, 'ahli', 'defensif'),
(23, 'Poecilotheria ornata', '403797438_p.ornata.png', 'nwzoo.com', 'hitam-kuning', 'old world', 'cepat', 'tinggi', 12, 25, 'ahli', 'defensif'),
(24, 'Poecilotheria regalis', '1156312186_p.regalis.jpg', 'mymonsters.co.za', 'hitam-putih', 'new world', 'cepat', 'tinggi', 12, 19, 'ahli', 'defensif'),
(25, 'Â Pelinobius muticus', '1413990905_p.muticus.png', 'tarantupedia.com', 'coklat', 'old world', 'cepat', 'tinggi', 25, 20, 'ahli', 'defensif'),
(26, 'Nhandu chromatus', '2110268671_Nhandu chromatus.jpg', 'https://www.thetarantulacollective.com/', 'hitam-cokelat', 'new world', 'lambat', 'rendah', 15, 20, 'pemula', 'defensif'),
(27, 'Pterinopelma sazimai', '976508801_Pterinopelma sazimai.jpg', 'thetarantulacollective.com', 'hitam-biru', 'new world', 'cepat', 'rendah', 16, 16, 'ahli', 'kalem'),
(28, 'Monocentropus balfouri', '2034853153_Monocentropus balfouri.png', 'tarantupedia.com', 'biru-putih', 'old world', 'cepat', 'tinggi', 14, 18, 'ahli', 'defensif'),
(29, 'Poecilotheria Rufilata', '802591554_Poecilotheria Rufilata.png', 'mymonsters.co.za', 'hitam-kuning', 'old world', 'cepat', 'tinggi', 12, 22, 'ahli', 'defensif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` enum('Admin','User') NOT NULL,
  `kota` varchar(20) NOT NULL,
  `jenis_pemelihara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `kota`, `jenis_pemelihara`) VALUES
(1, 'Puri', 'admin', 'admin', 'Admin', 'sukoharjo', 'ahli'),
(2, 'edi', 'user', 'user', 'User', 'solo raya', 'pemula'),
(4, 'dekne', 'dekne', 'dekne', 'User', '', ''),
(5, 'andromeda', 'andro', 'andro', 'Admin', '', ''),
(6, 'acek', 'cekcekcek', '123451', 'User', '', ''),
(8, 'petruk', 'petruk123', '12345', 'User', '', ''),
(10, 'xxx', 'xxx', 'xxx', 'User', 'surabaya', 'ahli'),
(14, 'anda1', 'anda', 'anda1', 'User', 'karanganyar', 'ahli'),
(24, 'ddd', 'ddd', 'ddd', 'User', 'solo', 'pemula');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`id_hitung`),
  ADD KEY `id_tartul` (`id_tartul`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komen`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tartul` (`id_tartul`);

--
-- Indeks untuk tabel `tarantula`
--
ALTER TABLE `tarantula`
  ADD PRIMARY KEY (`id_tartul`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_hitung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komen` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tarantula`
--
ALTER TABLE `tarantula`
  MODIFY `id_tartul` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hitung`
--
ALTER TABLE `hitung`
  ADD CONSTRAINT `hitung_ibfk_1` FOREIGN KEY (`id_tartul`) REFERENCES `tarantula` (`id_tartul`);

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `id_tartul` FOREIGN KEY (`id_tartul`) REFERENCES `tarantula` (`id_tartul`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
