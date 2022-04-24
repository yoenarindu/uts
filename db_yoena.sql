-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 07:29 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_yoena`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_145`
--

CREATE TABLE `tbl_145` (
  `id_145` int(11) NOT NULL,
  `nama_145` varchar(50) NOT NULL,
  `email_145` varchar(50) NOT NULL,
  `alamat_145` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_145`
--

INSERT INTO `tbl_145` (`id_145`, `nama_145`, `email_145`, `alamat_145`) VALUES
(1, 'yoenar', 'yoena@gmail.com', ''),
(2, 'yoenara', 'yoena@gmail.com', 'Mojokerto'),
(3, 'al', 'yoena@gmail.com', 'Dawarblandong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_145`
--
ALTER TABLE `tbl_145`
  ADD PRIMARY KEY (`id_145`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_145`
--
ALTER TABLE `tbl_145`
  MODIFY `id_145` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
