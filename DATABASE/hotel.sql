-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 03:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `taikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `hoten` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `taikhoan`, `matkhau`, `hoten`) VALUES
(1, 'admin', 'admin', 'Do Van Xuan');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_info`
--

CREATE TABLE `hotel_info` (
  `id` int(11) NOT NULL,
  `name_hotel` text NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `place` text DEFAULT NULL,
  `soluongphong` int(11) DEFAULT NULL,
  `nhahang` tinyint(1) DEFAULT NULL,
  `phonghop` tinyint(1) DEFAULT NULL,
  `damcuoi` tinyint(1) DEFAULT NULL,
  `massage` tinyint(1) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `trangthai` tinyint(1) DEFAULT NULL,
  `img` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_info`
--

INSERT INTO `hotel_info` (`id`, `name_hotel`, `phone`, `place`, `soluongphong`, `nhahang`, `phonghop`, `damcuoi`, `massage`, `mota`, `trangthai`, `img`) VALUES
(1, 'Lonely Hotel', '0123456789', 'Ha Noi', 300, 1, 0, 1, 1, 'La khach san cho nguoi co don so 1 Chau Phi', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `tenkhach` text DEFAULT NULL,
  `gmail` varchar(100) NOT NULL,
  `hotel_name` text NOT NULL,
  `ngaydat` date DEFAULT NULL,
  `ngayketthuc` date DEFAULT NULL,
  `yeucau` text DEFAULT NULL,
  `chiphi` double DEFAULT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `tenkhach`, `gmail`, `hotel_name`, `ngaydat`, `ngayketthuc`, `yeucau`, `chiphi`, `trangthai`) VALUES
(1, 'Do Van Xuan', 'abc@gmail.com', 'Lonely Hotel', '2021-10-21', '2021-10-29', 'don toi luc 10h sang', 10000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `code` varchar(100) NOT NULL,
  `phonenumber` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `gmail`, `password`, `status`, `code`, `phonenumber`) VALUES
(1, 'xuanco941@gmail.com', '$2y$10$IiRoIecEdUOhVeCjL6cucuhCiMHKI19p4Mg43SXZXHUN5ZGSFatAi', 1, '265', NULL),
(2, 'quangtu104@gmail.com', '$2y$10$cn5YQqGCtqdjH3FaeXF/cePHGEem8YonjWnhfim4LGtS/m1bw1AW2', 1, '861', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hotel_info`
--
ALTER TABLE `hotel_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel_info`
--
ALTER TABLE `hotel_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
