-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2018 at 11:16 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `htbeauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE IF NOT EXISTS `tblproducts` (
  `ID` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fee` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`ID`, `email`, `fee`) VALUES
('#100015', 'trangmax95@gmail.com', '670000'),
('#100014', 'trangmax95@gmail.com', '542000'),
('#100013', 'nguyenhien.tn96@gmail.com', '340250'),
('#100012', 'hatrangshb@gmail.com', '254000'),
('#100011', 'thuyflash@gmail.com', '206000'),
('#100010', 'thuyflash@gmail.com', '250000'),
('#100009', 'diamond609llq@gmail.com', '270000');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct_details`
--

CREATE TABLE IF NOT EXISTS `tblproduct_details` (
  `ID` varchar(30) NOT NULL,
  `product_name` mediumtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct_details`
--

INSERT INTO `tblproduct_details` (`ID`, `product_name`) VALUES
('#100015', 'Son kem BOURJOIS Velvet màu 08 Grand Cru - BOURJOIS'),
('#100015', 'Son MAC Chili Matte Lipstick - MAC'),
('#100014', 'Son Bourjois Velvet màu 19 Jolie-de-vin - BOURJOIS'),
('#100014', 'Son MAC Russian Red Matte Lipstick - MAC'),
('#100013', 'Kem tái tạo da tổn thương CICALFATE AVENE Crème Réparatrice Antibactérienne, 100ml - AVENE / -Chăm sóc toàn diện / -Mọi loại da'),
('#100012', 'Xịt khoáng Vichy Eau Thermal 150ml - VICHY'),
('#100012', 'Bông tẩy trang Emily Đức 120 pad - EMILY'),
('#100011', 'Cặp 2 kem dưỡng tay và son dưỡng mật ong Nuxe Kit Rêve de Miel 1 Crème Mains 30mL+ 1 Stick Lèvres 4g - NUXE / -Da thiếu dầu, da mất nước, da khô / -Da khô'),
('#100010', 'Cặp 2 kem dưỡng tay và son dưỡng mật ong Nuxe Kit Rêve de Miel 1 Crème Mains 30mL+ 1 Stick Lèvres 4g - NUXE / -Da thiếu dầu, da mất nước, da khô / -Da khô'),
('#100009', 'Nước hoa Lady Million Paco Rabanne 10ml - PACO RABANNE');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`username`, `password`) VALUES
('admin', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
