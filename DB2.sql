-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2019 at 10:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_information`
--

CREATE TABLE `add_information` (
  `information_id` int(11) NOT NULL,
  `Pharmacy_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_information`
--

INSERT INTO `add_information` (`information_id`, `Pharmacy_name`, `phone`, `fax`, `email`, `Address`) VALUES
(3, 'alhudah', '03018105133', '9700-76879-08', 'razakhadim57@gmail.com', 'near masjid Shudah block 10 ,Farid town, sahiwal');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `invoice_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `product_name`, `img`, `quantity`, `price`, `user_id`, `status`, `invoice_id`) VALUES
(64, 34, ' Fashion In ', ' themes/images/ladies/7.jpg ', 5, 220, 12, 1, 22),
(62, 3, ' Fashion In ', ' themes/images/ladies/8.jpg ', 4, 2500, 3, 1, 22),
(63, 25, ' shirts ', ' themes/images/ladies/f5.jpg ', 1, 126, 12, 1, 22),
(61, 3, ' Fashion In ', ' themes/images/ladies/8.jpg ', 11, 2500, 3, 1, 1),
(60, 7, ' Bottique ', ' themes/images/ladies/6.jpg ', 4, 330, 3, 1, 1),
(95, 34, ' Fashion In ', ' themes/images/ladies/7.jpg ', 1, 220, 17, 1, 23),
(70, 14, ' Glasses ', ' themes/images/ladies/sungla1.jpg ', 2, 130, 14, 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `check_out`
--

CREATE TABLE `check_out` (
  `checkout_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `company` varchar(40) DEFAULT NULL,
  `adress` varchar(300) NOT NULL,
  `city` varchar(70) NOT NULL,
  `postal_code` varchar(11) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `invoice_id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check_out`
--

INSERT INTO `check_out` (`checkout_id`, `user_id`, `name`, `email`, `phone`, `fax`, `company`, `adress`, `city`, `postal_code`, `country`, `invoice_id`) VALUES
(21, 3, ' RazaHussain ', ' razakhadim@gmail.com ', ' 03018105133 ', ' 123 ', ' g inn ', ' uet lahore ', ' sahiwal ', ' iuy ', ' 1 ', 1),
(22, 14, ' IqbalHaider ', ' iqbal@gmail.com ', ' 03894874782 ', ' 124 ', ' Addidas ', ' Uet Lahore ', ' Okara ', ' 56300 ', ' Afghanistan ', 22);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `con_name` varchar(255) NOT NULL,
  `con_email` varchar(255) NOT NULL,
  `con_message` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `con_name`, `con_email`, `con_message`) VALUES
(1, 'Raza Khadim', 'razakhadim@rockedmail.com', 'This is very helpful for me to buy something new.');

-- --------------------------------------------------------

--
-- Table structure for table `general_category`
--

CREATE TABLE `general_category` (
  `general_category_id` int(11) NOT NULL,
  `general_category_name` varchar(255) NOT NULL,
  `general_category_status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_category`
--

INSERT INTO `general_category` (`general_category_id`, `general_category_name`, `general_category_status`) VALUES
(1, 'Medicine service', 1),
(7, 'Medical Equipment', 0);

-- --------------------------------------------------------

--
-- Table structure for table `online_checkout`
--

CREATE TABLE `online_checkout` (
  `checkout_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `card_name` varchar(50) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `expiray_date` varchar(50) NOT NULL,
  `cvv_number` varchar(50) NOT NULL,
  `invoice_id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_checkout`
--

INSERT INTO `online_checkout` (`checkout_id`, `user_id`, `firstname`, `email`, `card_name`, `card_number`, `expiray_date`, `cvv_number`, `invoice_id`) VALUES
(3, 3, ' Raza', ' sheharyar1997@hotmail.com ', ' HBL ', ' 8765432123456787 ', ' 42207 ', ' 345 ', 1),
(4, 3, ' Raza', ' sheharyar1997@hotmail.com ', ' HBL ', ' 8765432123456787 ', ' 42207 ', ' 124 ', 4),
(5, 12, ' Raza', ' sheharyar1997@hotmail.com ', ' HBL ', ' 1234567890987654 ', ' 52025 ', ' 8765 ', 5),
(6, 17, ' Raza Khadim', ' razakhadim57@gmail.com ', ' hbl1234567890987654 ', ' 1111111111111111 ', ' 1412 ', ' 21423 ', 6);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `super_category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `Medicine_id` int(11) NOT NULL,
  `discription` varchar(10000) NOT NULL,
  `product_img1` varchar(100) NOT NULL,
  `product_img2` varchar(100) NOT NULL,
  `product_img3` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `super_category_id`, `product_name`, `medicine_name`, `Medicine_id`, `discription`, `product_img1`, `product_img2`, `product_img3`, `price`, `qty`, `status`) VALUES
(53, 1, 'Medicines', 'panadol', 12, 'qqqqqqqqqqqqqqq', 'themes/images/medicine/ACE-125.jpg', 'themes/images/medicine/ACE-125.jpg', 'themes/images/medicine/ACE-125.jpg', 5, 100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `reg_id` int(11) NOT NULL,
  `reg_name` varchar(255) NOT NULL,
  `reg_email` varchar(255) NOT NULL,
  `reg_password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_form`
--

INSERT INTO `register_form` (`reg_id`, `reg_name`, `reg_email`, `reg_password`) VALUES
(1, 'Raza khadim', 'raza51278@gmail.com', 'raza51278'),
(2, 'Subhan', 'subhan45@gmail.com', 'raza'),
(3, 'Raz', 'raza51278@gmail.com', '123'),
(4, 'Asad', 'asadzaman67@gmail.com', 'asad'),
(5, 'Faisal kamyana', 'faisal1278@gmail.com', '321'),
(6, 'zeeshan', 'zeeshan@53gmail.com', '12345'),
(7, 'Adnan Ashiq ', 'adnanashiq457@gmail.com', 'bismaadnan212'),
(8, 'Iqbal', 'iqbal45@gmail.com', '12345'),
(9, 'nauman', 'naumanarshad@gmail.com', '345'),
(10, 'umer', 'umer@3423.com', 'umer'),
(11, 'sheharyar', 'ssheharyar1997@hotmail.com', '1111'),
(12, 'sheri', 'sheri@gmail.com', '1234'),
(13, 'Ahmad', 'muhamadahamd57@gmail.com', 'ahmad'),
(14, 'Iqbal', 'iqbal45@gmail.com', '987'),
(21, 'junaid', 'junaid@gmail.com', 'Junaid_123'),
(16, 'umer toor', 'umer@e53425jlkg.com', 'Age'),
(17, 'haider', 'haider@e53425jlkg.com', 'zoha');

-- --------------------------------------------------------

--
-- Table structure for table `sec_information`
--

CREATE TABLE `sec_information` (
  `sec_inf0_id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sec_information`
--

INSERT INTO `sec_information` (`sec_inf0_id`, `phone`, `fax`, `email`) VALUES
(1, '(113) 023-1125', '+04 (113) 023-1140', 'vietcuong_it@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `super_category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `sub_category_status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `super_category_id`, `sub_category_name`, `sub_category_status`) VALUES
(1, 1, 'Nullam', 1),
(2, 2, 'Phasellac', 1),
(3, 3, 'ultrics', 1),
(4, 5, 'Donec', 1);

-- --------------------------------------------------------

--
-- Table structure for table `super_category`
--

CREATE TABLE `super_category` (
  `super_category_id` int(11) NOT NULL,
  `general_category_id` int(11) NOT NULL,
  `super_category_name` varchar(255) NOT NULL,
  `super_category_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_category`
--

INSERT INTO `super_category` (`super_category_id`, `general_category_id`, `super_category_name`, `super_category_status`) VALUES
(1, 1, 'Medicines', '1'),
(2, 1, 'other Product', '1'),
(22, 7, 'sugar Equipment', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_information`
--
ALTER TABLE `add_information`
  ADD PRIMARY KEY (`information_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `check_out`
--
ALTER TABLE `check_out`
  ADD PRIMARY KEY (`checkout_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `general_category`
--
ALTER TABLE `general_category`
  ADD PRIMARY KEY (`general_category_id`);

--
-- Indexes for table `online_checkout`
--
ALTER TABLE `online_checkout`
  ADD PRIMARY KEY (`checkout_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `sec_information`
--
ALTER TABLE `sec_information`
  ADD PRIMARY KEY (`sec_inf0_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `super_category`
--
ALTER TABLE `super_category`
  ADD PRIMARY KEY (`super_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_information`
--
ALTER TABLE `add_information`
  MODIFY `information_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `check_out`
--
ALTER TABLE `check_out`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_category`
--
ALTER TABLE `general_category`
  MODIFY `general_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `online_checkout`
--
ALTER TABLE `online_checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `register_form`
--
ALTER TABLE `register_form`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sec_information`
--
ALTER TABLE `sec_information`
  MODIFY `sec_inf0_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `super_category`
--
ALTER TABLE `super_category`
  MODIFY `super_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
