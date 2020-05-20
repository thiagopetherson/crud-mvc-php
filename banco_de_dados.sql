CREATE TABLE `contatos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contatos` WRITE;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;

INSERT INTO `contatos` (`id`, `nome`, `email`)
VALUES
	(1,'Suporte B7Web','suporte@b7web.com.br'),
	(5,'Fulano de tal','fulano@hotmail.com'),
	(7,'Paulo Sem Tasso','paulo@yahoo.com.br');
