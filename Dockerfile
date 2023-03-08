FROM php:fpm as core-php 

RUN apt update

RUN apt install -y curl
RUN apt install -y libcurl4-openssl-dev
RUN apt install -y libssl-dev
RUN apt install -y libzip-dev
RUN apt install -y libjpeg-dev
RUN apt install -y libpng-dev
RUN apt install -y libfreetype6-dev
RUN apt install -y libxml2-dev
RUN apt install -y libonig-dev
RUN apt install -y libexif-dev

RUN docker-php-ext-install -j$(nproc) curl
RUN docker-php-ext-install -j$(nproc) mysqli
RUN docker-php-ext-install -j$(nproc) exif
RUN docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install -j$(nproc) mbstring
RUN docker-php-ext-install -j$(nproc) pcntl
RUN docker-php-ext-install -j$(nproc) pdo
RUN docker-php-ext-install -j$(nproc) pdo_mysql
RUN docker-php-ext-install -j$(nproc) soap
RUN docker-php-ext-install -j$(nproc) sockets
RUN docker-php-ext-install -j$(nproc) xml
RUN docker-php-ext-install -j$(nproc) zip

RUN apt install -y libicu-dev
RUN docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-install -j$(nproc) opcache
RUN pecl install apcu
RUN docker-php-ext-enable apcu

RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN apt install -y unzip


FROM bitnami/symfony as sv-symfony

WORKDIR /
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN apt update && apt install -y curl build-essential git
RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | bash
ENV PATH "$PATH:/root/.symfony/bin"

RUN apt install -y symfony-cli
RUN git config --global user.email "you@example.com"
RUN git config --global user.name "Your Name"
WORKDIR /var/www/html
CMD \
chmod -R 777 /opt/bitnami/php/var/run &&\
cd symfony &&\
#composer run-script auto-scripts &&\
rm -rf .git && chmod -R 777 . && \
composer install &&\
symfony serve 
