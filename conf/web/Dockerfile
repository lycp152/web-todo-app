FROM php:8.1.2-apache

ENV LANG C.UTF-8
ENV COMPOSER_ALLOW_SUPERUSER 1

EXPOSE 5173

COPY php.ini /usr/local/etc/php/
COPY *.conf /etc/apache2/sites-enabled/

RUN curl -fsSL https://deb.nodesource.com/setup_19.x | bash -

RUN apt -y update \
    && apt -y upgrade \
    && apt -y install \
            git \
            libpq-dev \
            nodejs \
            unzip \
            zip

RUN apt -y install \
            zlib1g-dev  \
            libheif-dev \
            libjpeg-dev \
            libpng-dev \
            libfreetype6-dev \
            libjpeg62-turbo-dev \
            librsvg2-dev \
            libwebp-dev \
            libxpm-dev \
            libmagickwand-dev \
            libzip-dev

RUN pecl install imagick \
    && docker-php-ext-enable imagick

RUN docker-php-ext-install pdo_pgsql zip

RUN a2enmod rewrite

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html