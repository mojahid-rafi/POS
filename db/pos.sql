-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 09:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
  `name` varchar(30) NOT NULL DEFAULT '',
  `user_id` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `user_id`, `create_at`, `update_at`) VALUES
(1, 'Aarong', '0', '2023-07-09 03:30:04', NULL),
(2, 'Akij', '0', '2023-07-09 03:30:23', NULL),
(3, 'Bashundhara Group', '0', '2023-07-09 03:30:52', NULL),
(4, 'Beximco Pharma', '0', '2023-07-09 03:31:04', NULL),
(5, 'Beximco', '0', '2023-07-09 03:31:13', NULL),
(6, 'Navana', '0', '2023-07-09 03:32:16', NULL),
(7, 'PRAN-RFL', '0', '2023-07-09 03:32:51', NULL),
(8, 'Walton', '0', '2023-07-09 03:33:15', NULL),
(9, 'Unilever ', '0', '2023-07-09 04:37:39', NULL),
(10, 'ACI', '0', '2023-07-09 04:38:16', NULL),
(11, 'Pran', '0', '2023-07-09 04:38:29', NULL),
(12, 'Nestlé', '0', '2023-07-09 04:38:42', NULL),
(13, 'Radhuni', '0', '2023-07-09 04:38:56', NULL),
(14, 'Fresh', '0', '2023-07-09 04:39:11', NULL),
(15, 'Teer', '0', '2023-07-09 04:39:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `discription` varchar(250) NOT NULL DEFAULT '',
  `user_id` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `discription`, `user_id`, `create_at`, `update_at`) VALUES
(1, 'Beauty & Wellbeing', 'We believe in Positive Beauty, Healthy Lifestyles. We’re embracing a new era of beauty and wellbeing. One that’s inclusive. Equitable. Regenerative. Positive', '0', '2023-07-09 04:41:19', NULL),
(2, 'Personal Care', 'We believe in caring for people and planet. Through our brands, we’re taking action to drive positive change.', '0', '2023-07-09 04:41:38', NULL),
(3, 'Home Care', 'Clean Home. Clean Planet. Clean Future.\r\n\r\nWe’re reimagining the future of cleaning and it starts with reinventing a century-old history of chemistry.', '0', '2023-07-09 04:41:52', NULL),
(4, 'Nutrition', 'We are a Force for Good in Food.\r\n\r\nWe strive for a future where our food system can put good food on 10 billion plates while caring for our planet.', '0', '2023-07-09 04:42:07', NULL),
(5, 'Ice Cream', 'Happy People, Happy Planet.\r\n\r\nWe want to create happier moments within the communities where we operate.', '0', '2023-07-09 04:42:31', NULL),
(6, 'Food', 'All good food for mango people  ', '0', '2023-07-09 04:43:28', NULL),
(7, 'PRAN Potata', 'An exceptional spicy flavored biscuit', '0', '2023-07-09 04:43:41', NULL),
(8, 'Bun', 'All Time Bun', '0', '2023-07-09 04:45:18', NULL),
(9, 'Hurray Wafer', 'Hurray wafer is a plain & classic wafer', '0', '2023-07-09 04:45:32', NULL),
(10, 'Biscuits', 'Going completely against the traditional taste of biscuit, Masala Flavored Biscuit is an exceptional addition to the house of Bisk Club Fit Crackers.', '0', '2023-07-09 04:52:08', NULL),
(11, 'Dairy', 'dairy industry changes to meet emerging\r\nsustainability challenges', '0', '2023-07-09 04:57:56', NULL),
(12, 'Natural mineral & purified waters', 'As a guardian of unique water sources, Nestlé Waters is helping to protect natural aquifers around the world', '0', '2023-07-09 04:59:05', NULL),
(13, 'Coffee ', 'Gold Coffee Special Blend', '0', '2023-07-09 05:01:10', NULL),
(14, 'Ready Mix', 'Radhuni Meat Curry Masala', '0', '2023-07-09 05:03:28', NULL),
(15, 'Oil', 'TEER Advanced Soyabean Oil', '0', '2023-07-09 05:03:56', NULL),
(16, 'Salt', 'TEER Premium Iodized Salt is extra fine, free-flowing, and of the highest quality.', '0', '2023-07-09 05:06:31', NULL),
(17, 'Rice', 'Chinigura rice stands for its pristine, white grains and rich aroma.', '0', '2023-07-09 05:06:58', NULL),
(18, 'Semolina', 'TEER Semolina is milled from selected high protein wheat from Canada,', '0', '2023-07-09 05:07:26', NULL),
(19, 'Flour', 'TEER Flour is milled from selected high protein wheat from Canada, America, Australia and Russia using top-notch Swiss technologies from Buhler', '0', '2023-07-09 05:07:46', NULL),
(20, 'Muri', 'Muri (Puffed Rice)', '0', '2023-07-09 05:08:12', NULL),
(21, 'Grocery', 'Grocery all product .', '0', '2023-07-09 06:33:15', NULL),
(22, 'Drinks', 'Fun Fruitz Mango Drinks', '0', '2023-07-09 06:55:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `comname` varchar(50) NOT NULL DEFAULT '',
  `comlogo` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT '',
  `comweb` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `fax` varchar(20) NOT NULL DEFAULT '',
  `rheader` varchar(50) NOT NULL DEFAULT '',
  `rpolicy` varchar(250) NOT NULL DEFAULT '',
  `user_id` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
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
  `user_id` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `party_name`, `party_type`, `address_ar`, `phone`, `email`, `contact_person`, `cp_phone`, `acct_head`, `head_type`, `user_id`, `create_at`, `updated_at`) VALUES
