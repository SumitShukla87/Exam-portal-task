-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 02:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'sumit', 'sumit123');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `session_id` varchar(100) NOT NULL,
  `test_id` int(11) NOT NULL,
  `q_name` varchar(250) NOT NULL,
  `ans1` varchar(50) NOT NULL,
  `ans2` varchar(50) NOT NULL,
  `ans3` varchar(50) NOT NULL,
  `ans4` varchar(50) NOT NULL,
  `true_ans` int(11) NOT NULL,
  `given_ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`session_id`, `test_id`, `q_name`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `given_ans`) VALUES
('5f9d4b0de38b7', 9, 'What of the following is the default value of an instance variable?', ' null', 'Zero', ' Depends upon the type of variable', 'Not assigned', 3, 1),
('5f9d4b0de38b7', 9, 'What is the size of char variable?', ' 8 bit', '16 bit', ' 32 bit', '64 bit', 2, 2),
('5f9d4b0de38b7', 9, 'What is the default value of Object variable?', 'not delclered', 'zero', 'null', 'undefined', 3, 2),
('5f9d4b0de38b7', 9, 'What is an Interface?', 'An interface is a collection of abstract methods.', 'Interface is an abstract class.', 'Interface is an concrete class.', 'None of the above.', 3, 3),
('5f9d4b0de38b7', 9, 'Method Overriding is an example of?', ' Static Binding.', ' Dynamic Binding.', 'Both of the above.', ' None of the above.', 2, 4),
('5f9d4b449a940', 9, 'What of the following is the default value of an instance variable?', ' null', 'Zero', ' Depends upon the type of variable', 'Not assigned', 3, 1),
('5f9d4b449a940', 9, 'What is the size of char variable?', ' 8 bit', '16 bit', ' 32 bit', '64 bit', 2, 0),
('5f9d4b449a940', 9, 'What is the default value of Object variable?', 'not delclered', 'zero', 'null', 'undefined', 3, 0),
('5f9d4b449a940', 9, 'What is an Interface?', 'An interface is a collection of abstract methods.', 'Interface is an abstract class.', 'Interface is an concrete class.', 'None of the above.', 3, 0),
('5f9d4b449a940', 9, 'Method Overriding is an example of?', ' Static Binding.', ' Dynamic Binding.', 'Both of the above.', ' None of the above.', 2, 0),
('5f9d4f275304e', 9, 'What of the following is the default value of an instance variable?', ' null', 'Zero', ' Depends upon the type of variable', 'Not assigned', 3, 3),
('5f9d4f275304e', 9, 'What is the size of char variable?', ' 8 bit', '16 bit', ' 32 bit', '64 bit', 2, 1),
('5f9d4f275304e', 9, 'What is the default value of Object variable?', 'not delclered', 'zero', 'null', 'undefined', 3, 3),
('5f9d4f275304e', 9, 'What is an Interface?', 'An interface is a collection of abstract methods.', 'Interface is an abstract class.', 'Interface is an concrete class.', 'None of the above.', 3, 2),
('5f9d4f275304e', 9, 'Method Overriding is an example of?', ' Static Binding.', ' Dynamic Binding.', 'Both of the above.', ' None of the above.', 2, 3),
('5f9d50319636c', 9, 'What of the following is the default value of an instance variable?', ' null', 'Zero', ' Depends upon the type of variable', 'Not assigned', 3, 1),
('5f9d50319636c', 9, 'What is the size of char variable?', ' 8 bit', '16 bit', ' 32 bit', '64 bit', 2, 3),
('5f9d50319636c', 9, 'What is the default value of Object variable?', 'not delclered', 'zero', 'null', 'undefined', 3, 2),
('5f9d50319636c', 9, 'What is an Interface?', 'An interface is a collection of abstract methods.', 'Interface is an abstract class.', 'Interface is an concrete class.', 'None of the above.', 3, 3),
('5f9d50319636c', 9, 'Method Overriding is an example of?', ' Static Binding.', ' Dynamic Binding.', 'Both of the above.', ' None of the above.', 2, 3),
('5f9d509d0c8dd', 9, 'What of the following is the default value of an instance variable?', ' null', 'Zero', ' Depends upon the type of variable', 'Not assigned', 3, 1),
('5f9d509d0c8dd', 9, 'What is the size of char variable?', ' 8 bit', '16 bit', ' 32 bit', '64 bit', 2, 2),
('5f9d509d0c8dd', 9, 'What is the default value of Object variable?', 'not delclered', 'zero', 'null', 'undefined', 3, 3),
('5f9d509d0c8dd', 9, 'What is an Interface?', 'An interface is a collection of abstract methods.', 'Interface is an abstract class.', 'Interface is an concrete class.', 'None of the above.', 3, 4),
('5f9d509d0c8dd', 9, 'Method Overriding is an example of?', ' Static Binding.', ' Dynamic Binding.', 'Both of the above.', ' None of the above.', 2, 4),
('5f9d5106b96ab', 9, 'What of the following is the default value of an instance variable?', ' null', 'Zero', ' Depends upon the type of variable', 'Not assigned', 3, 1),
('5f9d5106b96ab', 9, 'What is the size of char variable?', ' 8 bit', '16 bit', ' 32 bit', '64 bit', 2, 2),
('5f9d5106b96ab', 9, 'What is the default value of Object variable?', 'not delclered', 'zero', 'null', 'undefined', 3, 2),
('5f9d5106b96ab', 9, 'What is an Interface?', 'An interface is a collection of abstract methods.', 'Interface is an abstract class.', 'Interface is an concrete class.', 'None of the above.', 3, 2),
('5f9d5106b96ab', 9, 'Method Overriding is an example of?', ' Static Binding.', ' Dynamic Binding.', 'Both of the above.', ' None of the above.', 2, 3),
('5f9d52183d0fe', 9, 'What of the following is the default value of an instance variable?', ' null', 'Zero', ' Depends upon the type of variable', 'Not assigned', 3, 1),
('5f9d52183d0fe', 9, 'What is the size of char variable?', ' 8 bit', '16 bit', ' 32 bit', '64 bit', 2, 1),
('5f9d52183d0fe', 9, 'What is the default value of Object variable?', 'not delclered', 'zero', 'null', 'undefined', 3, 3),
('5f9d52183d0fe', 9, 'What is an Interface?', 'An interface is a collection of abstract methods.', 'Interface is an abstract class.', 'Interface is an concrete class.', 'None of the above.', 3, 4),
('5f9d52183d0fe', 9, 'Method Overriding is an example of?', ' Static Binding.', ' Dynamic Binding.', 'Both of the above.', ' None of the above.', 2, 3),
('5f9d58ef4c3c9', 9, 'What of the following is the default value of an instance variable?', ' null', 'Zero', ' Depends upon the type of variable', 'Not assigned', 3, 1),
('5f9d58ef4c3c9', 9, 'What is the size of char variable?', ' 8 bit', '16 bit', ' 32 bit', '64 bit', 2, 2),
('5f9d58ef4c3c9', 9, 'What is the default value of Object variable?', 'not delclered', 'zero', 'null', 'undefined', 3, 2),
('5f9d58ef4c3c9', 9, 'What is an Interface?', 'An interface is a collection of abstract methods.', 'Interface is an abstract class.', 'Interface is an concrete class.', 'None of the above.', 3, 4),
('5f9d58ef4c3c9', 9, 'Method Overriding is an example of?', ' Static Binding.', ' Dynamic Binding.', 'Both of the above.', ' None of the above.', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `que_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `que_name` varchar(250) NOT NULL,
  `ans1` varchar(75) NOT NULL,
  `ans2` varchar(75) NOT NULL,
  `ans3` varchar(75) NOT NULL,
  `ans4` varchar(75) NOT NULL,
  `true_ans` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`que_id`, `test_id`, `que_name`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(4, 8, 'Which of the following function is used to redirect a page?', ' redirect()', 'header()', ' reflect()', 'none of these above', 2),
