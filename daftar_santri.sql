-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 01:59 PM
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
  `id_santri` int(10) NOT NULL,
  `p_certificate` mediumblob NOT NULL,
  `p_transcript` mediumblob NOT NULL,
  `p_lastSchool` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `id_santri`, `p_certificate`, `p_transcript`, `p_lastSchool`) VALUES
(7, 1, 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 'SD/MI'),
(8, 2, 0x666c7965722073656d696e61722e706e67, 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 'SMP/MTs'),
(9, 3, 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 'SMP/MTs'),
(10, 5, 0x706578656c732d746563686e6f62756c6b612d323930393236312e6a7067, 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 'SD/MI'),
(981288789, 882102032, 0x666c7965722073656d696e61722e706e67, 0x666c7965722073656d696e61722e706e67, 'SD/MI');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_santri` int(10) NOT NULL,
  `s_fullName` char(50) NOT NULL,
  `s_bodPlace` char(20) NOT NULL,
  `s_BOD` date NOT NULL,
  `s_photo` mediumblob DEFAULT NULL,
  `s_address` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id_santri`, `s_fullName`, `s_bodPlace`, `s_BOD`, `s_photo`, `s_address`) VALUES
(1, 'Michael Abdul Normaginunov', 'Azerbaijan', '2001-09-11', 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 'Middle East'),
(2, 'Mossa Eulem', 'Egypt', '2001-08-09', 0x706578656c732d746563686e6f62756c6b612d323930393236312e6a7067, 'Cairo'),
(3, 'Yaya', 'Perut Abbas', '2001-09-11', 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 'Bone'),
(5, 'Athaya', 'Bone', '2001-09-11', 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 'Wajo'),
(882102032, 'Patlamaya Devam', 'Turki', '2004-12-24', 0x466c7965722050656d61746572692052657265766973692e706e67, 'Turki');

-- --------------------------------------------------------

--
-- Table structure for table `wali`
--

CREATE TABLE `wali` (
  `id_wali` int(10) NOT NULL,
  `id_santri` int(10) NOT NULL,
  `w_fullName` char(50) NOT NULL,
  `w_phone` char(14) NOT NULL,
  `w_email` char(20) NOT NULL,
  `w_address` char(50) NOT NULL,
  `w_familyRegist` mediumblob NOT NULL,
  `w_job` char(20) NOT NULL,
  `w_salary` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wali`
--

INSERT INTO `wali` (`id_wali`, `id_santri`, `w_fullName`, `w_phone`, `w_email`, `w_address`, `w_familyRegist`, `w_job`, `w_salary`) VALUES
(909090909, 3, 'Abbas', '123412341234', 'abbas@gmail.com', 'Bone', 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 'Polisi', 'Rp. 1.000.000 - Rp. 2.000.000'),
(987654321, 5, 'BabaTaya', '890723753856', 'taya@gmail.com', 'Wajo', 0x706578656c732d746563686e6f62756c6b612d323930393236312e6a7067, 'Petani', 'Rp. 500.000 - Rp. 1.000.000'),
(1133335555, 2, 'Eulem Pots', '098678345221', 'eulpts@gmail.com', 'Cairo', 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 'PNS', 'Rp. 1.000.000 - Rp. 2.000.000'),
(1231231231, 1, 'Abdul Sayem Normaginunov', '573478231980', 'm1ch43l@miskha.ru', 'Middle East', 0x37313536313138325f66696e6765727072696e74207472696c6c77617665207061747465726e2e6a7067, 'Tentara', '> Rp. 3.000.000'),
(2147483647, 882102032, 'Babam Devam', '123103987235', 'babam@gmail.com', 'Turki', 0x706578656c732d746563686e6f62756c6b612d323930393236312e6a7067, 'Dosen', 'Rp. 500.000 - Rp. 1.000.000');

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
  ADD PRIMARY KEY (`id_pendidikan`),
  ADD KEY `pendidikan_ibfk_1` (`id_santri`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id_wali`),
  ADD KEY `wali_ibfk_1` (`id_santri`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `santri` (`id_santri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wali`
--
ALTER TABLE `wali`
  ADD CONSTRAINT `wali_ibfk_1` FOREIGN KEY (`id_santri`) REFERENCES `santri` (`id_santri`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
