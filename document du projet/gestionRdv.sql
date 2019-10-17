-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2019 at 12:22 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestionRdv`
--

-- --------------------------------------------------------

--
-- Table structure for table `dossierMedical`
--

CREATE TABLE `dossierMedical` (
  `idDossier` int(11) NOT NULL,
  `nomExamen` varchar(50) NOT NULL,
  `resultatExamen` varchar(50) NOT NULL,
  `ordonnance` varchar(50) NOT NULL,
  `dateExamen` datetime NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idPatient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dossierMedical`
--

INSERT INTO `dossierMedical` (`idDossier`, `nomExamen`, `resultatExamen`, `ordonnance`, `dateExamen`, `idUtilisateur`, `idPatient`) VALUES
(4, 'examen', 'hhjhh', 'pa', '2019-10-12 00:00:00', 53, 5),
(5, 'examen', 'kk', 'hj', '2019-10-25 00:00:00', 53, 5),
(6, 'examen', 'nom', 'rien', '2019-10-19 00:00:00', 28, 8),
(7, 'examen 223', 'ok', 'non prescrit', '2019-10-19 00:00:00', 47, 10),
(8, 'examen', 'ok', 'para', '2019-10-26 00:00:00', 47, 9),
(9, 'examen', 'fds', 'kod', '2019-10-25 00:00:00', 47, 5),
(10, 'Examen1', 'ok', 'para', '2019-10-16 17:52:40', 47, 7),
(11, 'examen', 'pour', 'rien Ã  prescrir', '2019-10-16 18:14:49', 47, 9);

-- --------------------------------------------------------

--
-- Table structure for table `heure`
--

