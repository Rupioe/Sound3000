<!DOCTYPE html>
<html>

<head>
<link href="../css/music.css" rel="stylesheet" type="text/css"/>
<link href="../css/header_footer.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Sound 3000</title>
</head>
<body>
<?php include "../html/header.html";
      include "./PasDeTokenPasDeChocolat.php";

    // Désactiver l'affichage des erreurs
    error_reporting(0);
    ini_set('display_errors', 0);
 

    try
    {
        $request = 'SELECT * FROM morceau WHERE id = "'.$_GET['id'].'"';
        $request = 'SELECT date_parution, album.titre AS album_titre, morceau.* FROM morceau JOIN album ON morceau.id_album = album.id WHERE morceau.id ="'.$_GET['id'].'"';
        $statement = $dbCnx->prepare($request);
        $statement->execute();
        $result = $statement->fetchAll();
    }
    catch (PDOException $exception)
    {
        error_log('Request error: '.$exception->getMessage());
    }
    foreach ( $result as $ligne){ 
 // email | nom   | prenom | date_naissance | password           | chemin_image | token  | timestamp
	        $titreGet = $ligne['titre'];
            $dureeGet = $ligne['duree'];
            $musique = $ligne['chemin_musique'];
            $image = $ligne['chemin_image'];
            $albumTitre = $ligne['album_titre'];
            $date = $ligne['date_parution'];
    }
?>

    <div class="flex">

        <div class="image">
            <img src="../resources/images/morceau/musique.png">
        </div>

        <div class="element">
            
                
            Album :  <s></s>          <br>
            Name : <s></s>          <br>
            Creation :  <s></s>          <br>
            Time :  <s></s>          <br>
            
        </div>

    </div>

        <div class="title2">
            <h2>Title : <s></s></h2>
        </div>


        <?php include "../html/footer.html" ?>
    </body>    
</html>