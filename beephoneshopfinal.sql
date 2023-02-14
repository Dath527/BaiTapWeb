-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 14, 2023 lúc 06:03 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

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
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `ID` int(50) NOT NULL,
  `tk` varchar(255) DEFAULT NULL,
  `chi_tiet_hd` text NOT NULL,
  `gia_tien` int(50) NOT NULL,
  `sdt` varchar(50) NOT NULL,
  `diachi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`ID`, `tk`, `chi_tiet_hd`, `gia_tien`, `sdt`, `diachi`) VALUES
(4, 'dath527', 'Iphone 13 pro max x 1\r\nsamsung galaxy x 1\r\n', 70000000, '', ''),
(5, 'dath527', 'ip8 x 1\r\nIphone 13 pro max x 1\r\nsamsung galaxy x 1\r\n', 70000213, '', ''),
(6, 'dath', '', 0, '', ''),
(7, 'dath', 'Samsung Glaxy A13 x 1\r\n', 12000000, '', ''),
(8, 'dath', '', 0, '', ''),
(9, 'dath', '', 0, '', ''),
(10, 'dath', 'samsung galaxy s8 x 1\r\n', 7000000, '', ''),
(11, 'dath', 'Iphone 13 pro max x 1\r\n', 30000000, '', ''),
(12, 'dath', 'Iphone 14 x 1\r\n', 28000000, '', ''),
(13, 'dath', '', 0, '', ''),
(14, 'dath', 'Iphone 14 x 1\r\nSamsung Glaxy A13 x 1\r\n', 40000000, '', ''),
(15, 'dath', 'Iphone 13 pro max x 1\r\nSamsung Glaxy A13 x 1\r\n', 42000000, '', ''),
(16, 'dath', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 1\r\n', 42000000, '', ''),
(17, 'dath', 'Iphone 14 pro x 1\r\nsamsung galaxy s8 x 2\r\n', 44000000, '', ''),
(18, 'dath', 'iphone 9255 x 5\r\nsamsung galaxy s8 x 4\r\n', 478000000, '', ''),
(19, NULL, 'iphone 13 x 2\r\n', 50000000, '', ''),
(20, 'dath527', 'iphone 13 x 3\r\niphone 9255 x 2\r\nIphone X x 2\r\nsamsung galaxy x 2\r\n', 349000000, '', ''),
(21, 'dath527', '', 0, '', ''),
(22, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 5\r\n', 110000000, '', ''),
(23, 'dath527', '', 0, '', ''),
(24, 'dath527', '', 0, '', ''),
(25, 'dath527', '', 0, '', ''),
(26, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(27, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(28, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(29, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(30, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(31, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(32, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(33, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(34, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(35, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(36, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(37, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(38, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(39, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(40, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(41, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(42, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(43, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(44, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(45, 'dath527', 'iphone 13 x 2\r\nSamsung Glaxy A13 x 4\r\n', 98000000, '', ''),
(46, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(47, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(48, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(49, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(50, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(51, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(52, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(53, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(54, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(55, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(56, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(57, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(58, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(59, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(60, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(61, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(62, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(63, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(64, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(65, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(66, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(67, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(68, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(69, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(70, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(71, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(72, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(73, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(74, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(75, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(76, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(77, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(78, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(79, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(80, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(81, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(82, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(83, 'dath527', 'Iphone 14 pro x 1\r\nSamsung Glaxy A13 x 2\r\n', 54000000, '', ''),
(84, 'dath527', 'Iphone 14 pro x \r\nSamsung Glaxy A13 x \r\n', 54000000, '', ''),
(85, 'dath527', '', 0, '', ''),
(86, 'dath527', '', 0, '', ''),
(87, 'dath527', '', 0, '', ''),
(88, 'dath527', '', 0, '', ''),
(89, 'dath527', 'iphone 13 x \r\nIphone 13 pro max x \r\nSamsung Glaxy A13 x \r\n', 134000000, '', ''),
(90, 'dath527', '', 60000000, '', ''),
(91, 'dath527', '', 48000000, '', ''),
(92, 'dath527', '', 25000000, '', ''),
(93, 'dath527', '', 30000000, '', ''),
(94, 'dath527', '', 28000000, '', ''),
(95, 'dath527', '', 7000000, '', ''),
(96, 'dath527', '', 40000000, '', ''),
(97, 'dath527', '', 12000000, '', ''),
(98, 'dath527', '', 90000000, '', ''),
(99, 'dath527', '', 360000000, '', ''),
(100, 'dath527', '', 120000000, '', ''),
(101, 'dath527', '', 48000000, '', ''),
(102, 'dath527', '', 60000000, '', ''),
(103, 'dath527', '', 24000000, '', ''),
(104, 'dath527', '', 50000000, '', ''),
(105, 'dath527', '', 28000000, '', ''),
(106, 'dath527', '', 60000000, '', ''),
(107, 'dath527', '', 56000000, '', ''),
(108, 'dath527', '', 60000000, '', ''),
(109, 'dath527', '', 30000000, '', ''),
(110, 'dath527', '', 25000000, '', ''),
(111, 'dath527', '', 25000000, '', ''),
(112, 'dath527', '', 28000000, '', ''),
(113, 'dath527', '', 25000000, '', ''),
(114, 'dath527', 'iphone 13 x 1\r\nIphone 14 x 1\r\nIphone 14 pro x 1\r\nsamsung galaxy x 1\r\n', 123000000, '', ''),
(115, 'dath527', 'iphone 13 x 1\r\nIphone 14 x 1\r\nIphone 14 pro x 1\r\nsamsung galaxy x 1\r\n', 123000000, '', ''),
(116, 'dath527', 'iphone 13 x 1\r\nIphone 14 x 1\r\nIphone 14 pro x 1\r\nsamsung galaxy x 1\r\n', 123000000, '', ''),
(117, 'dath527', '', 25000000, '', ''),
(118, 'dath527', '', 30000000, '', ''),
(119, 'dath527', '', 30000000, '', ''),
(120, 'dath527', 'samsung galaxy x 1\r\n', 40000000, '', ''),
(121, 'dath527', 'samsung galaxy x 1\r\n', 40000000, '', ''),
(122, 'dath527', 'Iphone 14 pro x 5\r\n', 150000000, '', ''),
(123, 'dath527', 'Iphone 14 x \r\n', 252000000, '', ''),
(124, 'dath527', '', 196000000, '', ''),
(125, 'dath527', 'Iphone 14 x 1\r\nIphone 14 pro x 1\r\n', 58000000, '', ''),
(126, 'dath527', 'iphone 13 x 3\r\n', 75000000, '', ''),
(127, 'dath527', '', 98000000, '', ''),
(128, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(129, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(130, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(131, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(132, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(133, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(134, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(135, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(136, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(137, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(138, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(139, 'dath527', 'samsung galaxy x 2\r\n', 80000000, '', ''),
(140, 'dath527', 'iphone 9255 x 23\r\nsamsung galaxy x 2\r\n', 2147483647, '', ''),
(141, 'dath527', 'Samsung Glaxy A13 x 2\r\n', 24000000, '', ''),
(142, 'dath527', 'iphone 13 x 1\r\n', 25000000, '', '4252523'),
(143, NULL, 'iphone 9255 x 15\r\n', 1350000000, '', 'hữu bằng ba mát'),
(144, NULL, 'iphone 9255 x 6\r\n', 540000000, '0962288351', 'ba mát hữu bằng '),
(145, NULL, 'iphone 9255 x 6\r\n', 540000000, '0962288351', 'ba mát hữu bằng '),
(146, NULL, 'iphone 9255 x 2\r\n', 180000000, '0962288351', 'ba mát hữu bằng '),
(147, NULL, 'iphone 9255 x 2\r\n', 180000000, '0962288351', 'ba mát hữu bằng '),
(148, NULL, 'Iphone 13 pro max x 1\r\n', 30000000, '0962288351', 'ba mát hữu bằng '),
(150, 'dath', 'Vivo V23 5G x 1\r\n', 10000000, '0123456789', 'đb'),
(151, NULL, 'OPPO A77s x 2\r\nSamsung Galaxy S21 FE 5G x 1\r\nxiaomi MTB Pad 5 x 2\r\n', 43690000, '0962288351', 'hải phòng ');

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
(50, 'samsung galaxy A23', 13000000, 2, 'baitap1.png', 100, '\"Galaxy A23 được trang bị tấm nền PLS TFT LCD với kích thước 6.6 inch có độ phân giải Full HD+ (1080 x 2408 Pixels) mang lại trải nghiệm cho những phút giây giải trí như xem phim, chơi game rất tốt bởi hình ảnh được thể hiện chi tiết, màu sắc rực rỡ, độ tương phản cao\r\nHệ thống camera:\r\nCamera sau 50.0 MP F/1.8 + 5.0 MP F/2.2 + 2.0 MP F/2.4 + 2.0 MP F/2.4\r\nCamera sau lấy nét tự động + OIS + zoom camera phía sau kỹ thuật số lên đến 10x\r\nCamera trước 8.0 MP, F/2.2\r\nĐộ phân giải quay video FHD (1920 x 1080)@30fps\r\nChuyển động chậm @HD 120fps\r\nRAM 6 GB\r\nKích thước ROM 128GB\r\nBộ nhớ có sẵn 104GB\r\nHỗ trợ bộ nhớ ngoài MicroSD (Tối đa 1TB)\r\nSố lượng SIM: Sim kép\r\nKích thước SIM: Nano-SIM (4FF)\r\nLoại khe cắm SIM: SIM 1 + SIM 2 + MicroSD\"'),
(51, 'samsung galaxy z flip 4', 17000000, 2, 'baitap3.png', 70, '\"thiết kế nhỏ gọn, bền bỉ hơn Màn hình chính của Galaxy Z Flip4 vẫn có kích thước 6.7 inch, sử dụng tấm nền Dynamic AMOLED 2X với độ phân giải Full HD+ (2.640x1.080 pixel) cho mật độ điểm ảnh 425 ppi.Camera chính góc rộng 12 MP.\r\nCamera góc siêu rộng 12 MP.\r\nCamera trước 10 MP.  Samsung Galaxy Z Flip4 hiệu năng mạnh mẽ cùng thời lượng pin lâu hơn\"'),
(52, 'iphone 13 mini ', 21000000, 1, 'baitap5.png', 700, '\"Nhỏ – siêu nhỏ, gọn – siêu gọn, nhẹ – siêu nhẹ là những cảm nhận đầu tiên khi mình cầm chiếc iPhone 13 mini trên tay.Đánh giá hiệu năng: Vô đối\r\nNếu phải tìm một chiếc smartphone mạnh hơn iPhone 13 mini thì có lẽ đó chỉ có thể là… iPhone 13 Pro/Pro Max.\"'),
(53, 'iphone 12 mini ', 7000000, 1, 'baitap6.png', 70, '\"iPhone 12 Mini được trang bị dung lượng RAM 4 GB và bộ nhớ trong 64 GB đủ khả năng để người dùng lưu trữ thả ga và tốc độ giải quyết thao tác nhanh chóng trên hệ điều hành iOS 15 (12/2021). Thiết kế sang trọng, cao cấp Màn hình OLED Super Retina XDR siêu sắc nét Camera kép thách thức mọi giới hạn ban đêmVi xử lý Apple A14 khẳng định sức mạnh dẫn đầu\"'),
(54, 'Xiaomi 12 ', 149900, 3, 'xiaomi.png', 70, '\"Chip Snapdragon 8 Gen 1 \r\nCông nghệ màn hình AMOLED\r\nHệ điều hành Android 12, MIUI 13\r\nĐộ phân giải màn hình: 1080 x 2400 pixels (FullHD+)\"'),
(55, 'Xiaomi Redmi 10', 2540000, 3, 'xiaomi1.png', 100, '\"Thiết kế Xiaomi Redmi 10 khá quen thuộc, nếu quan sát kỹ sẽ thấy máy khá giống với Redmi Mi 11 và Redmi Note 10. Mặt trước của máy được trang bị màn hình đục lỗ thời thượng, hai cạnh viền khá mỏng được bo cong mềm mại tạo cảm giác thoải mái cho người dùng khi sử dụng. Cạnh phải được bố trí nút nguồn kiêm cảm biến vân tay và phím điều chỉnh âm lượng. Redmi 10 được trang bị màn hình đục lỗ 6.5 inch, sử dụng tấm nền IPS LCD, độ phân giải full HD+, tần số quét 90Hz, tỷ lệ khung hình 20:9, độ sáng tối đa 400 nits đem đến chất lượng hiển thị rất tốt.Cung cấp sức mạnh cho Redmi 10 hoạt động là chip Helio G88 8 nhân trong đó có 2 nhân tốc độ cao 2.0Ghz và 6 nhân tốc độ thấp 1.8Ghz. Máy được trang bị GPU Mali G52 MC2 cho tốc độ 1Ghz.\"'),
(56, 'Xiaomi Redmi A1 ', 1000000, 3, 'xiaomi2.png', 30, '\"Máy cầm khá đầm tay.\r\n\r\nKhông chỉ thiết kế đẹp, Redmi A1 còn có một ưu điểm vượt trội khác đó là sở hữu cụm camera kép hiếm có trong phân khúc điện thoại 2 triệu đồng.\r\n\r\nVề mặt trước, Xiaomi trang bị cho Redmi A1 màn hình khá lớn 6.52 inch, sử dụng tấm nền IPS LCD, độ phân giải HD+ và tần số quét 60Hz. Là một smartphone giá rẻ nên phần cứng Redmi A1 khá khiêm tốn. Máy chỉ được trang bị vi xử lý Helio P22 của MediaTek. Tuy nhiên, với cấu trúc 4 lõi Cortex-A53 tốc độ 2.0 GHz, và GPU IMG PowerVR GE8320 thì hiệu năng của Redmi A1 cũng không hề tệ\"'),
(57, 'xiaomi MTB Pad 5', 10000000, 3, 'xiaomi3.png', 398, '\"Xiaomi Pad 5 xứng đáng là chiếc máy tính bảng có thiết kế hấp dẫn nhất trong tầm giá dưới 10 triệu đồng. Ngay khi cầm sản phẩm trên tay mình liên tưởng ngay đến chiếc iPad Pro có mức giá trên 20 triệu đồng, thậm chí cảm giác cầm vào còn chắc chắn, cứng cáp hơn.  Màn hình 16:10 phù hợp công việc lẫn giải trí\r\nThực sự mà nói thì mình thích một chiếc máy tính bảng có màn hình tỷ lệ vuông hơn kiểu iPad, khi đó dùng ở chế độ ngang sẽ hiển thị được nhiều nội dung hơn, làm việc cũng đã hơn. Nhưng theo Xiaomi thì họ làm màn hình 16:10 là để cân bằng giữa giải trí và công việc, mà cụ thể ở đây là phục vụ nhu cầu xem phim, xem YouTube.loa Dolby Atmos xem phim quá đãHiệu năng rất ngon trong tầm giá\"'),
(58, 'Oppo A17K ', 3000000, 4, 'oppo.png', 50, '\"Thiết kế trẻ trung đổi mới liên tục \r\nMàn hình 60Hz khá ổn  thiết kế hình giọt nước với kích thước 6.56 inch HD+ trên nền LCD. Điều này giúp cung cấp màn hình rộng rãi, hiển thị chi tiết thông tin rõ ràng, bạn có thể thoả sức chơi game mà không bị hạn chế. \r\nCamera cũng là một trong những yếu tố mà bạn không thể bỏ qua khi đánh giá OPPO A17K. Máy ảnh của thiết bị được trang bị 2 camera trước và phía sau máy. Ở mặt sau là cụm camera có hình dạng viên thuốc được làm phẳng và ống kính cũng không hề bị nhô lên.\r\nMediaTek Helio G35 8 nhân xử lý vẫn khá ổn\r\nDung lượng pin 5,000Ah khá lớn so với thiết kế máy\"'),
(59, ' Oppo Reno6 5G ', 7000000, 4, 'oppo1.png', 60, '\"Thiết kế OPPO Reno6 5G hợp xu thế với khung viền vuông vức, màu sắc tuyệt đẹp Tất cả là nhờ vào phần khung viền được làm vát phẳng, các góc được bo cong vừa phải để máy vẫn giữ được sự nam tính và cứng cáp trong thiết kế.\r\nOPPO Reno6 5G cấu hình vẫn cực ngon với chip Dimensity 900\r\nMàn hình: Kích thước 6.43 inch, tấm nền AMOLED, độ phân giải Full HD+ (1.800 x 2.400 pixel), tần số quét 90 Hz.\r\nCPU: Dimensity 900 5G 8 nhân (tiến trình 6 nm).\r\nGPU: Mali-G68 MC4.\r\nRAM: 8 GB.\r\nBộ nhớ trong: 128 GB.\r\nHệ điều hành: Android 11 (ColorOS 11.3).\r\nPin: 4.300 mAh, sạc nhanh SuperVOOC 2.0 65 W.\r\n\"'),
(60, 'Oppo A54', 4500000, 4, 'oppo2.png', 500, '\"Điện thoại OPPO A54 được trang bị tấm nền IPS LCD, độ phân giải HD+ với kích thước 6.51 inch. Bởi thế mà khả năng hiển thị của chiếc điện thoại này không hề tốt như nhiều người dùng mong đợi. Phần màu sắc mà điện thoại OPPO A54 mang lại khá nhợt nhạt và chắc chắn với những người dùng đã quen với gu màu sắc sống động, nịnh mắt thì chắc chắn không thích điều này. Nữa là khả năng hiển thị ngoài trời của điện thoại OPPO A54 khá kém, rất khó để nhìn rõ mọi thông tin hiển thị nếu trời có nắng.\r\nĐiện thoại OPPO A54 có RAM 4GB và bộ nhớ trong 128GB về cơ bản cũng hỗ trợ được một không gian trải nghiệm vừa đủ với những người dùng cơ bản ở phân khúc này.\r\n\r\nViên pin của điện thoại OPPO A54 có dung lượng lên tới 5000mAh và đúng như bản chất của những chiếc điện thoại thông minh trong phân khúc giá rẻ, pin điện thoại OPPO A54 được tối ưu rất tốt. Nếu bạn sạc đầy cho điện thoại OPPO A54 thì chí ít cũng phải dùng được một ngày, thậm chí là hơn cả thế.\"'),
(61, 'OPPO Reno7 Z 5G', 6850000, 4, 'oppo3.png', 50, '\"Trong khi đánh giá OPPO Reno7 Z 5G, mình có cầm thử sản phẩm trên tay và nhận thấy nó rất mỏng nhẹ. Bộ đôi trọng lượng chỉ 173 g đi kèm độ dày 7.5 mm hứa hẹn sẽ giúp bạn cầm cực dễ dàng. Smartphone mình đang dùng nặng đến 213 g nên siêu phẩm OPPO này khiến mình vô cùng ấn tượng bởi độ nhẹ nhàng và linh hoạt.\r\nMàn hình 60 Hz khá ổn\r\nTiếp theo, chất lượng hiển thị là điều rất đáng chú ý khi mình đánh giá OPPO Reno7 Z 5G. Smartphone sở hữu màn hình kích thước 6.43 inch, đủ dùng đối với mọi thao tác và trải nghiệm\r\nĐiện thoại OPPO vừa ra mắt được trang bị bộ 4 máy ảnh chất lượng, gồm có camera chính 64 MP và khẩu độ f/1.7, camera macro 2 MP kèm khẩu độ f/2.4, camera chiều sâu độ phân giải 2 MP và một camera trước 16 MP có khẩu độ f/2.4.\r\nChip Snapdragon 695 xử lý game tương đối mượt\r\nDung lượng pin 4.500 mAh khá lớn so với thiết kế máy\"'),
(62, 'OPPO Reno7 4G', 7500000, 4, 'oppo4.png', 100, '\"OPPO Reno7 4G là một chiếc điện thoại tối ưu trong tầm giá tuy hiệu năng không quá mạnh mẽ nhưng vẫn có thể đáp ứng được các nhu cầu giải trí cơ bản. Ngoài ra đây là một chiếc điện thoại có thiết kế đẹp, mặt lưng độc đáo, dung lượng pin lớn, sạc nhanh và có giá vô cùng hợp lý. \r\nMàn hình chất lượng, thoả sức khám phá và giải trí - 6.43 inches, AMOLED, Full HD+\r\nCamera chất lượng với cảm biến thế hệ mới - Cụm 3 camera 64 MP, đa dạng chế độ chụp\r\nChiến game ổn định nhờ con chip mạnh mẽ - Snapdragon™ 680, RAM 8GB\r\nKhông lo gián đoạn với viên pin lớn 4500 mAh, sạc nhanh SUPERVOOCTM 33W\"'),
(63, 'Realme 9 Pro 5G', 6000000, 5, 'realme.png', 400, '\"Realme 9 Pro sở hữu thiết kế được làm mới hoàn toàn. Hiệu ứng quang học thay đổi màu sắc cùng với đó là hiệu ứng “ánh sao” tạo nên một mặt lưng vô cùng huyền ảo thu hút mọi ánh mắt. Tuy nhiên để đem tới vẻ đẹp này, nhà sản xuất đến từ Trung Quốc đã phải sử dụng nhựa bóng thay vì nhựa nhám như trên Realme 8 Pro, điều này chắc chắn sẽ khiến mặt lưng dễ bị bẩn hơn do bám mồ hồi và dấu vân tay.\r\nVề thông số, Realme 9 Pro được trang bị màn hình IPS LCD với kích thước 6.6 inch hỗ trợ độ phân giải Full HD+ và tần số quét 120Hz, độ sáng khoảng 600 nít.\r\nRealme 9 Pro được trang bị bộ vi xử lý Qualcomm Snapdragon 695 kèm 8GB RAM. Tuy đây chỉ là một con chip thuộc Snapdragon 6 Series nhưng nó đạt khoảng 400 ngàn điểm thông qua bài kiểm tra của Antutu Benchmark, hứa hẹn sẽ đem tới nhiều sự bất ngờ.\r\nRealme 9 Pro sở hữu cụm ba camera bao gồm cảm biến chính 64MP, ống kính góc siêu rộng 8MP và camera macro 2MP. Đây là một điểm “cải lùi” so với sản phẩm tiền nhiệm bởi vì cảm biến chính của Realme 8 Pro có cảm biến chính độ phân giải lên tới 108MP.\"'),
(64, 'Realme C21Y', 2000000, 5, 'realme1.png', 50, '\"Chiếc máy này cũng sở hữu cảm biến vân tay 1 chạm đặt ở mặt lưng giúp người dùng dễ dàng mở khoá máy nhanh chóng và bảo mật. \r\nVề màn hình, Realme C21Y sở hữu màn hình kích thước lớn 6.5 inches, độ phân giải HD+ (720 x 1600 pixels). Camera selfie của chiếc máy này có độ phân giải 5MP, f/2.2.\r\nKhả năng hiển thị của máy tương đối tốt, màu sắc trong trẻo và khá dịu mắt. Nhìn chung, so với mức giá thì chiếc máy này có màn hình ở mức khá, kích thước lớn, chi tiết hiển thị trên màn hình rõ ràng. \r\nRealme C21Y có đến 3 camera phía sau bao gồm camera chính 13MP, camera cận cảnh 2MP và camera đo chiều sâu 2MP. \r\nVề mặt hiệu năng, Realme C21Y được trang bị bộ vi xử lý khá lạ là Spreadtrum T610 được sản xuất trên tiến trình 12nm. Con chip này tuy lạ lẫm với nhiều người nhưng cũng thể hiện sức mạnh khá tốt. Chiếc máy này có dung lượng RAM là 3GB và 32GB bộ nhớ lưu trữ. \"'),
(65, ' Realme 8', 4000000, 5, 'realme2.png', 100, '\"Realme 8 được trang bị viên pin 5.000 mAh và sau hơn 7 tháng sử dụng thì mình thấy máy đáp ứng rất tốt nhu cầu sử dụng của mình trong cả 1 ngày dài. Để cho các bạn dễ hình dung hơn về thời gian sử dụng pin của Realme 8 thì mình sẽ thực hiện một bài test pin theo tiêu chuẩn của TGDĐ và điều kiện cụ thể như sau:\r\n\r\nTrải nghiệm 4 tác vụ xoay vòng gồm: Chơi Liên Quân Mobile (thiết lập đồ họa như hình bên dưới), xem YouTube, lướt Facebook và sử dụng Chrome.\r\nMỗi tác vụ sử dụng 1 tiếng đồng hồ.\r\nĐộ sáng màn hình là 100%.\r\nCắm tai nghe có dây xuyên suốt và bật âm lượng lên 100%.\r\nBật Wifi và các thông báo từ mạng xã hội.\r\nKhông bật tiết kiệm pin, màn hình thích ứng, GPS và Bluetooth.\r\nChấm từ 100% đến 0%.\"'),
(66, 'Realme C11 2021', 1000000, 5, 'realme3.png', 300, '\"Một trong những điểm khiến mình ấn tượng nhất khi nhìn vào thông số cấu hình Realme C11 (2021) đó chính là viên pin 5.000 mAh. Tất nhiên để chứng minh rằng pin Realme C11 (2021) có thể dùng được gần 9 tiếng thì mình sẽ sử dụng bài test pin theo tiêu chuẩn của TGDĐ và điều kiện cụ thể là như sau: \r\n\r\nTrải nghiệm 4 tác vụ xoay vòng gồm: Chơi Liên Quân Mobile (thiết lập đồ họa như hình bên dưới), xem YouTube, lướt Facebook và sử dụng Chrome.\r\nLuân phiên sử dụng mỗi tác vụ 1 tiếng đồng hồ.\r\nĐộ sáng màn hình: 100%.\r\nĐã lắp SIM vào máy.\r\nCắm tai nghe có dây xuyên suốt.\r\nBật WiFi và các thông báo từ mạng xã hội.\r\nTắt chế độ tiết kiệm pin, màn hình thích ứng, GPS và Bluetooth\r\nChấm từ 100% kể từ lúc rút sạc đến 0% pin.\"'),
(67, 'Realme 8 Pro', 4000000, 5, 'realme4.png', 110, '\"Trước khi đi vào đánh giá camera, mình sẽ điểm qua nhanh thông số camera Realme 8 Pro:\r\nCamera chính 108 MP có thể zoom 3x.\r\nCamera góc rộng 8 MP.\r\nCamera macro 2 MP.\r\nCamera đo chiều sâu 2 MP.\r\nCamera selfie 16 MP.\r\nHiệu năng Realme 8 Pro vẫn còn tốt với Snapdragon 720G\r\nDành cho những bạn nào chưa biết, bản tiêu chuẩn Realme 8 sử dụng con chip Helio G95, trong khi Realme 8 Pro thì sử dụng chip Qualcomm Snapdragon 720G, ở mặt bằng chung thì đây là hai con chip đều hướng đến nhu cầu chơi game, tản nhiệt tốt, GPU ở mức khá. Sau đây, mình sẽ tóm tắt thông số cấu hình Realme 8 Pro cho các bạn dễ theo dõi nha!\r\n\r\nMàn hình: Kích thước 6.4 inch, tấm nền Super AMOLED, độ phân giải Full HD+ (1.080 x 2.400 pixel).\r\nCamera sau: 108 MP + 8 MP + 2 MP + 2 MP.\r\nCamera selfie: 16 MP.\r\nRAM: 6 GB hoặc 8 GB.\r\nBộ nhớ trong: 128 GB.\r\nCPU: Snapdragon 720G.\r\nGPU: Adreno 618.\r\nDung lượng pin: 4.500 mAh.\"'),
(68, 'Nokia 215 4G', 900000, 6, 'nokia.png', 200, '\"Thiết kế – Ngoại hình\r\nNokia 215 4G có thiết kế nhỏ gọn, không khác biệt so với các mẫu thiết kế đặc trưng của dòng điện thoại này, màu sắc chủ yếu là đen, làm từ nhựa cứng, nút bấm làm từ cao su mềm.\r\nTính năng – Thời lượng pin\r\nĐầu tiên phải nói đến tính năng nổi trội nhất là kết nối 4G, với tính năng này, người dùng có thể lướt Facebook, tìm kiếm thông tin trên Google khá thuận tiện. Ở thời đại smartphone chiếm ưu thế như hiện nay, trải nghiệm web bằng “huyền thoại” cũng là một điều thú vị.Thời lượng pin là điều nhiều người quan tâm, Nokia tuyên bố, với lượng pin đầy, Nokia 215 khi kết nối 4G có thể cung cấp đủ năng lượng để hoạt động suốt ngày dài.\r\nNokia 215 4G có giá thành khá ổn, tính năng và tiện ích cũng đa dạng, thiết kế khá nhỏ gọn và đẹp mắt, 2 SIM 2 sóng, là một sản phẩm đáng để trải nghiệm.\"'),
(69, 'Nokia 110 4G', 800000, 6, 'nokia1.png', 40, '\"Trên tay \"cục gạch\" Nokia 110 4G, bàn phím bấm êm, hoàn thiện tốt, camera làm màu là chính...\r\nSo với Nokia 105 4G thì Nokia 110 4G có giá cao hơn do có thêm camera cũng như chất liệu bàn phím ngon hơn...còn ngoại hình gần tương đồng.\"'),
(70, 'Nokia 110 Dual Sim', 400000, 6, 'nokia2.png', 400, '\"Ở mức giá điện thoại trên dưới 1 triệu đồng, Nokia có 2 gương mặt sáng giá đó là Nokia 110 và 112. Hai máy này có thiết kế dạng thanh, 2 SIM, màn hình màu, bàn phím T9, kiểu dáng nhỏ gọn, có camera, Facebook và đặc biệt là có thể cài đặt thêm phần mềm và trò chơi từ kho ứng dụng Nokia Store.\r\nCả hai đều có màn hình màu 1.8”, camera sau 0.3MP (đây là dòng camera VGA cải tiến cho hình ảnh sáng và sắc nét hơn hẳn) và bộ nhớ trống khoảng 10MB, hỗ trợ gắn thêm thẻ nhớ microSD lên đến 32GB. Cả hai đều hỗ trợ nghe nhạc MP3, riêng 112 có bộ loa ngoài lớn hơn, lên đến 105phon, thuộc dạng “đỉnh” trên thị trường. Cả hai đều trang bị công nghệ đổi sim siêu tốc độc quyền của Nokia, cho phép đổi sim mà không cần tháo pin tắt máy. Điều này vừa tăng tính tiện lợi, vừa giúp pin dùng lâu hơn.\r\nVới mục tiêu đem internet đến quảng đại công chúng, Nokia 110 và 112 là cách thức ít tốn kém nhất để trải nghiệm lợi ích của internet di động. Có lẽ vì vậy mà Mobifone chọn sản phẩm này để gia tăng lượng người dùng internet di động bằng cách tặng gói khuyến mãi 3 tháng miễn phí cước dữ liệu khi mua Nokia 112.\"'),
(71, 'Vivo Y15s', 2000000, 7, 'vivo.png', 1400, '\"Dù mặt lưng máy chỉ được làm từ nhựa nhưng với những đường kẻ dọc và hiệu ứng họa tiết tựa như những viên kim cương trông Vivo Y15s vẫn thật sang trọng và bóng bẩy so với những chiếc smartphone khác cùng phân khúc. \r\nCụm 2 camera AI sau ấn tượng Hiệu năng ổn định, đa nhiệm trơn tru\r\nVivo Y15s có gì nổi bật với bộ vi xử lý Helio P35 của MediaTek? Thực sự trong phân khúc giá này khi Vivo Y15s được trang bị chipset này sẽ đem đến cho bạn những trải nghiệm giải trí, tác vụ tương đối tốt. Cùng với bộ nhớ RAM 3GB, ROM 32GB và hỗ trợ thêm thẻ nhớ ngoài, mọi tác vụ đa nhiệm trên máy sẽ mượt mà và nhanh hơn những gì bạn kỳ vọng. \r\nViên pin 5000mAh - Thỏa sức trải nghiệm 1 ngày dài \"'),
(72, 'Vivo X80', 15000000, 7, 'vivo1.png', 90, '\"Cấu hình cực mạnh với Dimensity 9000\r\nVivo X80 là một trong số những điện thoại sớm nhất sử dụng MediaTek Dimensity 9000, cùng với chip chụp ảnh chuyên dụng V1 + của Vivo. Trong AnTuTu, Vivo X80 đạt 983.481 điểm, ngang bằng với điểm số của những chiếc máy dùng Snapdragon 8 Gen 1. Đừng quên Vivo X80 còn có tính năng mở rộng RAM lên tới 4GB.\r\nThời lượng pin ấn tượng của Vivo X80\r\nCùng với hiệu suất tuyệt vời, Vivo X80 cũng cung cấp thời lượng pin tốt. Máy sở hữu viên pin 4.500mAh và hỗ trợ sạc nhanh 80W.\r\nMáy ảnh Vivo X80\r\nĐiện thoại Vivo X-series được biết đến với hiệu suất máy ảnh và X80 được đặt rất nhiều kỳ vọng. Vivo đã trang bị cho X80 một camera chính 50 MP với chống rung quang học (OIS), một camera 12 MP với zoom quang 2X, và một camera góc siêu rộng 12 MP.\"'),
(73, 'Vivo V23 5G', 10000000, 7, 'vivo2.png', 120, '\"Điểm số đo được từ AnTuTu cho thấy vivo V23 5G đạt khoảng hơn 488 nghìn điểm, trong đó điểm CPU là hơn 129 nghìn điểm và GPU là 138 nghìn điểm, ngang ngửa với Snapdragon 778G.\r\nĐiểm số từ Geekbench chuyên đo đạt về hiệu năng CPU cho thấy Dimensity 920 có hiệu năng đơn nhân là 739 điểm và đa nhân là 2122 điểm.\r\nPin đủ dùng một ngày, sạc nhanh\r\nSở hữu viên pin dung lượng 4200 mAh không quá lớn nhưng vivo V23 5G gây bất ngờ cho mình khi vẫn cho thời lượng sử dụng ổn thỏa với 6 – 7 tiếng sáng màn hình.\r\nMàn hình độ sáng cao, trong trẻo, tươi tắn\r\nTrở lại với phần màn hình tai thỏ của vivo V23 5G. Màn hình này có kích thước 6.44 inch vừa phải, tấm nền AMOLED, độ phân giải Full HD+ 2400×1080, tỉ lệ 20:9, tần số quét 90Hz, tần số cảm ứng 180Hz, hỗ trợ HDR10+, vân tay trong màn hình. \r\nCamera selfie kép có chất ảnh nịnh mắt\r\n\"'),
(74, 'Vivo Y33s', 5000000, 7, 'vivo3.png', 80, '\"Hiệu năng đủ sài\r\nVivo Y33s được trang bị chip Helio G80 của MediaTek, đây là dòng chip chuyên dành cho những smartphone bình dân với hiệu năng chơi game ổn định nhờ sở hữu 8 nhân xử lý trong đó có 2 nhân hiệu năng cao Cortex-A75 xung nhịp 2.0GHz và 6 nhân Cortex-A55 xung nhịp 1.8 GHz, đi cùng là GPU Mali-G52. \r\nPin khỏe\r\nDù có thiết kế mỏng nhẹ 8mm nhưng Vivo Y33s vẫn được trang bị viên pin 5000mAh hỗ trợ sử dụng lên tới cả ngày. Trải nghiệm thực tế chơi PUBG Mobile ở độ phân giải HD, tốc độ khung hình cao, độ sáng tối đa thì pin giảm 13% trong 34 phút chơi. \r\nvới thiết kế mỏng sang trọng, cụm máy ảnh đẹp, camera selfie ngon, hiệu năng sử dụng được, pin trâu thì Vivo Y33s sẽ là một lựa chọn đáng cân nhắc trong phân khúc tầm trung nếu bạn không đòi hỏi quá nhiều về hiệu năng chơi game lớn hay một bộ máy ảnh chuyên dụng hơn để ghi lại nhiều khoảnh khắc khác nhau. \"'),
(75, 'Samsung Galaxy A13', 3590000, 2, 'samsung.png', 400, 'Phong cách thiết kế của điện thoại thông minh này cũng mang hơi hướng của Samsung. Đặc biệt nó lại chẳng giống các anh em cùng phân khúc mà có vẻ giống với S22 ultra với cụm camea chìm. Sản phẩm hoàn thiện nhựa bóng với những màu sắc trẻ trung, trang nhã.\r\nBộ tứ camera nằm chìm hẳn dưới mặt lưng và nó không nhô lên chút nào, vậy là chẳng cần kính bảo vệ camera nữa rồi. Đặt nằm điện thoại trên bàn không hề có chút nào bị kênh cả. Đây là điều tuyệt vời bạn chỉ tìm thấy trên một vài sản phẩm của Samsung và đặc biệt là chiếc S22 Ultra mới nhất năm nay.\r\nMàn hình của chiếc Galaxy A13 này cũng không mấy ấn tượng. Đó là một màn hình lớn 6.6 inch, độ phân giải Full HD (1080 x 2408 pixel), mật độ 400 ppi. Mặc dù là một  màn hình LCD nhưng độ sáng của nó khá đáng nể. Đo được độ sáng màn hình ở chế độ tự động đạt tới 587 nits, không phải quá xuất sắc nhưng tầm giá này rất tuyệt vời rồi.\r\nĐánh giá một chút thông qua so sánh điểm chuẩn GeekBench 5 bạn sẽ thấy sự khác  biệt giữa 2 điện thoại dùng chung 1 chip. Điểm số đa lõi của Galaxy A13 thậm chí chỉ bằng một nửa so với Galaxy A21s mặc dù chúng chạy chung 1 chipset luôn. Xem một chút lõi đơn thì bạn sẽ thấy Galaxy A21s vẫn hơn một chút đó.\r\n'),
(76, 'Samsung Galaxy A04', 2490000, 2, 'samsung1.png', 30, 'Thiết kế sang trọng, tối giản Samsung Galaxy A04 sở hữu ngôn ngữ thiết kế tối giản, mặt lưng được làm bằng nhựa bóng cùng các đường vân tròn tạo cảm giác sang trọng và độc đáo.\r\nMàn hình lớn, chất lượng hình ảnh hiển thị trung bình\r\nSamsung Galaxy A04 sở hữu màn hình PLS LCD 6.5 inches cùng độ phân giải HD+ và tần số quét cơ bản 60Hz. Nếu bạn đã sử dụng quen màn hình 90Hz thì bạn sẽ thấy chiếc điện thoại vẫn có thể đáp ứng tốt nhu cầu cơ bản thông thường.\r\nThông qua phần mềm Benchmark\r\nPhần mềm đầu tiên mình muốn test trước chính là AnTuTu Benchmark, ở phần mềm này Samsung Galaxy A04 đạt 119,543 điểm. '),
(77, 'Samsung Galaxy A53 5G', 8690000, 2, 'samsung2.png', 40, 'Galaxy A53 5G hiệu năng chiến game tốt với chip Exynos 12280\r\nTrước khi bắt đầu, mình sẽ điểm nhanh qua thông số cấu hình Galaxy A53 5G cho các bạn dễ theo dõi nha!\r\n\r\nMàn hình: Kích thước 6.5 inch, tấm nền Super AMOLED, độ phân giải Full HD+, tần số quét 120 Hz.\r\nHệ điều hành: Android 12 (One UI 4.1).\r\nCamera sau: Chính 64 MP, góc siêu rộng 12 MP, camera đo chiều sâu 5 MP, camera macro 5 MP.\r\nCamera trước: Độ phân giải 32 MP.\r\nChip: Exynos 1280.\r\nRAM: 8 GB, tính năng RAM Plus hỗ trợ mở rộng RAM thêm 6 GB.\r\nBộ nhớ trong: 128 GB.\r\nPin: 5.000 mAh, hỗ trợ sạc nhanh 25 W.\r\nChấm điểm hiệu năng Galaxy A53 5G\r\nỞ phần này, mình sẽ sử dụng các phần mềm chuyên dụng như 3DMark, PCMark, GeekBench 5 để chấm điểm hiệu năng Galaxy A53 5G và điều kiện để mình chấm điểm như sau:\r\n\r\nPin của máy phải từ 90 – 100%.\r\nKhông vừa sạc pin vừa chấm điểm.\r\nChấm 3 lần liên tục và lấy kết quả trung bình sau 3 lần chấm.'),
(78, 'Samsung Galaxy S22 Bora Purple', 12490000, 2, 'samsung3.png', 70, 'Xét về thiết kế của Galaxy S22 trong thế giới Android hiện tại có thể nói là khác biệt, nhỏ gọn và gần như chỉ còn Samsung là cho ra mắt điện thoại nhỏ gọn mà thôi. Và kiểu thiết kế đối xứng và đều đặn này lại vô cùng phù hợp với Galaxy S22, hơn cả S22+ vì S22+ có màn hình to hơn, nặng hơn và thao tác một tay chắc chắn không thể thoải mái bằng S22.\r\nKích thước 6.1\", nhỏ hơn 0.1\" so với S21 năm ngoái nhưng do thiết 4 viền đều nhau nên trải nghiệm vẫn vô cùng tuyệt. Màn hình không còn cong, lại đều và mỏng hơn S21, mọi thông số khác y hệt như S22+ cho nên chất lượng hiển thị không có gì phải bàn.\r\nBây giờ nhìn về thị trường Android nói chung, Galaxy S22 đang được bán với mức giá loanh quanh 19-20 triệu đồng, được tặng quà và có khi trừ thêm tiền, còn nếu mua hàng cũ thì loanh quanh 13-14 triệu đồng. Ở trong tầm giá dưới 20 triệu, hàng chính hãng và hậu mãi tốt thì gần như không có điện thoại Android nào qua được Galaxy S22.\r\nSnapdragon 8 gen 1, 8GB RAM và 128GB bộ nhớ trong, hỗ trợ 5G và vô vàn ưu đãi từ Samsung đã khiến Galaxy S22 nổi bật hơn so với các đối thủ như Oppo Reno 7 Pro, Xiaomi 12,...'),
(79, 'Samsung Galaxy S21 FE 5G', 11690000, 2, 'samsung4.png', 49, 'Đúng như nhiều hình ảnh được leak ra trước sự kiện, thì máy có một nét thiết kế tương đồng với dòng flagship S21 series và là một thiết kế sang trọng hơn nếu so với Galaxy S20 FE. Khung máy được làm từ kim loại chắc chắn và được bo cong các góc, đem lại cảm giác thoải mái khi cầm nắm.\r\nMặt trước là màn hình Super AMOLED với kích thước lớn lên đến 6.4 inch, độ phân giải Full HD+, và đặc biệt là máy được trang bị  tần số quét 120 Hz. Hứa hẹn sẽ đem lại một trải nghiệm thị giác vô cùng tuyệt vời tương tự như flagship nhưng với mức giá dễ chịu hơn.\r\nNhư đã nêu ở trên, cụm camera sau chứa camera chính, camera góc siêu rộng và camera tele với độ phân giải lần lượt là 12 MP, 12 MP và 8 MP, đặc biệt đối với camera tele có khả năng zoom lên đến 30x. Ngoài ra, camera trước được đặc biệt chú ý nâng cấp với độ phân giải lên đến 32 MP.'),
(80, 'Samsung Galaxy S22 Ultra 5G ', 23000000, 2, 'samsung5.png', 80, 'Bên cạnh đó, khả năng hiển thị của Galaxy S22 Ultra cũng là điểm nhấn không thể bỏ qua khi máy được trang bị tấm nền Dynamic AMOLED 2X sắc nét có kích thước 6.8 inch, độ phân giải QHD+, tần số quét 120 Hz cho các thao tác vuốt chạm mượt mà, hỗ trợ HDR 10+. Ngoài ra thì màn hình Galaxy S22 Ultra còn được bao phủ bởi kính cường lực Gorilla Glass Victus+ nhằm gia tăng độ bền cho thiết bị.'),
(81, 'Samsung Galaxy Z Flip4 5G Flex Mode Collection', 18990000, 2, 'samsung6.png', 90, 'Sở hữu một vẻ ngoài sang xịn mịn, bộ sưu tập giới hạn Galaxy Z Flip4 Flex Mode Collection mang trên mình một vẻ đẹp hiện đại và sang trọng đúng với định hướng của Z Flip4 là một chiếc điện thoại cao cấp của nhà Samsung. Chính vì thế mà mình tin chắc rằng, chỉ cần bạn bắt gặp được vẻ chỉn chu từ khâu thiết kế bên ngoài của Galaxy Z Flip4 Flex Mode Collection thôi cũng đủ để làm xao xuyến bạn đấy\r\nĐối với các phụ kiện đi kèm trong bộ sưu tập Galaxy Z Flip4 Flex Mode Collection năm nay, Samsung đã đem đến 6 thiết kế độc đáo cho người dùng có thể thỏa thích thể hiện dấu ấn cá nhân như:\r\n\r\nỐp lưng Galaxy Z Flip4 độc đáo\r\nTúi đeo thời trang dành riêng cho Galaxy Z Flip4\r\nTúi đeo tai nghe Galaxy Buds 2 Pro\r\nVí đựng thẻ sang trọng\r\nThắt lưng đa năng\r\nDây đeo cổ thanh lịch'),
(82, 'Samsung Galaxy Z Fold3 5G ', 23490000, 2, 'samsung7.png', 100, 'Một thiết bị gập bền, thiết kế tinh tế cần phải đi kèm với trải nghiệm màn hình đỉnh và Samsung đã làm được điều đó trên Galaxy Z Fold3 5G. Cả hai màn hình trên Z Fold3 5G đều được trang bị tần số quét 120Hz nên mọi thao tác, nội dung hiển thị đều cực kì mượt mà, không có độ trễ và đặc biệt tấm nền Dynamic AMOLED 2X nâng tầm trải nghiệm hiển thị của mình lên rất nhiều. Màn hình Z Fold3 5G cũng được bảo vệ bởi kính cường lực mới nhất Corning Gorilla Glass Victus và nếp gấp cũng mờ hơn so với bản cũ.\r\nGalaxy Z Fold3 5G hiệu năng đỉnh của chóp với Snapdragon 888, không hề bị quá nhiệt\r\nĐầu tiên thì mình sẽ điểm qua nhanh thông số cấu hình Galaxy Z Fold3 5G:\r\n\r\nMàn hình: 7.6 inch (màn hình chính), 6.2 inch (màn hình phụ), Dynamic AMOLED 2X, 120 Hz.\r\nChip: Snapdragon 888, tiến trình 5 nm, hỗ trợ 5G\r\nRAM: 12 GB.\r\nBộ nhớ trong: 256 GB hoặc 512 GB.\r\nHệ điều hành: Android 11.\r\nPin: 4.400 mAh (2 viên pin).\r\nCamera: 12 MP - 12 MP - 12 MP (camera sau) và 4 MP - 10 MP (camera trước).'),
(83, 'Samsung Galaxy Z Fold4 5G', 33990000, 2, 'samsung8.png', 40, 'Đánh giá Samsung Galaxy Z Fold 4 về ngoại hình khá giống với phiên bản tiền nhiệm khi cho người dùng cảm giác cầm nắm khá đẹp mắt khi gập lại. Tuy nhiên, công ty đã thực hiện một số thay đổi về chất lượng thiết kế của thiết bị để làm cho nó nhỏ gọn và bền hơn. \r\nMột trong những yếu tố hấp dẫn khiến Samsung Z Fold 4 trở nên hoàn hảo hơn là sản phẩm sử dụng hai màn hình. Trong đó, màn hình chính có kích thước 7,6 inch được trang bị tấm nền Dynamic AMOLED, độ phân giải 2176 x 1812 pixel. Theo trải nghiệm thực tế cho thấy màu sắc rực rỡ, lướt mượt mà với tần số quét 120Hz. Đồng thời phần viền được thiết kế mỏng hơn giúp không gian hiển thị trên màn hình rộng rãi hơn, cho trải nghiệm xem phim, lướt web tuyệt vời hơn.\r\nĐánh giá Samsung Galaxy Z Fold 4 về hệ thống camera cơ bản giống với các phiên bản Galaxy S22 và Galaxy S22 Plus. Cụ thể, thiết lập camera bao gồm một ống kính chính 50MP, một ống kính góc siêu rộng 12MP và một ống kính tele 10MP hỗ trợ zoom quang 3x, OIS, khẩu độ f1.8, độ phân giải điểm ảnh 2μm, lấy nét tự động Dual Pixel AF. '),
(84, 'iPhone 14 Pro Max', 28490000, 1, 'iphone.png', 200, 'Notch hình “viên thuốc” thay vì hình “chữ i”\r\nChipset Apple A16 Bionic nhanh hơn\r\nLuôn hiển thị với tốc độ làm mới 1-120Hz\r\nMáy ảnh 48MP với quay video 8K\r\niPhone 14 Pro Max đi kèm với một lỗ đục hình viên thuốc. Tuy nhiên, khi màn hình được bật, iOS sẽ tạo ra ảo giác về một viên thuốc hoàn chỉnh, loại bỏ khoảng trống giữa hai bên. Nó cũng có thể được sử dụng để chứa các thông báo về quyền riêng tư của máy ảnh và micrô.\r\nĐầu tiên, điện thoại mới có tần số làm tươi rộng hơn một chút: 1-120Hz trên iPhone 14 Pro Max so với 10-120Hz mà chúng ta đã có trên iPhone 13 Pro Max.'),
(85, 'iPhone 14 Pro ', 25490000, 1, 'iphone.png', 100, 'Camera chính 48 MP với khẩu độ f/1.78, hệ thống chống rung cảm biến thế hệ thứ 2.\r\nCamera góc siêu rộng 12 MP với khẩu độ f/2.2, góc nhìn 120 độ.\r\nCamera tele 12 MP khẩu độ f/2.8, zoom kỹ thuật số 3x, OIS.\r\nCamera trước 12 MP với khẩu độ f/1.9, quay video 4K, tốc độ khung hình 60 FPS.\r\n'),
(86, 'iPhone 14 Plus ', 22990000, 1, 'iphone1.png', 40, 'Có cùng kích thước màn hình 6,7 inch, bản Plus nặng 203 gram, nhẹ hơn đáng kể mức 240 gram của bản Pro Max. Thiết kế khung nhôm, mặt kính không cao cấp bằng \"đàn anh\" nhưng giúp sản phẩm nhẹ nhàng, chắc chắn kể cả khi sử dụng thời gian dài liên tục. Người dùng có thể tự tin sử dụng 14 Plus cả khi có ốp lẫn không ốp thay vì luôn sợ trơn trượt, dễ rơi như 14 Pro Max.\r\niPhone 14 Plus được Apple khẳng định là mẫu iPhone có pin \"tốt nhất trong lịch sử\" của hãng. Đây không phải thông tin quá bất ngờ bởi máy có cùng dung lượng pin 4.323 mAh với 14 Pro Max. Việc sử dụng dòng chip cũ hơn, màn hình thông số kém hơn giúp bản Plus tiêu tốn ít điện năng hơn \"đàn anh\". Thử nghiệm thực tế cho thấy đây đúng là smartphone có pin đầu bảng hiện nay. Thời gian màn hình bật trong khoảng 10-11 tiếng, đủ dùng cho một ngày bận rộn hoặc thậm chí gần hai ngày nếu mức sử dụng trung bình.\r\niPhone 14 Plus chỉ có hệ thống camera kép nhưng chất lượng ảnh có thể đáp ứng đa số nhu cầu người dùng. Trang bị này tương tự iPhone 14 và nhỉnh hơn một chút so với iPhone 13. Cảm biến chính lớn hơn (kích thước điểm ảnh 1,9 micromet so với 1,7 micromet của iPhone 13) và khẩu độ mở cao hơn là f/1.5 so với f/1.6. Khác biệt trong trải nghiệm thực tế không đáng kể.'),
(87, 'iPhone 13 Pro Max ', 31490000, 1, 'iphone2.png', 50, 'Không có gì ngạc nhiên khi bộ ba iPhone 13 khi ra mắt vẫn mang thiết kế của thế hệ trước, bởi theo quá trình phát triển của các sản phẩm Apple, ngoại hình của máy đã có sự thay đổi giữa các thế hệ, điều này không có quá nhiều khác biệt. Ngoài ra còn có rất nhiều thế hệ điện thoại với thiết kế hoàn toàn mới, từ iPhone 6 đến iPhone X, cho đến dòng iPhone 13 là thế hệ thứ hai của dòng điện thoại lại mang thiết kế vuông vắn với các góc cạnh sắc nét thể hiện sự sang trọng, đẳng cấp và mạnh mẽ.\r\nVới tần số quét màn hình 120Hz, loại màn hình này sẽ cho phép bạn hiển thị hình ảnh mượt mà và sống động hơn so với màn hình 60Hz và 90HzĐối với màn hình iPhone 13 Pro Max, thật sự nó rất ấn tượng bởi hình ảnh hiển thị có chiều sâu, không gian sáng tối có độ tương phản mạnh. Dù mới thay từ 12 Pro Max nhưng ngay lập tức tôi cảm nhận được sự phong phú của màu sắc, độ sâu của ảnh trở nên sắc nét hơn.\r\n\r\nĐộ sáng của màn hình cũng là một điểm khá quan trọng, nó sẽ hiển thị nhiều hơn trong quá trình thực tế. Với môi trường ánh sáng quen thuộc, nếu trước đây  với iPhone 12 Pro Max bây giờ với mức độ sáng màn hình của iPhone 13 Pro Max ảnh đã điều chỉnh thấp hơn khoảng 30% nhưng vẫn đẹp. Đặc biệt với những video khi kích hoạt chức năng HDR, độ sáng được đẩy lên mức rất cao.\r\nNếu bạn là người luôn muốn ghi lại những khoảnh khắc của cuộc sống bằng máy ảnh thì một bức ảnh chất lượng cao sẽ có giá trị hơn và khiến tôi hài lòng hơn. Camera của điện thoại ngày càng tốt hơn, cũng giống như iPhone, ảnh chụp bằng iPhone 13 Pro Max thực sự rất tốt, mọi bức ảnh chụp ra đều có độ tương phản và cân bằng tốt. Ngoài ra, các vùng tối của ảnh trở nên sáng hơn, có chiều sâu và mô phỏng cảnh khi ảnh được chụp, không còn độ sáng đồng đều trên ảnh như các thế hệ trước.'),
(88, 'iPhone 13 Pro', 24490000, 1, 'iphone2.png', 50, 'Màn hình: Kích thước 6.1 inch, độ phân giải 2.532 x 1.170 pixel, tấm nền Super Retina XDR OLED, hỗ trợ tần số quét 120 Hz.\r\nCPU: Apple A15 Bionic (tiến trình 5 nm).\r\nGPU: Apple GPU.\r\nRAM: 6 GB.\r\nBộ nhớ trong: 128 GB, 256 GB, 512 GB hoặc 1 TB\r\nDung lượng pin: Khoảng 3.095 mAh, sạc nhanh 20 W.\r\nHệ điều hành: Trước khi cập nhật là iOS 15.3.1 và sau khi cập nhật là iOS 15.4.1.\r\nTình trạng pin: 100%.'),
(89, 'OPPO A77s', 6000000, 4, 'oppo.png', 48, 'Hiệu năng OPPO A77s khá ổn, tác vụ thường ngày vô tưOPPO A77s còn trang bị 8 GB RAM cùng với khả năng mở rộng RAM hiện đại hứa hẹn sẽ mang lại sự ổn định đối với hầu hết các tác vụ đa nhiệm thường ngày. Đồng thời, máy cũng sở hữu bộ nhớ trong 128 GB đáp ứng tốt nhu cầu lưu trữ cơ bản của người dùng rồi.\r\nĐiện thoại được trang bị viên pin có dung lượng 5000 mAh để bạn có thể sử dụng trong nhiều giờ liền chỉ sau một lần sạc, giúp đáp ứng thời lượng dùng dài lâu cho mọi nhu cầu sử dụng từ đàm thoại, lướt web đến xem phim hay chơi game.'),
(90, 'OPPO A95', 5990000, 4, 'oppo1.png', 30, 'OPPO A95 được cung cấp sức mạnh bởi con chip Snapdragon 662 ra mắt đầu năm 2020. Tuy con chip này cũ nhưng không hề “cùi”, và nó vẫn là một con chip mang lại hiệu năng khá ổn. Đi kèm đó là RAM 8GB và ROM 128GB, cùng hệ điều hành ColorOS.\r\nOPPO A95 sở hữu viên pin khủng với dung lượng 5.000mAh kèm sạc nhanh 33W, mang lại thời lượng pin khá tốt. Nếu chơi game, A95 chỉ tiêu tốn khoảng 11% pin cho 1 tiếng chơi game liên tục mà máy chỉ hơi ấm lên, do đó bạn có thể hoàn toàn yên tâm chiến game. Đối với những tác vụ bình thường, bạn có thể dùng được cả ngày dàiOPPO A95 được trang bị cụm 3 camera với camera chính 48MP và hai camera phụ đều có độ phân giải 2MP. Khi chụp ảnh bình thường ở chế độ mặc định, chúng ta sẽ có ảnh chụp ở 12MP. Còn nếu muốn chụp ở 48MP, bạn hãy vuốt từ trên xuống ở giao diện camera và bật lên.'),
(91, 'OPPO Find X5 Pro', 26990000, 4, 'oppo2.png', 70, 'Camera góc rộng: Độ phân giải 50 MP, khẩu độ f/1.7, chống rung 5 trục dual-OIS.\r\nCamera góc siêu rộng: Độ phân giải 50 MP, khẩu độ f/2.2, hỗ trợ AF.\r\nCamera tele: Độ phân giải 13 MP, khẩu độ f/2.4, hỗ trợ AF.\r\nCamera selfie: Độ phân giải 32 MP, khẩu độ f/2.4.\r\nThiết kế OPPO Find X5 Pro 5G cực sang trọng với mặt lưng được làm từ gốm\r\nMột trong những điểm ấn tượng nhất trên OPPO Find X5 Pro 5G đó là phần mặt lưng được làm từ gốm. Đây có thể xem là chất liệu cao cấp nhất làm nên mặt lưng một chiếc smartphone và quy trình làm ra mặt lưng này cũng rất kỳ công, theo như chia sẻ của OPPO.\r\nMàn hình: Kích thước 6.7 inch, tấm nền LTPO AMOLED, hỗ trợ HDR 10-bit, tốc độ làm tươi 120 Hz, độ phân giải 2K+ (3.216 x 1.440 pixel).\r\nCPU: Snapdragon 8 Gen 1.\r\nRAM: 12 GB.\r\nBộ nhớ trong: 256 GB.\r\nHệ điều hành: Android 12 (giao diện ColorOS 12.1)\r\nDung lượng pin: 5.000 mAh, hỗ trợ sạc nhanh có dây 80 W SuperVOOC, sạc nhanh không dây AirVOOC 50 W.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `tai_khoan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(500) NOT NULL,
  `name` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `quyen_truy_cap` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`tai_khoan`, `mat_khau`, `sdt`, `name`, `diachi`, `quyen_truy_cap`) VALUES
('dath', 'dathandaubuoi', '0123456789', 'Vũ Tiến Đạt - admin', 'đb', 1),
('minhquan', 'hangvuong', '0', '', '', 1),
('nhuquynh', 'quynhxautinh', '0', '', '', 1),
('thebao', 'buoibao', '0', '', '', 0),
('thuan', 'thuanhinh', '0', '', '', 1),
('dath527', 'dathb123', '0123456789', 'Vũ Tiến Đạt - admin', 'đb', 0),
('vutiendat527', '0912489755', '0962288351', 'Vũ Tiến Đạt', 'Huyện Thạch Thất', 0);

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
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_dienthoai` (`id_dienthoai`),
  ADD KEY `id_dienthoai_2` (`id_dienthoai`),
  ADD KEY `id_dienthoai_3` (`id_dienthoai`);

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
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
