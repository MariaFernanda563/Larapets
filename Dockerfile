FROM php:8.2-fpm

# Instalar dependencias necesarias para GD
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    unzip

# Habilitar extensiones de PHP (incluyendo GD)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install gd pdo pdo_mysql zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copiar tu proyecto
WORKDIR /var/www/html
COPY . .

RUN composer install --optimize-autoloader --no-dev

CMD ["php-fpm"]
