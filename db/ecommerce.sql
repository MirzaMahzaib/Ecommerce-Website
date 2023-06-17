-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2023 at 02:20 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u813805651_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(5, 'admin', 'admin@admin.com', 'password', 'IMG-20211121-WA0046.jpg', 'Pakistan', '<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>\r\n<p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>\r\n<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>\r\n<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>\r\n<p>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</p>\r\n<p>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '+92********70', 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(10) NOT NULL,
  `box_title` text NOT NULL,
  `box_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_title`, `box_desc`) VALUES
(3, '24/7 Services', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'Unique Offeres', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.							'),
(6, 'Fast Delivery', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `p_price`, `size`) VALUES
(5, '::1', 1, '60', 'Medium'),
(8, '103.157.155.40', 1, '150', 'Small'),
(14, '::1', 1, '45', 'Medium'),
(15, '124.109.59.191', 1, '310', 'Small'),
(16, '::1', 2, '22', 'Small'),
(17, '::1', 2, '15', 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(1, 'Men', 'no', 'man_1.jpg'),
(2, 'Women', 'yes', 'man_2.jpg'),
(3, 'Kids', 'no', 'man_3.jpg'),
(4, 'Olders', 'yes', 'man_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `product_id`, `coupon_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(3, 15, 'Coupon For Leather Shoes', '150', 'dfafafdf3333', 3, 0),
(4, 18, 'Coupon For Black Coin Purse', '100', '3323r4r5eff', 3, 0),
(5, 16, 'Coupon For Denim Jacket', '200', 'fe3r3fger4rf', 3, 0),
(6, 4, 'Testing Coupon', '100', '10212dfdfdf34343', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(12, 'Mirza Mahzaib', 'mahzaibmirza@gmail.com', 'mahzaibmirza', 'Pakistan', 'Faisalabad', '03087062282', 'Faisalabad', 'B612_20190308_110137_837.jpg', '::1'),
(15, 'Rana Timmar ', 'ranatimmar@gmail.com', 'ranatimmar', 'pakistan', 'lahore', '03000225522', 'lahore', 'IMG-20191025-WA0045.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(8, 12, 300, 431053856, 3, 'Small', '2020-04-09', 'Pending'),
(9, 12, 720, 431053856, 4, 'Large', '2020-04-09', 'Pending'),
(10, 12, 110, 431053856, 2, 'Small', '2020-04-09', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_top`, `manufacturer_image`) VALUES
(2, 'Manufacturer1', 'yes', 'LONG SLEEVE RIBBED T-SHIRT BLACK 1.jpg'),
(6, 'name2', 'no', 'FRINGE JACKET 3.jpg'),
(8, 'mirza', 'yes', 'LAPEL COLLAR COAT 1.jpg'),
(9, 'Name 1', 'yes', 'FRINGE JACKET 1.jpg'),
(10, 'Mahzaib Mirza', 'no', 'DOUBLE-FACED BIKER JACKET 3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(2, 2040568735, 900, 'Payoneer', 321, 321, '12/11/2019');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(8, 12, 431053856, '5', 3, 'Small', 'Pending'),
(9, 12, 431053856, '10', 4, 'Large', 'Pending'),
(10, 12, 431053856, '14', 2, 'Small', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_url` varchar(255) NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` text NOT NULL,
  `product_label` text NOT NULL,
  `product_sale` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`, `product_label`, `product_sale`) VALUES
(2, 13, 0, 10, '2020-04-09 06:43:37', 'Women Shirt', 'product-2', 'w_frok.jpg', 'w2.jpg', 'w3.jpg', 150, 'girl dressing', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus earum voluptatibus quaerat quia, sint architecto voluptatum molestias adipisci repellat consequatur deserunt maxime dolor aperiam ratione similique dolore laborum mollitia eius?</p>', 'sale', '150'),
(3, 0, 0, 2, '2020-04-09 06:43:48', 'Gray Rubber Shoes ', 'product-3', 'gray shoes 1.jpg', 'gray shoes 2.jpg', 'gray shoes 3.jpg', 250, 'shoes, gray, men, ', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores nesciunt, iusto itaque dolores atque at porro sint voluptas dolorem earum eaque tempora, doloribus sit, quasi non! Voluptatibus, magni dolor modi!</p>', 'sale', '240'),
(4, 3, 1, 8, '2020-04-09 06:43:53', 'Blue Stylish Shoes', 'product-4', 'blue_stylish_men_shoes1.jpg', 'blue_stylish_men_shoes2.jpg', 'blue_stylish_men_shoes3.jpg', 200, 'shoes, stylish, for men,', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quos neque hic a, sapiente obcaecati nostrum incidunt at, officiis dolorem. Ea accusamus recusandae, eum deleniti reprehenderit nostrum itaque, quasi labore.</p>', 'sale', '10'),
(5, 1, 1, 2, '2020-04-09 06:43:58', 'Black Jacket ', 'product-5', 'black_jacket_men_1.jpg', 'black_jacket_men_2.jpg', 'black_jacket_men_5.jpg', 100, 'jackets, men, stylish', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, dolor, doloremque. Quo sit ut sequi delectus dolorum itaque porro nihil. Minima reprehenderit, libero neque eius ipsam iure qui natus impedit.</p>', 'sale', '60'),
(6, 1, 1, 9, '2020-04-09 06:44:05', 'Lather Black Jacket', 'product-6', 'lather_jacket_men_9.jpg', 'lather_jacket_men_10.jpg', 'lather_jacket_men_9.jpg', 150, 'jackets, style, men style', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, dolor, doloremque. Quo sit ut sequi delectus dolorum itaque porro nihil. Minima reprehenderit, libero neque eius ipsam iure qui natus impedit.</p>', 'sale', '15'),
(7, 1, 2, 10, '2020-04-09 06:44:10', 'Blue Jeens Ladies Jacket', 'product-7', 'girl_jacket.jpg', 'girl_jacket1.jpg', 'girl_jacket.jpg', 150, 'lady jackets, stylish', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ipsa obcaecati dolore quos repellat, eaque sequi ullam voluptates minus. Quisquam earum necessitatibus ullam mollitia sapiente repellendus fuga ducimus beatae vero.</p>', 'new', ''),
(8, 1, 0, 2, '2020-04-09 06:44:17', 'LEATHER BLK JACEKT', 'product-8', 'FAUX LEATHER BIKER JACKET 1.jpg', 'FAUX LEATHER BIKER JACKET 2.jpg', 'FAUX LEATHER BIKER JACKET 3.jpg', 150, 't-shirt, cadual', '<p>BLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBLBLA BLALBL</p>', 'new', ''),
(9, 4, 2, 8, '2020-04-09 06:44:23', 'BELTED LADIES COAT  ', 'product-9', 'BELTED LADIES COAT  1.jpg', 'BELTED LADIES COAT  2.jpg', 'BELTED LADIES COAT  3.jpg', 70, 'costs', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus consequuntur iusto dolores sint odit earum, inventore ad esse, dolorem itaque pariatur ullam ab, voluptatum veritatis eveniet, magnam nulla culpa accusantium!</p>', 'new', ''),
(10, 3, 1, 9, '2020-04-09 06:44:31', 'BLACK BOSSED HIGH', 'product-10', 'BLACK ANIMAL EMBOSSED HIGH TOP 1.jpg', 'BLACK ANIMAL EMBOSSED HIGH TOP 2.jpg', 'BLACK ANIMAL EMBOSSED HIGH TOP 3.jpg', 180, 'SHOES, stylish, for man', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus consequuntur iusto dolores sint odit earum, inventore ad esse, dolorem itaque pariatur ullam ab, voluptatum veritatis eveniet, magnam nulla culpa accusantium!</p>', 'sale', '20'),
(11, 2, 1, 10, '2020-04-09 06:44:35', 'KEYCHAIN WALLET', 'product-11', 'TRI-COLOR CARD HOLDER AND KEYCHAIN SET 1.jpg', 'TRI-COLOR CARD HOLDER AND KEYCHAIN SET 2.jpg', 'TRI-COLOR CARD HOLDER AND KEYCHAIN SET 3.jpg', 60, 'WALLET', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ipsam tempora nam, vitae quam itaque, rerum placeat sit vel explicabo voluptatibus eveniet nesciunt beatae nostrum dolorum dignissimos animi iusto! Officia?</p>', 'sale', '25'),
(12, 4, 1, 6, '2020-04-09 06:44:39', 'FAUX FUR COAT MEN ', 'product-12', 'MAN FAUX FUR COAT 1.jpg', 'MAN FAUX FUR COAT 2.jpg', 'MAN FAUX FUR COAT 3.jpg', 250, 'COATS, MEN, ', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ipsam tempora nam, vitae quam itaque, rerum placeat sit vel explicabo voluptatibus eveniet nesciunt beatae nostrum dolorum dignissimos animi iusto! Officia?</p>', 'sale', '30'),
(13, 3, 1, 2, '2020-04-09 06:44:45', 'RED HIGH TOPS', 'product-13', 'RED HIGH TOPS 1.jpg', 'RED HIGH TOPS 2.jpg', 'RED HIGH TOPS 3.jpg', 300, 'SHOES, HIGH TOPS, SNAKER', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ipsam tempora nam, vitae quam itaque, rerum placeat sit vel explicabo voluptatibus eveniet nesciunt beatae nostrum dolorum dignissimos animi iusto! Officia?</p>\r\n<p>&nbsp;</p>', 'new', ''),
(14, 5, 1, 8, '2020-04-09 06:44:53', 'DRIPPING T-SHIRT', 'product-14', 'METALLIC DRIPPING EFFECT T-SHIRT 1.jpg', 'METALLIC DRIPPING EFFECT T-SHIRT 2.jpg', 'METALLIC DRIPPING EFFECT T-SHIRT 3.jpg', 55, 'T-SHIRT, CADUAL, SYLISH, DRIPPING', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ipsam tempora nam, vitae quam itaque, rerum placeat sit vel explicabo voluptatibus eveniet nesciunt beatae nostrum dolorum dignissimos animi iusto! Officia?</p>', 'sale', '45'),
(15, 3, 1, 2, '2020-04-09 06:45:04', 'LEATHER SHOES', 'product-15', 'LEATHER SHOES 1.jpg', 'LEATHER SHOES 2.jpg', 'LEATHER SHOES 3.jpg', 310, 'SHOES, LEATHER, STYLISH,', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ipsam tempora nam, vitae quam itaque, rerum placeat sit vel explicabo voluptatibus eveniet nesciunt beatae nostrum dolorum dignissimos animi iusto! Officia?</p>', 'new', '24'),
(16, 1, 0, 2, '2020-04-09 06:45:09', 'RAW DENIM JACKET', 'product-16', 'RAW DENIM JACKET1.jpg', 'RAW DENIM JACKET2.jpg', 'RAW DENIM JACKET3.jpg', 225, 'WALLET, BROWN, STYLISH', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ipsam tempora nam, vitae quam itaque, rerum placeat sit vel explicabo voluptatibus eveniet nesciunt beatae nostrum dolorum dignissimos animi iusto! Officia?</p>', 'sale', '22'),
(17, 2, 2, 6, '2020-04-09 06:45:16', 'CROSSBODY BAG', 'product-17', 'BEADED CROSSBODY BAG WITH CLASP 1.jpg', 'BEADED CROSSBODY BAG WITH CLASP 2.jpg', 'BEADED CROSSBODY BAG WITH CLASP 3.jpg', 180, 'BAGS, WOMEN, ACCESSORIES', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sapiente quibusdam quia, dolor, nemo earum sed vel quam quas ratione dolore. Animi quam distinctio vel beatae natus error. Beatae, ea.</p>', 'sale', '15');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_top`, `p_cat_image`) VALUES
(1, 'Jackets', 'no', 'man_1.jpg'),
(2, 'Accessories', 'yes', 'man_2.jpg'),
(3, 'Shoes', 'yes', 'man_3.jpg'),
(5, 'T-Shirt', 'no', 'man_5.jpg'),
(13, 'Suites', 'yes', 'DOUBLE-FACED BIKER JACKET 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_url`) VALUES
(12, 'slide 3', 'NEW website cover image - roller banner-1100x490.jpg', 'http://localhost/Ecommerce_Project/contact.php'),
(13, 'slide 4', 'lawageen_banner3-1100x490.jpg', 'http://localhost/Ecommerce_Project/customer_register.php'),
(14, 'slide 1 ', 'l3mh_featured_image-1100x490-c-default.jpg', 'http://localhost/Ecommerce_Project/contact.php'),
(15, 'slide 2 ', 'ssi_featured_image-1100x490-c-default.jpg', 'http://localhost/Ecommerce_Project/customer_register.php');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `terms_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`terms_id`, `term_title`, `term_link`, `term_desc`) VALUES
(2, 'Terms & Conditions', 'termsandconditions', '<p>Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello&nbsp;</p>'),
(3, 'Rules', 'rules', '<p>Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello&nbsp;</p>'),
(6, 'Other Terms & Condition', 'othertermscondition', '<p>Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello Lorem ipsum hello&nbsp;</p>'),
(7, 'Refund Policy', 'refundpolicy', '<p>lorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worllorem heloo worl</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`terms_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `terms_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
