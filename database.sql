CREATE TABLE IF NOT EXISTS `users` (
  `id` int(19) NOT NULL AUTO_INCREMENT,
  `pass` varchar(50) NOT NULL,
  `email` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `avatar` varchar(256) NOT NULL, 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;