<!DOCTYPE html>
<html>

<head>
<link href="../css/music.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>Sound 3000</title>
</head>
<body>
    <div class="search" id="searchWrapper">
        <input type="text">
        <button><img src="../html/image/search.png"></button>
      </div>
      
      <header>
        
        <div class="logo">Sound 3000</div>
        <nav >
       
                <ul>
                  <li><a href="index.php" class="link">Home</a></li>
                  <li><a href="" class="link">Favorites</a></li>
                  <li><a href="playlist.php" class="link">Playlist</a></li>
                  <li><a href="" class="link">History</a></li>
                  <li><a href="" id="searchBtn"><img src="../html/image/search.png"></a></li>
          </ul>
        </nav>
      
              <nav class="connexion">
                <ul>
                  <li><a href="profil.html"><img src="image/profil.png"></a></li>
                  <li><a href="../php/connection.php"><img src="image/exit.png"></a></li>
                </ul>
              </nav>
            
      </header>

    <div class="flex">

        <div class="image">
            <img src="../resources/images/sound/musique.png">
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


        <footer class="footer">
            <div class="left">
                <p class="name">Youenn Le Hénaff</p>
            </div>
            <div class="right">
                <p class="name">Quentin Carbonnel</p>
            </div>
            <div class="center">
                <p>Sound 3000</p>
            </div>
        </footer>
        
    
    
    



        <script>
            let searchBtn = document.getElementById("searchBtn");
            searchBtn.addEventListener("click", function(event){
                event.preventDefault(); 
                document.getElementById("searchWrapper").classList.toggle("open");  
            })
        </script>
    </body>    
</html>