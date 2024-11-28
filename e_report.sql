-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2024 at 03:29 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `title`, `description`, `user_id`, `created_at`) VALUES
(30, 'yaziddd', 'gantenggg banget gilaa cuyyy', 42, '2024-11-25 14:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(6, 'saizzra', '$2y$10$uJsK5aagePzcZZfNPuYejuQhLk1uM/2PnbLsWA2ifbWSbuHC3yL8m', '2024-11-22 13:41:32'),
(7, 'shifan', '$2y$10$JsPVopyYVIwu9.SLWJoPbO7SamkoTUkEXrMVYyt2eUzxAvwj5LyWW', '2024-11-22 13:41:53'),
(11, 'fadel', '$2y$10$eJXq7lwaz3qmKbvfOY.O9ershHraLgLcdgeLawYv9AqvQ/urilW7u', '2024-11-22 14:07:44'),
(12, 'yazid', '$2y$10$DZbpPVygghNCl6V97/6n9uxdUTsUbprXgsCGXVPoVpYRXwZ.K.FKm', '2024-11-22 14:22:22'),
(13, 'rpl', '$2y$10$JTyfKnl/gr/B56XtXxQR8.89etJCghnJj6tYbrzSGtobrgFHiZOB.', '2024-11-22 14:24:07'),
(20, 'bumi', '$2y$10$wsXGXkiB6YQT.HOglxSQ1.P3CTDLTB1DTRAuSxnNb5Ksll0PN/4CK', '2024-11-25 03:04:57'),
(23, 'mambo', '$2y$10$qs/DaAlLspTDkp56Jnc63eX1UFn0a9gmDjwP8HAqVK5HcHfRNCOEu', '2024-11-25 03:10:25'),
(25, 'orang', '$2y$10$Spy0yW/gGEtD7C7MYjtc6.LTNRLOiYTnCTqJu1jfdRUs2Q5YzSXjW', '2024-11-25 03:14:45'),
(28, 'ayyyyy', '$2y$10$Svd.18AFyNtXvyz6rDpwweMOMAXmJMA90fV8XLn1MN6RSYOuup1A.', '2024-11-25 03:27:47'),
(33, 'a', '$2y$10$OSEa.n6knzjsy9YGKFKC1eLYYnPCK21Hg3Syae6KSDP0K2Wymc9RS', '2024-11-25 03:49:54'),
(34, 'sevalino', '$2y$10$JqO8ocu4jcgF/19qRvF8ruTaAQpDfd9i20aBX4HaZLKweh5kFbf82', '2024-11-25 03:56:53'),
(35, 'Sajad', '$2y$10$I9ZSk/fyz9Nb9FaZsG4c2udV4XVEE7Uws0IJq4VNH72ZBa3kuTB2.', '2024-11-25 03:57:38'),
(38, 'edmin', '$2y$10$oZiL.25sSZXqJAgeRJ6sseNA4tltbh0PE7wtxO6yOVQlB8yzXNF52', '2024-11-25 06:10:44'),
(39, 'wwwwww', '$2y$10$WVUqAi3VTPrEQzcwgn.atePGzO352dq9EEfkEnRSr1Z4Id5XHlRvC', '2024-11-25 06:24:23'),
(41, 'yazidd', '$2y$10$U/V5i0JHGkgMuF5q7m8WeuUq54UKOn7zDIsgsbEuBk9bASX4Knic.', '2024-11-25 14:27:01'),
(42, 'yaziddd', '$2y$10$/6zOMuqKb2qAoMftLpl5M.Wniv0iKJZBl2e12QGxOyMUheTikDa1S', '2024-11-25 14:29:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
