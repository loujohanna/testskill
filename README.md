Ini adalah contoh aplikasi untuk testskill yang diberikan.

Untuk configurasi database lakukan pada file: 
/config/db.php
sebagai berikut (sesuaikan dsn, username, dan password dari mysql):
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=testskill',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',


Untuk membuat database gunakan schema berikut:

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 05:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testskill`
--
CREATE DATABASE IF NOT EXISTS `testskill` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `testskill`;

-- --------------------------------------------------------

--
-- Table structure for table `respon`
--

CREATE TABLE `respon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lat` float NOT NULL,
  `lon` float NOT NULL,
  `timezone` int(100) DEFAULT NULL,
  `pressure` int(11) DEFAULT NULL,
  `humidity` int(11) DEFAULT NULL,
  `wind_speed` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `respon`
--

INSERT INTO `respon` (`id`, `lat`, `lon`, `timezone`, `pressure`, `humidity`, `wind_speed`) VALUES
(1, 10.2, 10.5, 3600, 1007, 20, 2.89),
(2, 10.2, 10.5, 3600, 1007, 20, 2.89),
(3, 10.2, 10.5, 3600, 1007, 20, 2.89),
(4, 50, 50, 18000, 1032, 72, 3.57);

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

CREATE TABLE `weather` (
  `id` int(11) NOT NULL,
  `respon_id` bigint(20) NOT NULL,
  `main` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`id`, `respon_id`, `main`, `description`) VALUES
(802, 4, 'Clouds', 'scattered clouds'),
(804, 1, NULL, 'overcast clouds'),
(804, 3, NULL, 'overcast clouds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `respon`
--
ALTER TABLE `respon`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `weather`
--
ALTER TABLE `weather`
  ADD PRIMARY KEY (`id`,`respon_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `respon`
--
ALTER TABLE `respon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
