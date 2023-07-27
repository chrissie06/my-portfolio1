-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 12:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_info`
--

CREATE TABLE `about_info` (
  `id` int(11) NOT NULL,
  `section_type` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_info`
--

INSERT INTO `about_info` (`id`, `section_type`, `title`, `description`, `image_path`, `name`, `role`) VALUES
(1, 'facts', 'Facts', 'We sell Avon products according to your skin type. Every product is always available for purchase. We also recruit people to join Avon business.', '', NULL, NULL),
(2, 'facts', 'Clients', '232', '', NULL, NULL),
(3, 'facts', 'Products', '521', '', NULL, NULL),
(4, 'facts', 'Hours Of Support', '1463', '', NULL, NULL),
(5, 'facts', 'Recruited', '15', '', NULL, NULL),
(6, 'testimonials', 'Testimonials', 'We will be glad to work with you all with our trusted services. Check out some of the reviews and feedbacks from our valued customers below:', '', NULL, NULL),
(7, 'testimonials', 'Fundo Villian', 'Ndine osangalala ndi okondwa kwambiri ndi katundu wa mayi Chrissie. Ndiwo ndiwabwino modabwitsa.', 'assets/img/testimonials/testimonials-1.jpg', NULL, NULL),
(8, 'testimonials', 'Melisa Danwood', 'I purchased sunscreen, and my screen problems been really improved.', 'assets/img/testimonials/testimonials-2.jpg', NULL, NULL),
(9, 'testimonials', 'Faith Tipoti', 'I got recruited to join the Avon family. This is the best decision that I have ever made. And I am now able to support myself and my family.', 'assets/img/testimonials/testimonials-3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `location`, `email`, `phone`) VALUES
(1, 'Area 24, Lilongwe', 'chrissiekhowoya@gmail.com', '+265 99 45 11 371');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_items`
--

CREATE TABLE `portfolio_items` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_items`
--

INSERT INTO `portfolio_items` (`id`, `image_path`, `title`, `description`, `category`) VALUES
(1, 'assets/img/portfolio/portfolio-1.jpg', 'Spray', 'Far Away Spray', 'app'),
(2, 'assets/img/portfolio/portfolio-2.jpg', 'Tea', 'Honey Flavored Tea-bags', 'web'),
(3, 'assets/img/portfolio/portfolio-4.jpg', 'Glasses', 'Sun-glasses', 'card'),
(4, 'assets/img/portfolio/portfolio-5.jpg', 'Spray', 'Perfume', 'web'),
(5, 'assets/img/portfolio/portfolio-6.jpg', 'Make-up', 'Foundation', 'app'),
(6, 'assets/img/portfolio/portfolio-7.jpg', 'Spray', 'Rebel', 'card');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_info`
--
ALTER TABLE `about_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_info`
--
ALTER TABLE `about_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio_items`
--
ALTER TABLE `portfolio_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
