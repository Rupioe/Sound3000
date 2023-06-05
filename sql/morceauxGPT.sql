# La requête :
# INSERT INTO morceau (id, titre, duree, chemin_musique, chemin_image,id_album) VALUES ($ID,'$TITRE',$DUREE,'$CHEMIN_MUSIQUE','$CHEMIN_IMAGE',$IDALBUM); Complète cette requête avec des morceaux des albums que tu m'as donné précedemment, je veux 10 morceaux par album. Dans $ID génère un nombre aléatoire, dans $TITRE met le titre, dans $DATE_PARUTION met une date au format : DD/MM/YYYY, dans chemin image met : "../resources/images/morceau/nom_morceau.png et remplace nom_morceau.png par le nom du morceau et dans chemin_musique met : "../resources/sounds/nom_morceau.mp3 et remplace nom_morceau.mp3 par le nom du morceau et dans $IDALBUM met un nombre qui s'incrémente quand on change d'album et le même pour les morceaux du même album.
# -------------------------------------------

use bddSound;

INSERT INTO morceau (id, titre, duree, chemin_musique, chemin_image, id_album) VALUES (FLOOR(RAND() * 100000) + 1, 'Shape of You', 235, '../resources/sounds/shape_of_you.mp3', '../resources/images/morceau/shape_of_you.png', 1);

