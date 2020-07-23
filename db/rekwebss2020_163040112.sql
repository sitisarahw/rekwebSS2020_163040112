-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 02:33 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekwebss2020_163040112`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(10) NOT NULL,
  `npp` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenjang` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `singkatan` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `unit_besaran` varchar(50) NOT NULL,
  `link_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `npp`, `nama`, `tgl_lahir`, `jenjang`, `jabatan`, `wilayah`, `singkatan`, `unit`, `unit_besaran`, `link_img`) VALUES
(1, 'P0001', 'Inggi', '1998-01-01', 'Strata I', 'Supervisor', 'Bandung', 'SV', '1', 'HR', '163040003.jpg'),
(2, 'P0002', 'Bian', '1998-01-02', 'SMA', 'Office Boy', 'Bandung', 'OB', '2', 'HR', '163040084.jpg'),
(3, 'P0003', 'Ghani', '1998-01-03', 'SMA', 'Daily Worker', 'Bandung', 'DW', '3', 'HR', '163040085.jpg'),
(4, 'P0004', 'Akbar', '1998-01-04', 'SMK', 'Daily Worker', 'Bandung', 'DW', '3', 'HR', '163040086.jpg'),
(5, 'P0005', 'Fanny', '1998-01-05', 'Diploma III', 'Sekretaris', 'Jakarta', 'ST', '4', 'HR', '163040087.jpg'),
(6, 'P0006', 'Yudhis', '1998-01-06', 'Strata I', 'Supervisor', 'Surabaya', 'SV', '1', 'HR', '163040088.jpg'),
(7, 'P0007', 'Nida', '1998-01-07', 'SMK', 'Office Boy', 'Jakarta', 'OB', '2', 'HR', '163040089.jpg'),
(8, 'P0008', 'Jihan', '1998-01-08', 'Diploma III', 'Daily Worker', 'Surabaya', 'DW', '3', 'HR', '163040105.jpg'),
(9, 'P0009', 'Riska', '1998-01-09', 'Diploma III', 'Daily Worker', 'Surabaya', 'DW', '3', 'HR', '163040107.jpg'),
(10, 'P0010', 'Yuni', '1998-01-10', 'Strata I', 'Sekretaris', 'Jakarta', 'ST', '4', 'HR', '163040112.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
