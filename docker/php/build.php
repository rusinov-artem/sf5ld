<?php

if(getenv('XDEBUG')){
    echo "Installing development utils\n";
    `apt-get update; apt-get install -y vim telnet git iputils-ping net-tools`;
    echo "Installing xdebug\n";
    `pecl install xdebug`;
    `docker-php-ext-install sockets`;
    echo "turn on  xdebug\n";
    `docker-php-ext-enable xdebug`;
}

echo "build script finished\n";