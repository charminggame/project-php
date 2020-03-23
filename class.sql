SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `subject` (
  `SubjectID1` int(10) ,
  `SubjectID2` varchar(10) ,
  `namesubject` varchar(40) ,
  `TeacherID` int(10)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `subject` (`SubjectID1`, `SubjectID2`, `namesubject`, `TeacherID`) 
VALUES  (102, '301', 'INFORMATION SEARCH & PRESENT', 112),
        (805, '004', 'ENGLISH FOR INTER BUSINESS', 119),
        (805, '071', 'ENGLISH FOR FUN LISTEN&SPEAK', 108),
        (810, '001', 'GUIDING STATISTICS', 114),
        (969, '001', 'LIFELONG LEARNING', 113),
        (969, '041', 'CHOOSE WISELY LIVE WELL', 110),
        (969, '042', 'DIGITAL ECONOMY', 118),
        (969, '091', 'KEYBOARD FOR FUN', 107),
        (969, '092', 'E-SPORT', 105),
        (976, '101', 'BUSINESS INFORMATION SYSTEM', 115),
        (976, '130', 'COMPUTER&INTERNET TECH.', 103),
        (976, '140', 'SOFTWARE AND COMPUTER PROG.', 104),
        (976, '250', 'DATABASE SYSTEMS', 116),
        (977, '120', 'MATHEMATICS', 109),
        (977, '121', 'LINEAR ALGEBRA', 109),
        (977, '140', 'DATA STRUCTURES AND ALGO.', 107),
        (977, '141', 'OBJECT-ORIENTED PROGRAM', 104),
        (977, '231', 'COM ARCHITEC&OPERATING SYSTEMS', 117),
        (977, '271', 'REQUIREMENT ENG&SOFTWARE', 101),
        (980, '081', 'BADMINTON', 111);

CREATE TABLE IF NOT EXISTS `student` (
  `StudentID` int(10) NOT NULL,
  `SFirstname` varchar(20),
  `SLastname` varchar(20),
  `Address` varchar(30),
  `Major` varchar(30)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `student` (`StudentID`, `SFirstname`, `SLastname`, `Address`, `Major`) VALUES
(206101, 'Kittima', 'Jaisu', 'Krabi', 'SE'),
(206102, 'Jaruwan', 'Lamai', 'Phuket', 'Ebiz'),
(206103, 'Somchai', 'Sabaidee', 'Trang', 'CS'),
(206104, 'Pongpan', 'Kijawat', 'Songkla', 'IT'),
(206105, 'Kasem', 'KongKaew', 'Pang-Nga', 'IT'),
(206106, 'APIWAT', 'KASAHMA', 'Phuket', 'SE'),
(206107, 'ATTAPHON', 'ARUNCHOT', 'Phuket', 'SE'),
(206108, 'KANTINAN', 'GALATRO', 'Phuket', 'SE'),
(206109, 'Nattatat', 'Tantakan', 'Phuket', 'SE'),
(206110, 'PEERAPHAT', 'KHONGCHAROENTHIN', 'Phuket', 'SE'),
(206111, 'SANADEE', 'DOLOH', 'Phuket', 'SE'),
(206112, 'SINCHAI', 'PANASRI', 'Phuket', 'SE'),
(206113, 'SIWAT', 'THONGCHIM', 'Phuket', 'SE'),
(206114, 'SUPANAT', 'ANATAKANON', 'Phuket', 'SE'),
(206115, 'SUPPNAT', 'DACHARAD', 'Phuket', 'SE'),
(206116, 'SUTTIPONG', 'WISEDSA', 'Phuket', 'SE'),
(206117, 'SUTTIPONG', 'SRIWISUT', 'Phuket', 'SE'),
(206118, 'WARIT', 'WIPHONCHAI', 'Phuket', 'SE'),
(206119, 'KUNANON', 'CHAIRERK', 'Phuket', 'SE'),
(206120, 'SIRAPOB', 'VIROTKUN', 'Phuket', 'SE');

CREATE TABLE IF NOT EXISTS `teacher` (
  `TeacherID` int(10) NOT NULL,
  `TFirstname` varchar(30),
  `TLastname` varchar(30)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `teacher` (`TeacherID`, `TFirstname`, `TLastname`) VALUES
(101, 'ADISAK', 'INTANA'),
(102, 'Kanjana', 'Thongklin'),
(103, 'MONCHANOK', 'THONGTHEP'),
(104, 'KITSIRI', 'CHOCHIANG'),
(105, 'KITTASIL', 'SILANON'),
(106, 'Korawit', 'Prutsachainimmit'),
(107, 'NAWANOL', 'THEERA-AMPORNPUNT'),
(108, 'JONATHAN', 'HUGO'),
(109, 'PARIYAPORN', 'ROOP-O'),
(110, 'NATTAPONG', 'TONGTEP'),
(111, 'BUNCHAI', 'WONGBUNTERNG'),
(112, 'MANEENATE', 'PUONGMANEE'),
(113, 'WASIMON', 'PANICHPATTANAKUL'),
(114, 'KANAPOT', 'KALNAOVAKUL'),
(115, 'LERLUCK', 'BOONLAM'),
(116, 'KWANKAMON', 'DITTAKAN'),
(117, 'AMONRAT', 'PRASITSUPPAROTE'),
(118, 'AYUTH', 'INTRAPRADIT'),
(119, 'RATTANA', 'JANGPIBOONPONG');

CREATE TABLE `Ssubject` (
  `SubjectID1` int(10) ,
  `SubjectID2` int(10) ,
  `namesubject` varchar(40) ,
  `TeacherID` varchar(20) NOT NULL,
  `Npeople` int(10),
  `status` varchar(20)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
