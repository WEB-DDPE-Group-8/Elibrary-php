-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 12:07 AM
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
(11, '2,062,145', 'Brown, Dan', 'Deception Point', 'Saturday, May 1, 2004', 'F2.1  Crime, Thriller & Adventure', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
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
(37, '856,540', 'Ali, Monica', 'Brick Lane', 'Saturday, May 1, 2004', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 5, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Approved', 5, 0),
(38, '842,535', 'Donaldson, Julia', 'Room on the Broom', 'Friday, September 20, 2002', 'Y1.3  Picture Books', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Pan Macmillan Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(39, '828,215', 'Hornby, Nick', 'About a Boy', 'Thursday, April 4, 2002', 'F1.1  General & Literary Fiction', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Penguin Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 5, 0),
(40, '817', 'Dawkins, Richard', 'God Delusion,The', 'Monday, May 21, 2007', 'T8.0  Popular Science', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Transworld Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 2, 0),
(41, '817', '0', '\"Beano\" Annual,The', 'Wednesday, September 1, 2004', 'Y3.1  Children\'s Annuals', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'D.C. Thomson Grp', 'Chinese', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 2, 0),
(42, '813', 'Pelzer, Dave', 'Lost Boy,The:A Foster Child\'s Search for the Love of a Family', 'Saturday, April 7, 2001', 'T4.0  Biography: General', 'Inspired by a true story and told through the startlingly sincere voice of a young narrator, Caroline, Peter Rock\'s My Abandonment is a riveting journey into life at the margins, and a mesmerizing tale of survival and hope.', 'Orion Grp', 'English', '', '2022-05-14 01:04:33', 1, 25, 258456, 258456, '/HTML/uploads/Adler-Mortimer-How-To-Read-A-Book.pdf', 'Rejected', 2, 0),
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
(60, NULL, 25, 37, '2022-06-04'),
(197, 25, 1, 43, '2022-06-06'),
(199, 25, 1, 11, '2022-06-06');

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
(1, 'Tibex', 'tibesolomon7@gmail.com', 923621874, 'Tibebe', 'Solomon', '$2y$10$I8c2szAUS8mZMdX1ozG7derf9eJKegqyYsQIowczJODBPlbvJcAJe', 'Admin', 'Essay_History_Poetry', 0, 'I am a writer who one day hopes to make it big in the industry and leave a mark on literary history', 'Approved', '2022-06-04', 821665),
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
(30, '', '', 0, 'Tibebe', 'Solomonkkk', '$2y$10$KKOpykosyS4YYZ3C3CnnpulPQ9Cj1r30kfwG1HWAdgH8rhT74Tz/u', 'User', '', 0, '', 'Active', '2022-06-04', 0),
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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

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
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`ID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
