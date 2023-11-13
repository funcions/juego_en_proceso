-- nombre de la base de datos: login_Web
CREATE DATABASE game_data_base;
USE game_data_base;

CREATE TABLE `login` (
  `id_login` int AUTO_INCREMENT PRIMARY KEY,
  `usuario` varchar(120),
  `password` varchar(120),
  `email` varchar(120) 
  
);

CREATE TABLE `anagrama` (
  `id_anagrama` int AUTO_INCREMENT PRIMARY KEY,
  `id_usuario` int,
		`score` int

);