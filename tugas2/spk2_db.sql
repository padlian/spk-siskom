-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2019 at 02:40 PM
-- Server version: 10.3.10-MariaDB
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alternatif_wp`
--

CREATE TABLE `tbl_alternatif_wp` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nilai` int(11) NOT NULL,
  `kehadiran` int(11) NOT NULL,
  `penghasilan_ortu` bigint(20) NOT NULL,
  `tanggungan_ortu` int(11) NOT NULL,
  `hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_alternatif_wp`
--

INSERT INTO `tbl_alternatif_wp` (`id`, `nama`, `nilai`, `kehadiran`, `penghasilan_ortu`, `tanggungan_ortu`, `hasil`) VALUES
(1, 'S1', 80, 100, 1000000, 3, 0.278302),
(2, 'S2', 90, 100, 500000, 2, 0.339077),
(3, 'S3', 85, 100, 500000, 2, 0.331412),
(4, 'S4', 30, 1, 1000000, 2, 0.051209);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_alternatif_wp`
--
ALTER TABLE `tbl_alternatif_wp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_alternatif_wp`
--
ALTER TABLE `tbl_alternatif_wp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
