-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 05:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ln_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `agg` varchar(255) NOT NULL,
  `edu` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `lname`, `sex`, `agg`, `edu`, `skill`) VALUES
(24, 'สมชาย', 'สบายดี', 'ชาย', '33', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'บริหารงานทั่วไป'),
(25, 'ดอกไม้', 'สีสวย', 'หญิง', '20', 'วิทยาการคอมพิวเตอร์', 'พัฒนาซอร์ฟแวร์'),
(26, 'lula', 'kalo', 'หญิง', '35', 'วิทยาการคอมพิวเตอร์', 'พัฒนาซอร์ฟแวร์'),
(27, 'สมชาย', 'สบายดี', 'ชาย', '25', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'พัฒนาซอร์ฟแวร์'),
(28, 'รักสวย', 'รวยทรัพย์', 'หญิง', '20', 'วิทยาการคอมพิวเตอร์', 'พัฒนาซอร์ฟแวร์'),
(29, 'สมหมาย', 'สีแดง', 'ชาย', '50', 'มัธยมศึกษาปีที่ 3', 'ทำสวน'),
(30, 'สมชาย', 'สบายดี', 'ชาย', '35', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'บริหารงานทั่วไป'),
(31, 'ดอกไม้', 'สีสวย', 'หญิง', '20', 'วิทยาการคอมพิวเตอร์', 'พัฒนาซอร์ฟแวร์'),
(32, 'lula', 'kalo', 'หญิง', '35', 'วิทยาการคอมพิวเตอร์', 'พัฒนาซอร์ฟแวร์'),
(33, 'สมชาย', 'สบายดี', 'ชาย', '25', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'พัฒนาซอร์ฟแวร์'),
(34, 'รักสวย', 'รวยทรัพย์', 'หญิง', '20', 'วิทยาการคอมพิวเตอร์', 'พัฒนาซอร์ฟแวร์'),
(35, 'สมหมาย', 'สีแดง', 'ชาย', '50', 'มัธยมศึกษาปีที่ 3', 'ทำสวน'),
(36, 'สมชาย', 'สบายดี', 'ชาย', '35', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'บริหารงานทั่วไป'),
(37, 'ดอกไม้', 'สีสวย', 'หญิง', '20', 'วิทยาการคอมพิวเตอร์', 'พัฒนาซอร์ฟแวร์'),
(38, 'lula', 'kalo', 'หญิง', '35', 'วิทยาการคอมพิวเตอร์', 'พัฒนาซอร์ฟแวร์'),
(39, 'สมชาย', 'สบายดี', 'ชาย', '25', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'พัฒนาซอร์ฟแวร์'),
(40, 'รักสวย', 'รวยทรัพย์', 'หญิง', '20', 'วิทยาการคอมพิวเตอร์', 'พัฒนาซอร์ฟแวร์'),
(41, 'สมหมาย', 'สีแดง', 'ชาย', '50', 'มัธยมศึกษาปีที่ 3', 'ทำสวน'),
(42, 'สมชาย', 'สบายดี', 'ชาย', '35', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'บริหารงานทั่วไป'),
(43, 'ดอกไม้', 'สีสวย', 'หญิง', '20', 'วิทยาการคอมพิวเตอร์', 'พัฒนาซอร์ฟแวร์'),
(44, 'lula', 'kalo', 'หญิง', '35', 'วิทยาการคอมพิวเตอร์', 'พัฒนาซอร์ฟแวร์'),
(45, 'สมชาย', 'สบายดี', 'ชาย', '25', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'พัฒนาซอร์ฟแวร์'),
(46, 'รักสวย', 'รวยทรัพย์', 'หญิง', '35', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'บริหารงานทั่วไป'),
(47, 'lula', 'kalo', 'อื่นๆ', '20', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'พัฒนาซอร์ฟแวร์'),
(48, 'สมชาย', 'สบายดี', 'หญิง', '35', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'บริหารงานทั่วไป'),
(49, 'สมชาย', 'สบายดี', 'ชาย', '40', 'ปริญญาตรีบริหารทรัพยากรมนุษย์', 'พัฒนาซอร์ฟแวร์'),
(50, 'สมชาย', 'สบายดีมากๆครับ', 'ชาย', '24', 'ปริญญาตริวิทยาการคอมพิวเตอร์', 'บริหารงานทั่วไป'),
(56, 'นาย วสันต์', 'ทำดี', 'ชาย', '27', 'วิทยาการคอมพิวเตอร์', 'บริหารงานทั่วไป');

