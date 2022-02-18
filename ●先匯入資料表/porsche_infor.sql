-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2019-12-28 06:25:02
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `porsche_infor`
--

-- --------------------------------------------------------

--
-- 資料表結構 `car`
--

CREATE TABLE `car` (
  `Car_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL,
  `Horsepower_kw` int(10) NOT NULL,
  `Horsepower_p` int(10) NOT NULL,
  `Accelerate` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Speed` int(10) NOT NULL,
  `Height` int(10) NOT NULL,
  `Width` int(10) NOT NULL,
  `Length` int(10) NOT NULL,
  `Wheelbase` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `car`
--

INSERT INTO `car` (`Car_name`, `Price`, `Horsepower_kw`, `Horsepower_p`, `Accelerate`, `Speed`, `Height`, `Width`, `Length`, `Wheelbase`) VALUES
('911 Carrera', 5800000, 283, 385, '4.2', 293, 1298, 1852, 4519, 2450),
('911 Carrera 4 Cabriolet', 6960000, 283, 385, '4.4', 289, 1297, 1852, 4519, 2450),
('911 Carrera 4S', 7060000, 331, 450, '3.6', 306, 1300, 1852, 4519, 2450),
('Macan', 2750000, 185, 252, '6.7', 227, 1624, 1923, 4696, 2807),
('Macan S', 3170000, 260, 354, '5.3', 254, 1624, 1923, 4696, 2807),
('Macan Turbo', 4610000, 324, 440, '4.5', 270, 1624, 1923, 4684, 2807),
('Panamera', 4930000, 243, 330, '5.7', 264, 1423, 1937, 5049, 2950),
('Panamera 4S', 7630000, 324, 440, '4.4', 289, 1423, 1937, 5049, 2950),
('Panamera GTS', 8910000, 338, 460, '--', 292, 1417, 1937, 5049, 2950);

-- --------------------------------------------------------

--
-- 資料表結構 `color`
--

CREATE TABLE `color` (
  `Color` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Color_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `color`
--

INSERT INTO `color` (`Color`, `Color_price`) VALUES
('白色', 0),
('紅色', 0),
('黃色', 0),
('黑色', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `else_fitting`
--

CREATE TABLE `else_fitting` (
  `Name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Else_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `else_fitting`
--

INSERT INTO `else_fitting` (`Name`, `Else_price`) VALUES
('LED 矩陣式頭燈系統含保時捷動態照明升級系統', 122000),
('前擋遮陽玻璃', 7200),
('後擋風玻璃雨刷', 22000),
('深色LED 矩陣式頭燈系統含保時捷動態照明升級系統', 161000),
('私密玻璃', 34900);

-- --------------------------------------------------------

--
-- 資料表結構 `record`
--

CREATE TABLE `record` (
  `id` int(10) NOT NULL,
  `Car_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Color` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Wheel` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Wheel_fitting` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Seat` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Else_fitting` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `record`
--

INSERT INTO `record` (`id`, `Car_name`, `Color`, `Wheel`, `Wheel_fitting`, `Seat`, `Else_fitting`, `Price`) VALUES
(3, 'Panamera 4S', '紅色', 'RS Spyder 輪圈', '輪圈施以霧面鉑銀色烤漆', '18向全功能電動調整跑車前座座椅，含記憶套件', 'LED 矩陣式頭燈系統含保時捷動態照明升級系統/前擋遮陽玻璃', 8282100);

-- --------------------------------------------------------

--
-- 資料表結構 `seat`
--

CREATE TABLE `seat` (
  `Infor` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Seat_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `seat`
--

INSERT INTO `seat` (`Infor`, `Seat_price`) VALUES
('14向全功能電動調整跑車座椅(前座)，含記憶套件', 144000),
('18向全功能電動調整跑車前座座椅，含記憶套件', 230400),
('4向電動調整跑車座椅', 0),
('四向調整升級跑車電動椅', 51200);

-- --------------------------------------------------------

--
-- 資料表結構 `wheel`
--

CREATE TABLE `wheel` (
  `Wheel_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Wheel_size` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Wheel_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `wheel`
--

INSERT INTO `wheel` (`Wheel_name`, `Wheel_size`, `Wheel_price`) VALUES
('Carrera Classic 輪圈', '前20吋後21吋', 141000),
('Carrera Exclusive Design 輪圈', '前20吋後21吋', 219400),
('Carrera S 輪圈', '前20吋後21吋', 103100),
('Carrera輪圈', '前19吋後20吋', 0),
('RS Spyder 輪圈', '前20吋後21吋', 216700);

-- --------------------------------------------------------

--
-- 資料表結構 `wheel_fitting`
--

CREATE TABLE `wheel_fitting` (
  `Content` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Fitting_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `wheel_fitting`
--

INSERT INTO `wheel_fitting` (`Content`, `Fitting_price`) VALUES
('輪圈施以外觀同色烤漆', 75800),
('輪圈施以消光黑色烤漆', 75800),
('輪圈施以金屬墨玉黑色烤漆', 75800),
('輪圈施以霧面鉑金色烤漆', 75800),
('輪圈施以霧面鉑銀色烤漆', 75800),
('輪圈施以高亮澤黑色烤漆', 75800);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`Car_name`);

--
-- 資料表索引 `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`Color`);

--
-- 資料表索引 `else_fitting`
--
ALTER TABLE `else_fitting`
  ADD PRIMARY KEY (`Name`),
  ADD KEY `Name` (`Name`);

--
-- 資料表索引 `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`Infor`);

--
-- 資料表索引 `wheel`
--
ALTER TABLE `wheel`
  ADD PRIMARY KEY (`Wheel_name`);

--
-- 資料表索引 `wheel_fitting`
--
ALTER TABLE `wheel_fitting`
  ADD PRIMARY KEY (`Content`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `record`
--
ALTER TABLE `record`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
