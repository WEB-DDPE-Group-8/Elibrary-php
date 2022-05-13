-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 12:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a2zlibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `BookID` int(11) NOT NULL,
  `Downloads` varchar(11) NOT NULL DEFAULT '0',
  `Author` varchar(50) DEFAULT NULL,
  `Title` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Genre` mediumtext NOT NULL,
  `Description` longtext NOT NULL,
  `Publisher` varchar(80) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `Cover` varchar(100) NOT NULL,
  `Uploaded_On` datetime NOT NULL DEFAULT current_timestamp(),
  `UserID` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Likes` mediumint(9) NOT NULL DEFAULT 0,
  `Dislikes` mediumint(9) NOT NULL DEFAULT 0,
  `Book` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'pending',
  `ID` int(11) NOT NULL,
  `ApporvedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BookID`, `Downloads`, `Author`, `Title`, `Year`, `Genre`, `Description`, `Publisher`, `Language`, `Cover`, `Uploaded_On`, `UserID`, `Price`, `Likes`, `Dislikes`, `Book`, `Status`, `ID`, `ApporvedBy`) VALUES
(1, '5,094,805', 'Brown, Dan', 'Da Vinci Code,The', 'Monday, March 1, 2004', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(2, '3,758,936', 'James, E. L.', 'Fifty Shades of Grey', 'Thursday, April 12, 2012', 'F2.5  Romance & Sagas', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(3, '3,193,946', 'Brown, Dan', 'Angels and Demons', 'Tuesday, July 1, 2003', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(4, '2,950,264', 'Rowling, J.K.', 'Harry Potter and the Half-blood Prince:Children\'s Edition', 'Saturday, April 9, 2005', 'Y2.1  Children\'s Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Bloomsbury Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(5, '2,479,784', 'James, E. L.', 'Fifty Shades Darker', 'Thursday, April 26, 2012', 'F2.5  Romance & Sagas', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'Espa?ol', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(6, '2,315,405', 'Meyer, Stephenie', 'Twilight', 'Saturday, December 9, 2006', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Little, Brown Book Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(7, '2,233,570', 'Larsson, Stieg', 'Girl with the Dragon Tattoo,The:Millennium Trilogy', 'Thursday, July 24, 2008', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Quercus Grp', '	Mandarin', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(8, '2,193,928', 'James, E. L.', 'Fifty Shades Freed', 'Thursday, April 26, 2012', 'F2.5  Romance & Sagas', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(9, '2,183,031', 'Brown, Dan', 'Lost Symbol,The', 'Saturday, April 25, 2009', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(10, '2,152,737', 'Meyer, Stephenie', 'New Moon', 'Thursday, September 6, 2007', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Little, Brown Book Grp', 'Hindi', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(11, '2,062,145', 'Brown, Dan', 'Deception Point', 'Saturday, May 1, 2004', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(12, '2,052,876', 'Meyer, Stephenie', 'Eclipse', 'Friday, June 27, 2008', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Little, Brown Book Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(13, '1,979,552', 'Haddon, Mark', 'Curious Incident of the Dog in the Night-time,The', 'Thursday, April 1, 2004', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(14, '1,928,900', 'Brown, Dan', 'Digital Fortress', 'Friday, March 5, 2004', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(15, '1,814,784', 'Larsson, Stieg', 'Girl Who Played with Fire,The:Millennium Trilogy', 'Thursday, July 9, 2009', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Quercus Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(16, '1,787,118', 'Meyer, Stephenie', 'Breaking Dawn', 'Saturday, May 24, 2008', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Little, Brown Book Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(17, '1,783,535', 'Carle, Eric', 'Very Hungry Caterpillar,The:The Very Hungry Caterpillar', 'Thursday, September 29, 1994', 'Y1.3  Picture Books', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Penguin Grp', 'Chinese', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(18, '1,781,269', 'Donaldson, Julia', 'Gruffalo,The', 'Saturday, August 21, 1999', 'Y1.3  Picture Books', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Pan Macmillan Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(19, '1,555,135', 'Larsson, Stieg', 'Girl Who Kicked the Hornets\' Nest,The:Millennium Trilogy', 'Saturday, January 23, 2010', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Quercus Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(20, '1,539,428', 'McEwan, Ian', 'Atonement', 'Thursday, May 2, 2002', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(21, '1,310,176', 'Martel, Yann', 'Life of Pi', 'Saturday, May 17, 2003', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Canongate Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(22, '1,181,093', 'Mosse, Kate', 'Labyrinth', 'Saturday, July 16, 2005', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Orion Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(23, '1,115,549', 'McCall Smith, Alexander', 'No.1 Ladies\' Detective Agency,The:No.1 Ladies\' Detective Agency S.', 'Thursday, June 5, 2003', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Little, Brown Book Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(24, '1,104,403', 'McKeith, Gillian', 'You are What You Eat:The Plan That Will Change Your Life', 'Thursday, June 17, 2004', 'T9.4  Fitness & Diet', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Penguin Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(25, '1,087,262', 'Grisham, John', 'Broker,The', 'Saturday, August 27, 2005', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(26, '1,054,196', 'Atkins, Robert C.', 'Dr. Atkins\' New Diet Revolution:The No-hunger, Luxurious Weight Loss P', 'Thursday, January 2, 2003', 'T9.4  Fitness & Diet', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(27, '1,023,688', 'Truss, Lynne', 'Eats, Shoots and Leaves:The Zero Tolerance Approach to Punctuation', 'Thursday, November 6, 2003', 'T2.1  Usage & Writing Guides', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Profile Books Group', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(28, '1,002,314', 'Pullman, Philip', 'Amber Spyglass,The:His Dark Materials S.', 'Friday, September 14, 2001', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Scholastic Ltd. Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(29, '992,846', 'Gray, John', 'Men are from Mars, Women are from Venus:A Practical Guide for Improvin', 'Sunday, August 1, 1993', 'T8.7  Popular Culture & Media: General Interest', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'HarperCollins Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(30, '986,753', 'French, Dawn', 'Dear Fatty', 'Thursday, October 9, 2008', 'T4.1A  Autobiography:  The Arts', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'Polish', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(31, '962,515', 'Rubenfeld, Jed', 'Interpretation of Murder,The', 'Monday, January 15, 2007', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Headline Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(32, '956,114', 'Coelho, Paulo', 'Alchemist,The:A Fable About Following Your Dream', 'Saturday, January 3, 1998', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'HarperCollins Grp', 'Chinese', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(33, '945,640', 'O\'Grady, Paul', 'At My Mother\'s Knee ...:and Other Low Joints', 'Wednesday, September 24, 2008', 'T4.1A  Autobiography:  The Arts', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(34, '905,086', 'McKenna, Paul', 'I Can Make You Thin', 'Monday, January 17, 2005', 'T9.4  Fitness & Diet', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(35, '890,847', 'Bryson, Bill', 'Down Under', 'Saturday, May 5, 2001', 'T8.5  Travel Writing', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(36, '869,671', 'Grisham, John', 'Summons,The', 'Saturday, September 28, 2002', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(37, '856,540', 'Ali, Monica', 'Brick Lane', 'Saturday, May 1, 2004', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(38, '842,535', 'Donaldson, Julia', 'Room on the Broom', 'Friday, September 20, 2002', 'Y1.3  Picture Books', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Pan Macmillan Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(39, '828,215', 'Hornby, Nick', 'About a Boy', 'Thursday, April 4, 2002', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Penguin Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(40, '816,907', 'Dawkins, Richard', 'God Delusion,The', 'Monday, May 21, 2007', 'T8.0  Popular Science', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0),
(41, '816,585', '0', '\"Beano\" Annual,The', 'Wednesday, September 1, 2004', 'Y3.1  Children\'s Annuals', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'D.C. Thomson Grp', 'Chinese', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(42, '791,507', 'Pelzer, Dave', 'Lost Boy,The:A Foster Child\'s Search for the Love of a Family', 'Saturday, April 7, 2001', 'T4.0  Biography: General', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Orion Grp', 'English', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Pending', 0, 0),
(43, '791,095', 'Oliver, Jamie', 'Jamie\'s Ministry of Food:Anyone Can Learn to Cook in 24 Hours', 'Friday, October 3, 2008', 'T16.0  Food & Drink: General', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Penguin Grp', 'Polish', '', '2022-05-14 01:04:33', 1, 0, 0, 0, '', 'Approved', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `Books` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `Books`) VALUES
(1, 'kjb'),
(2, 'jnjdkgn'),
(3, 'jnjdkgn'),
(4, 'jnjdkgn'),
(5, 'jnjdkgn'),
(6, 'jnjdkgn'),
(17, 'jnjdkgn'),
(18, 'jnjdkgn'),
(20, 'jnjdkgn'),
(21, 'jnjdkgn'),
(22, 'jnjdkgn'),
(23, 'jnjdkgn'),
(24, 'jnjdkgn'),
(25, 'jnjdkgn'),
(26, 'jnjdkgn'),
(27, 'jnjdkgn'),
(28, 'jnjdkgn'),
(29, 'jnjdkgn'),
(30, 'jnjdkgn'),
(31, 'jnjdkgn'),
(32, 'jnjdkgn'),
(33, 'jnjdkgn'),
(34, 'jnjdkgn'),
(35, 'jnjdkgn'),
(36, 'jnjdkgn'),
(37, 'jnjdkgn'),
(38, 'jnjdkgn'),
(39, 'jnjdkgn'),
(40, 'jnjdkgn'),
(41, 'jnjdkgn'),
(42, 'jnjdkgn'),
(43, 'jnjdkgn'),
(44, 'jnjdkgn'),
(45, 'jnjdkgn'),
(46, 'jnjdkgn');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `UserID` int(11) NOT NULL,
  `Content` longtext NOT NULL,
  `BookID` int(11) NOT NULL,
  `reaction` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`UserID`, `Content`, `BookID`, `reaction`) VALUES
(1, 'This book is insightful', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(14) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `IsAdmin` tinyint(4) NOT NULL DEFAULT 0,
  `Interests` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Cart_Id` int(11) NOT NULL DEFAULT 1,
  `CreditCard` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Email`, `PhoneNumber`, `FirstName`, `LastName`, `Password`, `IsAdmin`, `Interests`, `Cart_Id`, `CreditCard`) VALUES
(1, 'Tibex', 'tibesolomomn7@gmail.com', 923621874, 'Tibebe', 'Solomon', '1234', 1, 'Essay_History_Poetry', 1, 0),
(2, 'Tsion', 'tsion@gmail.com', 911111111, 'Tsion', 'Tesfaye', '1234', 1, 'kk', 2, 0),
(3, 'Selina', 'selina@gmail.com', 911111111, 'Selina', 'lname', '1234', 0, 'kk', 3, 0),
(4, 'Betty', 'betty@gmail.com', 911111111, 'Betty', 'lname', '1234', 1, 'kk', 4, 0),
(5, 'Tesfa', 'tesfa@gmail.com', 911425020, 'Tesfa', 'Amsalu', '1234', 1, 'kk', 5, 0),
(6, 'yoni', 'yoni@gmail.com', 977777777, 'Yoni', 'TS', '1234', 0, 'kk', 6, 0),
(7, 'USERNAME', 'E@EMAIL.COM', 789456123, 'FIRST', 'LAST', '$2y$10$AtEBT7D.9u968bj9mwjQWeeZfz9M.ubhHyUcsg6cyG0cjGCvqXoPK', 1, 'kk', 43, 0),
(9, 'jki5', 'E@EML.COM', 944484848, 'kk', 'kk', '$2y$10$7Q/bOYKu09u39NjViMmQY.lKIpoV6WS9GkaSmqJXaoQg6uXs2xQGq', 1, '', 45, 0),
(10, 'kkkkkk', 'tibd@jdfn.com', 123456, 'qwer', 'qwer', '$2y$10$w1bmaLXUb07n8wKDGL89oOzn9Q3ngJP63R5/KDqcEClGENsCW6FOK', 1, '', 46, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `Cart-Id` int(11) NOT NULL,
  `Books` longtext NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`Cart-Id`, `Books`, `ID`) VALUES
(1, '1', 1),
(2, '1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`BookID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Cart-Id` (`Id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD KEY `UserId` (`UserID`),
  ADD KEY `BookID` (`BookID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `Email_isAdmin` (`Email`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `UserID_2` (`UserID`),
  ADD KEY `cart_id` (`Cart_Id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`Cart-Id`),
  ADD KEY `Cart-Id` (`Cart-Id`),
  ADD KEY `ID` (`ID`),
  ADD KEY `BookID` (`Books`(768));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Cart-Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`BookID`) REFERENCES `books` (`BookID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Cart_Id`) REFERENCES `cart` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
