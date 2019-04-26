-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 06:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keep`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` int(10) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `pengingat` varchar(20) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `arsipkan` varchar(5) NOT NULL DEFAULT 'tidak',
  `sampah` varchar(5) NOT NULL DEFAULT 'tidak',
  `last_edit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_label` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `judul`, `isi`, `pengingat`, `email`, `arsipkan`, `sampah`, `last_edit`, `id_label`) VALUES
(3, 'judul catatan', ' ', NULL, 'fadhiil.nugroho@gmail.com', 'ya', 'tidak', '2019-04-23 20:06:32', 0),
(4, ' ', 'isinya aja', NULL, 'fadhiil.nugroho@gmail.com', 'tidak', 'tidak', '2019-04-23 20:10:50', 12),
(5, 'haha', 'hoho', NULL, 'fadhiil.nugroho@gmail.com', 'tidak', 'tidak', '2019-04-23 20:54:47', 0),
(6, 'catatan baru', ' sfaafs', NULL, 'koko@gmail.com', 'ya', 'tidak', '2019-04-23 20:59:29', 0),
(12, 'asaf', '', 'Besok, 08.00', 'koko@gmail.com', 'tidak', 'tidak', '2019-04-23 23:03:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE `label` (
  `id_label` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `label`
--

INSERT INTO `label` (`id_label`, `nama`, `email`) VALUES
(12, 'label 1', 'fadhiil.nugroho@gmail.com'),
(13, 'label 2', 'fadhiil.nugroho@gmail.com'),
(19, 'label aja', 'koko@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `email`, `password`) VALUES
('fadhiil', 'nugroho', 'fadhiil.nugroho@gmail.com', 'tes'),
('tes', 'haha', 'koko@gmail.com', 'haha'),
('aldrin', 'marbun', 'aldrin@gmail.com', 'hoho'),
('', '', '', ''),
('tes1', 'tes2', 'tes3@gmail.com', 'tes4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indexes for table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`id_label`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `label`
--
ALTER TABLE `label`
  MODIFY `id_label` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
