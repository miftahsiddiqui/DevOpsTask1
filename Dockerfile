FROM php:8.0.8-apache

#Install git and MySQL extension for PHP

RUN apt-get update && apt-get install -y git

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite

COPY src /var/www/html/
