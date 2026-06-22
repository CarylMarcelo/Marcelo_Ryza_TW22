-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 06:02 AM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doginformation`
--

CREATE TABLE `doginformation` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `breed` varchar(50) NOT NULL,
  `age` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `color` varchar(30) NOT NULL,
  `height` varchar(30) NOT NULL,
  `weight` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doginformation`
--

INSERT INTO `doginformation` (`id`, `name`, `breed`, `age`, `address`, `color`, `height`, `weight`) VALUES
(13, 'Bella', 'French Bulldog', '2 years old', 'Unit 14B, East Tower, Condominium Drive, Brgy. San Antonio, Pasig City, Metro Manila', 'Brindle', '12', '22'),
(14, 'Max', 'Golden Retriever', '3 years old', 'Block 5 Lot 12, Acacia Street, Brgy. San Lorenzo, Makati City, Metro Manila', 'Golden / Honey', '24', '70'),
(15, 'Bella', 'French Bulldog', '2 years old', 'Unit 14B, East Tower, Condominium Drive, Brgy. San Antonio, Pasig City, Metro Manila', 'Brindle', '12', '22'),
(16, 'Rocky', 'German Shepherd', '5 years old', '45 Katipunan Avenue, Brgy. Loyola Heights, Quezon City, Metro Manila', 'Black and Tan', '26', '82'),
(17, 'Luna', 'Siberian Husky', '1 year old', '102 Magsaysay Street, Brgy. Bangkal, Davao City, Davao del Sur', 'White and Gray', '22', '45'),
(18, 'Milo', 'Poodle (Toy)', '4 years old', '18 Remedios Street, Brgy. 699, Malate, Manila, Metro Manila', 'Apricot', '10', '8'),
(19, 'Daisy', 'Beagle', '6 years old', 'Lot 3 Block 2, Sampaguita Lane, Greenview Subdivision, Brgy. San Vicente, Tarlac City, Tarlac', 'Tricolor (White, Black, and Br', '14', '25'),
(20, 'Zeus', 'Great Dane', '4 years old', '77 Gorordo Avenue, Brgy. Lahug, Cebu City, Cebu', 'Fawn', '32', '140'),
(21, 'Coco', 'Shih Tzu', '7 years old', 'Block 9 Lot 4, P. Burgos Street, Brgy. Guadalupe Nuevo, Makati City, Metro Manila', 'Chocolate and White', '9.5', '12'),
(22, 'Buster', 'Boxer', '3 years old', '56 Rizal Street, Brgy. Poblacion, Cagayan de Oro City, Misamis Oriental', 'Fawn with White markings', '23', '65'),
(23, 'Penny', 'Pembroke Welsh Corgi', '2 years old', 'Unit 302, Vista Verde Townhomes, Imelda Avenue, Brgy. San Isidro, Cainta, Rizal', 'Orange and White', '11', '28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doginformation`
--
ALTER TABLE `doginformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doginformation`
--
ALTER TABLE `doginformation`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
