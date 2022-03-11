-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for jobs
CREATE DATABASE IF NOT EXISTS `jobs` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `jobs`;

-- Dumping structure for table jobs.jobs_list
CREATE TABLE IF NOT EXISTS `jobs_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `company` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `short_desc` varchar(50) NOT NULL,
  `full_desc` varchar(250) NOT NULL,
  `job_nature` varchar(20) NOT NULL,
  `salary` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table jobs.jobs_list: ~2 rows (approximately)
/*!40000 ALTER TABLE `jobs_list` DISABLE KEYS */;
INSERT INTO `jobs_list` (`id`, `title`, `company`, `location`, `short_desc`, `full_desc`, `job_nature`, `salary`, `status`) VALUES
	(1, 'Software Engineer', 'Infosys', 'Hyderabad', 'Lorem Ipsum is simply dummy text of the printing a', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It h', 'Contract', '11,000 - 20,000', 1),
	(2, 'Project Manager', 'IBM', 'Mumbai', 'Lorem Ipsum is simply dummy text of the printing a', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It h', 'On Role', '31,000 - 40,000', 1);
/*!40000 ALTER TABLE `jobs_list` ENABLE KEYS */;

-- Dumping structure for table jobs.job_applications
CREATE TABLE IF NOT EXISTS `job_applications` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `id_job` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table jobs.job_applications: ~2 rows (approximately)
/*!40000 ALTER TABLE `job_applications` DISABLE KEYS */;
INSERT INTO `job_applications` (`id`, `id_user`, `id_job`, `status`) VALUES
	(1, 2, 1, 1),
	(2, 2, 2, 1);
/*!40000 ALTER TABLE `job_applications` ENABLE KEYS */;

-- Dumping structure for table jobs.session
CREATE TABLE IF NOT EXISTS `session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  `user_agent` varchar(250) DEFAULT NULL,
  `deleted` bit(1) NOT NULL,
  KEY `session_timestamp` (`timestamp`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table jobs.session: ~39 rows (approximately)
/*!40000 ALTER TABLE `session` DISABLE KEYS */;
INSERT INTO `session` (`id`, `ip_address`, `timestamp`, `data`, `user_agent`, `deleted`) VALUES
	('00euf7l6i8jig26l1vutbj52jo2jke46', '::1', 1646930761, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363933303633363b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c4e3b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'1'),
	('h0jil8dcp8vrt7cuu02202i5hp1r1ogg', '::1', 1646930845, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363933303736333b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c4e3b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'1'),
	('s1dtqmucpot2ah6529mttih27ki9120c', '::1', 1646930850, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363933303834373b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'1'),
	('7caps4i38tbd0aqn318upnre5dlggktv', '::1', 1646931880, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363933313838303b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('q1sh01igigp1ksk5v5kd0fdru9ac88aj', '::1', 1646932032, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363933313838303b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'1'),
	('hn04lspnl29hbbrgnrgqsnc51cr8nqqd', '::1', 1646932648, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363933323634383b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('4l70b3m9em3tmlqt5qrim6sr1iaguflq', '::1', 1646932824, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363933323634383b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('a1vvjfiigv71adgm3n6ihjp0b7frnr0t', '::1', 1646943076, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934333037363b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('vk5mu1rg67qd699pq9iae3mfs0vgn8r5', '::1', 1646943498, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934333439383b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('vsg581jvqd61v7epo1arm42b09mm7svf', '::1', 1646943799, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934333739393b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('e5qsoes01u22k67rtjb88vr681pbh8df', '::1', 1646944121, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934343132313b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('3k4ajincaoe5dil1p513r6ldddncdsi5', '::1', 1646944441, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934343434313b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('9e1ganmihtj7gpcpu1hltimn06811akj', '::1', 1646944859, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934343835393b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('4sea8filrqcvkhsnja2lo7vi71gkn9k4', '::1', 1646945418, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934353431383b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('315n0uuljjfmf42u7cme4o3oa521qsoa', '::1', 1646945743, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934353734333b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('pha227dahbnsudna5d3f0n958o0eloc9', '::1', 1646946051, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934363035313b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('4pi7bv4dhl51ju71qcnpc6rfbrt1m042', '::1', 1646946523, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934363532333b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('v7gg7c5n9lh0gp5co68tugl6faomo2tr', '::1', 1646946958, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934363935383b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('pl4a983qic7nrrhjkon0mqf2ga4ppbd0', '::1', 1646947203, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934363935383b7573657269647c733a313a2231223b757365726e616d657c733a353a2261646d696e223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'1'),
	('u3todq517nnaoukqbio1flj45paeojp5', '::1', 1646947654, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934373635343b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('3ju96umjss5jff5e1t83np2u7bb0t0gk', '::1', 1646947494, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934373230353b7573657269647c733a313a2231223b757365726e616d657c733a343a2272656331223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'1'),
	('rdl7l7be574c19tqtbqmk6l1moeku1tt', '::1', 1646947830, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934373833303b7573657269647c733a313a2231223b757365726e616d657c733a343a2272656331223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('treookmddg7u0htc92g1fh2lcgglplr0', '::1', 1646949807, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934393830373b7573657269647c733a313a2232223b757365726e616d657c733a353a227573657231223b726f6c657c733a313a2232223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('fkakipd49kfrl7l4doirddevc2qgg4un', '::1', 1646949720, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363934393732303b7573657269647c733a313a2231223b757365726e616d657c733a343a2272656331223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('4h1cmjivoa2ltcjhn5cqtpg29qne87aa', '::1', 1646951577, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935313537373b7573657269647c733a313a2231223b757365726e616d657c733a343a2272656331223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('b8uodoranhe9obmrettocj6ecvpjk6jk', '::1', 1646950218, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935303231383b7573657269647c733a313a2232223b757365726e616d657c733a353a227573657231223b726f6c657c733a313a2232223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('pl9egf1f5pqe0hf25e8iu2taqh82esp6', '::1', 1646950527, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935303532373b7573657269647c733a313a2232223b757365726e616d657c733a353a227573657231223b726f6c657c733a313a2232223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('j4d9m2oaphb1hb661abvk6u2jslb0rm3', '::1', 1646950993, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935303939333b7573657269647c733a313a2232223b757365726e616d657c733a353a227573657231223b726f6c657c733a313a2232223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('915fi3v78idc5loaus94a112l9dimho7', '::1', 1646951305, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935313330353b7573657269647c733a313a2232223b757365726e616d657c733a353a227573657231223b726f6c657c733a313a2232223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('hsi0dtm6jbkva0jd1lv6kc98jic39bcs', '::1', 1646951498, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935313330353b7573657269647c733a313a2232223b757365726e616d657c733a353a227573657231223b726f6c657c733a313a2232223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'1'),
	('gbd5fil0ilg30il47cv4cvlqp98aksin', '::1', 1646951679, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935313530323b7573657269647c733a313a2232223b757365726e616d657c733a353a227573657231223b726f6c657c733a313a2232223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'1'),
	('pqo08a1065ma0l9th80uc2tk3h5slkqd', '::1', 1646951632, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935313537373b7573657269647c733a313a2231223b757365726e616d657c733a343a2272656331223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'1'),
	('tefiqcl01cav9nuji35gt51h25q8ld25', '::1', 1646951985, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935313938353b7573657269647c733a313a2232223b757365726e616d657c733a353a227573657231223b726f6c657c733a313a2232223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('162ou9rii13tplb8ahp6h5aidsg62583', '::1', 1646952034, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935323033343b7573657269647c733a313a2231223b757365726e616d657c733a343a2272656331223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('j1bk946c41ufs03511cp41gji2760nh8', '::1', 1646952179, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935313938353b7573657269647c733a313a2232223b757365726e616d657c733a353a227573657231223b726f6c657c733a313a2232223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'1'),
	('gnb821cpualfhjjih4nf4vjaoak3qfos', '::1', 1646952092, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935323033343b7573657269647c733a313a2231223b757365726e616d657c733a343a2272656331223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'1'),
	('tnbnvgjgmej7d15rb7fjgs25publegrr', '::1', 1646955227, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935353232373b7573657269647c733a313a2231223b757365726e616d657c733a343a2272656331223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('vu2pl2ioiieptoui1n13d9v4691o7a9e', '::1', 1646952225, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935323138333b7573657269647c733a313a2232223b757365726e616d657c733a353a227573657231223b726f6c657c733a313a2232223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0'),
	('5k6d5g1irafunibiqff3qstvrhm6ghe2', '::1', 1646955289, _binary 0x5f5f63695f6c6173745f726567656e65726174657c693a313634363935353232373b7573657269647c733a313a2231223b757365726e616d657c733a343a2272656331223b726f6c657c733a313a2231223b, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', b'0');
/*!40000 ALTER TABLE `session` ENABLE KEYS */;

-- Dumping structure for table jobs.users_details
CREATE TABLE IF NOT EXISTS `users_details` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_role` int(10) unsigned NOT NULL DEFAULT 1,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created_date` int(11) NOT NULL,
  `created_by` int(10) NOT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `updaed_by` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`uid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table jobs.users_details: ~2 rows (approximately)
/*!40000 ALTER TABLE `users_details` DISABLE KEYS */;
INSERT INTO `users_details` (`uid`, `id_role`, `username`, `password`, `email`, `created_date`, `created_by`, `updated_date`, `updaed_by`, `status`) VALUES
	(1, 1, 'rec1', 'E10ADC3949BA59ABBE56E057F20F883E', 'admin@admin.com', 2147483647, 0, NULL, NULL, 1),
	(2, 2, 'user1', 'E10ADC3949BA59ABBE56E057F20F883E', 'admin@admin.com', 2147483647, 0, NULL, NULL, 1);
/*!40000 ALTER TABLE `users_details` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;