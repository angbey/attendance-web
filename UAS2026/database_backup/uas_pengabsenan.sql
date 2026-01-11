-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2026 at 03:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_pengabsenan`
--
CREATE DATABASE IF NOT EXISTS `uas_pengabsenan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `uas_pengabsenan`;

-- --------------------------------------------------------

--
-- Table structure for table `absen_mahasiswa`
--

DROP TABLE IF EXISTS `absen_mahasiswa`;
CREATE TABLE IF NOT EXISTS `absen_mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `semester` int(2) NOT NULL,
  `kelas` text NOT NULL,
  `kehadiran` int(1) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen_mahasiswa`
--

INSERT INTO `absen_mahasiswa` (`nim`, `password`, `nama`, `prodi`, `semester`, `kelas`, `kehadiran`) VALUES
('C2457201022', 'sinta', 'Sinta Putri', 'Manajemen Informatika', 4, 'A', 0),
('C2457201023', 'iman', 'Iman Buana', 'Manajemen Informatika', 1, 'C', 1),
('C2457201024', 'ram', 'Rama F', 'Teknik Informatika', 3, 'A', 0),
('C2457201025', 'rammi', 'Rammie F', 'Teknik Informatika', 1, 'B', 1),
('C2457201026', 'sam', 'Sammy S', 'Sistem Informasi', 6, 'B', 0),
('C2457201027', 'abc', 'Angelina Beyondce', 'Sistem Informasi', 3, 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_dosen`
--

DROP TABLE IF EXISTS `daftar_dosen`;
CREATE TABLE IF NOT EXISTS `daftar_dosen` (
  `nik` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_dosen`
--

INSERT INTO `daftar_dosen` (`nik`, `password`, `nama`) VALUES
(1, 'admin', 'Anthony Berrus');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_tamu`
--

DROP TABLE IF EXISTS `daftar_tamu`;
CREATE TABLE IF NOT EXISTS `daftar_tamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
