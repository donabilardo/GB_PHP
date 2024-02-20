FROM php:8.2-fpm

COPY ./php.ini /usr/local/etc/php/conf.d/php-custom.ini
COPY ./www.myconf /usr/local/etc/php-fpm.d/www.myconf

WORKDIR /data

VOLUME /data

CMD ["php-fpm"]