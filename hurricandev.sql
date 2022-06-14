-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 08:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hurricandev`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about`) VALUES
('     We are responsible for designing, coding  and modifying websites,android applications,  games \r\n        from layout to function and according to  your specifications. We strive to create   visually \r\n        appealing sites that feature user-friendly  design and clear navigation.\r\n\r\n        Our services are unique combination of  user-friendly design and strong   internet  marketing \r\n        plans. We take care of every  aspect of  website  design from  programming,  copywriting  and \r\n        graphic design to complete development of your website.\r\n\r\n        We Hurrican Developers provides high quality  on site services for software  development  and \r\n        the end users on a broad range of hardware & software platforms and latest technologies.\r\n\r\n        We at Hurrican Developers believe in teamwork. With every new day the quest for acquiring new\r\n        competencies continues. Forever searching, experimenting, innovating, learning, moving  ahead \r\n        with our sincere efforts and dedication, shaping the future, and challenging our competencies\r\n        to create new opportunities, is a never-ending process in the company.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `email` text DEFAULT NULL,
  `dob` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `PASSWORD`, `email`, `dob`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '30/12/2000');

-- --------------------------------------------------------

--
-- Table structure for table `admin_request`
--

CREATE TABLE `admin_request` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `PASSWORD` text NOT NULL,
  `email` text DEFAULT NULL,
  `dob` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_request`
--

INSERT INTO `admin_request` (`id`, `name`, `PASSWORD`, `email`, `dob`) VALUES
(1, 'Muhammad Anas', '1234', 'muhammad.anas.sh@hotmail.com', '2021-05-02'),
(7, 'anas', '533523', 'superior@gmail.com', '30/12/2000');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `role` text NOT NULL,
  `city` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `phone`, `email`, `role`, `city`, `message`) VALUES
(1, 'Muhammad Anas', '03004872611', 'muhammad.anas@gmail.com', 'Seller', 'Muridke', 'I am a web developer and I want to work for you remotely, kindly contact me.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` text NOT NULL,
  `service_prc` int(11) NOT NULL,
  `service_discount` text DEFAULT NULL,
  `service_discription` text DEFAULT NULL,
  `image_path` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_request`
--
ALTER TABLE `admin_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_request`
--
ALTER TABLE `admin_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
