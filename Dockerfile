# Utiliza la imagen oficial de PHP con Apache
FROM php:8.0-apache

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia todos los archivos de tu proyecto Laravel al contenedor
COPY . .

# Instala las dependencias necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip pdo pdo_mysql

