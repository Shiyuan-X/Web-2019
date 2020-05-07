-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2019-04-23 23:24:08
-- 服务器版本： 5.6.36-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2019a5`
--

-- --------------------------------------------------------

--
-- 表的结构 `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `address` text NOT NULL,
  `email` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `pw` text NOT NULL,
  `uid` int(11) NOT NULL,
  `uname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `p_pid` int(11) NOT NULL,
  `ctext` text NOT NULL,
  `cscore` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `ctime` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`p_pid`, `ctext`, `cscore`, `cid`, `ctime`) VALUES
(1, 'product 1 is good', 5, 6, '2019-04-21 09:57:00'),
(1, 'product 1 is good', 3, 7, '2019-04-21 09:57:37'),
(8, 'LOVE this sprinkle water cup. It made washing my child''s hair so much easier.', 5, 8, '2019-04-22 12:32:49'),
(8, 'baby shower spoon as pictured and fast shipping', 5, 9, '2019-04-22 12:33:02'),
(8, 'Early then I thought it really good quality and happy with the item', 5, 10, '2019-04-22 12:35:36'),
(8, 'very correct seller', 4, 11, '2019-04-22 12:36:16'),
(7, 'Ok. At first it''s too easy. And then suddenly it becomes too complicated, especially if you''re using it for an online class, so you don''t have an instructor by your side.', 3, 12, '2019-04-22 12:38:06'),
(7, 'Not enough code, spends all of its energy trying to explain concepts instead of just getting into the actual HTML. Also does a poor job of explaining intermediate CSS, such as laying things out with float.', 2, 13, '2019-04-22 12:38:15'),
(7, 'I didn''t really have much of a need for this book in my Application Design class, but it did have quite a few helpful points. This is one of those books you want to hang on to even after graduation.', 3, 14, '2019-04-22 12:38:31'),
(7, 'This book is very well detailed book. A great book for the beginner as well as someone who is looking to gain in depth knowledge in the field of Web Development. I highly recommend this book. Though one problem that I am having is that the e-book didn’t include the access code. An access code is required to access the contents such as Labs, Data files, etc. I am making a humble request to Mr. Radny if he could send me an access code so that I can continue doing the assignments for this class.', 4, 15, '2019-04-22 12:39:09'),
(7, 'Buyer beware! I am new to digitally buying text books and this was my first one. The content of the book is actually very good, and I''m only on chapter 2. However, it being a textbook my professor is assigning work from the labs in the book. This book had a statement in the description that I missed: This is the eBook of the printed book and may not include any media, website access codes, or print supplements that may come packaged with the bound book. As good as this book may be, I need to get an access code to get through the class. Live and learn', 4, 16, '2019-04-22 12:39:25'),
(9, 'I have no idea why is this seller hiding product reviews on their ebay page. Is there any ulterior reason about it? So confused...', 1, 17, '2019-04-22 12:46:28'),
(10, 'At 346.7 miles the trans died in my 2015 Harley-Davidson Touring. Going down the road the clutches felt like they disengaged and the engine revved very high. I nursed the bike home in 2nd gear for approx 34 miles. 3 days later dealer trailered it in and checked it. Was told nothing is wrong and questioned whether I knew how to ride "a Harley". Dealer still has and will keep this post until it is fixed. I know of no recalls on the 2019, but you guys and gals beware!', 4, 18, '2019-04-22 12:52:59'),
(10, 'Bought bike new at Maui motorcycle Company. 600 miles voltage red light comes on. Took it in to dealership. They replaced the speedo system. All good took bike back to have stage 2 upgrade. All screaming eagle parts used. Within the next 2 hour ride the amber CEL comes on. They replace o2 sensor. Next ride in 2 hours light comes on again... Long story short it comes on every 2-3 hours after clearing. I now have 3,000 miles on the bike and it is still doing this. The bike has been to the dealer for approximately 8 times for the same CEL code 0151h. They have contacted the manufacturer and still no remedy.', 1, 19, '2019-04-22 12:53:53'),
(10, 'Bought my2015 Harley-Davidson Touring in August 2016, bike had 2 miles on the odometer. It’s been 4 years and two months and my odometer is at 53,253 miles. I have no complaints with this bike. If it blows up tomorrow, I won’t complain as I hammer down on this thing like it’s a sports bike. Absolutely the most fun you can have with your pants on.', 5, 20, '2019-04-22 12:55:40'),
(12, 'I love my straws and have made wonderful gifts. Can''t wait to order more...  Verified purchase: Yes | Condition: New | Sold by: cardeddy', 5, 21, '2019-04-22 01:00:03'),
(12, 'Love them!! Makes me feel that the drink is even colder!', 5, 22, '2019-04-22 01:00:13'),
(12, 'I like  them  so much.', 5, 23, '2019-04-22 01:00:35'),
(18, 'fast shipping', 5, 24, '2019-04-22 03:53:49'),
(18, 'Cannot run crisis. Disappointed', 1, 25, '2019-04-22 05:10:53');

-- --------------------------------------------------------

--
-- 表的结构 `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `account_uid` int(11) NOT NULL,
  `address` text NOT NULL,
  `buyer` text NOT NULL,
  `kartororder` text NOT NULL,
  `lid` int(11) NOT NULL,
  `message` int(11) NOT NULL,
  `product_pid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `list`
--

INSERT INTO `list` (`account_uid`, `address`, `buyer`, `kartororder`, `lid`, `message`, `product_pid`, `quantity`) VALUES
(0, '', 'buyer', 'order', 25, 0, 14, 1),
(0, '', 'buyer', 'order', 26, 0, 18, 1),
(0, '', 'buyer', 'deleted', 27, 0, 19, 1),
(0, '', 'buyer', 'deleted', 28, 0, 20, 10),
(0, '', 'buyer', 'deleted', 29, 0, 18, 15),
(0, '', 'buyer', 'deleted', 30, 0, 9, 1),
(0, '', 'buyer', 'deleted', 31, 0, 9, 1);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `list_lid` int(11) NOT NULL,
  `pdescription` text NOT NULL,
  `pfile` text NOT NULL,
  `pid` int(11) NOT NULL,
  `pimg` text NOT NULL,
  `pname` text NOT NULL,
  `pprice` double NOT NULL,
  `seller` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`list_lid`, `pdescription`, `pfile`, `pid`, `pimg`, `pname`, `pprice`, `seller`) VALUES
(0, 'About this product Synopsis For courses in Web Programming and Design: Numerous Mark-up / Scripting Languages, as part of the CS1 course sequence.   Master the fundamentals of web development                                                                                                                                                 Fundamentals of Web Development , 2nd Edition guides readers through the creation of enterprise-quality websites using current development frameworks. Written by a leading teacher in the field and designed for serious programmers, this book is as valuable to developers as a dev bootcamp. Its practical approach and comprehensive insight into the practice of web development covers HTML5, CSS3, Javascript, and the LAMP stack (that is, Linux, Apache, MySQL, and PHP), jQuery, XML, WordPress, Bootstrap, and a variety of third-party APIs that include Facebook, Twitter, Google, and Bing Maps. Coverage also includes the required ACM web development topics, aligned with real-world web development best practices. The 2nd Edition faithfully covers the most vital trends and innovations in the field since 2013, while continuing to provide a thorough and comprehensive overview.             Fundamentals of Web Development,2/e covers the broad range of topics required for modern web development (both client- and server-side) and is appropriate for students who have taken a CS1 course sequence. The book guides students through the creation of enterprise-quality websites using current development frameworks, its comprehensive coverage of a modern internet development platform includes HTML5, CSS3, Javascript, and the LAMP stack (that is, Linux, Apache, MySQL, and PHP). Other important technologies covered include jQuery, XML, WordPress, Bootstrap, and a variety of third-party APIs that include Facebook, Twitter, and Google and Bing Maps. Coverage also includes the required ACM web development topics in a modern manner closely aligned with best practices in the real world of web development.  Product Identifiers ISBN-10	0134481267 ISBN-13	9780134481265 eBay Product ID (ePID)	235073133  Key Details Author	Randy Connolly, Ricardo Hoar Number Of Pages	1232 pages Format	Paperback Publication Date	2017-02-08 Language	English Publisher	Pearson Education Publication Year	2017  Additional Details Edition Number	2 Copyright Date	2018  Dimensions Weight	61.9 Oz Height	1.7 In. Width	7.3 In. Length	9 In.  Target Audience Group	College Audience  Classification Method LCCN	2016-054661 LC Classification Number	TK5105.888.C658 2017 Dewey Decimal	006.7 Dewey Edition	23', '', 7, 'product_img/product7.jpg', 'Fundamentals of Web Development, Paperback by Connolly, Randy; Hoar, Ricardo, ISBN 0134481267, ISBN-13 9780134481265', 149, 'greatbookprices1'),
(0, 'Descriptions:  The cute shampoo cup is made of plastic, which is safe and non-toxic. Cute cartoon style can attract kid''s attention, making more fun for baby''s washing time. When you use the cup, it can protect baby''s eye.    Features:  The material of the shampoo cup is PP, which is safe and non-toxic. The handle of the cup is designed like fish, which is cute, and baby likes it. This cup lets you rinse baby''s hair while protecting their face and eyes. Comfortable handle, easy to hold and pour. The shampoo cup is detachable, easy to clean.  Specifications:  Condition: 100% Brand New  Material: PP  Size: 21*10.7*15cm/8.27*4.21*5.91in  Color: Green, Pink(Optional)  Weight: 91g  Suitable Age: Above 6 mouths old', '', 8, 'product_img/product8.jpg', 'Baby Spoon Shower Bath Water Swimming Bailer Shampoo Cup Children Kids Product', 3, 'home_garden365'),
(0, 'THESE ARE BRAND SPANKING NEW...    WE HAVE THEM ON HAND AND ARE SHIPPING NOW!   IN THE ORIGINAL BOX  BRAND NEW !    NEW MEN''S 2019   Air Jordan 13  “Cap & Gown"  Black / Black 414571-012   SHIPS NOW   WE HAVE THE FOLLOWING SIZE 8 - 13      All of our items are 100% Guaranteed Authentic or triple your money back. Please check our feedback left from other eBay customers to SHOW THAT WE SELL NOTHING BUT THE REAL THING AND ALSO THAT WE ABSOLUTELY HAVE ONE OF THE BEST EBAY ACCOUNTS OUT THERE FOR SERVICE AND PRICES.', '', 9, 'product_img/product9.jpg', 'Air Jordan 13 “Cap & Gown Black 414571-012 MEN''S AUTHENTIC', 235, 'jerzeykixxxx'),
(0, ' Condition:	 Used	 Year:	2015 VIN (Vehicle Identification Number):	AVL UPON REQUEST Mileage:	12650 Exterior Color:	BLACK & ORANGE	 Make:	Harley-Davidson Engine Size (cc):	1690	 Model:	Touring Warranty:	Vehicle has an existing warranty Vehicle Title:	Clear	 Type:	Touring For Sale By:	Me', '', 10, 'product_img/product10.jpg', '2015 Harley-Davidson Touring 2015 STREET GLIDE BAGGER *1 OF A KIND* 30" WHEEL! $85K INVESTED! HUGE AUDIO!! CALL US 24/7 AT 704-824-8533', 50555, 'thebikeexchange'),
(0, 'Product Description Feature: --100% brand new and high quality.   --Material: Stainless Steel.    --Dishwasher Safe,Ecofriendly,100%stainless steel.   --Rust,Scratch and break proof-304/316 stainless steel,All lifetime quality guarantee.   --Safer than glass and plastic straws that can break or hard to clean.   --Lightweight, Reusable and Eco-friendly.   --Trendy, chic, stylish and playful!   --Stainless Steel Straw only, other accessories demo in the picture is not included!         Size? Brush length: 230mm   Straw size: 215mm*6mm   Bag size: 250mm*73mm         Package Content: 8 pcs Stainless Steel Drinking Straws   2 pcs Brush   1 pc Black Bag', '', 12, 'product_img/product11.jpg', '8 Pcs Stainless Steel Metal Drinking Straw Reusable Straws + Cleaner Brush Kit', 7, 'discount_laptop'),
(0, '5. 8-inch Super Retina display (OLED) with HDR ¹ IP67 water and dust resistant (max depth of 1m up to 30 mines) ³ 12MP dual cameras with dual OIS and 7MP True Depth front camera—Portrait mode and Portrait Lighting Note: Phone is locked to Simple Mobile and is not fully unlockable Face ID for secure authentication and Apple Pay ?. A11 Bionic with Neural Engine Wireless charging—works with Qi chargers ² iOS 12 with Emoji, Screen Time, Siri Shortcuts, and Group FaceTime', '', 17, 'product_img/5cbd80107fd6e2.74271144.jpg', 'Apple iPhone X (64GB) - Silver [Locked to Simple Mobile Prepaid]', 900, 'apple'),
(0, 'Dual-core 7th-generation Intel Core i5 Processor Brilliant Retina Display Intel Iris Plus Graphics 640 Ultrafast SSD Two Thunderbolt 3 (USB-C) ports Up to 10 hours of battery life Force touch trackpad', '', 18, 'product_img/5cbd80f8d2c701.09935737.jpg', 'Apple MacBook Pro (13" Retina, 2.3GHz Dual-Core Intel Core i5, 8GB RAM, 128GB SSD) - Silver (Latest Model)', 1199, 'Apple'),
(0, 'Essentials Bundle with Three Batteries, 16GB Flash Drive, Custom Hard Case, Cleaning Cloth and One Year Warranty Extension', '', 19, 'product_img/5cbd881ed4f363.74270825.jpg', 'DJI Spark Fly More Drone Comboe (Alpine White) ', 569, 'DJI'),
(0, 'Brewed at the beautiful state of Tennessee. Alc lvl 25%. Buyer needs to show proof of over 21yr old', '', 20, 'product_img/5cbd8ba51b31b8.27272196.jpg', 'Tennessee moonshine', 22, 'Beautiful men and women of Tennessee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