CREATE TABLE `heure` (
  `id` int(11) NOT NULL,
  `heure` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `heure`
--

INSERT INTO `heure` (`id`, `heure`) VALUES
(1, '08:00'),
(2, '08:15'),
(4, '08:30'),
(5, '08:45'),
(6, '09:00'),
(7, '09:15'),
(8, '09:30'),
(9, '09:45'),
(10, '10:00'),
(11, '10:15'),
(12, '10:30'),
(13, '10:45'),
(14, '11:00'),
(15, '11:15'),
(16, '11:30'),
(17, '11:45'),
(18, '12:00'),
(19, '12:15'),
(20, '12:30'),
(21, '12:45'),
(31, '13:00'),
(22, '15:00'),
(23, '15:15'),
(24, '15:30'),
(25, '15:45'),
(26, '16:00'),
(28, '16:15'),
(29, '16:30'),
(27, '16:45'),
(30, '17:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `parametres`
-- (See below for the actual view)
--
CREATE TABLE `parametres` (
`matricule` varchar(50)
,`codeAcces` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `idPatient` int(11) NOT NULL,
  `nomPatient` varchar(50) NOT NULL,
  `prenomPatient` varchar(50) NOT NULL,
  `adressePatient` varchar(50) NOT NULL,
  `dateNaissancePatient` date NOT NULL,
  `telPatient` varchar(50) NOT NULL,
  `matriculePatient` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`idPatient`, `nomPatient`, `prenomPatient`, `adressePatient`, `dateNaissancePatient`, `telPatient`, `matriculePatient`) VALUES
(5, 'moustapha', 'MAMA', 'camara', '1998-12-25', 'baba', 'M-00004'),
(6, 'ABDOURAHMANE ALY', 'ABDOURAHMANE ALY', 'DAKAR', '2019-10-17', '7785545', 'm-00123'),
(7, 'diama', 'MAMADOU', 'guedia', '1999-02-02', '77 952 32 56', 'M-00005'),
(8, 'diama', 'MAMADOU ama', 'dakar', '1999-02-02', '77 952 32 56', 'M-00008'),
(9, 'mass', 'MAMA', 'dakar', '1999-02-02', '77 952 32 56', 'MP-00005'),
(10, 'diama', 'MAMA', 'guedia', '1999-02-04', '77 952 32 00', 'MP-00006'),
(11, 'diama', 'MAMADOU', 'dakar', '1999-02-02', '77 952 32 56', 'MP-00007');

-- --------------------------------------------------------

--
-- Table structure for table `rdv`
--

CREATE TABLE `rdv` (
  `idRdv` int(11) NOT NULL,
  `motifRdv` varchar(50) NOT NULL,
  `heureDebut` varchar(50) NOT NULL,
  `heureFin` varchar(50) NOT NULL,
  `dateRdv` date NOT NULL,
  `idSecretaire` int(11) NOT NULL,
  `idPatient` int(11) NOT NULL,
  `idMedecin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rdv`
--

INSERT INTO `rdv` (`idRdv`, `motifRdv`, `heureDebut`, `heureFin`, `dateRdv`, `idSecretaire`, `idPatient`, `idMedecin`) VALUES
(3, 'palidisme', '12:15', '12:30', '2019-10-09', 48, 6, 48),
(12, 'palidisme', '12:15', '12:30', '2019-10-09', 46, 5, 48),
(19, 'palidisme', '12:15', '12:30', '2019-10-09', 46, 7, 48),
(20, 'palidisme', '12:15', '12:30', '2019-10-09', 46, 7, 48),
(21, 'palidisme', '12:15', '12:30', '2019-10-09', 46, 7, 48),
(22, 'palidisme', '12:15', '12:30', '2019-10-09', 46, 7, 48),
(23, 'palidisme', '12:15', '12:30', '2019-10-09', 46, 7, 48),
(24, 'palidisme', '12:15', '12:30', '2019-10-09', 46, 7, 48),
(25, 'palidisme', '12:15', '12:30', '2019-10-09', 46, 7, 48),
(33, 'maladie grave', '08:00', '08:15', '2019-10-17', 46, 5, 51),
(34, 'maladie grave', '08:00', '08:30', '2014-12-02', 46, 6, 51),
(35, 'consultation gÃ©nÃ©ral', '08:30', '09:00', '2019-10-17', 46, 7, 47),
(36, 'maladie grave', '08:00', '08:30', '2014-12-02', 46, 6, 51),
(37, 'tuberculose', '08:15', '08:45', '2019-01-17', 46, 8, 53),
(38, 'tuberculose', '09:00', '09:15', '2019-10-24', 46, 8, 53),
(39, 'maladie grave', '08:00', '08:45', '2019-10-17', 46, 9, 53),
(40, 'paludisme', '08:00', '08:15', '2019-10-31', 46, 6, 48),
(41, 'ddssd', '08:00', '08:00', '2019-10-12', 46, 9, 48),
(42, 'maladie grave', '08:00', '08:00', '2019-10-18', 46, 5, 48),
(43, 'dent', '08:15', '08:30', '2019-10-17', 46, 9, 48);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idService` int(11) NOT NULL,
  `description` text NOT NULL,
  `nomService` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`idService`, `description`, `nomService`) VALUES
(11, 'il est rare en affrique', 'service PÃ©diatre'),
(14, 'un nouveau au senegal', 'service dentaire'),
(16, 'service Ã  la mode', 'service 2');

-- --------------------------------------------------------

--
-- Table structure for table `specialite`
--

CREATE TABLE `specialite` (
  `idSpecialite` int(11) NOT NULL,
  `description` text NOT NULL,
  `nomSpecialite` varchar(50) NOT NULL,
  `idService` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specialite`
--

INSERT INTO `specialite` (`idSpecialite`, `description`, `nomSpecialite`, `idService`) VALUES
(10, 'new', 'specialite 1', 14),
(11, 'specialite trÃ©s reconnu', 'specialite 2', 14);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `idStatus` int(11) NOT NULL,
  `niveauStatus` int(11) NOT NULL,
  `codeAcces` varchar(50) NOT NULL,
  `nomStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`idStatus`, `niveauStatus`, `codeAcces`, `nomStatus`) VALUES
(1, 1, 'medecin', 'medecin'),
(2, 2, 'secretaire', 'secretaire'),
(3, 3, 'gestionnaire', 'gestionnaire');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `dateNaissance` date NOT NULL,
  `tel` varchar(50) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `idStatus` int(11) NOT NULL,
  `idSpecialite` int(11) DEFAULT NULL,
  `idService` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `nom`, `prenom`, `email`, `adresse`, `dateNaissance`, `tel`, `matricule`, `idStatus`, `idSpecialite`, `idService`) VALUES
(28, 'dia', 'moussa', 'moussa@gmail.com', 'ddh', '2019-10-17', '773951254', '10', 3, NULL, NULL),
(46, 'diama', 'MAMA', 'sarrab@gmail.com', 'guÃ©diawaye', '1999-02-02', '77777', 'M-00004', 2, NULL, 11),
(47, 'diama', 'MAMADOU', 'sarrab@gmail.com', 'dakar', '1999-02-02', '77 952 32 56', 'M-00005', 1, 10, NULL),
(48, 'diama', 'MAMA', 'sarrab@gmail.com', 'guedia', '1999-02-02', '77 952 32 56', 'M-00006', 1, 10, NULL),
(51, 'diallo', 'moumar', 'moussa@gmail.com', 'dakar', '2019-10-10', '778451255', 'M-121', 1, 10, NULL),
(52, 'ba', 'moussa oumar', 'sarr@gmail.com', 'guediawaye', '2019-10-18', '778451256', 'M-1344', 1, 10, NULL),
(53, 'diama', 'MAMADOU', 'sarrab@gmail.com', 'dakar', '1999-02-02', '77 952 32 56', 'M-00007', 1, 10, NULL),
(54, 'sarr', 'djiby', 'sarrab@gmail.com', 'guedia', '1999-02-01', '77 952 32 56', 'M-00008', 2, NULL, 16),
(55, 'diama', 'MAMADOU', 'sarrab@gmail.com', 'guedia', '1999-02-01', '77 952 32 56', 'M-00009', 2, NULL, 16);

-- --------------------------------------------------------

--
-- Structure for view `parametres`
--
DROP TABLE IF EXISTS `parametres`;

CREATE ALGORITHM=UNDEFINED DEFINER=`admin`@`localhost` SQL SECURITY DEFINER VIEW `parametres`  AS  select `u`.`matricule` AS `matricule`,`s`.`codeAcces` AS `codeAcces` from (`utilisateur` `u` join `status` `s`) where (`u`.`idStatus` = `s`.`idStatus`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dossierMedical`
--
ALTER TABLE `dossierMedical`
  ADD PRIMARY KEY (`idDossier`),
  ADD KEY `dossierMedical_utilisateur_FK` (`idUtilisateur`),
  ADD KEY `dossierMedical_patient0_FK` (`idPatient`);

--
-- Indexes for table `heure`
--
ALTER TABLE `heure`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status_AK` (`heure`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idPatient`),
  ADD UNIQUE KEY `patient_AK` (`matriculePatient`);

--
-- Indexes for table `rdv`
--
ALTER TABLE `rdv`
  ADD PRIMARY KEY (`idRdv`),
  ADD KEY `rdv_utilisateur_FK` (`idSecretaire`),
  ADD KEY `rdv_patient0_FK` (`idPatient`),
  ADD KEY `m` (`idMedecin`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idService`),
  ADD UNIQUE KEY `service_AK` (`nomService`);

--
-- Indexes for table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`idSpecialite`),
  ADD UNIQUE KEY `specialite_AK` (`nomSpecialite`),
  ADD KEY `specialite_service_FK` (`idService`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`),
  ADD UNIQUE KEY `status_AK` (`nomStatus`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`),
  ADD UNIQUE KEY `utilisateur_AK` (`matricule`),
  ADD KEY `utilisateur_status_FK` (`idStatus`),
  ADD KEY `utilisateur_specialite0_FK` (`idSpecialite`),
  ADD KEY `utilisateur_service1_FK` (`idService`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dossierMedical`
--
ALTER TABLE `dossierMedical`
  MODIFY `idDossier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `heure`
--
ALTER TABLE `heure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `idPatient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `idRdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `idSpecialite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dossierMedical`
--
ALTER TABLE `dossierMedical`
  ADD CONSTRAINT `dossierMedical_patient0_FK` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`idPatient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dossierMedical_utilisateur_FK` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`idMedecin`) REFERENCES `utilisateur` (`idUtilisateur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rdv_patient0_FK` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`idPatient`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rdv_utilisateur_FK` FOREIGN KEY (`idSecretaire`) REFERENCES `utilisateur` (`idUtilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specialite`
--
ALTER TABLE `specialite`
  ADD CONSTRAINT `specialite_service_FK` FOREIGN KEY (`idService`) REFERENCES `service` (`idService`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_service1_FK` FOREIGN KEY (`idService`) REFERENCES `service` (`idService`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_specialite0_FK` FOREIGN KEY (`idSpecialite`) REFERENCES `specialite` (`idSpecialite`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_status_FK` FOREIGN KEY (`idStatus`) REFERENCES `status` (`idStatus`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
