CREATE TABLE IF NOT EXISTS `dow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last` float NOT NULL,
  `open` float NOT NULL,
  `previous` float NOT NULL,
  `high` float NOT NULL,
  `low` float NOT NULL,
  `volume` float NOT NULL,
  `change` float NOT NULL,
  `percent` float NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `gas`
--

INSERT INTO `dow` (`id`, `last`, `open`, `previous`, `high`, `low`, `volume`, `change`, `percent`, `date`)
VALUES
	(1,52.44,53.05,53.01,53.17,52.27,440031,-0.57,-1.08,'2017-01-13 03:15:52');
-- --------------------------------------------------------

