-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 04:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web49`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`) VALUES
(1, ' Helps Nurture Students As They Forge Their Own Paths And Futures. Join Us for an Open House to Learn About the School, Admissions Process & Student Life. Flexible Electives. Top Engineering Program. Student Independence. Incubator Space. Flexible '),
(2, 'Curriculum Helps Nurture Students As They Forge Their Own Paths And Futures. Join Us for an Open House to Learn About the School, Admissions Process & Student Life. Flexible Electives. Top Engineering Program. Student Independence. Incubator Space. Flexible '),
(3, 'op private, co-ed Pre-K to middle school. Full language immersion in Mandarin and Spanish. ');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `banner`) VALUES
(4, 'upload/fb23c4fdba.png'),
(5, 'upload/bc3e2b05fb.png');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(20) NOT NULL,
  `CatName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `CatName`) VALUES
(1, 'ssfdf'),
(2, 'Electronics'),
(4, 'Computer Assosorics'),
(5, 'Sports News'),
(6, 'Books'),
(7, 'Computer Assocories'),
(8, 'Entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `Email` int(20) NOT NULL,
  `Phone_Number` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Messege` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `age` varchar(2) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `City` varchar(255) DEFAULT NULL,
  `division` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `FirstName`, `LastName`, `age`, `Address`, `email`, `date`, `City`, `division`, `zipcode`) VALUES
(1, 'nihal', 'neep', '30', 'mirabazar', 'neep123@gmail', '2022-07-04 09:00:20', 'Sylhet', 'Sylhet', '3100'),
(2, 'sanjida', 'sabiha', '25', 'zakigonj', 'sanjida123@gmail.com', '2022-07-04 09:00:20', 'sylhet', 'Sylhet', '3100'),
(3, 'sanjida', 'sabiha', '40', 'zakigonj', 'sanjida123@gmail.com', '2022-07-04 09:00:20', 'sylhet', 'Sylhet', '3100'),
(4, 'sanjida', 'sabiha', '50', 'zakigonj', 'sanjida123@gmail.com', '2022-07-04 09:00:20', 'sylhet', 'Sylhet', '3100'),
(5, 'nihal', 'neep', '27', 'mirabazar', 'neep123@gmail', '2022-07-04 09:00:20', 'Sylhet', 'Dhaka', '3100'),
(6, 'sanjida', 'sabiha', '29', 'zakigonj', 'sanjida123@gmail.com', '2022-07-04 09:00:20', 'sylhet', 'Sylhet', '3100'),
(7, 'sanjida', 'sabiha', '45', 'zakigonj', 'sanjida123@gmail.com', '2022-07-04 09:00:20', 'sylhet', 'Sylhet', '3100'),
(8, 'sanjida', 'sabiha', '28', 'zakigonj', 'sanjida123@gmail.com', '2022-07-04 09:00:20', 'sylhet', 'Sylhet', '3100');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `Address`, `Phone`, `Email`) VALUES
(20, 'Rangmahal,Bandor Bazar,Sylhet', '1710000012', 'nader@gmail.com'),
(21, 'Bondor Bazar', '18156455', 'nihal@gmail.com'),
(23, 'Bandar Bazar, RangMahal Tower, Sylhet', '+8801975811001', 'naderneep252000@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`) VALUES
(2, 'upload/bdddb78636.png'),
(4, 'upload/3f6877d755.png');

-- --------------------------------------------------------

--
-- Table structure for table `messeage`
--

CREATE TABLE `messeage` (
  `id` int(11) NOT NULL,
  `messeage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messeage`
--

INSERT INTO `messeage` (`id`, `messeage`) VALUES
(1, 'ABCDSELG');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(2555) DEFAULT NULL,
  `catid` int(11) DEFAULT NULL,
  `subCatid` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `newsDate` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `catid`, `subCatid`, `image`, `details`, `newsDate`) VALUES
(1, 'Shinzo Abe death: Shock killing that could change Japan forever', 2, 3, 'upload/4842665335.jpg', '							\r\n							 							\r\n							 hello world		abc												', '2022-08-20 00:00:00'),
(4, 'Mohammed Zubair: The Indian fact-checker arrested for a tweet', 5, 4, 'upload/144dc37af9.jpg', '							\r\n							 hello Everyone							', '2022-09-04 00:00:00'),
(7, ' India city on red alert for further rain', 8, 7, 'upload/e79ec61f08.jpg', '							\r\n							 							\r\n							 							\r\n							 aaaaaaaaaa																					', '2022-09-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(20) NOT NULL,
  `ProductName` varchar(20) NOT NULL,
  `ProductModel` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ProductName`, `ProductModel`, `Price`) VALUES
(3, 'Computer', 'Asus VivoBook22', '355000'),
(4, 'Computer', 'Asus VivoBook', '62000'),
(6, 'Mobile', 'Samsung Galaxy S22', '22000');

-- --------------------------------------------------------

--
-- Table structure for table `slogan`
--

CREATE TABLE `slogan` (
  `id` int(20) NOT NULL,
  `title_slogan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogan`
--

INSERT INTO `slogan` (`id`, `title_slogan`) VALUES
(3, 'Bangladesh');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `SocialLinkName` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `SocialLinkName`) VALUES
(2, 'facebook.com'),
(11, 'Whatsapp.com');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `subcatname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `cat_id`, `subcatname`) VALUES
(1, 1, 'Physics'),
(2, 1, 'chemistry'),
(3, 2, 'VR'),
(4, 5, '    Shakib '),
(5, 6, 'Physics'),
(6, 7, 'Laptop'),
(7, 8, 'Web Series'),
(8, 8, 'Viral');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `Terms` varchar(255) NOT NULL,
  `usertype` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `email`, `mobile`, `gender`, `Terms`, `usertype`) VALUES
(1, 'Nader', 'Neep', 'neep', '12345678', 'naderneep252000@gmail.com', '01795811001', 'Male', 'yes', 'admin'),
(2, 'Neymar', 'Junior', 'neymarjr', '123456789', 'neymarjunior@gmail.com', '01819710384', 'Male', 'yes', 'admin'),
(3, 'Ab', 'De villiars', 'abdvilliars', '123456789', 'abd@gmail.com', '01717252800', 'Male', 'yes', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messeage`
--
ALTER TABLE `messeage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catid` (`catid`),
  ADD KEY `subCatid` (`subCatid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slogan`
--
ALTER TABLE `slogan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messeage`
--
ALTER TABLE `messeage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slogan`
--
ALTER TABLE `slogan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`catid`) REFERENCES `catagory` (`id`),
  ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`subCatid`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `catagory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
