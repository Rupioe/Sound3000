<!DOCTYPE html>
<html>

<head>
<link href="../css/album.css" rel="stylesheet" type="text/css"/>
<link href="../css/header_footer.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Sound 3000</title>
</head>
<body>
<?php include "../html/header.html";?> 



<footer class="footer">
    <div class="song_side">


    </div>
    <div class="master_play"> 
        <div class="wave"> 
            <div class="wave1"></div>
            <div class="wave1"></div>
            <div class="wave1"></div>
        </div>

        <img src="../resources/images/compte/compte.png" id="poster_master_play">
        <h5 id="titre">
            A completer
            <div class="subtitle">ici aussi</div>
        </h5>

        <div class="icon">
            <img src="../html/image/music.svg" class="bi">
            <img src="../html/image/start_fill.svg" class="bi">
            <img src="../html/image/play.svg" class="bi">
            <img src="../html/image/end_fill.svg" class="bi">
            <img src="../html/image/download.svg" class="bi" id="download_music">
        </div>

        <span id="currentStart">0:00</span>
        <div class="bar">
            <input type="range" id="seek" min="0" max="100">
            <div class="bar2" id="bar2"></div>
            <div class="dot"></div>
        </div>

        <span id="currentEnd">0:30</span>
        <div class="vol">
            <img src="../html/image/volume.svg" class="bi" id="vol_icon">
            <input type="range" min="0" max="100" id="volume">
            <div class="vol_bar"></div>
            <div class="dot" id="vol_dot"></div>
        </div>
    </div>

    

<!--    <div class="right">
        <p class="name">Quentin Carbonnel<br>Youenn Le Hénaff</p>
        </p>
    </div> -->
</footer>


    </body>    
</html>