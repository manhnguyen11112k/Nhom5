-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2021 lúc 05:07 PM
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
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(10) NOT NULL,
  `masp` varchar(10) NOT NULL,
  `tensp` varchar(30) NOT NULL,
  `chitiet` varchar(1000) NOT NULL,
  `gia` int(11) NOT NULL,
  `loaisp` varchar(10) NOT NULL,
  `anh` varchar(100) NOT NULL,
  `soluong` int(10) NOT NULL,
  `thanhtien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('4', 'Asus4', 'Asus', 'Anh', '1 năm', 'mới', 'mới vl', 35000000, 'linhkien', '../../../image/laptop1.jpg'),
('5', 'Laptop MSI Modern 14 B5M 064VN', 'Asus', 'Anh', '1 năm', 'mới', 'rất mượt', 35000000, 'laptop', '../../../image/lt2.jpg'),
('6', 'Asus6', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'rất mượt', 35000000, 'laptop', '../../../image/laptop1.jpg'),
('7', 'Asus7', 'Asus', 'Anh', '1 năm', 'mới', 'rất mượt', 35000000, 'laptop', '../../../image/tt2_lt1.jpg'),
('8', 'Asus8', 'Asus', 'Anh', '1 năm', 'mới', 'rất mượt', 35000000, 'laptop', '../../../image/tt3_lt1.png'),
('9', 'Asus9', 'Asus', 'Anh', '1 năm', 'mới', 'rất mượt', 35000000, 'laptop', '../../../image/tt4_lt1.jpg'),
('10', 'Asus10', 'Asus', 'Anh', '1 năm', 'mới', 'rất mượt', 35000000, 'laptop', '../../../image/laptop1.jpg'),
('11', 'Asus11', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'rất mượt', 16990000, 'laptop', '../../../image/lt2.jpg'),
('12', 'Asus12', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'rất mượt', 16990000, 'linhkien', '../../../image/laptop1.jpg'),
('13', 'Asus13', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'rất mượt', 35000000, 'laptop', '../../../image/laptop1.jpg'),
('14', 'Asus14', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'rất mượt', 35000000, 'linhkien', '../../../image/laptop1.jpg'),
('15', 'Asus15', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'rất mượt', 35000000, 'laptop', '../../../image/laptop1.jpg'),
('16', 'Asus16', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'MSI Modern 14 sở hữu bộ vi xử lý AMD 5000 - Thế hệ mới nhất hiện nay. Khi mà kết hợp với card tích hợp AMD Radeon mang lại hiệu năng cực kì mạnh mẽ để làm đồ họa, edit/render video và bạn có thể chơi mượt các tựa game online hiện nay trên chiếc laptop văn phòng này.     Với RAM 8GB có sẵn, bạn có thể vừa làm việc trên nhiều tabs cùng lúc mà không lo sợ giật lag. Nếu nhu cầu công việc của bạn cao hơn, cần làm nhiều việc hơn, bạn cũng có thể nâng cấp RAM lên thành 16GB.    Ổ cứng SSD NVMe cho tốc độ xử lý và khởi động máy cực nhanh với thời gian chỉ trong vài giây. Có thể nói đây là một chiếc laptop văn phòng cực kỳ đẳng cấp và đa năng, khi mà bạn có thể sử dụng các ứng dụng liên quan đến đồ họa trên Adobe hoặc 3D chuyên nghiệp và chơi game một cách vô cùng mượt mà, trơn tru.     Hệ thống tản nhiệt tối ưu  Máy được trang bị hệ thống làm mát Exclusive Cooler Boost với 2 quạt tản lớn chuyên dụng và 3 ống dẫn nhiệt. Việc trang bị này sẽ đảm bảo cho máy luôn có nhiệt độ ổn định và mát mẻ khi người dùng đang render ', 35000000, 'laptop', '../../../image/laptop1.jpg'),
('17', 'Asus17', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'Bộ vi xử lý Apple M1 giúp MacBook Pro tốc độ và mạnh mẽ hơn bao giờ hết.', 35000000, 'laptop', '../../../image/laptop1.jpg'),
('18', 'Asus1', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'rất mượt', 35000000, 'linhkien', '../../../image/laptop1.jpg'),
('17', 'Asus17', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'rất mượt', 35000000, 'linhkien', '../../../image/laptop1.jpg'),
('20', 'Asus20', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'MSI Modern 14 sở hữu bộ vi xử lý AMD 5000 - Thế hệ mới nhất hiện nay. Khi mà kết hợp với card tích hợp AMD Radeon mang lại hiệu năng cực kì mạnh mẽ để làm đồ họa, edit/render video và bạn có thể chơi mượt các tựa game online hiện nay trên chiếc laptop văn phòng này.     Với RAM 8GB có sẵn, bạn có thể vừa làm việc trên nhiều tabs cùng lúc mà không lo sợ giật lag. Nếu nhu cầu công việc của bạn cao hơn, cần làm nhiều việc hơn, bạn cũng có thể nâng cấp RAM lên thành 16GB.    Ổ cứng SSD NVMe cho tốc độ xử lý và khởi động máy cực nhanh với thời gian chỉ trong vài giây. Có thể nói đây là một chiếc laptop văn phòng cực kỳ đẳng cấp và đa năng, khi mà bạn có thể sử dụng các ứng dụng liên quan đến đồ họa trên Adobe hoặc 3D chuyên nghiệp và chơi game một cách vô cùng mượt mà, trơn tru.     Hệ thống tản nhiệt tối ưu  Máy được trang bị hệ thống làm mát Exclusive Cooler Boost với 2 quạt tản lớn chuyên dụng và 3 ống dẫn nhiệt. Việc trang bị này sẽ đảm bảo cho máy luôn có nhiệt độ ổn định và mát mẻ khi người dùng đang render ', 35000000, 'laptop', '../../../image/laptop1.jpg'),
('21', 'Asus21', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'rất mượt', 35000000, 'laptop', '../../../image/laptop1.jpg'),
('22', 'Asus22', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'rất mượt', 35000000, 'laptop', '../../../image/laptop1.jpg'),
('24', 'Asus24', 'Asus', 'Anh', '1 năm', 'Mới 100%', 'rất mượt', 35000000, 'linhkien', '../../../image/laptop1.jpg');

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
