#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: status
#------------------------------------------------------------

CREATE TABLE status(
        idStatus     Int  Auto_increment  NOT NULL ,
        niveauStatus Int NOT NULL ,
        codeAcces    Varchar (50) NOT NULL ,
        nomStatus    Varchar (50) NOT NULL
	,CONSTRAINT status_AK UNIQUE (nomStatus)
	,CONSTRAINT status_PK PRIMARY KEY (idStatus)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: patient
#------------------------------------------------------------

CREATE TABLE patient(
        idPatient     Int  Auto_increment  NOT NULL ,
        nom           Varchar (50) NOT NULL ,
        prenom        Varchar (50) NOT NULL ,
        dateNaissance Date NOT NULL ,
        tel           Varchar (50) NOT NULL ,
        matricule     Varchar (50) NOT NULL
	,CONSTRAINT patient_AK UNIQUE (matricule)
	,CONSTRAINT patient_PK PRIMARY KEY (idPatient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: service
#------------------------------------------------------------

CREATE TABLE service(
        idService   Int  Auto_increment  NOT NULL ,
        description Text NOT NULL ,
        nomService  Varchar (50) NOT NULL
	,CONSTRAINT service_AK UNIQUE (nomService)
	,CONSTRAINT service_PK PRIMARY KEY (idService)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: specialite
#------------------------------------------------------------

CREATE TABLE specialite(
        idSpecialite  Int  Auto_increment  NOT NULL ,
        description   Text NOT NULL ,
        nomSpecialite Varchar (50) NOT NULL ,
        idService     Int NOT NULL
	,CONSTRAINT specialite_AK UNIQUE (nomSpecialite)
	,CONSTRAINT specialite_PK PRIMARY KEY (idSpecialite)

	,CONSTRAINT specialite_service_FK FOREIGN KEY (idService) REFERENCES service(idService)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisateur
#------------------------------------------------------------

CREATE TABLE utilisateur(
        idUtilisateur Int  Auto_increment  NOT NULL ,
        nom           Varchar (50) NOT NULL ,
        prenom        Varchar (50) NOT NULL ,
        email         Varchar (50) NOT NULL ,
        dateNaissance Date NOT NULL ,
        tel           Varchar (50) NOT NULL ,
        matricule     Varchar (50) NOT NULL ,
        idStatus      Int NOT NULL ,
        idSpecialite  Int ,
        idService     Int
	,CONSTRAINT utilisateur_AK UNIQUE (matricule)
	,CONSTRAINT utilisateur_PK PRIMARY KEY (idUtilisateur)

	,CONSTRAINT utilisateur_status_FK FOREIGN KEY (idStatus) REFERENCES status(idStatus)
	,CONSTRAINT utilisateur_specialite0_FK FOREIGN KEY (idSpecialite) REFERENCES specialite(idSpecialite)
	,CONSTRAINT utilisateur_service1_FK FOREIGN KEY (idService) REFERENCES service(idService)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: rdv
#------------------------------------------------------------

CREATE TABLE rdv(
        idRdv         Int  Auto_increment  NOT NULL ,
        motifRdv      Varchar (50) NOT NULL ,
        heureDebut    Varchar (50) NOT NULL ,
        heureFin      Varchar (50) NOT NULL ,
        dateRdv       Date NOT NULL ,
        idUtilisateur Int NOT NULL ,
        idPatient     Int NOT NULL
	,CONSTRAINT rdv_PK PRIMARY KEY (idRdv)

	,CONSTRAINT rdv_utilisateur_FK FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(idUtilisateur)
	,CONSTRAINT rdv_patient0_FK FOREIGN KEY (idPatient) REFERENCES patient(idPatient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: dossierMedical
#------------------------------------------------------------

CREATE TABLE dossierMedical(
        idDossier      Int  Auto_increment  NOT NULL ,
        nomExamen      Varchar (50) NOT NULL ,
        resultatExamen Varchar (50) NOT NULL ,
        ordonnance     Varchar (50) NOT NULL ,
        dateExamen     Date NOT NULL ,
        idUtilisateur  Int NOT NULL ,
        idPatient      Int NOT NULL
	,CONSTRAINT dossierMedical_PK PRIMARY KEY (idDossier)

	,CONSTRAINT dossierMedical_utilisateur_FK FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(idUtilisateur)
	,CONSTRAINT dossierMedical_patient0_FK FOREIGN KEY (idPatient) REFERENCES patient(idPatient)
)ENGINE=InnoDB;
