-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 05:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maskk`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasiswa`
--

CREATE TABLE `datasiswa` (
  `id` int(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tahunDaftar` int(20) NOT NULL,
  `nisnMts` int(100) DEFAULT NULL,
  `noIjazah` int(100) DEFAULT NULL,
  `noSkhun` int(100) DEFAULT NULL,
  `noUn` int(50) DEFAULT NULL,
  `nomerAkte` int(100) DEFAULT NULL,
  `jenisKelamin` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tempatLahir` varchar(200) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `anakKe` int(20) NOT NULL,
  `dari` int(20) NOT NULL,
  `alamatSekarang` varchar(200) NOT NULL,
  `statusSosial` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `noHp` varchar(100) NOT NULL,
  `asalSekolah` varchar(150) NOT NULL,
  `npsnAsal` int(150) DEFAULT NULL,
  `jurusan` varchar(100) NOT NULL,
  `prestasiDalam` varchar(200) DEFAULT NULL,
  `prestasiLuar` varchar(200) DEFAULT NULL,
  `noKK` int(100) NOT NULL,
  `namaAyah` varchar(100) NOT NULL,
  `noKtpAyah` int(100) NOT NULL,
  `pekerjaanAyah` varchar(200) DEFAULT NULL,
  `namaIbu` varchar(100) NOT NULL,
  `noKtpIbu` int(100) NOT NULL,
  `pekerjaanIbu` varchar(200) DEFAULT NULL,
  `alamatWali` varchar(200) DEFAULT NULL,
  `handphoneWali` varchar(100) NOT NULL,
  `statusPembayaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasiswa`
--

INSERT INTO `datasiswa` (`id`, `nama`, `tahunDaftar`, `nisnMts`, `noIjazah`, `noSkhun`, `noUn`, `nomerAkte`, `jenisKelamin`, `agama`, `tempatLahir`, `tanggalLahir`, `anakKe`, `dari`, `alamatSekarang`, `statusSosial`, `email`, `noHp`, `asalSekolah`, `npsnAsal`, `jurusan`, `prestasiDalam`, `prestasiLuar`, `noKK`, `namaAyah`, `noKtpAyah`, `pekerjaanAyah`, `namaIbu`, `noKtpIbu`, `pekerjaanIbu`, `alamatWali`, `handphoneWali`, `statusPembayaran`) VALUES
(2, 'Alfin Ade P.', 2019, 1, 100, 0, 15007063, 0, 'Laki-laki', 'Islam', 'Bandar Agung', '2013-03-06', 1, 4, 'Asrama Yayasan Khazanah Kebajikan', 'Fakir/Miskin', 'jkkj@gmail.com', '089654777502', 'SMPN 1 Pendopo', 0, 'IPA', 'Ranking 1', '', 2147483647, 'Rusmik', 0, 'Tani', 'Masayu Hadisa', 0, 'Tani', 'Bandar Agung', '085268979070', 'Belum'),
(3, 'Jajang Jaenudin', 2019, 1, 2121, 12, 12, 12, 'Laki-laki', 'Islam', 'Tangerang Selatan', '2019-03-20', 1, 3, 'jl', 'Yatim Piatu', 'makhazanahkebajikan178@gmail.com', '089654777502', 'asa', 12, 'IPA', '', '', 12, 'jke', 12, 'qwer', 'wera', 23, 'jk', 'jl', '12', 'Belum'),
(4, 'Muhamad Vicky', 2019, 1, 5, 5, 5, 5, 'Laki-laki', 'Islam', 'jakart', '2019-03-20', 2, 4, 'jalan', 'Yatim Piatu', 'jkkj@gmail.com', '89', 'jk', 78, 'IPA', '', '', 798, 'yah', 7890, 'yui', 'tyu', 678, 'yui', 'jalannnn', '980890', 'Belum'),
(5, 'caca', 2018, 8, 9, 0, 90, 78, 'Laki-laki', 'Katolik', 'jk', '2019-03-19', 9, 0, '6', 'Yatim Piatu', 'jkkj@gmail.com', '89', 'tui', 87, 'IPA', '', '', 80, 'ta', 67, 'pi', 'bisa', 878, 'no', 'al', '09', 'Belum'),
(6, 'kristin', 2018, 8, 9, 9, 9, 9, 'Perempuan', 'Kristen', 'jaka', '2019-03-20', 4, 0, 'jl', 'Yatim Piatu', 'jkkj@gmail.com', '9', 'u', 9, 'IPA', '', '', 8, 'i', 9, 'u', 'i', 9, 'i', 'yuu', '9889', 'Belum'),
(7, 'kamu', 2018, 9, 0, 0, 0, 9, 'Perempuan', 'Budha', 'ioi', '2019-03-28', 1, 5, 'g', 'Yatim Piatu', 'jkkj@gmail.com', '4', 'gfg', 12, 'IPA', '', '', 2, 'af', 4454, 'fgfs', 's', 64, 'asd', 'qwer', '3', 'Belum'),
(8, 'bignug', 98, 0, 0, 0, 0, 0, 'Perempuan', 'Katolik', 'oio', '2019-03-21', 3, 2, 's', 'Biasa/Mampu', 'jkkj@gmail.com', '3', 'd', 23, 'IPA', '', '', 232, 'ewew', 231, 'wqeq', 'sedq', 23, 'rwew', 'sad', '23', NULL),
(9, 'daw', 2019, 8, 9, 9, 8, 8, 'Laki-laki', 'Islam', '2we', '2019-03-27', 6, 7, 'gh', 'Yatim Piatu', 'jkkj@gmail.com', '89', 'hj', 887, 'IPA', '', '', 8787, 'njhhj', 88, 'hjhjh', 'jhjh', 88, 'hjh', 'uiui', '8787', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'kepsek', 'kepsek', 'kepsek');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `email`, `jurusan`) VALUES
(20190004, 'Muhamad Vicky', '11160910000005', 'kambing@outlook.com', 'MIA'),
(20190005, 'Jajang Jaenudin', '2323', 'makhazanahkebajikan178@gmail.com', 'teknik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasiswa`
--
ALTER TABLE `datasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datasiswa`
--
ALTER TABLE `datasiswa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20190006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
