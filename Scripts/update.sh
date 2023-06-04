#!/bin/bash
# Old updating script in order to keep different constants.php than github ones
cat ./.chat
git -C /var/www/html/sound3000/ config pull.rebase false # pour adopter le comportement de merge
git -C /var/www/html/sound3000/ stash save "Nom_de_la_sauvegarde"
git -C /var/www/html/sound3000/ pull origin main
git -C /var/www/html/sound3000/ stash pop
