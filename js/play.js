// --------------------------- AUDIO

const audio = document.getElementById("myAudio");

function audioPlay(source){
audio.currentTime = 0;
audio.src = source;
audio.pause();
audio.load();
audio.play();

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
  if(!donotclean){
  clickFooter();
  donotclean=1;
  }
//document.getElementsByClassName('play-music')[0].classList.toggle("play");
  
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
// Appel de la fonction pour mettre à jour les éléments



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



/*pour ceux qui ne sont pas footer*/
const play2 = document.getElementsByClassName('play-music2')[0];
var isPlaying2 = false;

play2.addEventListener("click", function(event) {
  event.preventDefault();
  this.classList.toggle("play");
  clickFooter();
  
  if (isPlaying2) {
    play2.style.backgroundImage = 'url("../html/image/play.png")';
    isPlaying2 = false;
  } else {
    play2.style.backgroundImage = 'url("../html/image/pause.png")';
    isPlaying2 = true;
  }
});
