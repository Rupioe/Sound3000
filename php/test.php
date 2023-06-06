<!DOCTYPE html>
<html>
  <head>
    <title>Titre du document</title>
    <link href="../css/pop-up.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
  <a href="#" id="myLink">Ouvrir la popup</a>

<div id="myPopup" class="popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    <a href="lien1.html">Lien 1</a>
    <a href="lien2.html">Lien 2</a>
    <a href="#" id="myLink3">Lien 3</a>
  </div>
</div>

<div id="myPopup3" class="popup">
  <span class="close">&times;</span>
  <div class="popup-content">
    Contenu de la popup 3
  </div>
</div>

<script src="../js/pop-up.js" defer></script>
  </body>
</html>