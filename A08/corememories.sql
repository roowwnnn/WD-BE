-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 05:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'balete.jpg', 'My 1st Bike Adventure.', NULL),
(2, 1, 'balete (2).jpg', 'View of Balete Lake', NULL),
(3, 1, 'batosprings.jpg', 'Road Trip to Dolores, Quezon.', NULL),
(4, 1, 'driving.jpg', 'Going somewhere.', NULL),
(5, 1, 'manaoag.jpg', 'Off to Manaoag Church.', NULL),
(6, 1, 'marianorchard.jpg', '@Marian Orchard.', NULL),
(7, 1, 'roadtrip.jpg', 'Solo Road Trip.', NULL),
(8, 1, 'sanpablolake (2).jpg', 'Solo Ride.', NULL),
(9, 1, 'sanpablolake.jpg', 'Bike adventures going to San Pablo, Laguna.', NULL),
(10, 1, 'sanildefonso.jpg', 'A calm and relaxing view of San Ildefonso, Bulacan.', NULL),
(11, 1, 'sanpablolake (3).jpg', 'Back again @San Pablo Lake.', NULL),
(12, 1, 'sanpablolake (4).jpg', 'Back again @San Pablo Lake.', NULL),
(13, 1, 'somewhere.jpg', 'Where am I?', NULL),
(14, 1, 'somewhere (2).jpg', 'A beautiful view.', NULL),
(15, 1, 'somewhere (3).jpg', 'Where it all started.', NULL),
(16, 1, 'sunset.jpg', 'A beautiful ending.', NULL),
(17, 2, 'vampire.jpg', 'Wished I was a kid a again with no problems.', NULL),
(18, 2, 'shades.jpg', 'eyy angas.', NULL),
(19, 2, 'grad.jpg', 'After 12 years in the making.', NULL),
(20, 2, 'medals.jpg', 'hakot awardee yarn?', NULL),
(21, 2, 'college_era.jpg', 'Sinta.', NULL),
(22, 2, 'christmasszn.jpg', 'Christmas Season 2022', NULL),
(23, 2, 'drive.jpg', 'Saan ka punta? To the moon, Road Trip, Vroom Vroom.', NULL),
(24, 2, 'christmassznwithher.jpg', '1st Christmas Season with her.', NULL),
(25, 2, 'ako.jpg', 'Anong iniisip mo bata?', NULL),
(26, 3, 'newyear2024.jpg', 'New Year 2024 (Incomplete :<)', NULL),
(27, 3, 'newyear2024 (2).jpg', 'New Year 2024 (Incomplete :<)', NULL),
(28, 3, 'bulacan.jpg', 'Ramos Family @ Bulacan.', NULL),
(29, 3, 'bulacan (2).jpg', 'Ramos Family @ Bulacan.', NULL),
(30, 3, 'wedding.jpg', 'Wedding of Kuya Ian.', NULL),
(31, 3, 'wedding (2).jpg', 'Wedding of Kuya Ian.', NULL),
(32, 3, 'wedding (3).jpg', 'Wedding of Kuya Ian.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Adventure Island', 'Island that contains some of my memorable adventures in life.', NULL, 'ffba1e,029ac3', NULL, 'active'),
(2, 'Nostalgia Island', 'Island that contains all my memorable moments.', NULL, 'd9c6c6,44486c', NULL, 'active'),
(3, 'Family Island', 'Island that contains all my memorable moments with my family.', NULL, 'F5F5F5,F6A1AC', NULL, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
