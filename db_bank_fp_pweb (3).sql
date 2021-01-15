-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2021 pada 04.45
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bank_fp_pweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_user`
--

CREATE TABLE `detail_user` (
  `id_detail_user` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `img_path` varchar(50) NOT NULL COMMENT 'tambahan "w_" untuk wajah, "k_" untuk ktp',
  `created at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_user`
--

INSERT INTO `detail_user` (`id_detail_user`, `user_id`, `no_ktp`, `alamat`, `img_path`, `created at`) VALUES
(4, 23, '123456', 'nganjuk', '2021-01-06 11:16:59', '2021-01-06 04:16:59'),
(5, 24, '123456', 'sby', '2021-01-07 07:13:30', '2021-01-07 00:13:30'),
(6, 25, '05151858484', 'nganjuk', '2021-01-13_035154373300.jpg', '2021-01-13 14:51:54'),
(7, 26, 'asdf', 'asdf', '2021-01-13_060612126347.png', '2021-01-13 17:06:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_rekekening`
--

CREATE TABLE `jenis_rekekening` (
  `id_jenis_rekening` int(11) NOT NULL,
  `nama_jenis_rekening` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_rekekening`
--

INSERT INTO `jenis_rekekening` (`id_jenis_rekening`, `nama_jenis_rekening`, `keterangan`) VALUES
(1, 'Gold', 'minimal saldo 100jt'),
(2, 'Platinum', 'saldo minimal 300 juta'),
(3, 'Silver', 'minimal saldo 10jt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `jenis_rekening` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL COMMENT 'jika 0 = inactive, 1 active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `user_id`, `no_rekening`, `jenis_rekening`, `created_at`, `status`) VALUES
(9, 2, '776998218968', 2, '2021-01-13 14:48:19', 0),
(10, 2, '498049539170', 1, '2021-01-13 15:43:22', 0),
(11, 2, '856917055175', 3, '2021-01-13 17:05:50', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` char(1) NOT NULL COMMENT 'A = admin, U = user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@mail.id', '21232f297a57a5a743894a0e4a801fc3', 'A'),
(2, 'user', 'user@mail.id', 'ee11cbb19052e40b07aac0ca060c23ee', 'U'),
(23, 'Excel Deo', 'excel.deo99@gmail.com', 'bf57c906fa7d2bb66d07372e41585d96', 'U'),
(24, 'excel', 'excel@mail.id', 'bf57c906fa7d2bb66d07372e41585d96', 'U'),
(25, 'aaa', 'aaa@gmaill.com', '47bce5c74f589f4867dbd57e9ca9f808', 'U'),
(26, 'asdf', 'admin@mail.id', '912ec803b2ce49e4a541068d495ab570', 'U');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id_detail_user`);

--
-- Indeks untuk tabel `jenis_rekekening`
--
ALTER TABLE `jenis_rekekening`
  ADD PRIMARY KEY (`id_jenis_rekening`);

--
-- Indeks untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_user`
--
ALTER TABLE `detail_user`
  MODIFY `id_detail_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jenis_rekekening`
--
ALTER TABLE `jenis_rekekening`
  MODIFY `id_jenis_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_user`
--
ALTER TABLE `detail_user`
  ADD CONSTRAINT `detail_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `rekening`
--
ALTER TABLE `rekening`
  ADD CONSTRAINT `rekening_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `rekening_ibfk_2` FOREIGN KEY (`jenis_rekening`) REFERENCES `jenis_rekekening` (`id_jenis_rekening`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
