-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 04:05 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mqtt`
--

-- --------------------------------------------------------

--
-- Table structure for table `http_tabel`
--

CREATE TABLE `http_tabel` (
  `id` int(11) NOT NULL,
  `suhu` double(10,2) NOT NULL,
  `kelembabanU` int(25) NOT NULL,
  `kelembabanT` int(25) NOT NULL,
  `respon_suhu` double NOT NULL,
  `respon_kelembabanU` double NOT NULL,
  `respon_kelembabanT` double NOT NULL,
  `Tersimpan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mqtt_tabel`
--

CREATE TABLE `mqtt_tabel` (
  `id` int(11) NOT NULL,
  `suhu` double NOT NULL,
  `kelembaban` int(11) NOT NULL,
  `moisture` int(11) NOT NULL,
  `respon_suhu` double NOT NULL,
  `respon_kelembaban` double NOT NULL,
  `respon_moisture` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `http_tabel`
--
ALTER TABLE `http_tabel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mqtt_tabel`
--
ALTER TABLE `mqtt_tabel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `http_tabel`
--
ALTER TABLE `http_tabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=566;

--
-- AUTO_INCREMENT for table `mqtt_tabel`
--
ALTER TABLE `mqtt_tabel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
