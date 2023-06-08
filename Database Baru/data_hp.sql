-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 01:57 AM
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
-- Database: `hp`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hp`
--

CREATE TABLE `data_hp` (
  `id_hp` int(4) NOT NULL,
  `nama_hp` varchar(256) COLLATE utf8_bin NOT NULL,
  `harga_hp` varchar(64) COLLATE utf8_bin NOT NULL,
  `ram_hp` varchar(64) COLLATE utf8_bin NOT NULL,
  `memori_hp` varchar(64) COLLATE utf8_bin NOT NULL,
  `processor_hp` varchar(64) COLLATE utf8_bin NOT NULL,
  `kamera_hp` varchar(64) COLLATE utf8_bin NOT NULL,
  `harga_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `ram_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `memori_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `processor_angka` varchar(64) COLLATE utf8_bin NOT NULL,
  `kamera_angka` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `data_hp`
--

INSERT INTO `data_hp` (`id_hp`, `nama_hp`, `harga_hp`, `ram_hp`, `memori_hp`, `processor_hp`, `kamera_hp`, `harga_angka`, `ram_angka`, `memori_angka`, `processor_angka`, `kamera_angka`) VALUES
(1, 'Samsung Galaxy S23', '12999000', '8', '128', 'Octacore', '50', '2', '3',	'3', '3',	'4'),
(2, 'Samsung Galaxy A54', '5849000', '6', '128', 'Octacore', '50', '3',	'2',	'3',	'3',	'4'),
(3, 'Luna V6', '1539000', '6', '128', 'Octacore', '20', '5','2',	'3',	'3',	'3'),
(4, 'Redmi A2', '1099000', '3', '32', 'Octacore', '8', '5',	'1',	'1',	'3',	'2'),
(5, 'OPPO Reno8 T', '4148000', '8', '256', 'Octacore', '100', '4',	'3',	'4',	'3', '5'),
(6, 'realme C55 NFC', '2499000', '6', '128', 'Octacore', '64', '4',	'2',	'3',	'3',	'5'),
(7, 'Redmi 12C', '1325000', '3', '32', 'Octacore', '50', '5',	'1',	'1',	'3',	'4'),
(8, 'iPhone 14', '15999000', '6', '128', 'Hexacore', '12', '1',	'2',	'3',	'5',	'2'),
(9, 'Realme 9i', '2479000', '4', '64', 'Octacore', '50', '4',	'2',	'2',	'3',	'4'),
(10, 'Redmi Note 11', '2479000', '6', '128', 'Octacore', '50', '4',	'2',	'3',	'3',	'4'),
(11, 'Xiaomi Redmi Note 10 Pro', '5999000', '8', '128', 'Octacore', '108', '3',	'3',	'3',	'3',	'5'),
(12, 'Vivo V21', '5999000', '8', '256', 'Octacore', '64', '3',	'3',	'4',	'3',	'5'),
(13, 'iPhone 13 Pro Max', '16000000', '6', '256', 'Hexacore', '12', '1',	'2',	'4',	'5',	'2'),
(14, 'Samsung Galaxy S21 Ultra', '20000000', '12', '512', 'Octacore', '108', '1',	'4',	'5',	'3',	'5'),
(15, 'OnePlus 8T', '8999000', '12', '256', 'Octacore', '48', '3',	'4',	'4',	'3',	'4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_hp`
--
ALTER TABLE `data_hp`
  ADD PRIMARY KEY (`id_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_hp`
--
ALTER TABLE `data_hp`
  MODIFY `id_hp` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
