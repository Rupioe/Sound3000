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

            <div class="inputBox">
                <input type="email" id="email" name="email" class="input" required>
                <p class="inputName">E-MAIL</p>
            </div>
            <!-- <p class="errorMessage">exemple d'erreur</p> -->

            <div class="inputBox">
                <input type="password" id="mot_de_passe" name="mot_de_passe" class="input" required>
                <p class="inputName">PASSWORD</p>
            </div>
            <p class="errorMessage"></p>

            <button class="btn">Connect</button>

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

?>