(5, 8, 'Which of the following method of Exception class returns array of the backtrace?', 'getMessage()', 'getCode()', ' getTrace()', 'getTraceAsString()', 3),
(10, 8, 'Which of the following is the incorrect way to declare a PHP variable?', '$aVariable;', '$a_Variable = 9;', '$AVariable;', '$a Variable;', 4),
(11, 8, 'What does PHP stand for?', ' Preprocessed Hypertext Page', 'Personal Home Page', ' Hypertext Transfer Protocol', ' PHP: Hypertext Preprocessor', 4),
(12, 8, 'Which of the following extensions is a correct PHP file extension?', ' .html', ' .cpp', ' .php', '.pxp', 3),
(13, 9, 'What of the following is the default value of an instance variable?', ' null', 'Zero', ' Depends upon the type of variable', 'Not assigned', 3),
(14, 9, 'What is the size of char variable?', ' 8 bit', '16 bit', ' 32 bit', '64 bit', 2),
(15, 9, 'What is the default value of Object variable?', 'not delclered', 'zero', 'null', 'undefined', 3),
(16, 9, 'What is an Interface?', 'An interface is a collection of abstract methods.', 'Interface is an abstract class.', 'Interface is an concrete class.', 'None of the above.', 3),
(17, 9, 'Method Overriding is an example of?', ' Static Binding.', ' Dynamic Binding.', 'Both of the above.', ' None of the above.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `username` varchar(50) NOT NULL,
  `attempt` int(11) NOT NULL,
  `right_attemp` int(11) NOT NULL,
  `total_que` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`username`, `attempt`, `right_attemp`, `total_que`) VALUES
('amit11', 5, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `test_name` varchar(50) NOT NULL,
  `total_que` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `topic_id`, `test_name`, `total_que`) VALUES
(8, 2, 'php test 1', '5'),
(9, 1, 'java test', '5');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `name`) VALUES
(1, 'Java'),
(12, 'JavaScript');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `password`, `email`) VALUES
(2, 'sumit11', 'sumit11', 'sumit11@gmail.com'),
(3, 'amit11', 'amit11', 'amit11@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `que_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
