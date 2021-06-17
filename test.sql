-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2021 a las 20:36:39
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `PS_MOSTRAR_RETROALIMENTACION` ()  SELECT *from docente_retroalimentacion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_ACTIVO_REFLECTIVO` ()  SELECT * FROM tblrespuestas WHERE codestudiante='71444762'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_BUSQUEDA_ESTUDIANTES` ()  SELECT * FROM tblconsulta WHERE codestudiante NOT LIKE '' ORDER By codestudiante LIMIT 25$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_BUSQUEDA_SALON` ()  SELECT * FROM tblconsultasalon WHERE NRC NOT LIKE '' ORDER By NRC LIMIT 25$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_MOSTRAR_QUESTIONS` ()  SELECT idpregunta, enunciado , opcion1 , opcion2, ROW_NUMBER() OVER(ORDER BY RAND()) FROM tblpreguntas WHERE idpregunta ORDER BY idpregunta$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_MOSTRAR_RESULTADO` ()  SELECT * FROM tblresultados ORDER BY idresultado DESC LIMIT 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_REPORTE_AULA_AR` (IN `estiloC` VARCHAR(15), IN `NRCC` INT(6))  SELECT COUNT(activoreflexivo) AS NESTUDIANTES FROM `tblresultados` WHERE codestudiante IN(SELECT codestudiante FROM `tblconsulta` WHERE NRC=NRCC) AND activoreflexivo=estiloC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_REPORTE_AULA_SG` (IN `estiloC` VARCHAR(15), IN `NRCC` INT(6))  SELECT COUNT(secuencialglobal) AS NESTUDIANTES FROM `tblresultados` WHERE codestudiante IN(SELECT codestudiante FROM `tblconsulta` WHERE NRC=NRCC) AND secuencialglobal=estiloC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_REPORTE_AULA_SI` (IN `estiloC` VARCHAR(15), IN `NRCC` INT(6))  SELECT COUNT(sensorialintuitivo) AS NESTUDIANTES FROM `tblresultados` WHERE codestudiante IN(SELECT codestudiante FROM `tblconsulta` WHERE NRC=NRCC) AND sensorialintuitivo=estiloC$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_REPORTE_AULA_VV` (IN `estiloC` VARCHAR(15), IN `NRCC` INT(6))  SELECT COUNT(visualverbal) AS NESTUDIANTES FROM `tblresultados` WHERE codestudiante IN(SELECT codestudiante FROM `tblconsulta` WHERE NRC=NRCC) AND visualverbal=estiloC$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_retroalimentacion`
--

