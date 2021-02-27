-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ojt
CREATE DATABASE IF NOT EXISTS `ojt` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ojt`;

-- Dumping structure for table ojt.answer_soft_skills
CREATE TABLE IF NOT EXISTS `answer_soft_skills` (
  `answer_id_soft` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `Problem` double NOT NULL,
  `Interpersonal` double NOT NULL,
  `English` double NOT NULL,
  `ICT` double NOT NULL,
  `Personal_Org` double NOT NULL,
  `Leadership` double NOT NULL,
  `Communication` double NOT NULL,
  PRIMARY KEY (`answer_id_soft`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table ojt.answer_soft_skills: ~2 rows (approximately)
/*!40000 ALTER TABLE `answer_soft_skills` DISABLE KEYS */;
INSERT INTO `answer_soft_skills` (`answer_id_soft`, `user_id`, `Problem`, `Interpersonal`, `English`, `ICT`, `Personal_Org`, `Leadership`, `Communication`) VALUES
	(1, 2, 0.45, 0.54, 0.77, 0.76, 0.71, 0.64, 0.8),
	(2, 3, 0.58, 0.78, 0.67, 0.44, 0.43, 0.4, 0.47),
	(3, 4, 0.66, 0.84, 0.7, 0.96, 0.91, 0.88, 0.8);
/*!40000 ALTER TABLE `answer_soft_skills` ENABLE KEYS */;

-- Dumping structure for table ojt.answer_technical_skills
CREATE TABLE IF NOT EXISTS `answer_technical_skills` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `databaseSkills` int(11) DEFAULT NULL,
  `webDevelopmentSkills` int(11) DEFAULT NULL,
  `programmingSkills` int(11) DEFAULT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table ojt.answer_technical_skills: ~2 rows (approximately)
/*!40000 ALTER TABLE `answer_technical_skills` DISABLE KEYS */;
INSERT INTO `answer_technical_skills` (`answer_id`, `user_id`, `databaseSkills`, `webDevelopmentSkills`, `programmingSkills`) VALUES
	(1, 2, 2, 5, 4),
	(2, 3, 5, 2, 5),
	(3, 4, 5, 3, 4);
/*!40000 ALTER TABLE `answer_technical_skills` ENABLE KEYS */;

-- Dumping structure for table ojt.soft_skills_graph_data
CREATE TABLE IF NOT EXISTS `soft_skills_graph_data` (
  `GID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `prbGraph` float NOT NULL,
  `interpersonalGraph` float NOT NULL,
  `engGraph` float NOT NULL,
  `ICTGraph` float NOT NULL,
  `orgGraph` float NOT NULL,
  `leadGraph` float NOT NULL,
  `commGraph` float NOT NULL,
  PRIMARY KEY (`GID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table ojt.soft_skills_graph_data: ~2 rows (approximately)
/*!40000 ALTER TABLE `soft_skills_graph_data` DISABLE KEYS */;
INSERT INTO `soft_skills_graph_data` (`GID`, `user_id`, `prbGraph`, `interpersonalGraph`, `engGraph`, `ICTGraph`, `orgGraph`, `leadGraph`, `commGraph`) VALUES
	(1, 2, 2.3, 2.7, 3.8, 3.8, 3.6, 3.2, 4),
	(2, 3, 2.9, 3.9, 3.3, 2.2, 2.1, 2, 2.3),
	(3, 4, 3.3, 4.2, 3.5, 4.8, 4.6, 4.4, 4);
/*!40000 ALTER TABLE `soft_skills_graph_data` ENABLE KEYS */;

-- Dumping structure for table ojt.trainingdata
CREATE TABLE IF NOT EXISTS `trainingdata` (
  `TID` int(11) NOT NULL AUTO_INCREMENT,
  `CS` int(11) NOT NULL,
  `JAVA` int(11) NOT NULL,
  `PYTHON` int(11) NOT NULL,
  `SWIFT` int(11) NOT NULL,
  `VBNET` int(11) NOT NULL,
  `JS` int(11) NOT NULL,
  `JQ` int(11) NOT NULL,
  `PHP` int(11) NOT NULL,
  `HTML5` int(11) NOT NULL,
  `CSS` int(11) NOT NULL,
  `Bootstrap` int(11) NOT NULL,
  `SQLS` int(11) NOT NULL,
  `NOSQLS` int(11) NOT NULL,
  `ASP` int(11) NOT NULL,
  `Codeigniter` int(11) NOT NULL,
  `Laravel` int(11) NOT NULL,
  `Wordpress` int(11) NOT NULL,
  `Typescript` int(11) NOT NULL,
  `LAN` int(11) NOT NULL,
  `LINUX` int(11) NOT NULL,
  `WINDOWS` int(11) NOT NULL,
  `IOS` int(11) NOT NULL,
  `ANDROID` int(11) NOT NULL,
  `Apache` int(11) NOT NULL,
  `MS_Server` int(11) NOT NULL,
  `CLASS` text NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- Dumping data for table ojt.trainingdata: ~50 rows (approximately)
/*!40000 ALTER TABLE `trainingdata` DISABLE KEYS */;
INSERT INTO `trainingdata` (`TID`, `CS`, `JAVA`, `PYTHON`, `SWIFT`, `VBNET`, `JS`, `JQ`, `PHP`, `HTML5`, `CSS`, `Bootstrap`, `SQLS`, `NOSQLS`, `ASP`, `Codeigniter`, `Laravel`, `Wordpress`, `Typescript`, `LAN`, `LINUX`, `WINDOWS`, `IOS`, `ANDROID`, `Apache`, `MS_Server`, `CLASS`) VALUES
	(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 'Data Analyst(Alorica)'),
	(2, 1, 0, 0, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 'ASP.NET Developer(Alorica)'),
	(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 'IT Desktop Support(Alorica)'),
	(4, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(CollarFinder Management Consultancy Inc.)'),
	(5, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(Optimizex Inc.)'),
	(6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 1, 0, 'System Administrator(Optimizex Inc.)'),
	(7, 1, 1, 0, 0, 0, 0, 1, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(dotPH)'),
	(8, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(Dr. Carl E. Balita Review Center)'),
	(9, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(ULC INC./HUOBI PHILIPPINES)'),
	(10, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(ZIMI Tech Inc.)'),
	(11, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 'Front End Web Developer(Cerely Holdings)'),
	(12, 1, 0, 0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 'Junior Web Developer(KMC Savills Inc)'),
	(13, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(DC Group of Companies)'),
	(14, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Front End Web Developer(Iprofessional)'),
	(15, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Front End Web Developer(Consultics)'),
	(16, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Front End Web Developer(Controtek Solutions Inc.)'),
	(17, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(Hexamatics Consulting Inc)'),
	(18, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(Global Quest Consulting Group Inc.)'),
	(19, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 'Wordpress Developer(STAFFVIRTUAL)'),
	(20, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Web and Application Developer(PT&T)'),
	(21, 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 'Web Developer(Phillife Financial Assurance)'),
	(22, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'UI Developer(eTeam)'),
	(23, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Front End Developer(SO CAMERAS)'),
	(24, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 'Python Developer(Eastvantage Business Solutions)'),
	(25, 1, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Software Developer(ACC Technology Consulting Inc.)'),
	(26, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Python Developer(Pointwest Technologies)'),
	(27, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Front End Web Developer(Goetu Infotech Solutions)'),
	(28, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Front End Web Developer(BDI Inc.)'),
	(29, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 'Web Developer(Black Arrow Express)'),
	(30, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Front End Web Developer(ThinkBIT Solutions)'),
	(31, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(Crossworld Marine Services Inc.)'),
	(32, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'PHP Developer(Teligent Systems Inc.)'),
	(33, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(WeWorx Innovated Solutions)'),
	(34, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Front End Developer(GOLC Learning Center)'),
	(35, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Front End Developer(Optimind Technology Solutions)'),
	(36, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 'Web Developer(Tri7 Solutions Inc.)'),
	(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 'System Administrator(Zybi Tech Inc.)'),
	(38, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 'System Administrator(Pay PhilExchange Inc.)'),
	(39, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 'Android Developer(Pointwest Technologies)'),
	(40, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 'iOS Developer(Pointwest Technologies)'),
	(41, 0, 0, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 'Junior Programmer(DIRECTO UNLIMITED PHILIPPINES INC)'),
	(42, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Junior Programmer(Manly Plastics Inc.)'),
	(43, 1, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Programmer(D.M. Consunji Inc)'),
	(44, 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Software Developer(Digits Trading Corp.)'),
	(45, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 'Software Developer(Trends Group Inc.)'),
	(46, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Junior Software Developer(Electronic Commerce Payments Inc.)'),
	(47, 1, 0, 1, 0, 0, 1, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Junior Programmer(Dragonpay Corporation)'),
	(48, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'Programmer(Filinvest)'),
	(49, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1, 1, 0, 0, 1, 0, 'Junior Programmer(Mighty Lynx Solutions Inc)'),
	(50, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 'JUNIOR PROGRAMMER(Airspeed International Corp)');
/*!40000 ALTER TABLE `trainingdata` ENABLE KEYS */;

-- Dumping structure for table ojt.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table ojt.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `username`, `password`, `level`, `date_created`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, '2021-02-26'),
	(2, 'juan', '25f9e794323b453885f5181f1b624d0b', 2, '2021-02-27'),
	(3, 'pedro', '81dc9bdb52d04dc20036dbd8313ed055', 2, '2021-02-27'),
	(4, 'erza', '25d55ad283aa400af464c76d713c07ad', 2, '2021-02-27');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table ojt.user_info
CREATE TABLE IF NOT EXISTS `user_info` (
  `info_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `mname` text,
  `lname` text NOT NULL,
  `course` text NOT NULL,
  `gender` text NOT NULL,
  `status` text,
  `academic_year` text,
  `date_created` date NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table ojt.user_info: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` (`info_id`, `user_id`, `fname`, `mname`, `lname`, `course`, `gender`, `status`, `academic_year`, `date_created`) VALUES
	(1, 2, 'Juan', 'D', 'Dela Cruz', 'BSCS', 'Male', 'Done', '2009-2010', '2021-02-27'),
	(2, 3, 'Pedro', 'N', 'Smith', 'BSIT', 'Male', 'Done', '2009-2010', '2021-02-27'),
	(3, 4, 'Erza', 'A', 'Scarlet', 'BSIT', 'Female', 'Done', '2009-2010', '2021-02-27');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
