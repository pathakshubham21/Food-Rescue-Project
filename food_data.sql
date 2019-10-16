-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 08:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_data`
--

CREATE TABLE `food_data` (
  `Name` varchar(50) NOT NULL,
  `Owner NameTime` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `About` varchar(500) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Mobile Number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_data`
--

INSERT INTO `food_data` (`Name`, `Owner NameTime`, `Time`, `Image`, `Price`, `About`, `Location`, `Mobile Number`) VALUES
('Roti', 'Mayank', '9:30', 'roti.jpg', '100', 'Home made tasty roti', 'Phagwara cant', '9621254911'),
('Rice', 'Akshit Pamecha', '1:30', 'rice.jpg', '100', 'Home made basmati rice in Gujrati style', 'Lucknow', '9935277632'),
('Mix Veg', 'Shubham Pathak', '5:30', 'mix veg.jpg', '50', 'Fried in ghee and taste is too good.', 'Delhi', '8009259321'),
('Daal', 'Robin', '12:10', 'daal.jpg', '120', 'tasty home made arhar daal.', 'Mohali', '09409170187'),
('Ladoo', 'riya', '1:15', 'laddu.jpg', '2', 'fresh ladoo home made', 'Model Town', '9978056543'),
('Kheer', 'Simran', '10:00', 'kheer.jpg', '20', 'kashmeeri kheer spacial\r\nmade in dry fruit.', 'Phagwara', '9773039684'),
('Aloo Pratha', 'Rohit', '1:15', 'aloo pratha.jpg', '40', 'Aloo Pratha made in punjabi style.', 'Phagwara', '8800112233'),
('samosa', 'anita', '11:02', 'samosa.jpg', '4', 'freshly prepared homemade samosa ready to eat', 'railway colony', '89753256747'),
('Matter Paneer', 'jyoti', '11:05', 'mater paneer.jpg', '20', 'freshly prepared mutter paneer homemade', 'doctor colony', '1234567890'),
('Mix Veg', 'jyotika', '11:05', 'mix veg.jpg', '15', 'freshly prepared mix veg homemade', 'police colony', '1234567890'),
('Gulaab Jamun', 'Satty', '12:33', 'gulaab jamun.jpg', '8', 'prepared in desi ghee', 'bakarganz', '136547945612'),
('Rice', 'Robin', '10:10AM', 'rice.jpg', '199', 'Home made Basmati Rice.', 'Pahadi', '9501070700');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
