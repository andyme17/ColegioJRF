-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.10-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para colegio
CREATE DATABASE IF NOT EXISTS `colegio` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `colegio`;

-- Volcando estructura para tabla colegio.aviso
CREATE TABLE IF NOT EXISTS `aviso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla colegio.aviso: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `aviso` DISABLE KEYS */;
INSERT INTO `aviso` (`id`, `thumb`) VALUES
	(1, 'img-aviso1.jpg'),
	(2, 'img-aviso2.png');
/*!40000 ALTER TABLE `aviso` ENABLE KEYS */;

-- Volcando estructura para tabla colegio.contenido_img
CREATE TABLE IF NOT EXISTS `contenido_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(100) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla colegio.contenido_img: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `contenido_img` DISABLE KEYS */;
INSERT INTO `contenido_img` (`id`, `seccion`, `thumb`) VALUES
	(1, 'modal-banner', 'banner-inicial.png'),
	(2, 'sec-equipo', 'imgp-primaria.jpg'),
	(3, 'sec-comida', 'imgs-comida.jpg');
/*!40000 ALTER TABLE `contenido_img` ENABLE KEYS */;

-- Volcando estructura para tabla colegio.contenido_texto
CREATE TABLE IF NOT EXISTS `contenido_texto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `seccion` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla colegio.contenido_texto: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `contenido_texto` DISABLE KEYS */;
INSERT INTO `contenido_texto` (`id`, `seccion`, `descripcion`) VALUES
	(1, 'sec-bienvenida', 'El colegio Jesús Romero Flores le da la más cordial bienvenida. Por mas de 30 años ofrecemos servicios educativos para el desarrollo de sus hijos e hijas mejorando cada ciclo escolar. Nuestro proceso educativo incluye tanto áreas académicas como en valores para que sus niños tengan un desarrollo sano y obtengan las habilidades que les permitirán ser exitosos y valiosos seres humanos.'),
	(2, 'sec-historia', 'El colegio fue fundado en 1988 con el objetivo de proporcionar una oferta educativa del más alto nivel con los recursos tecnológicos y humanos que permitan a nuestros alumnos continuar con su formación en las mejores instituciones del país y llegar a ser profesionistas brillantes y exitosos.'),
	(3, 'sec-mision', 'Somos un colegio que forma personas comprometidas con la comunidad desde preescolar hasta primaria, buscando la formación integral de los niños con valores como el respeto, la puntualidad, hábitos de estudio y el amor a la patria, así se generara una sociedad más justa, preparada y exitosa para el futuro.'),
	(4, 'sec-vision', 'En el colegio Jesús Romero trabajamos para continuar siendo la mejor opción educativa para las familias de Santa Fe ofreciendo una formación con valores trascendentes en un ambiente sano con excelentes instalaciones, tecnologías de vanguardia y los mejores maestros para ser un orgullo de nuestra comunidad.'),
	(5, 'sec-equipo', 'El colegio Jesús romero Flores se encuentra en un continuo proceso de mejora, tanto en sus instalaciones como en sus planes de estudio y mecánicas de trabajo, esto incluye por supuesto a ustedes padres de familia.'),
	(6, 'sec-comida', 'El colegio JRF ofrece dos modalidades para consumir alimentos, una es a través de la cooperativa escolar donde se venden complementos a su lunch y la otra, a petición de los padres, se les proporciona comida completa en dos horarios: 10:30 am (Receso) y 2 pm (after School).');
/*!40000 ALTER TABLE `contenido_texto` ENABLE KEYS */;

-- Volcando estructura para tabla colegio.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla colegio.evento: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
INSERT INTO `evento` (`id`, `titulo`, `descripcion`, `fecha`, `thumb`) VALUES
	(1, 'Día de muertos', 'Nuestros alumnos presentaron la divertida pastorela “entre pastores y diabluras” en el teatro de la Unidad Santa Fe, donde hicieron gala de su talento y gracia para bailar, entreteniendo a familiares y amigos de la comunidad Villa Infantil y Jesús Romero Flores.', '2019-11-30', 'evento-nov.jpg'),
	(2, 'Pastorela 2019', 'Nuestros alumnos presentaron la divertida pastorela “entre pastores y diabluras” en el teatro de la Unidad Santa Fe, donde hicieron gala de su talento y gracia para bailar, entreteniendo a familiares y amigos de la comunidad Villa Infantil y Jesús Romero Flores.', '2019-12-12', 'evento-dic.jpg'),
	(3, 'Día del amor y la amistad', 'Para conmemorar el día de la amistad, nuestros alumnos realizaron un intercambio de playeritas y convivieron compartiendo su lunch con todos, como buenos amigos. También se tomaron lindas fotos con un tierno fondo que sus maestras prepararon con mucho cariño para la ocasión.', '2020-02-14', 'evento-feb.jpg');
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;

-- Volcando estructura para tabla colegio.galeria
CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla colegio.galeria: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
INSERT INTO `galeria` (`id`, `thumb`) VALUES
	(1, 'img-instalacion1.jpg'),
	(2, 'img-instalacion2.jpg'),
	(3, 'img-instalacion3.jpg'),
	(4, 'img-instalacion4.jpg'),
	(5, 'img-instalacion5.jpg'),
	(6, 'img-instalacion6.jpg'),
	(7, 'img-instalacion7.jpg');
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;

-- Volcando estructura para tabla colegio.personal
CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla colegio.personal: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `personal` DISABLE KEYS */;
INSERT INTO `personal` (`id`, `nombre`, `cargo`, `thumb`) VALUES
	(1, 'Lic. María Isabel Rincón', 'Directora General', 'imgp-direc-grnl.jpg'),
	(2, 'Lic. Patricia Lerma', 'Directora Técnica', 'imgp-direc-tec.jpg'),
	(3, 'Dr. Eduardo Rincón', 'Coordinador General', 'imgp-coordinador.jpg');
/*!40000 ALTER TABLE `personal` ENABLE KEYS */;

-- Volcando estructura para tabla colegio.servicio_after
CREATE TABLE IF NOT EXISTS `servicio_after` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `thumb` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla colegio.servicio_after: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `servicio_after` DISABLE KEYS */;
INSERT INTO `servicio_after` (`id`, `nombre`, `descripcion`, `thumb`) VALUES
	(1, 'Tareas dirigidas', 'Con el fin de apoyar a los padres en la realización de tareas con una maestra capacitada para guiarlo paso a paso, para ello se le proporciona todos los materiales y recursos que el niño requiera.', 'imgs-tareas.jpg'),
	(2, 'Fránces para niños', 'En horario afterschool se ofrecen clases de francés para niños con el objetivo de obtener un nivel avanzado del idioma con material exclusivo para este horario y también asesorar la realización de tareas.', 'imgs-frances.jpg'),
	(3, 'Danza Folklorica', 'Ofrecemos clases de danza folklórica a los niños, porque les ayuda a tener un adecuado desarrollo mental y cognitivo, ya que se ejercita la coordinación fina que permite una mejor capacidad motriz, el trabajo en equipo y la diciplina.', 'imgs-danza.jpg'),
	(4, 'Ballet', 'En las clases de ballet puede obtener muchos beneficios como el corregir la mala postura, mejorar la coordinación y el equilibrio, así como desarrollarse física e intelectualmente. Por esta razón buscamos que los niños interesados tengan una oferta accesible a esta actividad.', 'imgs-ballet.jpg'),
	(5, 'Lima Lama', 'El Lima-lama crea personas sanas de cuerpo y mente, y comenzar en edades tempranas le proporcionará al niño una serie de herramientas que le servirán de adulto para templar su carácter, sentirse más seguro y ser más controlado. El colegio Jesús Romero ofrece clases de lima-lama y algunos de sus alumnos ya obtuvieron cinta café e incluso continúan su entrenamiento después de concluir su primaria.', 'imgs-lima.jpg'),
	(6, 'Taekwondo', 'Los padres tienen más de una razón para apuntar a sus hijos a clases de Tae-kwon-do porque los beneficios de este ejercicio son muy positivos para sus pequeños, en el aspecto físico permite desarrollar capacidades como la fuerza, la elasticidad, así como un desarrollo armónico y funcional de todo su organismo, además de ser un deporte olímpico mundialmente practicado.', 'imgs-taekwondo.jpg'),
	(7, 'Zumba', 'Todos queremos lo mejor para nuestros hijos y por eso hay que favorecer buenos hábitos desde que son pequeños, la zumba para niños es un buen entrenamiento para los más pequeños que les aporta muchísimos beneficios, entre muchas cosas, mejora la coordinación de nuestro cuerpo y en los más pequeños es un factor muy importante a desarrollar y mejorar en esas edades, además esta clase es muy divertida, ya que mezcla diferentes ritmos muy buenos y bailables para los más pequeños.', 'imgs-zumba.jpg'),
	(8, 'Róbotica', 'En nuestra clase de robótica, los niños aprenden a construir y programar robots paso a paso. A medida que logran sus objetivos con el robot que crean, disfrutan del proceso, lo que les permite aprender aún más. El aprendizaje de la robótica también fortalece sus habilidades en matemáticas y física, mientras que simultáneamente trabajan en sus habilidades de resolución de problemas y trabajo en equipo, te invitamos a unirte y darle esta oportunidad de aprendizaje a los futuros profesionales que harán grande México.', 'imgs-robotica.jpg'),
	(9, 'Cultura General', 'Cultura general es una actividad que introduce a los niños en temas de historia, biología, astronomía y muchos mas a través de videos elaborados especialmente para niños por el biólogo de la UNAM Roberto Cuevas que tiene una amplia experiencia docente, él ideó un método de enseñanza basado en atraer la atención de los niños partiendo de caricaturas e incluso juegos de video y una vez captado su interés, se lleva a aprender conocimientos formales. Esta es la materia más exitosa y es sorprendente el grado de conocimiento que los niños han adquirido en temas como la formación de tornados, plagas, historia de Grecia etc.', 'imgs-zumba.jpg'),
	(10, 'Fránces para adultos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in', 'imgs-frances.jpg'),
	(11, 'Hebreo para adultos', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus voluptatum, deserunt quam illo iste eum rem amet veniam voluptate? Tempore voluptatibus similique beatae voluptas, omnis eum in', 'imgs-frances.jpg');
/*!40000 ALTER TABLE `servicio_after` ENABLE KEYS */;

-- Volcando estructura para tabla colegio.testimonio
CREATE TABLE IF NOT EXISTS `testimonio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `votacion` int(1) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla colegio.testimonio: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `testimonio` DISABLE KEYS */;
INSERT INTO `testimonio` (`id`, `nombre`, `votacion`, `mensaje`) VALUES
	(1, 'Rosa María Meza Iglesias', 5, '... está súper completo Villa Infantil pues es personalizado con personal capacitado, precio excelente y sobre todo calidad en educación. Recomendable para que los pequeños aprendan.'),
	(2, 'Zaira Rebollo', 5, '...el Amor, respeto y cuidado que tienen las especialistas con los niños, forman un muy buen equipo ... además la enseñanza es personalizada!, yo estoy muy contenta! porque mi hija estudie ahí.'),
	(3, 'Angélica González Martínez', 5, 'Recomiendo ampliamente el jardín de niños Villa Infantil, el trato tanto a los pequeños como a los papás es el mejor, las maestras son un amor, pacientes y comprometidas.');
/*!40000 ALTER TABLE `testimonio` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
