FROM php:8.2-apache

RUN docker-php-ext-install mysqli
RUN a2enmod rewrite

COPY . /var/www/html/
COPY ./api/.htaccess /var/www/html/.htaccess
RUN chown -R www-data:www-data /var/www/html
