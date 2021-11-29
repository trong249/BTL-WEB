-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 03:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_ishine`
--

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `rand` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `noi_dung` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`rand`, `id`, `user`, `date`, `noi_dung`) VALUES
(441, 126, 'admin', '17-11-2021', 'Giày đẹp!'),
(412, 417, 'trong', '10-1-2021', 'Giày ngon rẻ!'),
(416, 153, 'admin', '17-11-2021', 'tuyệt vời quá'),
(643, 153, 'admin', '17-11-2021', 'đã cmt xong :D');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `ID` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`ID`, `ten_loai`) VALUES
(16, 'Blazer'),
(17, 'Nike'),
(25, 'Bitis'),
(35, 'Adidas'),
(50, 'Converse'),
(65, 'MLB'),
(95, 'Pegasus'),
(98, 'Jordan');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_don` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `tinh_trang` int(20) NOT NULL,
  `ho_va_ten` varchar(50) NOT NULL,
  `So_dien_thoai` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Dia_chi` varchar(50) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`ma_don`, `user`, `date`, `tinh_trang`, `ho_va_ten`, `So_dien_thoai`, `email`, `Dia_chi`, `note`) VALUES
(424, 'admin', '2021-11-21', 2, 'Admin ', '0123456789', 'admin@gmail.com', 'Ho Chi Minh', 'ngon ngon'),
(198, 'admin', '2021-11-21', 1, 'con ga con', '0123456789', 'gacon@gmail.com', 'Ho Chi Minh', 'Qua it tien '),
(289, 'superIdol', '2021-11-21', 1, 'Super IDol', '0123456789', 'idol@gmail.com', 'Ho Chi Minh', 'haha');

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `rand` int(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `id_sp` int(50) NOT NULL,
  `size` int(50) NOT NULL,
  `so_luong` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`rand`, `user`, `id_sp`, `size`, `so_luong`) VALUES
(1750, 'trong24', 153, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `id` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `ten_hh` varchar(50) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL,
  `mo_ta` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hang_hoa`
--

