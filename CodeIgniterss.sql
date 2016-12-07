-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2016 at 10:25 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CodeIgniterss`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(15) NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fullpath` varchar(255) CHARACTER SET utf8 NOT NULL,
  `origname` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `firstname`, `lastname`, `keywords`, `filename`, `fullpath`, `origname`) VALUES
(17, 'Areg', 'Ghazaryan', 'Php, JavaScript', '73d3b2dd613106a4d01353bdd1c6accd.docx', '/Applications/XAMPP/xamppfiles/htdocs/CodeIgniter/uploads/73d3b2dd613106a4d01353bdd1c6accd.docx', 'Areg_Ghazaryan_CV.docx'),
(18, 'armen ', 'poghosyan', 'ysu, css, phpsenior', 'a49ce2d0c9ff22485e8d1ed1da53312c.docx', '/Applications/XAMPP/xamppfiles/htdocs/CodeIgniter/uploads/a49ce2d0c9ff22485e8d1ed1da53312c.docx', 'Areg_Ghazaryan_CV.docx'),
(19, 'armen ', 'sarksyan', 'Php, JavaScript', '7ddbf647c6d4fbfdda2fac55c0764a68.pdf', '/Applications/XAMPP/xamppfiles/htdocs/CodeIgniter/uploads/7ddbf647c6d4fbfdda2fac55c0764a68.pdf', 'AccessibleRoleChecklist.pdf'),
(20, 'armenuhi', 'arshakyan', 'seua, phpmiddle, ', 'c02f1de4186b77bbdacab9ca7443a8bf.docx', '/Applications/XAMPP/xamppfiles/htdocs/CodeIgniter/uploads/c02f1de4186b77bbdacab9ca7443a8bf.docx', 'Եվ_ահա_կրկին_այստեղ_այս_պահին_մտքերս_են_հեղեղ_դարձել_և_կարիք_ունեն_արդեն_իսկ_մարմին_առնելու…եվ_ես_նրանց_մարմնավորում_եմ.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
