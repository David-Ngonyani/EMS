-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 07:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elect_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admn_id` int(25) NOT NULL,
  `admn_name` varchar(25) NOT NULL,
  `admn_email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admn_id`, `admn_name`, `admn_email`, `username`, `password`) VALUES
(1, 'David Ngonyani', 'davidngonyani@gmail.com', 'David', '1234'),
(2, 'Zahor Salum Juma', 'zahorsalum@gmail.com', 'Zahor', 'Zahor'),
(3, 'Migire Msangi', 'msangimigire@gmail.com', 'migire', '123456789'),
(4, 'shija joseph jilya', 'joseph@gmail.com', 'jilya', '6661'),
(5, 'GODFREY KENNEDY', 'godfreykennedy@gmail.com', 'GODY', '1984');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(25) NOT NULL,
  `addres` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `addres`, `email`, `password`, `city`, `country`) VALUES
(5, 'Zamo Zamo', 'Changarawe', 'zamo@gmail.com', 'zamo', 'morogoro', 'Tanzania'),
(6, 'hamis', 'mwanz', 'hamis@gmail.com', '2223', 'ngem', 'Tanzania'),
(7, 'agripa', 'mbeya', 'agrp@gmail.com', '1234', 'mbeya', 'Tanzania');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(25) NOT NULL,
  `prod_price` double NOT NULL,
  `prod_image` varchar(50) NOT NULL,
  `prod_descript` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `prod_price`, `prod_image`, `prod_descript`) VALUES
(1, 'FREEZER', 500000, './product_images/preview-img5.jpg', 'double doors'),
(2, 'CCTV CAMERA', 600000, './product_images/preview-img4.jpg', 'FULL HD'),
(3, 'CCTV CAMERA', 600000, './product_images/preview-img4.jpg', 'FULL HD'),
(4, 'CCTV CAMERA', 600000, './product_images/preview-img4.jpg', 'FULL HD'),
(5, 'FEN', 430000, './product_images/Huawei p30 (2).jpg', 'white'),
(6, 'HD TV', 600000, './product_images/new-pic1.jpg', 'HD'),
(7, 'BLENDER', 45000, './product_images/new-pic3.jpg', 'white'),
(8, 'SABWOOFER', 600000, './product_images/feature-pic2.jpg', 'full set'),
(9, 'Infinix 08', 430000, './product_images/Infinix-Zero-8.jpg', 'RAM 1GB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admn_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admn_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
