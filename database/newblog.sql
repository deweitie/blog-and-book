-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2016 at 12:08 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(11) NOT NULL,
  `Post_Title` varchar(100) NOT NULL,
  `Post_text` text NOT NULL,
  `Post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `Post_Title`, `Post_text`, `Post_date`) VALUES
(1, 'very', 'good', '2016-09-06'),
(2, 'In Twenty Years: A Novel', 'Twenty years ago, six Penn students shared a house, naively certain that their friendships would endure—until the death of their ringleader and dear friend Bea splintered the group for good. Now, mostly estranged from one another, the remaining five reluctantly gather at that same house on the eve of what would have been Bea’s fortieth birthday.\r\n\r\nBut along with the return of the friends come old grudges, unrequited feelings, and buried secrets. Catherine, the CEO of a domestic empire, and Owen, a stay-at-home dad, were picture-perfect college sweethearts—but now teeter on the brink of disaster. Lindy, a well-known musician, is pushing middle age in an industry that’s all about youth and slowly self-destructing as she grapples with her own identity. Behind his smile, handsome plastic surgeon Colin harbors the heartbreaking truth about his own history with Bea. And Annie carefully curates her life on Instagram and Facebook, keeping up ', '2016-09-05'),
(3, 'Start sketching what you see for the future', 'If it ain’t Baroque, don’t fix it: your favorite art contest is back! Today we’re kicking off the 2016 Doodle 4 Google contest, where art-loving K-12 students from across the U.S., Guam and Puerto Rico are invited to bring their imagination to life in a doodle of the Google logo, using any medium they choose. The winning masterpiece will hang on the Google homepage for a day, where millions will enjoy it.', '2016-09-09'),
(4, 'National Museum of African American History and Culture finds a new way to tell stories', 'Next week marks the grand opening of the Smithsonian\'s National Museum of African American History and Culture (NMAAHC). A museum 100 years in the making, the NMAAHC is much more than just a collection of artifacts. Within its walls, visitors will take part in an immersive journey into the important contributions of African Americans in the United States. It’s a mosaic of stories — stories from our history that are core to who we are as a nation. And we’re proud to help bring these stories to life with a first-of-its-kind 3D interactive exhibit and a $1 million grant from Google.org, part of our ongoing work on racial and social justice issues.', '2016-09-11'),
(6, 'A new way to explore artifacts', 'A few years ago, Dr. Lonnie Bunch, the NMAAHC’s director, came to Google’s headquarters and shared his vision to make the museum the most technologically advanced in the world. I immediately knew I wanted to be involved, and pulled together people from across the company: designers who focus on user interaction, members of the Cultural Institute, engineers who work on everything from Google Maps to YouTube, and members of the Black Googler Network. For the past year, we’ve been working to deliver on Dr. Bunch’s vision.\r\nOur team quickly learned that museums are often only able to showcase a fraction of their content and archives to visitors. So we asked ourselves: what technology do we have at Google that could help enrich the museum experience? We worked closely with the museum to build an interactive exhibit to house artifacts from decades of African American history and let visitors explore and learn about them. With 3D scanning, 360 video, multiple screens and other technologies, visitors can see artifacts like a powder horn or handmade dish from all angles by rotating them with a mobile device. The interactive exhibit will open in spring 2017.', '2016-08-29');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_ID`, `Name`) VALUES
(1, 'Book1');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `Chapter_ID` int(11) NOT NULL,
  `Chapter_Number` int(11) NOT NULL,
  `Chapter_Title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chapter`
--

INSERT INTO `chapter` (`Chapter_ID`, `Chapter_Number`, `Chapter_Title`) VALUES
(1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `Section_ID` int(11) NOT NULL,
  `Book_ID` int(11) NOT NULL,
  `Chapter_ID` int(11) NOT NULL,
  `Post_ID` int(11) NOT NULL,
  `Section_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`Section_ID`, `Book_ID`, `Chapter_ID`, `Post_ID`, `Section_No`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 4, 1),
(6, 1, 1, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Book_ID`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`Chapter_ID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`Section_ID`),
  ADD KEY `Chapter_ID` (`Chapter_ID`),
  ADD KEY `Post_ID` (`Post_ID`),
  ADD KEY `Chapter_ID_2` (`Chapter_ID`),
  ADD KEY `Book_ID` (`Book_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `Chapter_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `Section_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`Chapter_ID`) REFERENCES `chapter` (`Chapter_ID`),
  ADD CONSTRAINT `section_ibfk_2` FOREIGN KEY (`Post_ID`) REFERENCES `blog` (`ID`),
  ADD CONSTRAINT `section_ibfk_3` FOREIGN KEY (`Book_ID`) REFERENCES `book` (`Book_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
