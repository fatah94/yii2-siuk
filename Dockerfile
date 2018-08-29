FROM php:7.0-apache

RUN apt-get update \
  && apt-get install -y libssl-dev unzip \
  && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN chown -R www-data:www-data /var/www/html
RUN a2enmod headers && a2enmod rewrite
