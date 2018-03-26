-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 11:06 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saarkoth`
--

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `music_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `track_no` int(11) NOT NULL,
  `album` varchar(45) NOT NULL,
  `cover` varchar(256) NOT NULL,
  `artist` varchar(45) NOT NULL,
  `year` int(11) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `track_time` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`music_id`, `title`, `track_no`, `album`, `cover`, `artist`, `year`, `genre`, `track_time`) VALUES
(1, 'Awake In Eternal Sleep', 1, '2017 Demo', '2017_Demo.png', 'Saarkoth', 2017, 'Black Metal', '6:13'),
(2, 'Beyond The Horizon', 2, '2017 Demo', '2017_Demon.png', 'Saarkoth', 2017, 'Black Metal', '5:58');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `post_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  `content` longtext NOT NULL,
  `users_user_id` int(11) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`post_id`, `title`, `image`, `content`, `users_user_id`, `post_date`) VALUES
(4, 'Demo Release', 'assets/news/5ab947542c7485.40200688.jpg', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. ', 1, '2018-03-26'),
(5, 'Blackened Promotions Album!', 'assets/news/5ab94776051e37.36946942.jpg', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. ', 1, '2018-03-26'),
(7, 'Horizon Zero Dawn!', 'assets/news/5ab947f1371b52.86574065.jpg', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. ', 1, '2018-03-26'),
(8, 'Jera', 'assets/news/5ab947fbb0a534.72487645.jpg', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. \r\n\r\nLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. ', 1, '2018-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_address` varchar(45) NOT NULL,
  `order_postcode` varchar(10) NOT NULL,
  `order_city` varchar(45) NOT NULL,
  `users_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `order_address`, `order_postcode`, `order_city`, `users_user_id`) VALUES
(1, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(2, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(3, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(4, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(5, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(6, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(7, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(8, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(9, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(10, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(11, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(12, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(13, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(14, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(15, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(16, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(17, '2018-03-26', '1 Address Line', 'P057 C0D3', 'Citytown', 2),
(18, '2018-03-26', '1 Address Line', 'P057 C0D3', 'Citytown', 2),
(19, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(20, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(21, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(22, '2018-03-26', '49 Address Street', 'P057 C0D3', 'Citytown', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`order_id`, `product_id`, `quantity`) VALUES
(1, 1, 2),
(1, 2, 3),
(16, 1, 2),
(16, 2, 4),
(17, 1, 5),
(17, 2, 3),
(17, 3, 4),
(17, 4, 4),
(17, 5, 3),
(17, 6, 5),
(17, 7, 10),
(18, 1, 10),
(18, 2, 3),
(18, 3, 9),
(18, 4, 4),
(18, 5, 3),
(18, 6, 5),
(18, 7, 10),
(19, 7, 10),
(20, 2, 7),
(20, 3, 8),
(20, 4, 5),
(20, 5, 10),
(20, 7, 20),
(21, 1, 7),
(21, 2, 7),
(21, 3, 14),
(21, 4, 25),
(21, 5, 10),
(21, 7, 20),
(22, 1, 6),
(22, 3, 6),
(22, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_price` float NOT NULL,
  `product_type` varchar(45) NOT NULL,
  `product_colour` varchar(45) DEFAULT NULL,
  `product_size` varchar(45) DEFAULT NULL,
  `product_material` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_type`, `product_colour`, `product_size`, `product_material`) VALUES
(1, 'Black T-Shirt', 9.99, 'T-Shirt', 'Black', NULL, NULL),
(2, 'Red T-Shirt', 9.99, 'T-Shirt', 'Red', NULL, NULL),
(3, 'Blue T-Shirt', 9.99, 'T-Shirt', 'Blue', NULL, NULL),
(4, 'Saarkoth Mug', 4.99, 'Mug', 'Black', NULL, NULL),
(5, 'Ellis Poster', 14.99, 'Poster', NULL, 'A3', NULL),
(6, 'Asa Poster', 14.99, 'Poster', NULL, 'A3', NULL),
(7, 'Lewis Poster', 14.99, 'Poster', NULL, 'A3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(45) NOT NULL,
  `user_last` varchar(45) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_uid` varchar(30) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `user_address` varchar(45) DEFAULT NULL,
  `user_postcode` varchar(10) DEFAULT NULL,
  `user_city` varchar(45) DEFAULT NULL,
  `user_admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `user_address`, `user_postcode`, `user_city`, `user_admin`) VALUES
(1, 'Marcin', 'Wolf', 'mw@gmail.com', 'mwolf', '$2y$10$P0PlWdAWzunkT0cCRZ.UCe8bs/h5foACdniknRYwfpwxLkd4Nc6ye', '49 Address Street', 'P057 C0D3', 'Citytown', 1),
(2, 'Lewis', 'Baker', 'lb@gmail.com', 'lbaker', '$2y$10$AwZsPnf352WTa/SUhuJVCe5wvHSeDYeVcE7w1gCxffqEsxYC.6UM.', '1 Address Line', 'P057 C0D3', 'Citytown', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`music_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `fk_news_users1_idx` (`users_user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_orders_users1_idx` (`users_user_id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `fk_orders_has_products_products1_idx` (`product_id`),
  ADD KEY `fk_orders_has_products_orders1_idx` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_uid_UNIQUE` (`user_uid`),
  ADD UNIQUE KEY `users_email_UNIQUE` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `music_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_users1` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_users1` FOREIGN KEY (`users_user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD CONSTRAINT `fk_orders_has_products_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orders_has_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
