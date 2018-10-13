-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2018 at 05:32 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok9`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `privileges` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `username`, `password`, `privileges`, `email`) VALUES
(101, 'muhammad qolbil', 'qolbil', 'qolbil', 'admin', 'm_qolbil@gmail.com'),
(102, 'riza awwalul', 'riza', 'riza', 'admin', 'riza_awwalul@gmail.com'),
(103, 'triska intania', 'triska', 'triska', 'admin', 'triska_intania@gmail.com'),
(104, 'coba', 'coba2', '2aSADA', 'admin', 's'),
(105, 'admin', 'admin', 'admin', 'admin', 'admin@gmail.com'),
(106, 'adamkurnia', 'adam', 'kurnia123', 'admin', 'admkurnia@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_news` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_news`, `name`, `email`, `comment`, `date`, `status`) VALUES
(1, 1, 'triska', 'triska_intania@gmail.com', 'beritanya bagus banget', '2018-09-30', 'BUKAN SPAM'),
(2, 1, 'a', 'a', 'a', '2018-10-13', 'BUKAN SPAM');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_photo` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_photo`, `photo`, `description`) VALUES
(1, '20150714_160204.png', 'Sumber Air Panas Dingin'),
(2, '20150714_163129.png', 'Pasar Songgoriti'),
(3, '20150714_154018.png', 'bxgbnx'),
(4, 'avatar-1294163_640.png', 'coba foto candi');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `photo` varchar(200) NOT NULL,
  `author` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `headline`, `about`, `photo`, `author`, `date`) VALUES
(1, 'Candi Supo adalah satu-satunya peninggalan Mpu Sindok di Kota Batu.', 'Candi Supo adalah satu-satunya peninggalan Mpu Sindok di Kota Batu.', 'Candi Supo adalah satu-satunya peninggalan Mpu Sindok di Kota Batu. Beliau adalah raja pertama kerajaan Medang periode Jawa Timur yang memerintah sekitar tahun 929-947. Menurut sejarahnya; kisah Candi Songgoriti ini berawal dari keinginan Mpu Sindok yang ingin membangun tempat peristirahatan bagi keluarga kerajaan di pegunungan yang didekatnya terdapat mata air. Seorang petinggi kerajaan bernama Mpu Supo diperintah Mpu Sindok untuk membangun tempat tersebut. Dengan upaya yang keras, akhirnya Mpu Supo menemukan suatu kawasan yang sekarang lebih dikenal sebagai kawasan Wisata Songgoriti. Atas persetujuan Raja, Mpu Supo mulai membangun kawasan Songgoriti sebagai tempat peristirahatan keluarga kerajaan berikut sebuah candi yang diberi nama Candi Supo. Di tempat peristirahatan tersebut terdapat sumber mata air yang mengalir dingin dan sejuk seperti semua mata air di wilayah pegunungan. Mata air dingin tersebut sering digunakan mencuci keris-keris bertuah sebagai benda pusaka dari kerajaan Sindok. Oleh karena sumber mata air ini sering digunakan untuk mencuci benda-benda kerajaan yang bertuah dan mempunyai kekuatan supranatural (magic) yang maha dahsyat, akhirnya sumber mata air yang semula terasa dingin dan sejuk berubah menjadi sumber air panas. Sumber air panas itupun sampai saat ini menjadi sumber abadi di kawasan Wisata Songgoriti. <br><br>Candi Songgoriti terbuat dari batu andesit dan pondasinya dari batu bata. Ukuran candi ini 14,50 meter x 10 meter dengan tinggi 2,5 meter, dibangun di atas sumber mata air panas. Hampir seluruh wujud asli dari candi ini sudah hancur. Hiasan patung-patung yang menghiasi badan candi pun sudah banyak yang tidak berbentuk sehingga sulit untuk diidentifikasi. Namun meski dalam kondisi seperti itu, bagaimanapun juga keberadaan candi tersebut sangatlah berarti sebagai bukti tuanya usia peradaban di Kota Batu.<br><br>Candi Songgoriti juga menyimpan sebuah keunikan yang mungkin tidak ditemukan di candi-candi lainnya yakni, sumber mata air dingin yang disebut air Pasang Giri. Sumber mata air dingin ini menyembul di tengah-tengah sumber mata air panas dengan ukuran kolam hanya 75 cm x 75 cm. Sangat sulit untuk dipahami bahwa bangunan candi yang dikelilingi sumber mata air panas, di tengah-tengahnya menyembul sumber mata air dingin. Letak mata air dingin persis di tengah-tengah bangunan candi bagian belakang. Namun tak banyak wisatawan yang mengetahui keunikan tersebut. <br>', '20150714_155625.png', 'admin', '2018-09-27'),
(2, 'Ganesha', 'Ganesha termasuk salah satu dewa yang paling populer', 'Di dalam agama Hindu, Ganesa atau Ganesha termasuk salah satu dewa yang paling populer, di samping Dewa-dewa Trimurti, yakni Brahma (dewa pencipta alam semesta), Wisnu (dewa pemelihara alam semesta), dan Siwa (dewa perusak alam semesta).<br><br>Ganesha adalah dewa berkepala gajah. Di kalangan masyarakat Hindu, Ganesha dianggap setengah manusia dan setengah dewa. Peranan Ganesha begitu penting karena dia adalah anak Dewa Siwa.<br><br>Ganesha merupakan dewa ilmu pengetahuan. Ciri utama Ganesha adalah memiliki belalai yang sedang mengisap isi mangkok dalam genggaman tangan depannya. Isi mangkok itu diibaratkan pengetahuan yang tak pernah habis.', 'arca ganesha.jpg', 'admin', '2018-09-29'),
(3, 'sampping candi', 'samping', 'samping candi songgoriti&nbsp;', '1x.png', 'triska intania', '2018-10-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_about` (`id_news`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
