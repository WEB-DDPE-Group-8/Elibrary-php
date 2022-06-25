-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 12:59 AM
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
-- Database: `a`
--
CREATE DATABASE IF NOT EXISTS `a` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `a`;

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
(1, '9', 'Brown, Dan', 'Da Vinci Code,The', 'Monday, March 1, 2004', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(2, '3,758,936', 'James, E. L.', 'Fifty Shades of Grey', 'Thursday, April 12, 2012', 'F2.5  Romance & Sagas', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(3, '3,193,946', 'Brown, Dan', 'Angels and Demons', 'Tuesday, July 1, 2003', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(4, '2,950,264', 'Rowling, J.K.', 'Harry Potter and the Half-blood Prince:Children\'s Edition', 'Saturday, April 9, 2005', 'Y2.1  Children\'s Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(5, '2,479,784', 'James, E. L.', 'Fifty Shades Darker', 'Thursday, April 26, 2012', 'F2.5  Romance & Sagas', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'Espa?ol', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(7, '2,233,570', 'Larsson, Stieg', 'Girl with the Dragon Tattoo,The:Millennium Trilogy', 'Thursday, July 24, 2008', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', '	Mandarin', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(8, '2,193,928', 'James, E. L.', 'Fifty Shades Freed', 'Thursday, April 26, 2012', 'F2.5  Romance & Sagas', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(9, '2,183,031', 'Brown, Dan', 'Lost Symbol,The', 'Saturday, April 25, 2009', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(10, '2,152,737', 'Meyer, Stephenie', 'New Moon', 'Thursday, September 6, 2007', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'Hindi', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(11, '3', 'Brown, Dan', 'Deception Point', 'Saturday, May 1, 2004', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(13, '1,979,552', 'Haddon, Mark', 'Curious Incident of the Dog in the Night-time,The', 'Thursday, April 1, 2004', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(14, '1,928,900', 'Brown, Dan', 'Digital Fortress', 'Friday, March 5, 2004', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(15, '1,814,784', 'Larsson, Stieg', 'Girl Who Played with Fire,The:Millennium Trilogy', 'Thursday, July 9, 2009', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(16, '1,787,118', 'Meyer, Stephenie', 'Breaking Dawn', 'Saturday, May 24, 2008', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(17, '1,783,535', 'Carle, Eric', 'Very Hungry Caterpillar,The:The Very Hungry Caterpillar', 'Thursday, September 29, 1994', 'Y1.3  Picture Books', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'Chinese', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(18, '1,781,269', 'Donaldson, Julia', 'Gruffalo,The', 'Saturday, August 21, 1999', 'Y1.3  Picture Books', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(19, '1,555,135', 'Larsson, Stieg', 'Girl Who Kicked the Hornets\' Nest,The:Millennium Trilogy', 'Saturday, January 23, 2010', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(20, '1,539,428', 'McEwan, Ian', 'Atonement', 'Thursday, May 2, 2002', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(22, '1,181,093', 'Mosse, Kate', 'Labyrinth', 'Saturday, July 16, 2005', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(23, '1,115,549', 'McCall Smith, Alexander', 'No.1 Ladies\' Detective Agency,The:No.1 Ladies\' Detective Agency S.', 'Thursday, June 5, 2003', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(24, '2', 'McKeith, Gillian', 'You are What You Eat:The Plan That Will Change Your Life', 'Thursday, June 17, 2004', 'T9.4  Fitness & Diet', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(26, '1,054,196', 'Atkins, Robert C.', 'Dr. Atkins\' New Diet Revolution:The No-hunger, Luxurious Weight Loss P', 'Thursday, January 2, 2003', 'T9.4  Fitness & Diet', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Pending', 0, 0),
(27, '1,023,688', 'Truss, Lynne', 'Eats, Shoots and Leaves:The Zero Tolerance Approach to Punctuation', 'Thursday, November 6, 2003', 'T2.1  Usage & Writing Guides', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Pending', 0, 0),
(28, '1,002,314', 'Pullman, Philip', 'Amber Spyglass,The:His Dark Materials S.', 'Friday, September 14, 2001', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(29, '992,846', 'Gray, John', 'Men are from Mars, Women are from Venus:A Practical Guide for Improvin', 'Sunday, August 1, 1993', 'T8.7  Popular Culture & Media: General Interest', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(30, '986,753', 'French, Dawn', 'Dear Fatty', 'Thursday, October 9, 2008', 'T4.1A  Autobiography:  The Arts', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'Polish', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Pending', 0, 0),
(32, '965', 'Coelho, Paulo', 'Alchemist,The:A Fable About Following Your Dream', 'Saturday, January 3, 1998', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'Chinese', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(33, '945,640', 'O\'Grady, Paul', 'At My Mother\'s Knee ...:and Other Low Joints', 'Wednesday, September 24, 2008', 'T4.1A  Autobiography:  The Arts', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(34, '905,086', 'McKenna, Paul', 'I Can Make You Thin', 'Monday, January 17, 2005', 'T9.4  Fitness & Diet', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Pending', 0, 0),
(35, '890,847', 'Bryson, Bill', 'Down Under', 'Saturday, May 5, 2001', 'T8.5  Travel Writing', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Pending', 0, 0),
(36, '877', 'Grisham, John', 'Summons,The', 'Saturday, September 28, 2002', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(37, '857', 'Ali, Monica', 'Brick Lane', 'Saturday, May 1, 2004', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0),
(38, '842,535', 'Donaldson, Julia', 'Room on the Broom', 'Friday, September 20, 2002', 'Y1.3  Picture Books', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(39, '828,215', 'Hornby, Nick', 'About a Boy', 'Thursday, April 4, 2002', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(40, '817', 'Dawkins, Richard', 'God Delusion,The', 'Monday, May 21, 2007', 'T8.0  Popular Science', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(41, 'The\"', '817', 'Beano\" Annual', 'Rejected', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '0', '', 'Y3.1  Children\'s Annuals', '', '2022-06-08 23:36:16', 1, 0, 25, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', '258456', 0, 0),
(42, '814', 'Pelzer, Dave', 'Lost Boy,The:A Foster Child\'s Search for the Love of a Family', 'Saturday, April 7, 2001', 'T4.0  Biography: General', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'English', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(43, '800', 'Oliver, Jamie', 'Jamie\'s Ministry of Food:Anyone Can Learn to Cook in 24 Hours', 'Friday, October 3, 2008', 'T16.0  Food & Drink: General', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', '', 'Polish', '', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(45, '6', '', 'A book on how to read', '2020-02-22', ' ', '        ', '', 'English', '../uploads/A book on how to read/51EG8AyJiQL._AC_SY780_.jpg', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'pending', 0, 0),
(46, '0', 'anon', 'book name2', '2020-02-22', ' ', '        ', '', 'English', '../uploads/book name2/51EG8AyJiQL._AC_SY780_.jpg', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'pending', 0, 0),
(47, '0', 'anon', 'It works', '2020-02-22', ' ', '        ', '', 'English', '../uploads/It works/PXL_20220120_065408784.jpg', '2022-06-08 23:36:16', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 0, 0),
(48, '18', 'tibebe', 'for tsi', '2020-02-22', ' ', '        about', '', 'English', '../uploads/for tsi/51EG8AyJiQL._AC_SY780_.jpg', '2022-06-08 23:36:16', 1, 0, 0, 0, '../uploads/for tsi/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL DEFAULT 1,
  `CreatedAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `Price`, `UserID`, `BookID`, `CreatedAt`) VALUES
(3, 200, 0, 0, '2022-06-04'),
(4, 200, 0, 0, '2022-06-04'),
(5, 200, 0, 0, '2022-06-04'),
(6, 200, 0, 0, '2022-06-04'),
(17, 200, 0, 0, '2022-06-04'),
(18, 200, 0, 0, '2022-06-04'),
(20, 200, 0, 0, '2022-06-04'),
(21, 200, 0, 0, '2022-06-04'),
(22, 200, 0, 0, '2022-06-04'),
(23, 200, 0, 0, '2022-06-04'),
(24, 200, 0, 0, '2022-06-04'),
(25, 200, 0, 0, '2022-06-04'),
(26, 200, 0, 0, '2022-06-04'),
(27, 200, 0, 0, '2022-06-04'),
(28, 200, 0, 0, '2022-06-04'),
(29, 200, 0, 0, '2022-06-04'),
(30, 200, 0, 0, '2022-06-04'),
(31, 200, 0, 0, '2022-06-04'),
(32, 200, 0, 0, '2022-06-04'),
(33, 200, 0, 0, '2022-06-04'),
(34, 200, 0, 0, '2022-06-04'),
(35, 200, 0, 0, '2022-06-04'),
(36, 200, 0, 0, '2022-06-04'),
(37, 200, 0, 0, '2022-06-04'),
(38, 200, 0, 0, '2022-06-04'),
(39, 200, 0, 0, '2022-06-04'),
(40, 200, 0, 0, '2022-06-04'),
(41, 200, 0, 0, '2022-06-04'),
(42, 200, 0, 0, '2022-06-04'),
(43, 200, 0, 0, '2022-06-04'),
(44, 200, 0, 0, '2022-06-04'),
(45, 200, 0, 0, '2022-06-04'),
(46, 200, 0, 0, '2022-06-04'),
(47, 200, 0, 0, '2022-06-04'),
(54, NULL, 0, 0, '2022-06-04'),
(55, NULL, 0, 0, '2022-06-04'),
(56, NULL, 0, 0, '2022-06-04'),
(60, NULL, 25, 37, '2022-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(1024) NOT NULL,
  `IMAGE` varchar(1024) NOT NULL,
  `Status` varchar(10) DEFAULT 'active',
  `CreatedAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID`, `NAME`, `DESCRIPTION`, `IMAGE`, `Status`, `CreatedAt`) VALUES
(33, 'event 4', 'Event 3', '../multimedia/events/1.jpg', 'active', '2022-06-04'),
(34, 'event 2', 'A presentation', '../multimedia/events/2.jpg', 'active', '2022-06-04'),
(35, 'Event 3', 'A presentation', '../multimedia/events/3.jpg', 'inactive', '2022-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `UserID` int(11) NOT NULL,
  `Content` longtext NOT NULL,
  `BookID` int(11) NOT NULL,
  `reaction` tinyint(1) DEFAULT 2,
  `reviewID` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`UserID`, `Content`, `BookID`, `reaction`, `reviewID`, `Date`) VALUES
(1, 'This book is insightful', 1, 1, 1, '2022-05-14 21:25:10'),
(1, 'This book is insightful', 1, 1, 2, '2022-05-14 21:25:10'),
(2, 'Best book ive read in a while', 1, 1, 3, '2022-05-14 21:25:10'),
(3, 'Couldve been better executed', 1, 1, 4, '2022-05-14 21:25:10'),
(4, 'Worst book ever', 1, 1, 5, '2022-05-14 21:25:10'),
(1, 'I have no opinions on this book', 1, 1, 6, '2022-05-14 21:25:10'),
(1, 'This book is insightful', 1, 2, 7, '2022-05-14 21:25:10'),
(2, 'Best book ive read in a while', 1, 2, 8, '2022-05-14 21:25:10'),
(3, 'Couldve been better executed', 1, 2, 9, '2022-05-14 21:25:10'),
(4, 'Worst book ever', 1, 2, 10, '2022-05-14 21:25:10'),
(1, 'I have no opinions on this book', 1, 2, 11, '2022-05-14 21:25:10'),
(1, 'This book is insightful', 1, 3, 12, '2022-05-14 21:25:10'),
(2, 'Best book ive read in a while', 1, 3, 13, '2022-05-14 21:25:10'),
(3, 'Couldve been better executed', 1, 3, 14, '2022-05-14 21:25:10'),
(4, 'Worst book ever', 1, 3, 15, '2022-05-14 21:25:10'),
(1, 'I have no opinions on this book', 1, 3, 16, '2022-05-14 21:25:10'),
(1, 'This book is insightful', 1, 4, 17, '2022-05-14 21:25:10'),
(2, 'Best book ive read in a while', 1, 4, 18, '2022-05-14 21:25:10'),
(3, 'Couldve been better executed', 1, 4, 19, '2022-05-14 21:25:10'),
(4, 'Worst book ever', 1, 4, 20, '2022-05-14 21:25:10'),
(1, 'I have no opinions on this book', 1, 4, 21, '2022-05-14 21:25:10'),
(1, ', m mklmlkmlk', 1, 1, 24, '2022-05-15 00:00:09'),
(1, ', m mklmlkmlk', 1, 1, 25, '2022-05-15 00:03:56'),
(2, 'jhkjbjkb', 1, 2, 26, '2022-05-15 02:08:35'),
(2, 'kkk', 1, 2, 27, '2022-05-15 02:11:17'),
(2, 'kkk', 1, 2, 28, '2022-05-15 02:12:48'),
(2, 'kkk', 1, 2, 29, '2022-05-15 02:12:56'),
(2, 'kkk', 1, 2, 30, '2022-05-15 02:13:01'),
(2, 'Cant wait  to finish this master piece', 5, 2, 31, '2022-05-15 02:14:30'),
(2, 'klnlkn', 39, 2, 32, '2022-05-15 02:17:47'),
(11, 'This book is totally misnamed', 19, 2, 33, '2022-05-15 18:17:15'),
(11, 'Thats  a weird comment', 39, 2, 34, '2022-05-16 12:07:01'),
(11, 'Thats  a weird comment', 39, 2, 35, '2022-05-16 12:07:06'),
(11, 'Thats  a weird comment', 39, 2, 36, '2022-05-16 12:09:03'),
(11, 'Thats  a weird comment', 39, 2, 37, '2022-05-16 12:09:45'),
(11, 'Thats  a weird comment', 39, 2, 38, '2022-05-16 12:09:56'),
(11, 'i am baba', 1, 2, 39, '2022-05-17 10:03:39'),
(3, 'its a good book\r\n', 43, 2, 40, '2022-05-17 11:43:40'),
(3, 'its a good book\r\n', 43, 2, 41, '2022-05-17 11:43:48'),
(5, 'ere bado new', 50, 2, 42, '2022-05-17 12:32:18'),
(5, 'i like this book', 51, 2, 43, '2022-05-17 12:41:51'),
(5, 'A book ', 54, 2, 44, '2022-05-17 12:53:22'),
(1, 'jjuujuj', 1, 2, 45, '2022-05-26 19:38:33'),
(1, 'jjuujuj', 1, 2, 46, '2022-05-26 19:38:38'),
(1, 'jjuujuj', 1, 2, 47, '2022-05-26 19:38:46');

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
  `IsAdmin` varchar(5) NOT NULL DEFAULT 'User',
  `Interests` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `CreditCard` int(11) NOT NULL,
  `About` varchar(200) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Active',
  `CreatedAt` date NOT NULL DEFAULT current_timestamp(),
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Email`, `PhoneNumber`, `FirstName`, `LastName`, `Password`, `IsAdmin`, `Interests`, `CreditCard`, `About`, `Status`, `CreatedAt`, `code`) VALUES
(1, 'Tibex', 'tibesolomon7@gmail.com', 923621874, 'Tibebe', 'Solomon', '$2y$10$btxKganAz2DBSOpnLixEDeiEoKCzFxg64L8Aqc8emrecEv.5NTwfO', 'Admin', 'Essay_History_Poetry', 0, 'I am a writer who one day hopes to make it big in the industry and leave a mark on literary history', 'Approved', '2022-06-04', 170938),
(2, 'Tsion', 'tsion@gmail.com', 911111111, 'Tsion', 'Tesfayevvv', '$2y$10$cZdBqLNznYAX6pi76oM1WO3eASxrutzNWHue0fKVU9vWz1dZR69dO', 'Admin', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Approved', '2022-06-04', 0),
(3, 'Selina', 'selina@gmail.com', 911111111, 'Selina', 'lname', '$2y$10$1zRDaQpDH6YaWKKh0HM/Zer86SHzt9jDvWL8HMDBG22IeEnhs4bDy', 'User', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(4, 'Betty', 'betty@gmail.com', 911111111, 'Betty', 'lname', '$2y$10$M6Q6ON9D1fRD.Tdb2Y9nQOLZeTcXiSANerS21.tQHJ0XxZaxR8Sp6', 'Admin', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(5, 'Tesfa', 'tesfa@gmail.com', 911425020, 'Tesfa', 'Amsalu', '$2y$10$X99PYK6.5UTWagcdOUT5E.qdXkVNejqsP6.zcytA7EdYwDmQXpbXe', 'Admin', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(6, 'yoni', 'yoni@gmail.com', 977777777, 'Yoni', 'TS', '$2y$10$B.YnxYjaUIR5cBBWkIqLcOjeejkxSWPN0QtIPELECkYSk5quk82Lu', 'User', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(7, 'USERNAME', 'E@EMAIL.COM', 789456123, 'First', 'Last', '$2y$10$AtEBT7D.9u968bj9mwjQWeeZfz9M.ubhHyUcsg6cyG0cjGCvqXoPK', 'Admin', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(9, 'jki5', 'E@EML.COM', 944484848, 'kk', 'kk', '$2y$10$7Q/bOYKu09u39NjViMmQY.lKIpoV6WS9GkaSmqJXaoQg6uXs2xQGq', 'Admin', '', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(11, 'bababababa', 'baba@gmvil.com', 0, 'bababba', 'bababba', '$2y$10$0ophg2vtSMbvJDyAEqxlhurJXkhKWtJPxR11UGvlrShrlR8dJtepq', 'User', 'Comedy_Detective_Thriller', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(12, 'FIKIR', 'fikir@gmail.com', 2147483647, 'Eyosias', 'Solomon', '$2y$10$AIxe3t/lhZ1odVW.0wkeRuWlM5hORRoDHdNESWOSZMwXpW4QO38r2', 'Admin', 'Action_Crime_Historical', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(15, 'kevin_tom', 'k@gmail.com', 0, 'kevin', 'Solomonkkk', '$2y$10$04OnEULPnbETXhToPITljO3w6libETLdeWnrjY3fXNdudtycsiBfW', 'User', '', 0, '', 'Deactivated', '2022-06-04', 0),
(16, 'vincy', 'v@gmail.com', 0, 'Tibebe', 'Solomonkkk', '$2y$10$FTiQjld.c90UIRnEMl4g9.r1PM7xIljje88gBh9qm9dsgggcWRdj.', 'User', '', 0, '', 'Deactivated', '2022-06-04', 0),
(17, 'tim_lee', 't@gmail.com', 0, 'Tibebe', 'Solomonkkk', '$2y$10$sGZBNuhNeTmUYziAslNi9eeGkv/H0pMCSazK7reK.WrR0bf3kwgTm', 'User', '', 0, '', 'Active', '2022-06-04', 0),
(18, 'jane', 'j@gmail.com', 0, 'Tibebe', 'Solomonkkk', '$2y$10$WewC9aNZ6RkxX48X6.AH6.1VNItIfJmIbM81AsYF.ynMqOUp5Vtpe', 'User', '', 0, '', 'Deactivated', '2022-06-04', 0),
(30, '', '', 0, 'Tibebe', 'Solomonkkk', '$2y$10$RELAKVkg9pOYnXTbQILFMOgG9RW0Tm735fpbq7DuI.kq/IZhHAFa2', 'User', '', 0, '', 'Active', '2022-06-04', 0),
(49, 'sulta', 'fuli@gmail.com', 2147483647, 'bilo', 'obil', '$2y$10$2UVZryDXf/rtIN1gMLB/BuPm1lseDt989dija4gci1qpdVoe8SX0K', 'Admin', '', 0, '', 'Active', '2022-06-04', 0),
(51, 'buil', 'jklji@gmil.com', 2147483647, 'jklji', 'jklji', '$2y$10$OYP95MltCei4xzZ.Abzty.pfHLDPba5747.TD2o36LNqeowVmFKJ2', 'Admin', '', 0, '', 'Active', '2022-06-04', 0),
(53, 'newest', 'bhbh@gmail.com', 2147483647, 'gg', 'gg', '$2y$10$W6PiE1lvvaFX5W8pPLENherTuSxgZ9t2C4U2j4ZAtHLKL7M6U2NLS', 'Admin', 'Adventure_Detective_Cookbook', 0, 'i am a new member here to learn', 'Active', '2022-06-04', 0);

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
  ADD PRIMARY KEY (`BookID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Cart-Id` (`Id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewID`),
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
  ADD KEY `UserID_2` (`UserID`);

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
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Cart-Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`BookID`) REFERENCES `books` (`BookID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Database: `a2zlibrary`
--
CREATE DATABASE IF NOT EXISTS `a2zlibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `a2zlibrary`;

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
(1, '9', 'Brown, Dan', 'Da Vinci Code,The', 'Monday, March 1, 2004', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 2, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(2, '3,758,936', 'James, E. L.', 'Fifty Shades of Grey', 'Thursday, April 12, 2012', 'F2.5  Romance & Sagas', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 2, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(3, '3,193,946', 'Brown, Dan', 'Angels and Demons', 'Tuesday, July 1, 2003', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 2, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(4, '2,950,264', 'Rowling, J.K.', 'Harry Potter and the Half-blood Prince:Children\'s Edition', 'Saturday, April 9, 2005', 'Y2.1  Children\'s Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Bloomsbury Grp', 'English', '', '2022-05-14 01:04:33', 2, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(5, '2,479,784', 'James, E. L.', 'Fifty Shades Darker', 'Thursday, April 26, 2012', 'F2.5  Romance & Sagas', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'Espa?ol', '', '2022-05-14 01:04:33', 2, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(6, '2,315,405', 'Meyer, Stephenie', 'Twilight', 'Saturday, December 9, 2006', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Little, Brown Book Grp', 'English', '', '2022-05-14 01:04:33', 2, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(7, '2,233,570', 'Larsson, Stieg', 'Girl with the Dragon Tattoo,The:Millennium Trilogy', 'Thursday, July 24, 2008', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Quercus Grp', '	Mandarin', '', '2022-05-14 01:04:33', 2, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(8, '2,193,928', 'James, E. L.', 'Fifty Shades Freed', 'Thursday, April 26, 2012', 'F2.5  Romance & Sagas', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 2, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(9, '2,183,031', 'Brown, Dan', 'Lost Symbol,The', 'Saturday, April 25, 2009', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 2, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(10, '2,152,737', 'Meyer, Stephenie', 'New Moon', 'Thursday, September 6, 2007', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Little, Brown Book Grp', 'Hindi', '', '2022-05-14 01:04:33', 2, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(11, '3', 'Brown, Dan', 'Deception Point', 'Saturday, May 1, 2004', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(12, '2,052,876', 'Meyer, Stephenie', 'Eclipse', 'Friday, June 27, 2008', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Little, Brown Book Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(13, '1,979,552', 'Haddon, Mark', 'Curious Incident of the Dog in the Night-time,The', 'Thursday, April 1, 2004', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(14, '1,928,900', 'Brown, Dan', 'Digital Fortress', 'Friday, March 5, 2004', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(15, '1,814,784', 'Larsson, Stieg', 'Girl Who Played with Fire,The:Millennium Trilogy', 'Thursday, July 9, 2009', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Quercus Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(16, '1,787,118', 'Meyer, Stephenie', 'Breaking Dawn', 'Saturday, May 24, 2008', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Little, Brown Book Grp', 'English', '', '2022-05-14 01:04:33', 3, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(17, '1,783,535', 'Carle, Eric', 'Very Hungry Caterpillar,The:The Very Hungry Caterpillar', 'Thursday, September 29, 1994', 'Y1.3  Picture Books', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Penguin Grp', 'Chinese', '', '2022-05-14 01:04:33', 3, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(18, '1,781,269', 'Donaldson, Julia', 'Gruffalo,The', 'Saturday, August 21, 1999', 'Y1.3  Picture Books', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Pan Macmillan Grp', 'English', '', '2022-05-14 01:04:33', 3, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(19, '1,555,135', 'Larsson, Stieg', 'Girl Who Kicked the Hornets\' Nest,The:Millennium Trilogy', 'Saturday, January 23, 2010', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Quercus Grp', 'English', '', '2022-05-14 01:04:33', 3, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(20, '1,539,428', 'McEwan, Ian', 'Atonement', 'Thursday, May 2, 2002', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 3, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(21, '1,310,176', 'Martel, Yann', 'Life of Pi', 'Saturday, May 17, 2003', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Canongate Grp', 'English', '', '2022-05-14 01:04:33', 4, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(22, '1,181,093', 'Mosse, Kate', 'Labyrinth', 'Saturday, July 16, 2005', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Orion Grp', 'English', '', '2022-05-14 01:04:33', 4, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(23, '1,115,549', 'McCall Smith, Alexander', 'No.1 Ladies\' Detective Agency,The:No.1 Ladies\' Detective Agency S.', 'Thursday, June 5, 2003', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Little, Brown Book Grp', 'English', '', '2022-05-14 01:04:33', 4, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(24, '2', 'McKeith, Gillian', 'You are What You Eat:The Plan That Will Change Your Life', 'Thursday, June 17, 2004', 'T9.4  Fitness & Diet', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Penguin Grp', 'English', '', '2022-05-14 01:04:33', 4, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(25, '1,087,262', 'Grisham, John', 'Broker,The', 'Saturday, August 27, 2005', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 4, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Pending', 5, 0),
(26, '1,054,196', 'Atkins, Robert C.', 'Dr. Atkins\' New Diet Revolution:The No-hunger, Luxurious Weight Loss P', 'Thursday, January 2, 2003', 'T9.4  Fitness & Diet', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 4, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Pending', 5, 0),
(27, '1,023,688', 'Truss, Lynne', 'Eats, Shoots and Leaves:The Zero Tolerance Approach to Punctuation', 'Thursday, November 6, 2003', 'T2.1  Usage & Writing Guides', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Profile Books Group', 'English', '', '2022-05-14 01:04:33', 4, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Pending', 5, 0),
(28, '1,002,314', 'Pullman, Philip', 'Amber Spyglass,The:His Dark Materials S.', 'Friday, September 14, 2001', 'Y2.2  Young Adult Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Scholastic Ltd. Grp', 'English', '', '2022-05-14 01:04:33', 5, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(29, '992,846', 'Gray, John', 'Men are from Mars, Women are from Venus:A Practical Guide for Improvin', 'Sunday, August 1, 1993', 'T8.7  Popular Culture & Media: General Interest', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'HarperCollins Grp', 'English', '', '2022-05-14 01:04:33', 5, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(30, '986,753', 'French, Dawn', 'Dear Fatty', 'Thursday, October 9, 2008', 'T4.1A  Autobiography:  The Arts', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'Polish', '', '2022-05-14 01:04:33', 5, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Pending', 5, 0),
(31, '962,515', 'Rubenfeld, Jed', 'Interpretation of Murder,The', 'Monday, January 15, 2007', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Headline Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(32, '965', 'Coelho, Paulo', 'Alchemist,The:A Fable About Following Your Dream', 'Saturday, January 3, 1998', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'HarperCollins Grp', 'Chinese', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(33, '945,640', 'O\'Grady, Paul', 'At My Mother\'s Knee ...:and Other Low Joints', 'Wednesday, September 24, 2008', 'T4.1A  Autobiography:  The Arts', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(34, '905,086', 'McKenna, Paul', 'I Can Make You Thin', 'Monday, January 17, 2005', 'T9.4  Fitness & Diet', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 5, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Pending', 5, 0),
(35, '890,847', 'Bryson, Bill', 'Down Under', 'Saturday, May 5, 2001', 'T8.5  Travel Writing', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 5, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Pending', 5, 0),
(36, '877', 'Grisham, John', 'Summons,The', 'Saturday, September 28, 2002', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Random House Grp', 'English', '', '2022-05-14 01:04:33', 5, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(37, '857', 'Ali, Monica', 'Brick Lane', 'Saturday, May 1, 2004', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 5, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(38, '842,535', 'Donaldson, Julia', 'Room on the Broom', 'Friday, September 20, 2002', 'Y1.3  Picture Books', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Pan Macmillan Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(39, '828,215', 'Hornby, Nick', 'About a Boy', 'Thursday, April 4, 2002', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Penguin Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(40, '817', 'Dawkins, Richard', 'God Delusion,The', 'Monday, May 21, 2007', 'T8.0  Popular Science', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 2, 0),
(41, '817', '0', '\"Beano\" Annual,The', 'Wednesday, September 1, 2004', 'Y3.1  Children\'s Annuals', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'D.C. Thomson Grp', 'Chinese', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 2, 0),
(42, '814', 'Pelzer, Dave', 'Lost Boy,The:A Foster Child\'s Search for the Love of a Family', 'Saturday, April 7, 2001', 'T4.0  Biography: General', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Orion Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 2, 0),
(43, '800', 'Oliver, Jamie', 'Jamie\'s Ministry of Food:Anyone Can Learn to Cook in 24 Hours', 'Friday, October 3, 2008', 'T16.0  Food & Drink: General', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Penguin Grp', 'Polish', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 2, 0),
(50, '0', '', '', '2021-02-22', ' ', '        ', '', 'English', '../uploads//51EG8AyJiQL._AC_SY780_.jpg', '2022-05-17 12:31:40', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 2, 0),
(51, '6', '', 'A book on how to read', '2020-02-22', ' ', '        ', '', 'English', '../uploads/A book on how to read/51EG8AyJiQL._AC_SY780_.jpg', '2022-05-17 12:41:32', 5, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'pending', 2, 0),
(53, '0', 'anon', 'book name2', '2020-02-22', ' ', '        ', '', 'English', '../uploads/book name2/51EG8AyJiQL._AC_SY780_.jpg', '2022-05-17 12:46:56', 5, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'pending', 2, 0),
(54, '0', 'anon', 'It works', '2020-02-22', ' ', '        ', '', 'English', '../uploads/It works/PXL_20220120_065408784.jpg', '2022-05-17 12:52:50', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 2, 0),
(56, '18', 'tibebe', 'for tsi', '2020-02-22', ' ', '        about', '', 'English', '../uploads/for tsi/51EG8AyJiQL._AC_SY780_.jpg', '2022-06-05 15:30:50', 2, 0, 0, 0, '../uploads/for tsi/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 2, 0),
(57, '0', '45', '45', '2022-06-22', ' Classics', '4554', '', 'Amharic', '../uploads/45/51EG8AyJiQL._AC_SY780_.jpg', '2022-06-05 15:36:49', 2, 0, 0, 0, '../uploads/45/Adler-Mortimer-How-To-Read-A-Book.pdf', 'pending', 2, 0),
(58, '0', '45', '45', '2022-06-22', ' Classics', '4554', '', 'Amharic', '../uploads/45/51EG8AyJiQL._AC_SY780_.jpg', '2022-06-05 15:38:51', 2, 0, 0, 0, '../uploads/45/Adler-Mortimer-How-To-Read-A-Book.pdf', 'pending', 2, 0),
(59, '80', '46', '46', '2022-06-14', ' Short', '46', '', 'Spanish', '../uploads/46/51EG8AyJiQL._AC_SY780_.jpg', '2022-06-05 15:39:26', 2, 0, 0, 0, '../uploads/46/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Id` int(11) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `BookID` int(11) NOT NULL DEFAULT 1,
  `CreatedAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Id`, `Price`, `UserID`, `BookID`, `CreatedAt`) VALUES
(3, 200, 0, 0, '2022-06-04'),
(4, 200, 0, 0, '2022-06-04'),
(5, 200, 0, 0, '2022-06-04'),
(6, 200, 0, 0, '2022-06-04'),
(17, 200, 0, 0, '2022-06-04'),
(18, 200, 0, 0, '2022-06-04'),
(20, 200, 0, 0, '2022-06-04'),
(21, 200, 0, 0, '2022-06-04'),
(22, 200, 0, 0, '2022-06-04'),
(23, 200, 0, 0, '2022-06-04'),
(24, 200, 0, 0, '2022-06-04'),
(25, 200, 0, 0, '2022-06-04'),
(26, 200, 0, 0, '2022-06-04'),
(27, 200, 0, 0, '2022-06-04'),
(28, 200, 0, 0, '2022-06-04'),
(29, 200, 0, 0, '2022-06-04'),
(30, 200, 0, 0, '2022-06-04'),
(31, 200, 0, 0, '2022-06-04'),
(32, 200, 0, 0, '2022-06-04'),
(33, 200, 0, 0, '2022-06-04'),
(34, 200, 0, 0, '2022-06-04'),
(35, 200, 0, 0, '2022-06-04'),
(36, 200, 0, 0, '2022-06-04'),
(37, 200, 0, 0, '2022-06-04'),
(38, 200, 0, 0, '2022-06-04'),
(39, 200, 0, 0, '2022-06-04'),
(40, 200, 0, 0, '2022-06-04'),
(41, 200, 0, 0, '2022-06-04'),
(42, 200, 0, 0, '2022-06-04'),
(43, 200, 0, 0, '2022-06-04'),
(44, 200, 0, 0, '2022-06-04'),
(45, 200, 0, 0, '2022-06-04'),
(46, 200, 0, 0, '2022-06-04'),
(47, 200, 0, 0, '2022-06-04'),
(54, NULL, 0, 0, '2022-06-04'),
(55, NULL, 0, 0, '2022-06-04'),
(56, NULL, 0, 0, '2022-06-04'),
(60, NULL, 25, 37, '2022-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `DESCRIPTION` varchar(1024) NOT NULL,
  `IMAGE` varchar(1024) NOT NULL,
  `Status` varchar(10) DEFAULT 'active',
  `CreatedAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID`, `NAME`, `DESCRIPTION`, `IMAGE`, `Status`, `CreatedAt`) VALUES
(33, 'event 4', 'Event 3', '../multimedia/events/1.jpg', 'active', '2022-06-04'),
(34, 'event 2', 'A presentation', '../multimedia/events/2.jpg', 'active', '2022-06-04'),
(35, 'Event 3', 'A presentation', '../multimedia/events/3.jpg', 'inactive', '2022-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `UserID` int(11) NOT NULL,
  `Content` longtext NOT NULL,
  `BookID` int(11) NOT NULL,
  `reaction` tinyint(1) DEFAULT 2,
  `reviewID` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`UserID`, `Content`, `BookID`, `reaction`, `reviewID`, `Date`) VALUES
(1, 'This book is insightful', 1, 1, 1, '2022-05-14 21:25:10'),
(1, 'This book is insightful', 1, 1, 2, '2022-05-14 21:25:10'),
(2, 'Best book ive read in a while', 1, 1, 3, '2022-05-14 21:25:10'),
(3, 'Couldve been better executed', 1, 1, 4, '2022-05-14 21:25:10'),
(4, 'Worst book ever', 1, 1, 5, '2022-05-14 21:25:10'),
(1, 'I have no opinions on this book', 1, 1, 6, '2022-05-14 21:25:10'),
(1, 'This book is insightful', 1, 2, 7, '2022-05-14 21:25:10'),
(2, 'Best book ive read in a while', 1, 2, 8, '2022-05-14 21:25:10'),
(3, 'Couldve been better executed', 1, 2, 9, '2022-05-14 21:25:10'),
(4, 'Worst book ever', 1, 2, 10, '2022-05-14 21:25:10'),
(1, 'I have no opinions on this book', 1, 2, 11, '2022-05-14 21:25:10'),
(1, 'This book is insightful', 1, 3, 12, '2022-05-14 21:25:10'),
(2, 'Best book ive read in a while', 1, 3, 13, '2022-05-14 21:25:10'),
(3, 'Couldve been better executed', 1, 3, 14, '2022-05-14 21:25:10'),
(4, 'Worst book ever', 1, 3, 15, '2022-05-14 21:25:10'),
(1, 'I have no opinions on this book', 1, 3, 16, '2022-05-14 21:25:10'),
(1, 'This book is insightful', 1, 4, 17, '2022-05-14 21:25:10'),
(2, 'Best book ive read in a while', 1, 4, 18, '2022-05-14 21:25:10'),
(3, 'Couldve been better executed', 1, 4, 19, '2022-05-14 21:25:10'),
(4, 'Worst book ever', 1, 4, 20, '2022-05-14 21:25:10'),
(1, 'I have no opinions on this book', 1, 4, 21, '2022-05-14 21:25:10'),
(1, ', m mklmlkmlk', 1, 1, 24, '2022-05-15 00:00:09'),
(1, ', m mklmlkmlk', 1, 1, 25, '2022-05-15 00:03:56'),
(2, 'jhkjbjkb', 1, 2, 26, '2022-05-15 02:08:35'),
(2, 'kkk', 1, 2, 27, '2022-05-15 02:11:17'),
(2, 'kkk', 1, 2, 28, '2022-05-15 02:12:48'),
(2, 'kkk', 1, 2, 29, '2022-05-15 02:12:56'),
(2, 'kkk', 1, 2, 30, '2022-05-15 02:13:01'),
(2, 'Cant wait  to finish this master piece', 5, 2, 31, '2022-05-15 02:14:30'),
(2, 'klnlkn', 39, 2, 32, '2022-05-15 02:17:47'),
(11, 'This book is totally misnamed', 19, 2, 33, '2022-05-15 18:17:15'),
(11, 'Thats  a weird comment', 39, 2, 34, '2022-05-16 12:07:01'),
(11, 'Thats  a weird comment', 39, 2, 35, '2022-05-16 12:07:06'),
(11, 'Thats  a weird comment', 39, 2, 36, '2022-05-16 12:09:03'),
(11, 'Thats  a weird comment', 39, 2, 37, '2022-05-16 12:09:45'),
(11, 'Thats  a weird comment', 39, 2, 38, '2022-05-16 12:09:56'),
(11, 'i am baba', 1, 2, 39, '2022-05-17 10:03:39'),
(3, 'its a good book\r\n', 43, 2, 40, '2022-05-17 11:43:40'),
(3, 'its a good book\r\n', 43, 2, 41, '2022-05-17 11:43:48'),
(5, 'ere bado new', 50, 2, 42, '2022-05-17 12:32:18'),
(5, 'i like this book', 51, 2, 43, '2022-05-17 12:41:51'),
(5, 'A book ', 54, 2, 44, '2022-05-17 12:53:22'),
(1, 'jjuujuj', 1, 2, 45, '2022-05-26 19:38:33'),
(1, 'jjuujuj', 1, 2, 46, '2022-05-26 19:38:38'),
(1, 'jjuujuj', 1, 2, 47, '2022-05-26 19:38:46');

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
  `IsAdmin` varchar(5) NOT NULL DEFAULT 'User',
  `Interests` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `CreditCard` int(11) NOT NULL,
  `About` varchar(200) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'Active',
  `CreatedAt` date NOT NULL DEFAULT current_timestamp(),
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Email`, `PhoneNumber`, `FirstName`, `LastName`, `Password`, `IsAdmin`, `Interests`, `CreditCard`, `About`, `Status`, `CreatedAt`, `code`) VALUES
(1, 'Tibex', 'tibesolomon7@gmail.com', 923621874, 'Tibebe', 'Solomon', '$2y$10$btxKganAz2DBSOpnLixEDeiEoKCzFxg64L8Aqc8emrecEv.5NTwfO', 'Admin', 'Essay_History_Poetry', 0, 'I am a writer who one day hopes to make it big in the industry and leave a mark on literary history', 'Approved', '2022-06-04', 170938),
(2, 'Tsion', 'tsion@gmail.com', 911111111, 'Tsion', 'Tesfayevvv', '$2y$10$cZdBqLNznYAX6pi76oM1WO3eASxrutzNWHue0fKVU9vWz1dZR69dO', 'Admin', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Approved', '2022-06-04', 0),
(3, 'Selina', 'selina@gmail.com', 911111111, 'Selina', 'lname', '$2y$10$1zRDaQpDH6YaWKKh0HM/Zer86SHzt9jDvWL8HMDBG22IeEnhs4bDy', 'User', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(4, 'Betty', 'betty@gmail.com', 911111111, 'Betty', 'lname', '$2y$10$M6Q6ON9D1fRD.Tdb2Y9nQOLZeTcXiSANerS21.tQHJ0XxZaxR8Sp6', 'Admin', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(5, 'Tesfa', 'tesfa@gmail.com', 911425020, 'Tesfa', 'Amsalu', '$2y$10$X99PYK6.5UTWagcdOUT5E.qdXkVNejqsP6.zcytA7EdYwDmQXpbXe', 'Admin', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(6, 'yoni', 'yoni@gmail.com', 977777777, 'Yoni', 'TS', '$2y$10$B.YnxYjaUIR5cBBWkIqLcOjeejkxSWPN0QtIPELECkYSk5quk82Lu', 'User', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(7, 'USERNAME', 'E@EMAIL.COM', 789456123, 'First', 'Last', '$2y$10$AtEBT7D.9u968bj9mwjQWeeZfz9M.ubhHyUcsg6cyG0cjGCvqXoPK', 'Admin', 'kk', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(9, 'jki5', 'E@EML.COM', 944484848, 'kk', 'kk', '$2y$10$7Q/bOYKu09u39NjViMmQY.lKIpoV6WS9GkaSmqJXaoQg6uXs2xQGq', 'Admin', '', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(11, 'bababababa', 'baba@gmvil.com', 0, 'bababba', 'bababba', '$2y$10$0ophg2vtSMbvJDyAEqxlhurJXkhKWtJPxR11UGvlrShrlR8dJtepq', 'User', 'Comedy_Detective_Thriller', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(12, 'FIKIR', 'fikir@gmail.com', 2147483647, 'Eyosias', 'Solomon', '$2y$10$AIxe3t/lhZ1odVW.0wkeRuWlM5hORRoDHdNESWOSZMwXpW4QO38r2', 'Admin', 'Action_Crime_Historical', 0, 'I am a wiriter who one day hopes to make it big in the industry and leave a mark on literary history', 'Active', '2022-06-04', 0),
(15, 'kevin_tom', 'k@gmail.com', 0, 'kevin', 'Solomonkkk', '$2y$10$04OnEULPnbETXhToPITljO3w6libETLdeWnrjY3fXNdudtycsiBfW', 'User', '', 0, '', 'Deactivated', '2022-06-04', 0),
(16, 'vincy', 'v@gmail.com', 0, 'Tibebe', 'Solomonkkk', '$2y$10$FTiQjld.c90UIRnEMl4g9.r1PM7xIljje88gBh9qm9dsgggcWRdj.', 'User', '', 0, '', 'Deactivated', '2022-06-04', 0),
(17, 'tim_lee', 't@gmail.com', 0, 'Tibebe', 'Solomonkkk', '$2y$10$sGZBNuhNeTmUYziAslNi9eeGkv/H0pMCSazK7reK.WrR0bf3kwgTm', 'User', '', 0, '', 'Active', '2022-06-04', 0),
(18, 'jane', 'j@gmail.com', 0, 'Tibebe', 'Solomonkkk', '$2y$10$WewC9aNZ6RkxX48X6.AH6.1VNItIfJmIbM81AsYF.ynMqOUp5Vtpe', 'User', '', 0, '', 'Deactivated', '2022-06-04', 0),
(30, '', '', 0, 'Tibebe', 'Solomonkkk', '$2y$10$RELAKVkg9pOYnXTbQILFMOgG9RW0Tm735fpbq7DuI.kq/IZhHAFa2', 'User', '', 0, '', 'Active', '2022-06-04', 0),
(49, 'sulta', 'fuli@gmail.com', 2147483647, 'bilo', 'obil', '$2y$10$2UVZryDXf/rtIN1gMLB/BuPm1lseDt989dija4gci1qpdVoe8SX0K', 'Admin', '', 0, '', 'Active', '2022-06-04', 0),
(51, 'buil', 'jklji@gmil.com', 2147483647, 'jklji', 'jklji', '$2y$10$OYP95MltCei4xzZ.Abzty.pfHLDPba5747.TD2o36LNqeowVmFKJ2', 'Admin', '', 0, '', 'Active', '2022-06-04', 0),
(53, 'newest', 'bhbh@gmail.com', 2147483647, 'gg', 'gg', '$2y$10$W6PiE1lvvaFX5W8pPLENherTuSxgZ9t2C4U2j4ZAtHLKL7M6U2NLS', 'Admin', 'Adventure_Detective_Cookbook', 0, 'i am a new member here to learn', 'Active', '2022-06-04', 0);

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
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewID`),
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
  ADD KEY `UserID_2` (`UserID`);

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
  MODIFY `BookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Cart-Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`BookID`) REFERENCES `books` (`BookID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Database: `a2zzz`
--
CREATE DATABASE IF NOT EXISTS `a2zzz` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `a2zzz`;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`firstname`, `lastname`, `gender`, `email`, `phone`, `username`, `password`) VALUES
('BETTY', 'lname', 'female', 'betty@gmail.com', 12365478, 'betty', '$2y$10$DwlOSwQ8EsQkn3h7AAOPRe1FQs9vaad6q94gcbCg0lAFsizvSvC5y'),
('piam', 'amsalu', 'female', 'piam@gmail.com', 9465465, 'piam', '123456'),
('tibebe', 'solomon', 'male', 'tibes@gmail.com', 311425020, 'tibex', '123456'),
('tibex2', 'tibex2', 'male', 'tibex2@gmail.com', 911454545, 'tibex2', '123456'),
('tsion', 'tesfaye', 'female', 'tsi@gmail.com', 9465465, 'tsi', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `username` (`username`);
--
-- Database: `blog_eg`
--
CREATE DATABASE IF NOT EXISTS `blog_eg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog_eg`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userId` int(8) NOT NULL,
  `userName` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userId`, `userName`, `password`, `firstName`, `lastName`) VALUES
(1, 0, 'kevin_tom', '$2y$10$8Lo6hi8A6vAiqTohQfS1VOevbWpiQQ19mR1SCqHvhTVS4T13f.EAK', 'Kevin', 'Thomas'),
(2, 0, 'vincy', '$2y$10$EosOq.b5pedGyQGUtw1C/OTsqdF8K9xv7Mxky3WgzSqX9XwPRwhg2', 'Vincy', 'Jone'),
(3, 0, 'tim_lee', '$2y$10$2AyRB8SP5kdjt5Ww4e8zb./1S6Y0xZP2BSxnHL9LpzE/swhFidRgC', 'Tim', 'Lee'),
(4, 0, 'jane', '$2y$10$ckySPsNNPEwjzII03Iy0V.H2JYoqdU9Z5YO/FRIQ8epZbywB2F/Wm', 'Jane', 'Ferro'),
(5, 0, '5,094,805', '$2y$10$KhEPeY8ukTUL8NoLJmiBPOIts0Kc/.XGL61sWR4s3ZmpaYbOoTWhu', 'Da Vinci Code,The', 'Monday, March 1, 2004'),
(6, 0, '4,475,152', '$2y$10$svNtpqQHpkJwI0f3o9BjnuRA.98qlQ6AEwoi8SIVmiauz/.5lRjhG', 'Harry Potter and the Deathly Hallows', 'Saturday, July 21, 2007'),
(7, 0, '4,200,654', '$2y$10$K19vaeHyi6KlteoK.JJY/elPX.lNq.QlGeT92/LkqGm4TxYY2Ggsy', 'Harry Potter and the Philosopher\'s Stone', 'Thursday, June 26, 1997'),
(8, 0, '4,179,479', '$2y$10$pkYhIragncFtVokQAPNDc..caPztxbQw5gHVNm0m.iIfgYxTyVSue', 'Harry Potter and the Order of the Phoenix', 'Saturday, April 26, 2003'),
(9, 0, '3,758,936', '$2y$10$cd/e7CMFjqLV7z1cDfN8aOCIfUZi4AmwXDY7AqRwSg9zFY3fFsPta', 'Fifty Shades of Grey', 'Thursday, April 12, 2012'),
(10, 0, '3,583,215', '$2y$10$M57dLwe8MeIkeVj6MyguIuGrq/6o25a30yNSoK1KFVzuok5SStzJm', 'Harry Potter and the Goblet of Fire', 'Saturday, March 24, 2001'),
(11, 0, '3,484,047', '$2y$10$VOHuOY/BEP1bqYQ85tTCw.mzRTmJfWm1aFwbYHLfxQGQlN71tLRgW', 'Harry Potter and the Chamber of Secrets', 'Saturday, January 2, 1999'),
(12, 0, '3,377,906', '$2y$10$VXoGv5WB87/OD9ftV1d/b.1qpkvCOe6Cc7gAmnweDJFnrb5WJnmZy', 'Harry Potter and the Prisoner of Azkaban', 'Saturday, April 1, 2000'),
(13, 0, '3,193,946', '$2y$10$uAoW7hOVSrRca5jTIq.guuvgiDMiVppBU9iv0qZaPWJHubNcoXH9i', 'Angels and Demons', 'Tuesday, July 1, 2003'),
(14, 0, '2,950,264', '$2y$10$yzDXwr7x39L660a74M3y5uhqWg8XCNgOyVH6WEhUtqiSIfkJnGoiu', 'Harry Potter and the Half-blood Prince:Children\'s Edition', 'Saturday, April 9, 2005'),
(15, 0, '2,479,784', '$2y$10$3UNePQmgO/1NEXmU3CHqvOJxnUUc0h/LEDMEjRLr4T2pITTJJVq3i', 'Fifty Shades Darker', 'Thursday, April 26, 2012'),
(16, 0, '2,315,405', '$2y$10$/yg84IHYs4G4/CJMNR2pKue/JFmioOWh96vTVh7cKRx2ROttR0FKG', 'Twilight', 'Saturday, December 9, 2006'),
(17, 0, '2,233,570', '$2y$10$sZfEIqraXcTFQaxAMeKeyeHYCtLFtflvy7xJ7VnJq9uXzXoqahygi', 'Girl with the Dragon Tattoo,The:Millennium Trilogy', 'Thursday, July 24, 2008'),
(18, 0, '2,193,928', '$2y$10$gr7MIURAH88XzjBF/qdCpesKtz4fC8oKaSFk1zAqCbjfJxtvSHMCK', 'Fifty Shades Freed', 'Thursday, April 26, 2012'),
(19, 0, '2,183,031', '$2y$10$wWJRGb38XEqIfx90Ym.ud.GYUjp6qZ2rJWvQ.bzlN1i3581eQSd2y', 'Lost Symbol,The', 'Saturday, April 25, 2009'),
(20, 0, '2,152,737', '$2y$10$wJtA6WMAaIPduCSqM5lxxewwzqPTWT/qcQ8Zw6rgLmz8h7G2caCHa', 'New Moon', 'Thursday, September 6, 2007'),
(21, 0, '2,062,145', '$2y$10$pzODKrErhCATWevxA00qr.tuLW.4hrql1xk0wISaJKLEEESXls9Um', 'Deception Point', 'Saturday, May 1, 2004'),
(22, 0, '2,052,876', '$2y$10$yXd5No.L/I.BKc17oWG3Ouh0Tj9TJ2bloPx.LBD2IFEbj8oCk9ncq', 'Eclipse', 'Friday, June 27, 2008'),
(23, 0, '2,005,598', '$2y$10$zPZDjG.V/W9WqrMkjnMm0eul0WdTuz4jAfhTnHInRkmxlImaGhX4G', 'Lovely Bones,The', 'Friday, June 6, 2003'),
(24, 0, '1,979,552', '$2y$10$F7LC0w1bgx4tE.T6Is97XOjUW1RlWKaBiMlmbzB.KOGDBHwe9YA7u', 'Curious Incident of the Dog in the Night-time,The', 'Thursday, April 1, 2004'),
(25, 0, '1,928,900', '$2y$10$qX9Ud3LmHjEg4B6TVoxEL.QMLXz8C6lYdUtsxwMJZr/G2ONsRMDdi', 'Digital Fortress', 'Friday, March 5, 2004'),
(26, 0, '1,852,919', '$2y$10$4FJaEHdBUtrc9QX1Xhj9beDXKWHn7grLjpDzPiDaDXnBDAk24Oh1i', 'Short History of Nearly Everything,A', 'Tuesday, June 1, 2004'),
(27, 0, '1,814,784', '$2y$10$jxfFceVCLFT2lO/6sj.xIeN3sjU18VRM8R8Kvd92AF27fU3KeMyoa', 'Girl Who Played with Fire,The:Millennium Trilogy', 'Thursday, July 9, 2009'),
(28, 0, '1,787,118', '$2y$10$e8PV.1ney9pT1ZYVlxNn6uZyqyIVgBq72GgonGBb/rQvL8X.Hg4HK', 'Breaking Dawn', 'Saturday, May 24, 2008'),
(29, 0, '1,783,535', '$2y$10$1CcG47e..FIrmESPxzREwOkXH4kwm93PMKm91y6lVC2EMS9SP/CwS', 'Very Hungry Caterpillar,The:The Very Hungry Caterpillar', 'Thursday, September 29, 1994'),
(30, 0, '1,781,269', '$2y$10$GTrk8ov9R5XFgB5U9DzmpuTtkye4bFuYTb1mw3mdp7z5h7PogWxXS', 'Gruffalo,The', 'Saturday, August 21, 1999'),
(31, 0, '1,743,266', '$2y$10$LWvnwV68yzp6.gY4nOwmD.sBEdKgXcdiCUwSiArdYTJZITq1tweXO', 'Jamie\'s 30-Minute Meals', 'Thursday, September 30, 2010'),
(32, 0, '1,629,119', '$2y$10$6U0Vp4RxCby4aRBY4tbEM.3b4j3Q/kSFWoRhIQdJJyYF06grsOtvy', 'Kite Runner,The', 'Saturday, April 17, 2004'),
(33, 0, '1,616,068', '$2y$10$58m0LNbKgxPOETNa4hGkne6eK.c9OGJ2pepAxzhN0ZZ4OOY8Cb0Qq', 'One Day', 'Thursday, February 4, 2010'),
(34, 0, '1,583,992', '$2y$10$kbxZkzVy9ZiYNpng3hTml.q96qrAo4bCC.z.g/T1IxJSiEk4HlBMa', 'Thousand Splendid Suns,A', 'Tuesday, May 22, 2007'),
(35, 0, '1,555,135', '$2y$10$ida3GJGwUmYjkGxAudjo1Oempo8C5d/3yi3bfuD/kvAjd8WIcAuf6', 'Girl Who Kicked the Hornets\' Nest,The:Millennium Trilogy', 'Saturday, January 23, 2010'),
(36, 0, '1,546,886', '$2y$10$ZSIk94tCDYHQvlxNcgYNcerqcDJLz482pRjJ8Q9UpMpasb66LBtJS', 'Time Traveler\'s Wife,The', 'Saturday, May 29, 2004'),
(37, 0, '1,539,428', '$2y$10$.sp13/Ozv/cOHYgbYpKWIuGGfg3ZE/d.7Y0mlYhCCmRajiQ2B/Oly', 'Atonement', 'Thursday, May 2, 2002'),
(38, 0, '1,508,205', '$2y$10$xIIra0HzSAuhNwUK7PpVj.FMFdpce8sKiuw88eThFnVnF9zEvaDgq', 'Bridget Jones\'s Diary:A Novel', 'Friday, June 20, 1997'),
(39, 0, '1,489,403', '$2y$10$WaFTFpqh6UZ/RccG.y6T7eohb1eLOKOvLFmj6aR92N0T6yrlfRxw.', 'World According to Clarkson,The', 'Thursday, May 26, 2005'),
(40, 0, '1,352,318', '$2y$10$kvOiZVA15NyAygowFsv/2O6kmBSjpXzO1d.XS3xvCWXZq7yOzZ33u', 'Captain Corelli\'s Mandolin', 'Thursday, June 1, 1995'),
(41, 0, '1,310,207', '$2y$10$m1wBHX50Z3uxY8U6rL91cetJ3ylg6SMRUuyLHxFJoRMUBd6jo1Xfu', 'Sound of Laughter,The', 'Thursday, October 5, 2006'),
(42, 0, '1,310,176', '$2y$10$0CNjKulcQVJQ/t2o.K1/P.sIqR9jCbBwX6n/z0PqBEgkMGqe0kkFC', 'Life of Pi', 'Saturday, May 17, 2003'),
(43, 0, '1,231,957', '$2y$10$3dN87zRqNthyLrpcj3/HoOvmbdr3ppYoz3vRd./AGOsWlMFCmCklm', 'Billy Connolly', 'Saturday, June 29, 2002'),
(44, 0, '1,217,712', '$2y$10$AlgJnNZ2UwoAxa/0WaXj/OObafTFl4I51PGkoKsYx4DuZvJ/FjmaO', 'Child Called It,A', 'Thursday, January 4, 2001'),
(45, 0, '1,208,711', '$2y$10$lDr6J.Xz3/yMHrKONyQ4Fudznn0wz492eiyZmPNqUGlREDBacWWp2', 'Gruffalo\'s Child,The', 'Friday, September 2, 2005'),
(46, 0, '1,204,058', '$2y$10$Cd38r1Ui8R4wpxCT4/Bh6equQvjuRwxcH/Gq.IXppLEASOwfXIGgq', 'Angela\'s Ashes:A Memoir of a Childhood', 'Tuesday, May 6, 1997'),
(47, 0, '1,184,967', '$2y$10$cIB1uv7l.IB5fFuO.6aI4eeRlgo8SzlbfGHHFli2F9i51UdWMB5K2', 'Birdsong', 'Monday, July 18, 1994'),
(48, 0, '1,181,503', '$2y$10$cKt02Q8UZ6Ryqlvzvlv9E.9uoRCT7N80viDdgT/a9DFQ9ypjfV6Qq', 'Northern Lights:His Dark Materials S.', 'Friday, October 23, 1998'),
(49, 0, '1,181,093', '$2y$10$eJ.Ym9tv0xbwmsA.pG307.45uC7qLDuy0ZTbPXw5kGj7goCcsA0l.', 'Labyrinth', 'Saturday, July 16, 2005'),
(50, 0, '1,153,181', '$2y$10$H.vAqEVjoBw7mE613dWuiO.R/ej67DdjVsaO.RZJIVDkwM074sT7m', 'Harry Potter and the Half-blood Prince', 'Saturday, April 9, 2005'),
(51, 0, '1,132,336', '$2y$10$DLP6YZAPXZijV.Bbr8lOvOmPbYkC8s9kz70ymSDDFzaEexD0B5JoO', 'Help,The', 'Thursday, May 13, 2010'),
(52, 0, '1,130,802', '$2y$10$gsOXmLyz.NcjDfcj4fU.NOq5GRutjVl49rY2dgXKzGccjVyZydSSa', 'Man and Boy', 'Monday, March 6, 2000'),
(53, 0, '1,126,337', '$2y$10$Jb12guG4QDJ6A9Kr46d6..cOLQmzVaDKt5cbKa89Yy0rXBlfKtQcm', 'Memoirs of a Geisha', 'Thursday, June 4, 1998'),
(54, 0, '1,115,549', '$2y$10$5R78i0QTbdi57bzcfadC.uEBh2S.aPVh9BXIxMnQA5dbXkqSzuVzW', 'No.1 Ladies\' Detective Agency,The:No.1 Ladies\' Detective Agency S.', 'Thursday, June 5, 2003'),
(55, 0, '1,108,328', '$2y$10$GWUtGtpAyHdvKCKtHnPCQOHuObYzMhiJF5M1XKxRp8maeCR61Dfh2', 'Island,The', 'Monday, April 10, 2006'),
(56, 0, '1,107,379', '$2y$10$LnwL5gvPzGkmFP5AXXtlx.hNrDDC7B/yQ7N1X8hK4F2Ebc9Nw3.vy', 'PS, I Love You', 'Saturday, March 27, 2004'),
(57, 0, '1,104,403', '$2y$10$vlNPrcef1Vlt2hxZwcFBC.trGda/RLCZ/xGfjwQc5uyOFZR5qmEz.', 'You are What You Eat:The Plan That Will Change Your Life', 'Thursday, June 17, 2004'),
(58, 0, '1,092,349', '$2y$10$qDz91lv.hmgm4OHeYPedzuI3590DraxKr9Jk0GOpPBz95go.w0A6i', 'Shadow of the Wind,The', 'Wednesday, October 5, 2005'),
(59, 0, '1,090,847', '$2y$10$510qm9ktf.6tSx0aWhQ.A.4wAUUnaknVewjvY/L27LLLwJPe.mRg.', 'Tales of Beedle the Bard,The', 'Saturday, August 2, 2008'),
(60, 0, '1,087,262', '$2y$10$pkibSQ12q/1aXANJ0NjFZeQQ2PWBQnfzzOWwzuH9hpx/IVLlyiguW', 'Broker,The', 'Saturday, August 27, 2005'),
(61, 0, '1,054,196', '$2y$10$Sgow6wMS5GAqD0fHoHx7g.qktLgzMa4WTsgZmPyLKyMzbIY5hIwFy', 'Dr. Atkins\' New Diet Revolution:The No-hunger, Luxurious Weight Loss P', 'Thursday, January 2, 2003'),
(62, 0, '1,037,160', '$2y$10$1ATNDDCZZ8iJAXRg.Ae8NeZTF8Et5GgSr7C1sjQXTZeyTyotX9Cp6', 'Subtle Knife,The:His Dark Materials S.', 'Friday, October 16, 1998'),
(63, 0, '1,023,688', '$2y$10$S43eV2ekPRCrw7JyqcTbrez/vcpy1tFGLdV0xnCGLyB3ItTdk8lim', 'Eats, Shoots and Leaves:The Zero Tolerance Approach to Punctuation', 'Thursday, November 6, 2003'),
(64, 0, '1,015,956', '$2y$10$KVo7Pc6KqhqXsvXAFeKtpO2.hN8eGWsfNUkDvPbaJhLbaxWUFpdsW', 'Delia\'s How to Cook:(Bk.1)', 'Monday, October 12, 1998'),
(65, 0, '1,009,873', '$2y$10$5dbok2U9MTwnXYjv4f4IvuIFnypbbuztRzJTpgH4vfTabpegv/H9C', 'Chocolat', 'Thursday, March 2, 2000'),
(66, 0, '1,004,414', '$2y$10$I9hte4N9HKYaBLToFOpcu.d1Fit0Hp1dhAm45GHu3YpHijDBm057a', 'Boy in the Striped Pyjamas,The', 'Thursday, September 11, 2008'),
(67, 0, '1,003,780', '$2y$10$5.conYPX3ArWBErM20XJxO8Nxo95fI8YLAL14oANgveczRWBMR0wa', 'My Sister\'s Keeper', 'Saturday, June 19, 2004'),
(68, 0, '1,002,314', '$2y$10$A3VuGQ1DTRlu.3Zb/JEQx.JWTIN/KjQ5bR5NnYO4GyAvjdEy.brpq', 'Amber Spyglass,The:His Dark Materials S.', 'Friday, September 14, 2001'),
(69, 0, '998,213', '$2y$10$D.D4hHVWl6goNvMqee1Xhedk.UyHUY.AvTLMlRqRNBuejnw/ZxRm2', 'To Kill a Mockingbird', 'Thursday, October 5, 1989'),
(70, 0, '992,846', '$2y$10$41xBTAdzUjpbSGcXha6LvuDHBI8tv2db5vVLakncxZHmFSuABxn/u', 'Men are from Mars, Women are from Venus:A Practical Guide for Improvin', 'Sunday, August 1, 1993'),
(71, 0, '986,753', '$2y$10$3rtOm2lXxFoqqhibL4tXvu2WTK/wGF0i3aofOH3Lyd2aRoQQZRBja', 'Dear Fatty', 'Thursday, October 9, 2008'),
(72, 0, '986,115', '$2y$10$BmMgxC0SdkTwvMwUviGOduUoyFtiDo4DslarwbGnt8cTActwIjQt.', 'Short History of Tractors in Ukrainian,A', 'Thursday, March 2, 2006'),
(73, 0, '970,509', '$2y$10$cVRUrrXWxKUGB7HLmNBIKegpeLOjXcGgSIbO1vUyVpyXxVMGM3eaW', 'Hannibal', 'Thursday, May 18, 2000'),
(74, 0, '967,466', '$2y$10$VQYQW0PpRS6239hf952S9eAYcPHxZeEvs4zhSgTjc8DJIN2rU4MGa', 'Lord of the Rings,The', 'Monday, June 5, 1995'),
(75, 0, '963,353', '$2y$10$NYLSA3l.OimiErsULYNDa.BnfeJF3TFwIqkz/5kJlY7bHkPsSmhfi', 'Stupid White Men:...and Other Sorry Excuses for the State of the Natio', 'Thursday, October 3, 2002'),
(76, 0, '962,515', '$2y$10$IT6ARCqQsxUfWhJSP4oe4uYvzxKpDtQMZ/xwrNKaKU652m6ScAT9G', 'Interpretation of Murder,The', 'Monday, January 15, 2007'),
(77, 0, '959,496', '$2y$10$GPeEDPzDgtQc4q6YM/GUuuZdTZYZEQX4T/lQH09GqslC33I89Dccu', 'Sharon Osbourne Extreme:My Autobiography', 'Monday, October 3, 2005'),
(78, 0, '956,114', '$2y$10$LUUqLNc/hi6/CayQF6Sb/eM1iLWkC7tPwUN/wN4BSfzB4xdma1fz6', 'Alchemist,The:A Fable About Following Your Dream', 'Saturday, January 3, 1998'),
(79, 0, '945,640', '$2y$10$AK6ODBTnpVwo1rpbGgU2ueLrWfGwCSG3tub9SqoS2rWJ4Xpk7hqAi', 'At My Mother\'s Knee ...:and Other Low Joints', 'Wednesday, September 24, 2008'),
(80, 0, '931,312', '$2y$10$vXl6K.Ir02w65TCNYmrHGeh4eqQlvM24vLi5WGA5G.U1Glm8ba2Hi', 'Notes from a Small Island', 'Thursday, August 1, 1996'),
(81, 0, '925,425', '$2y$10$JOoBVHNn2u4w8ME2zg2C4e/1t4KWsqzAb/Mf93pC9uUx1LAG8Ayg6', 'Return of the Naked Chef,The', 'Thursday, March 30, 2000'),
(82, 0, '924,695', '$2y$10$lclhRl3SFoOvT03FjIES2eXEieHBBWPrgbgNhRfM1cYB3DACbB8U6', 'Bridget Jones: The Edge of Reason', 'Thursday, June 15, 2000'),
(83, 0, '906,968', '$2y$10$dNtD02fv1wL0I5befQtMRO2xUqzmCkualS7rUu0m7x0eNXuXd9U7S', 'Jamie\'s Italy', 'Monday, October 3, 2005'),
(84, 0, '905,086', '$2y$10$8RpYG9SFwF/NMvAvOvK1u.wJLkcCyFH0gIiPsndZ1Gnrr9e/HbSQG', 'I Can Make You Thin', 'Monday, January 17, 2005'),
(85, 0, '890,847', '$2y$10$1qQl58vrIU3rps/P0Ux17efKagaDck1VTY0f3Yufc361I0HuhhrIK', 'Down Under', 'Saturday, May 5, 2001'),
(86, 0, '869,671', '$2y$10$ur/QGWuFjOA28ylgsW0Zee2vIxUI0cBFH6zhtroE.AgJM5IGnAifu', 'Summons,The', 'Saturday, September 28, 2002'),
(87, 0, '869,659', '$2y$10$nolgp7O58ARIk5xyYiSCHOwOXvNzSROlK2TIOEFl1/X3CwnpcZo0m', 'Small Island', 'Monday, September 13, 2004'),
(88, 0, '862,602', '$2y$10$rrjMXAvdVyI0ei3PPqOfmuSpbl3zSF7eCG0lZk1ku/ATrJDYMmQOK', 'Nigella Express', 'Thursday, September 6, 2007'),
(89, 0, '856,540', '$2y$10$2coY9O9DstrGP40E18TyceVk0WvF53wQ/WT45yN6eXa7DyMYkm6wS', 'Brick Lane', 'Saturday, May 1, 2004'),
(90, 0, '845,858', '$2y$10$px3le/Da/Z0stooqU58b.uz8Ka6VBmhIqm8aAhxJuQcSKTcCTOyEG', 'Memory Keeper\'s Daughter,The', 'Saturday, April 7, 2007'),
(91, 0, '842,535', '$2y$10$HmF5q6bEVJ5g25uCNgRlXub.V265GWSykBRg1Zs1Eb25Z3uoW2G6.', 'Room on the Broom', 'Friday, September 20, 2002'),
(92, 0, '828,215', '$2y$10$iutAEIfVy1Budz28r4VU2u06Ddzu3xhFMxtRJrRfIk/Bj2pA7Bn8u', 'About a Boy', 'Thursday, April 4, 2002'),
(93, 0, '820,563', '$2y$10$wwmQILaThucSV9UVRNRBLeZ/wVojcDyiC5WDjDOWuClRLaK.HO0gG', 'My Booky Wook', 'Thursday, November 15, 2007'),
(94, 0, '816,907', '$2y$10$EoBoq5.wBm91Zq4aq61Rge9OYQCaFHKqZ6TED3hPSlTKRFpBs/D8u', 'God Delusion,The', 'Monday, May 21, 2007'),
(95, 0, '816,585', '$2y$10$fs.n0ck2L36jr49QH7AvZu24mnfAeRjrDq5xkhTqWUtuC6sC3dYd6', '\"Beano\" Annual,The', 'Wednesday, September 1, 2004'),
(96, 0, '815,586', '$2y$10$oFOOQUTx2EiDTTB/9nhqC..1OC5DbCo.64Ds9AQVBH1eTyNu46Tji', 'White Teeth', 'Thursday, January 25, 2001'),
(97, 0, '814,370', '$2y$10$P1u2m4SFkymHpSKoVAQy/.oVUeT2KUKDr9PXxhyFvWV0BeppwrARC', 'House at Riverton,The', 'Friday, June 15, 2007'),
(98, 0, '809,641', '$2y$10$b4y/M7PD7jr8VPmaQHyUGuGwBqBzriOL9pcEBJZOplUnO9oEE2loe', 'Book Thief,The', 'Saturday, September 8, 2007'),
(99, 0, '808,900', '$2y$10$/2L92SvPjK1Z./Nd9rtUbuHjVNYqnik7WGTHHoA5PzXyMDtZMtC3C', 'Nights of Rain and Stars', 'Wednesday, June 29, 2005'),
(100, 0, '807,311', '$2y$10$.ARfgWjlsFgX7AOwPepw5uGvGPl9i76S9nfSThj6qTAytKPPepzIS', 'Ghost,The', 'Thursday, July 3, 2008'),
(101, 0, '794,201', '$2y$10$QXhif7SpY3UPkKveLx8HBOK1r18y8/JIn.annHLBaFlb6S/Mhws.C', 'Happy Days with the Naked Chef', 'Monday, September 3, 2001'),
(102, 0, '792,187', '$2y$10$Dg3NO1z8wbYB6oeGYkPjeeAfraWLT4ZzkSJaD5F4UnD383Ri0hwYe', 'Hunger Games,The:Hunger Games Trilogy', 'Thursday, December 1, 2011'),
(103, 0, '791,507', '$2y$10$4oELYxwLAlXsgHLulyPz6urKS7pzHqrJNmnVdxo7LSCImQDnYCp6O', 'Lost Boy,The:A Foster Child\'s Search for the Love of a Family', 'Saturday, April 7, 2001'),
(104, 0, '791,095', '$2y$10$igbLPx5mP533C2MZlSaZjuvj9Ts6hNDmKAVvNgc2hQDujRbxpeTo6', 'Jamie\'s Ministry of Food:Anyone Can Learn to Cook in 24 Hours', 'Friday, October 3, 2008');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- Database: `database`
--
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Table structure for table `database`
--

CREATE TABLE `database` (
  `first_name` varchar(225) DEFAULT NULL,
  `last_name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `phone_no` bigint(20) DEFAULT NULL,
  `salary` bigint(20) DEFAULT NULL,
  `dept` varchar(50) DEFAULT NULL,
  `empid` bigint(20) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `database`
--

INSERT INTO `database` (`first_name`, `last_name`, `email`, `phone_no`, `salary`, `dept`, `empid`) VALUES
('tsion', 'lsndc', 'sdbck', 65, 546, 'sdc', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `database`
--
ALTER TABLE `database`
  ADD PRIMARY KEY (`empid`);
--
-- Database: `drop`
--
CREATE DATABASE IF NOT EXISTS `drop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `drop`;
--
-- Database: `employees`
--
CREATE DATABASE IF NOT EXISTS `employees` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `employees`;
--
-- Database: `exams`
--
CREATE DATABASE IF NOT EXISTS `exams` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `exams`;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `ExamID` int(11) NOT NULL,
  `ExamName` varchar(50) NOT NULL,
  `ExamKey` varchar(10) NOT NULL,
  `Question` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Option` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Answer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `Weight` tinyint(3) NOT NULL,
  `CreatedOn` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` tinyint(1) DEFAULT NULL,
  `AdminID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`ExamID`, `ExamName`, `ExamKey`, `Question`, `Option`, `Answer`, `Weight`, `CreatedOn`, `Status`, `AdminID`) VALUES
(0, 'Potential Energy', 'key1', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:32:47', NULL, 1);
--
-- Database: `node`
--
CREATE DATABASE IF NOT EXISTS `node` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `node`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(8) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DoB` date NOT NULL,
  `Password` varchar(100) NOT NULL,
  `PhoneNumber` varchar(14) NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0-false-not deleted\r\n1-true-deleted',
  `CreatedOn` datetime NOT NULL DEFAULT current_timestamp(),
  `ExamID` int(11) NOT NULL,
  `Sex` char(1) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Institution` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `FirstName`, `LastName`, `Email`, `DoB`, `Password`, `PhoneNumber`, `Deleted`, `CreatedOn`, `ExamID`, `Sex`, `Department`, `Institution`) VALUES
(1, 'Tibebe', 'Solomomn', 'tibe@gmail.com', '2022-02-09', '$2b$10$BthTx0j7eaQubpFbfYtc8OTbptqLLyyC5zeCffGIoKs/hrSkrmIX.', '999999999', 1, '2022-02-26 12:08:30', 0, '', '', ''),
(2, 'John', 'Robi', 'john@gmail.com', '2022-02-14', '$2b$10$Op8lp5TJA2YqVRVNmC7WTOeuUqJE7gCSSPApp7eIVo6wsEuXpPYSC', '911111111', 0, '2022-02-26 12:08:30', 0, '', '', ''),
(3, 'Sami', 'Sky', 'Sami@gmail.com', '2022-02-01', '$2b$10$YxxsgmV3KMcQb3J2wAK87eaeFqZR7gfwZuysM.wQlGqA2e8rPNGvC', '911111111', 1, '2022-02-26 12:36:43', 0, '', '', ''),
(4, 'SELAMU', 'lname', 'selamu@gmail.com', '2022-02-08', '$2b$10$Oy55d7Z0mYo10YOpJt2H0.q73ZAP2Mf0e1cYKvzCE6PqgT/KWnb.O', '911111111', 0, '2022-02-26 18:59:04', 0, '', '', ''),
(5, 'yosef', 'lname', 'yosef@gmail.com', '2022-03-15', '$2b$10$r6a8BxKUwbMqWb2T0CmAYO6T1JBVXTkx060LtN3vcMoP4ntAkZrum', '963245', 0, '2022-03-04 13:28:34', 0, '', '', ''),
(6, 'Yordi', 'Yadessa', 'Yordi@gmail.com', '2022-03-03', '$2b$10$r6a8BxKUwbMqWb2T0CmAYO6T1JBVXTkx060LtN3vcMoP4ntAkZrum', '12345678Qw', 0, '2022-03-08 14:44:04', 0, 'F', 'SWEG', 'AASTU'),
(7, 'Lname', 'Lname', 'lname@email.com', '2022-03-23', '$2b$10$r6a8BxKUwbMqWb2T0CmAYO6T1JBVXTkx060LtN3vcMoP4ntAkZrum', '455', 0, '2022-03-10 11:29:00', 0, 'M', 'fdgfgsdf', 'sdfsdf'),
(9, 'fname', 'fname', 'name@email.com', '2022-03-23', '$2b$10$r6a8BxKUwbMqWb2T0CmAYO6T1JBVXTkx060LtN3vcMoP4ntAkZrum', '455', 0, '2022-03-10 11:30:27', 0, 'M', 'fdgfgsdf', 'sdfsdf'),
(10, 'samuel', 'noah', 'samuelnoah668@gmail.com', '0000-00-00', '$2b$10$ro5vCx7HC7vadfxBuEuRjO5Jda1nLqrET7qi2BGZ2S4FI3freFZt2', '0945003939', 0, '2022-03-12 18:07:42', 0, 'M', 'software', 'AASTU'),
(12, 'samuel', 'noah', 'noah@gmail.com', '0000-00-00', '$2b$10$ro5vCx7HC7vadfxBuEuRjO5Jda1nLqrET7qi2BGZ2S4FI3freFZt2', '', 0, '2022-03-15 16:07:30', 0, '', '', ''),
(14, '', '', '', '2022-04-12', '$2b$10$M6S9GDaKT5tVAVsDifF1WOwy.V24WulvEK7bJmZ7HrVeq9/mdbvKa', '', 0, '2022-04-06 15:28:45', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `ExamID` int(11) NOT NULL,
  `ExamName` varchar(50) NOT NULL,
  `ExamKey` varchar(10) NOT NULL,
  `Question` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Option` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Answer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `Weight` tinyint(3) NOT NULL,
  `CreatedOn` datetime NOT NULL DEFAULT current_timestamp(),
  `Status` tinyint(1) DEFAULT NULL,
  `AdminID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`ExamID`, `ExamName`, `ExamKey`, `Question`, `Option`, `Answer`, `Weight`, `CreatedOn`, `Status`, `AdminID`) VALUES
(1, 'Potential Energy1', 'key1', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:03', 1, 1),
(2, 'Potential Energy1', 'key2', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', 0, 1),
(3, 'Potential Energy1', 'key3', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', NULL, 1),
(4, 'Potential Energy1', 'key4', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', NULL, 1),
(5, 'Potential Energy2', 'key5', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', 1, 2),
(6, 'Potential Energy2', 'key6', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', 0, 2),
(7, 'Potential Energy2', 'key7', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', NULL, 2),
(8, 'Potential Energy2', 'key8', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', NULL, 2),
(9, 'Potential Energy2', 'key9', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', NULL, 2),
(10, 'Potential Energy3', 'key10', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', 1, 3),
(11, 'Potential Energy3', 'key11', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', 0, 3),
(12, 'Potential Energy3', 'key12', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', 0, 3),
(13, 'Potential Energy3', 'key13', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', NULL, 3),
(14, 'Potential Energy3', 'key14', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', NULL, 3),
(15, 'Potential Energy4', 'key15', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', 1, 4),
(16, 'Potential Energy4', 'key16', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', 0, 4),
(17, 'Potential Energy4', 'key17', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', NULL, 4),
(18, 'Potential Energy4', 'key18', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', NULL, 4),
(19, 'Potential Energy5', 'key19', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', 1, 5),
(20, 'Potential Energy5', 'key20', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', 0, 5),
(21, 'Potential Energy5', 'key21', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', NULL, 5),
(22, 'Potential Energy5', 'key22', '[\"The energy possessed by a body due to its position is called its\",\"The energy stored in coal is\",\"When a body is lifted through a height h, the work done on it appears in the form of its\",\"The energy present in a body due to its height is called\",\"A block weighing 18 N is lifted 7 m vertically upward. The potential energy stored in it is\"]', '[{\"A\":\"heat energy\",\"B\":\"kinetic energy\",\"C\":\"potential energy\",\"D\":\"chemical energy\"},{\"A\":\"kinetic energy\",\"B\":\"heat energy\",\"C\":\"chemical energy\",\"D\":\"nuclear energy\"},{\"A\":\"kinetic energy\",\"B\":\"potential energy\",\"C\":\"chemical energy\",\"D\":\"geothermal energy\"},{\"A\":\"gravitational kinetic energy\",\"B\":\"gravitational kinetic energy\",\"C\":\"gravitational kinetic energy\",\"D\":\"gravitational energy\"},{\"A\":\"126 J\",\"B\":\"120 J\",\"C\":\"130 J\",\"D\":\"124 J\"}]', '[\"C\",\"C\",\"B\",\"B\",\"A\"]', 15, '2022-05-05 12:58:04', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `exam_user`
--

CREATE TABLE `exam_user` (
  `UserID` int(8) NOT NULL,
  `ExamKey` varchar(10) NOT NULL,
  `Score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_user`
--

INSERT INTO `exam_user` (`UserID`, `ExamKey`, `Score`) VALUES
(1, 'key1', 2),
(1, 'key2', 32),
(1, 'key3', 32),
(1, 'key4', 32),
(2, 'key1', 32),
(2, 'key2', 40),
(2, 'key3', 12),
(3, 'key1', 46),
(3, 'key2', 46),
(3, 'key3', 12);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `session_id` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `expires` int(11) UNSIGNED NOT NULL,
  `data` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `CreateOn` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`session_id`, `expires`, `data`, `CreateOn`) VALUES
('0H6QtsmAV2451L4aEdsJ9BZYpSVPjhXn', 1649333253, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-04-07T12:07:32.859Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-04-06 15:07:33'),
('0Xolsxu6X1OJvOkIyXaOW_FNva8m8NYN', 1648557843, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-03-29T11:43:58.577Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-03-28 12:46:42'),
('5l3tqC8ukrOkkk1MBRF7nAZEebDKGXWr', 1648730186, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-03-31T12:17:16.960Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-03-30 15:17:16'),
('7u0oDX6W6cVXmqIF5E9nH7vwanXrj8T9', 1648540735, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-03-29T07:45:03.736Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-03-28 10:45:03'),
('90pEp78s8TGDsPyJl8MEwQRc1Kr1sQDd', 1651826853, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-05-05T12:16:41.757Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-05-04 15:16:41'),
('CeiylZ573a_KWOHULzlC5bYOCG1zwTuc', 1649336783, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-04-07T12:07:32.999Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-04-06 15:07:33'),
('IYGYo6MFEfzDcsdzdljDDndToXae9OPt', 1649333253, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-04-07T12:07:32.935Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-04-06 15:07:33'),
('JRIHle7sZ9GCEDOJTvpe_7suwCaVJTcF', 1648543955, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-03-29T08:52:35.457Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-03-28 11:52:35'),
('MdGGCuVZps7y0XoqeaqRIyV9uXi8S0M1', 1651832255, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-05-06T10:04:30.513Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-05-05 13:04:30'),
('N4RgKS6TsfylMbf_Eh2akA4nTyFr1pu6', 1648544158, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-03-29T08:55:57.765Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-03-28 11:55:57'),
('PZd233iTyc49UNIxTuKNiSQOun6QKo9h', 1649333253, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-04-07T12:07:32.676Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-04-06 15:07:33'),
('Q1W3jXJTbSDCcAFk0lE0zDQcWb-W6jzw', 1648544158, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-03-29T08:55:57.660Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-03-28 11:55:57'),
('ggP-d5ZIIn-AMYE9LIO4JOIlU4lbQB0u', 1649840061, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-04-13T08:44:48.385Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-04-12 11:44:48'),
('iNGpi6HliceRRE26F9395ewp0mUTEXMd', 1648559112, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-03-29T08:57:09.774Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":7}', '2022-03-28 11:16:47'),
('m4d5FU3qKGznMyTWUBGvki6s5G8e3_Ce', 1649169801, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-04-05T11:58:58.411Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-04-04 14:58:58'),
('rklvbg8C1v_0YJu7RBehzi2UoApF5ZGl', 1651923270, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-05-07T11:11:03.488Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-05-06 14:11:03'),
('s_8RGcr_pc_vPQzb7bNn2ZPgeJ2tHFDB', 1649333253, '{\"cookie\":{\"originalMaxAge\":86400000,\"expires\":\"2022-04-07T12:07:32.766Z\",\"secure\":false,\"httpOnly\":true,\"path\":\"/\"},\"user\":1}', '2022-04-06 15:07:33');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(8) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `DoB` date NOT NULL,
  `Password` varchar(30) NOT NULL,
  `PhoneNumber` varchar(14) NOT NULL,
  `Deleted` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0-false-not deleted\r\n1-true-deleted',
  `CreatedOn` datetime NOT NULL DEFAULT current_timestamp(),
  `Sex` char(1) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Section` char(1) NOT NULL,
  `SchoolID` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `Email`, `DoB`, `Password`, `PhoneNumber`, `Deleted`, `CreatedOn`, `Sex`, `Department`, `Section`, `SchoolID`) VALUES
(1, 'Tibebe', 'Solomomn', 'tibe@gmail.com', '2022-02-09', '1234qwerty', '999999999', 1, '2022-02-26 12:08:30', 'M', 'Software Engineering', 'D', '0634'),
(2, 'John', 'Robi', 'john@gmail.com', '2022-02-14', '1234qwerty', '922222222', 1, '2022-02-26 12:08:30', 'F', 'Electrical Engineering', 'E', '0227'),
(3, 'Sami', 'Sky', 'Sami@gmail.com', '2022-02-01', '1234qwerty', '933333333', 0, '2022-02-26 12:36:43', 'M', 'Architectural Engineering', 'B', '0369'),
(4, 'SELAMU', 'lname', 'selamu@gmail.com', '2022-02-17', '12345678Qw', '944444444', 0, '2022-02-26 18:53:54', 'M', 'Civil Engineering', 'A', '0555'),
(5, 'Sami', 'Noah', 'naoh@gmail.com', '2022-03-10', '123456qwerty', '955555555', 0, '2022-03-08 14:21:20', 'M', 'Chemical Enineering', 'D', '6565');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`),
  ADD UNIQUE KEY `Email` (`Email`(50)),
  ADD KEY `DELETED` (`Deleted`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`ExamID`),
  ADD KEY `ExamKey` (`ExamKey`),
  ADD KEY `CreatedBy` (`CreatedOn`),
  ADD KEY `CreatedBy_2` (`CreatedOn`),
  ADD KEY `AdminID` (`AdminID`);

--
-- Indexes for table `exam_user`
--
ALTER TABLE `exam_user`
  ADD PRIMARY KEY (`UserID`,`ExamKey`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `ExamKey` (`ExamKey`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`(50)),
  ADD KEY `DELETED` (`Deleted`),
  ADD KEY `Email_2` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `ExamID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `AdminID` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`AdminID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_user`
--
ALTER TABLE `exam_user`
  ADD CONSTRAINT `exam_user_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`),
  ADD CONSTRAINT `exam_user_ibfk_2` FOREIGN KEY (`ExamKey`) REFERENCES `exam` (`ExamKey`);
--
-- Database: `nodelogin`
--
CREATE DATABASE IF NOT EXISTS `nodelogin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `nodelogin`;

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', 'test', 'test@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `gender`, `email`, `password`) VALUES
(1, 'tibebe', 'solomon', 'Male', 'test@test.com', '$2a$12$HW5d9TzaUUXguqgSgLCplufVmcnyMTtNPSQYJJnkwjStS4addTHWO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `nodemysql`
--
CREATE DATABASE IF NOT EXISTS `nodemysql` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `nodemysql`;
--
-- Database: `photoalbums`
--
CREATE DATABASE IF NOT EXISTS `photoalbums` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `photoalbums`;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

--
-- Dumping data for table `pma__central_columns`
--

INSERT INTO `pma__central_columns` (`db_name`, `col_name`, `col_type`, `col_length`, `col_collation`, `col_isNull`, `col_extra`, `col_default`) VALUES
('a2zlibrary', 'BookID', 'int', '11', '', 0, ',', ''),
('a2zlibrary', 'Cart-Id', 'int', '11', '', 0, 'auto_increment,', ''),
('a2zlibrary', 'Dislikes', 'mediumint', '9', '', 0, ',', '0'),
('a2zlibrary', 'ID', 'int', '11', '', 0, 'auto_increment,', ''),
('a2zlibrary', 'Likes', 'mediumint', '9', '', 0, ',', '0'),
('a2zlibrary', 'UserID', 'int', '11', '', 0, 'auto_increment,', ''),
('node', 'AdminID', 'int', '8', '', 0, 'auto_increment,', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"snap_to_grid\":\"off\",\"relation_lines\":\"true\",\"angular_direct\":\"direct\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'nodemysql', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"structure_or_data_forced\":\"0\",\"table_select[]\":[\"admin\",\"exam\",\"exam_user\",\"user\"],\"table_structure[]\":[\"admin\",\"exam\",\"exam_user\",\"user\"],\"table_data[]\":[\"admin\",\"exam\",\"exam_user\",\"user\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@DATABASE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"structure_and_data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"structure_and_data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_procedure_function\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_create_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(2, 'root', 'table', 'a2zlibrary', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"allrows\":\"1\",\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@TABLE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"a2zlibrary\",\"table\":\"books\"},{\"db\":\"a\",\"table\":\"books\"},{\"db\":\"a2zlibrary\",\"table\":\"user\"},{\"db\":\"nodelogin\",\"table\":\"users\"},{\"db\":\"nodelogin\",\"table\":\"accounts\"},{\"db\":\"a2zlibrary\",\"table\":\"cart\"},{\"db\":\"a2zlibrary\",\"table\":\"event\"},{\"db\":\"a2zlibrary\",\"table\":\"reviews\"},{\"db\":\"a2zlibrary\",\"table\":\"wishlist\"},{\"db\":\"blog_eg\",\"table\":\"users\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Dumping data for table `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('node', 'exam', 'ExamName');

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'a2zlibrary', 'books', '{\"CREATE_TIME\":\"2022-05-09 22:07:07\",\"sorted_col\":\"`BookID` ASC\"}', '2022-06-08 17:51:59'),
('root', 'a2zlibrary', 'reviews', '{\"sorted_col\":\"`reviews`.`BookID` ASC\"}', '2022-05-14 09:43:17'),
('root', 'a2zlibrary', 'user', '{\"sorted_col\":\"`UserID` ASC\"}', '2022-04-22 09:53:42'),
('root', 'node', 'exam', '[]', '2022-03-17 11:24:00'),
('root', 'node', 'sessions', '{\"sorted_col\":\"`CreateOn`  DESC\"}', '2022-03-21 17:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-06-08 22:59:02', '{\"Console\\/Mode\":\"collapse\",\"DisplayServersList\":true,\"Server\\/hide_db\":\"\",\"Server\\/only_db\":\"\",\"ThemeDefault\":\"metro\",\"Console\\/Height\":265.999667,\"NavigationWidth\":0}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `saide_db`
--
CREATE DATABASE IF NOT EXISTS `saide_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `saide_db`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `ISBN_NO` varchar(100) DEFAULT NULL,
  `Book_Title` varchar(200) DEFAULT NULL,
  `Book_Type` int(10) UNSIGNED DEFAULT NULL,
  `Author_Name` varchar(100) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Purchase_Date` date DEFAULT NULL,
  `Edition` varchar(40) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT 0.00,
  `Pages` int(11) DEFAULT NULL,
  `Publisher` varchar(140) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `ISBN_NO`, `Book_Title`, `Book_Type`, `Author_Name`, `Quantity`, `Purchase_Date`, `Edition`, `Price`, `Pages`, `Publisher`) VALUES
(1, '62781733', 'River  Between', 1, 'Ngugi wa Thiongo', 33, '2018-02-24', '1', '300.00', 120, 'Longhorn'),
(2, '978-9966-111-32-6', 'Who is Jesus', 2, 'Greg Gilbert', 1, '2018-02-24', NULL, '800.00', 138, 'ekklesia afrika'),
(3, '978-0-8308-5810-1', 'Pauls Prison Letters', 1, 'Smith', 23, '2018-02-24', NULL, '450.00', 133, 'IVP cONNECT');

-- --------------------------------------------------------

--
-- Table structure for table `book_issue`
--

CREATE TABLE `book_issue` (
  `id` int(10) UNSIGNED NOT NULL,
  `Member` int(10) UNSIGNED DEFAULT NULL,
  `Number` int(10) UNSIGNED DEFAULT NULL,
  `Book_Number` int(10) UNSIGNED DEFAULT NULL,
  `Book_Title` int(10) UNSIGNED DEFAULT NULL,
  `Issue_Date` date DEFAULT NULL,
  `Return_Date` date DEFAULT NULL,
  `Status` varchar(40) DEFAULT NULL,
  `issue_id` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_issue`
--

INSERT INTO `book_issue` (`id`, `Member`, `Number`, `Book_Number`, `Book_Title`, `Issue_Date`, `Return_Date`, `Status`, `issue_id`) VALUES
(1, 1, 1, 1, 1, '2018-02-24', '2018-02-24', 'returned', '1'),
(2, 2, 2, 2, 2, '2018-02-24', '2018-03-01', 'issued', '2');

-- --------------------------------------------------------

--
-- Table structure for table `magazines`
--

CREATE TABLE `magazines` (
  `id` int(10) UNSIGNED NOT NULL,
  `Type` varchar(40) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Date_Of_Receipt` date DEFAULT NULL,
  `Date_Published` date DEFAULT NULL,
  `Pages` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT 0.00,
  `Publisher` varchar(140) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membership_grouppermissions`
--

CREATE TABLE `membership_grouppermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `groupID` int(11) DEFAULT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_grouppermissions`
--

INSERT INTO `membership_grouppermissions` (`permissionID`, `groupID`, `tableName`, `allowInsert`, `allowView`, `allowEdit`, `allowDelete`) VALUES
(1, 2, 'books', 1, 3, 3, 3),
(2, 2, 'NewsPapers', 1, 3, 3, 3),
(3, 2, 'Magazines', 1, 3, 3, 3),
(4, 2, 'Users', 1, 3, 3, 3),
(5, 2, 'Book_Issue', 1, 3, 3, 3),
(6, 2, 'Return_Book', 1, 3, 3, 3),
(7, 2, 'Types', 1, 3, 3, 3),
(8, 2, 'Return', 1, 3, 3, 3),
(30, 3, 'books', 0, 3, 0, 0),
(31, 3, 'NewsPapers', 0, 3, 0, 0),
(32, 3, 'Magazines', 0, 3, 0, 0),
(33, 3, 'Users', 0, 3, 0, 0),
(34, 3, 'Book_Issue', 0, 3, 0, 0),
(35, 3, 'Return_Book', 0, 3, 0, 0),
(36, 3, 'Types', 0, 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `membership_groups`
--

CREATE TABLE `membership_groups` (
  `groupID` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `allowSignup` tinyint(4) DEFAULT NULL,
  `needsApproval` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_groups`
--

INSERT INTO `membership_groups` (`groupID`, `name`, `description`, `allowSignup`, `needsApproval`) VALUES
(1, 'anonymous', 'Anonymous group created automatically on 2018-02-24', 0, 0),
(2, 'Admins', 'Admin group created automatically on 2018-02-24', 0, 1),
(3, 'demo', 'demo users', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_userpermissions`
--

CREATE TABLE `membership_userpermissions` (
  `permissionID` int(10) UNSIGNED NOT NULL,
  `memberID` varchar(20) NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `allowInsert` tinyint(4) DEFAULT NULL,
  `allowView` tinyint(4) NOT NULL DEFAULT 0,
  `allowEdit` tinyint(4) NOT NULL DEFAULT 0,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membership_userrecords`
--

CREATE TABLE `membership_userrecords` (
  `recID` bigint(20) UNSIGNED NOT NULL,
  `tableName` varchar(100) DEFAULT NULL,
  `pkValue` varchar(255) DEFAULT NULL,
  `memberID` varchar(20) DEFAULT NULL,
  `dateAdded` bigint(20) UNSIGNED DEFAULT NULL,
  `dateUpdated` bigint(20) UNSIGNED DEFAULT NULL,
  `groupID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_userrecords`
--

INSERT INTO `membership_userrecords` (`recID`, `tableName`, `pkValue`, `memberID`, `dateAdded`, `dateUpdated`, `groupID`) VALUES
(1, 'Types', '1', 'admin', 1519466337, 1519466337, 2),
(2, 'Types', '2', 'admin', 1519466356, 1519466356, 2),
(3, 'Types', '3', 'admin', 1519466381, 1519466381, 2),
(4, 'books', '1', 'admin', 1519466456, 1519466456, 2),
(5, 'Users', '1', 'admin', 1519466500, 1519466500, 2),
(6, 'Book_Issue', '1', 'admin', 1519466549, 1519478053, 2),
(7, 'Return_Book', '1', 'admin', 1519466780, 1519466780, 2),
(8, 'Users', '2', 'admin', 1519468487, 1519468487, 2),
(9, 'books', '2', 'admin', 1519468656, 1519468656, 2),
(10, 'Book_Issue', '2', 'admin', 1519468715, 1519468715, 2),
(11, 'books', '3', 'admin', 1519479901, 1519479901, 2),
(12, 'NewsPapers', '1', 'admin', 1519479996, 1519479996, 2);

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) UNSIGNED DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text DEFAULT NULL,
  `custom2` text DEFAULT NULL,
  `custom3` text DEFAULT NULL,
  `custom4` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`, `pass_reset_key`, `pass_reset_expiry`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@admin.com', '2018-02-24', 2, 0, 1, NULL, NULL, NULL, NULL, 'Admin member created automatically on 2018-02-24', NULL, NULL),
('demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@demo.com', '2018-02-25', 3, 0, 1, 'demo user', 'demo', 'demo', 'demo', 'demo', NULL, NULL),
('guest', NULL, NULL, '2018-02-24', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2018-02-24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `newspapers`
--

CREATE TABLE `newspapers` (
  `id` int(10) UNSIGNED NOT NULL,
  `Language` varchar(40) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Date_Of_Receipt` date DEFAULT NULL,
  `Date_Published` date DEFAULT NULL,
  `Pages` int(11) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT 0.00,
  `Type` varchar(40) DEFAULT NULL,
  `Publisher` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newspapers`
--

INSERT INTO `newspapers` (`id`, `Language`, `Name`, `Date_Of_Receipt`, `Date_Published`, `Pages`, `Price`, `Type`, `Publisher`) VALUES
(1, 'English', 'The Standard', '2018-02-24', '2018-02-24', 35, '100.00', 'newspaper', 'Standard Group Media');

-- --------------------------------------------------------

--
-- Table structure for table `return_book`
--

CREATE TABLE `return_book` (
  `id` int(10) UNSIGNED NOT NULL,
  `Book_Number` int(10) UNSIGNED DEFAULT NULL,
  `Book_Title` int(10) UNSIGNED DEFAULT NULL,
  `Issue_Date` date DEFAULT NULL,
  `Due_Date` int(10) UNSIGNED DEFAULT 1,
  `Return_Date` date DEFAULT NULL,
  `Member` int(10) UNSIGNED DEFAULT NULL,
  `Number` int(10) UNSIGNED DEFAULT NULL,
  `Fine` decimal(10,2) DEFAULT 0.00,
  `Status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `return_book`
--

INSERT INTO `return_book` (`id`, `Book_Number`, `Book_Title`, `Issue_Date`, `Due_Date`, `Return_Date`, `Member`, `Number`, `Fine`, `Status`) VALUES
(1, 1, 1, '0000-00-00', 1, '2018-03-04', 1, 1, '50.00', 'cleared');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `Name`) VALUES
(1, 'novel'),
(2, 'short stories'),
(3, 'science fiction');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `Membership_Number` varchar(40) DEFAULT NULL,
  `Name` varchar(140) DEFAULT NULL,
  `Contact` varchar(40) DEFAULT NULL,
  `ID_Number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Membership_Number`, `Name`, `Contact`, `ID_Number`) VALUES
(1, '1231', 'Kelvin Guma', '0708344101', 99239183),
(2, '2000', 'Dennis Amadi', '079822271', 33432113);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Book_Type` (`Book_Type`);

--
-- Indexes for table `book_issue`
--
ALTER TABLE `book_issue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Member` (`Member`),
  ADD KEY `Book_Number` (`Book_Number`);

--
-- Indexes for table `magazines`
--
ALTER TABLE `magazines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_groups`
--
ALTER TABLE `membership_groups`
  ADD PRIMARY KEY (`groupID`);

--
-- Indexes for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  ADD PRIMARY KEY (`permissionID`);

--
-- Indexes for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  ADD PRIMARY KEY (`recID`),
  ADD UNIQUE KEY `tableName_pkValue` (`tableName`,`pkValue`),
  ADD KEY `pkValue` (`pkValue`),
  ADD KEY `tableName` (`tableName`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `membership_users`
--
ALTER TABLE `membership_users`
  ADD PRIMARY KEY (`memberID`),
  ADD KEY `groupID` (`groupID`);

--
-- Indexes for table `newspapers`
--
ALTER TABLE `newspapers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_book`
--
ALTER TABLE `return_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Book_Number` (`Book_Number`),
  ADD KEY `Member` (`Member`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_issue`
--
ALTER TABLE `book_issue`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `magazines`
--
ALTER TABLE `magazines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_grouppermissions`
--
ALTER TABLE `membership_grouppermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `membership_groups`
--
ALTER TABLE `membership_groups`
  MODIFY `groupID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `membership_userpermissions`
--
ALTER TABLE `membership_userpermissions`
  MODIFY `permissionID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_userrecords`
--
ALTER TABLE `membership_userrecords`
  MODIFY `recID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `newspapers`
--
ALTER TABLE `newspapers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `return_book`
--
ALTER TABLE `return_book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `tibex`
--
CREATE DATABASE IF NOT EXISTS `tibex` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tibex`;
--
-- Database: `uiustudentrecordsystem`
--
CREATE DATABASE IF NOT EXISTS `uiustudentrecordsystem` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `uiustudentrecordsystem`;
--
-- Database: `uiustudentrecordsystem1`
--
CREATE DATABASE IF NOT EXISTS `uiustudentrecordsystem1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `uiustudentrecordsystem1`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `dbAdminSerialNo` int(11) NOT NULL,
  `dbAdminFname` varchar(64) DEFAULT NULL,
  `dbAdminLname` varchar(64) DEFAULT NULL,
  `dbAdminEmail` varchar(64) DEFAULT NULL,
  `dbAdminPassword` varchar(64) DEFAULT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`dbAdminSerialNo`, `dbAdminFname`, `dbAdminLname`, `dbAdminEmail`, `dbAdminPassword`) VALUES
(1, 'Munir', 'Hasan', 'a', '1234'),
(2, 'Tanjina', 'Helaly', 'h', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `dbCourseSerial` int(11) NOT NULL,
  `dbCourseSec` varchar(64) DEFAULT NULL,
  `dbCourseCredit` int(11) DEFAULT NULL,
  `dbCourseCode` varchar(64) DEFAULT NULL,
  `dbCourseTitle` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `dbStudentSerialNo` int(11) NOT NULL,
  `dbStudentFname` varchar(64) DEFAULT NULL,
  `dbStudentLname` varchar(64) DEFAULT NULL,
  `dbStudentID` varchar(64) DEFAULT NULL,
  `dbStudentPassword` varchar(64) DEFAULT 'password',
  `dbStudentDepartment` varchar(64) DEFAULT NULL,
  `dbStudentEmail` varchar(64) DEFAULT NULL,
  `dbStudentPhone` varchar(64) DEFAULT NULL,
  `dbStudentAddress` varchar(64) DEFAULT NULL,
  `dbStudentDOB` varchar(64) DEFAULT NULL,
  `dbGuardianFname` varchar(64) DEFAULT NULL,
  `dbGuardianLname` varchar(64) DEFAULT NULL,
  `dbGuardianEmail` varchar(64) DEFAULT NULL,
  `dbGuardianPhone` varchar(64) DEFAULT NULL,
  `dbGuardianPassword` varchar(64) DEFAULT 'password',
  `dbStudent1stSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudent2ndSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudent3rdSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudent4thSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudent5thSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudent6thSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudent7thSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudent8thSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudent9thSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudent10thSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudent11thSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudent12thSemGpa` decimal(10,2) NOT NULL DEFAULT 0.00,
  `dbStudentCgpa` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`dbStudentSerialNo`, `dbStudentFname`, `dbStudentLname`, `dbStudentID`, `dbStudentPassword`, `dbStudentDepartment`, `dbStudentEmail`, `dbStudentPhone`, `dbStudentAddress`, `dbStudentDOB`, `dbGuardianFname`, `dbGuardianLname`, `dbGuardianEmail`, `dbGuardianPhone`, `dbGuardianPassword`, `dbStudent1stSemGpa`, `dbStudent2ndSemGpa`, `dbStudent3rdSemGpa`, `dbStudent4thSemGpa`, `dbStudent5thSemGpa`, `dbStudent6thSemGpa`, `dbStudent7thSemGpa`, `dbStudent8thSemGpa`, `dbStudent9thSemGpa`, `dbStudent10thSemGpa`, `dbStudent11thSemGpa`, `dbStudent12thSemGpa`, `dbStudentCgpa`) VALUES
(12, '', '', '', 'password', 'CSE', 'a', '', '', 'null', '', '', '', '', 'password', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(14, 'sfddg', 'xcv', '', 'password', 'CSE', '', '', '', 'null', '', '', '', '', 'password', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(15, 'tibebe', 'solomon', '1', 'password', 'EEE', 'xcn knxck jxnc kx', '123456', 'xcvkjxc', '2022-05-16', 'nzxocn', 'xkc nkjxc k', 'xcn knxck jxnc kx', 'kxjcnvkjxncvkj', 'password', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `studentgpa`
--

CREATE TABLE `studentgpa` (
  `dbstudentgpaSerial` int(11) NOT NULL,
  `dbstudentgpaID` varchar(64) DEFAULT NULL,
  `dbstudentgpaCurrentCourse` varchar(64) DEFAULT NULL,
  `dbstudentgpaCurrentCourseGPA` varchar(64) DEFAULT NULL,
  `dbstudentgpa1stSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa2ndSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa3rdSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa4thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa5thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa6thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa7thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa8thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa9thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa10thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa11thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa12thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa13thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa14thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa15thSem` varchar(64) DEFAULT NULL,
  `dbstudentgpa16thSem` varchar(64) DEFAULT NULL,
  `dbstudentCGPA` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentgpa`
--

INSERT INTO `studentgpa` (`dbstudentgpaSerial`, `dbstudentgpaID`, `dbstudentgpaCurrentCourse`, `dbstudentgpaCurrentCourseGPA`, `dbstudentgpa1stSem`, `dbstudentgpa2ndSem`, `dbstudentgpa3rdSem`, `dbstudentgpa4thSem`, `dbstudentgpa5thSem`, `dbstudentgpa6thSem`, `dbstudentgpa7thSem`, `dbstudentgpa8thSem`, `dbstudentgpa9thSem`, `dbstudentgpa10thSem`, `dbstudentgpa11thSem`, `dbstudentgpa12thSem`, `dbstudentgpa13thSem`, `dbstudentgpa14thSem`, `dbstudentgpa15thSem`, `dbstudentgpa16thSem`, `dbstudentCGPA`) VALUES
(12, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `dbTeacherSerialNo` int(11) NOT NULL,
  `dbTeacherFname` varchar(64) DEFAULT NULL,
  `dbTeacherLname` varchar(64) DEFAULT NULL,
  `dbTeacherEmail` varchar(64) DEFAULT NULL,
  `dbTeacherPassword` varchar(64) DEFAULT 'password',
  `dbTeacherDepartment` varchar(64) DEFAULT NULL,
  `dbTeacherID` varchar(64) DEFAULT NULL,
  `dbTeacherCourse` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`dbAdminSerialNo`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`dbCourseSerial`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`dbStudentSerialNo`);

--
-- Indexes for table `studentgpa`
--
ALTER TABLE `studentgpa`
  ADD PRIMARY KEY (`dbstudentgpaSerial`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`dbTeacherSerialNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `dbAdminSerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `dbCourseSerial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `dbStudentSerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `studentgpa`
--
ALTER TABLE `studentgpa`
  MODIFY `dbstudentgpaSerial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `dbTeacherSerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