(1, 'Shoyab', 'customer', 'Dhaka', '01755979896', 'S@gmail.com', 'Rafi', '01599897986', '', '', '', '2023-07-08 06:25:11', NULL),
(2, 'rafi ', 'Cust', 'mirpur', ' 01755979896', ' R@gmail.com', 'mojahid', '018979896', '', '', '', '2023-07-08 06:25:23', NULL),
(3, 'Rifat', '', '10 number', '013323216141', 'rifat@gmail.com', 'sakil', '016356973154', '', '', '', '2023-07-08 06:41:31', NULL),
(4, 'Rifat', '', '10 number', '013323216141', 'rifat@gmail.com', 'sakil', '016356973154', '', '', '', '2023-07-08 06:49:43', NULL),
(5, 'zahid', '', 'moniram', '019898989', 'z@gmail.com', 'kuddus', '01326589712', '', '', '', '2023-07-08 06:50:45', NULL),
(6, 'Sho', 'customer', 'janina', '013323216141', 'R@gmail.com', 'sakil', '01599897986', '', '', '', '2023-07-08 06:53:35', NULL),
(7, 'Sho', 'customer', 'janina', '013323216141', 'R@gmail.com', 'sakil', '01599897986', '', '', '0', '2023-07-08 06:54:35', NULL),
(8, 'Rifat', 'customer', 'damrai', '013323216141', 'rifat@gmail.com', 'kuddus', '01326589712', '', '', '0', '2023-07-08 06:55:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item_info`
--

CREATE TABLE `item_info` (
  `id` int(11) NOT NULL,
  `item_code` varchar(20) NOT NULL DEFAULT '',
  `item_name` varchar(30) NOT NULL DEFAULT '',
  `category_id` varchar(20) NOT NULL DEFAULT '',
  `brand_id` varchar(20) NOT NULL DEFAULT '',
  `unit` varchar(30) NOT NULL DEFAULT '',
  `unit_price` float(10,2) NOT NULL DEFAULT 0.00,
  `rol` int(11) NOT NULL DEFAULT 0,
  `last_pur_price` float(10,2) NOT NULL DEFAULT 0.00,
  `barcode` varchar(20) NOT NULL DEFAULT '',
  `sts` int(11) NOT NULL DEFAULT 1,
  `stock_mantain` int(11) NOT NULL DEFAULT 1,
  `op_stock` float(10,2) NOT NULL DEFAULT 0.00,
  `user_id` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item_info`
--

INSERT INTO `item_info` (`id`, `item_code`, `item_name`, `category_id`, `brand_id`, `unit`, `unit_price`, `rol`, `last_pur_price`, `barcode`, `sts`, `stock_mantain`, `op_stock`, `user_id`, `create_at`, `update_at`) VALUES
(1, '1001', 'Muri', '20', '2', '1', 100.00, 10, 90.00, '1001', 1, 1, 100.00, '0', '2023-07-09 06:46:50', NULL),
(2, '1002', 'Meat Masala', '21', '15', '5', 500.00, 25, 450.00, '1002', 1, 1, 120.00, '0', '2023-07-09 06:47:33', NULL),
(3, '1003', 'Lolipop Ice Cream', '5', '9', '3', 368.00, 15, 320.00, '1003', 1, 1, 150.00, '0', '2023-07-09 06:49:13', NULL),
(4, '1004', 'Holud Gura', '21', '14', '7', 630.00, 35, 600.00, '1004', 1, 1, 90.00, '0', '2023-07-09 06:50:37', NULL),
(5, '1005', 'Comfort', '4', '4', '2', 280.00, 35, 250.00, '1005', 1, 1, 120.00, '0', '2023-07-09 06:52:02', NULL),
(6, '1006', 'Magnum', '5', '9', '4', 490.00, 15, 450.00, '1006', 1, 1, 80.00, '0', '2023-07-09 06:53:29', NULL),
(7, '1007', 'Mango Drinks', '22', '1', '15', 1500.00, 500, 1400.00, '1007', 1, 1, 1000.00, '0', '2023-07-09 06:56:44', NULL),
(8, '1008', 'Gold Coffee', '13', '3', '50', 5300.00, 180, 5200.00, '1008', 1, 1, 500.00, '0', '2023-07-09 06:59:20', NULL),
(9, '1009', 'Seventh Generation', '4', '10', '1', 160.00, 20, 150.00, '1009', 1, 1, 50.00, '0', '2023-07-09 07:01:18', NULL),
(10, '1010', 'TEER Borhani Mix', '21', '3', '2', 288.00, 35, 220.00, '1010', 1, 1, 100.00, '0', '2023-07-09 07:03:05', NULL),
(11, '1011', 'Premium Iodized Salt', '16', '7', '3', 360.00, 20, 320.00, '1011', 1, 1, 120.00, '0', '2023-07-09 07:04:13', NULL),
(12, '1012', 'Iodized Salt', '16', '10', '5', 450.00, 3, 400.00, '1012', 1, 1, 150.00, '0', '2023-07-09 07:05:39', NULL),
(13, '1013', 'Advanced Soyabean Oil', '15', '2', '1', 290.00, 20, 280.00, '1013', 1, 1, 50.00, '0', '2023-07-09 07:07:05', NULL),
(14, '1014', 'Fun Butter', '8', '3', '2', 50.00, 15, 50.00, '1014', 1, 1, 100.00, '0', '2023-07-09 07:10:44', NULL),
(15, '1015', 'Knorr', '2', '4', '1', 222.00, 15, 220.00, '1015', 1, 1, 50.00, '0', '2023-07-09 07:12:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(30) NOT NULL DEFAULT '',
  `sts` varchar(50) NOT NULL DEFAULT '',
  `user_id` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_dtls`
--

CREATE TABLE `sale_dtls` (
  `id` int(11) NOT NULL,
  `inv_no` int(11) NOT NULL DEFAULT 0,
  `sale_mstr_id` int(11) NOT NULL DEFAULT 0,
  `item_id` int(11) NOT NULL DEFAULT 0,
  `sale_price` float(10,2) NOT NULL DEFAULT 0.00,
  `qty` float(10,2) NOT NULL DEFAULT 0.00,
  `discount` float(10,2) NOT NULL DEFAULT 0.00,
  `total_dis` float(10,2) NOT NULL DEFAULT 0.00,
  `vat` float(10,2) NOT NULL DEFAULT 0.00,
  `total` float(10,2) NOT NULL DEFAULT 0.00,
  `sale_date` datetime DEFAULT NULL,
  `user_id` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `type` varchar(30) NOT NULL DEFAULT '',
  `total` float(10,2) NOT NULL DEFAULT 0.00,
  `discount` float(10,2) NOT NULL DEFAULT 0.00,
  `payable` float(10,2) NOT NULL DEFAULT 0.00,
  `paid` float(10,2) NOT NULL DEFAULT 0.00,
  `refund` float(10,2) NOT NULL DEFAULT 0.00,
  `due` float(10,2) NOT NULL DEFAULT 0.00,
  `pay_mode` float(10,2) NOT NULL DEFAULT 0.00,
  `sale_date` datetime DEFAULT NULL,
  `user_id` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `party_name` varchar(30) NOT NULL DEFAULT '',
  `party_type` varchar(30) NOT NULL DEFAULT '',
  `address_ar` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(15) NOT NULL DEFAULT '',
  `contact_person` varchar(30) NOT NULL DEFAULT '',
  `cp_phone` varchar(15) NOT NULL DEFAULT '',
  `acct_head` varchar(30) NOT NULL DEFAULT '',
  `head_type` varchar(30) NOT NULL DEFAULT '',
  `user_id` varchar(30) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `party_name`, `party_type`, `address_ar`, `phone`, `email`, `contact_person`, `cp_phone`, `acct_head`, `head_type`, `user_id`, `create_at`, `updated_at`) VALUES
(1, 'Arong  ', 'customer', 'Office Road, Vatara, Dhaka.', '01332321614 ', 'arong@gmail.com', 'Sakil Mia ', '013265897122 ', '', '', '0', '2023-07-09 07:21:31', NULL),
(2, 'Akij ', 'customer', 'Bashundhara', '01332321614 ', 'akij@gmail.com ', 'kuddus ', '016356973154 ', '', '', '0', '2023-07-09 07:25:02', NULL),
(3, 'Bashundhara', 'customer', 'Mirpur,Dhaka.', '01555979896', 'bashundhara@gma', 'Rafi', '013326589712', '', '', '0', '2023-07-09 07:26:27', NULL),
(4, 'Beximco ', 'customer', 'Beximco,Damrai,Dhaka', '01555979333', 'beximco@gmail.c', 'Sojib', '016356973111', '', '', '0', '2023-07-09 07:27:26', NULL),
(5, 'Navana', 'customer', 'Navana office , Mohammadpur, Dhaka', '01955979896', 'navana@gmail.co', 'Jidan', '013325559712', '', '', '0', '2023-07-09 07:29:27', NULL),
(6, 'PRAN-RFL', 'customer', 'PRAN-RFL Bhaban, Bashundhara, Dhaka.', '01332321111', 'rfl@gmail.com', 'Eddiu', '017756973154', '', '', '0', '2023-07-09 07:31:08', NULL);

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
  `role_id` varchar(10) NOT NULL DEFAULT '',
  `sts` varchar(50) NOT NULL DEFAULT '',
  `user_password` varchar(50) NOT NULL DEFAULT '',
  `user_con_password` varchar(50) NOT NULL DEFAULT '',
  `user_id` varchar(30) NOT NULL DEFAULT '',
  `crete_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `display_name`, `email`, `role`, `role_id`, `sts`, `user_password`, `user_con_password`, `user_id`, `crete_at`, `update_at`) VALUES
(1, 'admin', 'Admin', 'admin@gmail.com', '1', '1', 'Active', '1234', '1234', '', '2023-07-09 03:27:22', NULL);

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
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `sale_dtls`
--
ALTER TABLE `sale_dtls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_mastr`
--
ALTER TABLE `sale_mastr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `item_info`
--
ALTER TABLE `item_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_dtls`
--
ALTER TABLE `sale_dtls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_mastr`
--
ALTER TABLE `sale_mastr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
