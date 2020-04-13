FROM php:7.4-fpm

#if develop mode
RUN apt-get update; apt-get install -y vim telnet git iputils-ping net-tools iptables libcap-dev iproute2 tcpdump
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
#end if develop mode

COPY php.ini /usr/local/etc/php/