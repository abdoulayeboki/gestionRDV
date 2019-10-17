-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2019 at 08:31 PM
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
(15, 'consultation gÃ©nÃ©ral', 'dossier 2', 'para', '2019-10-17 18:04:23', 63, 15),
(16, 'consultation gÃ©nÃ©ral', 'resultat positif', 'mÃ©dicament', '2019-10-17 18:11:03', 63, 14),
(17, 'consultation ophtalmologue', 'rÃ©sultat nÃ©gatif', 'lunette', '2019-10-17 18:12:02', 63, 15),
(18, 'consultation gÃ©nÃ©ral', 'negatif', 'paracÃ©tamol', '2019-10-17 18:53:55', 63, 15),
(20, 'consultation gÃ©nÃ©ral', 'positif', 'rien', '2019-10-17 20:20:32', 76, 15),
(21, 'consultation gÃ©nÃ©ral', 'positif', 'rien', '2019-10-17 20:21:07', 76, 14),
(22, 'consultation gÃ©nÃ©ral', 'positif', 'mÃ©dicament', '2019-10-17 20:21:25', 76, 14);

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
(14, 'dia', 'MAMA', 'dakar', '2024-10-19', '77 952 32 56', 'MP-19-00003'),
(15, 'diama', 'MAMA', 'guediawaye', '2019-10-19', '77 952 32 44', 'MP-16-00003'),
(16, 'diop', 'MAMADOU ama', 'guediawaye', '2019-10-26', '77 952 32 00', 'MP-43-00003');

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
(51, 'consultation gÃ©nÃ©ral', '08:00', '08:15', '2019-10-26', 75, 14, 63),
(52, 'consultation gÃ©nÃ©ral', '08:00', '08:15', '2019-10-19', 75, 14, 63),
(53, 'consultation gÃ©nÃ©ral', '08:00', '08:15', '2019-10-18', 75, 15, 63),
(54, 'consultation gÃ©nÃ©ral', '08:00', '08:15', '2019-10-19', 75, 15, 63),
(55, 'consultation gÃ©nÃ©ral', '08:00', '08:15', '2019-10-26', 75, 15, 63),
(56, 'maladie grave', '09:30', '09:45', '2019-10-02', 75, 14, 80),
(57, 'consultation gÃ©nÃ©ral', '09:30', '10:00', '2019-10-18', 75, 15, 77),
(58, 'tuberculose', '09:15', '09:30', '2019-10-18', 75, 15, 80),
(59, 'consultation gÃ©nÃ©ral', '10:30', '10:15', '2019-10-16', 75, 14, 78),
(60, 'maladie grave', '09:15', '09:30', '2019-10-15', 75, 14, 78),
(61, 'tuberculose', '09:15', '09:45', '2019-10-13', 75, 14, 63),
(62, 'maladie grave', '09:15', '09:00', '2019-10-05', 75, 14, 78);

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
(17, 'un bon service', 'pÃ©diatrie');

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
(12, 'une premiÃ©re', 'ophtalmologue', 14),
(13, 'mÃ©decin gÃ©nÃ©ral', 'infirmier', 14),
(14, 'pour les enfants', 'pÃ©diatre', 11);

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
(58, 'Sarr', 'Abdoulaye', 'moussa@gmail.com', 'dakar', '2019-10-24', '773951254', 'G-001', 3, NULL, NULL),
(63, 'Sarr', 'Abdoulaye', 'sarrab@gmail.com', 'guediawaye', '2019-10-18', '77 952 32 01', 'M-98-010', 1, 12, NULL),
(75, 'dia', 'MAMA', 'sarrab@gmail.com', 'guediawaye', '2019-10-13', '77 952 32 00', 'M-11-010', 2, NULL, 14),
(76, 'Sarr', 'Abdoulaye', 'sarrab@gmail.com', 'guediawaye', '2019-10-26', '77 952 32 00', 'M-41-004', 1, 13, NULL),
(77, 'dia', 'MAMA', 'sarrab@gmail.com', 'guediawaye', '2019-10-12', '77 952 32 56', 'M-96-005', 1, 14, NULL),
(78, 'diop', 'MAMADOU ama', 'sarrab@gmail.com', 'guediawaye', '2019-10-26', '77 952 32 56', 'M-17-006', 1, 13, NULL),
(79, 'dia', 'MAMA', 'sarrab@gmail.com', 'guediawaye', '2019-10-20', '77 952 32 44', 'M-45-007', 1, 14, NULL),
(80, 'dia', 'djiby', 'sarrab@gmail.com', 'guediawaye', '2019-10-20', '77 952 32 00', 'M-68-008', 1, 12, NULL),
(81, 'diop', 'Babacar', 'sarrab@gmail.com', 'guediawaye', '2019-10-10', '77 952 32 00', 'M-49-009', 1, 14, NULL);

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
  MODIFY `idDossier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `heure`
--
ALTER TABLE `heure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `idPatient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `idRdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `idSpecialite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
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
