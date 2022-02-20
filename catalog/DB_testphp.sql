
--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10000 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`,  `price`) VALUES
(7582, 'LCD iPod Touch ',  'Описание 1', 100),
(7583, 'Len+Touchscreen iPod Touch ', 'Описание 2', 120),
(8833, 'Аккумулятор iPod Touch 1G ', 'Описание 3', 730),
(8834, 'Аккумулятор iPod Touch 2G ', 'Описание 4', 770),
(8935, 'Len+Touchscreen iPod Touch 2G', 'Описание 5', 150),
(8989, 'LCD iPod Touch 2G', 'Описание 6', 120),
(9087, 'Buzzer iPod Nano 5G', 'Описание 7', 270),
(9352, 'LCD iPod Nano 4G', 'Описание 8', 140),
(9353, 'Len iPod Nano 4G', 'Описание 9', 530),
(9508, 'Аккумулятор iPod Nano 2G', 'Описание 10', 70);
