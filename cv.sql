-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 17, 2021 lúc 02:13 PM
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
-- Cơ sở dữ liệu: `cv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `image` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduce` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distanttarget` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `about`
--

INSERT INTO `about` (`id`, `image`, `introduce`, `name`, `birthday`, `phone`, `address`, `mail`, `degree`, `branch`, `short`, `distanttarget`) VALUES
(1, 'nam.jpg', 'myself is a cheerful, sociable, enthusiastic and active person. have experience in team work', 'Hoàng Võ Hoài Nam', '2000-07-25', '0395001595', 'Thanh Hóa', 'hoangvohoainamvtath5@gmail.com', 'student', 'Information Technology', 'Become a trainee and strive to be an employee in the near future. become a programmer', 'I am a student who has just completed the IT majoring program at MBN Academy. I have also passed CCNA certification. With the specialized knowledge I have learned, I want to find a suitable job, which is the position of a network administrator so that I can apply and promote my abilities well. The practical work experience that I have accumulated will be the basis for me to achieve my goal of becoming a good network administrator in the future.'),
(2, 'minh.jpg', 'myself is a cheerful, sociable, enthusiastic and active person. ', 'Đào Nhật Minh', '2000-04-13', '0913903597', 'Hà Nam', 'daonhatminhwru2000@gmail.com', 'studen', 'Information Technology', 'Become a trainee and strive to be an employee in the near future. become a programmer', 'I am a student who has just completed the IT majoring program at MBN Academy. I have also passed CCNA certification. With the specialized knowledge I have learned, I want to find a suitable job, which is the position of a network administrator so that I can apply and promote my abilities well. The practical work experience that I have accumulated will be the basis for me to achieve my goal of becoming a good network administrator in the future.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `image` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `image`, `account`, `password`) VALUES
(0, 'logo.png', 'admin', '123'),
(1, 'nam.jpg', 'hoainam', '123'),
(2, 'minh.jpg', 'daonhatminh', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `teamname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduce` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `achievement` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distanttarget` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `teamname`, `introduce`, `skill`, `image1`, `image2`, `name1`, `name2`, `achievement`, `short`, `distanttarget`) VALUES
(0, 'TEAM 18', 'We are Professional', 'Web Design,Graphic Design, Photoshop, Illustrator', 'nam.jpg', 'minh.jpg', 'Hoàng Võ Hoài Nam', 'Đào Nhật Minh', 'won consolation prize in a student game programming competition.each participated in technology competitions and seminars nationwide', 'Successfully complete team projects and learn new languages', 'join more larger projects and complete projects that prepare them to participate. participate in technology conferences and competitions so that more people get to know the group.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `school` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `education`
--

INSERT INTO `education` (`id`, `school`, `date`, `description`) VALUES
(1, 'Quang Khe Primary School', '2006-2011', 'studying at Quang Khe Primary School'),
(1, 'Quang Khe Junior High School', '2011-2015', 'studying at Quang Khe Junior High School'),
(1, 'Dang Thai Mai High School', '2015-2018', 'studying at Dang Thai Mai High School'),
(2, 'University School of the Arts', '2007 — 2009', 'Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et quas molestias exceptur.'),
(2, 'New York Academy of Art', '2005 — 2007', 'Ratione voluptatem sequi nesciunt, facere quisquams facere menda ossimus, omnis voluptas assumenda est omnis..'),
(2, 'High School of Art and Design\r\n', '2003 — 2005', 'Duis aute irure dolor in reprehenderit in voluptate, quila voluptas mag odit aut fugit, sed consequuntur magni dolores eos.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `job` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `experience`
--

INSERT INTO `experience` (`id`, `job`, `date`, `description`) VALUES
(1, 'Creative Director', '2015 — Present', 'Nemo enim ipsam voluptatem blanditiis praesentium voluptum delenit atque corrupti, quos dolores et qvuas molestias exceptur.\r\n\r\n'),
(1, 'Art Director', '2013 — 2015', 'Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et quas molestias exceptur.'),
(1, 'Web Designer', '2010 — 2013', 'Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et quas molestias exceptur.'),
(2, 'Creative Director', '2015 — Present', 'Nemo enim ipsam voluptatem blanditiis praesentium voluptum delenit atque corrupti, quos dolores et qvuas molestias exceptur.'),
(2, 'Art Director', '2013 — 2015', 'Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et quas molestias exceptur.\r\n\r\n'),
(2, 'Web Designer\r\n', '2010 — 2013', 'Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et quas molestias exceptur.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduce` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `home`
--

INSERT INTO `home` (`id`, `name`, `introduce`, `skill`) VALUES
(1, 'Hoàng Võ Hoài Nam', 'aksnbcaasc', 'sdvcsd,dvsdxcv,sdvsdv\r\n'),
(2, 'Đào Nhật Minh', 'sfdvf', 'sdvsdv,sdvdv,sdvsdv,sdv'),
(0, 'TEAM 18', 'We are ProfessionaL', 'Web Design,Graphic Design, Photoshop, Illustrator');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `skill` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `skills`
--

INSERT INTO `skills` (`id`, `skill`, `level`) VALUES
(1, 'Web Design\r\n', 80),
(1, 'Graphic Design', 75),
(1, 'Photoshop', 90),
(1, 'Illustrator', 50),
(2, 'Web Design', 80),
(2, 'Graphic Design', 75),
(2, 'Photoshop', 90),
(2, 'Illustrator', 50);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `testimonials`
--

INSERT INTO `testimonials` (`id`, `content`, `image`, `name`) VALUES
(1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus adipisci et delectus ex nisi, deleniti aliquid dignissimos nesciunt aspernatur saepe obcaecati repudiandae minima repellat harum doloribus vel nam corporis fugiat.\r\n\r\n', 'avatar.jpg', 'Tùng'),
(1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus adipisci et delectus ex nisi, deleniti aliquid dignissimos nesciunt aspernatur saepe obcaecati repudiandae minima repellat harum doloribus vel nam corporis fugiat.\r\n\r\n', 'avatar.jpg', 'Tùng'),
(1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus adipisci et delectus ex nisi, deleniti aliquid dignissimos nesciunt aspernatur saepe obcaecati repudiandae minima repellat harum doloribus vel nam corporis fugiat.', 'avatar.jpg', 'Tùng'),
(2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus adipisci et delectus ex nisi, deleniti aliquid dignissimos nesciunt aspernatur saepe obcaecati repudiandae minima repellat harum doloribus vel nam corporis fugiat.', 'avatar.jpg', 'Tùng'),
(0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus adipisci et delectus ex nisi, deleniti aliquid dignissimos nesciunt aspernatur saepe obcaecati repudiandae minima repellat harum doloribus vel nam corporis fugiat.', 'avatar.jpg', 'Tùng'),
(2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus adipisci et delectus ex nisi, deleniti aliquid dignissimos nesciunt aspernatur saepe obcaecati repudiandae minima repellat harum doloribus vel nam corporis fugiat.', 'avatar.jpg', 'Tùng'),
(0, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus adipisci et delectus ex nisi, deleniti aliquid dignissimos nesciunt aspernatur saepe obcaecati repudiandae minima repellat harum doloribus vel nam corporis fugiat.', 'avatar.jpg', 'Tùng'),
(2, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus adipisci et delectus ex nisi, deleniti aliquid dignissimos nesciunt aspernatur saepe obcaecati repudiandae minima repellat harum doloribus vel nam corporis fugiat.\r\n\r\n', 'avatar.jpg', 'Tùng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `work`
--

INSERT INTO `work` (`id`, `image`, `name`, `content`) VALUES
(1, 'webdesign.png', 'Web Design', 'The most modern and high-quality design made at a professional level.'),
(1, 'webdevelopment.png', 'Web Development', 'High-quality development of sites at the professional level.'),
(1, 'mobileapps.png', 'Mobile Apps', 'Professional development of applications for iOS and Android'),
(1, 'photography.png', 'Photography\r\n', 'I make high-quality photos of any category at a professional level.'),
(2, 'webdesign.png', 'Web Design', 'The most modern and high-quality design made at a professional level.'),
(2, 'webdevelopment.png', 'Web Development', 'High-quality development of sites at the professional level.\r\n'),
(2, 'mobileapps.png', 'Mobile Apps', 'Professional development of applications for iOS and Android'),
(2, 'photography.png', 'Photography', 'I make high-quality photos of any category at a professional level.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `education`
--
ALTER TABLE `education`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `experience`
--
ALTER TABLE `experience`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `home`
--
ALTER TABLE `home`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `resume`
--
ALTER TABLE `resume`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `skills`
--
ALTER TABLE `skills`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `work`
--
ALTER TABLE `work`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `home`
--
ALTER TABLE `home`
  ADD CONSTRAINT `home_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `resume_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `work`
--
ALTER TABLE `work`
  ADD CONSTRAINT `work_ibfk_1` FOREIGN KEY (`id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
