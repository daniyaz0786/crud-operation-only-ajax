-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 06:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `date_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `price`, `description`, `image`, `date_at`) VALUES
(1, 'Oppo Mobile', 1200, '6.49\" Inch (16.5cm) FHD+ Punch-hole Display with 2400x1080 pixels. Larger screen to body ratio of 90.5%.|Side Fingerprint Sensor. Bluetooth Audio Codec: SBC, AAC, APTX HD, LDAC\r\nQualcomm Snapdragon 480 5G GPU 619 at 650 MHz Support 5G sim| Powerful 2 GHz ', '[\"62dbcd10b9d9d.jpg\",\"62dbccf9f1d22.jpg\",\"62dbccf9f1fd4.jpg\",\"62dbccf9f227b.jpg\"]', '2022-07-23 12:41:00'),
(6, 'rggrwedt', 555, 'tgrhrthr', '[\"62dbd5c8aeda9.jpg\",\"62dbd5c8af086.jpg\"]', '2022-07-23 13:04:00'),
(7, 'rrfgrfdgrsd', 666756778, 'hgjghjghkgkggf', '[\"62dbd5f659772.jpg\",\"62dbd5f659a32.jpg\"]', '2022-07-23 13:05:00'),
(8, 'gfrgrg', 76777, 'hjjfjfj', '[\"62dbd692da7a7.jpg\",\"62dbd67740fdb.jpg\",\"62dbd64604cf7.jpg\",\"62dbd64604fae.jpg\"]', '2022-07-23 13:08:00'),
(9, 'Mohd Daniyaz Ali', 5000, 'ghfhghgfgh', '[\"62dbd6cbcf2a9.jpg\",\"62dbd6cbcf571.jpg\"]', '2022-07-23 13:08:00'),
(10, 'anil test d', 99999999, 'fdfddfdffddffd', '[\"62dbd8683b517.jpg\",\"62dbd8683b7da.jpg\"]', '2022-07-23 13:46:00'),
(15, 'hjghjh', 8898, 'fghjgfhjghf', '[\"62dbdfb3ece9d.jpg\"]', '2022-07-23 13:46:00'),
(17, 'ioyuliytu7ukhjjguktm gtrtregwtegr', 77767, 'hgfjngfhnjghf', '[\"62dbe02c3f3e5.jpg\"]', '2022-07-23 13:49:00'),
(18, 'fgfgrfg', 7777, 'fgfgfgh', '[\"62dbe0c612566.jpg\"]', '2022-07-23 13:51:00'),
(19, 'wwww', 66666, 'fddfgfdg', '[\"62dbe10d55598.jpg\"]', '2022-07-23 13:52:00'),
(20, 'ioyuliytu7ukhjjguktm gtrtregwtegr', 777, 'tghtrt', '[\"62dbe15d55298.jpg\"]', '2022-07-23 13:54:00'),
(21, 'fdff00000', 4444, 'fffff', '[\"62dbe16ff0908.jpg\"]', '2022-07-23 13:54:00'),
(22, 'ioyuliytu7ukhjjguktm gtrtregwtegr', 55555, 'ffffff', '[\"62dbe19868bf0.jpg\"]', '2022-07-23 13:55:00'),
(23, 'sdsdddddwwwwwwdddd', 888, 'jkhjkjhk', '[\"62dbe1e427a9c.jpg\"]', '2022-07-23 14:01:00'),
(24, 'dfdfsddffdannnnnnn', 666, 'ghfgh', '[\"62dbe3673686a.jpg\"]', '2022-07-23 14:05:00'),
(25, 'fdgddshhhh', 666, 'gfhfggfh', '[\"62dbe412b72fc.jpg\"]', '2022-07-23 14:10:00'),
(26, 'ioyuliytu7ukhjjguktm gtrtregwtegr', 90980777, 'jhklklh', '[\"62dbe53830cb7.jpg\"]', '2022-07-23 14:16:00'),
(27, 'Cinthol', 66, 'gfghh', '[\"62dbe89899b99.jpg\"]', '2022-07-23 14:25:00'),
(28, 'trwrtwrt', 666, 'dgfhdh', '[\"62dbe91b0feaf.jpg\"]', '2022-07-23 14:27:00'),
(29, 'trwrtwrt', 666, 'dgfhdh', '[\"62dbe93725a0f.jpg\"]', '2022-07-23 14:27:00'),
(30, 'dfed', 556, 'fgsfdgsdfg', '[\"62dbe945441a2.jpg\"]', '2022-07-23 14:27:00'),
(31, 'hjkghkgjk', 888, 'ghjgh', '[\"62dbeaa29d9fd.jpg\"]', '2022-07-23 14:33:00'),
(32, 'sdasd', 9999, 'vjhgfhjhj', '[\"62dbead13ec39.jpg\",\"62dbead13ef02.jpg\"]', '2022-07-23 14:34:00'),
(33, 'xfvghdfhd', 8898790, 'fghjfgujfyhgj', '[\"62dbeaf4b2888.jpg\",\"62dbeaf4b3005.jpg\",\"62dbeaf4b3572.jpg\",\"62dbeaf4b389d.jpg\"]', '2022-07-23 14:35:00'),
(34, 'Cinthol', 2147483647, 'tyuytfruytu', '[\"62dbec2b302fd.jpg\"]', '2022-07-23 14:40:00'),
(35, 'asfdasfas', 9789789, 'ghkgjkyjuh', '[\"62dbec72c3dc3.jpg\"]', '2022-07-23 14:41:00'),
(36, 'tyerty', 777, 'dhdhdhg', '[\"62dbecff5df05.jpg\"]', '2022-07-23 14:43:00'),
(37, 'tty', 888, 'hgfjjyj', '[\"62dbed3b1d369.jpg\"]', '2022-07-23 14:44:00'),
(38, 'fyrtyey', 777, 'fgjyju', '[\"62dbed69b1121.jpg\"]', '2022-07-23 14:45:00'),
(39, 'hjhj', 6666, 'fghdhd', '[\"62dbedaa6ff09.jpg\"]', '2022-07-23 14:46:00'),
(40, 'erewrwerfrgfgfgdddd', 7777, 'fdgrdgdfg', '[\"62dbedc1c4231.jpg\"]', '2022-07-23 14:50:00'),
(41, 'dwdewed', 777777, 'gfghfghgh', '[\"62dbeead436f2.jpg\",\"62dbeead43a2a.jpg\",\"62dbeead43c96.jpg\",\"62dbeead43e7c.jpg\"]', '2022-07-23 14:50:00'),
(42, 'sdsdasdsdas', 4444, 'sdfsdfsdf', '[\"62dbeee01bb4f.jpg\"]', '2022-07-23 14:51:00'),
(43, 'sdasdas', 666, 'fgfgfgfg', '[\"62dbeff391ead.jpg\"]', '2022-07-23 14:56:00'),
(44, 'gfrr', 55, 'fgdfgfgh', '[\"62dbf01dce88c.jpg\"]', '2022-07-23 14:57:00'),
(45, 'adda', 5445, 'FDGFGF', '[\"62dbf05a91f42.jpg\"]', '2022-07-23 14:58:00'),
(46, 'DEWQDWD', 4444, 'FDFDFF', '[\"62dbf0b7ba6fa.jpg\"]', '2022-07-23 14:59:00'),
(47, 'fyerer', 5566, 'fgdfgdf', '[\"62dbf196b8eb0.jpg\",\"62dbf196b91db.jpg\"]', '2022-07-23 15:03:00'),
(48, 'gruru', 7777, 'fghffg', '[\"62dbf2c41e5af.jpg\"]', '2022-07-23 15:08:00'),
(49, 'ddffhghgh', 787878879, 'ertyerteryet5yu', '[\"62dbf3331dd4f.jpg\"]', '2022-07-23 15:10:00'),
(50, '66666trertyetwwwwwwwwww', 6666, 'ggtgggg', '[\"62dbf3720b2fb.jpg\",\"62dbf3720b555.jpg\",\"62dbf3720b75c.jpg\",\"62dbf3720b94c.jpg\"]', '2022-07-23 15:13:00'),
(51, 'rrr', 7787, 'fghhth', '[\"62dbf4106ba2e.jpg\"]', '2022-07-23 15:13:00'),
(52, 'ioyuliytu7ukhjjguktm gtrtregwtegr', 5555, 'ggggg', '[\"62dbf49bb64f3.jpg\"]', '2022-07-23 15:16:00'),
(53, 'daniyaz ali ddddddddddd', 11, 'ddddddd', '[\"62de16e336f1d.jpeg\",\"62de16e3373ac.jpeg\",\"62de16e3376c0.jpeg\"]', '2022-07-25 06:07:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
