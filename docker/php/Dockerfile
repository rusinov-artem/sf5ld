FROM php:8.0-fpm AS php_fpm
ARG XDEBUG
ENV XDEBUG $XDEBUG

COPY build.php /usr/bin/build.php
RUN php /usr/bin/build.php
COPY php.ini /usr/local/etc/php/conf.d/local.ini

WORKDIR /var/www/sf5ld