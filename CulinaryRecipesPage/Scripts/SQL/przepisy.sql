CREATE TABLE `przepisy` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`nazwa` VARCHAR( 30 ) NOT NULL ,
`data` DATETIME NOT NULL ,
`autor` VARCHAR( 15 ) NOT NULL ,
`tresc` LONGTEXT NOT NULL
) ENGINE = MYISAM ;