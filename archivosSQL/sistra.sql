-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-04-2018 a las 22:49:47
-- Versión del servidor: 5.7.22-0ubuntu0.17.10.1
-- Versión de PHP: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(10) UNSIGNED NOT NULL,
  `departamento_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `departamento_id`, `nombre`) VALUES
(1, 1, 'MEDELLIN'),
(2, 1, 'ABEJORRAL'),
(3, 1, 'ABRIAQUI'),
(4, 1, 'ALEJANDRIA'),
(5, 1, 'AMAGA'),
(6, 1, 'AMALFI'),
(7, 1, 'ANDES'),
(8, 1, 'ANGELOPOLIS'),
(9, 1, 'ANGOSTURA'),
(10, 1, 'ANORI'),
(11, 1, 'SANTAFE DE ANTIOQUIA'),
(12, 1, 'ANZA'),
(13, 1, 'APARTADO'),
(14, 1, 'ARBOLETES'),
(15, 1, 'ARGELIA'),
(16, 1, 'ARMENIA'),
(17, 1, 'BARBOSA'),
(18, 1, 'BELMIRA'),
(19, 1, 'BELLO'),
(20, 1, 'BETANIA'),
(21, 1, 'BETULIA'),
(22, 1, 'CIUDAD BOLIVAR'),
(23, 1, 'BRICEÑO'),
(24, 1, 'BURITICA'),
(25, 1, 'CACERES'),
(26, 1, 'CAICEDO'),
(27, 1, 'CALDAS'),
(28, 1, 'CAMPAMENTO'),
(29, 1, 'CAÑASGORDAS'),
(30, 1, 'CARACOLI'),
(31, 1, 'CARAMANTA'),
(32, 1, 'CAREPA'),
(33, 1, 'EL CARMEN DE VIBORAL'),
(34, 1, 'CAROLINA'),
(35, 1, 'CAUCASIA'),
(36, 1, 'CHIGORODO'),
(37, 1, 'CISNEROS'),
(38, 1, 'COCORNA'),
(39, 1, 'CONCEPCION'),
(40, 1, 'CONCORDIA'),
(41, 1, 'COPACABANA'),
(42, 1, 'DABEIBA'),
(43, 1, 'DON MATIAS'),
(44, 1, 'EBEJICO'),
(45, 1, 'EL BAGRE'),
(46, 1, 'ENTRERRIOS'),
(47, 1, 'ENVIGADO'),
(48, 1, 'FREDONIA'),
(49, 1, 'FRONTINO'),
(50, 1, 'GIRALDO'),
(51, 1, 'GIRARDOTA'),
(52, 1, 'GOMEZ PLATA'),
(53, 1, 'GRANADA'),
(54, 1, 'GUADALUPE'),
(55, 1, 'GUARNE'),
(56, 1, 'GUATAPE'),
(57, 1, 'HELICONIA'),
(58, 1, 'HISPANIA'),
(59, 1, 'ITAGUI'),
(60, 1, 'ITUANGO'),
(61, 1, 'JARDIN'),
(62, 1, 'JERICO'),
(63, 1, 'LA CEJA'),
(64, 1, 'LA ESTRELLA'),
(65, 1, 'LA PINTADA'),
(66, 1, 'LA UNION'),
(67, 1, 'LIBORINA'),
(68, 1, 'MACEO'),
(69, 1, 'MARINILLA'),
(70, 1, 'MONTEBELLO'),
(71, 1, 'MURINDO'),
(72, 1, 'MUTATA'),
(73, 1, 'NARIÑO'),
(74, 1, 'NECOCLI'),
(75, 1, 'NECHI'),
(76, 1, 'OLAYA'),
(77, 1, 'PEÐOL'),
(78, 1, 'PEQUE'),
(79, 1, 'PUEBLORRICO'),
(80, 1, 'PUERTO BERRIO'),
(81, 1, 'PUERTO NARE'),
(82, 1, 'PUERTO TRIUNFO'),
(83, 1, 'REMEDIOS'),
(84, 1, 'RETIRO'),
(85, 1, 'RIONEGRO'),
(86, 1, 'SABANALARGA'),
(87, 1, 'SABANETA'),
(88, 1, 'SALGAR'),
(89, 1, 'SAN ANDRES DE CUERQUIA'),
(90, 1, 'SAN CARLOS'),
(91, 1, 'SAN FRANCISCO'),
(92, 1, 'SAN JERONIMO'),
(93, 1, 'SAN JOSE DE LA MONTAÑA'),
(94, 1, 'SAN JUAN DE URABA'),
(95, 1, 'SAN LUIS'),
(96, 1, 'SAN PEDRO'),
(97, 1, 'SAN PEDRO DE URABA'),
(98, 1, 'SAN RAFAEL'),
(99, 1, 'SAN ROQUE'),
(100, 1, 'SAN VICENTE'),
(101, 1, 'SANTA BARBARA'),
(102, 1, 'SANTA ROSA DE OSOS'),
(103, 1, 'SANTO DOMINGO'),
(104, 1, 'EL SANTUARIO'),
(105, 1, 'SEGOVIA'),
(106, 1, 'SONSON'),
(107, 1, 'SOPETRAN'),
(108, 1, 'TAMESIS'),
(109, 1, 'TARAZA'),
(110, 1, 'TARSO'),
(111, 1, 'TITIRIBI'),
(112, 1, 'TOLEDO'),
(113, 1, 'TURBO'),
(114, 1, 'URAMITA'),
(115, 1, 'URRAO'),
(116, 1, 'VALDIVIA'),
(117, 1, 'VALPARAISO'),
(118, 1, 'VEGACHI'),
(119, 1, 'VENECIA'),
(120, 1, 'VIGIA DEL FUERTE'),
(121, 1, 'YALI'),
(122, 1, 'YARUMAL'),
(123, 1, 'YOLOMBO'),
(124, 1, 'YONDO'),
(125, 1, 'ZARAGOZA'),
(126, 2, 'BARRANQUILLA'),
(127, 2, 'BARANOA'),
(128, 2, 'CAMPO DE LA CRUZ'),
(129, 2, 'CANDELARIA'),
(130, 2, 'GALAPA'),
(131, 2, 'JUAN DE ACOSTA'),
(132, 2, 'LURUACO'),
(133, 2, 'MALAMBO'),
(134, 2, 'MANATI'),
(135, 2, 'PALMAR DE VARELA'),
(136, 2, 'PIOJO'),
(137, 2, 'POLONUEVO'),
(138, 2, 'PONEDERA'),
(139, 2, 'PUERTO COLOMBIA'),
(140, 2, 'REPELON'),
(141, 2, 'SABANAGRANDE'),
(142, 2, 'SABANALARGA'),
(143, 2, 'SANTA LUCIA'),
(144, 2, 'SANTO TOMAS'),
(145, 2, 'SOLEDAD'),
(146, 2, 'SUAN'),
(147, 2, 'TUBARA'),
(148, 2, 'USIACURI'),
(149, 3, 'BOGOTA, D.C.'),
(150, 4, 'CARTAGENA'),
(151, 4, 'ACHI'),
(152, 4, 'ALTOS DEL ROSARIO'),
(153, 4, 'ARENAL'),
(154, 4, 'ARJONA'),
(155, 4, 'ARROYOHONDO'),
(156, 4, 'BARRANCO DE LOBA'),
(157, 4, 'CALAMAR'),
(158, 4, 'CANTAGALLO'),
(159, 4, 'CICUCO'),
(160, 4, 'CORDOBA'),
(161, 4, 'CLEMENCIA'),
(162, 4, 'EL CARMEN DE BOLIVAR'),
(163, 4, 'EL GUAMO'),
(164, 4, 'EL PEÑON'),
(165, 4, 'HATILLO DE LOBA'),
(166, 4, 'MAGANGUE'),
(167, 4, 'MAHATES'),
(168, 4, 'MARGARITA'),
(169, 4, 'MARIA LA BAJA'),
(170, 4, 'MONTECRISTO'),
(171, 4, 'MOMPOS'),
(172, 4, 'NOROSI'),
(173, 4, 'MORALES'),
(174, 4, 'PINILLOS'),
(175, 4, 'REGIDOR'),
(176, 4, 'RIO VIEJO'),
(177, 4, 'SAN CRISTOBAL'),
(178, 4, 'SAN ESTANISLAO'),
(179, 4, 'SAN FERNANDO'),
(180, 4, 'SAN JACINTO'),
(181, 4, 'SAN JACINTO DEL CAUCA'),
(182, 4, 'SAN JUAN NEPOMUCENO'),
(183, 4, 'SAN MARTIN DE LOBA'),
(184, 4, 'SAN PABLO'),
(185, 4, 'SANTA CATALINA'),
(186, 4, 'SANTA ROSA'),
(187, 4, 'SANTA ROSA DEL SUR'),
(188, 4, 'SIMITI'),
(189, 4, 'SOPLAVIENTO'),
(190, 4, 'TALAIGUA NUEVO'),
(191, 4, 'TIQUISIO'),
(192, 4, 'TURBACO'),
(193, 4, 'TURBANA'),
(194, 4, 'VILLANUEVA'),
(195, 4, 'ZAMBRANO'),
(196, 5, 'TUNJA'),
(197, 5, 'ALMEIDA'),
(198, 5, 'AQUITANIA'),
(199, 5, 'ARCABUCO'),
(200, 5, 'BELEN'),
(201, 5, 'BERBEO'),
(202, 5, 'BETEITIVA'),
(203, 5, 'BOAVITA'),
(204, 5, 'BOYACA'),
(205, 5, 'BRICEÑO'),
(206, 5, 'BUENAVISTA'),
(207, 5, 'BUSBANZA'),
(208, 5, 'CALDAS'),
(209, 5, 'CAMPOHERMOSO'),
(210, 5, 'CERINZA'),
(211, 5, 'CHINAVITA'),
(212, 5, 'CHIQUINQUIRA'),
(213, 5, 'CHISCAS'),
(214, 5, 'CHITA'),
(215, 5, 'CHITARAQUE'),
(216, 5, 'CHIVATA'),
(217, 5, 'CIENEGA'),
(218, 5, 'COMBITA'),
(219, 5, 'COPER'),
(220, 5, 'CORRALES'),
(221, 5, 'COVARACHIA'),
(222, 5, 'CUBARA'),
(223, 5, 'CUCAITA'),
(224, 5, 'CUITIVA'),
(225, 5, 'CHIQUIZA'),
(226, 5, 'CHIVOR'),
(227, 5, 'DUITAMA'),
(228, 5, 'EL COCUY'),
(229, 5, 'EL ESPINO'),
(230, 5, 'FIRAVITOBA'),
(231, 5, 'FLORESTA'),
(232, 5, 'GACHANTIVA'),
(233, 5, 'GAMEZA'),
(234, 5, 'GARAGOA'),
(235, 5, 'GUACAMAYAS'),
(236, 5, 'GUATEQUE'),
(237, 5, 'GUAYATA'),
(238, 5, 'GsICAN'),
(239, 5, 'IZA'),
(240, 5, 'JENESANO'),
(241, 5, 'JERICO'),
(242, 5, 'LABRANZAGRANDE'),
(243, 5, 'LA CAPILLA'),
(244, 5, 'LA VICTORIA'),
(245, 5, 'LA UVITA'),
(246, 5, 'VILLA DE LEYVA'),
(247, 5, 'MACANAL'),
(248, 5, 'MARIPI'),
(249, 5, 'MIRAFLORES'),
(250, 5, 'MONGUA'),
(251, 5, 'MONGUI'),
(252, 5, 'MONIQUIRA'),
(253, 5, 'MOTAVITA'),
(254, 5, 'MUZO'),
(255, 5, 'NOBSA'),
(256, 5, 'NUEVO COLON'),
(257, 5, 'OICATA'),
(258, 5, 'OTANCHE'),
(259, 5, 'PACHAVITA'),
(260, 5, 'PAEZ'),
(261, 5, 'PAIPA'),
(262, 5, 'PAJARITO'),
(263, 5, 'PANQUEBA'),
(264, 5, 'PAUNA'),
(265, 5, 'PAYA'),
(266, 5, 'PAZ DE RIO'),
(267, 5, 'PESCA'),
(268, 5, 'PISBA'),
(269, 5, 'PUERTO BOYACA'),
(270, 5, 'QUIPAMA'),
(271, 5, 'RAMIRIQUI'),
(272, 5, 'RAQUIRA'),
(273, 5, 'RONDON'),
(274, 5, 'SABOYA'),
(275, 5, 'SACHICA'),
(276, 5, 'SAMACA'),
(277, 5, 'SAN EDUARDO'),
(278, 5, 'SAN JOSE DE PARE'),
(279, 5, 'SAN LUIS DE GACENO'),
(280, 5, 'SAN MATEO'),
(281, 5, 'SAN MIGUEL DE SEMA'),
(282, 5, 'SAN PABLO DE BORBUR'),
(283, 5, 'SANTANA'),
(284, 5, 'SANTA MARIA'),
(285, 5, 'SANTA ROSA DE VITERBO'),
(286, 5, 'SANTA SOFIA'),
(287, 5, 'SATIVANORTE'),
(288, 5, 'SATIVASUR'),
(289, 5, 'SIACHOQUE'),
(290, 5, 'SOATA'),
(291, 5, 'SOCOTA'),
(292, 5, 'SOCHA'),
(293, 5, 'SOGAMOSO'),
(294, 5, 'SOMONDOCO'),
(295, 5, 'SORA'),
(296, 5, 'SOTAQUIRA'),
(297, 5, 'SORACA'),
(298, 5, 'SUSACON'),
(299, 5, 'SUTAMARCHAN'),
(300, 5, 'SUTATENZA'),
(301, 5, 'TASCO'),
(302, 5, 'TENZA'),
(303, 5, 'TIBANA'),
(304, 5, 'TIBASOSA'),
(305, 5, 'TINJACA'),
(306, 5, 'TIPACOQUE'),
(307, 5, 'TOCA'),
(308, 5, 'TOGsI'),
(309, 5, 'TOPAGA'),
(310, 5, 'TOTA'),
(311, 5, 'TUNUNGUA'),
(312, 5, 'TURMEQUE'),
(313, 5, 'TUTA'),
(314, 5, 'TUTAZA'),
(315, 5, 'UMBITA'),
(316, 5, 'VENTAQUEMADA'),
(317, 5, 'VIRACACHA'),
(318, 5, 'ZETAQUIRA'),
(319, 6, 'MANIZALES'),
(320, 6, 'AGUADAS'),
(321, 6, 'ANSERMA'),
(322, 6, 'ARANZAZU'),
(323, 6, 'BELALCAZAR'),
(324, 6, 'CHINCHINA'),
(325, 6, 'FILADELFIA'),
(326, 6, 'LA DORADA'),
(327, 6, 'LA MERCED'),
(328, 6, 'MANZANARES'),
(329, 6, 'MARMATO'),
(330, 6, 'MARQUETALIA'),
(331, 6, 'MARULANDA'),
(332, 6, 'NEIRA'),
(333, 6, 'NORCASIA'),
(334, 6, 'PACORA'),
(335, 6, 'PALESTINA'),
(336, 6, 'PENSILVANIA'),
(337, 6, 'RIOSUCIO'),
(338, 6, 'RISARALDA'),
(339, 6, 'SALAMINA'),
(340, 6, 'SAMANA'),
(341, 6, 'SAN JOSE'),
(342, 6, 'SUPIA'),
(343, 6, 'VICTORIA'),
(344, 6, 'VILLAMARIA'),
(345, 6, 'VITERBO'),
(346, 7, 'FLORENCIA'),
(347, 7, 'ALBANIA'),
(348, 7, 'BELEN DE LOS ANDAQUIES'),
(349, 7, 'CARTAGENA DEL CHAIRA'),
(350, 7, 'CURILLO'),
(351, 7, 'EL DONCELLO'),
(352, 7, 'EL PAUJIL'),
(353, 7, 'LA MONTAÑITA'),
(354, 7, 'MILAN'),
(355, 7, 'MORELIA'),
(356, 7, 'PUERTO RICO'),
(357, 7, 'SAN JOSE DEL FRAGUA'),
(358, 7, 'SAN VICENTE DEL CAGUAN'),
(359, 7, 'SOLANO'),
(360, 7, 'SOLITA'),
(361, 7, 'VALPARAISO'),
(362, 8, 'POPAYAN'),
(363, 8, 'ALMAGUER'),
(364, 8, 'ARGELIA'),
(365, 8, 'BALBOA'),
(366, 8, 'BOLIVAR'),
(367, 8, 'BUENOS AIRES'),
(368, 8, 'CAJIBIO'),
(369, 8, 'CALDONO'),
(370, 8, 'CALOTO'),
(371, 8, 'CORINTO'),
(372, 8, 'EL TAMBO'),
(373, 8, 'FLORENCIA'),
(374, 8, 'GUACHENE'),
(375, 8, 'GUAPI'),
(376, 8, 'INZA'),
(377, 8, 'JAMBALO'),
(378, 8, 'LA SIERRA'),
(379, 8, 'LA VEGA'),
(380, 8, 'LOPEZ'),
(381, 8, 'MERCADERES'),
(382, 8, 'MIRANDA'),
(383, 8, 'MORALES'),
(384, 8, 'PADILLA'),
(385, 8, 'PAEZ'),
(386, 8, 'PATIA'),
(387, 8, 'PIAMONTE'),
(388, 8, 'PIENDAMO'),
(389, 8, 'PUERTO TEJADA'),
(390, 8, 'PURACE'),
(391, 8, 'ROSAS'),
(392, 8, 'SAN SEBASTIAN'),
(393, 8, 'SANTANDER DE QUILICHAO'),
(394, 8, 'SANTA ROSA'),
(395, 8, 'SILVIA'),
(396, 8, 'SOTARA'),
(397, 8, 'SUAREZ'),
(398, 8, 'SUCRE'),
(399, 8, 'TIMBIO'),
(400, 8, 'TIMBIQUI'),
(401, 8, 'TORIBIO'),
(402, 8, 'TOTORO'),
(403, 8, 'VILLA RICA'),
(404, 9, 'VALLEDUPAR'),
(405, 9, 'AGUACHICA'),
(406, 9, 'AGUSTIN CODAZZI'),
(407, 9, 'ASTREA'),
(408, 9, 'BECERRIL'),
(409, 9, 'BOSCONIA'),
(410, 9, 'CHIMICHAGUA'),
(411, 9, 'CHIRIGUANA'),
(412, 9, 'CURUMANI'),
(413, 9, 'EL COPEY'),
(414, 9, 'EL PASO'),
(415, 9, 'GAMARRA'),
(416, 9, 'GONZALEZ'),
(417, 9, 'LA GLORIA'),
(418, 9, 'LA JAGUA DE IBIRICO'),
(419, 9, 'MANAURE'),
(420, 9, 'PAILITAS'),
(421, 9, 'PELAYA'),
(422, 9, 'PUEBLO BELLO'),
(423, 9, 'RIO DE ORO'),
(424, 9, 'LA PAZ'),
(425, 9, 'SAN ALBERTO'),
(426, 9, 'SAN DIEGO'),
(427, 9, 'SAN MARTIN'),
(428, 9, 'TAMALAMEQUE'),
(429, 10, 'MONTERIA'),
(430, 10, 'AYAPEL'),
(431, 10, 'BUENAVISTA'),
(432, 10, 'CANALETE'),
(433, 10, 'CERETE'),
(434, 10, 'CHIMA'),
(435, 10, 'CHINU'),
(436, 10, 'CIENAGA DE ORO'),
(437, 10, 'COTORRA'),
(438, 10, 'LA APARTADA'),
(439, 10, 'LORICA'),
(440, 10, 'LOS CORDOBAS'),
(441, 10, 'MOMIL'),
(442, 10, 'MONTELIBANO'),
(443, 10, 'MOÑITOS'),
(444, 10, 'PLANETA RICA'),
(445, 10, 'PUEBLO NUEVO'),
(446, 10, 'PUERTO ESCONDIDO'),
(447, 10, 'PUERTO LIBERTADOR'),
(448, 10, 'PURISIMA'),
(449, 10, 'SAHAGUN'),
(450, 10, 'SAN ANDRES SOTAVENTO'),
(451, 10, 'SAN ANTERO'),
(452, 10, 'SAN BERNARDO DEL VIENTO'),
(453, 10, 'SAN CARLOS'),
(454, 10, 'SAN PELAYO'),
(455, 10, 'TIERRALTA'),
(456, 10, 'VALENCIA'),
(457, 11, 'AGUA DE DIOS'),
(458, 11, 'ALBAN'),
(459, 11, 'ANAPOIMA'),
(460, 11, 'ANOLAIMA'),
(461, 11, 'ARBELAEZ'),
(462, 11, 'BELTRAN'),
(463, 11, 'BITUIMA'),
(464, 11, 'BOJACA'),
(465, 11, 'CABRERA'),
(466, 11, 'CACHIPAY'),
(467, 11, 'CAJICA'),
(468, 11, 'CAPARRAPI'),
(469, 11, 'CAQUEZA'),
(470, 11, 'CARMEN DE CARUPA'),
(471, 11, 'CHAGUANI'),
(472, 11, 'CHIA'),
(473, 11, 'CHIPAQUE'),
(474, 11, 'CHOACHI'),
(475, 11, 'CHOCONTA'),
(476, 11, 'COGUA'),
(477, 11, 'COTA'),
(478, 11, 'CUCUNUBA'),
(479, 11, 'EL COLEGIO'),
(480, 11, 'EL PEÑON'),
(481, 11, 'EL ROSAL'),
(482, 11, 'FACATATIVA'),
(483, 11, 'FOMEQUE'),
(484, 11, 'FOSCA'),
(485, 11, 'FUNZA'),
(486, 11, 'FUQUENE'),
(487, 11, 'FUSAGASUGA'),
(488, 11, 'GACHALA'),
(489, 11, 'GACHANCIPA'),
(490, 11, 'GACHETA'),
(491, 11, 'GAMA'),
(492, 11, 'GIRARDOT'),
(493, 11, 'GRANADA'),
(494, 11, 'GUACHETA'),
(495, 11, 'GUADUAS'),
(496, 11, 'GUASCA'),
(497, 11, 'GUATAQUI'),
(498, 11, 'GUATAVITA'),
(499, 11, 'GUAYABAL DE SIQUIMA'),
(500, 11, 'GUAYABETAL'),
(501, 11, 'GUTIERREZ'),
(502, 11, 'JERUSALEN'),
(503, 11, 'JUNIN'),
(504, 11, 'LA CALERA'),
(505, 11, 'LA MESA'),
(506, 11, 'LA PALMA'),
(507, 11, 'LA PEÑA'),
(508, 11, 'LA VEGA'),
(509, 11, 'LENGUAZAQUE'),
(510, 11, 'MACHETA'),
(511, 11, 'MADRID'),
(512, 11, 'MANTA'),
(513, 11, 'MEDINA'),
(514, 11, 'MOSQUERA'),
(515, 11, 'NARIÑO'),
(516, 11, 'NEMOCON'),
(517, 11, 'NILO'),
(518, 11, 'NIMAIMA'),
(519, 11, 'NOCAIMA'),
(520, 11, 'VENECIA'),
(521, 11, 'PACHO'),
(522, 11, 'PAIME'),
(523, 11, 'PANDI'),
(524, 11, 'PARATEBUENO'),
(525, 11, 'PASCA'),
(526, 11, 'PUERTO SALGAR'),
(527, 11, 'PULI'),
(528, 11, 'QUEBRADANEGRA'),
(529, 11, 'QUETAME'),
(530, 11, 'QUIPILE'),
(531, 11, 'APULO'),
(532, 11, 'RICAURTE'),
(533, 11, 'SAN ANTONIO DEL TEQUENDAMA'),
(534, 11, 'SAN BERNARDO'),
(535, 11, 'SAN CAYETANO'),
(536, 11, 'SAN FRANCISCO'),
(537, 11, 'SAN JUAN DE RIO SECO'),
(538, 11, 'SASAIMA'),
(539, 11, 'SESQUILE'),
(540, 11, 'SIBATE'),
(541, 11, 'SILVANIA'),
(542, 11, 'SIMIJACA'),
(543, 11, 'SOACHA'),
(544, 11, 'SOPO'),
(545, 11, 'SUBACHOQUE'),
(546, 11, 'SUESCA'),
(547, 11, 'SUPATA'),
(548, 11, 'SUSA'),
(549, 11, 'SUTATAUSA'),
(550, 11, 'TABIO'),
(551, 11, 'TAUSA'),
(552, 11, 'TENA'),
(553, 11, 'TENJO'),
(554, 11, 'TIBACUY'),
(555, 11, 'TIBIRITA'),
(556, 11, 'TOCAIMA'),
(557, 11, 'TOCANCIPA'),
(558, 11, 'TOPAIPI'),
(559, 11, 'UBALA'),
(560, 11, 'UBAQUE'),
(561, 11, 'VILLA DE SAN DIEGO DE UBATE'),
(562, 11, 'UNE'),
(563, 11, 'UTICA'),
(564, 11, 'VERGARA'),
(565, 11, 'VIANI'),
(566, 11, 'VILLAGOMEZ'),
(567, 11, 'VILLAPINZON'),
(568, 11, 'VILLETA'),
(569, 11, 'VIOTA'),
(570, 11, 'YACOPI'),
(571, 11, 'ZIPACON'),
(572, 11, 'ZIPAQUIRA'),
(573, 12, 'QUIBDO'),
(574, 12, 'ACANDI'),
(575, 12, 'ALTO BAUDO'),
(576, 12, 'ATRATO'),
(577, 12, 'BAGADO'),
(578, 12, 'BAHIA SOLANO'),
(579, 12, 'BAJO BAUDO'),
(580, 12, 'BOJAYA'),
(581, 12, 'EL CANTON DEL SAN PABLO'),
(582, 12, 'CARMEN DEL DARIEN'),
(583, 12, 'CERTEGUI'),
(584, 12, 'CONDOTO'),
(585, 12, 'EL CARMEN DE ATRATO'),
(586, 12, 'EL LITORAL DEL SAN JUAN'),
(587, 12, 'ISTMINA'),
(588, 12, 'JURADO'),
(589, 12, 'LLORO'),
(590, 12, 'MEDIO ATRATO'),
(591, 12, 'MEDIO BAUDO'),
(592, 12, 'MEDIO SAN JUAN'),
(593, 12, 'NOVITA'),
(594, 12, 'NUQUI'),
(595, 12, 'RIO IRO'),
(596, 12, 'RIO QUITO'),
(597, 12, 'RIOSUCIO'),
(598, 12, 'SAN JOSE DEL PALMAR'),
(599, 12, 'SIPI'),
(600, 12, 'TADO'),
(601, 12, 'UNGUIA'),
(602, 12, 'UNION PANAMERICANA'),
(603, 13, 'NEIVA'),
(604, 13, 'ACEVEDO'),
(605, 13, 'AGRADO'),
(606, 13, 'AIPE'),
(607, 13, 'ALGECIRAS'),
(608, 13, 'ALTAMIRA'),
(609, 13, 'BARAYA'),
(610, 13, 'CAMPOALEGRE'),
(611, 13, 'COLOMBIA'),
(612, 13, 'ELIAS'),
(613, 13, 'GARZON'),
(614, 13, 'GIGANTE'),
(615, 13, 'GUADALUPE'),
(616, 13, 'HOBO'),
(617, 13, 'IQUIRA'),
(618, 13, 'ISNOS'),
(619, 13, 'LA ARGENTINA'),
(620, 13, 'LA PLATA'),
(621, 13, 'NATAGA'),
(622, 13, 'OPORAPA'),
(623, 13, 'PAICOL'),
(624, 13, 'PALERMO'),
(625, 13, 'PALESTINA'),
(626, 13, 'PITAL'),
(627, 13, 'PITALITO'),
(628, 13, 'RIVERA'),
(629, 13, 'SALADOBLANCO'),
(630, 13, 'SAN AGUSTIN'),
(631, 13, 'SANTA MARIA'),
(632, 13, 'SUAZA'),
(633, 13, 'TARQUI'),
(634, 13, 'TESALIA'),
(635, 13, 'TELLO'),
(636, 13, 'TERUEL'),
(637, 13, 'TIMANA'),
(638, 13, 'VILLAVIEJA'),
(639, 13, 'YAGUARA'),
(640, 14, 'RIOHACHA'),
(641, 14, 'ALBANIA'),
(642, 14, 'BARRANCAS'),
(643, 14, 'DIBULLA'),
(644, 14, 'DISTRACCION'),
(645, 14, 'EL MOLINO'),
(646, 14, 'FONSECA'),
(647, 14, 'HATONUEVO'),
(648, 14, 'LA JAGUA DEL PILAR'),
(649, 14, 'MAICAO'),
(650, 14, 'MANAURE'),
(651, 14, 'SAN JUAN DEL CESAR'),
(652, 14, 'URIBIA'),
(653, 14, 'URUMITA'),
(654, 14, 'VILLANUEVA'),
(655, 15, 'SANTA MARTA'),
(656, 15, 'ALGARROBO'),
(657, 15, 'ARACATACA'),
(658, 15, 'ARIGUANI'),
(659, 15, 'CERRO SAN ANTONIO'),
(660, 15, 'CHIBOLO'),
(661, 15, 'CIENAGA'),
(662, 15, 'CONCORDIA'),
(663, 15, 'EL BANCO'),
(664, 15, 'EL PIÑON'),
(665, 15, 'EL RETEN'),
(666, 15, 'FUNDACION'),
(667, 15, 'GUAMAL'),
(668, 15, 'NUEVA GRANADA'),
(669, 15, 'PEDRAZA'),
(670, 15, 'PIJIÑO DEL CARMEN'),
(671, 15, 'PIVIJAY'),
(672, 15, 'PLATO'),
(673, 15, 'PUEBLOVIEJO'),
(674, 15, 'REMOLINO'),
(675, 15, 'SABANAS DE SAN ANGEL'),
(676, 15, 'SALAMINA'),
(677, 15, 'SAN SEBASTIAN DE BUENAVISTA'),
(678, 15, 'SAN ZENON'),
(679, 15, 'SANTA ANA'),
(680, 15, 'SANTA BARBARA DE PINTO'),
(681, 15, 'SITIONUEVO'),
(682, 15, 'TENERIFE'),
(683, 15, 'ZAPAYAN'),
(684, 15, 'ZONA BANANERA'),
(685, 16, 'VILLAVICENCIO'),
(686, 16, 'ACACIAS'),
(687, 16, 'BARRANCA DE UPIA'),
(688, 16, 'CABUYARO'),
(689, 16, 'CASTILLA LA NUEVA'),
(690, 16, 'CUBARRAL'),
(691, 16, 'CUMARAL'),
(692, 16, 'EL CALVARIO'),
(693, 16, 'EL CASTILLO'),
(694, 16, 'EL DORADO'),
(695, 16, 'FUENTE DE ORO'),
(696, 16, 'GRANADA'),
(697, 16, 'GUAMAL'),
(698, 16, 'MAPIRIPAN'),
(699, 16, 'MESETAS'),
(700, 16, 'LA MACARENA'),
(701, 16, 'URIBE'),
(702, 16, 'LEJANIAS'),
(703, 16, 'PUERTO CONCORDIA'),
(704, 16, 'PUERTO GAITAN'),
(705, 16, 'PUERTO LOPEZ'),
(706, 16, 'PUERTO LLERAS'),
(707, 16, 'PUERTO RICO'),
(708, 16, 'RESTREPO'),
(709, 16, 'SAN CARLOS DE GUAROA'),
(710, 16, 'SAN JUAN DE ARAMA'),
(711, 16, 'SAN JUANITO'),
(712, 16, 'SAN MARTIN'),
(713, 16, 'VISTAHERMOSA'),
(714, 17, 'PASTO'),
(715, 17, 'ALBAN'),
(716, 17, 'ALDANA'),
(717, 17, 'ANCUYA'),
(718, 17, 'ARBOLEDA'),
(719, 17, 'BARBACOAS'),
(720, 17, 'BELEN'),
(721, 17, 'BUESACO'),
(722, 17, 'COLON'),
(723, 17, 'CONSACA'),
(724, 17, 'CONTADERO'),
(725, 17, 'CORDOBA'),
(726, 17, 'CUASPUD'),
(727, 17, 'CUMBAL'),
(728, 17, 'CUMBITARA'),
(729, 17, 'CHACHAGsI'),
(730, 17, 'EL CHARCO'),
(731, 17, 'EL PEÑOL'),
(732, 17, 'EL ROSARIO'),
(733, 17, 'EL TABLON DE GOMEZ'),
(734, 17, 'EL TAMBO'),
(735, 17, 'FUNES'),
(736, 17, 'GUACHUCAL'),
(737, 17, 'GUAITARILLA'),
(738, 17, 'GUALMATAN'),
(739, 17, 'ILES'),
(740, 17, 'IMUES'),
(741, 17, 'IPIALES'),
(742, 17, 'LA CRUZ'),
(743, 17, 'LA FLORIDA'),
(744, 17, 'LA LLANADA'),
(745, 17, 'LA TOLA'),
(746, 17, 'LA UNION'),
(747, 17, 'LEIVA'),
(748, 17, 'LINARES'),
(749, 17, 'LOS ANDES'),
(750, 17, 'MAGsI'),
(751, 17, 'MALLAMA'),
(752, 17, 'MOSQUERA'),
(753, 17, 'NARIÑO'),
(754, 17, 'OLAYA HERRERA'),
(755, 17, 'OSPINA'),
(756, 17, 'FRANCISCO PIZARRO'),
(757, 17, 'POLICARPA'),
(758, 17, 'POTOSI'),
(759, 17, 'PROVIDENCIA'),
(760, 17, 'PUERRES'),
(761, 17, 'PUPIALES'),
(762, 17, 'RICAURTE'),
(763, 17, 'ROBERTO PAYAN'),
(764, 17, 'SAMANIEGO'),
(765, 17, 'SANDONA'),
(766, 17, 'SAN BERNARDO'),
(767, 17, 'SAN LORENZO'),
(768, 17, 'SAN PABLO'),
(769, 17, 'SAN PEDRO DE CARTAGO'),
(770, 17, 'SANTA BARBARA'),
(771, 17, 'SANTACRUZ'),
(772, 17, 'SAPUYES'),
(773, 17, 'TAMINANGO'),
(774, 17, 'TANGUA'),
(775, 17, 'SAN ANDRES DE TUMACO'),
(776, 17, 'TUQUERRES'),
(777, 17, 'YACUANQUER'),
(778, 18, 'CUCUTA'),
(779, 18, 'ABREGO'),
(780, 18, 'ARBOLEDAS'),
(781, 18, 'BOCHALEMA'),
(782, 18, 'BUCARASICA'),
(783, 18, 'CACOTA'),
(784, 18, 'CACHIRA'),
(785, 18, 'CHINACOTA'),
(786, 18, 'CHITAGA'),
(787, 18, 'CONVENCION'),
(788, 18, 'CUCUTILLA'),
(789, 18, 'DURANIA'),
(790, 18, 'EL CARMEN'),
(791, 18, 'EL TARRA'),
(792, 18, 'EL ZULIA'),
(793, 18, 'GRAMALOTE'),
(794, 18, 'HACARI'),
(795, 18, 'HERRAN'),
(796, 18, 'LABATECA'),
(797, 18, 'LA ESPERANZA'),
(798, 18, 'LA PLAYA'),
(799, 18, 'LOS PATIOS'),
(800, 18, 'LOURDES'),
(801, 18, 'MUTISCUA'),
(802, 18, 'OCAÑA'),
(803, 18, 'PAMPLONA'),
(804, 18, 'PAMPLONITA'),
(805, 18, 'PUERTO SANTANDER'),
(806, 18, 'RAGONVALIA'),
(807, 18, 'SALAZAR'),
(808, 18, 'SAN CALIXTO'),
(809, 18, 'SAN CAYETANO'),
(810, 18, 'SANTIAGO'),
(811, 18, 'SARDINATA'),
(812, 18, 'SILOS'),
(813, 18, 'TEORAMA'),
(814, 18, 'TIBU'),
(815, 18, 'TOLEDO'),
(816, 18, 'VILLA CARO'),
(817, 18, 'VILLA DEL ROSARIO'),
(818, 19, 'ARMENIA'),
(819, 19, 'BUENAVISTA'),
(820, 19, 'CALARCA'),
(821, 19, 'CIRCASIA'),
(822, 19, 'CORDOBA'),
(823, 19, 'FILANDIA'),
(824, 19, 'GENOVA'),
(825, 19, 'LA TEBAIDA'),
(826, 19, 'MONTENEGRO'),
(827, 19, 'PIJAO'),
(828, 19, 'QUIMBAYA'),
(829, 19, 'SALENTO'),
(830, 20, 'PEREIRA'),
(831, 20, 'APIA'),
(832, 20, 'BALBOA'),
(833, 20, 'BELEN DE UMBRIA'),
(834, 20, 'DOSQUEBRADAS'),
(835, 20, 'GUATICA'),
(836, 20, 'LA CELIA'),
(837, 20, 'LA VIRGINIA'),
(838, 20, 'MARSELLA'),
(839, 20, 'MISTRATO'),
(840, 20, 'PUEBLO RICO'),
(841, 20, 'QUINCHIA'),
(842, 20, 'SANTA ROSA DE CABAL'),
(843, 20, 'SANTUARIO'),
(844, 21, 'BUCARAMANGA'),
(845, 21, 'AGUADA'),
(846, 21, 'ALBANIA'),
(847, 21, 'ARATOCA'),
(848, 21, 'BARBOSA'),
(849, 21, 'BARICHARA'),
(850, 21, 'BARRANCABERMEJA'),
(851, 21, 'BETULIA'),
(852, 21, 'BOLIVAR'),
(853, 21, 'CABRERA'),
(854, 21, 'CALIFORNIA'),
(855, 21, 'CAPITANEJO'),
(856, 21, 'CARCASI'),
(857, 21, 'CEPITA'),
(858, 21, 'CERRITO'),
(859, 21, 'CHARALA'),
(860, 21, 'CHARTA'),
(861, 21, 'CHIMA'),
(862, 21, 'CHIPATA'),
(863, 21, 'CIMITARRA'),
(864, 21, 'CONCEPCION'),
(865, 21, 'CONFINES'),
(866, 21, 'CONTRATACION'),
(867, 21, 'COROMORO'),
(868, 21, 'CURITI'),
(869, 21, 'EL CARMEN DE CHUCURI'),
(870, 21, 'EL GUACAMAYO'),
(871, 21, 'EL PEÑON'),
(872, 21, 'EL PLAYON'),
(873, 21, 'ENCINO'),
(874, 21, 'ENCISO'),
(875, 21, 'FLORIAN'),
(876, 21, 'FLORIDABLANCA'),
(877, 21, 'GALAN'),
(878, 21, 'GAMBITA'),
(879, 21, 'GIRON'),
(880, 21, 'GUACA'),
(881, 21, 'GUADALUPE'),
(882, 21, 'GUAPOTA'),
(883, 21, 'GUAVATA'),
(884, 21, 'GsEPSA'),
(885, 21, 'HATO'),
(886, 21, 'JESUS MARIA'),
(887, 21, 'JORDAN'),
(888, 21, 'LA BELLEZA'),
(889, 21, 'LANDAZURI'),
(890, 21, 'LA PAZ'),
(891, 21, 'LEBRIJA'),
(892, 21, 'LOS SANTOS'),
(893, 21, 'MACARAVITA'),
(894, 21, 'MALAGA'),
(895, 21, 'MATANZA'),
(896, 21, 'MOGOTES'),
(897, 21, 'MOLAGAVITA'),
(898, 21, 'OCAMONTE'),
(899, 21, 'OIBA'),
(900, 21, 'ONZAGA'),
(901, 21, 'PALMAR'),
(902, 21, 'PALMAS DEL SOCORRO'),
(903, 21, 'PARAMO'),
(904, 21, 'PIEDECUESTA'),
(905, 21, 'PINCHOTE'),
(906, 21, 'PUENTE NACIONAL'),
(907, 21, 'PUERTO PARRA'),
(908, 21, 'PUERTO WILCHES'),
(909, 21, 'RIONEGRO'),
(910, 21, 'SABANA DE TORRES'),
(911, 21, 'SAN ANDRES'),
(912, 21, 'SAN BENITO'),
(913, 21, 'SAN GIL'),
(914, 21, 'SAN JOAQUIN'),
(915, 21, 'SAN JOSE DE MIRANDA'),
(916, 21, 'SAN MIGUEL'),
(917, 21, 'SAN VICENTE DE CHUCURI'),
(918, 21, 'SANTA BARBARA'),
(919, 21, 'SANTA HELENA DEL OPON'),
(920, 21, 'SIMACOTA'),
(921, 21, 'SOCORRO'),
(922, 21, 'SUAITA'),
(923, 21, 'SUCRE'),
(924, 21, 'SURATA'),
(925, 21, 'TONA'),
(926, 21, 'VALLE DE SAN JOSE'),
(927, 21, 'VELEZ'),
(928, 21, 'VETAS'),
(929, 21, 'VILLANUEVA'),
(930, 21, 'ZAPATOCA'),
(931, 22, 'SINCELEJO'),
(932, 22, 'BUENAVISTA'),
(933, 22, 'CAIMITO'),
(934, 22, 'COLOSO'),
(935, 22, 'COROZAL'),
(936, 22, 'COVEÑAS'),
(937, 22, 'CHALAN'),
(938, 22, 'EL ROBLE'),
(939, 22, 'GALERAS'),
(940, 22, 'GUARANDA'),
(941, 22, 'LA UNION'),
(942, 22, 'LOS PALMITOS'),
(943, 22, 'MAJAGUAL'),
(944, 22, 'MORROA'),
(945, 22, 'OVEJAS'),
(946, 22, 'PALMITO'),
(947, 22, 'SAMPUES'),
(948, 22, 'SAN BENITO ABAD'),
(949, 22, 'SAN JUAN DE BETULIA'),
(950, 22, 'SAN MARCOS'),
(951, 22, 'SAN ONOFRE'),
(952, 22, 'SAN PEDRO'),
(953, 22, 'SAN LUIS DE SINCE'),
(954, 22, 'SUCRE'),
(955, 22, 'SANTIAGO DE TOLU'),
(956, 22, 'TOLU VIEJO'),
(957, 23, 'IBAGUE'),
(958, 23, 'ALPUJARRA'),
(959, 23, 'ALVARADO'),
(960, 23, 'AMBALEMA'),
(961, 23, 'ANZOATEGUI'),
(962, 23, 'ARMERO'),
(963, 23, 'ATACO'),
(964, 23, 'CAJAMARCA'),
(965, 23, 'CARMEN DE APICALA'),
(966, 23, 'CASABIANCA'),
(967, 23, 'CHAPARRAL'),
(968, 23, 'COELLO'),
(969, 23, 'COYAIMA'),
(970, 23, 'CUNDAY'),
(971, 23, 'DOLORES'),
(972, 23, 'ESPINAL'),
(973, 23, 'FALAN'),
(974, 23, 'FLANDES'),
(975, 23, 'FRESNO'),
(976, 23, 'GUAMO'),
(977, 23, 'HERVEO'),
(978, 23, 'HONDA'),
(979, 23, 'ICONONZO'),
(980, 23, 'LERIDA'),
(981, 23, 'LIBANO'),
(982, 23, 'MARIQUITA'),
(983, 23, 'MELGAR'),
(984, 23, 'MURILLO'),
(985, 23, 'NATAGAIMA'),
(986, 23, 'ORTEGA'),
(987, 23, 'PALOCABILDO'),
(988, 23, 'PIEDRAS'),
(989, 23, 'PLANADAS'),
(990, 23, 'PRADO'),
(991, 23, 'PURIFICACION'),
(992, 23, 'RIOBLANCO'),
(993, 23, 'RONCESVALLES'),
(994, 23, 'ROVIRA'),
(995, 23, 'SALDAÑA'),
(996, 23, 'SAN ANTONIO'),
(997, 23, 'SAN LUIS'),
(998, 23, 'SANTA ISABEL'),
(999, 23, 'SUAREZ'),
(1000, 23, 'VALLE DE SAN JUAN'),
(1001, 23, 'VENADILLO'),
(1002, 23, 'VILLAHERMOSA'),
(1003, 23, 'VILLARRICA'),
(1004, 24, 'CALI'),
(1005, 24, 'ALCALA'),
(1006, 24, 'ANDALUCIA'),
(1007, 24, 'ANSERMANUEVO'),
(1008, 24, 'ARGELIA'),
(1009, 24, 'BOLIVAR'),
(1010, 24, 'BUENAVENTURA'),
(1011, 24, 'GUADALAJARA DE BUGA'),
(1012, 24, 'BUGALAGRANDE'),
(1013, 24, 'CAICEDONIA'),
(1014, 24, 'CALIMA'),
(1015, 24, 'CANDELARIA'),
(1016, 24, 'CARTAGO'),
(1017, 24, 'DAGUA'),
(1018, 24, 'EL AGUILA'),
(1019, 24, 'EL CAIRO'),
(1020, 24, 'EL CERRITO'),
(1021, 24, 'EL DOVIO'),
(1022, 24, 'FLORIDA'),
(1023, 24, 'GINEBRA'),
(1024, 24, 'GUACARI'),
(1025, 24, 'JAMUNDI'),
(1026, 24, 'LA CUMBRE'),
(1027, 24, 'LA UNION'),
(1028, 24, 'LA VICTORIA'),
(1029, 24, 'OBANDO'),
(1030, 24, 'PALMIRA'),
(1031, 24, 'PRADERA'),
(1032, 24, 'RESTREPO'),
(1033, 24, 'RIOFRIO'),
(1034, 24, 'ROLDANILLO'),
(1035, 24, 'SAN PEDRO'),
(1036, 24, 'SEVILLA'),
(1037, 24, 'TORO'),
(1038, 24, 'TRUJILLO'),
(1039, 24, 'TULUA'),
(1040, 24, 'ULLOA'),
(1041, 24, 'VERSALLES'),
(1042, 24, 'VIJES'),
(1043, 24, 'YOTOCO'),
(1044, 24, 'YUMBO'),
(1045, 24, 'ZARZAL'),
(1046, 25, 'ARAUCA'),
(1047, 25, 'ARAUQUITA'),
(1048, 25, 'CRAVO NORTE'),
(1049, 25, 'FORTUL'),
(1050, 25, 'PUERTO RONDON'),
(1051, 25, 'SARAVENA'),
(1052, 25, 'TAME'),
(1053, 26, 'YOPAL'),
(1054, 26, 'AGUAZUL'),
(1055, 26, 'CHAMEZA'),
(1056, 26, 'HATO COROZAL'),
(1057, 26, 'LA SALINA'),
(1058, 26, 'MANI'),
(1059, 26, 'MONTERREY'),
(1060, 26, 'NUNCHIA'),
(1061, 26, 'OROCUE'),
(1062, 26, 'PAZ DE ARIPORO'),
(1063, 26, 'PORE'),
(1064, 26, 'RECETOR'),
(1065, 26, 'SABANALARGA'),
(1066, 26, 'SACAMA'),
(1067, 26, 'SAN LUIS DE PALENQUE'),
(1068, 26, 'TAMARA'),
(1069, 26, 'TAURAMENA'),
(1070, 26, 'TRINIDAD'),
(1071, 26, 'VILLANUEVA'),
(1072, 27, 'MOCOA'),
(1073, 27, 'COLON'),
(1074, 27, 'ORITO'),
(1075, 27, 'PUERTO ASIS'),
(1076, 27, 'PUERTO CAICEDO'),
(1077, 27, 'PUERTO GUZMAN'),
(1078, 27, 'LEGUIZAMO'),
(1079, 27, 'SIBUNDOY'),
(1080, 27, 'SAN FRANCISCO'),
(1081, 27, 'SAN MIGUEL'),
(1082, 27, 'SANTIAGO'),
(1083, 27, 'VALLE DEL GUAMUEZ'),
(1084, 27, 'VILLAGARZON'),
(1085, 28, 'SAN ANDRES'),
(1086, 28, 'PROVIDENCIA'),
(1087, 29, 'LETICIA'),
(1088, 29, 'EL ENCANTO'),
(1089, 29, 'LA CHORRERA'),
(1090, 29, 'LA PEDRERA'),
(1091, 29, 'LA VICTORIA'),
(1092, 29, 'MIRITI - PARANA'),
(1093, 29, 'PUERTO ALEGRIA'),
(1094, 29, 'PUERTO ARICA'),
(1095, 29, 'PUERTO NARIÑO'),
(1096, 29, 'PUERTO SANTANDER'),
(1097, 29, 'TARAPACA'),
(1098, 30, 'INIRIDA'),
(1099, 30, 'BARRANCO MINAS'),
(1100, 30, 'MAPIRIPANA'),
(1101, 30, 'SAN FELIPE'),
(1102, 30, 'PUERTO COLOMBIA'),
(1103, 30, 'LA GUADALUPE'),
(1104, 30, 'CACAHUAL'),
(1105, 30, 'PANA PANA'),
(1106, 30, 'MORICHAL'),
(1107, 31, 'SAN JOSE DEL GUAVIARE'),
(1108, 31, 'CALAMAR'),
(1109, 31, 'EL RETORNO'),
(1110, 31, 'MIRAFLORES'),
(1111, 32, 'MITU'),
(1112, 32, 'CARURU'),
(1113, 32, 'PACOA'),
(1114, 32, 'TARAIRA'),
(1115, 32, 'PAPUNAUA'),
(1116, 32, 'YAVARATE'),
(1117, 33, 'PUERTO CARREÑO'),
(1118, 33, 'LA PRIMAVERA'),
(1119, 33, 'SANTA ROSALIA'),
(1120, 33, 'CUMARIBO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre`) VALUES
(1, 'ANTIOQUIA'),
(2, 'ATLANTICO'),
(3, 'BOGOTA'),
(4, 'BOLIVAR'),
(5, 'BOYACA'),
(6, 'CALDAS'),
(7, 'CAQUETA'),
(8, 'CAUCA'),
(9, 'CESAR'),
(10, 'CORDOBA'),
(11, 'CUNDINAMARCA'),
(12, 'CHOCO'),
(13, 'HUILA'),
(14, 'LA GUAJIRA'),
(15, 'MAGDALENA'),
(16, 'META'),
(17, 'NARIÑO'),
(18, 'N. DE SANTANDER'),
(19, 'QUINDIO'),
(20, 'RISARALDA'),
(21, 'SANTANDER'),
(22, 'SUCRE'),
(23, 'TOLIMA'),
(24, 'VALLE DEL CAUCA'),
(25, 'ARAUCA'),
(26, 'CASANARE'),
(27, 'PUTUMAYO'),
(28, 'SAN ANDRES'),
(29, 'AMAZONAS'),
(30, 'GUAINIA'),
(31, 'GUAVIARE'),
(32, 'VAUPES'),
(33, 'VICHADA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia_semana`
--

CREATE TABLE `dia_semana` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dia_semana`
--

INSERT INTO `dia_semana` (`id`, `descripcion`) VALUES
(1, 'LUNES'),
(2, 'MARTES'),
(3, 'MIERCOLES'),
(4, 'JUEVES'),
(5, 'VIERNES'),
(6, 'SABADO'),
(7, 'DOMINGO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id`, `nombre`) VALUES
(1, 'INGENIERIA DE SISTEMAS'),
(2, 'INGENIERIA DE COMPUTACION'),
(3, 'INGENIERIA DE SOFTWARE'),
(4, 'INGENIERIA MECATRONICA'),
(5, 'REDES ESTRUCTURADAS'),
(6, 'ROBOTICA'),
(7, 'DISEÑO GRAFICO'),
(8, 'ANALISTA DE SISTEMAS'),
(9, 'BASES DE DATOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_sesion`
--

CREATE TABLE `log_sesion` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) NOT NULL,
  `direccion_ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `log_sesion`
--

INSERT INTO `log_sesion` (`id`, `usuario_id`, `direccion_ip`, `created_at`, `updated_at`) VALUES
(1, 1234, '127.0.0.1', '2018-04-27 06:53:46', '2018-04-27 06:53:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_tabla_reseteo_contrasenas', 1),
(2, '2017_08_18_180516_tabla_sedes', 1),
(3, '2017_09_23_155052_tabla_departamento', 1),
(4, '2017_09_23_165011_tabla_ciudad', 1),
(5, '2017_09_23_192643_tabla_especialidad', 1),
(6, '2017_09_24_000000_tabla_crear_usuarios', 1),
(7, '2017_10_21_185420_dias_semana', 1),
(8, '2017_10_21_192316_transferencia', 1),
(9, '2017_10_21_204950_tabla_pivote_transferencia', 1),
(10, '2017_10_30_204541_log_sesion', 1),
(11, '2017_11_14_220206_usuario_horario', 1),
(12, '2017_11_23_224102_tabla_noticias', 1),
(13, '2017_12_06_131301_pivote_usuario_transferencia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '0',
  `autor` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `contenido`, `imagen`, `activo`, `autor`, `created_at`, `updated_at`) VALUES
(1, 'socio', '<p>dsfdsfdsfjkdsjfkldjskfjdslkfjldksjflkdsjflkdsjflkdsjflkdsjflkdsjflksjflksdjflkdsjflkdjsffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffs</p>', '.jpg', 1, 1234, '2018-04-27 06:56:43', '2018-04-27 07:40:43'),
(2, 'socio 2', '<p>dfdsfdsfsffffffffffffffffffffffffffffffdfdsfdsfsffffffffffffffffffffffffffffffdfdsfdsfsffffffffffffffffffffffffffffffdfdsfdsfsffffffffffffffffffffffffffffffdfdsfdsfsffffffffffffffffffffffffffffffdfdsfdsfsffffffffffffffffffffffffffffffdfdsfdsfsffffffffffffffffffffffffffffffdfdsfdsfsffffffffffffffffffffffffffffffdfdsfdsfsffffffffffffffffffffffffffffffdfdsfdsfsffffffffffffffffffffffffffffffdfdsfdsfsffffffffffffffffffffffffffffffdfdsfdsfsffffffffffffffffffffffffffffff</p>', '.jpg', 1, 1234, '2018-04-27 06:57:07', '2018-04-27 07:40:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reinicio_contrasena`
--

