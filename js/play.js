/*const collectionFavorite = document.getElementsByClassName('play-music');*/
const collectionFavorite = document.getElementsById('mainImage');

console.log(collectionFavorite);

Array.from(collectionFavorite).forEach(function(item,i){
    item.addEventListener("click", function(event){
        event.preventDefault();
        this.classList.toggle("play");

    })


})


    function swapImage() {
      var mainImage = document.getElementById("mainImage");
      
      // Vérifie la source actuelle de l'image
      if (mainImage.src.includes("../html/image/play.png")) {
        mainImage.src = "../html/image/pause.png";
      } else {
        mainImage.src = "../html/image/play.png";
      }
    }