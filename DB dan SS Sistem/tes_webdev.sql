-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 12, 2023 at 04:56 AM
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
-- Database: `tes_webdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `durasi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id`, `judul`, `deskripsi`, `durasi`, `created_at`, `updated_at`) VALUES
('999ef9b6-89b7-4990-9605-2db8b20c0730', 'Kursus MLBB', 'Mau jago MLBB ikut kursus ini', '2 Jam', '2023-07-11 13:05:33', '2023-07-12 04:34:15'),
('999efa92-98fe-4e2f-a8d5-67e71a3a0e2d', 'Kursus PUBGM', 'Mau jago PUBGM ikut kursus ini', '3 Jam', '2023-07-11 13:07:57', '2023-07-12 04:34:38'),
('999efacf-19f0-4901-b13a-1c5cc90d3ce0', 'Kursus FREE FIRE', 'Mau jago EPEP ikut ini', '4 Jam', '2023-07-11 13:08:37', '2023-07-12 04:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` char(36) NOT NULL,
  `id_kursus` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `id_kursus`, `judul`, `deskripsi`, `link`, `created_at`, `updated_at`) VALUES
('999f29d7-53d7-4f15-be38-43731d8b638b', '999ef9b6-89b7-4990-9605-2db8b20c0730', 'EKSPERIMEN HERO CARA GENDONG TIM PAKAI PAQUITO GOLD LANE DI SOLO RANK !!', 'Bang Xinnn', 'https://youtu.be/CGFaNkwwi0I', '2023-07-11 15:20:08', '2023-07-12 04:33:40'),
('999f2bc7-9e45-483f-a39a-5438af40098a', '999efa92-98fe-4e2f-a8d5-67e71a3a0e2d', 'NIAT SUNMORI MALAH DIBEGAL SANA-SINI - PUBG MOBILE INDONESIA', 'mweheheh345', 'https://youtu.be/Z4li8l0hjko', '2023-07-11 15:25:33', '2023-07-11 17:30:28'),
('99a047b0-92a8-476f-8780-cc6b224b19e3', '999efacf-19f0-4901-b13a-1c5cc90d3ce0', 'TAMAT!!! BARU BELI MP40 ULTRASONIC PETIR! SKIN TERSULTAN DI FF! SAKIT PARAH 1 HIT!!!', 'Frost DIamond', 'https://youtu.be/VEVXqVtWoYo', '2023-07-12 04:39:25', '2023-07-12 04:39:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kursus` (`id_kursus`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_kursus`) REFERENCES `kursus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
