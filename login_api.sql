-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 05:46 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_09_134129_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uploadfile`
--

CREATE TABLE `uploadfile` (
  `fileID` int(5) NOT NULL,
  `fileupload` varchar(200) CHARACTER SET utf8 NOT NULL,
  `dateup` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadfile`
--

INSERT INTO `uploadfile` (`fileID`, `fileupload`, `dateup`) VALUES
(3, 'froy170161132205822.png', '2021-01-22 13:27:38'),
(4, 'froy170161132211722.png', '2021-01-22 13:28:37'),
(5, 'tt40161139374788.png', '2021-01-23 09:22:27'),
(6, 'tt401611393830highmaps-basic-demo.png', '2021-01-23 09:23:50'),
(7, 'tt401611395147javascript.png', '2021-01-23 09:45:47'),
(8, 'tt401611395157picture.png', '2021-01-23 09:45:57'),
(9, 'tt4016113965121.png', '2021-01-23 10:08:32'),
(10, 'tt411611396512Untitled Diagram.jpg', '2021-01-23 10:08:32'),
(11, 'tt431611396512app-icon-1024x1024.png', '2021-01-23 10:08:32'),
(12, 'tt441611396513computer.png', '2021-01-23 10:08:33'),
(13, 'tt45161139651313954.png', '2021-01-23 10:08:33'),
(14, 'tt421611396513Untitled Diagram (1) (1).png', '2021-01-23 10:08:33'),
(15, 'tt401611396574Canvas (1).png', '2021-01-23 10:09:34'),
(16, 'tt411611396574Canvas (2).png', '2021-01-23 10:09:34'),
(17, 'tt421611396575Canvas.png', '2021-01-23 10:09:35'),
(18, 'tt431611396575picture.png', '2021-01-23 10:09:35'),
(19, 'froy1701611409759Canvas (3).png', '2021-01-23 13:49:19'),
(20, 'froy1701611409771app-icon-1024x1024.png', '2021-01-23 13:49:31'),
(21, 'froy1711611409772Why-You-Should-Choose-Custom-Web-Development-Over-Website-Template-4.png', '2021-01-23 13:49:32'),
(22, 'froy172161140977288.png', '2021-01-23 13:49:32'),
(23, 'froy1731611409772javascript.png', '2021-01-23 13:49:32'),
(24, 'froy1741611409773php.png', '2021-01-23 13:49:33'),
(25, 'froy1751611409773cbimage (3).jpg', '2021-01-23 13:49:33'),
(26, 'froy1761611409773Canvas (3).png', '2021-01-23 13:49:33'),
(27, 'froy1771611409774cbimage (1).jpg', '2021-01-23 13:49:34'),
(28, 'froy1781611409774cbimage (2).jpg', '2021-01-23 13:49:34'),
(29, 'froy1791611409775cbimage.jpg', '2021-01-23 13:49:35'),
(30, 'froy1711611409834136669361_427177775386723_4760694191766239376_n.jpg', '2021-01-23 13:50:34'),
(31, 'froy1721611409835137234202_1421912494867320_7337686486777103509_n.jpg', '2021-01-23 13:50:35'),
(32, 'froy173161140983533.jpg', '2021-01-23 13:50:35'),
(33, 'froy174161140983655.jpg', '2021-01-23 13:50:36'),
(34, 'froy1751611409836119415071_328307731584498_8430531860855158971_n.jpg', '2021-01-23 13:50:36'),
(35, 'froy1761611409836130103427_1808062972696377_7554581421985902613_n.jpg', '2021-01-23 13:50:37'),
(36, 'froy178161140983711-119002_programming-vector-website-development-web-development-images-png.png', '2021-01-23 13:50:37'),
(37, 'froy17716114098371.png', '2021-01-23 13:50:37'),
(38, 'froy1791611409838ดาวน์โหลด.png', '2021-01-23 13:50:38'),
(39, 'froy17101611409838—Pngtree—hourglass money_1171116.png', '2021-01-23 13:50:38'),
(40, 'froy17111611409838137349739_474057007338291_6032227733162429560_n.jpg', '2021-01-23 13:50:38'),
(41, 'froy17121611409839bonus.png', '2021-01-23 13:50:39'),
(42, 'froy17131611409839app-icon-1024x1024.png', '2021-01-23 13:50:39'),
(43, 'froy17141611409840scholarship.png', '2021-01-23 13:50:40'),
(44, 'froy1701611409840113680539_1390693601140957_7031983412743080351_n.jpg', '2021-01-23 13:50:40'),
(45, 'froy17151611409841home.png', '2021-01-23 13:50:41'),
(46, 'froy1721611409861สาขาและศูนย์บริการ.jpg', '2021-01-23 13:51:01'),
(47, 'froy1711611409862สถานะออเดอร์.jpg', '2021-01-23 13:51:02'),
(48, 'froy1701611409862113680539_1390693601140957_7031983412743080351_n.jpg', '2021-01-23 13:51:02'),
(49, 'froy1741611409862หน้าแรก.jpg', '2021-01-23 13:51:02'),
(50, 'froy1751611409863136669361_427177775386723_4760694191766239376_n.jpg', '2021-01-23 13:51:03'),
(51, 'froy1761611409863137206775_227160232289582_6036398026015743870_n.jpg', '2021-01-23 13:51:03'),
(52, 'froy177161140986313954.jpg', '2021-01-23 13:51:04'),
(53, 'froy178161140986444.jpg', '2021-01-23 13:51:04'),
(54, 'froy1731611409864รายการเมนู.jpg', '2021-01-23 13:51:04'),
(55, 'froy170161140998788.png', '2021-01-23 13:53:07'),
(56, 'froy1711611409988javascript.png', '2021-01-23 13:53:08'),
(57, 'froy1721611409988php.png', '2021-01-23 13:53:08'),
(58, 'froy1731611409988cbimage (3).jpg', '2021-01-23 13:53:08'),
(59, 'froy1741611409989Canvas (4).png', '2021-01-23 13:53:09'),
(60, 'froy1751611409989Canvas (3).png', '2021-01-23 13:53:09'),
(61, 'froy1761611409989cbimage (1).jpg', '2021-01-23 13:53:09'),
(62, 'froy1771611409990cbimage (2).jpg', '2021-01-23 13:53:10'),
(63, 'froy1781611409990cbimage.jpg', '2021-01-23 13:53:10'),
(64, 'froy1791611409991chart.png', '2021-01-23 13:53:11'),
(65, 'froy1701611410617web-programming.png', '2021-01-23 14:03:37'),
(66, 'froy1711611410617picture (1).png', '2021-01-23 14:03:37'),
(67, 'froy1721611410618html-5.png', '2021-01-23 14:03:38'),
(68, 'froy1741611410618chart (1).png', '2021-01-23 14:03:38'),
(69, 'froy1731611410619css (1).png', '2021-01-23 14:03:39'),
(70, 'froy175161141061988.png', '2021-01-23 14:03:39'),
(71, 'froy1761611410619laptop.png', '2021-01-23 14:03:39'),
(72, 'froy1771611410620Canvas (1).png', '2021-01-23 14:03:40'),
(73, 'froy1781611410620Canvas (2).png', '2021-01-23 14:03:40'),
(74, 'froy1791611410620Canvas.png', '2021-01-23 14:03:40'),
(75, 'froy17101611410621picture.png', '2021-01-23 14:03:41'),
(76, 'froy17111611410621Canvas (3).png', '2021-01-23 14:03:41'),
(77, 'froy17121611410621Ellipse 2.png', '2021-01-23 14:03:42'),
(78, 'tt401611416953หน้าแรก.jpg', '2021-01-23 15:49:13'),
(79, 'tt421611416953หน้าแรก.jpg', '2021-01-23 15:49:13'),
(80, 'tt411611416953รายการเมนู.jpg', '2021-01-23 15:49:13'),
(81, 'tt431611416953136669361_427177775386723_4760694191766239376_n.jpg', '2021-01-23 15:49:13'),
(82, 'tt441611416953137206775_227160232289582_6036398026015743870_n.jpg', '2021-01-23 15:49:13'),
(83, 'tt45161141695313954.jpg', '2021-01-23 15:49:13'),
(84, 'tt46161141695444.jpg', '2021-01-23 15:49:14'),
(85, 'tt401611418507130103427_1808062972696377_7554581421985902613_n.jpg', '2021-01-23 16:15:07'),
(86, 'tt401611418549app-icon-1024x1024.png', '2021-01-23 16:15:49'),
(87, 'tt421611418549app-icon-1024x1024.png', '2021-01-23 16:15:49'),
(88, 'tt41161141854944.jpg', '2021-01-23 16:15:49'),
(89, 'tt401611418654119415071_328307731584498_8430531860855158971_n.jpg', '2021-01-23 16:17:34'),
(90, 'tt411611418655130103427_1808062972696377_7554581421985902613_n.jpg', '2021-01-23 16:17:35'),
(91, 'tt421611418655137349739_474057007338291_6032227733162429560_n.jpg', '2021-01-23 16:17:35'),
(92, 'tt431611418655bonus.png', '2021-01-23 16:17:35'),
(93, 'anuchit1501611429400picture (1).png', '2021-01-23 19:16:40'),
(94, 'anuchit1511611429400html-5.png', '2021-01-23 19:16:40'),
(95, 'anuchit1521611429401css (1).png', '2021-01-23 19:16:41'),
(96, 'anuchit1531611429401chart (1).png', '2021-01-23 19:16:41'),
(97, 'anuchit154161142940188.png', '2021-01-23 19:16:41'),
(98, 'anuchit1551611429401Canvas (1).png', '2021-01-23 19:16:41'),
(99, 'anuchit1561611429401Canvas (2).png', '2021-01-23 19:16:41'),
(100, 'anuchit1571611429401Canvas.png', '2021-01-23 19:16:41'),
(101, 'anuchit1591611429401picture.png', '2021-01-23 19:16:41'),
(102, 'anuchit1581611429401ดาวน์โหลด (1).png', '2021-01-23 19:16:42'),
(103, 'anuchit15101611429402Ellipse 2.png', '2021-01-23 19:16:42'),
(104, 'anuchit1501611429517119415071_328307731584498_8430531860855158971_n.jpg', '2021-01-23 19:18:37'),
(105, 'anuchit1511611429517130103427_1808062972696377_7554581421985902613_n.jpg', '2021-01-23 19:18:37'),
(106, 'anuchit15216114295171.png', '2021-01-23 19:18:37'),
(107, 'tt411611509696หน้าแรก.jpg', '2021-01-24 17:34:56'),
(108, 'tt421611509696136669361_427177775386723_4760694191766239376_n.jpg', '2021-01-24 17:34:56'),
(109, 'tt431611509696137206775_227160232289582_6036398026015743870_n.jpg', '2021-01-24 17:34:56'),
(110, 'tt44161150969613954.jpg', '2021-01-24 17:34:56'),
(111, 'tt401611509696รายการเมนู.jpg', '2021-01-24 17:34:56'),
(112, 'tt431611574363computer.png', '2021-01-25 11:32:43'),
(113, 'tt44161157436313954.png', '2021-01-25 11:32:43'),
(114, 'tt411611574363Untitled Diagram.jpg', '2021-01-25 11:32:43'),
(115, 'tt421611574364Untitled Diagram (1) (1).png', '2021-01-25 11:32:44'),
(116, 'tt401611574364137206775_227160232289582_6036398026015743870_n.jpg', '2021-01-25 11:32:44'),
(117, 'tt401611574388bonus.png', '2021-01-25 11:33:09'),
(118, 'tt401611587701web-programming.png', '2021-01-25 15:15:01'),
(119, 'tt411611587701picture (1).png', '2021-01-25 15:15:01'),
(120, 'tt421611587701html-5.png', '2021-01-25 15:15:01'),
(121, 'tt431611587701css (1).png', '2021-01-25 15:15:01'),
(122, 'tt441611587701chart (1).png', '2021-01-25 15:15:01'),
(123, 'tt45161158770188.png', '2021-01-25 15:15:01'),
(124, 'tt461611587701javascript.png', '2021-01-25 15:15:01'),
(125, 'tt471611587702php.png', '2021-01-25 15:15:02'),
(126, 'tt481611587702cbimage (3).jpg', '2021-01-25 15:15:02'),
(127, 'tt4101611587702laptop.png', '2021-01-25 15:15:02'),
(128, 'tt491611587702Canvas (4).png', '2021-01-25 15:15:02'),
(129, 'tt4111611587702Canvas (1).png', '2021-01-25 15:15:02'),
(130, 'tt4121611587702Canvas (2).png', '2021-01-25 15:15:02'),
(131, 'tt4131611587702Canvas.png', '2021-01-25 15:15:02'),
(132, 'tt4141611587703ดาวน์โหลด (1).png', '2021-01-25 15:15:03'),
(133, 'tt4151611587703picture.png', '2021-01-25 15:15:03'),
(134, 'tt4161611587703Canvas (3).png', '2021-01-25 15:15:03'),
(135, 'tt4171611587703cbimage (1).jpg', '2021-01-25 15:15:03'),
(136, 'tt4181611587703cbimage (2).jpg', '2021-01-25 15:15:03'),
(137, 'tt4191611587703cbimage.jpg', '2021-01-25 15:15:03'),
(138, 'tt4201611587703chart.png', '2021-01-25 15:15:03'),
(139, 'tt4211611587703Ellipse 2.png', '2021-01-25 15:15:03'),
(140, 'tt401611590214137234202_1421912494867320_7337686486777103509_n.jpg', '2021-01-25 15:56:54'),
(141, 'tt41161159021433.jpg', '2021-01-25 15:56:54'),
(142, 'tt42161159021455.jpg', '2021-01-25 15:56:54'),
(143, 'tt431611590214119415071_328307731584498_8430531860855158971_n.jpg', '2021-01-25 15:56:54'),
(144, 'tt471611590215ดาวน์โหลด.png', '2021-01-25 15:56:55'),
(145, 'tt441611590215130103427_1808062972696377_7554581421985902613_n.jpg', '2021-01-25 15:56:55'),
(146, 'tt4516115902151.png', '2021-01-25 15:56:55'),
(147, 'tt481611590215—Pngtree—hourglass money_1171116.png', '2021-01-25 15:56:55'),
(148, 'tt46161159021511-119002_programming-vector-website-development-web-development-images-png.png', '2021-01-25 15:56:55'),
(149, 'tt491611590215137349739_474057007338291_6032227733162429560_n.jpg', '2021-01-25 15:56:55'),
(150, 'tt4101611590215bonus.png', '2021-01-25 15:56:55'),
(151, 'tt4111611590215app-icon-1024x1024.png', '2021-01-25 15:56:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `accessToken` varchar(255) DEFAULT NULL,
  `refreshToken` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `title`, `accessToken`, `refreshToken`) VALUES
