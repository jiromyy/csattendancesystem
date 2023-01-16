-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 09:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendancesystem`
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `account_type`, `username`, `password`) VALUES
(1, 'account_manager', 'account_manager', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a'),
(3, 'attendance_checker', 'attendance_checker', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a'),
(4, 'org_admin', 'org_admin', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a'),
(5, 'super_admin', 'super_admin', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
