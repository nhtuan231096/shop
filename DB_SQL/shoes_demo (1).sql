-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 11:48 AM
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
-- Database: `shoes_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `image`, `author`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Những điều nên biết khi mua giày thể thao..', '2018-08-27-03-22-374.jpg', 'Mr Tom', '<p>Việc mua giày thể thao có lẽ hơi khác biệt một chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tâm đến việc bộ đồ đó trông có hợp với bạn hay không, màu sắc đó có tôn làn da của bạn lên hay không. Nhưng mua giày thể thao thì khác, những điều bạn cần quan tâm sẽ còn nhiều hơn thế. Vì vậy những điều bạn cần chú ý mỗi khi mua giày thể thao là gì? Cùng nhau tìm hiểu nhé!</p>\r\n<p>Trước khi mua giày thể thao, điều đầu tiên mà bạn cần quan tâm đó chính là nhu cầu của mình: Bạn muốn mua giày để làm gì? Nếu bạn là người có niềm đam mê với giày thể thao thì hẳn bạn cũng biết, tùy thuộc vào mục đích sử dụng mà mỗi dòng giày sẽ có những thiết kế riêng biệt, đặc biệt là những mẫu giày của các thương hiệu lớn như giày Nike, giày adidas, … Ví dụ như bạn muốn mua giày chạy bộ, vậy thì những đôi giày thời trang với upper làm từ da và mặt đế hoàn toàn trơn phẳng chắc chắn sẽ là những đối tượng bị loại đầu tiên. Hoặc khi tìm mua giày training thì những mẫu giày mà bạn nên xem xét nên là những mẫu giày có phần đế chắc chắn để đảm bảo cho việc tập luyện với cường độ cao. Tùy vào mục đích sử dụng để mua giày thể thao phù hợp nhất với mình, đây là điều bạn nên chú ý nhé!</p>', 1, '2018-08-27 03:37:22', '2018-08-27 03:37:22'),
(2, 'Nike Sports', '2018-08-27-04-48-011.jpg', 'Mr Ben', '<p>&lt;p&gt;Việc mua giày thể thao có lẽ hơi khác biệt một chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tâm đến việc bộ đồ đó trông có hợp với bạn hay không, màu sắc đó có tôn làn da của bạn lên hay không. Nhưng mua giày thể thao thì khác, những điều bạn cần quan tâm sẽ còn nhiều hơn thế. Vì vậy những điều bạn cần chú ý mỗi khi mua giày thể thao là gì? Cùng nhau tìm hiểu nhé!&lt;/p&gt;<br />&lt;p&gt;Trước khi mua giày thể thao, điều đầu tiên mà bạn cần quan tâm đó chính là nhu cầu của mình: Bạn muốn mua giày để làm gì? Nếu bạn là người có niềm đam mê với giày thể thao thì hẳn bạn cũng biết, tùy thuộc vào mục đích sử dụng mà mỗi dòng giày sẽ có những thiết kế riêng biệt, đặc biệt là những mẫu giày của các thương hiệu lớn như giày Nike, giày adidas, … Ví dụ như bạn muốn mua giày chạy bộ, vậy thì những đôi giày thời trang với upper làm từ da và mặt đế hoàn toàn trơn phẳng chắc chắn sẽ là những đối tượng bị loại đầu tiên. Hoặc khi tìm mua giày training thì những mẫu giày mà bạn nên xem xét nên là những mẫu giày có phần đế chắc chắn để đảm bảo cho việc tập luyện với cường độ cao. Tùy vào mục đích sử dụng để mua giày thể thao phù hợp nhất với mình, đây là điều bạn nên chú ý nhé!&lt;/p&gt;</p>', 1, '2018-08-27 04:01:48', '2018-08-27 04:01:48'),
(4, 'Shoes', '2018-08-27-04-12-053.jpg', 'Mrs Maria', '<p>&lt;p&gt;&amp;lt;p&amp;gt;Việc mua giày thể thao có lẽ hơi khác biệt một chút so với mua quần áo bình thường. Khi lựa chọn quần áo, có thể bạn sẽ chỉ quan tâm đến việc bộ đồ đó trông có hợp với bạn hay không, màu sắc đó có tôn làn da của bạn lên hay không. Nhưng mua giày thể thao thì khác, những điều bạn cần quan tâm sẽ còn nhiều hơn thế. Vì vậy những điều bạn cần chú ý mỗi khi mua giày thể thao là gì? Cùng nhau tìm hiểu nhé!&amp;lt;/p&amp;gt;&lt;br /&gt;&amp;lt;p&amp;gt;Trước khi mua giày thể thao, điều đầu tiên mà bạn cần quan tâm đó chính là nhu cầu của mình: Bạn muốn mua giày để làm gì? Nếu bạn là người có niềm đam mê với giày thể thao thì hẳn bạn cũng biết, tùy thuộc vào mục đích sử dụng mà mỗi dòng giày sẽ có những thiết kế riêng biệt, đặc biệt là những mẫu giày của các thương hiệu lớn như giày Nike, giày adidas, … Ví dụ như bạn muốn mua giày chạy bộ, vậy thì những đôi giày thời trang với upper làm từ da và mặt đế hoàn toàn trơn phẳng chắc chắn sẽ là những đối tượng bị loại đầu tiên. Hoặc khi tìm mua giày training thì những mẫu giày mà bạn nên xem xét nên là những mẫu giày có phần đế chắc chắn để đảm bảo cho việc tập luyện với cường độ cao. Tùy vào mục đích sử dụng để mua giày thể thao phù hợp nhất với mình, đây là điều bạn nên chú ý nhé!&amp;lt;/p&amp;gt;&lt;/p&gt;</p>', 1, '2018-08-27 04:05:12', '2018-08-27 04:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(11) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `slug`, `image`, `parent`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Giày  Nam', 'giay-nam', NULL, 0, 1, '2018-08-26 15:53:32', '2018-08-26 15:53:32'),
(13, 'Giày Nữ', 'giay-nu', NULL, 0, 1, '2018-08-26 15:53:42', '2018-08-26 15:53:42'),
(14, 'Giày Trẻ Em', 'giay-tre-em', NULL, 0, 1, '2018-08-26 15:53:50', '2018-08-26 15:53:50'),
(15, 'Giày Nam Công Sở', 'giay-nam-cong-so', NULL, 12, 1, '2018-08-26 15:54:31', '2018-08-26 15:54:31'),
(16, 'Giày Da Nam', 'giay-da-nam', NULL, 12, 1, '2018-08-26 15:54:40', '2018-08-26 16:07:35'),
(17, 'Giày Thể Thao Nam', 'giay-the-thao-nam', NULL, 12, 1, '2018-08-26 15:55:01', '2018-08-26 15:55:01'),
(18, 'Giày Lười', 'giay-luoi', NULL, 16, 1, '2018-08-26 15:56:00', '2018-08-26 15:56:00'),
(19, 'Giày Chelsea Boots', 'giay-chelsea-boots', NULL, 16, 1, '2018-08-26 15:56:12', '2018-08-26 15:56:12'),
(20, 'Lace up', 'lace-up', NULL, 16, 1, '2018-08-26 15:56:25', '2018-08-26 15:56:25'),
(21, 'Formal', 'formal', NULL, 16, 1, '2018-08-26 15:56:44', '2018-08-26 15:56:44'),
(22, 'Nike', 'nike', NULL, 17, 1, '2018-08-26 15:57:00', '2018-08-26 15:57:00'),
(23, 'Puma', 'puma', NULL, 17, 1, '2018-08-26 15:57:13', '2018-08-26 15:57:13'),
(24, 'Converse', 'converse', NULL, 17, 1, '2018-08-26 15:57:27', '2018-08-26 15:57:27'),
(25, 'Giày Tây Da Nam', 'giay-tay-da-nam', NULL, 15, 1, '2018-08-26 15:57:56', '2018-08-26 15:57:56'),
(26, 'Giày Da Bò', 'giay-da-bo', NULL, 15, 1, '2018-08-26 15:58:22', '2018-08-26 15:58:22'),
(27, 'Giày Tăng Chiều Cao', 'giay-tang-chieu-cao', NULL, 15, 1, '2018-08-26 15:58:42', '2018-08-26 15:58:42'),
(28, 'Giày Sandal', 'giay-sandal', NULL, 13, 1, '2018-08-26 15:58:57', '2018-08-26 15:58:57'),
(29, 'Giày Búp Bê', 'giay-bup-be', NULL, 13, 1, '2018-08-26 15:59:14', '2018-08-26 15:59:14'),
(30, 'Giày Cao Gót', 'giay-cao-got', NULL, 13, 1, '2018-08-26 15:59:26', '2018-08-26 15:59:26'),
(31, 'Giày Thể Thao Nữ', 'giay-the-thao-nu', NULL, 13, 1, '2018-08-26 16:00:05', '2018-08-26 16:00:05'),
(32, 'Giày Adidas', 'giay-adidas', NULL, 31, 1, '2018-08-26 16:00:25', '2018-08-26 16:00:25'),
(33, 'Giày Boots', 'giay-boots', NULL, 31, 1, '2018-08-26 16:00:43', '2018-08-26 16:00:43'),
(34, 'Giày Gucci', 'giay-gucci', NULL, 31, 1, '2018-08-26 16:01:05', '2018-08-26 16:01:05'),
(35, 'Giày Sneaker', 'giay-sneaker', NULL, 31, 1, '2018-08-26 16:01:22', '2018-08-26 16:01:22'),
(36, 'Giày Biti\'s', 'giay-bitis', NULL, 14, 1, '2018-08-26 16:01:34', '2018-08-26 16:01:34'),
(37, 'Giày Native', 'giay-native', NULL, 14, 1, '2018-08-26 16:01:44', '2018-08-26 16:02:21'),
(38, 'SmartFeet', 'smartfeet', NULL, 14, 1, '2018-08-26 16:03:00', '2018-08-26 16:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `payment_method` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shipping_method` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cus_id`, `payment_method`, `shipping_method`, `phone`, `address`, `note`, `status`, `created_at`, `updated_at`) VALUES
(19, 6, 'method 1', 'method 1', NULL, NULL, NULL, 1, '2018-08-26 19:14:16', '2018-08-26 19:14:16'),
(20, 6, 'method 1', 'method 1', NULL, NULL, NULL, 1, '2018-08-26 19:21:39', '2018-08-26 19:21:39'),
(21, 6, 'on', NULL, '0869131496', 'bắc ninh', 'ewe', 1, '2018-08-26 19:44:29', '2018-08-26 19:44:29'),
(22, 6, 'on', NULL, '13455645', 'hà nội', 'được luôn này!', 1, '2018-08-26 19:48:14', '2018-08-26 19:48:14'),
(23, 6, 'on', NULL, 'fsdfa', '123', 'fdsfasd', 1, '2018-08-26 19:50:06', '2018-08-26 19:50:06'),
(24, 6, 'on', NULL, '1', '1', '1', 1, '2018-08-26 19:59:02', '2018-08-26 19:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `pro_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(21, 19, 29, 5, 150000, '2018-08-27 02:14:16', '2018-08-27 02:14:16'),
(22, 19, 28, 5, 100000, '2018-08-27 02:14:16', '2018-08-27 02:14:16'),
(23, 20, 28, 1, 100000, '2018-08-27 02:21:39', '2018-08-27 02:21:39'),
(24, 21, 28, 1, 100000, '2018-08-27 02:44:29', '2018-08-27 02:44:29'),
(25, 22, 28, 1, 100000, '2018-08-27 02:48:14', '2018-08-27 02:48:14'),
(26, 23, 29, 1, 150000, '2018-08-27 02:50:06', '2018-08-27 02:50:06'),
(27, 24, 28, 3, 100000, '2018-08-27 02:59:03', '2018-08-27 02:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `sale_price` float DEFAULT NULL,
  `content` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `slug`, `cat_id`, `price`, `sale_price`, `content`, `type`, `status`, `created_at`, `updated_at`) VALUES
