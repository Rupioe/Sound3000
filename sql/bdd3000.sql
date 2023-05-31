#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

USE bddSound;
fdjslkfjmsjfmlskjflskj

#------------------------------------------------------------
# Table: compte
#------------------------------------------------------------

CREATE TABLE compte(
        email          Varchar (50) NOT NULL ,
        nom            Varchar (50) NOT NULL ,
        prenom         Varchar (50) NOT NULL ,
        date_naissance Date NOT NULL ,
        password       Varchar (30) NOT NULL ,
        chemin_image   Varchar (100) NOT NULL
	,CONSTRAINT compte_PK PRIMARY KEY (email,nom)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: types
#------------------------------------------------------------

CREATE TABLE types(
        type Bool NOT NULL
	,CONSTRAINT types_PK PRIMARY KEY (type)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: styles
#------------------------------------------------------------

CREATE TABLE styles(
        style Varchar (50) NOT NULL
	,CONSTRAINT styles_PK PRIMARY KEY (style)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: album
#------------------------------------------------------------

CREATE TABLE album(
        titre         Varchar (50) NOT NULL ,
        date_parution Date NOT NULL ,
        chemin_image  Varchar (50) NOT NULL ,
        style         Varchar (50) NOT NULL
	,CONSTRAINT album_PK PRIMARY KEY (titre)

	,CONSTRAINT album_styles_FK FOREIGN KEY (style) REFERENCES styles(style)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: morceau
#------------------------------------------------------------

CREATE TABLE morceau(
        titre          Varchar (50) NOT NULL ,
        duree          Int NOT NULL ,
        chemin_musique Varchar (100) NOT NULL ,
        chemin_image   Varchar (100) NOT NULL ,
        titre_album    Varchar (50) NOT NULL
	,CONSTRAINT morceau_PK PRIMARY KEY (titre)

	,CONSTRAINT morceau_album_FK FOREIGN KEY (titre_album) REFERENCES album(titre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: liste_lecture
#------------------------------------------------------------

CREATE TABLE liste_lecture(
        nom         Varchar (50) NOT NULL ,
        nombre_sons Int NOT NULL ,
        duree       Int NOT NULL ,
        style       Varchar (50) NOT NULL
	,CONSTRAINT liste_lecture_PK PRIMARY KEY (nom)

	,CONSTRAINT liste_lecture_styles_FK FOREIGN KEY (style) REFERENCES styles(style)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: favoris
#------------------------------------------------------------

CREATE TABLE favoris(
        id     Int NOT NULL ,
        nombre Int NOT NULL ,
        duree  Int NOT NULL
	,CONSTRAINT favoris_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: groupe
#------------------------------------------------------------

CREATE TABLE groupe(
        nom           Varchar (50) NOT NULL ,
        date_creation Date NOT NULL
	,CONSTRAINT groupe_PK PRIMARY KEY (nom)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: artiste
#------------------------------------------------------------

CREATE TABLE artiste(
        nom            Varchar (50) NOT NULL ,
        prenom         Varchar (50) NOT NULL ,
        pseudo         Varchar (50) NOT NULL ,
        date_naissance Date NOT NULL ,
        sexe           Bool NOT NULL ,
        type           Bool NOT NULL ,
        nom_groupe     Varchar (50)
	,CONSTRAINT artiste_PK PRIMARY KEY (nom,prenom,pseudo)

	,CONSTRAINT artiste_types_FK FOREIGN KEY (type) REFERENCES types(type)
	,CONSTRAINT artiste_groupe0_FK FOREIGN KEY (nom_groupe) REFERENCES groupe(nom)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: discographie
#------------------------------------------------------------

CREATE TABLE discographie(
        titre  Varchar (50) NOT NULL ,
        nom    Varchar (50) NOT NULL ,
        prenom Varchar (50) NOT NULL ,
        pseudo Varchar (50) NOT NULL
	,CONSTRAINT discographie_PK PRIMARY KEY (titre,nom,prenom,pseudo)

	,CONSTRAINT discographie_album_FK FOREIGN KEY (titre) REFERENCES album(titre)
	,CONSTRAINT discographie_artiste0_FK FOREIGN KEY (nom,prenom,pseudo) REFERENCES artiste(nom,prenom,pseudo)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: creer_liste
#------------------------------------------------------------

CREATE TABLE creer_liste(
        nom           Varchar (50) NOT NULL ,
        email_compte  Varchar (50) NOT NULL ,
        nom_compte    Varchar (50) NOT NULL ,
        date_creation Date NOT NULL
	,CONSTRAINT creer_liste_PK PRIMARY KEY (nom,email_compte,nom_compte)

	,CONSTRAINT creer_liste_liste_lecture_FK FOREIGN KEY (nom) REFERENCES liste_lecture(nom)
	,CONSTRAINT creer_liste_compte0_FK FOREIGN KEY (email_compte,nom_compte) REFERENCES compte(email,nom)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ajouter_son
#------------------------------------------------------------

CREATE TABLE ajouter_son(
        titre      Varchar (50) NOT NULL ,
        nom        Varchar (50) NOT NULL ,
        date_ajout Date NOT NULL
	,CONSTRAINT ajouter_son_PK PRIMARY KEY (titre,nom)

	,CONSTRAINT ajouter_son_morceau_FK FOREIGN KEY (titre) REFERENCES morceau(titre)
	,CONSTRAINT ajouter_son_liste_lecture0_FK FOREIGN KEY (nom) REFERENCES liste_lecture(nom)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ajouter_favoris
#------------------------------------------------------------

CREATE TABLE ajouter_favoris(
        titre      Varchar (50) NOT NULL ,
        id         Int NOT NULL ,
        date_ajout Date NOT NULL
	,CONSTRAINT ajouter_favoris_PK PRIMARY KEY (titre,id)

	,CONSTRAINT ajouter_favoris_morceau_FK FOREIGN KEY (titre) REFERENCES morceau(titre)
	,CONSTRAINT ajouter_favoris_favoris0_FK FOREIGN KEY (id) REFERENCES favoris(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ecoute
#------------------------------------------------------------

CREATE TABLE ecoute(
        email       Varchar (50) NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        titre       Varchar (50) NOT NULL ,
        date_ecoute Date NOT NULL
	,CONSTRAINT ecoute_PK PRIMARY KEY (email,nom,titre)

	,CONSTRAINT ecoute_compte_FK FOREIGN KEY (email,nom) REFERENCES compte(email,nom)
	,CONSTRAINT ecoute_morceau0_FK FOREIGN KEY (titre) REFERENCES morceau(titre)
)ENGINE=InnoDB;
