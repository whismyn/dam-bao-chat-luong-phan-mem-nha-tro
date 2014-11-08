-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2014 at 03:01 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbclpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `anh_nt`
--

CREATE TABLE IF NOT EXISTS `anh_nt` (
`MA_ANH` int(11) NOT NULL,
  `MA_NT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE IF NOT EXISTS `binh_luan` (
`MA_BL` int(11) NOT NULL,
  `MA_TK` int(11) NOT NULL,
  `NOI_DUNG` text COLLATE utf8_vietnamese_ci,
  `BAO_VP` int(11) DEFAULT '0',
  `TG_BL` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`MA_BL`, `MA_TK`, `NOI_DUNG`, `BAO_VP`, `TG_BL`) VALUES
(21, 20, 'gì vậy trời', 1, '2014-10-13 11:57:45'),
(22, 1, 'đâu có gì đâu', 1, '2014-10-13 11:57:57'),
(23, 20, 'hả hả', 0, '2014-10-13 11:58:02');

-- --------------------------------------------------------

--
-- Table structure for table `bl_con`
--

CREATE TABLE IF NOT EXISTS `bl_con` (
  `MA_BL` int(11) NOT NULL,
  `MA_BL_CHA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bl_nt`
--

CREATE TABLE IF NOT EXISTS `bl_nt` (
  `MA_BL` int(11) NOT NULL,
  `MA_NT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `bl_nt`
--

INSERT INTO `bl_nt` (`MA_BL`, `MA_NT`) VALUES
(21, 6),
(22, 6),
(23, 6);

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE IF NOT EXISTS `chude` (
`MA_CHU_DE` int(11) NOT NULL,
  `MA_CHU_DE_CHA` int(11) DEFAULT NULL,
  `MA_TK` int(11) NOT NULL,
  `TG_TAO_CHU_DE` date NOT NULL,
  `NOI_DUNG` varchar(10000) COLLATE utf8_vietnamese_ci NOT NULL,
  `TIEU_DE` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`MA_CHU_DE`, `MA_CHU_DE_CHA`, `MA_TK`, `TG_TAO_CHU_DE`, `NOI_DUNG`, `TIEU_DE`) VALUES
(1, NULL, 1, '2014-11-02', '', 'Các thông báo trong diễn đàn'),
(2, NULL, 1, '2014-11-02', '', 'Hỗ trợ sử dụng'),
(3, NULL, 1, '2014-11-02', '', 'Bình luận đánh giá'),
(13, 1, 1, '2014-11-06', '<p>123</p>', '123'),
(14, 1, 1, '2014-11-06', '<p><em><strong>456</strong></em></p>', '456'),
(18, NULL, 1, '2014-11-06', '', 'Khiếu nại, tố cáo'),
(19, 18, 1, '2014-11-06', '<p>kasgdjahsgd</p>\r\n<p>sdugajsdhg</p>\r\n<p>aksgdiqytweqw</p>\r\n<p>e</p>\r\n<p>qsdajsdhkasjhdalskd</p>\r\n<p>asd</p>\r\n<p>asd</p>\r\n<p>asd</p>\r\n<p>as</p>\r\n<p>d<img src="data:image/jpeg;base64,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" alt="" width="284" height="177" /></p>', 'Khiếu nại 1');

-- --------------------------------------------------------

--
-- Table structure for table `hinh_anh`
--

CREATE TABLE IF NOT EXISTS `hinh_anh` (
  `MA_ANH` int(11) NOT NULL,
  `DATA` longblob,
  `SIZE` int(11) DEFAULT NULL,
  `TYPE` text COLLATE utf8_vietnamese_ci,
  `TIME` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_tk`
--

CREATE TABLE IF NOT EXISTS `loai_tk` (
`MA_LTK` int(11) NOT NULL,
  `TEN_LTK` text COLLATE utf8_vietnamese_ci,
  `GHI_CHU_LTK` text COLLATE utf8_vietnamese_ci
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `loai_tk`
--

INSERT INTO `loai_tk` (`MA_LTK`, `TEN_LTK`, `GHI_CHU_LTK`) VALUES
(1, 'Quản trị hệ thống', 'Người quản trị hệ thống'),
(2, 'Chủ nhà trọ', 'Chủ nhà trọ'),
(3, 'Thành viên', 'Là người đăng ký thành viên');

-- --------------------------------------------------------

--
-- Table structure for table `nha_tro`
--

CREATE TABLE IF NOT EXISTS `nha_tro` (
`MA_NT` int(11) NOT NULL,
  `MA_TK` int(11) NOT NULL,
  `MA_XA` int(11) NOT NULL,
  `SO_NHA` text COLLATE utf8_vietnamese_ci,
  `DIEN_TICH` int(11) DEFAULT NULL,
  `CON_PHONG` tinyint(1) DEFAULT NULL,
  `GIA` int(11) DEFAULT NULL,
  `NGUOI_LH` text COLLATE utf8_vietnamese_ci,
  `SDT_LH` text COLLATE utf8_vietnamese_ci,
  `EMAIL_LH` text COLLATE utf8_vietnamese_ci,
  `DIA_CHI_LH` text COLLATE utf8_vietnamese_ci,
  `TIEU_DE` text COLLATE utf8_vietnamese_ci,
  `GIOI_THIEU` text COLLATE utf8_vietnamese_ci,
  `CN_CUOI` datetime DEFAULT NULL,
  `TG_TAO_NT` datetime DEFAULT NULL,
  `DUYET` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=39 ;

--
-- Dumping data for table `nha_tro`
--

INSERT INTO `nha_tro` (`MA_NT`, `MA_TK`, `MA_XA`, `SO_NHA`, `DIEN_TICH`, `CON_PHONG`, `GIA`, `NGUOI_LH`, `SDT_LH`, `EMAIL_LH`, `DIA_CHI_LH`, `TIEU_DE`, `GIOI_THIEU`, `CN_CUOI`, `TG_TAO_NT`, `DUYET`) VALUES
(6, 1, 2, '113', 100, 100, 500000, 'Nguyễn Chí Tâm', '01658000057', 'nguyenchitam1993@gmail.com', '113 Khóm 2, Phường 1, Thị xã Ngã Năm, Sóc Trăng', 'Nhà trọ', 'Giới thiệu nhà trọ', '2014-10-13 11:51:12', '2014-10-13 11:51:12', 1),
(7, 1, 3, '69', 40, 7, 1000000, 'Nguyễn Văn ABC', '12367890', 'abc@gmail.com', '6 Khóm 9 Phương 2', 'Tiêu đề', 'Giới thiệu', '2014-10-13 11:53:08', '2014-10-13 11:53:08', 1),
(8, 1, 5, '37 Quản Trọng Hoàng', 15, 100, 500000, 'Bà Chín', '1234', 'bachin@gmail.com', '37 Quản Trọng Hoàng', 'gì cũng được', 'gì cũng được', '2014-10-14 01:02:56', '2014-10-14 01:02:56', 0),
(13, 1, 27, '40B', 14, 5, 1100000, 'Cô Sáu', '0701.123456', 'co6@gmail.com', ' 40B-Nguyễn Văn Linh-An Khánh-Ninh Kiều', 'Nhà trọ Nguyễn Văn Linh-An Khánh-Ninh Kiều-Cần Thơ', 'Phòng mới có gác rộng, bếp nấu ăn... đặc biệt khu vực yên tĩnh và an ninh', '2014-10-14 09:58:41', '2014-10-14 09:57:00', 0),
(15, 1, 6, '40B', 15, 2, 1200000, 'Chú 7', '123456789', 'chu9@gmail.com', 'Hẻm 125, đường 30/4, Xuân Khánh', 'Nhà trọ giá rẻ - Chú 9', 'Tiện nghi, thoáng mát, wc trong,...', '2014-10-14 10:04:28', '2014-10-14 10:04:28', 0),
(17, 1, 5, '37', 24, 1, 1600000, 'Chị Mai', '0126459786', 'mai@mail.com', 'Nguyễn Văn Linh, ninh kiều', 'Nhà trọ Nguyễn Văn Linh, ninh kiều', 'HIỆN T VÀ 1NG NỮA ĐANG Ở GHÉP PHÒNG 8OOK, GẦN CẦU SỐ 2, NGUYỄN VĂN LINH. VÌ PHÒNG RỘNG, SẠCH SẼ, CHÚNG TÔI VỪA HỌC VỪA LÀM NÊN THỜI GIAN Ở NHÀ ÍT, ĐỒ ĐẠC KO NHIỀU NÊN CẦN 1 BẠN NAM Ở GHÉP.', '2014-10-14 10:25:06', '2014-10-14 10:25:06', 0),
(18, 1, 6, '27', 14, 4, 1500000, 'Kim Ngọc', '01678122521', 'ngoc@yahoo.com', 'hẻm 2, đường 30/4, Xuân Khánh', 'Nhà trọ Kim Ngọc', 'Sạch sẽ, tiện nghi, thoáng mát, có bếp, wc trong...', '2014-10-14 10:27:26', '2014-10-14 10:27:26', 0),
(19, 1, 5, '44', 15, 2, 1600000, 'Tuấn Anh', '0913456987', 'anh@zing.vn', 'hẻm 233,  Nguyễn Văn Linh', 'nam hẽm 233,nguyễn văn cừ,ninh kiều,cần thơ', 'Tiện nghi, thoáng mát, wc trong,...', '2014-10-14 10:30:05', '2014-10-14 10:30:05', 0),
(20, 1, 19, '35', 12, 1, 1000000, 'Nghĩa', '0901213542', 'nghia@gmail.com', '135/35, Trần Hưng Đạo', 'Nhà trọ sinh viên', 'Tiện nghi, thoáng mát, wc trong,...', '2014-10-14 10:33:53', '2014-10-14 10:33:53', 0),
(21, 1, 5, '3', 14, 3, 1400000, 'Nam', '01678114111', 'nam@gmail.com', 'hẻm 2, đường 3/2, Hưng Lợi, Cần Thơ', 'Nhà trọ Sinh Viên', 'Tiện nghi, sạch sẽ, máy lạnh, an ninh,...', '2014-10-14 10:36:44', '2014-10-14 10:36:44', 0),
(22, 1, 27, '14B', 15, 2, 1500000, 'Phúc', '01665456521', 'phuc@gmail.com', '383H1/14B Nguyễn văn cừ nối dài, p. An Khánh, Ninh Kiều CT (đối diện Happy 3 - Hẻm liên tổ 2-3)', 'Phòng trọ 383H1-14B Nguyễn Văn cừ, P. An Khánh, NK', 'Có hàng rào chắn an toàn Yên tĩnh, thoáng mát tiện lợi cho việc học tập Phòng trọ rộng rãi, sạch đẹp có gác  Giá tiền 1,2 tr/tháng/phòng (vào xem phòng tận nơi tuỳ theo tình hình có thể thương lượng) Có wifi cáp quang miễn phí', '2014-10-14 10:40:47', '2014-10-14 10:40:47', 0),
(23, 1, 6, '43', 11, 1, 900000, 'Cô Dung', '0701253684', 'dung@gmail.com', 'hẻm liên tổ 4-5, nguyễn văn linh, gần dhct', 'hẻm liên tổ 4-5, nguyễn văn linh, gần dhct', 'An toàn, mát mẻ,...', '2014-10-14 10:43:41', '2014-10-14 10:43:41', 0),
(24, 1, 1, '51', 14, 1, 800000, 'Chú 2', '01666222444', '', 'gần khách sạn Mỹ Kim', 'Nhà trọ giá rẻ', 'Tiện nghi, thoáng mát, wc trong,...', '2014-10-14 10:45:27', '2014-10-14 10:45:27', 0),
(25, 1, 1, '32', 12, 1, 1000000, 'Anh Tài', '0972535698', 'tai@gmail.com', 'Gần cây xăng 33', 'Nhà trọ giá rẻ', 'Tiện nghi, sạch sẽ, máy lạnh, an ninh,...', '2014-10-14 10:47:26', '2014-10-14 10:47:26', 0),
(26, 1, 2, '43', 12, 1, 1200000, 'Cô 4', '01234556798', 'nhatro9999@gmail.com', 'Gần nhà hàng Trung Tâm', 'Nhà Trọ', 'Tiện nghi, thoáng mát, wc trong,...', '2014-10-14 10:50:10', '2014-10-14 10:50:10', 0),
(27, 1, 2, '23', 12, 2, 1200000, 'Anh Ba', '01232221122', '234@gmail.com', 'trên quốc lộ 901', 'Nhà trọ 234', 'An toàn, mát mẻ, sạch sẽ,...', '2014-10-14 10:58:38', '2014-10-14 10:51:39', 0),
(28, 1, 4, '21', 12, 1, 900000, 'Minh Tân', '0978222333', 'tan@yahoo.com', 'Đối diện quan nước happy city', 'Nhà trọ Tân Tân', 'Tiện nghi, sạch sẽ, máy lạnh, an ninh,...', '2014-10-14 10:53:05', '2014-10-14 10:53:05', 0),
(29, 1, 29, '44', 12, 3, 1200000, 'Minh', '01264947111', 'minh@gmail.com', 'Hẻm 11, gần cầu Quang Trung', 'Nhà trọ giá rẻ', 'An toàn, mát mẻ, sạch sẽ,...', '2014-10-14 10:54:58', '2014-10-14 10:54:58', 0),
(30, 1, 34, '55', 13, 3, 1000000, 'Quang', '0968792662', 'quang@gmail.com', 'Quốc lộ 1a', 'Nhà trọ Quang', 'An toàn, mát mẻ,...', '2014-10-14 10:57:36', '2014-10-14 10:57:36', 0),
(31, 1, 34, '33', 10, 5, 900000, 'Cô Bình', '0913223222', 'binh@gmail.com', 'gần quán nước 9999', 'Nhà trọ Cô Bình', 'An toàn, mát mẻ, sạch sẽ,...', '2014-10-14 11:00:26', '2014-10-14 11:00:26', 0),
(32, 1, 35, '55', 14, 3, 800000, 'Mác', '0901927485', 'trongmac@gmail.com', 'Gần cây xăng 56', 'Nhà trọ giá rẻ', 'Tiện nghi, sạch sẽ, máy lạnh, an ninh,...', '2014-10-14 11:01:55', '2014-10-14 11:01:55', 0),
(33, 1, 37, '33', 12, 3, 1200000, 'Tấn Tài', '0977777777', 'tantai@gmail.com', 'Gần tiệm vàng Tấn Tài', 'Nhà trọ Tấn Tài', 'An toàn, đầy đủ tiện nghi, sạch sẽ,...', '2014-10-14 11:03:55', '2014-10-14 11:03:55', 0),
(34, 1, 38, '65', 10, 11, 1200000, 'Chị Ánh', '01271112223', 'anh123@gmail.com', 'Đối diện quán cơm Tài Có', 'Nhà trọ 333', 'An toàn, mát mẻ,...', '2014-10-14 11:05:44', '2014-10-14 11:05:44', 0),
(35, 1, 13, '12', 13, 2, 1100000, 'Trí', '01676665251', 'tri@gmail.com', 'Gần cây xăng số 2', 'Nhà trọ giá rẻ', 'Tiện nghi, sạch sẽ, máy lạnh, an ninh,...', '2014-10-14 11:06:58', '2014-10-14 11:06:58', 0),
(36, 1, 30, '32', 12, 2, 1200000, 'Phát', '0988222333', 'phat@gmail.com', 'Đối diện tiệm bánh Hoài Nam', 'Nhà trọ Phát Tài', 'An toàn, đầy đủ tiện nghi, sạch sẽ,...', '2014-10-14 11:08:36', '2014-10-14 11:08:36', 0),
(37, 1, 27, '22', 13, 3, 1200000, 'Hải', '0918111552', 'hai@gmail.com', 'Phòng hẻm 12,đường 3/2,phường an khánh,tp CẦN THƠ', 'Nhà trọ sinh viên', 'Cổng rào riêng giờ giấc tu do 24/24.....sân đậu xe rộng rãi. Cáp quang tivi-wjfi miễn phí....', '2014-10-14 11:12:53', '2014-10-14 11:12:53', 0),
(38, 1, 30, '11', 10, 1, 800000, 'Chú 6', '0971222345', 'ntro22@gmail.com', 'Hẻm 33, gần cầu Số 1', 'Nhà trọ 22', 'An toàn, đầy đủ tiện nghi, sạch sẽ,...', '2014-10-14 11:15:15', '2014-10-14 11:15:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phuong_xa`
--

CREATE TABLE IF NOT EXISTS `phuong_xa` (
`MA_XA` int(11) NOT NULL,
  `MA_HUYEN` int(11) NOT NULL,
  `TEN_XA` text COLLATE utf8_vietnamese_ci
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=88 ;

--
-- Dumping data for table `phuong_xa`
--

INSERT INTO `phuong_xa` (`MA_XA`, `MA_HUYEN`, `TEN_XA`) VALUES
(1, 1, 'Thới Hưng'),
(2, 1, 'Đông Hiệp'),
(3, 1, 'Đông Thắng'),
(4, 1, 'Thới Đông'),
(5, 10, 'Hưng Lợi'),
(6, 10, 'Xuân Khánh'),
(7, 3, 'An Phước'),
(8, 3, 'Mỹ Phước'),
(9, 3, 'Chánh Hội'),
(10, 3, 'Mỹ An'),
(11, 3, 'Long Mỹ'),
(12, 3, 'Chánh An'),
(13, 2, 'Tân Phú'),
(14, 14, 'Trường Xuân A'),
(15, 14, 'Trường Thắng'),
(16, 12, 'Thới Thuận'),
(17, 10, 'Cái Khế'),
(18, 10, 'An Hội'),
(19, 10, 'An Cư'),
(20, 10, 'Thới Bình'),
(21, 10, 'An Hòa'),
(22, 10, 'An Nghiệp'),
(23, 10, 'An Phú'),
(24, 10, 'Tân An'),
(25, 10, 'An Lạc'),
(26, 10, 'An Bình'),
(27, 10, 'An Khánh'),
(28, 2, 'Lê Bình'),
(29, 1, 'Thường Thạnh'),
(30, 2, 'Phú Thứ'),
(31, 2, 'Ba Láng'),
(32, 2, 'Hưng Phú'),
(33, 2, 'Hưng Thạnh'),
(34, 1, 'Thới Xuân'),
(35, 1, 'Trung Hưng'),
(36, 1, 'Thạnh Phú'),
(37, 1, 'Trung An'),
(38, 1, 'Trung Thạnh'),
(39, 11, 'Thới Long'),
(40, 11, 'Long Hưng'),
(41, 11, 'Thới Hòa'),
(42, 11, 'Thới An'),
(43, 11, 'Châu Văn Liêm'),
(44, 11, 'Phước Thới'),
(45, 11, 'Trường Lạc'),
(46, 12, 'Thốt Nốt'),
(47, 12, 'Thới Thuận'),
(48, 12, 'Thuận An'),
(49, 12, 'Trung Nhứt'),
(50, 12, 'Thạnh Hòa'),
(51, 12, 'Trung Kiên'),
(52, 12, 'Thuận Hưng'),
(53, 12, 'Tân Hưng'),
(54, 12, 'Tân Lộc'),
(55, 13, 'Trà Nóc'),
(56, 13, 'Trà An'),
(57, 13, 'An Phú'),
(58, 13, 'Bùi Hữu Nghĩa'),
(59, 13, 'Thới An Đông'),
(60, 13, 'Bình Thủy'),
(61, 13, 'Long Tuyên'),
(62, 13, 'Long Hòa'),
(63, 14, 'Thới Thạnh'),
(64, 14, 'Tân Thạnh'),
(65, 14, 'Định Môn'),
(66, 14, 'Trường Thành'),
(67, 14, 'Trường Xuân'),
(68, 14, 'Trường Xuân B'),
(69, 14, 'Xuân Thắng'),
(70, 14, 'Thới Tân'),
(71, 14, 'Đông Bình'),
(72, 14, 'Đông Thuận'),
(73, 15, 'Nhơn Ái'),
(74, 15, 'Nhơn Nghĩa'),
(75, 15, 'Tân Thới'),
(76, 14, 'Giai Xuân'),
(77, 15, 'Mỹ Khánh'),
(78, 15, 'Trường Long'),
(79, 28, 'Vĩnh Trinh'),
(80, 28, 'Vĩnh Bình'),
(81, 28, 'Thạnh Mỹ'),
(82, 28, 'Thạnh Quới'),
(83, 28, 'Thạnh An'),
(84, 28, 'Thạnh Tiến'),
(85, 28, 'Thạnh Thắng'),
(86, 28, 'Thạnh Lợi'),
(87, 28, 'Thạnh Lộc');

-- --------------------------------------------------------

--
-- Table structure for table `quan_huyen`
--

CREATE TABLE IF NOT EXISTS `quan_huyen` (
`MA_HUYEN` int(11) NOT NULL,
  `MA_TINH` int(11) NOT NULL,
  `TEN_HUYEN` text COLLATE utf8_vietnamese_ci
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `quan_huyen`
--

INSERT INTO `quan_huyen` (`MA_HUYEN`, `MA_TINH`, `TEN_HUYEN`) VALUES
(1, 2, 'Cờ Đỏ'),
(2, 2, 'Cái Răng'),
(3, 3, 'Mang Thít'),
(4, 3, 'Long Hồ'),
(5, 3, 'Tam Bình'),
(6, 3, 'Trà Ôn'),
(7, 3, 'Vũng Liêm'),
(8, 3, 'Bình Minh'),
(9, 3, 'Bình Tân'),
(10, 2, 'Ninh Kiều'),
(11, 2, 'Ô Môn'),
(12, 2, 'Thốt Nốt'),
(13, 2, 'Bình Thủy'),
(14, 2, 'Thới Lai'),
(15, 2, 'Phong Điền'),
(16, 4, 'Thành Phố Long Xuyên'),
(17, 3, 'Thành Phố Vĩnh Long'),
(18, 4, 'Châu Thành'),
(19, 4, 'Châu Phú'),
(20, 4, 'Thành Phố Châu Đốc'),
(21, 4, 'Tịnh Biên'),
(22, 4, 'An Phú'),
(23, 4, 'Tân Châu'),
(24, 2, 'Phú Tân'),
(25, 4, 'Chợ Mới'),
(26, 4, 'Thoại Sơn'),
(27, 4, 'Tri Tôn'),
(28, 2, 'Vĩnh Thạnh'),
(29, 52, 'Ngã Năm'),
(30, 52, 'Vĩnh Châu'),
(31, 52, 'Châu Thành'),
(32, 52, 'Thạnh Trị'),
(33, 52, 'Mỹ Tú'),
(34, 52, 'Mỹ Xuyên');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE IF NOT EXISTS `tai_khoan` (
`MA_TK` int(11) NOT NULL,
  `MA_ANH` int(11) DEFAULT NULL,
  `MA_LTK` int(11) NOT NULL,
  `TEN_TK` text COLLATE utf8_vietnamese_ci,
  `MAT_KHAU` text COLLATE utf8_vietnamese_ci,
  `GIOI_TINH` tinyint(1) DEFAULT NULL,
  `EMAIL` text COLLATE utf8_vietnamese_ci,
  `SDT` text COLLATE utf8_vietnamese_ci,
  `DIA_CHI` text COLLATE utf8_vietnamese_ci,
  `NAM_SINH` int(11) DEFAULT NULL,
  `KHOA` tinyint(1) DEFAULT NULL,
  `TG_TAO_TK` datetime DEFAULT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`MA_TK`, `MA_ANH`, `MA_LTK`, `TEN_TK`, `MAT_KHAU`, `GIOI_TINH`, `EMAIL`, `SDT`, `DIA_CHI`, `NAM_SINH`, `KHOA`, `TG_TAO_TK`, `Active`) VALUES
(1, NULL, 1, 'admin', 'admin', 1, 'admin@gmail.com', '1234567890', 'Can Tho', 1993, NULL, '2014-10-09 00:00:00', 1),
(20, NULL, 2, 'dsa', 'dasdasdasd', 0, 'asdasd', 'asdasd', 'Asdasd231', 123, 0, '2014-10-09 11:10:45', 0),
(40, NULL, 2, 'chunhatro1', 'chunhatro1', 1, 'chunhatro1@gmail.com', '1234567890', 'Can Tho', 1999, NULL, '2014-11-06 11:00:41', 1),
(41, NULL, 3, 'thanhvien1', '0', 1, 'kdhaksdj@gmail.com', '123456', 'Cần Thơ', 1992, 0, '2014-11-08 10:50:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tinh_thanh`
--

CREATE TABLE IF NOT EXISTS `tinh_thanh` (
`MA_TINH` int(11) NOT NULL,
  `TEN_TINH` text COLLATE utf8_vietnamese_ci
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=64 ;

--
-- Dumping data for table `tinh_thanh`
--

INSERT INTO `tinh_thanh` (`MA_TINH`, `TEN_TINH`) VALUES
(2, 'Cần Thơ'),
(3, 'Vĩnh Long'),
(4, 'An Giang'),
(5, 'Bà Rịa - Vũng Tàu'),
(6, 'Bắc Giang'),
(7, 'Bắc Kạn'),
(8, 'Bắc Ninh'),
(9, 'Bến Tre'),
(10, 'Bình Dương'),
(11, 'Bình Định'),
(12, 'Bình Phước'),
(13, 'Bình Thuận'),
(14, 'Cà Mau'),
(15, 'Cao Bằng'),
(16, 'Đà Nẵng'),
(17, 'Đắk Lắk'),
(18, 'ĐắK Nông'),
(19, 'Đồng Nai'),
(20, 'Đồng Tháp'),
(21, 'Điện Biên'),
(22, 'Gia Lai'),
(23, 'Hà Giang'),
(24, 'Hà Nam'),
(25, 'Hà Nội'),
(26, 'Hà Tĩnh'),
(27, 'Hải Dương'),
(28, 'Hải Phòng'),
(29, 'Hòa Bình'),
(30, 'Hậu Giang'),
(31, 'Hưng Yên'),
(32, 'TP. Hồ Chí Minh'),
(33, 'Khánh Hòa'),
(34, 'Kiên Giang'),
(35, 'Kon Tum'),
(36, 'Lai Châu'),
(37, 'Lào Cai'),
(38, 'Lạng Sơn'),
(39, 'Lâm Đồng'),
(40, 'Long An'),
(41, 'Nam Định'),
(42, 'Nghệ An'),
(43, 'Ninh Bình'),
(44, 'Ninh Thuận'),
(45, 'Phú Thọ'),
(46, 'Phú Yên'),
(47, 'Quảng Bình'),
(48, 'Quảng Nam'),
(49, 'Quảng Ngãi'),
(50, 'Quảng Ninh'),
(51, 'Quảng Trị'),
(52, 'Sóc Trăng'),
(53, 'Sơn La'),
(54, 'Tây Ninh'),
(55, 'Thái Bình'),
(56, 'Thái Nguyên'),
(57, 'Thanh Hóa'),
(58, 'Thừa Thiên - Huế'),
(59, 'Tiền Giang'),
(60, 'Trà Vinh'),
(61, 'Tuyên Quang'),
(62, 'Vĩnh Phúc'),
(63, 'Yên Bái');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anh_nt`
--
ALTER TABLE `anh_nt`
 ADD PRIMARY KEY (`MA_ANH`), ADD KEY `FK_NT_CO_ANH` (`MA_NT`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
 ADD PRIMARY KEY (`MA_BL`), ADD KEY `FK_BINH_LUAN_CUA_TK` (`MA_TK`);

--
-- Indexes for table `bl_con`
--
ALTER TABLE `bl_con`
 ADD PRIMARY KEY (`MA_BL`), ADD KEY `FK_BL_CHA` (`MA_BL_CHA`);

--
-- Indexes for table `bl_nt`
--
ALTER TABLE `bl_nt`
 ADD PRIMARY KEY (`MA_BL`), ADD KEY `FK_NT_CO_BL` (`MA_NT`);

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
 ADD PRIMARY KEY (`MA_CHU_DE`);

--
-- Indexes for table `hinh_anh`
--
ALTER TABLE `hinh_anh`
 ADD PRIMARY KEY (`MA_ANH`);

--
-- Indexes for table `loai_tk`
--
ALTER TABLE `loai_tk`
 ADD PRIMARY KEY (`MA_LTK`);

--
-- Indexes for table `nha_tro`
--
ALTER TABLE `nha_tro`
 ADD PRIMARY KEY (`MA_NT`), ADD KEY `FK_NHA_TRO_TAO_BOI` (`MA_TK`), ADD KEY `FK_NT_CO_DIA_CHI` (`MA_XA`);

--
-- Indexes for table `phuong_xa`
--
ALTER TABLE `phuong_xa`
 ADD PRIMARY KEY (`MA_XA`), ADD KEY `FK_RELATIONSHIP_8` (`MA_HUYEN`);

--
-- Indexes for table `quan_huyen`
--
ALTER TABLE `quan_huyen`
 ADD PRIMARY KEY (`MA_HUYEN`), ADD KEY `FK_RELATIONSHIP_3` (`MA_TINH`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
 ADD PRIMARY KEY (`MA_TK`), ADD KEY `FK_AVATAR` (`MA_ANH`), ADD KEY `FK_TK_THUOC_LOAI` (`MA_LTK`);

--
-- Indexes for table `tinh_thanh`
--
ALTER TABLE `tinh_thanh`
 ADD PRIMARY KEY (`MA_TINH`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anh_nt`
--
ALTER TABLE `anh_nt`
MODIFY `MA_ANH` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
MODIFY `MA_BL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `chude`
--
ALTER TABLE `chude`
MODIFY `MA_CHU_DE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `loai_tk`
--
ALTER TABLE `loai_tk`
MODIFY `MA_LTK` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nha_tro`
--
ALTER TABLE `nha_tro`
MODIFY `MA_NT` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `phuong_xa`
--
ALTER TABLE `phuong_xa`
MODIFY `MA_XA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `quan_huyen`
--
ALTER TABLE `quan_huyen`
MODIFY `MA_HUYEN` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
MODIFY `MA_TK` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `tinh_thanh`
--
ALTER TABLE `tinh_thanh`
MODIFY `MA_TINH` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anh_nt`
--
ALTER TABLE `anh_nt`
ADD CONSTRAINT `FK_NT_CO_ANH` FOREIGN KEY (`MA_NT`) REFERENCES `nha_tro` (`MA_NT`),
ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`MA_ANH`) REFERENCES `hinh_anh` (`MA_ANH`);

--
-- Constraints for table `binh_luan`
--
ALTER TABLE `binh_luan`
ADD CONSTRAINT `FK_BINH_LUAN_CUA_TK` FOREIGN KEY (`MA_TK`) REFERENCES `tai_khoan` (`MA_TK`);

--
-- Constraints for table `bl_con`
--
ALTER TABLE `bl_con`
ADD CONSTRAINT `FK_BL_CHA` FOREIGN KEY (`MA_BL_CHA`) REFERENCES `binh_luan` (`MA_BL`),
ADD CONSTRAINT `FK_BL_CON` FOREIGN KEY (`MA_BL`) REFERENCES `binh_luan` (`MA_BL`);

--
-- Constraints for table `bl_nt`
--
ALTER TABLE `bl_nt`
ADD CONSTRAINT `FK_BL_CHO_NT` FOREIGN KEY (`MA_BL`) REFERENCES `binh_luan` (`MA_BL`),
ADD CONSTRAINT `FK_NT_CO_BL` FOREIGN KEY (`MA_NT`) REFERENCES `nha_tro` (`MA_NT`);

--
-- Constraints for table `nha_tro`
--
ALTER TABLE `nha_tro`
ADD CONSTRAINT `FK_NHA_TRO_TAO_BOI` FOREIGN KEY (`MA_TK`) REFERENCES `tai_khoan` (`MA_TK`),
ADD CONSTRAINT `FK_NT_CO_DIA_CHI` FOREIGN KEY (`MA_XA`) REFERENCES `phuong_xa` (`MA_XA`);

--
-- Constraints for table `phuong_xa`
--
ALTER TABLE `phuong_xa`
ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`MA_HUYEN`) REFERENCES `quan_huyen` (`MA_HUYEN`);

--
-- Constraints for table `quan_huyen`
--
ALTER TABLE `quan_huyen`
ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`MA_TINH`) REFERENCES `tinh_thanh` (`MA_TINH`);

--
-- Constraints for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
ADD CONSTRAINT `FK_AVATAR` FOREIGN KEY (`MA_ANH`) REFERENCES `hinh_anh` (`MA_ANH`),
ADD CONSTRAINT `FK_TK_THUOC_LOAI` FOREIGN KEY (`MA_LTK`) REFERENCES `loai_tk` (`MA_LTK`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
