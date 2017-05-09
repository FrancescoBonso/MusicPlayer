-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 09:37 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicplayer`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('stefanosartori', '1234'),
('brunovalluzzi', 'gerusalemme'),
('francescobonso', 'bagigi');

-- --------------------------------------------------------

--
-- Table structure for table `canzoni`
--

CREATE TABLE `canzoni` (
  `id` int(11) NOT NULL,
  `titolo` varchar(100) NOT NULL,
  `artista` varchar(100) NOT NULL,
  `album` varchar(100) NOT NULL,
  `link_youtube` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canzoni`
--

INSERT INTO `canzoni` (`id`, `titolo`, `artista`, `album`, `link_youtube`) VALUES
(1, 'Learn to fly', 'Foo Fighters', 'There is nothing left to lose', 'https://www.youtube.com/watch?v=7dwuzqF6huc'),
(2, 'Aaron', 'Paul Kalkbrenner', 'Berlin Calling', 'https://www.youtube.com/watch?v=p450mjB3mxc'),
(3, 'Hopeless Wanderer', 'Mumford & Sons', 'Babel', 'https://www.youtube.com/watch?v=rId6PKlDXeU'),
(4, 'Amsterdam sky', 'Emanuele Fasano', 'La mia ragazza è il piano', 'https://www.youtube.com/watch?v=uf2MiBHPRKc'),
(5, 'Hooked on a Feeling', 'Blue Swede', 'Hooked on a feeling', 'https://www.youtube.com/watch?v=NrI-UBIB8Jk'),
(6, 'I will wait', 'Mumford & Sons', 'Babel', 'https://www.youtube.com/watch?v=R5HO-X_fR7o'),
(7, 'Californication', 'Red Hot Chilli Peppers', 'Californication', 'https://www.youtube.com/watch?v=LV34GMYLXcA'),
(18, 'Oroscopo', 'Calcutta', 'Oroscopo', 'https://www.youtube.com/watch?v=bJtRONVWC08'),
(9, 'Mrs.Robinson', 'Simon & Garfunkel', 'Bookends', 'https://www.youtube.com/watch?v=9C1BCAgu2I8'),
(13, 'Oceans Away', 'A R I Z O N A', 'Oceans Away', 'https://www.youtube.com/watch?v=1MoAdVyuEuU'),
(19, 'Nuvole bianche', 'Ludovico Einaudi', 'Una mattina', 'https://www.youtube.com/watch?v=fEOJQawykD0'),
(21, 'Whispers In The Dark', 'Mumford & Sons', 'Babel', 'https://www.youtube.com/watch?v=9aGLGubNUKU'),
(22, 'Lover Of The Light', 'Mumford & Sons', 'Babel', 'https://www.youtube.com/watch?v=-8eB64pXoGU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canzoni`
--
ALTER TABLE `canzoni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canzoni`
--
ALTER TABLE `canzoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
