SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `subject` (
  `SubjectID1` int(10) ,
  `SubjectID2` int(10) ,
  `namesubject` varchar(40) ,
  `TeacherID` int(10)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `subject` (`SubjectID1`, `SubjectID2`, `namesubject`, `TeacherID`) 
VALUES  (102, 301, 'INFORMATION SEARCH & PRESENT', 103),
        (805, 004, 'ENGLISH FOR INTER BUSINESS', 103),
        (805, 071, 'ENGLISH FOR FUN LISTEN&SPEAK', 103),
        (810, 001, 'GUIDING STATISTICS', 103),
        (969, 001, 'LIFELONG LEARNING', 103),
        (969, 041, 'CHOOSE WISELY LIVE WELL', 103),
        (969, 042, 'DIGITAL ECONOMY', 103),
        (969, 091, 'KEYBOARD FOR FUN', 103),
        (969, 092, 'E-SPORT', 103),
        (976, 101, 'BUSINESS INFORMATION SYSTEM', 103),
        (976, 130, 'COMPUTER&INTERNET TECH.', 103),
        (976, 140, 'SOFTWARE AND COMPUTER PROG.', 103),
        (976, 250, 'DATABASE SYSTEMS', 103),
        (977, 120, 'MATHEMATICS', 103),
        (977, 121, 'LINEAR ALGEBRA', 103),
        (977, 140, 'DATA STRUCTURES AND ALGO.', 103),
        (977, 141, 'OBJECT-ORIENTED PROGRAM', 103),
        (977, 231, 'COM ARCHITEC&OPERATING SYSTEMS', 103),
        (977, 271, 'REQUIREMENT ENG&SOFTWARE', 103),
        (980, 081, 'BADMINTON', 103);

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
(107, 'NAWANOL', 'THEERA-AMPORNPUNT');

CREATE TABLE `Ssubject` (
  `SubjectID1` int(10) ,
  `SubjectID2` int(10) ,
  `namesubject` varchar(40) ,
  `TeacherID` varchar(20) NOT NULL,
  `Npeople` int(10),
  `status` varchar(20)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
