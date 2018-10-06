-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 07:31 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dessert_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcategory`
--

CREATE TABLE `addcategory` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcategory`
--

INSERT INTO `addcategory` (`cat_id`, `cat_name`, `description`, `created_date`, `created_time`) VALUES
(1, 'Chocolates', 'Chocolate is a food made from the seeds of a cacao bean. It is used in many desserts like pudding, cakes, candy, ice cream. and Easter eggs. It can be a solid form like a candy bar or it can be in a liquid form like hot chocolate. The taste of chocolate i', '07/09/18', '23:34:14 pm'),
(2, 'Cake', 'Cake is a form of sweet dessert that is typically baked. In its oldest forms, cakes were modifications of breads, but cakes now cover a wide range of preparations that can be simple or elaborate, and that share features with other desserts such as pastrie', '07/09/18', '23:34:51 pm'),
(3, 'Dessert Cups', 'Dessert cups are all the rage right now and we think theyâ€™re pretty fantastic for parties! These mini dessert cups are easy to serve at any event and theyâ€™re just enough to satisfy anyoneâ€™s sweet tooth without going overboard.', '07/09/18', '23:41:25 pm');

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `pro_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `pro_img1` varchar(255) NOT NULL,
  `pro_img2` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `size_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`pro_id`, `cat_id`, `subcat_id`, `pro_img`, `pro_img1`, `pro_img2`, `pro_name`, `size_id`, `price`, `quantity`, `description`, `created_date`, `created_time`) VALUES
