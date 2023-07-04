-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2021 at 11:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gorillaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `bio` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `image`, `bio`) VALUES
(1, '2-D', '16191967952D.png', 'Stuart Pot(also known as 2-D, Stu-Pot or Pot) is the lead vocalist and keyboardist of Gorillaz.\r\n\r\n2-D was born on May 23, 1978, to David and Rachel Pot. His real name is Stuart Pot (his last name was often thought to be Tusspot, though his father changed his name to \"Pot\" shortly before Stuart was born to avoid him from getting bullied at school), but is often shortened to Stu-Pot. He was born in Crawley, England and was being educated at St. Wilfred\'s School (the same school that educated the members of The Cure). His father, David Tusspot, worked as a mechanic and owner of the Tusspot\'s Fairground. His mother, Rachel Tusspot, was a nurse who supplied Stuart with headache pills from his tree accident. While Stuart wasn\'t a very intelligent boy (indeed, he was often described as \"a bit thick\"), he was known as a kind person and had a general love of music. His parents recall a little ten-year-old Stuart bouncing around in his room listening to The Clash, Augustus Pablo, The Human League (his favorite band) and many other musicians of the sort. He hit his head when falling from a tree at the age of eleven, causing all of his hair to fall out. When it came back it was a deep \'azure blue\'.'),
(2, 'Murdoc', '1619198370Murdoc.jpeg', 'Murdoc Alphonse \"Faust\" Niccals is the official bass player, self-proclaimed leader and founder of Gorillaz.\r\n\r\nMurdoc Alphonce Niccals was born in Stoke-On-Trent on June 6th, 1966. Although the exact whereabouts were never verified, it was rumored that his mother gave birth to him at the Belphegor Sanatorium, a halfway house for \"the sick, the needy and the incredibly bored.\"\r\n\r\nAs an infant, he was dumped on the doorstep of his father\'s house one night and was discovered by him as he was returning home from the pub.\r\n\r\nMurdoc went on to a very abusive childhood. It has been proposed that his many addictions and his sour attitude were due to his abusive childhood. His father, Sebastian Jacob Niccals, (or Jacob Sebastian Niccals, depending on who\'s asking) was a spiteful drunk of a man who often verbally abused and exploited his sons.\r\nDuring his childhood years, Murdoc attended Sodsworth Comprehensive School where he gained a reputation for his truancy, puerile pranks, ugliness, poor personal hygiene, and generally unruly behavior. From the first day, he would frequently be found in the corridors during lessons and propping up walls outside of the classrooms, distracting the other students with \"endless quacking noises and pointless, malicious humor\".'),
(3, 'Russel', '1619197219RusselHobbs.png', 'Russel Hobbs (also known as Russ) is the official drummer of Gorillaz.\r\n\r\nRussel was born in Brooklyn, New York on June 3, 1975. Known for his good manners and eloquent speech, he attended the Xavier School For Young Achievers but was expelled after attacking several students while possessed by a demon. He fell into a coma for the next four years, at the end of which, the demon was finally exorcised from his body by a priest named Father Merrin. Russel didn\'t believe any of it until he saw a picture of the \"Russel wuz here!\" graffiti written in blood on the school walls in his handwriting. [1]\r\n\r\nAfter his old school refused to take him back, Russel attended Brooklyn High School, where he befriended many of the students that were gifted in hip-hop music.\r\n\r\nOne rainy night outside a 7-Eleven Store, Russel\'s companions were killed in a drive-by shooting by a gang of \"gang bangers\" driving a black Humvee. They were all wearing red hooded tops.'),
(4, 'Noodle', '1619197237Noodle.jpeg', 'Noodle is the official lead guitarist of Gorillaz. She also wrote the entire Demon Days album.\r\nNoodle was born in Osaka, Japan on October 31, 1990. She spent a portion of her childhood in Japan as a subject of a classified Japanese super soldier project under the management of the Japanese scientist, Mr. Kyuzo.\r\n\r\nNoodle, along with 22 other children, were trained with the sole purpose of fighting as soldiers of the Japanese military and government. After the children were deemed too dangerous and unstable for combat, the project was scrapped. Mr. Kyuzo was then ordered to dispose of all possible traces of the failed experiment, as well as its participants. \r\nAfter killing the other 22 children, Kyuzo was reluctant in killing Noodle. Rather than killing her, Kyuzo placed her in a state of amnesia through the use of verbal commands. The phrase used to place Noodle in her state of amnesia was known as Ocean Bacon. After temporarily clearing her memory of the project, Kyuzo smuggled Noodle to the United Kingdom in a FedEx crate and falsely reported her death (along with the other 22 children) to his superiors.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(8) NOT NULL,
  `user_name` varchar(256) DEFAULT NULL,
  `pass_word` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `user_name`, `pass_word`) VALUES
