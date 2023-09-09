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

# Configura Apache para que sirva tu aplicación Laravel
RUN a2enmod rewrite
COPY docker/apache-config.conf /etc/apache2/sites-available/000-default.conf

# Instala Composer (administrador de paquetes de PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala las dependencias de Composer
RUN composer install --no-interaction

# Genera la clave de aplicación de Laravel
RUN php artisan key:generate

# Expon el puerto 80 para Apache
EXPOSE 80

# Inicia el servidor web de Apache
CMD ["apache2-foreground"]
