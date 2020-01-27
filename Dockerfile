FROM composer:latest AS composer

FROM php:fpm-alpine

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY --from=composer /usr/bin/composer /usr/bin/composer
