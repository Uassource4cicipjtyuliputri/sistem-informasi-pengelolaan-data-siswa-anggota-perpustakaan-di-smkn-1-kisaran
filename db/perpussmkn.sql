-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 08:43 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpussmkn`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anggota`
--

CREATE TABLE IF NOT EXISTS `tbl_anggota` (
`id_anggota` int(5) NOT NULL,
  `nomor_anggota` varchar(50) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `ttl` date NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `nomor_anggota`, `nama_anggota`, `ttl`, `kelas`) VALUES
(1, '0001.19/SMKN1KIS-perpus', 'Ade Nova Alvionita Mrp', '2004-11-09', 'XII AK 1'),
(2, '0002.19/SMKN1KIS-perpus', 'Putri Septia Ananda', '2004-09-29', 'X AK 1'),
(3, '0003.19/SMKN1KIS-perpus', 'Yulia Ningsih', '2004-07-27', 'X AP 1'),
(6, '0008.19/SMKN1KIS-perpus', 'Annisa', '2004-01-23', 'X AK2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `username` varchar(50) NOT NULL,
  `password` int(10) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `level` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`, `nama_lengkap`, `level`, `email`, `keterangan`) VALUES
('ciciparamita', 25, 'Cici Paramita Panjaitan', 1, 'ciciparamita9@gmail.com', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
