SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `alumno` (
  `cod_estudiante` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `alumno` (`cod_estudiante`, `dni`, `nombres`, `apellidos`) VALUES
(101, 75854549, 'Juan Carlos', 'Herrera Sanches'),
(103, 75854551, 'Jimena', 'Sandobal Gutierre'),
(105, 75854553, 'jvh turoriales', 'suscribete y dale lik');
COMMIT;

