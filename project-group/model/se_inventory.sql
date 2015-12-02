-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2015 at 04:56 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se_inventory`
--
CREATE DATABASE IF NOT EXISTS `se_inventory` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `se_inventory`;

-- --------------------------------------------------------

--
-- Table structure for table `se_inventory_equipment`
--

CREATE TABLE IF NOT EXISTS `se_inventory_equipment` (
  `equipment_id` int(10) NOT NULL,
  `equipment_name` varchar(100) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `laboratory_id` int(10) NOT NULL,
  `purchase_date` date NOT NULL,
  `safety_requirement` varchar(100) NOT NULL,
  PRIMARY KEY (`equipment_id`),
  KEY `laboratory_id` (`laboratory_id`),
  KEY `laboratory_id_2` (`laboratory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `se_inventory_labs`
--

CREATE TABLE IF NOT EXISTS `se_inventory_labs` (
  `lab_id` int(10) NOT NULL,
  `lab_name` varchar(100) NOT NULL,
  PRIMARY KEY (`lab_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `se_inventory_transaction`
--

CREATE TABLE IF NOT EXISTS `se_inventory_transaction` (
  `transaction_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `equipment_id` int(10) NOT NULL,
  `date_borrowed` date NOT NULL,
  `date_returned` date NOT NULL,
  `date_to_be_return` date NOT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `se_inventory_users`
--

CREATE TABLE IF NOT EXISTS `se_inventory_users` (
  `user_id` int(10) NOT NULL,
  `user_name` int(50) NOT NULL,
  `user_group` enum('STUDENT','FACULTY','ADMIN','') NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
--Table structure for table `safety_requirement`
--
CREATE TABLE IF NOT EXISTS `se_inventory_faults` (
  `equipment_id` int(10) NOT NULL PRIMARY KEY,
  `equipment_name` varchar(100) NOT NULL,
  `laboratory_id` int(10) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date_of_damage` date NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