(1, 1, 1, 'product_img/fudges2.jpg', 'product_img/fudges2.jpg', 'product_img/fudges2.jpg', 'Fudges chocklates ', 5, 500, 120, 'Its a variety of fudges.', '07/09/18', '11:04:24 am'),
(2, 1, 1, 'product_img/fudges1.jpg', 'product_img/fudges1.jpg', 'product_img/fudges1.jpg', 'Raspberry Almond Fudges', 5, 450, 120, 'It is a variety of fudges with raspberry and almond flavor.', '07/09/18', '11:11:04 am'),
(3, 1, 1, 'product_img/fudges5.jpeg', 'product_img/fudges5.jpeg', 'product_img/fudges5.jpeg', 'Almond fudges', 5, 500, 120, 'Its a fudges with almonds.', '07/09/18', '11:19:57 am'),
(4, 1, 1, 'product_img/fudges6.jpg', 'product_img/fudges6.jpg', 'product_img/fudges6.jpg', 'Sandwich Fudges', 6, 1500, 100, 'Its contains three layers with fudges base , chocolate and nuts as the middle layer.', '07/09/18', '11:23:19 am'),
(5, 1, 2, 'product_img/praline1.jpg', 'product_img/praline1.jpg', 'product_img/praline1.jpg', 'Praline chocolates cups', 4, 350, 120, 'Praline Chocolates ', '07/09/18', '11:28:44 am'),
(6, 1, 2, 'product_img/praline2.JPG', 'product_img/praline2.JPG', 'product_img/praline2.JPG', 'Praline Chocolates', 4, 300, 150, 'Praline Chocolates', '07/09/18', '11:30:27 am'),
(7, 1, 2, 'product_img/praline3.jpg', 'product_img/praline3.jpg', 'product_img/praline3.jpg', 'Praline Bars', 6, 1500, 200, 'Praline Chocolates Bars', '07/09/18', '11:32:12 am'),
(8, 1, 3, 'product_img/ruby1.jpg', 'product_img/ruby1.jpg', 'product_img/ruby1.jpg', 'Ruby Chocolates', 4, 300, 150, 'Ruby Chocolates', '07/09/18', '21:41:23 pm'),
(9, 1, 3, 'product_img/ruby2.jpg', 'product_img/ruby2.jpg', 'product_img/ruby2.jpg', 'Ruby Chocolates', 5, 500, 120, 'Ruby Chocolates', '07/09/18', '21:42:57 pm'),
(10, 1, 3, 'product_img/ruby4.png', 'product_img/ruby4.png', 'product_img/ruby4.png', 'Ruby Chocolates', 4, 300, 200, 'Ruby Chocolates', '07/09/18', '21:44:58 pm'),
(11, 1, 3, 'product_img/ruby3.jpg', 'product_img/ruby3.jpg', 'product_img/ruby3.jpg', 'Ruby Chocolates', 5, 350, 100, 'Ruby Chocolates', '07/09/18', '21:46:49 pm'),
(12, 1, 4, 'product_img/swiss.jpg', 'product_img/swiss.jpg', 'product_img/swiss.jpg', 'Swiss Truffles', 5, 600, 120, 'Swiss Truffles', '07/09/18', '21:51:32 pm'),
(13, 1, 4, 'product_img/swiss3.jpg', 'product_img/swiss3.jpg', 'product_img/swiss3.jpg', 'Swiss Truffles', 5, 600, 130, 'Swiss Truffles', '07/09/18', '21:54:02 pm'),
(14, 1, 4, 'product_img/swiss4.jpg', 'product_img/swiss4.jpg', 'product_img/swiss4.jpg', 'Swiss Truffles', 5, 500, 200, 'Swiss Truffles', '07/09/18', '22:07:07 pm'),
(15, 2, 5, 'product_img/birthday 1.jpg', 'product_img/birthday 1.jpg', 'product_img/birthday 1.jpg', 'Birthday cake', 1, 700, 50, 'Its a birthday cake with roses as a topping design.', '07/09/18', '22:10:38 pm'),
(16, 2, 5, 'product_img/bithday2.jpg', 'product_img/bithday2.jpg', 'product_img/bithday2.jpg', 'Birthday cake', 1, 800, 25, 'Its a chocolate truffle birthday cake', '07/09/18', '22:17:18 pm'),
(17, 2, 5, 'product_img/birthday3.jpg', 'product_img/birthday3.jpg', 'product_img/birthday3.jpg', 'Birthday cake', 2, 1500, 20, 'Birthday cake', '07/09/18', '22:19:38 pm'),
(18, 2, 5, 'product_img/birthday4.jpg', 'product_img/birthday4.jpg', 'product_img/birthday4.jpg', 'Birthday cake', 2, 1000, 20, 'Birthday cake', '07/09/18', '22:21:00 pm'),
(19, 2, 6, 'product_img/designer1.jpg', 'product_img/designer1.jpg', 'product_img/designer1.jpg', 'Designer Cake ', 2, 1800, 15, 'Designer cake with girl face', '07/09/18', '22:26:57 pm'),
(20, 2, 6, 'product_img/designer3.jpg', 'product_img/designer3.jpg', 'product_img/designer3.jpg', 'Designer Cake ', 2, 2000, 20, 'Designer cake', '07/09/18', '22:34:40 pm'),
(21, 2, 6, 'product_img/designer4.png', 'product_img/designer4.png', 'product_img/designer4.png', 'Designer Cake ', 3, 4500, 15, 'Blue Designer cake', '07/09/18', '22:36:16 pm'),
(22, 2, 8, 'product_img/fruit1.jpg', 'product_img/fruit1.jpg', 'product_img/fruit1.jpg', 'Fresh Fruit Cake', 1, 700, 25, 'Mango Cake', '07/09/18', '23:08:21 pm'),
(23, 2, 8, 'product_img/fruit2.jpg', 'product_img/fruit2.jpg', 'product_img/fruit2.jpg', 'Fresh Fruit Cake', 1, 700, 25, 'Mixed Fruit Cake', '07/09/18', '23:09:45 pm'),
(24, 2, 8, 'product_img/fruit3.jpg', 'product_img/fruit3.jpg', 'product_img/fruit3.jpg', 'Fresh Fruit Cake', 2, 1100, 20, 'Chocolate Fruit cake', '07/09/18', '23:13:12 pm'),
(25, 2, 8, 'product_img/fruit4.jpg', 'product_img/fruit4.jpg', 'product_img/fruit4.jpg', 'Fresh Fruit Cake', 1, 850, 25, 'Fruit Cake', '07/09/18', '23:14:21 pm'),
(26, 2, 7, 'product_img/photo1.jpg', 'product_img/photo1.jpg', 'product_img/photo1.jpg', 'Photo Cake', 1, 400, 40, 'Photo Cake', '07/09/18', '23:28:13 pm'),
(27, 2, 7, 'product_img/photo2.jpg', 'product_img/photo2.jpg', 'product_img/photo2.jpg', 'Photo Cake', 1, 400, 50, 'Photo Cake', '07/09/18', '23:29:49 pm'),
(28, 2, 7, 'product_img/photo3.jpg', 'product_img/photo3.jpg', 'product_img/photo3.jpg', 'Photo Cake', 1, 400, 35, 'Photo Cake', '07/09/18', '23:31:26 pm'),
(29, 3, 9, 'product_img/dessert2.jpg', 'product_img/dessert2.jpg', 'product_img/dessert2.jpg', 'Black Forest Trifles ', 4, 50, 100, 'It include the layers of black forest cake , whipped cream and chocolate.', '07/09/18', '23:56:27 pm'),
(30, 3, 9, 'product_img/dessert1.jpg', 'product_img/dessert1.jpg', 'product_img/dessert1.jpg', 'Black Forest Trifles ', 4, 50, 100, 'Includes the layers of sponge cake , pudding and chocolate.', '07/09/18', '23:58:54 pm'),
(31, 3, 9, 'product_img/dessert3.jpg', 'product_img/dessert3.jpg', 'product_img/dessert3.jpg', 'Peanut Butter Brownie Trifle', 4, 50, 100, 'It includes the layer of the brownie , peanut butter and whipped cream.', '08/09/18', '00:02:27 am'),
(32, 3, 9, 'product_img/dessert4.jpg', 'product_img/dessert4.jpg', 'product_img/dessert4.jpg', 'Caramel Apple Trifle', 4, 50, 100, 'I includes the layer of caramel and whipped cream with chunks of cake and apple', '08/09/18', '00:05:50 am');