(1, '4f5cec75c744bd39b5126debbb7cffb8', '79cfc2519613e66f5d7a2218370339f6');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `song_name` varchar(256) NOT NULL,
  `song_file_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `song_name`, `song_file_name`) VALUES
(1, 'Gorillaz-Tranz', '1619214506Gorillaz-Tranz.mp3'),
(2, 'Gorillaz - Clint Eastwood', '1620032847Gorillaz+-+Clint+Eastwood.mp3'),
(5, 'Gorillaz - Rock The House', '1620033503Gorillaz+-+Rock+The+House.mp3'),
(6, 'Gorillaz - Feel Good Inc', '1620033540Gorillaz+-+Feel+Good+Inc.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `email_address` varchar(256) NOT NULL,
  `message_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email_address`, `message_text`) VALUES
(1, 'test1', 'test1', 'test@email.com', 'this is a test'),
(2, 'test user', 'tester', 'test@email.com', 'ehllo');

-- --------------------------------------------------------

--
-- Table structure for table `discography`
--

CREATE TABLE `discography` (
  `id` int(11) NOT NULL,
  `album_name` varchar(256) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discography`
--

INSERT INTO `discography` (`id`, `album_name`, `year`) VALUES
(1, 'Gorillaz', 2001),
(2, 'Demon Days', 2005),
(3, 'Plastic Beach', 2010),
(4, 'The Fall', 2010),
(5, 'Humanz', 2017),
(6, 'The Now Now', 2018),
(7, 'Song Machine: Season One', 2020),
(8, 'G-Sides', 2002),
(9, 'D-Sides', 2007),
(10, 'The Singles Collection 2001 - 2011', 2011),
(11, 'Laika Come Home', 2002),
(12, 'Clint Eastwood', 2001),
(13, '19-2000', 2001),
(14, '911 (with D12 featuring Terry Hall)', 2001),
(15, 'Tomorrow Comes Today', 2002),
(16, 'Lil\' Dub Chefin\'', 2002),
(17, 'Feel Good Inc.', 2005),
(18, 'Dare', 2005),
(19, 'Dirty Harry', 2005),
(20, 'El Mañana/Kids With Guns', 2006),
(21, 'Stylo', 2010),
(22, 'On Melancholy Hill', 2010),
(23, 'Superfast Jellyfish', 2010),
(24, 'Rhinestone Eyes', 2010),
(25, 'Doncamatic', 2010),
(26, 'Revolving Doors/Amarillo', 2011),
(27, 'DoYaThing', 2012),
(28, 'Hallelujah Money', 2017),
(29, 'Saturnz Barz', 2017),
(30, 'Andromeda', 2017),
(31, 'Ascension', 2017),
(32, 'We Got The Power', 2017),
(33, 'Let Me Out', 2017),
(34, 'The Apprentice', 2017),
(35, 'Sleeping Powder', 2017),
(36, 'Strobelite', 2017),
(37, 'Garage Palace', 2017),
(38, 'Andromeda (D.R.A.M. Special)', 2017),
(39, 'Humility', 2018),
(40, 'Lake Zurich', 2018),
(41, 'Sorcererz', 2018),
(42, 'Fire Flies', 2018),
(43, 'Hollywood', 2018),
(44, 'Tranz', 2018),
(45, 'Song Machine Theme Tune', 2020),
(46, 'Momentary Bliss', 2020),
(47, 'Désolé', 2020),
(48, 'Aries', 2020),
(49, 'How Far?', 2020),
(50, 'Friday 13th', 2020),
(51, 'Pac-Man', 2020),
(52, 'Strange Timez', 2020),
(53, 'The Pink Phantom', 2020),
(54, 'The Valley of the Pagans', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gallery_image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_image`) VALUES
(1, '1618697908Gorillaz5.jpg'),
(2, '1618698524Gorilla1.jpeg'),
(3, '1618698566Gorillaz4.jpeg'),
(4, '1618698796Gorillaz2.jpeg'),
(5, '1618698812Gorillaz14.jpeg'),
(6, '1618698827Gorillaz13.jpeg'),
(7, '1618698839Gorillaz12.jpg'),
(8, '1618698856Gorillaz11.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `home_images`
--

CREATE TABLE `home_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_images`
--

INSERT INTO `home_images` (`id`, `image`) VALUES
(1, '1619282227log97.jpg'),
(2, '1619282249');

-- --------------------------------------------------------

--
-- Table structure for table `home_text`
--

CREATE TABLE `home_text` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `web_text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_text`
--

INSERT INTO `home_text` (`id`, `name`, `web_text`) VALUES
(1, 'about', 'The story of Gorillaz begins on August 15th, 1997. Stu-Pot was a mentally deficient keyboard enthusiast and part-time employee at Uncle Norm\'s Organ Emporium. Satanist hoodlum Murdoc Niccals decided to ram-raid Uncle Norm\'s Organ Emporium to procure synthesizer equipment in order to establish a \"chart-topping\" musical group. However, Murdoc ended up driving his Vauxhall Astra through the building and directly into Stu-Pot\'s head, permanently damaging (\"fracturing\") Stu-Pot\'s left eye and putting him into a catatonic state. Murdoc was sentenced to \"30,000 hours of community service, plus 10 hours every week of caring for the injured Stu-Pot\". Not long after, Murdoc again injured Stu-Pot in a car accident in Nottingham\'s Tesco car park when attempting a 360° in order to impress some women. During the initial rotation, he was thrown through the windshield and landed face-first on a curb. This permanently damaged Stu-Pot\'s right eye but revived him from his coma. Impressed by Stu-Pot’s new look, Murdoc then recruited the newly recovered (albeit still mentally defective) Stu-Pot as the keyboardist and vocalist for his group, re-dubbing him 2-D for the matching pair of dents in his head from the accidents.');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `quote` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `quote`) VALUES
(1, '“Music is something that should speak for itself, straight from the heart. It took me a long time to understand that.”-- Damon Albarn');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `venue` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`id`, `venue`, `date`) VALUES
(1, 'The O2, London, United Kingdom', 'Wednesday, 11 August 2021'),
(2, 'Arenes de Nimes, Nimes, France', 'Thursday, 10 June 2021'),
(3, 'Parque da Cidade do Porto, Porto, Portugal', 'Saturday, 12 June 2021'),
(4, 'Tanzbrunnen Köln, Köln, Germany', 'Wednesday, 16 June 2021'),
(5, 'Parkbühne Wuhlheide, Berlin, Germany', 'Friday, 18 June 2021'),
(6, 'Rockhal - Main hall, Esch-Alzette, Luxembourg', 'Thursday, 01 July 2021'),
(7, 'Luzhniki Stadium, Moscow, Russia', 'Friday, 09 July 2021'),
(8, 'Banffy Castle, Bontida, Cluj, Romania', '14 - 18 July 2021'),
(9, 'North Byron Parklands, Byron Bay, Australia', '19 - 21 November 2021'),
(10, 'North Byron Parklands, Byron Bay, Australia', 'Friday, 19 November 2021');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `video_name` varchar(256) NOT NULL,
  `video_file_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video_name`, `video_file_name`) VALUES
(1, 'Gorillaz - Clint Eastwood', 'Gorillaz+-+Clint+Eastwood.mp4'),
(2, 'Gorillaz - Feel Good Inc', '1620033371Gorillaz+-+Feel+Good+Inc.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discography`
--
ALTER TABLE `discography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_images`
--
ALTER TABLE `home_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_text`
--
ALTER TABLE `home_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discography`
--
ALTER TABLE `discography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `home_images`
--
ALTER TABLE `home_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_text`
--
ALTER TABLE `home_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
