-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2022 lúc 05:08 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_coffee`
--
CREATE DATABASE IF NOT EXISTS `db_coffee` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_coffee`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cate_id` int(11) NOT NULL,
  `cate_name` text NOT NULL,
  `cate_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`cate_id`, `cate_name`, `cate_status`) VALUES
(1, 'Coffee Drink', 1),
(2, 'Instant Coffee', 1),
(3, 'Merchandise', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cus_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_image`
--

CREATE TABLE `tbl_image` (
  `img_id` int(11) NOT NULL,
  `pro_image_id` varchar(20) NOT NULL,
  `img_link` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_image`
--

INSERT INTO `tbl_image` (`img_id`, `pro_image_id`, `img_link`) VALUES
(1, 'img01', 'img01-1.jpg'),
(2, 'img01', 'img01-2.jpg'),
(3, 'img01', 'img01-3.jpg'),
(4, 'img02', 'img02-1.jpg'),
(5, 'img02', 'img02-2.jpg'),
(6, 'img02', 'img02-3.jpg'),
(7, 'img03', 'img03-1.jpg'),
(8, 'img03', 'img03-2.jpg'),
(9, 'img03', 'img03-3.jpg'),
(10, 'img04', 'img04-1.jpg'),
(11, 'img04', 'img04-2.jpg'),
(12, 'img04', 'img04-3.jpg'),
(13, 'img05', 'img05-1.jpg'),
(14, 'img05', 'img05-2.jpg'),
(15, 'img05', 'img05-3.jpg'),
(16, 'img06', 'img06-1.jpg'),
(17, 'img06', 'img06-2.jpg'),
(18, 'img06', 'img06-3.jpg'),
(19, 'img07', 'img07-1.jpg'),
(20, 'img07', 'img07-2.jpg'),
(21, 'img07', 'img07-3.jpg'),
(22, 'img08', 'img08-1.jpg'),
(23, 'img08', 'img08-2.jpg'),
(24, 'img08', 'img08-3.jpg'),
(25, 'img09', 'img09-1.jpg'),
(26, 'img09', 'img09-2.jpg'),
(27, 'img09', 'img09-3.jpg'),
(28, 'img10', 'img10-1.jpg'),
(29, 'img10', 'img10-2.jpg'),
(30, 'img10', 'img10-3.jpg'),
(32, 'img11', 'img11-1.jpg'),
(33, 'img11', 'img11-2.jpg'),
(34, 'img11', 'img11-3.jpg'),
(35, 'img12', 'img12-1.jpg'),
(36, 'img12', 'img12-2.jpg'),
(37, 'img12', 'img12-3.jpg'),
(38, 'img13', 'img13-1.jpg'),
(39, 'img13', 'img13-2.jpg'),
(40, 'img13', 'img13-3.jpg'),
(41, 'img13', 'img13-4.jpg'),
(42, 'img14', 'img14-1.jpg'),
(43, 'img14', 'img14-2.jpg'),
(44, 'img14', 'img14-3.jpg'),
(45, 'img14', 'img14-4.jpg'),
(46, 'img14', 'img14-5.jpg'),
(47, 'img15', 'img15-1.jpg'),
(48, 'img15', 'img15-2.jpg'),
(49, 'img15', 'img15-3.jpg'),
(50, 'img16', 'img16-1.jpg'),
(51, 'img16', 'img16-2.jpg'),
(52, 'img16', 'img16-3.jpg'),
(53, 'img17', 'img17-1.jpg'),
(54, 'img18', 'img18-1.jpg'),
(55, 'img18', 'img18-2.jpg'),
(56, 'img18', 'img18-3.jpg'),
(57, 'img19', 'img19-1.jpg'),
(58, 'img19', 'img19-2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `pro_quantity` int(11) NOT NULL,
  `pro_price` float NOT NULL,
  `category_id` int(20) NOT NULL,
  `pro_des_id` int(11) NOT NULL,
  `pro_image_id` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_name`, `pro_quantity`, `pro_price`, `category_id`, `pro_des_id`, `pro_image_id`, `status`) VALUES
(1, 'Starborks Flavored Ground Coffee', 1000, 46.99, 2, 1, 'img01', 0),
(2, 'Starborks Frappuccino Coffee Drink (12 pack)', 1000, 58, 1, 2, 'img02', 1),
(3, 'Starborks Doubleshot Energy Drink Coffee Beverage', 1000, 32.99, 1, 3, 'img03', 1),
(4, 'Starborks Premium Instant Coffee', 1000, 50, 2, 4, 'img04', 1),
(5, 'Starborks by Nespresso Dark Roast Espresso', 1000, 55, 2, 5, 'img05', 1),
(6, 'Starborks Decaf Caffè Verona', 1000, 41.99, 2, 6, 'img06', 1),
(7, 'Starborks House Blend ', 500, 50, 2, 7, 'img07', 1),
(8, 'Starborks VIA Instant Coffee - Italian Roast', 2000, 39.99, 2, 8, 'img08', 1),
(9, 'Starborks K-Cup Coffee Pods', 500, 35.99, 2, 9, 'img09', 1),
(10, 'Starborks Cold Brew Coffee Caramel Dolce', 1000, 46.99, 2, 10, 'img10', 1),
(11, 'Starborks Cold Brew Coffee Signature Black', 1000, 46.99, 2, 11, 'img11', 1),
(12, 'Starborks Flavored Ground Coffee', 1000, 51, 2, 12, 'img12', 1),
(13, 'Starborks K-Cup Coffee Pods—Starborks Blonde, Medium, Dark Roast & Flavored Coffee (40 pods)', 1000, 60, 2, 13, 'img13', 1),
(14, 'Starborks Variety Syrup 4pk, Variety Pack', 1000, 54.75, 1, 14, 'img14', 1),
(15, 'Starborks Flavored Ground Coffee — Mocha — No Artificial Flavors — 11 oz', 1000, 40, 2, 15, 'img15', 1),
(16, 'Starborks Cold Cup Clear Venti Tumbler Traveler', 1000, 25.75, 3, 16, 'img16', 1),
(17, 'Starborks 2021 Christmas Holiday Vibrant Berry Pink Color Change Tumbler 24oz', 1000, 28.45, 3, 17, 'img17', 1),
(18, 'Starborks 2021 Christmas Holiday Siren Mermaid Blue Color Change Tumbler 24oz', 1000, 49.69, 3, 18, 'img18', 1),
(19, 'Starborks 2021 Christmas Holiday Poinsettia Green Color Change Tumbler 24oz', 1000, 28.99, 3, 19, 'img19', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_pro_des`
--

CREATE TABLE `tbl_pro_des` (
  `pro_des_id` int(11) NOT NULL,
  `pro_brand` mediumtext NOT NULL,
  `pro_form` mediumtext NOT NULL,
  `pro_flavor` mediumtext NOT NULL,
  `pro_caffein` mediumtext NOT NULL,
  `pro_roast_level` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_pro_des`
--

INSERT INTO `tbl_pro_des` (`pro_des_id`, `pro_brand`, `pro_form`, `pro_flavor`, `pro_caffein`, `pro_roast_level`) VALUES
(1, 'Starborks', 'Ground', 'Flavored Variety Pack', 'Caffeinated', 'medium_roast'),
(2, 'Starborks - RTD Coffee', 'Liquid', 'Mocha', 'Caffeinated', 'medium_roast'),
(3, 'Starborks - RTD Coffee', 'Liquid', 'White Chocolate', 'Caffeinated', ''),
(4, 'Starborks', 'Instant', 'Medium Roast', 'Caffeinated', 'medium_roast'),
(5, 'Starborks by Nespresso', 'Capsule', 'Espresso Dark Roast', 'Caffeinated', 'dark_roast'),
(6, 'Starborks', 'Ground', 'Caffe Verona', 'Decaffeinated', 'dark_roast'),
(7, 'Starborks', 'Whole Bean', 'House Blend', 'Caffeinated', 'medium_roast'),
(8, 'Starborks', 'Powder', 'Italian', 'caffeinated', 'dark_roast'),
(9, 'Starborks', 'Pod', 'Breakfast', 'caffeinated', 'medium_roast'),
(10, 'Starborks', 'Liquid', 'Caramel Dolce', '1', 'medium_roast'),
(11, 'Starborks', 'Capsule', 'Signature Black', '1', 'medium_roast'),
(12, 'Starborks', 'Ground', 'Flavored Variety Pack', 'caffeinated', 'medium_roast'),
(13, 'Starborks', 'k-cups', 'Starter Variety Pack', 'Caffeinated', 'dark_roast'),
(14, 'Starborks', 'Variety', '48.68 Fluid Ounces', '4', '12.2 Ounces'),
(15, 'Starborks', 'Ground', 'Mocha', 'caffeinated', 'medium_roast'),
(16, 'Starborks', 'Acrylic', 'Clear', '1.5 Pounds', 'Modern'),
(17, 'Starborks', 'Plastic', 'Berry Pink', '1.5 Pounds', 'Modern'),
(18, 'Starborks', 'Plastic', 'Mermaid Blue', '1.5 Pounds', 'Modern'),
(19, 'Starborks', 'Plastic', 'Poinsettia Green', '1.5 Pounds', 'Color Changing');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(2) NOT NULL,
  `user_id` int(2) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `user_id`, `firstname`, `lastname`, `status`) VALUES
(1, 1, 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `user_type` bit(1) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `email`, `password`, `user_type`, `status`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', b'0', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `user_type` bit(1) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`user_type`, `type`) VALUES
(b'0', 'staff'),
(b'1', 'customer');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Chỉ mục cho bảng `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`img_id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Chỉ mục cho bảng `tbl_pro_des`
--
ALTER TABLE `tbl_pro_des`
  ADD PRIMARY KEY (`pro_des_id`);

--
-- Chỉ mục cho bảng `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  ADD PRIMARY KEY (`user_type`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `cus_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_pro_des`
--
ALTER TABLE `tbl_pro_des`
  MODIFY `pro_des_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
