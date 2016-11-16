# dapcms
content management sysytem dengan php dan mysqli dengan thema bootstrap dan w3css
dibuat oleh Dion Arya Pamungkas
fb.com/dion.aryapamungkas dan twitter.com/DionArya_P terimakasih semoga bermanfaat.

Perhatian buat Sebuah Database dengan nama cms dibagian db.php silahkan disesuaikan saat koneksinya
Kemudian buat 4 tabel

1. tabel pertama degan nama blog
CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(1000) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tag` varchar(1000) NOT NULL,
  `gambar` varchar(1000) NOT NULL,
  `penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

2. tabel kedua dengan nama komentar
CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `isi` varchar(100) NOT NULL,
  `id_postingan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

3. tabel ketiga dengan nama pesan
CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pesan` varchar(300) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

4. tabel keempat dengan nama users untuk login. gunakan username dionarya dengan password subang
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
