-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Feb 2015 um 15:34
-- Server Version: 5.6.20
-- PHP-Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `codesnippets`
--
CREATE DATABASE IF NOT EXISTS `codesnippets` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `codesnippets`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `codelanguage` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `categories`
--

INSERT INTO `categories` (`id`, `codelanguage`, `description`, `created`, `modified`) VALUES
(1, 'PHP', 'Code for PHP >= Ver. 5.x', '2015-02-27 12:11:59', '2015-02-27 12:11:59');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `phinxlog`
--

DROP TABLE IF EXISTS `phinxlog`;
CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `start_time`, `end_time`) VALUES
(20150227104313, '2015-02-27 11:01:05', '2015-02-27 11:01:06');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `snippets`
--

DROP TABLE IF EXISTS `snippets`;
CREATE TABLE IF NOT EXISTS `snippets` (
`id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `snippet` text,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `snippets`
--

INSERT INTO `snippets` (`id`, `subcategory_id`, `name`, `snippet`, `created`, `modified`) VALUES
(1, 2, '[C] - AppController', 'use App\\Controller\\AppController;\r\n\r\nclass CategoriesController extends AppController{\r\n    public function index() {\r\n    }\r\n}', '2015-02-27 13:06:14', '2015-02-27 13:06:14');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE IF NOT EXISTS `subcategories` (
`id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory`, `description`, `created`, `modified`) VALUES
(1, 1, 'CakePHP 2.x', 'Version 2.x', '2015-02-27 12:34:06', '2015-02-27 12:34:06'),
(2, 1, 'CakePHP 3.x', 'Version 3.x', '2015-02-27 12:34:29', '2015-02-27 12:34:29'),
(3, 1, 'Core', 'PHP - Core >= Ver. 5.x', '2015-02-27 12:57:21', '2015-02-27 12:57:21'),
(4, 1, 'Zend', 'ZendFramework Version2', '2015-02-27 13:02:31', '2015-02-27 14:16:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snippets`
--
ALTER TABLE `snippets`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `snippets`
--
ALTER TABLE `snippets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
