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
        //'SELECT * FROM morceau WHERE id = "'.$_GET['id'].'"';
        //'SELECT date_parution, album.titre AS album_titre, morceau.* FROM morceau JOIN album ON morceau.id_album = album.id WHERE morceau.id ="'.$_GET['id'].'"';
        $request = 'SELECT date_parution, album.titre AS album_titre, morceau.*, artiste.pseudo, artiste.id AS artiste_id FROM morceau JOIN album ON morceau.id_album = album.id JOIN discographie ON album.id = discographie.id JOIN artiste ON discographie.id_artiste = artiste.id WHERE morceau.id ="'.$_GET['id'].'"';
        $statement = $dbCnx->prepare($request);
        $statement->execute();
        $result = $statement->fetchAll();
    }
    catch (PDOException $exception)
    {
        error_log('Request error: '.$exception->getMessage());
    }
    foreach ( $result as $ligne){ 
	        $titreGet = $ligne['titre'];
            $dureeGet = $ligne['duree'];
            $musique = $ligne['chemin_musique'];
            $image = $ligne['chemin_image'];
            $albumTitre = $ligne['album_titre'];
            $date = $ligne['date_parution'];
            $pseudo = $ligne['pseudo'];
    }
?>

    <div class="flex">

        <div class="image">
            <img src="<?php echo $image ?>">
        </div>

        <div class="element">
            
                
            Album :  <?php echo $albumTitre ?>          <br>
            Name : <?php echo '<a href="./artiste.php?id='.$ligne['artiste_id'].'">'.$pseudo.'</a>' ?><s></s>          <br>
            Creation : <?php echo $date ?> <s></s>          <br>
            Time : <?php echo floor($dureeGet/60)?> minutes <?php echo $dureeGet%60 ?> secondes <s></s>          <br>
            
        </div>

    </div>

        <div class="title2">
            <h2>Title : <?php echo $titreGet ?></h2>
        </div>


        <?php include "../html/footer.html" ?>
    </body>    
</html>