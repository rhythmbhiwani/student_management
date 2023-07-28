-- SQLite3 SQL Dump
-- version 3.35.5
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 01:47 PM
-- SQLite Version: 3.35.5

PRAGMA foreign_keys=off;
BEGIN TRANSACTION;

--
-- Database: `stdmgmtsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `paddress` varchar(200) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `enroll` INTEGER NOT NULL,
  `branch` varchar(50) NOT NULL,
  `eyear` INTEGER NOT NULL,
  `section` varchar(1) NOT NULL,
  `parent_email` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `father_mobile` varchar(15) NOT NULL,
  `mother_mobile` varchar(15) NOT NULL
);

COMMIT;
PRAGMA foreign_keys=on;
