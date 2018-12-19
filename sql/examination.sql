-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 10:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `ans_id` int(11) NOT NULL,
  `ans_text` text COLLATE utf8_unicode_ci NOT NULL,
  `ans_score` int(2) NOT NULL,
  `quest_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ans_id`, `ans_text`, `ans_score`, `quest_id`) VALUES
(1, 'เพียงเฉพาะในกรณีฉุกเฉินหรือจำเป็นเท่านั้น', 6, 1),
(2, 'โดยเฉลี่ยปีละ 5-7 วัน', 4, 1),
(3, 'โดยเฉลี่ย 2-3 เดือนต่อปี', 2, 1),
(4, 'คุณจะสร้างสรรค์ผลงานที่น่าพึ่งพอใจมาก', 4, 2),
(5, 'คุณจะทำงานล้าหลังเขา', 2, 2),
(6, 'คุณจะทำงานมากกว่าคนอื่น', 6, 2),
(7, 'คุณยินดีที่จะรับผิดชอบงานนั้นแทน', 6, 3),
(8, 'รู้สึกว่าเขาเป็นคนโชคร้ายจัง', 2, 3),
(9, 'จะทำแทน ถ้ามีคนบอกให้ทำ', 4, 3),
(10, 'ไม่ค่อยจะเกิดอุปสรรคปัญหาบ่อยนัก', 6, 4),
(11, 'เกือบจะทุกครั้งที่ท่านต้องมีปัญหา', 4, 4),
(12, 'มักจะมีอุปสรรคปัญหามากกว่าคนอื่น', 2, 4),
(28, 'คุณสามารถเข้ากับทุกคนได้เป็นอย่างดี', 6, 10),
(29, 'มักจะมีข้อโต้เถียงกันอยู่เสมอ', 4, 10),
(30, 'คุณมักจะโกรธผู้อื่นไม่คนก็หลายคน', 2, 10),
(31, 'คุณยอมรับโดยดีและพยายามปรับปรุง', 6, 11),
(32, 'พยายามป้องกันตนเองทุกวิถีทาง', 4, 11),
(33, 'มักจะโกรธคนอื่นหรือสภาพแวดล้อม เงื่อนไขต่างๆที่นอกเหนือการควบคุม', 2, 11),
(34, 'คุณจะคอยให้คนอื่นเข้ามาช่วย', 2, 12),
(35, 'พยายามเข้าใจสถานการณ์นั้นด้วยตัวคุณเอง', 4, 12),
(36, 'ทำตัวเป็นผู้นำและหาทางให้คนอื่นเข้ามาช่วย', 6, 12),
(37, 'คุณคาดหวังที่จะได้รับคำยกย่องชมเชย การเลื่อนขั้นตำแหน่ง หรือของขวัญรางวัล', 2, 13),
(38, 'คุณจะพอใจอยู่ในใจ', 4, 13),
(39, 'รู้สึกลิงโลดดีใจ', 6, 13),
(40, 'คุณจะเก็บความคิดนั้นไว้คนเดียว', 2, 14),
(41, 'จัดการเปลี่ยนแปลงวิธีการทำงานนั้นด้วยตัวเอง', 4, 14),
(42, 'บอกความคิดของตัวเองนี้ให้แก่เพื่อนร่วมงาน', 6, 14),
(43, 'คุณจะร่วมมือในการทำงานนั้น', 6, 15),
(44, 'คุณจะทำงานไปตามปกติ', 4, 15),
(45, 'คุณจะทำไปอย่างช้าๆ เพื่อหลีกเลี่ยงความสับสนหรือการเก็บกด', 2, 15),
(46, 'คุณมักจะไปสาย', 2, 16),
(47, 'คุณจะไปถึงตามเวลานัด', 4, 16),
(48, 'คุณจะไปก่อนเพื่อจะได้เริ่มงานก่อน', 6, 16),
(49, 'คุณรู้สึกน่ารำคาญกับความผิดพลาดเล็ก ๆ น้อย ๆ จำนวนมาก', 2, 17),
(50, 'บางครั้งคุณจะทำผิดพลาดในเรื่องใหญ่', 4, 17),
(51, 'บางครั้งคุณต้องกลับไปทำใหม่', 6, 17),
(52, 'คุณมักจะพักดื่มกาแฟ น้ำ หรือเข้าห้องน้ำบ่อย ๆ', 4, 18),
(53, 'คุณต้องพักผ่อนด้วยการพูดคุยกับเพื่อนร่วมงานคนอื่น หรือโทรศัพท์', 2, 18),
(54, 'คุณเร่งทำงานแข่งกับเวลา', 6, 18),
(55, 'ส่วนใหญ่คุณจะแสดงออกอย่างสบาย ๆ ', 6, 19),
(56, 'คุณจะรู้สึกว่าเป็นการยากลำบากเหลือเกิน', 2, 19),
(57, 'คุณไม่สนใจและไม่มีความคิดเห็นใดๆทั้งสิ้น', 4, 19),
(58, 'คุณจะทบทวนอีก', 4, 20),
(59, 'ประเมินดูความสำเร็จและวางแผนขั้นต่อไป', 6, 20),
(60, 'คุณคิดว่าไม่น่าเลยที่ต้องมาทำงานนี้', 2, 20),
(61, 'คุณรู้สึกว่างานของคุณมีเรื่องน่าตื่นเต้น', 6, 21),
(62, 'คิดว่างานที่ทำอยู่แสนจะน่าเบื่อจำเจ', 2, 21),
(63, 'บางครั้งมักจะมีเรื่องขำ ๆ ในงานเหมือนกัน', 4, 21),
(64, 'การอ่าน การพูดคุยถึงสิ่งต่างๆที่เกี่ยวกับงานของคุณ', 4, 22),
(65, 'การทำอะไรก็ได้ที่ทำให้คุณหลุดพ้นจากงาน', 2, 22),
(66, 'กิจกรรมที่เกี่ยวกับงานและไม่เกี่ยวผสมกัน', 6, 22),
(67, 'สำคัญเท่าคุณและคนอื่น', 4, 23),
(68, 'งานนั้นไม่มีเป้าหมาย', 2, 23),
(69, 'กระตุ้นสมองและท้าทาย', 6, 23),
(70, 'คิดแต่เรื่องงานนั้นพุ่งความสนใจทั้งหมดไปที่งานนั้น', 6, 24),
(71, 'บางครั้งก็ใจลอยไป', 4, 24),
(72, 'อยากจะนั่งคิดฝันหลายเรื่องอันที่น่าสนใจกว่า', 2, 24),
(73, 'ไส้เดือน', 6, 25),
(74, 'งู', 2, 25),
(75, 'หอยทาก', 4, 25);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cs_id` int(11) NOT NULL,
  `cs_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cs_lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cs_phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cs_status` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `cs_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cs_id`, `cs_name`, `cs_lastname`, `cs_phone`, `cs_status`, `cs_date`) VALUES
(1, 'test', 'test', '0658301201', 'y', '2018-12-19 09:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `quest_id` int(11) NOT NULL,
  `quest_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quest_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`quest_id`, `quest_text`, `quest_date`) VALUES
