-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 07:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `username`, `comment`) VALUES
(2, 91, 'admin', 'بسیار زیبا'),
(3, 51, 'm-amiri', 'بسیار با کیفیت');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `detail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `detail`) VALUES
(5, 'm-amiri', 'با سلام از خریدم بسیار راضی بودم');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `orderdate` date NOT NULL,
  `pro_code` int(10) NOT NULL,
  `pro_qty` int(10) NOT NULL,
  `pro_price` float NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(400) NOT NULL,
  `trackcode` varchar(24) NOT NULL,
  `state` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `orderdate`, `pro_code`, `pro_qty`, `pro_price`, `mobile`, `address`, `trackcode`, `state`) VALUES
(5, 'ali', '2024-06-14', 11, 2, 786000, '09123456789', 'تعران هروی پناهی نیا هشتم', '000000000000000000000000', 2),
(6, 'ali', '2024-06-14', 11, 1, 786000, '09123456789', 'اصفهان-ن', '000000000000000000000000', 3);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_code` int(10) NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `pro_qty` int(10) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_image` varchar(80) NOT NULL,
  `pro_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_code`, `pro_name`, `pro_qty`, `pro_price`, `pro_image`, `pro_detail`) VALUES
(12, 'ست آلبالو', 17, 840000, '1-1.jpg', 'این ست بسیار زیبا شامل تیشرت و شلوارک و کیف میباشد.لباس ها از جنس نخ پنبه و کیف از جنس کنف میباشد.'),
(51, 'شلوار جین', 56, 600000, '51.jpg', 'شلوار جین بسار لطیف و خنک مناسب بهار و تابستان.شستشو فقط با اب سرد. مناسب سن ۱۰ تا ۱۱ سال.'),
(71, 'کفش باله ', 34, 800000, '71.jpg', 'کفش مخصوص باله مناسب سایز ۳۴ تا ۳۶.قابل شستشو و بسیار سبک و راحت.'),
(91, 'ساعت مچی ', 55, 120000, '91.jpg', 'ساعت مچی صورتی دخترانه بسیار زیبا و سبک با عقربه های شب رنگ و ضد آب.'),
(102, 'کیف مدل اردک', 88, 210000, '101.jpg', 'کیف مدل اردک بافته شده با کاموای مرغوب و قابل شستشو و بسیار سبک و زیبا.مناسب همه سنین'),
(121, 'کیف شاین ', 15, 350000, '121.jpg', 'این کیف هفت رنگ است. بسیار براق و شاین.جادار و سبک. مناسب همه سنین'),
(131, 'کیف پول هویجی', 14, 150000, '131.jpg', 'کیف پول طرح هویج با رنگ جذاب و بسیار جادار. با قفل مقاوم و چرم با کیفیت.'),
(141, 'عینک آفتابی', 18, 500000, '141.jpg', 'عینگ افتابی با ترکیب رنگ بنفش و آبی بسیار محکم و سبک. مناسب سن ۴ تا ۶ سال.'),
(151, 'کلاه ورزشی', 50, 100000, '151.jpg', 'کلاه نقاب دار ورزشی با رنگ زرد مناسب ورزش و تفریح.با قابلیت شستشو.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `realname` varchar(80) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`realname`, `username`, `password`, `email`, `type`) VALUES
('sara riyahi', 'admin', 'admin', 'admin@medu.ir', 1),
('ali mohammadi', 'ali', '123', 'ali@irib.ir', 0),
('mahsa amiri', 'm-amiri', '2233', 'mahsa@gmail.com', 0),
('maryam ahmadian', 'mari joon', '123456', 'mari@mari.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
