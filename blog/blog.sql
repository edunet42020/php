-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2021 at 03:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblblog`
--

CREATE TABLE `tblblog` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `blog_image` varchar(300) NOT NULL,
  `blog_descrption` varchar(7000) NOT NULL,
  `blog_category` varchar(20) NOT NULL,
  `blog_create` date NOT NULL,
  `blog_userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblblog`
--

INSERT INTO `tblblog` (`blog_id`, `blog_title`, `blog_image`, `blog_descrption`, `blog_category`, `blog_create`, `blog_userid`) VALUES
(3, 'What Is Blogging?', '161813833312799139596072d4dd179d1lukas-blazek-GnvurwJsKaY-unsplash.jpeg', 'Blogging refers to writing, photography, and other media thats self-published online. Blogging started as an opportunity for individuals to write diary-style entries, but it has since been incorporated into websites for many businesses. The hallmarks of blogging include frequent updates, informal language, and opportunities for readers to engage and start a conversation.\r\n\r\n\r\nHeres an overview of what a blog is, why its popular, and tips for starting your own blog.\r\n\r\n\r\nWhat Is Blogging?\r\nThe word blog is actually a shortened form of its original name, weblog. These weblogs allowed early internet users to log the details of their day in diary-style entries. Blogs often allow readers to comment, so as they became more common, communities sprung up around popular blogs.\r\n\r\n\r\n', 'Fashion', '2021-04-02', 9),
(4, 'Why is Dark Chocolate Good for You?', '161814423213189137786072ebe8c6497american-heritage-chocolate-8eOY6u1FxZU-unsplash.jpeg', 'Is chocolate dark actually healthy? The buzz around dark chocolate these days is focused on flavonoids and trace minerals, some of the molecules that make cacao a so-called super food. But do you know what those things are, and more importantly, why they matter?\r\n\r\nChocolate is good for you because it makes you happy on a basic, chemical level. Studies have proven this time & time again, but no, the Hersheys and Cadburys bars that are half sugar dont count. But a positive brain response is not the only reason to grab a quality chocolate bar for your post-meal bliss.\r\n\r\nWhat Is Dark Chocolate?\r\nMany countries have a legal definition for each of the three types of chocolate: white, milk, and dark. These definitions basically regulate the minimum amount of cacao derivatives and dairy which must be present in each chocolate, as well as a nutritive carbohydrate sweetener content maximum. For its part, dark chocolate is actually not yet explicitly defined by the FDA, which rather chooses to define the term chocolate, allowing companies to characterize their chocolate products however theyd like.\r\n\r\n', 'Food', '2021-04-04', 10),
(5, 'Mad about the House', '1618144512570435256072ed00107a3amer-mughawish-gwqJ2yezxeU-unsplash.jpeg', 'Kate Watson-Smyth is a decorated journalist and writer who finds joy in sharing about interiors. She has worked with The Independent, Financial Times, The Daily Telegraph, The Guardian, writing for them on matters design, interiors, and property. This personal blog has won several accolades some of them being the Vuelio No 1 UK Interiors Blog and the Amara Interior Blog Awards Best Design Inspiration Blog.\r\n\r\nMad about the House features her work under Design Classics, designs she is Mad About, House Hunter, The Directory, My House, Your House and lastly a Podcast section (learn: How to start a podcast.) For Kate Watson, this blog is a place where she can get to showcase and express all the interior design work she cannot fit into the newspaper articles she does.\r\n\r\nShe is also keen on giving readers and listeners (through her podcast section), the inspiration for decorating their homes with what she calls interesting and unusual items. She features a wide range of styles, helping you live up to her philosophy – Your home should tell your story.\r\n\r\n', 'Lifestyle', '2021-04-06', 10),
(6, 'Dan Flying Solo', '161814468715168231896072edaf8b762simon-english-48nerZQCHgo-unsplash.jpeg', 'Daniel is a British bloke who works with Skyscanner and LonelyPlanet on the regular. \r\n\r\nHes an amazing writer with tons of useful tips, and is an even better photographer. I had the privilege of traveling with Daniel and working with him in India. There was never a dull moment! \r\n\r\nHis photography has also been published in Beautiful Destination, Travel & Leisure, National Geographic, Travel Channel and Matador Network.\r\n\r\n', 'Travel', '2021-04-09', 11),
(7, 'How to Start a Sports ', '16181452042615049406072efb43b0c9jonathan-chng-3R4vPrSB1c4-unsplash.jpeg', 'Have you been itching to start a sports blog? A sports blog is an excellent way to share your passion with the rest of the world and make connections with other people who enjoy sports as much as you do. \r\n\r\nThere are tons of topics to blog about, from keeping track of stats, players, and performance of your favorite clubs and teams to sharing sports strategies, discussing equipment, and generally talking about different sports games. \r\n\r\nBut, being passionate about a particular sports topic or a team is not enough. There is also behind the scenes work that goes into creating a popular sports blog that attracts new readers while encouraging existing ones to keep coming back to it. \r\n\r\nIn this post, well talk about how to start a sports blog that everyone who loves sports enjoys reading. ', 'Sports', '2021-04-11', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_photo` varchar(500) NOT NULL,
  `user_emailid` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `user_name`, `user_photo`, `user_emailid`, `user_password`) VALUES
(9, 'Brinda Chanchad', '16181321832205258396072bcd73e2ba8.jpg', 'brindachanchad00@gmail.com', 'YnJpbmRhNTUwMA=='),
(10, 'Himanshu Patil', '161814401913173084346072eb139bd7fpp (1).jpeg', 'patilhnofficial@gmail.com', 'aGltYW5zaHUxMjM0NQ=='),
(11, 'Nakia Lightwala', '16181445585948952136072ed2e078depp.jpeg', 'nakialightwala242@gmail.com', 'bmFraWExMjM0NQ==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblblog`
--
ALTER TABLE `tblblog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `blog_userid` (`blog_userid`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblblog`
--
ALTER TABLE `tblblog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblblog`
--
ALTER TABLE `tblblog`
  ADD CONSTRAINT `tblblog_ibfk_1` FOREIGN KEY (`blog_userid`) REFERENCES `tbluser` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
