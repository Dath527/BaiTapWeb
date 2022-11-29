-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2022 lúc 01:50 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `beephoneshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dmdienthoai`
--

CREATE TABLE `dmdienthoai` (
  `id_dienthoai` int(10) NOT NULL,
  `ten_dienthoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dmdienthoai`
--

INSERT INTO `dmdienthoai` (`id_dienthoai`, `ten_dienthoai`) VALUES
(1, 'Iphone'),
(2, 'SamSung'),
(3, 'Xiaomi'),
(4, 'OPPO'),
(5, 'Realme'),
(6, 'Nokia'),
(7, 'ViVo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dmsanpham`
--

CREATE TABLE `dmsanpham` (
  `id_dm` int(10) NOT NULL,
  `ten_dm` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dmsanpham`
--

INSERT INTO `dmsanpham` (`id_dm`, `ten_dm`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Máy tính bảng'),
(4, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) NOT NULL,
  `ten_sp` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gia_sp` int(10) NOT NULL,
  `id_dienthoai` int(10) NOT NULL,
  `anh_sp` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(10) NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `gia_sp`, `id_dienthoai`, `anh_sp`, `so_luong`, `comment`) VALUES
(31, 'iphone 9231', 2147483647, 3, 'HTC-Windows-Phone-8S.jpg', 123, '\"\"thuận\"\"'),
(36, 'samsung S* ultra', 2147483647, 2, 'iPhone-4-16G-Quoc-Te-Trang.jpg', 123, 'thuận'),
(37, 'iphone 9255', 90000000, 2, 'IPhone-3GS-32G-Mau-Den.jpg', 123123132, 'thuận'),
(38, 'Iphone X', 7000000, 1, 'Screenshot 2022-11-22 102457.png', 10, '\"jdsvd\"'),
(39, 'samsung galaxy', 40000000, 2, 'samsung-galaxy-note-2-den.jpg', 9, 'cũ'),
(40, 'Iphone 14', 28000000, 1, 'Screenshot 2022-11-22 100019.png', 5, 'mới'),
(41, 'Iphone 14 pro', 30000000, 1, 'Screenshot 2022-11-22 100441.png', 5, 'mới'),
(42, 'iphone 13', 25000000, 1, 'Screenshot 2022-11-22 100707.png', 6, 'mới'),
(43, 'Iphone 13 pro max', 30000000, 1, 'Screenshot 2022-11-22 101041.png', 8, 'mới'),
(44, 'Samsung Glaxy A13', 12000000, 2, 'Screenshot 2022-11-22 101810.png', 7, 'mới');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `tai_khoan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quyen_truy_cap` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`tai_khoan`, `mat_khau`, `quyen_truy_cap`) VALUES
('dath', 'dathandaubuoi', 1),
('minhquan', 'hangvuong', 1),
('nhuquynh', 'quynhxautinh', 1),
('thebao', 'buoibao', 1),
('thuan', 'thuanhinh', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dmdienthoai`
--
ALTER TABLE `dmdienthoai`
  ADD PRIMARY KEY (`id_dienthoai`);

--
-- Chỉ mục cho bảng `dmsanpham`
--
ALTER TABLE `dmsanpham`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_dienthoai` (`id_dienthoai`),
  ADD KEY `id_dienthoai_2` (`id_dienthoai`),
  ADD KEY `id_dienthoai_3` (`id_dienthoai`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`tai_khoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dmdienthoai`
--
ALTER TABLE `dmdienthoai`
  MODIFY `id_dienthoai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `dmsanpham`
--
ALTER TABLE `dmsanpham`
  MODIFY `id_dm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
