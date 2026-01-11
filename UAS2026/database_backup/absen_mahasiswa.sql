-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2026 at 03:17 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `absen_mahasiswa`
--

CREATE TABLE `absen_mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `semester` int(2) NOT NULL,
  `kelas` text NOT NULL,
  `kehadiran` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absen_mahasiswa`
--

INSERT INTO `absen_mahasiswa` (`nim`, `password`, `nama`, `prodi`, `semester`, `kelas`, `kehadiran`) VALUES
('C2457201022', 'sinta', 'Sinta Putri', 'Manajemen Informatika', 4, 'A', 0),
('C2457201023', 'iman', 'Iman Buana', 'Manajemen Informatika', 1, 'C', 1),
('C2457201024', 'ram', 'Rama F', 'Teknik Informatika', 3, 'A', 1),
('C2457201025', 'rammi', 'Rammie F', 'Teknik Informatika', 1, 'B', 1),
('C2457201026', 'sam', 'Sammy S', 'Sistem Informasi', 6, 'B', 0),
('C2457201027', 'abc', 'Angelina Beyondce', 'Sistem Informasi', 3, 'A', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen_mahasiswa`
--
ALTER TABLE `absen_mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
