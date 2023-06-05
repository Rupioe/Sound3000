<!DOCTYPE html>
<html>

<head>
<link href="../css/profil.css" rel="stylesheet" type="text/css"/>
<link href="../css/header_footer.css" rel="stylesheet" type="text/css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="../js/profil.js" defer></script>


<title>Sound 3000</title>
</head>
<body>
      <?php include "../html/header.html";
            include "./PasDeTokenPasDeChocolat.php";

    try
    {
        $request = 'SELECT * FROM compte WHERE token = "'.$_SESSION['token'].'"';
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
	        $nomGet = $ligne['nom'];
            $prenomGet = $ligne['prenom'];
            $emailGet = $ligne['email'];
            $dateGet = $ligne['date_naissance'];
            $imgGet = $ligne['chemin_image'];
            $pwdGet = $ligne['password'];
    }
      ?>
      
      

    <div class="flex">
        <div class="title">
            <h1>PROFIL</h1>
        </div>
        <div class="element">
	<form action="./profil.php" method="POST" enctype="multipart/form-data">
            <h2>
                Name : <input type="text" id="name" name="name" value="<?php echo $prenomGet ?>"><s></s>          <br><br>
                Last Name : <input type="text" id="last_name" name="last_name" value="<?php echo $nomGet ?>"><s></s>         <br><br>
                Date : <input type="date" id="date" name="date" value="<?php echo $dateGet ?>"><s></s>              <br><br>
                Email : <input type="email" id="email" name="email" value="<?php echo $emailGet ?>" readonly><s></s>             <br><br>
                Password : <input type="password" id="password" name="password" value=""><s></s>             <br><br>
            </h2>

                <button type="submit" class="btn">Save</button>
        </div>
    </div>
    </form>

	<form action="./profil.php" method="POST" enctype="multipart/form-data">
        <div class="image">
            <div class="title">Picture : <br>
            </div>

                <div class="inputBox">
                    <button type="button" id="button" onclick="image_switch()" class="bouton">Local file ?</button>
                    <div id="image-button">
                        <input type="url" id="file" name="file" value="">
                    </div>
                </div>
                <img src="<?php echo $imgGet ?>" id="pp">
                <button type="submit" class="bouton">Save</button>
        </div>
    </form>


    <?php include "../html/footer.html" ?>
    </body>    
</html>

<?php
// Désactiver l'affichage des erreurs
error_reporting(0);
ini_set('display_errors', 0);
ini_set('file_uploads', 'On');
ini_set('upload_max_filesize', '5M');
ini_set('post_max_size', '5M');
 
include "./db.php";

if( isset($_FILES['file']) ) {
    echo $_FILES["file"]["error"];
	$repo = '../resources/images/compte';
	$leFichierInit = $_FILES['file']['name'];
	$leFichier = $_FILES['file']['tmp_name'];
	$destFichier = $repo.'/'.substr(str_replace(' ', '_', $leFichierInit), 0, strlen($leFichierInit));
	move_uploaded_file( $leFichier,$destFichier );
    $image_profil = $destFichier;
$mysql_query1 = "UPDATE compte SET chemin_image='".$image_profil."' WHERE token='".$_SESSION['token']."';";
}
else {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $nom = htmlspecialchars($_POST['last_name']);
  $prenom = htmlspecialchars($_POST['name']);
  $date_naissance = htmlspecialchars($_POST['date']);
  if ( isset($_POST['mot_de_passe'])) 
  $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);
  else
  $mot_de_passe = $pwdGet;
  if ( isset($_POST['file'])) 
  $image_profil = htmlspecialchars($_POST['file']);
  else
  $image_profil = $imgGet;


 // email | nom   | prenom | date_naissance | password           | chemin_image | token  | timestamp
$mysql_query1 = "UPDATE compte SET nom='".$nom."', prenom='".$prenom."', date_naissance=STR_TO_DATE('".$date_naissance."', '%Y-%m-%d'), password='".$mot_de_passe."',chemin_image='".$image_profil."' WHERE token='".$_SESSION['token']."';";
}
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// nettoyage
$query1 = $dbCnx->prepare($mysql_query1);

try {
	//execution
	$query1->execute();
} catch (Exception $e) {
	echo "Une exception a été levée : " . $e->getMessage();
	echo '<div class="error">Adresse mail déjà utilisée</div>';
	$bugflag = 1;
}

### save
$nomFichier = '../sql/addon.sql';
$mysql_query1 = $mysql_query1."\n";
$file = fopen($nomFichier, 'a');
fwrite($file, $mysql_query1);
fclose($file);
header("Location: ./profil.php");
exit;
}

?>