<!DOCTYPE html>
<html>

<head>
<link href="../css/base.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Sound 3000</title>
</head>

<body>
<?php include "../html/header.html" ?>
      
<section>
    <div class="container">

        <div class="title"><h1>Hello 
<?php
session_start();
include "./db.php";
    try
    {
        $request = 'SELECT nom FROM compte WHERE token = "'.$_SESSION['token'].'"';
        $statement = $dbCnx->prepare($request);
        $statement->execute();
        $result = $statement->fetchAll();
    }
    catch (PDOException $exception)
    {
        error_log('Request error: '.$exception->getMessage());
    }
    foreach ( $result as $ligne) 
	        echo $ligne['nom'];

?>

        </s></h1></div>

        <div class="title"><h1>History</h1></div>
		<div class="music-container">
			<img src="../resources/images/morceau/musique.png">
			<img src="../resources/images/morceau/musique.png">
			<img src="../resources/images/morceau/musique.png">
			<img src="../resources/images/morceau/musique.png">
            <<img src="../resources/images/morceau/musique.png">
			<img src="../resources/images/morceau/musique.png">
			<img src="../resources/images/morceau/musique.png">
			<img src="../resources/images/morceau/musique.png">
            <img src="../resources/images/morceau/musique.png">
			<img src="../resources/images/morceau/musique.png">
			<img src="../resources/images/morceau/musique.png">
			<img src="../resources/images/morceau/musique.png">
		</div>
    </div>
</section>
<section>
    <div class="container">
        <div class="title"><h1>Favorites</h1></div>
		<div class="artiste-container">
			<img src="../resources/images/artiste/artiste.png">
			<img src="../resources/images/artiste/artiste.png">
			<img src="../resources/images/artiste/artiste.png">
			<img src="../resources/images/artiste/artiste.png">
            <img src="../resources/images/artiste/artiste.png">
			<img src="../resources/images/artiste/artiste.png">
            <img src="../resources/images/artiste/artiste.png">
			<img src="../resources/images/artiste/artiste.png">
		</div>
    </div>
</section>
<section>
    <div class="container">
        <div class="title"><h1>Playlists</h1></div>
		<div class="album-container">
			<img src="../resources/images/album/album.png">
			<img src="../resources/images/album/album.png">
			<img src="../resources/images/album/album.png">
			<img src="../resources/images/album/album.png">
            <img src="../resources/images/album/album.png">
			<img src="../resources/images/album/album.png">
            <img src="../resources/images/album/album.png">
			<img src="../resources/images/album/album.png">
		</div>
    </div>
</section>



<?php include "../html/footer.html" ?>
</body>
