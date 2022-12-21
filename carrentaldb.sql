-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 03:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrentaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `pick` varchar(225) NOT NULL,
  `pdate` date NOT NULL,
  `rlocation` varchar(225) NOT NULL,
  `rdate` date NOT NULL,
  `fname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(111) NOT NULL,
  `carno` varchar(22) NOT NULL,
  `id` longblob NOT NULL,
  `searial` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`pick`, `pdate`, `rlocation`, `rdate`, `fname`, `email`, `phone`, `carno`, `id`, `searial`) VALUES
('', '2022-06-24', 'MWANZA  NYEGEZI ', '2022-06-26', 'PIUS DESDERY', 'piusmartin987@gmail.com', '0754752908', 'T 785 EDS', 0x6b6973612e504e47, 93122),
('DAR ES SALAAM MLANDINZI ', '2022-06-23', 'MWANZA  NYEGEZI ', '2022-06-24', 'piusdesdey', 'piusmartin987@gmail.com', '0754752908', 'T 785 EDS', 0x6c6561682e657865, 62110),
('DAR ES SALAAM MLANDINZI ', '2022-07-03', 'DAR ES SALAAM MLANDINZI ', '2022-07-04', 'EMELINA', 'emelinamgumba@gmail.com', '0719694052', 'T 785 EDS', 0x61626f75745f75735f696d67322e6a7067, 91276),
('DODOMA ', '2022-07-04', 'KASULU STAND ', '2022-07-05', 'PIUS DESDERY', 'donardisrael36@gmail.com', '0719694052', 'T 785 EDS', 0x61626f75745f73657276696365735f6661715f62672e6a7067, 1031);

-- --------------------------------------------------------

--
-- Table structure for table `carreg`
--

CREATE TABLE `carreg` (
  `id` int(225) NOT NULL,
  `carno` varchar(225) NOT NULL,
  `carname` varchar(225) NOT NULL,
  `cost` double NOT NULL,
  `date` date NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carreg`
--

INSERT INTO `carreg` (`id`, `carno`, `carname`, `cost`, `date`, `image`) VALUES
(3, 'T 645 DFG', 'Ford_Escape_SEL_FWD', 25, '2019-01-03', 0x323031335f466f72645f4573636170655f53454c5f4657445f6465616c65722e6a7067),
(4, 'T 455 DCG', 'Ford-Escape-Back-Angle', 20, '2019-01-03', 0x323031332d466f72642d4573636170652d4261636b2d416e676c652e6a7067),
(5, 'T 600 DHD', 'BMW_M5-turbo', 30, '2019-01-03', 0x424d575f4d352d747572626f5f3633335f31303234783736382e6a7067),
(6, 'T 600 EGE', 'BMW X5-1', 32, '2019-01-03', 0x424d572058352d312e4a5047),
(7, 'T 234 EDS', 'Hummer Luxiuary ', 100, '2019-01-03', 0x48756d6d6572204c75786975617279204361722e6a7067),
(8, 'T 634 FDS', 'bmw_6_2b', 34, '2019-01-03', 0x626d775f365f32622e6a7067),
(10, 'T 785 EDS', 'Ferrari', 23, '2019-12-02', 0x466572726172695f3631325f3233365f31303234783736382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(111) NOT NULL,
  `username` varchar(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(39) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(1, 'admin', 'PIUS', 'DESDERY', 'piusmartin987@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'ADMIN'),
(2, 'admin', 'PIUS', 'DESDERY', 'piusmartin987@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'ADMIN'),
(3, 'KAIJAGE', 'JUMA', 'oa', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(4, 'FABIAN', 'desdery', 'DESDERY', 'piusmartin987@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'AGENT'),
(5, 'FABIAN', 'desdery', 'DESDERY', 'piusmartin987@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'AGENT'),
(6, 'SERINA', 'PIUS', 'MARIN', 'piusmartin987@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'AGENT'),
(7, 'ISRAEL', 'israel', 'donard', 'donardisrael36@gmail.com', '2aac0e27587428fe2aafe882c5974a85', 'AGENT'),
(8, 'EMELINA', 'emerina', 'mgumba', 'emelinamgumba@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'AGENT'),
(9, 'FURAHA', 'furaha', 'issa', 'furahaissa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'AGENT');

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id` int(111) NOT NULL,
  `station` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `station`) VALUES
(1, 'MWANZA  NYEGEZI'),
(2, 'DAR ES SALAAM MLANDINZI'),
(3, 'MSAMVU'),
(4, 'KASULU STAND'),
(5, 'DODOMA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carreg`
--
ALTER TABLE `carreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carreg`
--
ALTER TABLE `carreg`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
