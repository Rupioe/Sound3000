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
INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('bb@bb.bb','Nom','Prenom',STR_TO_DATE('2555-02-05', '%Y-%m-%d'),'$2y$10$BYrHmA7o1uCZ5oMY6Y21FuDniHSNw/SrspHx8TN9/nat59w3.UFqa','../resources/images/compte/neon.jpg');
INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('woup@woup.woup','lkjf','lfj',STR_TO_DATE('0161-12-04', '%Y-%m-%d'),'$2y$10$lB0PVbh8HoJRCR5Op5hYw.2E3GxjjMSRyi.L06pCHLb30xVdXJU02','../resources/images/compte/');
INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('testa@jk.fr','wou','jmlkq',STR_TO_DATE('0056-04-08', '%Y-%m-%d'),'$2y$10$RAa4ec68pFO7tw6cfDR2JuQpEjyI2soKK3/UCSdkNq/MHQhSjDG5u','');
UPDATE compte SET chemin_image='../resources/images/compte/fmahand.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/fmahand.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/fmahand.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/evilcorp.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/unbroken.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
UPDATE compte SET chemin_image='../resources/images/compte/neon.jpg' WHERE token='91090fb546149f391365c765d7305de229226d3d6a409f58854b1b2801a06ce7';
