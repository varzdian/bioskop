-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 04:58 AM
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
-- Database: `tiket_bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bioskop`
--

CREATE TABLE `tb_bioskop` (
  `kd_bioskop` varchar(50) NOT NULL,
  `nama_bioskop` varchar(255) NOT NULL,
  `alamat_bioskop` varchar(255) NOT NULL,
  `kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bioskop`
--

INSERT INTO `tb_bioskop` (`kd_bioskop`, `nama_bioskop`, `alamat_bioskop`, `kota`) VALUES
('DSD', ' Transmart MX Mall XXI', 'jl. veteran', 'Malang'),
('GVL', ' Araya XXI', 'Komp. Araya Bussines Center, lantai 2, Jl. Blimbing Indah Megah No.2 · In Plaza Araya', 'Malang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_film`
--

CREATE TABLE `tb_film` (
  `kd_film` varchar(25) NOT NULL,
  `judul_film` varchar(255) NOT NULL,
  `tgl_launc` date NOT NULL,
  `synopys` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_film`
--

INSERT INTO `tb_film` (`kd_film`, `judul_film`, `tgl_launc`, `synopys`) VALUES
('BW001', 'Black Widow', '2021-07-01', 'Natasha Romanoff, aka Black Widow, confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises. Pursued by a force that will stop at nothing to bring her down, Natasha must deal with her history as a spy, and the brok'),
('BW002', 'Black Widow02', '2021-07-01', 'Natasha Romanoff, aka Black Widow, confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises. Pursued by a force that will stop at nothing to bring her down, Natasha must deal with her history as a spy, and the brok'),
('LK001', 'Loki', '2021-07-20', 'Loki adalah salah satu karakter dalam waralaba film MCU. Karakter Loki pertama kali hadir dalam film Thor (2011). Ia juga sempat menjadi anak buah Thanos dalam misi menyerang Bumi, sebelum akhirnya dibunuh Thanos sendiri.'),
('LK002', 'Loki2', '2021-07-20', 'Loki adalah salah satu karakter dalam waralaba film MCU. Karakter Loki pertama kali hadir dalam film Thor (2011). Ia juga sempat menjadi anak buah Thanos dalam misi menyerang Bumi, sebelum akhirnya dibunuh Thanos sendiri.'),
('LK003', 'Loki3', '2022-07-20', 'Loki adalah salah satu karakter dalam waralaba film MCU. Karakter Loki pertama kali hadir dalam film Thor (2011). Ia juga sempat menjadi anak buah Thanos dalam misi menyerang Bumi, sebelum akhirnya dibunuh Thanos sendiri.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `kd_tayang` varchar(30) NOT NULL,
  `judul_film` varchar(255) NOT NULL,
  `tgl_waktu_tayang` datetime NOT NULL,
  `jumlah_kursi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`kd_tayang`, `judul_film`, `tgl_waktu_tayang`, `jumlah_kursi`) VALUES
('DSD2307202111000001', 'Loki', '2021-07-23 11:00:00', 10),
('DSD2307202111000002', 'Black Widow', '2021-07-23 11:00:00', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bioskop`
--
ALTER TABLE `tb_bioskop`
  ADD PRIMARY KEY (`kd_bioskop`);

--
-- Indexes for table `tb_film`
--
ALTER TABLE `tb_film`
  ADD PRIMARY KEY (`kd_film`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`kd_tayang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
