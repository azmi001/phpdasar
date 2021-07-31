-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 01:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Azmi Munif ', '20210012', 'azmimunifhartono@gmail.com', 'Teknologi Permainan', '60f253318d9ff.png'),
(2, 'Muhammad Haikal Bintang', '20210055', 'haikal@gmail.com', 'Teknologi Permainan', '60f2533a522dc.jpg'),
(3, 'Sultan Rafie Hidayat', '20210013', 'sultan@gmail.com', 'Teknologi Permianan', '60f253430237e.png'),
(4, 'hafidz', '20210014', 'hafidz@gamil.com', 'Teknologi Permainan', '60f253497d2d4.png'),
(5, 'Daffa AP', '20210015', 'daffaap@gmail.com', 'Teknologi Permainan', '60f25351ded9d.png'),
(6, 'jasmin', '20210016', 'jasmin@gmail.com', 'Teknologi Permainan', '60f25365e7a49.png'),
(7, 'danung', '20210017', 'danung@gmail.com', 'Teknologi Permainan', '60f2536ccf2ac.png'),
(8, 'defitri', '20210018', 'defitri@gmail.com', 'Teknologi Permainan', '60f253760a56f.png'),
(9, 'balqis', '20210019', 'balqis@gmail.com', 'Teknologi Permainan', '60f2537d52359.png'),
(10, 'salsabila', '20210020', 'salsabila@gmail.com', 'Teknologi Permaianan', '60f25388f28c5.png'),
(17, '123hscv', '12983', 'qwe', '128307', '60f15cb76e69b.jpeg'),
(18, '1234134', '123', '123', '123', '60f15cbe06dcd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'azmi', '$2y$10$HW1AAZDgUk5oGyxjOSEEveR2mrC6yxzmYcIclR7wZMR.5EDIrpDjO'),
(2, 'kuluk', '$2y$10$zJEUNUZOyZbASxaEBQfm8eOXb19eNbigpBN0I.eXZLn5CoNyTv4M2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
