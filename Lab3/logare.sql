-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 06:39 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logare`
--

-- --------------------------------------------------------

--
-- Table structure for table `grupa`
--

CREATE TABLE `grupa` (
  `id_grupa` int(11) NOT NULL,
  `nume_grupa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grupa`
--

INSERT INTO `grupa` (`id_grupa`, `nume_grupa`) VALUES
(1, 'ti152'),
(2, 'ti151'),
(3, 'ti153'),
(4, 'SI151');

-- --------------------------------------------------------

--
-- Table structure for table `grupa_teme`
--

CREATE TABLE `grupa_teme` (
  `id_grupa_teme` int(11) NOT NULL,
  `id_grupa` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grupa_teme`
--

INSERT INTO `grupa_teme` (`id_grupa_teme`, `id_grupa`, `id_tema`) VALUES
(1, 1, 1),
(2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `studenti`
--

CREATE TABLE `studenti` (
  `id` int(11) NOT NULL,
  `nume` varchar(200) NOT NULL,
  `prenume` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `parola` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studenti`
--

INSERT INTO `studenti` (`id`, `nume`, `prenume`, `email`, `parola`) VALUES
(1, 'sandel', 'alex', 'alexandru.toloaca@gmail.com', '215487'),
(2, 'alex', 'sandel', 'alexandru.toloaca@gmail.com', '215487');

-- --------------------------------------------------------

--
-- Table structure for table `teme`
--

CREATE TABLE `teme` (
  `id_tema` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `continut` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teme`
--

INSERT INTO `teme` (`id_tema`, `title`, `continut`) VALUES
(1, 'html1', 'blablabla 1'),
(2, 'html2', 'blablabal3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grupa`
--
ALTER TABLE `grupa`
  ADD PRIMARY KEY (`id_grupa`);

--
-- Indexes for table `grupa_teme`
--
ALTER TABLE `grupa_teme`
  ADD PRIMARY KEY (`id_grupa_teme`);

--
-- Indexes for table `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teme`
--
ALTER TABLE `teme`
  ADD PRIMARY KEY (`id_tema`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grupa`
--
ALTER TABLE `grupa`
  MODIFY `id_grupa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `grupa_teme`
--
ALTER TABLE `grupa_teme`
  MODIFY `id_grupa_teme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `studenti`
--
ALTER TABLE `studenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teme`
--
ALTER TABLE `teme`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