CREATE TABLE `docente_retroalimentacion` (
  `tipo_aprendizaje` text NOT NULL,
  `retreoalimentacion` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente_retroalimentacion`
--

INSERT INTO `docente_retroalimentacion` (`tipo_aprendizaje`, `retreoalimentacion`) VALUES
('Visual', 'Sucede cuando uno tiende a pensar en imágenes y a relacionarlas con ideas y conceptos, por ejemplo, cuando se recurre a mapas conceptuales. Este sistema tiende a ser el sistema dominante en la mayoría de personas.'),
('Sensorial', 'Le permite al lector conocer acerca de la experiencia que trabaja los sistemas sensoriales, facilitando una mejor percepcion , al exponer los sentidos a la luz, sonido, sabores, olores, tacto y movimiento entre otros.'),
('Activo', 'Alumnos con estilo activo son: novedoso, participativo, lanzado, protagonista, conversador, divertido, líder, innovador, creativo, novedoso, inventor, deseoso de aprender, solucionador de problemas, vividor de la experiencia, vital, generador de ideas, competitivo, voluntarioso, chocante, aventurero y renovador.'),
('Reflectivo', 'A los reflexivos les gusta considerar las experiencias y observarlas desde diferentes perspectivas. Recogen datos, analizándolos con detenimiento antes de llegar a alguna conclusión. Su filosofía consiste en ser prudente, no dejar piedra sin mover, mirar bien antes de pasar.'),
('Intutivo', 'Los estudiantes intuitivos prefieren a menudo el descubrir posibilidades y relaciones. · Los estudiantes intuitivos les gusta la innovación y tienen una aversión a la repetición. Para ser eficaz como estudiante y resolver un problema, se necesita poder funcionar de esta manera.'),
('Verbal', 'Aprendizaje verbal es el proceso por el cual se aprende a responder de forma apropiada a los mensajes verbales. Requiere la emisión de una respuesta hablada o conductual ante un material verbal.'),
('Global', 'Integral en lo relativo a los contenidos y a los metodos. Se centra en el aprendizaje participativo, en la acción y la adquisición de competencias para que las personas puedan orientarse y llevar una vida responsable.'),
('Secuencial', 'Es la capacidad de calcular, cuantificar y de llevar a cabo operaciones matemáticas completa, nos permite percibir las relaciones, conexiones  y utilizar el pensamiento abstracto y simbólico. Habilidades de razonamiento secuencial y los patrones de pensamiento inductivo y deductivo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblconsulta`
--

CREATE TABLE `tblconsulta` (
  `codestudiante` int(8) NOT NULL,
  `nombreest` varchar(80) NOT NULL,
  `NRC` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblconsulta`
--

INSERT INTO `tblconsulta` (`codestudiante`, `nombreest`, `NRC`) VALUES
(71444762, 'Delgadillo Lazaro Tania', 8555),
(72889436, 'Vilca Cumbrera Gabriela', 8555),
(72969241, 'Espiritu Campos Juan Carlos', 8549),
(72969242, 'Espiritu Campos Alejadro', 8549),
(76927894, 'Ubaldo Porras Enrique', 8555);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblconsultasalon`
--

CREATE TABLE `tblconsultasalon` (
  `NRC` int(8) NOT NULL,
  `Nombreasignatura` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblconsultasalon`
--

INSERT INTO `tblconsultasalon` (`NRC`, `Nombreasignatura`) VALUES
(8549, 'DESARROLLO DE SOLUCIONES MÓVILES '),
(8555, 'TALLER DE PROYECTOS DE INGENIERÍA I '),
(9588, 'AUDITORÍA DE SISTEMAS '),
(12906, 'TALLER DE INVESTIGACIÓN I ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblestudiante`
--

CREATE TABLE `tblestudiante` (
  `CodEstudiante` int(8) NOT NULL,
  `ApellidosNombres` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblestudiante`
--

INSERT INTO `tblestudiante` (`CodEstudiante`, `ApellidosNombres`) VALUES
(72889436, 'VILCA CUMBRERA GABRIELA MAYTE'),
(78945612, 'ALONSO BECERRA JOSE'),
(76887472, 'BERNABE CASANOVA FRANCISCO CESAR'),
(71258465, 'CACERES CONTRERAS MARIA DEL MAR '),
(74445725, 'CUETO AVELLANEDA RAFAEL'),
(73225874, 'DIAZ SEGURA MARIA BELEN'),
(78789578, 'FERNANDEZ LOPEZ MARIA DOLORES'),
(71458596, 'FERNANDEZ SEGUIN HUGO'),
(79638547, 'GALVEZ IBARRA ALICIA'),
(71449783, 'GARCIA FERNANDEZ MARIA MERCEDES'),
(73558747, 'GODOY GARCIA JOSE EULOGIO '),
(78457813, 'GONZÁLEZ DÍAZ	ROCIO'),
(78475871, 'GONZALEZ MANZANO CRISTINA MARIA'),
(77897423, 'GONZALEZ NAVAS JORGE'),
(68745230, 'IGLESIAS PASTOR FRANCISCO JAVIER '),
(66002145, 'LATORRE CUEVAS FRANCISCO JAVIER'),
(78997400, 'LOPEZ GARCIA CRISTINA LUCIA'),
(74112500, 'LORENTE MESAS RAFAEL '),
(78978012, 'MAGAÑA HERNANDEZ LUIS '),
(78227452, 'MANZANO RAMOS JESUS FRANK'),
(70289752, 'MARIN SANCHEZ JOSE MARIA '),
(69875241, 'MEDINA DELGAGO FRANCISCO JAVIER '),
(63258741, 'MORALES GARCIA JUAN JOSE '),
(78968712, 'MORALES SANCHEZ BELINDA'),
(70142587, 'MORALES SANCHEZ MARIA JESUS'),
(70889710, 'ORTEGA CASERO ANA '),
(78475970, 'TORTOSA MARTINEZ ALVARO '),
(70114963, 'VAZQUEZ SANCHEZ JAVIER '),
(77889544, 'VICENTE CASTILLO VANESA'),
(71203652, 'SANCHEZ RAMOS JOSE MARIA '),
(72336589, 'GARCIA CRESPO MARIA DEL CARMEN ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpreguntas`
--

CREATE TABLE `tblpreguntas` (
  `idpregunta` int(2) NOT NULL,
  `enunciado` varchar(200) NOT NULL,
  `opcion1` varchar(200) NOT NULL,
  `opcion2` varchar(200) NOT NULL,
  `tipo_pregunta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblpreguntas`
--

INSERT INTO `tblpreguntas` (`idpregunta`, `enunciado`, `opcion1`, `opcion2`, `tipo_pregunta`) VALUES
(1, 'Entiendo mejor algo:', 'Si lo practico.', 'Si pienso en ello.', 'Act-Ref'),
(2, 'Me considero:', 'Realista.', 'Innovador.', 'Sen-Int'),
(3, 'Cuando pienso acerca de lo que hice ayer, es más probable que lo haga sobre la base de:', 'Una imagen.', 'Palabras.', 'Vis-Ver'),
(4, 'Tengo tendencia a:', 'Entender los detalles de un tema pero no ver claramente su estructura completa.', 'Entender la estructura completa pero no ver claramente los detalles.', 'Sec-Glo'),
(5, 'Cuando estoy aprendiendo algo nuevo, me ayuda:', 'Hablar de ello.', 'Pensar en ello.', 'Act-Ref'),
(6, 'Si yo fuera profesor, yo preferiría dar un curso:', 'Que trate sobre hechos y situaciones reales de la vida.', 'Que trate con ideas y teorías.', 'Sen-Int'),
(7, 'Prefiero obtener información nueva de:', 'Imágenes, diagramas, gráficas o mapas.', 'Instrucciones escritas o información verbal.', 'Vis-Ver'),
(8, 'Una vez que entiendo:', 'Todas las partes, entiendo el total.', 'El total de algo, entiendo como encajan sus partes.', 'Sec-Glo'),
(9, 'En un grupo de estudio que trabaja con un material difícil, es más probable que:', 'Participe y contribuya con ideas.', 'No participe y solo escuche.', 'Act-Ref'),
(10, 'Es más fácil para mí:', 'Aprender hechos.', 'Aprender conceptos.', 'Sen-Int'),
(11, 'En un libro con muchas imágenes y gráficas es más probable que:', 'Revise cuidadosamente las imágenes y las gráficas.', 'Me concentre en el texto escrito.', 'Vis-Ver'),
(12, 'Cuando resuelvo problemas de matemáticas:', 'Generalmente trabajo sobre las soluciones con un paso a la vez.', 'Frecuentemente sé cuales son las soluciones, pero luego tengo dificultad  para imaginarme los pasos para llegar a ellas.', 'Sec-Glo'),
(13, 'En las clases a las que he asistido:', 'He llegado a saber como son muchos de los estudiantes.', 'Raramente he llegado a saber como son muchos estudiantes.', 'Act-Ref'),
(14, 'Cuando leo temas que no son de ficción, prefiero:', 'Algo que me enseñe nuevos hechos o me diga como hacer algo.', 'Algo que me dé nuevas ideas en que pensar.', 'Sen-Int'),
(15, 'Me gustan los maestros:', 'Que utilizan muchos esquemas en el pizarrón.', 'Que toman mucho tiempo para explicar.', 'Vis-Ver'),
(16, 'Cuando estoy analizando un cuento o una novela:', 'Pienso en los incidentes y trato de acomodarlos para configurar los temas.', 'Me doy cuenta de cuales son los temas cuando termino de leer y luego tengo que regresar y encontrar los incidentes que los demuestran.', 'Sec-Glo'),
(17, 'Cuando comienzo a resolver un problema de tarea, es más probable que:', 'Comience a trabajar en su solución inmediatamente.', 'Primero trate de entender completamente el problema.', 'Act-Ref'),
(18, 'Prefiero la idea de:', 'Certeza.', 'Teoría.', 'Sen-Int'),
(19, 'Recuerdo mejor:', 'Lo que veo.', 'Lo que oigo.', 'Vis-Ver'),
(20, 'Es más importante para mí que un profesor:', 'Exponga el material en pasos secuenciales claros.', 'Me dé un panorama general y relacione el material con otros temas.', 'Sec-Glo'),
(21, 'Prefiero estudiar:', 'En un grupo de estudio.', 'Solo.', 'Act-Ref'),
(22, 'Me considero:', 'Cuidadoso en los detalles de mi trabajo.', 'Creativo en la forma en la que hago mi trabajo.', 'Sen-Int'),
(23, 'Cuando alguien me da direcciones de nuevos lugares, prefiero:', 'Un mapa.', 'Instrucciones escritas.', 'Vis-Ver'),
(24, 'Aprendo:', 'A un paso constante. Si estudio con ahínco consigo lo que deseo.', 'En inicios y pausas. Me llego a confundir y súbitamente lo entiendo.', 'Sec-Glo'),
(25, 'Prefiero primero:', 'Hacer algo y ver que sucede.', 'Pensar como voy a hacer algo.', 'Act-Ref'),
(26, 'Cuando leo por diversión, me gustan los escritores que:', 'Dicen claramente los que desean dar a entender.', 'Dicen las cosas en forma creativa e interesante.', 'Sen-Int'),
(27, 'Cuando veo un esquema o bosquejo en clase, es más probable que recuerde:', 'La imagen.', 'Lo que el profesor dijo acerca de ella.', 'Vis-Ver'),
(28, 'Cuando me enfrento a un cuerpo de información:', 'Me concentro en los detalles y pierdo de vista el total de la misma.', 'Trato de entender el todo antes de ir a los detalles.', 'Sec-Glo'),
(29, 'Recuerdo más fácilmente:', 'Algo que he hecho.', 'Algo en lo que he pensado mucho.', 'Act-Ref'),
(30, 'Cuando tengo que hacer un trabajo, prefiero:', 'Dominar una forma de hacerlo.', 'Intentar nuevas formas de hacerlo.', 'Sen-Int'),
(31, 'Cuando alguien me enseña datos, prefiero:', 'Gráficas.', 'Resúmenes con texto.', 'Vis-Ver'),
(32, 'Cuando escribo un trabajo, es más probable que:', 'Lo haga (piense o escriba) desde el principio y avance.', 'Lo haga (piense o escriba) en diferentes partes y luego las ordene.', 'Sec-Glo'),
(33, 'Cuando tengo que trabajar en un proyecto de grupo, primero quiero:', 'Realizar una \"tormenta de ideas\" donde cada uno contribuye con ideas.', 'Realizar la \"tormenta de ideas\" en forma personal y luego juntarme con el grupo para comparar las ideas.', 'Act-Ref'),
(34, 'Considero que es mejor elogio llamar a alguien:', 'Sensible.', 'Imaginativo.', 'Sen-Int'),
(35, 'Cuando conozco gente en una fiesta, es más probable que recuerde:', 'Cómo es su apariencia.', 'Lo que dicen de sí mismos.', 'Vis-Ver'),
(36, 'Cuando estoy aprendiendo un tema, prefiero:', 'Mantenerme concentrado en ese tema, aprendiendo lo más que pueda de él.', 'Hacer conexiones entre ese tema y temas relacionados.', 'Sec-Glo'),
(37, 'Me considero:', 'Abierto.', 'Reservado.', 'Act-Ref'),
(38, 'Prefiero cursos que dan más importancia a:', 'Material concreto (hechos, datos).', 'Material abstracto (conceptos, teorías).', 'Sen-Int'),
(39, 'Para divertirme, prefiero:', 'Ver televisión.', 'Leer un libro.', 'Vis-Ver'),
(40, 'Algunos profesores inician sus clases haciendo un bosquejo de lo que enseñarán. Esos bosquejos son:', 'Algo útiles para mí.', 'Muy útiles para mí.', 'Sec-Glo'),
(41, 'La idea de hacer una tarea en grupo con una sola calificación para todos:', 'Me parece bien.', 'No me parece bien.', 'Act-Ref'),
(42, 'Cuando hago grandes cálculos:', 'Tiendo a repetir todos mis pasos y revisar cuidadosamente mi trabajo.', 'Me cansa hacer su revisión y tengo que esforzarme para hacerlo.', 'Sen-Int'),
(43, 'Tiendo a recordar lugares en los que he estado:', 'Fácilmente y con bastante exactitud.', 'Con dificultad y sin mucho detalle.', 'Vis-Ver'),
(44, 'Cuando resuelvo problemas en grupo, es más probable que yo:', 'Piense en los pasos para la solución de los problemas.', 'Piense en las posibles consecuencias o aplicaciones de la solución en un amplio rango de campos.', 'Sec-Glo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblprueba`
--

CREATE TABLE `tblprueba` (
  `id` int(11) NOT NULL,
  `codigo_estudiante` varchar(8) NOT NULL,
  `pregunta` int(2) NOT NULL,
  `respuesta` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblprueba`
--

INSERT INTO `tblprueba` (`id`, `codigo_estudiante`, `pregunta`, `respuesta`) VALUES
(14, '76927894', 1, '1'),
(15, '76927894', 2, '2'),
(16, '76927894', 3, '1'),
(17, '76927894', 4, '2'),
(18, '76927894', 5, '1'),
(19, '76927894', 6, '1'),
(20, '76927894', 7, '2'),
(21, '76927894', 8, '2'),
(22, '76927894', 9, '2'),
(23, '76927894', 10, '2'),
(24, '76927894', 11, '1'),
(25, '76927894', 12, '2'),
(26, '76927894', 13, '2'),
(27, '76927894', 14, '2'),
(28, '76927894', 15, '2'),
(29, '76927894', 16, '2'),
(31, '76927894', 17, '2'),
(32, '76927894', 18, '2'),
(33, '76927894', 19, '2'),
(34, '76927894', 20, '2'),
(35, '76927894', 21, '2'),
(36, '76927894', 22, '2'),
(37, '76927894', 23, '2'),
(38, '76927894', 24, '2'),
(39, '76927894', 25, '2'),
(40, '76927894', 26, '2'),
(41, '76927894', 27, '2'),
(42, '76927894', 28, '2'),
(43, '76927894', 29, '2'),
(44, '76927894', 30, '2'),
(45, '76927894', 31, '2'),
(46, '76927894', 32, '2'),
(47, '76927894', 33, '2'),
(48, '76927894', 34, '2'),
(49, '76927894', 35, '2'),
(50, '76927894', 36, '2'),
(51, '76927894', 37, '2'),
(52, '76927894', 38, '2'),
(53, '76927894', 39, '2'),
(54, '76927894', 40, '2'),
(55, '76927894', 41, '2'),
(56, '76927894', 42, '2'),
(57, '76927894', 43, '2'),
(58, '76927894', 44, '2'),
(59, '72747274', 40, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblrespuestas`
--

CREATE TABLE `tblrespuestas` (
  `codestudiante` int(8) NOT NULL,
  `idpregunta` int(2) NOT NULL,
  `respuesta1` int(1) NOT NULL,
  `respuesta2` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblrespuestas`
--

INSERT INTO `tblrespuestas` (`codestudiante`, `idpregunta`, `respuesta1`, `respuesta2`) VALUES
(71444762, 1, 0, 1),
(72889436, 1, 0, 0),
(72969241, 1, 0, 1),
(72969242, 1, 0, 1),
(76927894, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblresultados`
--

CREATE TABLE `tblresultados` (
  `idresultado` int(10) NOT NULL,
  `codestudiante` int(8) NOT NULL,
  `activoreflexivo` varchar(15) NOT NULL,
  `nivelactref` int(3) NOT NULL,
  `sensorialintuitivo` varchar(15) NOT NULL,
  `nivelsenint` int(3) NOT NULL,
  `visualverbal` varchar(15) NOT NULL,
  `nivelvisver` int(3) NOT NULL,
  `secuencialglobal` varchar(15) NOT NULL,
  `nivelsecglo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblresultados`
--

INSERT INTO `tblresultados` (`idresultado`, `codestudiante`, `activoreflexivo`, `nivelactref`, `sensorialintuitivo`, `nivelsenint`, `visualverbal`, `nivelvisver`, `secuencialglobal`, `nivelsecglo`) VALUES
(12, 76927894, '', 90, '', 90, '', 81, '', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`email`, `password`) VALUES
('123@gmail.com', '$2y$10$NgyOpcc8Fkg27mgPUzJ6MeuDg1x0nHG2jl3V2.HJQK2d9ohnu5RFC'),
('gabu@gmail.com', '$2y$10$S66Y4ziKC2WMcsqvdv2mnetbABiUgvq1Eyu9eFgr1KSKHFgB/671e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblconsulta`
--
ALTER TABLE `tblconsulta`
  ADD PRIMARY KEY (`codestudiante`);

--
-- Indices de la tabla `tblconsultasalon`
--
ALTER TABLE `tblconsultasalon`
  ADD PRIMARY KEY (`NRC`);

--
-- Indices de la tabla `tblpreguntas`
--
ALTER TABLE `tblpreguntas`
  ADD PRIMARY KEY (`idpregunta`);

--
-- Indices de la tabla `tblprueba`
--
ALTER TABLE `tblprueba`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblrespuestas`
--
ALTER TABLE `tblrespuestas`
  ADD PRIMARY KEY (`codestudiante`),
  ADD KEY `idpregunta` (`idpregunta`);

--
-- Indices de la tabla `tblresultados`
--
ALTER TABLE `tblresultados`
  ADD PRIMARY KEY (`idresultado`),
  ADD KEY `tblresultados_ibfk_1` (`codestudiante`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblprueba`
--
ALTER TABLE `tblprueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `tblresultados`
--
ALTER TABLE `tblresultados`
  MODIFY `idresultado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblprueba`
--
ALTER TABLE `tblprueba`
  ADD CONSTRAINT `tblprueba_ibfk_1` FOREIGN KEY (`pregunta`) REFERENCES `tblpreguntas` (`idpregunta`);

--
-- Filtros para la tabla `tblrespuestas`
--
ALTER TABLE `tblrespuestas`
  ADD CONSTRAINT `tblrespuestas_ibfk_1` FOREIGN KEY (`idpregunta`) REFERENCES `tblpreguntas` (`idpregunta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tblresultados`
--
ALTER TABLE `tblresultados`
  ADD CONSTRAINT `tblresultados_ibfk_1` FOREIGN KEY (`codestudiante`) REFERENCES `tblconsulta` (`codestudiante`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
