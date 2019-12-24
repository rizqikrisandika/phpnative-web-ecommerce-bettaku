-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 11:01 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bettaku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(20) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `foto_admin` varchar(100) DEFAULT NULL,
  `nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`, `foto_admin`, `nama_admin`) VALUES
(1, 'rizqi1724', '3103deb68465747643608bb0f506dee6', 'rizqi.jpg', 'rizqi krisandika'),
(4, 'farida1708', 'c59b469d724f7919b7d35514184fdc0f', NULL, 'Farida'),
(5, 'tito1709', '52d080a3e172c33fd6886a37e7288491', NULL, 'Syaril tito mahendra');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Plakat'),
(2, 'Crowntail'),
(3, 'Halfmoon'),
(4, 'Halfmoon Plakat'),
(5, 'Slayer');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_daftar` datetime NOT NULL DEFAULT current_timestamp(),
  `email_pelanggan` varchar(50) NOT NULL,
  `password_pelanggan` varchar(255) NOT NULL,
  `username_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(100) DEFAULT NULL,
  `nohp_pelanggan` varchar(25) NOT NULL,
  `alamat_pelanggan` varchar(255) DEFAULT NULL,
  `foto_pelanggan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `tanggal_daftar`, `email_pelanggan`, `password_pelanggan`, `username_pelanggan`, `nama_pelanggan`, `nohp_pelanggan`, `alamat_pelanggan`, `foto_pelanggan`) VALUES
(12, '2019-12-11 12:21:01', 'rizqikrisandika990@gmail.com', '541dfad50aac2125dac2ef63b4d022f2', 'rizqikrisandika', 'rizqikrisandika', '089523269898', 'Taman Sedayu 3, Bantul', 'user/foto_profile/img_20191221014459.png'),
(16, '2019-12-22 16:02:55', 'rizqialnova@gmail.com', '01aad4b248d8fa31ff08455ed4c72006', 'Alnova99', 'Rizqi alnova defario', '089523269898', 'Gamping, Yogyakarta', 'user/foto_profile/img_20191222100443.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `jumlah_pembayaran` int(11) NOT NULL,
  `tanggal_pembayaran` datetime NOT NULL DEFAULT current_timestamp(),
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah_pembayaran`, `tanggal_pembayaran`, `bukti_pembayaran`) VALUES
(7, 24, 'Rizqi Krisandika', 'BRI', 195000, '2019-12-25 03:56:58', 'ls/bukti_pembayaran/img_20191224215658.png');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tanggal_pembelian` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_pembelian` int(11) NOT NULL,
  `status_pembelian` varchar(20) NOT NULL DEFAULT 'Belum bayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `tanggal_pembelian`, `total_pembelian`, `status_pembelian`) VALUES
(23, 12, '2019-12-24 20:29:11', 300000, 'Belum bayar'),
(24, 12, '2019-12-24 20:56:13', 195000, 'Verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama_produk`, `foto_produk`, `harga_produk`) VALUES
(20, 23, 35, 1, 'Red Dragon', 'img_20191212151559.png', 300000),
(21, 24, 29, 1, 'AOC', 'img_20191211151300.png', 150000),
(22, 24, 32, 1, 'Super Red', 'img_20191211152030.png', 45000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `tanggal_produk` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) DEFAULT NULL,
  `deskripsi_produk` text NOT NULL,
  `stok_produk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `id_admin`, `id_pelanggan`, `tanggal_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(25, 1, 1, NULL, '2019-12-09 06:12:03', 'Fancy Red', 136000, 'img_20191209091739.png', 'murahhh', 1),
(26, 1, 1, NULL, '2019-12-11 12:56:18', 'Red Fccp', 25000, 'img_20191211135618.png', 'Jantan\r\nsize M', 1),
(27, 1, 1, NULL, '2019-12-11 12:58:56', 'Fancy Yellow', 75000, 'img_20191211135856.png', 'sudah siap pijah', 1),
(28, 4, 1, NULL, '2019-12-11 13:00:26', 'HMPK Gold', 320000, 'img_20191211140026.png', 'Muantappppp', 1),
(29, 1, 1, NULL, '2019-12-11 14:13:00', 'AOC', 150000, 'img_20191211151300.png', 'size s', 0),
(30, 1, 1, NULL, '2019-12-11 14:16:26', 'Koi', 50000, 'img_20191211151626.png', 'Betina', 1),
(31, 1, 1, NULL, '2019-12-11 14:17:23', 'Koi Galaxy', 75000, 'img_20191211151723.png', 'siapp breed slur', 1),
(32, 1, 1, NULL, '2019-12-11 14:20:30', 'Super Red', 45000, 'img_20191211152030.png', 'bisa diliat di gambar', 0),
(33, 3, 1, NULL, '2019-12-11 14:24:03', 'Besgel Red Blue', 30000, 'img_20191211152403.png', 'murahh ajaa hehe', 1),
(35, 1, 1, NULL, '2019-12-12 14:15:59', 'Red Dragon', 300000, 'img_20191212151559.png', 'murahhhhh', 0),
(41, 1, NULL, 12, '2019-12-22 03:40:04', 'Cupang Alam Machacha', 3000000, 'img_20191222044004.png', 'Mahall pastinya', 1),
(43, 1, 4, NULL, '2019-12-22 09:27:17', 'Fancy', 70000, 'img_20191222102717.png', 'Murahhhh\r\n\r\n#CUPANG #CUPANGINDONESIA', 1),
(44, 1, NULL, 16, '2019-12-22 09:32:16', 'Cupang Alam Copper', 5000000, 'img_20191222103216.png', 'Yang ngerti aja sama barang\r\n\r\n#CUPANGALAM', 1),
(45, 2, 1, NULL, '2019-12-24 21:24:39', 'Crowntail black', 50000, 'img_20191224222439.png', 'murah slurrrrr', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pembelian` (`id_pembelian`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`),
  ADD KEY `id_pembelian` (`id_pembelian`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Constraints for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD CONSTRAINT `pembelian_produk_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`),
  ADD CONSTRAINT `pembelian_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
