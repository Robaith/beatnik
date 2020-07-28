-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 11:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beatnik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '123456789', 'admin@gmail.com', NULL, '$2y$10$15F7DEgm41FQky4YCQ458e9P/KZDRIqBT2C62a3ynhdOgiz2ibWJ6', NULL, NULL, '2020-07-07 07:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(12, 'Sanchay', '2020-07-27 21:18:42', '2020-07-27 21:18:42'),
(13, 'Early Cash', '2020-07-27 21:19:02', '2020-07-27 21:19:02'),
(14, 'Children', '2020-07-27 21:19:16', '2020-07-27 21:19:16'),
(15, 'Retirement', '2020-07-27 21:19:24', '2020-07-27 21:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(5, '2020_07_07_141035_create_categories_table', 2),
(6, '2020_07_07_141301_create_subcategories_table', 2),
(7, '2020_07_07_141456_create_brands_table', 2),
(8, '2020_07_16_141332_create_coupons_table', 3),
(9, '2020_07_18_132727_create_products_table', 4),
(10, '2020_07_27_100501_create_news_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_image`, `news_details`, `created_at`, `updated_at`) VALUES
(2, 'news title 1', 'public/media/news/280720_05_01_38.jpeg', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque.\r\n', '2020-07-27 23:38:01', '2020-07-27 23:38:01'),
(3, 'news title 12', 'public/media/news/280720_05_01_39.jpeg', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</span>', '2020-07-27 23:39:01', '2020-07-27 23:39:01'),
(4, 'recent news title 3 demo text', 'public/media/news/280720_06_08_09.jpeg', 'test', '2020-07-28 00:09:08', '2020-07-28 00:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_slider` int(11) DEFAULT NULL,
  `best_seller` int(11) DEFAULT NULL,
  `daily_essentials` int(11) DEFAULT NULL,
  `diaries` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_quantity`, `product_details`, `product_price`, `product_image`, `top_slider`, `best_seller`, `daily_essentials`, `diaries`, `created_at`, `updated_at`) VALUES
(3, 12, 'test 2', '12', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '156', 'public/media/product/280720_03_44_56.png', NULL, 1, 1, NULL, '2020-07-27 21:56:44', '2020-07-28 00:26:19'),
(4, 12, 'test 1', '5', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '435', 'public/media/product/280720_03_20_58.png', NULL, 1, NULL, NULL, '2020-07-27 21:58:20', '2020-07-27 21:58:20'),
(5, 12, 'test 3', '12', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '1200', 'public/media/product/280720_03_04_59.png', 1, 1, 1, NULL, '2020-07-27 21:59:04', '2020-07-28 00:26:41'),
(6, 12, 'test 4', '5', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '234', 'public/media/product/280720_03_42_59.png', 1, 1, 1, NULL, '2020-07-27 21:59:42', '2020-07-28 00:26:48'),
(7, 12, 'test 5', '87', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '876', 'public/media/product/280720_04_34_00.png', NULL, NULL, 1, NULL, '2020-07-27 22:00:34', '2020-07-27 22:00:34'),
(8, 13, 'test 6', '32', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '256', 'public/media/product/280720_04_33_02.png', NULL, NULL, 1, NULL, '2020-07-27 22:02:33', '2020-07-27 22:02:33'),
(9, 13, 'test 7', '234', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '1200', 'public/media/product/280720_04_20_03.png', NULL, 1, 1, NULL, '2020-07-27 22:03:20', '2020-07-27 22:03:20'),
(10, 13, 'test 8', '10', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '156', 'public/media/product/280720_04_54_03.png', NULL, NULL, 1, NULL, '2020-07-27 22:03:54', '2020-07-27 22:03:54'),
(11, 13, 'test 9', '12', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '1200', 'public/media/product/280720_04_25_05.jpg', NULL, 1, 1, 1, '2020-07-27 22:05:25', '2020-07-28 00:27:12'),
(12, 13, 'test 10', '5', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '435', 'public/media/product/280720_04_36_07.jpg', NULL, NULL, 1, NULL, '2020-07-27 22:07:36', '2020-07-28 00:27:01'),
(13, 14, 'test 11', '234', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '234', 'public/media/product/280720_04_20_08.jpg', NULL, NULL, 1, NULL, '2020-07-27 22:08:20', '2020-07-27 22:08:20'),
(14, 14, 'test 12', '2', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '214', 'public/media/product/280720_04_13_12.jpeg', NULL, NULL, NULL, 1, '2020-07-27 22:12:13', '2020-07-28 00:28:31'),
(15, 14, 'test 13', '23', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '23', 'public/media/product/280720_04_55_12.jpeg', NULL, NULL, NULL, 1, '2020-07-27 22:12:55', '2020-07-27 22:12:55'),
(16, 14, 'test 14', '5', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '435', 'public/media/product/280720_04_09_14.jpeg', NULL, 1, 1, NULL, '2020-07-27 22:14:09', '2020-07-27 22:14:09'),
(17, 14, 'test 15', '2', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '231', 'public/media/product/280720_04_53_14.jpeg', NULL, 1, 1, 1, '2020-07-27 22:14:53', '2020-07-27 22:14:53'),
(18, 15, 'test 16', '5', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '435', 'public/media/product/280720_04_14_16.jpeg', NULL, NULL, NULL, 1, '2020-07-27 22:16:14', '2020-07-28 00:28:13'),
(19, 15, 'test 17', '123', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '23', 'public/media/product/280720_04_35_17.jpeg', NULL, NULL, NULL, 1, '2020-07-27 22:17:35', '2020-07-28 00:27:59'),
(20, 15, 'test 18', '123', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '23', 'public/media/product/280720_04_37_22.jpeg', NULL, NULL, NULL, 1, '2020-07-27 22:22:37', '2020-07-27 22:22:37'),
(21, 15, 'test 19', '12', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '1200', 'public/media/product/280720_04_39_23.jpeg', NULL, NULL, NULL, 1, '2020-07-27 22:23:39', '2020-07-28 00:27:31'),
(22, 15, 'test 20', '12', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nunc neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere lacus quis sodales ornare. Donec tempor pulvinar pellentesque. Donec ipsum ipsum, pharetra vel lacinia a, fringilla in ipsum. Maecenas vel velit id eros pretium sollicitudin vel ut libero. Fusce leo sapien, tincidunt in mauris vitae, iaculis iaculis metus. Donec feugiat metus sit amet commodo commodo. Ut dapibus dolor nulla, eget molestie nisi suscipit sed. Quisque ac tempor leo. Integer efficitur, ex nec posuere euismod, lacus quam dapibus diam, auctor commodo arcu ex vel dui. Nullam in dolor quam. Vestibulum bibendum elit sit amet diam dignissim, vel pellentesque purus faucibus.</span>', '435', 'public/media/product/280720_04_24_24.jpeg', NULL, NULL, NULL, 1, '2020-07-27 22:24:24', '2020-07-27 22:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ariyan', NULL, 'ariyan@gmail.com', NULL, '$2y$12$dMY5vrhg4kz.iP5sr.pH3uV.VlPhgEP30QR1PHY8s0F8vMXGyOvwq', NULL, '2019-10-04 23:27:57', '2019-10-04 23:27:57'),
(2, 'udemy', NULL, 'udemy@gmail.com', NULL, '$2y$12$dMY5vrhg4kz.iP5sr.pH3uV.VlPhgEP30QR1PHY8s0F8vMXGyOvwq', NULL, '2019-10-05 04:47:42', '2019-10-05 04:47:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
