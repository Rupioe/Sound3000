# Sound3000
Audio player with favorites, playlists, research and a lot more

### Dependencies :
git
mariadb
apache2
php

### To install :
Il faut que resources/images/compte soit en 777
Veillez à avoir lancé et activé le virtual host, à avoir démarré les démons mariadb et apache. (+ réglages liaison apache-php si besoin)
```sh
$git clone https://github.com/Rupioe/Sound3000/tree/main
$cd Sound 3000
#mysql -u root -e "source sql/init.sql"
 ```

### Arborescence :
```sh
./
|-- LICENSE
|-- README.md
|-- Scripts
|   |-- add.sh
|   |-- addon.sql
|   `-- update.sh
|-- config
|   `-- sound3000.conf
|-- css
|   `-- base.css
|-- html
|   |-- history.html
|   `-- index.html
|-- index.html
|-- js
|   `-- ajax.js
|-- php
|   |-- constants.php
|   |-- database.php
|   `-- request.php
|-- ressources  		# contient les ressources stockées loclement par l'utilisateur (upload de photo de profil)
|   |-- images
|   |   |-- album
|   |   |-- compte
|   |   `-- morceau
|   `-- sounds
|-- sql
|   |-- bdd3000.sql
|   `-- init.sql
|-- test.html
`-- test.php
```

