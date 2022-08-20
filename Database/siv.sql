-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2022 at 01:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siv`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` varchar(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `nama_booking` varchar(30) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat_lengkap` varchar(250) NOT NULL,
  `agama` varchar(25) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(30) NOT NULL,
  `nik` int(50) NOT NULL,
  `id_marketing` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tgl_booking` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_unit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `id_user`, `nama_booking`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat_lengkap`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `nik`, `id_marketing`, `status`, `tgl_booking`, `id_unit`) VALUES
('BKG0002', 'USR0003', 'Luthfiyah', 'dssaf', '2022-08-17', 'L', 'sdfsff', 'H', 'Kawin', 'asd', 'Indonesia', 2147483647, 'MKT0001', 'Dibatalkan', '2022-08-19 02:35:42', ''),
('BKG0004', 'USR0001', 'Luthfiyah Sakinah', 'dssaf', '2022-08-10', 'P', 'sdfsff', 'Hindu', 'Belum Kawin', 'asd', 'Indonesia', 2147483647, 'MKT0002', 'Booking', '2022-08-19 02:58:52', ''),
('BKG0005', 'USR0003', 'Luthfiyah Sakinah', 'dssaf', '2022-08-23', 'L', 'sdfsff', 'Hindu', 'Kawin', 'asd', 'Indonesia', 2147483647, 'MKT0002', 'Booking', '2022-08-19 09:46:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_booking`
--

CREATE TABLE `detail_booking` (
  `id_booking` varchar(10) NOT NULL,
  `id_unit` varchar(10) NOT NULL,
  `kuantitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_booking`
--

INSERT INTO `detail_booking` (`id_booking`, `id_unit`, `kuantitas`) VALUES
('BKG0002', 'UNT0002', 2),
('BKG0004', 'UNT0002', 1),
('BKG0005', 'UNT0002', 1);

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `id_marketing` varchar(10) NOT NULL,
  `nama_marketing` varchar(30) NOT NULL,
  `telpon_marketing` varchar(30) NOT NULL,
  `email_marketing` varchar(25) NOT NULL,
  `foto_agen` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`id_marketing`, `nama_marketing`, `telpon_marketing`, `email_marketing`, `foto_agen`) VALUES
('MKT0001', 'John Marketer', '085226236901', 'johnmarketer@gmail.com', 'foto unit/agent-1.jpg'),
('MKT0002', 'Reva Marketer', '085226236943', 'revamarketer@gmail.com', 'foto unit/author-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` varchar(10) NOT NULL,
  `nama_unit` varchar(50) NOT NULL,
  `foto_unit` varchar(75) NOT NULL,
  `foto_slide1` varchar(255) DEFAULT NULL,
  `foto_slide2` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `luas_bangunan` varchar(30) NOT NULL,
  `luas_tanah` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`, `foto_unit`, `foto_slide1`, `foto_slide2`, `harga`, `luas_bangunan`, `luas_tanah`, `stok`, `deskripsi`) VALUES
('UNT0001', 'Type 40/66', '../inputan/foto unit/40-550px-1.png', NULL, NULL, 275000000, '40', '77', 1000, 'Luas Bangunan 40 m\r\nLuas Tanah 66 m\r\n2 Kamar Tidur\r\n1 Kamar Mandi\r\nRuang Tamu\r\nDapur\r\nCarport'),
('UNT0002', 'Type 45/77', '../inputan/foto unit/45-550px.png', NULL, NULL, 435000000, '48', '77', 1000, 'Luas Bangunan 45 m,\r\nLuas Tanah 77 m,\r\n2 Kamar Tidur,\r\n1 Kamar Mandi,\r\nRuang Tamu,\r\nDapur,\r\nCarport.'),
('UNT0003', 'Type 50/88', '../inputan/foto unit/50-550px.png', NULL, NULL, 520000000, '50', '88', 500, 'Luas Bangunan 50 m\r\nLuas Tanah 88 m\r\n2 Kamar Tidur\r\n1 Kamar Mandi\r\nRuang Tamu\r\nDapur\r\nCarport');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `foto_profil` varchar(250) NOT NULL,
  `level_user` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `telepon`, `passwd`, `foto_profil`, `level_user`, `status`, `tgl_daftar`) VALUES
('USR0001', 'Daffa Ahmad Rafif', 'daff@gmail.com', '083842349191', '1', 'foto profil/author-1.jpg', 'Administrator', 'Aktif', '2022-08-19 05:37:06'),
('USR0002', 'Rendiyanto Putra W', 'rendyy@gmail.com', '085759933555', '1', 'foto profil/agent-4.jpg', 'User', 'Aktif', '2022-08-19 05:37:11'),
('USR0003', 'admin', 'admin@admin.com', '-', 'amin', 'localhost', 'User', 'Aktif', '2022-08-19 05:54:54'),
('USR0004', 'admin2', 'adminwnj@gmail.com', '085226236901', 'admin', 'foto profil/mini-testimonial-2.jpg', 'Administrator', 'Aktif', '2022-08-18 11:58:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_marketing` (`id_marketing`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `detail_booking`
--
ALTER TABLE `detail_booking`
  ADD KEY `id_booking` (`id_booking`) USING BTREE,
  ADD KEY `id_unit` (`id_unit`) USING BTREE;

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`id_marketing`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_marketing`) REFERENCES `marketing` (`id_marketing`);

--
-- Constraints for table `detail_booking`
--
ALTER TABLE `detail_booking`
  ADD CONSTRAINT `detail_booking_ibfk_1` FOREIGN KEY (`id_booking`) REFERENCES `booking` (`id_booking`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_booking_ibfk_2` FOREIGN KEY (`id_unit`) REFERENCES `unit` (`id_unit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
