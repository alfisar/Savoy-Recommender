-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 03:15 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`email`, `pass`) VALUES
('alfisar@gmail.com', 'alfi'),
('alfisar589@gmail.com', 'alfisar'),
('alfisar123@gmail.com', 'alfi'),
('max@gmail.com', 'max');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` varchar(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `nama`, `harga`, `deskripsi`) VALUES
('pr-001', 'Amber Soap', 15, 'Lorem ipsum dolor sit amet consectetur'),
('pr-002', 'Arditi Backpack', 50, 'Lorem ipsum dolor sit amet consectetur'),
('pr-003', 'Blaster Orange Bag', 30, ' Lorem ipsum dolor sit amet consectetur'),
('pr-004', 'Canvas Basket', 10, 'Lorem ipsum dolor sit amet consectetur'),
('pr-005', 'Classic Chair', 62, 'Lorem ipsum dolor sit amet consectetur'),
('pr-006', 'Door Bumper', 29, 'Lorem ipsum dolor sit amet consectetur'),
('pr-007', 'Flower Candleholder', 10, 'Lorem ipsum dolor sit amet consectetur'),
('pr-008', 'Clueless Clock', 31, 'Lorem ipsum dolor sit amet consectetur'),
('pr-009', 'Hans Backpack', 50, 'Lorem ipsum dolor sit amet consectetur'),
('pr-010', 'Laptop Bag', 42, 'Lorem ipsum dolor sit amet consectetur'),
('pr-011', 'Lighthouse Lantern', 25, 'Lorem ipsum dolor sit amet consectetur'),
('pr-012', 'Pendulum Lamp', 5, 'Lorem ipsum dolor sit amet consectetur'),
('pr-013', 'Plain Glass Bottle', 22, 'Lorem ipsum dolor sit amet consectetur'),
('pr-014', 'Press Coffee Maker', 31, 'Lorem ipsum dolor sit amet consectetur'),
('pr-015', 'Savana Sunglasses', 19, 'Lorem ipsum dolor sit amet consectetur'),
('pr-016', 'Specs Sunglasses', 19, 'Lorem ipsum dolor sit amet consectetur'),
('pr-017', 'Rattan Basket', 13, 'Lorem ipsum dolor sit amet consectetur'),
('pr-018', 'Glassbottle', 14, 'Lorem ipsum dolor sit amet consectetur'),
('pr-019', 'Sachet', 20, 'Lorem ipsum dolor sit amet consectetur'),
('pr-020', 'Wood-tray', 23, 'Lorem ipsum dolor sit amet consectetur');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `user` varchar(30) NOT NULL,
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `namabarang` varchar(20) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`user`, `first`, `last`, `email`, `province`, `city`, `district`, `address`, `zipcode`, `phone`, `namabarang`, `harga`) VALUES
('', 'alfi', 'asdsa', 'alfi@gmail.com', 'asdas', 'jakarta', 'sadsa', 'bogor', '14045', '081291276414', '', ''),
('', 'alfi', 'asdsa', 'alfi@gmail.com', 'asdas', 'jakarta', 'sadsa', 'bogor', '14045', '081291276414', '', ''),
('', 'alfi', 'asdsa', 'alfi@gamil.com', 'asdas', 'jakarta', 'sadsa', 'bogor', '14045', '081291276414', '', ''),
('', 'alfi', 'asdsa', 'alfi@gamil.com', 'asdas', 'jakarta', 'sadsa', 'bogor', '14045', '081291276414', '', ''),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'asdas', 'jakarta', 'sadsa', 'bogor', '14045', '081291276414', 'Door Bumper', '47'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'asdas', 'jakarta', 'sadsa', 'bogor', '14045', '081291276414', 'Door Bumper', '38'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Door Bumper', '29'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Amber Soap', '33'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Clueless Clock', '49');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idproduk` varchar(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idproduk`, `user`, `comment`) VALUES
('pr-002', 'alfisar@gmail.com', 'ini barangnya bagus banget gan'),
('pr-006', 'alfisar@gmail.com', 'gantungannya bagus banget '),
('pr-002', 'Unkown', 'bagus gan barangnya'),
('pr-014', 'alfisar@gmail.com', 'lucu tekonya '),
('pr-013', 'Unkown', 'kualitasnya bagus ini \r\n'),
('pr-002', 'Anonymous', 'Kualitas produknya sangat bagus dan pengiriman dengan packaging yang aman'),
('pr-002', 'Unkown', 'wdwd');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user` varchar(30) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user`, `fname`, `lname`, `email`, `province`, `city`, `district`, `address`, `zip`, `phone`) VALUES
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238'),
('alfisar589@gmail.com', 'alfi', 'sar', 'alfisar589@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238'),
('alfisar123@gmail.com', 'alfi', 'sarrrrrr', 'alfisar123@gmai.com', 'asdas', 'jakarta', 'sadsa', 'bogor', '14045', '081291276414');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
