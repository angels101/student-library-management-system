-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2020 at 01:58 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `authorId` int(11) NOT NULL,
  `authorName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorId`, `authorName`) VALUES
(1, 'James'),
(2, 'Muthemba'),
(3, 'Luis'),
(4, 'Abot'),
(5, 'Abot'),
(6, 'Valentine'),
(7, 'Muthemba');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookId` int(11) NOT NULL,
  `bookName` varchar(100) NOT NULL,
  `referenceNo` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookId`, `bookName`, `referenceNo`, `publisher`) VALUES
(1, 'YII2 FOR DUMIES', 'YII/002567', 'MACMILLAN'),
(2, 'ABOT PYSICS', 'YII/002567', 'MACMILLAN'),
(3, 'ABOT PYSICS', 'AP/0002', 'MACMILLAN'),
(4, 'ABOT PYSICS', 'AP/0002', 'MACMILLAN'),
(5, 'ABOT PYSICS', 'YII/002567', 'MACMILLAN'),
(6, 'ABOT PYSICS', 'YII/002567', 'MACMILLAN');

-- --------------------------------------------------------

--
-- Table structure for table `bookAuthor`
--

CREATE TABLE `bookAuthor` (
  `baId` int(11) NOT NULL,
  `authorId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookAuthor`
--

INSERT INTO `bookAuthor` (`baId`, `authorId`, `bookId`) VALUES
(1, 6, 4),
(2, 3, 5),
(3, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `borrowedBook`
--

CREATE TABLE `borrowedBook` (
  `bbId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `borrowDate` date NOT NULL,
  `returnDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1599221808),
('m130524_201442_init', 1599221814),
('m190124_110200_add_verification_token_column_to_user_table', 1599221814);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentsId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `idNumber` int(11) NOT NULL,
  `regNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentsId`, `userId`, `fullName`, `idNumber`, `regNo`) VALUES
(1, 2, 'JAMES GICHIMU MWANGI', 2785464, 'j27/2046/2010'),
(2, 3, 'NANCY MUTHONI', 2344338, 'j27/2046/2011');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'jmwangi', '6wZ2dqZoQjgnnfcgXyIHPGYaeHUrrctb', '$2y$13$uO4ThkVkTUSxv9nPxUjX6.qQlUm/Je42BFB5wPss.0CGJBhHF/P7W', NULL, 'jamohgich22@gmail.com', 10, 1600937150, 1600937150, 'JgijMa758xdgPr3bp5mQ7d4ha_PpvsJV_1600937150'),
(2, 'jgichimu', '6z5wERL_LLIbwOxirMbPMhbWeoylNac6', '$2y$13$SEbReloOPxv8NjH0ha1ssOfS6tBwRieafBjMcjcv0DX8wYWxqlxte', NULL, 'jamohgich222@gmail.com', 10, 1600937272, 1600937272, 'Y4lM9P6dlchcu0sq1IBPvKVHgbX1wBhF_1600937272'),
(3, 'mwangi', 'RLCJjzr5id8278CL6WiDqLW-CzKYQovs', '$2y$13$oqElKsepxWgO/H3UKH1LZOWzb5Qx1Y6I/RL.og5YvP/i90WhLOUdy', NULL, 'mwangi@email.com', 10, 1600937356, 1600937356, 'dRewxvQJ_SO0BSS9ln_mOOj0DMEvJQvB_1600937356'),
(4, 'jamwangi', 'FB543-d_1z6mm0v7nzhG7d4e4Px39gsl', '$2y$13$EYZqTBb.jmXvLor5.NWAh.YK55BVIcv9DBZ.z3by7YTjlfg64xNMm', NULL, 'jamohgich@gmail.com', 10, 1601474474, 1601474474, 'ooTn2voaBtlJNIj5jec2eBsY232a5uij_1601474474'),
(5, 'jmwangi1', 'rQ_IiD4e0ldRUNqpbiK9hHtfSqYJdCfZ', '$2y$13$NE7Rfv2HpZEsjLII9COU4urm0khZWrOejtin4W1/uZotGI9dooS7u', NULL, 'jmwangi@email.com', 10, 1601625177, 1601625177, '5wGd8k4GV4ROI_uI90uYi0w128ZXJho9_1601625177');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`authorId`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `bookAuthor`
--
ALTER TABLE `bookAuthor`
  ADD PRIMARY KEY (`baId`),
  ADD KEY `authorId` (`authorId`),
  ADD KEY `bookId` (`bookId`);

--
-- Indexes for table `borrowedBook`
--
ALTER TABLE `borrowedBook`
  ADD PRIMARY KEY (`bbId`),
  ADD KEY `studentId` (`studentId`),
  ADD KEY `bookId` (`bookId`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentsId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `authorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bookAuthor`
--
ALTER TABLE `bookAuthor`
  MODIFY `baId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `borrowedBook`
--
ALTER TABLE `borrowedBook`
  MODIFY `bbId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookAuthor`
--
ALTER TABLE `bookAuthor`
  ADD CONSTRAINT `bookAuthor_ibfk_1` FOREIGN KEY (`authorId`) REFERENCES `author` (`authorId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bookAuthor_ibfk_2` FOREIGN KEY (`bookId`) REFERENCES `book` (`bookId`) ON UPDATE CASCADE;

--
-- Constraints for table `borrowedBook`
--
ALTER TABLE `borrowedBook`
  ADD CONSTRAINT `borrowedBook_ibfk_1` FOREIGN KEY (`studentId`) REFERENCES `student` (`studentsId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `borrowedBook_ibfk_2` FOREIGN KEY (`bookId`) REFERENCES `book` (`bookId`) ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
