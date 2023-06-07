// --------------------------- AUDIO

// dans source on a chemin_musique//titre//chemin_image//pseudo//email

const audio = document.getElementById("myAudio");
const imgID = document.getElementById("poster_master_play");
const hcinq = document.getElementById("titre");
const duree = document.getElementById("currentEnd");

function audioPlay(source){
audio.currentTime = 0;
var tableau = source.split("//");
audio.src = tableau[0];
audio.pause();
audio.load();
audio.play();
}

function imageSet(source){
var tableau = source.split("//");
console.log(tableau);
imgID.src = tableau[2];
}
function titreSet(source){
var tableau = source.split("//");
hcinq.innerHTML = tableau[3]+'<div class="subtitle">'+tableau[1]+'</div>';
}

function dureeSet(source){
var tableau = source.split("//");
duree.innerHTML = Math.floor(tableau[4]/60)+':'+tableau[4]%60;
}

//if (audio.paused) {
//} else {
//}




// --------------------------- PLAY/PAUSE

var elements = document.querySelectorAll('.countPlay');
var count = elements.length;
var inc = 1;
console.log('Nombre d\'éléments avec la classe "maClasse": ' + count);

var isPlaying3 = [];
for (var i = 0; i < count; i++) {
  var value = false;
  isPlaying3.push(value);
}

var donotclean = 0;
for (var i = 0; i <count; i++){
document.getElementsByClassName('playkk'+inc)[0].addEventListener("click", function(event) {
  event.preventDefault();
  cleanElements();
  this.classList.toggle("play");
    if (this.classList.contains('play')) 
  audioPlay(this.getAttribute("href"));
  imageSet(this.getAttribute("href"));
  titreSet(this.getAttribute("href"));
  dureeSet(this.getAttribute("href"));
  if(!donotclean){
  clickFooter();
  donotclean=1;
  }
  
  if (isPlaying3[i]) {
    isPlaying3[i] = false;
updateElements();
  } else {
    isPlaying3[i] = true;
updateElements();
  }
});
inc = inc +1;
}

function clickFooter(){
var link = document.getElementById('play-click');
link.click();
}


function updateElements() {
  var elements = document.querySelectorAll('.countPlay');
  
  for (var i = 0; i < elements.length; i++) {
    var element = elements[i];
    
    if (element.classList.contains('play')) {
    element.innerHTML = '<img src="../html/image/pause.png">';
    }
    else{
    element.innerHTML = '<img src="../html/image/play.png">';
    }
  }
}

function cleanElements() {
  var elements = document.querySelectorAll('.countPlay');
  
  for (var i = 0; i < elements.length; i++) {
    var element = elements[i];
    
    if (element.classList.contains('play')) {
      element.classList.toggle("play");
    }
  }
}



// ---------------------------------- FOOTER 

/*ajoute la class play, et change l'image en pause, et inversement*/
const play = document.getElementsByClassName('play-music')[0];
var isPlaying = false;
var firstplay = 0;

play.addEventListener("click", function(event) {
  event.preventDefault();
  this.classList.toggle("play");
  
  if (isPlaying) {
    play.style.backgroundImage = 'url("../html/image/play.png")';
    isPlaying = false;
    audio.play();
  } else {
    play.style.backgroundImage = 'url("../html/image/pause.png")';
    isPlaying = true;
    donotclean = 0;
    if(firstplay)
    audio.pause();
    firstplay = 1;
  }
});



// ---------------------------------- MUSIC 
const play2 = document.getElementsByClassName('play-music2')[0];
var isPlaying2 = false;

play2.addEventListener("click", function(event) {
  event.preventDefault();
  this.classList.toggle("play");
  clickFooter();
  
  if (isPlaying2) {
    play2.style.backgroundImage = 'url("../html/image/play.png")';
    isPlaying2 = false;
    audio.pause();
  } else {
  audioPlay(this.getAttribute("href"));
  imageSet(this.getAttribute("href"));
  titreSet(this.getAttribute("href"));
  dureeSet(this.getAttribute("href"));
    play2.style.backgroundImage = 'url("../html/image/pause.png")';
    isPlaying2 = true;
  }
});
