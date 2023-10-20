-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 03:54 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nobp` varchar(17) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `tmp_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL DEFAULT '0000-00-00',
  `jenis_kelamin` char(1) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nobp`, `nama`, `kelas`, `tmp_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `nomor_hp`, `email`, `foto`, `created_at`) VALUES
(1, '22101152630094', 'Alexius Kenriko Salim', '3', 'Kotanopan Setia', '2023-10-06', 'L', 'Padang', '6282286947001', 'zaininijar7610@gmail.com', 'Frame (2).png', '2023-10-06 22:15:23'),
(2, '22101152630095', 'Andani Putra Pratama', '3', 'Kotanopan Setia', '2023-10-06', 'L', 'Duri', '6282286947001', 'zaininijar7610@gmail.com', 'Frame (2).png', '2023-10-06 22:16:13'),
(9, '22101152630093', 'Ahmad Zaini Nijar', '3', 'Kotanopan Setia', '2002-10-25', 'L', 'Rao', '6282286947001', 'zaininijar7610@gmail.com', '1691552545494 (1).jpg', '2023-10-13 16:17:49');
