-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 03:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webpro_leskuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(10) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `univ_id` varchar(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_desc` varchar(200) NOT NULL,
  `course_date` date NOT NULL,
  `course_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `sub_id`, `univ_id`, `course_name`, `course_desc`, `course_date`, `course_price`) VALUES
('MCHLR', 'KMPTR', 'ITB', 'Machine Learning', 'Machine Learning merupakan salah satu cabang dari disiplin ilmu Kecerdasan Buatan (Artificial Intellegence) yang membahas mengenai pembangunan sistem yang berdasarkan pada data.', '2019-02-14', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `course_owns`
--

CREATE TABLE `course_owns` (
  `user_id` int(11) NOT NULL,
  `course_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_owns`
--

INSERT INTO `course_owns` (`user_id`, `course_id`) VALUES
(1, 'MCHLR');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` varchar(10) NOT NULL,
  `sub_nama` varchar(50) NOT NULL,
  `sub_desc` varchar(200) NOT NULL,
  `sub_foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_nama`, `sub_desc`, `sub_foto`) VALUES
('BIO', 'Biologi', 'Biologi adalah kajian tentang kehidupan, dan organisme hidup, termasuk struktur, fungsi, pertumbuhan, evolusi, persebaran, dan taksonominya. ', 'bio.jpg'),
('FSK', 'Fisika', 'Fisika adalah ilmu mengenai alam, yang mempelajari unsur-unsur dasar pembentuk alam semesta, gaya-gaya yang bekerja di dalamnya, dan akibat-akibatnya; mencakup rentang yang luas.', 'fsk.jpg'),
('KMPTR', 'Ilmu Komputer', 'Secara umum diartikan sebagai ilmu yang mempelajari baik tentang komputasi, perangkat keras (hardware) maupun perangkat lunak (software).', 'kmptr.jpg'),
('SNI', 'seni', 'Seni adalah keahlian membuat karya yang bermutu, seperti tari, lukisan, ukiran. Seni meliputi banyak kegiatan manusia dalam menciptakan karya visual, audio, atau pertunjukan.', 'sni.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `univ_id` varchar(10) NOT NULL,
  `univ_name` varchar(50) NOT NULL,
  `univ_logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`univ_id`, `univ_name`, `univ_logo`) VALUES
('ITB', 'Institut Teknologi Bandung ', 'itb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'Ahmad Satriamulya', 'ahmadrayi44@gmail.com', 'tumpenglontong'),
(2, 'romi', 'romi123@sasa.com', '37f5a1f50adc555f46d93c30bed0219a');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `vid_id` int(11) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `univ_id` varchar(10) NOT NULL,
  `vid_nama` varchar(50) NOT NULL,
  `vid_content` varchar(50) NOT NULL,
  `vid_desc` varchar(200) NOT NULL,
  `vid_thubnail` varchar(50) NOT NULL,
  `vid_maker` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`vid_id`, `course_id`, `univ_id`, `vid_nama`, `vid_content`, `vid_desc`, `vid_thubnail`, `vid_maker`) VALUES
(1, 'MCHLR', 'ITB', 'Regresi Linear, pertemuan 1', 'https://www.youtube.com/watch?v=VKTXVV0eTIY', 'sebuah video linear regresi', 'thumb1.jpg', 'Romi Romanda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`univ_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`vid_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `vid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