(27, 'Nike Sports 2019', '9.jpg', 'nike-sports-2019', 22, 350000, 300000, '<p>Giày Nike Phong cách thời trang hot 2019</p>', '0', 1, '2018-08-26 16:04:04', '2018-08-26 16:04:04'),
(28, 'giay nam 123', '6.jpg', 'giay-nam-123', 12, 123000, 100000, '<p>dfafsdf</p>', '0', 1, '2018-08-26 16:23:33', '2018-08-27 01:10:49'),
(29, 'nam mới 2019', '5.jpg', 'nam-moi-2019', 12, 200000, 150000, '<p>1</p>', '1', 1, '2018-08-26 16:26:01', '2018-08-26 16:26:01'),
(30, 'Nike z1', '2.jpg', 'nike-z1', 22, 380000, 350000, '<p>Sản phẩm mới nhất hè 2018, nổi bật với phong cách tự do,..</p>', '0', 1, '2018-08-27 01:13:24', '2018-08-27 01:13:24'),
(31, 'Sneaker q1 2018', '1.jpg', 'sneaker-q1-2018', 35, 400000, 380000, '<p>Sản phẩm Sneaker nữ cá tinh nổi bật với màu sắc trẻ trung năng động,..</p>', '0', 1, '2018-08-27 01:15:34', '2018-08-27 01:15:34'),
(32, 'Giafy aau', 'images (6).jpg', 'giafy-aau', 23, 500000, 400000, '<p>Sản phẩm giày hãng Puma, chất lượng cao </p>', '0', 1, '2018-08-27 01:17:02', '2018-08-27 04:28:51'),
(33, 'Gucci nữ l1', 'images (9).jpg', 'gucci-nu-l1', 34, 150000, 100000, '<p>1</p>', '0', 1, '2018-08-27 01:23:14', '2018-08-27 01:23:14'),
(34, 'Giày Âu x1', 'giay-tay-nam-laka-nau-van.jpg', 'giay-au-x1', 26, 800000, 700000, '<p>Hàng chất lượng cao!</p>', '0', 1, '2018-08-27 01:42:56', '2018-08-27 01:42:56'),
(35, 'Giày Sandal p1', 'images (2).jpg', 'giay-sandal-p1', 28, 300000, 200000, '<p>1</p>', '1', 1, '2018-08-27 02:13:35', '2018-08-27 02:13:35'),
(37, 'Giày da nam x1', 'images (1).jpg', 'giay-da-nam-x1', 16, 280000, 250000, '<p>giày da chât lượng cao</p>', '0', 1, '2018-08-27 08:57:10', '2018-08-27 08:57:10'),
(39, 'Giày da nam x2', 'images (3).jpg', 'giay-da-nam-x2', 16, 500000, 400000, '<p>Giày da chất lượng cao</p>', '0', 1, '2018-08-27 09:03:26', '2018-08-27 09:03:26'),
(40, 'Giày da nam x3', 'images (4).jpg', 'giay-da-nam-x3', 16, 800000, 0, '<p>Giày da mới  chất lượng</p>', '1', 1, '2018-08-27 09:05:50', '2018-08-27 09:05:50'),
(41, 'Giày da nam x4', 'tải xuống (4).jpg', 'giay-da-nam-x4', 16, 1300000, 0, '<p>Hàng mới</p>', '1', 1, '2018-08-27 09:06:51', '2018-08-27 09:06:51'),
(42, 'Giày da nam x5', 'giay-au.jpg', 'giay-da-nam-x5', 16, 1500000, 1400000, '<p>1</p>', '0', 1, '2018-08-27 09:10:21', '2018-08-27 09:10:21'),
(43, 'Giày da nam x6', 'giay-tay-nam-laka-nau-van.jpg', 'giay-da-nam-x6', 16, 700000, 0, '<p>1</p>', '1', 1, '2018-08-27 09:11:17', '2018-08-27 09:11:17'),
(45, 'Giày da nam l1', 'tải xuống.jpg', 'giay-da-nam-l1', 16, 2000000, 1800000, '<p>1</p>', '0', 1, '2018-08-27 09:14:27', '2018-08-27 09:14:27'),
(46, 'giày da cao cấp', 'images (8).jpg', 'giay-da-cao-cap', 16, 200000, 0, '<p>1</p>', '0', 1, '2018-08-27 09:16:39', '2018-08-27 09:16:39'),
(47, 'sandal mới', 'sfds.jpg', 'sandal-moi', 13, 150000, 100000, '<p>1</p>', '1', 1, '2018-08-27 09:22:41', '2018-08-27 09:22:41'),
(48, 'giày âu x1', '1496771743.jpg', 'giay-au-x1', 15, 150000, 0, '<p>1</p>', '1', 1, '2018-08-27 09:26:40', '2018-08-27 09:26:40'),
(49, 'giầy âu 12', 'images (1).jpg', 'giay-au-12', 15, 200000, 0, '<p>1</p>\r\n<p> </p>', '1', 1, '2018-08-27 09:27:26', '2018-08-27 09:27:26'),
(50, 'âu đen', 'images.jpg', 'au-den', 15, 111111, 0, '<p>1</p>', '1', 1, '2018-08-27 09:28:02', '2018-08-27 09:28:02'),
(52, 'giày au 123', 'tải xuống.jpg', 'giay-au-123', 15, 350000, 0, '<p>1</p>', '0', 1, '2018-08-27 09:29:34', '2018-08-27 09:29:34'),
(54, 'sport nam o1', 'q1.jpg', 'sport-nam-o1', 17, 600000, 0, '<p>1</p>', '1', 1, '2018-08-27 09:32:45', '2018-08-27 09:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `links` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `links`, `pro_id`) VALUES
(54, '3.jpg', 27),
(55, '8.jpg', 27),
(56, '10.jpg', 27),
(57, '4.jpg', 28),
(58, '7.jpg', 28),
(59, '8.jpg', 28),
(60, '5.jpg', 29),
(61, '6.jpg', 29),
(62, '7.jpg', 29),
(63, '3.jpg', 30),
(64, '4.jpg', 30),
(65, '5.jpg', 30),
(66, '7.jpg', 31),
(67, '8.jpg', 31),
(68, '9.jpg', 31),
(69, '4.jpg', 32),
(70, '5.jpg', 32),
(71, '6.jpg', 32),
(72, 'images (7).jpg', 33),
(73, 'images (9).jpg', 33),
(74, 'q4.jpg', 33),
(75, 'giay-au-2.jpg', 34),
(76, 'images (8).jpg', 34),
(77, 'images (10).jpg', 34),
(78, 'dfg.jpg', 35),
(79, 'images (1).jpg', 35),
(80, 'sfds.jpg', 35),
(81, 'images (2).jpg', 37),
(82, 'images (3).jpg', 37),
(83, 'images (4).jpg', 37),
(84, 'images (1).jpg', 38),
(85, 'images (2).jpg', 38),
(86, 'images (3).jpg', 38),
(87, 'images (4).jpg', 38),
(88, 'images (1).jpg', 39),
(89, 'images (2).jpg', 39),
(90, 'images (4).jpg', 39),
(91, 'images.jpg', 39),
(92, 'images (1).jpg', 40),
(93, 'images (2).jpg', 40),
(94, 'images (3).jpg', 40),
(95, 'images.jpg', 40),
(96, 'tải xuống (1).jpg', 41),
(97, 'tải xuống (2).jpg', 41),
(98, 'tải xuống (3).jpg', 41),
(99, 'tải xuống.jpg', 41),
(100, 'giay-au-2.jpg', 42),
(101, 'giay-tay-nam-laka-den-van-38.jpg', 42),
(102, 'giay-tay-nam-laka-nau-van.jpg', 42),
(103, 'images (10).jpg', 42),
(104, 'giay-au.jpg', 43),
(105, 'giay-au-2.jpg', 43),
(106, 'giay-tay-nam-laka-den-van-38.jpg', 43),
(107, 'images (6).jpg', 43),
(108, 'giay-au.jpg', 44),
(109, 'giay-au-2.jpg', 44),
(110, 'giay-tay-nam-laka-den-van-38.jpg', 44),
(111, 'giay-tay-nam-laka-nau-van.jpg', 44),
(112, 'images (4).jpg', 45),
(113, 'images.jpg', 45),
(114, 'tải xuống (1).jpg', 45),
(115, 'tải xuống (2).jpg', 45),
(116, 'giay-au.jpg', 46),
(117, 'giay-au-2.jpg', 46),
(118, 'giay-tay-nam-laka-den-van-38.jpg', 46),
(119, 'images (10).jpg', 46),
(120, 'dfg.jpg', 47),
(121, 'images (2).jpg', 47),
(122, 'images.jpg', 47),
(123, 'rr.jpg', 47),
(124, 'images (1).jpg', 48),
(125, 'images (2).jpg', 48),
(126, 'images.jpg', 48),
(127, 'tải xuống.jpg', 48),
(128, '1496771743.jpg', 49),
(129, 'images (2).jpg', 49),
(130, 'images.jpg', 49),
(131, 'tải xuống.jpg', 49),
(132, '1496771743.jpg', 50),
(133, 'images (1).jpg', 50),
(134, 'images (2).jpg', 50),
(135, 'tải xuống.jpg', 50),
(136, '1496771743.jpg', 51),
(137, 'images (1).jpg', 51),
(138, 'images.jpg', 51),
(139, 'tải xuống.jpg', 51),
(140, '1496771743.jpg', 52),
(141, 'images (1).jpg', 52),
(142, 'images (2).jpg', 52),
(143, 'images.jpg', 52),
(144, 'q3.jpg', 54),
(145, 'q4.jpg', 54),
(146, 'q5.jpg', 54),
(147, 'rsz_sport-1.jpg', 54),
(148, '5.jpg', 55),
(149, '6.jpg', 55),
(150, '7.jpg', 55),
(151, '8.jpg', 55);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `links` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `caption_1` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `caption_2` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image`, `links`, `caption_1`, `caption_2`, `status`, `created_at`, `updated_at`) VALUES
(7, '2018-08-26-08-34-462.jpg', 'null', 'All sale 30%', 'null', 1, '2018-08-26 20:46:34', '2018-08-26 20:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'customer',
  `remember_token` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'SuperAdmin', 'admin@gmail.com', '$2y$10$6rUoT3by26ooT7pQ65vx0ORi/.ddjrbfBqmtVTUPSbtZc.xa/gwOO', '1', 'gd3G39oriWfS6qyHRQf2EXdpQ3so1J88AnSLnOC3t2WCfqZiFk1pR60r2aQW', '2018-08-26 15:50:56', '2018-08-26 15:50:56'),
(7, 'hoàn nguyễn', 'hoan@gmail.com', '$2y$10$whgAzBnSRUmP8iWiBhCo5u5l5yN3WvYvZAnUilNravxpDivhlcjUu', 'customer', NULL, '2018-08-26 20:33:06', '2018-08-26 20:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_products_categorys` (`cat_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_categorys` FOREIGN KEY (`cat_id`) REFERENCES `categorys` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

INSERT INTO `products` (`id`, `name`,`category_id`, `image`, `slug`,  `description`, `price`, `sale_price`, `type`, `status`, `created_at`, `updated_at`) VALUES
(27, 'Nike Sports 2312',22,'9.jpg', 'nike-sports-2019', '<p>Giày Nike Phong cách thời trang hot 2019</p>', 350000, 300000,  '0', 1, '2018-08-26 16:04:04', '2018-08-26 16:04:04'),
(28, 'giay nam 123',  12,'6.jpg', 'giay-nam-123', 123000, 100000, '<p>dfafsdf</p>', '0', 1, '2018-08-26 16:23:33', '2018-08-27 01:10:49'),
(29, 'nam mới 2019',  12,'5.jpg', 'nam-moi-2019', 200000, 150000, '<p>1</p>', '1', 1, '2018-08-26 16:26:01', '2018-08-26 16:26:01'),
(30, 'Nike z1', '2.jpg', 22, 'nike-z1', 380000, 350000, '<p>Sản phẩm mới nhất hè 2018, nổi bật với phong cách tự do,..</p>', '0', 1, '2018-08-27 01:13:24', '2018-08-27 01:13:24'),
(31, 'Sneaker q1 2018', '1.jpg',35, 'sneaker-q1-2018',  400000, 380000, '<p>Sản phẩm Sneaker nữ cá tinh nổi bật với màu sắc trẻ trung năng động,..</p>', '0', 1, '2018-08-27 01:15:34', '2018-08-27 01:15:34'),
(32, 'Giafy aau', 'images (6).jpg', 23,  'giafy-aau',500000, 400000, '<p>Sản phẩm giày hãng Puma, chất lượng cao </p>', '0', 1, '2018-08-27 01:17:02', '2018-08-27 04:28:51'),
(33, 'Gucci nữ l1', 'images (9).jpg',34, 'gucci-nu-l1',  150000, 100000, '<p>1</p>', '0', 1, '2018-08-27 01:23:14', '2018-08-27 01:23:14'),
(34, 'Giày Âu x1', 'giay-tay-nam-laka-nau-van.jpg', 26,'giay-au-x1',  800000, 700000, '<p>Hàng chất lượng cao!</p>', '0', 1, '2018-08-27 01:42:56', '2018-08-27 01:42:56'),
(35, 'Giày Sandal p1', 'images (2).jpg', 28,  'giay-sandal-p1',300000, 200000, '<p>1</p>', '1', 1, '2018-08-27 02:13:35', '2018-08-27 02:13:35'),
(37, 'Giày da nam x1', 'images (1).jpg', 16,  'giay-da-nam-x1',280000, 250000, '<p>giày da chât lượng cao</p>', '0', 1, '2018-08-27 08:57:10', '2018-08-27 08:57:10'),
(39, 'Giày da nam x2', 'images (3).jpg', 16,'giay-da-nam-x2',  500000, 400000, '<p>Giày da chất lượng cao</p>', '0', 1, '2018-08-27 09:03:26', '2018-08-27 09:03:26'),
(40, 'Giày da nam x3', 'images (4).jpg', 'giay-da-nam-x3', 800000, 0, '<p>Giày da mới  chất lượng</p>', '1', 1, '2018-08-27 09:05:50', '2018-08-27 09:05:50'),
(41, 'Giày da nam x4', 'tải xuống (4).jpg', 'giay-da-nam-x4', 16, 1300000, 0, '<p>Hàng mới</p>', '1', 1, '2018-08-27 09:06:51', '2018-08-27 09:06:51'),
(42, 'Giày da nam x5', 'giay-au.jpg', 'giay-da-nam-x5', 106, 1500000, 1400000, '<p>1</p>', '0', 1, '2018-08-27 09:10:21', '2018-08-27 09:10:21'),
(43, 'Giày da nam x6', 'giay-tay-nam-laka-nau-van.jpg', 'giay-da-nam-x6', 16, 700000, 0, '<p>1</p>', '1', 1, '2018-08-27 09:11:17', '2018-08-27 09:11:17'),
(45, 'Giày da nam l1', 'tải xuống.jpg', 'giay-da-nam-l1', 16, 2000000, 1800000, '<p>1</p>', '0', 1, '2018-08-27 09:14:27', '2018-08-27 09:14:27'),
(46, 'giày da cao cấp', 'images (8).jpg', 'giay-da-cao-cap', 16, 200000, 0, '<p>1</p>', '0', 1, '2018-08-27 09:16:39', '2018-08-27 09:16:39'),
(47, 'sandal mới', 'sfds.jpg', 'sandal-moi', 13, 150000, 100000, '<p>1</p>', '1', 1, '2018-08-27 09:22:41', '2018-08-27 09:22:41'),
(48, 'giày âu x1', '1496771743.jpg', 'giay-au-x1', 15, 150000, 0, '<p>1</p>', '1', 1, '2018-08-27 09:26:40', '2018-08-27 09:26:40'),
(49, 'giầy âu 12', 'images (1).jpg', 'giay-au-12', 15, 200000, 0, '<p>1</p>\r\n<p> </p>', '1', 1, '2018-08-27 09:27:26', '2018-08-27 09:27:26'),
(50, 'âu đen', 'images.jpg', 'au-den', 15, 111111, 0, '<p>1</p>', '1', 1, '2018-08-27 09:28:02', '2018-08-27 09:28:02'),
(52, 'giày au 123', 'tải xuống.jpg', 'giay-au-123', 15, 350000, 0, '<p>1</p>', '0', 1, '2018-08-27 09:29:34', '2018-08-27 09:29:34'),
(54, 'sport nam o1', 'q1.jpg', 'sport-nam-o1', 17, 600000, 0, '<p>1</p>', '1', 1, '2018-08-27 09:32:45', '2018-08-27 09:32:45');
