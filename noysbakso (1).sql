-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2023 pada 15.45
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noysbakso`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id` int(11) NOT NULL,
  `pesanan_id` int(11) DEFAULT 0,
  `no_produk` int(11) DEFAULT 0,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id`, `pesanan_id`, `no_produk`, `harga`, `jumlah`, `total_harga`) VALUES
(78, 37, 1, 7000, 3, 45000),
(79, 37, 2, 12000, 2, 45000),
(80, 38, 1, 7000, 30, 740000),
(81, 38, 3, 14000, 20, 740000),
(82, 38, 4, 5000, 20, 740000),
(83, 38, 5, 5000, 30, 740000),
(84, 39, 1, 7000, 2, 34000),
(85, 39, 5, 5000, 4, 34000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `pesanan_id` int(11) NOT NULL,
  `no_user` int(11) DEFAULT NULL,
  `alamat` longtext DEFAULT NULL,
  `pengiriman` varchar(50) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `total_bayar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`pesanan_id`, `no_user`, `alamat`, `pengiriman`, `ongkir`, `payment`, `total_bayar`) VALUES
(37, 18, 'ds mojosari kec kras', 'Gojek', 12000, 'gopay', '57000'),
(38, 14, 'ds susuhbango', 'Grab', 14000, 'linkaja', '754000'),
(39, 20, 'beji', 'Grab', 14000, 'shopeepay', '48000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `no_produk` int(11) NOT NULL,
  `nama_produk` varchar(20) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`no_produk`, `nama_produk`, `harga`) VALUES
(1, 'Bakso Biasa', 'Rp.7000'),
(2, 'Bakso Jumbo', 'Rp.12000'),
(3, 'Bakso Urat', 'Rp.7000'),
(4, 'Joshua', 'Rp.5000'),
(5, 'Es Degan', 'Rp.5000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_acc`
--

CREATE TABLE `user_acc` (
  `no_user` int(11) NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pw` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_acc`
--

INSERT INTO `user_acc` (`no_user`, `username`, `email`, `pw`) VALUES
(2, 'mldham', 'mldham@gmail', '0'),
(3, 'losanatoso', 'losantoso@gm', '0'),
(4, 'noygam', 'noysab@gmail', '0'),
(5, 'noygam', 'noysab@gmail', '0'),
(6, 'riskkyganten', 'risk@gmail.c', '1287'),
(7, 'noygam', 'noysab@gmail', '0'),
(8, 'noygam', 'noysab@gmail', '1234'),
(9, 'daffaganteng', 'daffageming@', '0'),
(10, 'mldham', 'mldham@gmail', '1234'),
(11, 'notbengkel', 'notbengkel@g', '1234'),
(12, 'rizkyroces', 'rizkyrocesga', 'rizkyroces20'),
(13, 'noy', 'rizkyrocesganotpradana@gmail.com', '2006'),
(14, 'rastra', 'rastra@gmail.com', 'rastra123'),
(15, 'bambang', 'bambang@gmail.com', 'bambang123'),
(16, 'mamat', 'mamat@gmail.com', 'mamat123'),
(17, 'ilham', 'ilham@gmail.com', 'ilham123'),
(18, 'cardio', 'cardio@gmail.com', '1234'),
(19, 'dio', 'dio@gmail.com', 'dio123'),
(20, 'nana', 'nana@gmaill.com', '111');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_produk` (`no_produk`),
  ADD KEY `pesanan_id` (`pesanan_id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`pesanan_id`),
  ADD KEY `no_user` (`no_user`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`no_produk`);

--
-- Indeks untuk tabel `user_acc`
--
ALTER TABLE `user_acc`
  ADD PRIMARY KEY (`no_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `pesanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `no_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_acc`
--
ALTER TABLE `user_acc`
  MODIFY `no_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `detail_pesanan_ibfk_1` FOREIGN KEY (`no_produk`) REFERENCES `produk` (`no_produk`),
  ADD CONSTRAINT `detail_pesanan_ibfk_2` FOREIGN KEY (`pesanan_id`) REFERENCES `pemesanan` (`pesanan_id`);

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`no_user`) REFERENCES `user_acc` (`no_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
