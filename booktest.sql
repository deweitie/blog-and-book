-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-08-15 04:49:06
-- 服务器版本： 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booktest`
--

-- --------------------------------------------------------

--
-- 表的结构 `booklist`
--

DROP TABLE IF EXISTS `booklist`;
CREATE TABLE IF NOT EXISTS `booklist` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Bookname` varchar(30) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Chapter` varchar(30) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `booklist`
--

INSERT INTO `booklist` (`ID`, `Bookname`, `Title`, `Chapter`, `content`) VALUES
(1, 'qwe', '123', '123123', 'This article is about the series of eight novels. For other uses, including related topics and derivative works, see Harry Potter (disambiguation).\r\nHarry Potter\r\nThe Harry Potter logo, used first in American editions of the novel series and later in films.\r\nThe Harry Potter logo first used for the American edition of the novel series (and some other editions worldwide), and then the film series.\r\nHarry Potter and the Philosopher''s Stone (1997)\r\nHarry Potter and the Chamber of Secrets (1998)\r\nHarry Potter and the Prisoner of Azkaban (1999)\r\nHarry Potter and the Goblet of Fire (2000)\r\nHarry Potter and the Order of the Phoenix (2003)\r\nHarry Potter and the Half-Blood Prince (2005)\r\nHarry Potter and the Deathly Hallows (2007)\r\nHarry Potter and the Cursed Child (2016)[1]\r\nAuthor	J. K. Rowling\r\nCountry	United Kingdom\r\nLanguage	English\r\nGenre	Fantasy, drama, young-adult fiction, mystery, thriller, Bildungsroman\r\nPublisher	Bloomsbury Publishing (UK)\r\nArthur A. Levine Books (US)\r\nLittle, Brown (UK)\r\nPublished	26 June 1997 – 21 July 2007,\r\n31 July 2016[2] (initial publication)\r\nMedia type	Print (hardback & paperback)\r\nAudiobook\r\nE-book (as of March 2012)[3]\r\nNo. of books	8\r\nWebsite	www.pottermore.com\r\nHarry Potter is a series of fantasy novels written by British author J. K. Rowling. The novels chronicle the life of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry. The main story arc concerns Harry''s struggle against Lord Voldemort, a dark wizard who intends to become immortal, overthrow the wizard governing body known as the Ministry of Magic, and subjugate all wizards and non-magical people (Muggles).\r\n\r\nSince the release of the first novel, Harry Potter and the Philosopher''s Stone, on 30 June 1997, the books have found immense popularity, critical acclaim and commercial success worldwide. They have attracted a wide adult audience as well as younger readers, and are often considered cornerstones of modern young adult literature.[4] The series has also had its share of criticism, including concern about the increasingly dark tone as the series progressed, as well as the often gruesome and graphic violence it depicts. As of July 2013, the books have sold more than 450 million copies worldwide, making them the best-selling book series in history, and have been translated into seventy-three languages.[5][6] The last four books consecutively set records as the fastest-selling books in history, with the final instalment selling roughly eleven million copies in the United States within twenty-four hours of its release.\r\n\r\nThe series was originally published in English by two major publishers, Bloomsbury in the United Kingdom and Scholastic Press in the United States. A play, Harry Potter and the Cursed Child, based on a story by Rowling, premiered in London on 30 July 2016 at the Palace Theatre, and its script was published by Little, Brown as the eighth book in the series.[7] The original seven books were adapted into an eight-part film series by Warner Bros. Pictures, which has become the second highest-grossing film series of all time as of August 2015. The franchise has also generated much tie-in merchandise, making the Harry Potter brand worth in excess of $15 billion.[8]\r\n\r\nA series of many genres, including fantasy, drama, coming of age and the British school story (which includes elements of mystery, thriller, adventure, horror and romance), the world of Harry Potter explores numerous themes and includes many cultural meanings and references.[9] According to Rowling, the main theme is death.[10] Other major themes in the series include prejudice, corruption, and madness.[11]\r\n\r\nThe success of the books and films has ensured that the Harry Potter franchise continues to expand, with numerous derivative works, a travelling exhibition that premièred in Chicago in 2009, a studio tour in London that opened in 2012, a digital platform on which J.K. Rowling updates the series with new information and insight, and a trilogy of spin-off films premièring in November 2016, among many other developments. Most recently, themed attractions, collectively known as The Wizarding World of Harry Potter, have been built at several Universal Parks & Resorts amusement parks around the world.'),
(2, 'qwe', '2', '12', 'The highly anticipated sixth book in the Treehouse series!\r\n\r\n Join Andy and Terry in their spectacular new 78-storey treehouse. \r\n\r\nThey''ve added 13 new levels including a drive-thru car wash, a combining machine, a scribbletorium, an ALL-BALL sports stadium, Andyland, Terrytown, a high-security potato chip storage facility and an open-air movie theatre. \r\n\r\nWell, what are you waiting for? Come on up!\r\n'),
(0, 'qwe', 'introduction', 'introduction', 'Introducing... Colouring activities (for serious thinkers)\r\n\r\nHave you ever read through your Graphic Guides and fought the urge to add a splash of colour? Well you should enter our competition!\r\n Find out more: http://bit.ly/introcolour\r\n'),
(5, 'qwe', '1', 'author', 'Based on an original new story by J.K. Rowling, Jack Thorne and John Tiffany, Harry Potter and the Cursed Child, a new play by Jack Thorne, is the first official Harry Potter story to be presented on stage. It will receive its world premiere in London’s West End on 30th July 2016. \r\n\r\n It was always difficult being Harry Potter and it isn’t much easier now that he is an overworked employee of the Ministry of Magic, a husband, and father of three school-age children. \r\n\r\n While Harry grapples with a past that refuses to stay where it belongs, his youngest son Albus must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: sometimes darkness comes from unexpected places. \r\n'),
(4, 'qwe', 'start', '2', 'Jack Thorne writes for theatre, film, television and radio. His theatre credits include Hope and Let The Right One In, both directed by John Tiffany, The Solid Life of Sugarwater for the Graeae Theatre Company, Bunny for the Edinburgh Fringe Festival, Stacy for the Trafalgar Studios, 2nd May 1997 and When You Cure Me for the Bush. His adaptations include The Physicists for the Donmar Warehouse and Stuart: A Life Backwards for Hightide. On film his credits include War Book, A Long Way Down and The Scouting Book for Boys. For television his credits include The Last Panthers, Don’t Take My Baby, This Is England, The Fades, Glue and Cast-Offs and the upcoming National Treasure. In 2012 he won BAFTAs for best series (The Fades) and best serial (This Is England 88).\r\n\r\n John Tiffany directed Once for which he was the recipient of multiple awards both in the West End and on Broadway. As Associate Director of the Royal Court, his work includes The Twits, Hope and The Pass. He was the director of Let The Right One In for the National Theatre of Scotland, which transferred to the Royal Court, West End and St. Ann’s Warehouse. His other work for the National Theatre of Scotland includes Macbeth (also Broadway), Enquirer, The Missing, Peter Pan, The House of Bernarda Alba, Transform Caithness: Hunter, Be Near Me, Nobody Will Ever Forgive Us, The Bacchae, Black Watch, for which he won the Olivier and Critics’ Circle Best Director Awards, Elizabeth Gordon Quinn and Home: Glasgow. Other recent credits include The Glass Menagerie at A.R.T. and on Broadway and The Ambassador at BAM. Tiffany was Associate Director of the National Theatre of Scotland from 2005 to 2012, and was a Radcliffe Fellow at Harvard University in the 2010-2011 academic year.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
