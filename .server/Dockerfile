FROM php:8.1-apache
ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get install -y libpng-dev \
    libzip-dev \
    zlib1g-dev \
    libonig-dev \
    libxml2-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install mysqli zip pdo pdo_mysql soap mbstring gd intl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN a2enmod rewrite
WORKDIR /var/www/html
CMD ["apache2-foreground"]