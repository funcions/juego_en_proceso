-- Crear la base de datos y seleccionarla
CREATE DATABASE game_data_base;
USE game_data_base;

-- Crear la tabla 'login'
CREATE TABLE `login` (
  `id_login` int AUTO_INCREMENT PRIMARY KEY,
  `usuario` varchar(120),
  `password` varchar(120),
  `email` varchar(120)
);

-- Crear la tabla 'anagrama' con una clave foránea que referencia a 'login'
CREATE TABLE `anagrama` (
  `id_anagrama` int AUTO_INCREMENT PRIMARY KEY,
  `id_usuario` int,
  `score` int,
  FOREIGN KEY (`id_usuario`) REFERENCES `login`(`id_login`)
);