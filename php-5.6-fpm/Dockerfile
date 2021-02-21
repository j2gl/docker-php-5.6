FROM php:5.6-fpm-alpine

ARG COMPOSER_VERSION=1.6.3

RUN apk add -U --no-cache curl icu-dev libpng-dev libmcrypt-dev libxml2-dev postgresql-dev wget
        
RUN docker-php-ext-install -j$(nproc) \
        bcmath exif gd iconv intl \
        mbstring mcrypt mysql mysqli opcache \
        pdo_mysql pdo_pgsql pgsql soap zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=${COMPOSER_VERSION} \
    && composer global require "hirak/prestissimo:0.3.7"

RUN rm -rf /var/cache/apk/* 

ADD my-php.ini /usr/local/etc/php/php.ini

EXPOSE 22 9000 

WORKDIR /php-scripts
VOLUME /php-scripts
