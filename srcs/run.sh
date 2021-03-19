#!/bin/bash

service nginx start

#Generate ssl key
openssl req -newkey rsa:4096 -days 365 -nodes -x509 -subj "/C=KR/ST=Seoul/L=Seoul/O=42Seoul/OU=Gun/CN=localhost" -keyout localhost.dev.key -out localhost.dev.crt
mv localhost.dev.crt etc/ssl/certs/
mv localhost.dev.key etc/ssl/private/
cat default > etc/nginx/sites-available/default
chmod 600 etc/ssl/certs/localhost.dev.crt etc/ssl/private/localhost.dev.key

#phpmyAdmin install
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz
tar -xvf phpMyAdmin-5.0.2-all-languages.tar.gz
mv phpMyAdmin-5.0.2-all-languages phpmyadmin
mv phpmyadmin /var/www/html/

#Wordpress install
wget https://wordpress.org/latest.tar.gz
tar -xvf latest.tar.gz
mv wordpress/ var/www/html/
chown -R www-data:www-data /var/www/html/wordpress

#phpmyAdmin & Wordpress setting
cp -rp var/www/html/phpmyadmin/config.sample.inc.php var/www/html/phpmyadmin/config.inc.php
cp var/www/html/wordpress/wp-config-sample.php var/www/html/wordpress/wp-config.php
cat config.inc.php > var/www/html/phpmyadmin/config.inc.php
cat wp-config.php > var/www/html/wordpress/wp-config.php
chown -R www-data:www-data /var/www/html/phpmyadmin

#folder create
mkdir /var/www/html/phpmyadmin/tmp && \
chmod 777 /var/www/html/phpmyadmin/tmp

#Remove unnecessary files
rm phpMyAdmin-5.0.2-all-languages.tar.gz latest.tar.gz default config.inc.php wp-config.php

#service reload & start
service nginx reload
service nginx restart
service mysql start
service php7.3-fpm start

#Database setting
echo "CREATE DATABASE IF NOT EXISTS wordpress;" \
	| mysql -u root --skip-password
echo "CREATE USER IF NOT EXISTS 'yyoon'@'localhost' IDENTIFIED BY '147369as';" \
	| mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON *.* TO 'yyoon'@'localhost' WITH GRANT OPTION;" \
	| mysql -u root --skip-password

bash
