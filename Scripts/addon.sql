USE bddSound;
INSERT INTO styles (style) VALUES ('rap');
INSERT INTO styles (style) VALUES ('rock');
INSERT INTO styles (style) VALUES ('pop');
INSERT INTO styles (style) VALUES ('classic');
INSERT INTO styles (style) VALUES ('hardcore');
INSERT INTO styles (style) VALUES ('underground');
INSERT INTO styles (style) VALUES ('new genre');
USE bddSound; INSERT INTO album (id, titre, date_parution, chemin_image, style) VALUES (1,'Vivre à la campagne',STR_TO_DATE('01/01/2010', '%d/%m/%Y'),'url','classic');
USE bddSound; INSERT INTO album (id, titre, date_parution, chemin_image, style) VALUES (2,'Fréquence sonore',STR_TO_DATE('05/06/2020', '%d/%m/%Y'),'url.com','hardcore');
USE bddSound; INSERT INTO album (id, titre, date_parution, chemin_image, style) VALUES (3,'Raise & Revolt',STR_TO_DATE('03/08/2009', '%d/%m/%Y'),'url.com','hardcore');
INSERT INTO types(type) VALUES(TRUE);
INSERT INTO types(type) VALUES(FALSE);
USE bddSound; INSERT INTO artiste (id, nom, prenom, pseudo, date_naissance,sexe,type,id_groupe) VALUES (1,'Costes','Jean','Costes',STR_TO_DATE('04/03/1968', '%d/%m/%Y'),1,0,NULL);
USE bddSound; INSERT INTO discographie (id, id_artiste) VALUES (1,1);
