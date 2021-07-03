-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Jul-2021 às 03:25
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rgb_gallery`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `images`
--

INSERT INTO `images` (`id`, `title`, `path`) VALUES
(1, 'Ferrari F40', 'car1.jpg'),
(2, 'Lamborghini Aventador', 'car2.jpg'),
(3, 'BWM i8', 'car3.jpg'),
(4, 'Patagonia', 'landscape1.jpg'),
(5, 'Green fields', 'landscape2.jpg'),
(6, 'A child watching a plane take off', 'plane1.jpg'),
(7, 'The view from an airplane window', 'plane2.jpg'),
(8, 'Boeing 737 cockpit', 'plane3.jpg'),
(9, 'Boeing 777', 'plane4.jpg'),
(10, 'Somewhere in deep space', 'space1.png'),
(11, 'The Milk Way', 'space2.jpg'),
(12, 'The Earth', 'space3.jpg'),
(13, 'Spaceship in Earth orbit', 'space4.jpg'),
(14, 'Sci-Fi spaceship in Earth orbit', 'space5.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
