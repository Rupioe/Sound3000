<!DOCTYPE html>
<html>

<head>
<link href="../css/profil.css" rel="stylesheet" type="text/css"/>
<link href="../css/header_footer.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../js/compte.js" defer></script>


<title>Sound 3000</title>
</head>
<body>
      <?php include "../html/header.html";
            include "./PasDeTokenPasDeChocolat.php";
      ?>
      
      

    <div class="flex">
        <div class="title">
            <h1>PROFIL</h1>
        </div>
        <div class="element">
			<form action="./profil.php" method="POST">
            <h2>
                Name : <input type="text" id="name" name="name" value="name"><s></s>          <br><br>
                Last Name : <input type="text" id="last_name" name="last_name" value="last name"><s></s>         <br><br>
                Date : <input type="date" id="date" name="date" value="xx/xx/xxxx"><s></s>              <br><br>
                Email : <input type="email" id="email" name="email" value="email@email.fr"><s></s>             <br><br>
            </h2>

        </div>
    </div>

        </div>

        <div class="image">
            <div class="title">Picture : <br></div>

			<div class="inputBox">
				<button type="button" id="button" onclick="image_switch()" class="bouton">URL ?</button>
					<div id="image-button">
					<input type="file" id="image_profil" name="image_profil">
				</div>
			</div>
            <img src="../resources/images/compte/compte.png">
        </div>

            <button type="submit" class="btn">Account</button>
</form>

    <?php include "../html/footer.html" ?>
    </body>    
</html>

<?php

//UPDATE nom_table
//SET colonne1 = nouvelle_valeur1, colonne2 = nouvelle_valeur2
//WHERE condition;

// Désactiver l'affichage des erreurs
error_reporting(0);
ini_set('display_errors', 0);
 
include "./db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = htmlspecialchars($_POST['email']);
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $date_naissance = htmlspecialchars($_POST['date_naissance']);
  $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
  $mot_de_passe_conf = htmlspecialchars($_POST['mot_de_passe_conf']);
  $image_profil = htmlspecialchars($_POST['image_profil']);



?>