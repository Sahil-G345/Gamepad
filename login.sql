-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2023 at 12:13 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_shop`
--

-- --------------------------------------------------------

--
CREATE TABLE `users` (
  `Sr_no` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `User` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Cpass` varchar(100) NOT NULL,
  `Number` int(10) NOT NULL,
  `AD` varchar(100) NOT NULL,
  `Pin` int(6) NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- Table structure for table `order_info`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Sr_no`);

ALTER TABLE `users`
  MODIFY `Sr_no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

INSERT INTO `users`(`Sr_no`,`Name`,`Email`,`User`,`Pass`,`Cpass`,`Number`,`AD`,`Pin`,`role`) VALUES 
(1,'Paritosh','paritosh@gmail.com','Paritosh','admin@123','admin@123',1234567891,'Nashik',422010,0);

DROP TABLE IF EXISTS `product_info`;
CREATE TABLE IF NOT EXISTS `product_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(200) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_img` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `product_info` (`id`, `product_name`, `product_price`, `product_img`) VALUES
(1,'Sony PS5 DualSense Wireless Controller',5990,'product1'),
(2,'Readgear Elite v2 Wireless Gamepad,Black',1049,'product2'),
(3,'Microsoft X Box Series X/S Wireless Controller with USB-C Cable-black',9390,'product3');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
