FROM php:7.2-fpm

LABEL  maintainer "MasanoriIwakura"

RUN apt-get update && \
    apt-get install -y git && \
    pecl install xdebug && \
    rm -rf /var/lib/apt/lists/*

WORKDIR /var/www