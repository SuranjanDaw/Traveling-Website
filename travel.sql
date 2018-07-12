-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2018 at 04:52 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `pack_id` int(11) DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `tour` varchar(10) DEFAULT NULL,
  `numPer` int(11) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `pack_id`, `uname`, `tour`, `numPer`, `price`) VALUES
(1, 1, 'Suranjan Daw', 'tour2', 3, '2500'),
(2, 1, 'Suranjan Daw', 'tour2', 3, '7500'),
(3, 1, 'Suranjan Daw', 'tour1', 2, '4000'),
(4, 1, 'Suranjan Daw', 'tour1', 2, '4000'),
(5, 9, 'Suranjan Daw', 'tour1', 2, '60000'),
(6, 4, 'Suranjan Daw', 'tour1', 3, '30000');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) DEFAULT NULL,
  `umail` varchar(30) DEFAULT NULL,
  `mob` varchar(10) DEFAULT NULL,
  `message` varchar(300) DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `uname`, `umail`, `mob`, `message`, `u_id`) VALUES
(1, 'Suranjan Daw', 'suranjandaw@gmail.com', '8017417238', 'abc', 1000),
(2, 'Suranjan Daw', 'suranjandaw@gmail.com', '8017417238', 'I love PHP', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `pack`
--

CREATE TABLE IF NOT EXISTS `pack` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `pack` varchar(20) DEFAULT NULL,
  `tour1` varchar(300) DEFAULT NULL,
  `tour2` varchar(300) DEFAULT NULL,
  `price1` varchar(10) DEFAULT NULL,
  `price2` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pack`
--

INSERT INTO `pack` (`p_id`, `pack`, `tour1`, `tour2`, `price1`, `price2`) VALUES
(1, 'Bengal', 'Howrah - Dal Housie - Eden Gardens - Princep Ghat - Park Street - Indian Museum - Dakhineshwar- Belur Mathe ', 'Darjeeling - 2 Nights Kalimpong - 1 Night Gangtok - 2 Nights Pelling - 1 Night', '2000', '2500'),
(2, 'Assam ', 'Guwahati - Shillong-Shillong - Cherrapunjee - Shillong-Shillong - Guwahati', 'Guwahati (Arrival)-Kaziranga National Park (Sightseeing)-Kaziranga - Guwahati (Sightseeing)-Guwahati (departure)', '3000', '3500'),
(3, 'Orissa', 'Bhubaneswar - Puri - Konark - Puri - Chilika Lake-Departure from Bhubaneswar', 'Balasore - Similipal Park-- Panchlingeshwar - Kuldiha-Bhitarkanika-Bhadrak - Chandbali - Dangamal - Bhitarkanika Sanctuary-Ekkakula island - Garhimata-Bhubaneswar - Nandankanan Nandankanan-Bhubaneswar - Chilika Lake-Bhubaneswar', '1500', '2000'),
(4, 'Mumbai', 'Arrival at Mumbai - City tour - Monuments -Shopping - Experience Local Market-Dharavi - Departure', 'Mumbai - Sindhudurg- Tarkarli Beach -Goa -Vasco - Kolhapur -Ajanta- Nashik-Mumbai', '10000', '15000'),
(5, 'Goa', 'Goa - Stay SImple Peninsula Beach Resort / Similar', 'CHECK IN GOA-NORTH GOA TOUR BY GTDC COACH (Miramar Residency)- SOUTH GOA TOUR BY GTDC AC COACH-CHECK OUT', '10000', '15000'),
(6, 'Jammu and Kashmir', ' ARRIVE JAMMU – SRINAGAR (250 KMS)  -SRINAGAR & THE CITY OF MUGHAL-SRINAGAR TO SONMARG - SRINAGAR-SRINAGAR TO PAHALGAM- PAHALGAM TO GULMARG-GULMARG (SIGHT SEEING)- SRINAGAR (52 KMS)-SRINAGAR – JAMMU (250 KMS)', 'ARRIVE JAMMU-KATRA - VAISHNO DEVI-KATRA-KATRA –PATNITOP- PATNITOP - JAMMU', '10000', '15000'),
(7, 'Uttarakhand', 'Delhi – Nainital-Nainital - Bhimtal - Sattal- Nainital-Nainital - Mukteshwar - Nainital-Nainital - Corbett-Corbett – Delhi', 'Delhi – Haridwar (5 to 6 hrs)-Haridwar – Joshimath (6 to 7 hrs)-Joshimath - Govindghat - Ghangaria- Ghangaria - Hemkund Sahib - Ghangaria-Ghangaria - Valley of flowers - Ghangaria-Ghangaria - Govindghat - Rudraprayag-Rudraprayag - Rishikesh – Haridwar (7 hrs)-Haridwar- Delhi for departure', '10000', '15000'),
(8, 'Delhi', 'Delhi - Agra - Jaipur -  Delhi', 'Arrive at Delhi-Delhi – Agra (Taj Mahal Closed on Friday)-Agra – Fatehpur Sikri – Jaipur (235km)- Jaipur-- Mandawa / Alsisar (Shekhawati)-- Delhi (270km) 05-06hrs)', '20000', '15000'),
(9, 'America', '2 Night in New York or similar-1 Night in Washington D.C or similar-1 Night in Buffalo or similar-1 Night in New Jersey or similar', 'New York (2N)-Washington (1N)-Buffalo (1N)-San Francisco (1N)-Fresno (1N)-Las Vegas (2N)-Los Angeles (1N)-', '30000', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE IF NOT EXISTS `pic` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `image1` longblob,
  `image2` longblob,
  `image3` longblob,
  `image4` longblob,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`p_id`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 0x696d616765732f31312e6a7067, 0x696d616765732f31322e6a7067, 0x696d616765732f31332e6a7067, 0x696d616765732f31342e6a7067),
(2, 0x696d616765732f32312e6a7067, 0x696d616765732f32322e6a7067, 0x696d616765732f32332e6a7067, 0x696d616765732f32342e6a7067),
(3, 0x696d616765732f33312e6a7067, 0x696d616765732f33322e6a7067, 0x696d616765732f33332e6a7067, 0x696d616765732f33342e6a7067),
(4, 0x696d616765732f34312e6a7067, 0x696d616765732f34322e6a7067, 0x696d616765732f34332e6a7067, 0x696d616765732f34342e6a7067),
(5, 0x696d616765732f35312e6a7067, 0x696d616765732f35322e6a7067, 0x696d616765732f35332e6a7067, 0x696d616765732f35342e6a7067),
(6, 0x696d616765732f36312e6a7067, 0x696d616765732f36322e6a7067, 0x696d616765732f36332e6a7067, 0x696d616765732f36342e6a7067),
(7, 0x696d616765732f37312e6a7067, 0x696d616765732f37322e6a7067, 0x696d616765732f37332e6a7067, 0x696d616765732f37342e6a7067),
(8, 0x696d616765732f38312e6a7067, 0x696d616765732f38322e6a7067, 0x696d616765732f38332e6a7067, 0x696d616765732f38342e6a7067),
(9, 0x696d616765732f39312e6a7067, 0x696d616765732f39322e6a7067, 0x696d616765732f39332e6a7067, 0x696d616765732f39342e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(20) DEFAULT NULL,
  `u_email` varchar(30) DEFAULT NULL,
  `u_pass` varchar(10) DEFAULT NULL,
  `u_mob` varchar(10) DEFAULT NULL,
  `u_dob` date DEFAULT NULL,
  `u_add` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1008 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`u_id`, `u_name`, `u_email`, `u_pass`, `u_mob`, `u_dob`, `u_add`) VALUES
(1000, 'Suranjan Daw', 'suranjandaw@gmail.com', '123456', '8017417238', '1998-09-25', '396/12 Becharam Chatterjee Road, Kolkata:700061'),
(1001, 'suranjandaw', 'suranjandaw@gmail.com', '456', '8017417238', '2018-07-14', '396/12 BC Road'),
(1002, 'suranjandaw88', 'suranjandaw@gmail.com', '789', '8017417238', '2018-07-29', '396/12 BC Road'),
(1003, 'Arpan Chakravarty', 'suranjandaw@gmail.com', '44', '8017417238', '2018-07-07', '396/12 BC Road'),
(1004, 'Arpan Chakravarty', 'suranjandaw@gmail.com', '44', '8017417238', '2018-07-07', '396/12 BC Road'),
(1005, 'Trisha Ghosh', 'trisha@gmail.com', '45', '8956234512', '2018-07-22', '396/12 BC Road'),
(1006, 'Mandira Daw', 'mandiradaw12@gmail.com', '0000', '9830908032', '1971-11-01', '396/12 BC Road'),
(1007, 'Sanjib Daw', 'suranjandaw@gmail.com', '1234567', '8017417238', '2018-07-01', '396/12 BC Road');
