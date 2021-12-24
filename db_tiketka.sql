-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 01:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tiketka`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_tiket`
--

CREATE TABLE `jadwal_tiket` (
  `id_ka` int(11) NOT NULL,
  `nama_ka` varchar(255) NOT NULL,
  `asal` varchar(11) DEFAULT NULL,
  `tujuan` varchar(11) DEFAULT NULL,
  `tgl_berangkat` date NOT NULL,
  `tgl_sampai` date NOT NULL,
  `jam_berangkat` varchar(50) NOT NULL,
  `jam_tiba` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_tiket`
--

INSERT INTO `jadwal_tiket` (`id_ka`, `nama_ka`, `asal`, `tujuan`, `tgl_berangkat`, `tgl_sampai`, `jam_berangkat`, `jam_tiba`, `kelas`, `harga`, `stok`) VALUES
(1, 'Argo Lawu', 'SB', 'YG', '2021-12-20', '2021-12-20', '18:30', '19:00', 'Ekonomi', '7000', '64');

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id_pemesan` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` int(11) NOT NULL,
  `nama_penumpang` varchar(255) NOT NULL,
  `no_id` int(30) NOT NULL,
  `kode` varchar(11) DEFAULT NULL,
  `no_kursi` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `kode` varchar(11) NOT NULL,
  `tgl_reservasi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `reservasi_id_pemesan` int(11) DEFAULT NULL,
  `reservasi_id_ka` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stasiun`
--

CREATE TABLE `stasiun` (
  `id_stasiun` varchar(11) NOT NULL,
  `nama_stasiun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stasiun`
--

INSERT INTO `stasiun` (`id_stasiun`, `nama_stasiun`) VALUES
('PS', 'Pasar Senen'),
('PW', 'Purwosari'),
('SB', 'Solo Balapan'),
('YG', 'Yogyakarta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_tiket`
--
ALTER TABLE `jadwal_tiket`
  ADD PRIMARY KEY (`id_ka`),
  ADD KEY `asal` (`asal`),
  ADD KEY `tujuan` (`tujuan`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`kode`),
  ADD KEY `id_ka` (`reservasi_id_ka`),
  ADD KEY `reservasi_id_pemesan` (`reservasi_id_pemesan`);

--
-- Indexes for table `stasiun`
--
ALTER TABLE `stasiun`
  ADD PRIMARY KEY (`id_stasiun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_tiket`
--
ALTER TABLE `jadwal_tiket`
  MODIFY `id_ka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id_penumpang` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_tiket`
--
ALTER TABLE `jadwal_tiket`
  ADD CONSTRAINT `jadwal_tiket_ibfk_1` FOREIGN KEY (`asal`) REFERENCES `stasiun` (`id_stasiun`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_tiket_ibfk_2` FOREIGN KEY (`tujuan`) REFERENCES `stasiun` (`id_stasiun`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD CONSTRAINT `penumpang_ibfk_1` FOREIGN KEY (`kode`) REFERENCES `reservasi` (`kode`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`reservasi_id_ka`) REFERENCES `jadwal_tiket` (`id_ka`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`reservasi_id_pemesan`) REFERENCES `pemesan` (`id_pemesan`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
