-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2024 at 08:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(11) NOT NULL,
  `ANAME` varchar(150) NOT NULL,
  `AMAIL` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL,
  `IMG` varchar(255) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `AGE` int(11) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `PHONENO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `AMAIL`, `APASS`, `IMG`, `GENDER`, `AGE`, `ADDRESS`, `PHONENO`) VALUES
(1, 'prakash ', 'criminalkutty143@gmail.com', 'prakash', 'IMG_20231210_193522_855.jpg', 'male', 21, '45/21, 1st street, B block, Ezhil nagar, Kodungaiyur, Chennai-600118', '9360218703');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CID` int(11) NOT NULL,
  `CNAME` varchar(150) NOT NULL,
  `FABRIC` varchar(150) NOT NULL,
  `SIZE` varchar(150) NOT NULL,
  `FILE` varchar(150) NOT NULL,
  `PRICE` int(150) NOT NULL,
  `UID` int(50) NOT NULL,
  `QTY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ccloth`
--

CREATE TABLE `ccloth` (
  `CCLOTH_ID` int(11) NOT NULL,
  `CCLOTH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ccloth`
--

INSERT INTO `ccloth` (`CCLOTH_ID`, `CCLOTH`) VALUES
(1, 'shirt'),
(2, 't-shirt'),
(3, 'pant'),
(4, 'Hoodie'),
(5, 'shorts');

-- --------------------------------------------------------

--
-- Table structure for table `cloths`
--

CREATE TABLE `cloths` (
  `CID` int(11) NOT NULL,
  `CNAME` varchar(300) NOT NULL,
  `CFABRIC_TYP` varchar(150) NOT NULL,
  `CCLOTH` varchar(150) NOT NULL,
  `CSIZE` varchar(100) NOT NULL,
  `PRICE` varchar(100) NOT NULL,
  `FILE` varchar(600) NOT NULL,
  `KEYWORDS` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cloths`
--

INSERT INTO `cloths` (`CID`, `CNAME`, `CFABRIC_TYP`, `CCLOTH`, `CSIZE`, `PRICE`, `FILE`, `KEYWORDS`) VALUES
(2, 'Men Regular Fit Solid Mandarin Collar Casual Shirt', 'cotton', 'shirt', 'L', '499', 'cottonshirt2.webp', 'cotton shirt,cotton shirts,grey colour shirt,grey colour shirts,regular fit,casual shirts'),
(3, 'Men Regular Fit Solid Spread Collar Casual Shirt', 'cotton', 'shirt', 'M', '499', 'cottonshirt3.webp', 'cotton shirts,cotton shirt,wine colour shirt,regular fit,casual shirt'),
(4, 'Men Regular Fit Solid Spread Collar Casual Shirt', 'cotton', 'shirt', 'L', '499', 'cottonshirt4.webp', 'cotton shirts,casual shirts,regular fit,aqua colour shirts'),
(5, 'Men Regular Fit Solid Spread Collar Casual Shirt', 'cotton', 'shirt', 'M', '499', 'cottonshirt5.webp', 'cotton shirt cotton shirts,regular fit,casual shirts,blue colour shirts'),
(6, 'Men Regular Fit Solid Spread Collar Casual Shirt', 'cotton', 'shirt', 'XL', '599', 'cottonshirt6.webp', 'cotton shirts,regular fit,casual shirts,pink colur shirts'),
(7, 'Men Regular Fit Solid Spread Collar Casual Shirt', 'cotton', 'shirt', 'S', '499', 'cottonshirt7.webp', 'cotton shirts,regular fit,casual shirts,green colour shirts'),
(8, 'Men Regular Fit Solid Spread Collar Casual Shirt', 'cotton', 'shirt', 'XL', '499', 'cottonshirt8.webp', 'cotton shirts,regular fit,casual shirts,white shirts,white colour shirts'),
(9, 'Men Regular Fit Solid Spread Collar Casual Shirt', 'cotton', 'shirt', 'XXL', '499', 'cottonshirt9.webp', 'cotton shirts,casual shirts,regular fit,blue colour shirts,navy blue shirts'),
(10, 'Men Regular Fit Solid Spread Collar Casual Shirt', 'cotton', 'shirt', 'XXL', '499', 'cottonshirt10.webp', 'cotton shirts,regular fit,casual shirts,green colour shirts,olive green'),
(11, 'Men Regular Fit Striped Casual Shirt', 'lycra', 'shirt', 'M', '599', 'lycrashirt1.webp', 'lycra shirts,regular fit,casual shirts,halfhand shirts,half hand shirts'),
(12, 'Men Regular Fit Printed Slim Collar Casual Shirt', 'lycra', 'shirt', 'L', '399', 'lycrashirt2.webp', 'lycra shirts,casual shirts,regular fit,halfhand shirts,half hand shirts'),
(13, 'Men Regular Fit Printed Spread Collar Casual Shirt', 'lycra', 'shirt', 'XL', '499', 'lycrashirt3.webp', 'lycra shirts,casual shirts,regular fit,halfhand shirts,half hand shirts,printed shirts'),
(14, 'Men Regular Fit Printed Spread Collar Casual Shirt', 'lycra', 'shirt', 'M', '399', 'lycrashirt4.webp', 'lycra shirts,casual shirts,regular fit,halfhand shirts,half hand shirts,printed shirts'),
(15, 'Men Boxy Fit Self Design Spread Collar Casual Shirt', 'lycra', 'shirt', 'L', '499', 'lycrashirt5.webp', 'lycra shirts,halfhand shirts,casual shirts,boxy fit,white colour shirts,white lycra shirts'),
(16, 'Men Boxy Fit Self Design Spread Collar Casual Shirt', 'lycra', 'shirt', 'S', '499', 'lycrashirt6.webp', 'lycra shirts,boxy fit,casual shirts,halfhand shirts,blue colour shirts,blue lycra shirts'),
(17, 'Men Boxy Fit Self Design Spread Collar Casual Shirt', 'lycra', 'shirt', 'XL', '499', 'lycrashirt7.webp', 'lycra shirts,boxy fit,casual shirts,grey colour shirts,grey lycra shirts'),
(18, 'Men Slim Fit Solid Spread Collar Casual Shirt', 'lycra', 'shirt', 'M', '499', 'lycrashirt8.webp', 'slim fit,lycra shirts,casual shirts,halfhand shirts,red colour shirts'),
(19, 'Men Slim Fit Solid Spread Collar Casual Shirt', 'lycra', 'shirt', 'XL', '499', 'lycrashirt9.webp', 'slim fit,lycra shirts,halfhand shirts,casual shirts,black colour shirts'),
(20, 'Men Slim Fit Solid Spread Collar Casual Shirt', 'lycra', 'shirt', 'XL', '499', 'lycrashirt10.webp', 'slim fit,casual shirts,lycra shirts,halfhand shirts,grey colour shirts'),
(21, 'Men Regular Fit Black Cotton Blend Trousers', 'cotton', 'pant', '28', '699', 'cottonpant1.webp', 'black pants,cotton pants,regular fit'),
(22, 'Men Regular Fit Beige Cotton Blend Trousers', 'cotton', 'pant', '28', '699', 'cottonpant2.webp', 'cotton pants,regular fit,white colour pants,white cotton pants'),
(23, 'Men Regular Fit Cream Cotton Blend Trousers', 'cotton', 'pant', '32', '499', 'cottonpant3.webp', 'cotton pants,regular fit,cream colour pants'),
(24, 'Men Regular Fit Grey Cotton Blend With Attached Dupatta Trousers', 'cotton', 'pant', '34', '599', 'cottonpant4.webp', 'cotton pants,regular fit,grey colour pants'),
(25, 'Men Regular Fit Grey Cotton Blend Trousers', 'cotton', 'pant', '32', '699', 'cottonpant5.webp', 'cotton pants,regular fit,grey colour pants,blue colour pants'),
(26, 'Men Regular Fit Blue Cotton Blend Trousers', 'cotton', 'pant', '30', '599', 'cottonpant6.webp', 'cotton pants,regular fit,blue colour pants'),
(27, 'Men Regular Fit Maroon Cotton Blend Trousers', 'cotton', 'pant', '34', '599', 'cottonpant7.webp', 'cotton pants,regular fit,red colour pants,maroon colour pants'),
(28, 'Men Regular Fit Black Cotton Blend Trousers', 'cotton', 'pant', '34', '699', 'cottonpant8.webp', 'cotton pants,regular fit,black colour pants,black cotton pants'),
(29, 'Men Regular Fit Green Cotton Blend Trousers', 'cotton', 'pant', '36', '699', 'cottonpant9.webp', 'cotton pants,regular fit,green colour pants,green cotton pants'),
(30, 'Men Regular Fit Grey Lycra Blend Trousers', 'lycra', 'pant', '30', '499', 'lycrapant1.webp', 'lycra pants,regular fit,grey colour pants,grey lycra pants'),
(31, 'Men Regular Fit Khaki Lycra Blend Trousers', 'lycra', 'pant', '32', '599', 'lycrapant2.webp', 'lycra pants,regular fit,khaki colour pants, khaki colour lycra pants'),
(32, 'Men Regular Fit Dark Green Lycra Blend Trousers', 'lycra', 'pant', '32', '599', 'lycrapant3.webp', 'lycra pants,regular fit,green colour pants,green lycra pants'),
(33, 'Men Full Sleeve Solid Hooded Sweatshirt', 'cotton', 'Hoodie', 'XL', '699', 'hoodie1.webp', 'hoodies,white hoodies,hoodie,full sleve hoodies,sweat shirts,sweat shirt'),
(34, 'Men Full Sleeve Solid Hooded Sweatshirt', 'cotton', 'Hoodie', 'L', '599', 'hoodie2.webp', 'hoodies,grey hoodies,hoodie,full sleve hoodies,sweat shirts,sweat shirt'),
(35, 'Men Full Sleeve Solid Hooded Sweatshirt', 'cotton', 'Hoodie', 'M', '499', 'hoodie3.webp', 'hoodies,black hoodies,hoodie,full sleve hoodies,sweat shirts,sweat shirt'),
(36, 'Men Full Sleeve Solid Hooded Sweatshirt', 'cotton', 'Hoodie', 'XXL', '699', 'hoodie4.webp', 'hoodies,pink hoodies, lavander,hoodie,full sleve hoodies,sweat shirts,sweat shirt'),
(37, 'Men Full Sleeve Solid Hooded Sweatshirt', 'cotton', 'Hoodie', 'M', '499', 'hoodie5.webp', 'hoodies,navy blue  hoodies, blue hoodies,blue,hoodie,full sleve hoodies,sweat shirts,sweat shirt'),
(38, 'Men Full Sleeve Solid Hooded Sweatshirt', 'cotton', 'Hoodie', 'L', '599', 'hoodie6.webp', 'hoodies,pink hoodies, pink colour hoodies,pink,hoodie,full sleve hoodies,sweat shirts,sweat shirt'),
(39, 'Men Full Sleeve Solid Hooded Sweatshirt', 'cotton', 'Hoodie', 'L', '599', 'hoodie7.webp', 'hoodies,light blue hoodies, blue colour hoodies,blue,hoodie,full sleve hoodies,sweat shirts,sweat shirt'),
(40, 'Men Full Sleeve Solid Hooded Sweatshirt', 'cotton', 'Hoodie', 'S', '499', 'hoodie8.webp', 'hoodies,red hoodies, red colour hoodies,red,hoodie,full sleve hoodies,sweat shirts,sweat shirt'),
(41, 'Solid Men Black, White Regular Shorts, Sports Shorts', ' Polyester', 'shorts', 'M', '299', 'short1.webp', 'shorts,black shorts,polyester shorts,'),
(42, 'Men Printed Round Neck Cotton Blend Black T-Shirt', 'cotton', 't-shirt', 'S', '199', 'tshirt1.webp', 'tshirts,t-shirts,roundedneck tshirts,rounded neck t-shirts,,cotton tshirts,cotton t-shirts,printed tshirts,printed t-shirts');

-- --------------------------------------------------------

--
-- Table structure for table `cloth_fabric`
--

CREATE TABLE `cloth_fabric` (
  `CFABRIC_ID` int(11) NOT NULL,
  `CFABRIC_TITTLE` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cloth_fabric`
--

INSERT INTO `cloth_fabric` (`CFABRIC_ID`, `CFABRIC_TITTLE`) VALUES
(1, 'cotton'),
(2, 'lycra'),
(3, 'denim'),
(4, 'jean'),
(5, 'linen'),
(6, ' Polyester');

-- --------------------------------------------------------

--
-- Table structure for table `cloth_size`
--

CREATE TABLE `cloth_size` (
  `CSIZE_ID` int(11) NOT NULL,
  `CSIZE_TITTLE` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cloth_size`
--

INSERT INTO `cloth_size` (`CSIZE_ID`, `CSIZE_TITTLE`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL'),
(6, '28'),
(7, '30'),
(8, '32'),
(9, '34'),
(10, '36');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `UID` int(11) NOT NULL,
  `INVOICENO` int(11) NOT NULL,
  `CNAME` varchar(255) NOT NULL,
  `FABRIC` varchar(255) NOT NULL,
  `SIZE` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `PRICE` varchar(255) NOT NULL,
  `QTY` int(11) NOT NULL,
  `GRANDTOTAL` varchar(255) NOT NULL,
  `METHOD` varchar(150) NOT NULL,
  `LOG` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`UID`, `INVOICENO`, `CNAME`, `FABRIC`, `SIZE`, `ADDRESS`, `PRICE`, `QTY`, `GRANDTOTAL`, `METHOD`, `LOG`) VALUES
(947386, 1143617261, 'Men Regular Fit Solid Spread Collar Casual Shirt', 'cotton', 'M', ' mayor basudev, 2nd street,tondiarpet, chennai-600081', '499', 1, '1497', 'cash on delivery', '2024-01-18 03:00:05'),
(947386, 1143617261, 'Men Regular Fit Printed Slim Collar Casual Shirt', 'lycra', 'L', ' mayor basudev, 2nd street,tondiarpet, chennai-600081', '399', 1, '1497', 'cash on delivery', '2024-01-18 03:00:05'),
(947386, 1143617261, 'Men Regular Fit Solid Mandarin Collar Casual Shirt', 'cotton', 'S', ' mayor basudev, 2nd street,tondiarpet, chennai-600081', '499', 1, '1497', 'cash on delivery', '2024-01-18 03:00:05'),
(1893490027, 1520042946, 'Men Regular Fit Solid Spread Collar Casual Shirt', 'cotton', 'XXL', 'koratur', '499', 1, '1597', 'cash on delivery', '2024-01-19 21:26:11'),
(1893490027, 1520042946, 'Men Regular Fit Grey Lycra Blend Trousers', 'lycra', '30', 'koratur', '499', 2, '1597', 'cash on delivery', '2024-01-19 21:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `IMG` varchar(50) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `GENDER` varchar(150) NOT NULL,
  `AGE` int(10) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `PHONENO` varchar(15) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `PASS` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `UID`, `IMG`, `NAME`, `GENDER`, `AGE`, `ADDRESS`, `PHONENO`, `EMAIL`, `PASS`) VALUES
(1, 213413, './users/', 'nirmal', '', 0, 'chennai,powerhouse', '123211234', 'nirmalrajsam02@gmail.com', '12345677'),
(2, 947386, './users/1666182118676.jpg', 'PARKAVI', 'Female', 21, ' mayor basudev, 2nd street,tondiarpet, chennai-600081', '9080509582', 'paru@gmail.com', 'paru'),
(3, 1893490027, './users/Lovepik_com-401108073-workplace-men.png', 'Musharaf', 'Male', 20, 'chennai', '03242354235', 'musharaf1711@gmail.com', 'mush');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `ccloth`
--
ALTER TABLE `ccloth`
  ADD PRIMARY KEY (`CCLOTH_ID`);

--
-- Indexes for table `cloths`
--
ALTER TABLE `cloths`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `cloth_fabric`
--
ALTER TABLE `cloth_fabric`
  ADD PRIMARY KEY (`CFABRIC_ID`);

--
-- Indexes for table `cloth_size`
--
ALTER TABLE `cloth_size`
  ADD PRIMARY KEY (`CSIZE_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ccloth`
--
ALTER TABLE `ccloth`
  MODIFY `CCLOTH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cloths`
--
ALTER TABLE `cloths`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `cloth_fabric`
--
ALTER TABLE `cloth_fabric`
  MODIFY `CFABRIC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cloth_size`
--
ALTER TABLE `cloth_size`
  MODIFY `CSIZE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
