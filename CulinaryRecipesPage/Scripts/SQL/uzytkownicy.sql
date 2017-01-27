CREATE TABLE IF NOT EXISTS `uzytkownicy` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`login` varchar(255) NOT NULL,
	`haslo` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`rejestracja` int(10) NOT NULL,
	`logowanie` int(10) NOT NULL,
	`ip` varchar(15) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;