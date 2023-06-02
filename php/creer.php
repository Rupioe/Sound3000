<!DOCTYPE html>
<html>
    <head>
        <title>page d'inscription</title>
        <meta charset="utf-8">
        <link href="css/connection.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <section id="main">
            <div class="titleBox">
                <h1>Create Account</h1>
            </div>
			
			<form action="./creer.php" method="POST">

            <div class="inputBox">
                <input type="email" id="email" name="email" class="input" required>
                <p class="inputName">E-MAIL</p>
            </div>
            <p class="errorMessage"></p>
			
			<div class="inputBox">
                <input type="text" id="nom" name="nom" class="input" required>
                <p class="inputName">LAST NAME</p>
            </div>
            <p class="errorMessage"></p>
			
			<div class="inputBox">
                <input type="text" id="prenom" name="prenom" class="input" required>
                <p class="inputName">NAME</p>
            </div>
            <p class="errorMessage"></p>
			
			<div class="inputBox">
                <input type="date" id="date_naissance" name="date_naissance" class="input" required>
                <p class="inputName">AGE</p>
            </div>
            <p class="errorMessage"></p>

            <div class="inputBox">
                <input type="password" id="mot_de_passe" name="mot_de_passe" class="input" required>
                <p class="inputName">PASSWORD</p>
            </div>
            <p class="errorMessage"></p>
			
			<div class="inputBox">
                <input type="password" id="mot_de_passe" name="mot_de_passe" class="input" required>
                <p class="inputName">VERIFY PWD</p>
            </div>
            <p class="errorMessage"></p>
			
			<div class="inputBox">
				<button type="button" id="button" onclick="image_switch()" class="bouton">URL ?</button>
				<p for="image_profil" class="inputName">Profile Picture ?</p>
					<div id="image-button">
					<input type="file" id="image_profil" name="image_profil">
				</div>
				
				
				
			</div>
            

            <button type="submit" class="btn">Account</button>
</form>
            <div class="switchPage">
                <p>vous have a account ?</p>
                <a href="connection.html">connect</a>
            </div>
        </section>
		
		
			  <script>
  let URL = 0;

function image_switch(){

    let bouton = document.getElementById('button');
    let image = document.getElementById('image-button');
    if(URL == 0){
        bouton.innerHTML = "Local file ?";
        URL = 1;
		    image.innerHTML = '<input type="url" id="image_profil" name="image_profil"><br><br></br>';
    }
    else {
        bouton.innerHTML = "URL ?";
        URL = 0;
		    image.innerHTML = '<input type="file" id="image_profil" name="image_profil"><br></br>';
    }


}</script>
    </body>
</html>

<?php
// Désactiver l'affichage des erreurs
//error_reporting(0);
//ini_set('display_errors', 0);
 
include "./db.php";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['email'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date_naissance = $_POST['date_naissance'];
  $mot_de_passe = $_POST['mot_de_passe'];
  $image_profil = $_POST['image_profil'];

  $mysql_query1 = "INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES ('".$email."','".$nom."','".$prenom."',STR_TO_DATE('".$date_naissance."', '%Y-%m-%d'),'".$mot_de_passe."','".$image_profil."');";
  
// nettoyage
$query1 = $dbCnx->prepare($mysql_query1);

$bugflag = 0;
try {
//execution
$query1->execute();
} catch (Exception $e) {
//echo "Une exception a été levée : " . $e->getMessage();
echo '<div class="error">Adresse mail déjà utilisée</div>';
$bugflag = 1;
}

if ( $bugflag == 0){
### save
$nomFichier = '../Scripts/addon.sql';
$mysql_query1 = $mysql_query1."\n";
$file = fopen($nomFichier, 'a');
fwrite($file, $mysql_query1);
fclose($file);
header("Location: index.html");
exit;
}

}
?>
