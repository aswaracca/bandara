-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 05:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bandara`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `teks` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis` enum('event','promo') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `teks`, `gambar`, `jenis`, `updated_at`, `created_at`) VALUES
(4, 'Asdasdas', '<p>sdasda dasdasdas dsa dasd asdasdasdasd asdasd asd asdasd asd as das asddsa das dadasdasadsdsdasasddasdas&nbsp;</p>', '20171115043118.jpg', '', '2017-11-15 08:31:20', '2017-11-15 08:31:20'),
(5, 'Jsdasdasdasd', '<p>as asd as dsa dsad dasdas dasad sad ads&nbsp;</p>', '20171115043434.jpg', 'promo', '2017-11-15 08:34:35', '2017-11-15 08:34:35'),
(6, 'JUUUUdull', '&lt;p&gt;cas ds asadssad adsadsdasads&amp;nbsp;&lt;/p&gt;', '20171121034512.JPG', '', '2017-11-20 19:45:12', '2017-11-20 19:45:12'),
(7, 'Jkj', '<p>jjkjkjkjkjkjkjk</p>', '20171121035246.JPG', '', '2017-11-20 19:52:46', '2017-11-20 19:52:46');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `teks` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `suka` int(11) DEFAULT NULL,
  `tdk_suka` int(11) DEFAULT NULL,
  `nama_kontak` varchar(255) DEFAULT NULL,
  `posisi_kontak` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama`, `teks`, `gambar`, `email`, `telpon`, `suka`, `tdk_suka`, `nama_kontak`, `posisi_kontak`, `fb`, `youtube`, `updated_at`, `created_at`) VALUES
(1, 'Angkasa Pura', 'asdasd jcxj xcj jx cjn xjnx cjncx ncxkjcxnj cxjn cx cnjcx jncx jn cxnjxc jn cxn cxnxc nklcxk jcxnjnxck jnxcjn kxjcnk jnxckjn kxjcn kjxcn kjxnckj nxckj njkcxn xcn kjnxckj ncxj nkxcn kjxncj nxjcn kjxnc kjxcn ,cx', '20171115022016.JPG', 'angkasapura@aa.com', '0812345678', 9, 2, 'Aswar Acca', 'Project Manajer', 'https://facebook.com', 'https://youtube.com', '2017-12-23 20:30:17', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id_survey` int(11) NOT NULL,
  `nama_survey` varchar(255) NOT NULL,
  `suka` int(11) NOT NULL,
  `tdk_suka` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id_survey`, `nama_survey`, `suka`, `tdk_suka`, `updated_at`, `created_at`) VALUES
(1, 'Kebersihann', 2, 1, '2017-12-23 20:06:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tenan`
--

CREATE TABLE `tenan` (
  `id_tenan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` enum('show','hide') NOT NULL,
  `kategori` enum('rnb','retails','services','support') DEFAULT NULL,
  `logo` varchar(100) NOT NULL,
  `map` varchar(100) NOT NULL,
  `lihat` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tenan`
--

INSERT INTO `tenan` (`id_tenan`, `nama`, `status`, `kategori`, `logo`, `map`, `lihat`, `updated_at`, `created_at`) VALUES
(1, 'Asdasdasdasd', 'show', 'rnb', '20171120061858.jpg', '20171120061900.mp4', 2, '2017-12-23 17:39:54', '2017-11-19 22:19:00'),
(2, 'Exomatik', 'show', 'retails', '20171122012130.png', '20171122012131.mp4', 2, '2017-12-23 17:39:57', '2017-11-21 17:21:31'),
(3, 'Asd Asdasdas', 'show', 'services', '20171223054720.jpg', '20171223054722.mp4', 3, '2017-12-23 17:39:58', '2017-12-23 09:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `updated_at`, `created_at`, `remember_token`) VALUES
(1, 'angkasapura1', 'angkasapura1', '$2y$10$gnJ2cYjnYUxGgdWbUjUee.XY0LaVrQq56KHAj88UyYiepaLR1YaIm', '2017-11-22 01:26:01', '2017-11-12 17:29:39', 'c3ECsTPeGBB8nCqVdAO5i0TL3bKE6SYmeyEJe7RQBUDgyB3xFBFYS36dbnlF'),
(2, 'angkasapura2', 'angkasapura2', '$2y$10$/ox3e6BAnPWlR89OA/6LQOG/Awbzgcbd5VFy/iSzcie7Q9j5QxmLu', '2017-11-13 13:29:39', '2017-11-12 17:29:39', '0'),
(3, 'angkasapura3', 'angkasapura3', '$2y$10$MrbhR7UiGMVBBMBO6vN59ehX9xztCdOs7RC27.LLncTzRYw60p2Ae', '2017-11-15 16:47:09', '2017-11-12 17:29:39', 'r3jobPfCfXGaC6TKDSMivgB1cfHQm9Jcewpn55k70tokUKpb6XbfJnOUAVB5'),
(4, 'angkasapura4', 'angkasapura4', '$2y$10$IhehBG1vp4QzREodPokMQeIBtfA7O1RBfefM2ejD2vkQzbzyWX8L2', '2017-11-18 04:56:48', '2017-11-17 20:56:48', NULL),
(5, 'angkasapura5', 'angkasapura5', '$2y$10$5xe4a5tMqRDlvMW21d3PAOij2RnZkanTaWTRVWJVWRnBG0WKCnwJy', '2017-11-18 04:56:48', '2017-11-17 20:56:48', NULL),
(6, 'angkasapura6', 'angkasapura6', '$2y$10$zzFHoQKcVI7KeGbPyYVsc.GKhhRelWAN1RbZUpv1SU8Qd/Tda5STy', '2017-11-18 04:56:49', '2017-11-17 20:56:49', NULL),
(7, 'angkasapura7', 'angkasapura7', '$2y$10$AN8CblE3j/Fghk0fQbr.GuF3fG8U1Mrm6SLrzlk5W78TQEP.nGHh.', '2017-11-18 04:57:07', '2017-11-17 20:56:49', '7YPo3daSM9XME7ClkNZRbR6m5cHZapQYQehVa6rgyHTARpyyrxIOvUElTt7X');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id_survey`);

--
-- Indexes for table `tenan`
--
ALTER TABLE `tenan`
  ADD PRIMARY KEY (`id_tenan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id_survey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tenan`
--
ALTER TABLE `tenan`
  MODIFY `id_tenan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
