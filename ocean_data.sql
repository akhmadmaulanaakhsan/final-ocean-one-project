-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2023 at 05:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `ocean_data`
--

CREATE TABLE `ocean_data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `action_url` varchar(255) DEFAULT NULL,
  `action_button_label` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ocean_data`
--

INSERT INTO `ocean_data` (`id`, `title`, `description`, `action_url`, `action_button_label`) VALUES
(1, 'Save Our Oceans, Save Our Planet: Act Now to Tackle Plastic Pollution!', 'Join the fight against plastic pollution today and emphasizing that it is our collective responsibility to protect the oceans and the planet.', '#', 'Take Action'),
(2, 'Reduce Plastic Pollution: Unleash the Power of Change for a Cleaner Tomorrow', 'Ignite the movement, break free from plastic, and reclaim our earth.', '#', 'Get Involved'),
(3, 'Safeguarding Marine Marvels: Unleashing the Power to Protect Marine Life', 'Dive into action, embrace conservation, and preserve the wonders of the sea.', '#', 'Learn More'),
(4, 'Ignite Change: Promote Sustainability for a Thriving Future', 'Embrace the power of sustainability and shape a thriving future for all.', '#', 'Join Movement'),
(5, 'Preserve the Environment: Unleash the Power of Conservation for a Sustainable Future', 'Embrace the call to action and unleash the power of conservation for a sustainable future.', '#', 'Support Now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ocean_data`
--
ALTER TABLE `ocean_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ocean_data`
--
ALTER TABLE `ocean_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
