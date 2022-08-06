-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 07:46 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamicschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(255) NOT NULL,
  `description` longtext NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `description`, `create_at`, `update_at`) VALUES
(1, '<div style=\"\" courier=\"\" new\",=\"\" monospace;=\"\" line-height:=\"\" 19px;=\"\" white-space:=\"\" pre;\"=\"\">à¦«à§‡à¦¨à§€ à¦œà§‡à¦²à¦¾à¦° à¦¦à¦¾à¦—à¦¨à¦­à§‚à¦žà¦¾ à¦‰à¦ªà¦œà§‡à¦²à¦¾à¦° à¦¸à§à¦¬à¦¨à¦¾à¦®à¦§à¦¨à§à¦¯ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨ à¦‡à¦•à¦¬à¦¾à¦² à¦®à§‡à¦®à§‹à¦°à¦¿à§Ÿà¦¾à¦² à¦¸à¦°à¦•à¦¾à¦°à¦¿ à¦•à¦²à§‡à¦œà¥¤ à¦à¦‡ à¦à¦²à¦¾à¦•à¦¾à¦° à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦‰à¦šà§à¦š à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦¸à§à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾ à¦•à¦°à¦¾à¦° &nbsp;à¦®à¦¾à¦¨à¦¸à§‡ à¦à¦‡ à¦à¦²à¦¾à¦•à¦¾à¦°à¦‡ à¦•à§ƒà¦¤à¦¿ à¦¸à¦¨à§à¦¤à¦¾à¦¨ &nbsp;à¦¬à¦¿à¦¶à¦¿à¦·à§à¦Ÿ &nbsp;à¦¬à§à¦¯à¦¬à¦¸à¦¾à§Ÿà§€ à¦“ à¦¶à¦¿à¦•à§à¦·à¦¾à¦¨à§à¦°à¦¾à¦—à§€ à¦†à¦¬à¦¦à§à¦² à¦†à¦‰à§Ÿà¦¾à¦² à¦®à¦¿à¦¨à§à¦Ÿà§ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾ à¦•à¦°à§‡à¦¨ à¦‡à¦•à¦¬à¦¾à¦² à¦®à§‡à¦®à§‹à¦°à¦¿à§Ÿà¦¾à¦² à¦•à¦²à§‡à¦œà¥¤ à¦¤à¦¾à¦à¦° à¦¸à§à¦¨à§‡à¦¨à¦­à¦¾à¦œà¦¨ à¦›à§‹à¦Ÿ à¦­à¦¾à¦‡ à¦‡à¦•à¦¬à¦¾à¦² à¦¹à§‹à¦¸à§‡à¦¨ à¦¦à§à¦°à¦¾à¦°à§‹à¦—à§à¦¯ à¦•à§à¦¯à¦¾à¦¨à§à¦¸à¦¾à¦°à§‡ &nbsp;à¦†à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦¹à§Ÿà§‡ à¦¸à§à¦•à§à¦² à¦œà§€à¦¬à¦¨à§‡à¦° à¦—à¦¨à§à¦¡à¦¿ à¦ªà¦¾à¦° à¦¹à¦“à§Ÿà¦¾à¦° à¦ªà§‚à¦°à§à¦¬à§‡à¦‡ à¦®à§ƒà¦¤à§à¦¯à§ à¦¬à¦°à¦£ à¦•à¦°à§‡à¦¨à¥¤ à¦¤à¦¾à¦° à¦¸à§à¦®à§ƒà¦¤à¦¿à¦•à§‡ à¦…à¦®à¦²à¦¿à¦¨ à¦•à¦°à§‡ à¦°à¦¾à¦–à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¤à¦¿à¦¨à¦¿ à¦à¦‡ à¦•à¦²à§‡à¦œ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾ à¦•à¦°à§‡à¦¨à¥¤ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦²à¦—à§à¦¨ à¦¥à§‡à¦•à§‡à¦‡ à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡à¦° à¦²à¦•à§à¦·à§à¦¯ à¦›à¦¿à¦²à§‹ à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦†à¦²à§‹ à¦›à§œà¦¿à§Ÿà§‡ à¦¦à§‡à¦“à§Ÿà¦¾ à¦à¦¬à¦‚ à¦à¦‡ à¦•à¦¾à¦œà¦Ÿà¦¿ à¦¸à¦ à¦¿à¦• à¦­à¦¾à¦¬à§‡à¦‡ à¦ªà¦¾à¦²à¦¨ à¦•à¦°à§‡ à¦¯à¦¾à¦šà§à¦›à§‡ à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¥¤</div>', '2022-08-02 05:32:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `create_admin`
--

CREATE TABLE `create_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `user_type` int(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `recover_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_rules`
--

CREATE TABLE `exam_rules` (
  `id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `upload_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam_rules`
--

INSERT INTO `exam_rules` (`id`, `description`, `create_at`, `upload_at`) VALUES
(1, 'alauddin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `upload_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `description`, `create_at`, `upload_at`) VALUES
(1, '<div style=\"line-height: 19px;\"><div style=\"line-height: 19px;\">à¦«à§‡à¦¨à§€ à¦œà§‡à¦²à¦¾à¦° à¦¦à¦¾à¦—à¦¨à¦­à§‚à¦à¦‡à¦¯à¦¼à¦¾ à¦‰à¦ªà¦œà§‡à¦²à¦¾à¦° à¦à¦•à¦Ÿà¦¿ à¦†à¦¦à¦°à§à¦¶ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡ à¦‡à¦•à¦¬à¦¾à¦² à¦®à§‡à¦®à§‹à¦°à¦¿à¦¯à¦¼à¦¾à¦² à¦¸à¦°à¦•à¦¾à¦°à¦¿ à¦•à¦²à§‡à¦œà¥¤ à¦à¦‡ à¦‰à¦ªà¦œà§‡à¦²à¦¾à¦° à¦à¦•à¦Ÿà¦¿ à¦¸à§à¦¬à¦¨à¦¾à¦®à¦§à¦¨à§à¦¯ à¦ªà¦°à¦¿à¦¬à¦¾à¦°à§‡ à¦œà¦¨à§à¦® à¦¨à§‡à¦¯à¦¼à¦¾ à¦‡à¦•à¦¬à¦¾à¦² à¦¹à§‹à¦¸à§‡à¦¨ à¦›à¦¿à¦²à§‡à¦¨ à¦‰à¦šà§à¦›à¦² à¦¤à¦¾à¦°à§à¦£à§à¦¯à§‡à¦° à¦ªà§à¦°à¦¤à§€à¦• à¦†à¦° à¦­à¦¬à¦¿à¦·à§à¦¯à§Ž à¦‰à¦œà§à¦œà§à¦¬à¦² à¦¸à¦®à§à¦­à¦¾à¦¬à¦¨à¦¾à¦° à¦…à¦§à¦¿à¦•à¦¾à¦°à§€ à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦¦à§à¦°à§à¦­à¦¾à¦—à§à¦¯à¦œà¦¨à¦•à¦­à¦¾à¦¬à§‡ à¦¦à§à¦°à¦¾à¦°à§‹à¦—à§à¦¯ à¦•à§à¦¯à¦¾à¦¨à§à¦¸à¦¾à¦°à§‡ à¦†à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦¹à¦¯à¦¼à§‡ à¦…à¦•à¦¾à¦² à¦®à§ƒà¦¤à§à¦¯à§à¦¬à¦°à¦£ à¦•à¦°à§‡à¦¨ à¦¸à§à¦•à§à¦² à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€ à¦‡à¦•à¦¬à¦¾à¦² à¦¹à§‹à¦¸à§‡à¦¨ à¥¤ à¦¤à¦¾à¦° à¦¸à§à¦®à§ƒà¦¤à¦¿à¦•à§‡ à¦…à¦®à¦° à¦•à¦°à§‡ à¦°à¦¾à¦–à¦¾à¦° à¦®à¦¾à¦¨à¦¸à§‡ à¦¤à¦¾à¦° à¦¬à¦¡à¦¼ à¦­à¦¾à¦‡ à¦à¦‡ à¦¦à§‡à¦¶à§‡à¦° à¦•à§ƒà¦¤à¦¿ à¦¸à¦¨à§à¦¤à¦¾à¦¨, à¦¬à¦¿à¦¶à¦¿à¦·à§à¦Ÿ à¦¬à§à¦¯à¦¬à¦¸à¦¾à¦¯à¦¼à§€ à¦“ à¦¶à¦¿à¦•à§à¦·à¦¾à¦¨à§à¦°à¦¾à¦—à§€ à¦œà¦¨à¦¾à¦¬ à¦†à¦¬à§à¦¦à§à¦² à¦†à¦‰à¦¯à¦¼à¦¾à¦² à¦®à¦¿à¦¨à§à¦Ÿà§ à§§à§¯à§®à§« à¦¸à¦¾à¦²à§‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¿à¦¤ à¦•à¦°à§‡à¦¨ à¦‡à¦•à¦¬à¦¾à¦² à¦®à§‡à¦®à§‹à¦°à¦¿à¦¯à¦¼à¦¾à¦² à¦•à¦²à§‡à¦œà¥¤ à¦ªà¦°à§à¦¯à¦¾à¦¯à¦¼à¦•à§à¦°à¦®à§‡ à¦à¦‡ à¦•à¦²à§‡à¦œà§‡ à¦¸à§à¦¨à¦¾à¦¤à¦•, à¦¬à¦¿.à¦à¦®. à¦“ à¦…à¦¨à¦¾à¦°à§à¦¸ à¦¶à¦¾à¦–à¦¾ à¦–à§‹à¦²à¦¾ à¦¹à¦¯à¦¼ à¥¤ à¦à¦²à¦¾à¦•à¦¾à¦° à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¦¦à§‡à¦° à¦‰à¦šà§à¦šà¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦¸à§à¦¯à§‹à¦— à¦•à¦°à§‡ à¦¦à¦¿à§Ÿà§‡ à¦¤à¦¾à¦¦à§‡à¦° à¦œà§€à¦¬à¦¨à¦®à¦¾à¦¨à§‡à¦° à¦ªà¦°à¦¿à¦¬à¦°à§à¦¤à¦¨ à¦¸à¦¾à¦§à¦¨à¦‡ à¦›à¦¿à¦²à§‹ à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¿à¦¤à¦¾à¦¦à§‡à¦° à¦²à¦•à§à¦·à§à¦¯ à¥¤ à¦à¦‡ à¦œà§‡à¦²à¦¾ à¦à¦¬à¦‚ à¦¨à¦¿à¦•à¦Ÿà¦¬à¦°à§à¦¤à§€ à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯ à¦œà§‡à¦²à¦¾ à¦¹à¦¤à§‡ à¦†à¦—à¦¤ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¦¦à§‡à¦° à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦†à¦¦à¦°à§à¦¶ à¦ªà¦°à¦¿à¦¬à§‡à¦¶ à¦¨à¦¿à¦¶à§à¦šà¦¿à¦¤ à¦•à¦°à§‡, à¦•à¦¾à¦™à§à¦–à¦¿à¦¤ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦“ à¦¸à¦¹à¦¶à¦¿à¦•à§à¦·à¦¾ à¦•à¦¾à¦°à§à¦¯à¦•à§à¦°à¦® à¦ªà¦°à¦¿à¦šà¦¾à¦²à¦¨à¦¾à¦° à¦œà¦¨à§à¦¯à§‡ à¦…à¦¤à§à¦° à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡à¦° à¦…à¦§à§à¦¯à¦•à§à¦·, à¦¶à¦¿à¦•à§à¦·à¦•, à¦•à¦°à§à¦®à¦•à¦°à§à¦¤à¦¾ à¦“ à¦•à¦°à§à¦®à¦šà¦¾à¦°à§€à¦—à¦£ à¦¨à¦¿à¦°à¦²à¦¸ à¦¤à¦¾à¦¦à§‡à¦° à¦¦à¦¾à¦¯à¦¼à¦¿à¦¤à§à¦¬ à¦ªà¦¾à¦²à¦¨ à¦•à¦°à§‡ à¦¯à¦¾à¦šà§à¦›à§‡à¦¨ à¥¤ à¦—à¦¤ à§¦à§®/à§¦à§®/à§¨à§¦à§§à§® à¦–à§à¦°à¦¿à¦¸à§à¦Ÿà¦¾à¦¬à§à¦¦à§‡ à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨ à¦¸à¦°à¦•à¦¾à¦° à¦•à¦°à§à¦¤à§ƒà¦• à¦•à¦²à§‡à¦œ à¦¸à¦°à¦•à¦¾à¦°à¦¿à¦•à¦°à¦£ à¦•à¦°à¦¾ à¦¹à¦¯à¦¼à¥¤ à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡ à¦à¦Ÿà¦¿ à¦à¦•à¦Ÿà¦¿ à¦ªà§‚à¦°à§à¦£à¦¾à¦™à§à¦— à¦¸à¦°à¦•à¦¾à¦°à¦¿ à¦•à¦²à§‡à¦œ à¥¤ alauddin</div></div>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `infrastucture`
--

CREATE TABLE `infrastucture` (
  `id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `upload_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `infrastucture`
--

INSERT INTO `infrastucture` (`id`, `description`, `create_at`, `upload_at`) VALUES
(1, '<span style=\"color: rgb(33, 37, 41); font-family: Bangla, sans-serif; font-size: 16px;\">à¦ªà¦°à¦¿à¦•à¦¾à¦ à¦¾à¦®à§‹à¦° à¦ªà¦°à¦¿à¦ªà§à¦°à§‡à¦•à§à¦·à¦¿à¦¤à§‡, à¦†à¦‡à¦à¦®à¦œà¦¿à¦¸à¦¿ à¦†à¦¨à§à¦¤à¦°à§à¦œà¦¾à¦¤à¦¿à¦• à¦®à¦¾à¦¨à§‡à¦° à¦¸à¦¾à¦¥à§‡ à¦®à§‡à¦²à§‡ à¦¦à§‡à¦¶à§‡à¦° à¦¸à§‡à¦°à¦¾ à¦•à¦²à§‡à¦œà¦—à§à¦²à¦¿à¦° à¦®à¦§à§à¦¯à§‡ à¦à¦•à¦Ÿà¦¿à¥¤ à¦à¦Ÿà¦¿ à¦¦à¦¿à¦²à§à¦²à¦¿ à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à¦¯à¦¼à§‡à¦° à¦•à¦¯à¦¼à§‡à¦•à¦Ÿà¦¿ à¦•à¦²à§‡à¦œà§‡à¦° à¦®à¦§à§à¦¯à§‡ à¦à¦•à¦Ÿà¦¿ à¦¯à¦¾ à¦†à¦§à§à¦¨à¦¿à¦• à¦¸à¦°à¦žà§à¦œà¦¾à¦® à¦à¦¬à¦‚ à¦•à§Œà¦¶à¦²à¦—à§à¦²à¦¿à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦ªà¦¾à¦ à¦¦à¦¾à¦¨à§‡à¦° à¦¸à§à¦¬à¦¿à¦§à¦¾à¦°à§à¦¥à§‡ à¦¤à¦¾à¦° à¦¶à§à¦°à§‡à¦£à§€à¦•à¦•à§à¦·à¦—à§à¦²à¦¿à¦•à§‡ à¦†à¦ªà¦—à§à¦°à§‡à¦¡ à¦•à¦°à§‡à¦›à§‡à¥¤ à¦•à¦²à§‡à¦œà§‡ à¦“à¦¯à¦¼à¦¾à¦‡-à¦«à¦¾à¦‡ à¦¸à¦•à§à¦·à¦® à¦à¦²à¦¸à¦¿à¦¡à¦¿ à¦ªà§à¦°à¦œà§‡à¦•à§à¦Ÿà¦° à¦¸à¦¹ à¦•à§‡à¦¨à§à¦¦à§à¦°à§€à¦¯à¦¼à¦­à¦¾à¦¬à§‡ à¦¶à§€à¦¤à¦¾à¦¤à¦ª à¦¨à¦¿à¦¯à¦¼à¦¨à§à¦¤à§à¦°à¦¿à¦¤ à¦¶à§à¦°à§‡à¦£à§€à¦•à¦•à§à¦·, à¦Ÿà¦¿à¦‰à¦Ÿà§‹à¦°à¦¿à¦¯à¦¼à¦¾à¦² à¦°à§à¦®, à¦²à¦¾à¦‡à¦¬à§à¦°à§‡à¦°à¦¿, à¦à¦•à¦Ÿà¦¿ à¦…à¦¤à§à¦¯à¦¾à¦§à§à¦¨à¦¿à¦• à¦¸à§‡à¦®à¦¿à¦¨à¦¾à¦° à¦•à¦•à§à¦· à¦à¦¬à¦‚ 750 à¦œà¦¨à§‡à¦° à¦¬à§‡à¦¶à¦¿ à¦²à§‹à¦•à§‡à¦° à¦¬à¦¸à¦¾à¦° à¦•à§à¦·à¦®à¦¤à¦¾ à¦¸à¦¹ à¦à¦•à¦Ÿà¦¿ à¦¸à¦®à§à¦ªà§‚à¦°à§à¦£ à¦¸à¦œà§à¦œà¦¿à¦¤ à¦…à¦¡à¦¿à¦Ÿà§‹à¦°à¦¿à¦¯à¦¼à¦¾à¦® à¦°à¦¯à¦¼à§‡à¦›à§‡à¥¤ à¦•à¦²à§‡à¦œà¦Ÿà¦¿ à¦¬à¦¿à¦²à§à¦¡à¦¿à¦‚à¦¯à¦¼à§‡ à¦¨à¦¤à§à¦¨ à¦°â€Œà§à¦¯à¦¾à¦®à§à¦ª, à¦²à¦¿à¦«à¦Ÿ à¦à¦¬à¦‚ à¦¬à¦¿à¦¶à§‡à¦· à¦“à¦¯à¦¼à¦¾à¦¶à¦°à§à¦® à¦¯à§à¦•à§à¦¤ à¦•à¦°à§‡ à¦à¦•à¦Ÿà¦¿ à¦­à¦¿à¦¨à§à¦¨à¦­à¦¾à¦¬à§‡-à¦…à¦•à§à¦·à¦® à¦¬à¦¨à§à¦§à§à¦¤à§à¦¬à¦ªà§‚à¦°à§à¦£ à¦•à§à¦¯à¦¾à¦®à§à¦ªà¦¾à¦¸ à¦¹à¦“à¦¯à¦¼à¦¾à¦° à¦œà¦¨à§à¦¯ à¦—à¦°à§à¦¬à¦¿à¦¤à¥¤ à¦à¦›à¦¾à¦¡à¦¼à¦¾à¦“, à¦•à¦²à§‡à¦œà§‡ à¦¬à¦¿à¦­à¦¿à¦¨à§à¦¨ à¦›à¦¾à¦¤à§à¦°à¦›à¦¾à¦¤à§à¦°à§€à¦¦à§‡à¦° à¦ªà¦ à¦¨, à¦¶à§à¦°à¦¬à¦£ à¦à¦¬à¦‚ à¦¬à§‹à¦à¦¾à¦° à¦ªà§à¦°à¦¯à¦¼à§‹à¦œà¦¨à§€à¦¯à¦¼à¦¤à¦¾ à¦®à§‹à¦•à¦¾à¦¬à§‡à¦²à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¬à¦¿à¦­à¦¿à¦¨à§à¦¨ à¦¸à§à¦¬à¦¿à¦§à¦¾ à¦°à¦¯à¦¼à§‡à¦›à§‡à¥¤ à¦†à¦‡à¦à¦®à¦œà¦¿à¦¸à¦¿ à¦²à¦¾à¦‡à¦¬à§à¦°à§‡à¦°à¦¿ à¦¹à¦² à¦à¦•à¦Ÿà¦¿ à¦•à§à¦·à¦®à¦¤à¦¾à¦¯à¦¼à¦¨ à¦‡à¦‰à¦¨à¦¿à¦Ÿ à¦¯à¦¾à¦° à¦à¦•à¦Ÿà¦¿ à¦°à¦¿à¦¸à§‹à¦°à§à¦¸ à¦¸à§‡à¦¨à§à¦Ÿà¦¾à¦° à¦«à¦° à¦­à¦¿à¦œà§à¦¯à§à¦¯à¦¼à¦¾à¦²à§à¦¯à¦¾à¦²à¦¿ à¦šà§à¦¯à¦¾à¦²à§‡à¦žà§à¦œà¦¡ à¦¯à¦¾ à¦¸à§à¦¬-à¦¬à¦¾à¦¸à§à¦¤à¦¬à¦•à¦°à¦£à§‡à¦° à¦ªà§à¦°à¦•à§à¦°à¦¿à¦¯à¦¼à¦¾à¦¯à¦¼ à¦¸à¦¹à¦¾à¦¯à¦¼à¦¤à¦¾ à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯ à¦…à¦¡à¦¿à¦“-à¦­à¦¿à¦œà§à¦¯à§à¦¯à¦¼à¦¾à¦² à¦¸à¦¾à¦¹à¦¾à¦¯à§à¦¯à§‡à¦° à¦à¦•à¦Ÿà¦¿ à¦…à§à¦¯à¦¾à¦°à§‡à¦° à¦…à¦§à¦¿à¦•à¦¾à¦°à§€à¥¤ à¦•à¦²à§‡à¦œà¦Ÿà¦¿ à¦¸à¦‚à¦¸à§à¦•à¦¾à¦°à¦•à§ƒà¦¤ à¦¹à§‹à¦¸à§à¦Ÿà§‡à¦², à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦¾ à¦¸à¦¹à¦¾à¦¯à¦¼à¦¤à¦¾ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾ (à¦«à¦¿à¦œà¦¿à¦“à¦¥à§‡à¦°à¦¾à¦ªà¦¿ à¦•à§‡à¦¨à§à¦¦à§à¦°à§‡à¦° à¦¸à¦¾à¦¥à§‡), à¦†à¦§à§à¦¨à¦¿à¦• à¦œà¦¿à¦®à¦¨à§‡à¦¸à¦¿à¦¯à¦¼à¦¾à¦®, à¦¸à§à¦‡à¦®à¦¿à¦‚ à¦ªà§à¦², à¦à¦•à¦Ÿà¦¿ à¦¬à¦¿à¦¶à¦¾à¦² à¦ªà¦¾à¦°à§à¦•à¦¿à¦‚ à¦¸à§à¦¬à¦¿à¦§à¦¾ (à¦›à¦¾à¦¤à§à¦° à¦à¦¬à¦‚ à¦¶à¦¿à¦•à§à¦·à¦• à¦‰à¦­à¦¯à¦¼à§‡à¦° à¦œà¦¨à§à¦¯ à¦‰à¦ªà¦²à¦¬à§à¦§), à¦¶à§€à¦¤à¦¾à¦¤à¦ª à¦¨à¦¿à¦¯à¦¼à¦¨à§à¦¤à§à¦°à¦¿à¦¤ à¦•à§à¦°à§€à¦¡à¦¼à¦¾ à¦•à¦®à¦ªà§à¦²à§‡à¦•à§à¦¸ à¦à¦¬à¦‚ à¦†à¦¨à§à¦¤à¦°à§à¦œà¦¾à¦¤à¦¿à¦• à¦®à¦¾à¦¨à§‡à¦° à¦–à§‡à¦²à¦¾à¦° à¦®à¦¾à¦  à¦¦à¦¿à¦¯à¦¼à§‡ à¦¸à¦®à§ƒà¦¦à§à¦§à¥¤ à¦à¦•à¦Ÿà¦¿ à¦¸à¦®à§à¦ªà§‚à¦°à§à¦£ à¦§à§‹à¦à¦¯à¦¼à¦¾ à¦“ à¦¯à¦¾à¦¨à¦¬à¦¾à¦¹à¦¨ à¦®à§à¦•à§à¦¤ à¦…à¦žà§à¦šà¦², à¦•à¦²à§‡à¦œà¦Ÿà¦¿ à¦¸à§Œà¦° à¦—à¦°à¦®, à¦°à§‡à¦‡à¦¨ à¦“à¦¯à¦¼à¦¾à¦Ÿà¦¾à¦° à¦¹à¦¾à¦°à§à¦­à§‡à¦¸à§à¦Ÿà¦¿à¦‚, à¦ªà§‡à¦ªà¦¾à¦° à¦°à¦¿à¦¸à¦¾à¦‡à¦•à§à¦²à¦¿à¦‚ à¦à¦¬à¦‚ à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯ à¦¸à¦¬à§à¦œ à¦‰à¦¦à§à¦¯à§‹à¦—à§‡à¦° à¦¸à¦°à§à¦¬à¦¶à§‡à¦· à¦‰à¦¦à§à¦¯à§‹à¦—à§‡à¦° à¦¸à¦¾à¦¥à§‡ à¦¤à¦¾à¦° à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¦¦à§‡à¦° à¦à¦•à¦Ÿà¦¿ à¦ªà¦°à¦¿à¦¬à§‡à¦¶ à¦¬à¦¾à¦¨à§à¦§à¦¬ à¦ªà¦°à¦¿à¦¬à§‡à¦¶ à¦ªà§à¦°à¦¦à¦¾à¦¨ à¦•à¦°à§‡à¥¤ à¦•à¦²à§‡à¦œ à¦¸à¦¤à¦°à§à¦•à¦¤à¦¾ à¦à¦¬à¦‚ à¦¨à¦¿à¦°à¦¾à¦ªà¦¤à§à¦¤à¦¾à¦° à¦ªà§à¦°à¦¯à¦¼à§‹à¦œà¦¨ à¦®à§‹à¦•à¦¾à¦¬à§‡à¦²à¦¾ à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾ à¦¨à¦¿à¦¯à¦¼à§‡à¦›à§‡à¥¤ à¦•à§à¦¯à¦¾à¦®à§à¦ªà¦¾à¦¸à¦Ÿà¦¿ à¦¸à¦¿à¦¸à¦¿à¦Ÿà¦¿à¦­à¦¿-à¦¸à¦•à§à¦·à¦® à¦à¦•à¦Ÿà¦¿ à¦¸à§-à¦¸à¦®à§ƒà¦¦à§à¦§ à¦à¦¬à¦‚ à¦¸à¦œà§à¦œà¦¿à¦¤ à¦•à§à¦¯à¦¾à¦®à§à¦ªà¦¾à¦¸à§‡à¦° à¦¨à¦¿à¦°à¦¾à¦ªà¦¤à§à¦¤à¦¾à¦° à¦ªà§à¦°à¦¯à¦¼à§‹à¦œà¦¨à§€à¦¯à¦¼à¦¤à¦¾ à¦ªà§‚à¦°à¦£ à¦•à¦°à¦¤à§‡ à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦ªà§à¦°à¦šà§à¦° à¦²à§‹à¦• à¦¸à¦®à¦¾à¦—à¦® à¦¹à¦¯à¦¼à¥¤alauddin</span>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main_menu`
--

CREATE TABLE `main_menu` (
  `id` int(11) NOT NULL,
  `sl` varchar(255) DEFAULT NULL,
  `link_name` varchar(255) DEFAULT NULL,
  `icon_name` varchar(255) DEFAULT NULL,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_menu`
--

INSERT INTO `main_menu` (`id`, `sl`, `link_name`, `icon_name`, `status`) VALUES
(13, '1', 'Admin Informations', 'far fa-user', 1),
(15, '2', 'Website Setting', 'fa fa-gears', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mission_vision`
--

CREATE TABLE `mission_vision` (
  `id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mission_vision`
--

INSERT INTO `mission_vision` (`id`, `description`, `create_at`, `update_at`) VALUES
(1, 'à¦«à§‡à¦¨à§€ à¦œà§‡à¦²à¦¾à¦° à¦¦à¦¾à¦—à¦¨à¦­à§‚à¦žà¦¾ à¦‰à¦ªà¦œà§‡à¦²à¦¾à¦° à¦¸à§à¦¬à¦¨à¦¾à¦®à¦§à¦¨à§à¦¯ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨ à¦‡à¦•à¦¬à¦¾à¦² à¦®à§‡à¦®à§‹à¦°à¦¿à§Ÿà¦¾à¦² à¦¸à¦°à¦•à¦¾à¦°à¦¿ à¦•à¦²à§‡à¦œà¥¤ à¦à¦‡ à¦à¦²à¦¾à¦•à¦¾à¦° à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦‰à¦šà§à¦š à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦¸à§à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾ à¦•à¦°à¦¾à¦°&nbsp; à¦®à¦¾à¦¨à¦¸à§‡ à¦à¦‡ à¦à¦²à¦¾à¦•à¦¾à¦°à¦‡ à¦•à§ƒà¦¤à¦¿ à¦¸à¦¨à§à¦¤à¦¾à¦¨&nbsp; à¦¬à¦¿à¦¶à¦¿à¦·à§à¦Ÿ&nbsp; à¦¬à§à¦¯à¦¬à¦¸à¦¾à§Ÿà§€ à¦“ à¦¶à¦¿à¦•à§à¦·à¦¾à¦¨à§à¦°à¦¾à¦—à§€ à¦†à¦¬à¦¦à§à¦² à¦†à¦‰à§Ÿà¦¾à¦² à¦®à¦¿à¦¨à§à¦Ÿà§ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾ à¦•à¦°à§‡à¦¨ à¦‡à¦•à¦¬à¦¾à¦² à¦®à§‡à¦®à§‹à¦°à¦¿à§Ÿà¦¾à¦² à¦•à¦²à§‡à¦œà¥¤ à¦¤à¦¾à¦à¦° à¦¸à§à¦¨à§‡à¦¨à¦­à¦¾à¦œà¦¨ à¦›à§‹à¦Ÿ à¦­à¦¾à¦‡ à¦‡à¦•à¦¬à¦¾à¦² à¦¹à§‹à¦¸à§‡à¦¨ à¦¦à§à¦°à¦¾à¦°à§‹à¦—à§à¦¯ à¦•à§à¦¯à¦¾à¦¨à§à¦¸à¦¾à¦°à§‡&nbsp; à¦†à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦¹à§Ÿà§‡ à¦¸à§à¦•à§à¦² à¦œà§€à¦¬à¦¨à§‡à¦° à¦—à¦¨à§à¦¡à¦¿ à¦ªà¦¾à¦° à¦¹à¦“à§Ÿà¦¾à¦° à¦ªà§‚à¦°à§à¦¬à§‡à¦‡ à¦®à§ƒà¦¤à§à¦¯à§ à¦¬à¦°à¦£ à¦•à¦°à§‡à¦¨à¥¤ à¦¤à¦¾à¦° à¦¸à§à¦®à§ƒà¦¤à¦¿à¦•à§‡ à¦…à¦®à¦²à¦¿à¦¨ à¦•à¦°à§‡ à¦°à¦¾à¦–à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¤à¦¿à¦¨à¦¿ à¦à¦‡ à¦•à¦²à§‡à¦œ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾ à¦•à¦°à§‡à¦¨à¥¤ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦²à¦—à§à¦¨ à¦¥à§‡à¦•à§‡à¦‡ à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡à¦° à¦²à¦•à§à¦·à§à¦¯ à¦›à¦¿à¦²à§‹ à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦†à¦²à§‹ à¦›à§œà¦¿à§Ÿà§‡ à¦¦à§‡à¦“à§Ÿà¦¾ à¦à¦¬à¦‚ à¦à¦‡ à¦•à¦¾à¦œà¦Ÿà¦¿ à¦¸à¦ à¦¿à¦• à¦­à¦¾à¦¬à§‡à¦‡ à¦ªà¦¾à¦²à¦¨ à¦•à¦°à§‡ à¦¯à¦¾à¦šà§à¦›à§‡ à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¥¤ à¦—à¦£à¦ªà§à¦°à¦œà¦¾à¦¤à¦¨à§à¦¤à§à¦°à§€ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦¸à¦°à¦•à¦¾à¦°à§‡à¦° à¦®à¦¾à¦¨à¦¨à§€à§Ÿ à¦ªà§à¦°à¦§à¦¾à¦¨à¦®à¦¨à§à¦¤à§à¦°à§€ à¦œà¦¨à¦¨à§‡à¦¤à§à¦°à§€ à¦¶à§‡à¦– à¦¹à¦¾à¦¸à¦¿à¦¨à¦¾à¦° à¦à¦•à¦¾à¦¨à§à¦¤à¦¿à¦• à¦‡à¦šà§à¦›à¦¾ à¦“&nbsp; à¦¸à¦¿à¦¦à§à¦§à¦¾à¦¨à§à¦¤ à¦…à¦¨à§à¦¯à¦¾à§Ÿà§€ à¦—à¦¤ à§¦à§®/à§¦à§®/à§¨à§¦à§§à§® à¦–à§à¦°à¦¿; à¦¤à¦¾à¦°à¦¿à¦–à§‡ à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¦Ÿà¦¿ à¦œà¦¾à¦¤à§€à§Ÿà¦•à¦°à¦£ à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤ à¦à¦Ÿà¦¿ à¦à¦–à¦¨ à¦à¦•à¦Ÿà¦¿ à¦ªà§‚à¦°à§à¦£à¦¾à¦™à§à¦— à¦¸à¦°à¦•à¦¾à¦°à¦¿ à¦•à¦²à§‡à¦œà¥¤ à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡ à¦à¦–à¦¨ à¦à¦•à¦¾à¦¦à¦¶ à¦“ à¦¦à§à¦¬à¦¾à¦¦à¦¶ à¦¶à§à¦°à§‡à¦£à¦¿à¦°&nbsp; à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦®à¦¾à¦¨à¦¬à¦¿à¦• à¦“ à¦¬à§à¦¯à¦¬à¦¸à¦¾à§Ÿ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦à¦¬à¦‚ à¦¬à§à¦¯à¦¬à¦¸à¦¾à§Ÿ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾à¦ªà¦¨à¦¾ à¦“ à¦ªà§à¦°à¦¯à§à¦•à§à¦¤à¦¿ (à¦¬à¦¿,à¦à¦®,à¦Ÿà¦¿) à¦¶à¦¾à¦–à¦¾ à¦šà¦¾à¦²à§ à¦°à§Ÿà§‡à¦›à§‡à¥¤ à¦à¦›à¦¾à§œà¦¾ à¦¸à§à¦¨à¦¾à¦¤à¦• (à¦ªà¦¾à¦¸) à¦¬à¦¿.à¦/ à¦¬à¦¿.à¦à¦¸.à¦à¦¸/ à¦¬à¦¿.à¦¬à¦¿.à¦à¦¸ à¦à¦¬à¦‚ à¦¹à¦¿à¦¸à¦¾à¦¬à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨ à¦“ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾à¦ªà¦¨à¦¾ à¦¬à¦¿à¦·à§Ÿà§‡à¦°&nbsp; à¦¸à§à¦¨à¦¾à¦¤à¦• (à¦¸à¦®à§à¦®à¦¾à¦¨)&nbsp; à¦•à§‹à¦°à§à¦¸ à¦šà¦¾à¦²à§ à¦°à§Ÿà§‡à¦›à§‡à¥¤ à¦à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡ à¦ªà§à¦°à¦¤à¦¿à¦Ÿà¦¿ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€ à¦¸à¦ à¦¿à¦• à¦¬à¦¿à¦¦à§à¦¯à¦¾ à¦…à¦°à§à¦œà¦¨ à¦•à¦°à¦¬à§‡ à¦“ à¦‰à¦¨à§à¦¨à¦¤ à¦¨à§ˆà¦¤à¦¿à¦•à¦¤à¦¾ à¦“ à¦®à§‚à¦²à§à¦¯à¦¬à§‹à¦§ à¦—à¦ à¦¨ à¦•à¦°à§‡ à¦œà¦¾à¦¤à¦¿à¦° à¦œà¦¨à¦• à¦¬à¦™à§à¦—à¦¬à¦¨à§à¦§à§ à¦¶à§‡à¦– à¦®à§à¦œà¦¿à¦¬à§à¦° à¦°à¦¹à¦®à¦¾à¦¨à§‡à¦° à¦¸à§‹à¦¨à¦¾à¦° à¦¬à¦¾à¦‚à¦²à¦¾ à¦—à§œà¦¾à¦° à¦²à¦•à§à¦·à§à¦¯à§‡ à¦¨à¦¿à¦œà§‡à¦•à§‡ à¦¨à¦¿à§Ÿà§‹à¦œà¦¿à¦¤ à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯à§‡ à¦ªà§à¦°à¦¸à§à¦¤à§à¦¤ à¦¹à¦¬à§‡ -à¦à¦‡ à¦²à¦•à§à¦·à§à¦¯à§‡ à¦à¦‡ à¦•à¦²à§‡à¦œà§‡à¦° à¦¬à¦¿à¦œà§à¦ž à¦¶à¦¿à¦•à§à¦·à¦• à¦®à¦¨à§à¦¡à¦²à§€, à¦…à¦«à¦¿à¦¸ à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦à¦¬à¦‚ à¦…à¦«à¦¿à¦¸ à¦¸à¦¹à¦¾à§Ÿà¦•à¦—à¦£ à¦¨à¦¿à¦°à¦²à¦¸à¦­à¦¾à¦¬à§‡ à¦ªà§à¦°à¦šà§‡à¦·à§à¦Ÿà¦¾ à¦šà¦¾à¦²à¦¿à§Ÿà§‡ à¦¯à¦¾à¦šà§à¦›à§‡à¦¨à¥¤ à¦à¦‡ à¦•à¦²à§‡à¦œ à¦¥à§‡à¦•à§‡ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦—à§à¦°à¦¹à¦£ à¦•à¦°à§‡ à¦ªà§à¦°à¦¤à¦¿à¦Ÿà¦¿ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€ à¦¦à§‡à¦¶ à¦“ à¦¦à¦¶à§‡à¦° à¦¸à§‡à¦¬à¦¾à§Ÿ à¦¨à¦¿à¦œà§‡à¦•à§‡ à¦‰à§Žà¦¸à¦°à§à¦— à¦•à¦°à¦¬à§‡ à¦ à¦®à¦¾à¦¨à¦¸à§‡ à¦¤à¦¾à¦¦à§‡à¦°à¦•à§‡ à¦—à¦ à¦¨ à¦•à¦°à¦¾à¦‡ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦à¦•à¦®à¦¾à¦¤à§à¦° à¦²à¦•à§à¦·à§à¦¯ à¦“ à¦‰à¦¦à§à¦¦à§‡à¦¶à§à¦¯ à¥¤ alauddin ontor', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rules_regulation`
--

CREATE TABLE `rules_regulation` (
  `id` int(11) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `upload_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rules_regulation`
--

INSERT INTO `rules_regulation` (`id`, `description`, `create_at`, `upload_at`) VALUES
(1, 'alauddin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE `sub_menu` (
  `id` int(50) NOT NULL,
  `sl` int(255) DEFAULT NULL,
  `main_menu` int(10) NOT NULL,
  `link_names` varchar(255) DEFAULT NULL,
  `route_name` varchar(255) DEFAULT NULL,
  `status` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`id`, `sl`, `main_menu`, `link_names`, `route_name`, `status`) VALUES
(7, 1, 13, 'Create Admin', '', 1),
(8, 2, 13, 'View Admin', '', 1),
(14, 101, 15, 'About Us', '../website_setting/aboutus.php', 1),
(15, 4, 15, 'Mission Vision', '../website_setting/mission_vision.php', 1),
(16, 5, 15, 'History', '../website_setting/history.php', 1),
(17, 6, 15, 'Infrastucture', '../website_setting/infrastucture.php', 1),
(18, 7, 15, 'Rules Regulation', '../website_setting/rules_regulation.php', 1),
(19, 8, 15, 'Exam Rules', '../website_setting/exam_rules.php', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_admin`
--
ALTER TABLE `create_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_rules`
--
ALTER TABLE `exam_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastucture`
--
ALTER TABLE `infrastucture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_menu`
--
ALTER TABLE `main_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_vision`
--
ALTER TABLE `mission_vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules_regulation`
--
ALTER TABLE `rules_regulation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`main_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_admin`
--
ALTER TABLE `create_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_rules`
--
ALTER TABLE `exam_rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infrastucture`
--
ALTER TABLE `infrastucture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_menu`
--
ALTER TABLE `main_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mission_vision`
--
ALTER TABLE `mission_vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rules_regulation`
--
ALTER TABLE `rules_regulation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD CONSTRAINT `test` FOREIGN KEY (`main_menu`) REFERENCES `main_menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
