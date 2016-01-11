# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.15)
# Database: recetas
# Generation Time: 2014-03-06 07:24:27 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table recetas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `recetas`;

CREATE TABLE `recetas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `ingredientes` text,
  `elaboracion` text,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `recetas` WRITE;
/*!40000 ALTER TABLE `recetas` DISABLE KEYS */;

INSERT INTO `recetas` (`id`, `titulo`, `descripcion`, `ingredientes`, `elaboracion`, `fecha`)
VALUES
	(1,'Tortilla de patata','Exquisita tortilla con patata, cebolla, una pizca de pimiento y huevo al gusto','    Para 4 personas:\n    6 huevos\n    3 patatas (600 g)\n    1 cebolla pequeÃ±a\n    1 pimiento verde\n    2 vasos de aceite de oliva\n    sal\n    una hoja de perejil','<p>Pela y pica la cebolla en dados medianos. Limpia el pimiento verde, retÃ­rale el tallo y las pepitas y cÃ³rtalo en dados. Si las patatas estuvieran sucias, pÃ¡salas por agua. PÃ©lalas, cÃ³rtalas por la mitad a lo largo y despuÃ©s corta cada trozo en medias lunas finas de 1/2 centÃ­metro. Introduce todo en la sartÃ©n, sazona a tu gusto y frÃ­e a fuego suave durante 25-30 minutos.</p>\n<p>Retira la fritada y escÃºrrela. Pasa el aceite a un recipiente y resÃ©rvalo. Limpia la sartÃ©n con papel absorbente de cocina.</p>\n<p>Casca los huevos, colÃ³calos en un recipiente grande y bÃ¡telos. SÃ¡lalos a tu gusto, agrega la fritada de patatas, cebolla y pimiento y mezcla bien.</p>\n<p>Coloca la sartÃ©n nuevamente en el fuego, agrega un chorrito del aceite reservado y agrega la mezcla. Remueve un poco con una cuchara de madera y espera (20 segundos) a que empiece a cuajarse. Separa los bordes, cubre la sartÃ©n con un plato de mayor diÃ¡metro que la sartÃ©n y dale la vuelta. Ã‰chala de nuevo para que cuaje por el otro lado.</p>\n','2014-03-01 00:00:00'),
	(2,'Merluza con fritada','Merluza a la plancha con fritada de cebolletas y pimientos verdes al txakoli, un plato nutritivo y saludable.','    1 mediana (merluza de tamaÃ±o medio)\n    3 cebolletas\n    3 pimientos verdes\n    3 dientes de ajo\n    1 copa de txakoli\n    aceite de oliva virgen extra\n    sal\n    pimienta\n    perejil','<p>Pela los ajos y las cebolletas. Lamina los ajos y pica las cebolletas en juliana fina. Ponlos a pochar en una sartÃ©n con aceite. Sazona.</p>\n<p>Retira el tallo y las pepitas de los pimientos. PÃ­calos en juliana fina e incorpÃ³ralos a la sartÃ©n. Sazona. Cuando empiecen a ablandarse, vierte el txakoli y cocina todo durante 6 minutos.</p>\n<p>Corta la mediana en rodajas y salpimiÃ©ntalas. Cocina a la plancha con la tapa puesta durante 3 minutos por cada lado.</p>\n<p>Para servir, pon la fritada en la base de la fuente y coloca encima las rodajas de mediana. Vierte por encima el jugo que ha soltado el pescado. Adorna con perejil picado.</p>','2014-02-01 00:00:00'),
	(3,'Coles de Bruselas con calabaza y morcilla\n','Coles de Bruselas y calabaza cocinadas al vapor y salteadas y acompaÃ±adas de crujiente de morcilla.','    800 gr. de coles de Bruselas\n    2 rodajas de calabaza\n    4 dientes de ajo\n    1 morcilla de arroz\n    agua\n    aceite de oliva virgen extra\n    sal\n    perejil','<p>Retira la piel de la morcilla y cÃ³rtala en lonchas finas. ExtiÃ©ndelas sobre una placa de horno forrada con papel de hornear. CÃºbrela con otro trozo de papel y hornÃ©alas a 180ÂºC durante 15 minutos (con el horno precalentado). RetÃ­ralas y deja que endurezcan.</p>\n<p>Retira las capas externas de las coles de Bruselas y el extremo del tallito. ColÃ³calas en el accesorio para cocer al vapor, tÃ¡palas y cuÃ©celas durante 8 minutos.</p>\n<p>Con una cucharilla \"parisien\" saca bolas de la calabaza y colÃ³calas al lado de las coles de Bruselas. Tapa y cuece todo junto 3 minutos.</p>\n<p>Pela los dientes de ajo, lamina y rehÃ³galos en una sartÃ©n. Agrega las coles de Bruselas y las bolitas de calabaza. Saltea brevemente y espolvorea con perejil picado.</p>\n<p>Sirve las coles de Bruselas y la calabaza, sazona y adorna con los crujientes de morcilla.</p>','2014-02-05 00:00:00'),
	(4,'Arroz con Bacalao','Arroz con bacalao y verduras acompaÃ±ado de tripas de bacalao rebozadas.','    400 gr. de arroz redondo Brillante Sabroz\n    3 colas de bacalao seco desalado\n    150 gr. de tripas de bacalao\n    3 dientes de ajo\n    1 cebolleta\n    1/4 de pimiento rojo\n    2 pimientos choriceros\n    harina\n    agua\n    aceite de oliva virgen extra\n    1 guindilla de cayena\n    1/2 cucharadita de pimentÃ³n picante\n    sal\n    perejil','Pon agua a calentar en una cazuela grande. Cuando empiece a hervir, agrega el tallo de la cebolleta, unas ramas de perejil y las colas de bacalao. Cuando vuelva a hervir el agua, retira el pescado y desmÃ­galo. Cuela y reserva el caldo de la cocciÃ³n. Enjuaga las tripas de bacalao y escÃºrrelas. Reserva.\n\nPica los ajos, la cebolleta y el pimiento rojo y ponlos a pochar. Remoja los pimientos choriceros en un bol con agua caliente. SÃ¡cales la carne, pÃ­cala finamente y agrÃ©gala a la cazuela.\n\nAÃ±ade la guindilla cayena y el pimentÃ³n y rehoga un poco. Incorpora el caldo (3 partes por cada parte de arroz), el arroz y el bacalao (sin piel). Pon a punto de sal y cocÃ­nalo durante 18-20 minutos. Cubre con un paÃ±o limpio y deja reposar unos minutos.\n\nTrocea las tripas de bacalao, pÃ¡salas por harina y frÃ­elas en una sartÃ©n con aceite caliente hasta que se doren. \n\nSirve el arroz con bacalao y acompÃ¡Ã±alo con las tripas de bacalao. Decora con una rama de perejil.','2014-02-07 00:00:00'),
	(5,'Alitas de pollo asadas','Alitas de pollo a la brasa con un toque picante','    Para 2 personas:\n    10 alas de pollo\n    1 cucharada de miel\n    3 cucharadas de salsa de soja\n    1/2-1 cucharadita de pimentÃ³n\n    2 cucharadas de aceite de oliva\n    sal','Corta las alitas en tres, siguiendo la articulaciÃ³n y elimina la punta que carecede carne. Con un cuchillo retÃ­rales las partes sobrantes de piel (lugar en el que se concentra toda la grasa) y extiÃ©ndelas sobre la placa de horno.\n\nPon en un cuenco la miel, la salsa de soja, el pimentÃ³n y las cucharadas deaceite. Bate todo bien con un tenedor hasta que quede bien unificado.\n\nUnta las alitas con la mezcla anterior, sÃ¡lalas e introduce la bandeja en el horno (previamente calentado durante 10 minutos) a 190 grados durante 25 minutos. RetÃ­ralas y sirve.','2014-02-20 00:00:00'),
	(6,'Lentejas con especias','Lentejas con especias acompaÃ±adas de boniato, un plato sano y con mucho sabor.','    300 g de lentejas pardina\n    1 boniato\n    1 cebolla\n    1 puerro\n    1 pimiento verde\n    2 tomates\n    1 diente de ajo\n    1 cucharadita de semillas de cilantro\n    1 cucharadita de comino\n    1 cucharadita de cÃºrcuma\n    1 cucharadita de pimentÃ³n\n    1 cucharadita de mostaza en grano\n    agua\n    aceite de oliva virgen extra\n    sal\n    vinagreta','<p>Corta el boniato en dos a lo largo, colÃ³calo en una fuente de horno y adereza con unos cristales de sal y un chorrito de aceite. Introduce en el horno y Ã¡salo a 190ÂºC, durante 30 minutos. Trocea y reserva.</p>\n<p>Tuesta las semillas de cilantro, el comino, la mostaza, la cÃºrcuma y el pimentÃ³n en una sartÃ©n sin aceite. Reserva.</p>\n<p>Pica el diente ajo y dÃ³ralo en una cazuela con un buen chorro de aceite. AÃ±ade la cebolla, el pimiento verde, el puerro y los tomates, todo bien picado y deja que se pochen. Agrega las lentejas y rehoga brevemente. Incorpora las especias tostadas, cubre con agua (3-4 dedos por encima de las lentejas), sazona y cocina el conjunto a fuego suave durante 40 minutos. Semitapa.</p>\n<p>Sirve las lentejas en un plato hondo, acompaÃ±a con el boniato asado y adereza con vinagreta.</p>','2014-02-23 00:00:00');

/*!40000 ALTER TABLE `recetas` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
