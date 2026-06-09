-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2026 at 05:21 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catatan_harian`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` int NOT NULL,
  `id_user` int NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_catatan` text NOT NULL,
  `mood` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` enum('aktif','arsip','hapus') DEFAULT 'aktif',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `id_user`, `judul`, `isi_catatan`, `mood`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Android', 'belajar perangkat lunak', 'senang', '2026-05-22', 'aktif', '2026-05-29 02:32:40', '2026-05-29 02:38:17'),
(8, 7, 'Busjosdh', 'cuuuuuuunt', '😡 Marah', '2026-06-03', 'hapus', '2026-06-03 04:55:20', '2026-06-03 05:07:53'),
(9, 7, 'dejifh', 'dffdefjghyfgfgfgfgfgfg', ' Biasa', '2026-06-03', 'hapus', '2026-06-03 05:05:13', '2026-06-03 05:29:02'),
(10, 7, 'dfhgh', 'dthsth', '😊 Senang', '2026-06-03', 'hapus', '2026-06-03 05:24:35', '2026-06-03 05:29:01'),
(11, 7, 'sdtyh', 'sdtyh', '😊 Senang', '2026-06-03', 'hapus', '2026-06-03 05:24:40', '2026-06-03 05:29:04'),
(12, 7, 'tzs', 'sdhgndcjiyhfuuhdljkhf', ' Marah', '2026-06-03', 'hapus', '2026-06-03 05:24:45', '2026-06-03 05:29:06'),
(13, 7, 'ry7tegfygygyg', 'monyet', '😊 Senang', '2026-06-03', 'hapus', '2026-06-03 05:24:56', '2026-06-03 05:29:08'),
(14, 7, 'belajar ngoding', 'hoooorrreeeee!!!!!', ' Senang', '2026-06-03', 'aktif', '2026-06-03 05:29:45', '2026-06-03 05:29:45'),
(15, 4, 'alahhh siah boyy', 'begitulah', ' Biasa', '2026-06-03', 'hapus', '2026-06-03 06:25:22', '2026-06-03 06:25:31'),
(16, 4, 'alahhh siah boyy', 'nyenyenye', ' Senang', '2026-06-03', 'hapus', '2026-06-03 06:27:41', '2026-06-03 06:27:48'),
(17, 4, 'ya allah ', 'lailahailallah', ' Biasa', '2026-06-04', 'hapus', '2026-06-04 04:02:57', '2026-06-04 04:32:04'),
(18, 13, 'tdfhdt', 'thdt', ' Senang', '2026-06-04', 'hapus', '2026-06-04 04:53:30', '2026-06-04 05:27:44'),
(19, 13, ' ]d[opfpdfk', '[pf\r\n', ' Semangat', '2026-06-04', 'hapus', '2026-06-04 04:53:47', '2026-06-04 05:26:06'),
(20, 13, 'Mimpi ke sekian', 'Aku terbangun di sebuah kapal yang sudah terbengkalai, lalu aku pergi ke suatu tempat di daerah itu. Setelah saya masuk saya menemukan sebuah tengkorak yang terdapat sebuah peta di tangannya. Saya terbangun dan ternyata itu \"mimpi\" namun, saya terbnagun di kapal yang sama dan tempat yang sama.', ' Senang', '2026-06-04', 'hapus', '2026-06-04 04:58:27', '2026-06-04 05:26:27'),
(21, 13, 'i\'ve this', 'dunno\r\n', ' Semangat', '2026-06-04', 'hapus', '2026-06-04 05:10:59', '2026-06-04 05:26:30'),
(22, 13, 'my diary gweh', 'si dia adalah pokoknya', ' Semangat', '2026-06-04', 'hapus', '2026-06-04 05:27:12', '2026-06-04 05:50:53'),
(23, 13, 'gatau', 'hahaha', ' Biasa', '2026-06-04', 'hapus', '2026-06-04 05:27:31', '2026-06-04 05:32:30'),
(24, 13, 'begiyulah', 'hahahha', ' Senang', '2026-06-04', 'hapus', '2026-06-04 05:34:36', '2026-06-04 05:35:41'),
(25, 13, 'gatau mau gimanaaaaaa', 'izinnn', ' Senang', '2026-06-04', 'hapus', '2026-06-04 05:34:58', '2026-06-04 05:35:44'),
(26, 13, 'pusinng ahkk', 'hemmm da si eta nu mulai naaaa', ' Senang', '2026-06-04', 'hapus', '2026-06-04 05:35:27', '2026-06-04 05:35:47'),
(27, 13, 'gatau', 'mnh na nu mulai da lamun aing mah heg wae aimng salah, dasar monyet beruk', ' Senang', '2026-06-04', 'hapus', '2026-06-04 05:41:08', '2026-06-04 05:41:21'),
(28, 13, 'hahahha', 'y', ' Senang', '2026-06-04', 'hapus', '2026-06-04 05:50:27', '2026-06-04 05:50:52'),
(29, 13, 'nynynyeee', 'adalahhh', ' Senang', '2026-06-04', 'hapus', '2026-06-04 05:50:45', '2026-06-04 05:50:50'),
(30, 14, 'dear diary gweh ', 'tadi mtk sangat lieur', ' Biasa', '2026-06-05', 'hapus', '2026-06-05 04:05:14', '2026-06-05 04:05:26'),
(31, 4, 'dear diary gweh ', 'adalah pokoknya', ' Biasa', '2026-06-05', 'hapus', '2026-06-05 06:51:19', '2026-06-05 06:53:09'),
(32, 4, 'dear diary gweh ', 'haloooo', ' Biasa', '2026-06-08', 'hapus', '2026-06-08 07:13:05', '2026-06-08 07:24:13'),
(33, 4, 'hawoooo', 'hai semuanyah aku tasyaa senang bertemu dengan kalian', ' Senang', '2026-06-08', 'hapus', '2026-06-08 07:28:42', '2026-06-09 04:21:56'),
(34, 4, 'heyy', 'sekarang kamu apa kabar? apa aku sekarang udah berhasil, berhasil lepas darimu, thanks for everything, time,moment, thank for today, next day and forever.\r\n\r\n-bahasa hate iyeumah', ' Senang', '2026-06-08', 'hapus', '2026-06-08 07:33:32', '2026-06-09 04:21:54'),
(35, 4, 'fgnbdg', 'vvg', ' Bingung', '2026-06-09', 'aktif', '2026-06-09 02:51:38', '2026-06-09 02:51:38'),
(36, 4, 'gatau', 'gatau mau apa intinya adalah pokonya\r\nahahahhaahahah gatau inimah tes tes tes', ' Senang', '2026-06-09', 'aktif', '2026-06-09 04:26:53', '2026-06-09 04:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `catatan_kategori`
--

CREATE TABLE `catatan_kategori` (
  `id_catatan` int NOT NULL,
  `id_kategori` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `catatan_kategori`
--

INSERT INTO `catatan_kategori` (`id_catatan`, `id_kategori`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'programming');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE `lampiran` (
  `id_lampiran` int NOT NULL,
  `id_catatan` int DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `path_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lampiran`
--

INSERT INTO `lampiran` (`id_lampiran`, `id_catatan`, `nama_file`, `path_file`) VALUES
(1, 1, 'catatan1.jpg', 'uploads/catatan1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profil` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `foto_profil`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '123', NULL, '2026-05-29 02:29:44'),
(2, 'cvbh v', '', '$2y$10$//SEhzhmoDKazdbQfYvqmec6LOqnOZzp9mv4NAAXCTU3/8BPEOzba', NULL, '2026-06-03 04:18:15'),
(3, 'ujan', 'ujsn@gmail.com', '$2y$10$d52ObtEhPla2nI5F9wKXF.gMEp8heS4eqMx1YH5xPMXFacLQpdJ56', NULL, '2026-06-03 04:19:08'),
(4, 'natasya', 'natasya@gmail.com', '$2y$10$xzavE2.L7Pc3Hcrjd5QH1eHPgsbRI3JFauqBqcJ.Hc64sPqX8NdfO', '1780978863_disney.jpg', '2026-06-03 04:41:43'),
(7, 'ijj', 'op@gmail.com', '$2y$10$McC8QB63mOS2RlNGYqzSnuW7hsGPnsNKpakUGQ/Wt1zK6Fgy3IgUy', '1780464053_cat.jpg', '2026-06-03 04:51:30'),
(9, 'ujannnn', 'isd@gmail.com', '$2y$10$.X5IvuqVTlu11le3GtA5COHeuyowHkiaUPB90wyBJVf9LBRFKjZee', NULL, '2026-06-03 05:23:28'),
(12, 'hasnaa', 'hasna@gmail.com', '$2y$10$RLny6P5FR0s.TosSAjmQvOj/6dcCwTXQmbxXR5In9oZZAdZV6As8S', NULL, '2026-06-04 03:24:25'),
(13, 'manuk', 'manuk@gmail.com', '$2y$10$6pS95CFK8Ne.dC58nP05aOgzZSPTH0kNQnSd1jGQVQ7Cw7K8.UUYK', '1780548525_sunset.jpg', '2026-06-04 04:47:42'),
(14, 'murid', 'murid@gmail.com', '$2y$10$Pf0dslgX788fClbbfAHkbeSbcspmvL0AZytRlzS9ZvuybftEu/RM.', NULL, '2026-06-05 04:04:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`),
  ADD KEY `fk_catatan_user` (`id_user`);

--
-- Indexes for table `catatan_kategori`
--
ALTER TABLE `catatan_kategori`
  ADD PRIMARY KEY (`id_catatan`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`id_lampiran`),
  ADD KEY `fk_lampiran_catatan` (`id_catatan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lampiran`
--
ALTER TABLE `lampiran`
  MODIFY `id_lampiran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `catatan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_catatan_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `catatan_kategori`
--
ALTER TABLE `catatan_kategori`
  ADD CONSTRAINT `catatan_kategori_ibfk_1` FOREIGN KEY (`id_catatan`) REFERENCES `catatan` (`id_catatan`),
  ADD CONSTRAINT `catatan_kategori_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `fk_ck_catatan` FOREIGN KEY (`id_catatan`) REFERENCES `catatan` (`id_catatan`) ON DELETE CASCADE;

--
-- Constraints for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD CONSTRAINT `fk_lampiran_catatan` FOREIGN KEY (`id_catatan`) REFERENCES `catatan` (`id_catatan`) ON DELETE CASCADE,
  ADD CONSTRAINT `lampiran_ibfk_1` FOREIGN KEY (`id_catatan`) REFERENCES `catatan` (`id_catatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
