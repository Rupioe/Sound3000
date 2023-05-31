#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: artiste
#------------------------------------------------------------

CREATE TABLE artiste(
        nom Varchar (50) NOT NULL
	,CONSTRAINT artiste_PK PRIMARY KEY (nom)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: image_profil
#------------------------------------------------------------

CREATE TABLE image_profil(
        id          Int NOT NULL ,
        chemin      Varchar (100) NOT NULL ,
        nom_fichier Varchar (50) NOT NULL
	,CONSTRAINT image_profil_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: types
#------------------------------------------------------------

CREATE TABLE types(
        type Varchar (50) NOT NULL ,
        nom  Varchar (50) NOT NULL
	,CONSTRAINT types_PK PRIMARY KEY (type)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: morceau
#------------------------------------------------------------

CREATE TABLE morceau(
        titre Varchar (50) NOT NULL ,
        duree Int NOT NULL
	,CONSTRAINT morceau_PK PRIMARY KEY (titre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: album
#------------------------------------------------------------

CREATE TABLE album(
        titre         Varchar (50) NOT NULL ,
        date_parution Date NOT NULL ,
        chemin_image  Varchar (50) NOT NULL ,
        titre_morceau Varchar (50) NOT NULL
	,CONSTRAINT album_PK PRIMARY KEY (titre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: styles
#------------------------------------------------------------

CREATE TABLE styles(
        style Varchar (50) NOT NULL
	,CONSTRAINT styles_PK PRIMARY KEY (style)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: liste_lecture
#------------------------------------------------------------

CREATE TABLE liste_lecture(
        nom        Varchar (50) NOT NULL ,
        date_ajout Date NOT NULL ,
        titre      Varchar (50) NOT NULL
	,CONSTRAINT liste_lecture_PK PRIMARY KEY (nom)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: groupe
#------------------------------------------------------------

CREATE TABLE groupe(
        nom Varchar (50) NOT NULL
	,CONSTRAINT groupe_PK PRIMARY KEY (nom)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: discographie
#------------------------------------------------------------

CREATE TABLE discographie(
        titre Varchar (50) NOT NULL ,
        nom   Varchar (50) NOT NULL
	,CONSTRAINT discographie_PK PRIMARY KEY (titre,nom)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: est_du_style
#------------------------------------------------------------

CREATE TABLE est_du_style(
        style Varchar (50) NOT NULL ,
        titre Varchar (50) NOT NULL ,
        nom   Varchar (50) NOT NULL
	,CONSTRAINT est_du_style_PK PRIMARY KEY (style,titre,nom)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: est_dans
#------------------------------------------------------------

CREATE TABLE est_dans(
        nom         Varchar (50) NOT NULL ,
        nom_artiste Varchar (50) NOT NULL
	,CONSTRAINT est_dans_PK PRIMARY KEY (nom,nom_artiste)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: compte
#------------------------------------------------------------

CREATE TABLE compte(
        email             Varchar (50) NOT NULL ,
        password          Varchar (30) NOT NULL ,
        nom               Varchar (50) NOT NULL ,
        prenom            Varchar (50) NOT NULL ,
        age               Int NOT NULL ,
        date_creation     Date NOT NULL ,
        date_ajout        Date NOT NULL ,
        id                Int NOT NULL ,
        nom_liste_lecture Varchar (50) NOT NULL ,
        id_favoris        Int NOT NULL ,
        id_historique     Int NOT NULL
	,CONSTRAINT compte_PK PRIMARY KEY (email,password)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: favoris
#------------------------------------------------------------

CREATE TABLE favoris(
        id         Int NOT NULL ,
        nombre     Int NOT NULL ,
        duree      Int NOT NULL ,
        date_ajout Date NOT NULL ,
        email      Varchar (50) NOT NULL ,
        password   Varchar (30) NOT NULL ,
        titre      Varchar (50) NOT NULL
	,CONSTRAINT favoris_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: historique
#------------------------------------------------------------

CREATE TABLE historique(
        id          Int NOT NULL ,
        date_ecoute Date NOT NULL ,
        titre       Varchar (50) NOT NULL ,
        email       Varchar (50) NOT NULL ,
        password    Varchar (30) NOT NULL
	,CONSTRAINT historique_PK PRIMARY KEY (id)
)ENGINE=InnoDB;




ALTER TABLE types
	ADD CONSTRAINT types_artiste0_FK
	FOREIGN KEY (nom)
	REFERENCES artiste(nom);

ALTER TABLE album
	ADD CONSTRAINT album_morceau0_FK
	FOREIGN KEY (titre_morceau)
	REFERENCES morceau(titre);

ALTER TABLE liste_lecture
	ADD CONSTRAINT liste_lecture_morceau0_FK
	FOREIGN KEY (titre)
	REFERENCES morceau(titre);

ALTER TABLE discographie
	ADD CONSTRAINT discographie_album0_FK
	FOREIGN KEY (titre)
	REFERENCES album(titre);

ALTER TABLE discographie
	ADD CONSTRAINT discographie_artiste1_FK
	FOREIGN KEY (nom)
	REFERENCES artiste(nom);

ALTER TABLE est_du_style
	ADD CONSTRAINT est_du_style_styles0_FK
	FOREIGN KEY (style)
	REFERENCES styles(style);

ALTER TABLE est_du_style
	ADD CONSTRAINT est_du_style_album1_FK
	FOREIGN KEY (titre)
	REFERENCES album(titre);

ALTER TABLE est_du_style
	ADD CONSTRAINT est_du_style_liste_lecture2_FK
	FOREIGN KEY (nom)
	REFERENCES liste_lecture(nom);

ALTER TABLE est_dans
	ADD CONSTRAINT est_dans_groupe0_FK
	FOREIGN KEY (nom)
	REFERENCES groupe(nom);

ALTER TABLE est_dans
	ADD CONSTRAINT est_dans_artiste1_FK
	FOREIGN KEY (nom_artiste)
	REFERENCES artiste(nom);

ALTER TABLE compte
	ADD CONSTRAINT compte_image_profil0_FK
	FOREIGN KEY (id)
	REFERENCES image_profil(id);

ALTER TABLE compte
	ADD CONSTRAINT compte_liste_lecture1_FK
	FOREIGN KEY (nom_liste_lecture)
	REFERENCES liste_lecture(nom);

ALTER TABLE compte
	ADD CONSTRAINT compte_favoris2_FK
	FOREIGN KEY (id_favoris)
	REFERENCES favoris(id);

ALTER TABLE compte
	ADD CONSTRAINT compte_historique3_FK
	FOREIGN KEY (id_historique)
	REFERENCES historique(id);

ALTER TABLE compte 
	ADD CONSTRAINT compte_favoris0_AK 
	UNIQUE (id_favoris);

ALTER TABLE compte 
	ADD CONSTRAINT compte_historique1_AK 
	UNIQUE (id_historique);

ALTER TABLE favoris
	ADD CONSTRAINT favoris_compte0_FK
	FOREIGN KEY (email,password)
	REFERENCES compte(email,password);

ALTER TABLE favoris
	ADD CONSTRAINT favoris_morceau1_FK
	FOREIGN KEY (titre)
	REFERENCES morceau(titre);

ALTER TABLE favoris 
	ADD CONSTRAINT favoris_compte0_AK 
	UNIQUE (email,password);

ALTER TABLE historique
	ADD CONSTRAINT historique_morceau0_FK
	FOREIGN KEY (titre)
	REFERENCES morceau(titre);

ALTER TABLE historique
	ADD CONSTRAINT historique_compte1_FK
	FOREIGN KEY (email,password)
	REFERENCES compte(email,password);

ALTER TABLE historique 
	ADD CONSTRAINT historique_compte0_AK 
	UNIQUE (email,password);
