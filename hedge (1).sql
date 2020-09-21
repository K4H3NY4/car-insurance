-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 11:39 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hedge`
--

-- --------------------------------------------------------

--
-- Table structure for table `private`
--

CREATE TABLE `private` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `reg_number` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `chasis_number` varchar(255) NOT NULL,
  `kra_pin` varchar(255) NOT NULL,
  `vehicle_value` varchar(255) NOT NULL,
  `year_manufacture` varchar(255) NOT NULL,
  `excess_protection` varchar(255) NOT NULL,
  `political_violence` varchar(255) NOT NULL,
  `loss_of_use` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `premium_total` varchar(255) NOT NULL,
  `current_status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `private`
--

INSERT INTO `private` (`id`, `names`, `reg_number`, `phone_number`, `email`, `id_number`, `chasis_number`, `kra_pin`, `vehicle_value`, `year_manufacture`, `excess_protection`, `political_violence`, `loss_of_use`, `company`, `premium_total`, `current_status`, `created_at`) VALUES
(1, 'john', '', '', 'kahenyaa@gmail.com', '33222952', 'ERY5477', 'RERYWR7578238', '750000', '2018', '1', '1', '', 'Pacis', '', 'Complete', '2020-06-11 00:31:05'),
(2, 'john', '', '', 'kahenyaa@gmail.com', '33222952', 'ERY5477', 'RERYWR7578238', '750000', '2018', '1', '1', '', 'Pacis', '', 'Complete', '2020-06-16 15:49:51'),
(3, 'john', '', '', 'kahenyaa@gmail.com', '33222952', 'RTWT57657RT', 'GFFDEW363', '750000', '2020', '1', '1', '1', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(4, 'john', '', '', 'kahenyaa@gmail.com', '33222952', 'RTWT57657RT', 'GFFDEW363', '750000', '2020', '1', '1', '1', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(5, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '786265', '2020', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(6, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '786265', '2020', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(7, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '786265', '2020', '0', '0', '0', 'Pacis', '', 'Canceled', '2020-06-11 00:01:59'),
(8, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '786265', '2020', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(9, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '786265', '2020', '0', '0', '0', 'Pacis', '', 'Canceled', '2020-06-11 00:03:04'),
(10, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Canceled', '2020-06-11 00:08:18'),
(11, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(12, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(13, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(14, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(15, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(16, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(17, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(18, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(19, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(20, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(21, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(22, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(23, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '', 'Pending Payment', '2020-06-08 00:10:58'),
(24, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '34000', 'Pending Payment', '2020-06-08 00:10:58'),
(25, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '34000', 'Pending Payment', '2020-06-08 00:10:58'),
(26, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '55250', 'Pending Payment', '2020-06-08 00:10:58'),
(27, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '55250', 'Pending Payment', '2020-06-08 00:10:58'),
(28, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '55250', 'Pending Payment', '2020-06-08 00:10:58'),
(29, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '55250', 'Pending Payment', '2020-06-08 00:10:58'),
(30, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '55250', 'Pending Payment', '2020-06-08 00:10:58'),
(31, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '0', '0', 'Pacis', '55250', 'Pending Payment', '2020-06-08 00:10:58'),
(32, '', '', '07004189377', 'kahenyaa@gmail.com', '', '', '', '850000', '', '0', '{ 0}', '0', 'Pacis', '55250', 'Canceled', '2020-06-11 00:30:30'),
(33, 'john', '', '0770128820', 'kahenyaa@gmail.com', '332200', 'excess', 'added', '785000', '2015', '3000', '{ 5000}', '3000', 'Pacis', '51025', 'Pending Payment', '2020-06-08 00:10:58'),
(34, 'john', '', '0770128820', 'kahenyaa@gmail.com', '332200', 'excess', 'added', '785000', '2015', '3000', '{ 5000}', '3000', 'Pacis', '44362.5', 'Pending Payment', '2020-06-08 00:10:58'),
(35, 'john', '', '0770128820', 'kahenyaa@gmail.com', '33222952', '4364TERTYER', 'YEYERY5477', '985000', '2020', '3000', '5000', '3000', 'Pacis', '52862.5', 'Pending Payment', '2020-06-08 00:10:58'),
(36, '', '', '0770313516', 'test@test.com', '', '', '', '1500000', '2020', '3000', '5250', '3000', 'Pacis', '71250', 'Pending Payment', '2020-06-08 00:10:58'),
(37, '', '', '0770313516', 'test@test.com', '', '', '', '1500000', '2020', '3000', '5250', '3000', 'Pacis', '71250', 'Pending Payment', '2020-06-08 00:10:58'),
(38, '', '', '0770313516', 'test@test.com', '', '', '', '1500000', '2020', '3000', '5250', '3000', 'Pacis', '71250', 'Pending Payment', '2020-06-08 00:10:58'),
(39, '', 'kcw 123e', '01000450548', 'sales@printboxgraphics.com', '', '', '', '850000', '2020', '0', '0', '0', 'Pacis', '36125', 'Pending Payment', '2020-06-15 04:01:50'),
(40, '', '', '0700419377', 'test1@test.com', '', '', '', '850000', '', '2500', '2500', '0', 'Trident', '34750', 'Pending Payment', '2020-06-08 00:10:58'),
(41, '', '', '6546414656', 'test@test.com', '', '', '', '800000', '', '0', '0', '0', 'Trident', '28000', 'Complete', '2020-06-15 01:10:01'),
(42, '', '', '849841654165', 'sales@printboxgraphics.com', '', '', '', '1200000', '2020', '3000', '3000', '0', 'Trident', '48000', 'Canceled', '2020-06-11 00:36:16'),
(43, '', '', '070004192', 'kahenyaa@gmail.com', '', '', '', '850000', '', '212500', '3000', '3000', 'Sanlam', '218500', 'Complete', '2020-06-11 00:23:15'),
(44, '', '', '070004192', 'kahenyaa@gmail.com', '', '', '', '850000', '', '212500', '3000', '3000', 'Sanlam', '252500', 'Complete', '2020-06-11 00:21:15'),
(45, '', '', '67489416541', 'kahenyaa@gmail.com', '', '', '', '850000', '', '212500', '3000', '3000', 'Sanlam', '252500', 'Complete', '2020-06-11 00:14:41'),
(46, '', '', '968941654416', 'test1@test.com', '', '', '', '850000', '', '3000', '3000', '3000', 'Sanlam', '43000', 'Complete', '2020-06-11 00:19:49'),
(47, '', '', '56489418656', 'test@test.com', '', '', '', '500000', '', 'Free', 'Free', 'N/A', 'GA Insurance', '20000', 'Complete', '2020-06-11 00:20:20'),
(48, '', '', '49645562', 'test@test.com', '', '', '', '8500000', '', '0', '0', 'N/A', 'Trident', '297500', 'Complete', '2020-06-11 00:20:51'),
(49, 'private', '', '461156', 'ncrismie@yahoo.com', '', '', '', '750000', '', '0', '0', '0', 'Pacis', '31875', 'Complete', '2020-06-10 23:55:12'),
(50, 'John Kinyanjui', 'KCW 123E', '0700419377', 'kahenyaa@gmail.com', '33222952', 'DFR4455', 'FFG545245', '850000', '2020', '3000', '3000', '3000', 'Sanlam', '43000', 'Complete', '2020-06-16 16:22:33'),
(51, 'Kinyanjui Kahenya', 'KAA 943T', '0770128820', 'kahenyaa@gmail.com', '33222952', 'DFR4455', 'FFG545245', '1200000', '2018', 'Free', 'Free', 'N/A', 'GA Insurance', '42000', 'Complete', '2020-06-16 16:15:14'),
(52, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '750000', '2018', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:24:27'),
(53, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '750000', '2018', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:25:49'),
(54, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '750000', '2018', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:31:21'),
(55, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '750000', '2018', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:36:05'),
(56, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '750000', '2018', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:36:36'),
(57, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '750000', '2018', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:36:43'),
(58, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:37:39'),
(59, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:37:43'),
(60, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:42:01'),
(61, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:44:06'),
(62, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:49:51'),
(63, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:50:07'),
(64, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 11:52:58'),
(65, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 12:16:46'),
(66, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 12:18:07'),
(67, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 12:18:34'),
(68, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 12:19:52'),
(69, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 12:20:05'),
(70, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 12:21:24'),
(71, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 12:21:53'),
(72, '', '', '0700419377', 'php.dev.js@gmail.com', '', '', '', '750000', '', '2500', '2500', 'N/A', 'Trident', '31250', 'Pending Payment', '2020-06-16 12:21:57'),
(73, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '500000', '', '0', '0', '0', 'Pacis', '25000', 'Canceled', '2020-06-16 16:43:40'),
(74, '', '', '0711999111', 'test3@test.com', '', '', '', '740000', '2008', 'Free', 'Free', 'N/A', 'GA Insurance', '25900', 'Pending Payment', '2020-06-16 16:50:51'),
(75, '', '', '0759333458', 'test1@test.com', '', '', '', '630000', '2014', '0', '3000', '0', 'Sanlam', '28200', 'Canceled', '2020-06-16 16:44:27'),
(76, '', '', '24724742', 'test@test.com', '', '', '', '262575757', '', 'Free', 'Free', 'N/A', 'GA Insurance', '9190151.495', 'Pending Payment', '2020-06-17 00:07:29'),
(77, '', '', '0700419377', 'kahenyah@gmail.co', '', '', '', '900000', '2020', '0', '0', 'N/A', 'Trident', '31500', 'Pending Payment', '2020-07-14 22:26:51'),
(78, '', '', '0700419377', 'kahenyah@gmail.co', '', '', '', '900000', '2020', '0', '0', 'N/A', 'Trident', '31500', 'Pending Payment', '2020-07-14 22:27:46'),
(79, '', '', '0770128820', 'kahenyaa@gmail.com', '', '', '', '780000', '', '2500', '0', 'N/A', 'Trident', '29800', 'Pending Payment', '2020-07-14 22:35:00'),
(80, '', '', '0770128820', 'kahenyaa@gmail.com', '', '', '', '780000', '', '2500', '0', 'N/A', 'Trident', '29800', 'Pending Payment', '2020-07-14 22:35:52'),
(81, '', '', '0770128820', 'kahenyaa@gmail.com', '', '', '', '780000', '', '2500', '0', 'N/A', 'Trident', '29800', 'Pending Payment', '2020-07-14 22:35:59'),
(82, '', '', '0770128820', 'kahenyaa@gmail.com', '', '', '', '780000', '', '2500', '0', 'N/A', 'Trident', '29800', 'Pending Payment', '2020-07-14 22:46:29'),
(83, '', '', '0770128820', 'kahenyaa@gmail.com', '', '', '', '780000', '', '2500', '0', 'N/A', 'Trident', '29800', 'Pending Payment', '2020-07-14 22:47:12'),
(84, '', '', '0770128820', 'kahenyaa@gmail.com', '', '', '', '780000', '', '2500', '0', 'N/A', 'Trident', '29800', 'Pending Payment', '2020-07-14 22:49:20'),
(85, 'kinya', '', '0770128820', 'kahenyaa@gmail.com', '', '', '', '650000', '', '2500', '0', 'N/A', 'Trident', '25250', 'Pending Payment', '2020-07-14 22:54:55'),
(86, 'kinya', '', '0770128820', 'kahenyaa@gmail.com', '', '', '', '650000', '', '2500', '0', 'N/A', 'Trident', '25250', 'Pending Payment', '2020-07-14 22:56:16'),
(87, 'kinya', '', '0770128820', 'kahenyaa@gmail.com', '', '', '', '650000', '', '2500', '0', 'N/A', 'Trident', '25250', 'Pending Payment', '2020-07-14 22:57:11'),
(88, '', '', '78678978', 'php.dev.js@gmail.com', '', '', '', '67545688', '', '0', '0', 'N/A', 'Trident', '2364099.08', 'Pending Payment', '2020-07-14 23:24:20'),
(89, '', '', '78678978', 'php.dev.js@gmail.com', '', '', '', '67545688', '', '0', '0', 'N/A', 'Trident', '2364099.08', 'Pending Payment', '2020-07-14 23:28:12'),
(90, '', '', '78678978', 'php.dev.js@gmail.com', '', '', '', '67545688', '', '0', '0', 'N/A', 'Trident', '2364099.08', 'Pending Payment', '2020-07-14 23:35:57'),
(91, '', '', '78678978', 'php.dev.js@gmail.com', '', '', '', '67545688', '', '0', '0', 'N/A', 'Trident', '2364099.08', 'Pending Payment', '2020-07-14 23:39:14'),
(92, '', '', '78678978', 'php.dev.js@gmail.com', '', '', '', '67545688', '', '0', '0', 'N/A', 'Trident', '2364099.08', 'Pending Payment', '2020-07-14 23:47:03'),
(93, '', '', '78678978', 'php.dev.js@gmail.com', '', '', '', '67545688', '', '0', '0', 'N/A', 'Trident', '2364099.08', 'Pending Payment', '2020-07-14 23:49:18'),
(94, '', '', '78678978', 'php.dev.js@gmail.com', '', '', '', '67545688', '', '0', '0', 'N/A', 'Trident', '2364099.08', 'Pending Payment', '2020-07-14 23:51:12'),
(95, 'Kinyanjui Kahenya', 'KCA 454F', '0770128820', 'php.dev.js@gmail.com', '33222952', 'FERGR5644G', 'GRFRT5644', '1200000', '2020', '3000', '3000', 'N/A', 'Trident', '48000', 'Pending Payment', '2020-07-14 23:55:47'),
(96, 'Kinyanjui Kahenya', 'KCA 454F', '0770128820', 'php.dev.js@gmail.com', '33222952', 'FERGR5644G', 'GRFRT5644', '1200000', '2020', '3000', '3000', 'N/A', 'Trident', '48000', 'Pending Payment', '2020-07-15 00:00:02'),
(97, 'Kinyanjui Kahenya', 'KCA 454F', '0770128820', 'php.dev.js@gmail.com', '33222952', 'FERGR5644G', 'GRFRT5644', '1200000', '2020', '3000', '3000', 'N/A', 'Trident', '48000', 'Pending Payment', '2020-07-15 00:00:57'),
(98, 'kahenya Kinya', 'KCA 454F', '0770128820', 'php.dev.js@gmail.com', '55467734', 'HGRTRF45566', 'VFGTGT6865', '960000', '2015', '3000', '5000', '3000', 'Pacis', '51800', 'Pending Payment', '2020-07-15 00:10:22'),
(99, 'kahenya Kinya', 'KCA 454F', '0770128820', 'php.dev.js@gmail.com', '55467734', 'HGRTRF45566', 'VFGTGT6865', '960000', '2015', '3000', '5000', '3000', 'Pacis', '51800', 'Pending Payment', '2020-07-15 00:12:01'),
(100, 'Kinyanjui Kahenya', 'KJGH 464S', '07410045874', 'php.dev.js@gmail.com', '5664356', 'FGDH56675638', 'JHE6ET85', '850000', '2014', '3000', '0', '3000', 'Sanlam', '40000', 'Pending Payment', '2020-07-15 00:15:54'),
(101, 'Kinyanjui Kahenya', 'KJGH 464S', '07410045874', 'php.dev.js@gmail.com', '5664356', 'FGDH56675638', 'JHE6ET85', '850000', '2014', '3000', '0', '3000', 'Sanlam', '40000', 'Complete', '2020-07-15 00:29:52'),
(102, '', '', '07004193277', 'php.dev.js@gmail.com', '', '', '', '850000', '2020', 'Free', 'Free', 'N/A', 'GA Insurance', '29750', 'Pending Payment', '2020-07-15 00:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `private_tp`
--

CREATE TABLE `private_tp` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `reg_number` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `chasis_number` varchar(255) NOT NULL,
  `kra_pin` varchar(255) NOT NULL,
  `vehicle_value` varchar(255) NOT NULL,
  `year_manufacture` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `premium_total` varchar(255) NOT NULL,
  `first_installment` varchar(255) NOT NULL,
  `current_status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `private_tp`
--

INSERT INTO `private_tp` (`id`, `names`, `reg_number`, `phone_number`, `email`, `id_number`, `chasis_number`, `kra_pin`, `vehicle_value`, `year_manufacture`, `company`, `premium_total`, `first_installment`, `current_status`, `created_at`) VALUES
(1, '', '', '0700419377', 'kahenyaa@gmail.com', '', '', '', '5000000', '', 'Pacis', '7500', '', 'Canceled', '2020-06-16 13:24:22'),
(2, '', '', '0770128820', 'test1@test.com', '', '', '', '2000000', '', 'Sanlam', '7500', '', 'Complete', '2020-06-16 12:50:31'),
(3, '', '', '0710999111', 'test3@test.com', '', '', '', '840000', '2008', 'GA Insurance', '7500', '', 'Complete', '2020-06-16 13:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `taxis`
--

CREATE TABLE `taxis` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `idNumber` varchar(255) NOT NULL,
  `chasisNumber` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `carValue` varchar(255) NOT NULL,
  `yom` varchar(255) NOT NULL,
  `numberOfPassenger` varchar(225) NOT NULL,
  `excessProtection` varchar(255) NOT NULL,
  `politicalViolence` varchar(255) NOT NULL,
  `kraPin` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `insurancetype` varchar(255) NOT NULL,
  `cstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxis`
--

INSERT INTO `taxis` (`id`, `names`, `phone`, `email`, `idNumber`, `chasisNumber`, `company`, `carValue`, `yom`, `numberOfPassenger`, `excessProtection`, `politicalViolence`, `kraPin`, `amount`, `insurancetype`, `cstatus`) VALUES
(1, 'john', '0700419377', 'kahenyaa@gmail.com', '33322285', '667yyt66', 'TRIDENT', '850000', '2015', '3', '1', '0', 'ghgrtrurtut', '', '', ''),
(2, 'John ', '0700419377', 'kahenyaa@gmail.com', '33222952', '62622622', 'TRIDENT', '850000', '2015', '4', '0', '0', 'rterwe624645', '', 'Comprehensive', 'Pending Payment'),
(3, 'Kinyanjui', '0700419377', 'kahenyaa@gmail.com', '33222952', 'KOG678HTG', 'TRIDENT', '1200000', '2009', '4', '1', '1', 'FHTG522F52', '', 'Comprehensive', 'Pending Payment'),
(4, 'Kahenya', '0700419377', 'kahenyaa@gmail.com', '33222952', 'EWHERH53737', 'TRIDENT', '500067', '2011', '3', '1', '1', 'GRGWWTY53673563783586', '', 'Comprehensive', 'Pending Payment'),
(5, 'Kinyanjui', '0770128820', 'john@polygonlasso.co.ke', '44355377', 'RTHTE56HHTRH', 'Pacis', '1500000', '2020', '5', '1', '1', 'RTHEEHE75638568', '', 'Comprehensive', 'Pending Payment'),
(6, 'Kinyanjui', '0770128820', 'john@polygonlasso.co.ke', '44355377', 'RTHTE56HHTRH', 'Pacis', '1500000', '2020', '5', '1', '1', 'RTHEEHE75638568', '', 'Comprehensive', 'Pending Payment'),
(7, 'Kinyanjui', '0770128820', 'john@polygonlasso.co.ke', '44355377', 'RTHTE56HHTRH', 'Pacis', '1500000', '2020', '5', '1', '1', 'RTHEEHE75638568', '', 'Comprehensive', 'Pending Payment'),
(8, 'John', '0770128820', 'john@polygonlasso.co.ke', '573567357', 'SJTE5JTYJTYEJ56', 'Trident', '520000', '2008', '6', '0', '0', 'JHERUEJHEJUYH6756JJ', '', 'Comprehensive', 'Pending Payment'),
(9, 'John', '0770128820', 'john@polygonlasso.co.ke', '573567357', 'SJTE5JTYJTYEJ56', 'Trident', '520000', '2008', '6', '0', '0', 'JHERUEJHEJUYH6756JJ', '', 'Comprehensive', 'Pending Payment'),
(10, '', '0770128820', 'kahenyaa@gmail.com', '', '', 'Trident', '520000', '2016', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(11, '', '0770128820', 'kahenyaa@gmail.com', '', '', 'Trident', '520000', '2016', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(12, '', '0770128820', 'kahenyaa@gmail.com', '', '', 'Trident', '520000', '2016', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(13, '', '0770128820', 'kahenyaa@gmail.com', '', '', 'Trident', '520000', '2016', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(14, '', '0770128820', 'kahenyaa@gmail.com', '', '', 'Trident', '520000', '2016', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(15, '', '0770128820', 'kahenyaa@gmail.com', '', '', 'Trident', '520000', '2016', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(16, '', '0770128820', 'kahenyaa@gmail.com', '', '', 'Trident', '520000', '2016', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(17, '', '0770128820', 'kahenyaa@gmail.com', '', '', 'Trident', '520000', '2016', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(18, '', '375678658756', 'john@polygonlasso.co.ke', '', '', 'Pacis', '750004', '2009', '2', 'Yes', '1', '', '', 'Comprehensive', 'Pending Payment'),
(19, '', '375678658756', 'john@polygonlasso.co.ke', '', '', 'Pacis', '750004', '2009', '2', 'Yes', '1', '', '', 'Comprehensive', 'Pending Payment'),
(20, '', '5633434737', 'john@polygonlasso.co.ke', '', '', 'Pacis', '569000', '2019', '5', 'No', 'No', '', '', 'Comprehensive', 'Pending Payment'),
(21, '', '123', 'john@polygonlasso.co.ke', '', '', 'Pacis', '520000', '', '3', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(22, '', '0700419377', 'kahenyaa@gmail.com', '', 'PHP', 'Pacis', '950000', '2015', '1', '0', '0', '6346256', '', 'Comprehensive', 'Pending Payment'),
(23, '', '0700419377', 'kahenyaa@gmail.com', '', 'pacis php', 'Pacis', '750000', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(24, '', '0700419377', 'kahenyaa@gmail.com', '', 'pacis php', 'Pacis', '750000', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(25, '', '0700419377', 'kahenyaa@gmail.com', '', '', 'Pacis', '750000', '', '1', '0', '0', 'document write', '', 'Comprehensive', 'Pending Payment'),
(26, '', '26527235', 'test@test.com', '', '', 'Pacis', '782000', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(27, '', '0770128820', 'kahenyaa@gmail.com', '', 'ajax', 'Pacis', '7850000', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(28, '', '787', 'kahenyaa@gmail.com', '', 'ajax1', 'Pacis', '750000', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(29, '', '45', 'test@test.com', '', 'ajax', 'Pacis', '650000', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(30, '', '78789', 'test@test.com', '', 'ajax3', 'Pacis', '7851000', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(31, '', '3767356', 'kahenyaa@gmail.com', '', 'ajae', 'Pacis', '573273567356', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(32, '', '34636236', 'kahenyaa@gmail.com', '', '6236346', 'Pacis', '6543642346', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(33, '', '777', 'kahenyaa@gmail.com', '', '', 'Pacis', '7536375675', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(34, '', '2555254', 'kahenyaa@gmail.com', '', '', 'Pacis', '3462655', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(35, '', '2565625656', 'kahenyaa@gmail.com', '', '6256265', 'Pacis', '6423623462', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(36, '', '2565625656', 'kahenyaa@gmail.com', '', '6256265', 'Pacis', '6423623462', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(37, '', '2565625656', 'kahenyaa@gmail.com', '', '6256265', 'Pacis', '6423623462', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(38, '', '636262562', 'kahenyaa@gmail.com', '', '626562626', 'Pacis', '4236634334', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(39, '', '356737', 'test@test.com', '', '', 'Pacis', '735673567356', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(40, '', '356737', 'test@test.com', '', '', 'Pacis', '735673567356', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(41, '', '2522544', 'kahenyaa@gmail.com', '', '', 'Pacis', '2625624374', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(42, '', '25725772', 'sokobora@gmail.com', '', '', 'Trident', '5754547427427', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(43, '', '25725772', 'sokobora@gmail.com', '', '', 'Trident', '5754547427427', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(44, '', '336363', 'ncrismie@yahoo.com', '', '', 'Pacis', '234662626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(45, '', '336363', 'ncrismie@yahoo.com', '', '', 'Pacis', '234662626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(46, '', '336363', 'ncrismie@yahoo.com', '', '', 'Pacis', '234662626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(47, '', '336363', 'ncrismie@yahoo.com', '', '', 'Pacis', '234662626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(48, '', '336363', 'ncrismie@yahoo.com', '', '', 'Pacis', '234662626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(49, '', '336363', 'ncrismie@yahoo.com', '', '', 'Pacis', '234662626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(50, '', '2562624626', 'test3@test.com', '', 'taxidb', 'Trident', '2626266', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(51, '', '37377373', 'sokobora@gmail.com', '', 'taxidb1', 'Pacis', '56673567537', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(52, '', '565737357', 'test@test.com', '', 'scope', 'Pacis', '5666262', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(53, '', '45624624266', 'test@test.com', '', 'scope1', 'Pacis', '6262625652365', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(54, '', '45624624266', 'test@test.com', '', 'scope1', 'Pacis', '6262625652365', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(55, '', '26266262', 'kahenyaa@gmail.com', '', '4362346234', 'Pacis', '62345622362', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(56, '', '24274247775', 'test@test.com', '', '', 'Pacis', '573575735757', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(57, '', '5456262626', 'test@test.com', '', '', 'Pacis', '564545626262', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(58, '', '5456262626', 'test@test.com', '', '', 'Pacis', '564545626262', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(59, '', '242457224', 'kahenyaa@gmail.com', '', 'scope420', 'Pacis', '54645635632', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(60, '', '242457224', 'kahenyaa@gmail.com', '', 'scope420', 'Pacis', '54645635632', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(61, '', '2626262', 'test@test.com', '262', '62626266', 'Pacis', '54624626262', '', '1', '0', '0', '2623623', '', 'Comprehensive', 'Pending Payment'),
(62, '', '2626262', 'test@test.com', '262', '62626266', 'Pacis', '54624626262', '', '1', '0', '0', '2623623', '', 'Comprehensive', 'Pending Payment'),
(63, '', '2626262', 'test@test.com', '262', '62626266', 'Pacis', '54624626262', '', '1', '0', '0', '2623623', '', 'Comprehensive', 'Pending Payment'),
(64, '', '3573737', 'ncrismie@yahoo.com', '', '', 'Pacis', '3473737', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(65, '', '35737373', 'test@test.com', '', '', 'Pacis', '5375377373', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(66, '', '35737373', 'test@test.com', '', '', 'Pacis', '5375377373', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(67, '', '35737373', 'test@test.com', '', '', 'Pacis', '5375377373', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(68, '', '57357373', 'kahenyaa@gmail.com', '', '', 'Pacis', '45644334737', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(69, '', '57357373', 'kahenyaa@gmail.com', '', '', 'Pacis', '45644334737', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(70, '', '57357373', 'kahenyaa@gmail.com', '', '', 'Pacis', '45644334737', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(71, '', '57357373', 'kahenyaa@gmail.com', '', '', 'Pacis', '45644334737', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(72, '', '57357373', 'kahenyaa@gmail.com', '', '', 'Pacis', '45644334737', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(73, '', '66262626', 'ncrismie@yahoo.com', '', '', 'Pacis', '2626262362', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(74, '', '66262626', 'ncrismie@yahoo.com', '', '', 'Pacis', '2626262362', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(75, '', '23623623632', 'kahenyaa@gmail.com', '', '', 'Pacis', '34562346262', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(76, '', '23623623632', 'kahenyaa@gmail.com', '', '', 'Pacis', '34562346262', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(77, '', '23623623632', 'kahenyaa@gmail.com', '', '', 'Pacis', '34562346262', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(78, '', '23623623632', 'kahenyaa@gmail.com', '', '', 'Pacis', '34562346262', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(79, '', '575757577', 'kahenyaa@gmail.com', '', '', 'Pacis', '62632572357', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(80, '', '575757577', 'kahenyaa@gmail.com', '', '', 'Pacis', '62632572357', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(81, '', '575757577', 'kahenyaa@gmail.com', '', '', 'Pacis', '62632572357', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(82, '', '262626', 'kahenyaa@gmail.com', '', '', 'Pacis', '23464626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(83, '', '262626', 'kahenyaa@gmail.com', '', '', 'Pacis', '23464626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(84, '', '262626', 'kahenyaa@gmail.com', '', '', 'Pacis', '23464626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(85, '', '262626', 'kahenyaa@gmail.com', '', '', 'Pacis', '23464626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(86, '', '262626', 'kahenyaa@gmail.com', '', '', 'Pacis', '23464626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(87, '', '26262', 'kahenyaa@gmail.com', '', '', 'Pacis', '6262247', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(88, '', '26262', 'kahenyaa@gmail.com', '', '', 'Pacis', '6262247', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(89, '', '2636342626', 'kahenyaa@gmail.com', '', '', 'Pacis', '34266625626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(90, '', '2636342626', 'kahenyaa@gmail.com', '', '', 'Pacis', '34266625626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(91, '', '2636342626', 'kahenyaa@gmail.com', '', '', 'Pacis', '34266625626', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(92, '', '6724747247', 'kahenyaa@gmail.com', '', '', 'Pacis', '77373775757', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(93, '', '6724747247', 'kahenyaa@gmail.com', '', '', 'Pacis', '77373775757', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(94, '', '6724747247', 'kahenyaa@gmail.com', '', '', 'Pacis', '77373775757', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(95, '', '6724747247', 'kahenyaa@gmail.com', '', '', 'Pacis', '77373775757', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(96, '', '6724747247', 'kahenyaa@gmail.com', '', '', 'Pacis', '77373775757', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(97, '', '6724747247', 'kahenyaa@gmail.com', '', '', 'Pacis', '77373775757', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(98, '', '6724747247', 'kahenyaa@gmail.com', '', '', 'Pacis', '77373775757', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(99, '', '6724747247', 'kahenyaa@gmail.com', '', '', 'Pacis', '77373775757', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(100, '', '6724747247', 'kahenyaa@gmail.com', '', '', 'Pacis', '77373775757', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(101, '', '6724747247', 'kahenyaa@gmail.com', '', '', 'Pacis', '77373775757', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(102, '', '7373737', 'test@test.com', '', '', 'Pacis', '4534777', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(103, '', '7373737', 'test@test.com', '', '', 'Pacis', '4534777', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(104, '', '7373737', 'test@test.com', '', '', 'Pacis', '4534777', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(105, '', '7373737', 'test@test.com', '', '', 'Pacis', '4534777', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(106, '', '7373737', 'test@test.com', '', '', 'Pacis', '4534777', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(107, '', '7373737', 'test@test.com', '', '', 'Pacis', '4534777', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(108, '', '7373737', 'test@test.com', '', '', 'Pacis', '4534777', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(109, '', '7373737', 'test@test.com', '', '', 'Pacis', '4534777', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(110, '', '7373737', 'test@test.com', '', '', 'Pacis', '4534777', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(111, '', '7373737', 'test@test.com', '', '', 'Pacis', '4534777', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(112, '', '7373737', 'test@test.com', '', '', 'Pacis', '4534777', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(113, '', '35373737', 'kahenyaa@gmail.com', '', '', 'Pacis', '35237737', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(114, '', '26262262', 'test@test.com', '', '', 'Pacis', '3426234662', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(115, '', '24724752752', 'test@test.com', '', '', 'Pacis', '6224742747', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(116, '', '24724752752', 'test@test.com', '', '', 'Pacis', '6224742747', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(117, '', '2272724724', 'test@test.com', '', '', 'Pacis', '256267272', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(118, '', '2272724724', 'test@test.com', '', '', 'Pacis', '256267272', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(119, '', '26262666', 'kahenyaa@gmail.com', '', '', 'Pacis', '23466626626', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(120, '', '26262666', 'kahenyaa@gmail.com', '', '', 'Pacis', '23466626626', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(121, '', '2727272', 'kahenyaa@gmail.com', '', '', 'Pacis', '654565235237257', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(122, '', '37375237', 'kahenyaa@gmail.com', '', '', 'Pacis', '3757774', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(123, '', '37375237', 'kahenyaa@gmail.com', '', '', 'Pacis', '3757774', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(124, '', '346366', 'test@test.com', '', '', 'Pacis', '62623666', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(125, '', '346366', 'test@test.com', '', '', 'Pacis', '62623666', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(126, '', '27772', 'kahenyaa@gmail.com', '', '', 'Pacis', '262575457', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(127, '', '254227', 'kahenyaa@gmail.com', '', '', 'Pacis', '4427754', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(128, '', '254227', 'kahenyaa@gmail.com', '', '', 'Pacis', '4427754', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(129, '', '3463634', 'kahenyaa@gmail.com', '', '', 'Pacis', '34616316', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(130, '', '2546266', 'kahenyaa@gmail.com', '', '', 'Pacis', '62626262', '', '1', '0', '0', '', '', 'Comprehensive', 'Pending Payment'),
(131, '', '62363623', 'kahenyaa@gmail.com', '', '', 'Pacis', '23462346', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(132, '', '62363623', 'kahenyaa@gmail.com', '', '', 'Pacis', '23462346', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(133, '', '5423454', 'kahenyaa@gmail.com', '', '', 'Pacis', '27572372375', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(134, '', '5423454', 'kahenyaa@gmail.com', '', '', 'Pacis', '27572372375', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(135, '', '457427', 'kahenyaa@gmail.com', '', '', 'Pacis', '54472542', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(136, '', '457427', 'kahenyaa@gmail.com', '', '', 'Pacis', '54472542', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(137, '', '457427', 'kahenyaa@gmail.com', '', '', 'Pacis', '54472542', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(138, '', '234234727', 'kahenyaa@gmail.com', '', '', 'Pacis', '34264243626', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(139, '', '42724772', 'test@test.com', '', '', 'Pacis', '45742724', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(140, '', '42724772', 'test@test.com', '', '', 'Pacis', '45742724', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(141, '', '42724772', 'test@test.com', '', '', 'Pacis', '45742724', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(142, '', '42724772', 'test@test.com', '', '', 'Pacis', '45742724', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(143, '', '42724772', 'test@test.com', '', '', 'Pacis', '45742724', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(144, '', '3636326', 'kahenyaa@gmail.com', '', '', 'Pacis', '314623236', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(145, '', '3636326', 'kahenyaa@gmail.com', '', '', 'Pacis', '314623236', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(146, '', '3636326', 'kahenyaa@gmail.com', '', '', 'Pacis', '314623236', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(147, '', '33463126', 'kahenyaa@gmail.com', '', '', 'Pacis', '31262636', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(148, '', '33463126', 'kahenyaa@gmail.com', '', '', 'Pacis', '31262636', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(149, '', '33463126', 'kahenyaa@gmail.com', '', '', 'Pacis', '31262636', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(150, '', '87679869', 'ncrismie@yahoo.com', '', '', 'Pacis', '565688786786', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(151, '', '87679869', 'ncrismie@yahoo.com', '', '', 'Pacis', '565688786786', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(152, '', '56856868658', 'kahenyaa@gmail.com', '', '5685688', 'Pacis', '56858568568', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(153, '', '56856868658', 'kahenyaa@gmail.com', '', '5685688', 'Pacis', '56858568568', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(154, '', '56856868658', 'kahenyaa@gmail.com', '', '5685688', 'Pacis', '56858568568', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(155, '', '56856868658', 'kahenyaa@gmail.com', '', '5685688', 'Pacis', '56858568568', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(156, '', '56856868658', 'kahenyaa@gmail.com', '', '5685688', 'Pacis', '56858568568', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(157, '', '56856868658', 'kahenyaa@gmail.com', '', '5685688', 'Pacis', '56858568568', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(158, '', '56856868658', 'kahenyaa@gmail.com', '', '5685688', 'Pacis', '56858568568', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(159, '', '573723', 'kahenyaa@gmail.com', '', '', 'Pacis', '4244727', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(160, '', '573723', 'kahenyaa@gmail.com', '', '', 'Pacis', '4244727', '', '1', '0', '0', '', 'amount', 'Comprehensive', 'Pending Payment'),
(161, '', '455747237', 'kahenyaa@gmail.com', '', '', 'Pacis', '567234547', '', '1', '0', '0', '', 'amount', 'Comprehensive', 'Pending Payment'),
(162, '', '455747237', 'kahenyaa@gmail.com', '', '', 'Pacis', '567234547', '', '1', '0', '0', '', '1', 'Comprehensive', 'Pending Payment'),
(163, '', '324623632', 'kahenyaa@gmail.com', '', '', 'Pacis', '3432462632', '', '1', '0', '0', '', '1', 'Comprehensive', 'Pending Payment'),
(164, '', '5662623', 'kahenyaa@gmail.com', '', '', 'Pacis', '3463636', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(165, '', '5662623', 'kahenyaa@gmail.com', '', '', 'Pacis', '3463636', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(166, '', '5662623', 'kahenyaa@gmail.com', '', '', 'Pacis', '3463636', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(167, '', '5662623', 'kahenyaa@gmail.com', '', '', 'Pacis', '3463636', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(168, '', '5662623', 'kahenyaa@gmail.com', '', '', 'Pacis', '3463636', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(169, '', '5662623', 'kahenyaa@gmail.com', '', '', 'Pacis', '3463636', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(170, '', '5662623', 'kahenyaa@gmail.com', '', '', 'Pacis', '3463636', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(171, '', '6583838', 'kahenyaa@gmail.com', '', 'und', 'Pacis', '56857836383', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(172, '', '6583838', 'kahenyaa@gmail.com', '', 'und', 'Pacis', '56857836383', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(173, '', '35727', 'kahenyaa@gmail.com', '', '', 'Pacis', '2427577', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(174, '', '346366', 'kahenyaa@gmail.com', '', '', 'Pacis', '23463461236', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(175, '', '346366', 'kahenyaa@gmail.com', '', '', 'Pacis', '23463461236', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(176, '', '316366', 'kahenyaa@gmail.com', '', '', 'Pacis', '2666664', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(177, '', '5723737237', 'sokobora@gmail.com', '', 'test', 'Pacis', '227272723723', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(178, '', '5723737237', 'sokobora@gmail.com', '', 'test', 'Pacis', '227272723723', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(179, '', '5723737237', 'sokobora@gmail.com', '', 'test', 'Pacis', '227272723723', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(180, '', 'tereryryqew', 'sokobora@gmail.com', '', 'ajax', 'Pacis', '5454745474547', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(181, '', 'tereryryqew', 'sokobora@gmail.com', '', 'ajax', 'Pacis', '5454745474547', '', '1', '0', '0', '', 'undefined', 'Comprehensive', 'Pending Payment'),
(182, '', '0700419377', 'kahenyaa@gmail.com', '37737', '57657', 'Pacis', '3568568', '2015', '', '0', '0', '7737', '', 'Comprehensive', 'Pending Payment'),
(183, '', '0700419377', 'kahenyaa@gmail.com', '37737', '57657', 'Pacis', '3568568', '2015', '', '0', '0', '7737', '', 'Comprehensive', 'Pending Payment'),
(184, '', '0770128820', 'kahenyaa@gmail.com', '675368583', '', 'Pacis', '720000', '2020', '', '1', '0', '', '', 'Comprehensive', 'Pending Payment'),
(185, 'john', '0700419377', 'kahenyaa@gmail.com', '3322952', 'DFR4455', 'Pacis', '568000', '2018', '5', '1', '1', 'RTHG5E65U5', '0', 'Comprehensive', 'Pending Payment'),
(186, 'john', '0700419377', 'kahenyaa@gmail.com', '3322952', 'DFR4455', 'Pacis', '568000', '2018', '5', '1', '1', 'RTHG5E65U5', '50000', 'Comprehensive', 'Pending Payment'),
(187, 'john', '0700419377', 'kahenyaa@gmail.com', '3322952', 'DFR4455', 'Pacis', '568000', '2018', '5', '1', '1', 'RTHG5E65U5', '50000', 'Comprehensive', 'Pending Payment'),
(188, 'john', '0700419377', 'kahenyaa@gmail.com', '3322952', 'DFR4455', 'Pacis', '568000', '2018', '5', '1', '1', 'RTHG5E65U5', '52500', 'Comprehensive', 'Pending Payment'),
(189, '', '0700419377', 'test@test.com', '', '', 'Pacis', '780000', '2018', '6', '1', '1', '', '55900', 'Comprehensive', 'Pending Payment'),
(190, '', '0700419377', 'ncrismie@yahoo.com', '', '', 'Pacis', '1200000', '2020', '5', '1', '1', '', '78500', 'Comprehensive', 'Pending Payment'),
(191, '', '0770128820', 'test@test.com', '', '', 'Trident', '500000', '2020', '4', '1', '1', '', '', 'Comprehensive', 'Pending Payment'),
(192, '', '0770128820', 'test1@test.com', '', '', 'Trident', '650000', '2020', '6', ' 5000', '2500', '', '33250', 'Comprehensive', 'Pending Payment'),
(193, '', '0770128820', 'test1@test.com', '', '', 'Pacis', '780000', '2020', '5', '', '', '', '2500', 'Third Party', 'Pending Payment'),
(194, '', '0770128820', 'test1@test.com', '', '', 'Pacis', '780000', '2020', '5', '', '', '', '10000', 'Third Party', 'Pending Payment');

-- --------------------------------------------------------

--
-- Table structure for table `taxis_tp`
--

CREATE TABLE `taxis_tp` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `idNumber` varchar(255) NOT NULL,
  `chasisNumber` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `carValue` varchar(255) NOT NULL,
  `yom` varchar(255) NOT NULL,
  `numberOfPassenger` varchar(255) NOT NULL,
  `kraPin` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `insurancetype` varchar(255) NOT NULL,
  `cstatus` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taxis_tp`
--

INSERT INTO `taxis_tp` (`id`, `names`, `phone`, `email`, `idNumber`, `chasisNumber`, `company`, `carValue`, `yom`, `numberOfPassenger`, `kraPin`, `amount`, `insurancetype`, `cstatus`, `created_at`) VALUES
(1, '', '0770128820', 'test1@test.com', '', '', 'Pacis', '780000', '2020', '5', '', '10000', 'Third Party', 'Pending Payment', '2020-06-22 14:28:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `private`
--
ALTER TABLE `private`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_tp`
--
ALTER TABLE `private_tp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxis`
--
ALTER TABLE `taxis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxis_tp`
--
ALTER TABLE `taxis_tp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `private`
--
ALTER TABLE `private`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `private_tp`
--
ALTER TABLE `private_tp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `taxis`
--
ALTER TABLE `taxis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `taxis_tp`
--
ALTER TABLE `taxis_tp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
