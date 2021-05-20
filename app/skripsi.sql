-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 02:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komik`
--

INSERT INTO `komik` (`id`, `judul`, `slug`, `penulis`, `penerbit`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'Naruto', 'naruto', 'ggssss', 'Shonen Jumpdada', 'naruto.jpg', NULL, '2021-05-15 10:27:58'),
(2, 'One Piece', 'one-piece', 'Eichiro Odadadda', 'Gramedias', 'onepiece.jpg', NULL, '2021-05-15 06:28:12'),
(5, 'dwaad', 'dwaad', 'dwada', 'dwqdq', 'dwq', '2021-05-15 06:02:08', '2021-05-15 06:02:08'),
(8, 'Naruto', 'naruto', 'ggssss', 'Shonen Jumpdada', 'naruto.jpg', NULL, '2021-05-15 10:27:58'),
(9, 'One Piece', 'one-piece', 'Eichiro Odadadda', 'Gramedias', 'onepiece.jpg', NULL, '2021-05-15 06:28:12'),
(10, 'Naruto', 'naruto', 'ggssss', 'Shonen Jumpdada', 'naruto.jpg', NULL, '2021-05-15 10:27:58'),
(11, 'One Piece', 'one-piece', 'Eichiro Odadadda', 'Gramedias', 'onepiece.jpg', NULL, '2021-05-15 06:28:12'),
(12, 'dwaad', 'dwaad', 'dwada', 'dwqdq', 'dwq', '2021-05-15 06:02:08', '2021-05-15 06:02:08'),
(13, 'One Piece', 'one-piece', 'Eichiro Odadadda', 'Gramedias', 'onepiece.jpg', NULL, '2021-05-15 06:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-05-16-024526', 'App\\Database\\Migrations\\Orang', 'default', 'App', 1621133562, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Heru Imam Ramadan S.H.', 'Dk. Bappenas No. 919, Denpasar 34555, Riau', NULL, NULL),
(2, 'Rahman Latupono', 'Kpg. Rajawali No. 991, Kediri 67928, Sulbar', NULL, NULL),
(3, 'Ciaobella Wastuti', 'Dk. Bakhita No. 134, Makassar 82589, Sulut', NULL, NULL),
(4, 'Tiara Nabila Safitri S.Ked', 'Kpg. Gedebage Selatan No. 680, Solok 99868, Pabar', NULL, NULL),
(5, 'Samiah Zahra Hassanah S.Farm', 'Jr. Achmad No. 653, Padangsidempuan 39864, Jatim', NULL, NULL),
(6, 'Jabal Atmaja Setiawan', 'Dk. Dipatiukur No. 603, Palu 72217, Malut', NULL, NULL),
(7, 'Oliva Novitasari S.Ked', 'Kpg. Hang No. 19, Manado 94468, Sulbar', NULL, NULL),
(8, 'Putri Wijayanti', 'Ds. Bass No. 562, Bogor 88326, Maluku', NULL, NULL),
(9, 'Edison Embuh Sitompul', 'Jr. Tentara Pelajar No. 156, Cilegon 75301, Sulsel', NULL, NULL),
(10, 'Nyana Bakti Pradipta S.Psi', 'Jr. Tangkuban Perahu No. 151, Batam 80132, Kaltara', NULL, NULL),
(11, 'Mahesa Siregar M.Ak', 'Kpg. Imam Bonjol No. 306, Mojokerto 44853, Sulbar', NULL, NULL),
(12, 'Kasiran Santoso S.Sos', 'Psr. Bakhita No. 217, Administrasi Jakarta Pusat 92792, Sumut', NULL, NULL),
(13, 'Lili Purwanti M.Farm', 'Gg. Gatot Subroto No. 547, Cilegon 74638, Banten', NULL, NULL),
(14, 'Shania Lestari', 'Ds. Tubagus Ismail No. 123, Dumai 60874, Bali', NULL, NULL),
(15, 'Rafi Yosef Latupono', 'Kpg. Cokroaminoto No. 958, Tidore Kepulauan 67772, Bali', NULL, NULL),
(16, 'Anita Kusmawati', 'Jln. Wahid No. 523, Payakumbuh 76132, Jateng', NULL, NULL),
(17, 'Gading Jamil Habibi', 'Ki. Haji No. 394, Malang 62648, Riau', NULL, NULL),
(18, 'Lurhur Salman Sihotang M.Pd', 'Jln. Basmol Raya No. 226, Bogor 15683, NTT', NULL, NULL),
(19, 'Sidiq Kusumo S.Kom', 'Ds. Bak Air No. 800, Ambon 62151, Kepri', NULL, NULL),
(20, 'Amelia Winarsih', 'Jln. Bahagia No. 912, Padang 66441, Jateng', NULL, NULL),
(21, 'Jessica Farida', 'Jln. Kalimalang No. 721, Sorong 15534, Kaltim', NULL, NULL),
(22, 'Kairav Najmudin M.Farm', 'Kpg. Imam No. 627, Parepare 17024, Bali', NULL, NULL),
(23, 'Maimunah Fujiati', 'Jr. Babakan No. 112, Gorontalo 84712, Sumsel', NULL, NULL),
(24, 'Amalia Melani', 'Kpg. Veteran No. 841, Serang 36695, Babel', NULL, NULL),
(25, 'Garang Megantara', 'Ds. Tambun No. 448, Tangerang 99488, DKI', NULL, NULL),
(26, 'Alika Maryati', 'Gg. Kyai Gede No. 343, Metro 25843, Sumut', NULL, NULL),
(27, 'Lala Safitri', 'Psr. Abdul Muis No. 460, Tomohon 79307, Jateng', NULL, NULL),
(28, 'Virman Irawan', 'Kpg. Bak Mandi No. 609, Balikpapan 77471, Jatim', NULL, NULL),
(29, 'Kemba Respati Sihombing M.Pd', 'Jr. Acordion No. 758, Madiun 77664, Aceh', NULL, NULL),
(30, 'Labuh Perkasa Haryanto S.Psi', 'Gg. Merdeka No. 339, Semarang 49484, Malut', NULL, NULL),
(31, 'Gina Rachel Widiastuti', 'Dk. Bayam No. 95, Denpasar 50481, Jambi', NULL, NULL),
(32, 'Eli Wastuti', 'Gg. Umalas No. 637, Lhokseumawe 47969, Babel', NULL, NULL),
(33, 'Anggabaya Napitupulu', 'Kpg. Jaksa No. 895, Singkawang 59223, Malut', NULL, NULL),
(34, 'Kacung Maulana S.Psi', 'Psr. Basuki Rahmat  No. 911, Sukabumi 52385, Babel', NULL, NULL),
(35, 'Cindy Salwa Pudjiastuti', 'Kpg. Moch. Ramdan No. 867, Pontianak 23955, Maluku', NULL, NULL),
(36, 'Hafshah Purwanti S.Kom', 'Ds. Bayam No. 321, Gorontalo 42823, Papua', NULL, NULL),
(37, 'Ibun Kenes Maheswara', 'Jln. Lumban Tobing No. 583, Payakumbuh 29509, Riau', NULL, NULL),
(38, 'Praba Dimas Dongoran', 'Dk. M.T. Haryono No. 932, Palu 71093, Jambi', NULL, NULL),
(39, 'Baktiono Zulkarnain', 'Ki. Gajah Mada No. 280, Probolinggo 64708, DKI', NULL, NULL),
(40, 'Prabawa Haryanto', 'Gg. Basudewo No. 364, Madiun 53457, Jambi', NULL, NULL),
(41, 'Gasti Lestari', 'Dk. Raden Saleh No. 436, Banjarmasin 45323, Bali', NULL, NULL),
(42, 'Adika Hutapea', 'Jln. Hang No. 904, Surakarta 93336, Babel', NULL, NULL),
(43, 'Jelita Puspita', 'Jln. Karel S. Tubun No. 840, Pagar Alam 78645, Lampung', NULL, NULL),
(44, 'Hesti Nadia Handayani', 'Ki. B.Agam Dlm No. 473, Manado 41179, NTB', NULL, NULL),
(45, 'Qori Yolanda M.Kom.', 'Psr. Ciumbuleuit No. 642, Malang 23796, Sulbar', NULL, NULL),
(46, 'Ulya Rahmawati', 'Ki. Baya Kali Bungur No. 126, Blitar 47177, Pabar', NULL, NULL),
(47, 'Daniswara Pradipta M.Farm', 'Dk. Baranang No. 604, Banda Aceh 13126, Riau', NULL, NULL),
(48, 'Gilang Natsir S.H.', 'Kpg. Sam Ratulangi No. 348, Bekasi 29992, Sumut', NULL, NULL),
(49, 'Oliva Haryanti', 'Kpg. Ikan No. 399, Palopo 44454, NTB', NULL, NULL),
(50, 'Lanjar Daru Budiyanto', 'Dk. Gading No. 886, Sorong 98219, Bengkulu', NULL, NULL),
(51, 'Dono Hutasoit', 'Ki. Bah Jaya No. 337, Jambi 66680, Bengkulu', NULL, NULL),
(52, 'Ismail Arsipatra Uwais S.Sos', 'Ds. Moch. Ramdan No. 69, Bau-Bau 23248, Aceh', NULL, NULL),
(53, 'Rendy Cawisono Prayoga S.Pt', 'Jln. Gambang No. 139, Bukittinggi 90369, DKI', NULL, NULL),
(54, 'Dian Ifa Wijayanti', 'Dk. Untung Suropati No. 812, Padangsidempuan 94008, Bali', NULL, NULL),
(55, 'Harto Ardianto', 'Ki. Kebonjati No. 516, Manado 35181, Babel', NULL, NULL),
(56, 'Radit Ramadan S.Pd', 'Ds. Salak No. 661, Batam 98564, Gorontalo', NULL, NULL),
(57, 'Ifa Hartati', 'Psr. Kalimantan No. 353, Pematangsiantar 65583, Sulsel', NULL, NULL),
(58, 'Warsa Pranowo', 'Psr. Bata Putih No. 283, Tebing Tinggi 25712, Banten', NULL, NULL),
(59, 'Kamila Laksita S.I.Kom', 'Jr. Pacuan Kuda No. 206, Madiun 25431, Sulteng', NULL, NULL),
(60, 'Nasim Jatmiko Jailani', 'Jln. Tambak No. 454, Administrasi Jakarta Timur 77198, Sumsel', NULL, NULL),
(61, 'Hasna Clara Novitasari', 'Psr. Sugiyopranoto No. 858, Padang 28850, Bali', NULL, NULL),
(62, 'Hamima Aryani', 'Psr. Gatot Subroto No. 202, Kediri 40294, Papua', NULL, NULL),
(63, 'Hartaka Putra', 'Jr. Rajawali Barat No. 93, Jayapura 64867, Sulut', NULL, NULL),
(64, 'Restu Almira Suartini', 'Jln. Soekarno Hatta No. 766, Kotamobagu 78321, DKI', NULL, NULL),
(65, 'Danuja Gadang Hutasoit S.Gz', 'Ds. Basudewo No. 779, Pasuruan 45865, Jambi', NULL, NULL),
(66, 'Gatot Waluyo', 'Kpg. Yos Sudarso No. 480, Subulussalam 94974, Sulbar', NULL, NULL),
(67, 'Gilda Lestari', 'Ki. Sentot Alibasa No. 384, Sukabumi 15763, Riau', NULL, NULL),
(68, 'Ajimin Sitompul', 'Psr. Nanas No. 796, Surakarta 69851, DKI', NULL, NULL),
(69, 'Nurul Zulaika M.Pd', 'Dk. Thamrin No. 359, Tual 67274, Kepri', NULL, NULL),
(70, 'Prasetyo Jabal Thamrin', 'Dk. Adisumarmo No. 694, Prabumulih 84834, Malut', NULL, NULL),
(71, 'Cinta Rahayu', 'Ki. Jambu No. 548, Pangkal Pinang 13479, Banten', NULL, NULL),
(72, 'Vanesa Sudiati M.Ak', 'Dk. Suniaraja No. 54, Administrasi Jakarta Barat 20328, Kaltim', NULL, NULL),
(73, 'Almira Farida', 'Jln. Elang No. 571, Bandung 48744, Kaltim', NULL, NULL),
(74, 'Yuliana Farida', 'Jr. Ters. Buah Batu No. 175, Probolinggo 91986, Aceh', NULL, NULL),
(75, 'Hendra Lazuardi S.Farm', 'Dk. Bappenas No. 280, Tidore Kepulauan 34840, Sumbar', NULL, NULL),
(76, 'Genta Cinthia Agustina', 'Jr. Agus Salim No. 299, Ternate 15752, Sumbar', NULL, NULL),
(77, 'Betania Ida Rahimah', 'Jln. BKR No. 252, Pematangsiantar 23686, Riau', NULL, NULL),
(78, 'Silvia Oktaviani', 'Jr. Wahid Hasyim No. 866, Sawahlunto 68073, DKI', NULL, NULL),
(79, 'Puji Belinda Oktaviani S.Ked', 'Ki. B.Agam 1 No. 998, Surakarta 27020, Gorontalo', NULL, NULL),
(80, 'Kamaria Yuliarti S.H.', 'Dk. Salatiga No. 719, Kendari 84643, Bengkulu', NULL, NULL),
(81, 'Gaman Winarno', 'Psr. Sutarto No. 829, Bontang 17971, DIY', NULL, NULL),
(82, 'Hesti Namaga', 'Ki. Sutarjo No. 920, Banjarmasin 11376, Banten', NULL, NULL),
(83, 'Sakura Mulyani', 'Kpg. Abang No. 241, Sukabumi 64262, Kaltim', NULL, NULL),
(84, 'Jatmiko Wibisono S.Pd', 'Psr. Sutoyo No. 888, Tangerang Selatan 82561, Kalteng', NULL, NULL),
(85, 'Prabowo Utama', 'Gg. Jend. A. Yani No. 701, Administrasi Jakarta Utara 20524, Sulteng', NULL, NULL),
(86, 'Anggabaya Hasta Waluyo', 'Jr. Ters. Pasir Koja No. 521, Palopo 66799, Kepri', NULL, NULL),
(87, 'Luis Nainggolan S.Pt', 'Ds. Bank Dagang Negara No. 598, Binjai 74848, Sumut', NULL, NULL),
(88, 'Padmi Mayasari', 'Psr. Kartini No. 56, Tidore Kepulauan 85325, Kalbar', NULL, NULL),
(89, 'Jessica Nasyidah', 'Dk. Jamika No. 878, Tidore Kepulauan 51641, NTT', NULL, NULL),
(90, 'Usman Haryanto', 'Ki. Nakula No. 488, Administrasi Jakarta Utara 37129, Pabar', NULL, NULL),
(91, 'Prima Kawaca Maryadi S.IP', 'Gg. Sam Ratulangi No. 211, Pontianak 33457, Papua', NULL, NULL),
(92, 'Kayla Lailasari', 'Psr. Abdul Rahmat No. 891, Jayapura 18902, Jambi', NULL, NULL),
(93, 'Damar Hardiansyah S.Pd', 'Gg. Bakau No. 251, Surabaya 52060, Babel', NULL, NULL),
(94, 'Banara Januar S.Sos', 'Jln. Sugiono No. 250, Surabaya 31135, Jambi', NULL, NULL),
(95, 'Usyi Purwanti', 'Ds. Daan No. 152, Denpasar 78070, Pabar', NULL, NULL),
(96, 'Umay Saefullah', 'Kpg. Padma No. 591, Administrasi Jakarta Pusat 61240, Sumbar', NULL, NULL),
(97, 'Ghani Rajata', 'Gg. Gambang No. 368, Gunungsitoli 65423, Sulut', NULL, NULL),
(98, 'Ajimin Prakasa', 'Kpg. Bakin No. 888, Sungai Penuh 47615, DIY', NULL, NULL),
(99, 'Galih Mustofa M.TI.', 'Ki. Honggowongso No. 397, Padangsidempuan 93102, Kaltara', NULL, NULL),
(100, 'Icha Yolanda S.I.Kom', 'Jr. Bakin No. 140, Bau-Bau 48771, Sumut', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor_hp` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postal` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komik`
--
ALTER TABLE `komik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komik`
--
ALTER TABLE `komik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
