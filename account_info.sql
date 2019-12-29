-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.10-MariaDB
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `crud_test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `account_info`
--

CREATE TABLE `account_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `account` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `account_info`
--

INSERT INTO `account_info` (`id`, `account`, `name`, `sex`, `birth`, `mail`, `description`) VALUES
(4, 'RyzViwAA', 'pUdvl', '1', '1994-08-31', 'ia9ura@mail.com', 'lcFIuAbNBZinemY'),
(5, '0ZqKUrww', '5WLVn', '1', '1994-08-31', 'it0hUC@mail.com', 'zziKr4SJVA4w0Yh'),
(6, 'Vo6QjXEL', 'qnra1', '1', '1994-08-31', 'H6o7Wk@mail.com', '61NJAJ7f3TDrAGY'),
(7, 'tkrBz2Cm', 't8tNv', '1', '1994-08-31', 'PwzEfG@mail.com', 'io1ms0p9Y2xSSBj'),
(8, 'JIupI21B', 'qOPOh', '1', '1994-08-31', 'xOD87L@mail.com', 'ApVzyoD9i0uCghh'),
(9, 'aUxOi1j8', '6SWi4', '0', '1994-08-31', 'nWB5tr@mail.com', 'pPB54BSBTkCjezP'),
(10, 'vH4KvViN', 'dKbuK', '0', '1994-08-31', '5VFdNN@mail.com', 'WFcBCwBMKp4WfBy'),
(11, 's1066026', 'BRAF', '1', '2007-01-24', 'kind6315@gmail.com', 'Hello world'),
(12, 's1066026', 'BRAF', '0', '2007-01-24', 'kind6315@gmail.com', 'Hello world'),
(14, 'fdssdfsf', 'dsfdsfsf', '1', '2019-12-11', '32113dfs2d@mail.com', NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `account_info`
--
ALTER TABLE `account_info`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `account_info`
--
ALTER TABLE `account_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
