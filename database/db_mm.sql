-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 02:35 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kedatangan`
--

CREATE TABLE `tb_kedatangan` (
  `id_kedatangan` varchar(11) NOT NULL,
  `code_supplier` int(5) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kedatangan`
--

INSERT INTO `tb_kedatangan` (`id_kedatangan`, `code_supplier`, `tgl_masuk`) VALUES
('20201003000', 6, '2020-10-02'),
('20201004000', 6, '2020-10-01'),
('20201004001', 6, '2020-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kedatangan_detail`
--

CREATE TABLE `tb_kedatangan_detail` (
  `id_kedatangan_detail` int(11) NOT NULL,
  `id_kedatangan` varchar(11) NOT NULL,
  `code_item` varchar(16) NOT NULL,
  `no_sj` varchar(20) NOT NULL,
  `no_po` varchar(8) NOT NULL,
  `lot_no` varchar(11) NOT NULL,
  `qty` int(4) NOT NULL,
  `appearance_test` varchar(5) NOT NULL,
  `colour_number_test` int(3) NOT NULL,
  `acid_value_test` int(3) NOT NULL,
  `iodine_value_test` int(3) NOT NULL,
  `specifikasi_gravity_test` int(3) NOT NULL,
  `heating_test_test` int(3) NOT NULL,
  `melting_point_test` int(3) NOT NULL,
  `aniline_point_test` int(3) NOT NULL,
  `water_content_test` int(3) NOT NULL,
  `boiling_point_test` int(3) NOT NULL,
  `Id_karyawan` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kedatangan_detail`
--

INSERT INTO `tb_kedatangan_detail` (`id_kedatangan_detail`, `id_kedatangan`, `code_item`, `no_sj`, `no_po`, `lot_no`, `qty`, `appearance_test`, `colour_number_test`, `acid_value_test`, `iodine_value_test`, `specifikasi_gravity_test`, `heating_test_test`, `melting_point_test`, `aniline_point_test`, `water_content_test`, `boiling_point_test`, `Id_karyawan`) VALUES
(92, '20201003000', '10 -250 -100 -34', 'sadkasn;', 'sfklnw', 'nlksn', 0, 'Clear', 9, 0, 0, 0, 0, 0, 0, 0, 0, '20121214'),
(93, '20201004001', '10-300-001-2280', 'sj-wpp-02', 'RG200102', '20012001-RM', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '20121214'),
(94, '20201004000', '10-300-001-2280', 'sad', 'saad', 'asa', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '20121214'),
(95, '20201004000', '10 -250 -100 -34', 'KF;SKL', 'ASF;LS', 'SD.,', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '20121214'),
(96, '20201004000', '10 -250 -100 -34', '11kjk', 'k1kj321', '1312', 50, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '20121214'),
(97, '20201004000', '10 -250 -100 -34', 'SJ-SS', 'RG0219', 'EA', 1000, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '20121214');

-- --------------------------------------------------------

--
-- Table structure for table `tb_material`
--

CREATE TABLE `tb_material` (
  `code_item` varchar(16) NOT NULL,
  `description_material` varchar(20) NOT NULL,
  `experid` int(2) NOT NULL,
  `danger_level` varchar(20) NOT NULL,
  `storage` varchar(20) NOT NULL,
  `action_material` varchar(20) NOT NULL,
  `appearance` varchar(10) NOT NULL,
  `colour_number` int(3) NOT NULL,
  `acid_value` int(3) NOT NULL,
  `iodine_value` int(3) NOT NULL,
  `iodine_value2` int(3) NOT NULL,
  `specifikasi_gravity` int(3) NOT NULL,
  `specifikasi_gravity2` int(3) NOT NULL,
  `melting_point` int(3) NOT NULL,
  `melting_point2` int(3) NOT NULL,
  `heating_test` int(3) NOT NULL,
  `aniline_point` int(3) NOT NULL,
  `aniline_point2` int(3) NOT NULL,
  `water_content` int(3) NOT NULL,
  `water_content2` int(3) NOT NULL,
  `boiling_point` int(3) NOT NULL,
  `boiling_point2` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_material`
--

INSERT INTO `tb_material` (`code_item`, `description_material`, `experid`, `danger_level`, `storage`, `action_material`, `appearance`, `colour_number`, `acid_value`, `iodine_value`, `iodine_value2`, `specifikasi_gravity`, `specifikasi_gravity2`, `melting_point`, `melting_point2`, `heating_test`, `aniline_point`, `aniline_point2`, `water_content`, `water_content2`, `boiling_point`, `boiling_point2`) VALUES
('', '', 0, '', '', '', 'Clear', 5, 185, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('10 -250 -100 -34', 'Gum Rosin', 12, 'BERBAHAYA BAGI LINGK', 'Terbuka', 'Sarung Tangan dan Ma', 'Clear', 211, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('10-300-001-2280', 'Linseed Oil FA', 12, 'BERBAHAYA BAGI LINGK', 'Terbuka', 'Sarung Tangan dan Ma', 'Clear', 2, 21, 1, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_supllier`
--

CREATE TABLE `tb_supllier` (
  `code_supplier` int(5) NOT NULL,
  `supplier` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_supllier`
--

INSERT INTO `tb_supllier` (`code_supplier`, `supplier`, `alamat`, `no_telp`) VALUES
(6, 'PT PETRONIKA', 'GRESIK', 12908071),
(7, 'PT SAMCHEM', 'MERAK', 2352521),
(29, 'PT SURYA NEGARA', 'Jln. Raya Jatiuwung Km.08 Jatiuwung, Periuk - Kota Tangerang ', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `Id_karyawan` varchar(8) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `date_of_entry` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `departement` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`Id_karyawan`, `Nama`, `pass`, `date_of_entry`, `email`, `departement`) VALUES
('20121214', 'Sandi Diningrat', '123456', '2020-10-01', 'alexandersandi3@gmail.com', 'Warehouse'),
('20171211', 'Sandines', '123456', '2020-10-01', 'sandi2997@yahoo.co.id', 'QC'),
('20171219', 'Sandi', '123456', '2020-10-04', 'andisandi321@gmail.com', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kedatangan`
--
ALTER TABLE `tb_kedatangan`
  ADD PRIMARY KEY (`id_kedatangan`),
  ADD KEY `id_kedatangan` (`id_kedatangan`),
  ADD KEY `code_supplier` (`code_supplier`);

--
-- Indexes for table `tb_kedatangan_detail`
--
ALTER TABLE `tb_kedatangan_detail`
  ADD PRIMARY KEY (`id_kedatangan_detail`),
  ADD KEY `id_kedatangan` (`id_kedatangan`),
  ADD KEY `code_item` (`code_item`),
  ADD KEY `Id_karyawan` (`Id_karyawan`);

--
-- Indexes for table `tb_material`
--
ALTER TABLE `tb_material`
  ADD PRIMARY KEY (`code_item`),
  ADD UNIQUE KEY `code_item` (`code_item`) USING BTREE;

--
-- Indexes for table `tb_supllier`
--
ALTER TABLE `tb_supllier`
  ADD PRIMARY KEY (`code_supplier`),
  ADD KEY `code_supplier` (`code_supplier`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`Id_karyawan`),
  ADD KEY `Id_karyawan` (`Id_karyawan`),
  ADD KEY `Id_karyawan_2` (`Id_karyawan`),
  ADD KEY `Id_karyawan_3` (`Id_karyawan`),
  ADD KEY `Id_karyawan_4` (`Id_karyawan`),
  ADD KEY `Id_karyawan_5` (`Id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kedatangan_detail`
--
ALTER TABLE `tb_kedatangan_detail`
  MODIFY `id_kedatangan_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `tb_supllier`
--
ALTER TABLE `tb_supllier`
  MODIFY `code_supplier` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kedatangan`
--
ALTER TABLE `tb_kedatangan`
  ADD CONSTRAINT `tb_kedatangan_ibfk_1` FOREIGN KEY (`code_supplier`) REFERENCES `tb_supllier` (`code_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kedatangan_detail`
--
ALTER TABLE `tb_kedatangan_detail`
  ADD CONSTRAINT `tb_kedatangan_detail_ibfk_3` FOREIGN KEY (`code_item`) REFERENCES `tb_material` (`code_item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_kedatangan_detail_ibfk_4` FOREIGN KEY (`id_kedatangan`) REFERENCES `tb_kedatangan` (`id_kedatangan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_kedatangan_detail_ibfk_5` FOREIGN KEY (`Id_karyawan`) REFERENCES `tb_user` (`Id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
