-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 05:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelpertama`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `nama`, `no_telp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Dea', 857228703, 'Cirebon', '2022-04-15 12:01:08', '2022-04-15 12:01:08'),
(2, 'Wahyu', 8978989, 'Bandung', '2022-04-15 12:01:08', '2022-04-15 12:01:08'),
(3, 'Jihan', 89987878, 'Jakarta', '2022-04-15 12:01:08', '2022-04-15 12:01:08'),
(4, 'Nina', 897787878, 'Bandung', '2022-04-15 12:01:08', '2022-04-15 12:01:08'),
(5, 'Ika', 89878798, 'Cirebon', '2022-04-15 12:01:08', '2022-04-15 12:01:08'),
(113, 'klsjd', 7678687, 'iouyo', '2022-04-15 09:51:11', '2022-04-15 09:51:11'),
(114, 'Dea Baruu', 99877, 'Cirebon Baru', '2022-04-19 11:00:05', '2022-04-19 11:00:05'),
(116, 'KURNIAWAN edit lagi', 123, 'bdg', '2022-04-20 07:18:29', '2022-04-20 08:12:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
