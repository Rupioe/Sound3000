<!DOCTYPE html>
<html>

<head>
<link href="../css/profil.css" rel="stylesheet" type="text/css"/>
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
                  <li><a href=""><img src="../html/image/profil.png"></a></li>
                  <li><a href="connection.php"><img src="../html/image/exit.png"></a></li>
                </ul>
              </nav>
            
      </header>
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

    <div class="flex">
        <div class="title">
            <h1>PROFIL</h1>
        </div>
        <div class="element">
            <h2>
                Name : <s></s>          <br><br>
                Last Name : <s></s>         <br><br>
                Date : <s></s>              <br><br>
                Email : <s></s>             <br><br>
            </h2>
        </div>

        <div class="image">
            <div class="title">Picture : <br></div>
            <img src="../resources/images/compte/compte.png">
        </div>
    </div>
    
    



    <script>
        let searchBtn = document.getElementById("searchBtn");
        searchBtn.addEventListener("click", function(event){
            event.preventDefault(); 
            document.getElementById("searchWrapper").classList.toggle("open");
        })
    </script>
    </body>    
</html>