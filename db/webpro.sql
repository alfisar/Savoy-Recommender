-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Mei 2018 pada 16.03
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpro`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`email`, `pass`) VALUES
('alfisar@gmail.com', 'alfi'),
('alfisar589@gmail.com', 'alfisar'),
('alfisar123@gmail.com', 'alfi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `nama` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`nama`, `harga`) VALUES
('Amber Soap', '15.00'),
('Arditi Backpack', '$50.00'),
('Blaster Orange Bag', '$30.00'),
('Canvas Basket', '$10.00'),
('Classic Chair', '$62.00'),
('Door Bumper', '$29.00'),
('Flower Candleholder', '$10.00'),
('Clueless Clock', '$31.00'),
('Hans Backpack', '$50.00'),
('Laptop Bag', '42.00'),
('Lighthouse Lantern', '$25.00'),
('Pendulum Lamp', '$5.00'),
('Plain Glass Bottle', '$22.00'),
('Press Coffee Maker', '$31.00'),
('Savana Sunglasses', '$19.00'),
('Specs Sunglasses', '$19.00'),
('Basketjpg', '$13.00'),
('Glassbottle', '$14.00'),
('Sachet', '20.00'),
('Wood-tray', '$23.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `billing`
--

CREATE TABLE `billing` (
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `billing`
--

INSERT INTO `billing` (`first`, `last`, `email`, `province`, `city`, `district`, `address`, `zipcode`, `phone`) VALUES
('alfi', 'asdsa', 'alfi@gmail.com', 'asdas', 'jakarta', 'sadsa', 'bogor', '14045', '081291276414');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
