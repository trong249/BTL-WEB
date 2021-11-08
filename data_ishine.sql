-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 02:03 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
  `ID_hang_hoa` int(11) NOT NULL,
  `Ten_hang_hoa` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `noi_dung` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ID_hang_hoa`, `Ten_hang_hoa`, `user`, `date`, `noi_dung`) VALUES
(18, '	YEEZY BOOST 350V2 ASH PEARL', 'admin', '04-11-2021', 'Giày đẹp lắm shop <3'),
(18, '	YEEZY BOOST 350V2 ASH PEARL', 'trong24', '04-11-2021', 'Good shoe!');

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
(1, 'Converse'),
(2, 'Blazer'),
(3, 'Jordan'),
(4, 'Pegasus'),
(5, 'Adidas'),
(6, 'Nike'),
(7, 'MLB'),
(8, 'Bitis');

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
  `Dia_chi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`ma_don`, `user`, `date`, `tinh_trang`, `ho_va_ten`, `So_dien_thoai`, `email`, `Dia_chi`) VALUES
(123, 'trong24', '2021-11-11', 2, 'Nguyen Van Trong', '0123456789', 'trong@gmail.com', 'KTX khu A, Linh Trung, Thủ Đức');

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
(1, 1, 'Converse Chuck Taylor', 'conversechucktaylor.png', 1990000, 20, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(2, 2, 'Blazer 77 Suede', 'blazermid77suede.png', 1990000, 10, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.'),
(3, 3, 'Jordan 1 Lowse', 'jordan1lowse.png', 1760000, 5, 'Các sản phẩm của THE CLOSER thích hợp sử dụng trong mọi thời tiết và địa hình, đặc biệt là trong những ngày mưa. Phần đế được ép nhiệt nên cực bền sau thời gian sử dụng, kết hợp với da công nghiệp tạo ra kiểu dáng trẻ trung sang trọng đem lại sự hài lòng tuyệt đối cho quý khách hàng.');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_don` int(11) NOT NULL,
  `ID_san_pham` int(11) NOT NULL,
  `ten_hang_hoa` varchar(50) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `giam_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_don`, `ID_san_pham`, `ten_hang_hoa`, `so_luong`, `don_gia`, `giam_gia`) VALUES
(123, 19, 'YEEZY BOOST 350V2 ASH PEARL', 1, 1500000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `dia_chi` varchar(50) NOT NULL,
  `vai_tro` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `mat_khau`, `dia_chi`, `vai_tro`) VALUES
('admin', 'admin@gmail.com', '123', 'Hồ Chí Minh', 1),
('trong24', 'trong@gmail.com', '123', 'Hồ Chí Minh', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
