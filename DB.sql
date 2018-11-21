-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 10:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_daweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `type` varchar(5) NOT NULL,
  `niveau` varchar(5) NOT NULL,
  `section` int(11) NOT NULL,
  `groupe` int(11) NOT NULL,
  `module` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_pub` datetime NOT NULL,
  `date_exp` date NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `type`, `niveau`, `section`, `groupe`, `module`, `description`, `date_pub`, `date_exp`, `file_path`) VALUES
(3, 'actu', 'T', 2, 3, 'POO', 'Madame &quot;idr&quot;', '2018-05-04 20:14:19', '2018-08-04', '../view/content/actu/actu_T_2_3_3.jpeg'),
(4, 'actu', 'L2', 0, 0, 'POO', 'consultation POO est prevue dimanche a 12h30 a la salle 1103', '2018-05-04 20:15:29', '2018-08-04', '../view/content/actu/actu_L2___4.jpeg'),
(5, 'note', 'L2', 2, 3, 'Logique Mathematique', 'Madame Ferhane', '2018-05-04 20:16:32', '2018-08-04', '../view/content/note/note_L2_S2_G3_5.jpeg'),
(6, 'note', 'L2', 2, 3, 'ASD', 'semestre 3', '2018-05-04 20:17:10', '2018-08-04', '../view/content/note/note_L2_S2_G3_6.jpeg'),
(7, 'note', 'L2', 2, 3, 'AO', 'note d \'examen semstre 3', '2018-05-04 20:17:51', '2018-08-04', '../view/content/note/note_L2_S2_G3_7.jpeg'),
(8, 'emp', 'L2', 2, 0, '', 'semestre 3', '2018-05-04 20:24:46', '2018-08-04', '../view/content/emp/emp_L2_S2__8.jpg'),
(9, 'note', 'M2', 1, 2, 'AI', 'Mme Jane Doe', '2018-05-05 00:42:45', '2018-08-05', '../view/content/note/note_M2_S1_G2_9.jpg'),
(10, 'emp', 'L1', 2, 0, '', 'Semestre 1', '2018-05-05 21:18:12', '2018-08-05', '../view/content/emp/emp_L1_S2__10.jpg'),
(11, 'note', 'L2', 1, 2, 'DAWEB', 'TP', '2018-05-06 14:59:50', '2018-08-06', '../view/content/note/note_L2_S1_G2_11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `liste_prof`
--

CREATE TABLE `liste_prof` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liste_prof`
--

INSERT INTO `liste_prof` (`id`, `nom`, `prenom`, `grade`, `email`) VALUES
(1, 'AGHA', 'ZOUBIDA', 'MAA', 'noisyboy.84.96@gmail.com'),
(3, 'AL NAFEI', 'AMJED', 'MCB', 'noisyboy.84.96@gmail.com'),
(4, 'ALHANNACHI', 'SID AHMED', 'MAA', 'noisyboy.84.96@gmail.com'),
(5, 'BENZERGA', 'MALEK', 'PR', 'benzergaamalek@gmail.com'),
(6, 'FERIEL', 'KORTI', 'PR', 'feriel.korti@gmail.com'),
(7, 'HAMANI', 'IBTISSEM', 'PR', 'iibtii.ssama@gmail.com'),
(8, 'Rahmouni', 'hghjh', 'PR', 'tffy@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liste_prof`
--
ALTER TABLE `liste_prof`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `liste_prof`
--
ALTER TABLE `liste_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
