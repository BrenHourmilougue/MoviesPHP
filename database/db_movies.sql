-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2023 a las 23:59:27
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_movies`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Horror'),
(5, 'Comedy'),
(8, 'Drama'),
(9, 'Sci-Fi'),
(12, 'Romance');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `calification` int(11) NOT NULL,
  `director` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id`, `title`, `calification`, `director`, `year`, `description`, `category_id`) VALUES
(1, 'The Shinning', 5, 'Stanley Kubrick', 1980, 'El resplandor (título original: The Shining) es una película angloestadounidense de 1980 del subgénero de terror psicológico, producida y dirigida por Stanley Kubrick y protagonizada por Jack Nicholson, Shelley Duvall, Danny Lloyd y Scatman Crothers. Está basada en la novela homónima del escritor Stephen King, publicada en 1977, si bien la novela y la película difieren notablemente.', 1),
(3, 'Rosemary\'s Baby', 5, 'Roman Polański', 1968, 'Rosemary\'s Baby (en Hispanoamérica, El bebé de Rosemary; en España, La semilla del diablo) es una película de terror dramático estadounidense de 1968. Escrita y dirigida por Roman Polański y basada en la novela homónima de Ira Levin. Está protagonizada por Mia Farrow, John Cassavetes, Ruth Gordon, Sidney Blackmer, Maurice Evans y Ralph Bellamy. La película narra la historia de una mujer embarazada que sospecha que una secta maligna quiere llevarse a su bebé para usarlo en sus rituales.', 1),
(9, 'Hellraiser', 4, ' Clive Barker', 1987, 'Hellraiser es una película de terror británica estrenada en 1987, escrita y dirigida por Clive Barker, y basada en su propia novela titulada The Hellbound Heart. Se la considera tanto una película de culto como un clásico del género.3​4​\r\n\r\nLa película explora temas como el sadomasoquismo, la relación entre el dolor y el placer, y la moralidad de personajes sometidos al temor y la tentación. Es la primera entrega de una saga que llega hasta el año 2018 y presenta al personaje Pinhead, el cual pronto se convirtió en un icono del Cine de terror', 1),
(10, 'Bagdad Café', 5, ' Percy Adlon', 1987, 'La película es una comedia que transcurre en un remoto truck-stop café y motel en el desierto de Mojave. La historia comienza cuando la turista alemana Jasmin (Sägebrecht) tiene una pelea con su marido mientras conducen a través del desierto. Ella sale del coche y se encuentra sola en medio del desierto y lo único que tiene a la vista es el Bagdad Café, un local regentado por una mujer negra llamada Brenda (Pounder). La cafetería es visitada por un grupo de personajes coloridos: un escenógrafo de Hollywood (Palance), una artista del tatuaje (Kaufmann) y la familia de Brenda. Jasmin y los habitantes de Bagdad Café se van conociendo, al principio con mucha desconfianza, pero luego surgirá entre ellos una verdadera amistad.', 5),
(16, 'Brazil', 5, 'Terry Gilliam', 1985, 'Brazil es una película británica de ciencia ficción de 1985 dirigida por Terry Gilliam y protagonizada por Jonathan Pryce, Kim Greist, Ian Holm, Bob Hoskins y Robert De Niro. La historia transcurre en un mundo distópico, inspirado mayormente en la novela 1984 de George Orwell, aunque se incorporan también amplios trazos de humor seco y satírico al tono del filme. El filme toma el título de la canción, leitmotif de la narración, que en inglés se conoce como Brazil, Aquarela do Brasil, escrita por el compositor Ary Barroso en 1939. Para mantener el tono exótico, el título no se tradujo o adaptó en la mayoría de los países (incluido Brasil).', 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
