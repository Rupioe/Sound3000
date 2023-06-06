/*const collectionFavorite = document.getElementsByClassName('play-music');

console.log(collectionFavorite);

Array.from(collectionFavorite).forEach(function(item,i){
    item.addEventListener("click", function(event){
        event.preventDefault();
        this.classList.toggle("play");

    })


})*/


const play = document.getElementsByClassName('play-music');
item.play("click", function(event){
    event.preventDefault();
    this.classList.toggle("play");

    var mainImage = document.getElementByClassName("play-music");
    if (mainImage.src.includes("../html/image/play.png")) {
        mainImage.src = "../html/image/pause.png";
      } else {
        mainImage.src = "../html/image/play.png";
      }

})
