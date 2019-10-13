-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2019 at 02:27 PM
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
  `dateExamen` date NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idPatient` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dossierMedical`
--

INSERT INTO `dossierMedical` (`idDossier`, `nomExamen`, `resultatExamen`, `ordonnance`, `dateExamen`, `idUtilisateur`, `idPatient`) VALUES
(3, 'Examen1', 'ok', 'para', '2019-10-23', 2, 2),
(4, 'examen2', 'no', 'aspirine', '2019-10-31', 1, 3),
(7, 'Examen1', 'ok', 'para', '2019-10-23', 2, 2),
(8, 'examen2', 'no', 'aspirine', '2019-10-31', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `idPatient` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `dateNaissance` date NOT NULL,
  `tel` varchar(50) NOT NULL,
  `matricule` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`idPatient`, `nom`, `prenom`, `adresse`, `dateNaissance`, `tel`, `matricule`) VALUES
(1, 'sarr', 'abdoulaye', '', '2019-10-01', '7845533', '142'),
(2, 'diallo', 'souleymane', '', '2019-10-02', '444444', '111122'),
(3, 'sarr', 'abdoulaye', '', '2019-10-01', '7845533', '143'),
(4, 'mass', 'baba', 'camara', '1998-12-25', 'baba', 'camar'),
(5, 'cam', 'baba', 'camara', '1998-12-25', 'baba', 'camara');

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
(1, 'safrrs', '12:30', '13:00', '1998-12-25', 9, 1, 1),
(2, 'maladie grave', '12:30', '13:00', '1998-12-25', 9, 1, 1),
(3, 'safrrs', '12:30', '13:00', '1998-12-25', 9, 1, 1),
(4, 'safrrs', '12:30', '13:00', '1998-12-25', 9, 1, 1),
(5, 'safrrs', '12:30', '13:00', '1998-12-25', 9, 1, 1),
(6, 'safrrs', '12:30', '13:00', '1998-12-25', 9, 1, 1),
(7, 'safrrs', '12:30', '13:00', '1998-12-25', 9, 1, 1),
(8, 'safrrs', '12:30', '13:00', '1998-12-25', 9, 1, 1),
(9, 'safrrs', '12:30', '13:00', '1998-12-25', 9, 1, 2),
(10, 'palidisme', '12:15', '12:30', '2019-10-16', 23, 2, 12);

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
(1, 'service sanitaire', 'service35'),
(2, 'gestdbjkfn:sjdcldvldnvklk', 'ophtalmologue'),
(7, 'service sanitaire', 'service2');

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
(1, 'service sanitaire', 'Specialite 12444', 1),
(2, 'gdgdsjs', 'consultation', 1),
(3, 'service sanitaire', 'Specialite 12', 1);

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
(1, 'sarr', 'abdoulaye', 'sarrabdoulaye93@gmail.com', '', '2019-10-01', '7845533', '142', 1, 1, NULL),
(2, 'mass diatta', 'baba', 'sarr@gmail.com', 'camara', '1998-12-25', 'baba', '000', 1, 1, NULL),
(9, 'dia', 'moumar', 'moussa@gmail.com', '', '2019-10-17', '778451255', 'M-121', 2, NULL, 2),
(10, 'ba', 'samba', 'sarr@gmail.com', '', '2019-10-10', '778451256', 'M-1344', 2, NULL, 1),
(11, 'dia', 'moumar', 'moussa@gmail.com', 'n,,n', '2019-10-17', '778451255', 'M-1215555', 1, 1, NULL),
(12, 'sarr', 'mam', 'saa@gmol', 'guedia', '1996-01-02', '7855', 'f4', 1, 1, NULL),
(13, 'mass', 'baba', 'sarr@gmail.com', 'camara', '1998-12-25', 'baba', '96', 1, 1, NULL),
(23, 'mass diatta', 'baba', 'sarr@gmail.com', 'camara', '1998-12-25', 'baba', '00101', 2, NULL, 2),
(26, 'mass diatta', 'baba', 'sarr@gmail.com', 'camara', '1998-12-25', 'baba', '0010A1', 2, NULL, 2),
(27, 'mass diatta', 'baba', 'sarr@gmail.com', 'camara', '1998-12-25', 'baba', '0010sA1', 2, NULL, 2),
(28, 'dia', 'moussa', 'moussa@gmail.com', 'ddh', '2019-10-17', '773951254', '10', 3, NULL, NULL);

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
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idPatient`),
  ADD UNIQUE KEY `patient_AK` (`matricule`);

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
  MODIFY `idDossier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `idPatient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rdv`
--
ALTER TABLE `rdv`
  MODIFY `idRdv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `idSpecialite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dossierMedical`
--
ALTER TABLE `dossierMedical`
  ADD CONSTRAINT `dossierMedical_patient0_FK` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`idPatient`)  ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dossierMedical_utilisateur_FK` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`)  ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`idMedecin`) REFERENCES `utilisateur` (`idUtilisateur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rdv_patient0_FK` FOREIGN KEY (`idPatient`) REFERENCES `patient` (`idPatient`)  ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rdv_utilisateur_FK` FOREIGN KEY (`idSecretaire`) REFERENCES `utilisateur` (`idUtilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `specialite`
--
ALTER TABLE `specialite`
  ADD CONSTRAINT `specialite_service_FK` FOREIGN KEY (`idService`) REFERENCES `service` (`idService`)  ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_service1_FK` FOREIGN KEY (`idService`) REFERENCES `service` (`idService`)  ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_specialite0_FK` FOREIGN KEY (`idSpecialite`) REFERENCES `specialite` (`idSpecialite`)  ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_status_FK` FOREIGN KEY (`idStatus`) REFERENCES `status` (`idStatus`)  ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
