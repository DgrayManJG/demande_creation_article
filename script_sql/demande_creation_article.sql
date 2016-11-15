-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 15 Novembre 2016 à 19:10
-- Version du serveur: 5.5.45-log
-- Version de PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `demande_creation_article`
--

-- --------------------------------------------------------

--
-- Structure de la table `wa_accessoires`
--

CREATE TABLE IF NOT EXISTS `wa_accessoires` (
  `id_accessoire` int(11) NOT NULL AUTO_INCREMENT,
  `accessoire` varchar(45) DEFAULT NULL,
  `WA_contenu_demande_id_contenu_demande` int(11) NOT NULL,
  PRIMARY KEY (`id_accessoire`,`WA_contenu_demande_id_contenu_demande`),
  KEY `fk_WA_accessoires_WA_contenu_demande1_idx` (`WA_contenu_demande_id_contenu_demande`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=126 ;

--
-- Contenu de la table `wa_accessoires`
--

INSERT INTO `wa_accessoires` (`id_accessoire`, `accessoire`, `WA_contenu_demande_id_contenu_demande`) VALUES
(122, '', 80),
(123, '', 81),
(124, 'poutre', 82),
(125, 'sabot', 82);

-- --------------------------------------------------------

--
-- Structure de la table `wa_contenu_demande`
--

CREATE TABLE IF NOT EXISTS `wa_contenu_demande` (
  `id_contenu_demande` int(11) NOT NULL AUTO_INCREMENT,
  `gamme_produit` varchar(150) DEFAULT NULL,
  `volume_mois` int(11) DEFAULT NULL,
  `essence` varchar(45) DEFAULT NULL,
  `profil` varchar(45) DEFAULT NULL,
  `etat_surface` varchar(50) DEFAULT NULL COMMENT 'Raboté brossé, raboté, brut de sciage fin, autre',
  `conditionnement_botte` varchar(150) DEFAULT NULL COMMENT 'si réponse non dans le traitement le champs deviens null sinon on remplis le champs',
  `conditionnement_palette` varchar(150) DEFAULT NULL COMMENT 'si réponse non dans le traitement le champs deviens null sinon on remplis le champs',
  `libelle_famille` varchar(150) NOT NULL,
  `libelle_sous_famille` varchar(150) NOT NULL,
  `unite_vente` varchar(45) DEFAULT NULL COMMENT 'default : M², M³, CTML, unite, botte',
  `unite_facture` varchar(45) DEFAULT NULL COMMENT 'default : M², M³, CTML, unite, botte',
  `produit_spec_client` varchar(45) DEFAULT NULL COMMENT 'produit spécifique pour un client',
  `etiquette_botte` varchar(45) DEFAULT NULL COMMENT 'si réponse non dans le traitement le champs deviens null sinon on remplis le champs\n\nchoix étiquette = MDD, CARIB, SILVERWOOD, NEUTRE',
  `etiquette_gencod` varchar(200) DEFAULT NULL COMMENT 'si réponse non dans le traitement le champs deviens null sinon on remplis le champs\n\nchoix étiquette = libres, imposés par l''enseigne - Gencod à préciser',
  `normes_environnementales` varchar(45) DEFAULT NULL COMMENT 'defalut : FCS IMPOSÉ, PEFC IMPOSÉ, PEFC ou FSC seloon dispo',
  `marquage_ce` varchar(45) DEFAULT NULL COMMENT 'oui ou non',
  PRIMARY KEY (`id_contenu_demande`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Contenu de la table `wa_contenu_demande`
--

INSERT INTO `wa_contenu_demande` (`id_contenu_demande`, `gamme_produit`, `volume_mois`, `essence`, `profil`, `etat_surface`, `conditionnement_botte`, `conditionnement_palette`, `libelle_famille`, `libelle_sous_famille`, `unite_vente`, `unite_facture`, `produit_spec_client`, `etiquette_botte`, `etiquette_gencod`, `normes_environnementales`, `marquage_ce`) VALUES
(80, 'bois ', 50, '', NULL, 'neuf', 'non', 'non', 'CLINS - CB', 'BARDAGES BRUTS PROMO - 269', '', '', 'non', 'non', 'non', 'FSC IMPOSÉ', 'non'),
(81, 'sapin', 150, '', NULL, '', 'non', 'non', 'BANDEAUX - BA', 'PLANCHES DE RIVE PEINTES - 302', '', '', 'non', 'non', 'non', 'PEFC ou FSC selon dispo', 'non'),
(82, 'peuplier', 50, '40', NULL, 'neuf', 'blabla', 'blabla', 'ECO MOBILIER - EM', 'ECO MOBILIER - 521', '5000', '5001', 'le goff', 'SILVERWOOD', 'libres', 'PEFC IMPOSÉ', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `wa_couleur`
--

CREATE TABLE IF NOT EXISTS `wa_couleur` (
  `id_couleur` int(11) NOT NULL AUTO_INCREMENT,
  `couleur` varchar(45) DEFAULT NULL,
  `WA_contenu_demande_id_contenu_demande` int(11) NOT NULL,
  PRIMARY KEY (`id_couleur`,`WA_contenu_demande_id_contenu_demande`),
  KEY `fk_WA_couleur_WA_contenu_demande1_idx` (`WA_contenu_demande_id_contenu_demande`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=89 ;

--
-- Contenu de la table `wa_couleur`
--

INSERT INTO `wa_couleur` (`id_couleur`, `couleur`, `WA_contenu_demande_id_contenu_demande`) VALUES
(84, '', 80),
(85, '', 81),
(86, 'blanc', 82),
(87, 'noir', 82),
(88, 'rose', 82);

-- --------------------------------------------------------

--
-- Structure de la table `wa_demande`
--

CREATE TABLE IF NOT EXISTS `wa_demande` (
  `id_demande` int(11) NOT NULL AUTO_INCREMENT,
  `demandeur` varchar(150) DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `motif_demande` varchar(150) DEFAULT NULL,
  `WA_contenu_demande_id_contenu_demande` int(11) NOT NULL,
  PRIMARY KEY (`id_demande`,`WA_contenu_demande_id_contenu_demande`),
  KEY `fk_WA_demande_WA_contenu_demande1_idx` (`WA_contenu_demande_id_contenu_demande`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Contenu de la table `wa_demande`
--

INSERT INTO `wa_demande` (`id_demande`, `demandeur`, `date_demande`, `motif_demande`, `WA_contenu_demande_id_contenu_demande`) VALUES
(80, 'jimmy', '2016-11-14', '', 80),
(81, 'jimmy', '2016-11-14', '', 81),
(82, 'jimmy', '2016-11-14', 'blabla', 82);

-- --------------------------------------------------------

--
-- Structure de la table `wa_dimensions`
--

CREATE TABLE IF NOT EXISTS `wa_dimensions` (
  `id_dimensions` int(11) NOT NULL AUTO_INCREMENT,
  `longueur_m` varchar(45) DEFAULT NULL,
  `largeur_mm` varchar(45) DEFAULT NULL,
  `epaisseur_mm` varchar(45) DEFAULT NULL,
  `WA_contenu_demande_id_contenu_demande` int(11) NOT NULL,
  PRIMARY KEY (`id_dimensions`,`WA_contenu_demande_id_contenu_demande`),
  KEY `fk_WA_dimensions_WA_contenu_demande_idx` (`WA_contenu_demande_id_contenu_demande`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Contenu de la table `wa_dimensions`
--

INSERT INTO `wa_dimensions` (`id_dimensions`, `longueur_m`, `largeur_mm`, `epaisseur_mm`, `WA_contenu_demande_id_contenu_demande`) VALUES
(80, '', '', '', 80),
(81, '', '', '', 81),
(82, '50', '40', '70', 82);

-- --------------------------------------------------------

--
-- Structure de la table `wa_famille`
--

CREATE TABLE IF NOT EXISTS `wa_famille` (
  `id_famille` int(11) NOT NULL AUTO_INCREMENT,
  `CODE` varchar(20) NOT NULL,
  `LIBELLE` varchar(100) NOT NULL,
  `persistenceVersion` int(11) NOT NULL,
  PRIMARY KEY (`id_famille`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Contenu de la table `wa_famille`
--

INSERT INTO `wa_famille` (`id_famille`, `CODE`, `LIBELLE`, `persistenceVersion`) VALUES
(1, 'AI', 'AUTRES ARTICLES - AI', 0),
(2, 'BA', 'BANDEAUX - BA', 0),
(3, 'BV', 'BARRES VOLETS - BV', 0),
(4, 'BD', 'BARRES VOLETS DETAIL - BD', 0),
(5, 'BS', 'BIOCOMBUSTIBLES SOLIDES - BS', 0),
(6, 'BB', 'BOIS BRUTS DETAIL - BB', 0),
(7, 'SC', 'BOIS SCIES - SC', 0),
(8, 'CB', 'CLINS - CB', 0),
(9, 'CD', 'CLINS DÉTAILS - CD', 0),
(10, 'ZZ', 'CONSOMMABLES - ZZ', 0),
(11, 'CO', 'COPEAUX & SCIURES - CO', 0),
(12, 'EC', 'ECHANTILLONS - EC', 0),
(13, 'EM', 'ECO MOBILIER - EM', 0),
(14, 'EN', 'ENVIRONNEMENT - EN', 0),
(15, 'ED', 'ENVIRONNEMENT DETAIL - ED', 0),
(16, 'DI', 'FOURNITURES ET ART.DIVERS - DI', 0),
(17, 'HS', 'HORS STANDARD FABRIQUE - HS', 0),
(18, 'KI', 'KITS - KI', 0),
(19, 'VE', 'LAINES ISOLATION - VE', 0),
(20, 'LA', 'LAMBRIS - LA', 0),
(21, 'LD', 'LAMBRIS DÉTAIL - LD', 0),
(22, 'VD', 'LAMES VOLET DETAIL - VD', 0),
(23, 'LV', 'LAMES VOLETS - LV', 0),
(24, 'MO', 'MOULURES DETAIL - MO', 0),
(25, 'MP', 'MOULURES PAQUETS - MP', 0),
(26, 'PA', 'PLANCHERS - PA', 0),
(27, 'PI', 'PLINTHES - PI', 0),
(28, 'PD', 'PLINTHES DÉTAIL - PD', 0),
(29, 'PO', 'POUTRELLES - PO', 0),
(30, 'PW', 'POUTRELLES DÉTAIL - PW', 0),
(31, 'PC', 'POUTRES À CHALET - PC', 0),
(32, 'PR', 'PRESTATIONS - PR', 0),
(33, 'F4', 'RABOTES 4 FACES - F4', 0),
(34, 'RI', 'RABOTES INDUSTRIELS - RI', 0),
(35, 'RG', 'REGULARISATIONS - RG', 0),
(36, 'SH', 'SHAKES & SHINGLES - SH', 0),
(37, 'TB', 'TABLETTES AU DÉTAIL - TB', 0),
(38, 'TP', 'TABLETTES PAQUETS - TP', 0),
(39, 'TD', 'TASSEAU ET PLANCHE DÉTAIL - TD', 0),
(40, 'TA', 'TASSEAUX ET PLANCHES - TA', 0),
(41, 'TR', 'TRANSPORTS - TR', 0),
(42, 'VR', 'VOLIGE RABOTE - VR', 0);

-- --------------------------------------------------------

--
-- Structure de la table `wa_longueur`
--

CREATE TABLE IF NOT EXISTS `wa_longueur` (
  `id_longueur` int(11) NOT NULL AUTO_INCREMENT,
  `longueur_en_m` varchar(150) DEFAULT NULL,
  `ref_article_client` varchar(150) DEFAULT NULL,
  `gencod_client` varchar(150) DEFAULT NULL,
  `wa_nouvelle_longueur_id_nouvelle_longueur` int(11) NOT NULL,
  PRIMARY KEY (`id_longueur`,`wa_nouvelle_longueur_id_nouvelle_longueur`),
  KEY `fk_wa_longueur_wa_nouvelle_longueur1_idx` (`wa_nouvelle_longueur_id_nouvelle_longueur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `wa_longueur`
--

INSERT INTO `wa_longueur` (`id_longueur`, `longueur_en_m`, `ref_article_client`, `gencod_client`, `wa_nouvelle_longueur_id_nouvelle_longueur`) VALUES
(10, '458', 'KFIE774', 'HFEI8789', 5),
(11, '454', 'J9OFE', 'JN3OI904', 5),
(12, '45', 'JNO83U', 'FOI3OF', 6),
(13, '45', 'JHR032', 'HGR873', 7),
(14, '1000', 'JF903', 'dn3983', 7),
(15, '458', 'FDJ393', 'JNF03', 7),
(16, '546', 'FK39°3', 'JF038', 7);

-- --------------------------------------------------------

--
-- Structure de la table `wa_longueur_traitement`
--

CREATE TABLE IF NOT EXISTS `wa_longueur_traitement` (
  `id_longueur_traitement` int(11) NOT NULL AUTO_INCREMENT,
  `longueur_en_m` varchar(150) DEFAULT NULL,
  `ref_article_client` varchar(150) DEFAULT NULL,
  `gencod_client` varchar(150) DEFAULT NULL,
  `wa_new_trtmt_ask_id_new_trtmt_ask` int(11) NOT NULL,
  `wa_new_trtmt_ask_wa_new_trtmt_id_new_trtmt` int(11) NOT NULL,
  PRIMARY KEY (`id_longueur_traitement`,`wa_new_trtmt_ask_id_new_trtmt_ask`,`wa_new_trtmt_ask_wa_new_trtmt_id_new_trtmt`),
  KEY `fk_wa_longueur_traitement_wa_new_trtmt_ask1_idx` (`wa_new_trtmt_ask_id_new_trtmt_ask`,`wa_new_trtmt_ask_wa_new_trtmt_id_new_trtmt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `wa_longueur_traitement`
--

INSERT INTO `wa_longueur_traitement` (`id_longueur_traitement`, `longueur_en_m`, `ref_article_client`, `gencod_client`, `wa_new_trtmt_ask_id_new_trtmt_ask`, `wa_new_trtmt_ask_wa_new_trtmt_id_new_trtmt`) VALUES
(39, '456', 'JOF83', 'JFD03', 26, 20),
(40, '478', 'FOEJ', 'OFIJE', 26, 20),
(41, '278', 'NF39F3', 'F03F3F', 27, 20),
(42, '78', 'JFPOEI3', 'FJOEI03', 27, 20),
(43, '54', 'FEJOIFDE', 'FPOE', 28, 20),
(44, '78', 'foJHEO', 'JHFOUEJ', 28, 20),
(45, '21', 'JFO3', 'FJ390', 29, 21),
(46, '16', 'F3.IOF8O3', 'F3UFR3', 30, 21),
(47, '89', 'FOKJHEIU', 'HFD983', 30, 21);

-- --------------------------------------------------------

--
-- Structure de la table `wa_marque_commercial`
--

CREATE TABLE IF NOT EXISTS `wa_marque_commercial` (
  `id_marque_commercial` int(11) NOT NULL AUTO_INCREMENT,
  `marque_commercial` varchar(45) DEFAULT NULL,
  `mdd` varchar(150) DEFAULT NULL,
  `cnuf` varchar(150) DEFAULT NULL,
  `WA_contenu_demande_id_contenu_demande` int(11) NOT NULL,
  PRIMARY KEY (`id_marque_commercial`,`WA_contenu_demande_id_contenu_demande`),
  KEY `fk_marque_commercial_WA_contenu_demande1_idx` (`WA_contenu_demande_id_contenu_demande`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Contenu de la table `wa_marque_commercial`
--

INSERT INTO `wa_marque_commercial` (`id_marque_commercial`, `marque_commercial`, `mdd`, `cnuf`, `WA_contenu_demande_id_contenu_demande`) VALUES
(80, 'marque commerciale', '', '', 80),
(81, 'marque commerciale', '', '', 81),
(82, 'NEUTRE', '', '', 82);

-- --------------------------------------------------------

--
-- Structure de la table `wa_new_trtmt`
--

CREATE TABLE IF NOT EXISTS `wa_new_trtmt` (
  `id_new_trtmt` int(11) NOT NULL AUTO_INCREMENT,
  `demandeur` varchar(100) DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `motif_demande` varchar(200) DEFAULT NULL,
  `code_article_citis` varchar(150) DEFAULT NULL,
  `libelle_article_citis` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_new_trtmt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `wa_new_trtmt`
--

INSERT INTO `wa_new_trtmt` (`id_new_trtmt`, `demandeur`, `date_demande`, `motif_demande`, `code_article_citis`, `libelle_article_citis`) VALUES
(20, 'Jimmy', '2016-11-15', 'Blabla', 'saucisson', 'saucisson'),
(21, 'Sylvain', '2016-11-15', 'blabla', 'FJ390', 'F938HF');

-- --------------------------------------------------------

--
-- Structure de la table `wa_new_trtmt_ask`
--

CREATE TABLE IF NOT EXISTS `wa_new_trtmt_ask` (
  `id_new_trtmt_ask` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(45) DEFAULT NULL,
  `wa_new_trtmt_id_new_trtmt` int(11) NOT NULL,
  PRIMARY KEY (`id_new_trtmt_ask`,`wa_new_trtmt_id_new_trtmt`),
  KEY `fk_wa_new_trtmt_ask_wa_new_trtmt1_idx` (`wa_new_trtmt_id_new_trtmt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Contenu de la table `wa_new_trtmt_ask`
--

INSERT INTO `wa_new_trtmt_ask` (`id_new_trtmt_ask`, `libelle`, `wa_new_trtmt_id_new_trtmt`) VALUES
(26, 'traitement 1', 20),
(27, 'traitement 2', 20),
(28, 'traitement 3', 20),
(29, 'T1', 21),
(30, 'T2', 21);

-- --------------------------------------------------------

--
-- Structure de la table `wa_nouvelle_longueur`
--

CREATE TABLE IF NOT EXISTS `wa_nouvelle_longueur` (
  `id_nouvelle_longueur` int(11) NOT NULL AUTO_INCREMENT,
  `demandeur` varchar(100) DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `motif_demande` varchar(200) DEFAULT NULL,
  `code_article_citis` varchar(150) DEFAULT NULL,
  `libelle_article_citis` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_nouvelle_longueur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `wa_nouvelle_longueur`
--

INSERT INTO `wa_nouvelle_longueur` (`id_nouvelle_longueur`, `demandeur`, `date_demande`, `motif_demande`, `code_article_citis`, `libelle_article_citis`) VALUES
(5, 'jimmy', NULL, 'blabla', 'HOEM589', 'banane'),
(6, 'jimmy', '2016-11-15', 'blabla', 'banane', 'banane martinique'),
(7, 'jimmy', '2016-11-15', 'blabla', 'HI93JH', 'FJFD39');

-- --------------------------------------------------------

--
-- Structure de la table `wa_sous_famille`
--

CREATE TABLE IF NOT EXISTS `wa_sous_famille` (
  `id_sous_famille` int(11) NOT NULL AUTO_INCREMENT,
  `CODE` varchar(20) NOT NULL,
  `LIBELLE` varchar(100) NOT NULL,
  `persistenceVersion` int(11) NOT NULL,
  `WA_famille_id_famille` int(11) NOT NULL,
  `listeWA_sous_famille_ORDER` int(11) NOT NULL,
  PRIMARY KEY (`id_sous_famille`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=305 ;

--
-- Contenu de la table `wa_sous_famille`
--

INSERT INTO `wa_sous_famille` (`id_sous_famille`, `CODE`, `LIBELLE`, `persistenceVersion`, `WA_famille_id_famille`, `listeWA_sous_famille_ORDER`) VALUES
(1, '497', 'ABRIS JARDINS ET GARAGES - 497', 0, 14, 0),
(2, '298', 'ACC BOIS RECONSTITUÉ FINI - 298', 0, 8, 0),
(3, '476', 'ACCES. TERRASSES RX-GSB - 476', 0, 14, 1),
(4, '488', 'ACCES.CLOTURES COMPOSITES - 488', 0, 14, 2),
(5, '490', 'ACCES.CLOTURES RESINEUX - 490', 0, 14, 3),
(6, '486', 'ACCES.ECRAN RESINEUX - 486', 0, 14, 4),
(7, '468', 'ACCES.TERRASSE COMPO. GSB - 468', 0, 14, 5),
(8, '481', 'ACCES.TERRASSE COMPOSITES - 481', 0, 14, 6),
(9, '406', 'ACCES.TERRASSE EXOTIQUE - 406', 0, 14, 7),
(10, '482', 'ACCES.TERRASSE RESINEUX - 482', 0, 14, 8),
(11, '478', 'ACCES.TERRASSES RX FINIES - 478', 0, 14, 9),
(12, '507', 'ACCESOIRES ESCALIERS - 507', 0, 1, 0),
(13, '499', 'ACCESS.JEUX EXTERIEURS - 499', 0, 14, 10),
(14, '339', 'ACCESSOIRE LAMBRIS DETAIL - 339', 0, 21, 0),
(15, '290', 'ACCESSOIRES BARDAGES BRUT - 290', 0, 8, 1),
(16, '292', 'ACCESSOIRES BARDAGES FINI - 292', 0, 8, 2),
(17, '374', 'ACCESSOIRES BOIS PLACO - 374', 0, 40, 0),
(18, '265', 'ACCESSOIRES ITE - 265', 0, 8, 3),
(19, '311', 'ACCESSOIRES LAMBRIS BRUTS - 311', 0, 20, 0),
(20, '338', 'ACCESSOIRES LAMBRIS FINIS - 338', 0, 20, 1),
(21, '224', 'B. MASSIF RAB PIN HORS 45 - 224', 0, 7, 0),
(22, '397', 'BAGNERES BOIS - 397', 0, 34, 0),
(23, '289', 'BARDAGE BOIS RECONSTITUE - 289', 0, 8, 4),
(24, '303', 'BARDAGE EXTRA GD CHANTIER - 303', 0, 8, 5),
(25, '279', 'BARDAGE FINI SYST ANTI UV - 279', 0, 8, 6),
(26, '261', 'BARDAGE GSB-NORDIC SATURE - 261', 0, 8, 7),
(27, '304', 'BARDAGE NATUR GD CHANTIER - 304', 0, 8, 8),
(28, '263', 'BARDAGE PROTECT - 263', 0, 8, 9),
(29, '276', 'BARDAGES BISEAU COULEUR - 276', 0, 8, 10),
(30, '269', 'BARDAGES BRUTS PROMO - 269', 0, 8, 11),
(31, '264', 'BARDAGES CHOIX B COULEUR - 264', 0, 8, 12),
(32, '272', 'BARDAGES CLASSIC - 272', 0, 8, 13),
(33, '273', 'BARDAGES ESSENCE - 273', 0, 8, 14),
(34, '287', 'BARDAGES ESSENCE HUILÉ - 287', 0, 8, 15),
(35, '284', 'BARDAGES EXTRA - 284', 0, 8, 16),
(36, '299', 'BARDAGES FINIS MDD - 299', 0, 8, 17),
(37, '301', 'BARDAGES GSB BRUTS PROMO - 301', 0, 8, 18),
(38, '295', 'BARDAGES GSB-BASIC - 295', 0, 8, 19),
(39, '267', 'BARDAGES GSB-COUL./MESURE - 267', 0, 8, 20),
(40, '278', 'BARDAGES GSB-NORDIC - 278', 0, 8, 21),
(41, '296', 'BARDAGES GSB-ORIGINEL - 296', 0, 8, 22),
(42, '266', 'BARDAGES LINE COULEUR - 266', 0, 8, 23),
(43, '277', 'BARDAGES METAL - 277', 0, 8, 24),
(44, '286', 'BARDAGES NATUR - 286', 0, 8, 25),
(45, '294', 'BARDAGES NORDICLIN HUILE - 294', 0, 8, 26),
(46, '285', 'BARDAGES NORDICOLOR - 285', 0, 8, 27),
(47, '297', 'BARDAGES PROFILS SPECIAUX - 297', 0, 8, 28),
(48, '274', 'BARDAGES SEMI TRANSFORMES - 274', 0, 8, 29),
(49, '275', 'BARDAGES SILVER LAB COUL. - 275', 0, 8, 30),
(50, '356', 'BARRES VOLETS - 356', 0, 3, 0),
(51, '357', 'BARRES VOLETS DETAIL - 357', 0, 4, 0),
(52, '245', 'BASTAING CALIBRÉ - 245', 0, 7, 1),
(53, '222', 'BMA RABOTES - HORS 45 MM - 222', 0, 7, 2),
(54, '210', 'BOIS BRUTS RX DETAILS - 210', 0, 6, 0),
(55, '221', 'BOIS CONTRECOLLES - 221', 0, 7, 3),
(56, '230', 'BOIS FERMETTES CALIBRES - 230', 0, 7, 4),
(57, '231', 'BOIS FERMETTES CALIBRES I - 231', 0, 7, 5),
(58, '220', 'BOIS LAMELLE COLLE - 220', 0, 7, 6),
(59, '236', 'BOIS MASSIFS RAB. HORS 45 - 236', 0, 7, 7),
(60, '234', 'BOIS OSSATURE - 234', 0, 7, 8),
(61, '235', 'BOIS OSSATURE I - 235', 0, 7, 9),
(62, '410', 'BOIS RABOTÉS INDUSTRIELS - 410', 0, 34, 1),
(63, '228', 'BOIS STRUCTURE IMPORT - 228', 0, 7, 10),
(64, '401', 'CAILLEBOTIS DETAIL - 401', 0, 15, 0),
(65, '241', 'CHANLATTE - 241', 0, 7, 11),
(66, '244', 'CHEVRONS - 244', 0, 7, 12),
(67, '508', 'CHUTES A L''UNITE - 508', 0, 1, 1),
(68, '509', 'CHUTES AU M3 - 509', 0, 1, 2),
(69, '515', 'CIRE - 515', 0, 16, 0),
(70, '282', 'CLINS AUT.LASUR.(ARCHIVE) - 282', 0, 8, 31),
(71, '270', 'CLINS BRUTS (ARCHIVES) - 270', 0, 8, 32),
(72, '271', 'CLINS BRUTS DETAIL - 271', 0, 9, 0),
(73, '280', 'CLINS EXTRA - 280', 0, 8, 33),
(74, '281', 'CLINS EXTRA DÉTAIL - 281', 0, 9, 1),
(75, '283', 'CLINS NATUR - 283', 0, 8, 34),
(76, '489', 'CLOTURES BRUTES RESINEUX - 489', 0, 14, 11),
(77, '479', 'CLOTURES BRUTES RX MDD - 479', 0, 14, 12),
(78, '477', 'CLOTURES BRUTES RX-GSB - 477', 0, 14, 13),
(79, '487', 'CLOTURES COMPOSITES - 487', 0, 14, 14),
(80, '492', 'CLOTURES FINIES RESINEUX - 492', 0, 14, 15),
(81, '503', 'CLOTURES RX FINIES - GSB - 503', 0, 14, 16),
(82, '259', 'COMPOSANTS INDUSTRIELS - 259', 0, 7, 13),
(83, '535', 'CONSOMMABLES - 535', 0, 10, 0),
(84, '512', 'CONSOMMABLES - 512', 0, 16, 1),
(85, '495', 'CONTENANTS BRUTS - 495', 0, 14, 17),
(86, '496', 'CONTENANTS FINIS - 496', 0, 14, 18),
(87, '500', 'COPEAUX ET SCIURES - 500', 0, 11, 0),
(88, '577', 'CP - 577', 0, 38, 0),
(89, '574', 'CP DECO - 574', 0, 37, 0),
(90, '576', 'CP DETAIL - 576', 0, 37, 1),
(91, '594', 'ECHANTILLONS A LA DEMANDE - 594', 0, 12, 0),
(92, '593', 'ECHANTILLONS AMENAG.EXTER - 593', 0, 12, 1),
(93, '590', 'ECHANTILLONS BARDAGES - 590', 0, 12, 2),
(94, '597', 'ECHANTILLONS GSB AMEX - 597', 0, 12, 3),
(95, '598', 'ECHANTILLONS GSB AUTRES R - 598', 0, 12, 4),
(96, '595', 'ECHANTILLONS GSB BARDAGES - 595', 0, 12, 5),
(97, '596', 'ECHANTILLONS GSB LAMBRIS - 596', 0, 12, 6),
(98, '599', 'ECHANTILLONS GSB SUR DDE - 599', 0, 12, 7),
(99, '591', 'ECHANTILLONS LAMBRIS - 591', 0, 12, 8),
(100, '592', 'ECHANTILLONS STRUCTURE - 592', 0, 12, 9),
(101, '521', 'ECO MOBILIER - 521', 0, 13, 0),
(102, '493', 'ECRANS FINIS RESINEUX - 493', 0, 14, 19),
(103, '469', 'ECRANS FINIS RESINEUX GSB - 469', 0, 14, 20),
(104, '485', 'ECRANS RESINEUX - 485', 0, 14, 21),
(105, '252', 'ENCOURS DE SCIAGE - 252', 0, 7, 14),
(106, '506', 'ESCALIERS - 506', 0, 1, 3),
(107, '519', 'ESCOMPTE - 519', 0, 16, 2),
(108, '510', 'FOURNITURES ET ART.DIVERS - 510', 0, 16, 3),
(109, '518', 'FRAIS DE FACTURATION - 518', 0, 16, 4),
(110, '580', 'GRANULES BOIS - 580', 0, 5, 0),
(111, '200', 'HORS STANDARD FAB A CDE - 200', 0, 17, 0),
(112, '498', 'JEUX EXTERIEURS - 498', 0, 14, 22),
(113, '225', 'KIT PLANCHER POUTRES EN I - 225', 0, 18, 0),
(114, '226', 'KIT PORTIQUE LAMELLE COLL - 226', 0, 18, 1),
(115, '227', 'KIT PORTIQUE LAMIBOIS - 227', 0, 18, 2),
(116, '359', 'KITS PLANCHER - 359', 0, 26, 0),
(117, '550', 'LAINES DE VERRES - 550', 0, 19, 0),
(118, '315', 'LAMB.BRUT PROFIL SPECIAUX - 315', 0, 20, 2),
(119, '314', 'LAMB.BRUTS GSB-MDD - 314', 0, 20, 3),
(120, '313', 'LAMB.GSB BASICS NATURELS - 313', 0, 20, 4),
(121, '262', 'LAMBOURDES BOIS RESINEUX - 262', 0, 7, 15),
(122, '329', 'LAMBRIS A PERSONNALISER - 329', 0, 20, 5),
(123, '316', 'LAMBRIS AU NATUREL - 316', 0, 20, 6),
(124, '322', 'LAMBRIS AUTRES LASURÉS - 322', 0, 20, 7),
(125, '330', 'LAMBRIS BELOUGA - 330', 0, 20, 8),
(126, '331', 'LAMBRIS BELOUGA DÉTAIL - 331', 0, 21, 1),
(127, '328', 'LAMBRIS CLASSIC BLANC - 328', 0, 20, 9),
(128, '310', 'LAMBRIS CLASSIC NATUREL - 310', 0, 20, 10),
(129, '332', 'LAMBRIS CLASSIC VERNIS - 332', 0, 20, 11),
(130, '344', 'LAMBRIS COULEURS D''ICI - 344', 0, 20, 12),
(131, '367', 'LAMBRIS FINIS GSB NEW MDD - 367', 0, 20, 13),
(132, '309', 'LAMBRIS FINIS GSB-MDD - 309', 0, 20, 14),
(133, '320', 'LAMBRIS GRIZZLI - 320', 0, 20, 15),
(134, '321', 'LAMBRIS GRIZZLI DÉTAIL - 321', 0, 21, 2),
(135, '308', 'LAMBRIS GSB BASIC BLANC - 308', 0, 20, 16),
(136, '307', 'LAMBRIS GSB BRUTS PROMO - 307', 0, 20, 17),
(137, '325', 'LAMBRIS GSB ELEGANCE - 325', 0, 20, 18),
(138, '324', 'LAMBRIS GSB ESSENTIEL - 324', 0, 20, 19),
(139, '306', 'LAMBRIS GSB FINIS PROMO - 306', 0, 20, 20),
(140, '362', 'LAMBRIS GSB LAMELLE COLLE - 362', 0, 20, 21),
(141, '366', 'LAMBRIS GSB NEW BLANCS - 366', 0, 20, 22),
(142, '364', 'LAMBRIS GSB NEW BRUNS - 364', 0, 20, 23),
(143, '363', 'LAMBRIS GSB NEW GRIS - 363', 0, 20, 24),
(144, '365', 'LAMBRIS GSB NEW VIELLIS - 365', 0, 20, 25),
(145, '336', 'LAMBRIS GSB PREPEINT - 336', 0, 20, 26),
(146, '327', 'LAMBRIS GSB REFLETS - 327', 0, 20, 27),
(147, '326', 'LAMBRIS GSB TONIC - 326', 0, 20, 28),
(148, '319', 'LAMBRIS HAPPY COLORS - 319', 0, 20, 29),
(149, '335', 'LAMBRIS KOALA - 335', 0, 20, 30),
(150, '318', 'LAMBRIS METAL - 318', 0, 20, 31),
(151, '334', 'LAMBRIS NORDICHOME - 334', 0, 20, 32),
(152, '337', 'LAMBRIS O''NEY - 337', 0, 20, 33),
(153, '349', 'LAMBRIS ORIGINELS BLANCS - 349', 0, 20, 34),
(154, '341', 'LAMBRIS ORIGINELS BRUNS - 341', 0, 20, 35),
(155, '348', 'LAMBRIS ORIGINELS GRIS - 348', 0, 20, 36),
(156, '346', 'LAMBRIS SELECT - 346', 0, 20, 37),
(157, '312', 'LAMBRIS SEMIS TRANSFORMES - 312', 0, 20, 38),
(158, '368', 'LAMBRIS SILVER LAB COUL. - 368', 0, 20, 39),
(159, '317', 'LAMBRIS SO CHIC - 317', 0, 20, 40),
(160, '343', 'LAMBRIS VINTAGE - 343', 0, 20, 41),
(161, '354', 'LAMES VOLETS - 354', 0, 23, 0),
(162, '355', 'LAMES VOLETS DETAIL - 355', 0, 22, 0),
(163, '353', 'LAMES VOLETS GSB-MDD - 353', 0, 23, 1),
(164, '199', 'LITEAUX - 199', 0, 7, 16),
(165, '240', 'LITEAUX - 240', 0, 7, 17),
(166, '239', 'LITEAUX I - 239', 0, 7, 18),
(167, '412', 'MAT.1ÈRES CERLAND - 412', 0, 34, 2),
(168, '390', 'MOULURES BRUTES - 390', 0, 24, 0),
(169, '398', 'MOULURES BRUTES PAQUET - 398', 0, 25, 0),
(170, '391', 'MOULURES BRUTES/BOTTE - 391', 0, 24, 1),
(171, '395', 'MOULURES FINIES - 395', 0, 24, 2),
(172, '258', 'NAIL WEB FOURNITURES - 258', 0, 30, 0),
(173, '232', 'OSSATURE ABOUTÉE - NON CE - 232', 0, 7, 19),
(174, '223', 'OSSATURE ABOUTEE 45 MM - 223', 0, 7, 20),
(175, '233', 'OSSATURE MASSIVE 45 MM - 233', 0, 7, 21),
(176, '572', 'PANNEAU AGGLO-OSB-FIBRE - 572', 0, 37, 2),
(177, '578', 'PANNEAU ISOREL (ARCHIVE) - 578', 0, 37, 3),
(178, '573', 'PANNEAUX AGGLO-OSB-FIBRE - 573', 0, 38, 1),
(179, '351', 'PARQUETS NATURELS - 351', 0, 26, 1),
(180, '475', 'PDTS SPÉCIAUX AMEX GSB - 475', 0, 14, 23),
(181, '516', 'PEINTURE - 516', 0, 16, 5),
(182, '494', 'PERGOLAS - 494', 0, 14, 24),
(183, '350', 'PLANCHERS BRUTS - 350', 0, 26, 2),
(184, '358', 'PLANCHERS GSB SPEC. PROMO - 358', 0, 26, 3),
(185, '352', 'PLANCHERS VERNIS - 352', 0, 26, 4),
(186, '197', 'PLANCHES AGRICOLE - 197', 0, 7, 22),
(187, '254', 'PLANCHES AGRICOLE - 254', 0, 7, 23),
(188, '255', 'PLANCHES AGRICOLE I - 255', 0, 7, 24),
(189, '300', 'PLANCHES DE RIVE BRUTES - 300', 0, 2, 0),
(190, '302', 'PLANCHES DE RIVE PEINTES - 302', 0, 2, 1),
(191, '345', 'PLINTH.BRUTES AU DÉTAIL - 345', 0, 28, 0),
(192, '347', 'PLINTH.PRE-PEINTES DÉTAIL - 347', 0, 28, 1),
(193, '340', 'PLINTHES BRUTES - 340', 0, 27, 0),
(194, '361', 'PLINTHES BRUTES PROMO - 361', 0, 27, 1),
(195, '342', 'PLINTHES PRE-PEINTES - 342', 0, 27, 2),
(196, '403', 'POTEAUX DETAIL - 403', 0, 15, 1),
(197, '402', 'POTEAUX RESINEUX - 402', 0, 14, 25),
(198, '466', 'POTEAUX RESINEUX GSB - 466', 0, 14, 26),
(199, '504', 'POUTRE CHENE - 504', 0, 1, 4),
(200, '253', 'POUTRELLES COFFRAGES - 253', 0, 29, 0),
(201, '257', 'POUTRELLES LVL-LAMIBOIS - 257', 0, 29, 1),
(202, '360', 'POUTRES À CHALET BRUTES - 360', 0, 31, 0),
(203, '256', 'POUTRES EN I - 256', 0, 29, 2),
(204, '520', 'PRESTATIONS - 520', 0, 32, 0),
(205, '525', 'PRESTATIONS VENTE DIRECTE - 525', 0, 32, 1),
(206, '491', 'PROD.SPECIAUX AMENAG EXT. - 491', 0, 14, 27),
(207, '502', 'PRODUITS SEMI-TRANSFORMES - 502', 0, 14, 28),
(208, '293', 'PROF ACC CLINS LAS DETAIL - 293', 0, 9, 2),
(209, '291', 'PROFIL ACCES CLINS DÉTAIL - 291', 0, 9, 3),
(210, '446', 'RAB INDUS 2A - 446', 0, 34, 3),
(211, '437', 'RAB INDUS ABJ - 437', 0, 34, 4),
(212, '435', 'RAB INDUS ALLEMAND - 435', 0, 34, 5),
(213, '413', 'RAB INDUS ANGER - 413', 0, 34, 6),
(214, '424', 'RAB INDUS BCI - 424', 0, 34, 7),
(215, '464', 'RAB INDUS BIO - 464', 0, 34, 8),
(216, '432', 'RAB INDUS BURGER - 432', 0, 34, 9),
(217, '440', 'RAB INDUS CHEVROLLIER - 440', 0, 34, 10),
(218, '434', 'RAB INDUS CLAIRVAL - 434', 0, 34, 11),
(219, '459', 'RAB INDUS CLAIRVAL_FINIS - 459', 0, 34, 12),
(220, '461', 'RAB INDUS COUGNAUD - 461', 0, 34, 13),
(221, '439', 'RAB INDUS DELTA BOIS - 439', 0, 34, 14),
(222, '453', 'RAB INDUS ECMB - 453', 0, 34, 15),
(223, '415', 'RAB INDUS EFISOL - 415', 0, 34, 16),
(224, '462', 'RAB INDUS EMBALLAGE - 462', 0, 34, 17),
(225, '454', 'RAB INDUS ERICA - 454', 0, 34, 18),
(226, '417', 'RAB INDUS FINN EST - 417', 0, 34, 19),
(227, '416', 'RAB INDUS FMI - 416', 0, 34, 20),
(228, '444', 'RAB INDUS FOUSSIER - 444', 0, 34, 21),
(229, '438', 'RAB INDUS FRANCE PORTE - 438', 0, 34, 22),
(230, '419', 'RAB INDUS GERBOIS - 419', 0, 34, 23),
(231, '426', 'RAB INDUS HOFFMAN - 426', 0, 34, 24),
(232, '450', 'RAB INDUS ILE DE RE - 450', 0, 34, 25),
(233, '448', 'RAB INDUS KNAUF - 448', 0, 34, 26),
(234, '430', 'RAB INDUS LAHAYE - 430', 0, 34, 27),
(235, '471', 'RAB INDUS LARIVIERE - 471', 0, 34, 28),
(236, '451', 'RAB INDUS LATISSE - 451', 0, 34, 29),
(237, '452', 'RAB INDUS LEMAN - 452', 0, 34, 30),
(238, '421', 'RAB INDUS LITERIE PARIS. - 421', 0, 34, 31),
(239, '443', 'RAB INDUS LOISIRS EQUIPEM - 443', 0, 34, 32),
(240, '411', 'RAB INDUS MAISON BOIS - 411', 0, 34, 33),
(241, '423', 'RAB INDUS MAM - 423', 0, 34, 34),
(242, '445', 'RAB INDUS MBE - 445', 0, 34, 35),
(243, '422', 'RAB INDUS MINCO - 422', 0, 34, 36),
(244, '436', 'RAB INDUS MOBIL''HOME - 436', 0, 34, 37),
(245, '463', 'RAB INDUS MOBIL''HOME B+F - 463', 0, 34, 38),
(246, '473', 'RAB INDUS MOBIL''HOME FINI - 473', 0, 34, 39),
(247, '425', 'RAB INDUS NEFAB - 425', 0, 34, 40),
(248, '460', 'RAB INDUS OSSATURE ILES - 460', 0, 34, 41),
(249, '472', 'RAB INDUS PROCOPI - 472', 0, 34, 42),
(250, '447', 'RAB INDUS RAPID''HOME - 447', 0, 34, 43),
(251, '427', 'RAB INDUS RAPIDO - 427', 0, 34, 44),
(252, '420', 'RAB INDUS RENAULT - 420', 0, 34, 45),
(253, '455', 'RAB INDUS ROESER - 455', 0, 34, 46),
(254, '429', 'RAB INDUS SCAM - 429', 0, 34, 47),
(255, '418', 'RAB INDUS SIMMONS - 418', 0, 34, 48),
(256, '470', 'RAB INDUS SINBPLA - 470', 0, 34, 49),
(257, '457', 'RAB INDUS SMD - 457', 0, 34, 50),
(258, '458', 'RAB INDUS SMD_FINITION - 458', 0, 34, 51),
(259, '441', 'RAB INDUS SNUB - 441', 0, 34, 52),
(260, '428', 'RAB INDUS SOBOGAT - 428', 0, 34, 53),
(261, '431', 'RAB INDUS SOCOPA - 431', 0, 34, 54),
(262, '414', 'RAB INDUS SOMATEX - 414', 0, 34, 55),
(263, '442', 'RAB INDUS SOTHOFERM - 442', 0, 34, 56),
(264, '433', 'RAB INDUS UNILIN - 433', 0, 34, 57),
(265, '380', 'RABOTÉS 4 FACES - 380', 0, 33, 0),
(266, '407', 'RABOTES DIVERS DETAIL - 407', 0, 15, 2),
(267, '449', 'RABOTES INDUSTR SOFOCO - 449', 0, 34, 58),
(268, '517', 'REGULARISATION - 517', 0, 35, 0),
(269, '404', 'RONDIN & PIQUET RESINEUX - 404', 0, 14, 29),
(270, '405', 'RONDINS DETAIL - 405', 0, 15, 3),
(271, '409', 'SAV MAISONNETTES - 409', 0, 14, 30),
(272, '540', 'SHAKES & SHINGLES - 540', 0, 36, 0),
(273, '243', 'SOLIVETTE (ARCHIVES) - 243', 0, 7, 25),
(274, '238', 'STRUCTURE - CHEVRONS - 238', 0, 7, 26),
(275, '237', 'STRUCTURE - SOLIVETTES - 237', 0, 7, 27),
(276, '229', 'STRUCTURE FERMETTE CALIBR - 229', 0, 7, 28),
(277, '561', 'TABLETTES LAMELLEES - 561', 0, 38, 2),
(278, '560', 'TABLETTES LAMELLES - 560', 0, 37, 4),
(279, '568', 'TABLETTES MASSIFS - 568', 0, 37, 5),
(280, '569', 'TABLETTES MASSIVES - 569', 0, 38, 3),
(281, '567', 'TABLETTES MELAMINEES - 567', 0, 38, 4),
(282, '566', 'TABLETTES MELAMINES - 566', 0, 37, 6),
(283, '570', 'TABLETTES POSTFORMES - 570', 0, 37, 7),
(284, '376', 'TASS ET PLS BRUTS DÉTAIL - 376', 0, 39, 0),
(285, '378', 'TASS ET PLS RABOTE DÉTAIL - 378', 0, 39, 1),
(286, '370', 'TASSEAUX ET PLANCHES BRUT - 370', 0, 40, 1),
(287, '372', 'TASSEAUX ET PLANCHES RABO - 372', 0, 40, 2),
(288, '373', 'TASSEAUX ET PLS RABO FINI - 373', 0, 40, 3),
(289, '246', 'TASSEAUX TRAPEZE - 246', 0, 7, 29),
(290, '483', 'TERRASSES AUTRES ESSENCES - 483', 0, 14, 31),
(291, '480', 'TERRASSES COMPOSITES - 480', 0, 14, 32),
(292, '467', 'TERRASSES COMPOSITES GSB - 467', 0, 14, 33),
(293, '400', 'TERRASSES EXOTIQUES - 400', 0, 14, 34),
(294, '465', 'TERRASSES EXOTIQUES GSB - 465', 0, 14, 35),
(295, '408', 'TERRASSES RESINEUX BRUTES - 408', 0, 14, 36),
(296, '501', 'TERRASSES RESINEUX FINIES - 501', 0, 14, 37),
(297, '513', 'TERRASSES RX BRUTES GSB - 513', 0, 14, 38),
(298, '511', 'TERRASSES RX FINIES - GSB - 511', 0, 14, 39),
(299, '530', 'TRANSPORTS - 530', 0, 41, 0),
(300, '505', 'TRÉTEAUX - 505', 0, 1, 5),
(301, '198', 'VOLIGES - 198', 0, 7, 30),
(302, '242', 'VOLIGES - 242', 0, 7, 31),
(303, '247', 'VOLIGES I - 247', 0, 7, 32),
(304, '268', 'VOLIGES RABOTEES - 268', 0, 42, 0);

-- --------------------------------------------------------

--
-- Structure de la table `wa_traitement`
--

CREATE TABLE IF NOT EXISTS `wa_traitement` (
  `id_traitement` int(11) NOT NULL AUTO_INCREMENT,
  `etat_traitement` char(1) DEFAULT NULL,
  `classe_traitement` varchar(45) DEFAULT NULL,
  `couleur_traitement` varchar(45) DEFAULT NULL,
  `WA_contenu_demande_id_contenu_demande` int(11) NOT NULL,
  PRIMARY KEY (`id_traitement`,`WA_contenu_demande_id_contenu_demande`),
  KEY `fk_WA_traitement_WA_contenu_demande1_idx` (`WA_contenu_demande_id_contenu_demande`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=83 ;

--
-- Contenu de la table `wa_traitement`
--

INSERT INTO `wa_traitement` (`id_traitement`, `etat_traitement`, `classe_traitement`, `couleur_traitement`, `WA_contenu_demande_id_contenu_demande`) VALUES
(80, '', '', '', 80),
(81, '', '', '', 81),
(82, 'n', 'nhofujhezfe4fe5z', 'noir', 82);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `wa_accessoires`
--
ALTER TABLE `wa_accessoires`
  ADD CONSTRAINT `fk_WA_accessoires_WA_contenu_demande1` FOREIGN KEY (`WA_contenu_demande_id_contenu_demande`) REFERENCES `wa_contenu_demande` (`id_contenu_demande`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `wa_couleur`
--
ALTER TABLE `wa_couleur`
  ADD CONSTRAINT `fk_WA_couleur_WA_contenu_demande1` FOREIGN KEY (`WA_contenu_demande_id_contenu_demande`) REFERENCES `wa_contenu_demande` (`id_contenu_demande`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `wa_demande`
--
ALTER TABLE `wa_demande`
  ADD CONSTRAINT `fk_WA_demande_WA_contenu_demande1` FOREIGN KEY (`WA_contenu_demande_id_contenu_demande`) REFERENCES `wa_contenu_demande` (`id_contenu_demande`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `wa_dimensions`
--
ALTER TABLE `wa_dimensions`
  ADD CONSTRAINT `fk_WA_dimensions_WA_contenu_demande` FOREIGN KEY (`WA_contenu_demande_id_contenu_demande`) REFERENCES `wa_contenu_demande` (`id_contenu_demande`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `wa_longueur`
--
ALTER TABLE `wa_longueur`
  ADD CONSTRAINT `fk_wa_longueur_wa_nouvelle_longueur1` FOREIGN KEY (`wa_nouvelle_longueur_id_nouvelle_longueur`) REFERENCES `wa_nouvelle_longueur` (`id_nouvelle_longueur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `wa_longueur_traitement`
--
ALTER TABLE `wa_longueur_traitement`
  ADD CONSTRAINT `fk_wa_longueur_traitement_wa_new_trtmt_ask1` FOREIGN KEY (`wa_new_trtmt_ask_id_new_trtmt_ask`, `wa_new_trtmt_ask_wa_new_trtmt_id_new_trtmt`) REFERENCES `wa_new_trtmt_ask` (`id_new_trtmt_ask`, `wa_new_trtmt_id_new_trtmt`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `wa_marque_commercial`
--
ALTER TABLE `wa_marque_commercial`
  ADD CONSTRAINT `fk_marque_commercial_WA_contenu_demande1` FOREIGN KEY (`WA_contenu_demande_id_contenu_demande`) REFERENCES `wa_contenu_demande` (`id_contenu_demande`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `wa_new_trtmt_ask`
--
ALTER TABLE `wa_new_trtmt_ask`
  ADD CONSTRAINT `fk_wa_new_trtmt_ask_wa_new_trtmt1` FOREIGN KEY (`wa_new_trtmt_id_new_trtmt`) REFERENCES `wa_new_trtmt` (`id_new_trtmt`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `wa_traitement`
--
ALTER TABLE `wa_traitement`
  ADD CONSTRAINT `fk_WA_traitement_WA_contenu_demande1` FOREIGN KEY (`WA_contenu_demande_id_contenu_demande`) REFERENCES `wa_contenu_demande` (`id_contenu_demande`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
