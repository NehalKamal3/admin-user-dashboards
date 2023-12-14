-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 ديسمبر 2023 الساعة 15:23
-- إصدار الخادم: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard-crud`
--

-- --------------------------------------------------------

--
-- بنية الجدول `msg`
--

CREATE TABLE `msg` (
  `msg_id` int(11) NOT NULL,
  `nmsg` varchar(111) NOT NULL,
  `emsg` varchar(111) NOT NULL,
  `msgnum` varchar(22) NOT NULL,
  `text` varchar(444) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `msg`
--

INSERT INTO `msg` (`msg_id`, `nmsg`, `emsg`, `msgnum`, `text`) VALUES
(1, 'zosijynixu', 'jafijo@mailinator.com', '0118657777', 'msg1'),
(2, 'paneqa', 'xubyrewere@mailinator.com', '3434234571', 'msg2');

-- --------------------------------------------------------

--
-- بنية الجدول `services`
--

CREATE TABLE `services` (
  `ser_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ser_name` varchar(222) NOT NULL,
  `ser_disc` varchar(222) NOT NULL,
  `ser_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `services`
--

INSERT INTO `services` (`ser_id`, `user_id`, `ser_name`, `ser_disc`, `ser_img`) VALUES
(6, 2, 'php dev', 'web dev...', '657b0dfd086bbwp_light_icon01.png'),
(7, 3, 'designer', 'ui/ux', '657b0e5a65459services_light_icon02.png');

-- --------------------------------------------------------

--
-- بنية الجدول `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(222) NOT NULL,
  `skill_img` varchar(222) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill_file` varchar(277) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_name`, `skill_img`, `user_id`, `skill_file`) VALUES
(1, 'linked', '657b0ddc4106dbreadcrumb_icon03.png', 2, 'cv.pdf'),
(2, 'photoshop', '657b0e9dcf1d1breadcrumb_icon05.png', 3, 'cv2.pdf');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'user.jpg',
  `type` varchar(200) NOT NULL DEFAULT 'normal_user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `img`, `type`) VALUES
(1, 'admin', 'admin@gm.com', '123admin', 'user.jpg', 'super_admin'),
(2, 'zosijynixu', 'jafijo@mailinator.com', 'Pa$$w0rd!', '657b0d48761bfpartner_light06.png', 'normal_user'),
(3, 'paneqa', 'xubyrewere@mailinator.com', 'Pa$$w0rd!', 'user.jpg', 'normal_user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
