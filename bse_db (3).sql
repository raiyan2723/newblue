-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2016 at 03:22 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bse_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_bluesky`
--

CREATE TABLE IF NOT EXISTS `about_bluesky` (
  `about_id` int(11) NOT NULL,
  `blue_sky` varchar(3000) NOT NULL,
  `mission` varchar(3000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_bluesky`
--

INSERT INTO `about_bluesky` (`about_id`, `blue_sky`, `mission`) VALUES
(10, '<p align="justify" style="margin-bottom: 15px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1;">Blue Sky Excursions is a Package based wholesale travel club. It is a lifestyle company that focuses on travel and tourism. Blue Sky Excursions is a leader in the leisure travel industry. Blue Sky Excursions is a privately held company based in Mumbai, India with active affiliates Pan South Asia.</p><p align="justify" style="margin-bottom: 15px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1;">The concept and inspiration for Blue Sky Excursions came from the development team that conceptualized the 3 largest Package based travel clubs in the Southern Hemisphere. Together they envisioned combining the power of the travel industry with the convenience of the internet.</p><p align="justify" style="margin-bottom: 15px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1;">After 2 years of research into the dynamics of the Indianonline travel market. Together with a team of specialists in the trade, they developed “the concept”, which is currently being referred to as the travel revolution phenomenon.</p>', '<p align="justify" style="margin-bottom: 15px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1;">We believe in today’s market, outstanding service, quality and value for our members is simply not enough.</p><p align="justify" style="margin-bottom: 15px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1;">We always strive for an integrated and proactive approach; we seek new opportunities to make leisure travel efficient, accommodating and fun.</p><p align="justify" style="margin-bottom: 15px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1;">At Blue Sky Excursions we combine our knowledge and enthusiasm with our members’ ambitions. This is achieved through integration, flexibility and real understanding of working towards mutual goals and superior service delivery. <br style="margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1;">These are the things that make Blue Sky Excursions... <br style="margin: 0px; padding: 0px; -webkit-tap-highlight-color: transparent; zoom: 1;"><span style="-webkit-tap-highlight-color: transparent;">"THE NEXT EVOLUTION IN TRAVEL"</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `add_contact`
--

CREATE TABLE IF NOT EXISTS `add_contact` (
  `a_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_contact`
--

INSERT INTO `add_contact` (`a_id`, `email`, `phone`, `address`) VALUES
(5, 'info@blueskyexcursions.in', '+91-22-4944 4944', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `book_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL,
  `night` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Packages` varchar(100) NOT NULL,
  `staus` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `first_name`, `last_name`, `email`, `phone`, `address`, `night`, `Price`, `Packages`, `staus`) VALUES
(61, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 26347, 'MALAYSIA PACKAGE', 0),
(62, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 26347, 'MALAYSIA PACKAGE', 0),
(63, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 26347, 'MALAYSIA PACKAGE', 0),
(64, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 26347, 'MALAYSIA PACKAGE', 0),
(65, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 26347, 'MALAYSIA PACKAGE', 0),
(66, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 26347, 'MALAYSIA PACKAGE', 0),
(67, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 26347, 'MALAYSIA PACKAGE', 0),
(68, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 26347, 'MALAYSIA PACKAGE', 0),
(69, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 17347, 'SILVER PACKAGE', 0),
(70, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 17347, 'SILVER PACKAGE', 0),
(71, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 26347, 'MALAYSIA PACKAGE', 0),
(72, 'Raj x', 'Mayatri', 'raj@gmail.com', '23554565656', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', '3', 26347, 'MALAYSIA PACKAGE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `c_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`c_id`, `Name`, `email`, `subject`, `message`) VALUES
(2, 'vandana', 'v@gmail.com', 'hello', 'asasASdxfdsfsdfsdfdfds');

-- --------------------------------------------------------

--
-- Table structure for table `discover`
--

CREATE TABLE IF NOT EXISTS `discover` (
  `d_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Active` varchar(11) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discover`
--

INSERT INTO `discover` (`d_id`, `Name`, `Active`) VALUES
(1, 'About', ''),
(2, 'Contact', 'Active'),
(4, 'Safety', 'Active'),
(5, 'Blue Sky Pics', 'Active'),
(6, 'Latest Jobs', 'Active'),
(7, 'Press Releases', 'Active'),
(8, 'Why Us', 'Active'),
(9, 'Blog Posts', 'Active'),
(10, 'Social Connect', 'Active'),
(11, 'Help Topics', 'Active'),
(12, 'Site Map', 'Active'),
(14, '	Policies', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `footer_about`
--

CREATE TABLE IF NOT EXISTS `footer_about` (
  `abt_id` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_about`
--

INSERT INTO `footer_about` (`abt_id`, `content`, `phone`, `email`) VALUES
(2, 'Blue Sky Excursions is a Discount Package based travel club. It is a lifestyle company that focuses on travel and tourism.', '+91-22-4944 4944 ', 'info@blueskyexcursions.in');

-- --------------------------------------------------------

--
-- Table structure for table `home_packages`
--

CREATE TABLE IF NOT EXISTS `home_packages` (
  `id` int(11) NOT NULL,
  `Packages_name` varchar(150) NOT NULL,
  `Country_Name` varchar(200) NOT NULL,
  `City_Name` varchar(200) NOT NULL,
  `Packages_Cost` varchar(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_packages`
--

INSERT INTO `home_packages` (`id`, `Packages_name`, `Country_Name`, `City_Name`, `Packages_Cost`, `image`) VALUES
(5, 'Leisure Packages', 'Thailand', 'Bangkok', '16,000', 'uploads/Home_upload/6369.jpg'),
(6, 'Leisure Packages', 'MALAYSIA', 'Kuala Lampur', '25,000', 'uploads/Home_upload/21882.jpg'),
(7, 'Leisure Package', 'SINGAPORE', 'Changi', '30,000', 'uploads/Home_upload/10425.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `leisure_packages`
--

CREATE TABLE IF NOT EXISTS `leisure_packages` (
  `l_id` int(30) NOT NULL,
  `Packages_Name` varchar(100) NOT NULL,
  `Packages_image` varchar(1000) NOT NULL,
  `Package_Details_titel` varchar(5000) NOT NULL,
  `Package_Entitlement` varchar(3000) NOT NULL,
  `Package_Bokking_Process` varchar(3000) NOT NULL,
  `Package_Cast` float NOT NULL,
  `Online_Charge` float NOT NULL,
  `Other_Charge` float NOT NULL,
  `Total_nights` varchar(50) NOT NULL,
  `Inclusion` varchar(3000) NOT NULL,
  `Exclusion` varchar(5000) NOT NULL,
  `Location_name` varchar(100) NOT NULL,
  `Status` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leisure_packages`
--

INSERT INTO `leisure_packages` (`l_id`, `Packages_Name`, `Packages_image`, `Package_Details_titel`, `Package_Entitlement`, `Package_Bokking_Process`, `Package_Cast`, `Online_Charge`, `Other_Charge`, `Total_nights`, `Inclusion`, `Exclusion`, `Location_name`, `Status`) VALUES
(1, 'SILVER PACKAGE', 'uploads/leisure_packages/1011.jpg', 'Silver Package Details', '2 Night Pattaya | 1 Night Bangkok In A 3 Star Resort/Hotel ', '*The Rates Are Per Person And Not Couple. <br> *Taxes Extra Applicable', 16000, 622, 725, '3', 'Accommodation For 1 Nights In Bangkok Accommodation For 2 Nights In Pattaya Coral Island With Lunch Alcazar Show Half Day Bangkok City Tour, Buddha Temple And Gems Gallery Daily Breakfast & Dinner All Land Transfers*', 'Airfare Visa Cost & Insurance Premium. Peak Season Charges Are Extra. Any Other Expenses Not Mention In The Package Inclusions. Any Other Expenses Of Personal Nature. Tips/Portages At Hotels, Airport & Seaport.', 'Thailand', ''),
(3, 'MALAYSIA PACKAGE', 'uploads/leisure_packages/16683.jpg', 'Package Details', '3 Nights / 4 Days In A 3 Star Resort/Hotel ', '*The Rates Are Per Person And Not Couple.', 25000, 622, 725, '3', 'Accommodation For 2 Nights In Kuala Lumpur, Malaysia Accommodation For 1 Night In Genting Highland One Way Cable Car Ride To Genting Highland Visit To Batu Caves Kuala Lumpur City Tour On SIC Basis Daily Breakfast & Dinner All Land Transfers*', 'Accommodation For 2 Nights In Kuala Lumpur, Malaysia Accommodation For 1 Night In Genting Highland One Way Cable Car Ride To Genting Highland Visit To Batu Caves Kuala Lumpur City Tour On SIC Basis Daily Breakfast & Dinner All Land Transfers*', 'MALAYSIA ', ''),
(6, 'SINGAPORE PACKAGE', 'uploads/leisure_packages/18526.jpg', 'Silver Package Details', '2 Night Pattaya | 1 Night Bangkok In A 3 Star Resort/Hotel ', '*The Rates Are Per Person And Not Couple.  *Taxes Extra Applicable', 25000, 622, 725, '3', 'Accommodation For 1 Nights In Bangkok Accommodation For 2 Nights In Pattaya Coral Island With Lunch Alcazar Show Half Day Bangkok City Tour, Buddha Temple And Gems Gallery Daily Breakfast & Dinner All Land Transfers*', 'Airfare Visa Cost & Insurance Premium. Peak Season Charges Are Extra. Any Other Expenses Not Mention In The Package Inclusions. Any Other Expenses Of Personal Nature. Tips/Portages At Hotels, Airport & Seaport.', 'SINGAPORE', ''),
(7, 'GOLD PACKAGE', 'uploads/leisure_packages/10537.jpg', 'Gold Package Details', '<p><span style="color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 12.9996px; line-height: 21.6651px; background-color: rgb(255, 255, 255);">Blue Sky Excursions is a Discount Package based travel club. It is a lifestyle company that focuses on travel and tourism.</span><br></p>', '<p><span style="color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 12.9996px; line-height: 21.6651px; background-color: rgb(255, 255, 255);">Blue Sky Excursions is a Discount Package based travel club. It is a lifestyle company that focuses on travel and tourism.</span><br></p>', 45000, 622, 725, '3', '<p><span style="color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 12.9996px; line-height: 21.6651px; background-color: rgb(255, 255, 255);">Blue Sky Excursions is a Discount Package based travel club. It is a lifestyle company that focuses on travel and tourism.</span><br></p>', '<p><span style="color: rgb(131, 131, 131); font-family: Lato, Arial, Helvetica, sans-serif; font-size: 12.9996px; line-height: 21.6651px; background-color: rgb(255, 255, 255);">Blue Sky Excursions is a Discount Package based travel club. It is a lifestyle company that focuses on travel and tourism.</span><br></p>', 'THAILAND', '');

-- --------------------------------------------------------

--
-- Table structure for table `location_name`
--

CREATE TABLE IF NOT EXISTS `location_name` (
  `id` int(11) NOT NULL,
  `L_Name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location_name`
--

INSERT INTO `location_name` (`id`, `L_Name`) VALUES
(2, 'THAILAND'),
(4, 'SINGAPORE'),
(5, 'HONGKONG'),
(6, 'DUBAI');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `u_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'user',
  `user_name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `country_code` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `yourself` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `first_name`, `last_name`, `u_pass`, `email`, `user_type`, `user_name`, `phone`, `DOB`, `street_address`, `city`, `zip_code`, `country`, `country_code`, `Address`, `yourself`, `image`, `status`) VALUES
(2, 'Vandana', 'Singh', '1', 'v@gmail.com', 'user', '', 'EDIT PROFILE', '', '', '', '', '', '', 'EDIT PROFILE', 'EDIT PROFILE', 'uploads/User_image/31791.jpg', ''),
(3, 'sonu', 'singh', '2', 's@gmail.com', 'admin', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'neha', 'singh', '3', 'n@gmail.com', 'cms', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'vandana', 'tha', 'aaa', 'ag@gmail.com', 'Agent', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 'Vandana', 'THAILAND', 'sss', 'gh@gmail.com', 'user', '', 'EDIT PROFILE', '', '', '', '', '', '', 'EDIT PROFILE', 'EDIT PROFILE', 'uploads/User_image/8755.jpg', ''),
(52, 'Vandana ', 'THAILAND', 'poi', 'mn@gmail.com', 'user', '', '6565656657', '', '', '', '', '', '', 'LOdha', '', '', ''),
(53, 'cnanda', 'mhu', 'ccc', 'c@gmail.com', 'channel', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, 'Raj x', 'Mayatri', '123', 'raj@gmail.com', 'user', '', '23554565656', '2013-12-04', '', '', '', '', '', 'B-106, Lokhandwala Complex,Above Mc Donalds Andheri(W)-Mumbai-4000 53', 'EDIT PROFILE', 'uploads/User_image/23072.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE IF NOT EXISTS `slider_image` (
  `id` int(11) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`id`, `image`) VALUES
(4, 'uploads/slider/12799.jpg'),
(5, 'uploads/slider/11212.jpg'),
(6, 'uploads/slider/32277.jpg'),
(7, 'uploads/slider/17706.jpg'),
(8, 'uploads/slider/28443.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `travel_news`
--

CREATE TABLE IF NOT EXISTS `travel_news` (
  `t_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_news`
--

INSERT INTO `travel_news` (`t_id`, `title`, `content`, `date`, `image`) VALUES
(2, ' Amazing Places', 'The latest travel news on the most significant developments..', '2016-01-04', 'uploads/News/5020.jpg'),
(3, 'Travel Insurance', 'View the latest travel news, travel tips and wo travel', '2016-04-05', 'uploads/News/4517.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_bluesky`
--
ALTER TABLE `about_bluesky`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `add_contact`
--
ALTER TABLE `add_contact`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `discover`
--
ALTER TABLE `discover`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `footer_about`
--
ALTER TABLE `footer_about`
  ADD PRIMARY KEY (`abt_id`);

--
-- Indexes for table `home_packages`
--
ALTER TABLE `home_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leisure_packages`
--
ALTER TABLE `leisure_packages`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `location_name`
--
ALTER TABLE `location_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_news`
--
ALTER TABLE `travel_news`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_bluesky`
--
ALTER TABLE `about_bluesky`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `add_contact`
--
ALTER TABLE `add_contact`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `discover`
--
ALTER TABLE `discover`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `footer_about`
--
ALTER TABLE `footer_about`
  MODIFY `abt_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `home_packages`
--
ALTER TABLE `home_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `leisure_packages`
--
ALTER TABLE `leisure_packages`
  MODIFY `l_id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `location_name`
--
ALTER TABLE `location_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `travel_news`
--
ALTER TABLE `travel_news`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