-- --------------------------------------------------------

--
-- Table structure for table `job_general`
--

CREATE TABLE `job_general` (
  `id` int(100) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `sex` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'เพศ',
  `birthday` date NOT NULL COMMENT 'วัน/เดือน/ปีเกิด',
  `agg` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'อายุ',
  `nationality` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'สัญชาติ',
  `ethnicity` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'เชื้อชาติ',
  `religion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ศาสนา',
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ที่อยู่',
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'อีเมล์ผู้สมัคร',
  `skills` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ความสมารถพิเศษ',
  `resume` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'เก็บชื่อไฟล์ PDF',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL COMMENT 'รูปถ่าย',
  `edu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ระดับการศึกษา',
  `tab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'สำเนาทะเบียนบ้าน',
  `wut` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'สำเนาวุฒิการศึกษา',
  `peo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'สำเนาบัตรประชาชน',
  `positions` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ตำแหน่งที่ต้องการสมัคร',
  `agree` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ยอมรับข้อตกลงเผยแพร่ข้อมูลส่วนบุคคล หรือ (PDPA)',
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'สถานะ',
  `degree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ชื่อวุฒิการศึกษา',
  `nameedu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ชื่อสถานะศึกษา',
  `ex` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'วันที่สำเร็จการศึกษา',
  `gpa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'คะแนนเฉลี่ยสะสม',
  `personal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'คำนำหน้าชื่อ',
  `personal_firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'ชื่อ',
  `personal_surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'นามสกุล',
  `personal_relation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'เกี่ยวข้างเป็น',
  `personal_tel` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'โทรศัพท์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `job_general`
--

INSERT INTO `job_general` (`id`, `name`, `sex`, `birthday`, `agg`, `nationality`, `ethnicity`, `religion`, `address`, `phone`, `email`, `skills`, `resume`, `image`, `edu`, `tab`, `wut`, `peo`, `positions`, `agree`, `status`, `degree`, `nameedu`, `ex`, `gpa`, `personal`, `personal_firstname`, `personal_surname`, `personal_relation`, `personal_tel`) VALUES
(71, 'นางสาวดอกไม้  สีสวยงาม', 'หญิง', '2548-02-14', '20', '', '', '', '456 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0861654879', '', 'ทำอาหาร', '', '', 'ปริญญาตรี', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'พนักงานช่วยการพยาบาล', '', '', '', '', '', '', '', '', '', '', ''),
(72, 'นายดำดี  สีไม่ตก', 'ชาย', '2525-03-25', '40', '', '', '', '456 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0877777777', '', 'เล่นดนตรี', '', '', 'ปริญญาโท', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'configuration.php', 'โปรแกรมเมอร์', '', '', '', '', '', '', '', '', '', '', ''),
(74, 'นางสาว พิกุล  สีสดใส', 'หญิง', '2542-02-18', '22', '', '', '', '456 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0861654879', '', 'เต้นรำ', '', '', 'ปริญญาตรี', 'configuration.php', 'sup_vendor_type.sql', 'configuration2.php', 'โปรแกรมเมอร์', '', '', '', '', '', '', '', '', '', '', ''),
(75, 'นายทดสอบ ระบบ', 'ชาย', '2023-11-15', '1', '', '', '', '123 หมู่ 1 ตำบลในเมือง อำเภอเมือง จังหวัดสุรินทร์ 32000', '0555555555', '', 'ทำอาหาร', '', '', 'ระดับ ปวส.หรือเทียบเท่า', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'พนักงานช่วยการพยาบาล', '', '', '', '', '', '', '', '', '', '', ''),
(76, 'นายทดสอบ ระบบ', 'ชาย', '2023-11-07', '22', '', '', '', '456 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0855555555', '', 'ทำอาหาร', '', '', 'ปริญญาเอก', 'ใบเบิกพัสดุ.pdf', 'news_1510739227_Joomnak.pdf', 'sup_vendor_type.sql', 'พนักงานช่วยการพยาบาล', '', '', '', '', '', '', '', '', '', '', ''),
(80, 'นายดำดี  สีไม่ตก', 'ชาย', '2023-10-30', '20', '', '', '', '123 หมู่ 1 ตำบลในเมือง อำเภอเมือง จังหวัดสุรินทร์ 32000', '0555555555', '', 'เต้นรำ', '', '', 'ระดับ ปวช.', 'ใบเบิกพัสดุ.pdf', 'news_1510739227_Joomnak.pdf', 'sup_vendor_type.sql', 'พนักงานโยธา', '', '', '', '', '', '', '', '', '', '', ''),
(81, 'นางสาว พิกุล  สีสดใส', 'หญิง', '2023-11-21', '22', '', '', '', '1254 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0545697845', '', 'เต้นรำ', '', '', 'ระดับ ปวส.หรือเทียบเท่า', 'configuration2.php', 'sup_vendor_type.sql', 'configuration2.php', 'นักเทคนิคการแพทย์', '', '', '', '', '', '', '', '', '', '', ''),
(82, 'นางสาวดอกไม้  สีสวยงาม', 'หญิง', '2023-07-16', '30', '', '', '', '125 ม.1 ตำบลในเมือง อำเภอเมือง จังหวัดสุรินทร์ 32000', '0861654879', '', 'เล่นดนตรี', '', '', 'ปริญญาตรี', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'พนักงานบริการ', '', '', '', '', '', '', '', '', '', '', ''),
(83, 'นางสาวดอกไม้  สีสวยงาม', 'หญิง', '2023-10-30', '20', '', '', '', '123 หมู่ 1 ตำบลในเมือง อำเภอเมือง จังหวัดสุรินทร์ 32000', '0545697845', '', 'เล่นดนตรี', '', '', 'ปริญญาตรี', 'ใบเบิกพัสดุ.pdf', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'พนักงานช่วยการพยาบาล', '', '', '', '', '', '', '', '', '', '', ''),
(84, 'นายดำดี  สีไม่ตก', 'ชาย', '2023-11-30', '27', '', '', '', '456 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0545697845', '', 'เล่นดนตรี', '', '', 'ระดับ ปวช.', 'sup_vendor_type.sql', 'configuration2.php', 'configuration2.php', 'พนักงานบริการ', '', '', '', '', '', '', '', '', '', '', ''),
(87, 'นายดำดี  สีไม่ตก', 'ชาย', '2023-11-14', '30', '', '', '', '123 หมู่ 1 ตำบลในเมือง อำเภอเมือง จังหวัดสุรินทร์ 32000', '0861654879', '', 'เล่นดนตรี', '', '', 'ปริญญาตรี', 'ใบเบิกพัสดุ.pdf', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'โปรแกรมเมอร์', '', '', '', '', '', '', '', '', '', '', ''),
(88, 'นายดำดี  สดใส', 'ชาย', '2023-11-06', '27', '', '', '', '123 หมู่ 1 ตำบลในเมือง อำเภอเมือง จังหวัดสุรินทร์ 32000', '0861654879', '', 'ร้องเพลง', '', '', 'ปริญญาตรี', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'นักวิชาการสาธารณสุข', '', '', '', '', '', '', '', '', '', '', ''),
(89, 'นางสาว พิกุล  สีสดใส', 'หญิง', '2023-11-13', '20', '', '', '', '125 ม.1 ตำบลในเมือง อำเภอเมือง จังหวัดสุรินทร์ 32000', '0545697845', '', 'ทำอาหาร', '', '', 'ปริญญาตรี', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'พนักงานช่วยการพยาบาล', '', '', '', '', '', '', '', '', '', '', ''),
(90, 'นายสีแดง  แรงริด', 'ชาย', '2023-11-06', '27', '', '', '', '1254 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0855555555', '', 'เล่นดนตรี', '', '', 'ปริญญาตรี', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'พนักงานบริการ', '', '', '', '', '', '', '', '', '', '', ''),
(91, 'นางสาว พิกุล  สีสดใส', 'หญิง', '2023-11-12', '20', '', '', '', '125 ม.1 ตำบลในเมือง อำเภอเมือง จังหวัดสุรินทร์ 32000', '0861654879', '', 'จัดดอกไม้', '', '', 'ปริญญาโท', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'โปรแกรมเมอร์', '', '', '', '', '', '', '', '', '', '', ''),
(92, 'นายทดสอบ ระบบ', 'ชาย', '2023-11-07', '20', '', '', '', '125 ม.1 ตำบลในเมือง อำเภอเมือง จังหวัดสุรินทร์ 32000', '0555555555', '', 'ร้องเพลง', '', '', 'ปริญญาตรี', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'นักวิชาการสาธารณสุข', '', '', '', '', '', '', '', '', '', '', ''),
(93, 'นายวิศว  มาวิไล', 'ชาย', '2524-11-04', '41', '', '', '', '1254 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0545697845', '', 'ทำอาหาร', '', '', 'ปริญญาตรี', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'โปรแกรมเมอร์', '', '', '', '', '', '', '', '', '', '', ''),
(94, 'Mr.wasun  sreesuk', 'ชาย', '2542-04-14', '20', '', '', '', '125 ม.1 ตำบลในเมือง อำเภอเมือง จังหวัดสุรินทร์ 32000', '0861654879', '', 'ทำอาหาร', '', '', 'ปริญญาตรี', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'พยาบาลวิชาชีพ', '', '', '', '', '', '', '', '', '', '', ''),
(95, 'นางสาวดอกไม้  สีสวยงาม', 'หญิง', '2023-10-30', '20', '', '', '', '1254 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0855555555', '', 'จัดดอกไม้', '', '', 'ปริญญาตรี', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'พนักงานโยธา', '', '', '', '', '', '', '', '', '', '', ''),
(96, 'นางสาวดอกไม้  สีสวยงาม', 'หญิง', '2540-12-12', '27', '', '', '', '1254 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0861654879', '', 'เต้นรำ', '', '', 'ปริญญาตรี', 'configuration.php-dist', 'configuration2.php', 'configuration2.php', 'นักเทคนิคการแพทย์', '', '', '', '', '', '', '', '', '', '', ''),
(97, 'Mrss.nadia  json', 'หญิง', '2542-02-14', '22', '', '', '', 'news_1510739227_Joomnak.pdf', '0545697845', '', 'ร้องเพลง', '', '', 'ปริญญาตรี', 'sup_vendor_type.sql', 'sup_vendor_type.sql', 'news_1510739227_Joomnak.pdf', 'โปรแกรมเมอร์', '', '', '', '', '', '', '', '', '', '', ''),
(98, 'นางสาว พิกุล  สีสดใส', 'หญิง', '2544-03-14', '22', '', '', '', '1254 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0877777777', '', 'ทำอาหาร', '', '', 'ปริญญาตรี', 'sup_vendor_type.sql', 'ใบเบิกพัสดุ.pdf', 'sup_vendor_type.sql', 'พนักงานโยธา', '', '', '', '', '', '', '', '', '', '', ''),
(99, 'นายวิศว  มาวิไล', 'ชาย', '2540-04-14', '20', '', '', '', '1254 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0545697845', '', 'เล่นดนตรี', '', '', 'ปริญญาตรี', '', '', '', 'นักวิชาการสาธารณสุข', '', '', '', '', '', '', '', '', '', '', ''),
(100, 'นายดำดี  สีไม่ตก', 'ชาย', '2541-01-16', '20', '', '', '', '1254 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0545697845', '', 'เล่นดนตรี', '', '', 'ระดับ ปวส.หรือเทียบเท่า', '', '', '', 'พนักงานธุรการ ชั้น4', '', '', '', '', '', '', '', '', '', '', ''),
(101, 'นายทดสอบ ระบบ', 'ชาย', '2543-02-27', '27', '', '', '', '456 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0545697845', '', 'ทำอาหาร', '', '', 'ปริญญาตรี', '', '', '', 'พนักงานการเงินและบัญชี ชั้น 3', '', '', '', '', '', '', '', '', '', '', ''),
(102, 'นัธทวัฒน์ วสันต์กนกพัชร', 'ชาย', '1979-08-06', '44', '', '', '', '10/3 หมู่13 ต.เฉนียง (ซุ้มโค้กหน้า สนง.ประกันสังคมสุรินทร์)', '0960354409', '', 'วาดรูป', '', '', 'ระดับ ปวส.หรือเทียบเท่า', '', '', '', 'รปภ', '', '', '', '', '', '', '', '', '', '', ''),
(103, 'นายดำดี  สีไม่ตก', 'ชาย', '2540-02-12', '22', '', '', '', '1254 ม.20 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0555555555', '', 'เต้นรำ', '', '', 'มัธยมศึกษาตอนต้น', '', '', '', 'พนักงานการเงินและบัญชี ชั้น 2', '', '', '', '', '', '', '', '', '', '', ''),
(112, 'นายทำดี  มีสัจจะ', 'ชาย', '2539-12-19', '33', 'ไทย', 'อเมริกัน', 'คริสต์', '1234 ม.3 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0855555555', '', '', 'uploads/Report.pdf', 'uploads/pngtree-coloring-pages-of-a-small-smiling-face-with-black-and-white-png-image_9186790.png', '', '', '', '', '', 'ยอมรับ', 'โสด', '', '', '', '', '', '', '', '', ''),
(113, 'mr.green  lela', 'ชาย', '2542-06-20', '23', 'ไทย', 'ไทย', 'พุทธ', '1234 ม.3 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0854561235', '', '', 'uploads/ระบายสี สัตว์.pdf', 'uploads/pngtree-circle-with-smiley-face-and-eyes-with-a-mouth-vector-png-image_6789774.png', 'ปริญญาตรี', '', '', '', '', 'ยอมรับ', 'โสด', '', '', '', '', '', '', '', '', ''),
(114, 'mr.somchai  lola', 'ชาย', '2545-12-29', '28', 'ไทย', 'ไทย', 'พุทธ', '1234 ม.3 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0872222222', '', '', 'uploads/APznzaYUT3p9KO6bkB0GnPIhsIHV0mCUdj_tFW2fVqzLNKR-wa9b3Fda1vm32jbTknAnYwbeNJRGl3DG-V2ySidGhRj5EP5-4oymex0GBp0IegfUUH2E-2m9WQ3btS0VUCZ2M58xq1WAjvv4c2VfRP3_-8PgPTxeE7W8LoYoOS0qcX20oQuXSFYMJ4L3b9FCxQqP-ByD3deF1ULjcyy.pdf', 'uploads/Happy-Valentines-Day-Quotes-In-English.jpg', 'ปริญญาโท', '', '', '', 'โปรแกรมเมอร์', 'ยอมรับ', 'โสด', '', '', '', '', '', '', '', '', ''),
(115, 'mrss.weela  joja', 'ชาย', '2539-11-28', '28', 'ไทย', 'ไทย', 'พุทธ', '1234 ม.3 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0855555555', '', '', 'uploads/Report.pdf', 'uploads/images.png', 'ปริญญาเอก', '', '', '', 'นักวิชาการสาธารณสุข', 'ยอมรับ', 'โสด', '', '', '', '', '', '', '', '', ''),
(116, 'นายสมชาย  ทำงานดี', 'ชาย', '2540-11-28', '30', 'ไทย', 'ไทย', 'พุทธ', '258 ม.2 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0845461254', '', '', 'uploads/ความต้องการของระบบ.pdf', 'uploads/istockphoto-1286266025-612x612.jpg', 'ปริญญาโท', '', '', '', 'โปรแกรมเมอร์', 'ยอมรับ', 'โสด', 'วิศวกรรมคอมพิวเตอร์', 'มหาวิทยาลัยจุฬาลงกรณ์', '2559-03-10', '3.00', 'นางสาว', 'ดอกไม้', 'ใจดี', 'มารดา', '0846953125'),
(117, 'นัธทวัฒน์ วสันต์กนกพัชร', 'ชาย', '2566-08-06', '22', 'ไทย', 'เมืองสุรินทร์', 'พุทธ', '10/3 หมู่13 ต.เฉนียง (ซุ้มโค้กหน้า สนง.ประกันสังคมสุรินทร์)', '0960354409', '', '', 'uploads/ตัวอย่าง ใบสั่งจ้าง ACT 67 รพ.ท่าตูม.pdf', 'uploads/S__7544915.jpg', 'ปริญญาโท', '', '', '', 'พนักงานช่วยการพยาบาล', 'ยอมรับ', 'สมรส', '้้tttt', 'tt', '2566-05-25', '3.33', 'นาย', 'นัธทวัฒน์', 'วสันต์กนกพัชร', 'rjv', '0000000000'),
(118, 'นาวสาวคนสวย  สวยมาก', 'หญิง', '2540-11-25', '30', 'ไทย', 'ไทย', 'พุทธ', '258 ม.2 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0845461254', '', '', 'uploads/คลังข้อสอบ รพ.ค่ายวีรวัฒน์โยธิน.pdf', 'uploads/yw.jpg', 'ปริญญาตรี', '', '', '', 'นักวิชาการสาธารณสุข', 'ยอมรับ', 'โสด', 'วิศวกรรมคอมพิวเตอร์', 'มหาวิทยาลัยจุฬาลงกรณ์', '2556-03-25', '3.00', 'นาง', 'ดอกไม้', 'ใจดี', 'มารดา', '0846953125'),
(119, 'นายทำดี  สีสโมสร', 'ชาย', '2545-05-12', '19', 'ไทย', 'ไทย', 'พุทธ', '258 ม.2 ถ.สุรินทร์-ปราสาท ต.นอกเมือง อ.เมือง จ.สุรินทร์ 32000', '0845461254', 'ter@gmail.com', '', 'uploads/Em.pdf', 'uploads/แบบฝึดหัดคัดลายมืออิ้ง.jpeg', 'ปริญญาตรี', '', '', '', 'โปรแกรมเมอร์', 'ยอมรับ', 'โสด', 'วิศวกรรมคอมพิวเตอร์', 'มหาวิทยาลัยจุฬาลงกรณ์', '2550-03-23', '3.20', 'นาง', 'ดอกไม้', 'ใจดี', 'มารดา', '0846953125');

-- --------------------------------------------------------

--
-- Table structure for table `job_position`
--

CREATE TABLE `job_position` (
  `id` int(20) NOT NULL,
  `position` varchar(255) NOT NULL,
  `pay` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `job_position`
--

INSERT INTO `job_position` (`id`, `position`, `pay`) VALUES
(2, 'โปรแกรมเมอร์', '58,001'),
(3, 'นักวิชาการสาธารณสุข', '38,000'),
(4, 'นักเทคนิคการแพทย์', '56,000'),
(6, 'พนักงานบริการ', '9,000'),
(8, 'พนักงานช่วยการพยาบาล', '11,000'),
(12, 'พนักงานโยธา', '11,200'),
(13, 'พยาบาลวิชาชีพ', '15,000'),
(15, 'พนักงานเวชนิทัศน์ชั้น3', '11,201'),
(16, 'พนักงานธุรการ ชั้น4', '12,000'),
(17, 'พนักงานการเงินและบัญชี ชั้น 2', '9,000'),
(18, 'พนักงานการเงินและบัญชี ชั้น 3', '11,000'),
(20, 'พนักงานทำความสะอาด', '8,900'),
(21, 'พนักงานดูแลสวน', '10,000'),
(22, 'พนักงานเวชนิทัศน์ชั้น2', '9,000'),
(24, 'พนักงานเวชนิทัศน์ชั้น4', '35,045'),
(25, 'พนักงานเวชนิทัศน์ชั้น1', '8,900');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_score` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `student_score`) VALUES
(1, 'miler', '40'),
(2, 'joh', '50'),
(3, 'milerjr', '60'),
(4, 'joh def', '70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pdf`
--

CREATE TABLE `tbl_pdf` (
  `no` int(11) NOT NULL,
  `doc_name` varchar(200) NOT NULL COMMENT 'ชื่อเอกสาร',
  `doc_file` varchar(100) NOT NULL COMMENT 'ชื่อไฟล์เอกสาร',
  `dateCreate` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่เพิ่มเอกสาร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL COMMENT 'ชื่อตำแหน่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`p_id`, `p_name`) VALUES
(1, 'หัวหน้าฝ่าย'),
(2, 'พนักงานบัญชี'),
(3, 'พนักงานทั่วไป'),
(4, 'ช่างคอมพิวเตอร์');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `no` int(11) NOT NULL,
  `amount` int(11) NOT NULL COMMENT 'รวม',
  `dateCreate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`no`, `amount`, `dateCreate`) VALUES
(1, 1200, '2022-01-12'),
(2, 1500, '2022-01-31'),
(3, 6500, '2022-02-08'),
(4, 4500, '2022-02-22'),
(5, 1700, '2022-03-16'),
(6, 2500, '2022-03-30'),
(7, 9500, '2022-03-31'),
(8, 1500, '2022-04-20'),
(9, 6500, '2022-04-30'),
(10, 3500, '2022-05-10'),
(11, 300, '2022-05-25'),
(12, 3500, '2022-06-08'),
(13, 1300, '2022-06-29'),
(14, 8000, '2022-07-12'),
(15, 5000, '2022-07-31'),
(16, 4500, '2022-08-08'),
(17, 1700, '2022-08-31'),
(18, 3500, '2022-09-01'),
(19, 2700, '2022-09-22'),
(20, 5000, '2022-10-11'),
(21, 7000, '2022-10-25'),
(22, 1100, '2022-10-30'),
(23, 3100, '2022-11-01'),
(24, 2500, '2022-11-16'),
(25, 900, '2022-11-18'),
(26, 500, '2022-11-30'),
(27, 5000, '2022-12-07'),
(28, 2500, '2022-12-21'),
(29, 4500, '2022-12-28'),
(30, 1500, '2021-01-12'),
(31, 1700, '2021-01-31'),
(32, 1500, '2021-02-08'),
(33, 500, '2021-02-22'),
(34, 1900, '2021-03-16'),
(35, 2500, '2021-03-30'),
(36, 500, '2021-03-31'),
(37, 1900, '2021-04-20'),
(38, 700, '2021-04-30'),
(39, 2500, '2021-05-10'),
(40, 9700, '2021-05-25'),
(41, 600, '2021-06-08'),
(42, 700, '2021-06-29'),
(43, 500, '2021-07-12'),
(44, 100, '2021-07-31'),
(45, 200, '2021-08-08'),
(46, 1700, '2021-08-31'),
(47, 3500, '2021-09-01'),
(48, 9000, '2021-09-22'),
(49, 2200, '2021-10-11'),
(50, 1500, '2021-10-25'),
(51, 1100, '2021-10-30'),
(52, 3100, '2021-11-01'),
(53, 100, '2021-11-16'),
(54, 1500, '2021-11-18'),
(55, 700, '2021-11-30'),
(56, 500, '2021-12-07'),
(57, 4000, '2021-12-21'),
(58, 3500, '2021-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_names` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_level` enum('user','admin') NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_names`, `user_name`, `password`, `user_level`, `user_email`) VALUES
(1, 'นายแอดมิน  ดูแลระบบ', 'admin', '1234', 'admin', 'admin@gmail.com'),
(2, 'นางสาวผู้ใช้  ยอดดี', 'user', '1234', 'user', 'user@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_general`
--
ALTER TABLE `job_general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_position`
--
ALTER TABLE `job_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_pdf`
--
ALTER TABLE `tbl_pdf`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `job_general`
--
ALTER TABLE `job_general`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `job_position`
--
ALTER TABLE `job_position`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pdf`
--
ALTER TABLE `tbl_pdf`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
