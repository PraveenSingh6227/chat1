-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 08:32 AM
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
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatting_tbl`
--

CREATE TABLE `chatting_tbl` (
  `id` int(11) NOT NULL,
  `user_id` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatmessage_vendor` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chatmessage_user` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `req_date` bigint(20) DEFAULT NULL,
  `chatting_status` enum('Not Read','Read') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Not Read',
  `live_status` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `live_status_vendor` enum('Active','Inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive',
  `vendor_img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chatting_tbl`
--

INSERT INTO `chatting_tbl` (`id`, `user_id`, `order_id`, `chatmessage_vendor`, `chatmessage_user`, `req_date`, `chatting_status`, `live_status`, `live_status_vendor`, `vendor_img`) VALUES
(1, 'gqc7s4ol2heru8mar4ihqil9jb', NULL, NULL, 'hello', 1697429893, 'Not Read', 'Inactive', 'Inactive', ''),
(2, 'id1krkpn8thoklj4ve5kph1k00', NULL, NULL, 'hi', 1697429918, 'Not Read', 'Inactive', 'Inactive', ''),
(3, 'id1krkpn8thoklj4ve5kph1k00', NULL, 'how can help you', NULL, 1697429938, 'Not Read', 'Inactive', 'Inactive', ''),
(4, '82cb209d0c53cd06c935218eb5984017', NULL, NULL, 'hi', 1697431776, 'Not Read', 'Inactive', 'Inactive', ''),
(5, '82cb209d0c53cd06c935218eb5984017', NULL, NULL, 'jjkjkj', 1697431929, 'Not Read', 'Inactive', 'Inactive', ''),
(6, '9ad77153b47647970adb0449349632bc', NULL, NULL, 'Hi', 1697432068, 'Not Read', 'Inactive', 'Inactive', ''),
(7, '9ad77153b47647970adb0449349632bc', NULL, NULL, 'Hi', 1697432076, 'Not Read', 'Inactive', 'Inactive', ''),
(8, '12c4f70c20417716ca18d58f08e32c19', NULL, NULL, 'hi', 1697471417, 'Read', 'Inactive', 'Inactive', ''),
(9, '12c4f70c20417716ca18d58f08e32c19', NULL, 'how can help you?', NULL, 1697471440, 'Read', 'Inactive', 'Inactive', ''),
(10, '12c4f70c20417716ca18d58f08e32c19', NULL, NULL, 'how can use your service', 1697471557, 'Read', 'Inactive', 'Inactive', ''),
(11, '12c4f70c20417716ca18d58f08e32c19', NULL, 'there are many services', NULL, 1697471592, 'Read', 'Inactive', 'Inactive', ''),
(12, '12c4f70c20417716ca18d58f08e32c19', NULL, NULL, 'okay tell about these', 1697471614, 'Read', 'Inactive', 'Inactive', ''),
(13, '12c4f70c20417716ca18d58f08e32c19', NULL, NULL, 'hi', 1697474171, 'Read', 'Inactive', 'Inactive', ''),
(14, '12c4f70c20417716ca18d58f08e32c19', NULL, 'yes', NULL, 1697474196, 'Read', 'Inactive', 'Inactive', ''),
(15, '12c4f70c20417716ca18d58f08e32c19', NULL, NULL, 'hello', 1697477556, 'Read', 'Inactive', 'Inactive', ''),
(16, '94e40f57bb80ee51a93ed29d4866679f', NULL, NULL, 'Hi', 1697516421, 'Read', 'Inactive', 'Inactive', ''),
(17, '94e40f57bb80ee51a93ed29d4866679f', NULL, 'yes ', NULL, 1697516443, 'Read', 'Inactive', 'Inactive', ''),
(18, '94e40f57bb80ee51a93ed29d4866679f', NULL, 'how can help you', NULL, 1697516456, 'Read', 'Inactive', 'Inactive', ''),
(19, '94e40f57bb80ee51a93ed29d4866679f', NULL, NULL, '????', 1697516465, 'Read', 'Inactive', 'Inactive', ''),
(20, '94e40f57bb80ee51a93ed29d4866679f', NULL, NULL, 'Okay', 1697516482, 'Read', 'Inactive', 'Inactive', ''),
(21, '60c985098f907cac251b87be22c909ed', NULL, NULL, 'hi', 1697780750, 'Not Read', 'Inactive', 'Inactive', ''),
(22, '60c985098f907cac251b87be22c909ed', NULL, 'Hi', NULL, 1697780754, 'Not Read', 'Inactive', 'Inactive', ''),
(23, '60c985098f907cac251b87be22c909ed', NULL, 'How are you ', NULL, 1697780763, 'Not Read', 'Inactive', 'Inactive', ''),
(24, '60c985098f907cac251b87be22c909ed', NULL, NULL, 'jiii', 1697780803, 'Not Read', 'Inactive', 'Inactive', ''),
(25, '60c985098f907cac251b87be22c909ed', NULL, NULL, 'joi', 1697780813, 'Not Read', 'Inactive', 'Inactive', ''),
(26, '60c985098f907cac251b87be22c909ed', NULL, NULL, 'jkjj', 1697780827, 'Not Read', 'Inactive', 'Inactive', ''),
(27, '63bb7b40a427bb4773183fa6284458ed', NULL, NULL, 'Any job openings for electrical engineer ', 1698653443, 'Not Read', 'Inactive', 'Inactive', ''),
(28, '63bb7b40a427bb4773183fa6284458ed', NULL, NULL, 'Fresher', 1698653472, 'Not Read', 'Inactive', 'Inactive', ''),
(29, '8b8ade278cd6fd787f7c9871500ff366', NULL, NULL, 'Any job openings for electrical engineer fresher ', 1698734918, 'Not Read', 'Inactive', 'Inactive', ''),
(30, '8b8ade278cd6fd787f7c9871500ff366', NULL, NULL, 'Hey', 1698734935, 'Not Read', 'Inactive', 'Inactive', ''),
(31, '1cac3a1714da23f28fc863c693145966', NULL, NULL, 'Actually I need a Nursing job..kindly me the about process..', 1699021329, 'Not Read', 'Inactive', 'Inactive', ''),
(32, '1cac3a1714da23f28fc863c693145966', NULL, NULL, 'Guide *', 1699021354, 'Not Read', 'Inactive', 'Inactive', ''),
(33, '6ce091301d5d9b2853fa4fa24ed65480', NULL, NULL, 'hi', 1699080913, 'Not Read', 'Inactive', 'Inactive', ''),
(34, '6ce091301d5d9b2853fa4fa24ed65480', NULL, NULL, 'how are you', 1699080989, 'Not Read', 'Inactive', 'Inactive', ''),
(35, '3349b52ccb9ea0962e47f50a738fba66', NULL, NULL, 'dineshbabu_75@yahoo.co.in', 1699512482, 'Read', 'Inactive', 'Inactive', ''),
(36, '3349b52ccb9ea0962e47f50a738fba66', NULL, NULL, ' 918368445804 -shivani singh is this your company  staff ', 1699512539, 'Read', 'Inactive', 'Inactive', ''),
(37, '3349b52ccb9ea0962e47f50a738fba66', NULL, NULL, 'dineshbabu_75@yahoo.co.in', 1699513024, 'Read', 'Inactive', 'Inactive', ''),
(38, '53ac95492a3e416801e1a468029446a2', NULL, NULL, 'Hai', 1699515040, 'Read', 'Inactive', 'Inactive', ''),
(39, '136915f716f3d76c67b7284c1d35fabe', NULL, NULL, 'Hi ', 1699610294, 'Read', 'Inactive', 'Inactive', ''),
(40, '2220583e58eca40fa67a1e1f66772f64', NULL, NULL, 'hi', 1699859173, 'Read', 'Inactive', 'Inactive', ''),
(41, '2220583e58eca40fa67a1e1f66772f64', NULL, 'how can help you?', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(42, '2220583e58eca40fa67a1e1f66772f64', NULL, NULL, 'what is the process to get admission in cananda?', 1699859389, 'Read', 'Inactive', 'Inactive', ''),
(43, 'fb92dd33983f6d6994c61801c145d9d2', NULL, NULL, 'Hi', 1700146948, 'Read', 'Inactive', 'Inactive', ''),
(44, 'fb92dd33983f6d6994c61801c145d9d2', NULL, NULL, 'Do you provide Work permits for Canada?', 1700146971, 'Read', 'Inactive', 'Inactive', ''),
(45, 'fb92dd33983f6d6994c61801c145d9d2', NULL, 'yes', NULL, NULL, 'Not Read', 'Inactive', 'Inactive', ''),
(46, '3349b52ccb9ea0962e47f50a738fba66', NULL, 'yes', NULL, NULL, 'Not Read', 'Inactive', 'Inactive', ''),
(47, '2adbe7b3a52d9486ac04ac1e5dd244c6', NULL, NULL, 'hi', 1700552676, 'Read', 'Inactive', 'Inactive', ''),
(48, '2adbe7b3a52d9486ac04ac1e5dd244c6', NULL, NULL, 'hi', 1700552945, 'Read', 'Inactive', 'Inactive', ''),
(49, 'e33b47cc0125c4d7c3b20ffb463b6ae0', NULL, NULL, 'Hello ', 1700720190, 'Read', 'Inactive', 'Inactive', ''),
(50, '73c119521df5c3696341fb9dd3272e83', NULL, NULL, 'hello', 1700825213, 'Not Read', 'Inactive', 'Inactive', ''),
(51, 'c92fdb8e183c2755071528370c91fe1c', NULL, NULL, 'Hii Praveen this side', 1700980885, 'Read', 'Inactive', 'Inactive', ''),
(52, '4be982eae125c7d7fe7b4d79f3699bde', NULL, 'hlo', NULL, NULL, 'Not Read', 'Inactive', 'Inactive', ''),
(53, '4be982eae125c7d7fe7b4d79f3699bde', NULL, NULL, 'please tell', 1701073124, 'Not Read', 'Inactive', 'Inactive', ''),
(54, 'r26qb9qeilp19ap4jp1d4q74or', NULL, 'hii', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(55, 'r26qb9qeilp19ap4jp1d4q74or', NULL, NULL, 'hllo', 1701103959, 'Read', 'Inactive', 'Inactive', ''),
(56, 'r26qb9qeilp19ap4jp1d4q74or', NULL, 'how r u', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(57, 'r26qb9qeilp19ap4jp1d4q74or', NULL, NULL, 'i m fine', 1701104004, 'Read', 'Inactive', 'Inactive', ''),
(58, 'r26qb9qeilp19ap4jp1d4q74or', NULL, NULL, '? hi', 1701106787, 'Read', 'Inactive', 'Inactive', ''),
(59, 'r26qb9qeilp19ap4jp1d4q74or', NULL, NULL, 'j', 1701106811, 'Read', 'Inactive', 'Inactive', ''),
(60, 'r26qb9qeilp19ap4jp1d4q74or', NULL, NULL, '?j', 1701106820, 'Read', 'Inactive', 'Inactive', ''),
(61, 'r26qb9qeilp19ap4jp1d4q74or', NULL, NULL, 'k', 1701106841, 'Read', 'Inactive', 'Inactive', ''),
(62, 'r26qb9qeilp19ap4jp1d4q74or', NULL, NULL, '?kl', 1701106856, 'Read', 'Inactive', 'Inactive', ''),
(63, 'r26qb9qeilp19ap4jp1d4q74or', NULL, NULL, '?', 1701107367, 'Read', 'Inactive', 'Inactive', ''),
(64, 'r26qb9qeilp19ap4jp1d4q74or', NULL, NULL, 'hi?', 1701107490, 'Read', 'Inactive', 'Inactive', ''),
(65, 'r26qb9qeilp19ap4jp1d4q74or', NULL, NULL, '🙃', 1701107950, 'Read', 'Inactive', 'Inactive', ''),
(66, 'r26qb9qeilp19ap4jp1d4q74or', NULL, '😌', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(67, 'r26qb9qeilp19ap4jp1d4q74or', NULL, 'gi', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(68, 'r26qb9qeilp19ap4jp1d4q74or', NULL, 'gil', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(69, 'r26qb9qeilp19ap4jp1d4q74or', NULL, 'okay', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(70, 'r26qb9qeilp19ap4jp1d4q74or', NULL, 'hii', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(71, 'r26qb9qeilp19ap4jp1d4q74or', NULL, 'lo', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(72, 'r26qb9qeilp19ap4jp1d4q74or', NULL, 'loloj', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(73, 'r26qb9qeilp19ap4jp1d4q74or', NULL, 'gf', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(74, 'r26qb9qeilp19ap4jp1d4q74or', NULL, 'sa', NULL, NULL, 'Read', 'Inactive', 'Inactive', ''),
(75, 'r26qb9qeilp19ap4jp1d4q74or', NULL, 'se', NULL, NULL, 'Read', 'Inactive', 'Inactive', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `reg_id` bigint(20) DEFAULT NULL,
  `name` char(255) CHARACTER SET latin1 DEFAULT NULL,
  `email` char(255) CHARACTER SET latin1 DEFAULT NULL,
  `number` varchar(55) COLLATE utf8_bin DEFAULT NULL,
  `address` char(255) CHARACTER SET latin1 DEFAULT NULL,
  `panno` char(255) CHARACTER SET latin1 DEFAULT NULL,
  `transaction_id` char(255) CHARACTER SET latin1 DEFAULT NULL,
  `amount` int(11) DEFAULT 0,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Active','Inactive') COLLATE utf8_bin NOT NULL DEFAULT 'Active',
  `sessionId` char(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `reg_id`, `name`, `email`, `number`, `address`, `panno`, `transaction_id`, `amount`, `dateTime`, `status`, `sessionId`) VALUES
(1, 1697429721, NULL, 'mkumar96.mithlesh@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-10-16 09:45:21', 'Active', 'id1krkpn8thoklj4ve5kph1k00'),
(2, 1697429879, NULL, 'mk321@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-10-16 09:47:59', 'Active', 'gqc7s4ol2heru8mar4ihqil9jb'),
(3, 1697431768, NULL, 'jitin9967@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-10-16 10:19:28', 'Active', '82cb209d0c53cd06c935218eb5984017'),
(4, 1697432061, NULL, 'jsinstitute1@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-10-16 10:24:21', 'Active', '9ad77153b47647970adb0449349632bc'),
(5, 1697471394, NULL, 'amritakr@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-10-16 21:19:54', 'Active', '12c4f70c20417716ca18d58f08e32c19'),
(6, 1697516396, NULL, 'raj321@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-10-17 09:49:56', 'Active', '94e40f57bb80ee51a93ed29d4866679f'),
(7, 1698033874, NULL, 'rsharma080474@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-10-23 09:34:34', 'Active', '424aace295dab5916c6d954cf7e7b48b'),
(8, 1698131364, NULL, 'hari2006dass@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-10-24 12:39:24', 'Active', '973819671acf8114371458ce7ac3070f'),
(9, 1698505671, NULL, 'snomer3133@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-10-28 20:37:51', 'Active', '7e6875f70bbe9a89df22b265380fc45d'),
(10, 1698653425, NULL, 'afra9973@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-10-30 13:40:25', 'Active', '63bb7b40a427bb4773183fa6284458ed'),
(11, 1698734898, NULL, 'afra9973@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-10-31 12:18:18', 'Active', '8b8ade278cd6fd787f7c9871500ff366'),
(12, 1698826951, NULL, 'naushadsaifi01@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-11-01 13:52:31', 'Active', '5427cd535ada2c6c9fbe16c2cc5da2f6'),
(13, 1699021294, NULL, 'wajeehachaudhary08@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-11-03 19:51:34', 'Active', '1cac3a1714da23f28fc863c693145966'),
(14, 1699080900, NULL, 'mk@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-11-04 12:25:00', 'Active', '6ce091301d5d9b2853fa4fa24ed65480'),
(15, 1699365260, NULL, 'I am Priyadharshini from Tamilnadu, India I am currently staying in Dubai on a visit visa. I am looking for a job to start my career in Dubai. I completed MBA in the specialization of Finance. My previous experience was 1 year as Accounts Assistant and 1', NULL, NULL, NULL, NULL, 0, '2023-11-07 19:24:20', 'Active', '9ff71bb8a7198853bbe3432446670274'),
(16, 1699512469, NULL, 'dineshbabu_75@yahoo.co.in', NULL, NULL, NULL, NULL, 0, '2023-11-09 12:17:49', 'Active', '3349b52ccb9ea0962e47f50a738fba66'),
(17, 1699515018, NULL, 'dineshbabu_75@yahoo.co.in', NULL, NULL, NULL, NULL, 0, '2023-11-09 13:00:18', 'Active', '53ac95492a3e416801e1a468029446a2'),
(18, 1699610283, NULL, 'jasari.2008@gmail.com', NULL, NULL, NULL, NULL, 0, '2023-11-10 15:28:03', 'Active', '136915f716f3d76c67b7284c1d35fabe'),
(19, 1699859108, NULL, ' 91 8512369632', NULL, NULL, NULL, NULL, 0, '2023-11-13 12:35:08', 'Active', '2220583e58eca40fa67a1e1f66772f64'),
(20, 1700146936, NULL, '001 4373298905', NULL, NULL, NULL, NULL, 0, '2023-11-16 20:32:16', 'Active', 'fb92dd33983f6d6994c61801c145d9d2'),
(21, 1700552667, NULL, '971 08368445804', NULL, NULL, NULL, NULL, 0, '2023-11-21 13:14:27', 'Active', '2adbe7b3a52d9486ac04ac1e5dd244c6'),
(22, 1700720177, NULL, ' 91 8287285006', NULL, NULL, NULL, NULL, 0, '2023-11-23 11:46:17', 'Active', 'e33b47cc0125c4d7c3b20ffb463b6ae0'),
(23, 1700825196, NULL, ' 91 8287285006', NULL, NULL, NULL, NULL, 0, '2023-11-24 16:56:36', 'Active', '73c119521df5c3696341fb9dd3272e83'),
(24, 1700980732, NULL, ' 91 70653145331', NULL, NULL, NULL, NULL, 0, '2023-11-26 12:08:52', 'Active', '62b980310e0bb2f820b895d23c544c36'),
(25, 1700980862, NULL, ' 91 7065317064', NULL, NULL, NULL, NULL, 0, '2023-11-26 12:11:02', 'Active', 'c92fdb8e183c2755071528370c91fe1c'),
(26, 1701073071, NULL, ' 91 ii', NULL, NULL, NULL, NULL, 0, '2023-11-27 13:47:51', 'Active', '4be982eae125c7d7fe7b4d79f3699bde'),
(27, 1701084171, NULL, '91 7695009534', NULL, NULL, NULL, NULL, 0, '2023-11-27 16:52:51', 'Active', '1e871c65b4eebdeb3ec01068cafbf8d9'),
(28, 1701103609, NULL, ' 91 7065317064', NULL, NULL, NULL, NULL, 0, '2023-11-27 22:16:49', 'Active', ''),
(29, 1701103870, NULL, ' 91 7065317064', NULL, NULL, NULL, NULL, 0, '2023-11-27 22:21:10', 'Active', 'r26qb9qeilp19ap4jp1d4q74or');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` char(255) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `firstname` char(255) DEFAULT NULL,
  `lastname` char(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`, `status`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Admin', 'Admin1', 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatting_tbl`
--
ALTER TABLE `chatting_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatting_tbl`
--
ALTER TABLE `chatting_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
