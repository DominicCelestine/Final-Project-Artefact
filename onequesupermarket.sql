-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 12:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onequesupermarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `cart_item_added` datetime NOT NULL DEFAULT current_timestamp(),
  `cart-item_quantity` int(11) NOT NULL,
  `cart_item_status` varchar(20) NOT NULL DEFAULT 'cart'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`, `cart_item_added`, `cart-item_quantity`, `cart_item_status`) VALUES
(1, 1, 5, '2021-03-30 10:56:59', 1, 'purchased'),
(2, 1, 6, '2021-03-30 10:57:12', 1, 'purchased'),
(3, 1, 4, '2021-04-30 14:48:50', 1, 'purchased'),
(5, 1, 3, '2021-04-30 14:55:02', 1, 'purchased'),
(8, 7, 3, '2021-05-02 20:22:18', 1, 'purchased'),
(9, 7, 3, '2021-05-02 20:24:43', 1, 'purchased'),
(13, 7, 3, '2021-05-03 19:56:50', 1, 'cart'),
(14, 1, 3, '2021-05-05 19:35:39', 1, 'purchased'),
(16, 1, 4, '2021-05-06 10:01:32', 1, 'cart'),
(19, 9, 5, '2021-05-07 12:28:45', 1, 'purchased'),
(20, 9, 6, '2021-05-07 12:28:51', 1, 'purchased'),
(21, 9, 5, '2021-05-07 12:38:52', 1, 'cart'),
(25, 9, 4, '2021-05-09 10:51:12', 1, 'cart'),
(26, 9, 3, '2021-05-09 10:52:06', 1, 'cart'),
(27, 1, 4, '2021-05-09 12:12:59', 1, 'cart');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_title` varchar(100) NOT NULL,
  `item_description` text NOT NULL,
  `item_price` double(9,2) NOT NULL,
  `item_image` varchar(100) NOT NULL,
  `item_quantity` int(11) NOT NULL DEFAULT 200
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_title`, `item_description`, `item_price`, `item_image`, `item_quantity`) VALUES
(3, 'Samsung Fridge', 'Samsung French Doors Fridge.', 12000.00, 'images\\products\\samsung fridge_.jpg', 200),
(4, 'Linda\'s Wholewheat Bread', 'Linda\'s Wholewheat Bread', 15.00, 'images\\products\\linda wholewheat bread.jpg', 200),
(5, 'Fresh Apples', 'Fresh Apples', 3.00, 'images\\products\\apples.jpeg', 200),
(6, 'SVELTY Slim Skimmed Milk 1 litre', 'SVELTY Slim Skimmed Milk 1 litre', 12.50, 'images\\products\\svelty milk.png', 200),
(7, 'Samsung HW-Q950T 9.1.4ch Soundbar w/ Dolby Atmos / DTS:X and Alexa Built-in', 'Samsung HW-Q950T 9.1.4ch Soundbar w/ Dolby Atmos / DTS:X and Alexa Built-in', 9000.00, 'images/products/Samsung HW Q950T 9.1.4ch Soundbar with Dolby Atmos with DTSX and Alexa Built in.jpg', 200),
(8, 'Olay Regenerist Micro-Sculpting Cream 1.7 oz', 'Olay Regenerist Micro-Sculpting Cream 1.7 oz', 200.00, 'images\\products\\Regenerist Micro-Sculpting Cream.jpg', 200),
(9, '3 bar Irish spring soap', '3 bar Irish spring soap', 20.00, 'images\\products\\3 bar irish spring soap .jpg', 200),
(10, 'GNC Mega Men One Daily Multi_Bottle.jpg', 'GNC Mega Men One Daily Multi_Bottle', 70.00, 'images\\products\\GNC Mega Men One Daily Multi_Bottle.jpg', 200),
(11, 'Advil Sinus Congestion & Pain', 'Advil Sinus Congestion & Pain', 18.00, 'images\\products\\Advil Sinus Congestion & Pain.png', 200),
(12, 'Dayquil cold and flu', 'Dayquil cold and flu.', 82.00, 'images\\products\\Dayquil cold and flu.jpg', 200),
(13, 'knorr chicken pasta', 'knorr chicken pasta', 28.00, 'images\\products\\knorr chicken pasta.jpg', 200),
(14, 'Samsung 50\" T.V', 'Samsung 50\" T.V', 2500.00, 'images\\products\\tv.jpg', 200);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(200) NOT NULL,
  `purchases_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `purchase_item_price` double(9,2) NOT NULL,
  `purchase_item_quantity` int(11) NOT NULL,
  `purchase_date` datetime NOT NULL DEFAULT current_timestamp(),
  `receipt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `item_id`, `purchase_item_price`, `purchase_item_quantity`, `purchase_date`, `receipt_id`) VALUES
(1, 5, 3.00, 0, '2021-03-30 10:57:30', 1),
(2, 6, 12.50, 0, '2021-03-30 10:57:30', 1),
(3, 4, 15.00, 0, '2021-04-30 14:49:23', 2),
(4, 3, 12000.00, 0, '2021-04-30 14:56:32', 3),
(5, 3, 12000.00, 0, '2021-05-02 20:26:30', 4),
(6, 3, 12000.00, 0, '2021-05-02 20:26:30', 4),
(7, 3, 12000.00, 0, '2021-05-06 08:58:07', 5),
(8, 5, 3.00, 0, '2021-05-07 12:29:24', 6),
(9, 6, 12.50, 0, '2021-05-07 12:29:24', 6);

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `receipt_id` int(11) NOT NULL,
  `receipt_code` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `receipt_subtotal` double(9,2) NOT NULL,
  `receipt_total` double(9,2) NOT NULL,
  `receipt_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`receipt_id`, `receipt_code`, `user_id`, `receipt_subtotal`, `receipt_total`, `receipt_date`) VALUES
