-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql302.infinityfree.com
-- Generation Time: Aug 13, 2023 at 02:10 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28195554_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pwd`) VALUES
(1, 'shehab@gmail.com', '12345'),
(2, 'sabbir@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `biling_details`
--

CREATE TABLE `biling_details` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `zip` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `total_bil` varchar(255) NOT NULL,
  `ship_bill` varchar(50) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biling_details`
--

INSERT INTO `biling_details` (`id`, `name`, `email`, `mobile`, `zip`, `address`, `total_bil`, `ship_bill`, `payment_type`, `payment_status`, `order_id`, `order_status`, `auth`, `added_on`) VALUES
(56, 'Shehab24', 'tanvir@gmail.com', 2147483647, 13346, 'Dhaka ', '1600', '100', 'other', '1', '835767624', '1', '20c8261bc4e04a6399d0d425525c2b44', '2022-11-28 06:08:47'),
(55, 'Shehab24', 'tanvir@gmail.com', 2147483647, 13346, 'Dhaka ', '1600', '100', 'other', '1', '835767624', '1', '20c8261bc4e04a6399d0d425525c2b44', '2022-11-28 04:08:38'),
(54, 'Shehab24', 'mdshehab204@gmail.com', 1784450219, 1217, 'dhaka mogbazar', '500', '100', 'other', '1', '914492915', '1', 'a4c6c049f15d36bc0d8b14adad1d9386', '2022-11-23 06:10:14'),
(53, 'fuck', 'fuck@fuck.com', 11111111, 0, '2345690', '800', '100', 'cod', '1', '1873987865', '1', '2cdc50dd33470f2d52f3d2318709a252', '2021-04-15 07:46:51'),
(52, 'fuck', 'fuck@fuck.com', 11111111, 12321, '1234rty23rt', '1600', '100', 'cod', '1', '1856627455', '1', '2cdc50dd33470f2d52f3d2318709a252', '2021-04-15 07:27:41'),
(49, '', '', 0, 0, '', '', '100', '', '1', '', '1', '', '2021-03-23 12:37:30'),
(50, 'shehab mahamud sabbir', 'shehab@gmail.com', 1784450219, 2223, 'Dhaka', '500', '100', 'other', '1', '645620019', '1', 'ad6a3a667c7b3f98683c851f58bf6d87', '2021-03-23 12:43:07'),
(51, '', '', 0, 0, '', '', '100', '', '1', '', '1', '', '2021-03-23 16:08:54'),
(48, 'shehab mahamud sabbir', 'shehab@gmail.com', 1784450219, 12122, 'DHAKA', '300', '100', 'other', '1', '1085990505', '1', 'ad6a3a667c7b3f98683c851f58bf6d87', '2021-03-23 12:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `biling_dish_inc`
--

CREATE TABLE `biling_dish_inc` (
  `id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `dish_image` varchar(255) NOT NULL,
  `dish_price` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biling_dish_inc`
--

INSERT INTO `biling_dish_inc` (`id`, `dish_id`, `catagory_id`, `qty`, `subtotal`, `dish_name`, `dish_image`, `dish_price`, `status`, `order_id`, `auth`, `added_on`) VALUES
(105, 10, 6, '1', '200', ' COLD LASSI ', '1024304_product-1.jpg', '200', 1, '1873987865', '2cdc50dd33470f2d52f3d2318709a252', '2021-04-15 07:46:51'),
(106, 11, 2, '2', '600', 'BERGER', '6919074_product-3.jpg', '300', 1, '1873987865', '2cdc50dd33470f2d52f3d2318709a252', '2021-04-15 07:46:51'),
(107, 10, 6, '2', '400', ' COLD LASSI ', '1024304_product-1.jpg', '200', 1, '914492915', 'a4c6c049f15d36bc0d8b14adad1d9386', '2022-11-23 06:10:14'),
(108, 11, 2, '5', '1500', 'BERGER', '6919074_product-3.jpg', '300', 1, '835767624', '20c8261bc4e04a6399d0d425525c2b44', '2022-11-28 04:08:38'),
(104, 12, 1, '4', '1000', 'FRY CHIPS', '3701012_product-7.jpg', '250', 1, '1856627455', '2cdc50dd33470f2d52f3d2318709a252', '2021-04-15 07:27:41'),
(103, 10, 6, '3', '600', ' COLD LASSI ', '1024304_product-1.jpg', '200', 1, '1856627455', '2cdc50dd33470f2d52f3d2318709a252', '2021-04-15 07:27:41'),
(101, 10, 6, '1', '200', ' COLD LASSI ', '1024304_product-1.jpg', '200', 1, '1085990505', 'ad6a3a667c7b3f98683c851f58bf6d87', '2021-03-23 12:29:17'),
(102, 10, 6, '2', '400', ' COLD LASSI ', '1024304_product-1.jpg', '200', 1, '645620019', 'ad6a3a667c7b3f98683c851f58bf6d87', '2021-03-23 12:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `dish_image` varchar(255) NOT NULL,
  `dish_price` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `dish_id`, `catagory_id`, `qty`, `subtotal`, `dish_name`, `dish_image`, `dish_price`, `status`, `auth`, `added_on`) VALUES
(198, 12, 1, '3', '750', 'FRY CHIPS', '3701012_product-7.jpg', '250', 1, '3ea22697f9a537dce89ec2b9b77e7b5e', '2021-04-15 07:36:01'),
(203, 11, 2, '1', '300', 'BERGER', '6919074_product-3.jpg', '300', 1, '5fc31e5d42f0fda95df40af19b519b9a', '2023-08-04 02:57:05'),
(193, 12, 1, '1', '250', 'FRY CHIPS', '3701012_product-7.jpg', '250', 1, 'ad6a3a667c7b3f98683c851f58bf6d87', '2021-04-01 09:41:50'),
(201, 10, 6, '1', '200', ' COLD LASSI ', '1024304_product-1.jpg', '200', 1, '', '2022-11-27 06:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `catagory_name` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `catagory_name`, `status`, `added_on`) VALUES
(1, 'cata1', 1, '2020-12-13 16:10:50'),
(2, 'cata2', 1, '2020-12-24 05:52:51'),
(6, 'cata3', 1, '2020-12-24 05:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`, `name`, `mobile`, `sub`, `msg`, `added_on`) VALUES
(1, 'shehab@gmail.com', 'shehab', '017844450219', 'for hire', 'test msg from shehab', '2020-12-11 22:53:30'),
(3, 'mdshehab204@gmail.com', 'shehab', '12345678', 'nothing', 'test', '0000-00-00 00:00:00'),
(4, 'shehab@gmail.com', '2', 'ewrewr', 'rewrewr', 'rewreewq', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dish`
--

CREATE TABLE `dish` (
  `id` int(11) NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `dish` varchar(50) NOT NULL,
  `dish_price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dish_detail` mediumtext NOT NULL,
  `dish_type` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`id`, `catagory_id`, `dish`, `dish_price`, `image`, `dish_detail`, `dish_type`, `status`, `added_on`) VALUES
(10, 6, ' COLD LASSI ', '200', '1024304_product-1.jpg', '     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam ut, temporibus delectus voluptates dolor ducimus, vitae dignissimos laudantium odit, fugiat quas expedita nisi ipsum. Harum quod culpa adipisci a illum!', 'non-veg', 1, '2020-12-24 06:54:51'),
(11, 2, 'BERGER', '300', '6919074_product-3.jpg', 'This is one of the biggest  berger & also deslicious berger ', 'Select type', 1, '2020-12-24 06:54:38'),
(12, 1, 'FRY CHIPS', '250', '3701012_product-7.jpg', 'TESTING PURPOSE ', 'non-veg', 1, '2020-12-24 07:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `ship_bill` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pay_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pay_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `order_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `ship_bill`, `address`, `status`, `transaction_id`, `currency`, `zip`, `pay_type`, `pay_status`, `order_status`, `order_id`, `auth`) VALUES
(163, 'Shehab24', 'tanvir@gmail.com', '9919961948', 1600, '100', 'Dhaka ', 'Processing', 'SSLCZ_TEST_6384368a4efbb', 'BDT', '13346', 'other', '0', '0', '835767624', '20c8261bc4e04a6399d0d425525c2b44'),
(162, 'Shehab24', 'mdshehab204@gmail.com', '01784450219', 500, '100', 'dhaka mogbazar', 'Processing', 'SSLCZ_TEST_637dbb6a530c5', 'BDT', '1217', 'other', '0', '0', '914492915', 'a4c6c049f15d36bc0d8b14adad1d9386'),
(161, 'shehab mahamud sabbir', 'shehab@gmail.com', '01784450219', 350, '100', 'Wazirpur', 'Pending', 'SSLCZ_TEST_6138ff0299c19', 'BDT', '8224', 'other', '0', '0', '786151341', 'ad6a3a667c7b3f98683c851f58bf6d87'),
(160, '', '', '', 0, '100', '', 'Pending', 'SSLCZ_TEST_6077ef566afa8', 'BDT', '', '', '0', '0', '', ''),
(159, 'fuck', 'fuck@fuck.com', '11111111', 900, '100', '2345690', 'Pending', 'SSLCZ_TEST_6077ef51b7125', 'BDT', 'we467890', 'other', '0', '0', '1647012420', '2cdc50dd33470f2d52f3d2318709a252'),
(158, 'Mehadi', 'mehadi@gmail.com', '01777400144', 850, '100', 'Sjsbss', 'Pending', 'SSLCZ_TEST_6077ecf04748e', 'BDT', '6280', 'other', '0', '0', '36856300', '3ea22697f9a537dce89ec2b9b77e7b5e'),
(157, 'shehab mahamud sabbir', 'shehab@gmail.com', '01784450219', 350, '100', 'New Elwphant road, Dhaka', 'Pending', 'SSLCZ_TEST_6065956f8468b', 'BDT', '1207', 'other', '0', '0', '361288751', 'ad6a3a667c7b3f98683c851f58bf6d87'),
(156, 'shehab mahamud sabbir', 'shehab@gmail.com', '01784450219', 500, '100', 'Dhaka', 'Processing', 'SSLCZ_TEST_6059e2209ab0a', 'BDT', '2223', 'other', '0', '0', '645620019', 'ad6a3a667c7b3f98683c851f58bf6d87'),
(155, 'shehab mahamud sabbir', 'shehab@gmail.com', '01784450219', 500, '100', 'Wazirpur', 'Pending', 'SSLCZ_TEST_6059e0da03b55', 'BDT', '8224', 'other', '0', '0', '1584308298', 'ad6a3a667c7b3f98683c851f58bf6d87'),
(154, 'shehab mahamud sabbir', 'shehab@gmail.com', '01784450219', 300, '100', 'DHAKA', 'Processing', 'SSLCZ_TEST_6059df038a2e2', 'BDT', '12122', 'other', '0', '0', '1085990505', 'ad6a3a667c7b3f98683c851f58bf6d87');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `wallet` varchar(50) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `mobile`, `wallet`, `auth`, `added_on`) VALUES
(21, 'sabbir@gmail.com', 'sabbir', 'sabbir rahman', '01873395301', '', '18295b49baf2fb62cb547e8ea125ed24', '2020-12-28 10:59:48'),
(22, 'shehab@gmail.com', 'shehab', 'shehab mahamud sabbir', '01784450219', '', 'ad6a3a667c7b3f98683c851f58bf6d87', '2020-12-28 10:59:23'),
(24, 'fuck@fuck.com', '111', 'fuck', '11111111', '', '2cdc50dd33470f2d52f3d2318709a252', '2021-04-15 07:26:30'),
(25, 'mehadi@gmail.com', 'mehadi937598@gmail.com', 'Mehadi', '01777400144', '', '3ea22697f9a537dce89ec2b9b77e7b5e', '2021-04-15 07:35:09'),
(26, 'mdshehab204@gmail.com', '12345', 'Shehab24', '01784450219', '', 'a4c6c049f15d36bc0d8b14adad1d9386', '2022-11-23 06:07:38'),
(27, 'hridoy@gmail.com', '12345', 'hridoy@gmail.com', '01245862548', '', 'ec3039334ff0bd34480102d8cc6c34dc', '2022-11-27 06:51:36'),
(28, 'tanvir@gmail.com', '12345', 'Shehab24', '9919961948', '', '20c8261bc4e04a6399d0d425525c2b44', '2022-11-28 04:06:47'),
(29, 'ronimia593@gmail.com', 'rono12345', 'roni', '66666666666666666', '', 'e1d13f7316da1ec13e4d834df50fabcb', '2023-08-04 02:54:17'),
(30, 'shehab12345@gmail.com', 'shehab1234', 'shehab', '432423423432', '', '5fc31e5d42f0fda95df40af19b519b9a', '2023-08-04 02:56:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biling_details`
--
ALTER TABLE `biling_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biling_dish_inc`
--
ALTER TABLE `biling_dish_inc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `biling_details`
--
ALTER TABLE `biling_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `biling_dish_inc`
--
ALTER TABLE `biling_dish_inc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