-- --------------------------------------------------------

--
-- Table structure for table `addsize`
--

CREATE TABLE `addsize` (
  `size_id` int(11) NOT NULL,
  `sizename` varchar(255) NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsize`
--

INSERT INTO `addsize` (`size_id`, `sizename`, `created_date`, `created_time`) VALUES
(1, '1 kg', '07/09/18', '10:47:03 am'),
(2, '2kg', '07/09/18', '10:49:33 am'),
(3, '5 kg', '07/09/18', '10:49:44 am'),
(4, 'Small', '07/09/18', '10:49:54 am'),
(5, 'Medium', '07/09/18', '10:50:02 am'),
(6, 'Large', '07/09/18', '11:21:22 am');

-- --------------------------------------------------------

--
-- Table structure for table `addsubcategory`
--

CREATE TABLE `addsubcategory` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsubcategory`
--

INSERT INTO `addsubcategory` (`subcat_id`, `subcat_name`, `description`, `created_date`, `created_time`, `cat_id`) VALUES
(1, 'Fudges', 'Fudge is a type of sugar candy that is made by mixing sugar, butter and milk, heating it to the soft-ball stage  and then beating the mixture while it cools so that it acquires a smooth, creamy consistency. Fruits, nuts, chocolate, caramel, candies, sweets and other flavors are sometimes added either inside or on top.', '27/08/18', '10:37:57 am', 1),
(2, 'Praline', 'A praline cookie is a chocolate biscuit containing ground nuts. Praline is usually used as a filling in chocolates or other sweets.', '27/08/18', '10:48:27 am', 1),
(3, 'Ruby chocolate', 'The chocolate is made from the \"ruby cocoa bean\".Ruby beans are existing botanical cocoa bean varieties that have been identified as having the right attributes to be processed into ruby chocolate.', '27/08/18', '10:53:56 am', 1),
(4, 'Swiss Truffles', 'Swiss chocolate is chocolate produced in Switzerland. ', '27/08/18', '10:57:29 am', 1),
(5, 'Birthday Cakes', 'Mainly designed for the purpose of  birthday function', '27/08/18', '11:01:51 am', 2),
(6, 'Designer Cakes', 'Includes the customized and designer cakes as per the requirement of the customers', '27/08/18', '11:04:18 am', 2),
(7, 'Edible photo cakes', 'It includes the customized photos on the cakes as per the requirement of the customer.', '27/08/18', '11:06:41 am', 2),
(8, 'Fresh Fruit Cakes', 'It includes the cakes with fresh fruits in the topping decoration as well as in the cake according to the requirement of the customer and the availability of the seasonal fruit.', '27/08/18', '11:10:01 am', 2),
(9, 'Mixed Flavor cups', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nIt includes the cups with large variety of bases such as cakes , brownies , chocolates , whipped cream  and many more material\r\n', '07/09/18', '23:50:40 pm', 3),
(10, 'Panna Cotta', 'Panna cotta is an Italian dessert of sweetened cream thickened with gelatin and molded. The cream may be automatized with coffee, vanilla, or other flavorings.', '07/09/18', '23:53:16 pm', 3);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'a123');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `pro_id`, `pro_name`, `price`, `quantity`, `subtotal`, `status`) VALUES
(7, 10, 'Ruby Chocolates', 300, 2, 600, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `ct_id` int(11) NOT NULL,
  `ct_name` varchar(255) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ct_id`, `ct_name`, `s_id`) VALUES
(1, 'Rajkot', 1),
(2, 'Ahmedabad', 1),
(3, 'Surat', 1),
(4, 'Udaipur', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `username`, `mobile`, `email`, `subject`, `message`) VALUES
(1, 'cbcc', 945545454, 'dhatri@gmail.com', 'cxbcxcvxbcvxbcvxb', 'asasasasasasas'),
(2, 'dhatri', 95454545, 'bkpandey.pandey@gmail.com', 'Submit', 'hi i am interested to php language.'),
(3, 'you', 9856589714, 'bkpandey.pandey@gmail.com', 'Submit', 'ello');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`c_id`, `c_name`) VALUES
(1, 'India'),
(2, 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `username`, `email`, `mobile`, `message`) VALUES
(1, 'abc', 'abc@gmail.com', '9856897859', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `order_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text NOT NULL,
  `ordercode` int(11) NOT NULL,
  `orderdate` varchar(255) NOT NULL,
  `ordertime` varchar(255) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`order_id`, `cart_id`, `uid`, `email`, `username`, `firstname`, `lastname`, `mobile`, `address`, `ordercode`, `orderdate`, `ordertime`, `subtotal`, `status`) VALUES
