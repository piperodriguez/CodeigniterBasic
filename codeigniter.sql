CREATE TABLE IF NOT EXISTS `persona` (
  `id_persona` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `id` int(200) NOT NULL,
  PRIMARY KEY (`id_persona`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB;


ALTER TABLE persona
ADD CONSTRAINT constraint_user_persona
FOREIGN KEY (id)
REFERENCES user (id);