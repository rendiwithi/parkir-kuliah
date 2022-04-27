-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2022 at 12:29 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_role` int NOT NULL,
  `id_mall` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `password`, `id_role`, `id_mall`) VALUES
(1, 'Afifz Ganzzz Beuthh', 'apipz', 'pip123', 1, 1),
(2, 'Afifz Over Powahhh', 'apip', 'pip123', 1, 1),
(4, 'Fiken Aja', 'fikena', 'fikena', 2, 1),
(5, 'fiken biasa aja', 'fikenb', 'fikenbaja', 3, 1),
(6, 'fiken cukp sih', 'fikenc', 'fikencsih', 4, 1),
(7, 'admin', 'admin', 'admin', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_parkir`
--

CREATE TABLE `detail_parkir` (
  `id` int NOT NULL,
  `plat` varchar(25) NOT NULL,
  `tempat_parkir` int DEFAULT NULL,
  `masuk` datetime NOT NULL DEFAULT (now()),
  `keluar` datetime DEFAULT (now()),
  `harga` int DEFAULT (0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detail_parkir`
--

INSERT INTO `detail_parkir` (`id`, `plat`, `tempat_parkir`, `masuk`, `keluar`, `harga`) VALUES
(20, 'q123q', 1, '2022-04-27 04:39:56', '2022-04-27 04:56:43', 10000),
(21, 'a123a', NULL, '2022-04-27 05:04:41', '2022-04-27 05:24:49', 10000),
(22, 'q123q', 1, '2022-04-27 05:27:41', '2022-04-27 05:28:11', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `plat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`plat`) VALUES
('a123a'),
('a123fif'),
('A123fifz'),
('b321b'),
('K470K'),
('q123q'),
('q123q1'),
('t132t'),
('U928A'),
('Z123z'),
('zzzz');

-- --------------------------------------------------------

--
-- Table structure for table `mall`
--

CREATE TABLE `mall` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mall`
--

INSERT INTO `mall` (`id`, `nama`) VALUES
(1, 'Mall assin');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parkiran`
--

CREATE TABLE `parkiran` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_mall` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parkiran`
--

INSERT INTO `parkiran` (`id`, `nama`, `id_mall`) VALUES
(1, 'Parkiran Reguler', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `tipe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `tipe`) VALUES
(1, 'Administrator'),
(2, 'masuk'),
(3, 'lapangan'),
(4, 'keluar'),
(5, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_parkir`
--

CREATE TABLE `tempat_parkir` (
  `id` int NOT NULL,
  `nama` int NOT NULL,
  `id_parkiran` int NOT NULL,
  `kondisi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tempat_parkir`
--

INSERT INTO `tempat_parkir` (`id`, `nama`, `id_parkiran`, `kondisi`) VALUES
(1, 1, 1, 0),
(2, 2, 1, 0),
(3, 3, 1, 0),
(4, 4, 1, 0),
(5, 5, 1, 0),
(6, 6, 1, 0),
(7, 7, 1, 0),
(8, 8, 1, 0),
(9, 9, 1, 0),
(10, 10, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `nohp`) VALUES
(1, 'rendiwithi', 'Rendi Dwi', '08456654'),
(3, 'admin', 'iksan arifki cahyo', '098767877');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_akun_role` (`id_role`),
  ADD KEY `fk_akun_mall` (`id_mall`);

--
-- Indexes for table `detail_parkir`
--
ALTER TABLE `detail_parkir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail parkir_kendaraan` (`plat`),
  ADD KEY `fk_detail parkir_tempat_parkir` (`tempat_parkir`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`plat`);

--
-- Indexes for table `mall`
--
ALTER TABLE `mall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parkiran`
--
ALTER TABLE `parkiran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unq_parkiran_id_mall` (`id_mall`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tempat_parkir_parkiran` (`id_parkiran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_parkir`
--
ALTER TABLE `detail_parkir`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mall`
--
ALTER TABLE `mall`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parkiran`
--
ALTER TABLE `parkiran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `fk_akun_mall` FOREIGN KEY (`id_mall`) REFERENCES `mall` (`id`),
  ADD CONSTRAINT `fk_akun_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);

--
-- Constraints for table `detail_parkir`
--
ALTER TABLE `detail_parkir`
  ADD CONSTRAINT `fk_detail parkir_kendaraan` FOREIGN KEY (`plat`) REFERENCES `kendaraan` (`plat`),
  ADD CONSTRAINT `fk_detail parkir_tempat_parkir` FOREIGN KEY (`tempat_parkir`) REFERENCES `tempat_parkir` (`id`);

--
-- Constraints for table `parkiran`
--
ALTER TABLE `parkiran`
  ADD CONSTRAINT `fk_parkiran_mall` FOREIGN KEY (`id_mall`) REFERENCES `mall` (`id`);

--
-- Constraints for table `tempat_parkir`
--
ALTER TABLE `tempat_parkir`
  ADD CONSTRAINT `fk_tempat_parkir_parkiran` FOREIGN KEY (`id_parkiran`) REFERENCES `parkiran` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
