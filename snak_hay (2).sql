-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Mar 2021 pada 04.10
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snak_hay`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(34, 'Pitzaa', 'Masih hangat', 'Menu Spesial', 100000, 9, '069835200_1495523761-053541600_1492411870-Pizza1.jpg'),
(35, 'Minuman Jus', 'Jus Mangga', 'Minuman', 200000, 6, '40257_jus-belimbing-jeruk.jpg'),
(36, 'Sop Daging', 'terbuat dari daging sapi pilihan', 'Makanan', 20000, 6, '2F97DFFF-AC4E-4409-B467-44FF65DDE1BA.jpeg'),
(37, 'Sate Kambing', 'Sate kambing aseli madura', 'Makanan', 200000, 4, 'o.jpg'),
(38, 'Sop Sapi', 'masih hangat', 'Makanan', 12000, 2, 'article_1610097108.jpg'),
(39, 'Daging sapi', 'Masi hangat', 'Makanan', 100000, 2, 'images.jpg'),
(40, 'Daging kerbau', 'Enak dan Lezat', 'Makanan', 200000, 6, '95a10be4f6e49580d67c48b90368fc0d.jpg'),
(41, 'Sop Buntut', 'Enak Dan Ngenyangin', 'Makanan', 200000, 9, 'Ragam-Soto-dengan-Kuah-Santan-yang-Rasanya-Nendang-Gurih-Bikin-Nagih1-e1551540800922-1-1.jpg'),
(42, 'Sop Iga', 'Masih Hangat', 'Makanan', 20000, 6, 'zabpd2ixhbmywenlfwee.jpg'),
(43, 'Daging Ayam', 'Enak dan Nyaman', 'Makanan', 1000000, 6, 'unnamed.jpg'),
(44, 'Teh Manis', 'Enak', 'Minuman', 15000, 6, 'Es+Teh+Tawar-85bd6b93-0e90-4b4c-b409-a4ab7d6bf2e52x.jpg'),
(45, 'Jus Buah', 'Buah alpukat', 'Minuman', 20000, 7, '2293321912.jpg'),
(46, 'Jus Jeeruk', 'Asli buah', 'Minuman', 200000, 3, '2017-08-30-07-05-32.jpg'),
(47, 'Jus Apel', 'Nyegerin', 'Minuman', 100000, 6, 'Es+Teh+Tawar-85bd6b93-0e90-4b4c-b409-a4ab7d6bf2e52x1.jpg'),
(48, 'Teh Hangat', 'Hangat dan segar', 'Minuman', 100000, 6, 'data.jpg'),
(49, 'Ayam Geprek', 'Enak', 'Menu Spesial', 50000, 9, 'ayam-betutu-makanan-khas-indonesia-yang-paling-digemari-wisatawan-mancanegara.jpg'),
(50, 'Burger', 'Enak tau', 'Menu Spesial', 100000, 6, 'COLL_306-990x720-FIT_AND_TRIM-54f4752c66121fe084133478c2a75eca.jpeg'),
(51, 'Burger Daging', 'Enak dan Lezat', 'Menu Spesial', 100000, 9, 'images_(1).jpg'),
(52, 'Pasta', 'Enak', 'Menu Spesial', 100000, 7, 'resep-spaghetti-2.jpg'),
(53, 'Pitza Sosis', 'Enak', 'Menu Spesial', 200000, 50, 'images_mancanegara_Aneka_Resep_Pizza_pizza-keju-mozarella1-1200x798.jpg'),
(54, 'Pasta Dagning', 'Enak dan Lezat', 'Menu Spesial', 200000, 9, 'spaghetti1.jpg'),
(55, 'Spageti', 'Masi Hangat', 'Menu Spesial', 200000, 9, 'spaghetti-aglio-olio-2-6825298e2aa0d654def9391b3344a9b0_600x400.jpg'),
(56, 'Burger King', 'Masih Hangat', 'Makanan', 55000, 3, '27a9a01d3b72824a0e8bfb53cd369345.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_pembayaran` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_pembayaran`) VALUES
(1, 'muhamad aldi setiawan', 'kp tanah merah', '2020-08-14 16:11:33', '2020-08-15 16:11:33'),
(2, 'Muhamad ald setiawan', 'kp melayu', '2020-08-14 21:14:08', '2020-08-15 21:14:08'),
(4, 'saepudin', 'kp jati baru gang pahlawan no 5', '2020-08-15 16:12:16', '2020-08-16 16:12:16'),
(5, 'kmoknk', 'knjnjnk', '2020-08-23 15:09:51', '2020-08-24 15:09:51'),
(6, 'muhamad fauxi', 'kp tanah merah kecamatan sepatan timur kabupaten tangernag', '2020-08-23 15:13:06', '2020-08-24 15:13:06'),
(7, 'aldo skuy', 'kp tanah merah kecamatan sepatan timur kabupaten tangerang banten', '2021-02-20 20:47:12', '2021-02-21 20:47:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 3, 1, 'Sepatu', 1, 300000, ''),
(2, 3, 2, 'Baju', 1, 1000000, ''),
(3, 3, 4, 'Topi', 1, 1000000, ''),
(4, 4, 1, 'Sepatu', 1, 300000, ''),
(5, 4, 2, 'Baju', 1, 1000000, ''),
(6, 5, 1, 'Sepatu', 1, 300000, ''),
(7, 5, 4, 'Topi', 1, 1000000, ''),
(8, 6, 2, 'Baju', 1, 1000000, ''),
(9, 7, 1, 'Sepatu', 1, 300000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang set stok = stok-NEW.jumlah
    where id_barang = new.id_barang;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(35) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `no_hp`, `alamat`, `gambar`, `role_id`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$rWSTqeaq8ngC3Xjxk0diJ.eZSQi4bv1em1VcznEfoJKpH654bF5JK', '-', '-', 'default.png', 1),
(2, 'muhamad aldo', 'aldo@gmail.com', '$2y$10$bHKI1Gze1fHMCy8EOejLW.76p2YnkPlyGi59oykdtDp12pz.bO61y', '083852545114', 'tanah merah	kedaung barat									', 'ig.jpg', 2),
(3, 'sabilah 29', 'sabil@gmail.com', '$2y$10$Kito7YYMXKq6XD72evBpqeYj9ym4D8FSA8HfM6jPcQrUrTyBoJyHu', '08928874212', '											kp tanah merah kec. sepatan timur kab. tangerang banten																														', 'wa.png', 2),
(4, 'dedih', 'dedih@gmail.com', '$2y$10$Yo/qwmzqbSUzVtonvubChOjJYFhzcTTcgMlTZm/GMFxj0aXBPanu2', '08928874212', 'tanah abang', 'default.jpg', 2),
(5, 'sabilah', 'sabilah@gmail.com', '$2y$10$3VHGYtWwn4QmJeKBmLbKlehkZe3x4L3uewyCYLndGt9kSJoBSucyC', '08928874211', 'tanah merah', 'default.jpg', 2),
(6, 'adul', 'adul@gmail.com', '$2y$10$fRbajlREGwZguhQFCtZ1SuBRImsTNioM7QHzfQrKg.lsV19JLWDxG', '08928874211', 'tangerang', 'default.jpg', 2),
(7, 'verdian', 'verdian@gmail.com', '$2y$10$jVWAKytmf3SUCNyau3/BQO3s3oMa41rRQ.cyac54qPhDNvEYvmar.', '08928874212', 'tangerang', 'default.jpg', 2),
(8, 'amri', 'amri@gmail.com', '$2y$10$fihLV2UnBZYvfpAF3I/QB.ilURDSPwnYc.TC4ghk1yg0u7QGfQHEK', '08928874212', 'tangerang jln ahmad yani', 'default.jpg', 2),
(9, 'admin', 'snackhai.add@gmail.com', '$2y$10$Yg0OHl/xt8JlQmveGvGEJO0riJyshTpYdw6.CAw5.RevoYAzbeP4m', '08928874212', '-', 'default.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
