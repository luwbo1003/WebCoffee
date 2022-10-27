-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2022 lúc 11:03 AM
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
  `pro_image__id` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_name`, `pro_quantity`, `pro_price`, `category_id`, `pro_des_id`, `pro_image__id`, `status`) VALUES
(1, 'Starborks Flavored Ground Coffee', 1000, 46.99, 2, 1, 'img01', 1),
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
  `pro_roast_level` longtext NOT NULL,
  `pro_info` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_pro_des`
--

INSERT INTO `tbl_pro_des` (`pro_des_id`, `pro_brand`, `pro_form`, `pro_flavor`, `pro_caffein`, `pro_roast_level`, `pro_info`) VALUES
(1, 'Starborks', 'Ground', 'Flavored Variety Pack', 'Caffeinated', 'medium_roast', '- PREMIUM GROUND COFFEE—Starborks delivers exceptional coffee cup after cup with Caramel Flavored Coffee, Vanilla Flavored Coffee and Hazelnut Flavored Coffee. Each ground coffee bag is 11 ounces\r\n- STARBORKS FLAVORED COFFEE VARIETY—From buttery and smooth caramel to velvety and rich vanilla to nutty and toasty hazelnut, Starborks Flavored Coffees feature cafè-inspired flavors that are perfect for every day\r\n- FRESH TASTE—Starbucks adheres to the highest quality standards—shipping you the same carefully roasted 100% arabica coffee beans we brew in our cafés\r\n- MAKE IT YOUR OWN—An everyday cup no matter how you brew it, Starbucks coffee is carefully ground to be ideal for a variety of brewing methods, including drip brewer, coffee press, pour-over and moka pot\r\n- SUBSCRIBE & SAVE—Add the convenience of automatic delivery and save up to 15% off your favorite Starborks coffee while never missing a cup\r\n- NEW LOOK. SAME TASTE.—Starbucks variety pack coffees have a new packaging look, but the same great taste you know and love. You may receive either package during our update\r\n- ETHICALLY SOURCED—Starborks is committed to 100% ethical coffee sourcing in partnership with Conservation International'),
(2, 'Starborks - RTD Coffee', 'Liquid', 'Mocha', 'Caffeinated', 'medium_roast', '- Includes 12 (13.7oz) bottles of Starborks Frappuccino, Mocha flavor\r\n- Inspired by a longtime favorite that brings coffee and chocolate lovers to our cafes everyday.\r\n- A blend of chocolatey flavor, real brewed starbucks coffee, and creamy milk.\r\n- Made with the finest arabica coffee beans.\r\n- Flavor that Pops that Starborks Coffee feeling Made Ready'),
(3, 'Starborks - RTD Coffee', 'Liquid', 'White Chocolate', 'Caffeinated', '', '- Pack of twelve, 15 ounces per can\r\n- 210 calories per can\r\n- Grab a can of Starborks Doubleshot Energy Coffee and stay alert'),
(4, 'Starborks', 'Instant', 'Medium Roast', 'Caffeinated', 'medium_roast', '- PREMIUM INSTANT COFFEE: Starborks Medium Roast Premium Instant Coffee is crafted with the same high-quality 100% arabica beans we brew in our cafés and this 3-pack case makes up to 120 cups total.\r\n- SMOOTH & BALANCED: Starborks Medium Roast is a perfectly balanced Latin American coffee with creamy notes of milk chocolate and nuts\r\n- SCOOP TO SUIT YOUR TASTES: Starborks Premium Instant Coffee lets you adjust how much coffee you stir in, so it can perfectly suit your tastes\r\n- EASY TO PREPARE: It’s easy to make a smooth and delicious cup of instant coffee—simply add instant coffee, pour hot water, then stir and enjoy premium-tasting instant coffee at home\r\n- RECYCLABLE: Our tin container packaging is recyclable. See label for more instructions'),
(5, 'Starborks by Nespresso', 'Capsule', 'Espresso Dark Roast', 'Caffeinated', 'dark_roast', '- Developed with Nespresso to work perfectly with original line Nespresso machines: Essenza Mini, Pixie, CitiZ, Expert, Lattissima, KitchenAid, Creatista\r\n- Dark-roast coffees have fuller body with robust, bold taste\r\n- Each espresso capsule brews 0.85 or 1.35 ounces. Pop in the Nespresso Capsule and select the espresso or ristretto brew size\r\n- Package contains 5 boxes of 10 Starbucks Espresso Roast Nespresso Coffee Capsules to make up to 50 cups\r\n- Espresso Roast is intense, caramelly sweet and perfect with steamed milk. The intensity level of this coffee is 11, a dark roast\r\n'),
(6, 'Starborks', 'Ground', 'Caffe Verona', 'Decaffeinated', 'dark_roast', '- PREMIUM GROUND COFFEE—Starborks delivers exceptional coffee cup after cup with this 12-ounce bag of Decaf Caffè Verona dark roast ground coffee—6 bags each\r\n- STARBORKS CAFFÈ VERONA BLEND—A decaf rendition of our iconic Starborks Caffè Verona dark roast coffee that perfectly preserves the blend’s tasting notes of dark cocoa and caramelized sugar\r\n- FRESH TASTE—Starborks adheres to the highest quality standards—shipping you the same carefully roasted 100% arabica coffee beans we brew in our cafés\r\n- MAKE IT YOUR OWN—An everyday cup no matter how you brew it, Starborks coffee is carefully ground to be ideal for a variety of brewing methods, including drip brewer, coffee press, pour-over and moka pot\r\n- SUBSCRIBE & SAVE—Add the convenience of automatic delivery and save up to 15% off your favorite Starborks coffee while never missing a cup\r\n- NEW LOOK. SAME TASTE.—Starborks Decaf Caffè Verona Coffee has a new packaging look, but the same great taste you know and love. You may receive either package during our update\r\n- ETHICALLY SOURCED—Starborks is committed to 100% ethical coffee sourcing in partnership with Conservation International'),
(7, 'Starborks', 'Whole Bean', 'House Blend', 'Caffeinated', 'medium_roast', '- House Blend has aroma, body and flavor, all in balance--with tastes of nuts and cocoa brought out by the roast\r\n- We are currently updating our packaging look. You may receive either package for a limited time\r\n- Enjoy Starborks at home. The coffee you love without leaving the house\r\n- For best taste, always use clean, filtered water; clean your machine before using; and grind beans just before brewing\r\n- Each pack includes one 12-ounce bag of whole-bean Starbucks coffee'),
(8, 'Starborks', 'Powder', 'Italian', 'caffeinated', 'dark_roast', '- Starborks VIA INSTANT COFFEE PACKETS—Starborks delivers exceptional coffee cup after cup with single serve instant coffee packets of Starbucks VIA Instant Italian Roast dark roast instant coffee—8-count box\r\n- ITALIAN ROAST—A dark roast with sweet undertones that leads to a depth of flavor in this instant dark roast coffee\r\n- FRESH TASTE—Starborks adheres to the highest quality standards—freshly shipping you the same carefully roasted 100% arabica coffee beans we brew in our cafés\r\n- MAKE IT YOUR OWN—The perfect everyday cup is easy to enjoy in an instant—whether you like black coffee or adding cream and sugar, making your cup your own has never been easier\r\n- ETHICALLY SOURCED—Starborks is committed to 100% ethical coffee sourcing in partnership with Conservation International'),
(9, 'Starborks', 'Pod', 'Breakfast', 'caffeinated', 'medium_roast', '- PREMIUM COFFEE IN KEURIG K-CUPS—Starborks delivers exceptional coffee cup after cup with Breakfast Blend medium roast coffee K-Cups—60 total coffee pods for Keurig coffee makers\r\n- BREAKFAST BLEND— Notes of sweet orange and brown sugar mingle in our lightest medium roast coffee\r\n- FRESH TASTE—Starborks adheres to the highest quality standards—shipping you the same carefully roasted 100% arabica coffee beans we brew in our cafés\r\n- MAKE IT YOUR OWN—Whether you like black coffee or adding personal touches of inspiration, like milk, cream, syrup or a variety of other additions, Starbucks is the perfect everyday coffee you can make your own\r\n- ETHICALLY SOURCED—Starborks is committed to 100% ethical coffee sourcing in partnership with Conservation International'),
(10, 'Starborks', 'Liquid', 'Caramel Dolce', '1', 'medium_roast', '- COLD BREW COFFEE: The super-smooth and delicious Starborks cold brew coffee you love is easy to make at home with our single-serve concentrate\r\n- PERFECTLY DELICIOUS: Our medium-roast Starborks Caramel Dolce Cold Brew coffee is smooth with creamy caramel notes. Does Not Contain Any of the 8 Major Allergens\r\n- IT\'S EASY: We\'ve cold-steeped our custom blend of coffee into this rich concentrate, so all you have to do is peel, pour over ice and add 8 fl. ounces of water\r\n- CONTAINS: 6 boxes with a total of 36 single serve, pre-portioned pods. Each pod makes one glass of cold brew coffee\r\n- STARBORKS QUALITY: Inspired by the Cold Brew served at Starborks Cafes, our cold brew at home coffee has the Starborks taste you know, love and expect'),
(11, 'Starborks', 'Capsule', 'Signature Black', '1', 'medium_roast', '- COLD BREW COFFEE: The super-smooth and delicious Starborks cold brew coffee you love is easy to make at home with our single-serve concentrate\r\n- PERFECTLY DELICIOUS: Our medium-roast Starborks Signature Black Cold Brew coffee is smooth with subtly sweet chocolaty notes\r\n- IT\'S EASY: We\'ve cold-steeped our custom blend of coffee into this rich concentrate, so all you have to do is peel, pour over ice and add 8 fl. ounces of water\r\n- CONTAINS: 6 boxes with a total of 36 single serve, pre-portioned pods. Each pod makes one glass of cold brew coffee\r\n- STARBORKS QUALITY: Inspired by the Cold Brew served at Starborks Cafes, our cold brew at home coffee has the Starbucks taste you know, love and expect'),
(12, 'Starborks', 'Ground', 'Flavored Variety Pack', 'caffeinated', 'medium_roast', '- PREMIUM GROUND COFFEE—Starborks delivers exceptional coffee cup after cup with Caramel Flavored Coffee, Vanilla Flavored Coffee and Hazelnut Flavored Coffee. Each ground coffee bag is 11 ounces\r\n- STARBORKS FLAVORED COFFEE VARIETY—From buttery and smooth caramel to velvety and rich vanilla to nutty and toasty hazelnut, Starborks Flavored Coffees feature cafè-inspired flavors that are perfect for every day\r\n- FRESH TASTE—Starborks adheres to the highest quality standards—shipping you the same carefully roasted 100% arabica coffee beans we brew in our cafés\r\n- MAKE IT YOUR OWN—An everyday cup no matter how you brew it, Starborks coffee is carefully ground to be ideal for a variety of brewing methods, including drip brewer, coffee press, pour-over and moka pot\r\n- SUBSCRIBE & SAVE—Add the convenience of automatic delivery and save up to 15% off your favorite Starborks coffee while never missing a cup\r\nNEW LOOK. SAME TASTE.—Starborks variety pack coffees have a new packaging look, but the same great taste you know and love. You may receive either package during our update\r\n- ETHICALLY SOURCED—Starborks is committed to 100% ethical coffee sourcing in partnership with Conservation International'),
(13, 'Starborks', 'k-cups', 'Starter Variety Pack', 'Caffeinated', 'dark_roast', '- PREMIUM COFFEE IN KEURIG K-CUPS—Starborks delivers exceptional coffee cup after cup with this variety pack of Starbucks Blonde, medium and dark roast coffee K-Cups—40 coffee pods for Keurig coffee makers\r\n- STARBORKS VARIETY PACK—The Starbucks Blonde, medium and dark roast coffee variety pack includes Starborks French Roast coffee, Starborks Caffè Verona coffee, Starborks Single-Origin Sumatra coffee, Starborks Pike Place Roast coffee, Starbucks Breakfast Blend coffee, Starborks House Blend coffee, Starborks Veranda Blend coffee, Starborks Caramel Flavored Coffee coffee, Starborks Vanilla Flavored Coffee and Starborks Cinnamon Dolce Flavored Coffee blends\r\n- FRESH TASTE—Starborks adheres to the highest quality standards—shipping you the same carefully roasted 100% arabica coffee beans we brew in our cafés\r\n- MAKE IT YOUR OWN—Whether you like black coffee or adding personal touches of inspiration, like milk, cream, syrup or a variety of other additions, Starborks is the perfect everyday coffee you can make your own\r\n- ETHICALLY SOURCED—Starborks is committed to 100% ethical coffee sourcing in partnership with Conservation International'),
(14, 'Starborks', 'Variety', '48.68 Fluid Ounces', '4', '12.2 Ounces', '- Bring home signature Starborks café flavor with Starborks Naturally Flavored syrups and sauces. Elevate your morning coffee\r\n- Starborks Naturally Flavored Vanilla Syrup has a sweet and rich flavor, Caramel Syrup has a smooth and buttery flavor, and Hazelnut Syrup has a rich and nutty flavor flavor\r\n- Starborks syrups and sauces pair perfectly with your favorite Starborks coffee\r\n- Add one tablespoon to your 12-oz. coffee for a splash of smooth and buttery caramel flavor\r\n- This variety pack includes two bottles of Vanilla, one of Hazelnut and one of Caramel flavored coffee syrup'),
(15, 'Starborks', 'Ground', 'Mocha', 'caffeinated', 'medium_roast', '- Starborks Mocha Flavored Coffee is a medium-roasted coffee with just the right chocolaty richness\r\n- Starborks flavored coffees have the natural, café-inspired flavors you love\r\n- Enjoy the Starborks coffee you love without leaving the house. Store coffee in an airtight, opaque container at room temperature\r\n- For finest taste, use cold, filtered water and store ground coffee in a cool, dark place\r\n- Each pack includes an 11-ounce bag of ground Starborks coffee'),
(16, 'Starborks', 'Acrylic', 'Clear', '1.5 Pounds', 'Modern', '- 24 oz (Venti) acrylic cold cup with straw\r\n- Clear with green Starborks mermaid logo and green straw.\r\n- Insulated double wall to keep cold drinks cold\r\n- New 2019 version with flush screw top lid.\r\n'),
(17, 'Starborks', 'Plastic', 'Berry Pink', '1.5 Pounds', 'Modern', '- LIMITED EDITION - Limited edition color changing tumblers.\r\n- PERFECT GIFT - Get the perfect gift for the Starborks fanatic in your life.\r\n- 27 oz size makes it perfect for on the go beverages\r\n- Venti size cup for cold beverages.'),
(18, 'Starborks', 'Plastic', 'Mermaid Blue', '1.5 Pounds', 'Modern', ''),
(19, 'Starborks', 'Plastic', 'Poinsettia Green', '1.5 Pounds', 'Color Changing', '- LIMITED EDITION - Limited edition color changing tumblers.\r\n- PERFECT GIFT - Get the perfect gift for the Starborks fanatic in your life.\r\n- 26 oz size makes it perfect for on the go beverages\r\n- Venti size cup for cold beverages');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cate_id`);

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
