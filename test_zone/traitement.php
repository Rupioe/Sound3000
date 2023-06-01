<?php
include "./db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['email'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date_naissance = $_POST['date_naissance'];
  $mot_de_passe = $_POST['mot_de_passe'];
  $image_profil = $_POST['image_profil'];


  $mysql_query1 = "INSERT INTO compte (email, nom, prenom, date_naissance, password,chemin_image) VALUES (".$email.",'".$nom."','".$prenom."',STR_TO_DATE('".$date_naissance."', '%m/%d/%Y'),'".$mot_de_passe."','".$image_profil."');";

// nettoyage
$query1 = $dbCnx->prepare($mysql_query1);
//execution
$query1->execute();


### save
$nomFichier = '../Scripts/addon.sql';

$file = fopen($nomFichier, 'a');
fwrite($file, $mysql_query1);
fclose($file);

}
?>
