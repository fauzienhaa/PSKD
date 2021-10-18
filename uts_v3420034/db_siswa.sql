-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2021 at 04:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(2, 'Fauzi Nur Hasan', 'admin', '$2y$10$gfuxXBayYM0cdrdbJ8DMdeX.qfLr2b4yZ8Ic1F7ffwOGh0muMgkge');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `no_hp2` varchar(100) NOT NULL,
  `alamat2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `nama`, `jenkel`, `alamat`, `no_hp`, `no_hp2`, `alamat2`) VALUES
(34, 'Fauzi Nur Hasan', 'Laki-Laki', 'Karanganyar', '08127346349', '<D=>C?@B?@E', 'PALZVLAHXIW'),
(37, 'Fauzi', 'Laki-Laki', 'Solo', '08127663652', '<=D>?CB?>', 'XOFN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Fauzi Nur Hasan', 'uzi', '$2y$10$Nq9Zk3oMMhTrdXj5xSZzPe6586rAR5YrdZBotko77IU5U2lbhRhOi'),
(2, 'ASASA', 'asasa', '$2y$10$vfZxj./OtNia1dex5mYSLuziEkslukBqUDO0pgwcktIoMjFH/sBN.'),
(3, 'nanana', 'nana', '$2y$10$/0ukHaOhHp.4DHBwHFn0R.Tw0n0gwmROOK37o9s5FeJZrcxispa6q'),
(4, 'Fauzi', '123', '$2y$10$MbtE1RgzMb02BeFrgnhRi.X0QsZP1BnVVRc9nXGiMkXYAZsrfLJJO'),
(5, 'Fauzi', '1234', '$2y$10$uZuFKirfqT6NoaNgttdgZOzLgSCE0c5e.mHMrcEDJa9H2wNVk9hDe'),
(6, '123', '12345', '$2y$10$et6HRH33HShjdZpAyS7houIv/E2kpW7msHFTkN0wu.5rSj0Q0QhQK'),
(7, 'Yusril', 'yusril', '$2y$10$qg8nONTL3UAcMeM78wP5ZuOYOZ6V2rgPMWwhLP/YK.TKx/OBlV2xi'),
(8, 'uzi', 'uzi2', '$2y$10$4/w/5cxKftGMwGP/Y2i5TeIw7LGfUGpddLniPpAyRXWRFxVlwDjvi'),
(9, 'uzi2', 'uzi3', '$2y$10$K51HD81XBdVE1pEG8t08ReoCm1YxSNp6COBcyIWiW9EHG5nDBZYa6'),
(10, 'fauzi2', 'fauzi2', '$2y$10$XvWDPAEKFw8E9qi5mYbgF.YWIBM/FfMi9Lob9j6mHgDv1MS5qvV82');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
