<!DOCTYPE html>
<html>
    <head>
        <title>Connection</title>
        <meta charset="utf-8">
        <link href="../html/css/connection.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <section id="main">
            <div class="titleBox">
                <h1>Connection to</h1>
                <h2>Sound 3000</h2>
            </div>

			<form action="./connection.php" method="POST">
            <div class="inputBox">
                <input type="email" id="email" name="email" class="input" required>
                <p class="inputName">E-MAIL</p>
            </div>

            <div class="inputBox">
                <input type="password" id="mot_de_passe" name="mot_de_passe" class="input" required>
                <p class="inputName">PASSWORD</p>
            </div>

            <button type="submit" class="btn">Connect</button>
</form>

            <div class="switchPage">
                <p>You don't have account ?</p>
                <a href="./creer.php">sign up</a>
            </div>
        </section>
    </body>
</html>

<?php
/*
$motDePasse = "monMotDePasse";
$motDePasseHash = "$2y$10$u2nlDQoZdASaOePnR4QRYuWmd9XKcW2IuLr7mEDTKkl.03K.DRrU2";

// Vérification du mot de passe
if (password_verify($motDePasse, $motDePasseHash)) {
    echo "Mot de passe valide";
} else {
    echo "Mot de passe invalide";
}

*/

// Désactiver l'affichage des erreurs
error_reporting(0);
ini_set('display_errors', 0);
 
include "./db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['mot_de_passe']);

    try
    {
        $request = 'SELECT password FROM compte WHERE email = "zizi@kkk.fr"';
        $statement = $dbCnx->prepare($request);
        $statement->execute();
        $result = $statement->fetchAll();
    }
    catch (PDOException $exception)
    {
        error_log('Request error: '.$exception->getMessage());
    }
    foreach ( $result as $ligne) {
	    if (password_verify($password,$ligne['password'])){

            session_start();

            // mdp valide
            $token = genererToken();

            // Stockage du token dans la session ou dans une base de données associée à l'utilisateur
            $_SESSION['token'] = $token;
        
            // Redirection vers la page protégée
            header('Location: ../html/index.html');

        }
        else {
            // mdp invalide
            echo "Mauvais identifiants !";
        }
    }
}

?>