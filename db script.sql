CREATE DATABASE IF NOT EXISTS `celadon` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `celadon`;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`username`, `password`) VALUES
('admin', '123');
