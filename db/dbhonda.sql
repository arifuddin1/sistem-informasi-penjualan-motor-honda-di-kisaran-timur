-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 05:59 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbhonda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jual`
--

CREATE TABLE IF NOT EXISTS `tbl_jual` (
  `idjual` varchar(11) NOT NULL,
  `nomesin` varchar(11) NOT NULL,
  `jenismotor` varchar(50) NOT NULL,
  `tanggalpembelian` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  PRIMARY KEY (`idjual`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jual`
--

INSERT INTO `tbl_jual` (`idjual`, `nomesin`, `jenismotor`, `tanggalpembelian`, `keterangan`) VALUES
('AL004', 'Zq16220381', 'CBR 150', '2020-01-23', 'Credit'),
('AX002', 'Ad16220398', 'Beat', '2020-01-15', 'Cash'),
('TZ003', 'AM16220455', 'CB 150 R', '2020-01-08', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` int(10) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama_lengkap`, `email`, `level`, `keterangan`) VALUES
('honda', '827ccb0eea8a706c4c34a16891f84e7b', 'ahmad', 'honda@gmail.com', 1, 'staf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
