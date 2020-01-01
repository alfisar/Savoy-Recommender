-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 02:20 PM
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
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `idakun` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`idakun`, `email`, `pass`) VALUES
(1, 'alfisar@gmail.com', 'alfi'),
(2, 'alfisar589@gmail.com', 'alfisar'),
(3, 'alfisar123@gmail.com', 'alfi'),
(4, 'max@gmail.com', 'max'),
(5, 'coba@gmail.com', 'haha'),
(8, 'admin@gmail.com', 'admin123');

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
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Clueless Clock', '49'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Savana Sunglasses', '37'),
('alfisar589@gmail.com', 'alfi', 'sar', 'alfisar589@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Amber Soap', '15'),
('admin', 'alfisar', 'rachman', 'alfisar589@gmail.com', '1212', '12121', '12121', '', '', '+62812912764', 'Laptop Bag', '42'),
('admin', 'alfisar', 'rachman', 'alfisar589@gmail.com', '123', '132', '132', '', '', '+62812912764', 'Arditi Backpack', '50'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Arditi Backpack', '68'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Door Bumper', '29'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Arditi Backpack', '50'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Blaster Orange Bag', '30'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Door Bumper', '29'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Arditi Backpack', '50'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Arditi Backpack', '50'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Arditi Backpack', '50'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Canvas Basket', '10'),
('alfisar589@gmail.com', 'alfi', 'sar', 'alfisar589@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Canvas Basket', '10'),
('alfisar589@gmail.com', 'alfi', 'sar', 'alfisar589@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Door Bumper', '29'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Arditi Backpack', '50'),
('alfisar589@gmail.com', 'alfi', 'sar', 'alfisar589@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Door Bumper', '29'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Flower Candleholder', '10'),
('alfisar589@gmail.com', 'alfi', 'sar', 'alfisar589@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Flower Candleholder', '10'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Flower Candleholder', '10'),
('alfisar589@gmail.com', 'alfi', 'sar', 'alfisar589@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Flower Candleholder', '10'),
('alfisar@gmail.com', 'alfi', 'sar', 'alfisar@gmail.com', 'jawa barat', 'bogor', 'bojong', 'bogor', '14045', '08888881238', 'Arditi Backpack', '50'),
('admin@gmail.com', 'admin', 'admin', 'admin@gmail.com', 'jabar', 'bandung', 'bogor', '', '', '', 'Arditi Backpack', '50');

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
('pr-014', 'alfisar@gmail.com', 'lucu tekonya '),
('pr-015', 'alfisar@gmail.com', 'bagus ini gan barangnya sesuai gambar heheh'),
('pr-001', 'admin', 'bagus\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `predictrating`
--

CREATE TABLE `predictrating` (
  `idbarang` varchar(20) NOT NULL,
  `idakun` int(11) NOT NULL,
  `predict` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predictrating`
--

INSERT INTO `predictrating` (`idbarang`, `idakun`, `predict`) VALUES
('pr-001', 1, 3),
('pr-004', 1, 1),
('pr-005', 1, 1),
('pr-008', 1, 0),
('pr-009', 1, 0),
('pr-010', 1, 0),
('pr-011', 1, 0),
('pr-012', 1, 0),
('pr-013', 1, 0),
('pr-014', 1, 0),
('pr-015', 1, 0),
('pr-016', 1, 0),
('pr-017', 1, 0),
('pr-018', 1, 0),
('pr-019', 1, 0),
('pr-020', 1, 0),
('pr-004', 2, 1),
('pr-005', 2, 0),
('pr-006', 2, 2),
('pr-008', 2, 0),
('pr-009', 2, 0),
('pr-010', 2, 0),
('pr-011', 2, 0),
('pr-012', 2, 0),
('pr-013', 2, 0),
('pr-014', 2, 0),
('pr-015', 2, 0),
('pr-016', 2, 0),
('pr-017', 2, 0),
('pr-018', 2, 0),
('pr-019', 2, 0),
('pr-020', 2, 0),
('pr-001', 8, 1),
('pr-003', 8, 4),
('pr-004', 8, 1),
('pr-005', 8, 1),
('pr-006', 8, 2),
('pr-007', 8, 3),
('pr-008', 8, 0),
('pr-009', 8, 0),
('pr-010', 8, 0),
('pr-011', 8, 0),
('pr-012', 8, 0),
('pr-013', 8, 0),
('pr-014', 8, 0),
('pr-015', 8, 0),
('pr-016', 8, 0),
('pr-017', 8, 0),
('pr-018', 8, 0),
('pr-019', 8, 0),
('pr-020', 8, 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `idbarang` varchar(10) NOT NULL,
  `idakun` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`idbarang`, `idakun`, `rating`) VALUES
('pr-001', 5, 4),
('pr-002', 5, 3),
('pr-003', 5, 3),
('pr-004', 5, 5),
('pr-001', 4, 1),
('pr-002', 4, 5),
('pr-003', 4, 5),
('pr-005', 4, 3),
('pr-006', 4, 3),
('pr-001', 3, 2),
('pr-003', 3, 2),
('pr-006', 3, 2),
('pr-001', 2, 4),
('pr-002', 2, 2),
('pr-003', 2, 1),
('pr-006', 1, 3),
('pr-003', 1, 5),
('pr-007', 1, 5),
('pr-007', 2, 4),
('pr-002', 1, 5),
('pr-002', 8, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idakun`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD KEY `idbarang` (`idbarang`),
  ADD KEY `idakun` (`idakun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `idakun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`idakun`) REFERENCES `akun` (`idakun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
