-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 08:06 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assemble_point`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_control`
--

CREATE TABLE `access_control` (
  `uid` int(20) NOT NULL,
  `pid` int(20) NOT NULL,
  `access_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_control`
--

INSERT INTO `access_control` (`uid`, `pid`, `access_level`) VALUES
(3, 13246, 'view'),
(3, 13247, 'FALSE'),
(3, 13248, 'view'),
(3, 13249, 'FALSE');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE `discussions` (
  `id` int(11) NOT NULL,
  `pid` int(20) NOT NULL,
  `uid` int(20) NOT NULL,
  `comment` longblob NOT NULL,
  `posted_on` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`id`, `pid`, `uid`, `comment`, `posted_on`) VALUES
(2, 13249, 3, 0x7266667765666576, 1534841769),
(3, 13249, 3, 0x7266667765666576, 1534841830),
(4, 13249, 3, 0x766e73766e73646c766e6c6e76, 1534841867),
(5, 13248, 9, 0x546869732069732061207465737420666f72206c65667420636f6d6d656e7420626f782e, 1534846903),
(6, 13248, 3, 0x54686973206973206120676f6f6420746573742e, 1534850274),
(9, 13246, 3, 0x5468697320697320746865207465737420636f6d6d656e7420746f20746573742074686520636f6d6d656e7420626f78206f66207468652070726f6a6563742e, 1534863929),
(12, 13246, 3, 0x4e657720636f6d6d656e742e, 1534932403),
(13, 13248, 3, 0x486172736869746861207465737420636f6d6d656e742e, 1534932421),
(14, 13247, 3, 0x5465737420636f6d6d656e742e, 1534959269),
(17, 13248, 3, 0x4f4b2e20446f6e652e2077696c6c20646f2069742e, 1534959733),
(18, 13250, 3, 0x496e666f20746573742e, 1534961497),
(19, 13250, 3, 0x536f6d65206d6f726520696e666f726d6174696f6e206f6e204e616e646127732070726f6a6563742e, 1534961513);

-- --------------------------------------------------------

--
-- Table structure for table `project_meta`
--

CREATE TABLE `project_meta` (
  `pid` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `creation_date` int(12) NOT NULL,
  `project_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_meta`
--

INSERT INTO `project_meta` (`pid`, `project_name`, `creation_date`, `project_description`) VALUES
(13246, 'Assemble Point In House development', 1534665682, 'This is the dscription of the project.'),
(13247, 'Test project', 1534701572, 'This is the test description of the new test project.\r\nChecking out the  test project.'),
(13248, 'Harshitha Personal Project', 1534701833, 'Dance school personal project. \r\nMore information inside.'),
(13251, 'New Nanda\'s project', 1534961554, 'This is the test.');

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `user_organization` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `sudo` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_meta`
--

INSERT INTO `user_meta` (`id`, `user_email`, `user_password`, `user_full_name`, `user_organization`, `profile_pic`, `hash`, `sudo`) VALUES
(3, 'ashwinncj@gmail.com', 'e8ec18b980ea58cf363d3b49064faf19', 'Ashwin Kumar C', 'RADEL Corp', '/assemblepoint/ap/assets/img/profileimg/0e80fde659a83d8a4893329d8fe7aaa9.jpg', '330ec1bc2564a5f1a6ab77d668efad4a', 1),
(9, 'maheshs.manu1993@gmail.com', '0db26fb7d12b17e8b38edb5829b424ce', 'Mahesh S', 'RADEL Corp', 'http://localhost/assemblepoint/ap/assets/img/profileimg/mahesh.jpg', 'fc0e28f00ce13e851856f4a8024bfa46', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_control`
--
ALTER TABLE `access_control`
  ADD PRIMARY KEY (`uid`,`pid`);

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_meta`
--
ALTER TABLE `project_meta`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `project_meta`
--
ALTER TABLE `project_meta`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13252;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
