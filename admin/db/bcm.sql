-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2023 at 05:45 PM
-- Server version: 10.10.2-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcm`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_club_info`
--

DROP TABLE IF EXISTS `blood_club_info`;
CREATE TABLE IF NOT EXISTS `blood_club_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Club_Name` varchar(150) NOT NULL,
  `Founder` varchar(150) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Division` varchar(150) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Thana` varchar(50) NOT NULL,
  `Area` varchar(150) NOT NULL,
  `Createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updatedat` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blood_donation`
--

DROP TABLE IF EXISTS `blood_donation`;
CREATE TABLE IF NOT EXISTS `blood_donation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Donor_id` int(11) NOT NULL,
  `Don_date` datetime DEFAULT NULL,
  `Hospital_Name` varchar(50) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updatedat` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_request`
--

DROP TABLE IF EXISTS `campaign_request`;
CREATE TABLE IF NOT EXISTS `campaign_request` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ClubID` int(11) NOT NULL,
  `Division` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Thana` varchar(50) NOT NULL,
  `LocationType` varchar(50) NOT NULL,
  `LocName` varchar(50) NOT NULL,
  `ApxTestCount` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Feedback` text NOT NULL,
  `Createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updatedat` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Division_ID` int(11) NOT NULL,
  `District_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

DROP TABLE IF EXISTS `division`;
CREATE TABLE IF NOT EXISTS `division` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Division_Name` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donors_info`
--

DROP TABLE IF EXISTS `donors_info`;
CREATE TABLE IF NOT EXISTS `donors_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL DEFAULT '',
  `gender` varchar(30) NOT NULL DEFAULT '',
  `blood_group` varchar(30) NOT NULL DEFAULT '',
  `dob` varchar(30) DEFAULT NULL,
  `phone` varchar(15) NOT NULL DEFAULT '',
  `alt_phone` varchar(15) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `division_id` varchar(30) NOT NULL DEFAULT '',
  `district_id` varchar(30) NOT NULL DEFAULT '',
  `thana_id` varchar(30) NOT NULL DEFAULT '',
  `area` varchar(50) NOT NULL DEFAULT '',
  `pwd` varchar(30) NOT NULL DEFAULT '',
  `sts` varchar(30) NOT NULL DEFAULT '',
  `last_dona_date` datetime DEFAULT NULL,
  `club_id` varchar(20) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors_info`
--

INSERT INTO `donors_info` (`id`, `name`, `gender`, `blood_group`, `dob`, `phone`, `alt_phone`, `email`, `division_id`, `district_id`, `thana_id`, `area`, `pwd`, `sts`, `last_dona_date`, `club_id`, `created_at`, `updated_at`) VALUES
(1, 'Mojahid Rafi', 'Male', 'B positive', '2000-01-30', '01843885002', '', 'rafi@gmail.com', 'Chittagong', 'Bagerhat', 'banani', 'Mohammadpur', 'rafi@123', 'Ready', NULL, '', '2023-06-17 17:44:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) NOT NULL,
  `Feedback` text NOT NULL,
  `Createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updatedat` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

DROP TABLE IF EXISTS `request_blood`;
CREATE TABLE IF NOT EXISTS `request_blood` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Request_From` varchar(50) NOT NULL,
  `The_Date` datetime DEFAULT NULL,
  `Patient_Name` varchar(50) NOT NULL,
  `Blood_Group` varchar(15) NOT NULL,
  `No_of_Unit` int(11) NOT NULL,
  `Donation_Date` datetime DEFAULT NULL,
  `Days_Left` int(11) NOT NULL DEFAULT 0,
  `Loc_Info` varchar(150) NOT NULL,
  `Create_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Update_At` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thana`
--

DROP TABLE IF EXISTS `thana`;
CREATE TABLE IF NOT EXISTS `thana` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `District_ID` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(150) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updatedat` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
