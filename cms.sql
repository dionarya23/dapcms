-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Nov 2016 pada 00.45
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tag` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `isi`, `tag`, `gambar`, `penulis`) VALUES
(20, 'Artikel ke 4', 'Ini ya woy', 'Nama', 'Wallpaper keren 4.jpg', ''),
(22, 'Artikel Ke 6', 'dansjkdnaksjndkjas', '', 'Wallpaper keren 4.jpg', ''),
(25, 'Berubah Power RAnger', 'Tari   : I saw you in the Gajah Mada street last week. What did you do?\r\nSita   : I waited my sister.\r\nTari   : then?\r\nSita   : we went to bookstore to buy novel, then we went to restaurant to eat.\r\nTari   : where is your sister now?\r\nSita   : she always go to the market every Sunday, so she still in the market now.\r\nTari   : what does she do there?\r\nSita   : she helps her uncle to sell clothes.\r\nTari   : clothes?\r\nSita   : yes, it is. My uncle has a shop in Jendral Sudirman street, you can buy some clothes there.\r\nTari   : next time I will try!\r\nSita   : any way, today you look so beautiful with your dress.\r\nTari   : thanks Sita. I bought it yesterday.\r\nSita   : where did you buy it?\r\nTari   : in the shop beside my new home. Sempurna shop is the name of its shop.\r\nSita   : really?? Are you sure??\r\nTari   : of course. Whatâ€™s wrong?\r\nSita   : nothing. Is it in Palapa street?\r\nTari   : you are right!\r\nSita   : thatâ€™s my uncleâ€™s shop! My uncle has three shops, in the market, in Jend', 'B.Inggris', 'Wallpaper keren 4.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `id_postingan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `isi`, `id_postingan`) VALUES
(2, 'Dion', 'CMS nya keren bisa komen kaya gini', '25'),
(3, 'Arya', 'Iya dong siapa dulu yang bikin', '25'),
(4, 'Pamungkas', 'Emang Siapa Yang bikin ?', '25'),
(5, 'Dion Arya Pamungks', 'Gua Yang Bikin Pea, lu semua. lah kok jadi nya nyambung ya Dion Arya Pamungkas', '25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pesan` varchar(300) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `pesan`, `waktu`) VALUES
(8, 'Saya Akan Menghubungi', 'Oke Terimakasih bro', '14.42 - Mon/14-11-2016'),
(9, 'Bro', 'bro bro bro birrasjdjashfjhjsahf', '02.08 - Wed/16-11-2016');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Dion Arya Pamungkas', 'dionarya', '$2y$10$ht50inWVJJ.2OSk/BQ3i/uScofQ1OTvfA.Soz3FIUAL8PRUPz5to6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
