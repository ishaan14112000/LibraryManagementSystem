-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 01:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_books`
--

CREATE TABLE `add_books` (
  `id` int(5) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_image` varchar(500) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `publication_name` varchar(100) NOT NULL,
  `purchase_date` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `available_quantity` varchar(20) NOT NULL,
  `librarian_username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_books`
--

INSERT INTO `add_books` (`id`, `book_name`, `book_image`, `author_name`, `publication_name`, `purchase_date`, `price`, `quantity`, `available_quantity`, `librarian_username`) VALUES
(5, 'php for absolute beginners', '..admin_side/books_image/d8a08de9e749650869e607420ce17a46php.png', 'Jason Lengstorf', 'Apress', '24/08/2020', '540', '100', '99', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(5) NOT NULL,
  `student_registration` varchar(100) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_sem` varchar(100) NOT NULL,
  `student_contact` varchar(100) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_issue_date` varchar(100) NOT NULL,
  `book_return_date` varchar(100) NOT NULL,
  `student_username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `student_registration`, `student_name`, `student_sem`, `student_contact`, `student_email`, `book_name`, `book_issue_date`, `book_return_date`, `student_username`) VALUES
(18, '18abc0300', 'Ishaan Jain', '6', '9876543210', 'ishaan@gmail.com', 'php for absolute beginners', '09-05-2021', '', 'ishaan1');

-- --------------------------------------------------------

--
-- Table structure for table `librarian_registration`
--

CREATE TABLE `librarian_registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `librarian_registration`
--

INSERT INTO `librarian_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, 'admin1', 'ad', 'admin1', '1234', 'admin1@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `source_username` varchar(100) NOT NULL,
  `destination_username` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `read1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `source_username`, `destination_username`, `title`, `msg`, `read1`) VALUES
(2, 'admin1', 'ishaan1', 'Book Reminder', 'please return book', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(5) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `college_id` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `contact`, `sem`, `college_id`, `status`) VALUES
(4, 'Ishaan', 'Jain', 'ishaan1', '1234', 'ishaan@gmail.com', '9876543210', '6', '18abc0300', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_books`
--
ALTER TABLE `add_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian_registration`
--
ALTER TABLE `librarian_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_books`
--
ALTER TABLE `add_books`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `librarian_registration`
--
ALTER TABLE `librarian_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
