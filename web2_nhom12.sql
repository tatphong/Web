-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 05:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2_nhom12`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cater_id` int(11) NOT NULL,
  `cater_name` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `men` tinyint(4) NOT NULL,
  `woman` tinyint(4) NOT NULL,
  `img` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cater_id`, `cater_name`, `men`, `woman`, `img`) VALUES
(1, 'Dress', 0, 1, 'img/charles-keith-spring-19-back-to-nature-blog-5-XL.jpg'),
(2, 'Shirt', 1, 1, 'img/45.jpg'),
(3, 'Accesories', 1, 1, 'img/sob3.jpg'),
(4, 'Pants', 1, 0, 'img/sob1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ds_sanpham`
--

CREATE TABLE `ds_sanpham` (
  `masp` int(11) NOT NULL,
  `maloai` int(11) NOT NULL,
  `tensp` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `ds_sanpham`
--

INSERT INTO `ds_sanpham` (`masp`, `maloai`, `tensp`, `gia`, `img`, `img2`) VALUES
(1, 11, 'Trousers Blue', 300, 'hinh/ĐẦM HỌA TIẾT HOA.jpg', 'hinh/ĐẦM HỌA TIẾT HOA2.jpg'),
(2, 11, 'Trousers Brow', 350, 'hinh/dam do.jpg', 'hinh/dam do2.jpg'),
(3, 11, 'Trousers Gray', 350, 'hinh/FLORAL.jpg', 'hinh/FLORAL2.jpg'),
(4, 11, 'Pleatec Chino Black', 350, 'hinh/DRESS WITH CONTRAST TOPSTITCHING.jpg', 'hinh/DRESS WITH CONTRAST TOPSTITCHING2.jpg'),
(5, 11, 'Plectec Chino Moss', 350, 'hinh/BUTTONED BLOUSE-STYLE DRESS.jpg', 'hinh/BUTTONED BLOUSE-STYLE DRESS2.jpg'),
(6, 11, 'Soft Cotton Jogging', 350, 'hinh/EMBROIDERED LACE TRIM DRESS.jpg', 'hinh/EMBROIDERED LACE TRIM DRESS2.jpg'),
(7, 11, 'Check Trousers Blue', 350, 'hinh/LIMITED EDITION ZARA STUDIO PRINTED DRESS.jpg', 'hinh/LIMITED EDITION ZARA STUDIO PRINTED DRESS2.jpg'),
(8, 11, 'Check Trousers', 350, 'hinh/LONG LEAF PRINT DRESS.jpg', 'hinh/LONG LEAF PRINT DRESS2.jpg'),
(9, 11, 'Pleated Check Trousers', 350, 'hinh/SHORT PATCHWORK PRINT DRESS.jpg', 'hinh/SHORT PATCHWORK PRINT DRESS2.jpg'),
(10, 11, 'Cropped Chino Black', 350, 'hinh/LACE DRESS WITH RIBBON.jpg', 'hinh/LACE DRESS WITH RIBBON2.jpg'),
(11, 11, 'Cropped Chino Oranges', 350, 'hinh/FLORAL PRINT DRESS.jpg', 'hinh/FLORAL PRINT DRESS2.jpg'),
(12, 11, 'Cropped Chino Blue', 300, 'hinh/A-LINE DRESS.jpg', 'hinh/A-LINE DRESS2.jpg'),
(13, 12, 'Dress In The Knowledge', 350, 'hinh/DRESSING IN THE KNOWLEDGE.jpg', 'hinh/DRESSING IN THE KNOWLEDGE (2).jpg'),
(14, 12, 'Dress With A Font Print', 350, 'hinh/DRESS WTIH A FRONT PRINT.jpg', 'hinh/DRESS WTIH A FRONT PRINT2.jpg'),
(15, 12, 'Jumpsuit With Pocked', 350, 'hinh/JUMPSUIT WITH POCKET.jpg', 'hinh/JUMPSUIT WITH POCKET (2).jpg'),
(16, 12, 'Belted Jumpsuit', 350, 'hinh/BELTED JUMPSUIT.jpg', 'hinh/BELTED JUMPSUIT (2).jpg'),
(17, 12, 'Roof clothing', 350, 'hinh/ROOF CLOTHING.jpg', 'hinh/ROOF CLOTHING (2).jpg'),
(18, 12, 'T-Shirt With Front Print', 350, 'hinh/T-SHIRT WITH FRONT PRINT.jpg', 'hinh/T-SHIRT WITH FRONT PRINT (2).jpg'),
(19, 12, 'With Slogan Print', 350, 'hinh/WITH SLOGAN PRINT.jpg', 'hinh/WITH SLOGAN PRINT (2).jpg'),
(20, 12, 'With Front Slogan', 350, 'hinh/T-SHIRT WITH FRONT SLOGAN.jpg', 'hinh/T-SHIRT WITH FRONT SLOGAN (2).jpg'),
(21, 12, 'Cargo Jogging Trousers', 350, 'hinh/CARGO JOGGING TROUSERS.jpg', 'hinh/CARGO JOGGING TROUSERS (2).jpg'),
(22, 12, 'Rustic Jumpsuit', 350, 'hinh/RUSTIC JUMPSUIT.jpg', 'hinh/RUSTIC JUMPSUIT (2).jpg'),
(23, 12, 'ZW Premium New Chino', 350, 'hinh/ZW PREMIUM NEW CHINO.jpg', 'hinh/ZW PREMIUM NEW CHINO (2).jpg'),
(24, 13, 'Animal Print Vinyl City Bag', 350, 'hinh/ANIMAL PRINT VINYL CITY BAG.jpg', 'hinh/ANIMAL PRINT VINYL CITY BAG2.jpg'),
(25, 13, 'Balo Kali', 350, 'hinh/BRAIDED TOTE BAG WITH WOODEN BALLS.jpg', 'hinh/BRAIDED TOTE BAG WITH WOODEN BALLS (2).jpg'),
(26, 13, 'Black Backpack', 350, 'hinh/BRAIDED FABRIC BUCKET BAG2.jpg', 'hinh/BRAIDED FABRIC BUCKET BAG.jpg'),
(27, 13, 'Basic Cap', 350, 'hinh/LEATHER TOTE BAG WITH ZIP DETAIL.jpg', 'hinh/LEATHER TOTE BAG WITH ZIP DETAIL2.jpg'),
(28, 13, 'Cap Skin Color', 350, 'hinh/FAUX SUEDE CAP.jpg', 'hinh/FAUX SUEDE CAP2.jpg'),
(29, 13, 'White Cap', 350, 'hinh/kisnh.jpg', 'hinh/kisnh2.jpg'),
(30, 13, 'Leather Sport Shoes', 350, 'hinh/METAL SUNGLASSES.jpg', 'hinh/METAL SUNGLASSES2.jpg'),
(31, 13, 'Sports Shoes Black', 350, 'hinh/PLEATED NECKERCHIEF WITH PRINT.jpg', 'hinh/PLEATED NECKERCHIEF WITH PRINT2.jpg'),
(32, 13, 'White Sports Shoes', 350, 'hinh/PACK OF LIMITED EDITION RHINESTONE RINGS.jpg', 'hinh/PACK OF LIMITED EDITION RHINESTONE RINGS2.jpg'),
(33, 13, 'Metal Rimmed Sunglassed', 350, 'list Men/Accesories/Metal Rimmed Sunglasses-30-1.jpg', 'list Men/Accesories/Metal Rimmed Sunglasses-30-2.jpg'),
(34, 13, 'Retro Sunglassed', 350, 'list Men/Accesories/Retro Sunglasses-30-1.jpg', 'list Men/Accesories/Retro Sunglasses-30-2.jpg'),
(35, 13, 'Plastic Rimmed Sunglassed', 350, 'list Men/Accesories/Plastic Rimmed Sunglasses-30-1.jpg', 'list Men/Accesories/Plastic Rimmed Sunglasses-30-2.jpg'),
(36, 24, 'Trousers Blue', 350, 'list Men/Pant/Trousers Blue1-76.jpg', 'list Men/Pant/Trousers Blue2.jpg'),
(37, 24, 'Trousers Brow', 350, 'list Men/Pant/Trousers Brown Cropped1-62.jpg', 'list Men/Pant/Trousers Brown Cropped2.jpg'),
(38, 24, 'Trousers Gray', 350, 'list Men/Pant/Trousers Gray1-78.jpg', 'list Men/Pant/Trousers Gray2.jpg'),
(39, 24, 'Pleatec Chino Black', 350, 'list Men/Pant/Pleatec Chino Black-75-1.jpg', 'list Men/Pant/Pleatec Chino Black-75-2.jpg'),
(40, 24, 'Pleatec Chino Moss', 350, 'list Men/Pant/Pleatec Chino Moss-76-1.jpg', 'list Men/Pant/Pleatec Chino Moss-76-2.jpg'),
(41, 24, 'Soft Cotton Jogging', 350, 'list Men/Pant/SOFT COTTON JOGGING TROUSERS-68-1.jpg', 'list Men/Pant/SOFT COTTON JOGGING TROUSERS-68-2.jpg'),
(42, 24, 'Check Trousers Blue', 350, 'list Men/Pant/Check Trousers Blue-65-1.jpg', 'list Men/Pant/Check Trousers Blue-65-2.jpg'),
(43, 24, 'Check Trousers', 350, 'list Men/Pant/Check Trousers-65-1.jpg', 'list Men/Pant/Check Trousers-65-2.jpg'),
(44, 24, 'Pleated Check Trousers', 350, 'list Men/Pant/Pleated Check Trousers-65-1.jpg', 'list Men/Pant/Pleated Check Trousers-65-2.jpg'),
(45, 24, 'Cropped Chino Black', 350, 'list Men/Pant/CROPPED CHINO Black-50-1.jpg', 'list Men/Pant/CROPPED CHINO Black-50-2.jpg'),
(46, 24, 'Cropped Chino Oranges', 350, 'list Men/Pant/Cropped Chino Ogranges-56-1.jpg', 'list Men/Pant/Cropped Chino Ogranges-56-12.jpg'),
(47, 24, 'Cropped Chino Blue', 350, 'list Men/Pant/Cropped Chino Blue-56-1..jpg', 'list Men/Pant/Cropped Chino Blue-56-2.jpg'),
(48, 22, 'Suit Black Lustring', 350, 'list Men/Shirts/Suit Black Lustring1.jpg', 'list Men/Shirts/Suit Black Lustring2-127.jpg'),
(49, 22, 'Suit Blue Chintz Slim', 350, 'list Men/Shirts/Suit Blue Chintz Slim1.jpg', 'list Men/Shirts/Suit Blue Chintz Slim2-129.jpg'),
(50, 22, 'Suit Red Chintz Lustring', 350, 'list Men/Shirts/Suit Chintz Lustring1-129.jpg', 'list Men/Shirts/Suit Chintz Lustring2.jpg'),
(51, 22, 'Blazer Black Fabric', 350, 'list Men/Shirts/Blazer Black Fabric-90-1.jpg', 'list Men/Shirts/Blazer Black Fabric-90-2.jpg'),
(52, 22, 'Blazer Gray Fabric', 350, 'list Men/Shirts/Blazer Gray Fabric-90-1.jpg', 'list Men/Shirts/Blazer Gray Fabric-90-2.jpg'),
(53, 22, 'Blazer Fabric', 350, 'list Men/Shirts/Blazer Fabric-90-1.jpg', 'list Men/Shirts/Blazer Fabric-90-2.jpg'),
(54, 22, 'Clothing Jacket', 350, 'list Men/Shirts/CLOTHING JACKET-180-1.jpg', 'list Men/Shirts/CLOTHING JACKET-180-2.jpg'),
(55, 22, 'Faux Suede Jacket', 350, 'list Men/Shirts/FAUX SUEDE JACKET-180-1.jpg', 'list Men/Shirts/FAUX SUEDE JACKET-180-2.jpg'),
(56, 22, 'Cotton Jacket', 350, 'list Men/Shirts/COTTON JACKET-100-1.jpg', 'list Men/Shirts/COTTON JACKET-100-2.jpg'),
(57, 22, 'Striped Shirt', 350, 'list Men/Shirts/Striped Shirt Red-50-1.jpg', 'list Men/Shirts/Striped Shirt Red-50-2.jpg'),
(58, 22, 'Shirt Stripe Small', 350, 'list Men/Shirts/Shirt Stripe Small-50-1.jpg', 'list Men/Shirts/Shirt Stripe Small-50-2.jpg'),
(59, 22, 'Shirt Stripe Blue', 350, 'list Men/Shirts/Shirt Stripe-50-1.jpg', 'list Men/Shirts/Shirt Stripe-50-2.jpg'),
(60, 23, 'Balo BE', 350, 'list Men/Accesories/Ba Lô BE-170-1.jpg', 'list Men/Accesories/Ba Lô BE-170-2.jpg'),
(61, 23, 'Balo Kali', 350, 'list Men/Accesories/Ba Lô Kaki-70-1.jpg', 'list Men/Accesories/Ba Lô Kaki-70-2.jpg'),
(62, 23, 'Black Backpack', 350, 'list Men/Accesories/Black Backpack-80-1.jpg', 'list Men/Accesories/Black Backpack-80-2.jpg'),
(63, 23, 'Basic Cap', 350, 'list Men/Accesories/Basic Cap-18-1.jpg', 'list Men/Accesories/Basic Cap-18-2.jpg'),
(64, 23, 'Cap Skin Color', 350, 'list Men/Accesories/Cap Skin Color-18-1.jpg', 'list Men/Accesories/Cap Skin Color-18-2.jpg'),
(65, 23, 'White Cap', 350, 'list Men/Accesories/White Cap-18-1.jpg', 'list Men/Accesories/White Cap-18-2.jpg'),
(66, 23, 'Leather Sport Shoes', 350, 'list Men/Accesories/Leather Sport Shoes-50-1.jpg', 'list Men/Accesories/Leather Sport Shoes-50-2.jpg'),
(67, 23, 'Sports Shoes Black', 350, 'list Men/Accesories/Sports Shoes Black-50-1.jpg', 'list Men/Accesories/Sports Shoes Black-50-2.jpg'),
(68, 23, 'White Sports Shoes', 350, 'list Men/Accesories/White Sports Shoes-80-1.jpg', 'list Men/Accesories/White Sports Shoes-80-2.jpg'),
(69, 23, 'Metal Rimmed Sunglassed', 350, 'list Men/Accesories/Metal Rimmed Sunglasses-30-1.jpg', 'list Men/Accesories/Metal Rimmed Sunglasses-30-2.jpg'),
(70, 23, 'Retro Sunglassed', 350, 'list Men/Accesories/Retro Sunglasses-30-1.jpg', 'list Men/Accesories/Retro Sunglasses-30-2.jpg'),
(71, 23, 'Plastic Rimmed Sunglassed', 350, 'list Men/Accesories/Plastic Rimmed Sunglasses-30-1.jpg', 'list Men/Accesories/Plastic Rimmed Sunglasses-30-2.jpg'),
(72, 12, 'With Front Print', 350, 'hinh/WITH FRONT PRINT.jpg', 'hinh/WITH FRONT PRINT (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qldh`
--

CREATE TABLE `qldh` (
  `id_donhang` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `address` varchar(256) COLLATE utf8_general_mysql500_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_general_mysql500_ci NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `qldh`
--

INSERT INTO `qldh` (`id_donhang`, `uid`, `username`, `address`, `phone`, `date`, `price`, `status`) VALUES
(1, 8, 'janes hihi', 'a89g57', '1234567890', '2019-05-12', 1200, 1),
(2, 9, 'phong', 'asdfa13', '1354646948', '2019-05-13', 1050, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ql_user`
--

CREATE TABLE `ql_user` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_general_mysql500_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `block` tinyint(1) NOT NULL DEFAULT '0',
  `admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Dumping data for table `ql_user`
--

INSERT INTO `ql_user` (`uid`, `username`, `email`, `phone`, `pwd`, `address`, `block`, `admin`) VALUES
(8, 'Janes', 'janesjanes@gmail.com', '1354646948', '$2y$10$rP.knE3/VypaCuDGFpOt8OyzxJIccQu.S/s8JpUtadZQ2lbHdHG0i', 'asdf', 0, 2),
(9, 'phong', 'phong@gmail.om', '1354646948', '$2y$10$ETF.URQgDOWzjybPYyR2aeR29fhmYf5Y7/QNTCTPzPW.FY2GOSrl.', 'asdfa13', 0, 1),
(10, 'aloha', 'aloha@gmail.com', '1354646948', '$2y$10$Ky33PsxEjAacyV/b3QVe7eLv.npOc2CsDegGDWcVz7BLF3l2qpgb.', 'asdfa13sdf', 0, 0),
(11, 'Tri', 'asdf@gmail.com', '1545785897', '$2y$10$cM/xhsqSO7KMZoQ93j5.uO.29Iqkv0dcqB.qhe/zaVzBs0YNtv5ZG', 'Äƒgs4y5y', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cater_id`);

--
-- Indexes for table `ds_sanpham`
--
ALTER TABLE `ds_sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `qldh`
--
ALTER TABLE `qldh`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Indexes for table `ql_user`
--
ALTER TABLE `ql_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cater_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ds_sanpham`
--
ALTER TABLE `ds_sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `qldh`
--
ALTER TABLE `qldh`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ql_user`
--
ALTER TABLE `ql_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
