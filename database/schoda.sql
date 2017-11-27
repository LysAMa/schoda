-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2017 at 08:17 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoda`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `id_dataset` int(10) NOT NULL,
  `file` varchar(60) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `zone_enquete` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquete_table`
--

CREATE TABLE `enquete_table` (
  `id_enquete` int(10) NOT NULL,
  `nom_enquete` varchar(255) NOT NULL,
  `description_enquete` varchar(255) NOT NULL,
  `photo_enquete` varchar(255) NOT NULL,
  `lien_enquete` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(10) NOT NULL,
  `id-projet` int(11) NOT NULL,
  `file` varchar(60) NOT NULL,
  `nom_photo` varchar(60) NOT NULL,
  `description_photo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(10) NOT NULL,
  `nom_projet` varchar(255) NOT NULL,
  `nom_de_code` int(11) NOT NULL,
  `description_projet` varchar(255) NOT NULL,
  `nbre_benef_fille` int(10) NOT NULL,
  `nbre_benef_garcon` int(11) NOT NULL,
  `dataset_projet` varchar(255) NOT NULL,
  `photo_projet` varchar(255) NOT NULL,
  `zone` varchar(60) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `pseudo` int(60) NOT NULL,
  `email` varchar(64) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `secteur_activite` varchar(80) NOT NULL,
  `pays` varchar(60) NOT NULL,
  `langue` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  `logo_association` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`id_dataset`);

--
-- Indexes for table `enquete_table`
--
ALTER TABLE `enquete_table`
  ADD PRIMARY KEY (`id_enquete`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataset`
--
ALTER TABLE `dataset`
  MODIFY `id_dataset` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enquete_table`
--
ALTER TABLE `enquete_table`
  MODIFY `id_enquete` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
