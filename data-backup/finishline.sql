-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 12:34 PM
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
-- Database: `finishline`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` text NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `curl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ctitle`, `carticle`, `cimage`, `curl`, `updated_at`, `created_at`) VALUES
(1, 'Clothing', 'scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially ', 'clothing.jpg', 'clothing', '2018-10-01 00:00:00', '2018-10-01 00:00:00'),
(2, 'Shoes', 'scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially ', 'shoess.jpg', 'shoes', '2018-10-01 00:00:00', '2018-10-01 00:00:00'),
(3, 'Sports Equipment', 'scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially&nbsp;', 'sports_equipments.jpg', 'sports-equipment', '2018-11-09 12:26:15', '2018-10-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` longtext NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `ctitle`, `carticle`, `updated_at`, `created_at`) VALUES
(1, 1, 'Our sponsor 2', 'scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets co 2', '2018-11-07 13:49:45', '2018-10-10 00:00:00'),
(2, 1, 'Services', ' look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', '2018-10-10 00:00:00', '2018-10-10 00:00:00'),
(3, 3, 'Contact us', '2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of', '2018-11-07 13:51:33', '2018-10-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `mtitle` varchar(255) NOT NULL,
  `murl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `mtitle`, `murl`, `updated_at`, `created_at`) VALUES
(1, 'Our Sponsor', 'Our Sponsor', 'our-sponsor', '2018-10-01 00:00:00', '2018-10-01 00:00:00'),
(2, 'Services', 'Services', 'services', '2018-10-14 00:00:00', '0000-00-00 00:00:00'),
(3, 'Contact Us', 'Contact Us', 'contact-us', '2018-10-14 00:00:00', '2018-10-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `total`, `updated_at`, `created_at`) VALUES
(7, 10, 'a:2:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:12:\"Adidas Shoes\";s:5:\"price\";d:200;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:11:\"Asics Shoes\";s:5:\"price\";d:220;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '420.00', '2018-10-31 21:53:02', '2018-10-31 21:53:02'),
(8, 4, 'a:3:{i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:10:\"Basketball\";s:5:\"price\";d:100;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:13:\"Sport T-shirt\";s:5:\"price\";d:40;s:8:\"quantity\";i:3;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:11:\"Asics Shoes\";s:5:\"price\";d:220;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '660.00', '2018-11-01 09:40:37', '2018-11-01 09:40:37'),
(9, 3, 'a:3:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:12:\"Adidas Shoes\";s:5:\"price\";d:200;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:17:\"Adidas Swimsuit\r\n\";s:5:\"price\";d:30;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:13:\"Sport T-shirt\";s:5:\"price\";d:40;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '340.00', '2018-11-06 11:38:02', '2018-11-06 11:38:02'),
(10, 3, 'a:2:{i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:13:\"Tennis Racket\";s:5:\"price\";d:100;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:10:\"Basketball\";s:5:\"price\";d:100;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '300.00', '2018-11-07 21:06:08', '2018-11-07 21:06:08'),
(12, 3, 'a:2:{i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:13:\"Sport T-shirt\";s:5:\"price\";d:40;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:17:\"Adidas Swimsuit\r\n\";s:5:\"price\";d:30;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '100.00', '2018-11-09 15:07:20', '2018-11-09 15:07:20'),
(13, 10, 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:17:\"Adidas Swimsuit\r\n\";s:5:\"price\";d:30;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:13:\"Tennis Racket\";s:5:\"price\";d:100;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '260.00', '2018-11-09 15:27:07', '2018-11-09 15:27:07'),
(14, 4, 'a:2:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:12:\"Adidas Shoes\";s:5:\"price\";d:200;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:17:\"Adidas Swimsuit\r\n\";s:5:\"price\";d:30;s:8:\"quantity\";i:3;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '490.00', '2018-11-11 10:05:05', '2018-11-11 10:05:05'),
(15, 3, 'a:2:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:17:\"Adidas Swimsuit\r\n\";s:5:\"price\";d:30;s:8:\"quantity\";i:3;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:13:\"Sport T-shirt\";s:5:\"price\";d:40;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '170.00', '2018-11-27 15:06:25', '2018-11-27 15:06:25'),
(16, 4, 'a:3:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:12:\"Adidas Shoes\";s:5:\"price\";d:200;s:8:\"quantity\";i:2;s:10:\"attributes\";a:1:{s:5:\"image\";s:16:\"adidas-shoes.jpg\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:11:\"Asics Shoes\";s:5:\"price\";d:220;s:8:\"quantity\";i:2;s:10:\"attributes\";a:1:{s:5:\"image\";s:15:\"asics-shoes.jpg\";}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:6:\"shorts\";s:5:\"price\";d:40;s:8:\"quantity\";i:3;s:10:\"attributes\";a:1:{s:5:\"image\";s:10:\"shotrs.jpg\";}s:10:\"conditions\";a:0:{}}}', '960.00', '2018-12-05 14:28:26', '2018-12-05 14:28:26'),
(17, 10, 'a:3:{i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:6:\"shorts\";s:5:\"price\";d:40;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:10:\"shotrs.jpg\";}s:10:\"conditions\";a:0:{}}i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:10:\"Basketball\";s:5:\"price\";d:43;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:14:\"basketball.jpg\";}s:10:\"conditions\";a:0:{}}i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:13:\"Tennis Racket\";s:5:\"price\";d:112;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:37:\"2018.11.09.02.11.28-tennis-racket.jpg\";}s:10:\"conditions\";a:0:{}}}', '195.00', '2018-12-06 10:12:32', '2018-12-06 10:12:32'),
(18, 3, 'a:2:{i:5;a:6:{s:2:\"id\";s:1:\"5\";s:4:\"name\";s:10:\"Basketball\";s:5:\"price\";d:43;s:8:\"quantity\";i:3;s:10:\"attributes\";a:1:{s:5:\"image\";s:14:\"basketball.jpg\";}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:6:\"shorts\";s:5:\"price\";d:40;s:8:\"quantity\";i:2;s:10:\"attributes\";a:1:{s:5:\"image\";s:10:\"shotrs.jpg\";}s:10:\"conditions\";a:0:{}}}', '209.00', '2018-12-06 10:13:33', '2018-12-06 10:13:33'),
(19, 3, 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:15:\"Adidas Swimming\";s:5:\"price\";d:30;s:8:\"quantity\";i:2;s:10:\"attributes\";a:1:{s:5:\"image\";s:19:\"Adidas-swimming.jpg\";}s:10:\"conditions\";a:0:{}}}', '60.00', '2018-12-06 20:40:55', '2018-12-06 20:40:55'),
(20, 3, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:11:\"Asics Shoes\";s:5:\"price\";d:220;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:15:\"asics-shoes.jpg\";}s:10:\"conditions\";a:0:{}}}', '220.00', '2018-12-06 20:42:19', '2018-12-06 20:42:19'),
(21, 4, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:11:\"Asics Shoes\";s:5:\"price\";d:220;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:15:\"asics-shoes.jpg\";}s:10:\"conditions\";a:0:{}}}', '220.00', '2018-12-09 11:13:00', '2018-12-09 11:13:00'),
(22, 10, 'a:2:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:12:\"Adidas Shoes\";s:5:\"price\";d:200;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:16:\"adidas-shoes.jpg\";}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:11:\"Asics Shoes\";s:5:\"price\";d:220;s:8:\"quantity\";i:2;s:10:\"attributes\";a:1:{s:5:\"image\";s:15:\"asics-shoes.jpg\";}s:10:\"conditions\";a:0:{}}}', '640.00', '2018-12-09 20:01:20', '2018-12-09 20:01:20'),
(23, 10, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:11:\"Asics Shoes\";s:5:\"price\";d:220;s:8:\"quantity\";i:2;s:10:\"attributes\";a:1:{s:5:\"image\";s:15:\"asics-shoes.jpg\";}s:10:\"conditions\";a:0:{}}}', '440.00', '2018-12-13 20:41:21', '2018-12-13 20:41:21'),
(24, 3, 'a:1:{i:7;a:6:{s:2:\"id\";s:1:\"7\";s:4:\"name\";s:7:\"Ahinoam\";s:5:\"price\";d:20;s:8:\"quantity\";i:2;s:10:\"attributes\";a:1:{s:5:\"image\";s:35:\"2018.12.13.09.12.33-sport-pants.jpg\";}s:10:\"conditions\";a:0:{}}}', '40.00', '2018-12-13 21:41:58', '2018-12-13 21:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` text NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `purl` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `original_price` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `ptitle`, `particle`, `pimage`, `purl`, `price`, `original_price`, `updated_at`, `created_at`) VALUES
(1, 1, 'Swimsuit', 'ry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap', 'swimsuit.jpg', 'swimsuit', '30.00', '35.00', '2018-10-02 00:00:00', '2018-10-02 00:00:00'),
(2, 1, 'Shorts', ' Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use ', 'shorts.jpg', 'shorts', '40.00', '47.00', '2018-10-02 00:00:00', '2018-10-02 00:00:00'),
(3, 2, 'Grey Shoes', 'Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making', 'grey-shoes.jpg', 'grey-shoes', '200.00', '220.00', '2018-12-10 10:12:54', '2018-10-02 00:00:00'),
(4, 2, 'Blue Shoes', 'Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop', 'blue-shoes.jpg', 'blue-shoes', '220.00', '240.00', '2018-12-10 10:13:02', '2018-10-02 00:00:00'),
(5, 3, 'Basketball', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English', 'basketball.jpg', 'basketball', '43.00', '50.00', '2018-11-28 10:04:39', '2018-10-02 00:00:00'),
(6, 3, 'Tennis Racket', 'Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English&nbsp;', '2018.11.09.02.11.28-tennis-racket.jpg', 'tennis-racket', '112.00', '120.00', '2018-11-28 10:05:20', '2018-10-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `rname`, `updated_at`, `created_at`) VALUES
(1, 'Administrator', '2018-10-26 00:00:00', '2018-10-26 00:00:00'),
(2, 'Auth User', '2018-10-26 00:00:00', '2018-10-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, '--', '--', '--', '2018-10-07 00:00:00', '2018-10-07 00:00:00'),
(2, '---', '---', '---', '2018-10-07 00:00:00', '2018-10-07 00:00:00'),
(3, 'Yuval', 'admin@gmail.com', '$2y$10$hEZWAB9dX69jKdRogu0epu7HWY622Wyz.W0d1Pa65zj/fY5TEa2J2', '2018-10-07 00:00:00', '2018-10-07 00:00:00'),
(4, 'Yuval', 'yuval@gmail.com', '$2y$10$hEZWAB9dX69jKdRogu0epu7HWY622Wyz.W0d1Pa65zj/fY5TEa2J2', '2018-10-07 00:00:00', '2018-10-07 00:00:00'),
(5, 'Lior', 'lior@gmail.com', '$2y$10$hEZWAB9dX69jKdRogu0epu7HWY622Wyz.W0d1Pa65zj/fY5TEa2J2', '2018-10-07 00:00:00', '2018-10-07 00:00:00'),
(6, 'Mihoo', 'mihoo@gmail.com', '$2y$10$moLmzZ6vH56sadLHhjkc7uX5zlhlj067ee6nvtfnXnDukopLThA8i', '2018-10-08 10:56:39', '2018-10-08 10:56:39'),
(7, 'gili', 'gili@gmail.com', '$2y$10$xAQ4odHeZGqEQcqRHNxeF.9hju/y/Qgq9/NA.cScm0dm97PWpeVVG', '2018-10-10 07:50:30', '2018-10-10 07:50:30'),
(8, 'elda', 'elda@gmail.com', '$2y$10$Zbc6SM/2.x7j30qgbrwt2uDMctb.PWVAgWDJn5LYHPVcPM8tu/6Gi', '2018-10-10 07:51:16', '2018-10-10 07:51:16'),
(9, 'popeye', 'popeye@gmail.com', '$2y$10$fZmXK07Mxf8xr5rx2kmUWuG2BEsAr.C3vxgHVomIQWq9VrwjARNUi', '2018-10-28 08:55:57', '2018-10-28 08:55:57'),
(10, 'ahinoam', 'ahinoam@gmail.com', '$2y$10$M6WoMmY0fdOiyrKJA6JkL.QJb3ctjMPDxP1pP.xNyw6Tk9z3pWQ2e', '2018-10-28 09:17:54', '2018-10-28 09:17:54'),
(11, 'micha', 'micha@gmail.com', '$2y$10$5g7NpNgNiM0xIQCVBZLtg.Rezy82JZmmCihboxhJ6fe7Xujf28gTO', '2018-12-10 08:03:22', '2018-12-10 08:03:22'),
(12, 'david', 'david@gmail.com', '$2y$10$Kta.cNw/oOF560S0ahGGC.bLfaNjtWi8zHFtcL8bczo9b7OgeAqTG', '2018-12-13 21:14:06', '2018-12-13 21:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_roles`
--

INSERT INTO `users_roles` (`user_id`, `role_id`) VALUES
(3, 1),
(4, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`curl`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`murl`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`purl`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
