-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 08:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_2021320059_roniramdani`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(11) NOT NULL,
  `merk_laptop` varchar(30) NOT NULL,
  `spesifikasi` varchar(225) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `merk_laptop`, `spesifikasi`, `harga`, `gambar`) VALUES
(1, 'Asus Vivobook Pro 14 OLED', 'Asus Vivobook Pro 14 OLED is a Windows 10 laptop with a 14.00-inch display that has a resolution of 2880x1800 pixels. It is powered by a Core i5 processor and it comes with 16GB of RAM. The Asus Vivobook Pro 14 OLED packs 256', 14000000, 'asus-vivobook-pro-14-oled-800x800-1630649815.png'),
(7, 'MSI GF65 Thin 10UE-421', 'Layar: IPS 15.6 inci, resolusi 1920 x 1080 piksel, 144 Hz\r\nProsesor: Intel Core i7-10750H Grafis: NVIDIA GeForce RTX 3060 6GB GDDR6 RAM: 16GB DDR4 Penyimpanan: 512GB SSD', 15000000, 'MSI-GF65-Thin-10UE-421.webp'),
(8, 'Lenovo IdeaPad Slim 3 82H801CU', 'Lenovo IdeaPad Slim 3 82H801CUIN (15.6 Inch 60Hz FHD/11th Gen Intel Core i3 1115G4/8GB RAM/256GB SSD/Windows 10/Intel Iris Xe Graphics G4)', 10000000, 'lenovo-ideapad-slim-3-2021-11th-gen-intel-core-i3-156-fhd-thin-light-1536x1536.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