(1, 'คุณหยุดงาน', '2018-12-19 03:56:22'),
(2, 'เมื่อเปรียบเทียบภารกิจของคุณกับเพื่อนร่วมงานคนอื่นในการทำงานชนิดเดียวกัน', '2018-12-19 04:07:12'),
(3, 'ถ้าเพื่อนร่วมงานเขาล้มเหลวในการทำตามที่กำหนด', '2018-12-19 04:09:00'),
(4, 'เมื่อคุณทำงาน', '2018-12-19 04:09:34'),
(10, 'สัมพันธภาพในหมู่เพื่อนร่วมงาน', '2018-12-19 04:20:08'),
(11, 'เมื่อคุณถูกวิพากษ์วิจารณ์', '2018-12-19 04:20:44'),
(12, 'เมื่อเกิดเหตุฉุกเฉิน', '2018-12-19 04:21:29'),
(13, 'หลังจากคุณทำงานเสร็จสิ้นลงและงานนั้นนอกเหนือหน้าที่', '2018-12-19 04:22:11'),
(14, 'เมื่อคุณมองเห็นหนทางที่จะสามารถปรับปรุงการทำงานได้', '2018-12-19 04:22:50'),
(15, 'เมื่อคุณถูกของร้องให้ทำงานเร่งด่วน', '2018-12-19 04:23:34'),
(16, 'เมื่อมีเวลาที่คุณต้องไปทำงาน', '2018-12-19 04:24:23'),
(17, 'ขณะที่คุณทำงาน', '2018-12-19 04:27:01'),
(18, 'ในชั่วโมงทำงาน', '2018-12-19 04:27:38'),
(19, 'เมื่อมีการถกเถียงปัญหากันในเรื่องงาน', '2018-12-19 04:28:30'),
(20, 'เมื่องานเสร็จลง', '2018-12-19 04:29:21'),
(21, 'ขณะที่คุณคิดถึงงานของคุณ', '2018-12-19 04:30:03'),
(22, 'คุณจะสนุกกับ', '2018-12-19 04:30:39'),
(23, 'คุณรู้สึกว่างานที่คุณทำนั้น', '2018-12-19 04:31:11'),
(24, 'ขณะที่คุณทำงานในใจของคุณ', '2018-12-19 04:31:42'),
(25, 'การทำงานของคุณแสดงออกให้เห็นถึงนิสัยการทำงานของคุณ', '2018-12-19 04:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `st_user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `st_pwd` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`st_id`, `st_name`, `st_user`, `st_pwd`) VALUES
(1, 'wachirapan', 'admin', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `workingpress`
--

CREATE TABLE `workingpress` (
  `wp_id` int(11) NOT NULL,
  `cs_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `ans_id` int(11) NOT NULL,
  `wp_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `workingpress`
--

INSERT INTO `workingpress` (`wp_id`, `cs_id`, `quest_id`, `ans_id`, `wp_date`) VALUES
(2, 1, 1, 2, '2018-12-19 08:28:54'),
(3, 1, 2, 5, '2018-12-19 08:33:20'),
(4, 1, 3, 8, '2018-12-19 09:00:55'),
(5, 1, 4, 12, '2018-12-19 09:00:58'),
(6, 1, 10, 28, '2018-12-19 09:01:02'),
(7, 1, 11, 33, '2018-12-19 09:01:06'),
(8, 1, 12, 36, '2018-12-19 09:01:10'),
(9, 1, 13, 39, '2018-12-19 09:01:12'),
(10, 1, 14, 40, '2018-12-19 09:01:15'),
(11, 1, 15, 43, '2018-12-19 09:01:17'),
(12, 1, 16, 47, '2018-12-19 09:04:22'),
(13, 1, 17, 51, '2018-12-19 09:04:24'),
(14, 1, 18, 52, '2018-12-19 09:04:26'),
(15, 1, 19, 57, '2018-12-19 09:04:29'),
(16, 1, 20, 58, '2018-12-19 09:04:31'),
(17, 1, 21, 63, '2018-12-19 09:04:35'),
(18, 1, 22, 65, '2018-12-19 09:04:37'),
(19, 1, 23, 68, '2018-12-19 09:04:40'),
(20, 1, 24, 70, '2018-12-19 09:04:42'),
(21, 1, 25, 73, '2018-12-19 09:04:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`quest_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `workingpress`
--
ALTER TABLE `workingpress`
  ADD PRIMARY KEY (`wp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `quest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workingpress`
--
ALTER TABLE `workingpress`
  MODIFY `wp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
