#!/bin/bash
chmod 777 resources/images/compte
chmod +w sql/addon.sql
if lsb_release -d | grep -q "Debian"; then
	apt update
	apt install mariadb-server php php-mysql apache2
	cp config/php.ini /etc/php/"$(ls -l | sort | grep d  | sed -n '$s/.* \([^ ]*\)$/\1/p')"/apache2/
	cp config/sound3000.conf /etc/apache2/sites-enabled/
	systemctl enable apache2
	systemctl enable mariadb
	systemctl start apache2
	systemctl start mariadb
	systemctl restart apache2
	systemctl restart mariadb
	mysql -u root -e "source sql/init.sql"
fi

