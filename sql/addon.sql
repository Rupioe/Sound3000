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
INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('zizi@kkk.fr','jflksjfs','jkfmsjkfs',STR_TO_DATE('2023-06-16', '%Y-%m-%d'),'jlkdsjmlfks','');
INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('lollo@gamil.com','fmljgk','glkjfdmg',STR_TO_DATE('2023-06-09', '%Y-%m-%d'),'gmlkjfkmsgdl','');
INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('bllblblb@gmail.com','djkfqmsl','fmlkdsfjlmk',STR_TO_DATE('5454-04-05', '%Y-%m-%d'),'$2y$10$YOQUVyhj1eJDfOSTaGRhKunlLwO5oF6AZq2zL2fiN6SAaawcPX7Ea','');
INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('bllblb34lb@gmail.com','djkfqmsl','fmlkdsfjlmk',STR_TO_DATE('5454-04-05', '%Y-%m-%d'),'$2y$10$fMUDcJbPhmRy8NHXuNTrKeGuNNr9ZYlvLYIn2J6vpGcUx94yViw66','');
INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('zizi@kkkk.fr','jfodsks','mflkjds',STR_TO_DATE('0444-12-04', '%Y-%m-%d'),'$2y$10$Cv2LudN9qJpD8Awj9F24cuHFS1P3N5IREf0dlXwyj4KOdfxMVI8D.','http://kk.com');
INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('test@gmail.com','Test','Ing',STR_TO_DATE('0001-01-01', '%Y-%m-%d'),'$2y$10$mobfYTlotsjYoe19ib4sxeoEA7kEB76fdhWAuHoH5wYqhaQeL.Hvy','http://www.azerty.com');
INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('email@fr.fr','Admin','Admin',STR_TO_DATE('0001-01-01', '%Y-%m-%d'),'$2y$10$QU3CnMlIYg2IdmGF0FiereMuPBFHzWymTBOfBMi0mhatSlo2mHcAm','');
INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('a@a.a','Admin','Admin',STR_TO_DATE('0001-01-01', '%Y-%m-%d'),'$2y$10$J78OsT4xRKKIx17L5ru.Te3owma0Hv1ewl/DtRp3.RZCeXWJtUExW','');
