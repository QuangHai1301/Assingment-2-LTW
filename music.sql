-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2016 at 10:54 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment2`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `music` (
  `music_name` varchar(30) NOT NULL,
  `music_singer` varchar(20) NOT NULL,
  `music_link` varchar(30) NOT NULL,
  PRIMARY KEY (`music_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`music_name`, `music_singer`, `music_link`) VALUES
('Anh Sẽ Tốt Mà', 'Phạm Hồng Phước', 'baihat/AnhSeTotMa.mp3'),
('Ngốc', 'Hương Tràm', 'baihat/Ngoc.mp3'),
('Cause I Love You', 'Noo Phước Thịnh', 'baihat/CauseILoveYou.mp3'),
('Chỉ Là Thoáng Qua', 'Thùy Chi', 'baihat/ChiLaThoangQua.mp3'),
('Khi Người Mình Yêu Khóc', 'Phan Mạnh Quỳnh', 'baihat/KhiNguoiMinhYeuKhoc.mp3'),
('Nếu Em Còn Tồn Tại', 'Trịnh Đình Quang', 'baihat/NeuEmConTonTai.mp3'),
('Only U', 'Noo Phước Thịnh', 'baihat/OnlyU.mp3'),
('Sau Tất Cả', 'ERIK ST. 319', 'baihat/SauTatCa.mp3'),
('Tri Kỷ', 'Phan Mạnh Quỳnh', 'baihat/TriKy.mp3'),
('Vì Tôi Còn Sống', 'Tiên Tiên', 'baihat/ViToiConSong.mp3'),
('Vợ Người Ta', 'Phan Mạnh Quỳnh', 'baihat/VoNguoiTa.mp3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