CREATE TABLE `reinicio_contrasena` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id`, `nombre`, `direccion`, `created_at`, `updated_at`) VALUES
(2, 'Barrio Colombia', 'Calle 26 # 30 - 65', '2017-11-25 17:40:46', '2017-11-25 17:40:46'),
(3, 'Restrepo', 'Carrera 30 # 6 - 25', '2017-11-25 17:41:45', '2017-11-25 17:41:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencia`
--

CREATE TABLE `transferencia` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `especialidad_id` int(10) UNSIGNED NOT NULL,
  `sede_id` int(10) UNSIGNED NOT NULL,
  `cupos` int(11) NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `transferencia`
--

INSERT INTO `transferencia` (`id`, `nombre`, `fecha_inicio`, `fecha_fin`, `especialidad_id`, `sede_id`, `cupos`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Desarrollo en ASP.NET', '2018-01-01', '2018-01-31', 1, 2, 20, 'Desarrollo en MVC', '2017-12-09 03:17:56', '2017-12-09 03:17:56'),
(2, 'SQL Server', '2017-12-16', '2017-12-30', 1, 2, 20, 'Consultas avanzadas', '2017-12-09 03:30:07', '2017-12-09 03:30:07'),
(3, 'Metodos practicos', '2018-01-01', '2018-01-30', 1, 3, 30, 'Tecnicas de recolección de  la informacion interactuando con interezado en la solución.', '2017-12-09 04:22:02', '2017-12-09 04:22:02'),
(4, 'Laravel', '2018-02-01', '2018-02-22', 1, 2, 10, 'Iniciación a Laravel', '2017-12-09 04:38:41', '2017-12-09 04:38:41'),
(5, 'INGLES', '2017-12-22', '2017-12-30', 1, 2, 12, 'ESFDF', '2017-12-09 16:50:00', '2017-12-09 16:50:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencia_semana`
--

CREATE TABLE `transferencia_semana` (
  `id` int(10) UNSIGNED NOT NULL,
  `dia_semana_id` int(10) UNSIGNED NOT NULL,
  `transferencia_id` int(10) UNSIGNED NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula` bigint(20) UNSIGNED NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` bigint(20) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especialidad_id` int(10) UNSIGNED DEFAULT NULL,
  `ciudad_id` int(10) UNSIGNED NOT NULL,
  `rol_id` enum('administrador','sadministrador','docente') COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `fecha_nacimiento`, `nombres`, `apellidos`, `telefono`, `email`, `password`, `especialidad_id`, `ciudad_id`, `rol_id`, `activo`, `imagen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1234, '1989-07-19', 'Rafael', 'Plazas', 1234545, 'administrador@admin.com', '$2y$10$8YoZQ7OhRmTu2uvDzbZzr.nh5mpKUb39DNWjQLs7FzoE1kuiQi9qy', NULL, 149, 'administrador', 1, '.jpeg', 't920rBTFFiwjhCLDecUKzQ4x331ItrEx9639XVcOHbASkBZsW4mAq4v1mb69', '2017-10-26 07:48:38', '2018-04-27 06:55:04'),
(4321, '2008-04-18', 'Super', 'Usuario', 23456789, 'Sistraceet@misena.edu.co', '$2y$10$3wXyEDi5oGnLGisBO3KYq.ebTxBwHNWx0Cx05uyJhqlefuKH2uvKy', NULL, 149, 'docente', 1, NULL, NULL, '2017-12-09 06:45:12', '2017-12-09 07:23:39'),
(12345, '2016-08-19', 'roberto', 'lopez', 234567, 'kkkjl@gmail.com', '$2y$10$49YwLprGmC5Ujhq7eGKXz.MaxSF5HTKkqGL67Ftptu7xZKXDn2Eq.', NULL, 149, 'docente', 1, NULL, 'Zogocj3VBu5DcO05tnKWu2r6sLXO4iqWqOuPJbcbUaZRwhmKFyY12STsndx0', '2017-10-26 07:55:18', '2017-10-26 09:56:15'),
(654321, '1900-10-04', 'Juan', 'Camelo', 123456, 'dagustin370@gmail.com', '$2y$10$Pofsb5JY2MytOoBQJ2cgOe.sKtr5DZ5jVf3AwKvrrlH1PTVjb6VUa', NULL, 149, 'docente', 1, NULL, NULL, '2017-12-09 16:31:02', '2018-04-27 06:58:49'),
(1234567, '1989-10-12', 'Rafael', 'Plazas', 1234567, 'rafael@misena.edu.co', '$2y$10$dlYU1KSlI5UBYFI/m3OtrODHWRcFWWqPHno3W4QRUY2PD5VinPNP2', 1, 149, 'docente', 1, NULL, 'jn6mcaVlVOiM2F35oeQQvdc5zi2pbZCGgNV8ktkpdGMYLWBEeutqgJcl8eZ1', '2017-10-26 08:57:08', '2017-12-09 03:53:47'),
(5698399, '2017-03-02', 'LUIS AGUSTIN', 'DIAZ BLANCO', 2305192, 'ladiaz9938@misena.edu.co', '$2y$10$ynDJCPe.il.s9QR8IfpfKOrYcB2BFJQ5SRTeWEOfqtcVXL.Ms6gdC', 1, 149, 'docente', 1, NULL, 'ek6b8khWCq1sfdsUwkFwCSd9HAUK5VCdX6K6kagGRimic3sC25tKp3TybJX8', '2017-11-25 19:01:07', '2017-12-09 05:26:14'),
(52231316, '2000-10-11', 'Esperanza', 'Sequeda Tolosa', 3123582880, 'edsequeda@misena.edu.co', '$2y$10$TLUuqOBoly799a9jfNNTxeOLauDyB5Gs1RkL7WkLAxTjZJ4tUkSp2', NULL, 149, 'docente', 1, NULL, NULL, '2017-11-25 18:57:13', '2017-11-25 19:14:37'),
(52987379, '1983-06-04', 'Sandra Yaneth', 'Ruiz Ruiz', 3204006936, 'sandi1129.jr@gmail.com', '$2y$10$kJPVxsVinKKum1l8Eh6pwe1UydLpjTd09gudeb5sFQ2.W7reZeSHq', NULL, 149, 'docente', 1, NULL, NULL, '2017-11-25 18:59:44', '2017-11-25 19:14:31'),
(79951383, '1979-06-02', 'ivan rodrigo', 'sandoval', 3192786936, 'ivansandoval79@hotmail.com', '$2y$10$i9Gi1jQDkPRcRAMykoEYouYSsbJFRn3flecuWll/zowfkKIije4ha', 1, 362, 'docente', 1, NULL, 'q5oe4fzPH0lWKtvQx56e28QOwxpyl82UhSUoi63v70ZxaLp0a2KVDafjOQsp', '2017-11-25 19:13:44', '2017-12-09 03:53:55'),
(123456789, '1997-03-23', 'Camilo', 'Beltrán', 321456, 'ccamilo2303@gmail.com', '$2y$10$sLjwJqsogkliFtuVyhFYrOsy9aRnHdWuy.9Tc0GcIC80Lz2ILSdcS', NULL, 149, 'docente', 1, NULL, NULL, '2017-11-25 18:56:39', '2017-11-25 19:14:40'),
(1013649032, '1994-04-26', 'Ingrid', 'Sanchez', 3154421467, 'ilsanchez6@gmail.com', '$2y$10$ldGK49yTe3AdUASk9a50DeMXHR6vvosUt3xDGan1ZCs2rjHMe8siy', NULL, 149, 'docente', 1, NULL, NULL, '2017-11-25 18:57:30', '2017-11-25 19:14:35'),
(1013649036, '1994-04-26', 'Ingrid', 'Sanchez', 3154421467, 'Ingridlore04@gmail.com', '$2y$10$EDA58u8ZCIo4QyEK8M4yHOIyp9qA4D8/AYU8cZ3DRZnW7tfQsix6y', NULL, 149, 'docente', 1, NULL, NULL, '2017-11-25 18:56:30', '2017-11-25 19:14:46'),
(1014280338, '2017-11-02', 'CAROLINA', 'GUERRERO', 315545654522, 'fjsdklfjkls@gmail.com', '$2y$10$QTLwd3UOResBBaU7rNLe5.WunF1oJSMx8vaOUC04gbgQ6S231A4HC', NULL, 271, 'docente', 1, NULL, 'BqJIY4g60G0HYZyty8QxpJpc9YqwRK9Iw28GYsqtvxU3xRwjp04D15FPF4cb', '2017-11-04 21:30:56', '2017-11-25 19:14:48'),
(1016083892, '1996-02-16', 'Jeimy', 'Martinez', 3203355946, 'jkmartinez29@misena.edu.co', '$2y$10$xwOrS1KSbu1FF0hQmpGtQuoHGPJ.73eM3ZvPSvgN7O/MVy9.AGkxO', NULL, 149, 'docente', 1, NULL, NULL, '2017-11-25 19:07:22', '2017-11-25 19:14:26'),
(1016086666, '1996-04-27', 'Miguel Angel', 'Castro Tellez', 3123706435, 'MA9castro9@gmail.com', '$2y$10$hIxBYRD78MsHxEA2zIaBleEes6t5SakPINZ/gjt4cu0y3437.oaau', NULL, 149, 'docente', 1, NULL, NULL, '2017-11-25 18:56:43', '2017-11-25 19:19:34'),
(1023970895, '1998-09-10', 'roiner', 'gomez', 32065458754, 'regomez029@misena.edu.co', '$2y$10$wc4hY.NZvDflTbY6DgUNsODch8mgdxMlJUlYOB3dQdYYLMVm01.1e', NULL, 149, 'docente', 1, NULL, NULL, '2017-11-25 18:57:56', '2017-11-25 19:14:33'),
(1026299046, '1997-07-09', 'Juan Carlos', 'Correa Salazar', 3213300485, 'juan.carlos.1997@hotmail.com', '$2y$10$w9qu974nZqwP57cbaWOouO3mk/.KoZhhjyxs8h7Xu.IdWO/sW6kFe', NULL, 149, 'docente', 1, NULL, NULL, '2017-11-25 18:56:38', '2017-11-25 19:14:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_semana`
--

CREATE TABLE `usuario_semana` (
  `id` int(10) UNSIGNED NOT NULL,
  `dia_semana_id` int(10) UNSIGNED NOT NULL,
  `cedula_id` bigint(20) UNSIGNED NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_transferencia`
--

CREATE TABLE `usuario_transferencia` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `transferencia_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `ciudad_departamento_id_foreign` (`departamento_id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `dia_semana`
--
ALTER TABLE `dia_semana`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `log_sesion`
--
ALTER TABLE `log_sesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reinicio_contrasena`
--
ALTER TABLE `reinicio_contrasena`
  ADD KEY `reinicio_contrasena_email_index` (`email`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transferencia_especialidad_id_foreign` (`especialidad_id`),
  ADD KEY `transferencia_sede_id_foreign` (`sede_id`);

--
-- Indices de la tabla `transferencia_semana`
--
ALTER TABLE `transferencia_semana`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transferencia_semana_dia_semana_id_foreign` (`dia_semana_id`),
  ADD KEY `transferencia_semana_transferencia_id_foreign` (`transferencia_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`),
  ADD UNIQUE KEY `usuario_email_unique` (`email`),
  ADD KEY `usuario_especialidad_id_foreign` (`especialidad_id`),
  ADD KEY `usuario_ciudad_id_foreign` (`ciudad_id`);

--
-- Indices de la tabla `usuario_semana`
--
ALTER TABLE `usuario_semana`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_semana_dia_semana_id_foreign` (`dia_semana_id`),
  ADD KEY `usuario_semana_cedula_id_foreign` (`cedula_id`);

--
-- Indices de la tabla `usuario_transferencia`
--
ALTER TABLE `usuario_transferencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_transferencia_usuario_id_foreign` (`usuario_id`),
  ADD KEY `usuario_transferencia_transferencia_id_foreign` (`transferencia_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1121;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `dia_semana`
--
ALTER TABLE `dia_semana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `log_sesion`
--
ALTER TABLE `log_sesion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `transferencia_semana`
--
ALTER TABLE `transferencia_semana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario_semana`
--
ALTER TABLE `usuario_semana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario_transferencia`
--
ALTER TABLE `usuario_transferencia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `transferencia`
--
ALTER TABLE `transferencia`
  ADD CONSTRAINT `transferencia_especialidad_id_foreign` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidad` (`id`),
  ADD CONSTRAINT `transferencia_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sede` (`id`);

--
-- Filtros para la tabla `transferencia_semana`
--
ALTER TABLE `transferencia_semana`
  ADD CONSTRAINT `transferencia_semana_dia_semana_id_foreign` FOREIGN KEY (`dia_semana_id`) REFERENCES `dia_semana` (`id`),
  ADD CONSTRAINT `transferencia_semana_transferencia_id_foreign` FOREIGN KEY (`transferencia_id`) REFERENCES `transferencia` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ciudad_id_foreign` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudad` (`id_ciudad`),
  ADD CONSTRAINT `usuario_especialidad_id_foreign` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidad` (`id`);

--
-- Filtros para la tabla `usuario_semana`
--
ALTER TABLE `usuario_semana`
  ADD CONSTRAINT `usuario_semana_cedula_id_foreign` FOREIGN KEY (`cedula_id`) REFERENCES `usuario` (`cedula`),
  ADD CONSTRAINT `usuario_semana_dia_semana_id_foreign` FOREIGN KEY (`dia_semana_id`) REFERENCES `dia_semana` (`id`);

--
-- Filtros para la tabla `usuario_transferencia`
--
ALTER TABLE `usuario_transferencia`
  ADD CONSTRAINT `usuario_transferencia_transferencia_id_foreign` FOREIGN KEY (`transferencia_id`) REFERENCES `transferencia` (`id`),
  ADD CONSTRAINT `usuario_transferencia_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`cedula`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
