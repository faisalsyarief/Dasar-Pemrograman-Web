-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Feb 2016 pada 07.42
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(50) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_name`, `password`) VALUES
(7, 'faisalshop', 'admin7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `nama_lengkap` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`nama_lengkap`, `telepon`, `product`, `alamat`, `tanggal`) VALUES
('Tiara', '087761961908', 'sepatu nike red', 'bandung', '0000-00-00'),
('resti', '086573622874', 'sepatu  nike red', 'bandung', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('faisal', '123', 'sepatu  nike red', 'pare pare', '0000-00-00'),
('diana', '081310213842', 'sepatu nike red', 'ciamis', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('Nur', '0897000', 'Jaket', 'Sarijadi', '0000-00-00'),
('Mulyana', '09876', 'Jaket AB', 'Parepare', '0000-00-00'),
('', '', '', '', '0000-00-00'),
('Nur Mulyana', '098765', 'Jaket', 'Parepare', '0000-00-00'),
('asff', '090898', 'baju', 'asdtgth', '2012-12-12'),
('Agia', '098839893859', 'Topi A', 'Ciamis', '2012-12-12'),
('Wuri', '0898977', 't', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `kode_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `harga_barang` varchar(100) NOT NULL,
  `gambar_product` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`kode_barang`, `jenis_barang`, `harga_barang`, `gambar_product`) VALUES
('001', 'Topi AB', 'Rp 80.000', ''),
('002', 'Sepatu Soga', 'Rp 270.000', 'sepatu5.jpg'),
('003', 'Gelang', 'Rp 25.000', 'gelang1.jpg'),
('004', 'Jaket', 'Rp. 115.000', '3 .jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
