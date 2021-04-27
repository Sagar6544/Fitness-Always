-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 26, 2021 at 10:14 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitnessalways`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `city_id` varchar(20) NOT NULL,
  `state_id` varchar(20) NOT NULL,
  `profile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `mobile`, `email`, `dob`, `gender`, `city_id`, `state_id`, `profile`) VALUES
(1, 'Sagar Thakur', 'Lumpinni Place Sathorn, 124 Naradhiwat Rajanagarindra Rd, Thung Wat Don, Sathon, Bangkok 10120', '0892763289', 'sagarthakur@gmail.com', '17-4-1998', 'Male', '200', '300', ''),
(2, 'Sinjan Pokharel', 'Bella Serviced Apaertment, 4 Soi Naradhiwas Rajanagarindra 10, Thung Wat Don, Sathon, Bangkok 10120', '0678792631', 'sinjanpokharel@gmail.com', '12-1-1996', 'Male', '200', '300', ''),
(998, 'werwer', 'werwer', '23425656', 'werwer', '565665', 'sdfgf', '100', '200', 'dcxvdgd56');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `member_code` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `state`, `city`, `pincode`, `address`) VALUES
(1, '400', '300', '1179882', 'Empire Tower'),
(2, '400', '300', '1179882', 'Sukumvit');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `city`) VALUES
(100, 200, 'Pokhara'),
(200, 300, 'Kathmandu'),
(300, 400, 'Bangkok');

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `winner` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `diet` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `member_code` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `state_id` varchar(3) NOT NULL,
  `city_id` varchar(5) NOT NULL,
  `SSN` varchar(20) NOT NULL,
  `medical` varchar(3) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tel` varchar(10) NOT NULL,
  `join_date` date NOT NULL,
  `diet` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `member_code`, `name`, `address`, `email`, `dob`, `gender`, `state_id`, `city_id`, `SSN`, `medical`, `tel`, `join_date`, `diet`, `image`) VALUES
(5, 999999, 'Aman Pathak', 'Asleep Sathorn ', 'aman@gmail.com', '2000-02-01', 'M', '300', '200', '99988898', 'Ok', '0987654321', '2020-02-03', 'Chicken', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `shift` varchar(20) NOT NULL,
  `branch_id` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `address`, `contact`, `gender`, `shift`, `branch_id`, `experience`) VALUES
(123, 'Chintan Vyaz', 'SSV Service Apartment', '098765454', 'Male', 'Morning', '1', '4 Years'),
(124, 'Prajesh Bhut', 'Silom Road', '0977866754', 'Male', 'Evening', '1', '2 Years');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(200, 'Gandaki'),
(300, 'Bagmati'),
(400, 'Bangkok');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `specialities` varchar(50) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `branch_id`, `name`, `address`, `gender`, `contact`, `specialities`, `experience`, `age`) VALUES
(765, 2, 'Marko Niimaki', 'Webster University Thailand', 'Male', '0654321621', 'Heavy Lifting', '10 Years', '45');

-- --------------------------------------------------------

--
-- Table structure for table `workout`
--

CREATE TABLE `workout` (
  `class_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `room` varchar(100) NOT NULL,
  `seats` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workout`
--

INSERT INTO `workout` (`class_id`, `title`, `description`, `start_time`, `end_time`, `room`, `seats`) VALUES
(121, 'Zumba', 'Swimming Excercise', '12:00:00', '14:00:00', 'Swimming Pool 3', 20),
(324, 'Fast Fat Loss', 'Extensive Fat Loss by Cycling', '16:00:00', '18:00:00', 'Cycling Room 1', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workout`
--
ALTER TABLE `workout`
  ADD PRIMARY KEY (`class_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
