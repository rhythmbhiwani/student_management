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

-- --------------------------------------------------------
-- Sample data for table `student`
-- --------------------------------------------------------

INSERT INTO `student` (fname, lname, caddress, paddress, contact, email, roll_no, enroll, branch, eyear, section, parent_email, father_name, mother_name, father_mobile, mother_mobile)
VALUES
  ('Rhythm', 'Bhiwani', 'Ajmer', 'Rajasthan', '555-1234', 'rhythmbhiwani@example.com', '17EGICS090', 2023000, 'CSE', 2017, 'B', 'rhythm.parent@example.com', 'Mr. Navin Bhiwani', 'Mrs. Rekha Mathur', '555-5678', '555-8765'),
  ('John', 'Doe', '123 Main Street', '456 Elm Street', '555-1234', 'john.doe@example.com', '17EGICS123', 2023001, 'CSE', 2023, 'A', 'johndoe.parent@example.com', 'John Doe Sr.', 'Jane Doe', '555-5678', '555-8765'),
  ('Jane', 'Smith', '789 Oak Avenue', '987 Maple Avenue', '555-5678', 'jane.smith@example.com', '17EGICS124', 2023002, 'ME', 2023, 'B', 'janesmith.parent@example.com', 'Michael Smith', 'Emily Smith', '555-9876', '555-6543');

COMMIT;
PRAGMA foreign_keys=on;
