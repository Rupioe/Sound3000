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
            <h2>
                Name : <input type="text" id="name" name="name" value="name"><s></s>          <br><br>
                Last Name : <input type="text" id="last_name" name="last_name" value="last name"><s></s>         <br><br>
                Date : <input type="date" id="date" name="date" value="xx/xx/xxxx"><s></s>              <br><br>
                Email : <input type="email" id="email" name="email" value="email@email.fr"><s></s>             <br><br>
            </h2>

        </div>
    </div>

</form>
        </div>

        <div class="image">
            <div class="title">Picture : <br></div>
            <div class="inputBox">
			    <button type="button" id="button" onclick="image_switch()" class="bouton">URL ?</button>
				<p for="image_profil" class="inputName">Profile Picture ?</p>
				<div id="image-button">
					<input type="file" id="image_profil" name="image_profil">
				</div>
            <img src="../resources/images/compte/compte.png">
        </div>
    </div>







    <?php include "../html/footer.html" ?>
    </body>    
</html>

<?php



UPDATE nom_table
SET colonne1 = nouvelle_valeur1, colonne2 = nouvelle_valeur2
WHERE condition;





?>