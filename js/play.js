const collectionFavorite = document.getElementsByClassName('play-music');

console.log(collectionFavorite);

Array.from(collectionFavorite).forEach(function(item,i){
    item.addEventListener("click", function(event){
        event.preventDefault();
        this.classList.toggle("play");

    })


})
