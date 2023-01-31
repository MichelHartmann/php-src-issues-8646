FROM php:8.0.27-fpm-alpine
#FROM php:8.1.14-fpm-alpine
COPY ./src /var/www/html

RUN cd /var/www/html && \
    mkdir classes && \
    php generate_classes.php

WORKDIR /var/www/html
