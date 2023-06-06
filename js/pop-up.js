// Obtenir la référence du lien et de la popup
var link = document.getElementById("myLink");
var popup = document.getElementById("myPopup");

// Ouvrir la popup lors du clic sur le lien
link.addEventListener("click", function(event) {
  event.preventDefault(); // Empêche la redirection par défaut du lien
  popup.style.display = "block";
});

// Fermer la popup lors du clic sur la croix
var close = document.getElementsByClassName("close")[0];
close.addEventListener("click", function() {
  popup.style.display = "none";
});

// Obtenir la référence du lien 3 et de la popup 3
var link3 = document.getElementById("myLink3");
var popup3 = document.getElementById("myPopup3");

// Ouvrir la popup 3 lors du clic sur le lien 3
link3.addEventListener("click", function(event) {
  event.preventDefault();
  popup3.style.display = "block";
});

// Fermer la popup 3 lors du clic sur la croix
var close3 = popup3.getElementsByClassName("close")[0];
close3.addEventListener("click", function() {
  popup3.style.display = "none";
});

// Fermer la popup 3 lorsque l'utilisateur clique en dehors de celle-ci
window.addEventListener("click", function(event) {
  if (event.target == popup3) {
    popup3.style.display = "none";
  }
});