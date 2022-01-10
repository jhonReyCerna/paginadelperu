drop database if exists `paginadelperu`;
create database `paginadelperu`;
use `paginadelperu`;

create TABLE `selecionados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `edad` varchar(255) NOT NULL,
  `titulos` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)  ;

insert into selecionados (nombre, apellido, edad, titulos, equipo) values ('jhon', 'cerna', '24', '50', 'alianzalima');