DROP TABLE IF EXISTS `#_hello`;

 

CREATE TABLE `#_hello` (

  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,

  `greeting` VARCHAR(25) NOT NULL,

  PRIMARY KEY  (`id`)

)ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

 

INSERT INTO `#_hello`(`greeting`) VALUES ('Hello, World!'), ('Bonjour, Monde!'), ('Ciao, Mondo!');
