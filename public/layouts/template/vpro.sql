-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 30, 2020 lúc 03:04 AM
-- Phiên bản máy phục vụ: 5.7.31-0ubuntu0.18.04.1
-- Phiên bản PHP: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vpro`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_15_174924_vp_user', 1),
(5, '2020_09_16_181456_vp_categories', 2),
(6, '2020_09_18_044428_create_vp_products_table', 3),
(7, '2020_09_22_042016_edit_vp_products_table', 4),
(8, '2020_09_28_045116_create_vp_comments_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_categories`
--

CREATE TABLE `vp_categories` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_categories`
--

INSERT INTO `vp_categories` (`cate_id`, `cate_name`, `cate_slug`, `created_at`, `updated_at`) VALUES
(1, 'IPhone', 'iphone', '2020-09-16 18:49:20', '2020-09-16 18:49:20'),
(2, 'Samsung', 'samsung', '2020-09-16 18:49:20', '2020-09-16 18:49:20'),
(3, 'Nokia', 'nokia', '2020-09-16 18:49:20', '2020-09-17 19:00:22'),
(4, 'LG', 'lg', '2020-09-17 11:08:31', '2020-09-17 11:08:31'),
(5, 'Vertu', 'vertu', '2020-09-17 11:13:54', '2020-09-17 11:13:54'),
(6, 'BPhone', 'bphone', '2020-09-17 11:14:05', '2020-09-17 11:14:05'),
(7, 'HTC', 'htc', '2020-09-17 11:14:10', '2020-09-17 11:14:10'),
(13, 'Xiaomi', 'xiaomi', '2020-09-17 19:16:14', '2020-09-17 19:16:14'),
(14, 'Huawei', 'huawei', '2020-09-17 19:16:20', '2020-09-17 19:16:20'),
(15, 'Oppo', 'oppo', '2020-09-17 19:16:29', '2020-09-17 19:16:29'),
(18, 'Bakery', 'bakery', '2020-09-17 19:21:11', '2020-09-17 19:21:11'),
(19, 'ABC', 'abc', '2020-09-17 19:21:16', '2020-09-17 19:21:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_comments`
--

