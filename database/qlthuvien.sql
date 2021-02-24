-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 24, 2021 lúc 10:18 AM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlthuvien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `category_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `content`, `parent_id`, `avatar`, `created_at`) VALUES
(36, 'Công nghệ thông tin', '', '<p><span style=\"color: rgb(51, 51, 51); font-family: Arial, Helvetica, sans-serif;\">Những quyển sách hay về công nghệ thông tin</span><br></p>', 0, 'sach-hay-ve-cong-nghe-thong-tin.jpg', '2021-02-24 08:51:59'),
(37, 'Giáo trình lập trình Android', '', '<p><span style=\"font-family: Arial, sans-serif; font-size: small; text-align: justify;\">Android là hệ điều hành thu hút nhiều lập trình viên và chiếm một thị phần lớn trong thị trường di động.</span><br></p>', 36, 'Giao-trinh-android.jpg', '2021-02-24 08:55:42'),
(38, 'Điện toán đám mây', '', '<p><span style=\"font-family: Arial, sans-serif; font-size: small; text-align: justify;\">Cuốn sách cung cấp cho người đọc một tiếp cận tổng thể tới các khái niệm cơ bản về điện toán đám mây, các vấn đề về lưu trữ và xử lí dữ liệu,...</span><br></p>', 36, 'dien-toan-dam-may.jpg', '2021-02-24 08:57:35'),
(39, 'Lập trình Python cơ bản', '', '<p><span style=\"font-family: Arial, sans-serif; font-size: small; text-align: justify;\">Cuốn sách nhỏ này được viết để hỗ trợ những ai trong quá trình mình bắt đầu học Python và có thể giải quyết các bài toán cơ bản theo nhu cầu của mình.</span><br></p>', 36, 'python.jpg', '2021-02-24 08:58:39'),
(40, 'Kinh tế', '', '<p><span style=\"color: rgb(44, 47, 52); font-family: Arial, Helvetica, sans-serif;\">Nền kinh tế trên toàn thế giới đang bị tác động mạnh mẽ bởi cuộc&nbsp;</span><a href=\"https://vi.wikipedia.org/wiki/C%C3%B4ng_nghi%E1%BB%87p_4.0\" data-wpel-link=\"external\"', 0, 'kinte.jpg', '2021-02-24 09:02:12'),
(41, 'Bill Gates: Tham Vọng Lớn Lao Và Quá Trình Hình Thành Đế Chế Microsoft (Tái Bản 2017)', '', '<p><span style=\"color: rgb(51, 51, 51); font-family: sans-serif; font-size: 14.3px; text-align: justify;\">Cuốn sách này mở ra một câu chuyện sinh động và chân thực nhất về sự nổi lên của một thiên tài độc đoán, cách thức ông làm thay đổi cả một nền công n', 40, 'kinhte1.jpg', '2021-02-24 09:03:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `card_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `role` int(10) NOT NULL,
  `book_id` int(10) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `card_id`, `email`, `password`, `phone`, `adress`, `role`, `book_id`, `avatar`, `created_at`) VALUES
(3, 'long', 0, 'long@gmail.com', '1234567', 0, 'Hà Nội', 0, 0, 'ngoc_avatar.jpg', '2021-02-24 07:03:24'),
(6, 'Hiền', 0, 'hien@gmail.com', '1234567', 0, 'Hà Nội', 0, 0, 'hien_avatar.jpg', '2021-02-24 08:25:41');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
