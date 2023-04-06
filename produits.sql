-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 04:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `image`, `nom`, `prix`, `description`) VALUES
(1, 'logo.jpg', 'Tshirt', 20, 'La Derniere Marque dans la collection ZARA.'),
(2, 'logo.jpg', 'HG', 10, 'nouveau collection'),
(3, 'logo.jpg', 'T-shirts Logos', 10, 'Des Logos Optimisés Pour votre Collection des T-shirst '),
(4, 'logo.jpg', 'T-shirts Logos', 10, 'Des Logos Optimisés Pour votre Collection des T-shirst '),
(5, 'logo.jpg', 'T-shirts Logos', 10, 'Des Logos Optimisés Pour votre Collection des T-shirst '),
(9, '', 'HG', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
