-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 04:56 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pb_instruktur`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(10) NOT NULL,
  `no_instruktur` int(10) NOT NULL,
  `nama` text NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `hadir` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `no_instruktur`, `nama`, `tanggal`, `hadir`) VALUES
(1, 1, 'q', '1', 2),
(2, 1, 'q', '2', 3),
(3, 4, 'cobba1', '1', 3),
(4, 4, 'coba1', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id_enrollment` int(10) NOT NULL,
  `mata_pelajar` varchar(50) NOT NULL,
  `jam_mengajar` time NOT NULL,
  `hari_mengajar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id_enrollment`, `mata_pelajar`, `jam_mengajar`, `hari_mengajar`) VALUES
(1, 'matematika', '09:00:00', 'senin'),
(2, 'matematika', '13:00:00', 'senin');

-- --------------------------------------------------------

--
-- Table structure for table `instruktur`
--

CREATE TABLE `instruktur` (
  `id_instruktur` int(10) NOT NULL,
  `nomor_instruktur` int(5) NOT NULL,
  `nama_instruktur` varchar(50) NOT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL,
  `jam_mengajar` time DEFAULT NULL,
  `hari_mengajar` varchar(10) DEFAULT NULL,
  `absensi_mengajar` int(10) DEFAULT NULL,
  `pendapatan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instruktur`
--

INSERT INTO `instruktur` (`id_instruktur`, `nomor_instruktur`, `nama_instruktur`, `mata_pelajaran`, `jam_mengajar`, `hari_mengajar`, `absensi_mengajar`, `pendapatan`) VALUES
(1, 0, 'luffys', 'coding', '00:00:10', 'sabtu', 5, 250000),
(4, 1000, 'coba1', 'matematika', '09:00:00', 'senin', 4, 200000),
(5, 1001, 'saya', 'matematika', '13:00:00', 'senin', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id_enrollment`);

--
-- Indexes for table `instruktur`
--
ALTER TABLE `instruktur`
  ADD PRIMARY KEY (`id_instruktur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id_enrollment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `instruktur`
--
ALTER TABLE `instruktur`
  MODIFY `id_instruktur` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