(1, 'abcde', 1, 15.50, 15.50, '2021-03-30 10:57:30'),
(2, 'abcde', 1, 15.00, 15.00, '2021-04-30 14:49:23'),
(3, 'abcde', 1, 12000.00, 12000.00, '2021-04-30 14:56:32'),
(4, 'abcde', 7, 24000.00, 24000.00, '2021-05-02 20:26:30'),
(5, 'abcde', 1, 12000.00, 12000.00, '2021-05-06 08:58:07'),
(6, 'abcde', 9, 15.50, 15.50, '2021-05-07 12:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `subject`, `message`, `item_id`, `user_id`) VALUES
(1, 'Samsung fridge', 'best working appliance ', 3, 0),
(2, 'fridge', 'Best item', 3, 1),
(3, 'samsung', 'Best brand', 3, 1),
(4, 'Good Bread', 'Tasty aint it', 4, 1),
(5, 'Linda Bread', 'Really gooed choice', 4, 1),
(6, 'Healthy Linda Bread', 'Nutritional and Good Quality Bread', 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `reg_date`, `user_type`) VALUES
(1, ' admin', 'admin', 'admin@gmail.com', '$2y$10$kEHTnLKZosxwcfH5p5rTZ.uZnlwrTxvL4UkM70623Y5dsRDuOCbXy', '2020-10-25 07:13:07', 'user'),
(3, ' Ravi', 'Ragoonath', 'ravi@hotmail.com', '$2y$10$FVMw6BKTibcSDTO82JjEXOTln0nkofvZJ3wuRl3Zgpz6gO2BXKBBS', '2021-02-08 11:21:20', 'user'),
(4, ' Frank', 'Geroge', 'frank@gmail.com', '$2y$10$/IuHHyvGcrnArcMwAnHvueSEzKSwCGyHpkV45SD8Cw6an0zN5vCm6', '2021-02-08 18:31:18', 'user'),
(5, ' Frank', 'William', 'frankwilliam@gmail.com', '$2y$10$qXYMdJv.78EdHEhx.11jSu4jdYTwqUscJekLoR4rq/qIUh8Ov5oBS', '2021-02-08 18:33:15', 'user'),
(6, ' Maria', 'Robinson', 'maria1@gmail.com', '$2y$10$wP.p/VsmySUxZGEOMrx/EO3Qmj10F98u3rNUoKv9INupFGwbFaUfa', '2021-03-29 19:27:48', 'user'),
(7, ' Resh', 'Mahabir', 'resh14mahabir@gmail.com', '$2y$10$7WtxAZdlAx9QpwywhY8V0.HtTl4J5tmm3gGkb0JEGaCfh/0hZnSQG', '2021-05-02 20:16:07', 'user'),
(9, ' Dominic ', 'Celestine', 'dominiccelestine23@gmail.com', '$2y$10$QuH1IjtNr6am9kl7dOMPzedAHWtZHxxcX65p14ExPYjQUDZ6K3zoO', '2021-05-07 12:04:43', 'user'),
(11, ' fsfas', 'fdg', 'gsdgsz3@gmail.com', '$2y$10$B0fe5rorHPSH3dVbzxMVFOn/G9MZcRjLYxRomva1pfKB/gRIvKf.e', '2021-05-08 08:21:07', 'user'),
(12, ' Dominic', 'Celestine', 'dominiccelestine23@gmail.com', '$2y$10$JD91.RFR/KPVtiNu5U3ZeeesUdIttVr1pBKv7/bo0SIG8RUJdAkmO', '2021-05-09 10:42:07', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
