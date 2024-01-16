-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 02:30 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catID` int(11) NOT NULL,
  `catName` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `catName`) VALUES
(1, 'buy'),
(2, 'sold'),
(3, 'rent');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `propertyID` int(11) NOT NULL,
  `propertyName` varchar(20) NOT NULL,
  `images` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `catID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`propertyID`, `propertyName`, `images`, `description`, `Address`, `price`, `catID`) VALUES
(1001, 'Fourth Avenue Blackt', 'images/buy1.jpg', 'Walk to Station and Westpoint - Investors - Already Tenanted\r\n10/2-4 FOURTH AVENUE, BLACKTOWN\r\nThis beautifully refurbished apartment features :\r\n* Lovely tenants fixed leasing term\r\n* Spacious master bedroom with mirrored built ins\r\n* The second bedroom has built-ins\r\n* Open plan living and dining room with new air-conditioning unit, lovely new carpets\r\n* Gas cooking kitchen with good benchtop space\r\n* Spacious laundry\r\n* Lovely private balcony with leafy views\r\n* Secured single lock up garage', '10/2-4 Fourth Avenue, Blacktown, NSW 2148', '418000.00', 1),
(1002, 'FIFTH AVENUE', 'images/buy2.jpg', 'Features includes\r\n- Two good sized bedrooms, built-in wardrobes.\r\n- Open living and dining with good size balcony.\r\n- Spacious kitchen with stainless modern appliances.\r\n- Modern bathroom with separate spa bath tub & shower\r\n- Internal laundry & ample storage.\r\n- Lock up garage with plenty of visitor parking spaces\r\n- Security building with intercom\r\n- Walking distance to shopping centre, train station, bus stop and hospital.', '13/16-18 FIFTH AVENUE, BLACKTOWN', '400000.00', 1),
(1003, 'Tenby Street', 'images/rent1.jpg', 'Further special features include:\r\n\r\n- Master bedroom with its own private balcony, built-ins and en-suite\r\n- 2nd and 3rd bedrooms with built-ins\r\n- Combined lounge and dining rooms\r\n- Modern kitchen with electric cooking\r\n- Internal laundry and additional toilet\r\n- Split system air conditioning\r\n- Single garage with internal access\r\n- Low maintenance gardens\r\n- Pool in complex', '42/5 Tenby Street, Blacktown, NSW 2148', '440.00', 3),
(1004, 'Love St', 'images/rent2.jpg', 'features:\r\n- Two bedrooms, both with built in robes\r\n- Spacious living areas with an air conditioner in the lounge room\r\n- Spacious kitchen with dishwasher\r\n- Large undercover entertaining area\r\n- Large front yard\r\n- Close to Marayong South Public School, local shops and local transport.', '48 Love St, Blacktown, NSW 2148', '450.00', 3),
(1005, 'De Castella Drive', 'images/sold1.jpg', 'This immaculately presented street facing three bedroom duplex is peacefully positioned within walking distance to schools, shops, transport and in one of the districts best areas. Once you enter, you feel the warmth and charm the home exudes!\r\n\r\n- Spacious bedrooms featuring gorgeous timber flooring, mirrored built-in wardrobes and ensuite to main.\r\n- Well-equipped kitchen boasting quality appliances, gas cooking and plenty of cupboard space\r\n- Large tiled living areas showcasing open plan living which optimises light and space\r\n- Well-equipped bathroom highlighting quality fixtures and fittings\r\n- Entertainment area overlooking the great sized rear yard - perfect for entertaining', '61 De Castella Drive, Blacktown, NSW 2148', '700000.00', 2),
(1006, 'Kurrajong Crescent', 'images/sold2.jpg', 'Lovingly cared for by it\'s original owners for 59 years, the time has come for this homes new owner to love it just as much. Impeccably maintained and improved over time, this home offers a large, versatile floorplan within minutes to everything you could need. In the heart of South Blacktown and in the catchment area for Blacktown South Public School, this home is ready for you to move in and make it your own.\r\nThe home offers:\r\n- 4 sizeable bedrooms, main room with ceiling fan\r\n- Large lounge and dining rooms\r\n- Quality kitchen with ample cupboard and bench space\r\n- Impeccable bathroom\r\n- Large family room\r\n- Huge covered deck which overlooks the impeccable, low-care rear yard\r\n- Carport plus garage + shed', '39 Kurrajong Crescent, Blacktown, NSW 2148', '795000.00', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`propertyID`),
  ADD KEY `catID` (`catID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `property_ibfk_1` FOREIGN KEY (`catID`) REFERENCES `category` (`catID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