(1, 2, 2, 'bkpandey.pandey@gmail.com', '', 'brijesh', 'pandey', 9173357217, '150 Feet ring road,\r\nNear Telephone exchange raiya road,\r\nRajkot-36005', 78768638, '11/09/18', '14:24:21 pm', 700, 'Placed'),
(2, 7, 3, 'dhatrijoshi1998@gmail.com', 'dhatri', 'dhatri', 'joshi', 9173357217, 'rajkot near kalawad main road rajkot-360001', 11153797, '12/09/18', '10:41:17 am', 600, 'Placed');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `uid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uid`, `photo`, `username`, `password`, `email`, `mobile`, `address`) VALUES
(1, 'upload/32.jpg', 'Brijesh', 'brij123', 'bkpandey.pandey@gmail.com', 9173357217, 'near teklephone exchane raiya road rajkot 360005'),
(2, 'upload/1.png', 'brijesh', '1234', 'bk@gmail.com', 123456789, 'hell'),
(3, 'upload/2.png', 'dhatri', '123456', 'dhatrijoshi1998@gmail.com', 9454452212121, '150 feet ring road rajkot near telephone exchange rajkot-360005');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`s_id`, `s_name`, `c_id`) VALUES
(1, 'Gujarat', 1),
(2, 'Rajasthan', 1),
(3, 'Kathmandu', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcategory`
--
ALTER TABLE `addcategory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `subcat_id` (`subcat_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `addsize`
--
ALTER TABLE `addsize`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `addsubcategory`
--
ALTER TABLE `addsubcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ct_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `c_id` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcategory`
--
ALTER TABLE `addcategory`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `addsize`
--
ALTER TABLE `addsize`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `addsubcategory`
--
ALTER TABLE `addsubcategory`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
