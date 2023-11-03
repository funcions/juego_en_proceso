CREATE DATABASE registro_web_oficial;
USE registro_web_oficial;

CREATE TABLE `persona` (
  `id_persona` int AUTO_INCREMENT PRIMARY KEY,
  `nombre1` varchar(120),
  `nombre2` varchar(120),
  `apellido1` varchar(120),
  `apellido2` varchar(120),
  `documento` varchar(120)
);