-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 08:00 PM
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
-- Database: `sonomorphia`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacting`
--

CREATE TABLE `contacting` (
  `firstname` varchar(75) NOT NULL,
  `lastname` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacting`
--

INSERT INTO `contacting` (`firstname`, `lastname`, `email`, `subject`, `message`) VALUES
('Test', 'Test', 'test@test.com', 'Test', 'Je fais un test.'),
('Bon', 'Bon', 'Bon@bon.com', 'Alors', 'Testons.'),
('Lisa', 'Test', 'lisa@testing.com', 'ok', 'dssdg'),
('pddvs', 'mdsjv', 'lisa@lisa.com', 'cjwdff', 'hello :)'),
('dfgdfd', 'fvgwgvfwv', 'lisabb@sdffg.com', 'sddf', 'coucou :)'),
('dssfg', 'dfgfb', 'dfd', 'fdf', 'ok'),
('fdffv', 'bfgbgb', 'fefrferfrfr', 'dfzrfh', 'fdsd'),
('fdffv', 'bfgbgb', 'fefrferfrfr', 'dfzrfh', 'fdsd'),
('fdf', 'dffv', 'fvf', 'vfdv', 'vfv');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`query`) VALUES
('Je pose une question...'),
('Re-test'),
('Je pose quelque chose là...'),
('Je pose une question, eh oui encore...'),
('Je pose une question, eh oui encore...');

-- --------------------------------------------------------

--
-- Table structure for table `users_list`
--

CREATE TABLE `users_list` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `adresse_livraison` varchar(100) NOT NULL,
  `date_naissance` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numero_de_tel` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_list`
--

INSERT INTO `users_list` (`id`, `username`, `firstname`, `lastname`, `adresse_livraison`, `date_naissance`, `email`, `numero_de_tel`, `password`, `image`) VALUES
(15, 'ok', 'li', 'bou', 'allée de la république', '2024-01-11', 'ok@ok.com', '0632569800', '$2y$10$qx/UsRiEnUxlCLTAieuAlu5atyB8nKMZsoflXd8TlLnd2HVcw5h3W', ''),
(16, 'polo', 'polo', 'boulo', 'allée maurice ravel', '2024-01-02', 'polo@polo.com', '0792384500', '$2y$10$9zRj8vbPOC1PlGGfX1Ss9.dcb.8jlCvDCmlIRiRSxbxnDgZyXUdSy', ''),
(17, 'papa', 'papa', 'boubou', 'allée des champs', '2024-01-02', 'papa@papa.com', '0000', '$2y$10$L6r22LWQQUSvrnIFlo/6Rek40QIQPvzWkqGEv0QYtodQ2VgWTL2YW', ''),
(18, '', '', '', '', '', '', '', '', ''),
(19, 'yanis', 'yanis', 'polo', 'allée de la liberté', '2024-01-06', 'yanis@yanis.com', '05566543', '$2y$10$YYjJzbQVcajiefVakQDG8ecOA8IiBOcmp1lpJpEedpaeHbzz13I62', ''),
(20, '', '', '', '', '', '', '', '', ''),
(21, 'moi', 'moi', 'moi', 'moi', '2024-01-07', 'moi@moi.com', '07', '$2y$10$uU2fJQ0UFenD9p7rHGYWXOtPLDD6Y6WRgS0MTL/4GNXvadAGLJDg6', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_list`
--
ALTER TABLE `users_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_list`
--
ALTER TABLE `users_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
