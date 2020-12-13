-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 04:11 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_tabel`
--

CREATE TABLE `d_tabel` (
  `id_07` int(11) NOT NULL,
  `kolom_jurusan` varchar(50) NOT NULL,
  `kolom_kelas` varchar(10) NOT NULL,
  `kolom_isi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_tabel`
--

INSERT INTO `d_tabel` (`id_07`, `kolom_jurusan`, `kolom_kelas`, `kolom_isi`) VALUES
(1810330005, 'Rekayasa Perangkat Lunak', 'A', 7),
(1810330007, 'Rekayasa Perangkat Lunak', 'A', 5),
(1810330010, 'DKV', 'A', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d_tabel`
--
ALTER TABLE `d_tabel`
  ADD PRIMARY KEY (`id_07`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d_tabel`
--
ALTER TABLE `d_tabel`
  MODIFY `id_07` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1810330011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