CREATE TABLE `vp_comments` (
  `cmt_id` int(10) UNSIGNED NOT NULL,
  `prod_id` int(10) UNSIGNED NOT NULL,
  `cmt_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmt_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmt_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_comments`
--

INSERT INTO `vp_comments` (`cmt_id`, `prod_id`, `cmt_username`, `cmt_email`, `cmt_content`, `created_at`, `updated_at`) VALUES
(1, 21, 'Tommr', 'tommr@gmail.com', 'Sản phẩm đẹp quá <3.', '2020-09-27 22:51:23', '2020-09-27 22:51:23'),
(2, 21, 'Quang GVN', 'giapvanngocquang@gmail.com', 'Sản phẩm còn hàng không vậy?', '2020-09-27 23:00:02', '2020-09-27 23:00:02'),
(5, 21, 'admin', 'admin@gmail.com', 'test 1', '2020-09-27 23:03:20', '2020-09-27 23:03:20'),
(6, 21, 'admin', 'admin@gmail.com', 'test 2', '2020-09-27 23:03:39', '2020-09-27 23:03:39'),
(7, 21, 'admin', 'admin@gmail.com', 'test 3', '2020-09-28 22:20:56', '2020-09-28 22:20:56'),
(8, 21, 'Quang', 'attacsdker@gmail.com', 'Shop có hàng like new không ạ ?', '2020-09-28 22:21:40', '2020-09-28 22:21:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_products`
--

CREATE TABLE `vp_products` (
  `prod_id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `prod_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_accessories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_warranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_promotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_instock` tinyint(1) NOT NULL,
  `prod_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_featured` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `prod_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_products`
--

INSERT INTO `vp_products` (`prod_id`, `cate_id`, `prod_name`, `prod_price`, `prod_picture`, `prod_accessories`, `prod_warranty`, `prod_promotion`, `prod_status`, `prod_instock`, `prod_description`, `prod_featured`, `created_at`, `updated_at`, `prod_slug`) VALUES
(1, 1, 'Apple iPhone 7 Plus 32Gb Chính hãng VN/A', 9500000, 'iPhone-7-plus-jetback.png', 'Fullbox', '12 tháng', '10%', 'Like new', 1, '<p>Sản phẩm ch&iacute;nh h&atilde;ng <strong>Apple</strong>, một đổi một <strong>30</strong> ng&agrave;y đầu sử dụng. Ph&aacute;t hiện <u>fake</u> đền gấp 10.</p>', 0, '2020-09-21 23:26:40', '2020-09-24 22:58:47', ''),
(2, 1, 'IPhone 11 Pro 256GB', 27190000, 'iphone-11-pro-256gb-black-400x400.jpg', 'Fullbox', '24 tháng', '10%', 'New', 1, '<p>Điện thoại hot nhất thị trường hiện nay. Với rất nhiều điểm nổi bật.</p>', 1, '2020-09-21 23:31:53', '2020-09-21 23:31:53', 'iphone-11-pro-256gb'),
(3, 1, 'Apple iPhone 11 64 GB - New', 14990000, 'thumb_iP11_7.jpg', 'Fullbox', 'Bảo hành 12 tháng', '10%', 'New', 1, '<p>M&aacute;y mới 100% chưa active, nguy&ecirc;n seal hộp, phụ kiện: sạc c&aacute;p, tai nghe, đủ 365 ng&agrave;y bảo h&agrave;nh tr&ecirc;n hệ thống Apple. bản 2sim vật l&yacute; thị trường CH/A.</p>', 1, '2020-09-23 14:21:20', '2020-09-23 14:21:20', 'apple-iphone-11-64-gb-new'),
(4, 2, 'Samsung Galaxy Note 20 Ultra 5G', 24100000, 'thumb_Note20_Ultra5G.jpg', 'Fullbox', '24 tháng', '5%', 'New', 1, '<p>M&aacute;y mới nguy&ecirc;n seal, IMEI tr&ugrave;ng hộp. Bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, bao test 30 ng&agrave;y</p>', 1, '2020-09-23 14:36:52', '2020-09-23 14:36:52', 'samsung-galaxy-note-20-ultra-5g'),
(5, 2, 'Samsung Galaxy A21s chính hãng', 3850000, 'thumb_A21s-1.jpg', 'Cáp, củ, sạc và tai nghe', '12 tháng', '20%', 'New', 0, '<p>M&aacute;y mới nguy&ecirc;n seal,<span style=\"color:#c0392b\"> IMEI tr&ugrave;ng hộp</span>. Bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, bao test 30 ng&agrave;y</p>', 0, '2020-09-23 14:41:02', '2020-09-23 14:41:02', 'samsung-galaxy-a21s-chinh-hang'),
(6, 2, 'Samsung Galaxy Note 10 Lite Chính hãng', 10900000, 'thumb_Note10_L_3.jpg', 'Fullbox', '12 tháng', '10%', 'New', 1, '<p>M&aacute;y mới nguy&ecirc;n seal, IMEI tr&ugrave;ng hộp. Bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, bao test 30 ng&agrave;y</p>', 0, '2020-09-23 14:42:40', '2020-09-23 14:42:40', 'samsung-galaxy-note-10-lite-chinh-hang'),
(7, 2, 'Samsung Galaxy A51 Hàng Công Ty', 5890000, 'thumb_A51_1.jpg', 'Fullbox', '12 tháng', '10%', 'New', 0, '<p>M&aacute;y mới nguy&ecirc;n seal, IMEI tr&ugrave;ng hộp. Bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, bao test 30 ng&agrave;y</p>', 0, '2020-09-23 14:44:50', '2020-09-23 14:44:50', 'samsung-galaxy-a51-hang-cong-ty'),
(8, 13, 'Xiaomi Redmi 9C Chính hãng Ram 2G 32GB', 2350000, 'thumb_RM9C-1.jpg', 'Fullbox', '12 tháng', '10%', 'New', 1, '<p>M&aacute;y Mới 100% Nguy&ecirc;n Seal Hộp Ch&iacute;nh H&atilde;ng Xiaomi .<strong>Redmi 9C c&oacute; gi&aacute; rẻ nhưng ho&agrave;n thiện kh&ocirc;ng hề cho cảm gi&aacute;c rẻ tiền</strong>.</p>\r\n\r\n<p>&nbsp;</p>', 0, '2020-09-23 18:50:18', '2020-09-24 23:07:08', ''),
(9, 1, 'Apple iPhone XR Lock 64GB cũ 99%', 8590000, 'apple-iphone-xr-cam.png', 'Cáp, củ, sạc và tai nghe', '6 tháng', '20%', 'Like new', 0, '<p>M&aacute;y Lock cũ nguy&ecirc;n bản, chưa sửa chữa h&igrave;nh thức đẹp 99% như mới. Tặng k&egrave;m sim gh&eacute;p khi mua</p>', 0, '2020-09-23 19:21:48', '2020-09-23 19:21:48', 'apple-iphone-xr-lock-64gb-cu-99'),
(10, 1, 'iPhone 6S Lock 32GB Mới trần ( Còn BH Apple)', 2590000, 'iPhone-6s-vang-hong.png', 'Cáp, củ, sạc và tai nghe', '6 tháng', '20%', 'Like new', 1, '<p>M&aacute;y lock, mới active được v&agrave;i ng&agrave;y. M&aacute;y c&oacute; thể free unlock l&ecirc;n quốc tế sau 6 th&aacute;ng sử dụng.</p>', 0, '2020-09-23 19:23:09', '2020-09-23 19:23:09', 'iphone-6s-lock-32gb-moi-tran-con-bh-apple'),
(11, 1, 'Apple iPhone 8 Lock 64GB cũ 99%', 4890000, 'thumbiP8-1.jpg', 'Cáp, củ, sạc và tai nghe', '6 tháng', '20%', 'Like new', 0, '<p>M&aacute;y cũ nguy&ecirc;n bản, chưa sửa chữa h&igrave;nh thức đẹp 99% như mới.</p>', 0, '2020-09-23 19:25:17', '2020-09-23 19:25:17', 'apple-iphone-8-lock-64gb-cu-99'),
(13, 1, 'Apple iPhone 11 Pro MAX 256GB cũ 99%', 21590000, 'thumb_11-ProMAX_2.jpg', 'Fullbox', '24 tháng', '10%', 'Like new', 1, '<p>Sản phẩm ch&iacute;nh h&atilde;ng Apple, l&agrave; d&ograve;ng sản phẩm mới nhất của Apple với thiết kế 3 cammera sang chảnh.</p>', 1, '2020-09-24 23:06:03', '2020-09-24 23:06:03', 'apple-iphone-11-pro-max-256gb-cu-99'),
(14, 6, 'BPhone 3 Pro Limeted (Chính hãng)', 8990000, 'bphone-3-pro-den.png', 'Fullbox', '12 tháng', '5%', 'New', 1, '<p>M&aacute;y mới nguy&ecirc;n hộp, bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, đổi mới 30 ng&agrave;y</p>', 1, '2020-09-26 11:45:53', '2020-09-26 11:45:53', 'bphone-3-pro-limeted-chinh-hang'),
(15, 6, 'BPhone 3 Pro (Chính hãng)', 8490000, 'bphone-3-pro-den.png', 'Fullbox', '12 tháng', '5%', 'New', 1, '<p>M&aacute;y mới nguy&ecirc;n hộp, bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, đổi mới 30 ng&agrave;y</p>', 1, '2020-09-26 11:47:43', '2020-09-26 11:47:43', 'bphone-3-pro-chinh-hang'),
(16, 6, 'BPhone 3 (Chính hãng)', 5990000, 'bphone-3-den.png', 'Fullbox', '12 tháng', '10%', 'New', 1, '<p>M&aacute;y mới nguy&ecirc;n hộp, bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, đổi mới 30 ng&agrave;y</p>', 0, '2020-09-26 11:49:29', '2020-09-27 08:38:33', 'bphone-3-chinh-hang'),
(17, 2, 'Samsung Galaxy M21 Chính hãng', 4290000, 'thumbM21-1.jpg', 'Fullbox', '12 tháng', '10%', 'New', 1, '<p>M&aacute;y mới nguy&ecirc;n seal, IMEI tr&ugrave;ng hộp. Bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, bao test 30 ng&agrave;y</p>', 1, '2020-09-26 11:51:36', '2020-09-26 11:51:36', 'samsung-galaxy-m21-chinh-hang'),
(18, 2, 'Samsung Galaxy S20 Ultra Chính hãng', 22790000, 'thumb_S20Ultra_2.jpg', 'Fullbox', '24 tháng', '5%', 'New', 1, '<p>M&aacute;y mới nguy&ecirc;n seal, IMEI tr&ugrave;ng hộp. Bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, bao test 30 ng&agrave;y</p>', 1, '2020-09-26 11:53:02', '2020-09-26 11:53:02', 'samsung-galaxy-s20-ultra-chinh-hang'),
(19, 2, 'Samsung Galaxy A30s Công ty', 3990000, 'thumb_A30s-2.jpg', 'Fullbox', '12 tháng', '30%', 'New', 1, '<p>M&aacute;y mới nguy&ecirc;n seal, IMEI tr&ugrave;ng hộp. Bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, bao test 30 ng&agrave;y</p>', 1, '2020-09-26 11:54:33', '2020-09-26 11:54:33', 'samsung-galaxy-a30s-cong-ty'),
(20, 2, 'Samsung Galaxy A50s Công ty', 5490000, 'thumb-A50s-3.jpg', 'Fullbox', '12 tháng', '20%', 'New', 1, '<p>M&aacute;y mới nguy&ecirc;n seal, IMEI tr&ugrave;ng hộp. Bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, bao test 30 ng&agrave;y</p>', 0, '2020-09-26 11:55:41', '2020-09-26 11:55:41', 'samsung-galaxy-a50s-cong-ty'),
(21, 2, 'Samsung Galaxy S20 Chính hãng', 14990000, 'thumb_S20_demo_3.jpg', 'Fullbox', '12 tháng', '10%', 'New', 1, '<p>M&aacute;y mới nguy&ecirc;n seal, IMEI tr&ugrave;ng hộp. Bảo h&agrave;nh ch&iacute;nh h&atilde;ng 12 th&aacute;ng, bao test 30 ng&agrave;y</p>', 1, '2020-09-26 11:57:03', '2020-09-27 02:37:57', 'samsung-galaxy-s20-chinh-hang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vp_users`
--

CREATE TABLE `vp_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vp_users`
--

INSERT INTO `vp_users` (`id`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vpro@gmail.com', '$2y$10$Ve.oZObI0NtKm4M/6/0A1.LZu031TF2rbv5emQZMLUbVRaNxXrgJK', 1, NULL, '2020-09-15 23:06:49', '2020-09-15 23:06:49'),
(2, 'admin@gmail.com', '$2y$10$KqEmDhm0VJ2YZFLNNJjpN.REfEd5XHSf7g2WSIPLxaKKvFqCgzePe', 1, 'Ifep9UVaXVtC6tDygV56YJhaMMGGiuSZiGb2a0fU571dY3SAdqaF5xPy01qY', '2020-09-15 23:06:49', '2020-09-15 23:06:49');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `vp_categories`
--
ALTER TABLE `vp_categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Chỉ mục cho bảng `vp_comments`
--
ALTER TABLE `vp_comments`
  ADD PRIMARY KEY (`cmt_id`),
  ADD KEY `vp_comments_prod_id_foreign` (`prod_id`);

--
-- Chỉ mục cho bảng `vp_products`
--
ALTER TABLE `vp_products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `vp_products_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `vp_users`
--
ALTER TABLE `vp_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `vp_categories`
--
ALTER TABLE `vp_categories`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT cho bảng `vp_comments`
--
ALTER TABLE `vp_comments`
  MODIFY `cmt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `vp_products`
--
ALTER TABLE `vp_products`
  MODIFY `prod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT cho bảng `vp_users`
--
ALTER TABLE `vp_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `vp_comments`
--
ALTER TABLE `vp_comments`
  ADD CONSTRAINT `vp_comments_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `vp_products` (`prod_id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `vp_products`
--
ALTER TABLE `vp_products`
  ADD CONSTRAINT `vp_products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `vp_categories` (`cate_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