INSERT INTO `hang_hoa` (`id`, `brand`, `ten_hh`, `hinh`, `don_gia`, `giam_gia`, `mo_ta`) VALUES
(126, 25, 'Bitis Hunter Nameless Edition x Công Trí', 'namelessedition.jpg', 1490000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(153, 25, 'Bitis Hunter Street x Vietmax 2020 - BST HaNoi Cu', 'vietmaxhanoi.jpg', 1999000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(628, 25, 'Bitis Hunter Street x Vietmax-V2 2020 - BST HaNoi ', 'bitisturqouise.jpg', 899000, 0, 'Các sản phẩm của ISHINE thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(417, 65, 'MLB Boston', 'MLBBOSTON.jpg', 1499999, 0, 'Các sản phẩm của ISHINE thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(934, 65, 'MLB Big Ball Chunky LA Dodgers', 'giay-mlb-big-ball-chunky-la-dodgers.jpg', 3250000, 5, 'Các sản phẩm của ISHINE thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(274, 17, 'Nike Air Force', 'nikeairforce.png', 1100000, 0, 'Các sản phẩm của ISHINE thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(593, 17, 'Nike Air Vapomax', 'nikeairvapormax.png', 1750000, 5, 'Các sản phẩm của ISHINE thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(650, 35, 'Adidas Continental 80', 'adidascontinental80.png', 1200000, 0, 'Các sản phẩm của ISHINE thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(166, 35, 'Adidas Cyber Punk', 'adidascyberpunk.png', 1300000, 0, 'Các sản phẩm của ISHINE thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(638, 35, 'Adidas NMD R1', 'adidasnmd_r1.png', 1250000, 0, 'Các sản phẩm của ISHINE thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(562, 16, 'Blazer Mid', 'blazermid.png', 1470000, 13, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(426, 16, 'Blazer 77 Suede', 'blazermid77suede.png', 1250000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(811, 16, 'Blazer 77 Vintage', 'blazermid77vintage.png', 2010000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(346, 16, 'Blazer 77 Infinitive', 'blazermid77infinitive.png', 1360000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(184, 17, 'Nike Air Max 1', 'nikeairmax1.png', 1210000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(359, 17, 'Nike Air Zoom', 'nikeairzoom.png', 2500000, 5, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(432, 17, 'Nike Justin', 'nikejustin.png', 1500000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(118, 35, 'Adidas Super Star', 'adidassupperstar.png', 990000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(946, 35, 'Adidas UltraBoost', 'adidasultraboost.png', 1800000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(511, 35, 'Adidas UltraBoost 20', 'adidasultraboost20.png', 2000000, 20, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(864, 35, 'Adidas UltraBoost DNA City', 'adidasultraboostdnacity.png', 2100000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(547, 35, 'Adidas ZK 2K Boost', 'adidaszk2kboost.png', 2300000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(304, 35, 'YEEZY BOOST 350V2 ASH PEARL', 'YEEZY-BOOST-350-V2-ASH-PEARL.jpg', 8000000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(925, 50, 'Converse Chuck Taylor', 'conversechucktaylor.png', 1990000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(406, 50, 'Converse Chuck70s Hightop', 'Chuck70s.jpg', 2000000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(300, 95, 'Pegasus Chaz', 'pegasuschaz.png', 880000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(654, 95, 'Pegasus Trail 2', 'pegasustrail2.png', 1230000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(424, 95, 'Pegasus Zoom 35', 'pegasuszoom35.png', 1450000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(868, 95, 'Pegasus Zoom 37', 'pegasuszoom37.png', 2120000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(421, 98, 'Jordan 1 Lowse', 'jordan1lowse.png', 1760000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(320, 98, 'Jordan 6 Retro', 'jordan6retro.png', 1510000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(837, 98, 'Jordan ADG 2', 'jordanadg2.png', 1320000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(763, 98, 'Jordan Delta', 'jordandelta.png', 2080000, 0, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_don` int(11) NOT NULL,
  `ID_san_pham` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_don`, `ID_san_pham`, `size`, `so_luong`) VALUES
(509, 126, 37, 1),
(509, 426, 40, 2),
(424, 417, 37, 1),
(424, 650, 37, 1),
(198, 593, 37, 1),
(198, 650, 37, 1),
(198, 562, 37, 1),
(198, 166, 37, 3),
(289, 417, 37, 1),
(289, 593, 37, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` char(128) COLLATE utf8_bin NOT NULL,
  `email` char(128) COLLATE utf8_bin NOT NULL,
  `mat_khau` char(128) COLLATE utf8_bin NOT NULL,
  `dia_chi` varchar(1000) COLLATE utf8_bin NOT NULL,
  `vai_tro` int(1) NOT NULL,
  `reset_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `mat_khau`, `dia_chi`, `vai_tro`, `reset_code`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$6apH74nHMZnlDgig0IUUue3NUAKUWfT0OQ5xXCCA.ZTL/qZlVg.xq', 'Hồ Chí Minh', 1, 0),
(2, 'superIdol', 'cat.tran03@hcmut.edu.vn', '$2y$10$oZ5nCDx6d.VNjvuxhA2x3.iDuGvPastW/Rnyhe9KXLMFng5nCeIyO', 'Sao kim', 0, 0),
(7, 'user6', 'abc@x.com', '$2y$10$NnaSthkv/YCsJlNf795/neCFnzV9j7Jc3eUKB80CiGSYowHMshpuW', 'Hồ Chí Minh', 0, 0),
(8, 'user9', 'abc@xc.com', '$2y$10$aoC/o/S1B6mjXP6bqjKi/uOazkT1IFMj/rQOfizF0sFCU2uRd7qfy', 'Hồ Chí Minh', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
