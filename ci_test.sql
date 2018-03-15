-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 08:34 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `username`, `password`) VALUES
(1, 'adrian respicio', 'banilad', 'respicioadrian', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productcode` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `custname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `custaddress` varchar(255) NOT NULL,
  `custnumber` varchar(12) NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'On Process...',
  `transactiondate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productname`, `productcode`, `price`, `quantity`, `totalprice`, `mode`, `custname`, `username`, `custaddress`, `custnumber`, `order_status`, `transactiondate`) VALUES
(50, 'orange', 'o1', 120, 2, 240, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'CANCELLED', '2018-03-15 02:19:44'),
(52, 'mansanas', 'm1', 120, 2, 240, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'CANCELLED', '2018-03-15 02:26:43'),
(53, 'orange', 'o1', 120, 2, 240, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'CANCELLED', '2018-03-15 02:26:50'),
(54, 'mansanas', 'm1', 120, 1, 120, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'CANCELLED', '2018-03-15 02:31:40'),
(55, 'item 2', 'c2', 40000, 2, 80000, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'DELIVERED', '2018-03-15 05:04:57'),
(56, 'item3', 'c3', 3000, 2, 6000, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'DELIVERED', '2018-03-15 05:05:07'),
(57, 'item 8', 'c8', 5000, 2, 10000, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'On Process...', '2018-03-15 05:05:15'),
(58, 'item 8', 'c8', 5000, 2, 10000, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'CANCELLED', '2018-03-15 05:05:26'),
(59, 'item 5', 'c5', 5000, 2, 10000, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'On Process...', '2018-03-15 05:05:31'),
(60, 'item 2', 'c2', 40000, 3, 120000, 'Delivery', 'phil. Keevin Angsioco Pacia', 'phil', 'Brgy 1', '0999898980', 'On Process...', '2018-03-15 05:06:09'),
(61, 'item 7', 'c7', 5000, 2, 10000, 'Delivery', 'phil. Keevin Angsioco Pacia', 'phil', 'Brgy 1', '0999898980', 'DELIVERED', '2018-03-15 05:06:15'),
(62, 'item3', 'c3', 3000, 1, 3000, 'Delivery', 'phil. Keevin Angsioco Pacia', 'phil', 'Brgy 1', '0999898980', 'On Process...', '2018-03-15 05:06:20'),
(63, 'item 8', 'c8', 5000, 4, 20000, 'Delivery', 'phil. Keevin Angsioco Pacia', 'phil', 'Brgy 1', '0999898980', 'On Process...', '2018-03-15 05:06:26'),
(64, 'item6', 'c6', 3000, 2, 6000, 'Delivery', 'phil. Keevin Angsioco Pacia', 'phil', 'Brgy 1', '0999898980', 'On Process...', '2018-03-15 05:06:31'),
(65, 'item 2', 'c2', 40000, 2, 80000, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'CANCELLED', '2018-03-15 06:40:45'),
(66, 'item11', 'c11', 290, 1, 290, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'CANCELLED', '2018-03-15 06:41:31'),
(68, 'item 2', 'c2', 40000, 1, 40000, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'On Process...', '2018-03-15 07:09:17'),
(69, 'item 2', 'c2', 40000, 2, 80000, 'Delivery', 'adrian respicio', 'ade', 'Banilad Nasugbu Batangas', '09753802042', 'On Process...', '2018-03-15 07:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contnumber` varchar(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `address`, `contnumber`, `username`, `password`) VALUES
(2, 'adrian respicio', 'Banilad Nasugbu Batangas', '09753802042', 'ade', 'password'),
(3, 'phil. Keevin Angsioco Pacia', 'Brgy 1', '0999898980', 'phil', 'password'),
(4, 'jezzer', 'Lian', '098787678767', 'jezzer', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_code`, `stock`, `price`, `image`) VALUES
(27, 'mangga', 'm1', 0, 25, 'orange.jpg'),
(33, 'item1', 'c1', 5, 300, '1.jpg'),
(34, 'item 2', 'c2', 5, 40000, '3.jpg'),
(35, 'item3', 'c3', 5, 3000, '3.jpg'),
(36, 'item 4', 'c4', 5, 5000, '4.jpg'),
(38, 'item 5', 'c5', 5, 5000, '6.jpeg'),
(40, 'item6', 'c6', 5, 3000, '2.jpg'),
(41, 'item 7', 'c7', 6, 5000, '8.jpeg'),
(42, 'item 8', 'c8', 5, 5000, '9.jpeg'),
(44, 'item11', 'c11', 5, 290, '5.jpg'),
(45, 'item29', 'c29', 24, 6, '8.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
