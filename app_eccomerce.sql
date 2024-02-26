-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 08:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_eccomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2024_02_23_145603_create_produk_table', 1),
(16, '2024_02_24_110217_add_column_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `gambar3` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `harga`, `kategori`, `gambar1`, `gambar2`, `gambar3`, `stok`) VALUES
(1, 'Nike Air Force', 'Nike Air Force adalah sebuah sepatu ikonik yang telah menjadi bagian integral dari budaya sneaker selama beberapa dekade. Dikenal karena desainnya yang klasik dan serbaguna, sepatu ini menampilkan siluet rendah dengan sol karet tebal yang memberikan kenyamanan dan daya tahan. ', 1050000.00, 'Sepatu', 'global/image/nikeaf1.jpeg', 'global/image/nikeaf2.jpeg', 'global/image/nikeaf3.jpeg', 17),
(2, 'Adidas Stan Smith', 'Adidas Stan Smith adalah sepatu klasik yang terkenal dengan desainnya yang bersih, sederhana, dan elegan. Sepatu ini dinamai dari pemain tenis legendaris, Stan Smith, dan telah menjadi salah satu ikon dalam dunia sneaker fashion', 1050000.00, 'Sepatu', 'global/image/smith1.jpeg', 'global/image/smith2.jpeg', 'global/image/smith3.jpeg', 17),
(3, 'Nike Dunk Panda', 'Nike Dunk Panda adalah varian spesifik dari Nike Dunk yang menampilkan desain yang menggambarkan tema panda. Sepatu ini biasanya memiliki kombinasi warna hitam dan putih yang meniru pola warna karakteristik panda.', 1000000.00, 'Sepatu', 'global/image/nikedp1.jpeg', 'global/image/nikedp2.jpeg', 'global/image/nikidp3.jpeg', 10),
(4, 'Adidas Samba', 'Adidas Samba adalah sepatu olahraga yang awalnya dirancang sebagai sepatu sepak bola, tetapi kemudian menjadi populer di luar lapangan olahraga dan berkembang menjadi salah satu ikon dalam dunia fashion kasual..', 1000000.00, 'Sepatu', 'global/image/samba1.jpeg', 'global/image/samba2.jpeg', 'global/image/samba3.jpeg', 17),
(5, 'Rolex GMT Master', 'Rolex GMT Master adalah koleksi jam tangan mewah dari merek Rolex yang sangat terkenal. Model ini dirancang khusus untuk keperluan penerbangan dan perjalanan lintas zona waktu.', 1000000.00, 'Jam Tangan', 'global/image/rolex1.jpeg', 'global/image/rolex2.jpeg', 'global/image/rolex3.jpeg', 17),
(6, 'Casio G-Shock DW 5600', 'DW-5600 memiliki desain klasik dengan bentuk kotak dan tampilan digital.', 1000000.00, 'Jam Tangan', 'global/image/gshock1.jpeg', 'global/image/gshock2.jpeg', 'global/image/gshock3.jpeg', 7),
(7, 'Unisex Polarized Sunglasses - Black', 'Kacamata hitam polarized uniseks adalah aksesori yang serbaguna dan stylish yang memberikan perlindungan mata sekaligus memberikan tampilan estetika yang klasik.', 50000.00, 'Kacamata', 'global/image/kacamata1.jpeg', 'global/image/kacamata2.jpeg', 'global/image/kacamata3.jpeg', 7),
(8, 'Topi Balenciaga', 'Topi Balenciaga hitam adalah aksesori fashion yang mencerminkan keanggunan dan gaya dari merek mewah Balenciaga.', 50000.00, 'Topi', 'global/image/topiblc1.jpeg', 'global/image/topiblc2.jpeg', 'global/image/topiblc3.jpeg', 7),
(9, 'Topi New Balace', 'Topi New Balance adalah aksesori gaya yang mencerminkan gaya santai dan sporty yang sering terkait dengan merek olahraga New Balance.', 250000.00, 'Topi', 'global/image/topinb1.jpeg', 'global/image/topinb2.jpeg', 'global/image/topinb3.jpeg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Hp` varchar(15) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `Hp`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@gmail.com', '089776387423', NULL, '$2y$10$dCvcaIAbwX3VyyorbPq/guA.6twGjwFnu4CWyeDTQtGYQF/PyfIB6', 'user', NULL, '2024-02-24 04:33:22', '2024-02-24 04:33:22'),
(2, 'Admin', 'admin@gmail.com', '028938279', NULL, '$2y$10$19gcfoceSEij.tBQrmskbuG5HGhg8wViIpFhcsuatXKcXxvyGylK.', 'admin', NULL, '2024-02-24 04:33:22', '2024-02-24 04:33:22'),
(3, 'qwerty', 'qwerty@gmail.com', '0231561783', '2024-02-28 14:37:03', 'qwerty', 'admin', NULL, NULL, NULL),
(5, 'admin', 'admin2@gmail.com', '03523324523', NULL, '$2y$10$iWNInCKNY1twko0vlawgL.wnI4YwOp2fggcsnW4UsFzWHNn8YYgu.', 'user', NULL, '2024-02-25 00:13:42', '2024-02-25 00:13:42'),
(6, 'arif', 'arif123@gmail.com', '023452345', NULL, 'arif12345', 'user', NULL, '2024-02-25 03:29:15', '2024-02-25 03:29:15'),
(87617367136, 'admin1@gmail.com', 'admin1@gmail.com', '078923534', NULL, '$2y$10$I4bDztJnb4zcYk1ECt4.r.4gmcwC2eaXS.qrrOVVxXRAHPAX.hJB6', 'user', NULL, '2024-02-24 22:57:31', '2024-02-24 22:57:31'),
(87617367138, 'apakah', 'apakah@gmail.com', '09876515', NULL, '$2y$10$359ciYiYVJHLFloUlkQ0G.MV5otmcR4yd2gmyTWfPGTUil4WCrpOm', 'user', NULL, '2024-02-25 15:59:05', '2024-02-25 15:59:05');

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87617367139;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