(4, 'tt', '123', 'admin', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6NCwidXNlciI6InR0IiwidGl0bGUiOiJhZG1pbiIsImlhdCI6MTYxMTU5MDE4MSwiZXhwIjoxNjEyNDkwMTgxfQ.VDJF46i_teSoKCzFAcwBv7tnpGVdJ7hflmrcBY_hc_0', ''),
(15, 'anuchit', '123456789', 'admin', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MTUsInVzZXIiOiJhbnVjaGl0IiwidGl0bGUiOiJhZG1pbiIsImlhdCI6MTYxMTQ2MTE5OCwiZXhwIjoxNjEyMzYxMTk4fQ._7QG0ZBixe6Jf7ZZKr_9GBRNUtE6QcxLFcfQ5sWSQWw', ''),
(17, 'froy', '1', 'admin', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6MTcsInVzZXIiOiJmcm95IiwidGl0bGUiOiJhZG1pbiIsImlhdCI6MTYxMTUwMTYzOSwiZXhwIjoxNjEyNDAxNjM5fQ.8SHFMSrBJ14gK8jsM2o5YDwsCIh6hhAzuEBig3x3f8Q', NULL),
(18, 'toei', '1', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `uploadfile`
--
ALTER TABLE `uploadfile`
  ADD PRIMARY KEY (`fileID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uploadfile`
--
ALTER TABLE `uploadfile`
  MODIFY `fileID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
