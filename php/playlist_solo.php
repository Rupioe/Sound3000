<!DOCTYPE html>
<html>

<head>
<link href="../css/album.css" rel="stylesheet" type="text/css"/>
<link href="../css/history.css" rel="stylesheet" type="text/css"/>
<link href="../css/header_footer.css" rel="stylesheet" type="text/css"/>
<link href="../css/pop-up.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Sound 3000</title>
</head>
<body>
<?php include "../html/header.html";
      include "./PasDeTokenPasDeChocolat.php";
?>

    <div class="flex">

        <div class="image">
            <img src="../resources/images/album/album.png">
        </div>

        <div class="element">
            Album :  <s></s>          <br>
            Name : <s></s>          <br>
            Creation :  <s></s>          <br>
            Style :  <s></s>          <br>

        </div>

        <div class="music"><h2>music : </h2></div>
        <ol class="list-card-music">
    <li>    
        <div class="card-music">
            <div class="card-music-description">
                <div class="card-music-description--cover">
                    <img src="../html/image/music.png">
                </div>
                <div class="card-music-description--title--artiste">
                    <h3>titre de musique</h3>
                    <h4>Nom artiste</h4>
                </div>
            </div>
            <div class="card-music-actions">
                <ul>
                    <li><a href="" class="add-playlist" onclick="openPopup()"><img src="../html/image/add.png" ></a></li>
                    <li><a href="" class="add-favorite"></a></li>
                    <li><a href="" class="play"><img src="../html/image/play.png"></a></li>
                </ul>
            </div>
        </div>
    </li>
</ol>

    </div>

    <section>
        <div class="sound">
        </div>
</section>

        <?php include "../html/footer.html" ?>
        
        <script src="../js/heart.js" defer></script>
        <script src="../js/pop-up.js" defer></script>
    </body>
</html>
