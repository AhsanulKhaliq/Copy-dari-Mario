-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 07:05 PM
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
-- Database: `daftar_santri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `a_username` char(50) NOT NULL,
  `a_password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(10) NOT NULL,
  `g_fullName` char(50) NOT NULL,
  `g_phone` char(14) NOT NULL,
  `g_email` char(20) NOT NULL,
  `g_bio` text NOT NULL,
  `g_position` char(50) NOT NULL,
  `g_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id_pendidikan` int(10) NOT NULL,
  `p_certificate` mediumblob NOT NULL,
  `p_transcript` mediumblob NOT NULL,
  `p_lastSchool` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(10) NOT NULL,
  `s_fullName` char(50) NOT NULL,
  `s_BOD` date NOT NULL,
  `s_photo` mediumblob NOT NULL,
  `s_address` char(50) NOT NULL,
  `id_wali` int(10) NOT NULL,
  `id_pendidikan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wali`
--

CREATE TABLE `wali` (
  `id_wali` int(10) NOT NULL,
  `w_fullName` char(50) NOT NULL,
  `w_phone` char(14) NOT NULL,
  `w_email` char(20) NOT NULL,
  `w_address` char(50) NOT NULL,
  `w_familyRegist` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`),
  ADD KEY `id_wali` (`id_wali`),
  ADD KEY `id_pendidikan` (`id_pendidikan`);

--
-- Indexes for table `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `santri`
--
ALTER TABLE `santri`
  ADD CONSTRAINT `santri_ibfk_1` FOREIGN KEY (`id_wali`) REFERENCES `wali` (`id_wali`),
  ADD CONSTRAINT `santri_ibfk_2` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikan` (`id_pendidikan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
