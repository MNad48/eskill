-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2017 at 10:40 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stylo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(200) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(2, 'nadeemarain47@gmail.com', 'Ali123456789');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(200) NOT NULL,
  `customer_ip` int(50) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `customer_ip`, `quantity`) VALUES
(18, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(5, 'women_Bangles'),
(6, 'women_bags'),
(7, 'women_scarfs'),
(10, 'women_shirts'),
(12, 'Men_shoes'),
(13, 'Men_sandals'),
(14, 'Men_shirts'),
(15, 'Men_watches'),
(16, 'Men_slippers'),
(17, 'Men_glasses'),
(18, 'kids_shirts'),
(19, 'kids_shoes'),
(20, 'kids_sandals'),
(21, 'kids_Tshirts'),
(22, 'kids_socks'),
(23, 'summeroffer'),
(24, 'kids_glasses'),
(25, 'kids_glasses'),
(26, 'kids_glass'),
(27, 'kids_glass'),
(28, 'women_shirts');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `c_no` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`c_no`, `customer_id`, `subject`, `complaint`) VALUES
(1, 2, 'dealy', 'ghashsg hagsh'),
(2, 1, 'check', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `customer_id`, `message`) VALUES
(1, 1, 'this is testing message');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_gender` varchar(50) NOT NULL,
  `c_cnic` varchar(50) NOT NULL,
  `c_phone` varchar(50) NOT NULL,
  `c_image` text NOT NULL,
  `c_add` text NOT NULL,
  `c_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_email`, `c_gender`, `c_cnic`, `c_phone`, `c_image`, `c_add`, `c_pass`) VALUES
(1, 'ali', 'ali123@gmail.com', 'male', '36303_98765_81', '061237861', '', 'test', '1234'),
(2, 'qqqqq', 'qqq@2QQQ.COM', 'Male', '33333-3333333-4', '03009876543', 'Right.jpg', 'aaaaaaaaaa', '1234'),
(3, 'Ahmad Ali', 'xyz@gmail.com', 'Male', '33333-3333658-4', '03009876543', 'Wrong.jpg', 'xyz', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(200) NOT NULL,
  `c_id` int(200) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `c_id`, `datetime`, `total`, `status`) VALUES
(23, 0, '2017-04-29 17:41:16', '0', 'pending'),
(24, 0, '2017-04-29 17:43:17', '12200', 'pending'),
(25, 0, '2017-04-29 17:47:58', '12200', 'pending'),
(26, 0, '2017-04-29 17:48:08', '12200', 'pending'),
(27, 0, '2017-04-29 17:49:38', '12200', 'pending'),
(28, 0, '2017-04-29 17:53:34', '12200', 'pending'),
(29, 0, '2017-04-29 17:58:26', '12200', 'pending'),
(30, 0, '2017-05-28 08:11:59', '20000', 'pending'),
(31, 0, '2017-05-28 08:22:26', '18300', 'pending'),
(32, 0, '2017-05-28 08:43:25', '18300', 'pending'),
(33, 0, '2017-05-28 08:44:41', '18300', 'pending'),
(34, 0, '2017-05-28 08:47:52', '18300', 'pending'),
(35, 0, '2017-05-28 08:48:04', '18300', 'pending'),
(36, 0, '2017-05-28 08:49:19', '18300', 'pending'),
(37, 0, '2017-05-28 08:54:06', '18300', 'pending'),
(38, 0, '2017-05-28 08:54:07', '18300', 'pending'),
(39, 0, '2017-05-28 08:59:24', '18300', 'pending'),
(40, 1, '2017-05-28 09:25:30', '18300', 'pending'),
(41, 1, '2017-05-28 09:25:38', '18300', 'pending'),
(42, 1, '2017-05-28 09:25:43', '18300', 'pending'),
(43, 1, '2017-05-28 09:26:20', '18300', 'pending'),
(44, 1, '2017-05-28 09:26:37', '18300', 'pending'),
(45, 1, '2017-05-28 09:28:41', '18300', 'pending'),
(46, 1, '2017-05-28 09:28:59', '18300', 'pending'),
(47, 1, '2017-05-28 09:29:19', '18300', 'pending'),
(48, 1, '2017-05-28 09:29:47', '18300', 'pending'),
(49, 1, '2017-05-28 09:30:53', '18300', 'pending'),
(50, 1, '2017-05-28 09:32:04', '18300', 'pending'),
(51, 1, '2017-05-28 09:34:09', '18300', 'pending'),
(52, 1, '2017-05-28 09:34:58', '18300', 'pending'),
(53, 1, '2017-05-28 09:35:50', '0', 'pending'),
(54, 1, '2017-05-28 09:36:56', '0', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `o_id` int(200) NOT NULL,
  `p_id` int(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `total_price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_details`
--

INSERT INTO `orders_details` (`o_id`, `p_id`, `price`, `quantity`, `total_price`) VALUES
(1, 3, '1200', 1, 1200),
(1, 4, '1500', 1, 1500),
(52, 13, '1300', 6, 7800),
(52, 18, '1200', 5, 6000),
(52, 27, '1500', 3, 4500);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `cat_id` int(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_size` varchar(50) NOT NULL,
  `p_color` varchar(50) NOT NULL,
  `p_price` varchar(50) NOT NULL,
  `p_desc` text NOT NULL,
  `p_image` text NOT NULL,
  `p_keywords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `cat_id`, `p_name`, `p_size`, `p_color`, `p_price`, `p_desc`, `p_image`, `p_keywords`) VALUES
(4, 5, 'golden', '5', 'golden london', '1500', '   london opening  ', 'bang.jpg', 'golden'),
(6, 0, 'Heel', '9', 'blue', '1500', '      sale     ', 'he.jpg', 'sale collection'),
(7, 0, 'Heel', '7', 'white', '1900', '    party shoes   ', 'fl.jpg', 'party shoes'),
(9, 7, 'scarfs', '5', 'pink', '1100', ' winter', 'scar.jpg', 'winter'),
(10, 9, 'slippers', '8', 'golden', '1100', ' slippers', 'fl.jpg', 'slipper'),
(11, 9, 'slippers', '7', 'golden mix', '1200', ' golden mix', 'flu.jpg', 'golden mix'),
(12, 10, 'shirt', '10', 'red', '1200', ' summer collection', 'shir.jpg', 'summer'),
(13, 10, 'shirt', '6', 'blue', '1300', ' winter collection', 'lwo.jpg', 'winter'),
(14, 11, 'shoes', '6', 'golden', '1800', ' winter collection', 'sw.jpg', 'winter'),
(15, 11, 'golden', '7', 'golden', '1400', ' winter collection', 'swe.jpg', 'winter collection'),
(16, 12, 'shoes', '9', 'brown', '1200', ' winter', 'sm.jpg', 'winter'),
(17, 12, 'shoes', '7', 'brown', '1100', ' winter', 'is.jpg', 'winter'),
(18, 13, 'sandals', '10', 'golden', '1200', ' summer', 'ms.jpg', 'summer'),
(19, 14, 'shirts', '8', 'blue', '1200', ' blue shirt', 'msh.jpg', 'shirt'),
(20, 14, 'shirt', '10', 'white', '1200', ' white shirt', 'hi.jpg', '10'),
(21, 15, 'watches', '3', 'black', '2000', ' white watches', 'mw.jpg', 'white'),
(22, 15, 'watches', '2', 'golden', '1900', ' golden watches', 'ni.jpg', 'golden'),
(23, 16, 'slippers', '10', 'blue', '400', ' summer collection', 'no.jpg', 'summer'),
(24, 17, 'glasses', '3', 'blue', '1300', ' ray_ban', 'rt.jpg', 'ray ban'),
(25, 18, 'shirt', '6', 'blue', '1100', ' kids shirts', 'pi3.jpg', 'kids shirts'),
(26, 18, 'shirt', '7', 'pink', '1300', ' shirt', 'download (1).jpg', 'shirt'),
(27, 19, 'shoes', '6', 'black', '1500', ' kids shoes', 'download (2).jpg', 'shoes'),
(28, 20, 'sandals', '4', 'black', '1800', ' sandals', 'kn.jpg', 'sandals'),
(29, 20, 'sandals', '5', 'golden', '1200', ' golden', 'ksdnd.jpg', 'golden'),
(30, 21, 'Tshirts', 'kids_Tshirts', 'blue', '1500', ' t shirts', 'download (3).jpg', 't shirts'),
(31, 22, 'socks', '2', 'pink', '1100', ' socks..', 'sk.jpg', 'socks..'),
(32, 22, 'kids socks', '3', 'red', '700', ' socks', 'socks.jpg', 'socks'),
(33, 8, 'heel golden', '10', 'golden', '1200', ' eid collection', 'heel.jpg', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`c_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `c_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
