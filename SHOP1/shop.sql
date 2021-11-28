-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 05:10 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `id` int(10) NOT NULL,
  `level` int(1) NOT NULL,
  `taikhoan` varchar(20) NOT NULL,
  `matkhau` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`id`, `level`, `taikhoan`, `matkhau`) VALUES
(1, 1, 'admin', '0000'),
(4, 0, 'te', '1234'),
(5, 0, 'abc', 'abc123'),
(6, 0, '', ''),
(7, 0, 'eaatrg', 'ry675'),
(9, 0, 'ndmanh270', 'abc123'),
(99, 0, '', ''),
(111, 0, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(10) NOT NULL,
  `tensp` varchar(30) NOT NULL,
  `nxb` varchar(30) NOT NULL,
  `xuatxu` varchar(30) NOT NULL,
  `baohanh` varchar(30) NOT NULL,
  `tinhtrang` varchar(30) NOT NULL,
  `chitiet` varchar(10000) NOT NULL,
  `gia` int(11) NOT NULL,
  `loaisp` varchar(10) NOT NULL,
  `anh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `nxb`, `xuatxu`, `baohanh`, `tinhtrang`, `chitiet`, `gia`, `loaisp`, `anh`) VALUES
('1', 'Laptop MSI Modern 14 B5M 064VN', 'MSI', 'Chính hãng', '2 năm', 'Mới 100%', 'MSI Modern ', 16990000, 'laptop', '../../../image/tt5_lt1.jpg'),
('2', 'MacBook Pro 13 2020 M1 16GB 25', 'APPLE', 'Chính hãng', '12 tháng', 'Mới 100%', 'Bộ vi xử lý Apple M1 giúp MacBook Pro tốc độ và mạnh mẽ hơn bao giờ hết.', 37990000, 'laptop', '../../../image/lt2.jpg'),
('3', 'Asus3', 'Asus', 'Anh', '1 năm', 'mới', 'rất mượt', 35000000, 'laptop', '../../../image/laptop1.jpg'),
('4', 'Asus4', 'Asus', 'Anh', '1 năm', 'mới', 'mới vl', 35000000, 'laptop', '../../../image/laptop1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtin`
--

CREATE TABLE `thongtin` (
  `id` int(10) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sdt` int(10) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `anh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongtin`
--

INSERT INTO `thongtin` (`id`, `ten`, `email`, `sdt`, `diachi`, `anh`) VALUES
(99, 'abc', 'afg@gmail,comm', 2147483647, 'hbm', '../../../image/laptop1.jpg'),
(111, 'afg', 'afg@gmail,comm', 123456789, 'hb', '../../../image/laptop1.jpg'),
(6, 'Nguyễn Mạnh', 'manh@gmail.com', 2147483647, 'Hòa Bình', '../../../image/laptop1.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD KEY `id` (`id`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `thongtin`
--
ALTER TABLE `thongtin`
  ADD CONSTRAINT `thongtin_ibfk_1` FOREIGN KEY (`id`) REFERENCES `dangnhap` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
