-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2018 at 02:52 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `value`, `type`, `created_at`, `updated_at`) VALUES
(1, 'màu đỏ', 'red', 'color', '2018-08-28 04:29:57', '2018-08-28 04:29:57'),
(2, 'màu xanh lá cây', 'green', 'color', '2018-08-28 04:33:54', '2018-08-28 08:06:19'),
(7, 'màu xanh lá mạ', '#50cf96', 'color', '2018-08-28 08:52:03', '2018-08-28 08:52:03'),
(8, 'màu đỏ son', '#d0011b', 'color', '2018-08-28 08:52:55', '2018-08-28 08:52:59'),
(9, 'màu vàng', 'yellow', 'color', '2018-08-28 08:53:46', '2018-08-28 08:53:46'),
(10, 'màu nâu', '#8b572a', 'color', '2018-08-28 08:53:55', '2018-08-28 08:53:55'),
(11, 'màu tím', '#bd0fe1', 'color', '2018-08-28 08:54:18', '2018-08-28 08:54:18'),
(12, 'màu xanh da trời', '#4990e2', 'color', '2018-08-28 08:54:59', '2018-08-28 08:54:59'),
(13, 'màu cam', '#e29849', 'color', '2018-08-28 08:55:28', '2018-08-28 08:55:28'),
(14, 'size 35', '35', 'size', '2018-08-28 08:58:45', '2018-08-28 08:58:45'),
(15, 'size 36', '36', 'size', '2018-08-28 08:59:11', '2018-08-28 08:59:11'),
(16, 'size 37', '37', 'size', '2018-08-28 08:59:19', '2018-08-28 08:59:19'),
(17, 'size 38', '38', 'size', '2018-08-28 08:59:27', '2018-08-28 08:59:27'),
(18, 'size 39', '39', 'size', '2018-08-28 08:59:37', '2018-08-28 08:59:37'),
(19, 'size 40', '40', 'size', '2018-08-28 08:59:45', '2018-08-28 08:59:45'),
(20, 'size 41', '41', 'size', '2018-08-28 08:59:54', '2018-08-28 08:59:54'),
(21, 'size 42', '42', 'size', '2018-08-28 09:00:03', '2018-08-28 09:00:03'),
(22, 'size 43', '43', 'size', '2018-08-28 09:00:13', '2018-08-28 09:00:13'),
(23, 'Giày da bò', '@1', 'material', '2018-09-01 13:57:38', '2018-09-01 14:31:26'),
(24, 'Giày vải', '@2', 'material', '2018-09-01 13:57:56', '2018-09-01 14:31:42'),
(27, 'giày da giả', '@3', 'material', '2018-09-01 15:53:00', '2018-09-01 15:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT '#',
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `image`, `author`, `description`, `content`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Nike Sports 2019', '2018-08-28-11-33-481.jpg', 'Mr Ben', '<p>Nike Air Max 270 Flyknit có các phối màu đặc sắc cực kì phù hợp với không khí mùa hè. Dấu Swoosh được đẩy lên gần mũi chân và dòng chữ Air cách điệu chạy bên thân giày càng tăng tính thời trang cho sản phẩm. Mang theo ngôn ngữ thiết kế mới, sản phẩm hứa hẹn sẽ gây bão trong thời gian sắp tới.</p>\r\n<p>Nike Air Max 270 Flyknit có các phối màu đặc sắc cực kì phù hợp với không khí mùa hè. Dấu Swoosh được đẩy lên gần mũi chân và dòng chữ Air cách điệu chạy bên thân giày càng tăng tính thời trang cho sản phẩm. Mang theo ngôn ngữ thiết kế mới, sản phẩm hứa hẹn sẽ gây bão trong thời gian sắp tới.</p>', '<p>Nike Air Max 270 Flyknit có các phối màu đặc sắc cực kì phù hợp với không khí mùa hè. Dấu Swoosh được đẩy lên gần mũi chân và dòng chữ Air cách điệu chạy bên thân giày càng tăng tính thời trang cho sản phẩm. Mang theo ngôn ngữ thiết kế mới, sản phẩm hứa hẹn sẽ gây bão trong thời gian sắp tới.</p>', 1, '2018-08-28 11:48:33', '2018-08-28 12:01:43'),
(3, 'Những điều bạn có thể chưa biết..', '2018-08-28-11-00-534.jpg', 'Mrs Maria', '<p>Việc mua giày thể thao có lẽ hơi khác biệt một chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tViệc mua giày thể thao có lẽ hơi khác biệt một chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tâm đến việc bộmột chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tâm đến việc bộ ...</p>\r\n<p>Việc mua giày thể thao có lẽ hơi khác biệt một chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tViệc mua giày thể thao có lẽ hơi khác biệt một chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tâm đến việc bộmột chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tâm đến việc bộ ...</p>', '<p>Việc mua giày thể thao có lẽ hơi khác biệt một chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tViệc mua giày thể thao có lẽ hơi khác biệt một chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tâm đến việc bộmột chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tâm đến việc bộ ...</p>', 1, '2018-08-28 11:53:00', '2018-08-28 12:01:54'),
(5, 'giày hot 2019', '2018-08-30-11-35-225.jpg', 'Mr A', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, quis. Consequatur iure adipisci velit tenetur voluptatem, necessitatibus, minus, eligendi labore animi nesciunt voluptate eius totam asperiores temporibus veniam dolor sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, quis. Consequatur iure adipisci velit tenetur voluptatem, necessitatibus, minus, eligendi labore animi nesciunt voluptate eius totam asperiores temporibus veniam dolor sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, quis. Consequatur iure adipisci velit tenetur voluptatem, necessitatibus, minus, eligendi labore animi nesciunt voluptate eius totam asperiores temporibus veniam dolor sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, quis. Consequatur iure adipisci velit tenetur voluptatem, necessitatibus, minus, eligendi labore animi nesciunt voluptate eius totam asperiores temporibus veniam dolor sed!</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, quis. Consequatur iure adipisci velit tenetur voluptatem, necessitatibus, minus, eligendi labore animi nesciunt voluptate eius totam asperiores temporibus veniam dolor sed!</p>', 1, '2018-08-30 11:22:35', '2018-08-30 11:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `slug`, `parent`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Giày  Nam', 'giay-nam', 0, 1, '2018-08-26 15:53:32', '2018-08-26 15:53:32'),
(13, 'Giày Nữ', 'giay-nu', 0, 1, '2018-08-26 15:53:42', '2018-08-26 15:53:42'),
(14, 'Giày Trẻ Em', 'giay-tre-em', 0, 1, '2018-08-26 15:53:50', '2018-08-26 15:53:50'),
(15, 'Giày Nam Công Sở', 'giay-nam-cong-so', 12, 1, '2018-08-26 15:54:31', '2018-08-26 15:54:31'),
(16, 'Giày Da Nam', 'giay-da-nam', 12, 1, '2018-08-26 15:54:40', '2018-08-26 16:07:35'),
(17, 'Giày Thể Thao Nam', 'giay-the-thao-nam', 12, 1, '2018-08-26 15:55:01', '2018-08-26 15:55:01'),
(18, 'Giày Lười', 'giay-luoi', 16, 1, '2018-08-26 15:56:00', '2018-08-26 15:56:00'),
(19, 'Giày Chelsea Boots', 'giay-chelsea-boots', 16, 1, '2018-08-26 15:56:12', '2018-08-26 15:56:12'),
(20, 'Lace up', 'lace-up', 16, 1, '2018-08-26 15:56:25', '2018-08-26 15:56:25'),
(21, 'Formal', 'formal', 16, 1, '2018-08-26 15:56:44', '2018-08-26 15:56:44'),
(22, 'Nike', 'nike', 17, 1, '2018-08-26 15:57:00', '2018-08-26 15:57:00'),
(23, 'Puma', 'puma', 17, 1, '2018-08-26 15:57:13', '2018-08-26 15:57:13'),
(24, 'Converse', 'converse', 17, 1, '2018-08-26 15:57:27', '2018-08-26 15:57:27'),
(25, 'Giày Tây Da Nam', 'giay-tay-da-nam', 15, 1, '2018-08-26 15:57:56', '2018-08-26 15:57:56'),
(26, 'Giày Da Bò', 'giay-da-bo', 15, 1, '2018-08-26 15:58:22', '2018-08-26 15:58:22'),
(27, 'Giày Tăng Chiều Cao', 'giay-tang-chieu-cao', 15, 1, '2018-08-26 15:58:42', '2018-08-26 15:58:42'),
(28, 'Giày Sandal', 'giay-sandal', 13, 1, '2018-08-26 15:58:57', '2018-08-26 15:58:57'),
(29, 'Giày Búp Bê', 'giay-bup-be', 13, 1, '2018-08-26 15:59:14', '2018-08-26 15:59:14'),
(30, 'Giày Cao Gót', 'giay-cao-got', 13, 1, '2018-08-26 15:59:26', '2018-08-26 15:59:26'),
(31, 'Giày Thể Thao Nữ', 'giay-the-thao-nu', 13, 1, '2018-08-26 16:00:05', '2018-08-26 16:00:05'),
(32, 'Giày Adidas', 'giay-adidas', 31, 1, '2018-08-26 16:00:25', '2018-08-26 16:00:25'),
(33, 'Giày Boots', 'giay-boots', 31, 1, '2018-08-26 16:00:43', '2018-08-26 16:00:43'),
(34, 'Giày Gucci', 'giay-gucci', 31, 1, '2018-08-26 16:01:05', '2018-08-26 16:01:05'),
(35, 'Giày Sneaker', 'giay-sneaker', 31, 1, '2018-08-26 16:01:22', '2018-08-26 16:01:22'),
(36, 'Giày Biti\'s', 'giay-bitis', 14, 1, '2018-08-26 16:01:34', '2018-08-26 16:01:34'),
(37, 'Giày Native', 'giay-native', 14, 1, '2018-08-26 16:01:44', '2018-08-26 16:02:21'),
(38, 'SmartFeet', 'smartfeet', 14, 1, '2018-08-26 16:03:00', '2018-08-26 16:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ship` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment`, `ship`, `note`, `address`, `status`, `created_at`, `updated_at`) VALUES
(12, 2, 'on', '0', NULL, NULL, 1, '2018-09-03 15:12:50', '2018-09-03 15:12:50'),
(13, 13, 'on', '0', 'Giao trong ngayf', 'số 1 đường 2', 1, '2018-09-11 08:18:33', '2018-09-11 08:18:33'),
(15, 14, 'on', 'shipper', 'giao rồi thanh toán', 'số 2 đường láng qưeqwe', 1, '2018-09-11 11:00:17', '2018-09-11 11:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(12, 66, 1, 150000, '2018-09-03 22:12:50', '2018-09-03 22:12:50'),
(12, 75, 1, 700000, '2018-09-03 22:12:50', '2018-09-03 22:12:50'),
(12, 72, 1, 1500000, '2018-09-03 22:12:50', '2018-09-03 22:12:50'),
(13, 65, 2, 300000, '2018-09-11 15:18:33', '2018-09-11 15:18:33'),
(15, 68, 1, 500000, '2018-09-11 18:00:17', '2018-09-11 18:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `price` float DEFAULT NULL,
  `sale_price` float DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `image`, `slug`, `description`, `price`, `sale_price`, `type`, `status`, `created_at`, `updated_at`) VALUES
(64, 'Nike Sports 2019', 22, '4.jpg', 'nike-sports-2019', '<p>Giày mới</p>', 200000, 0, 'new', 1, '2018-09-01 15:13:37', '2018-09-01 15:21:18'),
(65, 'Puma l1', 23, '5.jpg', 'puma-l1', '<p>Giày Puma chất lượng!</p>', 300000, 0, 'new', 1, '2018-09-01 15:25:40', '2018-09-01 15:25:40'),
(66, 'nike 1', 22, '3.jpg', 'nike-1', '<p>Giày nike</p>', 150000, 0, 'new', 1, '2018-09-01 15:26:51', '2018-09-01 15:26:51'),
(67, 'Nike 2', 22, '8.jpg', 'nike-2', '<p>Giày nike nam</p>', 400000, 0, 'new', 1, '2018-09-01 15:41:03', '2018-09-01 15:41:03'),
(68, 'Nike 3', 22, '7.jpg', 'nike-3', '<p>Giày nam</p>', 500000, 0, 'new', 1, '2018-09-01 15:42:43', '2018-09-01 15:42:43'),
(69, 'Giày da x1', 26, 'images (4).jpg', 'giay-da-x1', '<p>Hàng chất lượng cao.</p>', 1000000, 0, 'new', 1, '2018-09-01 15:48:36', '2018-09-01 15:48:36'),
(70, 'Giày Âu k2', 20, 'tải xuống.jpg', 'giay-au-k2', '<p>hàng chất lượng cao!</p>', 2000000, 0, 'new', 1, '2018-09-01 15:49:56', '2018-09-01 15:49:56'),
(71, 'Giày âu mới', 25, 'tải xuống (3).jpg', 'giay-au-moi', '<p>1</p>', 1500000, 0, 'new', 1, '2018-09-01 15:50:57', '2018-09-01 15:50:57'),
(72, 'Giày âu mới 4', 25, '1496771743.jpg', 'giay-au-moi-4', '<p>1</p>', 1500000, 0, 'new', 1, '2018-09-01 15:51:06', '2018-09-01 15:55:22'),
(73, 'Sandal nữ z', 28, '6871819a58fa8fed4f3a6c8ba2773574.jpg', 'sandal-nu-z', '<p>1</p>', 450000, 0, 'new', 1, '2018-09-01 15:52:46', '2018-09-01 15:52:46'),
(74, 'Giày cao gót kk2', 30, 'DSC08398.JPG', 'giay-cao-got-kk2', '<p>Hàng mới</p>', 700000, 0, 'new', 1, '2018-09-01 15:53:49', '2018-09-01 15:53:49'),
(75, 'Giày cao gót kk3', 30, 'giay-nu-scorpion-56-6-7-jpg.jpg', 'giay-cao-got-kk3', '<p>Hàng mới</p>', 700000, 0, 'new', 1, '2018-09-01 15:53:59', '2018-09-01 15:55:50'),
(76, 'Boots nữ', 33, 'images.jpg', 'boots-nu', '<p>1</p>', 150000, 0, 'new', 1, '2018-09-01 15:59:22', '2018-09-01 15:59:22'),
(77, 'Adidas nữ', 32, 'q2.jpg', 'adidas-nu', '<p>1</p>', 150000, 120000, 'new', 1, '2018-09-01 16:22:08', '2018-09-01 16:22:08'),
(78, 'Giày âu he', 25, 'giay-tay-nam-laka-nau-van.jpg', 'giay-au-he', '<p>1</p>', 2000000, 1800000, 'new', 1, '2018-09-01 16:23:24', '2018-09-01 16:23:24'),
(79, 'Sneaker q1 2018', 35, 'rtewr.jpg', 'sneaker-q1-2018', '<p>1</p>', 250000, 230000, 'new', 1, '2018-09-01 16:24:38', '2018-09-01 16:24:38'),
(80, 'Sandal f2', 28, 'images (2).jpg', 'sandal-f2', '<p>123</p>', 150000, 100000, 'new', 1, '2018-09-01 16:25:49', '2018-09-01 16:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

CREATE TABLE `product_attribute` (
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`product_id`, `attribute_id`) VALUES
(64, 12),
(64, 14),
(64, 15),
(64, 16),
(64, 17),
(64, 18),
(64, 19),
(64, 20),
(64, 21),
(64, 22),
(64, 24),
(65, 10),
(65, 14),
(65, 15),
(65, 16),
(65, 17),
(65, 18),
(65, 19),
(65, 20),
(65, 21),
(65, 22),
(65, 24),
(66, 12),
(66, 14),
(66, 15),
(66, 17),
(66, 19),
(66, 20),
(66, 21),
(66, 24),
(67, 1),
(67, 16),
(67, 17),
(67, 18),
(67, 19),
(67, 24),
(68, 1),
(68, 16),
(68, 17),
(68, 18),
(68, 19),
(68, 20),
(68, 24),
(69, 1),
(69, 10),
(69, 17),
(69, 18),
(69, 19),
(69, 20),
(69, 21),
(69, 23),
(70, 1),
(70, 10),
(70, 17),
(70, 18),
(70, 19),
(70, 20),
(70, 21),
(70, 23),
(72, 10),
(72, 17),
(72, 18),
(72, 19),
(72, 20),
(72, 23),
(73, 1),
(73, 10),
(73, 14),
(73, 15),
(73, 16),
(73, 17),
(73, 18),
(73, 23),
(75, 1),
(75, 10),
(75, 11),
(75, 14),
(75, 15),
(75, 16),
(75, 17),
(75, 18),
(75, 27),
(76, 8),
(76, 9),
(76, 10),
(76, 11),
(76, 14),
(76, 15),
(76, 16),
(76, 17),
(76, 23),
(76, 24),
(76, 27),
(77, 1),
(77, 2),
(77, 14),
(77, 15),
(77, 16),
(77, 17),
(77, 24),
(78, 10),
(78, 18),
(78, 19),
(78, 20),
(78, 21),
(78, 23),
(78, 27),
(79, 2),
(79, 7),
(79, 9),
(79, 11),
(79, 14),
(79, 15),
(79, 16),
(79, 17),
(79, 24),
(80, 10),
(80, 11),
(80, 14),
(80, 15),
(80, 16),
(80, 17),
(80, 18),
(80, 24);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `links` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `links`, `product_id`) VALUES
(68, '7.jpg', 64),
(69, '3.jpg', 64),
(70, '6.jpg', 64),
(71, '5.jpg', 64),
(76, '3.jpg', 65),
(77, '4.jpg', 65),
(78, '5.jpg', 65),
(79, '6.jpg', 65),
(80, '3.jpg', 66),
(81, '4.jpg', 66),
(82, '5.jpg', 66),
(84, '2.jpg', 65),
(86, '4.jpg', 66),
(87, '6.jpg', 67),
(88, '7.jpg', 67),
(89, '8.jpg', 67),
(90, '9.jpg', 67),
(91, '3.jpg', 68),
(92, '4.jpg', 68),
(93, '5.jpg', 68),
(94, '6.jpg', 68),
(95, 'images (2).jpg', 69),
(96, 'images (3).jpg', 69),
(97, 'images.jpg', 69),
(98, 'tải xuống (1).jpg', 69),
(99, 'tải xuống (1).jpg', 70),
(100, 'tải xuống (2).jpg', 70),
(101, 'tải xuống (3).jpg', 70),
(102, 'tải xuống (4).jpg', 70),
(103, 'images (4).jpg', 72),
(104, 'images.jpg', 72),
(105, 'tải xuống (1).jpg', 72),
(106, 'tải xuống (2).jpg', 72),
(107, 'dong_cg07065_1_1024x1024.jpg', 73),
(108, 'DSC08398.JPG', 73),
(109, 'giay-nu-scorpion-56-6-7-jpg.jpg', 73),
(110, 'dong_cg07065_1_1024x1024.jpg', 75),
(111, 'DSC08398.JPG', 75),
(112, 'giay-nu-scorpion-56-6-7-jpg.jpg', 75),
(113, 'images (2).jpg', 76),
(114, 'images (3).jpg', 76),
(115, 'images (4).jpg', 76),
(116, 'images.jpg', 77),
(117, 'rew.jpg', 77),
(118, 'rưe.jpg', 77),
(119, 'giay-tay-nam-laka-nau-van.jpg', 78),
(120, 'rtewr.jpg', 79),
(121, 'images (2).jpg', 80),
(122, 'sandal.jpg', 80),
(123, 'sfds.jpg', 80);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `links` varchar(150) COLLATE utf8_unicode_ci DEFAULT '#',
  `ordering` int(11) DEFAULT '0',
  `caption_1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `caption_2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `image`, `links`, `ordering`, `caption_1`, `caption_2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'slide 12', 'slide 2.jpg', 'null', NULL, 'Giày thể thao l1', 'Shoes Sports', 1, '2018-08-28 11:02:23', '2018-08-29 16:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) DEFAULT '1',
  `birthday` date DEFAULT NULL,
  `level` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'customer',
  `remember_token` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`, `gender`, `birthday`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'admin@gmail.com', '$2y$10$59o1DVUC8V50YzSKS0plx.a.Wxmn7aGC7phqBfOtqHYlQG9WlrcVG', '0869131496', 'bắc ninh', 1, '1996-04-14', 'admin', 'DwJMnaa2sjyvvKTbCp1es90ETdPM8lvUUc11Hh7l2Rrjje4VKUgeKU9yl4Dj', '2018-08-28 04:19:06', '2018-08-28 16:51:05'),
(2, 'hữu hoàn', 'hoan@gmail.com', '$2y$10$7FaIOTamQQv.H8iITqXvQ.XpfGg6rxZrtdKWSkigeQ1ZX//BVSzVW', '088888888', 'hà nội', 1, '1996-09-10', 'customer', '4vNTbaSWr6v2L2tHnxMAnWjoaW9DwZKU6P0oBVexVpslfihLQYJcInJNeKgM', '2018-08-28 14:48:11', '2018-09-07 17:53:54'),
(3, 'hoan hoafn', 'hoan123@gmail.com', '$2y$10$UqcclstCSx8uU9aRIcW4zOP7foijOwxf7IXQxKuqhalq29o72yUUO', NULL, NULL, 1, NULL, 'customer', 's8SphaDYGeQruhaAyR1B51kx0KBWFE9grOarlJXUXYYYUccEOE5slBYbruJ2', '2018-08-29 07:09:58', '2018-08-29 07:09:58'),
(4, 'hữu hoàn', 'hoanhoan@gmail.com', '$2y$10$hLuCu.IJbGbgCwSbxdc7tOLs84UroQHob7fGCdGaOmfqrrbTk2Nhq', NULL, NULL, 1, NULL, 'customer', 'ZwRVIM0fpdBUOvm2s8AdtJ8qxpQKeR1Apt9eypsanCV3CmpC9bhwGp820gi6', '2018-08-30 18:06:22', '2018-08-30 18:06:22'),
(13, 'fjsdafsffsd', 'a@gmail.com', '$2y$10$857X2kUHi42yn/OsaYubrOYEtpTsazT3Hpeb4nfoJKGG0VxlmvJIW', NULL, NULL, 1, NULL, 'customer', 'w60vIcjQEq3wd8XBbWZfw8O3un4fJygyPlfzfoyvMK5ZQTEmEPFimaWhVoBv', '2018-09-11 08:17:42', '2018-09-11 08:17:42'),
(14, 'nguyễn văn t', 't@gmail.com', '$2y$10$x.gkbdvSFTRG71Thr1pFJ.UopaKty50yLJPbL.jI8GCfvwIRyIbf6', NULL, NULL, 1, NULL, 'customer', 'TVBxuFTO5xn7TxwOtJkBb5PZXu2yd1if9sAh4OyQPrLWoKesGCkKm21euvxh', '2018-09-11 10:38:58', '2018-09-11 10:38:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_orders_customers` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `FK_order_detail_orders` (`order_id`),
  ADD KEY `FK_order_detail_products` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_products_categorys` (`category_id`);

--
-- Indexes for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD KEY `FK_product_attribute_attributes` (`attribute_id`),
  ADD KEY `FK_product_attribute_products` (`product_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_product_image_products` (`product_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
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
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_customers` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_order_detail_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_order_detail_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_categorys` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`id`);

--
-- Constraints for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD CONSTRAINT `FK_product_attribute_attributes` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_product_attribute_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `FK_product_image_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
