/*const collectionFavorite = document.getElementsByClassName('play-music');

console.log(collectionFavorite);

Array.from(collectionFavorite).forEach(function(item,i){
    item.addEventListener("click", function(event){
        event.preventDefault();
        this.classList.toggle("play");

    })


})*/


/*const play = document.getElementsByClassName('play-music');
item.play("click", function(event){
    event.preventDefault();
    this.classList.toggle("play");

    /*var mainImage = document.getElementByClassName("play-music");
    if (mainImage.src.includes("../html/image/play.png")) {
        mainImage.src = "../html/image/pause.png";
      } else {
        mainImage.src = "../html/image/play.png";
      }*/

//})


const play = document.getElementsByClassName('play-music')[0];
let isPlaying = false;

play.addEventListener("click", function(event) {
  event.preventDefault();
  this.classList.toggle("play");
  
  if (isPlaying) {
    play.style.backgroundImage = 'url("../html/image/play.png")';
    isPlaying = false;
  } else {
    play.style.backgroundImage = 'url("../html/image/pause.png")';
    isPlaying = true;
  }
});

/*pour ceux qui ne sont pas footer*/
const play2 = document.getElementsByClassName('play-music2')[0];
let isPlaying2 = false;

play2.addEventListener("click", function(event) {
  event.preventDefault();
  this.classList.toggle("play");
  
  if (isPlaying2) {
    play2.style.backgroundImage = 'url("../html/image/play.png")';
    isPlaying2 = false;
  } else {
    play2.style.backgroundImage = 'url("../html/image/pause.png")';
    isPlaying2 = true;
  }
});