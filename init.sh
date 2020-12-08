#!/bin/bash
cd docker
docker-compose -f docker-compose.yml up -d;
docker exec  php_fpm bash -c  "rm /var/www/sf5ld/app/var -rf"
docker exec  php_fpm bash -c  "mkdir /var/www/sf5ld/app/var"
docker exec  php_fpm bash -c  "chown www-data:www-data /var/www/sf5ld/app/var"
docker exec  php_fpm bash -c  "php /var/www/sf5ld/sock.php /var/www/sf5ld/xdebug.sock"
docker exec  php_fpm bash -c  "chmod 766 /var/www/sf5ld/xdebug.sock"
