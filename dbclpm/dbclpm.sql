-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2014 at 09:03 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

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
  `MA_ANH` int(11) NOT NULL AUTO_INCREMENT,
  `MA_NT` int(11) NOT NULL,
  PRIMARY KEY (`MA_ANH`),
  KEY `FK_NT_CO_ANH` (`MA_NT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE IF NOT EXISTS `binh_luan` (
  `MA_BL` int(11) NOT NULL AUTO_INCREMENT,
  `MA_TK` int(11) NOT NULL,
  `NOI_DUNG` text COLLATE utf8_vietnamese_ci,
  `BAO_VP` int(11) DEFAULT '0',
  `TG_BL` datetime DEFAULT NULL,
  PRIMARY KEY (`MA_BL`),
  KEY `FK_BINH_LUAN_CUA_TK` (`MA_TK`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`MA_BL`, `MA_TK`, `NOI_DUNG`, `BAO_VP`, `TG_BL`) VALUES
(20, 1, 'ola ola', 0, '2014-10-10 07:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `bl_con`
--

CREATE TABLE IF NOT EXISTS `bl_con` (
  `MA_BL` int(11) NOT NULL,
  `MA_BL_CHA` int(11) NOT NULL,
  PRIMARY KEY (`MA_BL`),
  KEY `FK_BL_CHA` (`MA_BL_CHA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bl_nt`
--

CREATE TABLE IF NOT EXISTS `bl_nt` (
  `MA_BL` int(11) NOT NULL,
  `MA_NT` int(11) NOT NULL,
  PRIMARY KEY (`MA_BL`),
  KEY `FK_NT_CO_BL` (`MA_NT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `bl_nt`
--

INSERT INTO `bl_nt` (`MA_BL`, `MA_NT`) VALUES
(20, 4);

-- --------------------------------------------------------

--
-- Table structure for table `hinh_anh`
--

CREATE TABLE IF NOT EXISTS `hinh_anh` (
  `MA_ANH` int(11) NOT NULL,
  `DATA` longblob,
  `SIZE` int(11) DEFAULT NULL,
  `TYPE` text COLLATE utf8_vietnamese_ci,
  `TIME` datetime DEFAULT NULL,
  PRIMARY KEY (`MA_ANH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_tk`
--

CREATE TABLE IF NOT EXISTS `loai_tk` (
  `MA_LTK` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_LTK` text COLLATE utf8_vietnamese_ci,
  `GHI_CHU_LTK` text COLLATE utf8_vietnamese_ci,
  PRIMARY KEY (`MA_LTK`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `loai_tk`
--

INSERT INTO `loai_tk` (`MA_LTK`, `TEN_LTK`, `GHI_CHU_LTK`) VALUES
(1, 'Quan tri he thong', 'Nguoi quan tri he thong'),
(2, 'Chu nha tro', 'Chu nha tro'),
(3, 'Thanh vien', 'Thanh vien');

-- --------------------------------------------------------

--
-- Table structure for table `nha_tro`
--

CREATE TABLE IF NOT EXISTS `nha_tro` (
  `MA_NT` int(11) NOT NULL AUTO_INCREMENT,
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
  `DUYET` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`MA_NT`),
  KEY `FK_NHA_TRO_TAO_BOI` (`MA_TK`),
  KEY `FK_NT_CO_DIA_CHI` (`MA_XA`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `nha_tro`
--

INSERT INTO `nha_tro` (`MA_NT`, `MA_TK`, `MA_XA`, `SO_NHA`, `DIEN_TICH`, `CON_PHONG`, `GIA`, `NGUOI_LH`, `SDT_LH`, `EMAIL_LH`, `DIA_CHI_LH`, `TIEU_DE`, `GIOI_THIEU`, `CN_CUOI`, `TG_TAO_NT`, `DUYET`) VALUES
(4, 20, 1, '123', 123, 123, 123, '123', '123', '123', '123', '123', '123', '2014-10-10 04:09:31', '2014-10-10 00:00:00', 1),
(5, 1, 1, '37', 123, 10, 1000000, 'Nguyen Chi Tam', '123456789', 'nguyenchitam1993@gmail.com', 'Cần Thơ', 'tieu de', '123123123', '2014-10-11 12:54:37', '2014-10-11 12:54:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phuong_xa`
--

CREATE TABLE IF NOT EXISTS `phuong_xa` (
  `MA_XA` int(11) NOT NULL AUTO_INCREMENT,
  `MA_HUYEN` int(11) NOT NULL,
  `TEN_XA` text COLLATE utf8_vietnamese_ci,
  PRIMARY KEY (`MA_XA`),
  KEY `FK_RELATIONSHIP_8` (`MA_HUYEN`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phuong_xa`
--

INSERT INTO `phuong_xa` (`MA_XA`, `MA_HUYEN`, `TEN_XA`) VALUES
(1, 1, 'Thới Lai 2');

-- --------------------------------------------------------

--
-- Table structure for table `quan_huyen`
--

CREATE TABLE IF NOT EXISTS `quan_huyen` (
  `MA_HUYEN` int(11) NOT NULL AUTO_INCREMENT,
  `MA_TINH` int(11) NOT NULL,
  `TEN_HUYEN` text COLLATE utf8_vietnamese_ci,
  PRIMARY KEY (`MA_HUYEN`),
  KEY `FK_RELATIONSHIP_3` (`MA_TINH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `quan_huyen`
--

INSERT INTO `quan_huyen` (`MA_HUYEN`, `MA_TINH`, `TEN_HUYEN`) VALUES
(1, 2, 'Cờ Đỏ'),
(2, 2, 'Cái Răng 1');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE IF NOT EXISTS `tai_khoan` (
  `MA_TK` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`MA_TK`),
  KEY `FK_AVATAR` (`MA_ANH`),
  KEY `FK_TK_THUOC_LOAI` (`MA_LTK`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`MA_TK`, `MA_ANH`, `MA_LTK`, `TEN_TK`, `MAT_KHAU`, `GIOI_TINH`, `EMAIL`, `SDT`, `DIA_CHI`, `NAM_SINH`, `KHOA`, `TG_TAO_TK`) VALUES
(1, NULL, 1, 'admin', 'admin', 1, 'admin@gmail.com', '1234567890', 'Can Tho', 1993, NULL, '2014-10-09 00:00:00'),
(5, NULL, 3, 'asdasd', 'asda', 1, 'nguyenchitam1993@gmail.com', 'asdad', 'Asdasd', 3, NULL, '2014-10-09 10:58:41'),
(6, NULL, 3, 'cap nhat', 'oiuaosiduo', 0, 'oduaosiduoisduk', 'jhksjhkahd', 'kjhdakshdj', 123, NULL, '2014-10-09 11:09:28'),
(7, NULL, 3, 'thanhvien2', 'thanhvien2', 0, 'thanhvien2@gmail.com', '123', 'Sóc Trăng', 1999, NULL, '2014-10-09 10:32:14'),
(8, NULL, 3, 'thanhvien2', 'thanhvein2', 0, 'thanhvien2@gmail.com', '123', 'Sóc Trăng', 1999, NULL, '2014-10-09 10:33:15'),
(17, NULL, 3, 'dangky', 'dangky', 0, 'da@gmail.com', '123', '123', 123, 0, '2014-10-09 10:41:57'),
(18, NULL, 3, 'dahgiyni', 'jsdg', 0, 'sdasd', '12312q', 'qsqd', 123123, 0, '2014-10-09 10:43:38'),
(19, NULL, 3, 'dahgiyni', '', 0, 'sdasd', '12312q', 'qsqd', 123123, 0, '2014-10-09 10:44:24'),
(20, NULL, 2, 'dsa', 'dasdasdasd', 0, 'asdasd', 'asdasd', 'Asdasd231', 123, 0, '2014-10-09 11:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `tinh_thanh`
--

CREATE TABLE IF NOT EXISTS `tinh_thanh` (
  `MA_TINH` int(11) NOT NULL AUTO_INCREMENT,
  `TEN_TINH` text COLLATE utf8_vietnamese_ci,
  PRIMARY KEY (`MA_TINH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tinh_thanh`
--

INSERT INTO `tinh_thanh` (`MA_TINH`, `TEN_TINH`) VALUES
(2, 'Cần Thơ'),
(3, 'Vĩnh Long');

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
