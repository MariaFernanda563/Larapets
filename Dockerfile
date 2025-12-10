# -----------------------------
# Etapa 1: Imagen base con PHP
# -----------------------------
FROM php:8.2-fpm AS php-base

RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libwebp-dev \
    git \
    unzip

# Instalar extensiones
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp
RUN docker-php-ext-install pdo pdo_mysql zip gd

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

# -----------------------------
# Etapa 2: Instalación de Node para Vite
# -----------------------------
FROM node:18 AS node-build

WORKDIR /app
COPY . .
RUN npm install
RUN npm run build

# -----------------------------
# Etapa 3: Imagen final con Nginx + PHP
# -----------------------------
FROM nginx:alpine

COPY --from=php-base /var/www/html /var/www/html
COPY --from=node-build /app/public/build /var/www/html/public/build

# Configuración NGINX
COPY ./deploy/nginx.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
