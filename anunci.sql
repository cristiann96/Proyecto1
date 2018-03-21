-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2017 a las 20:06:57
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `projecte1_bis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anunci`
--

CREATE TABLE `anunci` (
  `anu_id` int(4) NOT NULL,
  `anu_titol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `anu_data_anunci` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `anu_data_robatori` date NOT NULL,
  `anu_ubicacio_robatori` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `anu_descripcio_robatori` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `anu_marca` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_model` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_color` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_antiguitat` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_descripcio` text COLLATE utf8_spanish_ci NOT NULL,
  `anu_numero_serie` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_foto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `anu_compensacio` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `anunci`
--

INSERT INTO `anunci` (`anu_id`, `anu_titol`, `anu_data_anunci`, `anu_data_robatori`, `anu_ubicacio_robatori`, `anu_descripcio_robatori`, `anu_marca`, `anu_model`, `anu_color`, `anu_antiguitat`, `anu_descripcio`, `anu_numero_serie`, `anu_foto`, `anu_compensacio`) VALUES
(47, 'Bicicleta montaÃ±a robada', '2017-10-24 16:06:23', '2017-10-12', 'Badajoz', 'Me robaron la bici de mi balcÃ³n mientras dormÃ­a', 'Mercurio', 'XL', 'Azul', '3 AÃ±os', 'Bicicleta de montaÃ±a con 3 aÃ±os de antigÃ¼edad, no recuerdo la marca ni el modelo, poco uso, neumÃ¡ticos michelin nuevos, rueda de 26\".', '1234312asdq', 'img/bici_mont_azul.png', '50.00'),
(48, 'Bicicleta de carretera naranja', '2017-10-24 16:12:45', '2017-10-15', 'Tarragona', 'Bicicleta robada cerca del pantano del foix mientras pescaba.', 'Sava', 'Hi-speed', 'Naranja', '1 AÃ±o', 'Bicicleta de carretera de color naranja y negro, reciÃ©n lavada en el momento del robo. ', '522135342as', 'img/bici_carretera_naranja.jpg', '40.00'),
(49, 'Bicicleta Rockrider Robada', '2017-10-24 16:19:35', '2017-10-20', 'CÃ³rdoba', 'Un grupo de chavales me paro y me quitaron la bicicleta bajo amenaza', 'Rockrider', '340LTD', 'Gris', '4 AÃ±os', 'Bicicleta de montaÃ±a marca Rockrider comprada en el decathlon hace 4 aÃ±os, el modelo puede que no sea exacto, en el momento del robo tenia montados neumÃ¡ticos mixtos', '12343212asfg', 'img/bici_dirt.jpg', '10.00'),
(50, 'Bicicleta bmx verde robada', '2017-10-24 16:36:56', '2017-10-22', 'Barcelona', 'Bicicleta robada en el skatepark de santfeliu a raÃ­z de una discusiÃ³n con un grupo de ahÃ­.', '', '', 'Verde', '6 meses', 'Bicicleta de tipo bmx de color verde, llevaba estriberas en la rueda trasera en el momento del robo', '987654321qwe', 'img/bici_bmx_verde.jpg', '10.00'),
(51, 'Bicicleta del bicing robada', '2017-10-24 16:41:21', '2017-10-18', 'Barcelona', 'Pues hace tiempo me consegui una bicicleta de estas del bicin y ayer el jona me la pillo y dice que no me la da de vuelta asi que pongo anuncio a ver si me la devuelve.', 'Bicing', '', 'Rojo', '2 meses', 'Bicicleta del bicing que tenia desde hace un par de meses.', '', 'img/bici_bicing_roja.jpg', '0.00'),
(52, 'Bicicleta para niÃ±os de color rosa robada', '2017-10-24 16:51:50', '2017-10-23', 'Ceuta', 'Estaba yo con mi hija en el parque y vino un niÃ±o le quito la bici y salto la valla con ella, fui detras de el pero corria como alma que lleva el diablo y acabe haciendo el avestruz contra la tierra ', 'Chico', '', 'Rosa', '1 mes', 'Bicicleta para niÃ±os pequeÃ±os de marca Chico no tiene pedales', '', 'img/bici_peque_rosa.jpeg', '0.00'),
(53, 'Bicicleta fixed roja robada', '2017-10-24 17:02:47', '2017-10-21', 'Madrid', 'Venia de un starbucks con la bicicleta cuando unos seÃ±ores de etnia para nada relevante me asaltaron y robaron mi bicicleta.', '', '', 'Rojo', '20 AÃ±os', 'Bicicleta fixed hecha a partir de una bicicleta de carretera antigua, desconozco marca y modelo ya que al ser una bicicleta tan antigua no tiene los papeles nadie.', '', 'img/bici_fixed_roja.jpg', '30.00'),
(54, 'Bicicleta de paseo Trek', '2017-10-24 17:57:56', '2017-10-22', 'AlmerÃ­a', 'Bicicleta robada en la playa de almeria mientras estaba en una terraza descansando', 'Trek', 'Ibiza', 'Naranja', '2 AÃ±os', 'Bicicleta de paseo de marca trek', '987654321qwe', 'img/bici_paseo.jpg', '12.00'),
(55, 'Bicicleta de carretera robada', '2017-10-24 18:02:04', '2017-10-23', 'Barcelona', 'Me robaron en la emisora', '', '', 'Negro', '3 AÃ±os', 'Bicicleta de carretera negra', '', 'img/bici_carretera.jpg', '0.00'),
(56, 'Bicicleta de carretera Sava Speed color verde', '2017-10-24 18:16:07', '2017-10-20', 'Madrid', 'Me robaron la bici mientras estaba descansando en un lado de la carretera.', 'Sava', 'Speed', 'Verde', '1 AÃ±o', 'Bicicleta de carretera de color verde con un aÃ±o de antigÃ¼edad con un uso diario', '132415135qwe', 'img/bici_carretera_verde.jpg', '70.00'),
(57, 'Bicicleta niÃ±o negra robada', '2017-10-24 19:19:33', '2017-10-22', 'Madrid', 'Le robaron la bicicleta a mi hijo cuando estaba jugando en el parque con sus amigos', 'Baninni', '', 'Negro', '1 mes', 'Bicicleta para niÃ±os sin pedales de color negro', '', 'img/bici_peque_negra.jpg', '5.00'),
(58, 'Bicicleta clÃ¡sica de color azul robada', '2017-10-24 19:22:49', '2017-10-23', 'Tarragona', 'Bicicleta clÃ¡sica robada de una exposiciÃ³n en tarragona durante la noche.', '', '', 'Azul', '40 AÃ±os', 'Bicicleta clÃ¡sica de hace 40 aÃ±os, completamente restaurada.', '', 'img/bici_vintage_azul.jpg', '90.00'),
(59, 'Bicicleta plegable de color gris robada', '2017-10-24 19:27:34', '2017-10-21', 'MÃ¡laga', 'Bicicleta robada en mi oficina de trabajo.', '', '', 'Gris', '5 meses', 'Bicicleta plegable de color gris que compre hace cinco meses a un amigo, desconozco la antigÃ¼edad, los neumÃ¡ticos son nuevos.', '887655443qwe', 'img/bici_plegable_gris.jpg', '20.00'),
(60, 'Bicicleta de montaÃ±a Zaskar GT Naranja robada', '2017-10-24 19:31:00', '2017-10-19', 'Lleida', 'Me robaron la bici mientras estaba de ruta por la montaÃ±a en un pequeÃ±o despiste que tuve ', 'Zaskar', 'GT', 'Naranja', '3 meses', 'Bicicleta de montaÃ±a de color naranja, ruedas nuevas y llanta de 26\"', '12343212asfg', 'img/bici_mont_naranja.jpg', '30.00'),
(61, 'Bicicleta montaÃ±a niÃ±a Scott color rosa', '2017-10-24 19:36:28', '2017-10-19', 'Zaragoza', 'Bicicleta robada en el super mientras compraba algo.', 'Scott', '', 'Rosa', '2 meses', 'Bicicleta para niÃ±os de color rosa con ruedas de tacos y ruedecitas atrÃ¡s, muy pequeÃ±a de tamaÃ±o', '24112135qwe', 'img/bici_peque.jpg', '15.00'),
(62, 'Bicicleta fixed de color rosa y negro', '2017-10-24 19:40:36', '2017-10-20', 'Barcelona', 'Bicicleta robada del interior de un bicibox en Sant Joan DespÃ­.', '', '', 'Rosa', '15 aÃ±os', 'Bicicleta de tipo fixed de color rosa y negro con neumÃ¡ticos rosa fue construida a partir de una bicicleta de carretera de 15 aÃ±os.', '3456432578qwer', 'img/bici_rosa.jpg', '50.00'),
(63, 'Bici de Carretera Azul Robada', '2017-10-22 21:14:18', '2017-10-23', 'Barcelona', 'Me he encontrado con la cadena rota al salir del curro.', 'FELT', 'Carretera', 'Azul', '2 aÃ±os', 'Color azul<br />\r\nEtiqueta FELT tanto en el armazÃ³n como en las ruedas.<br />\r\nManillar profesional, de los de verdad, los que hacen para la Vuelta ciclista.', '', 'img/bici_carretera_azul.jpg', '99.99'),
(64, 'Bici de MontaÃ±a Naranja Robada', '2017-10-24 15:05:21', '2017-10-21', 'A coruÃ±a', 'Estaba comprando unos snacks  y cuÃ¡ndo lo vi por la ventana del establecimiento ya no estaba.', 'Zaskar', 'MontaÃ±a', 'Naranja', '1 aÃ±o', 'Lleva rueda Racing Ralph - Schwalbe', '', 'img/bici_mont_naranja.jpg', '99.99'),
(65, 'Bici de Ciudad Robada', '2017-10-24 15:19:01', '2017-10-24', 'Madrid', 'Pues que estaba de camino a la Uni y me peguÃ© un guantazo con la farola, y viene un tÃ­o y en vez de ayudarme se llevÃ³ la bici y la gente mirando ;_;.', '', 'Fixed', 'Rosa', '3 aÃ±os', 'Manillar y ruedas de un color rosa chillÃ³n (el mejor color ( ^_^)/ ).<br />\r\nManillar asÃ­ en plan ciclista profesional, de esos de la tele de la TV1.', '', 'img/bici_rosa.jpg', '99.99'),
(66, 'Bici niÃ±os de color Rosa Robada', '2017-10-24 15:43:44', '2017-10-02', 'CastellÃ³n', 'Pues el crÃ­o me viene llorando y me cuenta que otros dos crÃ­os le han empujado mientras iba en la bici y se lo han llevado.', 'Scott', '', 'Rosa', '1 aÃ±o', 'Manillares de un color rosa.<br />\r\nEstampado de un color rosa con algÃºn que otro dibujito de crios.', '', 'img/bici_peque.jpg', '99.99'),
(67, 'Bici de Dirt robada', '2017-10-24 15:51:42', '2017-09-01', 'Tarragona', 'Pues que venÃ­a del curro y justo en la calle to cansado y van dos tontos y me tiran de la bici y se piran con ella', 'Massi', 'Dirt', 'Verde', '3 aÃ±os', 'Es un verde o gris, no sÃ© distinguirlos bien, uno asiento y manillares blancos y tiene marchas.<br />\r\nLa bici, aÃºn ser algo antigua, estÃ¡ to pepi.', '', 'img/bici_dirt.jpg', '99.99'),
(68, 'Bici de ir por Ciudad Robada', '2017-10-24 16:09:44', '2017-08-08', 'Asturias', 'Pues que iba paseando y lo dejÃ© encadenado mientra me iba a compra y cuÃ¡ndo volvÃ­ ya no estaba.', 'Megamo', 'Paseo', 'Naranja', '5 aÃ±os', 'Es un regalo, por favor ayudaaaa!', 'GI54832GH375528', 'img/bici_paseo.jpg', '99.99'),
(69, 'Bici de crÃ­o Robada', '2017-10-24 16:20:27', '2017-03-17', 'AlmerÃ­a', 'Pues que me fui a recoger el crÃ­o del colegio con su bici y este va y se lo deja aparcado al lado de un Ã¡rbol. Ya podÃ©is imaginar mi cara.', 'Baninni', 'Paseo', 'Negro', '1 aÃ±o', 'Es todo negro, no hay mucho mÃ¡s que describir', 'JVM482564756538', 'img/bici_peque_negra.jpg', '99.99'),
(70, 'Bici de Carretera Multicolor Robada', '2017-10-24 16:29:14', '2017-02-25', 'Murcia', 'Pues me entrÃ³ flojera a mitad de la carretera y habÃ­a justo una gasolinera esas de Repsol y fui a echar un meo, le dije si me lo podÃ­an vigilar y cuÃ¡ndo volvÃ­ ya no estaba ni la bici ni el vigila', 'Sava', 'Carretera', 'Negro', '6 aÃ±os', 'Bueno, no es el color que puse. Es una mezcla de Negro, Blanco, Naranja, Verde.', 'UFD485TJD485432', 'img/bici_carretera_naranja.jpg', '99.99'),
(71, 'Bici BMX Verde Robado', '2017-10-24 16:36:16', '2017-06-24', 'Barcelona', 'Pues venÃ­a con todo el ciego de fiesta y al entrar al portal del edificio me vino un tÃ­o de la nada, se llevÃ³ un par de golpes pero me quitÃ³ la bici.', 'GW', 'BMX', 'Verde', '2 aÃ±os', 'Es una mezcla de verdes, en plan Green Lantern pero no vuela ni tiene poderes (;_;)', 'JFDN76492646584', 'img/bici_bmx_verde.jpg', '99.99'),
(72, 'Bici de MontaÃ±a Negra Robada', '2017-10-24 17:28:36', '2017-08-11', 'Barcelona', 'Pues que iba tranquilamente por la montaÃ±a y me dio apretÃ³n, dejÃ© la bici aparcada y cuÃ¡ndo terminÃ© ya no estaba. Tuve que volver a la civilizaciÃ³n haciendo autostop.', 'Wolf', 'MontaÃ±a', 'Negro', '1 aÃ±o', 'Es Negro y las letras/decoraciÃ³n son de una mezcla de color rojo y naranja.', 'HGK759365483658', 'img/bici_mont_negra.jpg', '99.99'),
(73, 'Bici BMX Blanca Robada', '2017-10-24 17:34:34', '2017-01-13', 'CÃ¡diz', 'Pues me la regalaron en reyes y a la semana van y me la roban al lado del parque.', 'Dirty', 'BMX', 'Blanco', '1 semana', 'Es una bici de BMX de #$% &#&%#, blanca con las letras en negro, No puedo decir mucho mÃ¡s porque me la han robado, sino no habrÃ­a puesto el anuncio. Una ayudita por favor (;_;)', 'JUGF64583264738', 'img/bici_bmx_blanca.jpeg', '99.99'),
(74, 'Bici del Monte Azul y Negro Robado de Tron', '2017-10-24 17:41:24', '2017-10-05', 'Ceuta', 'Pues lo dejÃ© aparcado en casa con cadenas, y al irme al curro me la encuentro rota.', 'Mercurio', 'MontaÃ±a', 'Azul', '2 aÃ±os', 'Pues una bici to molona de Tron, me lo tuneÃ© yo mismo. Soy todo una artista. Colores que se vean bien en azul y negro.', 'UTK432743658478', 'img/bici_mont_azul.png', '99.99'),
(75, 'bici de MontaÃ±a Robada', '2017-10-24 17:48:04', '2017-09-02', 'Baleares', 'Me invitaron a hacer un tour por las Baleares y se me termino a la hora cuÃ¡ndo me di cuenta de que ya no tenÃ­a bici.', 'Hammer', 'MontaÃ±a', 'Verde', '5 aÃ±os', 'Es una bici color Negro y un Verde de esos de llamar la atenciÃ³n en plan, robame por favor. Terminada de arreglar y funciona, me he gastado mucha pasta.', 'UHVF53294375483', 'img/bici_mont_verde.jpg', '99.99'),
(76, 'Bici Plegable de color Gris', '2017-10-24 17:52:37', '2017-10-11', 'Cuenca', 'Pues que he cogida la bici que lleva mi madre para ir a la Uni porque llegaba tarde y al salir de clase me lo dejo en el aula y al volver ya no estaba, preguntÃ© por todos los sitio y ni rastro.', '', 'Plegable', 'Gris', '4 aÃ±os', 'Es bici plegable de esas que no ocupan espacio, de un colo gris. Con el sillÃ­n algo incÃ³modo.', '', 'img/bici_plegable_gris.jpg', '99.99'),
(77, 'Bici Gris y Blanco de MontaÃ±a Robado', '2017-10-24 17:57:29', '2017-08-11', 'AlmerÃ­a', 'Pues no sÃ© ni cÃ³mo porque no estaba en case, me lo ha dicho mi hermano que iba a cogerla para ir el finde y se encontrÃ³ con las cadenas rotas.', 'DTFLY', 'MontaÃ±a', 'Gris', '2 aÃ±os', 'Es Gris y blanca para ir al monte a hacer el cabra', '', 'img/bici_mont_gris.jpg', '99.99');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anunci`
--
ALTER TABLE `anunci`
  ADD PRIMARY KEY (`anu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anunci`
--
ALTER TABLE `anunci`
  MODIFY `anu_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
