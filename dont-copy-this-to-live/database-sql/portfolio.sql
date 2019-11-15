-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 03:59 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `projects_id` int(3) NOT NULL,
  `project_title` varchar(255) DEFAULT NULL,
  `project_description` text DEFAULT NULL,
  `project_functions` text DEFAULT NULL,
  `project_languages` text DEFAULT NULL,
  `project_future_updates` text DEFAULT NULL,
  `project_url` varchar(255) DEFAULT NULL,
  `project_type` varchar(255) DEFAULT NULL,
  `project_alerts` text DEFAULT NULL,
  `project_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projects_id`, `project_title`, `project_description`, `project_functions`, `project_languages`, `project_future_updates`, `project_url`, `project_type`, `project_alerts`, `project_image`) VALUES
(1, 'Weather Scraper', 'A project created during my initial studies that generates weather information from an API based on `user location input`.', '<li>Utilising an API to generate weather information</li>\r\n        <li>Generates the weather based on user input</li>', '<li>Html5 &amp; Css3</li>\r\n        <li>Procedural PHP</li>\r\n        <li>API -> JSON</li>', '<li>Increase the amount of `weather data` being displayed.</li>\r\n        <li>Implement mobile optimisation</li>\r\n        <li>Improve Design!</li>\r\n        <li>Switch to a new API, due to South African `location` restrictions on current API</li>', '/projects/weather-scraper', 'Personal Project', '<div class=\"alert alert-danger text_violet\"><strong>The API used in the project is not very accurate for South African locations! (A new API will be used in the future to correct this issue)</strong></div>', 'images/projects/weather-scraper-display.png'),
(2, 'Secret Diary', 'This website revolves around users being able to record their thoughts in a diary format that securely stores and protects their information.', '<li>Utilises Password Hashing</li>\r\n            <li>Makes use of `CRUD`</li>\r\n            <li>User registration</li>\r\n            <li>Sessions &amp; Cookies</li>', '<li>Html5 &amp; Css3</li>\r\n            <li>Javascript &amp; Jquery</li>\r\n            <li>MySQL</li>\r\n            <li>Procedural PHP</li>', '<li>Creating a `repeat password` input function when registering to prevent users incorrectly typing it in when they register.</li>\r\n            <li>Forgot Password Function</li>\r\n            <li>Improved mobile optimisation</li>\r\n            <li>UI / Interface update</li>\r\n            <li>Convert to `OOP` -> PHP</li>', '../projects/secretDiary', 'Personal Project', NULL, 'images/projects/secret-diary-display.png'),
(3, 'Personal Portfolio', 'This website was created as my own personal portfolio website where I can showcase all of my projects and skills.', '<li>Generates Dynamic Displays\' for all projects and progress bars</li>\r\n        <li>Uses Read/Write functionality from MySQL Database</li>\r\n        <li>Mobile optimisation</li>', '<li>Html5 &amp; Css3</li>\r\n        <li>Javascript &amp; Jquery</li>\r\n        <li>MySQL</li>\r\n        <li>OOP -> PHP</li>\r\n', '<li>Refractor current OOP classes and methods to create a higher level of re-useability</li>\r\n        <li>Improve the method of display the `about` page -> `progress-bars`</li>\r\n        <li>Creating an admin system to easily upload new projects and skills easily</li>', 'index.php', 'Personal Project', NULL, 'images/projects/rohan-dyre-portfolio-display.png'),
(4, 'Archon CMS', 'A custom content management system that utilises dynamic content and Object Oriented Programming.', '<li>Utilises CRUD for every comment / category and post.</li>\r\n        <li>Uses Dynamic Displays\' for updates</li>\r\n<li>Dynamic Search Function</li>\r\n        <li>More coming soon.</li>\r\n        ', '<li>Html5 &amp; Css3</li>\r\n        <li>Javascript &amp; Jquery</li>\r\n        <li>MySQL</li>\r\n        <li>Procedural PHP</li>\r\n        <li>Busy converting the whole project to [OOP -> PHP]</li>', '<li>Convert to `OOP` -> PHP</li>\r\n        <li>Creating a log in system for admins and users</li>\r\n        <li>Creating functional and dynamically stored comments</li>\r\n        <li>Implement mobile optimisation</li>\r\n        <li>Create `user` management pages and function on admin dashboard</li>\r\n        <li>Improved table layouts</li>\r\n        <li>UI / Interface update</li>\r\n        <li>More to come..</li>', '/projects/archon-cms', 'Personal Project', '<div class=\"alert alert-danger text_violet\"><strong>Archon CMS is currently in very early development</strong></div>', 'images/projects/archon-cms-display.png');

-- --------------------------------------------------------

--
-- Table structure for table `skill-bars`
--

CREATE TABLE `skill-bars` (
  `skill_id` int(2) NOT NULL,
  `skill_title` varchar(255) DEFAULT NULL,
  `skill_value` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill-bars`
--

INSERT INTO `skill-bars` (`skill_id`, `skill_title`, `skill_value`) VALUES
(1, 'HTML5', 70),
(2, 'CSS3', 70),
(3, 'Javascript', 55),
(4, 'JQuery', 65),
(5, 'MySQL', 60),
(6, 'PHP7', 70),
(7, 'Laravel', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`projects_id`);

--
-- Indexes for table `skill-bars`
--
ALTER TABLE `skill-bars`
  ADD PRIMARY KEY (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `projects_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skill-bars`
--
ALTER TABLE `skill-bars`
  MODIFY `skill_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
