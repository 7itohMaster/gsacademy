-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 6 月 05 日 09:02
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_l03_10`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `todo_table`
--

CREATE TABLE `todo_table` (
  `id` int(12) NOT NULL,
  `todo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `todo_table`
--

INSERT INTO `todo_table` (`id`, `todo`, `deadline`, `created_at`, `updated_at`) VALUES
(1, 'PHP課題をする', '2020-06-04', '2020-06-04 11:51:31', '2020-06-04 11:51:31'),
(3, 'DBを追加してます', '2020-06-04', '2020-06-04 11:57:38', '2020-06-04 11:57:38'),
(5, 'sysdateの質問があった', '2020-06-04', '2020-06-04 11:59:41', '2020-06-04 11:59:41'),
(6, '隊長がSQL操作しています', '2020-06-04', '2020-06-04 12:01:10', '2020-06-04 12:01:10'),
(8, '隊長', '2020-06-05', '2020-06-04 15:50:33', '2020-06-04 15:50:33'),
(11, '山さん', '2020-06-04', '2020-06-04 16:34:17', '2020-06-04 16:34:17'),
(18, '隊長', '2020-06-12', '2020-06-05 12:24:21', '2020-06-05 12:24:21'),
(20, 'test', '2020-07-04', '2020-06-05 13:07:26', '2020-06-05 13:07:26'),
(21, '内藤', '2020-06-05', '2020-06-05 13:44:11', '2020-06-05 13:44:11'),
(22, 'test', '2020-06-20', '2020-06-05 13:49:39', '2020-06-05 13:49:39'),
(23, '山さん', '2020-07-10', '2020-06-05 15:55:27', '2020-06-05 15:55:27');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `todo_table`
--
ALTER TABLE `todo_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `todo_table`
--
ALTER TABLE `todo_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
