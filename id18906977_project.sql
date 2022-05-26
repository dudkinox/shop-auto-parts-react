-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220525.b2e1d944d2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 08:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18906977_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `No` int(11) NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`No`, `Password`, `Type`, `Email`, `Address`, `Phone`) VALUES
(1, 'c33367701511b4f6020ec61ded352059', 'admin', 'admin@gmail.com', '-', '-'),
(2, 'c33367701511b4f6020ec61ded352059', 'user', 'user@gmail.com', 'กรรณิกา สวีท (รัชดาภิเษก 36 แยก 9-7) <br />รัชดาภิเษก 36 แยก 9-7 รัชดาภิเษก <br /> จันทรเกษม จตุจักร ราคาเริ่มต้น 5500 บาท/เดือน <br /> ใกล้ ม.', '08x-xxx-xxxx'),
(3, 'dd4b21e9ef71e1291183a46b913ae6f2', 'user', 'em@gmail.com', '1530 10900', '0900000000'),
(4, '4a7d1ed414474e4033ac29ccb8653d9b', 'user', 'admin0@gmail.com', 'กทม. 10900', '0986545555'),
(5, 'c33367701511b4f6020ec61ded352059', 'user', 'test@gmail.com', 'กทม. 10900', '0986545555');

-- --------------------------------------------------------

--
-- Table structure for table `oders`
--

CREATE TABLE `oders` (
  `Number` int(11) NOT NULL,
  `id_user` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Oder` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ImgSlip` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Sum` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oders`
--

INSERT INTO `oders` (`Number`, `id_user`, `Name`, `Oder`, `ImgSlip`, `Status`, `Sum`, `Price`, `DateTime`) VALUES
(1, '5', 'อำพล เทส', 'b022222', 'assets/Img/628c1bce750947.37637073.png', 'รอการอนุมัติ', '51000', '19000.00', '2022-05-26 16:36:12'),
(2, '5', 'อำพล เทส', 'sh', 'assets/Img/628c1bce750947.37637073.png', 'รอการอนุมัติ', '51000', '16000.00', '2022-05-26 16:36:12'),
(3, '5', 'อำพล เทส', 'sh', 'assets/Img/628c1bce750947.37637073.png', 'รอการอนุมัติ', '51000', '16000.00', '2022-05-26 16:36:12'),
(4, '5', 'อำพล เทส', 'sh', 'assets/Img/628c1befd5b947.42684427.png', 'รอการอนุมัติ', '79500', '16000.00', '2022-05-26 16:36:12'),
(5, '5', 'อำพล เทส', 'ad5', 'assets/Img/628c1befd5b947.42684427.png', 'รอการอนุมัติ', '79500', '15000.00', '2022-05-26 16:36:12'),
(6, '5', 'อำพล เทส', 'b022222', 'assets/Img/628c1befd5b947.42684427.png', 'รอการอนุมัติ', '79500', '19000.00', '2022-05-26 16:36:12'),
(7, '5', 'อำพล เทส', 'Brake Bambo02', 'assets/Img/628c1befd5b947.42684427.png', 'รอการอนุมัติ', '79500', '29500.00', '2022-05-26 16:36:12'),
(8, '5', 'tset test', 'sh', 'assets/Img/628f96e9170ff6.01644935.jpg', 'รอการอนุมัติ', '31000', '16000.00', '2022-05-26 16:36:44'),
(9, '5', 'tset test', 'ad5', 'assets/Img/628f96e9170ff6.01644935.jpg', 'รอการอนุมัติ', '31000', '15000.00', '2022-05-26 16:36:46'),
(10, '', 'aaa aaa', 'sh', 'assets/Img/628fae7234f169.24247078.jpg', 'รอการอนุมัติ', '32000', '16000.00', '2022-05-26 16:44:34'),
(11, '', 'aaa aaa', 'sh', 'assets/Img/628fae7234f169.24247078.jpg', 'รอการอนุมัติ', '32000', '16000.00', '2022-05-26 16:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Code` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `NameProduct` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Imges` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `DataProduct` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Code`, `Type`, `NameProduct`, `Imges`, `DataProduct`, `Price`, `Quantity`, `CreateAt`) VALUES
(8, 'ae00540a', 'Brake pads', 'Brake Bambo02', 'assets/img/62892e127ae4f.jpg', 'Brake BAMBO HONDO,IZUZU 75-17m', '29500.00', 10, '2022-05-21 18:23:14'),
(10, 'a5542', 'Brake pads', 'ad5', 'assets/img/628932057bf92.jpg', 'Brake BAMBO HONDO,IZUZU 75-17m', '15000.00', 10, '2022-05-21 18:40:05'),
(11, 'dad555', 'Car Shock Absorber', 'sh', 'assets/img/62893229e2e00.jpg', 'dadad', '16000.00', 10, '2022-05-21 18:40:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`Number`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `oders`
--
ALTER TABLE `oders`
  MODIFY `Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
