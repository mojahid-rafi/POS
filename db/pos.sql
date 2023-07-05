-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 06:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `party_name` varchar(30) NOT NULL DEFAULT '',
  `party_type` varchar(30) NOT NULL DEFAULT '',
  `address_ar` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `contact_person` varchar(30) NOT NULL DEFAULT '',
  `cp_phone` varchar(15) NOT NULL DEFAULT '',
  `acct_head` varchar(30) NOT NULL DEFAULT '',
  `head_type` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `party_name`, `party_type`, `address_ar`, `phone`, `email`, `contact_person`, `cp_phone`, `acct_head`, `head_type`, `create_at`, `updated_at`) VALUES
(32, 'Shoyab ', 'Customer ', 'bhola\r\nborhauddin', '01755979896 ', 'shoyabm58@gmail.com ', 'Mansur ', '01303281331 ', '', '', '2023-06-29 21:10:38', NULL),
(34, 'rafi', 'Customer', 'Noakhali', '0123456789', 'rafi@gmail.com', 'Mujahid', '0987654321', '', '', '2023-06-29 21:13:41', NULL),
(38, '14', 'bbDTdSWJG4', '2Qwg9qNzFT', '3022615252', '7gv3i@cxgv.com', 'iAh71TtCo8', '9172598032', '', '', '2023-06-30 16:37:38', NULL),
(40, '666', '01234589 ', 'aRPV6bODrW', '4', 't3qbn@fgot.com ', 'Gwcsh99P51 ', '9005947940 ', '', '', '2023-07-03 05:24:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_info`
--

CREATE TABLE `item_info` (
  `id` int(11) NOT NULL,
  `item_code` varchar(20) NOT NULL DEFAULT '',
  `catagory_id` varchar(20) NOT NULL DEFAULT '',
  `unit` varchar(30) NOT NULL DEFAULT '',
  `unit_price` float(10,2) NOT NULL DEFAULT 0.00,
  `last_pur_price` float(10,2) NOT NULL DEFAULT 0.00,
  `barcode` varchar(20) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`id`, `item_code`, `catagory_id`, `unit`, `unit_price`, `last_pur_price`, `barcode`, `create_at`, `update_at`) VALUES
(1, '6aGtrf8BvA', 'ysbqwE3cLP', 'BaD3Jt0sxt', 0.00, 0.00, 'G7MNCdtBYW', '2023-07-01 18:57:09', NULL),
(2, '222', '39akd5ZK3a', '100', 300.00, 300.00, '222', '2023-07-01 18:58:20', NULL),
(3, '222', '39akd5ZK3a', '100', 300.00, 300.00, '222', '2023-07-01 19:13:43', NULL),
(4, 'alo ', 'ashdfhifho', '99', 88.00, 77.00, '55555', '2023-07-01 19:14:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(30) NOT NULL DEFAULT '',
  `sts` varchar(50) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_details`
--

CREATE TABLE `sale_details` (
  `id` int(11) NOT NULL,
  `inv_no` int(11) NOT NULL DEFAULT 0,
  `sale_mstr_id` int(11) NOT NULL DEFAULT 0,
  `item_id` int(11) NOT NULL DEFAULT 0,
  `sale_price` float NOT NULL DEFAULT 0,
  `qty` float NOT NULL DEFAULT 0,
  `discount` float NOT NULL DEFAULT 0,
  `total_dis` float NOT NULL DEFAULT 0,
  `vat` float NOT NULL DEFAULT 0,
  `total` float NOT NULL DEFAULT 0,
  `sale_date` datetime DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale_details`
--

INSERT INTO `sale_details` (`id`, `inv_no`, `sale_mstr_id`, `item_id`, `sale_price`, `qty`, `discount`, `total_dis`, `vat`, `total`, `sale_date`, `create_at`, `update_at`) VALUES
(5, 2147483647, 0, 0, 0, 0, 0, 8, 0, 0, '0000-00-00 00:00:00', '2023-07-02 05:05:38', NULL),
(6, 2147483647, 0, 0, 0, 0, 0, 8, 0, 0, '0000-00-00 00:00:00', '2023-07-02 05:07:12', NULL),
(7, 2147483647, 0, 9, 500, 400, 300, 200, 100, 99999, '2023-07-03 00:00:00', '2023-07-02 05:07:42', NULL),
(9, 1, 0, 100, 11, 0, 55, 0, 0, 888888, '0000-00-00 00:00:00', '2023-07-02 05:09:25', NULL),
(10, 11, 0, 10, 500, 6, 3, 1, 3, 55552, '2023-07-06 00:00:00', '2023-07-02 05:10:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sale_mastr`
--

CREATE TABLE `sale_mastr` (
  `id` int(11) NOT NULL,
  `inv_no` int(11) NOT NULL DEFAULT 0,
  `p_id` int(11) NOT NULL DEFAULT 0,
  `phone` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `product_type` varchar(30) NOT NULL,
  `total` float(10,2) NOT NULL DEFAULT 0.00,
  `discount` float(10,2) NOT NULL DEFAULT 0.00,
  `payable` float(10,2) NOT NULL DEFAULT 0.00,
  `paid` float(10,2) NOT NULL DEFAULT 0.00,
  `refund` float(10,2) NOT NULL DEFAULT 0.00,
  `due` float(10,2) NOT NULL DEFAULT 0.00,
  `pay_mode` float(10,2) NOT NULL DEFAULT 0.00,
  `sale_date` datetime DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sale_mastr`
--

INSERT INTO `sale_mastr` (`id`, `inv_no`, `p_id`, `phone`, `email`, `product_type`, `total`, `discount`, `payable`, `paid`, `refund`, `due`, `pay_mode`, `sale_date`, `create_at`, `update_at`) VALUES
(1, 360651201, 0, '4446454153', 'ruh1k@s28a.com', '01234589', 99999.00, 300.00, 300.00, 5000.00, 400.00, 200.00, 100.00, '0000-00-00 00:00:00', '2023-07-02 05:35:16', NULL),
(4, 1, 2, '01303281331', 's@gmai', 'fruit ', 33.00, 44.00, 55.00, 66.00, 77.00, 88.00, 999.00, '0000-00-00 00:00:00', '2023-07-03 05:03:50', NULL),
(5, 447483647, 5, '5707104968', '5sjbf@hjet.com', '501234589', 599999.00, 5300.00, 5300.00, 5000.00, 5400.00, 5200.00, 5100.00, '2023-07-05 00:00:00', '2023-07-03 05:26:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `party_name` varchar(30) NOT NULL DEFAULT '',
  `party_type` varchar(30) NOT NULL DEFAULT '',
  `address_ar` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `contact_person` varchar(30) NOT NULL DEFAULT '',
  `cp_phone` varchar(15) NOT NULL DEFAULT '',
  `acct_head` varchar(30) NOT NULL DEFAULT '',
  `head_type` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `party_name`, `party_type`, `address_ar`, `phone`, `email`, `contact_person`, `cp_phone`, `acct_head`, `head_type`, `create_at`, `updated_at`) VALUES
(1, 'racFbx3z51', 'tOMs9C3c22', 'hemdAT637z', '9544358325', '', 'RB9On4DD8Z', '9256337253', '', '', '2023-06-29 21:38:53', NULL),
(2, 'Shoyab', 'Customer', 'bhola\r\nborhauddin', '01755979896', '', 'mahmud', '01303281331', '', '', '2023-06-29 21:39:49', NULL),
(3, 'Niaz', 'Customer', 'Chorfation', '0123456789', '', 'hujur', '9876543210', '', '', '2023-06-29 21:43:53', NULL),
(4, 'Niaz', 'Customer', 'Chorfation', '0123456789', 'n@gmail.com', 'hujur', '9876543210', '', '', '2023-06-29 21:46:24', NULL),
(8, '', '', '', '01303281331', 'sssbf@hjet.com  ', '', '', '', '', '2023-07-03 05:28:15', NULL),
(9, ' shoyab', ' customer', 'bhola\r\nborhauddin', '01755979896', 'shoyabm58@gmail.com', 'mahmud', '01303281331', '', '', '2023-07-03 05:36:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL DEFAULT '',
  `display_name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `role` varchar(30) NOT NULL DEFAULT '',
  `sts` varchar(50) NOT NULL DEFAULT '',
  `user_password` varchar(50) NOT NULL DEFAULT '',
  `user_con_password` varchar(50) NOT NULL DEFAULT '',
  `crete_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_info`
--
ALTER TABLE `item_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_mastr`
--
ALTER TABLE `sale_mastr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `item_info`
--
ALTER TABLE `item_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_details`
--
ALTER TABLE `sale_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sale_mastr`
--
ALTER TABLE `sale_mastr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
